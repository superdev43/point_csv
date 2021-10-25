<?php

/* __string_template__de680353897d8285d059a27e2636ac4fd104dee221c5f1efa92160ed2043d2d9 */
class __TwigTemplate_ccd14e50f70612eedd045959340846d8aa6e8d92b916c67547db15e6a92ddd6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__de680353897d8285d059a27e2636ac4fd104dee221c5f1efa92160ed2043d2d9", 22);
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
    <div id=\"contents\" class=\"main_only\">
        <div id=\"agreement_wrap\" class=\"container-fluid inner no-padding\">
            <div id=\"main\">
                <h1 class=\"page-heading\">利用規約</h1>
                <div id=\"agreement_box__body\" class=\"container-fluid\">
                    <div id=\"agreement_box__customer_agreement\" class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            ";
        // line 33
        if ( !(null === (isset($context["help"]) ? $context["help"] : null))) {
            // line 34
            echo "                            ";
            echo nl2br($this->getAttribute((isset($context["help"]) ? $context["help"] : null), "customerAgreement", array()));
            echo "
                            ";
        }
        // line 36
        echo "                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__de680353897d8285d059a27e2636ac4fd104dee221c5f1efa92160ed2043d2d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 36,  43 => 34,  41 => 33,  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__de680353897d8285d059a27e2636ac4fd104dee221c5f1efa92160ed2043d2d9", "");
    }
}
