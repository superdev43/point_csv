<?php

/* SortProduct/Resource/template/admin/block/block_category_tree.twig */
class __TwigTemplate_2d3e97571df60e4b55228e282f7d724c46524af1ffafade4ebdb7d48db4aefd7 extends Twig_Template
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
        echo "
";
        // line 3
        echo "
";
        // line 4
        $context["link_address"] = "plugin_SortProduct_byCategory";
        // line 5
        echo "
<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"svgicon\">
    <symbol id=\"cb-plus-square\" viewBox=\"0 0 360 360\">
        <path d=\"M339.635,84.373v189.091c0,18.033-6.402,33.45-19.204,46.251c-12.807,12.804-28.221,19.204-46.25,19.204
\t\tH85.089c-18.032,0-33.449-6.4-46.25-19.204c-12.805-12.801-19.204-28.218-19.204-46.251V84.373c0-18.029,6.399-33.444,19.204-46.25
\t\tc12.801-12.802,28.218-19.204,46.25-19.204h189.092c18.029,0,33.443,6.402,46.25,19.204
\t\tC333.233,50.928,339.635,66.343,339.635,84.373z M310.544,273.463V84.373c0-10-3.562-18.559-10.684-25.684
\t\tc-7.121-7.118-15.68-10.68-25.68-10.68H85.089c-10.001,0-18.563,3.562-25.683,10.68c-7.122,7.125-10.681,15.684-10.681,25.684
\t\tv189.091c0,10.001,3.559,18.563,10.681,25.684c7.12,7.121,15.682,10.68,25.683,10.68h189.092c10,0,18.559-3.559,25.68-10.68
\t\tC306.983,292.026,310.544,283.464,310.544,273.463z M281.453,171.646v14.544c0,2.124-0.681,3.865-2.046,5.229
\t\tc-1.362,1.363-3.105,2.045-5.226,2.045h-80v80c0,2.125-0.683,3.864-2.046,5.227c-1.363,1.365-3.107,2.046-5.229,2.046h-14.543
\t\tc-2.124,0-3.865-0.681-5.229-2.046c-1.363-1.362-2.046-3.102-2.046-5.227v-80h-80c-2.124,0-3.863-0.682-5.229-2.045
\t\tc-1.362-1.363-2.043-3.104-2.043-5.229v-14.544c0-2.121,0.681-3.864,2.043-5.229c1.365-1.362,3.104-2.046,5.229-2.046h80V84.373
\t\tc0-2.12,0.683-3.864,2.046-5.226c1.363-1.366,3.104-2.046,5.229-2.046h14.543c2.121,0,3.865,0.68,5.229,2.046
\t\tc1.363,1.361,2.046,3.105,2.046,5.226v79.999h80c2.12,0,3.863,0.684,5.226,2.046C280.772,167.782,281.453,169.525,281.453,171.646z
\t\t\"/>
    </symbol>
    <symbol id=\"cb-minus-square\" viewBox=\"0 0 360 360\">
        <path d=\"M339.634,84.374v189.09c0,18.033-6.402,33.449-19.204,46.251c-12.806,12.804-28.222,19.204-46.25,19.204
\t\tH85.089c-18.032,0-33.447-6.4-46.25-19.204c-12.805-12.802-19.203-28.218-19.203-46.251V84.374c0-18.028,6.398-33.445,19.203-46.25
\t\tc12.803-12.802,28.218-19.205,46.25-19.205H274.18c18.028,0,33.444,6.403,46.25,19.205
\t\tC333.232,50.928,339.634,66.345,339.634,84.374z M310.544,273.463V84.374c0-9.999-3.563-18.558-10.684-25.682
\t\tc-7.123-7.12-15.682-10.682-25.681-10.682H85.089c-10,0-18.562,3.562-25.682,10.682c-7.123,7.124-10.682,15.683-10.682,25.682
\t\tv189.09c0,10,3.559,18.562,10.682,25.682c7.12,7.123,15.682,10.682,25.682,10.682H274.18c9.999,0,18.558-3.559,25.681-10.682
\t\tC306.982,292.025,310.544,283.463,310.544,273.463z M281.453,171.646v14.545c0,2.124-0.683,3.864-2.046,5.228
\t\ts-3.107,2.045-5.227,2.045H85.089c-2.123,0-3.863-0.682-5.229-2.045c-1.361-1.363-2.044-3.104-2.044-5.228v-14.545
\t\tc0-2.12,0.683-3.863,2.044-5.228c1.365-1.362,3.105-2.046,5.229-2.046H274.18c2.119,0,3.863,0.684,5.227,2.046
\t\tC280.77,167.783,281.453,169.526,281.453,171.646z\"/>
    </symbol>

</svg>

";
        // line 41
        echo "
<style>
    .tree ul {
        margin-left: 1.2em;
    }
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
</style>


<script>
    \$(function() {
        // カテゴリツリー開閉
        // 初期表示
        \$(\"#category_tree li ul\").css(\"display\", \"none\");

        // 現在地までひらく
        \$(\"#category_tree li.active\").parents(\"ul\").css(\"display\", \"\");
        \$(\"#category_tree li.active\").parents(\"ul\").siblings().css(\"display\", \"\");

        // クリックでひらく
            \$(\"#category_tree li svg\").on(\"click\", function(){
            \$(this).parent().children(\"ul\").slideToggle(100);
        });
    });
</script>



";
        // line 108
        echo "




<div id=\"tree_box\" class=\"col_inner\">
    <div id=\"tree_box__body\" class=\"box no-header\">
        <div id=\"tree_box__body_inner\" class=\"box-body\">
            <div id=\"tree_box__tree\" class=\"tree\">
                <p id=\"tree_box__header\" class=\"active\"><a href=\"";
        // line 117
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_SortProduct");
        echo "\">全カテゴリー</a></p>

                <ul id=\"category_tree\">

                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) ? $context["TopCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 122
            echo "                        ";
            echo $this->getAttribute($this, "tree", array(0 => $context["TopCategory"], 1 => (($this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["TargetCategory"]) ? $context["TargetCategory"] : null), "id", array()), null)) : (null)), 2 => 0), "method");
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
                </ul>
            </div>
        </div>
    </div>
</div><!-- /.box -->

";
    }

    // line 75
    public function gettree($__Category__ = null, $__TargetId__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    ";
            $context["level"] = ((isset($context["level"]) ? $context["level"] : null) + 1);
            // line 77
            echo "
    <li id=\"tree_item--";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()), "html", null, true);
            echo "\" class=\"level";
            echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : null), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == (isset($context["TargetId"]) ? $context["TargetId"] : null))) {
                echo "active";
            }
            echo "\">
        ";
            // line 79
            if (($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == (isset($context["TargetId"]) ? $context["TargetId"] : null))) {
                // line 80
                echo "            ";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())) > 0)) {
                    // line 81
                    echo "                <svg class=\"cb cb-plus-square\" > <use xlink:href=\"#cb-plus-square\" /></svg>
            ";
                } else {
                    // line 83
                    echo "                <svg class=\"cb cb-plus-square\" > <use xlink:href=\"#cb-minus-square\" /></svg>
            ";
                }
                // line 85
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_SortProduct_byCategory", array("categoryId" => $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()))), "html", null, true);
                echo "\">
            [";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "name", array()), "html", null, true);
                echo "](";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())), "html", null, true);
                echo ")
            </a>
        ";
            } else {
                // line 89
                echo "            ";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())) > 0)) {
                    // line 90
                    echo "                <svg class=\"cb cb-plus-square\" > <use xlink:href=\"#cb-plus-square\" /></svg>
            ";
                } else {
                    // line 92
                    echo "                <svg class=\"cb cb-plus-square\" > <use xlink:href=\"#cb-minus-square\" /></svg>
            ";
                }
                // line 94
                echo "
            <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_SortProduct_byCategory", array("categoryId" => $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()))), "html", null, true);
                echo "\">
            ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "name", array()), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())), "html", null, true);
                echo ")
            </a>
        ";
            }
            // line 99
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array())) > 0)) {
                // line 100
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 101
                    echo "                <ul id=\"tree_item_child--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ChildCategory"], "id", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 102
                    echo $this->getAttribute($this, "tree", array(0 => $context["ChildCategory"], 1 => (isset($context["TargetId"]) ? $context["TargetId"] : null), 2 => (isset($context["level"]) ? $context["level"] : null)), "method");
                    echo "
                </ul>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "        ";
            }
            // line 106
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SortProduct/Resource/template/admin/block/block_category_tree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 106,  242 => 105,  233 => 102,  228 => 101,  223 => 100,  220 => 99,  212 => 96,  208 => 95,  205 => 94,  201 => 92,  197 => 90,  194 => 89,  186 => 86,  181 => 85,  177 => 83,  173 => 81,  170 => 80,  168 => 79,  158 => 78,  155 => 77,  152 => 76,  138 => 75,  127 => 124,  118 => 122,  114 => 121,  107 => 117,  96 => 108,  61 => 41,  27 => 5,  25 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SortProduct/Resource/template/admin/block/block_category_tree.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/SortProduct/Resource/template/admin/block/block_category_tree.twig");
    }
}
