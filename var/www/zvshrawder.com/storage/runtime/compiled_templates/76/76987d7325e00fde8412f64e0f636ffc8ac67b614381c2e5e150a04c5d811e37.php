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

/* _layouts/basecp */
class __TwigTemplate_20b8de9f234c1b4714c6d3afea61781611733bf7b6cf0bdd85bc48bb6bec8066 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'foot' => [$this, 'block_foot'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "_layouts/basecp");
        // line 4
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 4, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method")) {
            // line 5
            $context["bodyClass"] = (((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context)) && (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 5, $this->source); })()))) ? (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 5, $this->source); })()) . " ")) : ("")) . "mobile");
        }
        // line 8
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 8, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Show", 1 => "Hide"]], "method");
        // line 13
        $context["localeData"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 13, $this->source); })()), "app", []), "locale", []);
        // line 14
        $context["orientation"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["localeData"]) || array_key_exists("localeData", $context) ? $context["localeData"] : (function () { throw new RuntimeError('Variable "localeData" does not exist.', 14, $this->source); })()), "getOrientation", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("_layouts/base", "_layouts/basecp", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/basecp");
    }

    // line 16
    public function block_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "foot");
        // line 17
        echo "    <form id=\"x\" method=\"post\" accept-charset=\"UTF-8\">
        ";
        // line 18
        echo craft\helpers\Html::csrfInput();
        echo "
    </form>
    <noscript>
        <div class=\"message-container no-access\">
            <div class=\"pane\">
                <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("JavaScript must be enabled to access the Craft CMS control panel.", "app"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </noscript>

    ";
        // line 28
        ob_start();
        // line 29
        echo "        // Picture element HTML5 shiv
        document.createElement('picture');
    ";
        Craft::$app->getView()->registerJs(ob_get_clean(), 1);
        // line 0
        craft\helpers\Template::endProfile("block", "foot");
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 0,  89 => 29,  87 => 28,  79 => 23,  71 => 18,  68 => 17,  66 => 0,  62 => 16,  58 => 0,  55 => 1,  53 => 14,  51 => 13,  49 => 8,  46 => 5,  44 => 4,  42 => 0,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/base\" %}

{# Give the body a .mobile class for mobile devices #}
{% if craft.app.request.isMobileBrowser(true) %}
    {% set bodyClass = (bodyClass is defined and bodyClass ? bodyClass~' ' : '') ~ 'mobile' %}
{% endif %}

{% do view.registerTranslations('app', [
    \"Show\",
    \"Hide\",
]) %}

{% set localeData = craft.app.locale %}
{% set orientation = localeData.getOrientation() %}

{% block foot %}
    <form id=\"x\" method=\"post\" accept-charset=\"UTF-8\">
        {{ csrfInput() }}
    </form>
    <noscript>
        <div class=\"message-container no-access\">
            <div class=\"pane\">
                <p>{{ \"JavaScript must be enabled to access the Craft CMS control panel.\"|t('app') }}</p>
            </div>
        </div>
    </noscript>

    {% js at head %}
        // Picture element HTML5 shiv
        document.createElement('picture');
    {% endjs %}
{% endblock %}
", "_layouts/basecp", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_layouts/basecp.html");
    }
}
