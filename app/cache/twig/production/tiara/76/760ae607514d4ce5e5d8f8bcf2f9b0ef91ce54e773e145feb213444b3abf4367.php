<?php

/* __string_template__f2e6204d7570b59952587e0689b9d691781c2cdf364d89a393bbfae160a66941 */
class __TwigTemplate_8417e209082bc061faf6a94b3aeee64668d0394da8323fce912110518df89afd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__f2e6204d7570b59952587e0689b9d691781c2cdf364d89a393bbfae160a66941", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"main_only\">
<div class=\"container-fluid inner no-padding\">
<div id=\"main\">
\t<div id=\"guide\" class=\"container-fluid\">
\t\t<h2><img src=\"/img/guide/h_flow.png\" alt=\"Flow\" /></h2>
\t\t<div class=\"column column01 column_size\">
\t\t\t<div class=\"row row01\">
\t\t\t\t<h3>お支払方法</h3>
\t\t\t\t<div class=\"match_height col-sm-4 box box01\">
\t\t\t\t\t<h4>クレジットカード</h4>
\t\t\t\t\t<p>取り扱いカードは以下のとおりです。一括払いが可能となっております。</p>
\t\t\t\t\t<p><img src=\"/img/guide/img_cards.jpg\" alt=\"cards\" /></p>
\t\t\t\t</div><!-- /.box01 -->

\t\t\t\t<div class=\"match_height col-sm-4 box box02\">
\t\t\t\t\t<h4> 銀行振込</h4>
\t\t\t\t\t<p>三菱UFJ銀行　光明池支店<br>普通　0170697<br>カブシキガイシャグランジュテ</p>
\t\t\t\t\t<p><img src=\"/img/guide/img_ufj.jpg\" alt=\"UFJ\" /></p>
\t\t\t\t</div><!-- /.box02 -->

\t\t\t\t<div class=\"match_height col-sm-4 box box03\">
\t\t\t\t\t<h4>代金引換</h4>
\t\t\t\t\t<p>商品到着時に配達員にお支払い頂く方法です。</p>
\t\t\t\t</div><!-- /.box03 -->
\t\t\t</div><!-- /.row01 -->

\t\t\t<div class=\"row row02\">
\t\t\t\t<h3>配送について</h3>

\t\t\t\t<div class=\"match_height col-sm-6 box box01\">
\t\t\t\t\t<h4>オーダー以外の商品の場合</h4>
\t\t\t\t\t<p>クレジット決済・代引きの場合は、商品が揃い次第発送致します。<br>銀行振り込みの場合は、ご入金確認後発送いたします。</p>

\t\t\t\t\t<h4>プチオーダー、セレクトオーダー商品の場合</h4>
\t\t\t\t\t<p>代引きの場合は、オーダー確定後製作し(製作日数~14日ほど)、発送いたします。<br>銀行振り込みの場合は、ご入金確認後製作し(製作日数~14日ほど)、発送いたします。</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"match_height col-sm-6 box box02\">
\t\t\t\t\t<h4>配達時間指定について</h4>
\t\t\t\t\t<p>【午前】午前中　　【午後】14:00~16:00　　【夕方】16:00~18:00<br>【夜間】18:00~20:00　　【夜間】19:00~21:00</p>
\t\t\t\t\t<p>地域によってご希望の時間帯に配達できない場合もございます。<br>天候・交通事情によりご希望の時間帯にお届けできない場合がございます。<br>ゴールデンウィーク等混雑時航空便を使えない場合がございます。</p>
\t\t\t\t</div>
\t\t\t</div><!-- /.row02 -->

\t\t\t<div class=\"row row03\">
\t\t\t\t<h3>送料について</h3>
\t\t\t\t<p class=\"deliv_fee\"><span>全国一律送料600円</span></p>
\t\t\t\t<p class=\"center\"><img src=\"/img/guide/bnr_deliv_free.png\" alt=\"5000円以上お買い上げで送料無料\" /></p>

\t\t\t\t
\t\t\t</div><!-- /.row03 -->

\t\t\t<div id=\"row_deliv_mail\" class=\"row row0302\">
\t\t\t\t<h3>ネコポス便について</h3>
\t\t\t\t<p class=\"\">商品によってはネコポス便での発送が可能です。(送料は一律350円)<br>お支払い方法は銀行振り込み・クレジットカード決済がご利用いただけます。<br>代引きご希望のお客様はネコポス便がご利用できません。<br>商品カートは自動計算になりますので、必ずティアラからの受注メールをご確認の上ご入金お願いいたします。</p>
\t\t\t\t<h4>ネコポス便の特徴</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>・発送商品の大きさは角形A4サイズ(31.2cm以内×22.8cm)で厚さ２.5センチ・重さ1kgまで</li>
\t\t\t\t\t<li>・ポスト投函</li>
\t\t\t\t\t<li>・宅急便同様のお届け日数</li>
\t\t\t\t\t<li>・日時指定は不可</li>
\t\t\t</ul>
\t\t\t<p class=\"red\">※商品の大きさによって、ネコポス便での発送ができない場合がございます。ご了承くださいませ。<br>ご心配なお客様は購入前にお問い合わせください。</p>
\t\t\t</div><!-- /.row0302 -->

\t\t\t<div class=\"row row04\">
\t\t\t\t<h3>商品代金以外の必要料金</h3>
\t\t\t\t<ul>
\t\t\t\t\t<li>送料(商品合計金額5,000円(税別)未満は600円、5,000円(税別)以上は無料)</li>
\t\t\t\t\t<li>代引き手数料(代引きをご利用の場合)一律　330円</li>
\t\t\t\t\t<li>振込み手数料(お振込みの場合)</li>
\t\t\t\t</ul>
\t\t\t</div><!-- /.row04 -->

\t\t\t<div class=\"row row05\">
\t\t\t\t<h3>返品・交換について</h3>
\t\t\t\t<p>原則としてお受けできません。不良品またはこちらのミスでご注文と違う商品が届いた場合に限り3営業日以内にご連絡下さい。3営業日以降のご連絡による交換・返品はお受けいたしかねます。</p>
\t\t\t</div><!-- /.row05 -->

\t\t\t<div class=\"row row06\">
\t\t\t\t<h3>メールに関しての重要なお知らせ</h3>
\t\t\t\t<p>自動で『迷惑メール』として処理され、受信トレイに届かない場合がございます。<br>ティアラからの受注確認メールが届かない場合は、お電話でお問合せ下さい。<br>また、ティアラより送信した際にメールエラーで返ってくる場合もございます。<br>お電話にて確認させていただきますので、ご入力は必ず『ご連絡可能な電話番号』でお願いします。</p>
\t\t\t</div><!-- /.row06 -->
\t\t</div><!-- /.column01 -->
\t</div><!-- /#guide -->
</div><!-- /#main -->
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__f2e6204d7570b59952587e0689b9d691781c2cdf364d89a393bbfae160a66941";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__f2e6204d7570b59952587e0689b9d691781c2cdf364d89a393bbfae160a66941", "");
    }
}
