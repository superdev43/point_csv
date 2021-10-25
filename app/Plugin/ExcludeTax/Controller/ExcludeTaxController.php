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

class ExcludeTaxController
{

    /**
     * ExcludeTax画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        // add code...

        return $app->render('ExcludeTax/Resource/template/index.twig', array(
            // add parameter...
        ));
    }

}
