<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* utilities/_index */
class __TwigTemplate_35d9cac522d5a7b1d1d8c23021c6449328e28b45e3b6134802ef527ef45bfcac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sidebar' => [$this, 'block_sidebar'],
            'toolbar' => [$this, 'block_toolbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "utilities/_index");
        // line 3
        $context["title"] = (isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 3, $this->source); })());
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "utilities/_index", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "utilities/_index");
    }

    // line 5
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "sidebar");
        // line 6
        echo "    <nav>
        <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilities"]) || array_key_exists("utilities", $context) ? $context["utilities"] : (function () { throw new RuntimeError('Variable "utilities" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utility"]) {
            // line 9
            echo "                ";
            $context["selected"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "id", []) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()));
            // line 10
            echo "                <li>
                    <a class=\"";
            // line 11
            if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 11, $this->source); })())) {
                echo "sel";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "badgeCount", [])) {
                echo "has-badge";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("utilities/" . craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "id", []))), "html", null, true);
            echo "\">
                        <span class=\"icon icon-mask\">";
            // line 12
            echo craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "iconSvg", []);
            echo "</span>
                        <span class=\"label\">";
            // line 13
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "displayName", []), "html", null, true);
            echo "</span>
                        ";
            // line 14
            if (( !(isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 14, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "badgeCount", []))) {
                // line 15
                echo "                            <span class=\"badge\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [craft\helpers\Template::attribute($this->env, $this->source, $context["utility"], "badgeCount", []), 0]), "html", null, true);
                echo "</span>
                        ";
            }
            // line 17
            echo "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
    </nav>
";
        // line 0
        craft\helpers\Template::endProfile("block", "sidebar");
    }

    // line 24
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "toolbar");
        // line 25
        echo "    ";
        echo (isset($context["toolbarHtml"]) || array_key_exists("toolbarHtml", $context) ? $context["toolbarHtml"] : (function () { throw new RuntimeError('Variable "toolbarHtml" does not exist.', 25, $this->source); })());
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "toolbar");
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "content");
        // line 29
        echo "    ";
        echo (isset($context["contentHtml"]) || array_key_exists("contentHtml", $context) ? $context["contentHtml"] : (function () { throw new RuntimeError('Variable "contentHtml" does not exist.', 29, $this->source); })());
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "content");
    }

    // line 32
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "footer");
        // line 33
        echo "    ";
        echo (isset($context["footerHtml"]) || array_key_exists("footerHtml", $context) ? $context["footerHtml"] : (function () { throw new RuntimeError('Variable "footerHtml" does not exist.', 33, $this->source); })());
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "footer");
    }

    public function getTemplateName()
    {
        return "utilities/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 0,  154 => 33,  152 => 0,  148 => 32,  144 => 0,  139 => 29,  137 => 0,  133 => 28,  129 => 0,  124 => 25,  122 => 0,  118 => 24,  114 => 0,  110 => 20,  102 => 17,  96 => 15,  94 => 14,  90 => 13,  86 => 12,  76 => 11,  73 => 10,  70 => 9,  66 => 8,  62 => 6,  60 => 0,  56 => 5,  52 => 0,  49 => 1,  47 => 3,  45 => 0,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}

{% set title = displayName %}

{% block sidebar %}
    <nav>
        <ul>
            {% for utility in utilities %}
                {% set selected = utility.id == id %}
                <li>
                    <a class=\"{% if selected %}sel{% elseif utility.badgeCount %}has-badge{% endif %}\" href=\"{{ url('utilities/'~utility.id) }}\">
                        <span class=\"icon icon-mask\">{{ utility.iconSvg|raw }}</span>
                        <span class=\"label\">{{ utility.displayName }}</span>
                        {% if not selected and utility.badgeCount %}
                            <span class=\"badge\">{{ utility.badgeCount|number(decimals=0) }}</span>
                        {% endif %}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </nav>
{% endblock %}

{% block toolbar %}
    {{ toolbarHtml|raw }}
{% endblock %}

{% block content %}
    {{ contentHtml|raw }}
{% endblock %}

{% block footer %}
    {{ footerHtml|raw }}
{% endblock %}
", "utilities/_index", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/utilities/_index.html");
    }
}
