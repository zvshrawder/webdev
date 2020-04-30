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

/* _components/widgets/RecentEntries/settings */
class __TwigTemplate_c77e355f8f17405f65988583671bd22a9b6c327c1c1007b0bf1f82da9eabbb88 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/RecentEntries/settings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/RecentEntries/settings", 1)->unwrap();
        // line 2
        echo "

";
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"select\">
        <select id=\"section\" name=\"section\">
            <option value=\"*\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "app"), "html", null, true);
        echo "</option>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 8, $this->source); })()), "app", []), "sections", []), "getAllSections", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 9
            echo "                ";
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "type", []) != "single")) {
                // line 10
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", []), "html", null, true);
                echo "\"";
                if ((craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", []) == craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 10, $this->source); })()), "section", []))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "name", []), "site"), "html", null, true);
                echo "</option>
                ";
            }
            // line 12
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </select>
    </div>
";
        $context["sectionInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
";
        // line 17
        echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Section", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which section do you want to pull recent entries from?", "app"), "id" => "section"],         // line 21
(isset($context["sectionInput"]) || array_key_exists("sectionInput", $context) ? $context["sectionInput"] : (function () { throw new RuntimeError('Variable "sectionInput" does not exist.', 21, $this->source); })())], 17, $context, $this->getSourceContext());
        echo "

";
        // line 23
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 23, $this->source); })()), "app", []), "getIsMultiSite", [], "method")) {
            // line 24
            echo "    ";
            $context["editableSites"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 24, $this->source); })()), "app", []), "sites", []), "getEditableSites", [], "method");
            // line 25
            echo "
    ";
            // line 26
            if ((twig_length_filter($this->env, (isset($context["editableSites"]) || array_key_exists("editableSites", $context) ? $context["editableSites"] : (function () { throw new RuntimeError('Variable "editableSites" does not exist.', 26, $this->source); })())) > 1)) {
                // line 27
                echo "        ";
                ob_start();
                // line 28
                echo "            <div class=\"select\">
                <select id=\"site-id\" name=\"siteId\">
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["editableSites"]) || array_key_exists("editableSites", $context) ? $context["editableSites"] : (function () { throw new RuntimeError('Variable "editableSites" does not exist.', 30, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                    // line 31
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []), "html", null, true);
                    echo "\"";
                    if ((craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "id", []) == craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 31, $this->source); })()), "siteId", []))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["site"], "name", []), "site"), "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                </select>
            </div>
        ";
                $context["siteInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 36
                echo "
        ";
                // line 37
                echo twig_call_macro($macros["forms"], "macro_field", [["id" => "site-id", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site", "app")],                 // line 40
(isset($context["siteInput"]) || array_key_exists("siteInput", $context) ? $context["siteInput"] : (function () { throw new RuntimeError('Variable "siteInput" does not exist.', 40, $this->source); })())], 37, $context, $this->getSourceContext());
                echo "
    ";
            }
        }
        // line 43
        echo "

";
        // line 45
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit", "app"), "id" => "limit", "name" => "limit", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 49
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 49, $this->source); })()), "limit", []), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 51
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 51, $this->source); })()), "getErrors", [0 => "limit"], "method")]], 45, $context, $this->getSourceContext());
        // line 52
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/RecentEntries/settings");
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 0,  152 => 52,  150 => 51,  149 => 49,  148 => 45,  144 => 43,  138 => 40,  137 => 37,  134 => 36,  129 => 33,  114 => 31,  110 => 30,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  95 => 24,  93 => 23,  88 => 21,  87 => 17,  84 => 16,  79 => 13,  73 => 12,  61 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}


{% set sectionInput %}
    <div class=\"select\">
        <select id=\"section\" name=\"section\">
            <option value=\"*\">{{ \"All\"|t('app') }}</option>
            {% for section in craft.app.sections.getAllSections() %}
                {% if section.type != 'single' %}
                    <option value=\"{{ section.id }}\"{% if section.id == widget.section %} selected{% endif %}>{{ section.name|t('site') }}</option>
                {% endif %}
            {% endfor %}
        </select>
    </div>
{% endset %}

{{ forms.field({
    label: \"Section\"|t('app'),
    instructions: \"Which section do you want to pull recent entries from?\"|t('app'),
    id: 'section',
}, sectionInput) }}

{% if craft.app.getIsMultiSite() %}
    {% set editableSites = craft.app.sites.getEditableSites() %}

    {% if editableSites|length > 1 %}
        {% set siteInput %}
            <div class=\"select\">
                <select id=\"site-id\" name=\"siteId\">
                    {% for site in editableSites %}
                        <option value=\"{{ site.id }}\"{% if site.id == widget.siteId %} selected{% endif %}>{{ site.name|t('site') }}</option>
                    {% endfor %}
                </select>
            </div>
        {% endset %}

        {{ forms.field({
            id: 'site-id',
            label: \"Site\"|t('app')
        }, siteInput) }}
    {% endif %}
{% endif %}


{{ forms.textField({
    label: \"Limit\"|t('app'),
    id: 'limit',
    name: 'limit',
    value: widget.limit,
    size: 2,
    errors: widget.getErrors('limit')
}) }}
", "_components/widgets/RecentEntries/settings", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/widgets/RecentEntries/settings.html");
    }
}
