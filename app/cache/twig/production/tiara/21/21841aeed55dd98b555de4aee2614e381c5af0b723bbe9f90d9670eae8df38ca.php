<?php

/* __string_template__f67477dae07b693440fc396e8603b639b2bbf2e7efff27b844c552a6b78bb0a9 */
class __TwigTemplate_90bdaa74da8fb913a7a114006c3765593b8314e35a147c5e97a9655ad558427b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__f67477dae07b693440fc396e8603b639b2bbf2e7efff27b844c552a6b78bb0a9", 22);
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
        $context["mypageno"] = "index";
        // line 26
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        // line 29
        echo "<script>
\$(function(){
    \$(\".title\").on(\"click\", function(){
        \$(this).next().slideToggle();
    });
    \$(\".close\").on(\"click\", function(){
        \$(this).parent().slideToggle();
    });
});
</script>
";
    }

    // line 40
    public function block_main($context, array $blocks = array())
    {
        // line 41
        echo "
    <div id=\"detail_wrap\" class=\"container-fluid\">
\t<div class=\"inner\">
        ";
        // line 44
        $this->loadTemplate("Mypage/navi.twig", "__string_template__f67477dae07b693440fc396e8603b639b2bbf2e7efff27b844c552a6b78bb0a9", 44)->display($context);
        // line 45
        echo "
        <div id=\"detail_box\" class=\"row\">
            <div id=\"detail_box__body\" class=\"col-md-12\">
                <dl id=\"detail_box__body_inner\" class=\"order_detail\">
                    <dt id=\"detail_box__create_date\">ご注文日時：</dt>
                    <dd>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "create_date", array()), "Y/m/d H:i:s"), "html", null, true);
        echo "</dd>
                    <dt id=\"detail_box__id\">ご注文番号：</dt>
                    <dd>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()), "html", null, true);
        echo "</dd>
                    ";
        // line 53
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_mypage_order_status_display", array())) {
            // line 54
            echo "                        <dt id=\"detail_box__customer_order_status\">ご注文状況：</dt>
                        <dd>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "CustomerOrderStatus", array()), "html", null, true);
            echo "</dd>
                    ";
        }
        // line 57
        echo "                </dl>
            </div>
        </div>

        <div id=\"shopping_confirm\" class=\"row\">
            <div id=\"confirm_main\" class=\"col-sm-8\">
                <div id=\"detail_list_box__body\" class=\"cart_item table\">
                    <div id=\"detail_list_box__list\" class=\"tbody\">
                        ";
        // line 65
        $context["remessage"] = "";
        // line 66
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "OrderDetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderDetail"]) {
            // line 67
            echo "                            <div id=\"detail_list__item_box--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"item_box tr\">
                                <div id=\"detail_list__item--";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"td table\">
                                    <div id=\"detail_list__image--";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"item_photo\">
                                        ";
            // line 70
            if ((null === $this->getAttribute($context["OrderDetail"], "Product", array()))) {
                // line 71
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
                echo "\" />
                                        ";
            } else {
                // line 73
                echo "                                            ";
                if ($this->getAttribute($context["OrderDetail"], "enable", array())) {
                    // line 74
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($this->getAttribute($context["OrderDetail"], "Product", array()), "id", array()))), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["OrderDetail"], "product", array()), "MainListImage", array())), "html", null, true);
                    echo "\" />
                                                </a>
                                            ";
                } else {
                    // line 78
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
                    echo "\" />
                                            ";
                }
                // line 80
                echo "                                        ";
            }
            // line 81
            echo "                                    </div>
                                    <dl id=\"detail_list__item_detail--";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <dt id=\"detail_list__product_name--";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"item_name text-default\">
                                            ";
            // line 84
            if ((null === $this->getAttribute($context["OrderDetail"], "Product", array()))) {
                // line 85
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
                echo "
                                            ";
            } else {
                // line 87
                echo "                                                ";
                if ($this->getAttribute($context["OrderDetail"], "enable", array())) {
                    // line 88
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($this->getAttribute($context["OrderDetail"], "Product", array()), "id", array()))), "html", null, true);
                    echo "\">
                                                        ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
                    echo "
                                                    </a>
                                                ";
                } else {
                    // line 92
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 94
                echo "                                            ";
            }
            // line 95
            echo "                                        </dt>
                                        <dd id=\"detail_list__classcategory_name--";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                            ";
            // line 97
            if ( !twig_test_empty($this->getAttribute($context["OrderDetail"], "classcategory_name1", array()))) {
                // line 98
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name1", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 100
            echo "                                            ";
            if ( !twig_test_empty($this->getAttribute($context["OrderDetail"], "classcategory_name2", array()))) {
                // line 101
                echo "                                                / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "classcategory_name2", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 103
            echo "                                        ";
            // line 112
            echo "
";
            // line 113
            if ($this->getAttribute($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), "label", array(), "array", false, true), $this->getAttribute($context["OrderDetail"], "id", array()), array(), "array", true, true)) {
                // line 114
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), "label", array(), "array"), $this->getAttribute($context["OrderDetail"], "id", array()), array(), "array"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 115
                    echo "        ";
                    if ((($this->getAttribute($context["loop"], "index0", array()) != 0) ||  !twig_test_empty($this->getAttribute($context["OrderDetail"], "classcategory_name1", array())))) {
                        echo "<br />";
                    }
                    // line 116
                    echo "        ";
                    echo nl2br(twig_escape_filter($this->env, $context["label"], "html", null, true));
                    echo "
    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 118
            echo "</dd>
                                        <dd id=\"detail_list__price_inc_tax--";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"item_price\">
                                            ";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["OrderDetail"], "price_inc_tax", array())), "html", null, true);
            echo " × ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["OrderDetail"], "quantity", array())), "html", null, true);
            echo "
                                        </dd>
                                        <dd id=\"detail_list__total_price--";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
            echo "\" class=\"item_subtotal\">
                                            小計：";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["OrderDetail"], "total_price", array())), "html", null, true);
            echo "
                                        </dd>
                                        ";
            // line 134
            echo "
";
            // line 135
            $context["option_price"] = 0;
            // line 136
            if ($this->getAttribute($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), "price", array(), "array", false, true), $this->getAttribute($context["OrderDetail"], "id", array()), array(), "array", true, true)) {
                // line 137
                echo "    ";
                $context["option_price"] = $this->getAttribute($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), "price", array(), "array"), $this->getAttribute($context["OrderDetail"], "id", array()), array(), "array");
            }
            // line 139
            if (($this->getAttribute($context["OrderDetail"], "product", array()) && ($this->getAttribute($context["OrderDetail"], "price_inc_tax", array()) != ($this->getAttribute($this->getAttribute($context["OrderDetail"], "productClass", array()), "price02IncTax", array()) + (isset($context["option_price"]) ? $context["option_price"] : null))))) {
                // line 140
                echo "                                            <dd id=\"detail_list__price02_inc_tax--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                echo "\" class=\"text-danger\">
                                                <strong>【現在価格】";
                // line 141
                $context["price"] = ($this->getAttribute($this->getAttribute($context["OrderDetail"], "productClass", array()), "price02IncTax", array()) + (isset($context["option_price"]) ? $context["option_price"] : null));
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter((isset($context["price"]) ? $context["price"] : null)), "html", null, true);
                echo "</strong>
                                            </dd>
                                            ";
                // line 143
                $context["remessage"] = true;
                // line 144
                echo "                                        ";
            }
            // line 145
            echo "                                    </dl>
                                </div>
                            </div><!--/item_box-->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                    </div>
                </div><!--/cart_item-->

                <h2 class=\"heading02\">配送情報</h2>
                ";
        // line 153
        $context["OrderDetail"] = $this->getAttribute($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "OrderDetails", array()), 0, array());
        // line 154
        echo "                ";
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
            // line 155
            echo "                    <div id=\"shipping_list--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
            echo "\" class=\"column is-edit\">
                        <h3>お届け先";
            // line 156
            if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "multiple", array())) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "</h3>
                        <div id=\"shipping_list__body--";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
            echo "\" class=\"cart_item table\">
                            <div id=\"shipping_list__list--";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
            echo "\" class=\"tbody\">
                                ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Shipping"], "shipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["shipmentItem"]) {
                // line 160
                echo "                                    <div id=\"shipping_list__shipment--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\">
                                        <div id=\"shipping_list__shipment_item--";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "id", array()), "html", null, true);
                echo "\" class=\"td table\">
                                            <div id=\"shipping_list__shipment_image--";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "id", array()), "html", null, true);
                echo "\" class=\"item_photo\">
                                                ";
                // line 163
                if ((null === $this->getAttribute($context["shipmentItem"], "product", array()))) {
                    // line 164
                    echo "                                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
                    echo "\" />
                                                ";
                } else {
                    // line 166
                    echo "                                                    ";
                    if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "enable", array())) {
                        // line 167
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "MainListImage", array())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                        echo "\" />
                                                    ";
                    } else {
                        // line 169
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
                        echo "\" />
                                                    ";
                    }
                    // line 171
                    echo "                                                ";
                }
                // line 172
                echo "                                            </div>
                                            <dl id=\"shipping_list__shipment_detail--";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "id", array()), "html", null, true);
                echo "\" class=\"item_detail\">
                                                <dt id=\"shipping_list__shipment_product_name--";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "id", array()), "html", null, true);
                echo "\" class=\"item_name text-default\">
                                                    ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo " ×";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "quantity", array()), "html", null, true);
                echo "
                                                </dt>
                                                <dd id=\"shipping_list__shipment_class_category--";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "id", array()), "html", null, true);
                echo "\" class=\"item_pattern small\">
                                                    ";
                // line 178
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array())) {
                    // line 179
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 181
                echo "                                                    ";
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array())) {
                    // line 182
                    echo "                                                        <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 184
                echo "                                                ";
                // line 193
                echo "
";
                // line 194
                if ($this->getAttribute((isset($context["plgShipmentItems"]) ? $context["plgShipmentItems"] : null), $this->getAttribute($context["shipmentItem"], "id", array()), array(), "array", true, true)) {
                    // line 195
                    echo "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plgShipmentItems"]) ? $context["plgShipmentItems"] : null), $this->getAttribute($context["shipmentItem"], "id", array()), array(), "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 196
                        echo "        ";
                        if ((($this->getAttribute($context["loop"], "index0", array()) != 0) ||  !twig_test_empty($this->getAttribute($context["shipmentItem"], "classcategory_name1", array())))) {
                            echo "<br />";
                        }
                        // line 197
                        echo "        ";
                        echo nl2br(twig_escape_filter($this->env, $context["label"], "html", null, true));
                        echo "
    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 199
                echo "</dd>
                                            </dl>
                                        </div>
                                    </div><!--/item_box-->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                            </div>
                        </div>

                        <p id=\"shipping_list__address--";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
            echo "\" class=\"address\">
                            ";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name01", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "name02", array()), "html", null, true);
            echo "&nbsp;
                            (";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "kana01", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "kana02", array()), "html", null, true);
            echo ")&nbsp;様<br>
                            〒";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "zip02", array()), "html", null, true);
            echo "　";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "Pref", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "addr02", array()), "html", null, true);
            echo "<br>
                            ";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "tel03", array()), "html", null, true);
            echo "
                        </p>
                        <p id=\"shipping_list__delivery--";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "id", array()), "html", null, true);
            echo "\">
                            配送方法：　";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["Shipping"], "shipping_delivery_name", array()), "html", null, true);
            echo twig_escape_filter($this->env, (($this->getAttribute($context["Shipping"], "delivery_fee", array())) ? ((("（＋" . $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["Shipping"], "delivery_fee", array()), "fee", array()))) . "）")) : ("")), "html", null, true);
            echo "<br>
                            <!--お届け日：　";
            // line 215
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["Shipping"], "shipping_delivery_date", array())), "指定なし"), "html", null, true);
            echo "<br>-->
                            お届け時間：　";
            // line 216
            echo twig_escape_filter($this->env, (($this->getAttribute($context["Shipping"], "shipping_delivery_time", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["Shipping"], "shipping_delivery_time", array()), "指定なし")) : ("指定なし")), "html", null, true);
            echo "
                        </p>
                    </div>
                    ";
            // line 219
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "<hr>";
            }
            // line 220
            echo "                ";
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
        // line 221
        echo "                <h2 class=\"heading02\">お支払方法</h2>
                <div id=\"detail_box__payment_method\" class=\"column\">
                    <p>
                        支払方法： ";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "PaymentMethod", array()), "html", null, true);
        echo "
                    </p>
                </div>
                <h2 class=\"heading02\">お問い合わせ</h2>
                <div id=\"detail_box__message\" class=\"column\">
                    <p>
                        ";
        // line 230
        echo nl2br(twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "message", array()), "記載なし")) : ("記載なし")), "html", null, true));
        echo "
                    </p>
                </div>

                <h2 class=\"heading02\">メール配信履歴一覧</h2>
                <div id=\"mail_list\" class=\"column mail_list\">
                    ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "MailHistories", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
            // line 237
            echo "                        <dl id=\"mail_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                            <dt id=\"mail_list__send_date--";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                <span class=\"date\">";
            // line 239
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["MailHistory"], "send_date", array()), "Y/m/d H:i:s"), "html", null, true);
            echo "</span>
                            </dt>
                            <dd id=\"mail_list__subject--";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                <span class=\"title\">
                                    <a data-toggle=\"modal\" data-target=\"#myModal";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["MailHistory"], "subject", array()), "html", null, true);
            echo "</a>
                                </span>
                                <p id=\"mail_list__mail_body--";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" style=\"display: none;\">
                                    ";
            // line 246
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["MailHistory"], "mail_body", array()), "html", null, true));
            echo "<br>
                                    <span class=\"close\"><a>閉じる</a></span>
                                </p>
                            </dd>
                        </dl>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 252
            echo "                        メール履歴がありません。
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                </div>
            </div><!-- /.col -->

            <div id=\"confirm_side\" class=\"col-sm-4\">
                <div id=\"summary_box\" class=\"total_box\">
                    <dl id=\"summary_box__subtotal\">
                        <dt>小計</dt>
                        <dd>";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl id=\"summary_box__charge\">
                        <dt>手数料</dt>
                        <dd>";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "charge", array())), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl id=\"summary_box__delivery_fee_total\">
                        <dt>送料合計</dt>
                        <dd>";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "delivery_fee_total", array())), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 271
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array()) > 0)) {
            // line 272
            echo "                        <dl id=\"summary_box__discount\">
                            <dt>値引き</dt>
                            <dd>
                                &minus;";
            // line 275
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array())), "html", null, true);
            echo "
                            </dd>
                        </dl>
                    ";
        }
        // line 279
        echo "
                    <div id=\"summary_box__summary\" class=\"total_amount\">
                        <br/>
<dl id=\"summary_box__use_point\">
    <dt>利用ポイント</dt>
    <dd class=\"text-primary\">17 pt</dd>
</dl>
<dl id=\"summary_box__add_point\">
    <dt>加算ポイント</dt>
    <dd>66 pt</dd>
</dl>

<p id=\"summary_box__payment_total\" class=\"total_price\">
                            合計 <strong class=\"text-primary\">";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "<span class=\"small\">税込</span></strong>
                        </p>
                        <p id=\"summary_box__reorder_button\">
                            <a href=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage_order", array("id" => $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\" ";
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
        echo " data-method=\"put\" data-confirm=\"false\">再注文する</a>
                        </p>
                    </div>
                    ";
        // line 298
        if ((isset($context["remessage"]) ? $context["remessage"] : null)) {
            // line 299
            echo "                        <p id=\"summary_box__message\" class=\"text-danger\">
                            <strong>※金額が変更されている商品があるため、再注文時はご注意ください。</strong>
                        </p>
                    ";
        }
        // line 303
        echo "                </div>
            </div>
        </div><!-- /.row -->

        <div id=\"detail_box__top_button\" class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                <a href=\"";
        // line 309
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage");
        echo "\" class=\"btn btn-default btn-sm\">戻る</a>
            </div>
        </div>

\t</div><!-- /.inner -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__f67477dae07b693440fc396e8603b639b2bbf2e7efff27b844c552a6b78bb0a9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 309,  793 => 303,  787 => 299,  785 => 298,  777 => 295,  771 => 292,  756 => 279,  749 => 275,  744 => 272,  742 => 271,  737 => 269,  730 => 265,  723 => 261,  714 => 254,  707 => 252,  688 => 246,  684 => 245,  677 => 243,  672 => 241,  667 => 239,  663 => 238,  658 => 237,  640 => 236,  631 => 230,  622 => 224,  617 => 221,  603 => 220,  599 => 219,  593 => 216,  589 => 215,  584 => 214,  580 => 213,  571 => 211,  561 => 210,  555 => 209,  549 => 208,  545 => 207,  540 => 204,  530 => 199,  512 => 197,  507 => 196,  489 => 195,  487 => 194,  484 => 193,  482 => 184,  474 => 182,  471 => 181,  463 => 179,  461 => 178,  455 => 177,  448 => 175,  442 => 174,  436 => 173,  433 => 172,  430 => 171,  422 => 169,  412 => 167,  409 => 166,  401 => 164,  399 => 163,  393 => 162,  387 => 161,  380 => 160,  376 => 159,  372 => 158,  368 => 157,  360 => 156,  355 => 155,  337 => 154,  335 => 153,  329 => 149,  320 => 145,  317 => 144,  315 => 143,  309 => 141,  304 => 140,  302 => 139,  298 => 137,  296 => 136,  294 => 135,  291 => 134,  286 => 123,  282 => 122,  275 => 120,  271 => 119,  268 => 118,  250 => 116,  245 => 115,  227 => 114,  225 => 113,  222 => 112,  220 => 103,  214 => 101,  211 => 100,  205 => 98,  203 => 97,  199 => 96,  196 => 95,  193 => 94,  187 => 92,  181 => 89,  176 => 88,  173 => 87,  167 => 85,  165 => 84,  161 => 83,  157 => 82,  154 => 81,  151 => 80,  143 => 78,  135 => 75,  130 => 74,  127 => 73,  119 => 71,  117 => 70,  113 => 69,  109 => 68,  104 => 67,  99 => 66,  97 => 65,  87 => 57,  82 => 55,  79 => 54,  77 => 53,  73 => 52,  68 => 50,  61 => 45,  59 => 44,  54 => 41,  51 => 40,  37 => 29,  34 => 28,  30 => 22,  28 => 26,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__f67477dae07b693440fc396e8603b639b2bbf2e7efff27b844c552a6b78bb0a9", "");
    }
}
