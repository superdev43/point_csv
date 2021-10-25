<?php

/* __string_template__6cf6498d48ecede572f93cd1caa4cdb3f3ba9210d64ee12ae78e3dc7ddf16f69 */
class __TwigTemplate_43ea2d709290aadb72f7f4b21bfdfed4beef9749180e317434c5ad689123516d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__6cf6498d48ecede572f93cd1caa4cdb3f3ba9210d64ee12ae78e3dc7ddf16f69", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            '__internal_0a38583f1b13dca734c59525f83c0e3d72d706dffd3080f5d728bb67a8cfa7b0' => array($this, 'block___internal_0a38583f1b13dca734c59525f83c0e3d72d706dffd3080f5d728bb67a8cfa7b0'),
            '__internal_9b64b47a0a57b58a5f3a4c568b3610cff898c7e9831be0d338ee4a236cca60d8' => array($this, 'block___internal_9b64b47a0a57b58a5f3a4c568b3610cff898c7e9831be0d338ee4a236cca60d8'),
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
                                <div id=\"number_info_box__order_status_info\" class=\"small text-danger\">キャンセルの場合は在庫数を手動で戻してください</div><div id=\"number_info_box__order_point_info\" class=\"small text-danger\">キャンセルの場合はポイントを手動で戻してください</div>

                            </div>
                            <div class=\"col-sm-6 col-sm-offset-2\">
                                <p id=\"number_info_box__order_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>受注日：";
        // line 240
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "order_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "order_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__payment_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>入金日：";
        // line 241
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__commit_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>発送日：";
        // line 242
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "commit_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "commit_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__update_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>更新日：";
        // line 243
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
        // line 255
        if (twig_test_empty($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "id", array()))) {
            // line 256
            echo "                        <div id=\"customer_info_list__button_search\" class=\"btn_area\">
                            <ul>
                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchCustomerModal\">会員検索</a></li>
                            </ul>
                        </div>
                        ";
        }
        // line 262
        echo "                        <div id=\"customer_info_list__customer\" class=\"form-group\">
                            <div class=\"col-sm-3 col-lg-2\">会員ID</div>
                            <div class=\"col-sm-9 col-lg-10\">
                                <p id=\"order_CustomerId\">";
        // line 265
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), "vars", array()), "value", array()))) ? ("非会員") : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), "vars", array()), "value", array()))), "html", null, true);
        echo "</p>
                                ";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), 'widget');
        echo "
                                ";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Customer", array()), 'errors');
        echo "
                            </div>

                        </div>
                        <div id=\"customer_info_list__name\" class=\"form-group\">
                            ";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
        echo "
                                ";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
        echo "
                                ";
        // line 276
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name01", array()), 'errors');
        echo "
                                ";
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), "name02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div id=\"customer_info_list__kana\" class=\"form-group\">
                            ";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
        echo "
                                ";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
        echo "
                                ";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana01", array()), 'errors');
        echo "
                                ";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "kana", array()), "kana02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 290
        echo "                        <div id=\"customer_info_list__address\" class=\"form-group\">
                            ";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'label');
        echo "
                            <div id=\"customer_info_list__zip\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                〒";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'widget');
        echo "
                                ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip01", array()), 'errors');
        echo "
                                ";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), "zip02", array()), 'errors');
        echo "
                                <span><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></span>
                            </div>
                        </div>
                        ";
        // line 300
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__pref\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                ";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'widget');
        echo "
                                ";
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "pref", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 307
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr01\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
        echo "
                                ";
        // line 310
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr01", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 314
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr02\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 316
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
        echo "
                                ";
        // line 317
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "addr02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 321
        echo "                        <div id=\"customer_info_list__email\" class=\"form-group\">
                            ";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                ";
        // line 325
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 329
        echo "                        <div id=\"customer_info_list__tel\" class=\"form-group\">
                            ";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'widget');
        echo "
                                ";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel01", array()), 'errors');
        echo "
                                ";
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel02", array()), 'errors');
        echo "
                                ";
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tel", array()), "tel03", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 339
        echo "                        <div id=\"customer_info_list__fax\" class=\"form-group\">
                            ";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), "fax03", array()), 'widget');
        echo "
                                ";
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fax", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 347
        echo "                        <div id=\"customer_info_list__company_name\" class=\"form-group\">
                            ";
        // line 348
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'widget');
        echo "
                                ";
        // line 351
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company_name", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 355
        echo "                        <div id=\"customer_info_list__message\" class=\"form-group\">
                            ";
        // line 356
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 358
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("placeholder" => "3000文字まで入力可能")));
        echo "
                                ";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
                            </div>
                        </div>
\t\t\t\t\t\t
\t\t\t\t\t\t<h4>無料ギフトラッピング：";
        // line 363
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

            <div id=\"point_info_box\"  class=\"box\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">ポイント情報</h3>
    </div><!-- /.box-header -->
    <div class=\"box-body\">
        <div  class=\"form-group\">
            <div class=\"col-sm-3 col-lg-2\">保有ポイント</div>
            <div class=\"col-sm-9 col-lg-10\">
                <p>";
        // line 377
        echo twig_escape_filter($this->env, (isset($context["currentPoint"]) ? $context["currentPoint"] : null), "html", null, true);
        echo " Pt</p>
            </div>
        </div>
    </div><!-- /.box-body -->
</div><!-- /.box --><div id=\"product_info_box\" class=\"box accordion\">
                <div id=\"product_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">受注商品情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"product_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"product_info_list\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"product_info_list__search_menu\">
                                ";
        // line 389
        if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array()) != 1)) {
            // line 390
            echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\">商品の追加</a></li>
                                ";
        }
        // line 392
        echo "                                <li><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"calc\">計算結果の更新</button></li>
                            </ul>
                        </div>
                        <div class=\"tableish\"
                             id=\"order_detail_list\"
                             data-prototype=\"
                                ";
        // line 398
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_0a38583f1b13dca734c59525f83c0e3d72d706dffd3080f5d728bb67a8cfa7b0", $context, $blocks));
        // line 400
        echo "\">

                            ";
        // line 402
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
            // line 403
            echo "                                <div id=\"product_info_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_box\">
                                    ";
            // line 404
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "Product", array()), 'widget');
            echo "
                                    ";
            // line 405
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "ProductClass", array()), 'widget');
            echo "
                                    ";
            // line 406
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "product_name", array()), 'widget');
            echo "
                                    ";
            // line 407
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "product_code", array()), 'widget');
            echo "
                                    ";
            // line 408
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_name1", array()), 'widget');
            echo "
                                    ";
            // line 409
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_name2", array()), 'widget');
            echo "
                                    ";
            // line 410
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_category_name1", array()), 'widget');
            echo "
                                    ";
            // line 411
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_category_name2", array()), 'widget');
            echo "
                                    ";
            // line 412
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rule", array()), 'widget');
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "serial", array()), 'widget');
            echo "
                                    <div id=\"product_info_list__item_detail--";
            // line 413
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <div id=\"product_info_list__detail_name--";
            // line 414
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name_area\">
                                            <strong id=\"product_info_list__product_name--";
            // line 415
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
            echo "</strong><br>
                                            <span id=\"product_info_list__product_code--";
            // line 416
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_id small\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
            echo "</span>
                                            <span id=\"product_info_list__class_category_name--";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                                ";
            // line 418
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                // line 419
                echo "                                                / (
                                                    ";
                // line 420
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                echo "：
                                                    ";
                // line 421
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                echo "
                                                    ";
                // line 422
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                    // line 423
                    echo "                                                        /
                                                        ";
                    // line 424
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                    echo "：
                                                        ";
                    // line 425
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 427
                echo "                                                    )
                                                ";
            }
            // line 429
            echo "                                            ";
            // line 438
            echo "
    ";
            // line 439
            if ($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), $context["detail_idx"], array(), "array", true, true)) {
                // line 440
                echo "        <br />        
        ";
                // line 441
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plgOrderDetails"]) ? $context["plgOrderDetails"] : null), $context["detail_idx"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 442
                    echo "            ";
                    echo nl2br(twig_escape_filter($this->env, $context["label"], "html", null, true));
                    echo "<br />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 444
                echo "    ";
            }
            // line 445
            echo "</span>
                                        </div>
                                        <div class=\"row\">
                                            <div id=\"product_info_list__price--";
            // line 448
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span class=\"input-group item_price col-xs-8 col-sm-6 col-md-12\">
                                                    ";
            // line 450
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'widget');
            echo "
                                                    ";
            // line 451
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__quantity--";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_quantity\">
                                                    ";
            // line 456
            $context["detail_id"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "id", array());
            // line 457
            echo "                                                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "OrderDetails", array(), "any", false, true), (isset($context["detail_id"]) ? $context["detail_id"] : null), array(), "array", true, true)) {
                // line 458
                echo "                                                        ";
                $context["prev_quantity"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "OrderDetails", array()), (isset($context["detail_id"]) ? $context["detail_id"] : null), array(), "array"), "quantity", array()) . " ");
                // line 459
                echo "                                                    ";
            } else {
                // line 460
                echo "                                                        ";
                $context["prev_quantity"] = "";
                // line 461
                echo "                                                    ";
            }
            // line 462
            echo "                                                    ";
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 463
                echo "                                                        数量：";
                echo twig_escape_filter($this->env, (isset($context["prev_quantity"]) ? $context["prev_quantity"] : null), "html", null, true);
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget', array("read_only" => "readonly"));
                echo "
                                                    ";
            } else {
                // line 465
                echo "                                                        数量：";
                echo twig_escape_filter($this->env, (isset($context["prev_quantity"]) ? $context["prev_quantity"] : null), "html", null, true);
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget');
                echo "
                                                    ";
            }
            // line 467
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__tax_rate--";
            // line 471
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_tax\">
                                                    税率：
                                                    <span class=\"input-group\">
                                                    ";
            // line 474
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'widget');
            echo "
                                                    ";
            // line 475
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'errors');
            echo "
                                                    <span class=\"input-group-addon\">%</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div id=\"product_info_list__total_price--";
            // line 480
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-lg-3 item_subtotal text-right\">
                                                <span>小計：</span> ";
            // line 481
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "total_price", array())), "html", null, true);
            echo "
                                            </div>
                                        </div>

                                    </div>
                                    ";
            // line 486
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 487
                echo "                                    ";
            } else {
                // line 488
                echo "                                    <div id=\"product_info_list__button_multiple_shipping_delete--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"icon_edit\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm delete-item\">削除</button>
                                    </div>
                                    ";
            }
            // line 492
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
        // line 494
        echo "                        </div>

                        <div id=\"product_info_result_box__sub_price\" class=\"row with-border2 no-margin text-right\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <dl id=\"product_info_result_box__body_sub_price\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__subtotal\">小計：</dt>
                                    <dd>";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "subtotal", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__discount\">値引き：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 503
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discount", array()), 'widget');
        echo "
                                        ";
        // line 504
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discount", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__delivery_fee_total\">送料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 508
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_fee_total", array()), 'widget');
        echo "
                                        ";
        // line 509
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_fee_total", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__charge\">手数料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 513
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "charge", array()), 'widget');
        echo "
                                        ";
        // line 514
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "charge", array()), 'errors');
        echo "
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div id=\"product_info_result_box__summary\" class=\"row with-border2 no-margin text-right  ta\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <p class=\"alignL text-danger small\">※値引きや明細変更時のポイント計算は、自動では行われません。</p>
<dl id=\"product_info_result_box__point_summary\" class=\"dl-horizontal\">
    <dt id=\"product_info_result_box__point_use\">利用ポイント&nbsp;:</dt>
    <dd>";
        // line 525
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_point", array()), 'widget');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_point", array()), 'errors');
        echo "</dd>
    <dt id=\"product_info_result_box__point_add\">加算ポイント&nbsp;:</dt>
    <dd>";
        // line 527
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_point", array()), 'widget');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_point", array()), 'errors');
        echo "</dd>
</dl>
<dl id=\"product_info_result_box__body_summary\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__total\">合計：</dt>
                                    <dd>";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "total", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__payment_total\">お支払合計：</dt>
                                    <dd>";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Order"]) ? $context["Order"] : null), "payment_total", array())), "html", null, true);
        echo "</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 542
        echo "            <div id=\"payment_info_box\" class=\"box accordion\">
                <div id=\"payment_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お支払情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"payment_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <dl id=\"payment_info_box__payment_method\" class=\"dl-horizontal\">
                        <dt>お支払方法</dt>
                        <dd class=\"form-group form-inline\">
                            ";
        // line 550
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "payment_method", array()), "html", null, true);
        echo "<br/>
                            ";
        // line 551
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Payment", array()), 'widget');
        echo "
                            ";
        // line 552
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Payment", array()), 'errors');
        echo "
                            <p class=\"small\">お支払方法の変更に伴う手数料の変更は手動にてお願いします。</p>
                        </dd>
                    </dl>
                </div>
            </div>

            ";
        // line 560
        echo "            ";
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
            // line 561
            echo "            <div id=\"shipping_info__button_new\"><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"add_delivery\">お届け先を新規追加</button></div>
            ";
        }
        // line 563
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
            // line 564
            echo "            ";
            $context["shippingIndex"] = $this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "name", array());
            // line 565
            echo "            <div id=\"shipping_info_box--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"box accordion\">
                <div id=\"shipping_info_box__toggle--";
            // line 566
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お届け先情報";
            // line 567
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array())) > 1)) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                    <div id=\"shipping_info_box__body--";
            // line 569
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"shipping_info_list--";
            // line 570
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"shipping_info_list__menu--";
            // line 572
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\">
                                <li><a class=\"btn btn-default copyCustomerToShippingButton\" data-idx=\"";
            // line 573
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\">注文者情報をコピー</a></li>
                                ";
            // line 574
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 575
                echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\" data-idx=\"";
                echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                echo "\">商品の追加</a></li>
                                ";
                // line 576
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Shippings", array())) > 1)) {
                    // line 577
                    echo "                                    <li><button type=\"button\" class=\"btn btn-default delete_delivery\" data-idx=\"";
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\">お届け先情報を削除</button></li>
                                ";
                }
                // line 579
                echo "                                ";
            }
            // line 580
            echo "                            </ul>
                        </div>

                        ";
            // line 583
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "optionMultipleShipping", array())) {
                // line 584
                echo "                        <div class=\"tableish\"
                             id=\"shipment_item_list";
                // line 585
                echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                echo "\"
                             data-prototype=\"
                             ";
                // line 587
                echo twig_escape_filter($this->env,                 $this->renderBlock("__internal_9b64b47a0a57b58a5f3a4c568b3610cff898c7e9831be0d338ee4a236cca60d8", $context, $blocks));
                // line 589
                echo "\">

                        ";
                // line 591
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shippingForm"], "ShipmentItems", array()));
                foreach ($context['_seq'] as $context["shippingItemkey"] => $context["shipmentItemForm"]) {
                    // line 592
                    echo "                            <div id=\"shipment_item__id--";
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_box shipment_item_idx";
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "\">
                                ";
                    // line 593
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "Product", array()), 'widget');
                    echo "
                                ";
                    // line 594
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "ProductClass", array()), 'widget');
                    echo "
                                ";
                    // line 595
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "Product", array()), 'widget');
                    echo "
                                ";
                    // line 596
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "ProductClass", array()), 'widget');
                    echo "
                                ";
                    // line 597
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "product_name", array()), 'widget');
                    echo "
                                ";
                    // line 598
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "product_code", array()), 'widget');
                    echo "
                                ";
                    // line 599
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_name1", array()), 'widget');
                    echo "
                                ";
                    // line 600
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_name2", array()), 'widget');
                    echo "
                                ";
                    // line 601
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_category_name1", array()), 'widget');
                    echo "
                                ";
                    // line 602
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "serial", array()), 'widget');
                    echo "
                                <div id=\"shipment_item__detail--";
                    // line 603
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_detail\">
                                    <div id=\"shipment_item__name_detail--";
                    // line 604
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_name_area\">
                                        <strong id=\"shipment_item__product_name--";
                    // line 605
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
                    echo "</strong><br>
                                        <span id=\"shipment_item__product_code--";
                    // line 606
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_id small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
                    echo "</span>
                                            <span id=\"shipment_item__class_category_name--";
                    // line 607
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_pattern small\">
                                                ";
                    // line 608
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                        // line 609
                        echo "                                                    / (
                                                    ";
                        // line 610
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                        echo "：
                                                    ";
                        // line 611
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                        echo "
                                                    ";
                        // line 612
                        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                            // line 613
                            echo "                                                        /
                                                        ";
                            // line 614
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                            echo "：
                                                        ";
                            // line 615
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 617
                        echo "                                                    )
                                                ";
                    }
                    // line 619
                    echo "                                            ";
                    // line 628
                    echo "
<dd>
    ";
                    // line 630
                    if ($this->getAttribute($this->getAttribute((isset($context["plgShipmentItems"]) ? $context["plgShipmentItems"] : null), $context["shipping_idx"], array(), "array", false, true), $context["shippingItemkey"], array(), "array", true, true)) {
                        // line 631
                        echo "        <br />
        ";
                        // line 632
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["plgShipmentItems"]) ? $context["plgShipmentItems"] : null), $context["shipping_idx"], array(), "array"), $context["shippingItemkey"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                            // line 633
                            echo "            ";
                            echo nl2br(twig_escape_filter($this->env, $context["label"], "html", null, true));
                            echo "<br />
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 635
                        echo "    ";
                    }
                    // line 636
                    echo "</dd></span>
                                    </div>
                                    <div id=\"shipment_item__info_item--";
                    // line 638
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"row\">
                                        <div id=\"shipment_item__price--";
                    // line 639
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            ";
                    // line 640
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "price", array()), 'widget', array("read_only" => "readonly"));
                    echo "
                                        </div>
                                        <div id=\"shipment_item__quantity--";
                    // line 642
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            <span class=\"item_quantity\">
                                                ";
                    // line 644
                    $context["item_id"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "id", array());
                    // line 645
                    echo "                                                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array(), "any", false, true), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array", false, true), "ShipmentItems", array(), "any", false, true), (isset($context["item_id"]) ? $context["item_id"] : null), array(), "array", true, true)) {
                        // line 646
                        echo "                                                    ";
                        $context["prev_quantity"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array()), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array"), "ShipmentItems", array()), (isset($context["item_id"]) ? $context["item_id"] : null), array(), "array"), "quantity", array()) . " ");
                        // line 647
                        echo "                                                ";
                    } else {
                        // line 648
                        echo "                                                    ";
                        $context["prev_quantity"] = "";
                        // line 649
                        echo "                                                ";
                    }
                    // line 650
                    echo "                                                数量：";
                    echo twig_escape_filter($this->env, (isset($context["prev_quantity"]) ? $context["prev_quantity"] : null), "html", null, true);
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'widget', array("attr" => array("class" => "shipment_quantity")));
                    echo "
                                                ";
                    // line 651
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'errors');
                    echo "
                                            </span>
                                        </div>
                                            <div id=\"shipment_item__delete--";
                    // line 654
                    echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <button type=\"button\" class=\"btn btn-default delete_shipping_product\" data-idx=\"";
                    // line 655
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
                // line 661
                echo "                            </div>
                        ";
            }
            // line 663
            echo "
                        <hr>
                        <div id=\"shipment_item_detail--";
            // line 665
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-horizontal\">
                            <div id=\"shipment_item_detail__name--";
            // line 666
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 667
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 669
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
            echo "
                                    ";
            // line 670
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
            echo "
                                    ";
            // line 671
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'errors');
            echo "
                                    ";
            // line 672
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__kana--";
            // line 675
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 676
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "kana", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 678
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
            echo "
                                    ";
            // line 679
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
            echo "
                                    ";
            // line 680
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'errors');
            echo "
                                    ";
            // line 681
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__company_name--";
            // line 684
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 685
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 687
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'widget');
            echo "
                                    ";
            // line 688
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 692
            echo "                            <div id=\"shipment_item_detail__address--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 693
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "address", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__zip--";
            // line 694
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                    〒";
            // line 695
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'widget');
            echo "
                                    ";
            // line 696
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'errors');
            echo "
                                    ";
            // line 697
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 701
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__pref--";
            // line 702
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                    ";
            // line 703
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'widget');
            echo "
                                    ";
            // line 704
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 708
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr01--";
            // line 709
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 710
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
            echo "
                                    ";
            // line 711
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 715
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr02--";
            // line 716
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 717
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
            echo "
                                    ";
            // line 718
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 722
            echo "                            <div id=\"shipment_item_detail__tel--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 723
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "tel", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 725
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'widget');
            echo "
                                    ";
            // line 726
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'errors');
            echo "
                                    ";
            // line 727
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'errors');
            echo "
                                    ";
            // line 728
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 732
            echo "                            <div id=\"shipment_item_detail__fax--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 733
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 735
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax03", array()), 'widget');
            echo "
                                    ";
            // line 736
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 740
            echo "                            <div id=\"shipment_item_detail__delivery--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 741
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__delivery_name--";
            // line 742
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 743
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()))) {
                // line 744
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()), "html", null, true);
                echo "<br/>
                                    ";
            }
            // line 746
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery", "data-idx" => (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null))));
            echo "
                                    ";
            // line 747
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 751
            echo "                            <div id=\"shipment_item_detail__delivery_time--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 752
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 754
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()))) {
                // line 755
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()), "html", null, true);
                echo "<br/>
                                    ";
            } else {
                // line 757
                echo "                                        指定なし
                                    ";
            }
            // line 759
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery-time", "data-idx" => (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null))));
            echo "
                                    ";
            // line 760
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 764
            echo "                            <div id=\"shipment_item_detail__shipping_delivery_date--";
            echo twig_escape_filter($this->env, (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 765
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 767
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array(), "any", false, true), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array", false, true), "shipping_delivery_date", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array()), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array"), "shipping_delivery_date", array())))) {
                // line 768
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrOldOrder"]) ? $context["arrOldOrder"] : null), "Shippings", array()), (isset($context["shippingIndex"]) ? $context["shippingIndex"] : null), array(), "array"), "shipping_delivery_date", array()), "Y-m-d"), "html", null, true);
                echo "<br/>
                                    ";
            } else {
                // line 770
                echo "                                        指定なし
                                    ";
            }
            // line 772
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'widget');
            echo "
                                    ";
            // line 773
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div class=\"extra-form\">
                                ";
            // line 777
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 778
                echo "                                    ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 779
                    echo "                                        ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                }
                // line 781
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 782
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
        // line 788
        echo "
            <div id=\"shop_info_box\" class=\"box\">
                <div id=\"shop_info_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">ショップ用メモ欄</h3>
                </div><!-- /.box-header -->
                <div id=\"shop_info_box__note\" class=\"box-body\">";
        // line 793
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
        // line 805
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 806
            echo "                        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_order_page", array("page_no" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.order.search.page_no"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.order.search.page_no"), "method"), "1")) : ("1")))), "html", null, true);
            echo "?resume=1\">戻る</a></p>
                    ";
        }
        // line 808
        echo "                </div>
            </div>

        </div><!-- /.col -->

    </form>
</div>
";
    }

    // line 398
    public function block___internal_0a38583f1b13dca734c59525f83c0e3d72d706dffd3080f5d728bb67a8cfa7b0($context, array $blocks = array())
    {
        // line 399
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/order_detail_prototype.twig", array("orderDetailForm" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()), "vars", array()), "prototype", array())));
        echo "<div style=\"display:none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "OrderDetails", array()), "vars", array()), "prototype", array()), "serial", array()), 'widget');
        echo "</div>
                                ";
    }

    // line 587
    public function block___internal_9b64b47a0a57b58a5f3a4c568b3610cff898c7e9831be0d338ee4a236cca60d8($context, array $blocks = array())
    {
        // line 588
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/shipment_item_prototype.twig", array("shipmentItemForm" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["shippingForm"]) ? $context["shippingForm"] : null), "ShipmentItems", array()), "vars", array()), "prototype", array())));
        echo "<div style=\"display:none;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["shippingForm"]) ? $context["shippingForm"] : null), "ShipmentItems", array()), "vars", array()), "prototype", array()), "serial", array()), 'widget');
        echo "</div>
                             ";
    }

    // line 817
    public function block_modal($context, array $blocks = array())
    {
        // line 818
        echo "
";
        // line 820
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
        // line 829
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), "multi", array()), 'widget', array("attr" => array("placeholder" => "会員ID・メールアドレス・お名前")));
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchCustomerModalForm"]) ? $context["searchCustomerModalForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 833
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 834
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 835
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 836
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 838
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
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
        // line 851
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
        // line 860
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード")));
        echo "
                </div>
                <div id=\"search_product_modal_box__category_id\" class=\"form-group\">
                    ";
        // line 863
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "category_id", array()), 'widget');
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 867
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 868
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 869
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 870
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 872
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 873
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
        return "__string_template__6cf6498d48ecede572f93cd1caa4cdb3f3ba9210d64ee12ae78e3dc7ddf16f69";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1903 => 873,  1897 => 872,  1892 => 870,  1888 => 869,  1883 => 868,  1880 => 867,  1876 => 866,  1870 => 863,  1864 => 860,  1853 => 851,  1840 => 839,  1834 => 838,  1829 => 836,  1825 => 835,  1820 => 834,  1817 => 833,  1813 => 832,  1807 => 829,  1796 => 820,  1793 => 818,  1790 => 817,  1781 => 588,  1778 => 587,  1769 => 399,  1766 => 398,  1755 => 808,  1749 => 806,  1747 => 805,  1732 => 793,  1725 => 788,  1706 => 782,  1700 => 781,  1694 => 779,  1691 => 778,  1687 => 777,  1680 => 773,  1675 => 772,  1671 => 770,  1665 => 768,  1663 => 767,  1658 => 765,  1653 => 764,  1647 => 760,  1642 => 759,  1638 => 757,  1632 => 755,  1630 => 754,  1625 => 752,  1620 => 751,  1614 => 747,  1609 => 746,  1603 => 744,  1601 => 743,  1597 => 742,  1593 => 741,  1588 => 740,  1582 => 736,  1574 => 735,  1569 => 733,  1564 => 732,  1558 => 728,  1554 => 727,  1550 => 726,  1542 => 725,  1537 => 723,  1532 => 722,  1526 => 718,  1522 => 717,  1518 => 716,  1515 => 715,  1509 => 711,  1505 => 710,  1501 => 709,  1498 => 708,  1492 => 704,  1488 => 703,  1484 => 702,  1481 => 701,  1475 => 697,  1471 => 696,  1465 => 695,  1461 => 694,  1457 => 693,  1452 => 692,  1446 => 688,  1442 => 687,  1437 => 685,  1433 => 684,  1427 => 681,  1423 => 680,  1419 => 679,  1415 => 678,  1410 => 676,  1406 => 675,  1400 => 672,  1396 => 671,  1392 => 670,  1388 => 669,  1383 => 667,  1379 => 666,  1375 => 665,  1371 => 663,  1367 => 661,  1353 => 655,  1347 => 654,  1341 => 651,  1335 => 650,  1332 => 649,  1329 => 648,  1326 => 647,  1323 => 646,  1320 => 645,  1318 => 644,  1311 => 642,  1306 => 640,  1300 => 639,  1294 => 638,  1290 => 636,  1287 => 635,  1278 => 633,  1274 => 632,  1271 => 631,  1269 => 630,  1265 => 628,  1263 => 619,  1259 => 617,  1254 => 615,  1250 => 614,  1247 => 613,  1245 => 612,  1241 => 611,  1237 => 610,  1234 => 609,  1232 => 608,  1226 => 607,  1218 => 606,  1210 => 605,  1204 => 604,  1198 => 603,  1194 => 602,  1190 => 601,  1186 => 600,  1182 => 599,  1178 => 598,  1174 => 597,  1170 => 596,  1166 => 595,  1162 => 594,  1158 => 593,  1149 => 592,  1145 => 591,  1141 => 589,  1139 => 587,  1134 => 585,  1131 => 584,  1129 => 583,  1124 => 580,  1121 => 579,  1115 => 577,  1113 => 576,  1108 => 575,  1106 => 574,  1102 => 573,  1098 => 572,  1093 => 570,  1089 => 569,  1080 => 567,  1076 => 566,  1071 => 565,  1068 => 564,  1049 => 563,  1045 => 561,  1042 => 560,  1032 => 552,  1028 => 551,  1024 => 550,  1014 => 542,  1003 => 533,  998 => 531,  990 => 527,  984 => 525,  970 => 514,  966 => 513,  959 => 509,  955 => 508,  948 => 504,  944 => 503,  938 => 500,  930 => 494,  915 => 492,  907 => 488,  904 => 487,  902 => 486,  894 => 481,  890 => 480,  882 => 475,  878 => 474,  872 => 471,  864 => 467,  857 => 465,  850 => 463,  847 => 462,  844 => 461,  841 => 460,  838 => 459,  835 => 458,  832 => 457,  830 => 456,  826 => 455,  819 => 451,  815 => 450,  810 => 448,  805 => 445,  802 => 444,  793 => 442,  789 => 441,  786 => 440,  784 => 439,  781 => 438,  779 => 429,  775 => 427,  770 => 425,  766 => 424,  763 => 423,  761 => 422,  757 => 421,  753 => 420,  750 => 419,  748 => 418,  744 => 417,  738 => 416,  732 => 415,  728 => 414,  724 => 413,  719 => 412,  715 => 411,  711 => 410,  707 => 409,  703 => 408,  699 => 407,  695 => 406,  691 => 405,  687 => 404,  682 => 403,  665 => 402,  661 => 400,  659 => 398,  651 => 392,  647 => 390,  645 => 389,  630 => 377,  609 => 363,  602 => 359,  598 => 358,  593 => 356,  590 => 355,  584 => 351,  580 => 350,  575 => 348,  572 => 347,  566 => 343,  558 => 342,  553 => 340,  550 => 339,  544 => 335,  540 => 334,  536 => 333,  528 => 332,  523 => 330,  520 => 329,  514 => 325,  510 => 324,  505 => 322,  502 => 321,  496 => 317,  492 => 316,  488 => 314,  482 => 310,  478 => 309,  474 => 307,  468 => 303,  464 => 302,  460 => 300,  453 => 295,  449 => 294,  443 => 293,  438 => 291,  435 => 290,  429 => 286,  425 => 285,  421 => 284,  417 => 283,  412 => 281,  405 => 277,  401 => 276,  397 => 275,  393 => 274,  388 => 272,  380 => 267,  376 => 266,  372 => 265,  367 => 262,  359 => 256,  357 => 255,  342 => 243,  338 => 242,  334 => 241,  330 => 240,  321 => 234,  317 => 233,  312 => 231,  302 => 224,  297 => 221,  294 => 220,  257 => 186,  212 => 143,  209 => 142,  203 => 141,  195 => 139,  189 => 137,  186 => 136,  181 => 135,  179 => 134,  172 => 131,  169 => 130,  166 => 129,  163 => 128,  160 => 127,  158 => 126,  141 => 112,  98 => 72,  58 => 34,  55 => 33,  49 => 27,  43 => 26,  39 => 22,  37 => 31,  35 => 30,  33 => 29,  31 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__6cf6498d48ecede572f93cd1caa4cdb3f3ba9210d64ee12ae78e3dc7ddf16f69", "");
    }
}
