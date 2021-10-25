<?php

/* __string_template__f5b8e2e374de0e96b4748f341175d364e41989f121c377afdf514c5108fa3fe4 */
class __TwigTemplate_25d408f0ba6103dad90d478ea6eb13a40aac40c1805943fa1c79819b3490ab6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__f5b8e2e374de0e96b4748f341175d364e41989f121c377afdf514c5108fa3fe4", 1);
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"main_only\">
<div class=\"container-fluid no-padding\">
<div id=\"main\">
\t<div id=\"handmade\" class=\"container-fluid\">
\t\t<div class=\"column column01\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"row row01\">
\t\t\t\t<div class=\"col-sm-7 text_box\">
\t\t\t\t\t<h2><img src=\"/img/handmade/h_handmade.png\" alt=\"まいにちかわいいが、お店のなかで生まれています。\" /></h2>
\t\t\t\t\t<p>レース、モチーフ、ゴムなどの小さなパーツにもこだわっています。</p>

\t\t\t\t\t<p>パターン、裁断、縫製・・・。全てティアラ熟練スタッフの手によって生み出されています。<br>ひとつひとつアトリエ内で製作しているので、量産が出来ません。<br>工業用の本縫いミシン、ロックミシン、その他特殊ミシンなど、技術者の定期メンテナンスで いつもベストコンディションを保つようにしています。</p>

\t\t\t\t\t<p>「シンプルだけどおしゃれ」をコンセプトに日々デザイン考案中です。<br>モデルに着用させ、実際にレッスン。着心地は良いか、動きの邪魔にならないかなどをチェック。<br>家庭での洗濯に耐えられる、実用性も兼ねそなえたオリジナルデザインです。</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5 img_box\">
\t\t\t\t\t<p><img src=\"/img/handmade/pic_handmade01.png\" alt=\"\" /></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div><!-- /.column01 -->


\t\t<div class=\"column column02\">
\t\t\t<div class=\"bd_head\"></div>
\t\t\t<div class=\"inner\">
\t\t\t
\t\t\t<h2><img src=\"/img/handmade/h_view.png\" alt=\"製作風景をのぞいてみよう\" /></h2>

\t\t\t<ul class=\"view_list\">
\t\t\t\t<li class=\"col-xs-6 col-sm-3\"><img src=\"/img/handmade/view01.png\" alt=\"\" /></li>
\t\t\t\t<li class=\"col-xs-6 col-sm-3\"><img src=\"/img/handmade/view02.png\" alt=\"\" /></li>
\t\t\t\t<li class=\"col-xs-6 col-sm-3\"><img src=\"/img/handmade/view03.png\" alt=\"\" /></li>
\t\t\t\t<li class=\"col-xs-6 col-sm-3\"><img src=\"/img/handmade/view04.png\" alt=\"\" /></li>
\t\t\t</ul>

\t\t\t</div>
\t\t\t<div class=\"bd_foot\"></div>
\t\t</div><!-- /.column02 -->

\t\t<div class=\"column column03\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"col-sm-6 movie_box\">
\t\t\t\t<div class=\"iframe_wrap\">
\t\t\t\t\t<iframe width=\"640\" height=\"360\" src=\"https://www.youtube-nocookie.com/embed/CFhXMdUP8T4?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 movie_box\">
\t\t\t\t<div class=\"iframe_wrap\">
\t\t\t\t\t<iframe width=\"640\" height=\"360\" src=\"https://www.youtube-nocookie.com/embed/AuLaSpNzK1Q?rel=0&amp;controls=0&amp;showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- .inner -->
\t\t</div><!-- /.column03 -->
\t</div><!-- /#handmade -->
</div><!-- /#main -->
</div>
</div>




";
    }

    public function getTemplateName()
    {
        return "__string_template__f5b8e2e374de0e96b4748f341175d364e41989f121c377afdf514c5108fa3fe4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__f5b8e2e374de0e96b4748f341175d364e41989f121c377afdf514c5108fa3fe4", "");
    }
}
