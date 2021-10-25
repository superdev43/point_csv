<?php

/* ProductOption/Resource/template/default/Mail/option.twig */
class __TwigTemplate_bf232d5c2829c21aaf464d2ed5ef9b21dd502f0a5c67724b3080e2e3558f71e0 extends Twig_Template
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
        if (array_key_exists("arrLabel", $context)) {
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrLabel"]) ? $context["arrLabel"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 12
                echo "　　　  ";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "ProductOption/Resource/template/default/Mail/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  21 => 11,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProductOption/Resource/template/default/Mail/option.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/ProductOption/Resource/template/default/Mail/option.twig");
    }
}
