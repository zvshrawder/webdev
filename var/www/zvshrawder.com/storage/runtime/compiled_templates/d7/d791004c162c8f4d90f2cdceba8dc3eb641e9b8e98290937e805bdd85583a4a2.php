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

/* _includes/forms/textarea */
class __TwigTemplate_b04c2cbc0d6e08d2167d509eea915c6cdf1606b4fa81bf7febb12de397f4f57f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms/textarea");
        // line 1
        $context["class"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter([0 => "text", 1 => (((        // line 3
(isset($context["class"]) || array_key_exists("class", $context)) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })())) : (null)), 2 => (((        // line 4
(isset($context["size"]) || array_key_exists("size", $context)) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 4, $this->source); })()))) ? (null) : ("fullwidth"))]), " ");
        // line 7
        $context["rows"] = (((isset($context["rows"]) || array_key_exists("rows", $context))) ? ((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 7, $this->source); })())) : (2));
        // line 8
        $context["cols"] = (((isset($context["cols"]) || array_key_exists("cols", $context))) ? ((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 8, $this->source); })())) : (50));
        // line 10
        echo "<textarea class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" cols=\"";
        echo twig_escape_filter($this->env, (isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\"";
        // line 11
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 12
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 13
        if (((isset($context["maxlength"]) || array_key_exists("maxlength", $context)) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 13, $this->source); })()))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 14
        if (((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new RuntimeError('Variable "showCharsLeft" does not exist.', 14, $this->source); })()))) {
            echo " data-show-chars-left";
        }
        // line 15
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new RuntimeError('Variable "autofocus" does not exist.', 15, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 15, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method"))) {
            echo " autofocus";
        }
        // line 16
        if (((isset($context["readonly"]) || array_key_exists("readonly", $context)) && (isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 16, $this->source); })()))) {
            echo " readonly ";
        }
        // line 17
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 17, $this->source); })()))) {
            echo " disabled";
        }
        // line 18
        if ((isset($context["placeholder"]) || array_key_exists("placeholder", $context))) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 19
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        (((isset($context["value"]) || array_key_exists("value", $context))) ? (print (twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()), "html", null, true))) : (print (null)));
        echo "</textarea>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/textarea");
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 0,  94 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  66 => 13,  60 => 12,  54 => 11,  46 => 10,  44 => 8,  42 => 7,  40 => 4,  39 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set class = [
    'text',
    (class is defined and class ? class : null),
    (size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

{%- set rows = (rows is defined ? rows : 2) %}
{%- set cols = (cols is defined ? cols : 50) -%}

<textarea class=\"{{ class }}\" rows=\"{{ rows }}\" cols=\"{{ cols }}\"
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if maxlength is defined and maxlength %} maxlength=\"{{ maxlength }}\"{% endif %}
    {%- if showCharsLeft is defined and showCharsLeft %} data-show-chars-left{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if readonly is defined and readonly %} readonly {% endif %}
    {%- if disabled is defined and disabled %} disabled{% endif %}
    {%- if placeholder is defined %} placeholder=\"{{ placeholder }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>{{ value is defined ? value : null }}</textarea>
", "_includes/forms/textarea", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms/textarea.html");
    }
}
