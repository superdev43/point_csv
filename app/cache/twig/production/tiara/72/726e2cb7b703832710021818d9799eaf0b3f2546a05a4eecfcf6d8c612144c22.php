<?php

/* __string_template__b3eaf577d1b892b5d0bb0d0e0274c313069c21e73d282a83d418788727c8083f */
class __TwigTemplate_ebf1f5176a6dc8eb7140037185a4566f6e177697d0babaa2381963037598b217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b3eaf577d1b892b5d0bb0d0e0274c313069c21e73d282a83d418788727c8083f", 22);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_javascript($context, array $blocks = array())
    {
        // line 26
        if (( !(null === $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "latitude", array())) &&  !(null === $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "longitude", array())))) {
            // line 27
            echo "<script src=\"//maps.googleapis.com/maps/api/js?sensor=false\"></script>
<script>
\$(function() {
    \$(\"#maps\").css({
        'margin-top': '15px',
        'margin-left': 'auto',
        'margin-right': 'auto',
        'width': '98%',
        'height': '300px'
    });
    var lat = ";
            // line 37
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "latitude", array()), "js"), "html", null, true);
            echo ";
    var lng = ";
            // line 38
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "longitude", array()), "js"), "html", null, true);
            echo ";
    if (lat && lng) {
        var latlng = new google.maps.LatLng(lat, lng);
        var mapOptions = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(\$(\"#maps\").get(0), mapOptions);
        var marker = new google.maps.Marker({map: map, position: latlng});
    } else {
        \$(\"#maps\").remove();
    }
});
</script>
";
        }
    }

    // line 56
    public function block_main($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"contents\" class=\"main_only\">
        <div class=\"container-fluid inner no-padding\">
            <div id=\"main\">
                <!--<h1 class=\"page-heading\">当サイトについて</h1>-->
                <div id=\"help_about\" class=\"container-fluid\">
                    <div id=\"help_about_box\" class=\"row\">
                        <div id=\"help_about_box__body\" class=\"col-md-10 col-md-offset-1\">
                            <div id=\"help_about_box__body_innner\" class=\"dl_table\">
                                ";
        // line 65
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array(), "any", true, true)) {
            // line 66
            echo "                                    <dl id=\"help_about_box__shop_name\">
                                        <dt>店名</dt>
                                        <dd>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 71
        echo "
                                ";
        // line 72
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "company_name", array(), "any", true, true)) {
            // line 73
            echo "                                <dl id=\"help_about_box__company_name\">
                                    <dt>会社名</dt>
                                    <dd>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "company_name", array()), "html", null, true);
            echo "</dd>
                                </dl>
                                ";
        }
        // line 78
        echo "
                                ";
        // line 79
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "zip01", array(), "any", true, true)) {
            // line 80
            echo "                                <dl id=\"help_about_box__zip\">
                                    <dt>所在地</dt>
                                    <dd>〒";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "zip02", array()), "html", null, true);
            echo "<br />
                                        ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "pref", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "addr02", array()), "html", null, true);
            echo "
                                    </dd>
                                </dl>
                                ";
        }
        // line 87
        echo "
                                ";
        // line 88
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "tel01", array(), "any", true, true)) {
            // line 89
            echo "                                    <dl id=\"help_about_box__tel\">
                                        <dt>電話番号</dt>
                                        <dd>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "tel03", array()), "html", null, true);
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 94
        echo "
                                ";
        // line 95
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "fax01", array(), "any", true, true)) {
            // line 96
            echo "                                    <dl id=\"help_about_box__fax\">
                                        <dt>FAX番号</dt>
                                        <dd>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "fax01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "fax02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "fax03", array()), "html", null, true);
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 101
        echo "
                                ";
        // line 102
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "business_hour", array(), "any", true, true)) {
            // line 103
            echo "                                    <dl id=\"help_about_box__business_hour\">
                                        <dt>営業時間</dt>
                                        <dd>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "business_hour", array()), "html", null, true);
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 108
        echo "
                                ";
        // line 109
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "good_traded", array(), "any", true, true)) {
            // line 110
            echo "                                    <dl id=\"help_about_box__good_traded\">
                                        <dt>取扱商品</dt>
                                        <dd>";
            // line 112
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "good_traded", array()), "html", null, true));
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 115
        echo "
                                ";
        // line 116
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "message", array(), "any", true, true)) {
            // line 117
            echo "                                    <dl id=\"help_about_box__message\">
                                        <dt>メッセージ</dt>
                                        <dd>";
            // line 119
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "message", array()), "html", null, true));
            echo "</dd>
                                    </dl>
                                ";
        }
        // line 122
        echo "                            </div>

                            <div id=\"maps\"></div>

                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b3eaf577d1b892b5d0bb0d0e0274c313069c21e73d282a83d418788727c8083f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 122,  212 => 119,  208 => 117,  206 => 116,  203 => 115,  197 => 112,  193 => 110,  191 => 109,  188 => 108,  182 => 105,  178 => 103,  176 => 102,  173 => 101,  163 => 98,  159 => 96,  157 => 95,  154 => 94,  144 => 91,  140 => 89,  138 => 88,  135 => 87,  126 => 83,  120 => 82,  116 => 80,  114 => 79,  111 => 78,  105 => 75,  101 => 73,  99 => 72,  96 => 71,  90 => 68,  86 => 66,  84 => 65,  74 => 57,  71 => 56,  50 => 38,  46 => 37,  34 => 27,  32 => 26,  29 => 25,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b3eaf577d1b892b5d0bb0d0e0274c313069c21e73d282a83d418788727c8083f", "");
    }
}
