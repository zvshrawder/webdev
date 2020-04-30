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

/* _components/widgets/Feed/settings */
class __TwigTemplate_def255697e4bf34af8ce04e4a5bafdbc3848f0cffede29dea110691961693a4d extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/Feed/settings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/Feed/settings", 1)->unwrap();
        // line 2
        echo "

";
        // line 4
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("URL", "app"), "id" => "url", "name" => "url", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 8
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 8, $this->source); })()), "url", []), "required" => true, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 10
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 10, $this->source); })()), "getErrors", [0 => "url"], "method")]], 4, $context, $this->getSourceContext());
        // line 11
        echo "


";
        // line 14
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Title", "app"), "id" => "title", "name" => "title", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 18
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 18, $this->source); })()), "title", []), "required" => true, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 20
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 20, $this->source); })()), "getErrors", [0 => "title"], "method")]], 14, $context, $this->getSourceContext());
        // line 21
        echo "


";
        // line 24
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit", "app"), "id" => "limit", "name" => "limit", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 28
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 28, $this->source); })()), "limit", []), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 30
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 30, $this->source); })()), "getErrors", [0 => "limit"], "method")]], 24, $context, $this->getSourceContext());
        // line 31
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/Feed/settings");
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 0,  66 => 31,  64 => 30,  63 => 28,  62 => 24,  57 => 21,  55 => 20,  54 => 18,  53 => 14,  48 => 11,  46 => 10,  45 => 8,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}


{{ forms.textField({
    label: \"URL\"|t('app'),
    id: 'url',
    name: 'url',
    value: widget.url,
    required: true,
    errors: widget.getErrors('url')
}) }}


{{ forms.textField({
    label: \"Title\"|t('app'),
    id: 'title',
    name: 'title',
    value: widget.title,
    required: true,
    errors: widget.getErrors('title')
}) }}


{{ forms.textField({
    label: \"Limit\"|t('app'),
    id: 'limit',
    name: 'limit',
    value: widget.limit,
    size: 2,
    errors: widget.getErrors('limit')
}) }}
", "_components/widgets/Feed/settings", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/widgets/Feed/settings.html");
    }
}
