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


class AdminProductClass extends AbstractWorkPlace
{
    public function createTwig(TemplateEvent $event)
    {
        $app = $this->app;
        $parameters = $event->getParameters();
        $Product = $parameters['Product'];

        $source = $event->getSource();

        if(preg_match('/<.*id="result_box__header_delivery_date.*>\n/',$source, $result)){
            $search = $result[0];
            $snipet = file_get_contents($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/admin/Product/product_class_th.twig');
            $replace = $snipet . $search;
            $source = str_replace($search, $replace, $source);
        }

        if(preg_match('/<.*id="result_box__delivery_date.*>\n/',$source, $result)){
            $search = $result[0];
            $snipet = file_get_contents($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/admin/Product/product_class_td.twig');
            $replace = $snipet . $search;
            $source = str_replace($search, $replace, $source);
        }

        if(preg_match('/\{\%\sendblock\sjavascript\s\%\}/',$source, $result)){
            $search = $result[0];
            $snipet = file_get_contents($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/admin/Product/copy_js.twig');
            $replace = $snipet . $search;
            $source = str_replace($search, $replace, $source);
        }

        $event->setSource($source);
    }

    public function save(EventArgs $event)
    {
        $app = $this->app;
        $request = $app['request'];
        $Product = $event->getArgument('Product');
        $form = $event->getArgument('form');

        foreach ($form->get('product_classes') as $formData) {
            $pc = $formData->getData();

            if ($pc->getAdd()) {
                $ProductClass = $app['eccube.repository.product_class']->findOneBy(array(
                    'Product' => $pc->getProduct(),
                    'ClassCategory1' => $pc->getClassCategory1(),
                    'ClassCategory2' => $pc->getClassCategory2(),
                ));

                if($ProductClass){
                    $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
                    if(!$plgProductClass){
                        $plgProductClass = new \Plugin\DeliveryPlus\Entity\ProductClass();
                        $plgProductClass->setProductClassId($ProductClass->getId());
                    }

                    $weight = $formData->get('plg_deliveryplus_weight')->getData();
                    $size = $formData->get('plg_deliveryplus_size')->getData();
                    $plgProductClass->setWeight($weight);
                    $plgProductClass->setSize($size);

                    $app['orm.em']->persist($plgProductClass);
                    $app['orm.em']->flush();
                }
            }
        }
    }
}
