<?php

/* Point/Resource/template/admin/Mail/point_notify.twig */
class __TwigTemplate_c48f9acbecefcb8855c04cee697b0df576657047e9204d0b1a30eba666d21309 extends Twig_Template
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
        // line 12
        echo "会員ID：";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "Customer", array()), "id", array()), "html", null, true);
        echo "
";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo " 様の保有ポイントがマイナスになっています。

注文番号：";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()), "html", null, true);
        echo "

利用ポイント：";
        // line 17
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["usePoint"]) ? $context["usePoint"] : null)), "html", null, true);
        echo "

保有ポイント：";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["currentPoint"]) ? $context["currentPoint"] : null)), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "Point/Resource/template/admin/Mail/point_notify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 19,  36 => 17,  31 => 15,  24 => 13,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Point/Resource/template/admin/Mail/point_notify.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/Point/Resource/template/admin/Mail/point_notify.twig");
    }
}
