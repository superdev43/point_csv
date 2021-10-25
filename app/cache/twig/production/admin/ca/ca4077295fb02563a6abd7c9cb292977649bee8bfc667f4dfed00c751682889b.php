<?php

/* __string_template__c0797a2254841cf1944fcb15e2cd766415d48a49217ea63f269585fd4b127d7f */
class __TwigTemplate_d70b9c2f84d2a132ab3853562508ac95e290f90e3d1d6a6da33fd1b49eb5f551 extends Twig_Template
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
        echo "<script>
    // 商品規格情報. 規格2のプルダウンリストの設定に利用する,
    var productsClassCategories = {
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 5
            echo "        \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "js"), "html", null, true);
            echo "\": ";
            echo twig_jsonencode_filter($this->getAttribute($context["Product"], "class_categories", array()));
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo ", ";
            }
            // line 6
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    };
    // 規格1が選択された際に, 規格2のプルダウンリストを設定する,
    function fnSetClassCategory2(select, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$(select);
        // 規格2の要素を取得
        var \$sele2 = \$sele1.parent().find('select[name=classcategory_id2]');

        // 規格1の選択肢
        var classcat_id1 = \$sele1.val() ? \$sele1.val() : '';

        // 規格2がある場合は選択肢を書き換える
        if (\$sele2 && \$sele2.length) {
            // 規格2の選択肢をクリア
            \$sele2.children().remove();
            var classcat2 = productsClassCategories[product_id][classcat_id1];

            // 規格2の要素を設定
            for (var key in classcat2) {
                if (classcat2.hasOwnProperty(key)) {
                    var id = classcat2[key].classcategory_id2;
                    var name = classcat2[key].name;
                    var option = \$('<option />').val(id ? id : '').text(name);
                    \$sele2.append(option);
                }
            }
        }
    }
    // 受注明細行を追加する.
    // 受注明細行のレコード数カウンタ(order_details_count)は, edit.twig側で定義している.
    function fnAddOrderDetail(\$row, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$row.find('select[name=classcategory_id1]');
        // 規格2の要素を取得
        var \$sele2 = \$row.find('select[name=classcategory_id2]');

        var product_class_id = null;
        var price = null;
        var quantity = 1;
        var product_code = null;
        var tax_rate = null;

        // 規格なし商品の場合
        if (!\$sele1.length && !\$sele2.length) {
            var product = productsClassCategories[product_id]['__unselected2']['#'];
            product_class_id = product['product_class_id'];
            price = product['price02'];
            product_code = product['product_code'];
        // 規格が登録されている商品の場合
        } else if (\$sele1.length) {
            if (\$sele2.length) {
                var class_category_id1 = \$sele1.val();
                var class_cateogry_id2 = \$sele2.val();
                if (class_category_id1 == '__unselected' || !class_cateogry_id2) {
                    alert('規格を選択してください。')
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#' + class_cateogry_id2];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            } else {
                var class_category_id1 = \$sele1.val();
                if (class_category_id1 == '__unselected') {
                    alert('規格を選択してください。')
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        // 受注明細行を取得.
        var list = \$('#order_detail_list');
        var orderDetailExists = false;

        \$('*[id^=\"product_info_list__item--\"]').each(function () {
            var \$inputs = \$(this).find(':input');
            if (\$inputs.filter('[id\$=\"_ProductClass\"][value=\"'+product_class_id+'\"]').length > 0) {
                var \$quantity = \$inputs.filter('[id\$=\"_quantity\"]');
                var quantity = \$quantity.val().trim();
                if (quantity.match(/^\\d+\$/)) {
                    \$quantity.val(parseInt(quantity) + 1);
                }
                orderDetailExists = true;
                return false;
            }
        });

        if (!orderDetailExists) {

            // prototype templateを取得.
            var newWidget = list.attr('data-prototype');
            // レコード数カウンタで置換.
            newWidget = newWidget.replace(/__name__/g, order_details_count);
            // フォーム入力値をセットm
            \$newWidget = \$(newWidget);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_Product').val(product_id);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_ProductClass').val(product_class_id);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_price').val(price);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_quantity').val(1); // コントローラ側で再取得するため、仮の値をセット
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_tax_rate').val(8); // コントローラ側で再取得するため、仮の値をセット

            // 明細行に追加.
            list.append(\$newWidget);
        }

        // 配送商品行を取得.
        list = \$('#shipment_item_list' + shipment_idx);

        // prototype templateを取得.
        if (typeof(list) !== 'undefined' && list.length > 0) {

            var itemExists = false;

            list.find('*[id^=\"shipment_item__id--\"]').each(function () {
                var \$inputs = \$(this).find(':input');
                if (\$inputs.filter('[id\$=\"_ProductClass\"][value=\"'+product_class_id+'\"]').length > 0) {
                    var \$quantity = \$inputs.filter('[id\$=\"_quantity\"]');
                    var quantity = \$quantity.val().trim();
                    if (quantity.match(/^\\d+\$/)) {
                        \$quantity.val(parseInt(quantity) + 1);
                    }
                    itemExists = true;
                    return false;
                }
            });

            if (!itemExists) {

                newWidget = list.attr('data-prototype');
                // レコード数カウンタで置換.
                newWidget = newWidget.replace(/__name__/g, shipmentItem_idx);
                // フォーム入力値をセット
                \$newWidget = \$(newWidget);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_Product').val(product_id);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_ProductClass').val(product_class_id);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_price').val(price);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_quantity').val(1); // コントローラ側で再取得するため、仮の値をセット

                // 明細行に追加.
                list.append(\$newWidget);
            }
        }

        if (orderDetailExists) {
            // カウンタを更新.
            order_details_count++;
        }

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        setModeAndSubmit('modal');

        return false;
    }

    // 商品検索
    \$('#product_pagination a').on('click', function(event) {
        var list = \$('#searchProductModalList');
        list.children().remove();

        \$.ajax({
            type: 'GET',
            dataType: 'html',
            url: \$(this).attr('href'),
            success: function(data) {
                \$('#searchProductModalList').html(data);
            },
            error: function() {
                alert('search product failed.');
            }
        });
        event.preventDefault();
    });
</script>";
        // line 195
        echo "
<script>
    // 受注明細行を追加する.
    // 受注明細行のレコード数カウンタ(order_details_count)は, edit.twig側で定義している.
    function fnAddOrderDetailOption(\$row, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$row.find('select[name=classcategory_id1]');
        // 規格2の要素を取得
        var \$sele2 = \$row.find('select[name=classcategory_id2]');

        var product_class_id = null;
        var price = null;
        var quantity = 1;
        var product_code = null;
        var tax_rate = null;

        // 規格なし商品の場合
        if (!\$sele1.length && !\$sele2.length) {
            var product = productsClassCategories[product_id]['__unselected2']['#'];
            product_class_id = product['product_class_id'];
            price = product['price02'];
            product_code = product['product_code'];
        // 規格が登録されている商品の場合
        } else if (\$sele1.length) {
            if (\$sele2.length) {
                var class_category_id1 = \$sele1.val();
                var class_cateogry_id2 = \$sele2.val();
                if (class_category_id1 == '__unselected' || !class_cateogry_id2) {
                    alert('規格を選択してください。')
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#' + class_cateogry_id2];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            } else {
                var class_category_id1 = \$sele1.val();
                if (class_category_id1 == '__unselected') {
                    alert('規格を選択してください。')
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        // オプション情報の取得
        var option_id = null;
        var options = {};

        var \$inputs = \$row.find(':input');
        \$inputs.filter('[name^=\"productoption\"]').each( function() {
            var option_id = \$(this).attr('name').replace(/productoption/ig,'');
            var id = \$(this).prop(\"id\");
            if(id.match(/^productoption\\d[\\d_]*\\d\$/)){
                var type = \$(this).attr('type');
                if(type == 'radio'){
                    value = \$row.find(\"input[name='productoption\" + option_id + \"']:checked\").val();
                }else{
                    value = \$(this).val();
                }
                options['productoption' + option_id] = value;
            }
        });

        // 受注明細行を取得.
        var list = \$('#order_detail_list');
        var orderDetailExists = false;

        \$('*[id^=\"product_info_list__item--\"]').each(function () {
            var \$inputs = \$(this).find(':input');
            if (\$inputs.filter('[id\$=\"_ProductClass\"][value=\"'+product_class_id+'\"]').length > 0) {
                var \$serial = \$inputs.filter('[id\$=\"_serial\"]');
                var serial = \$serial.val().trim();
                targetOptions = \$.parseJSON(serial);

                // オプションの比較
                if(equalObject(options, targetOptions)){
                    var \$quantity = \$inputs.filter('[id\$=\"_quantity\"]');
                    var quantity = \$quantity.val().trim();
                    if (quantity.match(/^\\d+\$/)) {
                        \$quantity.val(parseInt(quantity) + 1);
                    }
                    orderDetailExists = true;
                    return false;
                }
            }
        });

        if (!orderDetailExists) {

            // prototype templateを取得.
            var newWidget = list.attr('data-prototype');
            // レコード数カウンタで置換.
            newWidget = newWidget.replace(/__name__/g, order_details_count);
            // フォーム入力値をセット
            \$newWidget = \$(newWidget);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_Product').val(product_id);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_ProductClass').val(product_class_id);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_price').val(price);
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_quantity').val(1); // コントローラ側で再取得するため、仮の値をセット
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_tax_rate').val(8); // コントローラ側で再取得するため、仮の値をセット
            \$newWidget.find('#order_OrderDetails_' + order_details_count + '_serial').val(JSON.stringify(options));

            // 明細行に追加.
            list.append(\$newWidget);
        }

        // 配送商品行を取得.
        list = \$('#shipment_item_list' + shipment_idx);

        // prototype templateを取得.
        if (typeof(list) !== 'undefined' && list.length > 0) {

            var itemExists = false;

            list.find('*[id^=\"shipment_item__id--\"]').each(function () {
                var \$inputs = \$(this).find(':input');
                if (\$inputs.filter('[id\$=\"_ProductClass\"][value=\"'+product_class_id+'\"]').length > 0) {
                    var \$serial = \$inputs.filter('[id\$=\"_serial\"]');
                    var serial = \$serial.val().trim();
                    targetOptions = \$.parseJSON(serial);

                    // オプションの比較
                    if(equalObject(options, targetOptions)){
                        var \$quantity = \$inputs.filter('[id\$=\"_quantity\"]');
                        var quantity = \$quantity.val().trim();
                        if (quantity.match(/^\\d+\$/)) {
                            \$quantity.val(parseInt(quantity) + 1);
                        }
                        itemExists = true;
                        return false;
                    }
                }
            });

            if (!itemExists) {

                newWidget = list.attr('data-prototype');
                // レコード数カウンタで置換.
                newWidget = newWidget.replace(/__name__/g, shipmentItem_idx);
                // フォーム入力値をセット
                \$newWidget = \$(newWidget);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_Product').val(product_id);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_ProductClass').val(product_class_id);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_price').val(price);
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_quantity').val(1); // コントローラ側で再取得するため、仮の値をセット
                \$newWidget.find('#order_Shippings_' + shipment_idx + '_ShipmentItems_' + shipmentItem_idx + '_serial').val(JSON.stringify(options));

                // 明細行に追加.
                list.append(\$newWidget);
            }
        }

        if (orderDetailExists) {
            // カウンタを更新.
            order_details_count++;
        }

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        setModeAndSubmit('modal');

        return false;
    }

    function equalObject(a,b){
        a = objectSort(a);
        b = objectSort(b);

        a = JSON.stringify(a);
        b = JSON.stringify(b);

        return a === b;
    }

    function objectSort(object) {
        var sorted = {};
        var array = [];
        for (key in object) {
            if (object.hasOwnProperty(key)) {
                array.push(key);
            }
        }
        array.sort();

        for (var i = 0; i < array.length; i++) {
            sorted[array[i]] = object[array[i]];
        }
        return sorted;
    }
</script>

<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>

        ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 397
            echo "            <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 398
            $context["form"] = $this->getAttribute((isset($context["forms"]) ? $context["forms"] : null), $this->getAttribute($context["Product"], "id", array()), array(), "array");
            // line 399
            echo "
                <tr>
                    <td>
                        ";
            // line 402
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 405
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
            echo "
                        ";
            // line 406
            if ($this->getAttribute($context["Product"], "hasProductClass", array())) {
                // line 407
                echo "                            <span><br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_min", array()), "html", null, true);
                echo "～";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_max", array()), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 409
                echo "                            <span><br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_min", array()), "html", null, true);
                echo "</span>
                        ";
            }
            // line 411
            echo "                    </td>
                    <td>
                        ";
            // line 413
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array(), "any", true, true)) {
                // line 414
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'label');
                echo "：";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'widget', array("attr" => array("onchange" => (("fnSetClassCategory2(this," . $this->getAttribute($context["Product"], "id", array())) . ")"))));
                echo "
                            ";
                // line 415
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
                    // line 416
                    echo "                                <br/>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'label');
                    echo "：";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'widget', array("id" => ""));
                    echo "
                            ";
                }
                // line 418
                echo "                        ";
            }
            // line 419
            echo "                    ";
            // line 428
            echo "
";
            // line 429
            if ($this->getAttribute((isset($context["ProductOptions"]) ? $context["ProductOptions"] : null), $this->getAttribute($context["Product"], "id", array()), array(), "array", true, true)) {
                // line 430
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ProductOptions"]) ? $context["ProductOptions"] : null), $this->getAttribute($context["Product"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                    // line 431
                    echo "        ";
                    $context["value"] = ("productoption" . $this->getAttribute($this->getAttribute($context["ProductOption"], "Option", array()), "id", array()));
                    // line 432
                    echo "        ";
                    if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array", true, true)) {
                        // line 433
                        echo "            <br/>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array"), 'label');
                        echo "：
            <br />";
                        // line 434
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array"), 'widget');
                        echo "
            ";
                        // line 435
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array"), 'errors');
                        echo "
        ";
                    }
                    // line 437
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 438
            echo "</td>
                    <div class=\"extra-form\">
                        ";
            // line 440
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 441
                echo "                            ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 442
                    echo "                                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                    echo "
                                ";
                    // line 443
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                ";
                    // line 444
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                            ";
                }
                // line 446
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                    </div>
                    <td class=\"text-right\">
                        <button onclick=\"fnAddOrderDetailOption(\$(this).parent().parent(), ";
            // line 449
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo ")\" type=\"button\" class=\"btn btn-default btn-sm\" name=\"mode\" value=\"modal\">
                            決定
                        </button>
                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "
        </tbody>
    </table>
    ";
        // line 459
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0)) {
            // line 460
            echo "        ";
            $this->loadTemplate("pager.twig", "__string_template__c0797a2254841cf1944fcb15e2cd766415d48a49217ea63f269585fd4b127d7f", 460)->display(array_merge($context, array("id" => "product_pagination", "pages" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paginationData", array()), "routes" => "admin_order_search_product_page")));
            // line 461
            echo "    ";
        }
        // line 462
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c0797a2254841cf1944fcb15e2cd766415d48a49217ea63f269585fd4b127d7f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 462,  612 => 461,  609 => 460,  607 => 459,  602 => 456,  589 => 449,  585 => 447,  579 => 446,  574 => 444,  570 => 443,  565 => 442,  562 => 441,  558 => 440,  554 => 438,  547 => 437,  542 => 435,  538 => 434,  533 => 433,  530 => 432,  527 => 431,  522 => 430,  520 => 429,  517 => 428,  515 => 419,  512 => 418,  504 => 416,  502 => 415,  495 => 414,  493 => 413,  489 => 411,  483 => 409,  475 => 407,  473 => 406,  469 => 405,  463 => 402,  458 => 399,  456 => 398,  451 => 397,  447 => 396,  244 => 195,  63 => 7,  49 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__c0797a2254841cf1944fcb15e2cd766415d48a49217ea63f269585fd4b127d7f", "");
    }
}
