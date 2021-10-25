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

namespace Plugin\DeliveryPlus\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ShippingItemExtension extends AbstractTypeExtension
{
    public $app;

    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $app = $this->app;
                     
        $builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use($app) {
                /** @var \Eccube\Entity\Shipping $data */
                $data = $event->getData();
                /** @var \Symfony\Component\Form\Form $form */
                $form = $event->getForm();

                // 配送業者
                // 商品種別に紐づく配送業者を取得
                $deliveries = $app['eccube.deliveryplus.service.util']->getDeliveries($data);

                $constraints = array(new Assert\NotBlank());
                $delivery = $data->getDelivery();
                $empty_value = false;
                if(count($deliveries) == 0){
                    $empty_value = '指定できる配送方法がありません';
                    $constraints = array();
                }

                $form
                    ->add('delivery', 'entity', array(
                        'class' => 'Eccube\Entity\Delivery',
                        'property' => 'name',
                        'choices' => $deliveries,
                        'empty_value' => $empty_value,
                        'data' => $delivery,
                        'constraints' => $constraints,
                    ));
            });
    }
 
    public function getExtendedType()
    {
        return 'shipping_item';
    }

}
