<?php

/* __string_template__2a5aaecc211124d48c33468e2998ad6c41ba35db0802942d42bc8508b66dbf96 */
class __TwigTemplate_8ae66d5a68d8975c1ccea7ad48ba377f7c7c34d14728a4f9739f1df9918ca2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__2a5aaecc211124d48c33468e2998ad6c41ba35db0802942d42bc8508b66dbf96", 22);
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

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "<div id=\"contents\" class=\"main_only\">
    <div id=\"confirm_wrap\" class=\"container-fluid inner no-padding\">
        <div id=\"main\">
            <h1 class=\"page-heading\">お問い合わせ</h1>

            <div id=\"confirm_inner\" class=\"container-fluid\">
                <div id=\"confirm_box\" class=\"row\">
                    <div id=\"confirm_box__body\" class=\"col-md-10 col-md-offset-1\">
                        <p>内容によっては回答をさしあげるのにお時間をいただくこともございます。<br />
                            また、休業日は翌営業日以降の対応となりますのでご了承ください。</p>

                        <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
                            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                            <div id=\"confirm_box__body_inner\" class=\"dl_table\">
                                <dl id=\"confirm_box__name\">
                                    <dt>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "</dt>
                                    <dd class=\"form-group\">
                                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget');
        echo "
                                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget');
        echo "
                                    </dd>
                                </dl>
                                <dl id=\"confirm_box__kana\">
                                    <dt>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "</dt>
                                    <dd class=\"form-group\">
                                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget');
        echo "
                                        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget');
        echo "
                                    </dd>
                                </dl>
                                <dl id=\"confirm_box__address\">
                                    <dt>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "</dt>
                                    <dd>
                                        <div class=\"form-group\">
                                            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'widget');
        echo "<br />
                                            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl id=\"confirm_box__tel\">
                                    <dt>";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "</dt>
                                    <dd>
                                        <div class=\"form-group\">
                                            ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'widget');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl id=\"confirm_box__email\">
                                    <dt>";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "</dt>
                                    <dd>
                                        <div class=\"form-group\">
                                            ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl id=\"confirm_box__contents\">
                                    <dt>";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contents", array()), 'label');
        echo "</dt>
                                    <dd>
                                        <div class=\"column\">
                                            ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contents", array()), 'widget');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                            <div id=\"confirm_box__footer\" class=\"row no-padding\">
                                <div id=\"confirm_box__button_menu\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                                    <p id=\"confirm_box__confirm_button\"><button type=\"submit\" class=\"btn btn-primary btn-block\" name=\"mode\" value=\"complete\">送信をする</button></p>
                                    <p id=\"confirm_box__back_button\"><button type=\"submit\" class=\"btn btn-info btn-block\" name=\"mode\" value=\"back\">戻る</button></p>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2a5aaecc211124d48c33468e2998ad6c41ba35db0802942d42bc8508b66dbf96";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 82,  129 => 79,  121 => 74,  115 => 71,  107 => 66,  101 => 63,  93 => 58,  89 => 57,  83 => 54,  76 => 50,  72 => 49,  67 => 47,  60 => 43,  56 => 42,  51 => 40,  45 => 37,  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__2a5aaecc211124d48c33468e2998ad6c41ba35db0802942d42bc8508b66dbf96", "");
    }
}
