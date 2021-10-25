<?php

/* __string_template__0a943b660de046a2ed538cf6421335d07c0a7d34202fea6061b0837bcc1bdb3b */
class __TwigTemplate_9666f9bac70a7fdd38c6147cedd2e467093c8f26c157d02b9754b26d024be3b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__0a943b660de046a2ed538cf6421335d07c0a7d34202fea6061b0837bcc1bdb3b", 15);
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
        // line 17
        $context["menus"] = array(0 => "mailmagazine", 1 => "mailmagazine");
        // line 22
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 15
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "メルマガ管理";
    }

    // line 20
    public function block_sub_title($context, array $blocks = array())
    {
        echo "配信";
    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        // line 25
        echo "    <script>
        function changeAction(action) {
            document.form1.action = action;
            document.form1.submit();
        }
        \$(function () {
            \$('#sendMailMagazine').on('click', function (e) {
                e.preventDefault();
                if (confirm('メールマガジンを配信します。\\nよろしいですか？')) {
                    \$(this).attr('disabled', 'disabled');
                    changeAction('";
        // line 35
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_prepare");
        echo "');
                }
                return false;
            });
            \$('#testSendModal input').on('keyup', function() {
                if (this.checkValidity()) {
                    \$(this).parents('div.form-group').removeClass('has-error');
                } else {
                    \$(this).parents('div.form-group').addClass('has-error');
                }
                if (\$('#testSendModal form').get(0).checkValidity()) {
                    \$('#sendTestMail').removeAttr('disabled');
                } else {
                    \$('#sendTestMail').attr('disabled', 'disabled');
                }
            });
            \$('#sendTestMail').on('click', function() {
                if (confirm('テストメールを送信します。\\nよろしいですか？')) {
                    \$.post(\"";
        // line 53
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_test");
        echo "\", {
                        '_token': \$('mail_magazine__token').val(),
                        'email': \$('#testEmail').val(),
                        'name': \$('#testName').val(),
                        'subject': \$('#mail_magazine_subject').val(),
                        'body': \$('#mail_magazine_body').val(),
                        'htmlBody': \$('#mail_magazine_htmlBody').val()
                    }).done(function(res) {
                        alert('テストメールを送信しました。');
                        \$('#testSendModal').modal('hide');
                    }).fail(function (res) {
                        alert('テストメールの送信に失敗しました。');
                    });
                }
            })
        })
    </script>
";
    }

    // line 72
    public function block_main($context, array $blocks = array())
    {
        // line 73
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
    ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <div id=\"detail_wrap\" class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">配信内容の確認</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <table class=\"table table-striped\">
                        <tbody>
                            <tr>
                                <th style=\"width: 20%;\">件名</th>
                                <td>";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["subject_itm"]) ? $context["subject_itm"] : null), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>本文 (テキスト形式)</th>
                                <td><xmp>";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["body_itm"]) ? $context["body_itm"] : null), "html", null, true);
        echo "</xmp></td>
                            </tr>
                            <tr>
                                <th>本文 (HTML形式)</th>
                                <td><xmp>";
        // line 94
        echo (isset($context["htmlBody_itm"]) ? $context["htmlBody_itm"] : null);
        echo "</xmp></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style=\"display: none\">
                        ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div id=\"detail_box__footer\" class=\"row hidden-xs hidden-sm\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <p><a href=\"";
        // line 106
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine");
        echo "\" onclick=\"changeAction('";
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("plugin_mail_magazine_select");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "'); return false;\">配信内容の設定に戻る</a></p>
                </div>
            </div>
        </div>
        
        <div id=\"common_box\" class=\"col-md-3\">
            ";
        // line 113
        echo "            <div class=\"col_inner\" id=\"aside_column\">
                <div class=\"col_inner\">
                    <div class=\"box no-header\">
                        <div class=\"box-body\">
                            <div class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                    <a class=\"btn btn-primary btn-block btn-lg active\" role=\"button\" data-toggle=\"modal\" data-target=\"#testSendModal\">テスト送信する</a>
                                    <button class=\"btn btn-danger btn-block btn-lg\" id=\"sendMailMagazine\">配信する</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div><!-- /.col -->
        </div>
    </div>
    </form>

";
    }

    // line 132
    public function block_modal($context, array $blocks = array())
    {
        // line 133
        echo "    <div id=\"testSendModal\" class=\"modal\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">テスト送信</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label for=\"testEmail\" class=\"col-sm-2 control-label\">送信先</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"testEmail\" placeholder=\"メールアドレス\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["testMailTo"]) ? $context["testMailTo"] : null), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"testName\" class=\"col-sm-2 control-label\">名前</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"testName\" placeholder=\"名前\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-primary\" id=\"sendTestMail\">送信</button>
                    <button class=\"btn btn-default\" data-dismiss=\"modal\">閉じる</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__0a943b660de046a2ed538cf6421335d07c0a7d34202fea6061b0837bcc1bdb3b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 150,  211 => 144,  198 => 133,  195 => 132,  173 => 113,  160 => 106,  150 => 99,  142 => 94,  135 => 90,  128 => 86,  113 => 74,  110 => 73,  107 => 72,  85 => 53,  64 => 35,  52 => 25,  49 => 24,  43 => 20,  37 => 19,  33 => 15,  31 => 22,  29 => 17,  11 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__0a943b660de046a2ed538cf6421335d07c0a7d34202fea6061b0837bcc1bdb3b", "");
    }
}
