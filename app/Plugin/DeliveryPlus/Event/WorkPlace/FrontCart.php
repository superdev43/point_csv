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


class FrontCart extends AbstractWorkPlace
{
    public function createTwig(TemplateEvent $event)
    {
        $app = $this->app;
        $parameters = $event->getParameters();
        
        $source = $event->getSource();
        
        if(preg_match('/<!\-\-\s*cart_weight_size\s*\-\->/',$source, $result)){
            $search = $result[0];
            $snipet = '';
            if(file_exists($app['config']['template_realdir']. '/Cart/cart_weight_size.twig')){
                $snipet = file_get_contents($app['config']['template_realdir']. '/Cart/cart_weight_size.twig');
            }
            if(strlen($snipet) == 0){
                $snipet = file_get_contents($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/default/Cart/cart_weight_size.twig');
            }
            $replace = $snipet;
            $source = str_replace($search, $replace, $source);
        }

        $event->setSource($source);
        
        $Cart = $parameters['Cart'];
        $total_weight = 0;
        $total_size = 0;
        foreach($Cart->getCartItems() as $cartItem){
            $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $cartItem->getClassId()));
            if($plgProductClass){
                $weight = $plgProductClass->getWeight();
                if(!is_null($weight))$total_weight += $weight * $cartItem->getQuantity();
                $size = $plgProductClass->getSize();
                if(!is_null($size))$total_size += $size * $cartItem->getQuantity();
            }
        }
        $parameters['total_weight'] = $total_weight;
        $parameters['total_size'] = $total_size;
        $event->setParameters($parameters);
    }
}
