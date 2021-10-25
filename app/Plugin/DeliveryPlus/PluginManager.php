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
use Eccube\Plugin\AbstractPluginManager;
use Symfony\Component\Filesystem\Filesystem;
use Eccube\Entity\Master\DeviceType;

class PluginManager extends AbstractPluginManager
{
    public function __construct()
    {

    }

    public function install($config, $app)
    {
        $file = new Filesystem();
        try {
            $file->copy($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/default/Product/product_weight_size.twig', $app['config']['template_realdir']. '/Product/product_weight_size.twig', true);
            $file->copy($app['config']['plugin_realdir']. '/DeliveryPlus/Resource/template/default/Cart/cart_weight_size.twig', $app['config']['template_realdir']. '/Cart/cart_weight_size.twig', true);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function uninstall($config, $app)
    {
        $this->migrationSchema($app, __DIR__ . '/Migration', $config['code'], 0);
        unlink($app['config']['template_realdir']. '/Product/product_weight_size.twig');
        unlink($app['config']['template_realdir']. '/Cart/cart_weight_size.twig');
    }

    public function enable($config, $app)
    {
        $this->migrationSchema($app, __DIR__.'/Migration', $config['code']);

        $this->addCsv($app);
    }

    public function disable($config, $app)
    {
        $Csvs = $app['eccube.repository.csv']->findBy(array('entity_name' => 'Plugin\\DeliveryPlus\\Entity\\ProductClass'));
        foreach($Csvs as $Csv){
            $app['orm.em']->remove($Csv);
        }
        $app['orm.em']->flush();
    }

    public function update($config, $app)
    {
        $Plugin = $app['eccube.repository.plugin']->findOneBy(array('code' => 'DeliveryPlus'));
        if(version_compare($Plugin->getVersion(),'1.1.2','<=') && $Plugin->getEnable() == Constant::ENABLED){
            $this->addCsv($app);
        }
    }

    private function addCsv($app)
    {
        $Plugin = $app['eccube.repository.plugin']->findOneBy(array('code' => 'CsvImportProductExt', 'enable' => 1));
        if(version_compare(Constant::VERSION,'3.0.14','>=') || $Plugin){
            $now = new \DateTime();
            //CSV項目追加
            $CsvType = $app['eccube.repository.master.csv_type']->find(\Eccube\Entity\Master\CsvType::CSV_TYPE_PRODUCT);
            $rank = $app['orm.em']->createQueryBuilder()
                ->select('MAX(c.rank)')
                ->from('Eccube\Entity\Csv','c')
                ->where('c.CsvType = :csvType')
                ->setParameter(':csvType',$CsvType)
                ->getQuery()
                ->getSingleScalarResult();
            if (!$rank) {
                $rank = 0;
            }

            $Csv = new \Eccube\Entity\Csv();
            $Csv->setCsvType($CsvType);
            $Csv->setEntityName('Plugin\\DeliveryPlus\\Entity\\ProductClass');
            $Csv->setFieldName('weight');
            $Csv->setDispName('重さ');
            $Csv->setEnableFlg(0);
            $Csv->setRank($rank + 1);
            $Csv->setCreateDate($now);
            $Csv->setUpdateDate($now);
            $app['orm.em']->persist($Csv);

            $Csv = new \Eccube\Entity\Csv();
            $Csv->setCsvType($CsvType);
            $Csv->setEntityName('Plugin\\DeliveryPlus\\Entity\\ProductClass');
            $Csv->setFieldName('size');
            $Csv->setDispName('サイズ');
            $Csv->setEnableFlg(0);
            $Csv->setRank($rank + 2);
            $Csv->setCreateDate($now);
            $Csv->setUpdateDate($now);
            $app['orm.em']->persist($Csv);

            $app['orm.em']->flush();
        }
    }

}
