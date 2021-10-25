<?php

/* __string_template__1d33dd049945529752db982ceaa8a353986f01996c5a22bfb5009bdbd2f678b8 */
class __TwigTemplate_786b98161ff12274b1159369e65cc576c1af2e9bab5f9fc38484164936ea05b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__1d33dd049945529752db982ceaa8a353986f01996c5a22bfb5009bdbd2f678b8", 22);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"inner\">
    <h1 class=\"page-heading\">お届け先の指定</h1>
    <div id=\"deliver_wrap\" class=\"container-fluid\">
        <form method=\"post\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping", array("id" => (isset($context["shippingId"]) ? $context["shippingId"] : null))), "html", null, true);
        echo "\">
            <div id=\"deliveradd_select\" class=\"row\">
                <div id=\"list_box__body\" class=\"col-sm-10 col-sm-offset-1\">
                    <p id=\"list_box__add_button\">
                    ";
        // line 32
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())) < $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "deliv_addr_max", array()))) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping_shipping_edit", array("id" => (isset($context["shippingId"]) ? $context["shippingId"] : null))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\">新規お届け先を追加する</a>
                    ";
        } else {
            // line 35
            echo "                        <span id=\"list_box__deliv_addr_max_message\" class=\"text-danger\">お届け先登録上限の";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "deliv_addr_max", array()), "html", null, true);
            echo "件に達しています。お届け先を入力したい場合は、削除か変更を行ってください</span>
                    ";
        }
        // line 37
        echo "                    </p>
                    ";
        // line 38
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 39
            echo "                        <p id=\"list_box__deliv_addr_alert\" class=\"text-danger\">お届け先を指定してください。</p>
                    ";
        }
        // line 41
        echo "
                    ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array())) > 0)) {
            // line 43
            echo "                     <div id=\"list_box__list_body\" class=\"table address_table\">
                        <div id=\"list_box__list_body_inner\" class=\"tbody\">
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Customer"]) ? $context["Customer"] : null), "CustomerAddresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 46
                echo "                            <div id=\"list_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"addr_box tr\">
                            <div id=\"list_box__id--";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"icon_radio td\"><input type=\"radio\" id=\"address";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"no-style\" name=\"address\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" /></div>
                            <div id=\"list_box__address_area--";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"column td\">
                                <label for=\"address";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\">
                                    <p id=\"list_box__address--";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "id", array()), "html", null, true);
                echo "\" class=\"address\">
                                        ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "name01", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "name02", array()), "html", null, true);
                echo "<br>
                                        〒";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "zip01", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "zip02", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "Pref", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "addr01", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "addr02", array()), "html", null, true);
                echo "<br>
                                        ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel01", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel02", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["CustomerAddress"], "tel03", array()), "html", null, true);
                echo "
                                    </p>
                                </label>
                            </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                            </div>
                        </div><!--/table-->
                        ";
        }
        // line 62
        echo "
                    <div id=\"list_box__button_menu\" class=\"row no-padding\">
                        <div class=\"btn_group col-sm-offset-2 col-sm-8\">
                            <p id=\"list_box__confirm_button\" class=\"col-sm-6\"><button type=\"submit\" class=\"btn btn-primary btn-block\">選択したお届け先に送る</button></p>
                            <p id=\"list_box__back_button\" class=\"col-sm-6\"><a href=\"";
        // line 66
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("shopping");
        echo "\" class=\"btn btn-info btn-block\">戻る</a></p>
                        </div>
                    </div>

                </div>
            </div><!-- /.row -->
        </form>

    </div>
</div><!-- /.inner -->
";
    }

    public function getTemplateName()
    {
        return "__string_template__1d33dd049945529752db982ceaa8a353986f01996c5a22bfb5009bdbd2f678b8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 66,  141 => 62,  136 => 59,  120 => 53,  110 => 52,  104 => 51,  100 => 50,  96 => 49,  92 => 48,  84 => 47,  79 => 46,  75 => 45,  71 => 43,  69 => 42,  66 => 41,  62 => 39,  60 => 38,  57 => 37,  51 => 35,  45 => 33,  43 => 32,  36 => 28,  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1d33dd049945529752db982ceaa8a353986f01996c5a22bfb5009bdbd2f678b8", "");
    }
}
