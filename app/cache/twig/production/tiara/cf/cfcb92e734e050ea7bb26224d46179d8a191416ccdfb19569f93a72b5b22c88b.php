<?php

/* __string_template__fd1a71f89958e97f82bb707792d247938ac977f2bd40e1c76b12e081d1368d12 */
class __TwigTemplate_d9a03e9abe60cc80146e5f16ce7cc33085a33f46415e5bfd77c7b5019fffc12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__fd1a71f89958e97f82bb707792d247938ac977f2bd40e1c76b12e081d1368d12", 12);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "    <!--<h1 class=\"page-heading\">利用ポイントの設定</h1>-->
    <div id=\"detail_wrap\" class=\"container-fluid\">
        <div class=\"inner\">
        <div id=\"detail_box\" class=\"row\">
            <form method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("point_use");
        echo "\">
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                <div id=\"detail_box__body\" class=\"col-sm-10 col-sm-offset-1\">
                    <div class=\"row  text-center\">
                        <p class=\"col-sm-10\">
                            1ポイントを<span class=\"text-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter((isset($context["pointRate"]) ? $context["pointRate"] : null)), "html", null, true);
        echo "</span>として利用する事ができます。<br>
                            利用する場合は、以下のボックスにポイント数を入力してください。
                        </p>
                        <p class=\"col-sm-10\">
                            今回のご購入合計金額 は<span class=\"text-primary\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter((isset($context["total"]) ? $context["total"] : null)), "html", null, true);
        echo " </span>(送料、手数料込)です。<br>
                            現在の保有ポイントは「<span class=\"text-primary\">";
        // line 29
        echo twig_escape_filter($this->env, ((((isset($context["currentPoint"]) ? $context["currentPoint"] : null) >= 0)) ? (twig_number_format_filter($this->env, (isset($context["currentPoint"]) ? $context["currentPoint"] : null))) : (0)), "html", null, true);
        echo " pt</span>」です。";
        if (((isset($context["currentPoint"]) ? $context["currentPoint"] : null) >= 0)) {
            echo "「<span class=\"text-primary\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["maxUsePoint"]) ? $context["maxUsePoint"] : null)), "html", null, true);
            echo " pt</span>」までご利用いただけます。";
        }
        // line 30
        echo "                        </p>
                    </div>
                    <div id=\"detail_box__body_inner\" class=\"dl_table\">
                        <dl>
                            <dt id=\"detail_box__name\">今回のお買い物で、</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plg_use_point", array()), 'widget');
        echo "<span> ptを利用する。</span><br>
                                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plg_use_point", array()), 'errors');
        echo "
                            </dd>
                        </dl>
                    </div>
                    <div id=\"detail_box__button_menu\" class=\"row no-padding\">
                        <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                            <p id=\"detail_box__insert_button\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">ポイントを利用する</button>
                            </p>
                            <p id=\"detail_box__back_button\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping");
        echo "\" class=\"btn btn-info btn-block\">戻る</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div><!-- .inner -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__fd1a71f89958e97f82bb707792d247938ac977f2bd40e1c76b12e081d1368d12";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 46,  79 => 37,  75 => 36,  67 => 30,  59 => 29,  55 => 28,  48 => 24,  41 => 20,  37 => 19,  31 => 15,  28 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__fd1a71f89958e97f82bb707792d247938ac977f2bd40e1c76b12e081d1368d12", "");
    }
}
