<?php

/* Block/bloc_breadcrumb.twig */
class __TwigTemplate_797e75577bde4b2570d241222d65daff8e16e5e37f497c4166fdb74e9b5391ae extends Twig_Template
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
        if (($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "url", array()) == "homepage")) {
            // line 2
            echo "
";
        } elseif (($this->getAttribute(        // line 3
(isset($context["PageLayout"]) ? $context["PageLayout"] : null), "url", array()) == "product_list")) {
            // line 4
            echo "    <!-- ▼topicpathbloc▼ -->
    <div id=\"topicpath\" class=\"row\">
\t<div class=\"inner\">

        <ol id=\"list_header_menu\" class=\"\">
            <li><a href=\"";
            // line 9
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
            echo "\">バレエ用品・レオタード 通販｜バレエショップtiara(ティアラ)</a></li>
            <li><a href=\"";
            // line 10
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("product_list");
            echo "\">全商品</a></li>
            ";
            // line 11
            if ( !(null === (isset($context["Category"]) ? $context["Category"] : null))) {
                // line 12
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "path", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                    // line 13
                    echo "                    <li><a href=\"";
                    echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "name", array()), "html", null, true);
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "            ";
            }
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : null), "vars", array()), "value", array()), "name", array())) {
                // line 17
                echo "            <li>「";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : null), "vars", array()), "value", array()), "name", array()), "html", null, true);
                echo "」の検索結果</li>
            ";
            }
            // line 19
            echo "        </ol>

\t</div>
    </div>
    <!-- ▲topicpath▲ -->
";
        } elseif (($this->getAttribute(        // line 24
(isset($context["PageLayout"]) ? $context["PageLayout"] : null), "url", array()) == "product_detail")) {
            // line 25
            echo "
";
        } else {
            // line 27
            echo "<div id=\"bread_crumb\">
<div class=\"inner\">
\t<ul>
\t\t<li><a href=\"/\">バレエ用品・レオタード 通販｜バレエショップtiara(ティアラ)</a></li>
\t\t<li>";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</li>
\t</ul>
</div><!-- /.inner -->
</div><!-- /#breadcrumb -->
";
        }
    }

    public function getTemplateName()
    {
        return "Block/bloc_breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  86 => 27,  82 => 25,  80 => 24,  73 => 19,  67 => 17,  64 => 16,  61 => 15,  48 => 13,  43 => 12,  41 => 11,  37 => 10,  33 => 9,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/bloc_breadcrumb.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/bloc_breadcrumb.twig");
    }
}
