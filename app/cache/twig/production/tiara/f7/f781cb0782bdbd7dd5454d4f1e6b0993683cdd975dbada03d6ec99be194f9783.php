<?php

/* __string_template__95129c4dc217fb6ced9f348d5a98f74722d8510e0ad6ffa4b9145b8fb9ee3a58 */
class __TwigTemplate_f4028124522236571d5253d1958ad7b2b6a2a1115f46c1020aa8a5a48299245c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__95129c4dc217fb6ced9f348d5a98f74722d8510e0ad6ffa4b9145b8fb9ee3a58", 1);
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
\t<div id=\"ie7_error\" class=\"container-fluid\">
\t\t<h1 class=\"page-heading\">ご注文が完了できない方へ</h1>

\t\t<div class=\"row row01\">
\t\t\t<div class=\"col-sm-6 text_box\">
\t\t\t\t<h2 style=\"font-size: 18px; font-weight: normal;\">購入手続き中に右画像のように表示が崩れてしまい<br>ご注文が完了できないお客様は<br>お手数ですが以下の手順をお試しください。</h2>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 img_box\">
\t\t\t\t<p><img src=\"/img/common/ie7.jpg\" alt=\"\" style=\"border: 1px solid #ccc;\" /></p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row row02\">
\t\t\t<div class=\"col-sm-6 text_box\">
\t\t\t\t<p>画面右上の歯車マークを選択し、「互換表示設定」をクリックします。</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 img_box\">
\t\t\t\t<p><img src=\"/img/common/ie7_01.jpg\" alt=\"\" /></p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row row03\">
\t\t\t<div class=\"col-sm-6 text_box\">
\t\t\t\t<p>「互換表示設定の変更」画面が表示されましたら、<br>「互換表示に追加したwebサイト」の中を確認。<br>tiara-collection.comの記述があればそちらを選択し、右側の「削除」をクリックし、tiara-collection.comの表示がなくなった事を確認しましたら「閉じる」を選んで画面を閉じてください。</p>
\t\t\t\t<p>こちらの操作で互換表示設定の削除が完了し、お買い物を行っていただけます。<br>引き続きお買い物をお楽しみください。</p>
\t\t\t\t<h3><strong class=\"red\">※上記の方法を行ってもご注文ができない方はスマートフォンからもご注文いただけます。<br>またお電話でのご注文も承りますのでご連絡ください。<br>TEL：072-294-7828<br>11:00～18:00 毎週水曜定休 バレエショップ ティアラ</strong></h3>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 img_box\">
\t\t\t\t<p><img src=\"/img/common/ie7_02.jpg\" alt=\"\" /></p>
\t\t\t</div>
\t\t</div>
\t</div><!-- /#ie7_error -->
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__95129c4dc217fb6ced9f348d5a98f74722d8510e0ad6ffa4b9145b8fb9ee3a58";
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
        return new Twig_Source("", "__string_template__95129c4dc217fb6ced9f348d5a98f74722d8510e0ad6ffa4b9145b8fb9ee3a58", "");
    }
}
