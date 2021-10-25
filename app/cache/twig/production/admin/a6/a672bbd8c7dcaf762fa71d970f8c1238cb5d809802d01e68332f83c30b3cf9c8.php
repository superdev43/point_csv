<?php

/* __string_template__48963c53628d69192d531e57c4a71b86a62205961414bcffb5cc6bac9fdbee6b */
class __TwigTemplate_8d7cc74462ec5ca5616538a433825e0bbcaf00f3832d7e973757f3643878df6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__48963c53628d69192d531e57c4a71b86a62205961414bcffb5cc6bac9fdbee6b", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        $context["menus"] = array(0 => "product", 1 => "admin_product_option_import");
        // line 18
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 16
    public function block_sub_title($context, array $blocks = array())
    {
        echo "オプション割当CSVアップロード";
    }

    // line 20
    public function block_javascript($context, array $blocks = array())
    {
        // line 21
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/spin.min.js\"></script>
<script>
\$(function() {

    var opts = {
        lines: 13,
        length: 30,
        width: 2,
        radius: 12,
        corners: 1,
        rotate: 0,
        direction: 1,
        color: '#BBB',
        speed: 1,
        trail: 67,
        shadow: true,
        hwaccel: false,
        className: 'spinner',
        zIndex: 2e9,
        top: top
    };

    ImageSpinner = new Spinner(opts).spin(document.getElementById('spinner'));
    ImageSpinner.stop();

    \$('#upload-form').submit(function() {
        \$('#upload-button').attr('disabled', 'disabled');
        \$('#download-button').attr('disabled', 'disabled');
        ImageSpinner.spin(document.getElementById('spinner'));
    });
});
</script>
";
    }

    // line 55
    public function block_main($context, array $blocks = array())
    {
        // line 56
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <form id=\"upload-form\" class=\"form-inline\" method=\"post\" action=\"";
        // line 58
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_import");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
            ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">オプション割当CSV</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-5 control-label\">CSVファイル選択</label>
                        <div class=\"col-sm-7\">
                            ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "import_file", array()), 'widget', array("attr" => array("accept" => "text/csv,text/tsv")));
        echo "
                            ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "import_file", array()), 'errors');
        echo "
                        </div>
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 72
            echo "                            <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </div>
                    <div id=\"spinner\"></div>
                </div><!-- /.box-body -->
                <div class=\"box-footer text-center\">
                    <button id=\"upload-button\" type=\"submit\" class=\"btn btn-primary btn-sm\">CSVファイルのアップロード</button>
                </form>
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
    </div><!-- /.col -->
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">オプション割当CSVファイルフォーマット</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body no-padding\">
                <div class=\"table_list\">
                    <div class=\"table-responsive no-border table-menu\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr class=\"text-nowrap\">
                                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["headers"]) ? $context["headers"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 98
            echo "                                        <th>";
            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
            echo "</th>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </tr>
                            </thead>
                            <tbody>
                                <tr class=\"text-nowrap\">
                                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) ? $context["headers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 105
            echo "                                        <td>";
            if (($context["header"] == "product_id")) {
                echo "必須
                                            ";
            } elseif ((            // line 106
$context["header"] == "product_option")) {
                echo "○
                                            ";
            }
            // line 108
            echo "                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__48963c53628d69192d531e57c4a71b86a62205961414bcffb5cc6bac9fdbee6b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 110,  194 => 108,  189 => 106,  184 => 105,  180 => 104,  174 => 100,  165 => 98,  161 => 97,  136 => 74,  127 => 72,  123 => 71,  118 => 69,  114 => 68,  102 => 59,  96 => 58,  92 => 56,  89 => 55,  51 => 21,  48 => 20,  42 => 16,  36 => 15,  32 => 11,  30 => 18,  28 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__48963c53628d69192d531e57c4a71b86a62205961414bcffb5cc6bac9fdbee6b", "");
    }
}
