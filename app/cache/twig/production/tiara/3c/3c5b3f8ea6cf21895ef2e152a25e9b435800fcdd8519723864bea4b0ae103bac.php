<?php

/* __string_template__02c5e7171c037a841cb373b8de0ecd238e38882d7c7a506e4134a845dbd0264b */
class __TwigTemplate_57c20853230ac93270173b2298e117c084a8c3e4a95ba619d21421ca34005b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__02c5e7171c037a841cb373b8de0ecd238e38882d7c7a506e4134a845dbd0264b", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["body_class"] = "front_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
\$(function(){
    //\$('.main_visual_sp').slick({
        //dots: true,
\t//autoplay: true,
\t//arrows: false,
        //infinite: true,
\t//speed: 300,
\t//slidesToShow: 1,
\t//centerMode: true,
\t//centerPadding: '0px',
\t//variableWidth: true
    //});





    \$('.main_visual').slick({
        //dots: true,
\tautoplay: true,
\tarrows: false,
        infinite: true,
\tspeed: 300,
\tslidesToShow: 1,
\tcenterMode: true,
\tvariableWidth: true
    });
});
</script>
";
    }

    // line 59
    public function block_main($context, array $blocks = array())
    {
        // line 60
        echo "\t<div class=\"mv_row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<ul class=\"main_visual_sp pc_hide\">
\t\t\t\t<li class=\"item\">
\t\t\t\t\t<img src=\"/img/home/mainimg01.jpg\">
\t\t\t\t</li>
\t\t\t\t<li class=\"item\">
\t\t\t\t\t<img src=\"/img/home/mainimg02.jpg\">
\t\t\t\t</li>
\t\t\t\t<li class=\"item\">
\t\t\t\t\t<img src=\"/img/home/mainimg03.jpg\">
\t\t\t\t</li>
\t\t\t\t<li class=\"item\">
\t\t\t\t\t<img src=\"/img/home/mainimg04.jpg\">
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"main_visual smart_hide tablet_hide\">
\t\t\t\t<!--<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv01.jpg\">
\t\t\t\t</div>-->
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img data-lazy=\"/img/home/mainimg01.jpg\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img data-lazy=\"/img/home/mainimg02.jpg\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img data-lazy=\"/img/home/mainimg03.jpg\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img data-lazy=\"/img/home/mainimg04.jpg\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- /.row -->

\t<!--<div class=\"row bnrs_row\">
\t\t<div class=\"col-xs-6 col-sm-3 link_box\">
\t\t\t<a href=\"\">
\t\t\t\t<div class=\"img_box\">
\t\t\t\t\t<img src=\"/img/common/head//bnr_other.jpg\" alt=\"その他オススメ\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t<p>その他オススメ</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-xs-6 col-sm-3 link_box\">
\t\t\t<a href=\"\">
\t\t\t\t<div class=\"img_box\">
\t\t\t\t\t<img src=\"/img/common/head//bnr_harukas.jpg\" alt=\"ハルカス店\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t<p>ハルカス店</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-xs-6 col-sm-3 link_box\">
\t\t\t<a href=\"\">
\t\t\t\t<div class=\"img_box\">
\t\t\t\t\t<img src=\"/img/common/head//bnr_other.jpg\" alt=\"その他オススメ\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t<p>その他オススメ</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-xs-6 col-sm-3 link_box\">
\t\t\t<a href=\"\">
\t\t\t\t<div class=\"img_box\">
\t\t\t\t\t<img src=\"/img/common/head//bnr_harukas.jpg\" alt=\"ハルカス店\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t<p>ハルカス店</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</div>--><!-- /.bnrs_row -->

";
    }

    public function getTemplateName()
    {
        return "__string_template__02c5e7171c037a841cb373b8de0ecd238e38882d7c7a506e4134a845dbd0264b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 79,  72 => 60,  69 => 59,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__02c5e7171c037a841cb373b8de0ecd238e38882d7c7a506e4134a845dbd0264b", "");
    }
}
