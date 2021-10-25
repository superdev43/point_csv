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


class AdminDeliveryEdit extends AbstractWorkPlace
{
    public function createTwig(TemplateEvent $event)
    {
        $app = $this->app;
        $parameters = $event->getParameters();

        $source = $event->getSource();

        if(preg_match('/<.*id=\"delivery_times_box\".*>\n/',$source, $result)){
            $search = $result[0];
            $snipet = file_get_contents($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/admin/Setting/Shop/delivery_condition.twig');
            $replace = $snipet . $search;
            $source = str_replace($search, $replace, $source);
        }

        $event->setSource($source);
    }

    public function save(EventArgs $event)
    {
        $app = $this->app;

        $Delivery = $event->getArgument('Delivery');
        $form = $event->getArgument('form');

        $plgDelivery = $app['eccube.deliveryplus.repository.delivery']->findOneBy(array('delivery_id' => $Delivery->getId()));
        if(!$plgDelivery){
            $plgDelivery = new \Plugin\DeliveryPlus\Entity\Delivery();
            $plgDelivery->setDeliveryId($Delivery->getId());
        }

        $plgDelivery->setWeightMin($form->get('deliveryplus_weight_min')->getData());
        $plgDelivery->setWeightMax($form->get('deliveryplus_weight_max')->getData());
        $plgDelivery->setSizeMin($form->get('deliveryplus_size_min')->getData());
        $plgDelivery->setSizeMax($form->get('deliveryplus_size_max')->getData());
        $plgDelivery->setSubtotalMin($form->get('deliveryplus_subtotal_min')->getData());
        $plgDelivery->setSubtotalMax($form->get('deliveryplus_subtotal_max')->getData());

        $app['orm.em']->persist($plgDelivery);

        if($form->has('deliveryplus_cool_type')){
            $data = $form->get('deliveryplus_cool_type')->getData();

            // 登録済みの情報一旦削除
            $plgDeliveryCools = $app['eccube.deliveryplus.repository.delivery_cool']->findBy(array('delivery_id' => $Delivery->getId()));
            foreach($plgDeliveryCools as $plgDeliveryCool){
                $app['orm.em']->remove($plgDeliveryCool);
            }

            foreach($data as $value){
                $plgDeliveryCool = new \Plugin\DeliveryPlus\Entity\DeliveryCool();
                $plgDeliveryCool->setDeliveryId($Delivery->getId());
                $plgDeliveryCool->setType($value);
                $app['orm.em']->persist($plgDeliveryCool);
            }
        }

        $app['orm.em']->flush();
    }
}
