<?php
/*
 * Plugin Name : DeliveryPlus
 *
 * Copyright (C) 2016 BraTech Co., Ltd. All Rights Reserved.
 * http://www.bratech.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\DeliveryPlus\Event\WorkPlace;

use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;


class FrontShopping extends AbstractWorkPlace
{
    public function createTwig(TemplateEvent $event)
    {
        $app = $this->app;
        $parameters = $event->getParameters();
        $Order = $parameters['Order'];

        foreach($Order->getShippings() as $shipping){
            $deliveries = $app['eccube.deliveryplus.service.util']->getDeliveries($shipping);
            if(count($deliveries) == 0){
                $source = $event->getSource();

                if(preg_match('/<(.*)\s*id="summary_box__confirm_button/',$source, $result)){
                    $start_tag = $result[0];
                    $tag_name = trim($result[1]);
                    $end_tag = '</' . $tag_name . '>';
                    $start_index = strpos($source, $start_tag);
                    $end_index = strpos($source, $end_tag, $start_index);
                    $search = substr($source, $start_index, ($end_index - $start_index) + strlen($end_tag));
                    $replace = "<p>配送方法が選択できないため購入出来ません</p>";
                    $source = str_replace($search, $replace, $source);
                }

                $event->setSource($source);
                break;
            }
        }
    }

    public function save(EventArgs $event)
    {
        $app = $this->app;
        $request = $app['request'];
        $Order = $event->getArgument('Order');
        $builder = $event->getArgument('builder');
        $session = $app['session'];

        if($session->has('delivplus')){
            $checkFlg = $session->get('delivplus');
        }else{
            $checkFlg = array();
        }
        if(!isset($checkFlg[$Order->getPreOrderId()])){
            $Shippings = $Order->getShippings();
            $delives = $app['eccube.service.shopping']->getDeliveriesOrder($Order);
            $subtotal = $Order->getSubtotal();

            foreach($Shippings as $shipping){
                $deliveries = $app['eccube.deliveryplus.service.util']->getDeliveries($shipping);
                if(count($deliveries) > 0){
                    $Delivery = $deliveries[0];
                    $app['eccube.service.shopping']->setShippingDeliveryFee($shipping, $Delivery);
                    $app['orm.em']->persist($shipping);
                    $app['orm.em']->flush();
                    $payments = $app['eccube.service.shopping']->getFormPayments($deliveries, $Order);
                    $payments = $app['eccube.service.shopping']->getPayments($payments, $subtotal);
                    if (count($payments) > 0) {
                        $payment = $payments[0];
                        $Order->setPayment($payment);
                        $Order->setPaymentMethod($payment->getMethod());
                        $Order->setCharge($payment->getCharge());
                    } else {
                        $Order->setCharge(0);
                    }
                }else{
                    $shipping->setDeliveryFee(null);
                    $shipping->setDelivery(null);
                    $shipping->setShippingDeliveryFee(0);
                    $shipping->setShippingDeliveryName(null);
                    $payments = array();
                    $payment = 0;
                    $Order->setCharge(0);
                }
                $builder
                    ->remove('payment')
                    ->add('payment', 'entity', array(
                        'class' => 'Eccube\Entity\Payment',
                        'property' => 'method',
                        'choices' => $payments,
                        'data' => $payment,
                        'expanded' => true,
                        'constraints' => array(
                            new Assert\NotBlank(),
                    ),
                ));
            }
            $Order->setDeliveryFeeTotal($app['eccube.service.shopping']->getShippingDeliveryFeeTotal($Order->getShippings()));
            $app['eccube.service.shopping']->setDeliveryFreeAmount($Order);
            $app['eccube.service.shopping']->setDeliveryFreeQuantity($Order);
            $total = $Order->getSubTotal() + $Order->getCharge() + $Order->getDeliveryFeeTotal();
            $Order->setTotal($total);
            $Order->setPaymentTotal($total);
            $app['orm.em']->persist($Order);
            $app['orm.em']->flush();
            $checkFlg[$Order->getPreOrderId()] = true;
            $app['session']->set('delivplus', $checkFlg);
        }
    }

    public function multiple($event)
    {
        $app = $this->app;

        $Order = $app['eccube.service.shopping']->getOrder($app['config']['order_processing']);
        if($Order instanceof \Eccube\Entity\Order){
            $deliveris = $app['eccube.service.shopping']->getDeliveriesOrder($Order);
            foreach ($Order->getShippings() as $Shipping) {
                if($Shipping->getDelivery() == null){
                    $Shipping->setDelivery($deliveris[0]);
                }
            }
        }
        $app['orm.em']->persist($Order);
        $app['orm.em']->flush();
    }

    public function clear(EventArgs $event)
    {
        $this->app['session']->set('delivplus',array());
    }
}
