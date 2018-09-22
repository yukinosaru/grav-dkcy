<?php

/* item.html.twig */
class __TwigTemplate_8f4eddd46e3df6c6e2ec26d77555a5343843522fc3d4b89abe9814a91dcda171 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1210083651")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}
{% if base_url == '/' %}
  {% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
  {% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
\t<article class=\"card pure-u-1\">
\t\t<script type=\"application/ld+json\">
\t\t{
\t\t    \"@context\": \"http://schema.org\",
\t\t    \"@type\": \"BlogPosting\",
\t\t    \"mainEntityOfPage\": {
\t\t        \"@type\": \"Blog\",
\t\t        \"@id\": \"http://www.dkcy.com\"
\t\t    },
\t\t    \"author\": {
\t\t        \"@type\": \"Person\",
\t\t        \"name\":
\t\t        {% if page.header.author.name %}
\t\t            \"{{ page.header.author.name }}\"
\t\t        {% else %}
\t\t            \"Daniel Yeo\"
\t\t        {% endif %}
\t\t    },
\t\t    \"image\":
\t\t    {% if page.media.image|first %}
\t\t        \"{{ page.media.image|first.url }}\"
\t\t    {% else %}
\t\t        \"http://www.dkcy.com{{ url('theme://images/leaf_logo.png') }}\"
\t\t    {% endif %},
\t\t    \"headline\": \"{{ page.title }}\",
\t\t    \"datePublished\": \"{{ page.publish_date | date (\"Y-m-d-\") }}\",
\t\t    \"dateModified\": \"{{ page.date | date (\"Y-m-d-\") }}\",
\t\t    \"description\": \"{{ page.summary | striptags }}\",
\t\t    \"publisher\": {
\t\t        \"@type\": \"Organization\",
\t\t        \"name\": 
\t\t            {% if page.header.author.name %}
\t\t            \"{{ page.header.author.name }}\"
\t\t        {% else %}
\t\t            \"Daniel Yeo\"
\t\t        {% endif %},
\t\t        \"logo\": {
\t\t            \"@type\": \"ImageObject\",
\t\t            \"url\": \"http://www.dkcy.com{{ url('theme://images/leaf_logo.png') }}\"
\t\t        }
\t\t    }
\t\t}
\t</script>
  \t<meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:site\" content=\"yukinosaru\" />
    <meta property=\"og:url\" content=\"{{ page.url }}\" />
    <meta property=\"og:title\" content=\"{{ 'SITE.TITLE'|t|e('html') }} | {{ page.title }}\" />
    <meta property=\"og:description\" content=\"{{ page.summary | striptags }}\" />
    <meta property=\"og:image\" content=
        {% if page.media.images %}
            \"{{ page.media.images | first.url }}\"
        {% else %}
            \"http://www.dkcy.com{{  url('theme://images/leaf_logo.png')  }}\"
        {% endif %} />
    <div class='full-item'>
        <h1>{{ page.title }}</h1>
        <time class=\"meta\" datetime=\"{{ page.date | date(\"Y-m-d\") }}\">{{ page.date | date(\"d M Y\") }}</time>
        <div>
            {{ page.content | regex_replace(['/<img src=/'], ['<img class=\"pure-img\" src=']) }}
        </div>
    </div>
    <div class='item-nav pure-g'>
        <div class='back pure-u-1-2'>
            {% if not page.isLast %}
            <a rel=\"next\" href=\"{{ page.prevSibling.url }}\">
                {{ page.prevSibling.header.title }}<br />&lt; Previous
            </a>
            {% endif %}
        </div>
        <div class='forward pure-u-1-2'>
            {% if not page.isFirst %}
            <a rel=\"next\" href=\"{{ page.nextSibling.url }}\">
                {{ page.nextSibling.header.title }}<br />Next &gt;
            </a>
            {% endif %}
        </div>
    </div>
</article>
{% endblock %}
{% endembed %}
", "item.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_8f4eddd46e3df6c6e2ec26d77555a5343843522fc3d4b89abe9814a91dcda171_1210083651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 10
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t<article class=\"card pure-u-1\">
\t\t<script type=\"application/ld+json\">
\t\t{
\t\t    \"@context\": \"http://schema.org\",
\t\t    \"@type\": \"BlogPosting\",
\t\t    \"mainEntityOfPage\": {
\t\t        \"@type\": \"Blog\",
\t\t        \"@id\": \"http://www.dkcy.com\"
\t\t    },
\t\t    \"author\": {
\t\t        \"@type\": \"Person\",
\t\t        \"name\":
\t\t        ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
            // line 27
            echo "\t\t            \"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
            echo "\"
\t\t        ";
        } else {
            // line 29
            echo "\t\t            \"Daniel Yeo\"
\t\t        ";
        }
        // line 31
        echo "\t\t    },
\t\t    \"image\":
\t\t    ";
        // line 33
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "image", array()))) {
            // line 34
            echo "\t\t        \"";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "image", array())), "url", array());
            echo "\"
\t\t    ";
        } else {
            // line 36
            echo "\t\t        \"http://www.dkcy.com";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/leaf_logo.png");
            echo "\"
\t\t    ";
        }
        // line 37
        echo ",
\t\t    \"headline\": \"";
        // line 38
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "\",
\t\t    \"datePublished\": \"";
        // line 39
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "publish_date", array()), "Y-m-d-");
        echo "\",
\t\t    \"dateModified\": \"";
        // line 40
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y-m-d-");
        echo "\",
\t\t    \"description\": \"";
        // line 41
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array()));
        echo "\",
\t\t    \"publisher\": {
\t\t        \"@type\": \"Organization\",
\t\t        \"name\": 
\t\t            ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
            // line 46
            echo "\t\t            \"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
            echo "\"
\t\t        ";
        } else {
            // line 48
            echo "\t\t            \"Daniel Yeo\"
\t\t        ";
        }
        // line 49
        echo ",
\t\t        \"logo\": {
\t\t            \"@type\": \"ImageObject\",
\t\t            \"url\": \"http://www.dkcy.com";
        // line 52
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/leaf_logo.png");
        echo "\"
\t\t        }
\t\t    }
\t\t}
\t</script>
  \t<meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:site\" content=\"yukinosaru\" />
    <meta property=\"og:url\" content=\"";
        // line 59
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\" />
    <meta property=\"og:title\" content=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo " | ";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 61
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array()));
        echo "\" />
    <meta property=\"og:image\" content=
        ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())) {
            // line 64
            echo "            \"";
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array());
            echo "\"
        ";
        } else {
            // line 66
            echo "            \"http://www.dkcy.com";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/leaf_logo.png");
            echo "\"
        ";
        }
        // line 67
        echo " />
    <div class='full-item'>
        <h1>";
        // line 69
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        <time class=\"meta\" datetime=\"";
        // line 70
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y-m-d");
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d M Y");
        echo "</time>
        <div>
            ";
        // line 72
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->regexReplace($this->getAttribute(($context["page"] ?? null), "content", array()), array(0 => "/<img src=/"), array(0 => "<img class=\"pure-img\" src="));
        echo "
        </div>
    </div>
    <div class='item-nav pure-g'>
        <div class='back pure-u-1-2'>
            ";
        // line 77
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
            // line 78
            echo "            <a rel=\"next\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\">
                ";
            // line 79
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "header", array()), "title", array());
            echo "<br />&lt; Previous
            </a>
            ";
        }
        // line 82
        echo "        </div>
        <div class='forward pure-u-1-2'>
            ";
        // line 84
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
            // line 85
            echo "            <a rel=\"next\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
            echo "\">
                ";
            // line 86
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "header", array()), "title", array());
            echo "<br />Next &gt;
            </a>
            ";
        }
        // line 89
        echo "        </div>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 89,  351 => 86,  346 => 85,  344 => 84,  340 => 82,  334 => 79,  329 => 78,  327 => 77,  319 => 72,  312 => 70,  308 => 69,  304 => 67,  298 => 66,  292 => 64,  290 => 63,  285 => 61,  279 => 60,  275 => 59,  265 => 52,  260 => 49,  256 => 48,  250 => 46,  248 => 45,  241 => 41,  237 => 40,  233 => 39,  229 => 38,  226 => 37,  220 => 36,  214 => 34,  212 => 33,  208 => 31,  204 => 29,  198 => 27,  196 => 26,  182 => 14,  179 => 13,  175 => 1,  172 => 10,  170 => 9,  167 => 6,  165 => 5,  163 => 4,  161 => 3,  19 => 1,);
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

{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}
{% if base_url == '/' %}
  {% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
  {% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
\t<article class=\"card pure-u-1\">
\t\t<script type=\"application/ld+json\">
\t\t{
\t\t    \"@context\": \"http://schema.org\",
\t\t    \"@type\": \"BlogPosting\",
\t\t    \"mainEntityOfPage\": {
\t\t        \"@type\": \"Blog\",
\t\t        \"@id\": \"http://www.dkcy.com\"
\t\t    },
\t\t    \"author\": {
\t\t        \"@type\": \"Person\",
\t\t        \"name\":
\t\t        {% if page.header.author.name %}
\t\t            \"{{ page.header.author.name }}\"
\t\t        {% else %}
\t\t            \"Daniel Yeo\"
\t\t        {% endif %}
\t\t    },
\t\t    \"image\":
\t\t    {% if page.media.image|first %}
\t\t        \"{{ page.media.image|first.url }}\"
\t\t    {% else %}
\t\t        \"http://www.dkcy.com{{ url('theme://images/leaf_logo.png') }}\"
\t\t    {% endif %},
\t\t    \"headline\": \"{{ page.title }}\",
\t\t    \"datePublished\": \"{{ page.publish_date | date (\"Y-m-d-\") }}\",
\t\t    \"dateModified\": \"{{ page.date | date (\"Y-m-d-\") }}\",
\t\t    \"description\": \"{{ page.summary | striptags }}\",
\t\t    \"publisher\": {
\t\t        \"@type\": \"Organization\",
\t\t        \"name\": 
\t\t            {% if page.header.author.name %}
\t\t            \"{{ page.header.author.name }}\"
\t\t        {% else %}
\t\t            \"Daniel Yeo\"
\t\t        {% endif %},
\t\t        \"logo\": {
\t\t            \"@type\": \"ImageObject\",
\t\t            \"url\": \"http://www.dkcy.com{{ url('theme://images/leaf_logo.png') }}\"
\t\t        }
\t\t    }
\t\t}
\t</script>
  \t<meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:site\" content=\"yukinosaru\" />
    <meta property=\"og:url\" content=\"{{ page.url }}\" />
    <meta property=\"og:title\" content=\"{{ 'SITE.TITLE'|t|e('html') }} | {{ page.title }}\" />
    <meta property=\"og:description\" content=\"{{ page.summary | striptags }}\" />
    <meta property=\"og:image\" content=
        {% if page.media.images %}
            \"{{ page.media.images | first.url }}\"
        {% else %}
            \"http://www.dkcy.com{{  url('theme://images/leaf_logo.png')  }}\"
        {% endif %} />
    <div class='full-item'>
        <h1>{{ page.title }}</h1>
        <time class=\"meta\" datetime=\"{{ page.date | date(\"Y-m-d\") }}\">{{ page.date | date(\"d M Y\") }}</time>
        <div>
            {{ page.content | regex_replace(['/<img src=/'], ['<img class=\"pure-img\" src=']) }}
        </div>
    </div>
    <div class='item-nav pure-g'>
        <div class='back pure-u-1-2'>
            {% if not page.isLast %}
            <a rel=\"next\" href=\"{{ page.prevSibling.url }}\">
                {{ page.prevSibling.header.title }}<br />&lt; Previous
            </a>
            {% endif %}
        </div>
        <div class='forward pure-u-1-2'>
            {% if not page.isFirst %}
            <a rel=\"next\" href=\"{{ page.nextSibling.url }}\">
                {{ page.nextSibling.header.title }}<br />Next &gt;
            </a>
            {% endif %}
        </div>
    </div>
</article>
{% endblock %}
{% endembed %}
", "item.html.twig", "/home/grav/www/html/user/themes/dkcy/templates/item.html.twig");
    }
}
