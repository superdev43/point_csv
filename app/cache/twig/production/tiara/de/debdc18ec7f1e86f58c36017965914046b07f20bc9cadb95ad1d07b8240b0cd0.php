<?php

/* __string_template__293741954ac86a8d5aa254d1a116022137f6508fa98bf9c2a6faacfdf838f705 */
class __TwigTemplate_e05608950b53b18a569e570241bf1719299658170dc6ccad1312d1fca2bfdfa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__293741954ac86a8d5aa254d1a116022137f6508fa98bf9c2a6faacfdf838f705", 1);
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
\t<div id=\"harukas\" class=\"container-fluid\">
\t\t<div class=\"column column01\">
\t\t\t<h2 class=\"center\"><img src=\"/img/access/h_shop.png\" alt=\"店舗紹介\" /></h2>

\t\t\t<div class=\"row row01\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h3 class=\"center pc_hide\"><img src=\"/img/harukas/h_info.png\" alt=\"インフォメーション\" /></h3>
\t\t\t\t\t<h3 class=\"smart_hide tablet_hide\"><img src=\"/img/harukas/h_info.png\" alt=\"インフォメーション\" /></h3>
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr><th>住所</th><td>〒545-8545 大阪府大阪市阿倍野区阿倍野筋1-1-43<br>あべのハルカス
 タワー館8階　子供用品売り場</td></tr>
\t\t\t\t\t\t<tr><th>TEL</th><td>072-294-7828(堺本店)</td></tr>
\t\t\t\t\t\t<tr><th>MAIL</th><td>info@tiara-collection.com</td></tr>
\t\t\t\t\t\t<tr><th>OPEN</th><td>あべのハルカス近鉄本店に準じます</td></tr>
\t\t\t\t\t\t<tr><th>定休日</th><td>あべのハルカス近鉄本店に準じます</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.350825812461!2d135.51178271523068!3d34.64584198044871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000ddf023e6dd79%3A0x76f9200a45c2127!2z44GC44G544Gu44OP44Or44Kr44K5!5e0!3m2!1sja!2sjp!4v1498203915277\" width=\"600\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- .column01 -->

\t\t<div class=\"column column02\">
\t\t\t<h2 class=\"center\"><img  src=\"/img/harukas/h_gallery.png\" alt=\"ハルカス店ショップギャラリー\" /></h2>

\t\t\t<ul>
\t\t\t\t<li class=\"col-xs-6 col-sm-6\"><img src=\"/img/harukas/pic01.jpg\" alt=\"ギャラリー1\" /></li>
\t\t\t\t<li class=\"col-xs-6 col-sm-6\"><img src=\"/img/harukas/pic02.jpg\" alt=\"ギャラリー2\" /></li>
\t\t\t\t<li class=\"col-xs-6 col-sm-6\"><img src=\"/img/harukas/pic03.jpg\" alt=\"ギャラリー3\" /></li>
\t\t\t\t<li class=\"col-xs-6 col-sm-6\"><img src=\"/img/harukas/pic04.jpg\" alt=\"ギャラリー4\" /></li>
\t\t\t</ul>
\t\t</div><!-- /.column02 -->
\t</div><!-- /#harukas -->
</div><!-- /#main -->
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__293741954ac86a8d5aa254d1a116022137f6508fa98bf9c2a6faacfdf838f705";
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
        return new Twig_Source("", "__string_template__293741954ac86a8d5aa254d1a116022137f6508fa98bf9c2a6faacfdf838f705", "");
    }
}
