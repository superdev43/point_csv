<?php

/* Mail/reset_complete_mail.twig */
class __TwigTemplate_953a38c89843f6133e5a711a735a76a56afd13c3bc61559588d786b1bd8ea679 extends Twig_Template
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
        // line 22
        echo "　※本メールは自動配信メールです。
　等幅フォント(MSゴシック12ポイント、Osaka-等幅など)で
　最適にご覧になれます。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        echo "よりパスワード再発行手続きを希望された方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "email02", array()), "html", null, true);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

パスワードを変更いたしました。

新しいパスワード：";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo "

このパスワードは一時的なものですので、お早めにご変更下さい。";
    }

    public function getTemplateName()
    {
        return "Mail/reset_complete_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 37,  33 => 31,  27 => 28,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mail/reset_complete_mail.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Mail/reset_complete_mail.twig");
    }
}
