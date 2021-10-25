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

namespace Plugin\DeliveryPlus\Controller\Admin;

use Eccube\Application;
use Eccube\Common\Constant;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

class ConfigController extends \Eccube\Controller\AbstractController
{
    public function index(Application $app, Request $request)
    {
        
        $form = $app['form.factory']
            ->createBuilder('admin_setting_deliveryplus')
            ->getForm();     
        
        $file = $app['eccube.repository.page_layout']
            ->getReadTemplateFile('Product/product_weight_size', false);

        $form->get('tpl_detail')->setData($file['tpl_data']);
        
        $file = $app['eccube.repository.page_layout']
            ->getReadTemplateFile('Cart/cart_weight_size', false);

        $form->get('tpl_cart')->setData($file['tpl_data']);

        if ('POST' === $request->getMethod()) {
            switch($request->get('mode')){
                case 'regist':
                    $form->handleRequest($request);
                    if ($form->isValid()) {
                        
                        // ファイル生成・更新
                        $templatePath = $app['eccube.repository.page_layout']->getWriteTemplatePath(false);
                        
                        $filePath = $templatePath . '/Product/product_weight_size.twig';
                        $fs = new Filesystem();
                        $fs->dumpFile($filePath, $form->get('tpl_detail')->getData());
                        
                        $filePath = $templatePath . '/Cart/cart_weight_size.twig';
                        $fs = new Filesystem();
                        $fs->dumpFile($filePath, $form->get('tpl_cart')->getData());
                        
                        // twig キャッシュの削除.
                        $finder = Finder::create()->in($app['config']['root_dir'] . '/app/cache/twig');
                        $fs->remove($finder);
                
                        $app->addSuccess('admin.setting.deliveryplus.save.complete', 'admin');
                    }
                    break;
                case 'init1':
                case 'init2':
                    $requestData = $request->get('admin_setting_deliveryplus');
                    switch($request->get('mode')){
                        case 'init1':
                            $content = file_get_contents($app['config']['plugin_realdir'] . '/DeliveryPlus/Resource/template/default/Product/product_weight_size.twig');
                            $requestData['tpl_detail'] = $content;
                            break;
                        case 'init2':
                            $content = file_get_contents($app['config']['plugin_realdir'] . '/DeliveryPlus/Resource/template/default/Cart/cart_weight_size.twig');
                            $requestData['tpl_cart'] = $content;
                            break;
                        default:
                            break;
                    }
                    $request->request->set('admin_setting_deliveryplus',$requestData);
                    $form->handleRequest($request);                    
                    break;
                default:
                    break;
            }
        }
        
        return $app->render('DeliveryPlus/Resource/template/admin/Setting/config.twig', array(
            'form' => $form->createView(),
        ));
    }
}