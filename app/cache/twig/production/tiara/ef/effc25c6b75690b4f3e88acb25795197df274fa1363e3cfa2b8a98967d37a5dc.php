<?php

/* Block/password_info.twig */
class __TwigTemplate_24366cdfbbf26644d8dfb477a463b1350fe4d7d608724968d6e021cc9c73f46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>/*
<script src=\"/js/js.cookie.js\"></script>

<script>
\$(function() {
\tvar view_count = Cookies.get(\"view_change_pass\");

\tif(view_count == null) {
\t\tview_count = 0;
\t}else{
\t\tview_count = Cookies.get(\"view_change_pass\");
\t}
\tview_count++;
\tCookies.set(\"view_change_pass\",view_count, { expires: 365 });

\tif(view_count < 2) {
\t\t\$('#bloc_over_password_info').removeClass('none');
\t}
\tconsole.log(view_count);
});
</script>


";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 25
            echo "
";
        } else {
            // line 27
            echo "


<div id=\"bloc_over_password_info\" class=\"none\">
\t<div class=\"center_box\">
\t\t<p class=\"btn btn_close\"><img src=\"/img/common/icon_close.png\" alt=\"×\" /></p>
\t\t<p class=\"old_pass\"><strong class=\"red\">サイトリニューアルに伴い、<br>旧サイトで会員登録されていた方はパスワードの再設定が必要です。<br>下のボタンからパスワード再設定をお願いいたします。</strong></p>

\t\t<p class=\"btn btn_pass\"><a href=\"/forgot\">パスワード再発行</a></p>
\t</div><!-- /.center_box -->
</div><!-- /#paddword_info -->
";
        }
        // line 39
        echo "*/</style>";
    }

    public function getTemplateName()
    {
        return "Block/password_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 39,  50 => 27,  46 => 25,  44 => 24,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/password_info.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/password_info.twig");
    }
}
