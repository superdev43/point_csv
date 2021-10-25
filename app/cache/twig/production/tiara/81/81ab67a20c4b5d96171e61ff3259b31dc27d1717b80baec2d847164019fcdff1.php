<?php

/* Mail/contact_mail.twig */
class __TwigTemplate_f5fb7aea6ad91f978febe11cd3f7cbc0823bde87d342e895ce6f4ba3fd3eb2f0 extends Twig_Template
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
        echo "よりお問い合わせされた方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "email02", array()), "html", null, true);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name02", array()), "html", null, true);
        echo " 様

以下のお問い合わせを受付致しました。
確認次第ご連絡いたしますので、少々お待ちください。

■お名前　：";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name02", array()), "html", null, true);
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kana01", array()) || $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kana02", array()))) {
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kana01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kana02", array()), "html", null, true);
            echo ")";
        }
        echo " 様
■郵便番号：";
        // line 41
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "zip01", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "zip02", array()))) {
            echo "〒";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "zip01", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "zip02", array()), "html", null, true);
        }
        // line 42
        echo "
■住所　　：";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pref", array(), "any", false, true), "name", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pref", array()), "name", array()), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "addr01", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "addr02", array()), "html", null, true);
        echo "
■電話番号：";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tel01", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tel02", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tel03", array()), "html", null, true);
        echo "
■メールアドレス：";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email", array()), "html", null, true);
        echo "
■お問い合わせの内容

";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "contents", array()), "html", null, true);
        echo "


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
◇◆tiara(ティアラ)◆◇
E-MAIL info@tiara-collection.com   TEL  072-294-7828
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━";
    }

    public function getTemplateName()
    {
        return "Mail/contact_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  90 => 45,  82 => 44,  73 => 43,  70 => 42,  63 => 41,  50 => 40,  40 => 35,  33 => 31,  27 => 28,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mail/contact_mail.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Mail/contact_mail.twig");
    }
}
