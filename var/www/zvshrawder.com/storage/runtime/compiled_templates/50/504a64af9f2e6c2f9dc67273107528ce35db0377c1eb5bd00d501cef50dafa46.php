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

/*  */
class __TwigTemplate_1b3e94825e48574921f91e1d9951383acf348a8214ad920f18439983d7800977 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "");
        // line 1
        \Craft::$app->getResponse()->redirect(craft\helpers\UrlHelper::url(((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 1, $this->source); })()), "app", []), "config", []), "general", []), "postCpLoginRedirect", [])) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 1, $this->source); })()), "app", []), "config", []), "general", []), "postCpLoginRedirect", [])) : ("dashboard"))), 302);
        \Craft::$app->end();        // line 0
        craft\helpers\Template::endProfile("template", "");
    }

    public function getTemplateName()
    {
        return "";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 0,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% redirect craft.app.config.general.postCpLoginRedirect ?: 'dashboard' %}
", "", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/index.html");
    }
}
