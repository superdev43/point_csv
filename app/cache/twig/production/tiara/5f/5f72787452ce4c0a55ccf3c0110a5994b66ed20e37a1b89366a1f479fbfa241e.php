<?php

/* Block/insta_lib_js.twig */
class __TwigTemplate_82e62c88ba1767f93769ac10b689e428abfa582f3052a6b3a11719470e18ab2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('main', $context, $blocks);
    }

    // line 11
    public function block_javascript($context, array $blocks = array())
    {
        // line 12
        echo "
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"row info_row\">
<div class=\"inner\">

<div class=\"col-xs-12 col-md-6 item_gallery insta_gallery\">
    <div class=\"match_height bg_box\">
    <h2><img src=\"/img/home/h_insta.png\" alt=\"Instagram\" /></h2>
        <div class=\"col-sm-12\">
            <div id=\"js-instalib\" class=\"instagram_visual\">

            </div>
        </div>
    </div>
</div>

<script>
axios.get(\"instagram.php\").then(instagram_data=>{

  //自分のInstagramビジネスアカウントの投稿情報が取得できればOKな場合は
  //const gallery_dataを下記にする。

  const gallery_data = instagram_data[\"data\"][\"media\"][\"data\"];

  let photos = \"\";
  const photo_length = 9;


  for(let i = 0; i < photo_length ;i++){
    \tvar caption = gallery_data[i].caption;
\t\tvar cutFigure = '24'; // カットする文字数
\t\tvar afterTxt = ' …'; // 文字カット後に表示するテキスト
\t\tvar textLength = caption.length;
\t\t\tvar textTrim = caption.substr(0,(cutFigure))
\tif(cutFigure < textLength) {
\t\t\t\tcaption = textTrim+afterTxt;
\t\t\t} else if(cutFigure >= textLength) {
\t
\t\t\t}
      photos += '<div class=\"item hover\"><a href=\"'+gallery_data[i].permalink+'\" target=\"_blank\" class=\"hover\"><img src=\"'+gallery_data[i].media_url+'\" class=\"hover\">♥ '+gallery_data[i].like_count+'likes&nbsp;&nbsp;&nbsp;comments '+gallery_data[i].comments_count+'<br>'+caption+'</a></div>';
  } 
  document.querySelector(\"#js-instalib\").innerHTML = photos;
}).catch(error=>{
  console.log(error);
})
</script>



\t<div class=\"col-xs-12 col-md-6 box info_box\">
\t\t<div class=\"match_height bg_box\">

\t\t\t<h2><img src=\"/img/home/h_info.png\" alt=\"Information\" /></h2>
\t\t\t
\t\t\t<ul class=\"info_list\">
\t\t\t\t";
        // line 70
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->phpFunctions("file_get_contents", "http://tiara-collection-com.check-xserver.jp/studio/wp_feed.php");
        echo "


\t\t\t\t<li class=\"col-xs-12 col-sm-6 col-md-6\">
";
        // line 75
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/pg_calendar.css\">
<div id=\"calendar\" class=\"calendar hidden-xs\">
\t<div class=\"calendar_title none\">カレンダー</div>
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute((isset($context["HolidayConfig"]) ? $context["HolidayConfig"] : null), "0", array(), "array"), "config_data", array(), "array") - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["roop"]) {
            // line 79
            $context["day"] = twig_date_converter($this->env, "first day of this month");
            // line 80
            $context["month"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), "n");
            // line 81
            $context["year"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), "Y");
            // line 82
            echo "
";
            // line 83
            if (((isset($context["month"]) ? $context["month"] : null) == "12")) {
                // line 84
                $context["roop_week"] = 5;
            } elseif ((            // line 85
(isset($context["month"]) ? $context["month"] : null) != "1")) {
                // line 86
                $context["roop_week"] = (twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "W") - twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (((((isset($context["year"]) ? $context["year"] : null) . "-") . (isset($context["month"]) ? $context["month"] : null)) . "-") . "01")), "W"));
            } else {
                // line 88
                $context["roop_week"] = (twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "W") - 1);
            }
            // line 90
            echo "
";
            // line 91
            if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "w") == "0")) {
                // line 92
                $context["roop_week"] = ((isset($context["roop_week"]) ? $context["roop_week"] : null) + 1);
            }
            // line 94
            $context["day"] = twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), (("-" . twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), "w")) . "days"));
            // line 95
            echo "
\t<table>
\t\t<caption>";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "年";
            echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : null), "html", null, true);
            echo "月の休業日</caption>
\t\t<thead><tr><th id=\"sunday\">日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th id=\"saturday\">土</th></tr></thead>
\t\t<tbody>
";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["roop_week"]) ? $context["roop_week"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 101
                echo "\t\t\t<tr>
";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 103
                    if ((twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "n") == (isset($context["month"]) ? $context["month"] : null))) {
                        // line 104
                        if ($this->getAttribute((isset($context["HolidayWeek"]) ? $context["HolidayWeek"] : null), $context["j"], array(), "array")) {
                            // line 105
                            echo "\t\t\t\t<td class=\"holiday\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), "html", null, true);
                            echo "</td>
";
                        } else {
                            // line 107
                            if (($this->getAttribute($this->getAttribute((isset($context["Holidays"]) ? $context["Holidays"] : null), (isset($context["month"]) ? $context["month"] : null), array(), "array", false, true), twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Holidays"]) ? $context["Holidays"] : null), (isset($context["month"]) ? $context["month"] : null), array(), "array"), twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), array(), "array")))) {
                                // line 108
                                echo "\t\t\t\t<td class=\"holiday\">";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), "html", null, true);
                                echo "</td>
";
                            } else {
                                // line 110
                                echo "\t\t\t\t<td>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), "html", null, true);
                                echo "</td>
";
                            }
                        }
                    } else {
                        // line 114
                        echo "\t\t\t\t<td>&nbsp;</td>
";
                    }
                    // line 116
                    $context["day"] = twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "+1day");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "\t\t\t</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t</tbody>
\t</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "</div>

<span class=\"closed_color\">休業日</span>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<ul class=\"btn_more\">
\t\t\t\t<li><a href=\"/studio/category/old_blog/\">過去のブログはこちら</a></li>
\t\t\t\t<li><a href=\"/studio/category/info/\">一覧はこちら</a></li>
\t\t\t</ul>


\t\t</div>
<!--\t\t</div>

\t\t\t\t\t<div class=\"col-xs-12 col-md-2 box box_height box_cal\">
-->



\t</div>




</div><!-- /.inner -->
</div>



<script>
window.onload = function(){
    \$('.instagram_visual').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300,
        slidesToShow: 2,
\tslidesToScroll: 2,
        responsive: [
   {
     breakpoint: 1024,
     settings: {
       dots: true,
       arrows: false,
       autoplay: true,
       speed: 300,
       slidesToShow: 2,
     }
   },
   {
     breakpoint: 600,
     settings: {
       dots: true,
       arrows: false,
       autoplay: true,
       speed: 300,
       slidesToShow: 2,
     }
   },
   {
     breakpoint: 480,
     settings: {
       dots: true,
       arrows: false,
       autoplay: true,
       speed: 300,
       slidesToShow: 2,
     }
   }
  ]
    });
}
</script>
";
    }

    public function getTemplateName()
    {
        return "Block/insta_lib_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 123,  215 => 120,  208 => 118,  202 => 116,  198 => 114,  190 => 110,  184 => 108,  182 => 107,  176 => 105,  174 => 104,  172 => 103,  168 => 102,  165 => 101,  161 => 100,  153 => 97,  149 => 95,  147 => 94,  144 => 92,  142 => 91,  139 => 90,  136 => 88,  133 => 86,  131 => 85,  129 => 84,  127 => 83,  124 => 82,  122 => 81,  120 => 80,  118 => 79,  114 => 78,  107 => 75,  100 => 70,  44 => 16,  41 => 15,  36 => 12,  33 => 11,  29 => 15,  26 => 14,  24 => 11,  21 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/insta_lib_js.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/insta_lib_js.twig");
    }
}
