<?php

/* partials/header.html.twig */
class __TwigTemplate_13aae6ec912fddd976b2d653facc43736717f22ec803f28756ebff043c1182af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id='header' class='pure-g'>
  <div id='blog-title' class='pure-u-1 pure-u-lg-3-5'><a href='";
        // line 2
        echo ($context["base_url_absolute"] ?? null);
        echo "'>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE");
        echo "</a></div>
  <div id='nav' class='pure-u-1 pure-u-lg-2-5'>
    <a href=\"https://twitter.com/intent/tweet?text=@yukinosaru\" title=\"Mention me on Twitter\"><img src=\"";
        // line 4
        echo ($context["theme_url"] ?? null);
        echo "\\images\\twitter_48px.png\" alt=\"Mention me on Twitter\" /></a>
    <a href=\"https://www.linkedin.com/in/dkcyeo\" title=\"My LinkedIn profile\"><img src=\"";
        // line 5
        echo ($context["theme_url"] ?? null);
        echo "\\images\\linkedin_48px.png\" alt=\"My LinkedIn profile\" /></a>
    <a href=\"https://www.instagram.com/daniel.yeo\" title=\"My Instagram feed\"><img src=\"";
        // line 6
        echo ($context["theme_url"] ?? null);
        echo "\\images\\instagram_48px.png\" alt=\"My Instagram feed\" /></a>
    <a href=\"mailto:dan@dkcy.com\" title=\"Email me\"><img src=\"";
        // line 7
        echo ($context["theme_url"] ?? null);
        echo "\\images\\gmail_48px.png\" alt=\"Email me\"></a>
    <a href=\"https://github.com/yukinosaru\" title=\"My GitHub profile\"><img src=\"";
        // line 8
        echo ($context["theme_url"] ?? null);
        echo "\\images\\github_48px.png\" alt=\"My GitHub profile\" /></a>
    <a href=\"http://www.dkcy.com/feed\" title=\"This site's RSS feed\"><img src=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "\\images\\rss_48px.png\" alt=\"This site's RSS feed\" /></a>
  </div>
</header>

";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id='header' class='pure-g'>
  <div id='blog-title' class='pure-u-1 pure-u-lg-3-5'><a href='{{ base_url_absolute }}'>{{ 'SITE.TITLE'|t }}</a></div>
  <div id='nav' class='pure-u-1 pure-u-lg-2-5'>
    <a href=\"https://twitter.com/intent/tweet?text=@yukinosaru\" title=\"Mention me on Twitter\"><img src=\"{{ theme_url }}\\images\\twitter_48px.png\" alt=\"Mention me on Twitter\" /></a>
    <a href=\"https://www.linkedin.com/in/dkcyeo\" title=\"My LinkedIn profile\"><img src=\"{{ theme_url }}\\images\\linkedin_48px.png\" alt=\"My LinkedIn profile\" /></a>
    <a href=\"https://www.instagram.com/daniel.yeo\" title=\"My Instagram feed\"><img src=\"{{ theme_url }}\\images\\instagram_48px.png\" alt=\"My Instagram feed\" /></a>
    <a href=\"mailto:dan@dkcy.com\" title=\"Email me\"><img src=\"{{ theme_url }}\\images\\gmail_48px.png\" alt=\"Email me\"></a>
    <a href=\"https://github.com/yukinosaru\" title=\"My GitHub profile\"><img src=\"{{ theme_url }}\\images\\github_48px.png\" alt=\"My GitHub profile\" /></a>
    <a href=\"http://www.dkcy.com/feed\" title=\"This site's RSS feed\"><img src=\"{{ theme_url }}\\images\\rss_48px.png\" alt=\"This site's RSS feed\" /></a>
  </div>
</header>

", "partials/header.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/partials/header.html.twig");
    }
}
