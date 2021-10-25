<?php return array (
  'ContactProduct' => 
  array (
    'config' => 
    array (
      'name' => '商品お問い合わせ',
      'code' => 'ContactProduct',
      'event' => 'Event',
      'version' => '1.0.1',
    ),
    'event' => 
    array (
      'eccube.event.render.product_detail.before' => 
      array (
        0 => 
        array (
          0 => 'insertContactButton',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.contact.before' => 
      array (
        0 => 
        array (
          0 => 'setContents',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'Coupon' => 
  array (
    'config' => 
    array (
      'name' => 'Coupon',
      'event' => 'Event',
      'code' => 'Coupon',
      'version' => '2.0.1',
      'service' => 
      array (
        0 => 'CouponServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.render.shopping.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.mypage_history.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageHistoryBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_confirm.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerShoppingConfirmBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_complete.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerShoppingCompleteBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEditBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.admin_order_edit.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerOrderEditAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.admin_order_delete.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerOrderDeleteAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_delivery.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_payment.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_shipping.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_shipping_edit.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerRestoreDiscountAfter',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingIndex',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/history.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageHistory',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.complete.initialize' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.initialize' => 
      array (
        0 => 
        array (
          0 => 'onShoppingConfirmInit',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onOrderEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.delete.complete' => 
      array (
        0 => 
        array (
          0 => 'onOrderEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'mail.order' => 
      array (
        0 => 
        array (
          0 => 'onSendOrderMail',
          1 => 'NORMAL',
        ),
      ),
      'mail.admin.order' => 
      array (
        0 => 
        array (
          0 => 'onSendOrderMail',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEdit',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.delivery.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.payment.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onRestoreDiscount',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'DeliveryPlus' => 
  array (
    'config' => 
    array (
      'name' => '配送方法拡張プラグイン',
      'event' => 'DeliveryPlusEvent',
      'code' => 'DeliveryPlus',
      'version' => '1.1.3',
      'service' => 
      array (
        0 => 'DeliveryPlusServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'Admin/Setting/Shop/delivery_edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateAdminDeliveryEdit',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateAdminProductEdit',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product_class.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateAdminProductClass',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateProductDetail',
          1 => 'NORMAL',
        ),
      ),
      'Cart/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateCart',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateShopping',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'hookFrontShoppingIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_shipping_multiple.before' => 
      array (
        0 => 
        array (
          0 => 'hookFrontShoppingShippingMultipleBefore',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.processing' => 
      array (
        0 => 
        array (
          0 => 'completeShopping',
          1 => 'FIRST',
        ),
      ),
      'front.shopping.complete.initialize' => 
      array (
        0 => 
        array (
          0 => 'completeShopping',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.multiple.complete' => 
      array (
        0 => 
        array (
          0 => 'completeShopping',
          1 => 'NORMAL',
        ),
      ),
      'admin.setting.shop.delivery.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'hookAdminDeliveryEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.copy.complete' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCopyComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductClassComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.update' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductClassComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.csv.export' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvExport',
          1 => 'NORMAL',
        ),
      ),
      'csvimportproductext.admin.product.csv.import.product.descriptions' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvImportProductDescriptions',
          1 => 'NORMAL',
        ),
      ),
      'csvimportproductext.admin.product.csv.import.product.check' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvImportProductCheck',
          1 => 'NORMAL',
        ),
      ),
      'csvimportproductext.admin.product.csv.import.product.process' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvImportProductProcess',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'ExcludeTax' => 
  array (
    'config' => 
    array (
      'name' => '税抜き表記プラグイン',
      'code' => 'ExcludeTax',
      'version' => '1.0.0',
      'event' => 'Event',
      'service' => 
      array (
        0 => 'ExcludeTaxServiceProvider',
      ),
    ),
    'event' => 
    array (
      'Product/list.twig' => 
      array (
        0 => 
        array (
          0 => 'onProductListRender',
          1 => 'LAST',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onProductDetailRender',
          1 => 'LAST',
        ),
      ),
      'Block/cart.twig' => 
      array (
        0 => 
        array (
          0 => 'onBlockCartRender',
          1 => 'NORMAL',
        ),
      ),
      'Cart/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onCartIndexRender',
          1 => 'NORMAL',
        ),
      ),
      'Block/category_recommend_product_block.twig' => 
      array (
        0 => 
        array (
          0 => 'onRecommendProductBlock',
          1 => 'NORMAL',
        ),
      ),
      'Block/recommend_product_block.twig' => 
      array (
        0 => 
        array (
          0 => 'onRecommendProductBlock',
          1 => 'NORMAL',
        ),
      ),
      'Block/checkeditem.twig' => 
      array (
        0 => 
        array (
          0 => 'onCheckedItemBlock',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'GmoEpsilon' => 
  array (
    'config' => 
    array (
      'name' => 'GmoEpsilon',
      'code' => 'GmoEpsilon',
      'version' => '1.1.1',
      'service' => 
      array (
        0 => 'GmoEpsilonServiceProvider',
      ),
      'event' => 'GmoEpsilon',
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
        1 => '/Resource/doctrine/master',
        2 => '/Resource/doctrine/extension',
      ),
      'const' => 
      array (
        'PLUGIN_CODE' => 'GmoEpsilon',
        'PAY_ID_CREDIT' => 1,
        'PAY_ID_REG_CREDIT' => 2,
        'PAY_ID_CONVENI' => 3,
        'PAY_ID_NETBANK_JNB' => 4,
        'PAY_ID_NETBANK_RAKUTEN' => 5,
        'PAY_ID_PAYEASY' => 7,
        'PAY_ID_WEBMONEY' => 8,
        'PAY_ID_YWALLET' => 9,
        'PAY_ID_PAYPAL' => 11,
        'PAY_ID_BITCASH' => 12,
        'PAY_ID_CHOCOM' => 13,
        'PAY_ID_SPHONE' => 15,
        'PAY_ID_JCB' => 16,
        'PAY_ID_SUMISHIN' => 17,
        'PAY_ID_DEFERRED' => 18,
        'PAY_ID_MAIL' => 99,
        'PAY_NAME_CREDIT' => 'クレジットカード決済',
        'PAY_NAME_REG_CREDIT' => '登録済みのクレジットカードで決済',
        'PAY_NAME_CONVENI' => 'コンビニ決済',
        'PAY_NAME_NETBANK_JNB' => 'ネット銀行決済(ジャパンネット銀行)',
        'PAY_NAME_NETBANK_RAKUTEN' => 'ネット銀行決済(楽天銀行)',
        'PAY_NAME_PAYEASY' => 'ペイジー決済',
        'PAY_NAME_WEBMONEY' => 'WebMoney決済',
        'PAY_NAME_YWALLET' => 'Yahoo!ウォレット決済サービス',
        'PAY_NAME_PAYPAL' => 'Paypal決済',
        'PAY_NAME_BITCASH' => 'Bitcash決済',
        'PAY_NAME_CHOCOM' => '電子マネーちょコム決済',
        'PAY_NAME_SPHONE' => 'スマートフォンキャリア決済',
        'PAY_NAME_JCB' => 'JCB PREMO',
        'PAY_NAME_SUMISHIN' => '住信SBIネット銀行決済',
        'PAY_NAME_DEFERRED' => 'GMO後払い',
        'PAY_NAME_MAIL' => 'メールリンク決済',
        'CREDIT_RULE_MAX' => 9999999,
        'REG_CREDIT_RULE_MAX' => 9999999,
        'CONVENI_RULE_MAX' => 299999,
        'NETBANK_JNB_RULE_MAX' => 9999999,
        'NETBANK_RAKUTEN_RULE_MAX' => 9999999,
        'PAYEASY_RULE_MAX' => 9999999,
        'WEBMONEY_RULE_MAX' => 199999,
        'YWALLET_RULE_MAX' => 499999,
        'PAYPAL_RULE_MAX' => 499999,
        'BITCASH_RULE_MAX' => 199999,
        'CHOCOM_RULE_MAX' => 99999,
        'SPHONE_RULE_MAX' => 50000,
        'JCB_RULE_MAX' => 500000,
        'SUMISHIN_RULE_MAX' => 9999999,
        'DEFERRED_RULE_MAX' => 49999,
        'MAIL_RULE_MAX' => 9999999,
        'CONVENI_ID_SEVENELEVEN' => 11,
        'CONVENI_ID_FAMILYMART' => 21,
        'CONVENI_ID_LAWSON' => 31,
        'CONVENI_ID_SEICOMART' => 32,
        'CONVENI_ID_MINISTOP' => 33,
        'CONVENI_ID_CIRCLEK' => 35,
        'CONVENI_ID_SUNKUS' => 36,
        'CONVENI_NAME_SEVENELEVEN' => 'セブンイレブン',
        'CONVENI_NAME_FAMILYMART' => 'ファミリーマート',
        'CONVENI_NAME_LAWSON' => 'ローソン',
        'CONVENI_NAME_SEICOMART' => 'セイコーマート',
        'CONVENI_NAME_MINISTOP' => 'ミニストップ',
        'CONVENI_NAME_CIRCLEK' => 'サークルK',
        'CONVENI_NAME_SUNKUS' => 'サンクス',
        'PAY_ID_EVERY_MONTH' => 101,
        'PAY_ID_EVERY_OTHER_MONTH' => 102,
        'PAY_ID_EVERY_THREE_MONTH' => 103,
        'PAY_ID_EVERY_SIX_MONTH' => 104,
        'PAY_ID_EVERY_YEAR' => 105,
        'PAY_NAME_EVERY_MONTH' => '定期的なクレジットカード決済（毎月）',
        'PAY_NAME_EVERY_OTHER_MONTH' => '定期的なクレジットカード決済（2ヵ月ごと）',
        'PAY_NAME_EVERY_THREE_MONTH' => '定期的なクレジットカード決済（3ヵ月ごと）',
        'PAY_NAME_EVERY_SIX_MONTH' => '定期的なクレジットカード決済（半年ごと）',
        'PAY_NAME_EVERY_YEAR' => '定期的なクレジットカード決済（1年ごと）',
        'CREDIT_ST_CODE' => '10000-0000-00000',
        'REG_CREDIT_ST_CODE' => '01000-0000-00000',
        'CONVENI_ST_CODE' => '00100-0000-00000',
        'NETBANK_JNB_ST_CODE' => '00010-0000-00000',
        'NETBANK_RAKUTEN_ST_CODE' => '00001-0000-00000',
        'SUMISHIN_ST_CODE' => '00000-0000-00000-00100-00000-00000-00000',
        'PAYEASY_ST_CODE' => '00000-0100-00000',
        'WEBMONEY_ST_CODE' => '00000-0010-00000',
        'YWALLET_ST_CODE' => '00000-0001-00000',
        'PAYPAL_ST_CODE' => '00000-0000-01000',
        'BITCASH_ST_CODE' => '00000-0000-00100',
        'CHOCOM_ST_CODE' => '00000-0000-00010',
        'SPHONE_ST_CODE' => '00000-0000-00000-10000-00000-00000-00000',
        'JCB_ST_CODE' => '00000-0000-00000-01000-00000-00000-00000',
        'DEFERRED_ST_CODE' => '00000-0000-00000-00010-00000-00000-00000',
        'MAIL_ST_CODE' => 'maillink',
        'EVERY_MONTH_MISSION_CODE' => 21,
        'EVERY_OTHER_MONTH_MISSION_CODE' => 25,
        'EVERY_THREE_MONTH_MISSION_CODE' => 27,
        'EVERY_SIX_MONTH_MISSION_CODE' => 29,
        'EVERY_YEAR_MISSION_CODE' => 31,
        'SEVENELEVEN_PRE_MESSAGE' => '以下「払込票URL」ページをプリントアウトされるか「払込票番号（13桁）」をメモして「お支払期限」までにお近くのセブンイレブンのレジにて代金をお支払いください。
',
        'SEVENELEVEN_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭でのお手続き方法をご確認いただけます。

▼セブンイレブン決済のお支払方法
http://www.epsilon.jp/mb/conv/seven/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'FAMIRYMART_PRE_MESSAGE' => '「お支払期限」までにお近くのファミリーマートにて代金をお支払いください。
',
        'FAMIRYMART_MESSAGE' => '
<お支払方法>
以下URLを携帯電話にご転送いただくと、店頭で操作方法をご確認いただけます。

▼ファミリーマート決済のお支払方法
http://www.epsilon.jp/mb/conv/famima/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Famiポートトップ画面左下の「代金支払い」を選択して下さい。
2.「代金支払い」一覧の「各種番号をお持ちの方はこちら」を選択して下さい。
3.ご案内画面の「番号入力画面に進む」を選択して下さい。
4.「お支払い受付番号」または「企業コード」を入力し、「OK」ボタンを押して下さい。
5.「申込時にご登録いただいた電話番号」または「注文番号」を入力し、「OK」ボタンを押して下さい。
6.お支払い方法の案内画面が表示されます。
7.お客様のご注文内容の確認画面が表示されます。内容をご確認頂いた後、「OK」を押下して下さい。
8.出力されたFamiポート申込券をもって30分以内にレジにて代金をお支払いください。
　代金と引き換えに「領収書」をお渡ししますので、必ずお受取り下さい。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'LAWSON_PRE_MESSAGE' => '「お支払期限」までにお近くのローソンにて代金をお支払いください。
',
        'LAWSON_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼ローソン決済のお支払方法
http://www.epsilon.jp/mb/conv/lawson/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Loppiトップ画面左上の「各種番号をお持ちの方」ボタンを押してください。
2.「受付番号（6桁）」を入力し、「次へ」ボタンを押してください。
3.「申込時にご登録いただいた電話番号」を入力してください。
4.お客様のご注文内容の確認画面が表示されます。内容をご確認いただき「了解」ボタンを押してください。
5.Loppi端末から「申込券」が出力されます。その申込券を持って30分以内にレジで代金をお支払いください。
　※代金と引き換えに領収書をお渡ししますので、必ずお受け取りください。実際に代金をお支払いされたという証明になります。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'SEICOMART_PRE_MESSAGE' => '「お支払期限」までにお近くのセイコーマートにて代金をお支払いください。
',
        'SEICOMART_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼セイコーマート決済のお支払方法
http://www.epsilon.jp/mb/conv/seico/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.セイコーマートの店内に設置してあるセイコーマートクラブステーション（情報端末）のトップ画面の中から、「インターネット受付」をお選び下さい。
2.画面に従って「受付番号（6桁）」と、「申込時にご登録いただいた電話番号」をご入力いただくとセイコーマートクラブステーションより「決済サービス払込取扱票・払込票兼受領証・領収書（計3枚）」が発券されます。
3.発券された「決済サービス払込取扱票・払込票兼受領証・領収書（計3枚）」をお持ちの上、レジにて代金をお支払い下さい。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'MINISTOP_PRE_MESSAGE' => '「お支払期限」までにお近くのミニストップにて代金をお支払いください。
',
        'MINISTOP_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼ミニストップ決済のお支払方法
http://www.epsilon.jp/mb/conv/ministop/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Loppi端末のトップ画面左の「各種番号をお持ちの方」ボタンを押してください。
2.「お支払い受付番号(6桁)」を入力し、「次へ」ボタンを押してください。
3.「申込時にご登録いただいた電話番号」を入力してください。
4.お客様のご注文内容の確認画面が表示されます。内容をご確認いただいた後、「了解」のボタンを押してください。
5.Loppi端末より「申込券」が出力されますので、その「申込券」を持って30分以内にレジにて代金をお支払いください。
　※代金と引き換えに「領収書」をお渡ししますので、必ずお受取りください。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'CIRCLEK_PRE_MESSAGE' => '「お支払期限」までにお近くのサークルKサンクスにて代金をお支払いください。
',
        'CIRCLEK_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼サークルKサンクス決済のお支払方法
http://www.epsilon.jp/mb/conv/circlek_sunkus/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Ｋステーションのトップ画面左下の「各種支払い」ボタンを押してください。
2.次画面で「6ケタの番号をお持ちの方」ボタンを押してください。
3.「受付番号(6桁)」を入力し、「次に進む」ボタンを押してください。
4.「申込時にご登録いただいた電話番号」を入力し、「次に進む」ボタンを押してください。
5.注意事項を確認し、「次に進む」ボタンを押してください。
6.お客様のご注文内容の確認画面が表示されます。内容をご確認いただき、「次に進む」ボタンを押してください。
7.Ｋステーションより「受付票」が出力されますので、「受付票」を持って30分以内にレジにて代金をお支払いください。
　※代金と引き換えに「領収書等」をお渡ししますので必ずお受取ください。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'SUNKUS_PRE_MESSAGE' => '「お支払期限」までにお近くのサークルKサンクスに代金をお支払いください。
',
        'SUNKUS_MESSAGE' => '
<お支払方法>
以下URLを携帯電話に転送いただくと、店頭で操作方法をご確認いただけます。

▼サークルKサンクス決済のお支払方法
http://www.epsilon.jp/mb/conv/circlek_sunkus/index.html
▼PDF版はこちら
http://www.epsilon.jp/document_dl/index_pdf.html

1.Ｋステーションのトップ画面左下の「各種支払い」ボタンを押してください。
2.次画面で「6ケタの番号をお持ちの方」ボタンを押してください。
3.「受付番号(6桁)」を入力し、「次に進む」ボタンを押してください。
4.「申込時にご登録いただいた電話番号」を入力し、「次に進む」ボタンを押してください。
5.注意事項を確認し、「次に進む」ボタンを押してください。
6.お客様のご注文内容の確認画面が表示されます。内容をご確認いただき、「次に進む」ボタンを押してください。
7.Ｋステーションより「受付票」が出力されますので、「受付票」を持って30分以内にレジにて代金をお支払いください。
　※代金と引き換えに「領収書等」をお渡ししますので必ずお受取ください。

※お支払後に商品（サービス）のご提供となりますので、お急ぎの方はお早めにお手続きをお願いします。',
        'CURL_SSLVERSION_DEFAULT_NUMBER' => 0,
        'CURL_SSLVERSION_TLSv1_NUMBER' => 1,
        'CURL_SSLVERSION_SSLv2_NUMBER' => 2,
        'CURL_SSLVERSION_SSLv3_NUMBER' => 3,
        'CURL_SSLVERSION_TLSv1_0_NUMBER' => 4,
        'CURL_SSLVERSION_TLSv1_1_NUMBER' => 5,
        'CURL_SSLVERSION_TLSv1_2_NUMBER' => 6,
        'CURL_SSLVERSION_DEFAULT_NAME' => 'デフォルト',
        'CURL_SSLVERSION_TLSv1_NAME' => 'TLS1.x',
        'CURL_SSLVERSION_SSLv2_NAME' => 'SSL2.0',
        'CURL_SSLVERSION_SSLv3_NAME' => 'SSL3.0',
        'CURL_SSLVERSION_TLSv1_0_NAME' => 'TLS1.0',
        'CURL_SSLVERSION_TLSv1_1_NAME' => 'TLS1.1',
        'CURL_SSLVERSION_TLSv1_2_NAME' => 'TLS1.2',
        'SSLVERSION_ERROR_CODE' => '35;',
      ),
    ),
    'event' => 
    array (
      'eccube.event.render.shopping.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_complete.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingCompleteBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEditBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.shopping_confirm.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerShoppingConfirmBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.admin_order_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onControllerAdminOrderEditBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'Holiday' => 
  array (
    'config' => 
    array (
      'name' => '定休日管理プラグイン',
      'event' => 'Holiday',
      'code' => 'Holiday',
      'version' => '1.0.5',
      'service' => 
      array (
        0 => 'HolidayServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.app.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderHoliday',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'InstagramApi' => 
  array (
    'config' => 
    array (
      'name' => 'instagram連携',
      'code' => 'InstagramApi',
      'version' => '1.0.1',
      'service' => 
      array (
        0 => 'InstagramApiServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'migration.path' => 
      array (
        0 => '/migration',
      ),
    ),
    'event' => NULL,
  ),
  'MailMagazine' => 
  array (
    'config' => 
    array (
      'name' => 'MailMagazine',
      'event' => 'MailMagazine',
      'code' => 'MailMagazine',
      'version' => '1.0.0',
      'service' => 
      array (
        0 => 'MailMagazineServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'const' => 
      array (
        'mail_magazine_dir' => '${ROOT_DIR}/app/mail_magazine',
      ),
    ),
    'event' => 
    array (
      'Entry/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderEntryIndex',
          1 => 'NORMAL',
        ),
      ),
      'Entry/confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderEntryConfirm',
          1 => 'NORMAL',
        ),
      ),
      'front.entry.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontEntryIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/change.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageChange',
          1 => 'NORMAL',
        ),
      ),
      'front.mypage.change.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontMypageChangeIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Customer/edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminCustomerEdit',
          1 => 'NORMAL',
        ),
      ),
      'admin.customer.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerEditIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.entry.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderEntryBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.entry.after' => 
      array (
        0 => 
        array (
          0 => 'onControllerEntryAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.mypage_change.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageChangeBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.mypage_change.after' => 
      array (
        0 => 
        array (
          0 => 'onControllMypageChangeAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_customer_new.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminCustomerBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_customer_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminCustomerBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'MailTemplateEditor' => 
  array (
    'config' => 
    array (
      'name' => 'メール設定プラグイン',
      'code' => 'MailTemplateEditor',
      'version' => '1.0.0',
      'service' => 
      array (
        0 => 'MailTemplateEditorServiceProvider',
      ),
    ),
    'event' => NULL,
  ),
  'OrderPdf' => 
  array (
    'config' => 
    array (
      'name' => 'OrderPdf',
      'event' => 'OrderPdfEvent',
      'code' => 'OrderPdf',
      'version' => '1.0.0',
      'service' => 
      array (
        0 => 'OrderPdfServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'const' => 
      array (
        'logo_file' => 'logo.png',
        'pdf_file' => 'nouhinsyo1.pdf',
        'order_pdf_message_len' => 30,
      ),
    ),
    'event' => 
    array (
      'Admin/Order/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderIndexRender',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderPdfBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_page.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderPdfBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'PlgExpandProductColumns' => 
  array (
    'config' => 
    array (
      'name' => '商品情報追加プラグイン',
      'code' => 'PlgExpandProductColumns',
      'version' => '1.0.4',
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'service' => 
      array (
        0 => 'PlgExpandProductColumnsServiceProvider',
      ),
      'event' => 'Event',
    ),
    'event' => 
    array (
      'eccube.event.render.admin_product_product_edit.before' => 
      array (
        0 => 
        array (
          0 => 'addContentOnProductEdit',
          1 => 'NORMAL',
        ),
        1 => 
        array (
          0 => 'saveExColValue',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_product_product_new.before' => 
      array (
        0 => 
        array (
          0 => 'addContentOnProductEdit',
          1 => 'NORMAL',
        ),
        1 => 
        array (
          0 => 'saveExColValue',
          1 => 'NORMAL',
        ),
      ),
      'Product/list.twig' => 
      array (
        0 => 
        array (
          0 => 'setListOnRenderFront',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'setProductOnRenderFront',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/index.twig' => 
      array (
        0 => 
        array (
          0 => 'setListOnRenderFront',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductNew',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/csv_product.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminCsvImport',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'Point' => 
  array (
    'config' => 
    array (
      'name' => 'Pointプラグイン',
      'code' => 'Point',
      'version' => '1.0.0',
      'event' => 'PointEvent',
      'service' => 
      array (
        0 => 'PointServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'admin.product.edit.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.customer.edit.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerEditIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.customer.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerEditIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.edit.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderEditIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderEditIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.delete.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderDeleteComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.mail.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderMailIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.mail.mail.all.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderMailIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.processing' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingConfirmProcessing',
          1 => 'NORMAL',
        ),
      ),
      'service.shopping.notify.complete' => 
      array (
        0 => 
        array (
          0 => 'onServiceShoppingNotifyComplete',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.delivery.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontChangeTotal',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.payment.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontChangeTotal',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontChangeTotal',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontChangeTotal',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEdit',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/mail_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderMailConfirm',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/mail_all_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderMailConfirm',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMyPageIndex',
          1 => 'NORMAL',
        ),
      ),
      'Shopping/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingIndex',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductDetail',
          1 => 'NORMAL',
        ),
      ),
      'Cart/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderCart',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/history.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderHistory',
          1 => 'NORMAL',
        ),
      ),
      'mail.order' => 
      array (
        0 => 
        array (
          0 => 'onMailOrderComplete',
          1 => 'NORMAL',
        ),
      ),
      'mail.admin.order' => 
      array (
        0 => 
        array (
          0 => 'onMailOrderComplete',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'ProductOption' => 
  array (
    'config' => 
    array (
      'name' => '商品オプションプラグイン',
      'event' => 'ProductOptionEvent',
      'code' => 'ProductOption',
      'version' => '1.4.0',
      'service' => 
      array (
        0 => 'ProductOptionServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'Admin/Product/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProduct',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductEdit',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderEdit',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/search_product.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderSearchProduct',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/mail_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderMailConfirm',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/mail_all_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderMailAllConfirm',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductDetail',
          1 => 'NORMAL',
        ),
      ),
      'Cart/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderCart',
          1 => 'NORMAL',
        ),
        1 => 
        array (
          0 => 'onRenderCartPoint',
          1 => 'LAST',
        ),
      ),
      'Shopping/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderShopping',
          1 => 'NORMAL',
        ),
        1 => 
        array (
          0 => 'onRenderShoppingPoint',
          1 => 'LAST',
        ),
      ),
      'Shopping/shipping_multiple.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderShoppingMultiple',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypage',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/history.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageHistory',
          1 => 'NORMAL',
        ),
      ),
      'Block/cart.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateBlockCart',
          1 => 'NORMAL',
        ),
      ),
      'front.product.detail.initialize' => 
      array (
        0 => 
        array (
          0 => 'addCartInitialize',
          1 => 'NORMAL',
        ),
      ),
      'front.product.detail.complete' => 
      array (
        0 => 
        array (
          0 => 'addCartComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'customOrder',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.shipping.multiple.initialize' => 
      array (
        0 => 
        array (
          0 => 'multipleShippingEdit',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.processing' => 
      array (
        0 => 
        array (
          0 => 'completeShopping',
          1 => 'FIRST',
        ),
        1 => 
        array (
          0 => 'completeShoppingPoint',
          1 => 'LAST',
        ),
      ),
      'front.shopping.confirm.complete' => 
      array (
        0 => 
        array (
          0 => 'completeSendOrderMail',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.complete.initialize' => 
      array (
        0 => 
        array (
          0 => 'completeShopping',
          1 => 'NORMAL',
        ),
      ),
      'service.shopping.notify.complete' => 
      array (
        0 => 
        array (
          0 => 'onServiceShoppingNotifyComplete',
          1 => 'LAST',
        ),
      ),
      'front.mypage.mypage.order.initialize' => 
      array (
        0 => 
        array (
          0 => 'mypageOrderInitialize',
          1 => 'NORMAL',
        ),
      ),
      'front.mypage.mypage.order.complete' => 
      array (
        0 => 
        array (
          0 => 'mypageOrderComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'registOrder',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.mail.index.complete' => 
      array (
        0 => 
        array (
          0 => 'copmleteSendAdminOrderMail',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.mail.mail.all.complete' => 
      array (
        0 => 
        array (
          0 => 'copmleteSendAdminOrderMailAll',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.copy.complete' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCopyComplete',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.route.admin_order_export_order.controller' => 
      array (
        0 => 
        array (
          0 => 'exportOrder',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.route.admin_order_export_shipping.controller' => 
      array (
        0 => 
        array (
          0 => 'exportShipping',
          1 => 'NORMAL',
        ),
      ),
      'mail.order' => 
      array (
        0 => 
        array (
          0 => 'onSendOrderMail',
          1 => 'FIRST',
        ),
      ),
      'mail.admin.order' => 
      array (
        0 => 
        array (
          0 => 'onSendAdminOrderMail',
          1 => 'FIRST',
        ),
      ),
      'admin.order.csv.export.order' => 
      array (
        0 => 
        array (
          0 => 'hookAdminOrderCsvExportOrder',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.csv.export.shipping' => 
      array (
        0 => 
        array (
          0 => 'hookAdminOrderCsvExportShipping',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.csv.export' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvExport',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_new.before' => 
      array (
        0 => 
        array (
          0 => 'changePrice',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_edit.before' => 
      array (
        0 => 
        array (
          0 => 'changePrice',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.controller.login_check.after' => 
      array (
        0 => 
        array (
          0 => 'setCartPrice',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/shipping_mail_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateExpressLinkMailConfirm',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/shipping_mail_all_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onTemplateExpressLinkMailConfirm',
          1 => 'NORMAL',
        ),
      ),
      'admin.expresslink.mail.shipping.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'hookExpressLinkShippingMailInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.expresslink.mail.shipping.mailall.initialize' => 
      array (
        0 => 
        array (
          0 => 'hookExpressLinkShippingMailInitialize',
          1 => 'NORMAL',
        ),
      ),
      'csvimportproductext.admin.product.csv.import.product.descriptions' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvImportProductDescriptions',
          1 => 'NORMAL',
        ),
      ),
      'csvimportproductext.admin.product.csv.import.product.check' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvImportProductCheck',
          1 => 'NORMAL',
        ),
      ),
      'csvimportproductext.admin.product.csv.import.product.process' => 
      array (
        0 => 
        array (
          0 => 'hookAdminProductCsvImportProductProcess',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'Recommend' => 
  array (
    'config' => 
    array (
      'name' => 'おすすめ商品管理プラグイン',
      'code' => 'Recommend',
      'version' => '2.0.0',
      'service' => 
      array (
        0 => 'RecommendServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => NULL,
  ),
  'SalesRanking' => 
  array (
    'config' => 
    array (
      'name' => '売上ランキング',
      'code' => 'SalesRanking',
      'version' => '1.0.2',
      'service' => 
      array (
        0 => 'SalesRankingServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => NULL,
  ),
  'SalesReport' => 
  array (
    'config' => 
    array (
      'name' => '売上集計プラグイン',
      'code' => 'SalesReport',
      'version' => '1.0.0',
      'service' => 
      array (
        0 => 'SalesReportServiceProvider',
      ),
      'const' => 
      array (
        'product_maximum_display' => 20,
      ),
    ),
    'event' => NULL,
  ),
  'Shiro8NewProductBlock3' => 
  array (
    'config' => 
    array (
      'name' => '新着商品ブロックプラグイン',
      'version' => 1,
      'service' => 
      array (
        0 => 'Shiro8NewProductBlock3ServiceProvider',
      ),
      'code' => 'Shiro8NewProductBlock3',
    ),
    'event' => NULL,
  ),
  'SortProduct' => 
  array (
    'config' => 
    array (
      'name' => '商品並び替えプラグイン',
      'code' => 'SortProduct',
      'version' => '1.2.1',
      'event' => 'Event',
      'service' => 
      array (
        0 => 'SortProductServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'Product/list.twig' => 
      array (
        0 => 
        array (
          0 => 'sortProduct',
          1 => 'NORMAL',
        ),
      ),
      'front.product.index.search' => 
      array (
        0 => 
        array (
          0 => 'setDQL',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'TransportCSVexportB2' => 
  array (
    'config' => 
    array (
      'name' => 'ヤマトB2・CSV出力',
      'event' => 'TransportCSVexportB2',
      'code' => 'TransportCSVexportB2',
      'version' => '1.0.2',
      'service' => 
      array (
        0 => 'TransportCSVexportB2ServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.render.admin_order.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_order_page.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminOrderBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);