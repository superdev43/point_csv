<?php
/*
 * Plugin Name : DeliveryPlus
 *
 * Copyright (C) BraTech Co., Ltd. All Rights Reserved.
 * http://www.bratech.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\DeliveryPlus\Event\WorkPlace;

use Eccube\Event\EventArgs;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;


class AdminProductExport extends AbstractWorkPlace
{
    public function export(EventArgs $event)
    {
        $app = $this->app;

        $ExportCsvRow = $event->getArgument('ExportCsvRow');
        if ($ExportCsvRow->isDataNull()) {

            $csvService = $event->getArgument('csvService');
            $ProductClass = $event->getArgument('ProductClass');
            $Csv = $event->getArgument('Csv');

            $csvEntityName = str_replace('\\\\', '\\', $Csv->getEntityName());
            if($csvEntityName == 'Plugin\DeliveryPlus\Entity\ProductClass'){
                $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $ProductClass->getId()));
                if(!is_null($plgProductClass)){
                    $ExportCsvRow->setData($csvService->getData($Csv, $plgProductClass));
                }
            }
        }
    }
}
