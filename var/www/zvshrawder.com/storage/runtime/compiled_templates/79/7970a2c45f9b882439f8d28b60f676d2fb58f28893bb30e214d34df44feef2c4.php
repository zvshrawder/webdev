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

/* _includes/forms/text */
class __TwigTemplate_4067beba28dbb79aae3c529d521955720b327a60e02dcf5c02283f0e0786b90e extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/text");
        // line 1
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })())) : ("text"));
        // line 2
        $context["autocomplete"] = (((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context))) ? ((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 2, $this->source); })())) : (false));
        // line 4
        $context["class"] = $this->extensions['craft\web\twig\Extension']->filterFilter([0 => "text", 1 => (((        // line 6
(isset($context["class"]) || array_key_exists("class", $context)) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 6, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 6, $this->source); })())) : (null)), 2 => (((        // line 7
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()) == "password")) ? ("password") : (null)), 3 => (((        // line 8
(isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })()))) ? ("disabled") : (null)), 4 => (((        // line 9
(isset($context["size"]) || array_key_exists("size", $context)) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 9, $this->source); })()))) ? (null) : ("fullwidth"))]);
        // line 12
        $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["class" =>         // line 13
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 13, $this->source); })()), "type" =>         // line 14
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), "id" => ((        // line 15
$context["id"]) ?? (false)), "size" => ((        // line 16
$context["size"]) ?? (false)), "name" => ((        // line 17
$context["name"]) ?? (false)), "value" => ((        // line 18
$context["value"]) ?? (false)), "maxlength" => ((        // line 19
$context["maxlength"]) ?? (false)), "autofocus" => (((        // line 20
$context["autofocus"]) ?? (false)) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 20, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method")), "autocomplete" => (( !(        // line 21
(isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 21, $this->source); })()) === null)) ? (((((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 21, $this->source); })()) === true)) ? ("on") : ((((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 21, $this->source); })())) ? (false) : ("off"))))) : ("")), "autocorrect" => ((((        // line 22
$context["autocorrect"]) ?? (true))) ? (false) : ("off")), "autocapitalize" => ((((        // line 23
$context["autocapitalize"]) ?? (true))) ? (false) : ("off")), "disabled" => ((        // line 24
$context["disabled"]) ?? (false)), "readonly" => ((        // line 25
$context["readonly"]) ?? (false)), "title" => ((        // line 26
$context["title"]) ?? (false)), "placeholder" => ((        // line 27
$context["placeholder"]) ?? (false)), "step" => ((        // line 28
$context["step"]) ?? (false)), "min" => ((        // line 29
$context["min"]) ?? (false)), "max" => ((        // line 30
$context["max"]) ?? (false))], ((        // line 31
$context["inputAttributes"]) ?? ([])), true);
        // line 33
        if (        $this->hasBlock("attr", $context, $blocks)) {
            // line 34
            $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 34, $this->source); })()), $this->extensions['craft\web\twig\Extension']->parseAttrFilter((("<div " .             $this->renderBlock("attr", $context, $blocks)) . ">")), true);
        }
        // line 37
        if ((($context["showCharsLeft"]) ?? (false))) {
            // line 38
            $context["inputAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 38, $this->source); })()), ["data" => ["show-chars-left" =>             // line 40
(isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new RuntimeError('Variable "showCharsLeft" does not exist.', 40, $this->source); })())], "style" => [("padding-" . (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,             // line 43
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 43, $this->source); })()), "app", []), "locale", []), "getOrientation", [], "method") == "ltr")) ? ("right") : ("left"))) => (((($context["maxlength"]) ?? (false))) ? ((((7.2 * twig_length_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 43, $this->source); })()))) + 14) . "px")) : (""))]], true);
        }
        // line 48
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 48, $this->source); })()) == "password")) {
            // line 49
            echo "<div class=\"passwordwrapper\">";
            // line 50
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("input", (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 50, $this->source); })()));
            // line 51
            echo "</div>";
        } else {
            // line 53
            echo $this->extensions['craft\web\twig\Extension']->tagFunction("input", (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 53, $this->source); })()));
        }
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/text");
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 0,  90 => 53,  87 => 51,  85 => 50,  83 => 49,  81 => 48,  78 => 43,  77 => 40,  76 => 38,  74 => 37,  71 => 34,  69 => 33,  67 => 31,  66 => 30,  65 => 29,  64 => 28,  63 => 27,  62 => 26,  61 => 25,  60 => 24,  59 => 23,  58 => 22,  57 => 21,  56 => 20,  55 => 19,  54 => 18,  53 => 17,  52 => 16,  51 => 15,  50 => 14,  49 => 13,  48 => 12,  46 => 9,  45 => 8,  44 => 7,  43 => 6,  42 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set type = (type is defined ? type : 'text') %}
{%- set autocomplete = (autocomplete is defined ? autocomplete : false) %}

{%- set class = [
    'text',
    (class is defined and class ? class : null),
    (type == 'password' ? 'password' : null),
    (disabled is defined and disabled ? 'disabled' : null),
    (size is defined and size ? null : 'fullwidth')
]|filter %}

{%- set inputAttributes = {
    class: class,
    type: type,
    id: id ?? false,
    size: size ?? false,
    name: name ?? false,
    value: value ?? false,
    maxlength: maxlength ?? false,
    autofocus: (autofocus ?? false) and not craft.app.request.isMobileBrowser(true),
    autocomplete: autocomplete is not same as(null) ? (autocomplete is same as(true) ? 'on' : (autocomplete ? false : 'off' )),
    autocorrect: (autocorrect ?? true) ? false : 'off',
    autocapitalize: (autocapitalize ?? true) ? false : 'off',
    disabled: disabled ?? false,
    readonly: readonly ?? false,
    title: title ?? false,
    placeholder: placeholder ?? false,
    step: step ?? false,
    min: min ?? false,
    max: max ?? false,
}|merge(inputAttributes ?? [], recursive=true) %}

{%- if block('attr') is defined %}
    {%- set inputAttributes = inputAttributes|merge(('<div ' ~ block('attr') ~ '>')|parseAttr, recursive=true) %}
{%- endif %}

{%- if showCharsLeft ?? false %}
    {%- set inputAttributes = inputAttributes|merge({
        data: {
            'show-chars-left': showCharsLeft,
        },
        style: {
            (\"padding-#{craft.app.locale.getOrientation() == 'ltr' ? 'right' : 'left'}\"): (maxlength ?? false) ? \"#{7.2*maxlength|length+14}px\",
        },
    }, recursive=true) %}
{%- endif %}

{%- if type == 'password' -%}
    <div class=\"passwordwrapper\">
        {{- tag('input', inputAttributes) -}}
    </div>
{%- else %}
    {{- tag('input', inputAttributes) }}
{%- endif -%}
", "_includes/forms/text", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms/text.html");
    }
}
