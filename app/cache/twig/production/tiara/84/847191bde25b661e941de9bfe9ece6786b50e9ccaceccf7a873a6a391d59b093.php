<?php

/* __string_template__d3201e73b03a2659eb42f693e8a101c80a38fc26b05bf33d2713eb942ff539f9 */
class __TwigTemplate_c0dd2e0128855c1ae2bcb6550896a78ecd265dcdc0c4ed05c148ca20dbbe5435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__d3201e73b03a2659eb42f693e8a101c80a38fc26b05bf33d2713eb942ff539f9", 10);
        $this->blocks = array(
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
        // line 12
        $context["body_class"] = "cart_page";
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        // line 14
        echo "<script>
    \$(function() {
        \$('input[name~=\"front_plugin_coupon_shopping[coupon_use]\"]').change(function () {
            if(\$(this).val() == 0) {
                \$('#front_plugin_coupon_shopping_coupon_cd').attr('readonly', '');
                \$('#front_plugin_coupon_shopping_coupon_cd').css('background-color', '#eee');
            } else {
                \$('#front_plugin_coupon_shopping_coupon_cd').removeAttr('readonly');
                \$('#front_plugin_coupon_shopping_coupon_cd').css('background-color', 'white');
            }
        });
    });
</script>
";
    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
        // line 30
        echo "    <h1 class=\"page-heading\">クーポンコードの入力</h1>
    <div class=\"container-fluid\">
        <div id=\"coupon_box\" class=\"row\">
            <div id=\"coupon_box__body\" class=\"col-sm-10 col-sm-offset-1\">
                <p> 利用するクーポンコードを入力してください。</p>
                <form method=\"post\" action=\"";
        // line 35
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_coupon_shopping");
        echo "\">
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                    <div class=\"dl_table\">
                        <dl>
                            <dt><label>クーポン利用</label></dt>
                            <dd>
                                <div class=\"form-group form-inline\">
                                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coupon_use", array()), 'widget');
        echo "
                                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coupon_use", array()), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"coupon_box__cd\">
                            <dt>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coupon_cd", array()), 'label');
        echo "</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coupon_cd", array()), 'widget');
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coupon_cd", array()), 'errors');
        echo "
                            </dd>
                        </dl>
                    </div>
                    <div id=\"coupon_box_footer\" class=\"row no-padding\">
                        <div id=\"coupon_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                            <p id=\"coupon_box__insert_button\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">
                                    登録する
                                </button>
                            </p>
                            <p id=\"coupon_box__back_button\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping");
        echo "\" class=\"btn btn-info btn-block\">戻る</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__d3201e73b03a2659eb42f693e8a101c80a38fc26b05bf33d2713eb942ff539f9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 62,  96 => 51,  92 => 50,  87 => 48,  79 => 43,  75 => 42,  66 => 36,  62 => 35,  55 => 30,  52 => 29,  35 => 14,  32 => 13,  28 => 10,  26 => 12,  11 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d3201e73b03a2659eb42f693e8a101c80a38fc26b05bf33d2713eb942ff539f9", "");
    }
}
