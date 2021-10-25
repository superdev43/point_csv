<?php

/*
 * This file is part of the ExcludeTax
 *
 * Copyright (C) 2017 税抜き表記プラグイン
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ExcludeTax\ServiceProvider;

use Eccube\Application;
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Plugin\ExcludeTax\Form\Type\ExcludeTaxConfigType;
use Plugin\ExcludeTax\Twig\Extension\EccubeExtension;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;
use Symfony\Component\Yaml\Yaml;

class ExcludeTaxServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {
        // プラグイン用設定画面
//        $app->match('/'.$app['config']['admin_route'].'/plugin/ExcludeTax/config', 'Plugin\ExcludeTax\Controller\ConfigController::index')->bind('plugin_ExcludeTax_config');

        // 独自コントローラ
//        $app->match('/plugin/exclude_tax/hello', 'Plugin\ExcludeTax\Controller\ExcludeTaxController::index')->bind('plugin_ExcludeTax_hello');

        // Form
//        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
//            $types[] = new ExcludeTaxConfigType();
//
//            return $types;
//        }));

        // Repository
        $app['twig'] = $app->share($app->extend('twig', function(\Twig_Environment $twig, \Silex\Application $app) {
            $twig->addExtension(new EccubeExtension($app));
            return $twig;
        }));
        //Service
        $app['plugin.exclude_tax.service.twig'] = $app->share(function () use ($app) {
            return new \Plugin\ExcludeTax\Service\TwigService($app);
        });

        $app['plugin.exclude_tax.service.product'] = $app->share(function () use ($app) {
            return new \Plugin\ExcludeTax\Service\ProductService($app);
        });

        // メッセージ登録
        // $file = __DIR__ . '/../Resource/locale/message.' . $app['locale'] . '.yml';
        // $app['translator']->addResource('yaml', $file, $app['locale']);

        // load config
        // プラグイン独自の定数はconfig.ymlの「const」パラメータに対して定義し、$app['exclude_taxconfig']['定数名']で利用可能
        // if (isset($app['config']['ExcludeTax']['const'])) {
        //     $config = $app['config'];
        //     $app['exclude_taxconfig'] = $app->share(function () use ($config) {
        //         return $config['ExcludeTax']['const'];
        //     });
        // }

        // ログファイル設定
        $app['monolog.logger.exclude_tax'] = $app->share(function ($app) {

            $logger = new $app['monolog.logger.class']('exclude_tax');

            $filename = $app['config']['root_dir'].'/app/log/exclude_tax.log';
            $RotateHandler = new RotatingFileHandler($filename, $app['config']['log']['max_files'], Logger::INFO);
            $RotateHandler->setFilenameFormat(
                'exclude_tax_{date}',
                'Y-m-d'
            );

            $logger->pushHandler(
                new FingersCrossedHandler(
                    $RotateHandler,
                    new ErrorLevelActivationStrategy(Logger::ERROR),
                    0,
                    true,
                    true,
                    Logger::INFO
                )
            );

            return $logger;
        });

    }

    public function boot(BaseApplication $app)
    {
    }
}
