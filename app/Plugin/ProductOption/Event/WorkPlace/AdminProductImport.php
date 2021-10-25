<?php
/*
 * Plugin Name : ProductOption
 *
 * Copyright (C) BraTech Co., Ltd. All Rights Reserved.
 * http://www.bratech.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ProductOption\Event\WorkPlace;

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
        $app = $this->app;

        $descriptions = $event->getArgument('descriptions');
        if(isset($descriptions['オプション割当情報'])){
            $descriptions['オプション割当情報'] = 'オプションIDを('.$app['config']['csv_import_delimiter'].')区切りで入力';
        }

        $event->setArgument('descriptions',$descriptions);
    }

    public function check(EventArgs $event)
    {
        $app = $this->app;
        $row = $event->getArgument('row');
        $data = $event->getArgument('data');
        $errors = $event->getArgument('errors');

        if(isset($row['オプション割当情報'])){
            if($row['オプション割当情報'] !== '' && preg_match("/[^0-9".$app['config']['csv_import_delimiter']."]/", $row['オプション割当情報'])){
                $e = new CsvImportException(($data->key() + 1)  . '行目のオプション割当情報が正しく入力されていません。');
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
        $Product = $ProductClass->getProduct();

        // 一旦クリア
        $currentProductOptions = $app['eccube.productoption.repository.product_option']->getListByProductId($Product->getId());
        foreach ($currentProductOptions as $currentProductOption) {
            $app['orm.em']->remove($currentProductOption);
        }
        $app['orm.em']->flush();

        if(strlen($row['オプション割当情報']) > 0){
            $productOptions = explode($app['config']['csv_import_delimiter'], $row['オプション割当情報']);
            foreach($productOptions as $option_id){
                if(is_numeric($option_id)){
                    $Option = $app['eccube.productoption.repository.option']->find($option_id);
                    if($Option){
                        $ProductOption = new \Plugin\ProductOption\Entity\ProductOption();
                        $ProductOption->setProduct($Product);
                        $ProductOption->setProductId($Product->getId());
                        $ProductOption->setOption($Option);
                        $ProductOption->setOptionId($option_id);
                        $app['eccube.productoption.repository.product_option']->save($ProductOption);
                    }
                }
            }
        }
    }
}
