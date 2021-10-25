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

namespace Plugin\DeliveryPlus\Service;

use Eccube\Application;

use Doctrine\ORM\EntityManager;
use Eccube\Common\Constant;

class UtilService
{
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function getDeliveries($shipping)
    {
        $app = $this->app;

        $Order = $shipping->getOrder();
        $delives = $app['eccube.service.shopping']->getDeliveriesOrder($Order);
        $subtotal = $Order->getSubtotal();

        $total_weight = 0;
        $total_size = 0;
        $shipmentItems = $shipping->getShipmentItems();
        foreach($shipmentItems as $shipmentItem){
            $plgProductClass = $app['eccube.deliveryplus.repository.product_class']->findOneBy(array('product_class_id' => $shipmentItem->getProductClass()->getId()));
            if($plgProductClass){
                $weight = $plgProductClass->getWeight();
                if(!is_null($weight))$total_weight += $weight * $shipmentItem->getQuantity();
                $size = $plgProductClass->getSize();
                if(!is_null($size))$total_size += $size * $shipmentItem->getQuantity();
            }
        }

        $deliveries = array();
        foreach ($delives as $Delivery) {
            $plgDeliveryCools = $app['eccube.deliveryplus.repository.delivery_cool']->findBy(array('delivery_id' => $Delivery->getId()));
            $arrCheck = array();
            foreach($plgDeliveryCools as $plgDeliveryCool){
                $arrCheck[] = $plgDeliveryCool->getType();
            }

            foreach ($shipmentItems as $item) {
                $productType = $item->getProductClass()->getProductType();
                if ($Delivery->getProductType()->getId() == $productType->getId()) {
                    $plgDelivery = $app['eccube.deliveryplus.repository.delivery']->findOneBy(array('delivery_id' => $Delivery->getId()));
                    if($plgDelivery){
                        $weight_min = $plgDelivery->getWeightMin();
                        $weight_max = $plgDelivery->getWeightMax();
                        if(!is_null($weight_min)){
                            if($weight_min > $total_weight)continue;
                        }
                        if(!is_null($weight_max)){
                            if($weight_max < $total_weight)continue;
                        }
                        $size_min = $plgDelivery->getSizeMin();
                        $size_max = $plgDelivery->getSizeMax();
                        if(!is_null($size_min)){
                            if($size_min > $total_size)continue;
                        }
                        if(!is_null($size_max)){
                            if($size_max < $total_size)continue;
                        }
                        $subtotal_min = $plgDelivery->getSubtotalMin();
                        $subtotal_max = $plgDelivery->getSubtotalMax();
                        if(!is_null($subtotal_min)){
                            if($subtotal_min > $subtotal)continue;
                        }
                        if(!is_null($subtotal_max)){
                            if($subtotal_max < $subtotal)continue;
                        }
                    }
                    if($this->checkInstallPlugin('DeliveryCool')){
                        $cool_type = $app['eccube.deliverycool.service.util']->getCoolType($item);
                        $shipping_type = $app['eccube.deliverycool.service.util']->convertShippingType($cool_type);
                        if($shipping_type != 0){
                            if(!in_array($shipping_type, $arrCheck)){
                                continue;
                            }
                        }

                    }
                    $deliveries[] = $Delivery;
                }
            }
        }
        return $deliveries;
    }

    public function checkInstallPlugin($code, $version = null)
    {
        $Plugin = $this->app['eccube.repository.plugin']->findOneBy(array('code' => $code, 'enable' => 1));
        if($Plugin){
            if(!is_null($version)){
                if(version_compare($Plugin->getVersion(), $version, '<')){
                    return false;
                }
            }
            return true;
        }else{
            return false;
        }
    }
}
