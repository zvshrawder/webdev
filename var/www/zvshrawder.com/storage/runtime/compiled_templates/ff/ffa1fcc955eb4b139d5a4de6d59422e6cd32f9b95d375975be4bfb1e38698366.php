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

/* _includes/forms/checkbox */
class __TwigTemplate_07acbd2eee1b35fcc3790629a00e112e8efd088ab70349c55c252993efa21244 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/checkbox");
        // line 1
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["class"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter([0 => ((        // line 4
(isset($context["class"]) || array_key_exists("class", $context))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })())) : (null)), 1 => ((((        // line 5
(isset($context["toggle"]) || array_key_exists("toggle", $context)) &&  !twig_test_empty((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 5, $this->source); })()))) || ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context)) &&  !twig_test_empty((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new RuntimeError('Variable "reverseToggle" does not exist.', 5, $this->source); })()))))) ? ("fieldtoggle") : (null)), 2 => "checkbox"]), " ");
        // line 8
        echo "
";
        // line 9
        $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context))) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 9, $this->source); })())) : (1));
        // line 10
        $context["id"] = ((((isset($context["id"]) || array_key_exists("id", $context)) && (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()))) ? ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })())) : (("checkbox" . twig_random($this->env))));
        // line 11
        $context["label"] = (((isset($context["label"]) || array_key_exists("label", $context))) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 11, $this->source); })())) : (""));
        // line 12
        echo "
";
        // line 13
        if (((isset($context["name"]) || array_key_exists("name", $context)) && ((twig_length_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })())) < 3) || (twig_slice($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })()),  -2) != "[]")))) {
            // line 14
            echo "    ";
            echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 14, $this->source); })()), "");
            echo "
";
        }
        // line 16
        echo "
<input type=\"checkbox\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"";
        // line 18
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 20
        if (((isset($context["checked"]) || array_key_exists("checked", $context)) && (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 20, $this->source); })()))) {
            echo " checked";
        }
        // line 21
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new RuntimeError('Variable "autofocus" does not exist.', 21, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 21, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method"))) {
            echo " autofocus";
        }
        // line 22
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 22, $this->source); })()))) {
            echo " disabled";
        }
        // line 23
        if ((isset($context["toggle"]) || array_key_exists("toggle", $context))) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 24
        if ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context))) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new RuntimeError('Variable "reverseToggle" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 25
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">

<label for=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 28
        echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 28, $this->source); })());
        echo "
    ";
        // line 29
        if ((($context["info"]) ?? (null))) {
            // line 30
            echo "        <span class=\"info\">";
            echo $this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 30, $this->source); })()));
            echo "</span>
    ";
        }
        // line 32
        echo "</label>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/checkbox");
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 0,  135 => 32,  129 => 30,  127 => 29,  123 => 28,  119 => 27,  111 => 25,  105 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  81 => 19,  75 => 18,  70 => 17,  67 => 16,  61 => 14,  59 => 13,  56 => 12,  54 => 11,  52 => 10,  50 => 9,  47 => 8,  45 => 5,  44 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- spaceless %}

{% set class = [
    (class is defined ? class : null),
    ((toggle is defined and toggle is not empty) or (reverseToggle is defined and reverseToggle is not empty) ? 'fieldtoggle' : null),
    'checkbox'
]|filter|join(' ') %}

{% set value = (value is defined ? value : 1) %}
{% set id = (id is defined and id ? id : 'checkbox'~random()) %}
{% set label = (label is defined ? label) %}

{% if name is defined and (name|length < 3 or name|slice(-2) != '[]') %}
    {{ hiddenInput(name, '') }}
{% endif %}

<input type=\"checkbox\" value=\"{{ value }}\" class=\"{{ class }}\"
    {%- if id %} id=\"{{ id }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if checked is defined and checked %} checked{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if disabled is defined and disabled %} disabled{% endif %}
    {%- if toggle is defined %} data-target=\"{{ toggle }}\"{% endif %}
    {%- if reverseToggle is defined %} data-reverse-target=\"{{ reverseToggle }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>

<label for=\"{{ id }}\">
    {{ label|raw }}
    {% if info ?? null %}
        <span class=\"info\">{{ info|md|raw }}</span>
    {% endif %}
</label>

{% endspaceless -%}
", "_includes/forms/checkbox", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms/checkbox.html");
    }
}
