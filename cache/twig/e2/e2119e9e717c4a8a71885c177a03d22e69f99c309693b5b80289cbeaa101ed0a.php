<?php

/* partials/footer.html.twig */
class __TwigTemplate_92ee18b5ac42560fbd6c5ec5d6ff4de6d7f55099ca30acc71a41a1e26effeb3c extends Twig_Template
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
        echo "<footer id=\"footer\" class='pure-g'>
  <div id=\"footer-left\" class='pure-u-1-3'><a href=\"";
        // line 2
        echo ($context["base_url"] ?? null);
        echo "/admin\">Admin</a></div>
  <div id=\"footer-right\" class='pure-u-2-3'>Licensed under <a href=\"https://creativecommons.org/licenses/by-nc-sa/3.0/\" title=\"CC BY-NC-SA\">CC BY-NC-SA</a> by <a href=\"mailto:dan@dkcy.com\">dkcy</a></div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\" class='pure-g'>
  <div id=\"footer-left\" class='pure-u-1-3'><a href=\"{{ base_url }}/admin\">Admin</a></div>
  <div id=\"footer-right\" class='pure-u-2-3'>Licensed under <a href=\"https://creativecommons.org/licenses/by-nc-sa/3.0/\" title=\"CC BY-NC-SA\">CC BY-NC-SA</a> by <a href=\"mailto:dan@dkcy.com\">dkcy</a></div>
</footer>
", "partials/footer.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/partials/footer.html.twig");
    }
}
