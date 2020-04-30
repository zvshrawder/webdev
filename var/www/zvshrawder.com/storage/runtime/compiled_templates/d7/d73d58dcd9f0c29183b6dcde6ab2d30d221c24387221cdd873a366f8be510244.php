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

/* _layouts/components/alerts */
class __TwigTemplate_62da9d6bb09160280188fa473d1df1cf45bfeef8c222ad4cc025362220c664f8 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/alerts");
        // line 1
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 1, $this->source); })()), "cp", []), "areAlertsCached", [], "method")) {
            // line 2
            echo "    ";
            $context["alerts"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 2, $this->source); })()), "cp", []), "getAlerts", [], "method");
            // line 3
            echo "    ";
            if ((isset($context["alerts"]) || array_key_exists("alerts", $context) ? $context["alerts"] : (function () { throw new RuntimeError('Variable "alerts" does not exist.', 3, $this->source); })())) {
                // line 4
                echo "        <ul id=\"alerts\">
            ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "cp", []), "getAlerts", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 6
                    echo "                <li>";
                    echo $context["alert"];
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "        </ul>
    ";
            }
        } else {
            // line 11
            echo "    ";
            ob_start();
            // line 12
            echo "        Craft.cp.fetchAlerts();
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/components/alerts");
    }

    public function getTemplateName()
    {
        return "_layouts/components/alerts";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 0,  70 => 12,  67 => 11,  62 => 8,  53 => 6,  49 => 5,  46 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if craft.cp.areAlertsCached() %}
    {% set alerts = craft.cp.getAlerts() %}
    {% if alerts %}
        <ul id=\"alerts\">
            {% for alert in craft.cp.getAlerts() %}
                <li>{{ alert|raw }}</li>
            {% endfor %}
        </ul>
    {% endif %}
{% else %}
    {% js %}
        Craft.cp.fetchAlerts();
    {% endjs %}
{% endif %}
", "_layouts/components/alerts", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_layouts/components/alerts.twig");
    }
}
