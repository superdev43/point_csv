<?php

/* __string_template__e6afbf52519c0c29eb7daae15c8b6fba7ad51abf73c36918acaf59e7f2849da8 */
class __TwigTemplate_3ce1b4b1ef166dd94583bfac9e97067dfbd9b3c9d4fffb194a206c980e4d6f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e6afbf52519c0c29eb7daae15c8b6fba7ad51abf73c36918acaf59e7f2849da8", 22);
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
        $context["mypageno"] = "withdraw";
        // line 26
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "
<div id=\"confirm_wrap\" class=\"container-fluid\">
\t<div class=\"inner\">
    ";
        // line 32
        $this->loadTemplate("Mypage/navi.twig", "__string_template__e6afbf52519c0c29eb7daae15c8b6fba7ad51abf73c36918acaf59e7f2849da8", 32)->display($context);
        // line 33
        echo "    <div id=\"confirm_box\" class=\"unsubscribe_box\">
        <div id=\"confirm_box__body\" class=\"row no-padding\">
            <div id=\"confirm_box__message\" class=\"col-sm-6 col-sm-offset-3\">
                    <div class=\"icon\"><svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg></div>
                    <h3>退会手続きを実行してもよろしいでしょうか？</h3>
                    <p>退会手続きが完了した時点で、現在保存されている購入履歴やお届け先等の情報は、すべて削除されますのでご注意ください。</p>
            </div>
        </div>
        <form method=\"post\" action=\"";
        // line 41
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage_withdraw");
        echo "\">
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
                <div id=\"confirm_box__footer\" class=\"row\">
                    <div id=\"confirm_box__complete_button\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p><a href=\"";
        // line 45
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage");
        echo "\" class=\"btn btn-info btn-block\">いいえ、退会しません</a></p>
                        <p><button type=\"submit\" class=\"btn btn-default btn-block\" name=\"mode\" value=\"complete\">はい、退会します</button></p>
                    </div>
                </div>
        </form>
    </div>
    </div><!-- /.inner -->
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e6afbf52519c0c29eb7daae15c8b6fba7ad51abf73c36918acaf59e7f2849da8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 45,  57 => 42,  53 => 41,  43 => 33,  41 => 32,  36 => 29,  33 => 28,  29 => 22,  27 => 26,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e6afbf52519c0c29eb7daae15c8b6fba7ad51abf73c36918acaf59e7f2849da8", "");
    }
}
