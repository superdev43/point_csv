<?php

/* __string_template__3ffdde3645e4234abcef26d0d332f4220727492b0bad48528b0e687974115ff8 */
class __TwigTemplate_35e0d4d3218c9118b102047f8fc1a3570d7b6bd1c2806e67d3a1fff80fed6f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__3ffdde3645e4234abcef26d0d332f4220727492b0bad48528b0e687974115ff8", 22);
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
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "shop_csv");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "CSV出力項目設定";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "<script>
\$(function() {

    function add(event) {
        \$('#' + event.data.from + ' option:selected')
                .appendTo(\$('#' + event.data.to))
                .prop('selected', false);
    }
    function addAll(event) {
        \$('#' + event.data.from + ' option').each(function () {
            \$(this).appendTo(\$('#' + event.data.to));
            \$(this).prop('selected', false);// 選択状態の解除
        });
    }

    \$('#add').on('click', {from: 'csv-not-output', to: 'csv-output'}, add);
    \$('#add-all').on('click', {from: 'csv-not-output', to: 'csv-output'}, addAll);
    \$('#remove').on('click', {from: 'csv-output', to: 'csv-not-output'}, add);
    \$('#remove-all').on('click', {from: 'csv-output', to: 'csv-not-output'}, addAll);

    \$('.move').click(function() {
        var \$op = \$('#csv-output option:selected');
        var val = \$(this).val();
        if (\$op.length) {
            val == 'up' ? \$op.first().prev().before(\$op) : \$op.last().next().after(\$op);
        }
    });

    \$('.move-most').click(function() {
        var \$op = \$('#csv-output option:selected');
        var val = \$(this).val();
        if (\$op.length) {
            val == 'top' ? \$op.prependTo('#csv-output') : \$op.appendTo('#csv-output');
        }
    });

    \$('#csv-type').on('change', function() {
        var id = \$(this).val();
        var href = '";
        // line 70
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_csv");
        echo "' + '/' + id;
        location.href = href;
        return false;
    });

    \$('#csv-form').submit(function() {
        \$('#csv-not-output').children().prop('selected', true);
        \$('#csv-output').children().prop('selected', true);
    })
});
</script>
";
    }

    // line 83
    public function block_main($context, array $blocks = array())
    {
        // line 84
        echo "    <form id=\"csv-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_csv", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\">
        ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        <div class=\"row\" id=\"aside_wrap\">
            <div id=\"csv_edit_box\" class=\"col-md-9\">
                <div id=\"csv_edit_box__body\" class=\"box\">
                    <div id=\"csv_edit_box__header\" class=\"box-header\">
                        ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "csv_type", array()), 'widget', array("id" => "csv-type"));
        echo "
                    </div>
                    <div id=\"csv_edit_box__body_inner\" class=\"box-body no-border row\">
                        <div id=\"csv_edit_box__csv_not_output\" class=\"col-md-4 col-xs-4\">
                            <p>CSV出力しない項目</p>
                            ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "csv_not_output", array()), 'widget', array("id" => "csv-not-output", "attr" => array("size" => "30")));
        echo "
                        </div><!-- /.col -->
                        <div id=\"csv_edit_box__button_menu\" class=\"col-md-2 col-xs-2\">
                            <div id=\"csv_edit_box__button_area\" class=\"text-center\" style=\"padding-top: 230px;\">
                                <p><button type=\"button\" id=\"add\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-step-forward\"></span></button></p>
                                <p><button type=\"button\" id=\"add-all\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-fast-forward\"></span></button></p>
                                <p><button type=\"button\" id=\"remove\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-step-backward\"></span></button></p>
                                <p><button type=\"button\" id=\"remove-all\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-fast-backward\"></span></button></p>
                            </div>
                        </div><!-- /.col -->
                        <div id=\"csv_edit_output_box\" class=\"col-md-4 col-xs-4\">
                            <p>CSV出力する項目</p>
                            ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "csv_output", array()), 'widget', array("id" => "csv-output", "attr" => array("size" => "30")));
        echo "
                        </div><!-- /.col -->
                        <div id=\"csv_edit_output_box__button_menu\" class=\"col-md-2 col-xs-2\">
                            <div style=\"padding-top: 200px;\">
                                <div id=\"csv_edit_output_box__button_area\" class=\"well well-sm text-center\">
                                    <p>項目順序</p>
                                    <p><button type=\"button\" class=\"btn btn-default move\" value=\"up\">一つ上</button></p>
                                    <p><button type=\"button\" class=\"btn btn-default move\" value=\"down\">一つ下</button></p>
                                    <p><button type=\"button\" class=\"btn btn-default move-most\" value=\"top\">一番上</button></p>
                                    <p><button type=\"button\" class=\"btn btn-default move-most\" value=\"bottom\">一番下</button></p>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div>
                    <div class=\"extra-form row\">
                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 123
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 124
                echo "                                <div class=\"col-md-12 form-group\">
                                    ";
                // line 125
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                </div>
                            ";
            }
            // line 128
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    </div>
                </div>
            </div>
            <div id=\"common_box\" class=\"col-md-3\" id=\"aside_column\">
                <div id=\"common_button_box\" class=\"col_inner\">
                    <div id=\"common_button_box__body\" class=\"box no-header\">
                        <div id=\"common_button_box__confirm_button\" class=\"box-body\">
                            <div class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                    <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">設定</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div><!-- /.col -->
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3ffdde3645e4234abcef26d0d332f4220727492b0bad48528b0e687974115ff8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 129,  180 => 128,  174 => 125,  171 => 124,  168 => 123,  164 => 122,  146 => 107,  131 => 95,  123 => 90,  115 => 85,  110 => 84,  107 => 83,  91 => 70,  51 => 32,  48 => 31,  42 => 27,  36 => 26,  32 => 22,  30 => 29,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__3ffdde3645e4234abcef26d0d332f4220727492b0bad48528b0e687974115ff8", "");
    }
}
