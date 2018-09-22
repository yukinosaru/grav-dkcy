<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_efdbab8784744e19dd6024b1daf741f2ff3c5db39eb237a639a4f07d4408a326 extends Twig_Template
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
        echo "<article class=\"card pure-u-1";
        if ((($context["type"] ?? null) == "snippet")) {
            echo "pure-u-md-1 pure-u-lg-1-3 ";
        }
        echo "\">

<script type=\"application/ld+json\">
{
    \"@context\": \"http://schema.org\",
    \"@type\": \"BlogPosting\",
    \"mainEntityOfPage\": {
        \"@type\": \"Blog\",
        \"@id\": \"http://www.dkcy.com\"
    },
    \"author\": {
        \"@type\": \"Person\",
        \"name\":
        ";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
            // line 15
            echo "            \"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
            echo "\"
        ";
        } else {
            // line 17
            echo "            \"Daniel Yeo\"
        ";
        }
        // line 19
        echo "    },
    \"image\":
    ";
        // line 21
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "image", array()))) {
            // line 22
            echo "        \"";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "image", array())), "url", array());
            echo "\"
    ";
        } else {
            // line 24
            echo "        \"http://www.dkcy.com";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/leaf_logo.png");
            echo "\"
    ";
        }
        // line 25
        echo ",
    \"headline\": \"";
        // line 26
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "\",
    \"datePublished\": \"";
        // line 27
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "publish_date", array()), "Y-m-d-");
        echo "\",
    \"dateModified\": \"";
        // line 28
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y-m-d-");
        echo "\",
    \"description\": \"";
        // line 29
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array()));
        echo "\",
    \"publisher\": {
        \"@type\": \"Organization\",
        \"name\": 
            ";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
            // line 34
            echo "            \"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
            echo "\"
        ";
        } else {
            // line 36
            echo "            \"Daniel Yeo\"
        ";
        }
        // line 37
        echo ",
        \"logo\": {
            \"@type\": \"ImageObject\",
            \"url\": \"http://www.dkcy.com";
        // line 40
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/leaf_logo.png");
        echo "\"
        }
    }
}
</script>

";
        // line 48
        if ((($context["type"] ?? null) == "snippet")) {
            // line 49
            echo "    <div class=\"container snippet pure-g\">
        <div class=\"card-image pure-u-1 pure-u-md-1-3 pure-u-lg-1-2\">
        ";
            // line 51
            if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
                // line 52
                echo "            ";
                echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 100, 1 => 100), "method"), "html", array(0 => "", 1 => "", 2 => "pure-img flex-img pure-hidden-mobile"), "method");
                echo "
        ";
            } else {
                // line 54
                echo "            <img class=\"pure-img flex-img pure-hidden-mobile\" src=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/leaf_logo.png");
                echo "\" />
        ";
            }
            // line 56
            echo "        </div>
        <div class=\"card-content pure-u-1 pure-u-md-2-3 pure-u-lg-1-2\">
            <h1><a href=\"";
            // line 58
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h1>
            <time class=\"meta\" datetime=\"";
            // line 59
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y-m-d");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d M Y");
            echo "</time>
            <div>";
            // line 60
            echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array())), 220, true);
            echo "</div>
        </div>
    </div>
";
        } else {
            // line 65
            echo "    <div class=\"container highlight pure-g\">
        <div class=\"card-image pure-u-1 pure-u-md-1 pure-u-lg-1-3\">
        ";
            // line 67
            if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
                // line 68
                echo "
            <a href=\"";
                // line 69
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 400, 1 => 200), "method"), "html", array(0 => "", 1 => "", 2 => "pure-img flex-img"), "method");
                echo "</a>
        ";
            } else {
                // line 71
                echo "            <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><img class=\"pure-img flex-img\" src=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/leaf_logo.png");
                echo "\" /></a>
        ";
            }
            // line 73
            echo "        </div>
        <div class=\"card-content pure-u-1 pure-u-md-1 pure-u-lg-2-3\">
            <h1><a href=\"";
            // line 75
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h1>
            <time class=\"meta\" datetime=\"";
            // line 76
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y-m-d");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d M Y");
            echo "</time>
            <div>";
            // line 77
            echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array())), 640, true);
            echo "</div>
        </div>
    </div>        
";
        }
        // line 81
        echo "</article>";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 81,  199 => 77,  193 => 76,  187 => 75,  183 => 73,  175 => 71,  168 => 69,  165 => 68,  163 => 67,  159 => 65,  152 => 60,  146 => 59,  140 => 58,  136 => 56,  130 => 54,  124 => 52,  122 => 51,  118 => 49,  116 => 48,  107 => 40,  102 => 37,  98 => 36,  92 => 34,  90 => 33,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  68 => 25,  62 => 24,  56 => 22,  54 => 21,  50 => 19,  46 => 17,  40 => 15,  38 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"card pure-u-1{% if type=='snippet' %}pure-u-md-1 pure-u-lg-1-3 {% endif %}\">

<script type=\"application/ld+json\">
{
    \"@context\": \"http://schema.org\",
    \"@type\": \"BlogPosting\",
    \"mainEntityOfPage\": {
        \"@type\": \"Blog\",
        \"@id\": \"http://www.dkcy.com\"
    },
    \"author\": {
        \"@type\": \"Person\",
        \"name\":
        {% if page.header.author.name %}
            \"{{ page.header.author.name }}\"
        {% else %}
            \"Daniel Yeo\"
        {% endif %}
    },
    \"image\":
    {% if page.media.image|first %}
        \"{{ page.media.image|first.url }}\"
    {% else %}
        \"http://www.dkcy.com{{ url('theme://images/leaf_logo.png') }}\"
    {% endif %},
    \"headline\": \"{{ page.title }}\",
    \"datePublished\": \"{{ page.publish_date | date (\"Y-m-d-\") }}\",
    \"dateModified\": \"{{ page.date | date (\"Y-m-d-\") }}\",
    \"description\": \"{{ page.summary | striptags }}\",
    \"publisher\": {
        \"@type\": \"Organization\",
        \"name\": 
            {% if page.header.author.name %}
            \"{{ page.header.author.name }}\"
        {% else %}
            \"Daniel Yeo\"
        {% endif %},
        \"logo\": {
            \"@type\": \"ImageObject\",
            \"url\": \"http://www.dkcy.com{{ url('theme://images/leaf_logo.png') }}\"
        }
    }
}
</script>

{# Preview listing #}
{# Snippet preview #}
{% if type=='snippet' %}
    <div class=\"container snippet pure-g\">
        <div class=\"card-image pure-u-1 pure-u-md-1-3 pure-u-lg-1-2\">
        {% if page.media.images|first %}
            {{ page.media.images|first.cropZoom(100,100).html(\"\",\"\",\"pure-img flex-img pure-hidden-mobile\") }}
        {% else %}
            <img class=\"pure-img flex-img pure-hidden-mobile\" src=\"{{ url('theme://images/leaf_logo.png') }}\" />
        {% endif %}
        </div>
        <div class=\"card-content pure-u-1 pure-u-md-2-3 pure-u-lg-1-2\">
            <h1><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
            <time class=\"meta\" datetime=\"{{ page.date | date(\"Y-m-d\") }}\">{{ page.date|date(\"d M Y\") }}</time>
            <div>{{ page.summary|striptags|truncate(220,true) }}</div>
        </div>
    </div>
{% else %}
{# Highlight preview #}
    <div class=\"container highlight pure-g\">
        <div class=\"card-image pure-u-1 pure-u-md-1 pure-u-lg-1-3\">
        {% if page.media.images|first %}

            <a href=\"{{ page.url }}\">{{ page.media.images|first.cropZoom(400,200).html(\"\",\"\",\"pure-img flex-img\") }}</a>
        {% else %}
            <a href=\"{{ page.url }}\"><img class=\"pure-img flex-img\" src=\"{{ url('theme://images/leaf_logo.png') }}\" /></a>
        {% endif %}
        </div>
        <div class=\"card-content pure-u-1 pure-u-md-1 pure-u-lg-2-3\">
            <h1><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
            <time class=\"meta\" datetime=\"{{ page.date | date(\"Y-m-d\") }}\">{{ page.date|date(\"d M Y\") }}</time>
            <div>{{ page.summary|striptags|truncate(640,true) }}</div>
        </div>
    </div>        
{% endif %}
</article>", "partials/blog_item.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/partials/blog_item.html.twig");
    }
}
