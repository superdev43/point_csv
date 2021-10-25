<?php

/* Block/top_ordermade.twig */
class __TwigTemplate_f1f0567fe04b8efef149ae7e7be29f9295bb5e4812902851841a3e35bffc43b5 extends Twig_Template
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
        // line 1
        echo "<div id=\"top_ordermade\">
\t<div class=\"bd_head\"></div>
\t<div class=\"row inner\">
\t\t<div class=\"col-xs-12 col-md-6 text_box\">
\t\t\t<h2><img src=\"/img/home/h_ordermade.png\" alt=\"Order Made\" /></h2>
\t\t\t<p>「既製のものでは物足りない」「お友達と差を付けたい」という方にオーダーメイドでレオタードを制作します。<br>制作日数は２週間ほどですが、ご注文の混雑状況により変わりますので、受注確認のメールの際にお知らせいたします。下記の注意事項を必ずお読みください。</p>
\t\t\t<p class=\"btn_more\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "ordermade\"><img src=\"/img/home/btn_ordermade_more.png\" alt=\"詳しくはこちら\" /></a></p>
\t\t</div>
\t\t<div class=\"col-xs-12 col-md-6 img_box\">
\t\t\t<p><img src=\"/img/home/pic_ordermade01.jpg\" alt=\"Ordermade\" /></p>
\t\t</div>
\t</div>
\t<div class=\"bd_foot\"></div>
</div><!-- /#top_ordermade -->";
    }

    public function getTemplateName()
    {
        return "Block/top_ordermade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/top_ordermade.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/top_ordermade.twig");
    }
}
