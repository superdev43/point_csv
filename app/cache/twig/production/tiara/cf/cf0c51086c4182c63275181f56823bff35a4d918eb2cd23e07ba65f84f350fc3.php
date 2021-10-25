<?php

/* Mail/forgot_mail.twig */
class __TwigTemplate_4502cca428051b74d8a06be05a72bdb7a55849b34f0d2d066cefe47a23b59c16 extends Twig_Template
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

パスワードを変更するには下記URLにアクセスしてください。
※入力されたお客様の情報はSSL暗号化通信により保護されます。
※URLの有効期限は";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "customer_reset_expire", array()), "html", null, true);
        echo "分以内です。有効期限を過ぎますとURLは無効となりますので、その場合、もう一度最初から手続きを行ってください。

";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["reset_url"]) ? $context["reset_url"] : null), "html", null, true);
        echo "

上記URLにてパスワードを変更が完了いたしましたら
改めてご登録内容のご確認メールをお送り致します。";
    }

    public function getTemplateName()
    {
        return "Mail/forgot_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 39,  42 => 37,  33 => 31,  27 => 28,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mail/forgot_mail.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Mail/forgot_mail.twig");
    }
}
