<?php

/* __string_template__a1ada522c1671a4d861f586fb51cdd6b4ecff542359031e1510504657c4cb86f */
class __TwigTemplate_b943a466d7b3473969beb01486ca03cde40142d2295fc70ad9621f7a862352cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__a1ada522c1671a4d861f586fb51cdd6b4ecff542359031e1510504657c4cb86f", 22);
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

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        // line 25
        echo "<script>
\$(function() {

    \$('.delivery').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 29
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_delivery");
        echo "').submit();
        return false;
    });

    \$('.payment').on('change', function() {
        \$('#shopping-form').attr('action', '";
        // line 34
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_payment");
        echo "').submit();
        return false;
    });

    \$('.btn-shipping').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 40
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    \$('.btn-shipping-edit').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 46
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    \$('.btn-shipping-multiple').click(function() {
        \$('#shopping-form').attr('action', \$(this).attr('href')).submit();
        \$('#shopping-form').attr('action', '";
        // line 52
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "');
        return false;
    });

    ";
        // line 56
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 57
            echo "        var ref = [];
        var name = [];
        var input = [];
        var customerin = [];

        \$('#customer').click(function() {
            // ref = \$('.customer-name01');
            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');

            \$(edit).each(function(index) {
                ref[index] = \$(this);
            });
            \$(hidden).each(function(index) {
                customerin[index] = \$(this);
            });
            \$(ref).each(function(index) {
                name[index] = \$(this).text();
            });
            \$(name).each(function(index) {
                input[index] = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name[index]);
            });
            \$(input).each(function(index) {
                ref[index].empty().append(input[index]);
            });

            \$('#customer').prop(\"disabled\", true);
            \$('.mod-button').show();
        });

        \$('#customer-ok').click(function() {
            \$(ref).each(function(index) {
                var nameAfter = input[index].val();
                ref[index].empty().text(nameAfter);
                customerin[index].val(nameAfter);
                input[index].remove();
            });

            var postData = {};
            \$('.customer-in').each(function() {
                postData[\$(this).attr('name')] = \$(this).val();
            });

            \$.ajax({
                url: \"";
            // line 101
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_customer");
            echo "\",
                type: 'POST',
                data: postData,
                dataType: 'json',
            }).done(function(){
            }).fail(function(){
                alert('更新に失敗しました。入力内容を確認してください。');
                \$(ref).each(function(index) {
                    ref[index].empty().text(name[index]);
                    input[index].remove();
                });
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });

        \$('#customer-cancel').click(function() {
            \$(ref).each(function(index) {
                ref[index].empty().text(name[index]);
                input[index].remove();
            });

            \$('#customer').prop(\"disabled\", false);
            \$('.mod-button').hide();
        });
    ";
        }
        // line 128
        echo "
});
</script>
<script>
\t\$(function(){
\t\tif(\$(\"#dummy input\").prop('checked')) {
\t\t\t\$(\"#order-button\").prop(\"disabled\", true);
\t\t\t\$(\"#payment_choice_message\").css('display','block');
\t\t} else {
\t\t\t\$(\"#order-button\").prop(\"disabled\", false);
\t\t\t\$(\"#payment_choice_message\").css('display','none');
\t\t}
\t});
</script>
";
    }

    // line 144
    public function block_main($context, array $blocks = array())
    {
        // line 145
        echo "
    <div id=\"confirm_wrap\" class=\"container-fluid\">
\t<div class=\"inner\">
        <div id=\"confirm_flow_box\" class=\"row\">
            <div id=\"confirm_flow_box__body\" class=\"col-md-12\">
                ";
        // line 150
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 151
            echo "                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step3\">
                ";
        } else {
            // line 153
            echo "                <div id=\"confirm_flow_box__flow_state\" class=\"flowline step4\">
                ";
        }
        // line 155
        echo "                    <ul id=\"confirm_flow_box__flow_state_list\" class=\"clearfix\">
                    <li><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 157
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 158
            echo "                        <li class=\"active\"><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 161
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li class=\"active\"><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 165
        echo "                    </ul>
                </div>
                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 168
            echo "                    <div id=\"confirm_flow_box__message\" class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 170
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "            </div><!-- /.col -->
        </div><!-- /.row -->
        <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 176
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_confirm");
        echo "\">
            ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
            <div id=\"shopping_confirm\" class=\"row\">
                <div id=\"confirm_main\" class=\"col-sm-8\">
                    <h2 class=\"heading02\">配送情報</h2>
                    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "shippings", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 182
            echo "                        ";
            $context["idx"] = $this->getAttribute($context["loop"], "index0", array());
            // line 183
            echo " <div id=\"shopping_confirm_box__shipping_delivery--";
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"form-inline form-group\">
                                <label>配送方法</label>
                                ";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "delivery", array()), 'widget', array("attr" => array("class" => "delivery")));
            echo "
                                ";
            // line 186
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "delivery", array()), 'errors');
            echo "<br><p class=\"red\">※購入商品の組み合わせによってネコポス便で対応できない場合もございます<br>※代引きでのお支払いを選択されますとネコポス便はご利用出来ません。<br></p>
                            </div><div id=\"shipping_confirm_box--";
            // line 187
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"column is-edit\">
                            <h3>お届け先";
            // line 188
            if ($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "multiple", array())) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "</h3>
<p id=\"shopping_confirm_box__shipping_address_detail--";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"address\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "name02", array()), "html", null, true);
            echo " 様<br>
                            〒";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "zip02", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "pref", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr01", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "addr02", array()), "html", null, true);
            echo "<br>
                            ";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel01", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel02", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shipping"], "tel03", array()), "html", null, true);
            echo "</p>

                            <div id=\"shipping_confirm_box__body--";
            // line 193
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"cart_item table\">
                                <div id=\"shipping_confirm_box__list--";
            // line 194
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"tbody\">
                                ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping"], "shipmentItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["shipmentItem"]) {
                // line 196
                echo "                                    <div id=\"shipping_confirm_box__item--";
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\">
                                        <div id=\"shipping_box__body_inner--";
                // line 197
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"td table\">
                                            <div id=\"shipping_box__photo--";
                // line 198
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_photo\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["shipmentItem"], "product", array()), "MainListImage", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "\" /></div>
                                            <dl id=\"shipping_box__detail--";
                // line 199
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_detail\">
                                                <dt id=\"shipping_box__name--";
                // line 200
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_name text-default\">商品コード ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productCode", array()), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "productName", array()), "html", null, true);
                echo "</dt>
                                                <dd id=\"shipping_box__class_category--";
                // line 201
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern small\">
                                                    ";
                // line 202
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array())) {
                    // line 203
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory1", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 205
                echo "                                                    ";
                if ($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array())) {
                    // line 206
                    echo "                                                        <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shipmentItem"], "productClass", array()), "classCategory2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 208
                echo "                                                </dd>
                                                ";
                // line 218
                echo "
<dd>
    ";
                // line 220
                if ($this->getAttribute((isset($context["plgShipmentItems"]) ? $context["plgShipmentItems"] : null), $this->getAttribute($context["shipmentItem"], "id", array()), array(), "array", true, true)) {
                    // line 221
                    echo "        ";
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
                        // line 222
                        echo "            ";
                        if (($this->getAttribute($context["loop"], "index0", array()) != 0)) {
                            echo "<br />";
                        }
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
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
                    // line 224
                    echo "    ";
                }
                // line 225
                echo "</dd><dd id=\"shipping_box__price--";
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_price\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["shipmentItem"], "priceIncTax", array())), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["shipmentItem"], "quantity", array())), "html", null, true);
                echo "</dd>
                                                <dd id=\"shipping_box__subtotal--";
                // line 226
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shipmentItem"], "id", array()), "html", null, true);
                echo "\" class=\"item_subtotal\">小計：";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["shipmentItem"], "totalPrice", array())), "html", null, true);
                echo "</dd>
                                            </dl>
                                        </div>
                                    </div><!--/item_box-->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipmentItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                                </div>
                            </div><div id=\"shopping_confirm_box__shipping_delivery_date_time--";
            // line 232
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
            echo "\" class=\"form-inline form-group\"><p class=\"red\"></p><label>お届け日</label>
<span class=\"red\" style=\"display: inline-block; padding: 0 0 1em 4.5em; margin-top: -20px;\">※お届け日のご希望がある方は、ご希望のお届け日を【お問い合わせ欄】にご記入ください。ご指定のない場合は最短での配達となります。<br>またお届け日時について、商品によってはご希望に添えない場合がございます。予めご了承くださいませ。</span>                             
<!-- <label>お届け日</label>  ";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "shippingDeliveryDate", array()), 'widget');
            echo "--><br class=\"sp\">
                                <label>お届け時間</label>
                                ";
            // line 236
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shippings", array()), (isset($context["idx"]) ? $context["idx"] : null), array(), "array"), "deliveryTime", array()), 'widget');
            echo " </div>
                            ";
            // line 237
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 238
                echo "                            <p id=\"shopping_confirm_box__edit_button--";
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "\" class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping\">変更</a></p>
                            ";
            } else {
                // line 240
                echo "                            <p id=\"shopping_confirm_box__edit_button--";
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : null), "html", null, true);
                echo "\" class=\"btn_edit\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping_edit_change", array("id" => $this->getAttribute($context["shipping"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-shipping-edit\">変更</a></p>
                            ";
            }
            // line 242
            echo "                        </div>
                        ";
            // line 243
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo "<hr>";
            }
            // line 244
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                    ";
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
            // line 246
            echo "                        <hr>
                        <div><a id=\"shopping_confirm_box__button_edit_multiple\"  href=\"";
            // line 247
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping_multiple_change");
            echo "\" class=\"btn btn-default btn-sm btn-shipping-multiple\">お届け先を追加する</a></div>
                    ";
        }
        // line 249
        echo "
              <h2 class=\"heading02\">お支払方法</h2>
                    <div id=\"payment_list\" class=\"column\">
                        <div id=\"payment_list__body\" class=\"form-group\">
                            <ul id=\"payment_list__list\" class=\"payment_list\">
                            ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 255
            echo "                            <li>
                                ";
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => "payment")));
            echo "
                                ";
            // line 257
            if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()))) {
                // line 258
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), "vars", array()), "choices", array()), $context["key"], array(), "array"), "data", array()), "payment_image", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 260
            echo "                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment", array()), 'errors');
        echo "
                            </ul>
<p><span class=\"red\">※お客様の環境によってクジレットカード決済がエラーとなる場合がございます。<br>エラーとなる場合は最新版のブラウザをお試しください。</span></p>
                        </div>
                    </div>

<h2 class=\"heading02\">購入商品情報</h2>
                    <div id=\"cart_box\" class=\"cart_item table\">
                        <div id=\"cart_box_list\" class=\"tbody\">
                            ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "orderDetails", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderDetail"]) {
            // line 272
            echo "                            <div id=\"cart_box_list__item_box--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_box tr\">
                                <div id=\"cart_box_list__item--";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"td table\">
                                    <div id=\"cart_box_list__photo--";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_photo\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["orderDetail"], "product", array()), "MainListImage", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "\" /></div>
                                    <dl id=\"cart_box_list__detail--";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <dt id=\"cart_box_list__name--";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name text-default\">商品コード ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productCode", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderDetail"], "productName", array()), "html", null, true);
            echo "</dt>
                                        <dd id=\"cart_box_list__class_category--";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                            ";
            // line 278
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array())) {
                // line 279
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory1", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 281
            echo "                                            ";
            if ($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array())) {
                // line 282
                echo "                                                <br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "className", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderDetail"], "productClass", array()), "classCategory2", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 284
            echo "                                        </dd>
                                        ";
            // line 294
            echo "
<dd>
    ";
            // line 296
            if ($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), $this->getAttribute($context["orderDetail"], "id", array()), array(), "array", true, true)) {
                // line 297
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), $this->getAttribute($context["orderDetail"], "id", array()), array(), "array"));
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
                    // line 298
                    echo "            ";
                    if (($this->getAttribute($context["loop"], "index0", array()) != 0)) {
                        echo "<br />";
                    }
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
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
                // line 300
                echo "    ";
            }
            // line 301
            echo "</dd><dd id=\"cart_box_list__price--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_price\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["orderDetail"], "priceIncTax", array())), "html", null, true);
            echo " × ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["orderDetail"], "quantity", array())), "html", null, true);
            echo "</dd>
                                        <dd id=\"cart_box_list__subtotal--";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_subtotal\">小計：";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["orderDetail"], "totalPrice", array())), "html", null, true);
            echo "</dd>
                                    </dl>
                                </div>
                            </div><!--/item_box-->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                        </div>
                    </div><!--/cart_item-->
                    <p><a id=\"confirm_box__quantity_edit_button\" href=\"";
        // line 309
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("cart");
        echo "\" class=\"btn btn-default btn-sm\">数量を変更または削除する</a></p>

                    <h2 class=\"heading02\">お客様情報</h2>
                    <div id=\"customer_detail_box\" class=\"column is-edit\">
                        <p id=\"customer_detail_box__customer_address\" class=\"address\"><span class=\"customer-edit customer-name01\">";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
        echo "</span> 様<br>
                        〒<span class=\"customer-edit customer-zip01\">";
        // line 314
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-zip02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-pref\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "pref", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr01\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
        echo "</span><br>
                        <span class=\"customer-edit customer-tel01\">";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel02\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
        echo "</span>-<span class=\"customer-edit customer-tel03\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
        echo "</span></p>
                        ";
        // line 316
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 317
            echo "                            <div class=\"customer-edit customer-email\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
            echo "</div>
                            <div class=\"customer-edit customer-company_name\">";
            // line 318
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "companyName", array()), "html", null, true);
            echo "</div>
                            <div class=\"mod-button\" style=\"display:none;\">
                                <span id=\"customer-ok\"><button type=\"button\" class=\"btn btn-default btn-sm\">OK</button></span>
                                <span id=\"customer-cancel\"><button type=\"button\" class=\"btn btn-default btn-sm\">キャンセル</button></span>
                            </div>
                            <p class=\"btn_edit\"><button type=\"button\" id=\"customer\" class=\"btn btn-default btn-sm\">変更</button></p>
                            <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "name02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-zip01\" class=\"customer-in\" name=\"customer_zip01\" value=\"";
            // line 326
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-zip02\" class=\"customer-in\" name=\"customer_zip02\" value=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "zip02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "pref", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 330
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "addr02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel01\" class=\"customer-in\" name=\"customer_tel01\" value=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel01", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel02\" class=\"customer-in\" name=\"customer_tel02\" value=\"";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel02", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-tel03\" class=\"customer-in\" name=\"customer_tel03\" value=\"";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "tel03", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "email", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "companyName", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 337
        echo "                    </div>

                    

\t\t<h2 class=\"heading02\">無料ギフトラッピング</h2>
                    <div id=\"shopping_free_wrapping\" class=\"column\">
\t\t\t\t\t\t";
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "wrapping", array()), 'widget');
        echo "
                        ";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "wrapping", array()), 'errors');
        echo "
\t\t\t<p class=\"red\">※2点以上ご購入で無料ギフトラッピングをご希望される方はお問い合わせ欄に商品コードをご入力ください。</p>
                    </div>
<script>
\$(function() {
\t\$('#shopping_wrapping_0').prop('required',false);
\t\$('#shopping_wrapping_1').prop('required',false);
});
</script>

                    <h2 class=\"heading02\">ポイント利用</h2>
<div id=\"point_box\" class=\"column\">
    <div id=\"point_box__body\" class=\"text-left form-group\">
        <p id=\"point_box__info\" class=\"text-left\">
            現在の保有ポイントは「<strong class=\"text-primary\">39 pt</strong>」です。<br/>
            ポイントは商品購入時に1pt＝<strong class=\"text-primary\">1円</strong>として利用することができます。
            <a id=\"confirm_box__use_point_edit_button\" href=\"https://tiara-collection.com/shopping/use_point\" class=\"btn btn-default btn-sm\">ポイントを利用する</a>
        </p>
    </div>
</div>
";
        // line 373
        echo "<script type=\"text/javascript\">
    \$(function () {
        \$('#coupon_button').click(function () {
            var date = '';
            var time = '';
            \$(\"select[id^=shopping_shippings_][id\$=_shippingDeliveryDate]\").each(function () {
                date += \$(this).val() + ',';
            });
            \$(\"select[id^=shopping_shippings_][id\$=_deliveryTime]\").each(function () {
                time += \$(this).val() + ',';
            });
            \$(this).attr('disabled', 'disabled');
            \$.ajax({
                type: 'POST',
                data: {
                    'coupon_delivery_date' : date,
                    'coupon_delivery_time' : time,
                    'message' : \$('#shopping_message').val()
                },
                url: '";
        // line 392
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_coupon_save_delivery");
        echo "',
                success: function(data) {
                    window.location.href = '";
        // line 394
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_coupon_shopping");
        echo "';
                },
                error: function() {
                    window.location.href = '";
        // line 397
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_coupon_shopping");
        echo "';
                }
            });
            return false;
        });
    })
</script>
<h2 class=\"heading02\">クーポン</h2>
<div id=\"customer_detail_box\" class=\"column is-edit\">
    ";
        // line 406
        if ((isset($context["CouponOrder"]) ? $context["CouponOrder"] : null)) {
            // line 407
            echo "        <strong class=\"text-danger\">クーポンコード ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["CouponOrder"]) ? $context["CouponOrder"] : null), "coupon_cd", array()), "html", null, true);
            echo " を利用しています。</strong>
        <p><a class=\"btn btn-default btn-sm\" id=\"coupon_button\" href=\"";
            // line 408
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_coupon_shopping");
            echo "\">クーポンを変更する</a>
    ";
        } else {
            // line 410
            echo "        クーポンをお持ちの方はクーポンコードを入力してください。
        <p><a class=\"btn btn-default btn-sm\" id=\"coupon_button\" href=\"";
            // line 411
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_coupon_shopping");
            echo "\">クーポンを利用する</a>
    ";
        }
        // line 413
        echo "    </p>
</div>
<h2 class=\"heading02\">お問い合わせ欄</h2>
                    <div id=\"contact_message\" class=\"column\">
                        ";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("placeholder" => "お届け日のご希望やお問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)", "rows" => "6")));
        echo "
                        ";
        // line 418
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
                    </div>
                    <div class=\"extra-form column\">
                        ";
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 422
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 423
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 425
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "                    </div>
                </div><!-- /.col -->

                <div id=\"confirm_side\" class=\"col-sm-4\">
                    <div id=\"summary_box__total_box\" class=\"total_box\">
                        <dl id=\"summary_box__subtotal\">
                            <dt>小計</dt>
                            <dd class=\"text-primary\">";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl id=\"summary_box__quantity_price\">
                            <dt>手数料</dt>
                            <dd>";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "charge", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        <dl id=\"summary_box__shipping_price\">
                            <dt>送料</dt>
                            <dd>";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "deliveryFeeTotal", array())), "html", null, true);
        echo "</dd>
                        </dl>
                        ";
        // line 443
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array()) > 0)) {
            // line 444
            echo "                        <dl id=\"summary_box__discount_price\">
                            <dt>値引き</dt>
                            <dd>";
            // line 446
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter((0 - $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "discount", array()))), "html", null, true);
            echo "</dd>
                        </dl>
                        ";
        }
        // line 449
        echo "                        <div id=\"summary_box__result\" class=\"total_amount\">
                            <br/>
<dl id=\"summary_box__customer_point\">
    <dt>利用ポイント</dt>
    <dd class=\"text-primary\">0 pt</dd>
</dl>
<dl id=\"summary_box__customer_point\">
    <dt>加算ポイント</dt>
    <dd>25 pt</dd>
</dl>

<p id=\"summary_box__total_amount\" class=\"total_price\">合計 <strong class=\"text-primary\">";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "total", array())), "html", null, true);
        echo "<span class=\"small\">税込</span></strong></p>
                            <p id=\"summary_box__confirm_button\"><button id=\"order-button\" type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">注文する</button></p>
                        </div>
                    </div>
\t\t\t\t\t<div id=\"payment_choice_message\" style=\"margin:10px 0;text-align:center;color:#C00;font-weight:bold;\">お支払い方法を選択してください。</div>
                </div>
            </div><!-- /.row -->
        </form>
\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a1ada522c1671a4d861f586fb51cdd6b4ecff542359031e1510504657c4cb86f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1036 => 460,  1023 => 449,  1017 => 446,  1013 => 444,  1011 => 443,  1006 => 441,  999 => 437,  992 => 433,  983 => 426,  977 => 425,  971 => 423,  968 => 422,  964 => 421,  958 => 418,  954 => 417,  948 => 413,  943 => 411,  940 => 410,  935 => 408,  930 => 407,  928 => 406,  916 => 397,  910 => 394,  905 => 392,  884 => 373,  861 => 344,  857 => 343,  849 => 337,  844 => 335,  840 => 334,  836 => 333,  832 => 332,  828 => 331,  824 => 330,  820 => 329,  816 => 328,  812 => 327,  808 => 326,  804 => 325,  800 => 324,  791 => 318,  786 => 317,  784 => 316,  776 => 315,  764 => 314,  758 => 313,  751 => 309,  747 => 307,  726 => 302,  717 => 301,  714 => 300,  694 => 298,  676 => 297,  674 => 296,  670 => 294,  667 => 284,  659 => 282,  656 => 281,  648 => 279,  646 => 278,  642 => 277,  634 => 276,  630 => 275,  620 => 274,  616 => 273,  611 => 272,  594 => 271,  581 => 262,  574 => 260,  566 => 258,  564 => 257,  560 => 256,  557 => 255,  553 => 254,  546 => 249,  541 => 247,  538 => 246,  535 => 245,  521 => 244,  517 => 243,  514 => 242,  506 => 240,  498 => 238,  496 => 237,  492 => 236,  487 => 234,  482 => 232,  479 => 231,  464 => 226,  453 => 225,  450 => 224,  430 => 222,  412 => 221,  410 => 220,  406 => 218,  403 => 208,  395 => 206,  392 => 205,  384 => 203,  382 => 202,  376 => 201,  366 => 200,  360 => 199,  348 => 198,  342 => 197,  335 => 196,  331 => 195,  327 => 194,  323 => 193,  314 => 191,  304 => 190,  296 => 189,  288 => 188,  284 => 187,  280 => 186,  276 => 185,  270 => 183,  267 => 182,  250 => 181,  243 => 177,  239 => 176,  235 => 174,  225 => 170,  221 => 168,  217 => 167,  213 => 165,  207 => 161,  202 => 158,  200 => 157,  196 => 155,  192 => 153,  188 => 151,  186 => 150,  179 => 145,  176 => 144,  158 => 128,  128 => 101,  82 => 57,  80 => 56,  73 => 52,  64 => 46,  55 => 40,  46 => 34,  38 => 29,  32 => 25,  29 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__a1ada522c1671a4d861f586fb51cdd6b4ecff542359031e1510504657c4cb86f", "");
    }
}
