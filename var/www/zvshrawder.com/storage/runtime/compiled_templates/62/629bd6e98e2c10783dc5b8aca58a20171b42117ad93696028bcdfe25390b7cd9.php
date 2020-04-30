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

/* _includes/forms/file */
class __TwigTemplate_844f5f0d88e01df83d0ef5a386c3527e51ef5eb3f672706f99750d737fb7e197 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/file");
        // line 1
        echo "<input type=\"file\"";
        // line 2
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 3
        if ((isset($context["class"]) || array_key_exists("class", $context))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 4
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 5
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new RuntimeError('Variable "autofocus" does not exist.', 5, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method"))) {
            echo " autofocus";
        }
        // line 6
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 6, $this->source); })()))) {
            echo " disabled";
        }
        // line 7
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/file");
    }

    public function getTemplateName()
    {
        return "_includes/forms/file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 0,  66 => 7,  62 => 6,  58 => 5,  52 => 4,  46 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<input type=\"file\"
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if class is defined %} class=\"{{ class }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if disabled is defined and disabled %} disabled{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
", "_includes/forms/file", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms/file.html");
    }
}
