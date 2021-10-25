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


class FrontProductDetail extends AbstractWorkPlace
{
    public function createTwig(TemplateEvent $event)
    {
        $app = $this->app;
        $parameters = $event->getParameters();
        $Product = $parameters['Product'];
        
        $source = $event->getSource();
        
        if(preg_match('/<!\-\-\s*product_weight_size\s*\-\->/',$source, $result)){
            $search = $result[0];
            $snipet = '';
            if(file_exists($app['config']['template_realdir']. '/Product/product_weight_size.twig')){
                $snipet = file_get_contents($app['config']['template_realdir']. '/Product/product_weight_size.twig');
            }
            if(strlen($snipet) == 0){
                $snipet = file_get_contents($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/default/Product/product_weight_size.twig');
            }
            $replace = $snipet;
            $source = str_replace($search, $replace, $source);
        }

        $event->setSource($source);
        
        $arrWeight = array();
        $arrSize = array();
        foreach($Product->getProductClasses() as $ProductClass) {
            $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
            if($plgProductClass){
                $weight = $plgProductClass->getWeight();
                if(!is_null($weight)){
                    $arrWeight[$ProductClass->getId()] = $weight;
                }
                $size = $plgProductClass->getSize();
                if(!is_null($size)){
                    $arrSize[$ProductClass->getId()] = $size;
                }
            }
        }   

        $Weight = array();
        if(!empty($arrWeight)){
            $Weight['max'] = max($arrWeight);
            $Weight['min'] = min($arrWeight);
        }
        $Size = array();
        if(!empty($arrSize)){
            $Size['max'] = max($arrSize);
            $Size['min'] = min($arrSize);
        }

        $parameters['Weight'] = $Weight;
        $parameters['Size'] = $Size;
        $event->setParameters($parameters);
    }
}
