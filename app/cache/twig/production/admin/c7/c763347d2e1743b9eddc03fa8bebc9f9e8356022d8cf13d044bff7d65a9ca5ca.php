<?php

/* __string_template__bd1aa457f70a1156ae8d27258d8ce3591694fc2665048e8492be673fa4aaa8aa */
class __TwigTemplate_6e696d3928ffb1386b8f49c9e8359de1ff1888d440be1c88add1fd501a158df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__bd1aa457f70a1156ae8d27258d8ce3591694fc2665048e8492be673fa4aaa8aa", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            '__internal_fcb877d1f4b5fe3b8719face671e95f6efac5797ba2dbbf275e189c1fc677dd4' => array($this, 'block___internal_fcb877d1f4b5fe3b8719face671e95f6efac5797ba2dbbf275e189c1fc677dd4'),
            '__internal_7068f184caf51bf735e455d16a92dc40c8ab689cf04e3c6a610f9250cfb48052' => array($this, 'block___internal_7068f184caf51bf735e455d16a92dc40c8ab689cf04e3c6a610f9250cfb48052'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "order", 1 => "order_edit");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 30
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 31
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "受注管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "受注登録・編集";
    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        // line 34
        echo "<script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
<script>
\$(function() {
    \$('#zip-search').click(function() {
        AjaxZip3.zip2addr('order[zip][zip01]', 'order[zip][zip02]', 'order[address][pref]', 'order[address][addr01]');
    });

    // 注文者情報をコピー
    \$('.copyCustomerToShippingButton').on('click', function() {
        var data = \$(this).data();
        var idx = data.idx;
        \$('#order_Shippings_' + idx + '_name_name01').val(\$('#order_name_name01').val());
        \$('#order_Shippings_' + idx + '_name_name02').val(\$('#order_name_name02').val());
        \$('#order_Shippings_' + idx + '_kana_kana01').val(\$('#order_kana_kana01').val());
        \$('#order_Shippings_' + idx + '_kana_kana02').val(\$('#order_kana_kana02').val());
        \$('#order_Shippings_' + idx + '_zip_zip01').val(\$('#order_zip_zip01').val());
        \$('#order_Shippings_' + idx + '_zip_zip02').val(\$('#order_zip_zip02').val());
        \$('#order_Shippings_' + idx + '_address_pref').val(\$('#order_address_pref').val());
        \$('#order_Shippings_' + idx + '_address_addr01').val(\$('#order_address_addr01').val());
        \$('#order_Shippings_' + idx + '_address_addr02').val(\$('#order_address_addr02').val());
        \$('#order_Shippings_' + idx + '_email').val(\$('#order_email').val());
        \$('#order_Shippings_' + idx + '_tel_tel01').val(\$('#order_tel_tel01').val());
        \$('#order_Shippings_' + idx + '_tel_tel02').val(\$('#order_tel_tel02').val());
        \$('#order_Shippings_' + idx + '_tel_tel03').val(\$('#order_tel_tel03').val());
        \$('#order_Shippings_' + idx + '_fax_fax01').val(\$('#order_fax_fax01').val());
        \$('#order_Shippings_' + idx + '_fax_fax02').val(\$('#order_fax_fax02').val());
        \$('#order_Shippings_' + idx + '_fax_fax03').val(\$('#order_fax_fax03').val());
        \$('#order_Shippings_' + idx + '_company_name').val(\$('#order_company_name').val());
    });
    // 会員検索
    \$('#searchCustomerModalButton').on('click', function() {
        var list = \$('#searchCustomerModalList');
        list.children().remove();

        \$.ajax({
            type: 'POST',
            dataType: 'html',
            data: { 'search_word' : \$('#admin_search_customer_multi').val() },
            url: '";
        // line 72
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_order_search_customer_html");
        echo "',
            success: function(data) {
                // モーダルに結果を書き出し.
                \$('#searchCustomerModalList').html(data);
            },
            error: function() {
                alert('search customer failed.');
            }
        });
    });
    \$('#searchProductModal').on('show.bs.modal', function (event) {
        var button = \$(event.relatedTarget);
        var idx = button.data('idx');
        var modal = \$(this);
        modal.find('#searchProductModalButton').attr('data-idx', idx);
    });


    // 商品検索
    \$('#searchProductModalButton').on('click', function() {
        var list = \$('#searchProductModalList');
        list.children().remove();

        var data = \$(this).data();
        shipment_idx = data.idx;

        shipmentItem_idx = 0;
        for(i = 0; i < shipping_details_count.length; i++) { 
            if (shipping_details_count[i].idx == shipment_idx) {
                shipmentItem_idx = shipping_details_count[i].cnt;
            }
        }
        
        \$.ajax({
            type: 'POST',
            dataType: 'html',
            data: {
                'id' : \$('#admin_search_product_id').val(),
                'category_id' : \$('#admin_search_product_category_id').val()
            },
            url: '";
        // line 112
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_order_search_product");
        echo "',
            success: function(data) {
                // モーダルに結果を書き出し.
                \$('#searchProductModalList').html(data);
            },
            error: function() {
                alert('search product failed.');
            }
        });
    });

    // 受注明細行の行数カウンタ.
    // 受注登録・編集画面上でグローバルな変数.
    // search_product.twig/order_detail_prototype.twigで利用しています.
    ";
        // line 126
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()))) {
            // line 127
            echo "        ";
            $context["maxIndex"] = 0;
            // line 128
            echo "    ";
        } else {
            // line 129
            echo "        ";
            $context["maxIndex"] = (max(twig_get_array_keys_filter($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()))) + 1);
            // line 130
            echo "    ";
        }
        // line 131
        echo "    order_details_count = '";
        echo twig_escape_filter($this->env, (isset($context["maxIndex"]) ? $context["maxIndex"] : null), "html", null, true);
        echo "';
    
    var shipping_details_count = [];
    ";
        // line 134
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
            // line 135
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array()));
            foreach ($context['_seq'] as $context["shippingKey"] => $context["shippingForm"]) {
                // line 136
                echo "            ";
                if (twig_test_empty($this->getAttribute($context["shippingForm"], "ShipmentItems", array()))) {
                    // line 137
                    echo "                shipping_details_count.push({idx:";
                    echo twig_escape_filter($this->env, $context["shippingKey"], "html", null, true);
                    echo ", cnt:0});
            ";
                } else {
                    // line 139
                    echo "                shipping_details_count.push({idx:";
                    echo twig_escape_filter($this->env, $context["shippingKey"], "html", null, true);
                    echo ", cnt:";
                    echo twig_escape_filter($this->env, (max(twig_get_array_keys_filter($this->getAttribute($context["shippingForm"], "ShipmentItems", array()))) + 1), "html", null, true);
                    echo " });
            ";
                }
                // line 141
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['shippingKey'], $context['shippingForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
    \$(\"input\").on(\"keydown\", function(e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            return false;
        } else {
            return true;
        }
    });

    \$(\".delete-item\").on(\"click\", function(){
        \$(this).parents(\".item_box\").remove();

        onChangeOrderDetailCount(order_details_count);
    });
    
    \$(\".delete_delivery\").on(\"click\", function(){
       var data = \$(this).data();
       \$(\"#shipping_info_box--\" + data.idx ).remove();
       document.form1.modal.value = \"calc\";
       document.form1.submit();
    });
    
    \$(\".delete_shipping_product\").on(\"click\", function(){
       var data = \$(this).data();
       var idKey = \"order_Shippings_\"+ data.idx.replace(\"--\",\"_ShipmentItems_\") +\"_quantity\";
       \$(\"#\" + idKey ).val(0);
       document.form1.modal.value = \"calc\";
       document.form1.submit();
    });

    var onChangeOrderDetailCount = function(order_details_count) {
        if (order_details_count == 1) {
            \$(\".delete-item\").attr(\"disabled\", \"disabled\");
        } else {
            \$(\".delete-item\").removeAttr(\"disabled\");
        }
    };

    onChangeOrderDetailCount();


    // 配送業者選択時にお届け時間を設定
    var times = ";
        // line 186
        echo (isset($context["shippingDeliveryTimes"]) ? $context["shippingDeliveryTimes"] : null);
        echo ";

    \$('.shipping-delivery').change(function(){
        var data = \$(this).data();
        setShippingDeliveryTime(\$(this).val(), data.idx);
    });

    function setShippingDeliveryTime(val, idx){
        var \$shippingDeliveryTime = \$('.shipping-delivery-time[data-idx=\"' + idx + '\"]');
        \$shippingDeliveryTime.find('option').remove();
        \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));

        if (typeof(times[val]) !== 'undefined') {
            for (var key in times[val]){
                text = times[val][key];
                \$shippingDeliveryTime.append(\$('<option></option>')
                    .val(key)
                    .text(text));
            }
        }
    }

});
var setModeAndSubmit = function(mode, keyname, keyid) {
    document.form1.modal.value = mode;
    if(keyname !== undefined && keyname !== \"\" && keyid !== undefined && keyid !== \"\") {
        document.form1[keyname].value = keyid;
    }
    document.form1.submit();
};

</script>
";
    }

    // line 220
    public function block_main($context, array $blocks = array())
    {
        // line 221
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form name=\"form1\" method=\"post\" action=\"?\">
    <input type=\"hidden\" name=\"modal\" value=\"\">
    ";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        <div id=\"detail_wrap\" class=\"col-md-12\">
            <div class=\"col_inner\">
                <div id=\"number_info_box\" class=\"box no-header\">
                    <div id=\"number_info_box__body\" class=\"box-body\">
                        <div class=\"row\">
                            <div id=\"number_info_box__order_status\" class=\"col-sm-4\">
                                <h4>注文番号 <span class=\"number\">";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()), "html", null, true);
        echo "</span></h4>
                                <div class=\"form-group\">
                                    ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderStatus", array()), 'widget');
        echo "
                                    ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderStatus", array()), 'errors');
        echo "
                                </div>
                                <div id=\"number_info_box__order_status_info\" class=\"small text-danger\">キャンセルの場合は在庫数を手動で戻してください</div>
                            </div>
                            <div class=\"col-sm-6 col-sm-offset-2\">
                                <p id=\"number_info_box__order_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>受注日：";
        // line 239
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "order_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "order_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__payment_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>入金日：";
        // line 240
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__commit_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>発送日：";
        // line 241
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "commit_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "commit_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__update_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>更新日：";
        // line 242
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "update_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "update_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div id=\"customer_info_box\"  class=\"box accordion\">
                <div id=\"customer_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">注文者情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"customer_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"customer_info_list\" class=\"order_list form-horizontal\">
                        ";
        // line 254
        if (twig_test_empty($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()))) {
            // line 255
            echo "                        <div id=\"customer_info_list__button_search\" class=\"btn_area\">
                            <ul>
                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchCustomerModal\">会員検索</a></li>
                            </ul>
                        </div>
                        ";
        }
        // line 261
        echo "                        <div id=\"customer_info_list__customer\" class=\"form-group\">
                            <div class=\"col-sm-3 col-lg-2\">会員ID</div>
                            <div class=\"col-sm-9 col-lg-10\">
                                <p id=\"order_CustomerId\">";
        // line 264
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), "vars", array()), "value", array()))) ? ("非会員") : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), "vars", array()), "value", array()))), "html", null, true);
        echo "</p>
                                ";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), 'widget');
        echo "
                                ";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), 'errors');
        echo "
                            </div>

                        </div>
                        <div id=\"customer_info_list__name\" class=\"form-group\">
                            ";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
        echo "
                                ";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
        echo "
                                ";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'errors');
        echo "
                                ";
        // line 276
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div id=\"customer_info_list__kana\" class=\"form-group\">
                            ";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
        echo "
                                ";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
        echo "
                                ";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'errors');
        echo "
                                ";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 289
        echo "                        <div id=\"customer_info_list__address\" class=\"form-group\">
                            ";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "
                            <div id=\"customer_info_list__zip\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                〒";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'widget');
        echo "
                                ";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'errors');
        echo "
                                ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'errors');
        echo "
                                <span><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></span>
                            </div>
                        </div>
                        ";
        // line 299
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__pref\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                ";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'widget');
        echo "
                                ";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 306
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr01\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
        echo "
                                ";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 313
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr02\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 315
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
        echo "
                                ";
        // line 316
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 320
        echo "                        <div id=\"customer_info_list__email\" class=\"form-group\">
                            ";
        // line 321
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 328
        echo "                        <div id=\"customer_info_list__tel\" class=\"form-group\">
                            ";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'widget');
        echo "
                                ";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'errors');
        echo "
                                ";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'errors');
        echo "
                                ";
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 338
        echo "                        <div id=\"customer_info_list__fax\" class=\"form-group\">
                            ";
        // line 339
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax03", array()), 'widget');
        echo "
                                ";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 346
        echo "                        <div id=\"customer_info_list__company_name\" class=\"form-group\">
                            ";
        // line 347
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 349
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget');
        echo "
                                ";
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 354
        echo "                        <div id=\"customer_info_list__message\" class=\"form-group\">
                            ";
        // line 355
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 357
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("placeholder" => "3000文字まで入力可能")));
        echo "
                                ";
        // line 358
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
                            </div>
                        </div>
\t\t\t\t\t\t
\t\t\t\t\t\t<h4>無料ギフトラッピング：";
        // line 362
        if (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "wrapping", array()) == 1)) {
            echo "希望する";
        } else {
            echo "×";
        }
        echo "</h4>
\t\t\t\t\t\t
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div id=\"product_info_box\" class=\"box accordion\">
                <div id=\"product_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">受注商品情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"product_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"product_info_list\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"product_info_list__search_menu\">
                                ";
        // line 376
        if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array()) != 1)) {
            // line 377
            echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\">商品の追加</a></li>
                                ";
        }
        // line 379
        echo "                                <li><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"calc\">計算結果の更新</button></li>
                            </ul>
                        </div>
                        <div class=\"tableish\"
                             id=\"order_detail_list\"
                             data-prototype=\"
                                ";
        // line 385
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_fcb877d1f4b5fe3b8719face671e95f6efac5797ba2dbbf275e189c1fc677dd4", $context, $blocks));
        // line 387
        echo "\">

                            ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()));
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
        foreach ($context['_seq'] as $context["detail_idx"] => $context["orderDetailForm"]) {
            // line 390
            echo "                                <div id=\"product_info_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_box\">
                                    ";
            // line 391
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "Product", array()), 'widget');
            echo "
                                    ";
            // line 392
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "ProductClass", array()), 'widget');
            echo "
                                    ";
            // line 393
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "product_name", array()), 'widget');
            echo "
                                    ";
            // line 394
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "product_code", array()), 'widget');
            echo "
                                    ";
            // line 395
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_name1", array()), 'widget');
            echo "
                                    ";
            // line 396
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_name2", array()), 'widget');
            echo "
                                    ";
            // line 397
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_category_name1", array()), 'widget');
            echo "
                                    ";
            // line 398
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_category_name2", array()), 'widget');
            echo "
                                    ";
            // line 399
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rule", array()), 'widget');
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "serial", array()), 'widget');
            echo "
                                    <div id=\"product_info_list__item_detail--";
            // line 400
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <div id=\"product_info_list__detail_name--";
            // line 401
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name_area\">
                                            <strong id=\"product_info_list__product_name--";
            // line 402
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
            echo "</strong><br>
                                            <span id=\"product_info_list__product_code--";
            // line 403
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_id small\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
            echo "</span>
                                            <span id=\"product_info_list__class_category_name--";
            // line 404
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                                ";
            // line 405
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                // line 406
                echo "                                                / (
                                                    ";
                // line 407
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                echo "：
                                                    ";
                // line 408
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                echo "
                                                    ";
                // line 409
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                    // line 410
                    echo "                                                        /
                                                        ";
                    // line 411
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                    echo "：
                                                        ";
                    // line 412
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 414
                echo "                                                    )
                                                ";
            }
            // line 416
            echo "                                            ";
            // line 425
            echo "
    ";
            // line 426
            if ($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), $context["detail_idx"], array(), "array", true, true)) {
                // line 427
                echo "        <br />        
        ";
                // line 428
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), $context["detail_idx"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 429
                    echo "            ";
                    echo nl2br(twig_escape_filter($this->env, $context["label"], "html", null, true));
                    echo "<br />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 431
                echo "    ";
            }
            // line 432
            echo "</span>
                                        </div>
                                        <div class=\"row\">
                                            <div id=\"product_info_list__price--";
            // line 435
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span class=\"input-group item_price col-xs-8 col-sm-6 col-md-12\">
                                                    ";
            // line 437
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'widget');
            echo "
                                                    ";
            // line 438
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__quantity--";
            // line 442
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_quantity\">
                                                    ";
            // line 443
            $context["detail_id"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "id", array());
            // line 444
            echo "                                                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "OrderDetails", array(), "any", false, true), (isset($context["detail_id"]) ? $context["detail_id"] : null), array(), "array", true, true)) {
                // line 445
                echo "                                                        ";
                $context["prev_quantity"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "OrderDetails", array()), (isset($context["detail_id"]) ? $context["detail_id"] : null), array(), "array"), "quantity", array()) . " ");
                // line 446
                echo "                                                    ";
            } else {
                // line 447
                echo "                                                        ";
                $context["prev_quantity"] = "";
                // line 448
                echo "                                                    ";
            }
            // line 449
            echo "                                                    ";
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 450
                echo "                                                        数量：";
                echo twig_escape_filter($this->env, (isset($context["prev_quantity"]) ? $context["prev_quantity"] : null), "html", null, true);
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget', array("read_only" => "readonly"));
                echo "
                                                    ";
            } else {
                // line 452
                echo "                                                        数量：";
                echo twig_escape_filter($this->env, (isset($context["prev_quantity"]) ? $context["prev_quantity"] : null), "html", null, true);
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget');
                echo "
                                                    ";
            }
            // line 454
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__tax_rate--";
            // line 458
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_tax\">
                                                    税率：
                                                    <span class=\"input-group\">
                                                    ";
            // line 461
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'widget');
            echo "
                                                    ";
            // line 462
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'errors');
            echo "
                                                    <span class=\"input-group-addon\">%</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div id=\"product_info_list__total_price--";
            // line 467
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-lg-3 item_subtotal text-right\">
                                                <span>小計：</span> ";
            // line 468
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "total_price", array())), "html", null, true);
            echo "
                                            </div>
                                        </div>

                                    </div>
                                    ";
            // line 473
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 474
                echo "                                    ";
            } else {
                // line 475
                echo "                                    <div id=\"product_info_list__button_multiple_shipping_delete--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"icon_edit\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm delete-item\">削除</button>
                                    </div>
                                    ";
            }
            // line 479
            echo "                                </div><!-- /.item_box -->
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
        unset($context['_seq'], $context['_iterated'], $context['detail_idx'], $context['orderDetailForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 481
        echo "                        </div>

                        <div id=\"product_info_result_box__sub_price\" class=\"row with-border2 no-margin text-right\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <dl id=\"product_info_result_box__body_sub_price\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__subtotal\">小計：</dt>
                                    <dd>";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__discount\">値引き：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 490
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discount", array()), 'widget');
        echo "
                                        ";
        // line 491
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discount", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__delivery_fee_total\">送料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 495
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_fee_total", array()), 'widget');
        echo "
                                        ";
        // line 496
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_fee_total", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__charge\">手数料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 500
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "charge", array()), 'widget');
        echo "
                                        ";
        // line 501
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "charge", array()), 'errors');
        echo "
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div id=\"product_info_result_box__summary\" class=\"row with-border2 no-margin text-right  ta\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <dl id=\"product_info_result_box__body_summary\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__total\">合計：</dt>
                                    <dd>";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "total", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__payment_total\">お支払合計：</dt>
                                    <dd>";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 522
        echo "            <div id=\"payment_info_box\" class=\"box accordion\">
                <div id=\"payment_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お支払情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"payment_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <dl id=\"payment_info_box__payment_method\" class=\"dl-horizontal\">
                        <dt>お支払方法</dt>
                        <dd class=\"form-group form-inline\">
                            ";
        // line 530
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "payment_method", array()), "html", null, true);
        echo "<br/>
                            ";
        // line 531
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Payment", array()), 'widget');
        echo "
                            ";
        // line 532
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Payment", array()), 'errors');
        echo "
                            <p class=\"small\">お支払方法の変更に伴う手数料の変更は手動にてお願いします。</p>
                        </dd>
                    </dl>
                </div>
            </div>

            ";
        // line 540
        echo "            ";
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
            // line 541
            echo "            <div id=\"shipping_info__button_new\"><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"add_delivery\">お届け先を新規追加</button></div>
            ";
        }
        // line 543
        echo "            ";
        $context["shipmentitem_idx"] =  -1;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array()));
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
        foreach ($context['_seq'] as $context["shipping_idx"] => $context["shippingForm"]) {
            // line 544
            echo "            ";
            $context["shippingIndex"] = $this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "name", array());
            // line 545
            echo "            <div id=\"shipping_info_box--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"box accordion\">
                <div id=\"shipping_info_box__toggle--";
            // line 546
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お届け先情報";
            // line 547
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array())) > 1)) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                    <div id=\"shipping_info_box__body--";
            // line 549
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"shipping_info_list--";
            // line 550
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"shipping_info_list__menu--";
            // line 552
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\">
                                <li><a class=\"btn btn-default copyCustomerToShippingButton\" data-idx=\"";
            // line 553
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\">注文者情報をコピー</a></li>
                                ";
            // line 554
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 555
                echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\" data-idx=\"";
                echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                echo "\">商品の追加</a></li>
                                ";
                // line 556
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array())) > 1)) {
                    // line 557
                    echo "                                    <li><button type=\"button\" class=\"btn btn-default delete_delivery\" data-idx=\"";
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\">お届け先情報を削除</button></li>
                                ";
                }
                // line 559
                echo "                                ";
            }
            // line 560
            echo "                            </ul>
                        </div>

                        ";
            // line 563
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 564
                echo "                        <div class=\"tableish\"
                             id=\"shipment_item_list";
                // line 565
                echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                echo "\"
                             data-prototype=\"
                             ";
                // line 567
                echo twig_escape_filter($this->env,                 $this->renderBlock("__internal_7068f184caf51bf735e455d16a92dc40c8ab689cf04e3c6a610f9250cfb48052", $context, $blocks));
                // line 569
                echo "\">

                        ";
                // line 571
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shippingForm"], "ShipmentItems", array()));
                foreach ($context['_seq'] as $context["shippingItemkey"] => $context["shipmentItemForm"]) {
                    // line 572
                    echo "                            <div id=\"shipment_item__id--";
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_box shipment_item_idx";
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\">
                                ";
                    // line 573
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "Product", array()), 'widget');
                    echo "
                                ";
                    // line 574
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "ProductClass", array()), 'widget');
                    echo "
                                ";
                    // line 575
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "Product", array()), 'widget');
                    echo "
                                ";
                    // line 576
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "ProductClass", array()), 'widget');
                    echo "
                                ";
                    // line 577
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "product_name", array()), 'widget');
                    echo "
                                ";
                    // line 578
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "product_code", array()), 'widget');
                    echo "
                                ";
                    // line 579
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_name1", array()), 'widget');
                    echo "
                                ";
                    // line 580
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_name2", array()), 'widget');
                    echo "
                                ";
                    // line 581
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_category_name1", array()), 'widget');
                    echo "
                                ";
                    // line 582
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "serial", array()), 'widget');
                    echo "
                                <div id=\"shipment_item__detail--";
                    // line 583
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_detail\">
                                    <div id=\"shipment_item__name_detail--";
                    // line 584
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_name_area\">
                                        <strong id=\"shipment_item__product_name--";
                    // line 585
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
                    echo "</strong><br>
                                        <span id=\"shipment_item__product_code--";
                    // line 586
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_id small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
                    echo "</span>
                                            <span id=\"shipment_item__class_category_name--";
                    // line 587
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_pattern small\">
                                                ";
                    // line 588
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                        // line 589
                        echo "                                                    / (
                                                    ";
                        // line 590
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                        echo "：
                                                    ";
                        // line 591
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                        echo "
                                                    ";
                        // line 592
                        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                            // line 593
                            echo "                                                        /
                                                        ";
                            // line 594
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                            echo "：
                                                        ";
                            // line 595
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 597
                        echo "                                                    )
                                                ";
                    }
                    // line 599
                    echo "                                            ";
                    // line 608
                    echo "
<dd>
    ";
                    // line 610
                    if ($this->getAttribute($this->getAttribute((isset($context["plgShipmentItems"]) ? $context["plgShipmentItems"] : null), $context["shipping_idx"], array(), "array", false, true), $context["shippingItemkey"], array(), "array", true, true)) {
                        // line 611
                        echo "        <br />
        ";
                        // line 612
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["plgShipmentItems"]) ? $context["plgShipmentItems"] : null), $context["shipping_idx"], array(), "array"), $context["shippingItemkey"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                            // line 613
                            echo "            ";
                            echo nl2br(twig_escape_filter($this->env, $context["label"], "html", null, true));
                            echo "<br />
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 615
                        echo "    ";
                    }
                    // line 616
                    echo "</dd></span>
                                    </div>
                                    <div id=\"shipment_item__info_item--";
                    // line 618
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"row\">
                                        <div id=\"shipment_item__price--";
                    // line 619
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            ";
                    // line 620
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "price", array()), 'widget', array("read_only" => "readonly"));
                    echo "
                                        </div>
                                        <div id=\"shipment_item__quantity--";
                    // line 622
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            <span class=\"item_quantity\">
                                                ";
                    // line 624
                    $context["item_id"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "id", array());
                    // line 625
                    echo "                                                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array(), "any", false, true), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array", false, true), "ShipmentItems", array(), "any", false, true), (isset($context["item_id"]) ? $context["item_id"] : null), array(), "array", true, true)) {
                        // line 626
                        echo "                                                    ";
                        $context["prev_quantity"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array()), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array"), "ShipmentItems", array()), (isset($context["item_id"]) ? $context["item_id"] : null), array(), "array"), "quantity", array()) . " ");
                        // line 627
                        echo "                                                ";
                    } else {
                        // line 628
                        echo "                                                    ";
                        $context["prev_quantity"] = "";
                        // line 629
                        echo "                                                ";
                    }
                    // line 630
                    echo "                                                数量：";
                    echo twig_escape_filter($this->env, (isset($context["prev_quantity"]) ? $context["prev_quantity"] : null), "html", null, true);
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'widget', array("attr" => array("class" => "shipment_quantity")));
                    echo "
                                                ";
                    // line 631
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'errors');
                    echo "
                                            </span>
                                        </div>
                                            <div id=\"shipment_item__delete--";
                    // line 634
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <button type=\"button\" class=\"btn btn-default delete_shipping_product\" data-idx=\"";
                    // line 635
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\">削除</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.item_box -->
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['shippingItemkey'], $context['shipmentItemForm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 641
                echo "                            </div>
                        ";
            }
            // line 643
            echo "
                        <hr>
                        <div id=\"shipment_item_detail--";
            // line 645
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-horizontal\">
                            <div id=\"shipment_item_detail__name--";
            // line 646
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 647
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 649
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
            echo "
                                    ";
            // line 650
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
            echo "
                                    ";
            // line 651
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'errors');
            echo "
                                    ";
            // line 652
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__kana--";
            // line 655
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 656
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "kana", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 658
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
            echo "
                                    ";
            // line 659
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
            echo "
                                    ";
            // line 660
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'errors');
            echo "
                                    ";
            // line 661
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__company_name--";
            // line 664
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 665
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 667
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'widget');
            echo "
                                    ";
            // line 668
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 672
            echo "                            <div id=\"shipment_item_detail__address--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 673
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "address", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__zip--";
            // line 674
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                    〒";
            // line 675
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'widget');
            echo "
                                    ";
            // line 676
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'errors');
            echo "
                                    ";
            // line 677
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 681
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__pref--";
            // line 682
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                    ";
            // line 683
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'widget');
            echo "
                                    ";
            // line 684
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 688
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr01--";
            // line 689
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 690
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
            echo "
                                    ";
            // line 691
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 695
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr02--";
            // line 696
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 697
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
            echo "
                                    ";
            // line 698
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 702
            echo "                            <div id=\"shipment_item_detail__tel--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 703
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "tel", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 705
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'widget');
            echo "
                                    ";
            // line 706
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'errors');
            echo "
                                    ";
            // line 707
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'errors');
            echo "
                                    ";
            // line 708
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 712
            echo "                            <div id=\"shipment_item_detail__fax--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 713
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 715
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax03", array()), 'widget');
            echo "
                                    ";
            // line 716
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 720
            echo "                            <div id=\"shipment_item_detail__delivery--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 721
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__delivery_name--";
            // line 722
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 723
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()))) {
                // line 724
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()), "html", null, true);
                echo "<br/>
                                    ";
            }
            // line 726
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery", "data-idx" => (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null))));
            echo "
                                    ";
            // line 727
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 731
            echo "                            <div id=\"shipment_item_detail__delivery_time--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 732
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 734
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()))) {
                // line 735
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()), "html", null, true);
                echo "<br/>
                                    ";
            } else {
                // line 737
                echo "                                        指定なし
                                    ";
            }
            // line 739
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery-time", "data-idx" => (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null))));
            echo "
                                    ";
            // line 740
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 744
            echo "                            <div id=\"shipment_item_detail__shipping_delivery_date--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 745
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 747
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array(), "any", false, true), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array", false, true), "shipping_delivery_date", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array()), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array"), "shipping_delivery_date", array())))) {
                // line 748
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array()), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array"), "shipping_delivery_date", array()), "Y-m-d"), "html", null, true);
                echo "<br/>
                                    ";
            } else {
                // line 750
                echo "                                        指定なし
                                    ";
            }
            // line 752
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'widget');
            echo "
                                    ";
            // line 753
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div class=\"extra-form\">
                                ";
            // line 757
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 758
                echo "                                    ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 759
                    echo "                                        ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                }
                // line 761
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 762
            echo "                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
           </div>
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
        unset($context['_seq'], $context['_iterated'], $context['shipping_idx'], $context['shippingForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 768
        echo "
            <div id=\"shop_info_box\" class=\"box\">
                <div id=\"shop_info_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">ショップ用メモ欄</h3>
                </div><!-- /.box-header -->
                <div id=\"shop_info_box__note\" class=\"box-body\">";
        // line 773
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "note", array()), 'widget');
        echo "</div>
            </div><!-- /.box -->

            <div id=\"detail__insert_button\" class=\"row btn_area\">
                <p class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" name=\"mode\" value=\"register\">受注情報を登録</button>
                </p>
                <!-- /.col -->
            </div>

            <div id=\"detail__back_button\" class=\"row hidden-xs hidden-sm\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    ";
        // line 785
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 786
            echo "                        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_order_page", array("page_no" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.order.search.page_no"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.order.search.page_no"), "method"), "1")) : ("1")))), "html", null, true);
            echo "?resume=1\">戻る</a></p>
                    ";
        }
        // line 788
        echo "                </div>
            </div>

        </div><!-- /.col -->

    </form>
</div>
";
    }

    // line 385
    public function block___internal_fcb877d1f4b5fe3b8719face671e95f6efac5797ba2dbbf275e189c1fc677dd4($context, array $blocks = array())
    {
        // line 386
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/order_detail_prototype.twig", array("orderDetailForm" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()), "vars", array()), "prototype", array())));
        echo "<div style=\"display:none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()), "vars", array()), "prototype", array()), "serial", array()), 'widget');
        echo "</div>
                                ";
    }

    // line 567
    public function block___internal_7068f184caf51bf735e455d16a92dc40c8ab689cf04e3c6a610f9250cfb48052($context, array $blocks = array())
    {
        // line 568
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/shipment_item_prototype.twig", array("shipmentItemForm" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["shippingForm"]) ? $context["shippingForm"] : null), "ShipmentItems", array()), "vars", array()), "prototype", array())));
        echo "<div style=\"display:none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["shippingForm"]) ? $context["shippingForm"] : null), "ShipmentItems", array()), "vars", array()), "prototype", array()), "serial", array()), 'widget');
        echo "</div>
                             ";
    }

    // line 797
    public function block_modal($context, array $blocks = array())
    {
        // line 798
        echo "
";
        // line 800
        echo "<div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"search_customer_modal_box\" class=\"modal-content\">
            <div id=\"search_customer_modal_box__header\" class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">会員検索</h4>
            </div>
            <div id=\"search_customer_modal_box__body\" class=\"modal-body\">
                <div class=\"form-group\">
                    ";
        // line 809
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), "multi", array()), 'widget', array("attr" => array("placeholder" => "会員ID・メールアドレス・お名前")));
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 813
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 814
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 815
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 816
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 818
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 819
        echo "                </div>
                <div id=\"search_customer_modal_box__button_search\" class=\"form-group\">
                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-primary\" >検索</button>
                </div>
                <div class=\"form-group\" id=\"searchCustomerModalList\">
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 831
        echo "<div class=\"modal fade\" id=\"searchProductModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"search_product_modal_box\" class=\"modal-content\">
            <div id=\"search_product_modal_box__header\" class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">商品検索</h4>
            </div>
            <div id=\"search_product_modal_box__body\" class=\"modal-body\">
                <div id=\"search_product_modal_box__id\" class=\"form-group\">
                    ";
        // line 840
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード")));
        echo "
                </div>
                <div id=\"search_product_modal_box__category_id\" class=\"form-group\">
                    ";
        // line 843
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "category_id", array()), 'widget');
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 846
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 847
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 848
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 849
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 850
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 852
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 853
        echo "                </div>
                <div id=\"search_product_modal_box__button_search\" class=\"form-group\">
                    <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-primary\">検索</button>
                </div>
                <div class=\"form-group\" id=\"searchProductModalList\">
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__bd1aa457f70a1156ae8d27258d8ce3591694fc2665048e8492be673fa4aaa8aa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1872 => 853,  1866 => 852,  1861 => 850,  1857 => 849,  1852 => 848,  1849 => 847,  1845 => 846,  1839 => 843,  1833 => 840,  1822 => 831,  1809 => 819,  1803 => 818,  1798 => 816,  1794 => 815,  1789 => 814,  1786 => 813,  1782 => 812,  1776 => 809,  1765 => 800,  1762 => 798,  1759 => 797,  1750 => 568,  1747 => 567,  1738 => 386,  1735 => 385,  1724 => 788,  1718 => 786,  1716 => 785,  1701 => 773,  1694 => 768,  1675 => 762,  1669 => 761,  1663 => 759,  1660 => 758,  1656 => 757,  1649 => 753,  1644 => 752,  1640 => 750,  1634 => 748,  1632 => 747,  1627 => 745,  1622 => 744,  1616 => 740,  1611 => 739,  1607 => 737,  1601 => 735,  1599 => 734,  1594 => 732,  1589 => 731,  1583 => 727,  1578 => 726,  1572 => 724,  1570 => 723,  1566 => 722,  1562 => 721,  1557 => 720,  1551 => 716,  1543 => 715,  1538 => 713,  1533 => 712,  1527 => 708,  1523 => 707,  1519 => 706,  1511 => 705,  1506 => 703,  1501 => 702,  1495 => 698,  1491 => 697,  1487 => 696,  1484 => 695,  1478 => 691,  1474 => 690,  1470 => 689,  1467 => 688,  1461 => 684,  1457 => 683,  1453 => 682,  1450 => 681,  1444 => 677,  1440 => 676,  1434 => 675,  1430 => 674,  1426 => 673,  1421 => 672,  1415 => 668,  1411 => 667,  1406 => 665,  1402 => 664,  1396 => 661,  1392 => 660,  1388 => 659,  1384 => 658,  1379 => 656,  1375 => 655,  1369 => 652,  1365 => 651,  1361 => 650,  1357 => 649,  1352 => 647,  1348 => 646,  1344 => 645,  1340 => 643,  1336 => 641,  1322 => 635,  1316 => 634,  1310 => 631,  1304 => 630,  1301 => 629,  1298 => 628,  1295 => 627,  1292 => 626,  1289 => 625,  1287 => 624,  1280 => 622,  1275 => 620,  1269 => 619,  1263 => 618,  1259 => 616,  1256 => 615,  1247 => 613,  1243 => 612,  1240 => 611,  1238 => 610,  1234 => 608,  1232 => 599,  1228 => 597,  1223 => 595,  1219 => 594,  1216 => 593,  1214 => 592,  1210 => 591,  1206 => 590,  1203 => 589,  1201 => 588,  1195 => 587,  1187 => 586,  1179 => 585,  1173 => 584,  1167 => 583,  1163 => 582,  1159 => 581,  1155 => 580,  1151 => 579,  1147 => 578,  1143 => 577,  1139 => 576,  1135 => 575,  1131 => 574,  1127 => 573,  1118 => 572,  1114 => 571,  1110 => 569,  1108 => 567,  1103 => 565,  1100 => 564,  1098 => 563,  1093 => 560,  1090 => 559,  1084 => 557,  1082 => 556,  1077 => 555,  1075 => 554,  1071 => 553,  1067 => 552,  1062 => 550,  1058 => 549,  1049 => 547,  1045 => 546,  1040 => 545,  1037 => 544,  1018 => 543,  1014 => 541,  1011 => 540,  1001 => 532,  997 => 531,  993 => 530,  983 => 522,  972 => 513,  967 => 511,  954 => 501,  950 => 500,  943 => 496,  939 => 495,  932 => 491,  928 => 490,  922 => 487,  914 => 481,  899 => 479,  891 => 475,  888 => 474,  886 => 473,  878 => 468,  874 => 467,  866 => 462,  862 => 461,  856 => 458,  848 => 454,  841 => 452,  834 => 450,  831 => 449,  828 => 448,  825 => 447,  822 => 446,  819 => 445,  816 => 444,  814 => 443,  810 => 442,  803 => 438,  799 => 437,  794 => 435,  789 => 432,  786 => 431,  777 => 429,  773 => 428,  770 => 427,  768 => 426,  765 => 425,  763 => 416,  759 => 414,  754 => 412,  750 => 411,  747 => 410,  745 => 409,  741 => 408,  737 => 407,  734 => 406,  732 => 405,  728 => 404,  722 => 403,  716 => 402,  712 => 401,  708 => 400,  703 => 399,  699 => 398,  695 => 397,  691 => 396,  687 => 395,  683 => 394,  679 => 393,  675 => 392,  671 => 391,  666 => 390,  649 => 389,  645 => 387,  643 => 385,  635 => 379,  631 => 377,  629 => 376,  608 => 362,  601 => 358,  597 => 357,  592 => 355,  589 => 354,  583 => 350,  579 => 349,  574 => 347,  571 => 346,  565 => 342,  557 => 341,  552 => 339,  549 => 338,  543 => 334,  539 => 333,  535 => 332,  527 => 331,  522 => 329,  519 => 328,  513 => 324,  509 => 323,  504 => 321,  501 => 320,  495 => 316,  491 => 315,  487 => 313,  481 => 309,  477 => 308,  473 => 306,  467 => 302,  463 => 301,  459 => 299,  452 => 294,  448 => 293,  442 => 292,  437 => 290,  434 => 289,  428 => 285,  424 => 284,  420 => 283,  416 => 282,  411 => 280,  404 => 276,  400 => 275,  396 => 274,  392 => 273,  387 => 271,  379 => 266,  375 => 265,  371 => 264,  366 => 261,  358 => 255,  356 => 254,  341 => 242,  337 => 241,  333 => 240,  329 => 239,  321 => 234,  317 => 233,  312 => 231,  302 => 224,  297 => 221,  294 => 220,  257 => 186,  212 => 143,  209 => 142,  203 => 141,  195 => 139,  189 => 137,  186 => 136,  181 => 135,  179 => 134,  172 => 131,  169 => 130,  166 => 129,  163 => 128,  160 => 127,  158 => 126,  141 => 112,  98 => 72,  58 => 34,  55 => 33,  49 => 27,  43 => 26,  39 => 22,  37 => 31,  35 => 30,  33 => 29,  31 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__bd1aa457f70a1156ae8d27258d8ce3591694fc2665048e8492be673fa4aaa8aa", "");
    }
}
