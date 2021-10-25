<?php

/* Block/logo.twig */
class __TwigTemplate_ab6b760274d30e7de5307cef85f5a6ae9a5381255fb75072a1718b4829a7d49a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 22
        echo "             <div class=\"header_logo_area inner\">

             \t";
        // line 24
        if (($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "url", array()) == "homepage")) {
            // line 25
            echo "\t\t\t\t\t<h1 class=\"site_catch\">オリジナルレオタードバレエ用品のお店</h1>
\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t<p class=\"site_catch\">オリジナルレオタードバレエ用品のお店</p>
\t\t\t\t";
        }
        // line 29
        echo "                
\t\t<div class=\"logo_box\">
\t\t\t<p class=\"logo\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\"><img src=\"/img/common/head/logo.png\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo "\" /></a><img src=\"/img/common/head/illust_head.png\" alt=\"tiara\" class=\"illust pc_hide\" /></p>
\t\t</div>
\t\t<div class=\"head_info smart_hide tablet_hide\">
\t\t\t<ul class=\"btns\">
\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "handmade\"><img src=\"/img/common/head/btn_work.png\" alt=\"制作風景はこちら\" /></a><br><a href=\"/ordermade\"><img src=\"/img/common/head/btn_ordermade.png\" alt=\"オーダーメイドはこちら\" /></a></li>
\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "cart\"><img src=\"/img/common/head/icon_cart01.png\" alt=\"Cart\" /></a></li>
\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "mypage\"><img src=\"/img/common/head/icon_login01.png\" alt=\"Login\" /></a></li>
\t\t\t\t<li><a href=\"";
        // line 38
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "entry\"><img src=\"/img/common/head/icon_regist01.png\" alt=\"Registration\" /></a></li>
\t\t\t</ul>

\t\t\t<ul class=\"info\">
\t\t\t\t<li><span>5,000円</span>(税別)以上<br>お買い上げで<span>送料無料</span></li>
\t\t\t\t<li><span>072-294-7828</span><br>OPEN 11:00～18:00<br>〒590-0155 大阪府堺市南区野々井672-5</li>
\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "contact\"><img src=\"/img/common/head/icon_mail.png\" alt=\"お問い合わせ\" /></a></li>
\t\t\t</ul>
\t\t</div>
            </div>";
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 44,  58 => 38,  54 => 37,  50 => 36,  46 => 35,  37 => 31,  33 => 29,  29 => 27,  25 => 25,  23 => 24,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/logo.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/logo.twig");
    }
}
