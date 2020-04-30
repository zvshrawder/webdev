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

/* _special/install/installing */
class __TwigTemplate_066ff77e4abb7e6928ddf4c5f316bf0c650fc1a03dd789fbff6508c0da7cae19 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_special/install/installing");
        // line 1
        echo "<div id=\"installing\" class=\"screen hidden\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Installing Craft CMS…", "app"), "html", null, true);
        echo "</h1>

    <div id=\"spinner\" class=\"spinner big\"></div>
</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_special/install/installing");
    }

    public function getTemplateName()
    {
        return "_special/install/installing";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 0,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"installing\" class=\"screen hidden\">
    <h1>{{ \"Installing Craft CMS…\"|t('app') }}</h1>

    <div id=\"spinner\" class=\"spinner big\"></div>
</div>
", "_special/install/installing", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_special/install/installing.html");
    }
}
