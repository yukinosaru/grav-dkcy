<?php

/* blog.html.twig */
class __TwigTemplate_584c613b8966949d5e65eafaaad5185558d4a214de8a87255b783c35d06d3c66 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "294113155")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
{# Allows includes as well as overwriting #}

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
{{ page.content }}

<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"Blog\",
\t\"mainEntityOfPage\": {
\t\t\"@type\": \"WebSite\",
\t\t\"@id\": \"http://www.dkcy.com\"
\t}
}
</script>

<div class=\"pure-g\">
\t<div class=\"card-list pure-u-1 pure-u-md-2-3 pure-u-lg-1 pure-g\">
\t{% for child in collection %}
\t\t{% if child.isFirst %}
\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child,'type': 'highlight','truncate': true} %}
\t\t{% endif %}
\t{% endfor %}
\t</div>
\t<div class=\"card-list pure-u-1 pure-u-md-1-3 pure-u-lg-1 pure-g\">
\t\t{% for child in collection %}
\t\t\t{% if child.isFirst == false %}
\t\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child,'type': 'snippet','truncate': true} %}\t\t\t
\t\t\t{% endif %}
\t    {% endfor %}
\t</div>
\t<div class=\"pure-u-1\">
\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t    \t{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t{% endif %}
\t</div>
</div>
{% endblock %}

{% endembed %}", "blog.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_584c613b8966949d5e65eafaaad5185558d4a214de8a87255b783c35d06d3c66_294113155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 5
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 6
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 8
        if ((($context["base_url"] ?? null) == "/")) {
            // line 9
            $context["base_url"] = "";
        }
        // line 12
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 13
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"Blog\",
\t\"mainEntityOfPage\": {
\t\t\"@type\": \"WebSite\",
\t\t\"@id\": \"http://www.dkcy.com\"
\t}
}
</script>

<div class=\"pure-g\">
\t<div class=\"card-list pure-u-1 pure-u-md-2-3 pure-u-lg-1 pure-g\">
\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            echo "\t\t";
            if ($this->getAttribute($context["child"], "isFirst", array())) {
                // line 34
                echo "\t\t\t";
                $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 34)->display(array_merge($context, array("page" => $context["child"], "type" => "highlight", "truncate" => true)));
                // line 35
                echo "\t\t";
            }
            // line 36
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</div>
\t<div class=\"card-list pure-u-1 pure-u-md-1-3 pure-u-lg-1 pure-g\">
\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "\t\t\t";
            if (($this->getAttribute($context["child"], "isFirst", array()) == false)) {
                // line 41
                echo "\t\t\t\t";
                $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 41)->display(array_merge($context, array("page" => $context["child"], "type" => "snippet", "truncate" => true)));
                echo "\t\t\t
\t\t\t";
            }
            // line 43
            echo "\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t</div>
\t<div class=\"pure-u-1\">
\t\t";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 47
            echo "\t    \t";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 47)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 48
            echo "\t\t";
        }
        // line 49
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 49,  254 => 48,  251 => 47,  249 => 46,  245 => 44,  231 => 43,  225 => 41,  222 => 40,  205 => 39,  201 => 37,  187 => 36,  184 => 35,  181 => 34,  178 => 33,  161 => 32,  143 => 17,  140 => 16,  136 => 1,  133 => 13,  131 => 12,  128 => 9,  126 => 8,  124 => 6,  122 => 5,  120 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
{# Allows includes as well as overwriting #}

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
{{ page.content }}

<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"Blog\",
\t\"mainEntityOfPage\": {
\t\t\"@type\": \"WebSite\",
\t\t\"@id\": \"http://www.dkcy.com\"
\t}
}
</script>

<div class=\"pure-g\">
\t<div class=\"card-list pure-u-1 pure-u-md-2-3 pure-u-lg-1 pure-g\">
\t{% for child in collection %}
\t\t{% if child.isFirst %}
\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child,'type': 'highlight','truncate': true} %}
\t\t{% endif %}
\t{% endfor %}
\t</div>
\t<div class=\"card-list pure-u-1 pure-u-md-1-3 pure-u-lg-1 pure-g\">
\t\t{% for child in collection %}
\t\t\t{% if child.isFirst == false %}
\t\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child,'type': 'snippet','truncate': true} %}\t\t\t
\t\t\t{% endif %}
\t    {% endfor %}
\t</div>
\t<div class=\"pure-u-1\">
\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t    \t{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t{% endif %}
\t</div>
</div>
{% endblock %}

{% endembed %}", "blog.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/blog.html.twig");
    }
}
