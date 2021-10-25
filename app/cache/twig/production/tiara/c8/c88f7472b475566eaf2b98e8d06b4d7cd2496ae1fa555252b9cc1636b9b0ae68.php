<?php

/* __string_template__ba0e74b3f71814c70d881a9fbd3b81260f484e30979f086a696096a387d4eb32 */
class __TwigTemplate_fa5ab579ec7e3c83f8804a5ef4f08ad2c2f3764b295a55b0c6d717aaa0b7e607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__ba0e74b3f71814c70d881a9fbd3b81260f484e30979f086a696096a387d4eb32", 22);
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
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
    <div class=\"container-fluid\">
\t<div class=\"inner\">
        <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 30
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("login_check");
        echo "\" onsubmit=\"return eccube.checkLoginFormInputted('login_mypage')\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
            ";
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.login.target.path"), "method")) {
            // line 32
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.login.target.path"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 33
                echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $context["targetPath"], "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        }
        // line 36
        echo "            <div id=\"login_box\" class=\"row\">
                <div id=\"mypage_login_wrap\" class=\"col-sm-8 col-sm-offset-2\">
                    <div id=\"mypage_login_box\" class=\"column\">

                        <div id=\"mypage_login_box__body\" class=\"column_inner clearfix\">
                            <div class=\"icon\"><svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg></div>
                            <div id=\"mypage_login_box__login_email\" class=\"form-group\">
                                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'widget', array("attr" => array("style" => "ime-mode: disabled;", "placeholder" => "メールアドレス", "autofocus" => true)));
        echo "
                            </div>
                            <div id=\"mypage_login_box__login_pass\" class=\"form-group\">
                                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                                ";
        // line 47
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_remember_me", array())) {
            // line 48
            echo "                                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 49
                echo "                                        <input id=\"mypage_login_box__login_memory\" type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 51
                echo "                                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_memory", array()), 'widget');
                echo "
                                    ";
            }
            // line 53
            echo "                                ";
        }
        // line 54
        echo "                            </div>
                            <div class=\"extra-form form-group\">
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 57
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 58
                echo "                                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                        ";
                // line 59
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                        ";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                    ";
            }
            // line 62
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                            </div>
                            ";
        // line 64
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 65
            echo "                            <div id=\"mypage_login_box__error_message\" class=\"form-group\">
                                <span class=\"text-danger\">";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : null));
            echo "</span>
                            </div>
                            ";
        }
        // line 69
        echo "                            <div id=\"mypage_login__login_button\" class=\"btn_area\">
                                <p class=\"center\"><button type=\"submit\" class=\"btn btn-info btn-block btn-lg\">ログイン</button></p>
\t\t\t\t<p class=\"old_pass\"><strong class=\"red\">※旧サイトで会員登録されていた方は、お手数ですがパスワード再発行からパスワードの再設定をお願いいたします。</strong></p>
                                <ul id=\"mypage_login__login_menu\" >
                                    <li class=\"col-sm-6\"><a href=\"";
        // line 73
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("forgot");
        echo "\">パスワード再発行</a></li>
                                    <li class=\"col-sm-6\"><a href=\"";
        // line 74
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("entry");
        echo "\">新規会員登録</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </form>
\t</div><!-- /.inner -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ba0e74b3f71814c70d881a9fbd3b81260f484e30979f086a696096a387d4eb32";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 81,  156 => 74,  152 => 73,  146 => 69,  140 => 66,  137 => 65,  135 => 64,  132 => 63,  126 => 62,  121 => 60,  117 => 59,  112 => 58,  109 => 57,  105 => 56,  101 => 54,  98 => 53,  92 => 51,  88 => 49,  85 => 48,  83 => 47,  79 => 46,  73 => 43,  64 => 36,  61 => 35,  52 => 33,  47 => 32,  45 => 31,  39 => 30,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ba0e74b3f71814c70d881a9fbd3b81260f484e30979f086a696096a387d4eb32", "");
    }
}
