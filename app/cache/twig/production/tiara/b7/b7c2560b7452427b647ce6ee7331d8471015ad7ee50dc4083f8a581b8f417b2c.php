<?php

/* __string_template__b3b13f68c6751c602d5b6a2b1abf222b2be0f6023fa84aea72b7c2248f25f83d */
class __TwigTemplate_770dc565c8d6b6ea07935b178afed517206b60f45efd17b4256aaf6b9bc9d6a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b3b13f68c6751c602d5b6a2b1abf222b2be0f6023fa84aea72b7c2248f25f83d", 22);
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
        echo "    <div id=\"contents\" class=\"main_only\">
        <div id=\"privacy_wrap\" class=\"container-fluid inner no-padding\">
            <div id=\"main\">
                <!--<h1 class=\"page-heading\">プライバシーポリシー</h1>-->
                <div id=\"privacy_box\" class=\"container-fluid\">
                    <div id=\"privacy_box__body\" class=\"row\">
                        <div id=\"privacy_box__body_inner\" class=\"col-md-10 col-md-offset-1\">
                            <p id=\"privacy_box__declaration\">
                                ";
        // line 33
        if ( !(null === $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "company_name", array()))) {
            // line 34
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "company_name", array()), "html", null, true);
            echo "は、
                                ";
        }
        // line 36
        echo "                                個人情報保護の重要性に鑑み、「個人情報の保護に関する法律」及び本プライバシーポリシーを遵守し、お客さまのプライバシー保護に努めます。
                            </p>
                            <br />
                            <!--<h3 id=\"privacy_box__lead_header\">個人情報の定義</h3>
                            <p id=\"privacy_box__lead\">お客さま個人に関する情報(以下「個人情報」といいます)であって、お客さまのお名前、住所、電話番号など当該お客さま個人を識別することができる情報をさします。他の情報と組み合わせて照合することにより個人を識別することができる情報も含まれます。</p>-->





\t\t<h3>基本方針</h3>
\t\t<p>バレエショップティアラ（以下弊社）は、弊社のサービスにご登録いただいた個人情報を非常に大切なものと考えており、お客様のプライバシー保護を我々に課された社会的責任ととらえ、プライバシーの保護に努めています。弊社の個人情報保護に関する考え方は以下に規定する通りです。</p>
\t\t<h3>定義</h3>
\t\t<p>ここでいう個人情報とは、その情報に含まれる氏名、生年月日その他の記述、又は個人別に付けられた番号などによってその個人を識別できるもの（その情報だけでは識別できないが、他の情報と容易に照合することができ、それによって個人を識別できるものを含む）のことを言います。</p>
\t\t<h3>本ポリシーの適用</h3>
\t\t<p>本ポリシーは、弊社が提供する各種サービスにおいて収集する個人情報の取り扱いについて共通に適用される基本ポリシーとなります。</p>
\t\t<h3>個人情報の収集とその目的について</h3>
\t\t<p>弊社では個人情報の収集の目的を明確に定め、会員登録・その他サービスの利用の際に会員の同意に基づき情報を入力していただく、もしくはそれに準ずる形式にて会員登録していただくことにより、会員の皆様の個人情報を収集しております。また、弊社では、弊社が運営するWebサイトからリンクしてご利用になるその他のWebサイト内で、プライバシーに関する声明及び個人情報の取り扱いに関する声明をお読みになり、個人情報の収集及び利用方法を理解することをお勧めいたします。弊社以外が運営するWebサイトのプライバシーに関する声明またはコンテンツについては一切の責任を負いません。</p>

\t\t<h3>個人情報の開示</h3>
\t\t<p>弊社では誠意を持って個人情報を管理しており、顧客リストの個人情報 ( メール アドレス、氏名、住所、電話番号等 ) を本人の許可なく第三者に開示することはありません。以下に関しては、法令及び緊急時における対応として例外となります。ご参照ください。</p>
\t\t<p>１） 人の生命、身体または財産の保護のために必要がある場合であり、かつご本人の同意を得ることが困難であるとき<br>２） 国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であり、かつご本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>３） その他法令に基づき開示が許容される場合</p>

\t\t<h3>お問合せ</h3>
\t\t<p>個人情報保護に関してのご意見は、「お問合せ」ページより御連絡下さい。</p>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b3b13f68c6751c602d5b6a2b1abf222b2be0f6023fa84aea72b7c2248f25f83d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 36,  43 => 34,  41 => 33,  31 => 25,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b3b13f68c6751c602d5b6a2b1abf222b2be0f6023fa84aea72b7c2248f25f83d", "");
    }
}
