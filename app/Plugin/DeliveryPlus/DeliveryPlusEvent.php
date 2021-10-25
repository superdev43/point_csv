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

namespace Plugin\DeliveryPlus;

use Eccube\Common\Constant;
use Eccube\Entity\Master\CsvType;
use Eccube\Event\TemplateEvent;
use Eccube\Event\EventArgs;
use Plugin\DeliveryPlus\Event\WorkPlace\AdminDeliveryEdit;
use Plugin\DeliveryPlus\Event\WorkPlace\AdminProductEdit;
use Plugin\DeliveryPlus\Event\WorkPlace\AdminProductClass;
use Plugin\DeliveryPlus\Event\WorkPlace\AdminProductExport;
use Plugin\DeliveryPlus\Event\WorkPlace\AdminProductImport;
use Plugin\DeliveryPlus\Event\WorkPlace\FrontProductDetail;
use Plugin\DeliveryPlus\Event\WorkPlace\FrontCart;
use Plugin\DeliveryPlus\Event\WorkPlace\FrontShopping;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DeliveryPlusEvent
{
    public function onTemplateAdminDeliveryEdit(TemplateEvent $event)
    {
        $helper = new AdminDeliveryEdit();
        $helper->createTwig($event);
    }

    public function hookAdminDeliveryEditComplete(EventArgs $event)
    {
        $helper = new AdminDeliveryEdit();
        $helper->save($event);
    }

    public function onTemplateAdminProductEdit(TemplateEvent $event)
    {
        $helper = new AdminProductEdit();
        $helper->createTwig($event);
    }

    public function hookAdminProductEditComplete(EventArgs $event)
    {
        $helper = new AdminProductEdit();
        $helper->save($event);
    }

    public function hookAdminProductCopyComplete(EventArgs $event)
    {
        $helper = new AdminProductEdit();
        $helper->copy($event);
    }

    public function onTemplateAdminProductClass(TemplateEvent $event)
    {
        $helper = new AdminProductClass();
        $helper->createTwig($event);
    }

    public function hookAdminProductClassComplete(EventArgs $event)
    {
        $helper = new AdminProductClass();
        $helper->save($event);
    }

    public function onTemplateProductDetail(TemplateEvent $event)
    {
        $helper = new FrontProductDetail();
        $helper->createTwig($event);
    }

    public function onTemplateCart(TemplateEvent $event)
    {
        $helper = new FrontCart();
        $helper->createTwig($event);
    }

    public function hookFrontShoppingIndexInitialize(EventArgs $event)
    {
        $helper = new FrontShopping();
        $helper->save($event);
    }

    public function onTemplateShopping(TemplateEvent $event)
    {
        $helper = new FrontShopping();
        $helper->createTwig($event);
    }

    public function completeShopping(EventArgs $event = null)
    {
        $helper = new FrontShopping();
        $helper->clear($event);
    }

    public function hookFrontShoppingShippingMultipleBefore($event = null)
    {
        $helper = new FrontShopping();
        $helper->multiple($event);
    }

    public function hookAdminProductCsvExport(EventArgs $event)
    {
        $helper = new AdminProductExport();
        $helper->export($event);
    }

    public function hookAdminProductCsvImportProductDescriptions(EventArgs $event)
    {
        $helper = new AdminProductImport();
        $helper->getDescriptions($event);
    }

    public function hookAdminProductCsvImportProductCheck(EventArgs $event)
    {
        $helper = new AdminProductImport();
        $helper->check($event);
    }

    public function hookAdminProductCsvImportProductProcess(EventArgs $event)
    {
        $helper = new AdminProductImport();
        $helper->process($event);
    }

}
