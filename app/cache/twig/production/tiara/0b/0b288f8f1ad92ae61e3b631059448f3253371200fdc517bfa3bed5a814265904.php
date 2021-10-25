<?php

/* __string_template__11e12d71174dcfe307fe1f0b23ba6b9165ae97aae0e6ae4222059a630b4bcd1d */
class __TwigTemplate_bb9168986109a72d5c48444e11ff9ed694e59f9046e241c2d6bbe6593dacf41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__11e12d71174dcfe307fe1f0b23ba6b9165ae97aae0e6ae4222059a630b4bcd1d", 22);
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
        echo "    <div id=\"contents\" class=\"main_only\">
        <div class=\"container-fluid inner no-padding\">
            <div id=\"main\">
                <h1 class=\"page-heading\">パスワードの再発行</h1>
                <div id=\"top_wrap\" class=\"container-fluid\">
                    <div id=\"top_box\" class=\"row\">
                        <div id=\"top_box__body\" class=\"col-md-10 col-md-offset-1\">
                            <p>ご登録時のメールアドレスを入力して「次へ」ボタンをクリックしてください。</p>
                            <p>※新しくパスワードを発行いたしますので、お忘れになったパスワードはご利用できなくなります。</p>
\t\t\t\t<p class=\"old_pass\"><strong class=\"red\">※旧サイトでパソコン/携帯の両方のアドレスをご登録されていた方は、パソコンのメールアドレスをご入力ください。</strong></p>
                            <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 35
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("forgot");
        echo "\">
                                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                                <div id=\"top_box__body_inner\" class=\"dl_table\">
                                    <dl id=\"top_box__login_email\">
                                        <dt>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'label');
        echo "</dt>
                                        <dd>
                                            <div class=\"form-group\">
                                                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'widget');
        echo "
                                                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'errors');
        echo "
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 49
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 50
                echo "                                        <div class=\"extra-form dl_table\">
                                            ";
                // line 51
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "

                                        </div>

                                    ";
            }
            // line 56
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "<span style=\"color:#f00; font-weight: bold\">※モバイルやパソコンにドメイン設定（受信拒否設定）をされているお客様の場合、当店からお送りするご登録メールや注文確認メールをお届けする事ができません。受信拒否設定を解除して頂くか、又は『info@tiara-collection.com』を受信リストに加えて頂く必要がございます。</span> 
                                <div id=\"top_box__footer\" class=\"row no-padding\">
                                <div id=\"top_box__next_button\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                                    <p><button type=\"submit\" class=\"btn btn-primary btn-block\">次のページへ</button></p>
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
        return "__string_template__11e12d71174dcfe307fe1f0b23ba6b9165ae97aae0e6ae4222059a630b4bcd1d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 58,  89 => 56,  81 => 51,  78 => 50,  75 => 49,  71 => 48,  63 => 43,  59 => 42,  53 => 39,  47 => 36,  43 => 35,  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__11e12d71174dcfe307fe1f0b23ba6b9165ae97aae0e6ae4222059a630b4bcd1d", "");
    }
}
