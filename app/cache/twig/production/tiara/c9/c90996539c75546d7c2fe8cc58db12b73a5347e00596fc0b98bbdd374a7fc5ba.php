<?php

/* Block/plg_shiro8_new_product_block.twig */
class __TwigTemplate_e1b7c8380000dbe61a4279eb7e91033c4d066f777170366558f5df2c5c4889aa extends Twig_Template
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
        echo "<!-- ▼shiro8_new_product▼ -->
<div id=\"top_new_item\">
<div id=\"contents_top\">
    <div id=\"item_list\" class=\"inner\">
\t<h2><img src=\"/img/home/h_new_item.png\" alt=\"新着商品\" /></h2>
        <ul>
            ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["Products"]) ? $context["Products"] : null)) > 0)) {
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["Products"]) ? $context["Products"] : null), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 30
                echo "                    <li class=\"col-xs-6\">
                        <div class=\"pickup_item\">
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                echo "\">
                                <div class=\"item_photo match_height\">
                                    <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
                echo "\">
                                </div>
                                ";
                // line 36
                if ($this->getAttribute($context["Product"], "description_list", array())) {
                    // line 37
                    echo "                                    <p class=\"item_comment text-warning none\">";
                    echo nl2br($this->getAttribute($context["Product"], "description_list", array()));
                    echo "</p>
                                ";
                }
                // line 39
                echo "                                <p class=\"item_name product_name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                echo "</p>
                                    
                                    ";
                // line 41
                if ($this->getAttribute($context["Product"], "hasProductClass", array())) {
                    // line 42
                    echo "                                        ";
                    if (($this->getAttribute($context["Product"], "getPrice02Min", array()) == $this->getAttribute($context["Product"], "getPrice02Max", array()))) {
                        // line 43
                        echo "                                            <p class=\"price item_price\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "</p>
                                        ";
                    } else {
                        // line 45
                        echo "                                            <p class=\"price item_price\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMax", array())), "html", null, true);
                        echo "</p>
                                        ";
                    }
                    // line 47
                    echo "                                    ";
                } else {
                    // line 48
                    echo "                                        <p class=\"price item_price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 50
                echo "                            </a>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        }
        // line 55
        echo "        </ul>
    </div>
</div>
</div>
<!-- ▲shiro8_new_product▲ -->";
    }

    public function getTemplateName()
    {
        return "Block/plg_shiro8_new_product_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  101 => 54,  92 => 50,  86 => 48,  83 => 47,  75 => 45,  69 => 43,  66 => 42,  64 => 41,  58 => 39,  52 => 37,  50 => 36,  43 => 34,  38 => 32,  34 => 30,  29 => 29,  27 => 28,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/plg_shiro8_new_product_block.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/plg_shiro8_new_product_block.twig");
    }
}
