<?php

/* __string_template__e23e9060995842f6a9f0f0e06e99be67a008f69ef259d84e8b1a988463d86a46 */
class __TwigTemplate_ca80a951318017306ad298d2a446914e949b4db7e768ff87bd77b40228b7d8ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e23e9060995842f6a9f0f0e06e99be67a008f69ef259d84e8b1a988463d86a46", 15);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 17
        $context["menus"] = array(0 => "mailmagazine", 1 => "mailmagazine");
        // line 22
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 15
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "メルマガ管理";
    }

    // line 20
    public function block_sub_title($context, array $blocks = array())
    {
        echo "配信";
    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        // line 25
        echo "    <script>
        \$(function(){
            \$(\"#mail_magazine_template\").on(\"change\", function(){
                var id = \$(this).val()
                if (id) {
                    action= '";
        // line 30
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_select");
        echo "/' + id;
                } else {
                    action= '";
        // line 32
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_select");
        echo "';
                }

                \$('#mode').val('select');
                
                document.form1.action = action;
                document.form1.submit();
            });
        });

        function changeAction(action) {
            document.form1.action = action;
            document.form1.submit();
        }

    </script>
";
    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        // line 51
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <input id=\"mode\" type=\"hidden\" name=\"mode\">
    <div class=\"row\" id=\"aside_wrap\">
        <div id=\"detail_wrap\" class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">配信内容の設定</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">

                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "template", array()), 'row');
        echo "
                    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'row');
        echo "
                    ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'row', array("attr" => array("rows" => 20)));
        echo "
                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "htmlBody", array()), 'row', array("attr" => array("rows" => 20)));
        echo "

                    <div style=\"display: none\">
                        ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </div>
                    <span class=\"help-block\">※ 名前差し込み時は {name} といれてください</span>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div id=\"detail_box__footer\" class=\"row hidden-xs hidden-sm\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <p><a href=\"";
        // line 76
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine");
        echo "\" onclick=\"changeAction('";
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine");
        echo "'); return false;\">検索画面に戻る</a></p>
                </div>
            </div>
        </div>
        <div id=\"common_box\" class=\"col-md-3\">
            ";
        // line 82
        echo "            <div class=\"col_inner\" id=\"aside_column\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"changeAction('";
        // line 87
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_confirm");
        echo "/' + document.form1.mail_magazine_template.value); return false;\">確認画面へ</button>
                            </div>
                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>
    </div>
    </form>
    



";
    }

    public function getTemplateName()
    {
        return "__string_template__e23e9060995842f6a9f0f0e06e99be67a008f69ef259d84e8b1a988463d86a46";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 87,  142 => 82,  132 => 76,  121 => 68,  115 => 65,  111 => 64,  107 => 63,  103 => 62,  90 => 52,  87 => 51,  84 => 50,  63 => 32,  58 => 30,  51 => 25,  48 => 24,  42 => 20,  36 => 19,  32 => 15,  30 => 22,  28 => 17,  11 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e23e9060995842f6a9f0f0e06e99be67a008f69ef259d84e8b1a988463d86a46", "");
    }
}
