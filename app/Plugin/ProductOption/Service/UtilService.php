<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) 2015 BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\ProductOption\Service;

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

    public function compareOptions($options1, $options2)
    {
        if(!is_array($options1))$options1 = array();
        if(!is_array($options2))$options2 = array();
        $cnt = count($options1) > count($options2) ? count($options1) : count($options2);
        if((count(array_intersect_assoc($options1,$options2)) == $cnt && count($options1) > 0 && count($options2) > 0) || (count($options1) == 0 && count($options2) == 0) || $options1 == $options2){
                return true;
        }
        return false;
    }

    public function getLabelFromOptions($Options)
    {
        $arrLabel = array();
        if(is_array($Options)){
            foreach($Options as $option_key => $option_value){
                $option_id = str_replace('productoption', '', $option_key);
                $Option = $this->app['eccube.productoption.repository.option']->find($option_id);
                    if($Option){
                    $label = $Option->getName() . '：';
                    if($Option->getType()->getId() == 1 || $Option->getType()->getId() == 2){
                        $label .= $this->app['eccube.productoption.repository.option_category']->find($option_value);
                    }else{
                        $label .= $option_value;
                    }
                    $arrLabel[] = $label;
                }
            }
        }

        return $arrLabel;
    }

    public function getPriceFromOptions($Options)
    {
        $option_price = 0;
        if(is_array($Options)){
            foreach($Options as $option_key => $option_value){
                $option_id = str_replace('productoption', '', $option_key);
                $Option = $this->app['eccube.productoption.repository.option']->find($option_id);
                if($Option){
                    if($Option->getType()->getId() == 1 || $Option->getType()->getId() == 2){
                        $option_price += intval($this->app['eccube.productoption.repository.option_category']->find($option_value)->getValue());
                    }elseif($Option->getType()->getId() == 3 || $Option->getType()->getId() == 4){
                        if(strlen($option_value) > 0){
                            $OptionCategories = $Option->getOptionCategories();
                            if(count($OptionCategories) > 0){
                                $option_price += intval($OptionCategories[0]->getValue());
                            }
                        }
                    }
                }
            }
        }

        return $option_price;
    }

    public function getDeliveryFreeFlgFromOptions($Options)
    {
        if(is_array($Options)){
            $flg = 0;
            foreach($Options as $option_key => $option_value){
                $option_id = str_replace('productoption', '', $option_key);
                $Option = $this->app['eccube.productoption.repository.option']->find($option_id);
                if($Option){
                    if($Option->getType()->getId() == 1 || $Option->getType()->getId() == 2){
                        $flg = $this->app['eccube.productoption.repository.option_category']->find($option_value)->getDeliveryFreeFlg();
                    }elseif($Option->getType()->getId() == 3 || $Option->getType()->getId() == 4){
                        if(strlen($option_value) > 0){
                            $OptionCategories = $Option->getOptionCategories();
                            if(count($OptionCategories) > 0){
                                $flg = $OptionCategories[0]->getDeliveryFreeFlg();
                            }
                        }
                    }
                    if($flg == 1)return true;
                }
            }
        }

        return false;
    }

    public function getPlgOrderDetails($OrderDetails)
    {
        $plgOrderDetails = array();
        foreach($OrderDetails as $orderDetail){
            $plgOrderDetail = $this->app['eccube.productoption.repository.order_detail']->findOneBy(array('order_detail_id' => $orderDetail->getId()));
            if($plgOrderDetail){
                $plgOrderDetails[$orderDetail->getId()] = $plgOrderDetail->getOrderOption()->getLabel();
            }
        }
        return $plgOrderDetails;
    }

    public function getPlgShipmentItems($Shippings)
    {
        $plgShipmentItems = array();
        foreach($Shippings as $shipping){
            $ShipmentItems = $shipping->getShipmentItems();
            foreach($ShipmentItems as $shipmentItem){
                $plgShipmentItem = $this->app['eccube.productoption.repository.shipment_item']->findOneBy(array('item_id' => $shipmentItem->getId()));
                if($plgShipmentItem){
                    $plgShipmentItems[$shipmentItem->getId()] = $plgShipmentItem->getOrderOption()->getLabel();
                }
            }
        }
        return $plgShipmentItems;
    }

    public function getPlgOrderDetailPrice($OrderDetails)
    {
        $prices = array();
        foreach($OrderDetails as $orderDetail){
            $plgOrderDetail = $this->app['eccube.productoption.repository.order_detail']->findOneBy(array('order_detail_id' => $orderDetail->getId()));
            if($plgOrderDetail){
                $ProductClass = $orderDetail->getProductClass();
                $option_price = $plgOrderDetail->getOrderOption()->getCurrentPrice();
                $option_price = $option_price + $this->app['eccube.service.tax_rule']->getTax($option_price, $ProductClass->getProduct(), $ProductClass);
                $prices[$orderDetail->getId()] = $option_price;
            }
        }
        return $prices;
    }

    public function replaceMailDetail(&$body){
        $flg = false;
        $search = array();
        preg_match_all('/<!\-\-\s*option_detail_(\d+)\s*\-\->/u', $body, $search);
        if(isset($search[1])){
            foreach($search[1] as $key => $orderDetailId){
                $plgOrderDetail = $this->app['eccube.productoption.repository.order_detail']->findOneBy(array('order_detail_id' => $orderDetailId));
                if($plgOrderDetail){
                    $arrLabel = $plgOrderDetail->getOrderOption()->getLabel();
                    $replace = $this->app->renderView('ProductOption/Resource/template/default/Mail/option.twig', array(
                        'arrLabel' => $arrLabel,
                    ));
                }
                $body = preg_replace('/'.$search[0][$key].'/u', $replace, $body);
                $flg = true;
            }
        }
        return $flg;
    }

    public function replaceMailShipmentItem(&$body){
        $flg = false;
        $search = array();
        preg_match_all('/<!\-\-\s*option_shipmentitem_(\d+)\s*\-\->/u', $body, $search);
        if(isset($search[1])){
            foreach($search[1] as $key => $shipmentItemId){
                $plgShipmentItem = $this->app['eccube.productoption.repository.shipment_item']->findOneBy(array('item_id' => $shipmentItemId));
                if($plgShipmentItem){
                    $arrLabel = $plgShipmentItem->getOrderOption()->getLabel();
                    $replace = $this->app->renderView('ProductOption/Resource/template/default/Mail/option.twig', array(
                        'arrLabel' => $arrLabel,
                    ));
                }
                $body = preg_replace('/'.$search[0][$key].'/u', $replace, $body);
                $flg = true;
            }
        }
        return $flg;
    }


    public function checkInstallPlugin($code)
    {
        $Plugin = $this->app['eccube.repository.plugin']->findOneBy(array('code' => $code, 'enable' => 1));
        if($Plugin){
            return true;
        }else{
            return false;
        }
    }
}
