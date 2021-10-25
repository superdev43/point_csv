<?php

/* Block/toppage_js.twig */
class __TwigTemplate_88b9af5e13a5a1e1297572903d583166592e1b60a3ef33dd7575e9596d46a998 extends Twig_Template
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
        echo "<script src=\"/studio/wp-content/themes/tiara/js/instafeed.min.js\"></script>

<script type=\"text/javascript\">
\$(function() {
\t\$('.shop_info .box_height').matchHeight();
\t\$('#top_about .box').matchHeight();
});
</script>

<script>
\$(function() {
\t\$('#top_product_tab .select_area li img').mouseover(function() {
\t\tif(\$(this).hasClass('current') ) {

\t\t}else{
\t\t\t\$(this).attr('src', \$(this).attr('src').replace('_off', '_on')).addClass('active');
\t\t}
\t});

\t\$('#top_product_tab .select_area li img').mouseleave(function() {
\t\tif(\$(this).hasClass('current') ) {

\t\t}else{
\t\t\t\$(this).attr('src', \$(this).attr('src').replace('_on', '_off')).removeClass('active');
\t\t}
\t});

\t\$('#top_product_tab .select_area li img').click(function() {
\t\tvar index = \$('#top_product_tab .select_area li img').index(this);
\t\t\$('#top_product_tab .select_area li img').removeClass('current');
\t\t\$(this).attr('src', \$(this).attr('src').replace('_off', '_on')).addClass('current');
\t\t\$('#top_product_tab .select_area li img').each(function() {
\t\t\tif(\$(this).hasClass('current')) {

\t\t\t}else{
\t\t\t\t\$(this).attr('src', \$(this).attr('src').replace('_on', '_off')).removeClass('active');
\t\t\t}
\t\t});


\t\t\$('#top_product_tab .tab_box').hide();
\t\t\$('#top_product_tab .tab_box').eq(index).fadeIn();
\t});
});
</script>

<script>
\$(function() {

\t\$(document).click(function(event) {
\t\tif(!\$(event.target).closest('#bloc_over_password_info .center_box').length) {
\t\t\t//console.log('外側がクリックされました。');
\t\t\t\$('#bloc_over_password_info').fadeOut();
\t\t} else {
\t\t\t//console.log('内側がクリックされました。');
\t\t}
\t});
\t\$('#bloc_over_password_info .btn_close img').click(function() {
\t\t\$('#bloc_over_password_info').fadeOut();
\t});
});


</script>

<script src=\"/js/jquery.bxslider/jquery.bxslider.js\"></script>
<link rel=\"stylesheet\" href=\"/js/jquery.bxslider/jquery.bxslider.css\">
<script>
\$(function() {
    \$('.main_visual_sp').bxSlider({
\tauto: true,
        slideMargin: 0,
\tpager: false,
\tcontrols: false
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "Block/toppage_js.twig";
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
        return new Twig_Source("", "Block/toppage_js.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/toppage_js.twig");
    }
}
