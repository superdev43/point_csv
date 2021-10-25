<?php

/* Block/head_js.twig */
class __TwigTemplate_29f20bf4c265d98597a14d56f22f05ed927f205d5e9ddd920e5750e30d92b8c4 extends Twig_Template
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
        echo "<script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
<script src=\"/js/jquery.matchHeight.js\"></script>";
    }

    public function getTemplateName()
    {
        return "Block/head_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/head_js.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/head_js.twig");
    }
}
