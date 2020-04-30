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

/* _layouts/components/notifications */
class __TwigTemplate_a089a0a160a5f98fdfe7dd2e0a3fab087b239a21efdd9a5fb82b879eee208b9d extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/notifications");
        // line 1
        echo "<div id=\"notifications\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "notice", 1 => "error"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 3
            echo "        ";
            $context["message"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 3, $this->source); })()), "app", []), "session", []), "getFlash", [0 => $context["type"]], "method");
            // line 4
            echo "        ";
            if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 4, $this->source); })())) {
                // line 5
                echo "            <div class=\"notification ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()), "html", null, true);
                echo "</div>
        ";
            }
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/components/notifications");
    }

    public function getTemplateName()
    {
        return "_layouts/components/notifications";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 0,  65 => 8,  59 => 7,  51 => 5,  48 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"notifications\">
    {% for type in ['notice', 'error'] %}
        {% set message = craft.app.session.getFlash(type) %}
        {% if message %}
            <div class=\"notification {{ type }}\">{{ message }}</div>
        {% endif %}
    {% endfor %}
</div>
", "_layouts/components/notifications", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_layouts/components/notifications.twig");
    }
}
