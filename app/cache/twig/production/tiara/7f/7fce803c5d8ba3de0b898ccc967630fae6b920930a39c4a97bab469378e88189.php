<?php

/* ContactProduct/Resource/template/default/Product/contact_button.twig */
class __TwigTemplate_372acfbf9851072bb2d137321e1842c2f708cf00bc421bc90dfefaf005aed691 extends Twig_Template
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
        // line 10
        echo "
<form name=\"contact_product\" id=\"contact_product\" action=\"";
        // line 11
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("contact");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["product_id"]) ? $context["product_id"] : null), "html", null, true);
        echo "\">
    <div class=\"btn_area\">
        <ul class=\"row\">
            <li class=\"col-xs-12 col-sm-8\"><button type=\"submit\" class=\"btn btn-success btn-block\">商品についてのお問い合わせ</button></li>
        </ul>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "ContactProduct/Resource/template/default/Product/contact_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 12,  22 => 11,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ContactProduct/Resource/template/default/Product/contact_button.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/ContactProduct/Resource/template/default/Product/contact_button.twig");
    }
}
