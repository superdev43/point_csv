<?php

/* __string_template__ea6c29d63ba0746ed8bdca3dadc5a6b4a475b6bf1bfba914ea6b8c59c756358c */
class __TwigTemplate_6acc9688b710324db1b13ece43019664e2a44aa9a6592e56e11fbcc9733296a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__ea6c29d63ba0746ed8bdca3dadc5a6b4a475b6bf1bfba914ea6b8c59c756358c", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "store", 1 => "template", 2 => "template_list");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "テンプレート管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"row\" id=\"aside_wrap\">
        <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 33
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_store_template");
        echo "\">
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "selected", array()), 'widget');
        echo "
        <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">テンプレート一覧</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"table_list\">
                        <div class=\"table-responsive with-border\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>選択</th>
                                    <th>名前</th>
                                    <th>保存先</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Templates"]) ? $context["Templates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Template"]) {
            // line 55
            echo "                                <tr>
                                    <td>
                                        <input type=\"radio\" name=\"template\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "template_code", array()) == $this->getAttribute($context["Template"], "code", array()))) {
                echo "checked=\"checked\"";
            }
            echo "/>
                                    </td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <ul>
                                            <li>app/template/";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "code", array()), "html", null, true);
            echo "</li>
                                            <li>html/template/";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "code", array()), "html", null, true);
            echo "</li>
                                        </ul>
                                    </td>
                                    <td class=\"icon_edit\">
                                        <div class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                                <li><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_store_template_download", array("id" => $this->getAttribute($context["Template"], "id", array()))), "html", null, true);
            echo "\" >ダウンロード</a></li>
                                                ";
            // line 71
            if ($this->getAttribute($context["Template"], "default_template", array())) {
                // line 72
                echo "                                                    <li>
                                                        <a>削除</a>
                                                    </li>
                                                ";
            } else {
                // line 76
                echo "                                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_store_template_delete", array("id" => $this->getAttribute($context["Template"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"このテンプレートを削除してもよろしいですか？\">削除</a></li>
                                                ";
            }
            // line 78
            echo "                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box -->
        </div>
        <div class=\"col-md-3\">
            <div class=\"col_inner\" id=\"aside_column\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\"
                                        onclick=\"\$('#form_selected').val(\$('input[name=template]:checked').val());document.form1.submit(); return false;\">登録</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col -->
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__ea6c29d63ba0746ed8bdca3dadc5a6b4a475b6bf1bfba914ea6b8c59c756358c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 83,  140 => 78,  132 => 76,  126 => 72,  124 => 71,  120 => 70,  110 => 63,  106 => 62,  100 => 59,  91 => 57,  87 => 55,  83 => 54,  61 => 35,  57 => 34,  53 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ea6c29d63ba0746ed8bdca3dadc5a6b4a475b6bf1bfba914ea6b8c59c756358c", "");
    }
}
