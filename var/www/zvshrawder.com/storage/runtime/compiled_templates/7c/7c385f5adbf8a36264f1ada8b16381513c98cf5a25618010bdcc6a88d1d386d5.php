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

/* _special/install */
class __TwigTemplate_3f30480ba055258120b4691ab79ad17dab7db27324e489c900155cbfdc8f6afd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "_special/install");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Install Craft CMS", "app");
        // line 4
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 4, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "All done!", 1 => "Go to Craft CMS"]], "method");
        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_special/install", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "_special/install");
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        // line 10
        echo "    <div class=\"beginbtncontainer\">
        <div id=\"beginbtn\" class=\"btn big submit\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Install Craft", "app"), "html", null, true);
        echo "</div>
    </div>

    <div id=\"install-modal\" class=\"modal hidden\">
        <div id=\"screens\">
            ";
        // line 16
        $this->loadTemplate("_special/install/license", "_special/install", 16)->display($context);
        // line 17
        echo "            ";
        if ((isset($context["showDbScreen"]) || array_key_exists("showDbScreen", $context) ? $context["showDbScreen"] : (function () { throw new RuntimeError('Variable "showDbScreen" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                ";
            $this->loadTemplate("_special/install/db", "_special/install", 18)->display($context);
            // line 19
            echo "            ";
        }
        // line 20
        echo "            ";
        $this->loadTemplate("_special/install/account", "_special/install", 20)->display($context);
        // line 21
        echo "            ";
        $this->loadTemplate("_special/install/site", "_special/install", 21)->display($context);
        // line 22
        echo "            ";
        $this->loadTemplate("_special/install/installing", "_special/install", 22)->display($context);
        // line 23
        echo "        </div>

        <div id=\"dots\"></div>
    </div>
";
        // line 0
        craft\helpers\Template::endProfile("block", "body");
    }

    public function getTemplateName()
    {
        return "_special/install";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 0,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  64 => 11,  61 => 10,  59 => 0,  55 => 9,  51 => 0,  48 => 1,  46 => 4,  44 => 2,  42 => 0,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/basecp\" %}
{% set title = \"Install Craft CMS\"|t('app') %}

{% do view.registerTranslations('app', [
    \"All done!\",
    \"Go to Craft CMS\",
]) %}

{% block body %}
    <div class=\"beginbtncontainer\">
        <div id=\"beginbtn\" class=\"btn big submit\">{{ \"Install Craft\"|t('app') }}</div>
    </div>

    <div id=\"install-modal\" class=\"modal hidden\">
        <div id=\"screens\">
            {% include \"_special/install/license\" %}
            {% if showDbScreen %}
                {% include \"_special/install/db\" %}
            {% endif %}
            {% include \"_special/install/account\" %}
            {% include \"_special/install/site\" %}
            {% include \"_special/install/installing\" %}
        </div>

        <div id=\"dots\"></div>
    </div>
{% endblock %}
", "_special/install", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_special/install/index.html");
    }
}
