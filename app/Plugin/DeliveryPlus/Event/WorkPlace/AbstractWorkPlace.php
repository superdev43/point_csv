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

namespace Plugin\DeliveryPlus\Event\WorkPlace;

use Eccube\Common\Constant;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

/**
 * フックポイント定型処理コンポジションスーパークラス
 * Class AbstractWorkPlace
 * @package Plugin\DeliveryPlus\Event\WorkPlace
 */
abstract class AbstractWorkPlace
{
    /** @var \Eccube\Application */
    protected $app;

    /**
     * AbstractWorkPlace constructor.
     */
    public function __construct()
    {
        $this->app = \Eccube\Application::getInstance();
    }

    /**
     * Twig拡張処理
     * @param TemplateEvent $event
     * @return mixed
     */
    public function createTwig(TemplateEvent $event)
    {
        throw new MethodNotAllowedException();
    }

    /**
     * 保存拡張処理
     * @param EventArgs $event
     * @return mixed
     */
    public function save(EventArgs $event)
    {
        throw new MethodNotAllowedException();
    }
    
    /**
     * 実行拡張処理
     * @param EventArgs $event
     * @return mixed
     */
    public function execute(EventArgs $event)
    {
        throw new MethodNotAllowedException();
    } 
}
