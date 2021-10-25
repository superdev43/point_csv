<?php

/*
 * This file is part of the ExcludeTax
 *
 * Copyright (C) 2017 税抜き表記プラグイン
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ExcludeTax\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class ConfigController
{

    /**
     * ExcludeTax用設定画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        $form = $app['form.factory']->createBuilder('excludetax_config')->getForm();

            $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();

                // add code...
            }

        return $app->render('ExcludeTax/Resource/template/admin/config.twig', array(
            'form' => $form->createView(),
        ));
    }

}
