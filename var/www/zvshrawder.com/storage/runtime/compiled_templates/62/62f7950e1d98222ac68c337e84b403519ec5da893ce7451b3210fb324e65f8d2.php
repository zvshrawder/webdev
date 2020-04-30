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

/* _special/updater */
class __TwigTemplate_e7978ee9202b53432a4b8a6d69ab03229a917cdfaaadb27f111885fdd03a6e34 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_special/updater");
        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_special/updater", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "_special/updater");
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        // line 4
        echo "    <div id=\"graphic\" class=\"spinner big\"></div>
    <div id=\"status\"></div>
";
        // line 0
        craft\helpers\Template::endProfile("block", "body");
    }

    public function getTemplateName()
    {
        return "_special/updater";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 0,  57 => 4,  55 => 0,  51 => 3,  47 => 0,  44 => 1,  42 => 0,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/basecp\" %}

{% block body %}
    <div id=\"graphic\" class=\"spinner big\"></div>
    <div id=\"status\"></div>
{% endblock %}
", "_special/updater", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_special/updater.html");
    }
}
