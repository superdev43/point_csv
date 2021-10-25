<?php

/* __string_template__7dda324f00a715c55542cabe8fe309c53b12fc6bb6265095342851d454e84ee7 */
class __TwigTemplate_358564f9e94038b15752bf9265fc27f42ead988142a95e4e65bec1cb38cf662f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__7dda324f00a715c55542cabe8fe309c53b12fc6bb6265095342851d454e84ee7", 22);
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
        echo "
    <div id=\"contents\" class=\"main_only\">
        <div id=\"reset_wrap\" class=\"container-fluid inner no-padding\">
            <div id=\"main\">
                <h1 class=\"page-heading\">パスワード変更(完了ページ)</h1>
                <div id=\"reset_box\" class=\"container-fluid\">
                    <div id=\"reset_box__body\" class=\"row\">
                        <div id=\"reset_box__message\" class=\"col-md-10 col-md-offset-1\">
                            <h2>新しいパスワードが送信されました。</h2>
                            <p>新しいパスワード送り致しましたので、メールをご確認ください。</p>
                            <p>今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
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
        return "__string_template__7dda324f00a715c55542cabe8fe309c53b12fc6bb6265095342851d454e84ee7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__7dda324f00a715c55542cabe8fe309c53b12fc6bb6265095342851d454e84ee7", "");
    }
}
