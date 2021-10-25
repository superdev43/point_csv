<?php

/* __string_template__7ed7eef156b58aac7a9ea1d60ed95f4a4b8188d418b614d78e2e0f3d711549d2 */
class __TwigTemplate_5be217d5069e8e241f423ca690dc85f419bc4e201af0c5743139166f0a99d9b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__7ed7eef156b58aac7a9ea1d60ed95f4a4b8188d418b614d78e2e0f3d711549d2", 22);
        $this->blocks = array(
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
        $context["mypageno"] = "withdraw";
        // line 26
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "
<div id=\"withdraw_wrap\" class=\"container-fluid\">
\t<div class=\"inner\">
    ";
        // line 32
        $this->loadTemplate("Mypage/navi.twig", "__string_template__7ed7eef156b58aac7a9ea1d60ed95f4a4b8188d418b614d78e2e0f3d711549d2", 32)->display($context);
        // line 33
        echo "    <div id=\"withdraw_box\" class=\"unsubscribe_box\">
        <form method=\"post\" action=\"";
        // line 34
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("mypage_withdraw");
        echo "\">
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        <div id=\"withdraw_box__body\" class=\"row no-padding\">
            <div id=\"withdraw_box__body_inner\" class=\"col-sm-6 col-sm-offset-3\">
                    <div class=\"icon\"><svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg></div>
                    <h3>退会手続きの前にご確認ください</h3>
                    <p>会員を退会された場合には、現在保存されている購入履歴やお届け先等の情報は、すべて削除されますがよろしいでしょうか？</p>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 45
            echo "                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 46
                echo "                    <div class=\"extra-form dl_table\">
                        ";
                // line 47
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                    </div>
                ";
            }
            // line 50
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
        <div id=\"withdraw_box__confirm_button\" class=\"row\">
            <div class=\"btn_group col-sm-offset-4 col-sm-4\">
                <p><button type=\"submit\" class=\"btn btn-info btn-block\" name=\"mode\" value=\"confirm\">会員退会手続きへ</button></p>
            </div>
        </div>
        </form>
    </div>
\t</div><!-- /.inner -->
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__7ed7eef156b58aac7a9ea1d60ed95f4a4b8188d418b614d78e2e0f3d711549d2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 51,  78 => 50,  72 => 47,  69 => 46,  66 => 45,  62 => 44,  50 => 35,  46 => 34,  43 => 33,  41 => 32,  36 => 29,  33 => 28,  29 => 22,  27 => 26,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__7ed7eef156b58aac7a9ea1d60ed95f4a4b8188d418b614d78e2e0f3d711549d2", "");
    }
}
