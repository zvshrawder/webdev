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

/* _layouts/components/crumbs */
class __TwigTemplate_c12a843caa1130ffdb30ffaebbd180c65c42769293075734ffed4790cdef0e52 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/crumbs");
        // line 1
        echo "<div id=\"crumbs\"";
        if ( !(isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 1, $this->source); })())) {
            echo " class=\"empty\"";
        }
        echo ">
    <a id=\"nav-toggle\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show nav", "app"), "html", null, true);
        echo "\"></a>
    ";
        // line 3
        if ((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "        <nav>
            <ul>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 7
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["crumb"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["crumb"], "label", []), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </ul>
        </nav>
    ";
        }
        // line 12
        echo "</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/components/crumbs");
    }

    public function getTemplateName()
    {
        return "_layouts/components/crumbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 0,  75 => 12,  70 => 9,  59 => 7,  55 => 6,  51 => 4,  49 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"crumbs\"{% if not crumbs %} class=\"empty\"{% endif %}>
    <a id=\"nav-toggle\" title=\"{{ 'Show nav'|t('app') }}\"></a>
    {% if crumbs %}
        <nav>
            <ul>
                {% for crumb in crumbs %}
                    <li><a href=\"{{ crumb.url }}\">{{ crumb.label }}</a></li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>
", "_layouts/components/crumbs", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_layouts/components/crumbs.twig");
    }
}
