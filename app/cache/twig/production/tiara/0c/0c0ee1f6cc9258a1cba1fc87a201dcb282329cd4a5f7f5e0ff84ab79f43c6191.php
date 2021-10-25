<?php

/* __string_template__e28c3b1850c751021fcfd702cec686573ccbad8d542a94cae14d7e39a32488f9 */
class __TwigTemplate_7f5ab1831b1b6b45027863f7471e130bc2a49887f9cee1e739b4f9ec1157d04c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__e28c3b1850c751021fcfd702cec686573ccbad8d542a94cae14d7e39a32488f9", 1);
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
        // line 3
        $context["body_class"] = "page_size";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"main_only\">
<div class=\"container-fluid no-padding\">
<div id=\"main\">
\t<div id=\"size\" class=\"container-fluid\">
\t\t<h2><img src=\"/img/size/h_size01.png\" alt=\"Size\" /></h2>
\t\t<div class=\"column column01 column_size\">
\t\t<div class=\"inner\">
\t\t\t<ul class=\"size_type_list\">
\t\t\t\t<li><a href=\"#size_leotard\"><img src=\"/img/size/type_leotard.png\" alt=\"レオタード\" /><br>/レオタード</a></li>
\t\t\t\t<li><a href=\"#size_knit\"><img src=\"/img/size/type_knit.png\" alt=\"ニットトップス\" /><br>/ニットトップス</a></li>
\t\t\t\t<li><a href=\"#size_flared\"><img src=\"/img/size/type_flared.png\" alt=\"フレアパンツ\" /><br>/フレアパンツ</a></li>
\t\t\t\t<li><a href=\"#size_hip_huggers\"><img src=\"/img/size/type_hip.png\" alt=\"ヒップハングパンツ\" /><br>/ヒップハングパンツ</a></li>
\t\t\t\t<li><a href=\"#size_leg\"><img src=\"/img/size/type_leg.png\" alt=\"レッグウォーマー\" /><br>/レッグウォーマー</a></li>
\t\t\t</ul>
\t\t
\t\t\t<div id=\"size_leotard\" class=\"row row01\">
\t\t\t\t<h3><img src=\"/img/size/h_leotard.png\" alt=\"レオタード\" /></h3>
\t\t\t\t<div class=\"col-sm-8 text_box\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr><th>サイズ</th><th>身丈</th><th>胸幅</th></tr>
\t\t\t\t\t\t<tr><td>110</td><td>45.0</td><td>24.0</td></tr>
\t\t\t\t\t\t<tr><td>120</td><td>49.0</td><td>26.0</td></tr>
\t\t\t\t\t\t<tr><td>130</td><td>53.0</td><td>28.0</td></tr>
\t\t\t\t\t\t<tr><td>140</td><td>57.0</td><td>30.0</td></tr>
\t\t\t\t\t\t<tr><td>150</td><td>61.0</td><td>32.0</td></tr>
\t\t\t\t\t\t<tr><td>160</td><td>65.0</td><td>36.0</td></tr>
\t\t\t\t\t\t<tr><td>大人S</td><td>62.0</td><td>34.0</td></tr>
\t\t\t\t\t\t<tr><td>大人M</td><td>65.0</td><td>36.0</td></tr>
\t\t\t\t\t\t<tr><td>大人L</td><td>68.0</td><td>38.0</td></tr>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"attentions\">
\t\t\t\t\t\t<p>＊お手持ちのレオタードの実寸と比較してください。</p>
\t\t\t\t\t\t<p>＊レオタード本体・各デザイン共通のサイズです。(スカート長さは含みません)</p>
\t\t\t\t\t\t<p>＊デザイン・生地により若干異なる場合がございます。</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4 img_box\">
\t\t\t\t\t<p><img src=\"/img/size/size_leotard.jpg\" alt=\"\" /></p>
\t\t\t\t</div>
\t\t\t</div><!-- /.row row01 -->


\t\t\t<div id=\"size_knit\" class=\"row row02\">
\t\t\t\t<h3><img src=\"/img/size/h_knit.png\" alt=\"ニットトップス\" /></h3>
\t\t\t\t<div class=\"col-sm-8 text_box\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr><th>サイズ</th><th>丈</th><th>肩幅</th><th>袖丈</th></tr>
\t\t\t\t\t\t<tr><td>100</td><td>22.5</td><td>25.0</td><td>29.5</td></tr>
\t\t\t\t\t\t<tr><td>110</td><td>24.5</td><td>26.5</td><td>32.5</td></tr>
\t\t\t\t\t\t<tr><td>120</td><td>26.5</td><td>28.0</td><td>35.5</td></tr>
\t\t\t\t\t\t<tr><td>130</td><td>28.5</td><td>29.5</td><td>38.5</td></tr>
\t\t\t\t\t\t<tr><td>140</td><td>31.5</td><td>31.0</td><td>41.5</td></tr>
\t\t\t\t\t\t<tr><td>150･S</td><td>34.5</td><td>32.5</td><td>44.5</td></tr>
\t\t\t\t\t\t<tr><td>M</td><td>38.5</td><td>34.0</td><td>52.0</td></tr>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"attentions\">
\t\t\t\t\t\t<p>＊１５０と大人Ｓは同じ商品です。</p>
\t\t\t\t\t\t<p>＊デザインにより若干異なる場合がございます。</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4 img_box\">
\t\t\t\t\t<p><img src=\"/img/size/size_knit01.jpg\" alt=\"ニットトップス\" /></p>
\t\t\t\t\t<p><img src=\"/img/size/size_knit02.jpg\" alt=\"ニットトップス\" /></p>
\t\t\t\t</div>
\t\t\t</div><!-- /.row row02 -->

\t\t\t<div id=\"size_flared\" class=\"row row03\">
\t\t\t\t<h3><img src=\"/img/size/h_flared.png\" alt=\"フレアパンツ\" /></h3>
\t\t\t\t<div class=\"col-sm-8 text_box\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr><th>サイズ</th><th>丈</th><th>ウエスト幅</th></tr>
\t\t\t\t\t\t<tr><td>120</td><td>23.0</td><td>20.5</td></tr>
\t\t\t\t\t\t<tr><td>130</td><td>25.5</td><td>21.5</td></tr>
\t\t\t\t\t\t<tr><td>140</td><td>28.0</td><td>22.5</td></tr>
\t\t\t\t\t\t<tr><td>150･S</td><td>30.5</td><td>23.5</td></tr>
\t\t\t\t\t\t<tr><td>M</td><td></td><td>商品化準備中</td></tr>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"attentions\">
\t\t\t\t\t\t<p>＊１５０と大人Ｓは同じ商品です。</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4 img_box\">
\t\t\t\t\t<p><img src=\"/img/size/size_flared_pants.jpg\" alt=\"フレアパンツ\" /></p>
\t\t\t\t</div>
\t\t\t</div><!-- /.row row03 -->

\t\t\t<div id=\"size_hip_huggers\" class=\"row row04\">
\t\t\t\t<h3><img src=\"/img/size/h_hip.png\" alt=\"ヒップハングパンツ\" /></h3>
\t\t\t\t<div class=\"col-sm-8 text_box\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr><th>サイズ</th><th>丈</th><th>幅</th></tr>
\t\t\t\t\t\t<tr><td>110</td><td>26.5</td><td>23.0</td></tr>
\t\t\t\t\t\t<tr><td>120</td><td>28.5</td><td>24.5</td></tr>
\t\t\t\t\t\t<tr><td>130</td><td>31.0</td><td>26.0</td></tr>
\t\t\t\t\t\t<tr><td>140</td><td>33.5</td><td>27.5</td></tr>
\t\t\t\t\t\t<tr><td>150･S</td><td>37.5</td><td>30.0</td></tr>
\t\t\t\t\t\t<tr><td>M</td><td>45.0</td><td>31.5</td></tr>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"attentions\">
\t\t\t\t\t\t<p>＊幅は伸ばさないで計測、良く伸縮します。</p>
\t\t\t\t\t\t<p>＊丈は折り返さず計測しています。折り返しはお好みのウエスト位置でどうぞ。</p>
\t\t\t\t\t\t<p>＊１５０と大人Ｓは同じ商品です。</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4 img_box\">
\t\t\t\t\t<p><img src=\"/img/size/size_hip_huggers.jpg\" alt=\"ヒップハングパンツ\" /></p>
\t\t\t\t</div>
\t\t\t</div><!-- /.row row04 -->

\t\t\t<div id=\"size_leg\" class=\"row row05\">
\t\t\t\t<h3><img src=\"/img/size/h_leg.png\" alt=\"レッグウォーマー\" /></h3>
\t\t\t\t<div class=\"col-sm-8 text_box\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr><th>サイズ</th><th>丈</th><th>幅</th></tr>
\t\t\t\t\t\t<tr><td>110</td><td>42.0</td><td>9.0</td></tr>
\t\t\t\t\t\t<tr><td>120</td><td>45.0</td><td>10.0</td></tr>
\t\t\t\t\t\t<tr><td>130</td><td>48.0</td><td>11.0</td></tr>
\t\t\t\t\t\t<tr><td>140</td><td>51.0</td><td>12.0</td></tr>
\t\t\t\t\t\t<tr><td>150</td><td>54.0</td><td>13.5</td></tr>
\t\t\t\t\t\t<tr><td>大人</td><td>68.5</td><td>上17.5 下11.0</td></tr>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"attentions\">
\t\t\t\t\t\t<p>＊幅は伸ばさないで計測、良く伸縮します。</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4 img_box\">
\t\t\t\t\t<p><img src=\"/img/size/size_leg.jpg\" alt=\"レッグウォーマー\" /></p>
\t\t\t\t</div>
\t\t\t</div><!-- /.row row05 -->
\t\t</div><!-- /.inner -->
\t\t</div><!-- /.column _size -->

\t\t<div id=\"column_material\" class=\"column column_material\">
\t\t<div class=\"inner\">
\t\t\t<h2><img src=\"/img/size/h_material02.png\" alt=\"生地について\" /></h2>
\t\t\t<!--<h3><img src=\"/img/size/h_material_care.png\" alt=\"生地とケア\" /></h3>-->

\t\t\t<div class=\"row row01\">
\t\t\t\t<div class=\"match_height col-sm-8 text_box\">
\t\t\t\t\t<div class=\"bd_box\">
\t\t\t\t\t\t<div class=\"bg_box\">
\t\t\t\t\t\t\t<p>ティアラのレッスンウェアは日本製の生地を使用し、全てアトリエ内で店舗内1点1点縫製しています。</p>
\t\t\t\t\t\t\t<p>たくさんのお客様に　“耐久性に優れている”　とのお声をいただいています。</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"match_height col-sm-4 img_box\">
\t\t\t\t\t<p><img src=\"/img/size/pic_material01.jpg\" alt=\"\" /></p>
\t\t\t\t</div>
\t\t\t</div><!-- /.row01 -->

\t\t\t<h4>キレイな状態で、もっと長くご愛用いただくために・・・</h4>

\t\t\t<div class=\"row row06\">
\t\t\t\t<div class=\"bg_box\">
\t\t\t\t\t<h5><img src=\"/img/size/h_care_note.png\" alt=\"ケアについての注意点\" /></h5>

\t\t\t\t\t<ul class=\"care_list\">
\t\t\t\t\t\t<li><span>●</span>　お洗濯は弱水流で必ず洗濯用ネットに入れてください。</li>
\t\t\t\t\t\t<li><span>●</span>　漂白剤、蛍光剤入りの洗剤は使用しないでください。</li>
\t\t\t\t\t\t<li><span>●</span>　スカートなど、汗が付きにくい商品は毎回お洗濯しないほうが、長く風合いが保たれます。</li>
\t\t\t\t\t\t<li><span>●</span>　必ず陰干ししてください。直射日光に当てると変色や、生地が劣化する恐れがございます。</li>\t\t
\t\t\t\t\t\t<li><span>●</span>　水や汗で濡れたまま長時間放置しないでください。</li>
\t\t\t\t\t\t<li><span>●</span>　タンブラー乾燥はお避け下さい。</li>
\t\t\t\t\t\t<li><span>●</span>　手洗いの場合はできるだけ水分を取ってから干してください。水分を多く含んだ状態で干すとゴムが伸びる原因になります。</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- /.inner -->

\t\t\t<div class=\"row row02\">
\t\t\t\t<div class=\"bd_head\"></div>
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 text_box\">
\t\t\t\t\t\t\t<h3><img src=\"/img/size/h_tokusei.png\" alt=\"生地の特性\" /></h3>
\t\t\t\t\t\t\t<p>ティアラで作られているレッスンウェアは生地・糸はもちろん、リボンや小さな飾りまで全て日本製のものを使用しています。<br>質が良く、耐久性に優れた素材を厳選しています。</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 img_box\">
\t\t\t\t\t\t\t<p><img src=\"/img/size/pic_material_feature.jpg\" alt=\"生地の特性\" /></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"bd_foot\"></div>
\t\t\t</div><!-- /.row02 -->

\t\t<div class=\"inner\">

\t\t\t<div class=\"row row03\">
\t\t\t\t<h4><img src=\"/img/size/h_2way.png\" alt=\"2way生地(レオタード・スカート用)\" /></h4>
\t\t\t\t<p class=\"h_after\">※淡いお色は透け感が気になる場合もありますので、裏地をおすすめいたします。</p>

\t\t\t\t<div class=\"match_height box box01\">
\t\t\t\t\t<h5><img src=\"/img/size/h_2way01.png\" alt=\"光沢2way素材\" /></h5>
\t\t\t\t\t<p>レオタードに使われる素材で縦・横によく伸びる。<br>ナイロン80％・ポリウレタン20％　ソフトで光沢あり。</p>
\t\t\t\t</div><!-- /.box01 -->

\t\t\t\t<div class=\"match_height box box02\">
\t\t\t\t\t<h5><img src=\"/img/size/h_2way02.png\" alt=\"透け防止加工2way素材\" /></h5>
\t\t\t\t\t<p>レオタードに使われる素材で縦・横によく伸びる。<br>ナイロン80％・ポリウレタン20％　透け防止加工で透け感が軽減。<br>光沢のないマットな風合。</p>
\t\t\t\t</div><!-- /.box02 -->

\t\t\t\t<div class=\"match_height box box03\">
\t\t\t\t\t<h5><img src=\"/img/size/h_2way03.png\" alt=\"コットン2WAY素材\" /></h5>
\t\t\t\t\t<p>レオタードに使われる素材で縦・横によく伸びる。<br>コットン94％ ポリウレタン6％ ソフトで光沢のないマットな風合。少し薄手。吸水性に優れている。</p>
\t\t\t\t</div><!-- /.box03 -->

\t\t\t\t<div class=\"match_height box box04\">
\t\t\t\t\t<h5><img src=\"/img/size/h_2way04.png\" alt=\"バックスキン2way素材\" /></h5>
\t\t\t\t\t<p>レオタードに使われる素材で縦・横によく伸びる。<br>ナイロン80％・ポリウレタン20％ 少し毛足のあるネルのような柔らかい肌触り。少し厚手。</p>
\t\t\t\t</div><!-- /.box04 -->

\t\t\t\t<div class=\"match_height box box05\">
\t\t\t\t\t<h5><img src=\"/img/size/h_2way05.png\" alt=\"スムース・クラッシュベロア2WAY素材\" /></h5>
\t\t\t\t\t<p>レオタードに使われる素材で縦・横によく伸びる。<br>ナイロン80％・ポリウレタン20％ 毛足のあるベルベットのような高級感のある素材。</p>
\t\t\t\t</div><!-- /.box05 -->

\t\t\t</div><!-- /.row03 -->

\t\t\t<div class=\"row row04\">
\t\t\t\t<h4><img src=\"/img/size/h_power.png\" alt=\"パワーネット トリコット(レオタード・スカート用)\" /></h4>

\t\t\t\t<div class=\"match_height box box01\">
\t\t\t\t\t<h5><img src=\"/img/size/h_pow01.png\" alt=\"パワーネット\" /></h5>
\t\t\t\t\t<p>縦・横に伸びる2wayメッシュ生地。ランジェリーにも使われる丈夫で肌に優しい素材。<br>(胸元切替・袖・スカート・パワーネットＴシャツetc...)</p>
\t\t\t\t</div><!-- /.box01 -->

\t\t\t\t<div class=\"match_height box box02\">
\t\t\t\t\t<h5><img src=\"/img/size/h_pow02.png\" alt=\"メッシュロン\" /></h5>
\t\t\t\t\t<p>縦・横に伸びる2wayメッシュ生地。ランジェリーにも使われる丈夫で肌に優しい素材。(袖・スカートetc...)</p>
\t\t\t\t</div><!-- /.box02 -->

\t\t\t\t<div class=\"match_height box box03\">
\t\t\t\t\t<h5><img src=\"/img/size/h_pow03.png\" alt=\"トリコット\" /></h5>
\t\t\t\t\t<p>透け感、光沢があり繊細なイメージの１way素材。<br>ひっかきキズやシワになりやすいので注意。<br>ナイロン100％(スカート・巻きスカートetc...)</p>
\t\t\t\t</div><!-- /.box03 -->
\t\t\t</div><!-- /.row04 -->

\t\t\t<div class=\"row row05\">
\t\t\t\t<h4><img src=\"/img/size/h_material_knit.png\" alt=\"ニット素材\" /></h4>

\t\t\t\t<div class=\"match_height box box01\">
\t\t\t\t\t<h5><img src=\"/img/size/h_knit01.png\" alt=\"コットン\" /></h5>
\t\t\t\t\t<p>ニットトップス、ワンピース、フレアパンツなどに使用。コットン100％ ソフト。</p>
\t\t\t\t</div><!-- /.box01 -->

\t\t\t\t<div class=\"match_height box box02\">
\t\t\t\t\t<h5><img src=\"/img/size/h_knit02.png\" alt=\"リブ\" /></h5>
\t\t\t\t\t<p>ヒップハングパンツ、レッグウォーマー、ウエストベルトなどに使用。<br>コットン95％ ポリウレタン5％ 伸縮性抜群。</p>
\t\t\t\t</div><!-- /.box02 -->

\t\t\t</div><!-- /.row05 -->
\t\t</div><!-- /.inner -->
\t\t</div><!-- /.column_material -->
\t</div><!-- /#size -->
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__e28c3b1850c751021fcfd702cec686573ccbad8d542a94cae14d7e39a32488f9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__e28c3b1850c751021fcfd702cec686573ccbad8d542a94cae14d7e39a32488f9", "");
    }
}
