<?php

/* __string_template__b882dfbbfbe3f2e7ed1f86a3fbbd7545ddbf7e319520c86222e709a856abab61 */
class __TwigTemplate_8ed16395f6a1e9d7e5f990badc504acf591c435092168aad67fe8d14cd5027fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b882dfbbfbe3f2e7ed1f86a3fbbd7545ddbf7e319520c86222e709a856abab61", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "setting", 1 => "admin_setting_productoption");
        // line 16
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "基本情報設定";
    }

    // line 14
    public function block_sub_title($context, array $blocks = array())
    {
        echo "商品オプションプラグイン設定";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "<form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" >
";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
<div class=\"row\" id=\"aside_wrap\">
    <div class=\"col-md-9\">
        <div class=\"box form-horizontal\">
            <div class=\"box-body\">
                <div class=\"form-group\">
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option", array()), 'label');
        echo "
                    <div class=\"col-sm-9 col-lg-10\">
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option", array()), 'widget', array("attr" => array("rows" => 15, "style" => "font-size:12px")));
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"></label>
                    <div class=\"col-sm-9 col-lg-10\">
                        <button type=\"submit\" class=\"btn btn-info btn-block btn-lg\" name=\"mode\" value=\"init1\">初期状態に戻す</button><br />
                        商品詳細ページのオプション選択表示部のデザイン編集を行われる際にご使用ください。<br />
                        <span style=\"color:#F00;\">※「id=\"option_description_link_";
        // line 37
        echo "{{";
        echo " ProductOption.Option.id ";
        echo "}}";
        echo "\"」<br />
                        についてはポップアップ表示処理で必要な記述ですので削除・変更されないようにお願いいたします。</span><br />
                        商品詳細ページ中に&nbsp;&lt;!-- option --&gt;&nbsp;を記述するとその位置に上記のHTMLが挿入されます。<br />
                        買い物かごの&lt;form&gt;～&lt;/form&gt;の間であれば有効です。

                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_description", array()), 'label');
        echo "
                    <div class=\"col-sm-9 col-lg-10\">
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_description", array()), 'widget', array("attr" => array("rows" => 15, "style" => "font-size:12px")));
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_description", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"></label>
                    <div class=\"col-sm-9 col-lg-10\">
                        <button type=\"submit\" class=\"btn btn-info btn-block btn-lg\" name=\"mode\" value=\"init2\">初期状態に戻す</button><br />
                        商品詳細ページのオプション説明ポップアップ画面のデザイン調整を行われる際に設定されてください。<br />
                        <span style=\"color:#F00;\">※「id=\"option_description_";
        // line 56
        echo "{{";
        echo " Option.id ";
        echo "}}";
        echo "\" class=\"option_description\"」<br />
                        についてはポップアップ表示処理で必要な記述ですので削除・変更されないようにお願いいたします。
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_price", array()), 'label');
        echo "
                    <div class=\"col-sm-9 col-lg-10\">
                        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_price", array()), 'widget', array("attr" => array("rows" => 15, "style" => "font-size:12px")));
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_price", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"></label>
                    <div class=\"col-sm-9 col-lg-10\">
                        <button type=\"submit\" class=\"btn btn-info btn-block btn-lg\" name=\"mode\" value=\"init3\">初期状態に戻す</button><br />
                        商品詳細ページ上でのオプション価格の合計表示部のデザイン調整を行われる際に設定されてください。<br />
                        <span style=\"color:#F00;\">※「id=\"option_price_default\"」「id=\"option_price_inctax_default\"」<br />
                        については動的処理を行う際に必要になりますので削除・変更されないようにお願いいたします。</span><br />
                        商品詳細ページ中に&nbsp;&lt;!-- option_price --&gt;&nbsp;を記述するとその位置に上記のHTMLが挿入されます。<br />
                        </span>
                    </div>
                </div>
                ";
        // line 79
        if ((isset($context["enablePoint"]) ? $context["enablePoint"] : null)) {
            // line 80
            echo "                <div class=\"form-group\">
                    ";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_point", array()), 'label');
            echo "
                    <div class=\"col-sm-9 col-lg-10\">
                        ";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_point", array()), 'widget', array("attr" => array("rows" => 15, "style" => "font-size:12px")));
            echo "
                        ";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tpl_option_point", array()), 'errors');
            echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"></label>
                    <div class=\"col-sm-9 col-lg-10\">
                        <button type=\"submit\" class=\"btn btn-info btn-block btn-lg\" name=\"mode\" value=\"init4\">初期状態に戻す</button><br />
                        商品詳細ページ上でのオプションポイントの合計表示部のデザイン調整を行われる際に設定されてください。<br />
                        <span style=\"color:#F00;\">「id=\"option_point_default\"」<br />
                        については動的処理を行う際に必要になりますので削除・変更されないようにお願いいたします。</span><br />
                        商品詳細ページ中に&nbsp;&lt;!-- option_point --&gt;&nbsp;を記述するとその位置に上記のHTMLが挿入されます。<br />
                        </span>
                    </div>
                </div>
                ";
        }
        // line 99
        echo "            </div>
        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"col_inner\" id=\"aside_column\">
            <div class=\"box no-header\">
                <div class=\"box-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" name=\"mode\" value=\"regist\">登録</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b882dfbbfbe3f2e7ed1f86a3fbbd7545ddbf7e319520c86222e709a856abab61";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 99,  166 => 84,  162 => 83,  157 => 81,  154 => 80,  152 => 79,  135 => 65,  131 => 64,  126 => 62,  115 => 56,  104 => 48,  100 => 47,  95 => 45,  82 => 37,  71 => 29,  67 => 28,  62 => 26,  53 => 20,  50 => 19,  47 => 18,  41 => 14,  35 => 13,  31 => 11,  29 => 16,  27 => 12,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b882dfbbfbe3f2e7ed1f86a3fbbd7545ddbf7e319520c86222e709a856abab61", "");
    }
}
