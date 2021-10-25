<?php

/* __string_template__4b4d36d21daf5f294201b99a1c8b0be5fe79f8c45a49e557be0ef2360ef9ac25 */
class __TwigTemplate_f563e1f6e668bf19d78fac50caa3b315139cee157d3eabfb17a3754c90e1b62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__4b4d36d21daf5f294201b99a1c8b0be5fe79f8c45a49e557be0ef2360ef9ac25", 1);
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
<div class=\"container-fluid no-padding\">
<div id=\"main\">
\t<div id=\"ordermade\" class=\"container-fluid\">
\t\t<div class=\"column column01\">
\t\t<div class=\"inner\">
\t\t\t<h2><img src=\"/img/ordermade/h_ordermade.png\" alt=\"オーダーメイド\" /></h2>
\t\t\t<p class=\"first\">製作日数は２週間ほどですが、ご注文の混雑状況により変わりますので、受注確認のメールの際にお知らせいたします。<br>下記の注意事項を必ずお読みください。</p>

\t\t\t<ul class=\"photo_list\">
\t\t\t\t<li class=\"col-xs-4\"><img src=\"/img/ordermade/order_item01.png\" alt=\"\" /></li>
\t\t\t\t<li class=\"col-xs-4\"><img src=\"/img/ordermade/order_item02.png\" alt=\"\" /></li>
\t\t\t\t<li class=\"col-xs-4\"><img src=\"/img/ordermade/order_item03.png\" alt=\"\" /></li>
\t\t\t</ul>

\t\t\t<p class=\"btn btn_basic\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "color_list\"><img src=\"/img/ordermade/btn_color_text.png\" alt=\"カラー一覧はこちら\" /></a></p>
\t\t</div>
\t\t</div><!-- /.column01 -->


\t\t<div class=\"column column02\">
\t\t<div class=\"inner\">
\t\t\t<h2><img src=\"/img/ordermade/h_order_guide.png\" alt=\"オーダーメイドのご利用ガイド\" /></h2>

\t\t\t<div class=\"col-sm-6 match_height box box01\">
\t\t\t\t<h3><img src=\"/img/ordermade/h_p_order.png\" alt=\"プチオーダー\" /></h3>
\t\t\t\t<p>デザイン一覧より、カラー、サイズ、スカートと裏地の有無を選択。</p>
\t\t\t</div>

\t\t\t<div class=\"col-sm-6 match_height box box02\">
\t\t\t\t<h3><img src=\"/img/ordermade/h_size_order.png\" alt=\"サイズオーダー\" /></h3>
\t\t\t\t<p>掲載価格より1000円UP<br>細めちゃん、太めちゃん、体型に合わせてサイズ調整いたします。125や135など5cm刻みのサイズも可能。</p>
\t\t\t\t<p class=\"sub_text\">※ご注文確認画面のご要望欄に、サイズオーダーの内容をご明記ください。こちらから再度、お見積をご連絡します。</p>
\t\t\t\t<p class=\"sub_text\">★デザイン一覧にない商品も対応致します。お気軽にご相談ください。</p>
\t\t\t</div>
\t\t</div>
\t\t</div><!-- /.column02 -->


\t\t<div class=\"column column03\">
\t\t<div class=\"inner\">
\t\t\t<h2><img src=\"/img/ordermade/h_ordermade_attention.png\" alt=\"オーダーメイドに関する注意事項\" /></h2>
\t\t\t<p class=\"h_after\">オーダー商品はクレジット決済が出来ませんので、ご注意ください。</p>

\t\t\t<div class=\"box box01\">
\t\t\t\t<h3>プチオーダー商品をご注文の方</h3>
\t\t\t\t<p>お気に入りのデザインが決まりましたら、購入ボタンをクリックしてください。<br>表示されている価格は商品の最低価格です。裏地、スカートの有無やサイズにより価格が変動します。</p>
\t\t\t\t<p>精算時に「銀行振込、もしくは代引き」をクリック。自動送信メールが届きますが、後ほど担当者よりお送りするお見積もりメールを必ずご確認ください。</p>
\t\t\t\t<p>お客様よりお返事を頂いた時点でご注文確定とさせて頂きます。</p>
\t\t\t\t<p>オーダー商品には通常2週間程度製作期間がかかりますので、通常販売商品のみ先に発送をご希望の方はご要望欄にご記入ください。</p>
\t\t\t\t<p>尚、オーダー商品のご注文の場合はクレジット決済はできませんのでご注意ください。</p>
\t\t\t</div><!-- /.box01 -->


\t\t\t<div class=\"box box02\">
\t\t\t\t<h3>オーダー商品＋販売商品をご注文の方</h3>
\t\t\t\t<h4><img src=\"/img/ordermade/h_hassou.png\" alt=\"発送について\" /></h4>
\t\t\t\t<p>通常、オーダー商品がご用意でき次第、まとめて発送いたします。<br>オーダー商品は製作にお時間をいただきますので、お急ぎの方は販売商品のみ先に発送することもできます。<br>ご希望の方は、ご要望欄にご記入ください。</p>
\t\t\t\t<p>1回の発送で商品の合計金額が5,000円以上の場合、送料が無料になります。
(ご購入合計金額が5,000円以上でも、１回の発送が5,000円未満の場合、それぞれに送料がかかります)</p>

\t\t\t\t<h4><img src=\"/img/ordermade/h_payment.png\" alt=\"お支払方法\" /></h4>
\t\t\t\t<p>銀行振り込み・代引きで、まとめてお支払いください。<br>クレジット決済はご利用できませんので、ご注意ください。<br>※ご注文・ご質問はこちらまでお願い致します。<br>MAIL : info@tiara-collection.com</p>
\t\t\t</div><!-- /.box02 -->
\t\t</div>
\t\t</div><!-- /.column03 -->

\t</div><!-- /#ordermade -->
</div><!-- /#main -->
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__4b4d36d21daf5f294201b99a1c8b0be5fe79f8c45a49e557be0ef2360ef9ac25";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__4b4d36d21daf5f294201b99a1c8b0be5fe79f8c45a49e557be0ef2360ef9ac25", "");
    }
}
