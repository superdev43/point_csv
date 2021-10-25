<?php

/* __string_template__6aab9e4e31cbf6d2c09625f3cdd25df6a57827356ffe657bc2ca2056cc7d99e6 */
class __TwigTemplate_d1707b231c20525040685db443ec8b6753d2d4d9e4b609d45617cf86f61b05d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__6aab9e4e31cbf6d2c09625f3cdd25df6a57827356ffe657bc2ca2056cc7d99e6", 10);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["menus"] = array(0 => "mailmagazine", 1 => "mailmagazine_history");
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "メルマガ管理";
    }

    // line 15
    public function block_sub_title($context, array $blocks = array())
    {
        echo "配信履歴";
    }

    // line 17
    public function block_javascript($context, array $blocks = array())
    {
        // line 18
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>

<script>
function fnDelete(action) {
    if (confirm('この履歴を削除してもよろしいですか？')) {
        document.form1.action = action;
        document.form1.submit();
    }
}
function changeAction(action) {
    document.form1.action = action;
    document.form1.submit();
}
function sendMail(id, offset, token) {
    \$.post('";
        // line 35
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_commit");
        echo "', { id : id, offset: offset || 0, _token:token })
        .done(function(res) {
            \$('#send-progress').css('width', (res.count / res.total * 100) + '%');
            \$('#send-status-message').text(res.count + ' / ' + res.total + ' 件処理完了');
            if (res.count < res.total) {
                sendMail(id, res.count);
            } else {
                \$('.modal-title').text('送信完了');
                \$('#send-progress').removeClass('progress-bar-striped active');
                \$('.modal-footer').show();
            }
        })
        .fail(function() {
            alert('エラーが発生しました。');
        });
}
\$(function () {
    var lock = false;
    \$('.retry-btn').click(function(e) {
        e.preventDefault();
        if (!lock && confirm('配信失敗と未配信のメールを再送します。\\nよろしいですか？')) {
            lock = true;
            \$('#sendModal').modal('show');
            var id = \$(this).data('id');
            \$.post('";
        // line 59
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_history_retry");
        echo "?id=' + id)
                .done(function() { sendMail(id, 0); })
                .fail(function() { alert('エラーが発生しました。'); });
        }
        return false;
    });
    \$('#sendModal').on('show.bs.modal', function () {
        \$('.modal-title').text('送信中...');
        \$('#send-progress').addClass('progress-bar-striped active');
        \$('#send-status-message').text('');
    });
    \$('#sendModal .btn-close').on('click', function() {
        location.reload(true);
    });
    ";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.plugin.mailmagazine.history"), "method")) {
            // line 74
            echo "    \$('#sendModal').modal('show');
    sendMail(";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.plugin.mailmagazine.history"), "method"), 0, array(), "array"), "html", null, true);
            echo ", 0);
    ";
        }
        // line 77
        echo "    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip();
    });
})
</script>
";
    }

    // line 84
    public function block_main($context, array $blocks = array())
    {
        // line 85
        echo "<form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">

";
        // line 87
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 88
            echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                ";
            // line 91
            if (((isset($context["pagination"]) ? $context["pagination"] : null) && ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0))) {
                // line 92
                echo "                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">総件数 <span class=\"normal\"><strong>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()), "html", null, true);
                echo " 件</strong> </span></h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"table_list\">
                            <div class=\"table-responsive with-border\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th width=\"170px\">配信開始時刻</th>
                                            <th width=\"170px\">配信終了時刻</th>
                                            <th>件名</th>
                                            <th width=\"120px\">配信総数</th>
                                            <th width=\"120px\">配信済数</th>
                                            <th width=\"120px\">配信失敗数</th>
                                            <th width=\"120px\">未配信数</th>
                                            <th width=\"120px\">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["SendHistory"]) {
                    // line 113
                    echo "                                        <tr>
                                            <td class=\"\">";
                    // line 114
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["SendHistory"], "start_date", array()), "Y/m/d H:i"), "html", null, true);
                    echo "</td>
                                            <td class=\"\">
                                                ";
                    // line 116
                    if ( !(null === $this->getAttribute($context["SendHistory"], "end_date", array()))) {
                        // line 117
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["SendHistory"], "end_date", array()), "Y/m/d H:i"), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 119
                    echo "                                            </td>
                                            <td class=\"\">";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($context["SendHistory"], "subject", array()), "html", null, true);
                    echo "</td>
                                            <td class=\"text-right\">";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($context["SendHistory"], "send_count", array()), "html", null, true);
                    echo "</td>
                                            <td class=\"text-right\">";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute($context["SendHistory"], "complete_count", array()), "html", null, true);
                    echo "</td>
                                            <td class=\"text-right\">";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($context["SendHistory"], "error_count", array()), "html", null, true);
                    echo "</td>
                                            <td class=\"text-right\">";
                    // line 124
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["SendHistory"], "send_count", array()) - $this->getAttribute($context["SendHistory"], "complete_count", array())), "html", null, true);
                    echo "</td>
                                            <td class=\"icon_edit\">
                                                <div class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                    <ul id=\"result_list_main__menu--";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($context["SendHistory"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                        <li>
                                                            <a href=\"?\" onclick=\"changeAction('";
                    // line 130
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_history_preview", array("id" => $this->getAttribute($context["SendHistory"], "id", array()))), "html", null, true);
                    echo "'); return false;\">プレビュー</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"?\" onclick=\"changeAction('";
                    // line 133
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_history_condition", array("id" => $this->getAttribute($context["SendHistory"], "id", array()))), "html", null, true);
                    echo "'); return false;\">配信条件</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_history_result", array("id" => $this->getAttribute($context["SendHistory"], "id", array()))), "html", null, true);
                    echo "\">配信結果</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"?\" onclick=\"fnDelete('";
                    // line 139
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_history_delete", array("id" => $this->getAttribute($context["SendHistory"], "id", array()))), "html", null, true);
                    echo "'); return false;\">削除</a>
                                                        </li>
                                                        ";
                    // line 141
                    if ((($this->getAttribute($context["SendHistory"], "error_count", array()) > 0) || (($this->getAttribute($context["SendHistory"], "send_count", array()) - $this->getAttribute($context["SendHistory"], "complete_count", array())) > 0))) {
                        // line 142
                        echo "                                                        <li>
                                                            <a href=\"#\" class=\"retry-btn\" data-id=\"";
                        // line 143
                        echo twig_escape_filter($this->env, $this->getAttribute($context["SendHistory"], "id", array()), "html", null, true);
                        echo "\">再試行</a>
                                                        </li>
                                                        ";
                    }
                    // line 146
                    echo "                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SendHistory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        ";
                // line 155
                $this->loadTemplate("pager.twig", "__string_template__6aab9e4e31cbf6d2c09625f3cdd25df6a57827356ffe657bc2ca2056cc7d99e6", 155)->display(array_merge($context, array("pages" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paginationData", array()), "routes" => "plugin_mail_magazine_history")));
                // line 156
                echo "                    </div><!-- /.box-body -->
                ";
            } else {
                // line 158
                echo "                    ";
                // line 159
                echo "                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">該当するデータがありませんでした。</h3>
                    </div><!-- /.box-header -->
                ";
            }
            // line 163
            echo "            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>

";
        } else {
            // line 168
            echo "    <div class=\"box-header with-arrow\">
        <h3 class=\"box-title\">検索条件に該当するデータがありませんでした。</h3>
    </div><!-- /.box-header -->
";
        }
        // line 172
        echo "</form>

";
    }

    // line 175
    public function block_modal($context, array $blocks = array())
    {
        // line 176
        echo "<div id=\"sendModal\" class=\"modal\" data-keyboard=\"false\" data-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">送信中...</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress\">
                    <div id=\"send-progress\" class=\"progress-bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>
                </div>
                <div id=\"send-status-message\"></div>
            </div>
            <div class=\"modal-footer\" style=\"display: none;\">
                <button type=\"button\" class=\"btn btn-default btn-close\">閉じる</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__6aab9e4e31cbf6d2c09625f3cdd25df6a57827356ffe657bc2ca2056cc7d99e6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 176,  318 => 175,  312 => 172,  306 => 168,  299 => 163,  293 => 159,  291 => 158,  287 => 156,  285 => 155,  279 => 151,  269 => 146,  263 => 143,  260 => 142,  258 => 141,  253 => 139,  247 => 136,  241 => 133,  235 => 130,  230 => 128,  223 => 124,  219 => 123,  215 => 122,  211 => 121,  207 => 120,  204 => 119,  198 => 117,  196 => 116,  191 => 114,  188 => 113,  184 => 112,  162 => 93,  159 => 92,  157 => 91,  152 => 88,  150 => 87,  146 => 85,  143 => 84,  134 => 77,  129 => 75,  126 => 74,  124 => 73,  107 => 59,  80 => 35,  63 => 21,  59 => 20,  55 => 19,  50 => 18,  47 => 17,  41 => 15,  35 => 14,  31 => 10,  29 => 12,  11 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__6aab9e4e31cbf6d2c09625f3cdd25df6a57827356ffe657bc2ca2056cc7d99e6", "");
    }
}
