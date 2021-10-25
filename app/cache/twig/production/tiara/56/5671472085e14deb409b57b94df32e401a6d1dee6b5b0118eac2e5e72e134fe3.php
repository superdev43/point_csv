<?php

/* error.twig */
class __TwigTemplate_386c624f14576b46cdede3690c36e1876293563b298c1047127c6f0bcd06ff8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 23
        echo "<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["error_title"]) ? $context["error_title"] : null), "html", null, true);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/custom.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/custom_contents.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<!-- for original theme CSS -->

";
        // line 36
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 37
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>


";
        // line 43
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())) {
            // line 44
            echo "    ";
            // line 45
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())));
            echo "
    ";
        }
        // line 49
        echo "
</head>
<body>
<div id=\"wrapper\" class=\"error_page\">

    <header id=\"header\">
        <div class=\"container-fluid\">
            ";
        // line 57
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())) {
            // line 58
            echo "                ";
            // line 59
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())));
            echo "
                ";
            // line 61
            echo "            ";
        }
        // line 62
        echo "            ";
        // line 63
        echo "

            ";
        // line 65
        echo twig_include($this->env, $context, "Block/logo.twig", array(), true, true);
        echo "

            <!--<p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\"><span class=\"menu_title\">Menu</span><span class=\"bar\"></span></a></p>-->
        </div>
    </header>

    <div id=\"contents\" class=\"theme_main_only\">
        <div class=\"container-fluid inner\">
            <div id=\"main\">
                <div id=\"default_error_wrap\" class=\"container-fluid\">
                    <div id=\"default_error_box\" class=\"message_box\">
                        <div id=\"default_error_box__body\" class=\"row no-padding\">
                            <div id=\"default_error__message\" class=\"col-sm-6 col-sm-offset-3\">
                                <div class=\"icon\"><svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg></div>
                                <h1>";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["error_title"]) ? $context["error_title"] : null), "html", null, true);
        echo "</h1>
                                <p>";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["error_message"]) ? $context["error_message"] : null), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div id=\"default_error__footer\" class=\"row\">
                            <div id=\"default_error__top_button\" class=\"btn_group col-sm-offset-4 col-sm-4\">
                                <a href=\"";
        // line 85
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\"><p><button type=\"button\" class=\"btn btn-info btn-block\">トップページへ</button></p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id=\"footer\">
            ";
        // line 95
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())) {
            // line 96
            echo "                ";
            // line 97
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())));
            echo "
                ";
            // line 99
            echo "            ";
        }
        // line 100
        echo "            ";
        // line 101
        echo "
            ";
        // line 102
        echo twig_include($this->env, $context, "Block/footer.twig", array(), true, true);
        echo "
        </footer>
    </div>

    <div id=\"drawer\" class=\"drawer sp\">
    </div>
</div>

<div class=\"overlay\"></div>

<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        \$.ajax({
            url: '";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
            type: 'GET',
            dataType: 'html',
        }).done(function(data){
            \$('body').prepend(data);
        }).fail(function(data){
        });
    });
</script>
";
        // line 127
        $this->displayBlock('javascript', $context, $blocks);
        // line 128
        echo "</body>
</html>
";
    }

    // line 36
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 127
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 127,  230 => 36,  224 => 128,  222 => 127,  210 => 118,  201 => 114,  195 => 113,  189 => 112,  176 => 102,  173 => 101,  171 => 100,  168 => 99,  163 => 97,  161 => 96,  158 => 95,  146 => 85,  138 => 80,  134 => 79,  117 => 65,  113 => 63,  111 => 62,  108 => 61,  103 => 59,  101 => 58,  98 => 57,  89 => 49,  83 => 45,  81 => 44,  79 => 43,  71 => 39,  67 => 37,  65 => 36,  57 => 33,  51 => 32,  45 => 31,  39 => 30,  35 => 29,  30 => 27,  24 => 23,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error.twig", "/home/cssv15/tiara-collection.com/public_html/app/template/tiara/error.twig");
    }
}
