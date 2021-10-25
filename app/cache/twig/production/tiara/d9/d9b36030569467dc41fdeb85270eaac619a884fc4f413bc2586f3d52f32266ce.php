<?php

/* Mypage/navi.twig */
class __TwigTemplate_12bf7d0eec616d42a42b86d0e9c03dc70ba63272815b2899779ef6a8f2cd2228 extends Twig_Template
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
        $context["favorite"] = $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array());
        // line 23
        echo "<nav id=\"navi_list_box\" class=\"local_nav ";
        if (((isset($context["favorite"]) ? $context["favorite"] : null) == 1)) {
            echo "favorite";
        }
        echo "\">
    <ul id=\"navi_list\">
        <li class=\"";
        // line 25
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "index")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage");
        echo "\">ご注文履歴</a></li>
        ";
        // line 26
        if (((isset($context["favorite"]) ? $context["favorite"] : null) == 1)) {
            // line 27
            echo "        <li class=\"";
            if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "favorite")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
            echo "\">お気に入り一覧</a></li>
        ";
        }
        // line 29
        echo "        <li class=\"";
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "change")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage_change");
        echo "\">会員情報編集</a></li>
        <li class=\"";
        // line 30
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "delivery")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage_delivery");
        echo "\">お届け先編集</a></li>
        <li class=\"";
        // line 31
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) ? $context["mypageno"] : null), "")) : ("")) == "withdraw")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage_withdraw");
        echo "\">退会手続き</a></li>
    </ul>
</nav>
<div id=\"welcome_message\" class=\"message\">
    <p>
        ようこそ ／ ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name02", array()), "html", null, true);
        echo " 様
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  66 => 31,  58 => 30,  49 => 29,  39 => 27,  37 => 26,  29 => 25,  21 => 23,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mypage/navi.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Mypage/navi.twig");
    }
}
