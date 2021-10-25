<?php

/* __string_template__6811f6e43df7fc1680dd408b4c2b4ec5a0ee93809e560732f72fdc2edf99ae5a */
class __TwigTemplate_d36414380d5a28fd60d3f6d524c58e9ede224be88ac8e940314fc7f8479320c5 extends Twig_Template
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
<!-- ▼item_list▼ -->
<div id=\"top_recommend_item\">
\t<div class=\"inner\">
\t\t
\t\t<div class=\"box recommend_box\">
\t\t\t<div class=\"bg_box\">
\t\t\t\t<h2><img src=\"/img/home/h_recommend_item.png\" alt=\"おすすめ商品\" /></h2>

\t\t\t\t<div id=\"item_list\">
\t\t\t\t\t<ul class=\"recommend_item_list\">
\t\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recommend_products"]) ? $context["recommend_products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
            // line 21
            echo "\t\t\t\t\t\t<li class=\"col-xs-6\">
\t\t\t\t\t\t\t<div class=\"pickup_item\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"img_box match_height\">
\t\t\t\t\t\t\t\t\t\t<p><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "mainFileName", array())), "html", null, true);
            echo "\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t\t\t\t<!--<p class=\"item_comment none\">";
            // line 29
            echo nl2br($this->getAttribute($context["RecommendProduct"], "comment", array()));
            echo "</p>-->

\t\t\t\t\t\t\t\t\t\t\t<p class=\"item_name product_name\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"item_price price\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 33
            if ($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "hasProductClass", array())) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Min", array()) == $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Max", array()))) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Min", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Min", array())), "html", null, true);
                    echo " ～<!-- ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Max", array())), "html", null, true);
                    echo "-->
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Min", array())), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div><!-- /.bg_box -->
\t\t</div><!-- /.recommend_box -->
\t</div><!-- /.irow -->
</div><!-- /#top_recommend_item -->



<!-- ▲item_list▲ -->";
    }

    public function getTemplateName()
    {
        return "__string_template__6811f6e43df7fc1680dd408b4c2b4ec5a0ee93809e560732f72fdc2edf99ae5a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  92 => 42,  86 => 40,  83 => 39,  75 => 37,  69 => 35,  66 => 34,  64 => 33,  59 => 31,  54 => 29,  45 => 25,  40 => 23,  36 => 21,  32 => 20,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__6811f6e43df7fc1680dd408b4c2b4ec5a0ee93809e560732f72fdc2edf99ae5a", "");
    }
}
