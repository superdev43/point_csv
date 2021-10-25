<?php

/* Point/Resource/template/default/Event/History/point_summary.twig */
class __TwigTemplate_1d4d962b8386298e60b221956afba22c7326409752edac792bbca078cd22cc58 extends Twig_Template
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
        echo "<br/>
<dl id=\"summary_box__use_point\">
    <dt>利用ポイント</dt>
    <dd class=\"text-primary\">";
        // line 4
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : null), "use", array())), "html", null, true);
        echo " pt</dd>
</dl>
<dl id=\"summary_box__add_point\">
    <dt>加算ポイント</dt>
    <dd>";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : null), "add", array())), "html", null, true);
        echo " pt</dd>
</dl>

";
    }

    public function getTemplateName()
    {
        return "Point/Resource/template/default/Event/History/point_summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Point/Resource/template/default/Event/History/point_summary.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/Point/Resource/template/default/Event/History/point_summary.twig");
    }
}
