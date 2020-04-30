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

/* _special/install/site */
class __TwigTemplate_e44f70f004e4fb06feb5ecce80f5366fb7e1ab037a9026f16d12a841b79a1e4a extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_special/install/site");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_special/install/site", 1)->unwrap();
        // line 2
        echo "
<div id=\"site\" class=\"screen hidden\" data-inputs=\"name,baseUrl,language\">
    <div class=\"icon\">";
        // line 4
        echo (isset($context["worldIcon"]) || array_key_exists("worldIcon", $context) ? $context["worldIcon"] : (function () { throw new RuntimeError('Variable "worldIcon" does not exist.', 4, $this->source); })());
        echo "</div>
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Setup your site", "app"), "html", null, true);
        echo "</h1>

    <form accept-charset=\"UTF-8\">
        ";
        // line 8
        echo craft\helpers\Html::csrfInput();
        echo "

        ";
        // line 10
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("System Name", "app"), "id" => "site-name", "value" =>         // line 14
(isset($context["defaultSystemName"]) || array_key_exists("defaultSystemName", $context) ? $context["defaultSystemName"] : (function () { throw new RuntimeError('Variable "defaultSystemName" does not exist.', 14, $this->source); })()), "maxlength" => 255]], 10, $context, $this->getSourceContext());
        // line 16
        echo "

        ";
        // line 18
        echo twig_call_macro($macros["forms"], "macro_autosuggestField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Base URL", "app"), "id" => "site-baseUrl", "class" => "ltr", "suggestions" => craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,         // line 22
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 22, $this->source); })()), "cp", []), "getEnvSuggestions", [0 => true], "method"), "value" =>         // line 23
(isset($context["defaultSiteUrl"]) || array_key_exists("defaultSiteUrl", $context) ? $context["defaultSiteUrl"] : (function () { throw new RuntimeError('Variable "defaultSiteUrl" does not exist.', 23, $this->source); })())]], 18, $context, $this->getSourceContext());
        // line 24
        echo "

        ";
        // line 26
        ob_start();
        // line 27
        echo "            <div class=\"select\">
                <select id=\"site-language\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 29, $this->source); })()), "app", []), "i18n", []), "getAllLocales", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 30
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["locale"], "id", []), "html", null, true);
            echo "\"";
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["locale"], "id", []) == (isset($context["defaultSiteLanguage"]) || array_key_exists("defaultSiteLanguage", $context) ? $context["defaultSiteLanguage"] : (function () { throw new RuntimeError('Variable "defaultSiteLanguage" does not exist.', 30, $this->source); })()))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["locale"], "id", []), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["locale"], "getDisplayName", [0 => craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 30, $this->source); })()), "app", []), "language", [])], "method"), "html", null, true);
            echo ")</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </select>
            </div>
        ";
        $context["languageInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "        ";
        echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Language", "app"), "id" => "site-language"],         // line 38
(isset($context["languageInput"]) || array_key_exists("languageInput", $context) ? $context["languageInput"] : (function () { throw new RuntimeError('Variable "languageInput" does not exist.', 38, $this->source); })())], 35, $context, $this->getSourceContext());
        echo "

        <div class=\"buttons\">
            <div class=\"btn big submit\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Finish up", "app"), "html", null, true);
        echo "
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_special/install/site");
    }

    public function getTemplateName()
    {
        return "_special/install/site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 0,  114 => 41,  108 => 38,  106 => 35,  101 => 32,  84 => 30,  80 => 29,  76 => 27,  74 => 26,  70 => 24,  68 => 23,  67 => 22,  66 => 18,  62 => 16,  60 => 14,  59 => 10,  54 => 8,  48 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

<div id=\"site\" class=\"screen hidden\" data-inputs=\"name,baseUrl,language\">
    <div class=\"icon\">{{ worldIcon|raw }}</div>
    <h1>{{ \"Setup your site\"|t('app') }}</h1>

    <form accept-charset=\"UTF-8\">
        {{ csrfInput() }}

        {{ forms.textField({
            first: true,
            label: \"System Name\"|t('app'),
            id: 'site-name',
            value: defaultSystemName,
            maxlength: 255
        }) }}

        {{ forms.autosuggestField({
            label: \"Base URL\"|t('app'),
            id: 'site-baseUrl',
            class: 'ltr',
            suggestions: craft.cp.getEnvSuggestions(true),
            value: defaultSiteUrl
        }) }}

        {% set languageInput %}
            <div class=\"select\">
                <select id=\"site-language\">
                    {% for locale in craft.app.i18n.getAllLocales() %}
                        <option value=\"{{ locale.id }}\"{% if locale.id == defaultSiteLanguage %} selected{% endif %}>{{ locale.id }} ({{ locale.getDisplayName(craft.app.language) }})</option>
                    {% endfor %}
                </select>
            </div>
        {% endset %}
        {{ forms.field({
            label: \"Language\"|t('app'),
            id: 'site-language'
        }, languageInput) }}

        <div class=\"buttons\">
            <div class=\"btn big submit\">{{ \"Finish up\"|t('app') }}
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
", "_special/install/site", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_special/install/site.html");
    }
}
