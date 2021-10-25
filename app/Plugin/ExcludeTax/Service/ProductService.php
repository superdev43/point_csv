<?php
/*
 * Copyright(c) 2016 株式会社U-Mebius
 */

namespace Plugin\ExcludeTax\Service;

use Eccube\Application;
use Eccube\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Eccube\Event\TemplateEvent;

class ProductService {

    /**
     * @var Application
     */
    public $app;

    public function __construct(\Eccube\Application $app)
    {
        $this->app = $app;
    }

    /**
     * Get ClassCategories
     * @var $Product Product
     * @return array
     */
    public function getClassCategories($Product)
    {
        $Product->_calc();

        $class_categories = array(
            '__unselected' => array(
                '__unselected' => array(
                    'name'              => '選択してください',
                    'product_class_id'  => '',
                ),
            ),
        );
        foreach ($Product->getProductClasses() as $ProductClass) {
            /* @var $ProductClass \Eccube\Entity\ProductClass */
            $ClassCategory1 = $ProductClass->getClassCategory1();
            $ClassCategory2 = $ProductClass->getClassCategory2();

            $class_category_id1 = $ClassCategory1 ? (string) $ClassCategory1->getId() : '__unselected2';
            $class_category_id2 = $ClassCategory2 ? (string) $ClassCategory2->getId() : '';
            $class_category_name1 = $ClassCategory1 ? $ClassCategory1->getName() . ($ProductClass->getStockFind() ? '' : ' (品切れ中)') : '';
            $class_category_name2 = $ClassCategory2 ? $ClassCategory2->getName() . ($ProductClass->getStockFind() ? '' : ' (品切れ中)') : '';

            $class_categories[$class_category_id1]['#'] = array(
                'classcategory_id2' => '',
                'name'              => '選択してください',
                'product_class_id'  => '',
            );
            $class_categories[$class_category_id1]['#'.$class_category_id2] = array(
                'classcategory_id2' => $class_category_id2,
                'name'              => $class_category_name2,
                'stock_find'        => $ProductClass->getStockFind(),
                'price01'           => number_format($ProductClass->getPrice01()),
                'price02'           => number_format($ProductClass->getPrice02()),
                'product_class_id'  => (string) $ProductClass->getId(),
                'product_code'      => $ProductClass->getCode(),
                'product_type'      => (string) $ProductClass->getProductType()->getId(),
            );
        }

        return $class_categories;
    }
}