<?php

/* Block/main_bnrs.twig */
class __TwigTemplate_bd88817b7102c54058265c5cd08da2339b8f4249c05a81503fe3395f2bc337ac extends Twig_Template
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
        echo "<div id=\"bloc_main_bnrs\">
    <div class=\"row bnrs_row\">
        <div class=\"col-xs-6 col-sm-3 link_box\">
            <a href=\"/access\">
                <div class=\"img_box\">
                    <p><img src=\"/img/common/head/bnr_honten.jpg\" alt=\"本店\" /></p>
                </div>
                <div class=\"text_box\">
                    <p class=\"title\">本店</p>
                </div>
            </a>
        </div>

        <div class=\"col-xs-6 col-sm-3 link_box\">
            <a href=\"/harukas\">
                <div class=\"img_box\">
                    <p><img src=\"/img/common/head/bnr_harukas.jpg\" alt=\"ハルカス店\" /></p>
                </div>
                <div class=\"text_box\">
                    <p class=\"title\">ハルカス店</p>
                </div>
            </a>
        </div>

        <div class=\"col-xs-6 col-sm-3 link_box\">
            <a href=\"/access#link_nonoi_studio\">
                <div class=\"img_box\">
                    <p><img src=\"/img/common/head/bnr_nonoi.jpg\" alt=\"野々井スタジオ\" /></p>
                </div>
                <div class=\"text_box\">
                    <p class=\"title\">野々井スタジオ</p>
                </div>
            </a>
        </div>

        <div class=\"col-xs-6 col-sm-3 link_box\">
            <a href=\"/access#link_hinoo_studio\">
                <div class=\"img_box\">
                    <p><img src=\"/img/common/head/bnr_hinoo.jpg\" alt=\"檜尾店\" /></p>
                </div>
                <div class=\"text_box\">
                    <p class=\"title\">檜尾スタジオ</p>
                </div>
            </a>
        </div>

        <div class=\"col-xs-6 col-sm-3 link_box\">
            <a href=\"https://tiara-collection.com/studio/\">
                <div class=\"img_box\">
                    <p><img src=\"/img/common/head/bnr_rental.jpg\" alt=\"レンタルスタジオのご案内\" /></p>
                </div>
                <div class=\"text_box\">
                    <p class=\"title\">レンタルスタジオのご案内</p>
                </div>
            </a>
        </div>
        <div class=\"none\">
            ";
        // line 58
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->phpFunctions("file_get_contents", "http://tiara-collection-com.check-xserver.jp/studio/wp_bnr_feed.php");
        echo "
        </div>
    </div>
</div>
<!-- /.bloc_main_bnrs -->";
    }

    public function getTemplateName()
    {
        return "Block/main_bnrs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 58,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/main_bnrs.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/main_bnrs.twig");
    }
}
