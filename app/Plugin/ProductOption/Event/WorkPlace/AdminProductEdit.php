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

namespace Plugin\ProductOption\Event\WorkPlace;

use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;


class AdminProductEdit extends AbstractWorkPlace
{
    public function createTwig(TemplateEvent $event)
    {
        $app = $this->app;

        $source = $event->getSource();

        if(preg_match('/<div\sid="common_button_box__operation_button/u',$source, $result)){
            $search = $result[0];
            $snippet = file_get_contents($app['config']['plugin_realdir']. '/ProductOption/Resource/template/admin/Product/product_button.twig');
            $replace = $snippet . $search;
            $source = str_replace($search, $replace, $source);
        }

        $event->setSource($source);
    }
}
