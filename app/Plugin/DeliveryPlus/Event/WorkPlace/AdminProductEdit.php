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


class AdminProductEdit extends AbstractWorkPlace
{
    public function createTwig(TemplateEvent $event)
    {
        $app = $this->app;
        $parameters = $event->getParameters();
        $Product = $parameters['Product'];

        if(!$parameters['has_class']){
            $ProductClasses = $Product->getProductClasses();
            $ProductClass = $ProductClasses[0];
            $plgForm = $app['form.factory']->createBuilder('admin_product_class', $ProductClass)->getForm();

            $source = $event->getSource();

            if(preg_match('/<.*id="detail_box__stock".*>\n/',$source, $result)){
                $search = $result[0];
                $snipet = file_get_contents($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/admin/Product/product.twig');
                $replace = $snipet . $search;
                $source = str_replace($search, $replace, $source);
            }

            $event->setSource($source);
            $parameters['plgForm'] = $plgForm->createView();
            $event->setParameters($parameters);
        }
    }

    public function save(EventArgs $event)
    {
        $app = $this->app;
        $request = $app['request'];
        $Product = $event->getArgument('Product');
        $form = $event->getArgument('form');

        $has_class = $Product->hasProductClass();
        if(!$has_class){
            $ProductClass = $form['class']->getData();
            $plgForm = $app['form.factory']->createBuilder('admin_product_class')->getForm();
            $plgForm->handleRequest($request);

            $weight = $plgForm->get('plg_deliveryplus_weight')->getData();
            $size = $plgForm->get('plg_deliveryplus_size')->getData();

            $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
            if(!$plgProductClass){
                $plgProductClass = new \Plugin\DeliveryPlus\Entity\ProductClass();
                $plgProductClass->setProductClassId($ProductClass->getId());
            }

            $plgProductClass->setWeight($weight);
            $plgProductClass->setSize($size);

            $app['orm.em']->persist($plgProductClass);
            $app['orm.em']->flush();
        }
    }

    public function copy(EventArgs $event)
    {
        $app = $this->app;

        $Product = $event->getArgument('Product');
        $CopyProduct = $event->getArgument('CopyProduct');

        $orgProductClasses = $Product->getProductClasses();

        foreach ($orgProductClasses as $ProductClass) {
            $CopyProductClass = $app['eccube.repository.product_class']->findOneBy(array('Product'=> $CopyProduct, 'ClassCategory1' => $ProductClass->getClassCategory1(), 'ClassCategory2' => $ProductClass->getClassCategory2()));
            $orgPlgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
            if($CopyProductClass){
                $plgProductClass = new \Plugin\DeliveryPlus\Entity\ProductClass();
                $plgProductClass->setProductClassId($CopyProductClass->getId());
                if($orgPlgProductClass){
                    $plgProductClass->setWeight($orgPlgProductClass->getWeight());
                    $plgProductClass->setSize($orgPlgProductClass->getSize());
                }

                $app['orm.em']->persist($plgProductClass);
            }
        }
        $app['orm.em']->flush();
    }
}
