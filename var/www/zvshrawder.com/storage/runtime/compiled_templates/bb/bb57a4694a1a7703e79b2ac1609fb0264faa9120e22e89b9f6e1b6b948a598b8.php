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

/* _includes/forms/errorList */
class __TwigTemplate_731a15aded87285d21f2bbd3d5d36e5f569286a60e8d2f23593683d6d4ed0097 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/errorList");
        // line 1
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <ul class=\"errors\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 4
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </ul>";
        }
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/errorList");
    }

    public function getTemplateName()
    {
        return "_includes/forms/errorList";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 0,  56 => 6,  47 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if errors %}
    <ul class=\"errors\">
        {% for error in errors %}
            <li>{{ error }}</li>
        {% endfor %}
    </ul>
{%- endif %}
", "_includes/forms/errorList", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms/errorList.html");
    }
}
