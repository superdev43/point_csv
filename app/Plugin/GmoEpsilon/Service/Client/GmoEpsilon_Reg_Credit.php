<?php

namespace Plugin\GmoEpsilon\Service\Client;

/**
 * 決済モジュール 決済処理：登録済みのクレジットカードで決済
 */
class GmoEpsilon_Reg_Credit extends GmoEpsilon_Base
{

    /**
     * コンストラクタ
     *
     * @return void
     */
    function __construct(\Eccube\Application $app)
    {
        parent::__construct($app);
        $this->app = $app;
        $this->const = $app['config']['GmoEpsilon']['const'];
    }

    /**
     * チェックするレスポンスパラメータのキーを取得
     *
     * @return array
     */
    function getCheckParameter()
    {
        return array('trans_code', 'user_id', 'result', 'order_number');
    }

    /**
     * リクエストパラメータを設定
     *
     * @param \Eccube\Entity\Order $Order
     * @param \Plugin\GmoEpsilon\Entity\Extension\PaymentExtension
     * @return array
     */
    function setParameter($Order, $PaymentExtension) {
        $arrParameter = parent::setParameter($Order, $PaymentExtension);

        $arrParameter['user_id'] = $arrParameter['user_id'] == 'non_customer' ? '' : $arrParameter['user_id'];
        // 処理区分(登録済み課金)
        $arrParameter['process_code'] = "2";

        return $arrParameter;
    }

}
