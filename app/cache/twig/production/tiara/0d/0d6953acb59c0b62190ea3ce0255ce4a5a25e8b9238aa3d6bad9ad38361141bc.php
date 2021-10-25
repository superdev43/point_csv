<?php

/* Mail/order.twig */
class __TwigTemplate_6ccf06573273731b2e54b98968b234dd526066226e0763acea53b47904c21b61 extends Twig_Template
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
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo " 様

";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "

************************************************
　ご請求金額
************************************************

ご注文番号：";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()), "html", null, true);
        echo "
お支払い合計：";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "
お支払い方法：";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_method", array()), "html", null, true);
        echo "
";
        // line 33
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "wrapping", array()) == 1)) {
            // line 34
            echo "無料ギフトラッピング：希望する
";
        } else {
            // line 36
            echo "無料ギフトラッピング：希望しない
";
        }
        // line 38
        echo "メッセージ：";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "message", array()), "html", null, true);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "OrderDetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderDetail"]) {
            // line 46
            echo "商品コード: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_code", array()), "html", null, true);
            echo "
商品名: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name1", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name2", array()), "html", null, true);
            echo "
<!-- option_detail_";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo " -->
単価： ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getCalcIncTax($this->getAttribute($context["OrderDetail"], "price", array()), $this->getAttribute($context["OrderDetail"], "tax_rate", array()), $this->getAttribute($context["OrderDetail"], "tax_rule", array()))), "html", null, true);
            echo "
数量： ";
            // line 50
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["OrderDetail"], "quantity", array())), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
-------------------------------------------------
小　計 ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tax", array()) > 0)) {
            echo "(うち消費税 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tax", array())), "html", null, true);
            echo ")";
        }
        // line 56
        echo "
手数料 ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "charge", array())), "html", null, true);
        echo "
送　料 ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "delivery_fee_total", array())), "html", null, true);
        echo "
";
        // line 59
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array()) > 0)) {
            // line 60
            echo "値引き ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter((0 - $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array()))), "html", null, true);
            echo "
";
        }
        // line 62
        echo "============================================
合　計 ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "

************************************************
　ご注文者情報
************************************************
";
        // line 68
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "customer_id", array()) > 0)) {
            // line 69
            echo "会員
(% else %}
非会員
";
        }
        // line 73
        echo "お名前　：";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo "　様
";
        // line 74
        if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "company_name", array())) {
            // line 75
            echo "会社名　：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "company_name", array()), "html", null, true);
            echo "
";
        }
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "form_country_enable", array())) {
            // line 78
            echo "国　　　：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "Country", array()), "html", null, true);
            echo "
ZIPCODE ：";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip_code", array()), "html", null, true);
            echo "
";
        }
        // line 81
        echo "郵便番号：〒";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
        echo "
住所　　：";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "Pref", array()), "name", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
        echo "
電話番号：";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
        echo "
FAX番号 ：";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "fax01", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "fax02", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "fax03", array()), "html", null, true);
        echo "

メールアドレス：";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
        echo "

************************************************
　配送情報
************************************************

";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "Shippings", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 93
            echo "◎お届け先";
            if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "multiple", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            }
            // line 94
            echo "
お名前　：";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name02", array()), "html", null, true);
            echo "　様
";
            // line 96
            if ($this->getAttribute($context["Shipping"], "company_name", array())) {
                // line 97
                echo "会社名　：";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "company_name", array()), "html", null, true);
                echo "
";
            }
            // line 99
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "form_country_enable", array())) {
                // line 100
                echo "    　国　　　：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Shipping"], "Country", array()), "name", array()), "html", null, true);
                echo "
    　ZIPCODE ：";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip_code", array()), "html", null, true);
                echo "
";
            }
            // line 103
            echo "郵便番号：〒";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip02", array()), "html", null, true);
            echo "
住所　　：";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Shipping"], "Pref", array()), "name", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr02", array()), "html", null, true);
            echo "
電話番号：";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel03", array()), "html", null, true);
            echo "
FAX番号 ：";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "fax03", array()), "html", null, true);
            echo "

";
            // line 108
            if (false) {
                // line 109
                echo "お届け日：";
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["Shipping"], "shipping_delivery_date", array()))) ? ("指定なし") : ($this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["Shipping"], "shipping_delivery_date", array())))), "html", null, true);
                echo "
";
            }
            // line 111
            echo "お届け時間：";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["Shipping"], "shipping_delivery_time", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["Shipping"], "shipping_delivery_time", array()), "指定なし")) : ("指定なし")), "html", null, true);
            echo "

";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Shipping"], "ShipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ShipmentItem"]) {
                // line 114
                echo "商品コード: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "product_code", array()), "html", null, true);
                echo "
商品名: ";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "product_name", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "classcategory_name1", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "classcategory_name2", array()), "html", null, true);
                echo "
<!-- option_shipmentitem_";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["ShipmentItem"], "id", array()), "html", null, true);
                echo "-->
数量：";
                // line 117
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["ShipmentItem"], "quantity", array())), "html", null, true);
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ShipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "Mail/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 122,  352 => 121,  331 => 117,  327 => 116,  319 => 115,  314 => 114,  310 => 113,  304 => 111,  298 => 109,  296 => 108,  287 => 106,  279 => 105,  273 => 104,  266 => 103,  261 => 101,  256 => 100,  254 => 99,  248 => 97,  246 => 96,  241 => 95,  238 => 94,  233 => 93,  216 => 92,  207 => 86,  198 => 84,  190 => 83,  184 => 82,  177 => 81,  172 => 79,  167 => 78,  165 => 77,  159 => 75,  157 => 74,  151 => 73,  145 => 69,  143 => 68,  135 => 63,  132 => 62,  126 => 60,  124 => 59,  120 => 58,  116 => 57,  113 => 56,  106 => 55,  102 => 53,  93 => 50,  89 => 49,  85 => 48,  77 => 47,  72 => 46,  68 => 45,  57 => 38,  53 => 36,  49 => 34,  47 => 33,  43 => 32,  39 => 31,  35 => 30,  26 => 24,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mail/order.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/Mail/order.twig");
    }
}
