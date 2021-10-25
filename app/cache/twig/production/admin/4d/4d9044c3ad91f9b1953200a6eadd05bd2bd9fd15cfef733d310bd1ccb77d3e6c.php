<?php

/* __string_template__ab23885313058e8163d452c7ebff5ecdc59b7a445a73c6f30e174f0724fe926c */
class __TwigTemplate_60c530a09dfef87ec15694f90ea75b9cd14311939ca2162e7f5089dc588cd14a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__ab23885313058e8163d452c7ebff5ecdc59b7a445a73c6f30e174f0724fe926c", 11);
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
        // line 13
        $context["menus"] = array(0 => "product", 1 => "product_option");
        // line 14
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 17
    public function block_sub_title($context, array $blocks = array())
    {
        echo "オプション管理";
    }

    // line 20
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/fileupload/jquery.fileupload.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/fileupload/jquery.fileupload-ui.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
    <style>
        .ui-state-highlight {
            height: 148px;
            border: dashed 1px #ccc;
            background: #fff;
        }
        .btn {
            white-space: normal;
        }
    </style>
";
    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/vendor/jquery.ui.widget.js\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.iframe-transport.js\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload.js\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload-process.js\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/fileupload/jquery.fileupload-validate.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
    <script>
        function changeAction(action) {
            document.form1.action = action;
        }

        \$(function () {

            \$(function () {
                var oldRanks = [];
                // 画面の中のrank一覧を保持
                \$(\"div.tableish > .item_box\").each(function () {
                    oldRanks.push(this.dataset.rank);
                });
                // rsort
                oldRanks.sort(function(a, b) {
                    return a - b;
                }).reverse();

                \$(\"div.tableish\").sortable({
                    items: '> .item_box',
                    cursor: 'move',
                    update: function (e, ui) {
                        \$(\"body\").append(\$('<div class=\"modal-backdrop in\"></div>'));
                        updateRank();
                    }
                });

                var updateRank = function () {
                    // 並び替え後にrankを更新
                    var newRanks = {};
                    var i = 0;
                    \$(\"div.tableish > .item_box\").each(function () {
                        newRanks[this.dataset.optionCategoryId] = oldRanks[i];
                        i++;
                    });

                \$.ajax({
                        url: '";
        // line 84
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_rank_move");
        echo "',
                        type: 'POST',
                        data: newRanks,
                    }).done(function (data) {
                        console.log(data);
                        \$(\".modal-backdrop\").remove();
                    }).fail(function () {
                        console.log('fail');
                        \$(\".modal-backdrop\").remove();
                    });
                };
            });

            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function (event, ui) {
                    updateRank();
                }
            });

            var proto_img = ''
                    + '<li class=\"ui-state-default\">'
                    + '<img src=\"__path__\" />'
                    + '<a class=\"delete-image\">'
                    + '<svg class=\"cb cb-close\">'
                    + '<use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-close\">'
                    + '</svg>'
                    + '</a>'
                    + '</li>';
            var proto_add = '";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_images", array()), "vars", array()), "prototype", array()), 'widget');
        echo "';
            var proto_del = '";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete_images", array()), "vars", array()), "prototype", array()), 'widget');
        echo "';
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 118
            echo "                var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "'));
                var \$widget = \$('";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["image"], 'widget');
            echo "');
                \$widget.val('";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "');
                \$(\"#thumb\").append(\$img.append(\$widget));
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 124
            echo "                var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["add_image"], "vars", array()), "value", array()), "html", null, true);
            echo "'));
                var \$widget = \$('";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
                \$widget.val('";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["add_image"], "vars", array()), "value", array()), "html", null, true);
            echo "');
                \$(\"#thumb\").append(\$img.append(\$widget));
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 130
            echo "                \$(\"#thumb\").append('";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                var hideSvg = function () {
                    if (\$(\"#thumb li\").length > 0) {
                        \$(\"#icon_no_image\").css(\"display\", \"none\");
                    } else {
                        \$(\"#icon_no_image\").css(\"display\", \"\");
                    }
                };
                hideSvg();
                // 画像削除時
                var count_del = 0;
                \$(\"#thumb\").on(\"click\", \".delete-image\", function () {
                    var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                    var src = \$(this).prev().attr('src')
                            .replace('";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "', '')
                            .replace('";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
        echo "', '');
                    \$new_delete_image.val(src);
                    \$(\"#thumb\").append(\$new_delete_image);
                    \$(this).parent(\"li\").remove();
                    hideSvg();
                    count_del++;
                });
                var count_add = ";
        // line 153
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "add_images", array())), 0), "html", null, true);
        echo ";
                        \$('#";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_image", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').fileupload({
                    url: \"";
        // line 155
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_image_add");
        echo "\",
                    type: \"post\",
                    dataType: 'json',
                    done: function (e, data) {
                        \$('#progress').hide();
                        \$.each(data.result.files, function (index, file) {
                            var path = '";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_temp_urlpath", array()), "html", null, true);
        echo "/' + file;
                            var \$img = \$(proto_img.replace(/__path__/g, path));
                            var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                            \$new_img.val(file);
                            \$child = \$img.append(\$new_img);
                            \$('#thumb').empty();
                            \$('#thumb').append(\$child);
                            count_add++;
                        });
                        hideSvg();
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
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_image", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').click();
                });
            });

    </script>
";
    }

    // line 207
    public function block_main($context, array $blocks = array())
    {
        // line 208
        echo "
<form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate>
    ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

    <div class=\"row\" id=\"aside_wrap\">
        <div class=\"col-md-9\">

            <div class=\"box form-horizontal\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">選択肢管理：";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "manage_name", array()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">
                            ";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "name", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                        </label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                            ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "value", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), 'errors');
        echo "
                            ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "delivery_free_flg", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_free_flg", array()), 'errors');
        echo "
                            ";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delivery_free_flg", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "description", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        echo "
                            ";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">画像</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            <div class=\"photo_files\" id=\"drag-drop-area\">
                                <svg id=\"icon_no_image\" class=\"cb cb-photo no-image\"> <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-photo\"></svg>
                                <ul id=\"thumb\" class=\"clearfix\"></ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group marB30\">
                        <div class=\"col-sm-offset-2 col-sm-9 col-lg-10 \">

                            <div id=\"progress\" class=\"progress progress-striped active\" style=\"display:none;\">
                                <div class=\"progress-bar progress-bar-info\"></div>
                            </div>

                            ";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_image", array()), 'widget', array("attr" => array("accept" => "image/*", "style" => "display:none;")));
        echo "
                            ";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "option_image", array()), 'errors');
        echo "
                            <a id=\"file_upload\" class=\"with-icon\">
                                <svg class=\"cb cb-plus\"> <use xlink:href=\"#cb-plus\" /></svg>ファイルをアップロード
                            </a>

                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "disable_flg", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "disable_flg", array()), 'errors');
        echo "
                            ";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "disable_flg", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "init_flg", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "init_flg", array()), 'errors');
        echo "
                            ";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "init_flg", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->


            <div class=\"box accordion\">
                <div class=\"box-header toggle active\">
                    <h3 class=\"box-title\">登録済選択肢<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div>

                <div class=\"accpanel\" style=\"display: block;\">
                        <div class=\"sortable_list\">
                            <div class=\"tableish\">
                            ";
        // line 300
        if ((twig_length_filter($this->env, (isset($context["OptionCategories"]) ? $context["OptionCategories"] : null)) > 0)) {
            // line 301
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["OptionCategories"]) ? $context["OptionCategories"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["OptionCategory"]) {
                // line 302
                echo "                                    <div class=\"item_box tr\" data-option-category-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["OptionCategory"], "id", array()), "html", null, true);
                echo "\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["OptionCategory"], "rank", array()), "html", null, true);
                echo "\">
                                        <div class=\"icon_sortable td\">
                                            <svg class=\"cb cb-ellipsis-v\"><use xlink:href=\"#cb-ellipsis-v\" /></svg>
                                        </div>

                                        <div class=\"item_pattern td\">
                                            <a href=\"";
                // line 308
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_edit", array("option_id" => $this->getAttribute($context["OptionCategory"], "option_id", array()), "id" => $this->getAttribute($context["OptionCategory"], "id", array()))), "html", null, true);
                echo "\">
                                            ";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute($context["OptionCategory"], "name", array()), "html", null, true);
                echo "
                                            </a>
                                        </div>

                                        <div class=\"icon_edit td\">
                                            <div class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                                    <svg class=\"cb cb-ellipsis-h\"><use xlink:href=\"#cb-ellipsis-h\" /></svg>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li>
                                                        ";
                // line 320
                if (($this->getAttribute((isset($context["TargetOptionCategory"]) ? $context["TargetOptionCategory"] : null), "id", array()) != $this->getAttribute($context["OptionCategory"], "id", array()))) {
                    // line 321
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_edit", array("option_id" => $this->getAttribute($context["OptionCategory"], "option_id", array()), "id" => $this->getAttribute($context["OptionCategory"], "id", array()))), "html", null, true);
                    echo "\">編集</a>
                                                        ";
                } else {
                    // line 323
                    echo "                                                            <a>編集中</a>
                                                        ";
                }
                // line 325
                echo "                                                    </li>
                                                    <li>
                                                        <a href=\"";
                // line 327
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_delete", array("option_id" => $this->getAttribute($context["OptionCategory"], "option_id", array()), "id" => $this->getAttribute($context["OptionCategory"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"この選択肢を削除してもよろしいですか？\">削除</a>
                                                    </li>
                                                    ";
                // line 329
                if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                    // line 330
                    echo "                                                        ";
                    $context["up_action"] = $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_up", array("option_id" => $this->getAttribute($context["OptionCategory"], "option_id", array()), "id" => $this->getAttribute($context["OptionCategory"], "id", array())));
                    // line 331
                    echo "                                                        <li>
                                                            <a href=\"?\" onclick=\"changeAction('";
                    // line 332
                    echo twig_escape_filter($this->env, (isset($context["up_action"]) ? $context["up_action"] : null), "html", null, true);
                    echo "');
                                                                    document.form1.submit();
                                                                    return false;\">
                                                                上へ
                                                            </a>
                                                        </li>
                                                    ";
                }
                // line 339
                echo "
                                                    ";
                // line 340
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    // line 341
                    echo "                                                        ";
                    $context["down_action"] = $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_down", array("option_id" => $this->getAttribute($context["OptionCategory"], "option_id", array()), "id" => $this->getAttribute($context["OptionCategory"], "id", array())));
                    // line 342
                    echo "                                                        <li>
                                                            <a href=\"?\" onclick=\"changeAction('";
                    // line 343
                    echo twig_escape_filter($this->env, (isset($context["down_action"]) ? $context["down_action"] : null), "html", null, true);
                    echo "');
                                                                    document.form1.submit();
                                                                    return false;\">
                                                                下へ
                                                            </a>
                                                        </li>
                                                    ";
                }
                // line 350
                echo "                                                </ul>
                                            </div><!-- /.dropdown -->
                                        </div><!-- /.icon_edit -->
                                    </div><!-- /.item_box -->
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OptionCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "
                            ";
        } else {
            // line 357
            echo "                                <div class=\"box-body no-padding\">
                                    <div class=\"data-empty\">
                                        <svg class=\"cb cb-inbox\"><use xlink:href=\"#cb-inbox\" /></svg>
                                        <p>データはありません</p>
                                    </div>
                                </div><!-- /.box-body -->
                            ";
        }
        // line 364
        echo "
                        </div><!-- /.tableish -->
                    </div><!-- /.sortable_list -->
                </div><!-- /.accpanel -->
            </div><!-- /.box -->
        </div><!-- /.col-md-9 -->


        <div id=\"aside_column\" class=\"col-md-3\">
            <div class=\"col_inner\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">

                        <div class=\"row text-center\" style=\"margin-bottom: 20px;\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form1.submit();\">この内容で登録</button>
                            </div>
                        </div>

                        <div class=\"row text-center\" style=\"margin-bottom: 20px;\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <a href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category_new", array("option_id" => $this->getAttribute((isset($context["Option"]) ? $context["Option"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-block btn-lg\">新規登録</a>
                            </div>
                        </div>

                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                ";
        // line 391
        $context["back_action"] = $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option");
        // line 392
        echo "                                <a href=\"?\" class=\"btn btn-default btn-block btn-lg\" onclick=\"changeAction('";
        echo twig_escape_filter($this->env, (isset($context["back_action"]) ? $context["back_action"] : null), "html", null, true);
        echo "'); document.form1.submit(); return false;\">オプション一覧に戻る</a>
                            </div>
                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col_inner -->
        </div><!-- /#aside_column -->

    </div><!-- /#aside_wrap -->


</form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ab23885313058e8163d452c7ebff5ecdc59b7a445a73c6f30e174f0724fe926c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 392,  693 => 391,  684 => 385,  661 => 364,  652 => 357,  648 => 355,  630 => 350,  620 => 343,  617 => 342,  614 => 341,  612 => 340,  609 => 339,  599 => 332,  596 => 331,  593 => 330,  591 => 329,  584 => 327,  580 => 325,  576 => 323,  570 => 321,  568 => 320,  554 => 309,  550 => 308,  538 => 302,  520 => 301,  518 => 300,  500 => 285,  496 => 284,  491 => 282,  484 => 278,  480 => 277,  475 => 275,  464 => 267,  460 => 266,  438 => 247,  434 => 246,  429 => 244,  422 => 240,  418 => 239,  413 => 237,  406 => 233,  402 => 232,  397 => 230,  390 => 226,  386 => 225,  380 => 222,  372 => 217,  362 => 210,  358 => 208,  355 => 207,  345 => 200,  303 => 161,  294 => 155,  290 => 154,  286 => 153,  276 => 146,  272 => 145,  257 => 132,  248 => 130,  243 => 129,  234 => 126,  230 => 125,  223 => 124,  218 => 123,  209 => 120,  205 => 119,  198 => 118,  194 => 117,  190 => 116,  186 => 115,  152 => 84,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  86 => 39,  82 => 38,  77 => 37,  74 => 36,  57 => 22,  52 => 21,  49 => 20,  43 => 17,  37 => 16,  33 => 11,  31 => 14,  29 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ab23885313058e8163d452c7ebff5ecdc59b7a445a73c6f30e174f0724fe926c", "");
    }
}
