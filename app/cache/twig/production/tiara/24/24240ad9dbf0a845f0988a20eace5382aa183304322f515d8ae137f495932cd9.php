<?php

/* __string_template__0a1d41a933a2784b2efe2a1b6e42209b73396c33aac6030318992e2ba3071b22 */
class __TwigTemplate_c323f73e2cd8ed0052cff675a53bee07556d0a0a8e2e09c4661e6b594bf77115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__0a1d41a933a2784b2efe2a1b6e42209b73396c33aac6030318992e2ba3071b22", 22);
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
                <h1 class=\"page-heading\">パスワード発行メールの送信 完了</h1>
                <div id=\"complete_wrap\" class=\"container-fluid\">
                    <div id=\"complete_box\" class=\"row\">
                        <div id=\"complete_box__body\" class=\"col-md-10 col-md-offset-1\">
                            <div id=\"complete_box__message\" class=\"complete_message\">
                                <h2>パスワード再発行メールの送信が完了しました。</h2>
                                <p>ご登録メールアドレスにパスワードを再発行するためのメールを送信いたしました。<br/>
                            メールの内容をご確認いただきますよう、お願いいたします。</p>
                                <p>※メールが届かない場合はメールアドレスをご確認の上、再度お試しください。</p>
                            </div>
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
        return "__string_template__0a1d41a933a2784b2efe2a1b6e42209b73396c33aac6030318992e2ba3071b22";
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
        return new Twig_Source("", "__string_template__0a1d41a933a2784b2efe2a1b6e42209b73396c33aac6030318992e2ba3071b22", "");
    }
}
