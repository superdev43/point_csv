<?php

/* __string_template__c7358af8a7b7e3934974337045bbe858955dc3ea940686d07ffe231cc9040a83 */
class __TwigTemplate_e3d379e988fcd740107b8e2b4963d28c2179e1957f40acfe1de08f5d98eeac64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__c7358af8a7b7e3934974337045bbe858955dc3ea940686d07ffe231cc9040a83", 22);
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
        $context["body_class"] = "cart_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
    <div id=\"complete_wrap\" class=\"container-fluid\">
\t<div class=\"inner\">
        <div id=\"complete_flow_box\" class=\"row\">
            <div id=\"complete_flow_box__body\" class=\"col-md-12\">
                ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 33
            echo "                <div id=\"complete_flow_box__flow_state\" class=\"flowline step3\">
                ";
        } else {
            // line 35
            echo "                <div id=\"complete_flow_box__flow_state\" class=\"flowline step4\">
                ";
        }
        // line 37
        echo "                    <ul id=\"complete_flow_box__flow_state_list\" class=\"clearfix\">
                        <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 40
            echo "                        <li><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 43
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li class=\"active\"><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 47
        echo "                    </ul>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->


        <div id=\"deliveradd_input\" class=\"row\">
            <div id=\"deliveradd_input_box\" class=\"col-sm-10 col-sm-offset-1\">
                <div id=\"deliveradd_input_box__message\" class=\"complete_message\">
                    <h2 class=\"heading01\">ご注文ありがとうございました</h2>
                    <p>ただいま、ご注文の確認メールをお送りさせていただきました。<br />
                        万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますが<br>もう一度お問い合わせいただくか、お電話にてお問い合わせくださいませ。<br />
                        今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
\t\t\t<p class=\"tel\"><img src=\"/img/common/icon_tel.png\" alt=\"072-294-7828\" />072-294-7828</p>
                </div>
                <div id=\"deliveradd_input_box__top_button\" class=\"row no-padding\">
                    <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                        <p>
                            <a href=\"";
        // line 65
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\" class=\"btn btn-info btn-block\">トップページへ</a>
                        </p>
                    </div>
                </div>

            </div><!-- /.col -->
        </div><!-- /.row -->
\t</div><!-- /.inner -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c7358af8a7b7e3934974337045bbe858955dc3ea940686d07ffe231cc9040a83";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 65,  68 => 47,  62 => 43,  57 => 40,  55 => 39,  51 => 37,  47 => 35,  43 => 33,  41 => 32,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__c7358af8a7b7e3934974337045bbe858955dc3ea940686d07ffe231cc9040a83", "");
    }
}
