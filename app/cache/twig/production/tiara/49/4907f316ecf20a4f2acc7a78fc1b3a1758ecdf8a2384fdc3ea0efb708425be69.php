<?php

/* Block/bloc_event.twig */
class __TwigTemplate_e9eda0912c5328fe91458a4b52ae7505339a4bf9be99efbee04f62c71fe1d175 extends Twig_Template
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
        // line 9
        echo "
\t<div class=\"row event_row\">

\t\t<div class=\"col-xs-12 col-lg-12 box event_box\">
\t\t\t<div class=\"match_height bg_box\">
<div class=\"inner\">
\t\t\t\t<h2><img src=\"/img/home/h_event.png\" alt=\"Event\" /></h2>

\t\t\t\t";
        // line 17
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->phpFunctions("file_get_contents", "http://tiara-collection-com.check-xserver.jp/studio/wp_event_feed.php");
        echo "

\t\t\t\t<ul class=\"btn_more\">
\t\t\t\t\t<li><a href=\"/studio/category/event/\">一覧はこちら</a></li>
\t\t\t\t</ul>
\t\t\t</div>
</div>
\t\t</div><!-- /.event_box -->

\t</div><!-- /.row -->";
    }

    public function getTemplateName()
    {
        return "Block/bloc_event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 17,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/bloc_event.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/bloc_event.twig");
    }
}
