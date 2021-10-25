<?php

/* TransportCSVexportB2/View/admin/transport_csv_export_b2_download.twig */
class __TwigTemplate_4e04ce805a14f3ea2e0bfe7cc5862e73ca7e00da3d33337a30f6e5bda0db97d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">ヤマトB2CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>

";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 64
        echo "
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"b2_csv\" href=\"javascript:;\" name=\"b2_csv\">ヤマトB2CSVダウンロード</a></li>
                                    </ul>
                                </li>
";
    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        // line 15
        echo "<script>

var exportB2 = \"";
        // line 17
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_order_export_b2");
        echo "\";

jQuery(function(\$){
    \$('.b2_csv').click(function(){
        var ajaxB2 = \"";
        // line 21
        echo $this->env->getExtension('Plugin\ExcludeTax\Twig\Extension\EccubeExtension')->getUrl("admin_order_ajax_b2");
        echo "\";

        if (\$('#dropdown-form').serialize()) {
            ajaxB2 = ajaxB2 + '?' + \$('#dropdown-form').serialize();
        }

        \$.ajax({
            dataType: 'json',
            url: ajaxB2,
            success:function(data) {
                if (data) {
                    if (data['status'] && !confirm(\"【発送済み】もしくは【キャンセル】の商品が選択されています。\\nこのままCSVダウンロードを続けますか？\")) {
                        return;
                    }
                    if (data['deliv'] && !confirm(\"複数の配送業者の受注データが混在しています。\\nこのままCSVダウンロードを続けますか？\")) {
                        return;
                    }
                }
                if (data['os_flg']) {
                    var str = '';
                    if (data['os_str']) {
                        str = '対応状況変更設定されている\\n【'+data['os_str']+'】を\\n【発送済み】に変更します。\\nよろしいですか？';
                    } else {
                        str = '対応状況を【発送済み】に変更します。\\nよろしいですか？';
                    }
                    if (data['os_str'] && confirm(str)) {
                        var urlB2 = exportB2 + 't';
                        \$('#dropdown-form').attr('action', urlB2).submit();
                    } else {
                        \$('#dropdown-form').attr('action', exportB2).submit();
                    }
                } else {
                    \$('#dropdown-form').attr('action', exportB2).submit();
                }
            },
            error:function(XMLHttpRequest, textStatus, errorThrown) {
            }
        });
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "TransportCSVexportB2/View/admin/transport_csv_export_b2_download.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 21,  44 => 17,  40 => 15,  37 => 14,  28 => 64,  26 => 14,  20 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TransportCSVexportB2/View/admin/transport_csv_export_b2_download.twig", "/home/cssv15/tiara-collection.com/public_html/app/Plugin/TransportCSVexportB2/View/admin/transport_csv_export_b2_download.twig");
    }
}
