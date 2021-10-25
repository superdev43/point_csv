<?php

/* Block/bloc_shop_info.twig */
class __TwigTemplate_2ada50222640073920a8a839c720ffc73f82b03cd52e3d96b7c95f51eae3d02c extends Twig_Template
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
        echo "<div class=\"shop_info\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"v_row col-md-6\">
\t\t\t\t\t<div class=\"box box_deliv_price\">
\t\t\t\t\t\t<h3>送料について</h3>
\t\t\t\t\t\t<p><strong>5,000円</strong>(税別)以上お買い上げで→<strong>送料無料</strong></p>
\t\t\t\t\t\t<p class=\"all_pref\">全国一律送料600円</p>
\t\t\t\t\t\t<p>ネコポス便がご利用頂けます。詳しくは<a href=\"";
        // line 9
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "help/guide#row_deliv_mail\">コチラ</a>をご覧下さい。</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box box_payment\">
\t\t\t\t\t\t<h3>お支払について</h3>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>クレジット</dt>
\t\t\t\t\t\t\t<dd>下記カードがご利用頂けます<br><img src=\"/img/home/cards5.png\" alt=\"カード\" /></dd>
\t\t\t\t\t\t\t<dt>銀行振込</dt>
\t\t\t\t\t\t\t<dd>原則としてご入金確認後の発送手配とさせて頂いております。<br>7 日以内にご入金のない場合、ご注文をキャンセルとさせていただきます。<br>【取り扱い銀行口座】<br>三菱U F J 銀行　光明池支店<br>普通　0170697<br>カブシキガイシャグランジュテ</dd>
\t\t\t\t\t\t\t<dt>代金引換</dt>
\t\t\t\t\t\t\t<dd>商品到着時に配達員にお支払い頂く方法です。<br>別途代引き手数料が必要となります。</dd>
\t\t\t\t\t\t\t<dt>プライバシーポリシー</dt>
\t\t\t\t\t\t\t<dd>ティアラでは、お客様とのやり取りで得た個人情報(氏名、電話番号、住所、Email アドレス、ご購入商品)は、当社が責任をもって安全に蓄積・保管し、裁判所・警察関係等、公共機関からの提出要請があった場合以外の第三者に譲渡または利用することは一切ございません。どうぞ安心してご利用下さい。</dd>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-xs-6 box box_height box_cal\">



";
        // line 30
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/pg_calendar.css\">
<div id=\"calendar\" class=\"calendar hidden-xs\">
\t<div class=\"calendar_title none\">カレンダー</div>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute((isset($context["HolidayConfig"]) ? $context["HolidayConfig"] : null), "0", array(), "array"), "config_data", array(), "array") - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["roop"]) {
            // line 34
            $context["day"] = twig_date_converter($this->env, "first day of this month");
            // line 35
            $context["month"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), "n");
            // line 36
            $context["year"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), "Y");
            // line 37
            echo "
";
            // line 38
            if (((isset($context["month"]) ? $context["month"] : null) == "12")) {
                // line 39
                $context["roop_week"] = 5;
            } elseif ((            // line 40
(isset($context["month"]) ? $context["month"] : null) != "1")) {
                // line 41
                $context["roop_week"] = (twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "W") - twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (((((isset($context["year"]) ? $context["year"] : null) . "-") . (isset($context["month"]) ? $context["month"] : null)) . "-") . "01")), "W"));
            } else {
                // line 43
                $context["roop_week"] = (twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "W") - 1);
            }
            // line 45
            echo "
";
            // line 46
            if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "w") == "0")) {
                // line 47
                $context["roop_week"] = ((isset($context["roop_week"]) ? $context["roop_week"] : null) + 1);
            }
            // line 49
            $context["day"] = twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), (("-" . twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), (("+" . $context["roop"]) . " month")), "w")) . "days"));
            // line 50
            echo "
\t<table>
\t\t<caption>";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "年";
            echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : null), "html", null, true);
            echo "月の休業日</caption>
\t\t<thead><tr><th id=\"sunday\">日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th id=\"saturday\">土</th></tr></thead>
\t\t<tbody>
";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["roop_week"]) ? $context["roop_week"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "\t\t\t<tr>
";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 58
                    if ((twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "n") == (isset($context["month"]) ? $context["month"] : null))) {
                        // line 59
                        if ($this->getAttribute((isset($context["HolidayWeek"]) ? $context["HolidayWeek"] : null), $context["j"], array(), "array")) {
                            // line 60
                            echo "\t\t\t\t<td class=\"holiday\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), "html", null, true);
                            echo "</td>
";
                        } else {
                            // line 62
                            if (($this->getAttribute($this->getAttribute((isset($context["Holidays"]) ? $context["Holidays"] : null), (isset($context["month"]) ? $context["month"] : null), array(), "array", false, true), twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["Holidays"]) ? $context["Holidays"] : null), (isset($context["month"]) ? $context["month"] : null), array(), "array"), twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), array(), "array")))) {
                                // line 63
                                echo "\t\t\t\t<td class=\"holiday\">";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), "html", null, true);
                                echo "</td>
";
                            } else {
                                // line 65
                                echo "\t\t\t\t<td>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "j"), "html", null, true);
                                echo "</td>
";
                            }
                        }
                    } else {
                        // line 69
                        echo "\t\t\t\t<td>&nbsp;</td>
";
                    }
                    // line 71
                    $context["day"] = twig_date_modify_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "+1day");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t\t</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t</tbody>
\t</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</div>


<span class=\"closed_color\">休業日</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-xs-6 box box_height box_access\"><a href=\"";
        // line 84
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "access\">
\t\t\t\t\t\t\t<div class=\"img_box\">
\t\t\t\t\t\t\t\t<p><img src=\"/img/common/foot/shop_access.jpg\" alt=\"アクセス\" /></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3>店舗紹介・アクセスはこちら</h3>
\t\t\t\t\t</a></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"v_row col-md-6\">
\t\t\t\t\t<div class=\"box box_deliv\">
\t\t\t\t\t\t<h3>商品発送について</h3>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>＜オーダー以外の商品の場合＞</dt>
\t\t\t\t\t\t\t<dd>クレジット決済・代引きの場合は、商品が揃い次第発送致します。<br>銀行振り込みの場合は、ご入金確認後発送いたします。</dd>
\t\t\t\t\t\t\t<dt>＜プチオーダー、セレクトオーダー商品の場合＞</dt>
\t\t\t\t\t\t\t<dd>代引きの場合は、オーダー確定後製作し（製作日数~14 日ほど）、発送いたします。<br>銀行振り込みの場合は、ご入金確認後製作し（製作日数~14 日ほど）、発送いたします。</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box box_deliv\">
\t\t\t\t\t\t<h3>配達時間指定について</h3>
\t\t\t\t\t\t<p>【午前】午前中 【午後】14:00~16:00<br>【夕方】16:00~18:00 【夜間】18:00~20:00<br>【夜間】19:00~21:00</p>
\t\t\t\t\t\t<p>地域によってご希望の時間帯に配達できない場合もございます。<br>天候・交通事情によりご希望の時間帯にお届けできない場合がございます。</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box box_deliv\">
\t\t\t\t\t\t<h3>返品交換について</h3>
\t\t\t\t\t\t<p>原則としてお受けできません。<br>不良品またはこちらのミスでご注文と違う商品が届いた場合に限り3営業日以内にご連絡下さい。<br>3営業日以降のご連絡による交換・返品はお受けいたしかねます。</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box box_deliv\">
\t\t\t\t\t\t<h3>メールに関しての重要なお知らせ</h3>
\t\t\t\t\t\t<p>自動で『迷惑メール』として処理され、受信トレイに届かない場合がございます。<br>ティアラからの受注確認メールが届かない場合は、お電話でお問合せ下さい。<br>また、ティアラより送信した際にメールエラーで返ってくる場合もございます。<br>お電話にて確認させていただきますので、ご入力は必ず『ご連絡可能な電話番号』でお願いします。</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- /.shop_info -->";
    }

    public function getTemplateName()
    {
        return "Block/bloc_shop_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 84,  168 => 78,  160 => 75,  153 => 73,  147 => 71,  143 => 69,  135 => 65,  129 => 63,  127 => 62,  121 => 60,  119 => 59,  117 => 58,  113 => 57,  110 => 56,  106 => 55,  98 => 52,  94 => 50,  92 => 49,  89 => 47,  87 => 46,  84 => 45,  81 => 43,  78 => 41,  76 => 40,  74 => 39,  72 => 38,  69 => 37,  67 => 36,  65 => 35,  63 => 34,  59 => 33,  52 => 30,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/bloc_shop_info.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Block/bloc_shop_info.twig");
    }
}
