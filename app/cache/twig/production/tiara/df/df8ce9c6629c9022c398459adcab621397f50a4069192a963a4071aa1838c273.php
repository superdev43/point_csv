<?php

/* __string_template__94ad44e52a36d25ee8d6d4cad0a3f30bddd7bbe41f838db5cb803b306c913e0d */
class __TwigTemplate_f0b836aa4cf2c20d92fc18a2adcad9c27fab80673368cbde0f92425d1a81d5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__94ad44e52a36d25ee8d6d4cad0a3f30bddd7bbe41f838db5cb803b306c913e0d", 22);
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
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
    eccube.classCategories = ";
        // line 28
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "plugin.exclude_tax.service.product", array(), "array"), "getClassCategories", array(0 => (isset($context["Product"]) ? $context["Product"] : null)), "method"));
        echo ";

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    ";
        // line 39
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
            // line 40
            echo "    fnSetClassCategories(
            document.form1, ";
            // line 41
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
    );
    ";
        }
        // line 44
        echo "</script>

<script>
\$(function(){
    \$('.carousel').slick({
        infinite: false,
        speed: 300,
        prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    });

    \$('#favorite').click(function() {
        \$('#mode').val('add_favorite');
    });

    \$('#add-cart').click(function() {
        \$('#mode').val('add_cart');
    });

    // bfcache無効化
    \$(window).bind('pageshow', function(event) {
        if (event.originalEvent.persisted) {
            location.reload(true);
        }
    });
});
</script>

";
        // line 101
        echo "
";
        // line 102
        if ((twig_length_filter($this->env, (isset($context["ProductOptions"]) ? $context["ProductOptions"] : null)) > 0)) {
            // line 103
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
            echo "/../../plugin/ProductOption/jquery.plainmodal.min.js\"></script>
";
        }
        // line 105
        echo "<script>
";
        // line 106
        if ((twig_length_filter($this->env, (isset($context["ProductOptions"]) ? $context["ProductOptions"] : null)) > 0)) {
            // line 107
            echo "\$(function() {
    ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ProductOptions"]) ? $context["ProductOptions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                // line 109
                echo "    ";
                $context["Option"] = $this->getAttribute($context["ProductOption"], "Option", array());
                // line 110
                echo "        ";
                if (($this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "description_flg", array()) == 1)) {
                    // line 111
                    echo "            modal";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "id", array()), "html", null, true);
                    echo " = \$('#option_description_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "id", array()), "html", null, true);
                    echo "').plainModal();
            \$('#option_description_link_";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "id", array()), "html", null, true);
                    echo "').click(function() { modal";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "id", array()), "html", null, true);
                    echo ".plainModal('open'); return false;});
        ";
                }
                // line 114
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "});

\$(function() {
    \$(\"[id^=desc_btn_]\").click(function(){
        var id = \$(this).attr('id').replace(/^desc_btn_/ig, '');
        var ids = id.split('_');

        func_submit(ids[0],ids[1]);
    });
});

function func_submit(optionId, setValue) {
    var \$sele_option = \$(\"[name=productoption\" + optionId + \"]\");
    if(\$sele_option && \$sele_option.length){
        var kind = \$sele_option.attr(\"type\");
        if(kind == 'radio'){
            \$sele_option.val([setValue]);
        }else{
            \$sele_option.val(setValue);
        }
    }
    ";
            // line 136
            if ((isset($context["isActive"]) ? $context["isActive"] : null)) {
                // line 137
                echo "    onOptionChange();
    ";
            }
            // line 139
            echo "    \$('#option_description_' + optionId).plainModal('close');
}
";
        }
        // line 142
        echo "
";
        // line 143
        if ((isset($context["isActive"]) ? $context["isActive"] : null)) {
            // line 144
            echo "var optionPrice = ";
            echo twig_jsonencode_filter((isset($context["optionPrice"]) ? $context["optionPrice"] : null));
            echo ";
var optionPoint = ";
            // line 145
            echo twig_jsonencode_filter((isset($context["optionPoint"]) ? $context["optionPoint"] : null));
            echo ";
var taxRules = ";
            // line 146
            echo twig_jsonencode_filter((isset($context["taxRules"]) ? $context["taxRules"] : null));
            echo ";
var default_class_id = ";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["default_class_id"]) ? $context["default_class_id"] : null), "html", null, true);
            echo ";

function onOptionChange(){
    var optionPriceTotal = 0;
    var optionPointTotal = 0;
    var tax_rate = null;
    var tax_rule = null;
    \$(\"[id^=productoption]\").each(function(){
        var id = \$(this).prop(\"id\");
        if(id.match(/^productoption\\d+\$/)){
            var kind = \$(this).prop(\"tagName\");
            var value = null;
            switch(kind){
                case 'SELECT':
                    value = \$(this).val();
                    break;
                case 'TEXTAREA':
                case 'INPUT':
                    var text = \$(this).val();
                    if(text.length > 0){
                        value = \$(this).attr('data');
                    }
                    break;
                default:
                    var id = \$(this).prop('id');
                    value = (\$(\"input[name='\" + id + \"']:checked\").val());
                    break;
            }
            if(value != null){
                optionPriceTotal += optionPrice[value];
                optionPointTotal += optionPoint[value];
            }
        }
    });
    var \$sele1 = \$('form select[name=classcategory_id1]');
    var \$sele2 = \$('form select[name=classcategory_id2]');

    var classcat_id1 = \$sele1.val() ? \$sele1.val() : '__unselected';
    var classcat_id2 = \$sele2.val() ? \$sele2.val() : '';
    classcat2 = eccube.classCategories[classcat_id1]['#' + classcat_id2];
    if(classcat2){
        var product_class_id = classcat2.product_class_id;
    }else{
        var product_class_id = default_class_id;
    }

    var tax_rate = taxRules[product_class_id]['tax_rate'];
    var tax_rule = taxRules[product_class_id]['tax_rule'];

    \$('#option_price_default').text(number_format(optionPriceTotal));
    \$('#option_price_inctax_default').text(number_format(optionPriceTotal + sfTax(optionPriceTotal, tax_rate, tax_rule)));
    \$('#option_point_default').text(number_format(optionPointTotal));
}

function number_format(num) {
    return num.toString().replace(/([0-9]+?)(?=(?:[0-9]{3})+\$)/g , '\$1,');
}

function sfTax(price, tax_rate, tax_rule) {
    real_tax = tax_rate / 100;
    ret = price * real_tax;
    tax_rule = parseInt(tax_rule);
    switch (tax_rule) {
        // 四捨五入
        case 1:
            \$ret = Math.round(ret);
            break;
        // 切り捨て
        case 2:
            \$ret = Math.floor(ret);
            break;
        // 切り上げ
        case 3:
            \$ret = Math.ceil(ret);
            break;
        // デフォルト:切り上げ
        default:
            \$ret = Math.round(ret);
            break;
    }
    return \$ret;
}

onOptionChange();
";
        }
        // line 232
        echo "</script>";
    }

    // line 234
    public function block_main($context, array $blocks = array())
    {
        // line 235
        echo "    ";
        // line 248
        echo "
    <!-- ▼item_detail▼ -->
    <div id=\"item_detail\" class=\"inner\">
        <div id=\"detail_wrap\" class=\"row\">

            <!--★画像★-->
            <div id=\"item_photo_area\" class=\"col-sm-6\">
                <div id=\"detail_image_box__slides\" class=\"slides\">
                    ";
        // line 256
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array())) > 0)) {
            // line 257
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 258
                echo "                        <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "                    ";
        } else {
            // line 261
            echo "                        <div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                    ";
        }
        // line 263
        echo "                </div>

\t\t";
        // line 265
        if (($this->getAttribute($this->getAttribute((isset($context["__EX_PRODUCT"]) ? $context["__EX_PRODUCT"] : null), 1, array()), "value", array()) != null)) {
            echo " 
\t\t<div class=\"box_color\">
\t\t\t<h4><img src=\"/img/detail/h_color.png\" alt=\"カラー\" /></h4>
\t\t\t<p>";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__EX_PRODUCT"]) ? $context["__EX_PRODUCT"] : null), 1, array()), "value", array()), "html", null, true);
            echo "</p>
\t\t</div><!-- /.box_color -->
\t\t";
        }
        // line 271
        echo "
\t\t";
        // line 272
        if (($this->getAttribute($this->getAttribute((isset($context["__EX_PRODUCT"]) ? $context["__EX_PRODUCT"] : null), 3, array()), "value", array()) != null)) {
            echo " 
\t\t<div class=\"box_material\">
\t\t\t<h4><img src=\"/img/detail/h_material.png\" alt=\"素材\" /></h4>
\t\t\t<p>";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__EX_PRODUCT"]) ? $context["__EX_PRODUCT"] : null), 3, array()), "value", array()), "html", null, true);
            echo "</p>
\t\t\t<img src=\"/img/detail/deco_detail01.png\" alt=\"deco\" class=\"deco\" />
\t\t</div><!-- /.box_material -->
\t\t";
        }
        // line 279
        echo "            </div>

            <section id=\"item_detail_area\" class=\"col-sm-6\">

                <!--★商品名★-->
                <h3 id=\"detail_description_box__name\" class=\"item_name\">";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
        echo "</h3>
                <div id=\"detail_description_box__body\" class=\"item_detail\">

                    ";
        // line 287
        if ( !twig_test_empty($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductTag", array()))) {
            // line 288
            echo "                        <!--▼商品タグ-->
                        <div id=\"product_tag_box\" class=\"product_tag\">
                            ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 291
                echo "                                <span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductTag"], "Tag", array()), "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "                        </div>
                        <hr>
                        <!--▲商品タグ-->
                    ";
        }
        // line 297
        echo "
                    <!--★通常価格★-->
                    ";
        // line 299
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 300
            if (( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) && ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())))) {
                // line 301
                echo "                        <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())), "html", null, true);
                echo "</span> <span class=\"small\">税抜</span></p>
                        ";
            } elseif (( !(null === $this->getAttribute(            // line 302
(isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) &&  !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())))) {
                // line 303
                echo "                        <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())), "html", null, true);
                echo " ～ <!--<span class=\"max_price none\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())), "html", null, true);
                echo "</span>--></span> <span class=\"small\">税抜</span></p>
                        ";
            }
            // line 305
            echo "                    ";
        } else {
            // line 306
            if ( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array()))) {
                // line 307
                echo "                        <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())), "html", null, true);
                echo "</span> <span class=\"small\">税抜</span></p>
                        ";
            }
            // line 309
            echo "                    ";
        }
        // line 311
        echo "<!--★販売価格★-->
                    ";
        // line 312
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 313
            if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Max", array()))) {
                // line 314
                echo "                        <p id=\"detail_description_box__class_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Min", array())), "html", null, true);
                echo "</span> <span class=\"small\">税抜</span></p>
                        ";
            } else {
                // line 316
                echo "                        <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Min", array())), "html", null, true);
                echo " ～ <!--<span class=\"max_price none\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Max", array())), "html", null, true);
                echo "</span>--></span> <span class=\"small\">税抜</span></p>
                        ";
            }
            // line 318
            echo "                    ";
        } else {
            // line 319
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Min", array())), "html", null, true);
            echo "</span> <span class=\"small\">税抜</span></p>
                    ";
        }
        // line 322
        echo "<!--▼商品コード-->
                    <p id=\"detail_description_box__sale_point\" class=\"text-primary\">
            加算ポイント：<span>21</span><span class=\"small\">pt</span>
    </p>

<p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
                        ";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()), "html", null, true);
        echo "
                        ";
        // line 329
        if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()) != $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()), "html", null, true);
        }
        // line 330
        echo "                        </span> </p>
                    <!--▲商品コード-->

                    <!-- ▼関連カテゴリ▼ -->
                    <div id=\"relative_category_box\" class=\"relative_cat none\">
                        <p>関連カテゴリ</p>
                          ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductCategories", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 337
            echo "                        <ol id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                            ";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 339
                echo "                            <li><a id=\"relative_category_box__relative_category--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "                        </ol>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "                    </div>
                    <!-- ▲関連カテゴリ▲ -->


\t\t\t<!--★商品説明★-->
\t\t\t";
        // line 348
        if (nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "description_detail", array()))) {
            // line 349
            echo "\t\t\t<div id=\"detail_not_stock_box__description_detail\" class=\"item_comment\">";
            echo nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "description_detail", array()));
            echo "</div>
\t\t\t";
        }
        // line 351
        echo "

\t";
        // line 354
        echo "        ";
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())) {
            // line 355
            echo "        <div id=\"sub_area_sp\" class=\"row tablet_hide pc_hide\">
            <div class=\"\">
                <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 357
            echo twig_include($this->env, $context, twig_template_from_string($this->env, nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array()))));
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 361
        echo "
                    <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                        <!--▼買い物かご-->
                        <div id=\"detail_cart_box\" class=\"cart_area\">

                            ";
        // line 366
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "stock_find", array())) {
            // line 367
            echo "
                                ";
            // line 369
            echo "                                ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array(), "any", true, true)) {
                // line 370
                echo "\t\t\t\t<p>サイズ・カラー等をご選択ください</p>
                                <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                    ";
                // line 373
                echo "                                    <li>
                                        ";
                // line 374
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'widget');
                echo "
                                        ";
                // line 375
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'errors');
                echo "
                                    </li>
                                    ";
                // line 378
                echo "                                    ";
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
                    // line 379
                    echo "                                        <li>
                                            ";
                    // line 380
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'widget');
                    echo "
                                            ";
                    // line 381
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'errors');
                    echo "
                                        </li>
                                     ";
                }
                // line 384
                echo "                                </ul>
                                ";
            }
            // line 386
            echo "
                                ";
            // line 388
            echo "                                ";
            // line 397
            echo "
<style>
.form-control {
  width: 100%;
}

textarea.form-control {
  height: 7em;
}

@media only screen and (min-width: 768px) {
  .form-control {
    width: 350px;
  }
}
</style>

";
            // line 414
            if (array_key_exists("ProductOptions", $context)) {
                // line 415
                echo "    ";
                if ((isset($context["ProductOptions"]) ? $context["ProductOptions"] : null)) {
                    // line 416
                    echo "        <ul class=\"classcategory_list\">
            ";
                    // line 417
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["ProductOptions"]) ? $context["ProductOptions"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                        // line 418
                        echo "                ";
                        $context["value"] = ("productoption" . $this->getAttribute($this->getAttribute($context["ProductOption"], "Option", array()), "id", array()));
                        // line 419
                        echo "                <li>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array"), 'label');
                        echo "
                    ";
                        // line 420
                        if (($this->getAttribute($this->getAttribute($context["ProductOption"], "Option", array()), "description_flg", array()) == 1)) {
                            // line 421
                            echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductOption"], "Option", array()), "id", array()), "html", null, true);
                            echo "\">詳細説明</a>
                    ";
                        }
                        // line 423
                        echo "                </li>
                <li ";
                        // line 424
                        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array"), "vars", array()), "errors", array()))) {
                            echo "class=\"has-error\"";
                        }
                        echo ">
                    ";
                        // line 425
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array"), 'widget', array("attr" => array("onChange" => "onOptionChange()")));
                        echo "
                    ";
                        // line 426
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["value"]) ? $context["value"] : null), array(), "array"), 'errors');
                        echo "
                </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 429
                    echo "        </ul>
    ";
                }
            }
            // line 431
            echo "<dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                    <dt>数量</dt>
                                    <dd>
                                        ";
            // line 434
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'widget');
            echo "
                                        ";
            // line 435
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'errors');
            echo "
                                    </dd>
                                </dl>

                                <div class=\"extra-form\">
                                    ";
            // line 440
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 441
                echo "                                        ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 442
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                        ";
                }
                // line 444
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 445
            echo "                                </div>

                               ";
            // line 448
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul id=\"detail_cart_box__insert_button\" class=\"row\">
                                        <li class=\"\"><button type=\"submit\" id=\"add-cart\" class=\"btn btn-primary btn-block prevention-btn prevention-mask hover\"><img src=\"/img/detail/btn_buy_text.png\" alt=\"購入する\" /></button></li>
                                    </ul>


\t\t\t\t<p class=\"cf\"><span class=\"red\">※数量を変更される際は半角数字でご入力下さい</span></p>
                                    ";
            // line 455
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 456
                echo "                                    <ul id=\"detail_cart_box__favorite_button\" class=\"row\">
                                        ";
                // line 457
                if (((isset($context["is_favorite"]) ? $context["is_favorite"] : null) == false)) {
                    // line 458
                    echo "                                            <li class=\"\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block prevention-btn prevention-mask hover\"><img src=\"/img/detail/btn_fav_text.png\" alt=\"お気に入りに追加する\" /></button></li>
                                        ";
                } else {
                    // line 460
                    echo "                                            <li class=\"\"><button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block\" disabled=\"disabled\">お気に入りに追加済みです</button></li>
                                        ";
                }
                // line 462
                echo "                                    </ul>
                                    ";
            }
            // line 464
            echo "                                </div>
                            ";
        } else {
            // line 466
            echo "                                ";
            // line 467
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                    <ul class=\"row\">
                                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                                    </ul>
                                </div>
                            ";
        }
        // line 473
        echo "

\t\t\t\t<p class=\"bnr_deliv_free\"><img src=\"/img/detail/deliv_free.jpg\" alt=\"5000円以上お買い上げで送料無料\" /></p>
                        </div>
                        <!--▲買い物かご-->
                        ";
        // line 478
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </form>

                   

                </div>
                <!-- /.item_detail -->

            </section>
            <!--詳細ここまで-->
        </div>

        ";
        // line 491
        echo "        ";
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())) {
            // line 492
            echo "        <div id=\"sub_area\" class=\"row smart_hide\">
            <div class=\"\">
                <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 494
            echo twig_include($this->env, $context, twig_template_from_string($this->env, nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array()))));
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 498
        echo "

\t<ul class=\"bnr_list\">
\t\t<li class=\"col-sm-4 hover li01\"><a href=\"";
        // line 501
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "size\">
\t\t\t<div class=\"img_box\">
\t\t\t\t<p><img src=\"/img/detail/bnr_size.jpg\" alt=\"サイズ表\" /></p>
\t\t\t</div>
\t\t\t<div class=\"text_box\">
\t\t\t\t<p>サイズ表</p>
\t\t\t</div>
\t\t</a></li>

\t\t<li class=\"col-sm-4 hover li02\"><a href=\"";
        // line 510
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "size#column_material\">
\t\t\t<div class=\"img_box\">
\t\t\t\t<p><img src=\"/img/detail/bnr_material.jpg\" alt=\"生地とケア\" /></p>
\t\t\t</div>
\t\t\t<div class=\"text_box\">
\t\t\t\t<p>生地とケア</p>
\t\t\t</div>
\t\t</a></li>

\t\t<!--<li class=\"col-sm-4 hover li03\"><a href=\"";
        // line 519
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">
\t\t\t<div class=\"img_box\">
\t\t\t\t<p><img src=\"/img/detail/bnr_wrap.jpg\" alt=\"プレゼント用ラッピング\" /></p>
\t\t\t</div>
\t\t\t<div class=\"text_box\">
\t\t\t\t<p>プレゼント用ラッピング</p>
\t\t\t</div>
\t\t</a></li>-->
\t</ul>
    </div>
    <!-- ▲item_detail▲ -->
";
        // line 539
        echo "
<style>
.option_description {
  -moz-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  display: none;
  min-width: 50%;
  max-width: 80%;
  max-height: 80%;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.2);
  overflow:auto;
}
.option_description .modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.option_description .modal-header .plainmodal-close {
  margin-top: -2px;
  float: right;
  font-size: 2.1rem;
  font-weight: 700;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
}
.option_description .modal-header .plainmodal-close:hover {
  opacity: 0.5;
}

.option_description .modal-header > p {
  margin: 1% 0 0 0;
  font-size: 1.4rem;
  line-height: 1.42857143;
}

.option_description .modal-title {
  color: #333333;
  font-size: 1.8rem;
  font-weight: 500;
  font-family: inherit;
  margin: 0;
}
.option_description .modal-body {
  padding: 3%;
  font-size: 1.4rem;
  line-height: 1.42857143;
  color: #333;
}
.option_description .modal-body > p {
    margin: 0 0 3%;
}
.option_description .modal-body > div {
    margin-bottom: 2%;
    overflow: hidden;
    padding-bottom: 2%;
}
.option_description .modal-body > div > p {
    margin: 2% 0 0;
}
.option_description img {
    float: none;
    margin: 1% auto 0;
    width: 40%;
    height: auto;
    display: block;
}
.option_description h3 {
    margin: 0;
    background: #efefef;
    padding: 1%;
}
.option_description .minus {
    color: #2980b9;
}
@media screen and (min-width: 768px) {
    .option_description img {
        float: left;
        margin: 1% 4% 0 0;
        width: 15%;
    }
}

.option_description span.small {
    font-size: 1.2rem;
}

.option_description .btn-info {
    width: 74px;
    float: none;
    margin: 15px auto 10px;
    border: 0;
    padding: 4px 0;
    display: block;
}

.option_description .btn-info:hover {
    background: #474757;
}

@media only screen and (min-width: 768px) {
    .option_description .btn-info {
    \tfloat: right;
        margin: 0 10px 0 0;
    }

}

</style>

";
        // line 653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProductOptions"]) ? $context["ProductOptions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
            // line 654
            echo "    ";
            $context["Option"] = $this->getAttribute($context["ProductOption"], "Option", array());
            // line 655
            echo "    ";
            if (($this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "description_flg", array()) == 1)) {
                // line 656
                echo "        <div id=\"option_description_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "id", array()), "html", null, true);
                echo "\" class=\"option_description\">
            <div class=\"modal-header\">
                <div class=\"plainmodal-close\">&#215;</div>
                <h4 class=\"modal-title\">";
                // line 659
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "name", array()), "html", null, true);
                echo "</h4>
                <p>";
                // line 660
                echo nl2br($this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "description", array()));
                echo "</p>
            </div>


            ";
                // line 664
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "OptionCategories", array())) > 0)) {
                    // line 665
                    echo "                ";
                    // line 666
                    echo "                ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "Type", array()), "id", array()) == 3) || ($this->getAttribute($this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "Type", array()), "id", array()) == 4))) {
                        // line 667
                        echo "                    <div class=\"modal-body\">
                        ";
                        // line 668
                        $context["optionCategory"] = $this->getAttribute($this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "OptionCategories", array()), 0, array(), "array");
                        // line 669
                        echo "                        <div>
                            ";
                        // line 670
                        if ($this->getAttribute((isset($context["optionCategory"]) ? $context["optionCategory"] : null), "option_image", array())) {
                            // line 671
                            echo "                                <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["optionCategory"]) ? $context["optionCategory"] : null), "option_image", array()), "html", null, true);
                            echo "\"/>
                            ";
                        }
                        // line 673
                        echo "                            ";
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["optionCategory"]) ? $context["optionCategory"] : null), "value", array())) > 0)) {
                            // line 674
                            echo "                                ";
                            if (($this->getAttribute((isset($context["optionCategory"]) ? $context["optionCategory"] : null), "value", array()) > 0)) {
                                // line 675
                                echo "                                    <p class=\"plus\">価格：";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["optionCategory"]) ? $context["optionCategory"] : null), "value", array())), "html", null, true);
                                echo " <span class=\"small\">+ 税</span></p>
                                ";
                            } elseif (($this->getAttribute(                            // line 676
(isset($context["optionCategory"]) ? $context["optionCategory"] : null), "value", array()) < 0)) {
                                // line 677
                                echo "                                    <p class=\"minus\">価格：";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute((isset($context["optionCategory"]) ? $context["optionCategory"] : null), "value", array())), "html", null, true);
                                echo " <span class=\"small\">+ 税</span></p>
                                ";
                            }
                            // line 679
                            echo "                            ";
                        }
                        // line 680
                        echo "                            ";
                        if (($this->getAttribute((isset($context["optionCategory"]) ? $context["optionCategory"] : null), "delivery_free_flg", array()) == 1)) {
                            // line 681
                            echo "                                <p>送料無料</p>
                            ";
                        }
                        // line 683
                        echo "                        </div>
                    </div>
                ";
                        // line 686
                        echo "                ";
                    } else {
                        // line 687
                        echo "                    <div class=\"modal-body\">
                        ";
                        // line 688
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "OptionCategories", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["optionCategory"]) {
                            // line 689
                            echo "                            ";
                            if (($this->getAttribute($context["optionCategory"], "disable_flg", array()) != 1)) {
                                // line 690
                                echo "                                <div>
                                    <h3>";
                                // line 691
                                echo twig_escape_filter($this->env, $this->getAttribute($context["optionCategory"], "name", array()), "html", null, true);
                                echo "</h3>
                                    ";
                                // line 692
                                if ($this->getAttribute($context["optionCategory"], "option_image", array())) {
                                    // line 693
                                    echo "                                        <img src=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                                    echo "/";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["optionCategory"], "option_image", array()), "html", null, true);
                                    echo "\"/>
                                    ";
                                }
                                // line 695
                                echo "                                    <p>";
                                echo nl2br($this->getAttribute($context["optionCategory"], "description", array()));
                                echo "</p>
                                    ";
                                // line 696
                                if ((twig_length_filter($this->env, $this->getAttribute($context["optionCategory"], "value", array())) > 0)) {
                                    // line 697
                                    echo "                                        ";
                                    if (($this->getAttribute($context["optionCategory"], "value", array()) > 0)) {
                                        // line 698
                                        echo "                                            <p class=\"plus\">価格：";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["optionCategory"], "value", array())), "html", null, true);
                                        echo " <span class=\"small\">+ 税</span></p>
                                        ";
                                    } elseif (($this->getAttribute(                                    // line 699
$context["optionCategory"], "value", array()) < 0)) {
                                        // line 700
                                        echo "                                            <p class=\"minus\">価格：";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["optionCategory"], "value", array())), "html", null, true);
                                        echo " <span class=\"small\">+ 税</span></p>
                                        ";
                                    }
                                    // line 702
                                    echo "                                    ";
                                }
                                // line 703
                                echo "                                    ";
                                if (($this->getAttribute($context["optionCategory"], "delivery_free_flg", array()) == 1)) {
                                    // line 704
                                    echo "                                        <p>送料無料</p>
                                    ";
                                }
                                // line 706
                                echo "                                    <button class=\"btn-info\" id=\"desc_btn_";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "id", array()), "html", null, true);
                                echo "_";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["optionCategory"], "id", array()), "html", null, true);
                                echo "\" >選択する</button>
                                </div>
                            ";
                            }
                            // line 709
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 710
                        echo "                    </div>
                ";
                    }
                    // line 712
                    echo "            ";
                }
                // line 713
                echo "        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "__string_template__94ad44e52a36d25ee8d6d4cad0a3f30bddd7bbe41f838db5cb803b306c913e0d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1231 => 713,  1228 => 712,  1224 => 710,  1218 => 709,  1209 => 706,  1205 => 704,  1202 => 703,  1199 => 702,  1193 => 700,  1191 => 699,  1186 => 698,  1183 => 697,  1181 => 696,  1176 => 695,  1168 => 693,  1166 => 692,  1162 => 691,  1159 => 690,  1156 => 689,  1152 => 688,  1149 => 687,  1146 => 686,  1142 => 683,  1138 => 681,  1135 => 680,  1132 => 679,  1126 => 677,  1124 => 676,  1119 => 675,  1116 => 674,  1113 => 673,  1105 => 671,  1103 => 670,  1100 => 669,  1098 => 668,  1095 => 667,  1092 => 666,  1090 => 665,  1088 => 664,  1081 => 660,  1077 => 659,  1070 => 656,  1067 => 655,  1064 => 654,  1060 => 653,  944 => 539,  930 => 519,  918 => 510,  906 => 501,  901 => 498,  894 => 494,  890 => 492,  887 => 491,  872 => 478,  865 => 473,  857 => 467,  855 => 466,  851 => 464,  847 => 462,  843 => 460,  839 => 458,  837 => 457,  834 => 456,  832 => 455,  823 => 448,  819 => 445,  813 => 444,  807 => 442,  804 => 441,  800 => 440,  792 => 435,  788 => 434,  783 => 431,  778 => 429,  769 => 426,  765 => 425,  759 => 424,  756 => 423,  750 => 421,  748 => 420,  743 => 419,  740 => 418,  736 => 417,  733 => 416,  730 => 415,  728 => 414,  709 => 397,  707 => 388,  704 => 386,  700 => 384,  694 => 381,  690 => 380,  687 => 379,  684 => 378,  679 => 375,  675 => 374,  672 => 373,  668 => 370,  665 => 369,  662 => 367,  660 => 366,  653 => 361,  646 => 357,  642 => 355,  639 => 354,  635 => 351,  629 => 349,  627 => 348,  620 => 343,  605 => 341,  578 => 339,  561 => 338,  554 => 337,  537 => 336,  529 => 330,  524 => 329,  520 => 328,  512 => 322,  506 => 319,  503 => 318,  495 => 316,  489 => 314,  487 => 313,  485 => 312,  482 => 311,  479 => 309,  473 => 307,  471 => 306,  468 => 305,  460 => 303,  458 => 302,  453 => 301,  451 => 300,  449 => 299,  445 => 297,  439 => 293,  428 => 291,  424 => 290,  420 => 288,  418 => 287,  412 => 284,  405 => 279,  398 => 275,  392 => 272,  389 => 271,  383 => 268,  377 => 265,  373 => 263,  365 => 261,  362 => 260,  341 => 258,  323 => 257,  321 => 256,  311 => 248,  309 => 235,  306 => 234,  302 => 232,  214 => 147,  210 => 146,  206 => 145,  201 => 144,  199 => 143,  196 => 142,  191 => 139,  187 => 137,  185 => 136,  162 => 115,  156 => 114,  149 => 112,  142 => 111,  139 => 110,  136 => 109,  132 => 108,  129 => 107,  127 => 106,  124 => 105,  118 => 103,  116 => 102,  113 => 101,  63 => 44,  57 => 41,  54 => 40,  52 => 39,  38 => 28,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__94ad44e52a36d25ee8d6d4cad0a3f30bddd7bbe41f838db5cb803b306c913e0d", "");
    }
}
