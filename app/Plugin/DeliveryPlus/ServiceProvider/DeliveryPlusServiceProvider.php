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

namespace Plugin\DeliveryPlus\ServiceProvider;

use Eccube\Application;
use Eccube\Common\Constant;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class DeliveryPlusServiceProvider implements ServiceProviderInterface
{

    private $app;

    public function register(BaseApplication $app)
    {
        $this->app = $app;

        // admin/navi
        $app['config'] = $app->share($app->extend('config', function ($config) {
            $nav = $config['nav'];
            foreach ($nav as $key => $val) {
                if ("setting" == $val['id']) {
                    $childNavi['id'] = "admin_setting_plg_deliveryplus";
                    $childNavi['name'] = "重さ・サイズデザイン設定";
                    $childNavi['url'] = "admin_setting_plg_deliveryplus";
                    $nav[$key]['child'][] = $childNavi;

                    continue;
                }
            }
            $config['nav'] = $nav;

            return $config;
        }));

        // Repository
        $app['eccube.deliveryplus.repository.delivery'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\DeliveryPlus\Entity\Delivery');
        });
        $app['eccube.deliveryplus.repository.delivery_cool'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\DeliveryPlus\Entity\DeliveryCool');
        });
        $app['eccube.deliveryplus.repository.product_class'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\DeliveryPlus\Entity\ProductClass');
        });

        // Form/Type
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use($app) {
            $types[] = new \Plugin\DeliveryPlus\Form\Type\Admin\ConfigType($app);
            return $types;
        }));

        // Form/Extension
        $app['form.type.extensions'] = $app->share($app->extend('form.type.extensions', function ($extensions) use ($app) {
            $extensions[] = new \Plugin\DeliveryPlus\Form\Extension\DeliveryExtension($app);
            $extensions[] = new \Plugin\DeliveryPlus\Form\Extension\ProductClassExtension($app);
            $extensions[] = new \Plugin\DeliveryPlus\Form\Extension\ShippingItemExtension($app);
            return $extensions;
        }));

        // Service
        $app['eccube.deliveryplus.service.util'] = $app->share(function () use ($app) {
            return new \Plugin\DeliveryPlus\Service\UtilService($app);
        });

        // Routing
        $app->match('/' . $app["config"]["admin_route"] . '/setting/plg_deliveryplus', '\Plugin\DeliveryPlus\Controller\Admin\ConfigController::index')->bind('admin_setting_plg_deliveryplus');

        // locale message
        $app['translator'] = $app->share($app->extend('translator', function ($translator, \Silex\Application $app) {
            $translator->addLoader('yaml', new \Symfony\Component\Translation\Loader\YamlFileLoader());

            $file = __DIR__ . '/../Resource/locale/message.' . $app['locale'] . '.yml';
            if (file_exists($file)) {
                $translator->addResource('yaml', $file, $app['locale']);
            }

            return $translator;
        }));
    }

    public function boot(BaseApplication $app)
    {
    }
}