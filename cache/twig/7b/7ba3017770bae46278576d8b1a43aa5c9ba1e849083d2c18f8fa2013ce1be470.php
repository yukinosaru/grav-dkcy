<?php

/* partials/hero_image.html.twig */
class __TwigTemplate_6026f9823cbaa5a0d9aeccab898b6617b024bd3d99283660da392e78eb71f0e6 extends Twig_Template
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
        echo "<section id='hero-image' class='pure-u-1'>
\t";
        // line 2
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
            // line 3
            echo "\t";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 1280, 1 => 450), "method"), "html", array(0 => "", 1 => "Hero image", 2 => "pure-img"), "method");
            echo "
";
        } else {
            // line 5
            echo "\t<img src='";
            echo ($context["theme_url"] ?? null);
            echo "\\images\\hero_20170118_00.jpg' class='pure-img' />
";
        }
        // line 7
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "partials/hero_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id='hero-image' class='pure-u-1'>
\t{% if page.media.images|first %}
\t{{ page.media.images|first.cropZoom(1280,450).html('','Hero image', 'pure-img')  }}
{% else %}
\t<img src='{{ theme_url }}\\images\\hero_20170118_00.jpg' class='pure-img' />
{% endif %}
</section>", "partials/hero_image.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/partials/hero_image.html.twig");
    }
}
