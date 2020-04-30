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

/* _includes/forms/field */
class __TwigTemplate_ab9311bf83e8d5a089786df651008f7dab539e2aa2b657e95f34abd2eef9eb34 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms/field");
        // line 1
        $context["labelId"] = (((isset($context["labelId"]) || array_key_exists("labelId", $context))) ? ((isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new RuntimeError('Variable "labelId" does not exist.', 1, $this->source); })())) : ((((isset($context["id"]) || array_key_exists("id", $context))) ? (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()) . "-label")) : (null))));
        // line 2
        $context["fieldId"] = (((isset($context["fieldId"]) || array_key_exists("fieldId", $context))) ? ((isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 2, $this->source); })())) : ((((isset($context["id"]) || array_key_exists("id", $context))) ? (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()) . "-field")) : (null))));
        // line 3
        $context["status"] = (($context["status"]) ?? (null));
        // line 4
        $context["label"] = ((((isset($context["label"]) || array_key_exists("label", $context)) && ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 4, $this->source); })()) != "__blank__"))) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 4, $this->source); })())) : (((        $this->hasBlock("label", $context, $blocks)) ? (        $this->renderBlock("label", $context, $blocks)) : (null))));
        // line 5
        $context["siteId"] = (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "app", []), "getIsMultiSite", [], "method") && (isset($context["siteId"]) || array_key_exists("siteId", $context)))) ? ((isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new RuntimeError('Variable "siteId" does not exist.', 5, $this->source); })())) : (null));
        // line 6
        $context["site"] = (((isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new RuntimeError('Variable "siteId" does not exist.', 6, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 6, $this->source); })()), "app", []), "sites", []), "getSiteById", [0 => (isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new RuntimeError('Variable "siteId" does not exist.', 6, $this->source); })())], "method")) : (null));
        // line 7
        $context["required"] = (($context["required"]) ?? (false));
        // line 8
        $context["instructions"] = (($context["instructions"]) ?? (((        $this->hasBlock("instructions", $context, $blocks)) ? (        $this->renderBlock("instructions", $context, $blocks)) : (null))));
        // line 9
        $context["tip"] = (($context["tip"]) ?? (((        $this->hasBlock("tip", $context, $blocks)) ? (        $this->renderBlock("tip", $context, $blocks)) : (null))));
        // line 10
        $context["warning"] = (($context["warning"]) ?? (((        $this->hasBlock("warning", $context, $blocks)) ? (        $this->renderBlock("warning", $context, $blocks)) : (null))));
        // line 11
        $context["orientation"] = craft\helpers\Template::attribute($this->env, $this->source, (((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 11, $this->source); })()), "app", []), "i18n", []), "getLocaleById", [0 => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "language", [])], "method")) : (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 11, $this->source); })()), "app", []), "locale", []))), "getOrientation", [], "method");
        // line 12
        $context["translatable"] = (($context["translatable"]) ?? ( !((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()) === null)));
        // line 13
        $context["errors"] = (((isset($context["errors"]) || array_key_exists("errors", $context))) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 13, $this->source); })())) : (null));
        // line 14
        $context["fieldClass"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter([0 => "field", 1 => (((        // line 16
(isset($context["first"]) || array_key_exists("first", $context)) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 16, $this->source); })()))) ? ("first") : (null)), 2 => ((        // line 17
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })())) ? ("has-errors") : (null)), 3 => (((        // line 18
(isset($context["fieldClass"]) || array_key_exists("fieldClass", $context)) && (isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new RuntimeError('Variable "fieldClass" does not exist.', 18, $this->source); })()))) ? ((isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new RuntimeError('Variable "fieldClass" does not exist.', 18, $this->source); })())) : (null))]), " ");
        // line 21
        $context["fieldAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" =>         // line 22
(isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new RuntimeError('Variable "fieldClass" does not exist.', 22, $this->source); })()), "id" =>         // line 23
(isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 23, $this->source); })())], ((        // line 24
$context["fieldAttributes"]) ?? ([])), true);
        // line 26
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 27
            $context["fieldAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["fieldAttributes"]) || array_key_exists("fieldAttributes", $context) ? $context["fieldAttributes"] : (function () { throw new RuntimeError('Variable "fieldAttributes" does not exist.', 27, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 30
        $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" => $this->extensions['craft\web\twig\Extension']->filterFilter([0 => "input", 1 =>         // line 31
(isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new RuntimeError('Variable "orientation" does not exist.', 31, $this->source); })()), 2 => (((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 31, $this->source); })())) ? ("errors") : (""))])], ((        // line 32
$context["inputAttributes"]) ?? ([])), true);
        // line 33
        echo "
<div ";
        // line 34
        echo craft\helpers\Html::renderTagAttributes((isset($context["fieldAttributes"]) || array_key_exists("fieldAttributes", $context) ? $context["fieldAttributes"] : (function () { throw new RuntimeError('Variable "fieldAttributes" does not exist.', 34, $this->source); })()));
        echo ">
    ";
        // line 35
        if ((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "        ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("div", ["class" => [0 => "status-badge", 1 => craft\helpers\Template::attribute($this->env, $this->source,             // line 37
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 37, $this->source); })()), 0, [], "array")], "text" => twig_upper_filter($this->env, twig_slice($this->env, craft\helpers\Template::attribute($this->env, $this->source,             // line 38
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 38, $this->source); })()), 1, [], "array"), 0, 1)), "title" => craft\helpers\Template::attribute($this->env, $this->source,             // line 39
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 39, $this->source); })()), 1, [], "array")]);
            // line 40
            echo "
    ";
        }
        // line 42
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 42, $this->source); })()) || (isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "        <div class=\"heading\">
            ";
            // line 44
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 44, $this->source); })())) {
                // line 45
                $context["labelAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["id" =>                 // line 46
(isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new RuntimeError('Variable "labelId" does not exist.', 46, $this->source); })()), "class" => ((                // line 47
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 47, $this->source); })())) ? ([0 => "required"]) : ("")), "for" => ((                // line 48
$context["id"]) ?? (null))], ((                // line 49
$context["labelAttributes"]) ?? ([])), true);
                // line 50
                echo "                <label ";
                echo craft\helpers\Html::renderTagAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 50, $this->source); })()));
                echo ">";
                // line 51
                echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 51, $this->source); })());
                // line 52
                if ((isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new RuntimeError('Variable "translatable" does not exist.', 52, $this->source); })())) {
                    // line 53
                    echo "                        ";
                    echo $this->extensions['craft\web\twig\Extension']->tagFunction("span", ["class" => [0 => "extralight"], "data" => ["icon" => "language"], "title" => ((                    // line 58
$context["translationDescription"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("This field is translatable.", "app")))]);
                    // line 59
                    echo "
                    ";
                }
                // line 61
                echo "</label>
            ";
            }
            // line 63
            echo "            ";
            if ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 63, $this->source); })())) {
                // line 64
                echo "                ";
                echo $this->extensions['craft\web\twig\Extension']->tagFunction("div", ["class" => [0 => "instructions"], "html" => $this->extensions['craft\web\twig\Extension']->replaceFilter($this->extensions['craft\web\twig\Extension']->markdownFilter(                // line 66
(isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 66, $this->source); })()), "gfm-comment"), "/&amp;(\\w+);/", "&\$1;")]);
                // line 67
                echo "
            ";
            }
            // line 69
            echo "        </div>
    ";
        }
        // line 71
        echo "    <div ";
        echo craft\helpers\Html::renderTagAttributes((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 71, $this->source); })()));
        echo ">
        ";
        // line 72
        $this->displayBlock('input', $context, $blocks);
        // line 75
        echo "    </div>
    ";
        // line 76
        if ((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "        ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("p", ["class" => [0 => "notice", 1 => "with-icon"], "html" => $this->extensions['craft\web\twig\Extension']->replaceFilter($this->extensions['craft\web\twig\Extension']->markdownFilter(            // line 79
(isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 79, $this->source); })()), null, true), "/&amp;(\\w+);/", "&\$1;")]);
            // line 80
            echo "
    ";
        }
        // line 82
        echo "    ";
        if ((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "        ";
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("p", ["class" => [0 => "warning", 1 => "with-icon"], "html" => $this->extensions['craft\web\twig\Extension']->replaceFilter($this->extensions['craft\web\twig\Extension']->markdownFilter(            // line 85
(isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 85, $this->source); })()), null, true), "/&amp;(\\w+);/", "&\$1;")]);
            // line 86
            echo "
    ";
        }
        // line 88
        echo "    ";
        $this->loadTemplate("_includes/forms/errorList", "_includes/forms/field", 88)->display(twig_array_merge($context, ["errors" => (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 88, $this->source); })())]));
        // line 89
        echo "</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/field");
    }

    // line 72
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "input");
        // line 73
        echo "            ";
        echo (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 73, $this->source); })());
        echo "
        ";
        // line 0
        craft\helpers\Template::endProfile("block", "input");
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 0,  199 => 73,  197 => 0,  193 => 72,  189 => 0,  186 => 89,  183 => 88,  179 => 86,  177 => 85,  175 => 83,  172 => 82,  168 => 80,  166 => 79,  164 => 77,  162 => 76,  159 => 75,  157 => 72,  152 => 71,  148 => 69,  144 => 67,  142 => 66,  140 => 64,  137 => 63,  133 => 61,  129 => 59,  127 => 58,  125 => 53,  123 => 52,  121 => 51,  117 => 50,  115 => 49,  114 => 48,  113 => 47,  112 => 46,  111 => 45,  109 => 44,  106 => 43,  103 => 42,  99 => 40,  97 => 39,  96 => 38,  95 => 37,  93 => 36,  91 => 35,  87 => 34,  84 => 33,  82 => 32,  81 => 31,  80 => 30,  77 => 27,  75 => 26,  73 => 24,  72 => 23,  71 => 22,  70 => 21,  68 => 18,  67 => 17,  66 => 16,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set labelId = (labelId is defined ? labelId : (id is defined ? id~'-label' : null)) %}
{%- set fieldId = (fieldId is defined ? fieldId : (id is defined ? id~'-field' : null)) %}
{%- set status = status ?? null %}
{%- set label = label is defined and label != '__blank__' ? label : (block('label') ?? null) %}
{%- set siteId = ((craft.app.getIsMultiSite() and siteId is defined) ? siteId : null) %}
{%- set site = (siteId ? craft.app.sites.getSiteById(siteId) : null) %}
{%- set required = required ?? false %}
{%- set instructions = instructions ?? block('instructions') ?? null %}
{%- set tip = tip ?? block('tip') ?? null %}
{%- set warning = warning ?? block('warning') ?? null %}
{%- set orientation = (site ? craft.app.i18n.getLocaleById(site.language) : craft.app.locale).getOrientation() %}
{%- set translatable = translatable ?? (site is not same as(null)) %}
{%- set errors = (errors is defined ? errors : null) -%}
{%- set fieldClass = [
    'field',
    (first is defined and first ? 'first' : null),
    (errors ? 'has-errors' : null),
    (fieldClass is defined and fieldClass ? fieldClass : null)
]|filter|join(' ') %}

{%- set fieldAttributes = {
    class: fieldClass,
    id: fieldId,
}|merge(fieldAttributes ?? [], recursive=true) %}

{%- if block('attr') is defined %}
    {%- set fieldAttributes = fieldAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{% endif %}

{%- set inputAttributes = {
    class: ['input', orientation, errors ? 'errors']|filter,
}|merge(inputAttributes ?? [], recursive=true) %}

<div {{ attr(fieldAttributes) }}>
    {% if status %}
        {{ tag('div', {
            class: ['status-badge', status[0]],
            text: status[1][0:1]|upper,
            title: status[1],
        }) }}
    {% endif %}
    {% if label or instructions %}
        <div class=\"heading\">
            {% if label %}
                {%- set labelAttributes = {
                    id: labelId,
                    class: required ? ['required'],
                    for: id ?? null,
                }|merge(labelAttributes ?? [], recursive=true) %}
                <label {{ attr(labelAttributes) }}>
                    {{- label|raw -}}
                    {%- if translatable %}
                        {{ tag('span', {
                            class: ['extralight'],
                            data: {
                                icon: 'language',
                            },
                            title: translationDescription ?? 'This field is translatable.'|t('app'),
                        }) }}
                    {% endif -%}
                </label>
            {% endif %}
            {% if instructions %}
                {{ tag('div', {
                    class: ['instructions'],
                    html: instructions|md('gfm-comment')|replace('/&amp;(\\\\w+);/', '&\$1;'),
                }) }}
            {% endif %}
        </div>
    {% endif %}
    <div {{ attr(inputAttributes) }}>
        {% block input %}
            {{ input|raw }}
        {% endblock %}
    </div>
    {% if tip %}
        {{ tag('p', {
            class: ['notice', 'with-icon'],
            html: tip|md(inlineOnly=true)|replace('/&amp;(\\\\w+);/', '&\$1;'),
        }) }}
    {% endif %}
    {% if warning %}
        {{ tag('p', {
            class: ['warning', 'with-icon'],
            html: warning|md(inlineOnly=true)|replace('/&amp;(\\\\w+);/', '&\$1;'),
        }) }}
    {% endif %}
    {% include \"_includes/forms/errorList\" with { errors: errors } %}
</div>
", "_includes/forms/field", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms/field.html");
    }
}
