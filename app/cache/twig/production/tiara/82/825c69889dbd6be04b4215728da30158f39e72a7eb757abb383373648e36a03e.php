<?php

/* Block/foot_js.twig */
class __TwigTemplate_af7a6d4b09c4f5479969f271d09a8fd668bd325f4584add11e26da385104222c extends Twig_Template
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
        echo "<script>
\$(function() {
\t\$('#gnav .btn_search span').click(function() {
\t\t\$('.search_tgl').toggleClass('active');
\t\t\$('#search').toggleClass('active');
\t});
\t\$('#gnav .btn_ac').mouseover(function() {
\t\tvar index = \$('#gnav .btn_ac').index(this);
\t\t\$('#gnav ul.lv2').eq(index).stop(false,true).fadeIn();
\t});
\t\$('#gnav .btn_ac').mouseleave(function() {
\t\tvar index = \$('#gnav .btn_ac').index(this);
\t\t\$('#gnav ul.lv2').eq(index).stop(false,true).hide();
\t});
});
</script>

<script>
\$(function() {
\t\$('.match_height').matchHeight();
});
</script>




<script src=\"/js/scrollsmoothly.js\" type=\"text/javascript\"></script>


";
        // line 30
        if (((((((($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 7) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 15)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 10)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 9)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 11)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 21)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 12))) {
            // line 31
            echo "<script>
\$(function() {
\t\$('#gnav li.btn_ac').eq(0).addClass('active');
});
</script>
";
        }
        // line 37
        echo "
";
        // line 38
        if ((($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 13) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 18))) {
            // line 39
            echo "<script>
\$(function() {
\t\$('#gnav li.btn_ac').eq(1).addClass('active');
});
</script>
";
        }
        // line 45
        echo "
";
        // line 46
        if ((((((($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 14) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 17)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 19)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 24)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 25)) || ($this->getAttribute((isset($context["Category"]) ? $context["Category"] : null), "id", array()) == 26))) {
            // line 47
            echo "<script>
\$(function() {
\t\$('#gnav li.btn_ac').eq(2).addClass('active');
});
</script>
";
        }
        // line 53
        echo "

<script>
\$(function () {
\tvar nav_position = \$(\"#gnav\").offset().top;
\t//var nav_position = 154;

\t\$(window).on('load scroll resize', function () {
\t\tvar nav_height = \$(\"#gnav\").height();
\t\tvar w_top = \$(this).scrollTop();
\t\tvar h_height = \$(\"#masthead\").height();

\t\tif (\$(window).width() < 768) {
\t\t\t//if(w_top >= nav_position_sp) {
\t\t\t//\t\$('#masthead').css({paddingBottom: nav_height_sp});
\t\t\t//\t\$(\"#gnav_sp\").css({position:\"fixed\",top:\"0\",left:\"0\",zIndex:\"10\"});
\t\t\t//}else{
\t\t\t//\t\$('#masthead').css({paddingBottom: \"0\"});
\t\t\t//\t\$(\"#gnav_sp\").css({position:\"relative\"});
\t\t\t//}
\t\t}else{
\t\t\tif(w_top >= nav_position) {
\t\t\t\t\$('#masthead').css({paddingBottom: nav_height});
\t\t\t\t\$(\"#gnav\").css({position:\"fixed\",top:\"0\",left:\"0\",zIndex:\"10\"});
\t\t\t}else{
\t\t\t\t\$('#masthead').css({paddingBottom: \"0\"});
\t\t\t\t\$(\"#gnav\").css({position:\"relative\"});
\t\t\t}
\t\t}
\t});

});
</script>



<script src=\"/js/malihu_scrollbar/jquery.mCustomScrollbar.js\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" href=\"/js/malihu_scrollbar/jquery.mCustomScrollbar.css\">
<script>
\$(function(){
  \$(window).load(function(){
     \$(\"#page_product_detail .slick-dots\").mCustomScrollbar();
  });
});
</script>


<script>
\$(function() {
\t\$('#fixed_icons .btn_shopinfo').click(function() {
\t\t\$('#fixed_shop_info').fadeIn();
\t});
\t\$('#fixed_shop_info p.btn_close').click(function() {
\t\t\$('#fixed_shop_info').fadeOut();
\t});\t
});
</script>";
    }

    public function getTemplateName()
    {
        return "Block/foot_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 53,  78 => 47,  76 => 46,  73 => 45,  65 => 39,  63 => 38,  60 => 37,  52 => 31,  50 => 30,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/foot_js.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/foot_js.twig");
    }
}
