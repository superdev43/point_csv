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
use Eccube\Exception\CsvImportException;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;


class AdminProductImport extends AbstractWorkPlace
{
    public function getDescriptions(EventArgs $event)
    {
        $descriptions = $event->getArgument('descriptions');
        if(isset($descriptions['重さ']))$descriptions['重さ'] = '数値で設定';
        if(isset($descriptions['サイズ']))$descriptions['サイズ'] = '数値で設定';

        $event->setArgument('descriptions',$descriptions);
    }

    public function check(EventArgs $event)
    {
        $app = $this->app;
        $row = $event->getArgument('row');
        $data = $event->getArgument('data');
        $errors = $event->getArgument('errors');

        if(isset($row['重さ'])){
            if($row['重さ'] !== '' && !is_numeric($row['重さ'])){
                $e = new CsvImportException(($data->key() + 1) .'行目の重さは数値でご指定ください');
                $errors[] = $e;
            }
        }
        if(isset($row['サイズ'])){
            if($row['サイズ'] !== '' && !is_numeric($row['サイズ'])){
                $e = new CsvImportException(($data->key() + 1) .'行目のサイズは数値でご指定ください');
                $errors[] = $e;
            }
        }
        $event->setArgument('errors',$errors);
    }

    public function process(EventArgs $event)
    {
        $app = $this->app;
        $row = $event->getArgument('row');
        $data = $event->getArgument('data');
        $ProductClass = $event->getArgument('ProductClass');

        if(isset($row['重さ'])){
            $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
            if(is_null($plgProductClass)){
                $plgProductClass = new \Plugin\DeliveryPlus\Entity\ProductClass();
                $plgProductClass->setProductClassId($ProductClass->getId());
            }
            $plgProductClass->setWeight(intval($row['重さ']));
        }
        if(isset($row['サイズ'])){
            if(!isset($plgProductClass)){
                $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
            }
            if(is_null($plgProductClass)){
                $plgProductClass = new \Plugin\DeliveryPlus\Entity\ProductClass();
                $plgProductClass->setProductClassId($ProductClass->getId());
            }
            $plgProductClass->setSize(intval($row['サイズ']));
        }

        if(isset($plgProductClass))$app['orm.em']->persist($plgProductClass);
    }
}
