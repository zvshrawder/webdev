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

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_30816ccb7bfdd18930355c29ef2298791d2a0d7e2d333163821d898be07e7c31 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/RecentEntries/body");
        // line 1
        echo "<div class=\"recententries-container\">
    ";
        // line 2
        if (twig_length_filter($this->env, (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        <table class=\"fullwidth\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["entry"], "getCpEditUrl", [], "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["entry"], "title", []), "html", null, true);
                echo "</a>
                        <span class=\"light\">
                            ";
                // line 9
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('timestamp')->getCallable(), [craft\helpers\Template::attribute($this->env, $this->source, $context["entry"], "dateCreated", []), "short"]), "html", null, true);
                // line 10
                if ((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 10, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 10, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->source, $context["entry"], "author", []))) {
                    echo ", ";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["entry"], "author", []), "username", []), "html", null, true);
                }
                // line 11
                echo "</span>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </table>
    ";
        } else {
            // line 17
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No entries exist yet.", "app"), "html", null, true);
            echo "</p>
    ";
        }
        // line 19
        echo "</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/RecentEntries/body");
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 0,  87 => 19,  81 => 17,  77 => 15,  68 => 11,  63 => 10,  61 => 9,  54 => 7,  50 => 5,  46 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"recententries-container\">
    {% if entries|length %}
        <table class=\"fullwidth\">
            {% for entry in entries %}
                <tr>
                    <td>
                        <a href=\"{{ entry.getCpEditUrl() }}\">{{ entry.title }}</a>
                        <span class=\"light\">
                            {{ entry.dateCreated|timestamp('short') }}
                            {%- if CraftEdition == CraftPro and entry.author %}, {{ entry.author.username }}{% endif -%}
                        </span>
                    </td>
                </tr>
            {% endfor %}
        </table>
    {% else %}
        <p>{{ \"No entries exist yet.\"|t('app') }}</p>
    {% endif %}
</div>
", "_components/widgets/RecentEntries/body", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/widgets/RecentEntries/body.html");
    }
}
