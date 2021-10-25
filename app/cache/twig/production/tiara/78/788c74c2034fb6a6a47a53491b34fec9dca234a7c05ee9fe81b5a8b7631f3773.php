<?php

/* __string_template__e3f7168d41f3ec6108da1029b4ea40a3444b5520e2a159952cdb3a7a01971ca9 */
class __TwigTemplate_f120ba9264d3460fe30b4cd1c2b62b09fbb3305ab0379dd50c4039aeff3ef35c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e3f7168d41f3ec6108da1029b4ea40a3444b5520e2a159952cdb3a7a01971ca9", 22);
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

<div id=\"complete_wrap\" class=\"container-fluid\">
<div class=\"inner\">
    <div id=\"deliveradd_input\" class=\"row\">
        <div id=\"complete_box\" class=\"col-sm-10 col-sm-offset-1\">
            <div id=\"complete_box__body\" class=\"complete_message\">
                <h2 id=\"complete_box__header_message\">お問い合わせ内容の送信が完了いたしました。</h2>
                <p id=\"complete_box__message\">
                万一、ご回答メールが届かない場合は、トラブルの可能性もありますので<br />
                大変お手数ではございますがもう一度お問い合わせいただくか、お電話にてお問い合わせください。<br />
                今後ともご愛顧賜りますようよろしくお願い申し上げます。
                </p>
            </div>
            <div id=\"complete_box__footer\" class=\"row no-padding\">
                <div id=\"complete_box__top_button\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                    <p><a href=\"";
        // line 41
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("index");
        echo "\" class=\"btn btn-info btn-block\">トップページへ</a></p>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.inner -->
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e3f7168d41f3ec6108da1029b4ea40a3444b5520e2a159952cdb3a7a01971ca9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 41,  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e3f7168d41f3ec6108da1029b4ea40a3444b5520e2a159952cdb3a7a01971ca9", "");
    }
}
