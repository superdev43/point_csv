<?php

/* __string_template__2592c058fd1c42a878619144417af6389827fb79311ecb6049558e2079c17295 */
class __TwigTemplate_b265c0234ee23c2bca153e90b41a23c2bc41c01aaad301716cb0f5199964d522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 17
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__2592c058fd1c42a878619144417af6389827fb79311ecb6049558e2079c17295", 17);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        // line 19
        $context["menus"] = array(0 => "product", 1 => "product_edit");
        // line 24
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 17
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 22
    public function block_sub_title($context, array $blocks = array())
    {
        echo "商品登録";
    }

    // line 26
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 27
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/fileupload/jquery.fileupload.css\">
<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/fileupload/jquery.fileupload-ui.css\">
<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
<style>
    .ui-state-highlight {
        height: 148px;
        border: dashed 1px #ccc;
        background: #fff;
    }
</style>
";
    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        // line 40
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/vendor/jquery.ui.widget.js\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.iframe-transport.js\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload.js\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload-process.js\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload-validate.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
<script>
\$(function() {
    \$(\"#thumb\").sortable({
        cursor: 'move',
        opacity: 0.7,
        placeholder: 'ui-state-highlight',
        update: function (event, ui) {
            updateRank();
        }
    });
    ";
        // line 56
        if (((isset($context["has_class"]) ? $context["has_class"] : null) == false)) {
            // line 57
            echo "    if (\$(\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock_unlimited", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").prop(\"checked\")) {
        \$(\"#";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
    } else {
        \$(\"#";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").removeAttr(\"disabled\");
    }
    \$(\"#";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock_unlimited", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").on(\"click change\", function () {
        if (\$(this).prop(\"checked\")) {
            \$(\"#";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
        } else {
            \$(\"#";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\").removeAttr(\"disabled\");
        }
    });
    ";
        }
        // line 70
        echo "    var proto_img = ''
            + '<li class=\"ui-state-default\">'
            + '<img src=\"__path__\" />'
            + '<a class=\"delete-image\">'
            + '<svg class=\"cb cb-close\">'
            + '<use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-close\"></use>'
            + '</svg>'
            + '</a>'
            + '</li>';
    var proto_add = '";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_images", array()), "vars", array()), "prototype", array()), 'widget');
        echo "';
    var proto_del = '";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete_images", array()), "vars", array()), "prototype", array()), 'widget');
        echo "';
    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "    var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "'));
    var \$widget = \$('";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["image"], 'widget');
            echo "');
    \$widget.val('";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "');
    \$(\"#thumb\").append(\$img.append(\$widget));
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 88
            echo "    var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["add_image"], "vars", array()), "value", array()), "html", null, true);
            echo "'));
    var \$widget = \$('";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
    \$widget.val('";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["add_image"], "vars", array()), "value", array()), "html", null, true);
            echo "');
    \$(\"#thumb\").append(\$img.append(\$widget));
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 94
            echo "    \$(\"#thumb\").append('";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    var hideSvg = function () {
        if (\$(\"#thumb li\").length > 0) {
            \$(\"#icon_no_image\").css(\"display\", \"none\");
        } else {
            \$(\"#icon_no_image\").css(\"display\", \"\");
        }
    };
    var updateRank = function () {
        \$(\"#thumb li\").each(function (index) {
            \$(this).find(\".rank_images\").remove();
            filename = \$(this).find(\"input[type='hidden']\").val();
            \$rank = \$('<input type=\"hidden\" class=\"rank_images\" name=\"rank_images[]\" />');
            \$rank.val(filename + '//' + parseInt(index + 1));
            \$(this).append(\$rank);
        });
    }
    hideSvg();
    updateRank();
    // 画像削除時
    var count_del = 0;
    \$(\"#thumb\").on(\"click\", \".delete-image\", function () {
        var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
        var src = \$(this).prev().attr('src')
                .replace('";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "/', '')
                .replace('";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
        echo "/', '');
        \$new_delete_image.val(src);
        \$(\"#thumb\").append(\$new_delete_image);
        \$(this).parent(\"li\").remove();
        hideSvg();
        updateRank();
        count_del++;
    });
    var count_add = ";
        // line 128
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_images", array())), 0), "html", null, true);
        echo ";
    \$('#";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "product_image", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').fileupload({dropZone: \$(\"#drag-drop-area\"),
        url: \"";
        // line 130
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_image_add");
        echo "\",
        type: \"post\",
        dataType: 'json',
        done: function (e, data) {
            \$('#progress').hide();
            \$.each(data.result.files, function (index, file) {
                var path = '";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "/' + file;
                var \$img = \$(proto_img.replace(/__path__/g, path));
                var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                \$new_img.val(file);
                \$child = \$img.append(\$new_img);
                \$('#thumb').append(\$child);
                count_add++;
            });
            hideSvg();
            updateRank();
        },
        fail: function (e, data) {
            alert('アップロードに失敗しました。');
        },
        always: function (e, data) {
            \$('#progress').hide();
            \$('#progress .progress-bar').width('0%');
        },
        start: function (e, data) {
            \$('#progress').show();
        },
        acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
        maxFileSize: 10000000,
        maxNumberOfFiles: 10,
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            \$('#progress .progress-bar').css(
                    'width',
                    progress + '%'
            );
        },
        processalways: function (e, data) {
            if (data.files.error) {
                alert(\"画像ファイルサイズが大きいか画像ファイルではありません。\");
            }
        }
    });
    // 画像アップロード
    \$('#file_upload').on('click', function () {
        \$('#";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "product_image", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').click();
    });
});

function fnClass(action) {
    document.form1.action = action;
    document.form1.submit();
    return false;
}

</script>

<script>
\tfunction SetOrderId() {
\t\tvar myDate = new Date();
\t\tvar Year = new String(myDate.getFullYear());
\t\tvar Month = new String(myDate.getMonth()+1);
\t\tvar Day = new String(myDate.getDate());
\t\tif ( Day.length == 1 ) Day = \"0\" + Day;
\t\tdocument.forms[0].elements['admin_product[list_update]'].value = Year + \"-\" + Month + \"-\" + Day;
\t}
\tif (\$('#admin_product_list_update').val() == \"\") {
\t\tSetOrderId();
\t}
</script>

<script>
    ";
        // line 205
        echo "    \$(function() {
        \$ex_thumb = \$(\".ex_thumb\");

        ";
        // line 209
        echo "        var hideSvg = function (\$thumbs) {
            \$.each(\$thumbs, function (i, thumb) {
                var \$thumb = \$(thumb);
                if (\$thumb.find('li').length > 0) {
                    \$(\"#icon_no_image_\" + \$thumb.data('key')).css(\"display\", \"none\");
                } else {
                    \$(\"#icon_no_image_\" + \$thumb.data('key')).css(\"display\", \"\");
                }
            });
        };
        var updateRank = function (\$thumbs) {
            \$.each(\$thumbs, function (i, thumb) {
                var \$thumb = \$(thumb);
                \$thumb.find('li').each(function (index) {
                    \$(this).find(\".rank_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    var input_name = \$thumb.data('key') + 'rank_images[]';
                    \$rank = \$('<input type=\"hidden\" class=\"rank_images\" name=\"' + input_name + '\" />');
                    \$rank.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$rank);
                });
            });
        };

        var createId = function(name, value_index, value_key, num) {
            return name + value_index + '_' + value_key + '_' + num;
        };

        var addInputImage = function(name, value_index, value_key, num, file) {
            return \$('<input type=\"hidden\" id=\"' + createId(name, value_index, value_key, num) + '\" value=\"' + file + '\" name=\"' + name + '[' + value_key + ']['+ num +']\" multiple=\"multiple\" accept=\"image\" style=\"display:none;\" class=\"ex_file_upload\">');
        };

        var deleteInputImage = function(name, value_index, value_key, num) {
            return \$('#' + createId(name, value_index, value_key, num)).remove();
        };

        ";
        // line 246
        echo "        \$.each(\$ex_thumb, function(i, thumb) {
            var \$thumb = \$(thumb);
            \$thumb.sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function (event, ui) {
                    updateRank();
                }
            });
        });

        var proto_img = ''
                + '<li class=\"ui-state-default\">'
                + '<img src=\"__path__\" />'
                + '<a class=\"delete-image\" data-input=\"__id__\">'
                + '<svg class=\"cb cb-close\">'
                + '<use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-close\"></use>'
                + '</svg>'
                + '</a>'
                + '</li>';
        var proto_add = '<input type=\"hidden\" id=\"ex_admin_product_add_images___name__\" name=\"ex_admin_product[add_images][__name__]\" required=\"required\" class=\"form-control\" />';
        var proto_del = '<input type=\"hidden\" id=\"ex_admin_product_delete_images___name__\" name=\"ex_admin_product[delete_images][__name__]\" required=\"required\" class=\"form-control\" />';

        var count_add = [];
        var wk_thumb = null;

        /**
         * 保存済みの画像を表示する
         */
        ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ex_images"]) ? $context["ex_images"] : null));
        foreach ($context['_seq'] as $context["thumb_key"] => $context["thumb_images"]) {
            // line 277
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["thumb_images"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 278
                echo "                ";
                if ($context["image"]) {
                    // line 279
                    echo "                    wk_thumb = \$('[data-value-key=";
                    echo twig_escape_filter($this->env, $context["thumb_key"], "html", null, true);
                    echo "]');     
                    if (wk_thumb) {
                        var image_value = '";
                    // line 281
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "value", array()), "html", null, true);
                    echo "';
                        var image_list = image_value.split(',');
                        count_add[wk_thumb.data('key')] = image_list.length > 0 ? image_list.length + 1 : 0;
                        \$.each(image_list, function(i, image){
                            if (image) {
                                var proto_add_img = proto_img.replace(/__path__/g, '";
                    // line 286
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                    echo "/' + image);
                                var \$img = \$(proto_add_img.replace(/__id__/g, createId('ex_product_images', wk_thumb.data('value-index'),wk_thumb.data('value-key'), i)));
                                wk_thumb.append(\$img);
                            
                                /**
                                 * input要素も一緒に作っておく
                                 */
                                \$('#detail_box__file_upload_' + wk_thumb.data('key')).append(
                                addInputImage('ex_product_images', wk_thumb.data('value-index'),wk_thumb.data('value-key'), i, image)
                                );
                            }
                        });
                    } else {
                        count_add[wk_thumb.data('key')] = 0;
                    }
                ";
                } else {
                    // line 302
                    echo "                    
                ";
                }
                // line 304
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "          
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['thumb_key'], $context['thumb_images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "
        ";
        // line 318
        echo "

        hideSvg(\$ex_thumb);
        updateRank(\$ex_thumb);

        ";
        // line 324
        echo "        ";
        // line 325
        echo "        var count_del = [];
        \$.each(\$ex_thumb, function(i, thumb){
            var \$thumb = \$(thumb);
            count_del[\$thumb.data('key')] = 0;
            \$thumb.on(\"click\", \".delete-image\", function () {
                var src = \$(this).prev().attr('src')
                        .replace('";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "/', '')
                        .replace('";
        // line 332
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
        echo "/', '');
                /**
                 * サムネイル削除
                 */
                \$(this).parent('li').remove();
                /**
                 * input削除
                 */
                \$('#' + \$(this).data('input')).remove();
                hideSvg([\$thumb]);
                updateRank([\$thumb]);

                /**
                 * POSTの追加
                 */
                \$('#detail_box__file_upload_' + \$thumb.data('key')).append(
                        addInputImage('ex_product_del_images', \$thumb.data('value-index'),\$thumb.data('value-key'), count_del[\$thumb.data('key')], src)
                );

                count_del[\$thumb.data('key')]++;
            });
        });

        ";
        // line 356
        echo "        \$.each(\$ex_thumb, function(i, thumb){
            var \$thumb = \$(thumb);
            \$('#'+ \$thumb.data('key')).fileupload({
                url: \"";
        // line 359
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_image_add");
        echo "\",
                type: \"post\",
                dataType: 'json',
                dropZone: \$('#drag-drop-area_' + \$thumb.data('key')),
                done: function (e, data) {
                    \$('#progress_' + \$thumb.data('key')).hide();
                    \$.each(data.result.files, function (index, file) {
                        /**
                         * サムネイルの追加
                         */
                        var path = '";
        // line 369
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "/' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add[\$thumb.data('key')]));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$thumb.append(\$child);

                        /**
                         * POSTの追加
                         */
                        \$('#detail_box__file_upload_' + \$thumb.data('key')).append(
                                addInputImage('ex_product_images', \$thumb.data('value-index'),\$thumb.data('value-key'), count_add[\$thumb.data('key')], file)
                        );

                        count_add[\$thumb.data('key')]++;

                    });
                    hideSvg([\$thumb]);
                    updateRank([\$thumb]);
                },
                fail: function (e, data) {
                    alert('";
        // line 390
        echo "アップロードに失敗しました。";
        echo "');
                },
                always: function (e, data) {
                    \$('#progress_' + \$thumb.data('key')).hide();
                    \$('#progress_' + \$thumb.data('key') + ' .progress-bar').width('0%');
                },
                start: function (e, data) {
                    \$('#progress_' + \$thumb.data('key')).show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('#progress_' + \$thumb.data('key') + ' .progress-bar').css(
                            'width',
                            progress + '%'
                    );
                },
                processalways: function (e, data) {
                    if (data.files.error) {
                        alert(\"画像ファイルサイズが大きいか画像ファイルではありません。\");
                    }
                }
            });
        });

        ";
        // line 418
        echo "        \$.each(\$ex_thumb, function(i, thumb) {
            var \$thumb = \$(thumb);
            \$('#file_upload_' + \$thumb.data('key')).on('click', function () {
                \$('#' + \$thumb.data('key')).click();
            });
        });

    });
</script>
";
    }

    // line 429
    public function block_main($context, array $blocks = array())
    {
        // line 430
        echo "            <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
            ";
        // line 431
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
            <div class=\"row\" id=\"aside_wrap\">
                <div id=\"detail_wrap\" class=\"col-md-9\">
                    <div id=\"detail_box\" class=\"box form-horizontal\">
                        <div id=\"detail_box__header\" class=\"box-header\">
                            <h3 class=\"box-title\">基本情報</h3>
                        </div><!-- /.box-header -->
                        <div id=\"detail_box__body\" class=\"box-body\">

                            ";
        // line 441
        echo "                            ";
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array())) {
            // line 442
            echo "                                <div id=\"detail_box__id\" class=\"form-group\">
                                    <label class=\"col-sm-3 col-lg-2 control-label\">商品ID</label>
                                    <div class=\"col-sm-9 col-lg-10 padT07\">";
            // line 444
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()), "html", null, true);
            echo "</div>
                                </div>
                            ";
        }
        // line 447
        echo "

                            ";
        // line 449
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
                            ";
        // line 450
        if (((isset($context["has_class"]) ? $context["has_class"] : null) == false)) {
            // line 451
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "product_type", array()), 'row', array("attr" => array("class" => "form-inline  padT07")));
            echo "
                            ";
        }
        // line 453
        echo "
                            <div id=\"detail_box__image\" class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"admin_product_product_image\">
                                    ";
        // line 456
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "product_image", array()), "vars", array()), "label", array()), "html", null, true);
        echo "<br>
                                    <span class=\"small\">620px以上推奨</span>
                                </label>
                                <div id=\"detail_files_box\" class=\"col-sm-9 col-lg-10\">
                                    <div class=\"photo_files\" id=\"drag-drop-area\">
                                        <svg id=\"icon_no_image\" class=\"cb cb-photo no-image\"> <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-photo\"></use></svg>
                                        <ul id=\"thumb\" class=\"clearfix\"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group marB30\">
                                <div id=\"detail_box__file_upload\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 \">

                                    <div id=\"progress\" class=\"progress progress-striped active\" style=\"display:none;\">
                                        <div class=\"progress-bar progress-bar-info\"></div>
                                    </div>

                                    ";
        // line 473
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "product_image", array()), 'widget', array("attr" => array("accept" => "image/*", "style" => "display:none;")));
        echo "
                                    <a id=\"file_upload\" class=\"with-icon\">
                                        <svg class=\"cb cb-plus\"> <use xlink:href=\"#cb-plus\" /></svg>ファイルをアップロード
                                    </a>

                                </div>
                            </div>

                            <div id=\"detail_description_box\" class=\"form-group\">
                                ";
        // line 482
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description_detail", array()), 'label');
        echo "
                                <div id=\"detail_description_box__detail\" class=\"col-sm-9 col-lg-10\">
                                    ";
        // line 484
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description_detail", array()), 'widget');
        echo "
                                    <div id=\"detail_description_box__list\" class=\"accordion marT15 marB20\"><a id=\"detail_description_box__list_toggle\" class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>一覧コメントを追加</a>
                                        <div class=\"accpanel padT08\">
                                            ";
        // line 487
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description_list", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 493
        if (((isset($context["has_class"]) ? $context["has_class"] : null) == false)) {
            // line 494
            echo "                            <div id=\"detail_box__price\" class=\"form-group\">
                                ";
            // line 495
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "price02", array()), 'label');
            echo "
                                <div id=\"detail_box__price02\" class=\"col-sm-3 col-lg-3\">
                                    ";
            // line 497
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "price02", array()), 'widget');
            echo "
                                    ";
            // line 498
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "price02", array()), 'errors');
            echo "
                                    <div id=\"detail_box__price01\" class=\"accordion marT15 marB20\"><a class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>通常価格を追加</a>
                                        <div class=\"accpanel padT08\">
                                            ";
            // line 501
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "price01", array()), 'widget');
            echo "
                                            ";
            // line 502
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "price01", array()), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 517
            echo "
<div id=\"detail_box__plg_deliveryplus_weight\" class=\"form-group\">
    ";
            // line 519
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["plgForm"]) ? $context["plgForm"] : null), "plg_deliveryplus_weight", array()), 'label');
            echo "
    <div class=\"col-sm-3 col-lg-3\">
        ";
            // line 521
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["plgForm"]) ? $context["plgForm"] : null), "plg_deliveryplus_weight", array()), 'widget');
            echo "
        ";
            // line 522
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["plgForm"]) ? $context["plgForm"] : null), "plg_deliveryplus_weight", array()), 'errors');
            echo "
    </div>
</div>
<div id=\"detail_box__plg_deliveryplus_size\" class=\"form-group\">
    ";
            // line 526
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["plgForm"]) ? $context["plgForm"] : null), "plg_deliveryplus_size", array()), 'label');
            echo "
    <div class=\"col-sm-3 col-lg-3\">
        ";
            // line 528
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["plgForm"]) ? $context["plgForm"] : null), "plg_deliveryplus_size", array()), 'widget');
            echo "
        ";
            // line 529
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["plgForm"]) ? $context["plgForm"] : null), "plg_deliveryplus_size", array()), 'errors');
            echo "
    </div>
</div>
<div id=\"detail_box__stock\" class=\"form-group\">
                                ";
            // line 533
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    <div class=\"row\">
                                        <div id=\"detail_box__unlimited\" class=\"col-xs-12 form-inline\">
                                            ";
            // line 537
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock", array()), 'widget');
            echo "
                                            ";
            // line 538
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock", array()), 'errors');
            echo "
                                            ";
            // line 539
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock_unlimited", array()), 'widget');
            echo "
                                            ";
            // line 540
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "stock_unlimited", array()), 'errors');
            echo "
                                        </div>
                                    </div>

                                </div>
                            </div>
                            ";
        }
        // line 547
        echo "
                            <div id=\"detail_category_box\" class=\"form-group\">
                                ";
        // line 549
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Category", array()), 'label');
        echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    <div class=\"accordion marT05\">
                                        <a id=\"detail_category_box__toggle\" class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>カテゴリを選択</a>
                                        <div id=\"detail_category_box__list\" class=\"accpanel padT08";
        // line 553
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Category", array()), "vars", array()), "valid", array()) == false)) {
            echo " has-error";
        }
        echo "\">
                                            ";
        // line 554
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Category", array()), 'widget');
        echo "
                                            ";
        // line 555
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Category", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id=\"detail_tag_box\" class=\"form-group\">
                                ";
        // line 562
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Tag", array()), 'label');
        echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    <div class=\"accordion marT05\">
                                        <a id=\"detail_tags_box__toggle\" class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tag"), "html", null, true);
        echo "を選択</a>
                                        <div id=\"detail_tags_box__list\" class=\"accpanel padT08\">
                                            ";
        // line 567
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Tag", array()), 'widget');
        echo "
                                            ";
        // line 568
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Tag", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id=\"detail_list_update_box\" class=\"form-group\">
                                ";
        // line 575
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "list_update", array()), 'label');
        echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    <div class=\"accordion marT05\">
                                        <a id=\"detail_tags_box__toggle\" class=\"toggle with-icon\"><svg class=\"cb cb-plus icon_plus\"> <use xlink:href=\"#cb-plus\" /></svg>更新日時を選択</a>
                                        <div id=\"detail_tags_box__list\" class=\"accpanel padT08\">
                                            ";
        // line 580
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "list_update", array()), 'widget');
        echo "
                                            ";
        // line 581
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "list_update", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"extra-form\">
                                ";
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 589
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 590
                echo "                                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            }
            // line 592
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 593
        echo "                            </div>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <div id=\"sub_detail_box\" class=\"box accordion form-horizontal\">
                        <div  id=\"sub_detail_box__toggle\" class=\"box-header toggle\">
                            <h3 class=\"box-title\">詳細な設定<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                        </div><!-- /.box-header -->
                        <div id=\"sub_detail_box__body\" class=\"box-body accpanel\">

                            ";
        // line 604
        if (((isset($context["has_class"]) ? $context["has_class"] : null) == false)) {
            // line 605
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "code", array()), 'row');
            echo "
                                ";
            // line 606
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "sale_limit", array()), 'row');
            echo "
                            ";
        }
        // line 608
        echo "
                            ";
        // line 609
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "search_word", array()), 'row');
        echo "
                            ";
        // line 610
        if (((isset($context["has_class"]) ? $context["has_class"] : null) == false)) {
            // line 611
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "delivery_date", array()), 'row');
            echo "
                                ";
            // line 612
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_product_delivery_fee", array())) {
                // line 613
                echo "                                <div id=\"sub_detail_box__delivery_fee\" class=\"form-group\">
                                    ";
                // line 614
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "delivery_fee", array()), 'label');
                echo "
                                    <div class=\"col-sm-3 col-lg-3\">
                                        ";
                // line 616
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "delivery_fee", array()), 'widget');
                echo "
                                    </div>
                                </div>
                                ";
            }
            // line 620
            echo "                                ";
            if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_product_tax_rule", array())) {
                // line 621
                echo "                                <div id=\"sub_detail_box__tax_rate\" class=\"form-group\">
                                    ";
                // line 622
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "tax_rate", array()), 'label');
                echo "
                                    <div class=\"col-sm-3 col-lg-3\">
                                        ";
                // line 624
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "class", array()), "tax_rate", array()), 'widget');
                echo "
                                    </div>
                                </div>
                                ";
            }
            // line 628
            echo "                            ";
        }
        // line 629
        echo "
                        </div>
                    </div>

                    <div id=\"free_box\" class=\"box accordion\">
                        <div id=\"free_box__body_toggle\" class=\"box-header toggle\">
                            <h3 class=\"box-title\">フリーエリア<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                        </div><!-- /.box-header -->
                        <div id=\"free_box__body\" class=\"box-body accpanel\">
                            ";
        // line 638
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "free_area", array()), 'widget', array("id" => "wysiwyg-area"));
        echo "
                        </div>
                    </div>

                    <div id=\"detail_box__footer\" class=\"row hidden-xs hidden-sm\">
                        <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                            <p><a href=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_page", array("page_no" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.product.search.page_no"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.product.search.page_no"), "method"), "1")) : ("1")))), "html", null, true);
        echo "?resume=1\">検索画面に戻る</a></p>
                        </div>
                    </div>

                </div><!-- /.col -->

                <div id=\"common_box\" class=\"col-md-3\">
                    <div class=\"col_inner\" id=\"aside_column\">
                        <div id=\"common_button_box\" class=\"box no-header\">
                            <div id=\"common_button_box__body\" class=\"box-body\">
                                <div id=\"common_button_box__status\" class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"form-group\">
                                            ";
        // line 657
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Status", array()), 'widget');
        echo "
                                            ";
        // line 658
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Status", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                                    <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg prevention-btn prevention-mask\" >商品を登録</button>
                                    </div>
                                </div>
                                <div id=\"common_button_box__class_set_button\" class=\"row text-center with-border\">
                                    <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                        ";
        // line 669
        if ((null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 670
            echo "                                            <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                規格設定
                                            </button>
                                        ";
        } else {
            // line 674
            echo "                                            <button class=\"btn btn-default btn-block btn-sm\" onclick=\"fnClass('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_class", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
            echo "');return false;\">
                                                規格設定
                                            </button>
                                        ";
        }
        // line 678
        echo "                                    </div>
                                </div>
                                ";
        // line 689
        echo "
<div id=\"common_button_box__option_button\" class=\"row text-center with-border\">
    <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
        ";
        // line 692
        if ((null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 693
            echo "            <button class=\"btn btn-default btn-block btn-sm\" disabled>
                オプション割当
            </button>
        ";
        } else {
            // line 697
            echo "            <button class=\"btn btn-default btn-block btn-sm\" onclick=\"fnClass('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_option", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
            echo "');return false;\">
                オプション割当
            </button>
        ";
        }
        // line 701
        echo "    </div>
</div><div id=\"common_button_box__operation_button\" class=\"row text-center with-border\">
                                    <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                        <ul class=\"col-3\">
                                            ";
        // line 705
        if ((null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 706
            echo "                                                <li>
                                                    <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                        確認
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                        複製
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class=\"btn btn-default btn-block btn-sm\" disabled>
                                                        削除
                                                    </button>
                                                </li>
                                            ";
        } else {
            // line 722
            echo "                                                <li>
                                                    <a class=\"btn btn-default btn-block btn-sm\" href=\"";
            // line 723
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_display", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
            echo "\" target=\"_blank\">
                                                        確認
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class=\"btn btn-default btn-block btn-sm\" href=\"";
            // line 728
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_copy", array("id" => $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()))), "html", null, true);
            echo "\"  ";
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
            echo " data-method=\"post\" data-message=\"この商品情報を複製してもよろしいですか？\">
                                                        複製
                                                    </a>
                                                </li>
                                                <li>
                                                     <a class=\"btn btn-default btn-block btn-sm\" href=\"";
            // line 733
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_delete", array("id" => $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-message=\"この商品情報を削除してもよろしいですか？\">
                                                        削除
                                                    </a>
                                                </li>
                                            ";
        }
        // line 738
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                        <div id=\"common_date_info_box\" class=\"box no-header\">
                            <div id=\"common_date_info_box__body\" class=\"box-body update-area\">
                                <p><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>登録日：";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "create_date", array())), "html", null, true);
        echo "</p>
                                <p><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>更新日：";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "update_date", array())), "html", null, true);
        echo "</p>
                            </div>
                        </div><!-- /.box -->

                        <div id=\"common_shop_note_box\" class=\"box\">
                            <div id=\"common_shop_note_box__header\" class=\"box-header\">
                                <h3 class=\"box-title\">ショップ用メモ欄</h3>
                            </div><!-- /.box-header -->
                            <div id=\"common_shop_note_box__body\" class=\"box-body\">
                                ";
        // line 756
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "note", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->

            </div>
            </form>

";
    }

    public function getTemplateName()
    {
        return "__string_template__2592c058fd1c42a878619144417af6389827fb79311ecb6049558e2079c17295";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1177 => 756,  1165 => 747,  1161 => 746,  1151 => 738,  1141 => 733,  1131 => 728,  1123 => 723,  1120 => 722,  1102 => 706,  1100 => 705,  1094 => 701,  1086 => 697,  1080 => 693,  1078 => 692,  1073 => 689,  1069 => 678,  1061 => 674,  1055 => 670,  1053 => 669,  1039 => 658,  1035 => 657,  1019 => 644,  1010 => 638,  999 => 629,  996 => 628,  989 => 624,  984 => 622,  981 => 621,  978 => 620,  971 => 616,  966 => 614,  963 => 613,  961 => 612,  956 => 611,  954 => 610,  950 => 609,  947 => 608,  942 => 606,  937 => 605,  935 => 604,  922 => 593,  916 => 592,  910 => 590,  907 => 589,  903 => 588,  893 => 581,  889 => 580,  881 => 575,  871 => 568,  867 => 567,  862 => 565,  856 => 562,  846 => 555,  842 => 554,  836 => 553,  829 => 549,  825 => 547,  815 => 540,  811 => 539,  807 => 538,  803 => 537,  796 => 533,  789 => 529,  785 => 528,  780 => 526,  773 => 522,  769 => 521,  764 => 519,  760 => 517,  751 => 502,  747 => 501,  741 => 498,  737 => 497,  732 => 495,  729 => 494,  727 => 493,  718 => 487,  712 => 484,  707 => 482,  695 => 473,  675 => 456,  670 => 453,  664 => 451,  662 => 450,  658 => 449,  654 => 447,  648 => 444,  644 => 442,  641 => 441,  629 => 431,  626 => 430,  623 => 429,  610 => 418,  580 => 390,  556 => 369,  543 => 359,  538 => 356,  512 => 332,  508 => 331,  500 => 325,  498 => 324,  491 => 318,  488 => 307,  481 => 305,  475 => 304,  471 => 302,  452 => 286,  444 => 281,  438 => 279,  435 => 278,  430 => 277,  426 => 276,  394 => 246,  356 => 209,  351 => 205,  321 => 175,  279 => 136,  270 => 130,  266 => 129,  262 => 128,  251 => 120,  247 => 119,  222 => 96,  213 => 94,  208 => 93,  199 => 90,  195 => 89,  188 => 88,  183 => 87,  174 => 84,  170 => 83,  163 => 82,  159 => 81,  155 => 80,  151 => 79,  140 => 70,  133 => 66,  128 => 64,  123 => 62,  118 => 60,  113 => 58,  108 => 57,  106 => 56,  91 => 44,  87 => 43,  83 => 42,  79 => 41,  74 => 40,  71 => 39,  57 => 28,  52 => 27,  49 => 26,  43 => 22,  37 => 21,  33 => 17,  31 => 24,  29 => 19,  11 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__2592c058fd1c42a878619144417af6389827fb79311ecb6049558e2079c17295", "");
    }
}
