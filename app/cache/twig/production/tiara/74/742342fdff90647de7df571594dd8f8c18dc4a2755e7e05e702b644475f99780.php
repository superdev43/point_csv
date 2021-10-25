<?php

/* __string_template__4967f982e0bd40e4379cd33e503caaf83556326af0bbf68ac6813cb0b48c7f84 */
class __TwigTemplate_8b3f71deb852f87471ad56ceb252f396e8c3ce47f323440876b311d9ccf0fd2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__4967f982e0bd40e4379cd33e503caaf83556326af0bbf68ac6813cb0b48c7f84", 22);
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
        // line 24
        $context["body_class"] = "registration_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"inner\">
    <h1 class=\"page-heading\">新規会員登録確認</h1>
    <div id=\"confirm_wrap\" class=\"container-fluid\">
        <div id=\"confirm_box\" class=\"row\">
            <div id=\"confirm_box__body\" class=\"col-md-10 col-md-offset-1\">
                <p id=\"confirm_box__message\">下記の内容で送信してもよろしいでしょうか？<br/>よろしければ、一番下の「会員登録をする」ボタンをクリックしてください。</p>

                <form method=\"post\" action=\"";
        // line 34
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("entry");
        echo "\">
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                    <div id=\"confirm_box__body_inner\" class=\"dl_table\">
                        <dl id=\"confirm_box__name\">
                            <dt>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
        echo "
                                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
        echo "
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__kana\">
                            <dt>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
        echo "
                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
        echo "
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__company_name\">
                            <dt>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "</dt>
                            <dd class=\"form-group input_name\">
                                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget');
        echo "
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__address_detail\">
                            <dt>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "</dt>
                            <dd>
                                <div id=\"confirm_box__zip\" class=\"form-group form-inline input_zip ";
        // line 60
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'widget');
        echo "</div>
                                <div id=\"confirm_box__address\" class=\"";
        // line 61
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), "vars", array()), "errors", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), "vars", array()), "errors", array()))) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), "vars", array()), "errors", array())))) {
            echo "has-error";
        }
        echo "\">
                                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__tel\">
                            <dt>";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-inline form-group input_tel\">
                                    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__fax\">
                            <dt>";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-inline form-group input_tel\">
                                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'widget', array("attr" => array("class" => "short")));
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__email\">
                            <dt>";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-group\">
                                    ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "first", array()), 'widget');
        echo "
                                    ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "second", array()), 'widget', array("freeze_display_text" => false));
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__password\">
                            <dt>";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-group\">
                                    ********
                                    ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "first", array()), 'widget', array("freeze_display_text" => false));
        echo "
                                    ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "second", array()), 'widget', array("freeze_display_text" => false));
        echo "
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"dl_table not_required\">
                        <dl id=\"confirm_box__birth\">
                            <dt>";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-group form-inline\">
                                    ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birth", array()), 'widget');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__sex\">
                            <dt>";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-group form-inline\">
                                    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sex", array()), 'widget');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl id=\"confirm_box__job\">
                            <dt>";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'label');
        echo "</dt>
                            <dd>
                                <div class=\"form-group form-inline\">
                                    ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "job", array()), 'widget');
        echo "
                                </div>
                            </dd>
                        </dl>
                    </div>

                    ";
        // line 150
        echo "<div class=\"dl_table\">
<dl>
<dt>";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mailmaga_flg", array()), 'label');
        echo "</dt>
<dd>
    <div class=\"form-group form-inline\">
        ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mailmaga_flg", array()), 'widget');
        echo "
    </div>
</dd>
</dl>
</div>
<div id=\"confirm_box__footer\" class=\"row no-padding\">
                        <div id=\"confirm_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                            <p id=\"confirm_box__insert_button\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\" name=\"mode\" value=\"complete\">
                                    会員登録をする
                                </button>
                            </p>
                            <p id=\"confirm_box__back_button\">
                                <button type=\"submit\" class=\"btn btn-info btn-block\" name=\"mode\" value=\"back\">戻る
                                </button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div><!-- /.inner -->
";
    }

    public function getTemplateName()
    {
        return "__string_template__4967f982e0bd40e4379cd33e503caaf83556326af0bbf68ac6813cb0b48c7f84";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 155,  238 => 152,  234 => 150,  225 => 123,  219 => 120,  211 => 115,  205 => 112,  197 => 107,  191 => 104,  181 => 97,  177 => 96,  170 => 92,  162 => 87,  158 => 86,  152 => 83,  144 => 78,  138 => 75,  130 => 70,  124 => 67,  116 => 62,  110 => 61,  102 => 60,  97 => 58,  90 => 54,  85 => 52,  78 => 48,  74 => 47,  69 => 45,  62 => 41,  58 => 40,  53 => 38,  47 => 35,  43 => 34,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__4967f982e0bd40e4379cd33e503caaf83556326af0bbf68ac6813cb0b48c7f84", "");
    }
}
