<?php

/* ProductOption/Resource/template/admin/Product/option.twig */
class __TwigTemplate_aaf7537201233bd25ed576bff1737c3d19c8822c2132dd51d4c267e55aecd6ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "ProductOption/Resource/template/admin/Product/option.twig", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script>
        onChangeType();
        function changeAction(action) {
            document.form1.action = action;
        }

        function onChangeType() {
            val = \$(\"select[id='admin_product_option_Type']\").val();
            if (val == 3 || val == 4) {
                \$(\"[id='admin_product_option_pricedisp_flg']\").attr(\"disabled\", \"disabled\");
                \$(\"[id='admin_product_option_pricedisp_flg']\").prop(\"checked\", false);
            } else {
                \$(\"[id='admin_product_option_pricedisp_flg']\").removeAttr(\"disabled\");
            }
        }

        \$(function () {
            \$('#copy_from_manage').click(function () {
                var val = \$('input[id=admin_product_option_manage_name]').val();
                \$('input[id=admin_product_option_name]').val(val);
            });
        });

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
                    newRanks[this.dataset.optionId] = oldRanks[i];
                    i++;
                });

                \$.ajax({
                url: '";
        // line 77
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_rank_move");
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

    </script>
";
    }

    // line 93
    public function block_main($context, array $blocks = array())
    {
        // line 94
        echo "<form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate>
    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

    <div class=\"row\" id=\"aside_wrap\">
        <div class=\"col-md-9\">

            <div class=\"box form-horizontal\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">オプション管理</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">
                            オプション管理名
                        </label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "manage_name", array()), 'errors');
        echo "
                            ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "manage_name", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">オプション表示タイトル</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                            ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                            <a class=\"btn-normal\" href=\"javascript:;\" id=\"copy_from_manage\"><span>管理名をコピー</span></a>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">説明文</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        echo "
                            ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">タイプ</label>
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Type", array()), 'errors');
        echo "
                            ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Type", array()), 'widget', array("attr" => array("onChange" => "onChangeType()")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">オプション説明</label>
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description_flg", array()), 'errors');
        echo "
                            ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description_flg", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\"></label>
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pricedisp_flg", array()), 'errors');
        echo "
                            ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pricedisp_flg", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\"></label>
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_required", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->


            <div class=\"box accordion\">
                <div class=\"box-header toggle active\">
                    <h3 class=\"box-title\">登録済オプション<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div>

                <div class=\"accpanel\" style=\"display: block;\">
                        <div class=\"sortable_list\">
                            <div class=\"tableish\">
                            ";
        // line 168
        if ((twig_length_filter($this->env, (isset($context["Options"]) ? $context["Options"] : null)) > 0)) {
            // line 169
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Options"]) ? $context["Options"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Option"]) {
                // line 170
                echo "                                    ";
                $context["type"] = $this->getAttribute($this->getAttribute($context["Option"], "Type", array()), "id", array());
                // line 171
                echo "                                    <div class=\"item_box tr\" data-option-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Option"], "id", array()), "html", null, true);
                echo "\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Option"], "rank", array()), "html", null, true);
                echo "\">
                                        <div class=\"icon_sortable td\">
                                            <svg class=\"cb cb-ellipsis-v\"><use xlink:href=\"#cb-ellipsis-v\" /></svg>
                                        </div>

                                        <div class=\"item_pattern td\">
                                            ";
                // line 177
                if ((((isset($context["type"]) ? $context["type"] : null) == 3) || ((isset($context["type"]) ? $context["type"] : null) == 4))) {
                    // line 178
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_text_category", array("option_id" => $this->getAttribute($context["Option"], "id", array()))), "html", null, true);
                    echo "\">
                                            ";
                } else {
                    // line 180
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category", array("option_id" => $this->getAttribute($context["Option"], "id", array()))), "html", null, true);
                    echo "\">
                                            ";
                }
                // line 182
                echo "                                                [ID:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Option"], "id", array()), "html", null, true);
                echo "]&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Option"], "manage_name", array()), "html", null, true);
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
                // line 193
                if ((((isset($context["type"]) ? $context["type"] : null) == 3) || ((isset($context["type"]) ? $context["type"] : null) == 4))) {
                    // line 194
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_text_category", array("option_id" => $this->getAttribute($context["Option"], "id", array()))), "html", null, true);
                    echo "\">詳細登録</a>
                                                        ";
                } else {
                    // line 196
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_category", array("option_id" => $this->getAttribute($context["Option"], "id", array()))), "html", null, true);
                    echo "\">選択肢登録</a>
                                                        ";
                }
                // line 198
                echo "                                                    </li>
                                                    <li>
                                                        ";
                // line 200
                if (($this->getAttribute((isset($context["TargetOption"]) ? $context["TargetOption"] : null), "id", array()) != $this->getAttribute($context["Option"], "id", array()))) {
                    // line 201
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_edit", array("id" => $this->getAttribute($context["Option"], "id", array()))), "html", null, true);
                    echo "\">編集</a>
                                                        ";
                } else {
                    // line 203
                    echo "                                                            <a>編集中</a>
                                                        ";
                }
                // line 205
                echo "                                                    </li>

                                                    <li>
                                                        <a href=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_delete", array("id" => $this->getAttribute($context["Option"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"このオプションを削除してもよろしいですか？\">削除</a>
                                                    </li>

                                                    ";
                // line 211
                if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                    // line 212
                    echo "                                                        ";
                    $context["up_action"] = $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_up", array("id" => $this->getAttribute($context["Option"], "id", array())));
                    // line 213
                    echo "                                                        <li>
                                                            <a href=\"?\" onclick=\"changeAction('";
                    // line 214
                    echo twig_escape_filter($this->env, (isset($context["up_action"]) ? $context["up_action"] : null), "html", null, true);
                    echo "'); document.form1.submit(); return false;\">
                                                                上へ
                                                            </a>
                                                        </li>
                                                    ";
                }
                // line 219
                echo "
                                                    ";
                // line 220
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    // line 221
                    echo "                                                        ";
                    $context["down_action"] = $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_down", array("id" => $this->getAttribute($context["Option"], "id", array())));
                    // line 222
                    echo "                                                        <li>
                                                            <a href=\"?\" onclick=\"changeAction('";
                    // line 223
                    echo twig_escape_filter($this->env, (isset($context["down_action"]) ? $context["down_action"] : null), "html", null, true);
                    echo "'); document.form1.submit(); return false;\">
                                                                下へ
                                                            </a>
                                                        </li>
                                                    ";
                }
                // line 228
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "
                            ";
        } else {
            // line 235
            echo "                                <div class=\"box-body no-padding\">
                                    <div class=\"data-empty\">
                                        <svg class=\"cb cb-inbox\"><use xlink:href=\"#cb-inbox\" /></svg>
                                        <p>データはありません</p>
                                    </div>
                                </div><!-- /.box-body -->
                            ";
        }
        // line 242
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

                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <a class=\"btn btn-default btn-block btn-lg\" href=\"";
        // line 263
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_product_option_new");
        echo "\">新規登録画面</a>
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
        return "ProductOption/Resource/template/admin/Product/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 263,  436 => 242,  427 => 235,  423 => 233,  405 => 228,  397 => 223,  394 => 222,  391 => 221,  389 => 220,  386 => 219,  378 => 214,  375 => 213,  372 => 212,  370 => 211,  362 => 208,  357 => 205,  353 => 203,  347 => 201,  345 => 200,  341 => 198,  335 => 196,  329 => 194,  327 => 193,  310 => 182,  304 => 180,  298 => 178,  296 => 177,  284 => 171,  281 => 170,  263 => 169,  261 => 168,  243 => 153,  234 => 147,  230 => 146,  221 => 140,  217 => 139,  208 => 133,  204 => 132,  195 => 126,  191 => 125,  181 => 118,  177 => 117,  168 => 111,  164 => 110,  146 => 95,  143 => 94,  140 => 93,  121 => 77,  64 => 23,  60 => 22,  56 => 21,  51 => 20,  48 => 19,  42 => 17,  36 => 16,  32 => 11,  30 => 14,  28 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProductOption/Resource/template/admin/Product/option.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/ProductOption/Resource/template/admin/Product/option.twig");
    }
}
