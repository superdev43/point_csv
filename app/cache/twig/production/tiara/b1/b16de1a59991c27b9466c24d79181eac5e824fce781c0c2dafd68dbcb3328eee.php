<?php

/* Point/Resource/template/default/Event/MypageTop/point_box.twig */
class __TwigTemplate_0a42dc34c4c057383fafc1da9c13c95df28b5728ab82e3ba35b0f3c73c436d0c extends Twig_Template
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
        echo "<p class=\"txt_center\">
    現在の保有ポイントは「<span class=\"text-primary\">";
        // line 2
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["point"]) ? $context["point"] : null), "current", array()) >= 0)) ? (twig_number_format_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : null), "current", array()))) : (0)), "html", null, true);
        echo " pt</span>」です。<br/>
    ";
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            echo "現在の仮ポイントは「<span class=\"text-primary\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : null), "pre", array())), "html", null, true);
            echo " pt</span>」です。<br/>";
        }
        // line 4
        echo "    ※1pt＝<span class=\"text-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["point"]) ? $context["point"] : null), "rate", array())), "html", null, true);
        echo "</span>でご利用いただけます。
</p>

";
    }

    public function getTemplateName()
    {
        return "Point/Resource/template/default/Event/MypageTop/point_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Point/Resource/template/default/Event/MypageTop/point_box.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/Point/Resource/template/default/Event/MypageTop/point_box.twig");
    }
}
