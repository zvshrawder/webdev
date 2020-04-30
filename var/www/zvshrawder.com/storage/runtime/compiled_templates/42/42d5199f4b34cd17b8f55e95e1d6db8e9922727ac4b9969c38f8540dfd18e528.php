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

/* _components/widgets/Updates/body */
class __TwigTemplate_91848510e648ffd8e47d1615298536f8360aff7767ec20882d2bf04f00fa51d1 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/Updates/body");
        // line 1
        if ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <p class=\"centeralign\">
        ";
            // line 3
            if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 3, $this->source); })()) == 1)) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("One update available!", "app"), "html", null, true);
                echo "
        ";
            } else {
                // line 6
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("{total} updates available!", "app", ["total" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 6, $this->source); })())]), "html", null, true);
                echo "
        ";
            }
            // line 8
            echo "        <a class=\"go nowrap\" href=\"";
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("utilities/updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Go to Updates", "app"), "html", null, true);
            echo "</a>
    </p>
";
        } else {
            // line 11
            echo "    <p class=\"centeralign\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Congrats! You’re up-to-date.", "app"), "html", null, true);
            echo "</p>
    <p class=\"centeralign\"><a class=\"btn\" data-icon=\"refresh\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Check again", "app"), "html", null, true);
            echo "</a></p>
";
        }
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/Updates/body");
    }

    public function getTemplateName()
    {
        return "_components/widgets/Updates/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 0,  71 => 12,  66 => 11,  57 => 8,  51 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if total %}
    <p class=\"centeralign\">
        {% if total == 1 %}
            {{ \"One update available!\"|t('app') }}
        {% else %}
            {{ \"{total} updates available!\"|t('app', { total: total }) }}
        {% endif %}
        <a class=\"go nowrap\" href=\"{{ url('utilities/updates') }}\">{{ \"Go to Updates\"|t('app') }}</a>
    </p>
{% else %}
    <p class=\"centeralign\">{{ \"Congrats! You’re up-to-date.\"|t('app') }}</p>
    <p class=\"centeralign\"><a class=\"btn\" data-icon=\"refresh\">{{ 'Check again'|t('app') }}</a></p>
{% endif %}
", "_components/widgets/Updates/body", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/widgets/Updates/body.html");
    }
}
