<?php

/* Point/Resource/template/default/Event/ShoppingConfirm/use_point_button.twig */
class __TwigTemplate_c33f1ff5ce6c28ef1bb0689cfb52a2dbd73a810845b2f62cb7ef4fe9295d381b extends Twig_Template
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
        echo "<h2 class=\"heading02\">ポイント利用</h2>
<div id=\"point_box\" class=\"column\">
    <div id=\"point_box__body\" class=\"text-left form-group\">
        <p id=\"point_box__info\" class=\"text-left\">
            現在の保有ポイントは「<strong class=\"text-primary\">";
        // line 5
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["point"]) ? $context["point"] : null), "current", array()) >= 0)) ? (twig_number_format_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : null), "current", array()))) : (0)), "html", null, true);
        echo " pt</strong>」です。<br/>
            ポイントは商品購入時に1pt＝<strong class=\"text-primary\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["point"]) ? $context["point"] : null), "rate", array())), "html", null, true);
        echo "</strong>として利用することができます。
            <a id=\"confirm_box__use_point_edit_button\" href=\"";
        // line 7
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("point_use");
        echo "\" class=\"btn btn-default btn-sm\">ポイントを利用する</a>
        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Point/Resource/template/default/Event/ShoppingConfirm/use_point_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Point/Resource/template/default/Event/ShoppingConfirm/use_point_button.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/Point/Resource/template/default/Event/ShoppingConfirm/use_point_button.twig");
    }
}
