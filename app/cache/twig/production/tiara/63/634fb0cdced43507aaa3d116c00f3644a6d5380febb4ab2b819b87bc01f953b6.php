<?php

/* __string_template__0fff169b161b9169e3ab52360a695772c75da71aa874dd21ae05e78a9d9c4dcd */
class __TwigTemplate_bc4d551f7cf49528acad6b97eba2a74b50a4310ff6718e5e906ed073c0d22f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__0fff169b161b9169e3ab52360a695772c75da71aa874dd21ae05e78a9d9c4dcd", 22);
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
<div id=\"complete_wrap\" class=\"container-fluid\">
\t<div class=\"inner\">
    <div id=\"complete_box\" class=\"unsubscribe_box\">
        <div id=\"complete_box__body\" class=\"row no-padding\">
            <div id=\"complete_box__message\" class=\"col-sm-6 col-sm-offset-3\">
                    <h3>退会が完了いたしました</h3>
                    <p>ご利用いただき誠にありがとうございました。<br>
                    またのご来店をお待ちしております。</p>
            </div>
        </div>
        <div id=\"complete_box__top_button\" class=\"row\">
            <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                <p><a href=\"";
        // line 42
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\" class=\"btn btn-info btn-block\">トップページへ</a></p>
            </div>
        </div>
    </div>
\t</div><!-- /.inner -->
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__0fff169b161b9169e3ab52360a695772c75da71aa874dd21ae05e78a9d9c4dcd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 42,  36 => 29,  33 => 28,  29 => 22,  27 => 26,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__0fff169b161b9169e3ab52360a695772c75da71aa874dd21ae05e78a9d9c4dcd", "");
    }
}
