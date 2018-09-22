<?php

/* partials/base.html.twig */
class __TwigTemplate_b53c83debc848ae848dd01925627c067149b66b439ef2404cdf9c521f05c2b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'hero_image' => array($this, 'block_hero_image'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "</head>

<body>
    <div id=\"mainContent\">
      
    
  ";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $this->displayBlock('hero_image', $context, $blocks);
        // line 59
        echo "
  ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
  ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "  </div>
  ";
        // line 70
        $this->displayBlock('javascript', $context, $blocks);
        // line 73
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "  <meta name=\"viewport\" content=\"width=device-width\">

  <script type=\"application/ld+json\">
  {
    \"@context\": \"http://schema.org\",
    \"@type\": \"WebSite\",
    \"name\": \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "\",
    \"license\": \"https://creativecommons.org/licenses/by-nc-sa/3.0/\",
    \"sameAs\": [
      \"https://twitter.com/intent/tweet?text=@yukinosaru\",
      \"https://www.linkedin.com/in/dkcyeo\",
      \"https://www.instagram.com/daniel.yeo\",
      \"https://github.com/yukinosaru\",
      \"http://www.dkcy.com/feed\"
      ],
    \"creator\": {
      \"@type\": \"Person\",
      \"name\": \"Daniel Yeo\",
      \"email\": \"dan@dkcy.com\"
    }
  }
  </script>
  
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 32
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
  <link rel=\"canonical\" href=\"";
        // line 33
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

  ";
        // line 35
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 42
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "


  ";
    }

    // line 35
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100), "method");
        // line 37
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css", 1 => 100), "method");
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://fonts.googleapis.com/icon?family=Material+Icons", 1 => 100), "method");
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/style_new.css", 1 => 100), "method");
        // line 41
        echo "  ";
    }

    // line 52
    public function block_header($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "  ";
    }

    // line 56
    public function block_hero_image($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->loadTemplate("partials/hero_image.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "  ";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "  <section id='main' class='pure-g'>
    ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "  </section>
  ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "  ";
    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "", 1 => 100), "method");
        // line 72
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 72,  227 => 71,  224 => 70,  220 => 68,  217 => 67,  214 => 66,  209 => 62,  204 => 63,  202 => 62,  199 => 61,  196 => 60,  192 => 58,  189 => 57,  186 => 56,  182 => 54,  179 => 53,  176 => 52,  172 => 41,  169 => 40,  167 => 39,  164 => 38,  161 => 37,  158 => 36,  155 => 35,  146 => 42,  144 => 35,  139 => 33,  135 => 32,  115 => 15,  107 => 9,  105 => 8,  97 => 7,  94 => 6,  91 => 5,  82 => 73,  80 => 70,  77 => 69,  75 => 66,  72 => 65,  70 => 60,  67 => 59,  65 => 56,  62 => 55,  60 => 52,  52 => 46,  50 => 5,  32 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
  {% include 'partials/metadata.html.twig' %}
  <meta name=\"viewport\" content=\"width=device-width\">

  <script type=\"application/ld+json\">
  {
    \"@context\": \"http://schema.org\",
    \"@type\": \"WebSite\",
    \"name\": \"{{ 'SITE.TITLE'|t|e('html') }}\",
    \"license\": \"https://creativecommons.org/licenses/by-nc-sa/3.0/\",
    \"sameAs\": [
      \"https://twitter.com/intent/tweet?text=@yukinosaru\",
      \"https://www.linkedin.com/in/dkcyeo\",
      \"https://www.instagram.com/daniel.yeo\",
      \"https://github.com/yukinosaru\",
      \"http://www.dkcy.com/feed\"
      ],
    \"creator\": {
      \"@type\": \"Person\",
      \"name\": \"Daniel Yeo\",
      \"email\": \"dan@dkcy.com\"
    }
  }
  </script>
  
  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
  <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

  {% block stylesheet %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css', 100) %}
    {% do assets.addCss('https://fonts.googleapis.com/icon?family=Material+Icons', 100) %}
    {# do assets.addCss('theme://css-compiled/style.css', 100) #}
    {% do assets.addCss('theme://css-compiled/style_new.css', 100) %}
  {% endblock %}
  {{ assets.css() }}


  {% endblock head %}
</head>

<body>
    <div id=\"mainContent\">
      
    
  {% block header %}
    {% include 'partials/header.html.twig' %}
  {% endblock %}

  {% block hero_image %}
    {% include 'partials/hero_image.html.twig' %}
  {% endblock %}

  {% block body %}
  <section id='main' class='pure-g'>
    {% block content %}{% endblock %}
  </section>
  {% endblock %}

  {% block footer %}
    {% include 'partials/footer.html.twig' %}
  {% endblock %}
  </div>
  {% block javascript %}
    {% do assets.addJs('', 100) %}
  {% endblock %}
  {{ assets.js() }}
</body>
</html>
", "partials/base.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/partials/base.html.twig");
    }
}
