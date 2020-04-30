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

/* _components/widgets/QuickPost/settings */
class __TwigTemplate_3a14a90daef9d4e5d2f6e9f5ebef7e145ea06423273fa7cfe02579f809d86917 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/QuickPost/settings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/QuickPost/settings", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    ";
            $context["sectionOptions"] = [];
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 6
                echo "        ";
                $context["sectionOptions"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["sectionOptions"]) || array_key_exists("sectionOptions", $context) ? $context["sectionOptions"] : (function () { throw new RuntimeError('Variable "sectionOptions" does not exist.', 6, $this->source); })()), [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "name", []), "site"), "value" => craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", [])]]);
                // line 7
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Section", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which section do you want to publish entries to?", "app"), "id" => "section", "name" => "section", "options" =>             // line 13
(isset($context["sectionOptions"]) || array_key_exists("sectionOptions", $context) ? $context["sectionOptions"] : (function () { throw new RuntimeError('Variable "sectionOptions" does not exist.', 13, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 14
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 14, $this->source); })()), "section", []), "toggle" => true, "targetPrefix" => "section"]], 8, $context, $this->getSourceContext());
            // line 17
            echo "

    ";
            // line 19
            $context["selectedSectionId"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 19, $this->source); })()), "section", []);
            // line 20
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 21, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 22
                echo "        ";
                $context["showSection"] = (( !(isset($context["selectedSectionId"]) || array_key_exists("selectedSectionId", $context) ? $context["selectedSectionId"] : (function () { throw new RuntimeError('Variable "selectedSectionId" does not exist.', 22, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) || ((isset($context["selectedSectionId"]) || array_key_exists("selectedSectionId", $context) ? $context["selectedSectionId"] : (function () { throw new RuntimeError('Variable "selectedSectionId" does not exist.', 22, $this->source); })()) == craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", [])));
                // line 23
                echo "        <div id=\"section";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", []), "html", null, true);
                echo "\"";
                if ( !(isset($context["showSection"]) || array_key_exists("showSection", $context) ? $context["showSection"] : (function () { throw new RuntimeError('Variable "showSection" does not exist.', 23, $this->source); })())) {
                    echo " class=\"hidden\"";
                }
                echo ">

            ";
                // line 25
                $context["entryTypeOptions"] = [];
                // line 26
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "getEntryTypes", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 27
                    echo "                ";
                    $context["entryTypeOptions"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new RuntimeError('Variable "entryTypeOptions" does not exist.', 27, $this->source); })()), [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "name", []), "site"), "value" => craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", [])]]);
                    // line 28
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "
            ";
                // line 30
                if ((twig_length_filter($this->env, (isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new RuntimeError('Variable "entryTypeOptions" does not exist.', 30, $this->source); })())) == 1)) {
                    // line 31
                    echo "                ";
                    echo craft\helpers\Html::hiddenInput((("sections[" . craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", [])) . "][entryType]"), craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 31, $this->source); })()), "entryType", []));
                    echo "
            ";
                } else {
                    // line 33
                    echo "                ";
                    echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Entry Type", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which type of entries do you want to publish?", "app"), "id" => "entryType", "name" => (("sections[" . craft\helpers\Template::attribute($this->env, $this->source,                     // line 37
$context["section"], "id", [])) . "][entryType]"), "options" =>                     // line 38
(isset($context["entryTypeOptions"]) || array_key_exists("entryTypeOptions", $context) ? $context["entryTypeOptions"] : (function () { throw new RuntimeError('Variable "entryTypeOptions" does not exist.', 38, $this->source); })()), "value" => craft\helpers\Template::attribute($this->env, $this->source,                     // line 39
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 39, $this->source); })()), "entryType", []), "toggle" => true, "targetPrefix" => (("section" . craft\helpers\Template::attribute($this->env, $this->source,                     // line 41
$context["section"], "id", [])) . "-type")]], 33, $context, $this->getSourceContext());
                    // line 42
                    echo "
            ";
                }
                // line 44
                echo "
            ";
                // line 45
                ob_start();
                // line 46
                echo "                ";
                $context["entryTypes"] = craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "getEntryTypes", [], "method");
                // line 47
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new RuntimeError('Variable "entryTypes" does not exist.', 47, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 48
                    echo "                    ";
                    $context["showEntryType"] = (((( !(isset($context["showSection"]) || array_key_exists("showSection", $context) ? $context["showSection"] : (function () { throw new RuntimeError('Variable "showSection" does not exist.', 48, $this->source); })()) ||  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "entryType", [])) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) || (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "entryType", []) == craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []))) || (twig_length_filter($this->env, (isset($context["entryTypes"]) || array_key_exists("entryTypes", $context) ? $context["entryTypes"] : (function () { throw new RuntimeError('Variable "entryTypes" does not exist.', 48, $this->source); })())) == 1));
                    // line 49
                    echo "                    <div id=\"section";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["section"], "id", []), "html", null, true);
                    echo "-type";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "id", []), "html", null, true);
                    echo "\"";
                    if ( !(isset($context["showEntryType"]) || array_key_exists("showEntryType", $context) ? $context["showEntryType"] : (function () { throw new RuntimeError('Variable "showEntryType" does not exist.', 49, $this->source); })())) {
                        echo " class=\"hidden\"";
                    }
                    echo ">
                        ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["entryType"], "getFieldLayout", [], "method"), "getFields", [], "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 51
                        echo "                            <div>
                                ";
                        // line 52
                        echo twig_call_macro($macros["forms"], "macro_checkbox", [["label" => (twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source,                         // line 53
$context["field"], "name", [])) . ((craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "required", [])) ? (" <span class=\"required\"></span>") : (""))), "name" => (("sections[" . craft\helpers\Template::attribute($this->env, $this->source,                         // line 54
$context["section"], "id", [])) . "][fields][]"), "value" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 55
$context["field"], "id", []), "checked" => (craft\helpers\Template::attribute($this->env, $this->source,                         // line 56
$context["field"], "required", []) || twig_in_filter(craft\helpers\Template::attribute($this->env, $this->source, $context["field"], "id", []), craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 56, $this->source); })()), "fields", []))), "disabled" => craft\helpers\Template::attribute($this->env, $this->source,                         // line 57
$context["field"], "required", [])]], 52, $context, $this->getSourceContext());
                        // line 58
                        echo "
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "                    </div>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            ";
                $context["fieldsInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 64
                echo "
            ";
                // line 65
                echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Fields", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Which fields should be visible in the widget?", "app")],                 // line 68
(isset($context["fieldsInput"]) || array_key_exists("fieldsInput", $context) ? $context["fieldsInput"] : (function () { throw new RuntimeError('Variable "fieldsInput" does not exist.', 68, $this->source); })())], 65, $context, $this->getSourceContext());
                echo "
        </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
";
        } else {
            // line 73
            echo "
    <p>";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No sections are available.", "app"), "html", null, true);
            echo "</p>

";
        }
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/QuickPost/settings");
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 0,  252 => 74,  249 => 73,  245 => 71,  228 => 68,  227 => 65,  224 => 64,  221 => 63,  206 => 61,  198 => 58,  196 => 57,  195 => 56,  194 => 55,  193 => 54,  192 => 53,  191 => 52,  188 => 51,  184 => 50,  173 => 49,  170 => 48,  152 => 47,  149 => 46,  147 => 45,  144 => 44,  140 => 42,  138 => 41,  137 => 39,  136 => 38,  135 => 37,  133 => 33,  127 => 31,  125 => 30,  122 => 29,  116 => 28,  113 => 27,  108 => 26,  106 => 25,  96 => 23,  93 => 22,  76 => 21,  73 => 20,  71 => 19,  67 => 17,  65 => 14,  64 => 13,  62 => 8,  56 => 7,  53 => 6,  48 => 5,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{% if sections %}
    {% set sectionOptions = [] %}
    {% for section in sections %}
        {% set sectionOptions = sectionOptions|merge([{ label: section.name|t('site'), value: section.id }]) %}
    {% endfor %}
    {{ forms.selectField({
        label: \"Section\"|t('app'),
        instructions: \"Which section do you want to publish entries to?\"|t('app'),
        id: 'section',
        name: 'section',
        options: sectionOptions,
        value: widget.section,
        toggle: true,
        targetPrefix: 'section'
    }) }}

    {% set selectedSectionId = widget.section %}

    {% for section in sections %}
        {% set showSection = ((not selectedSectionId and loop.first) or selectedSectionId == section.id) %}
        <div id=\"section{{ section.id }}\"{% if not showSection %} class=\"hidden\"{% endif %}>

            {% set entryTypeOptions = [] %}
            {% for entryType in section.getEntryTypes() %}
                {% set entryTypeOptions = entryTypeOptions|merge([{ label: entryType.name|t('site'), value: entryType.id }]) %}
            {% endfor %}

            {% if entryTypeOptions|length == 1 %}
                {{ hiddenInput(\"sections[#{section.id}][entryType]\", widget.entryType) }}
            {% else %}
                {{ forms.selectField({
                    label: \"Entry Type\"|t('app'),
                    instructions: \"Which type of entries do you want to publish?\"|t('app'),
                    id: 'entryType',
                    name: 'sections['~section.id~'][entryType]',
                    options: entryTypeOptions,
                    value: widget.entryType,
                    toggle: true,
                    targetPrefix: 'section'~section.id~'-type'
                }) }}
            {% endif %}

            {% set fieldsInput %}
                {% set entryTypes = section.getEntryTypes() %}
                {% for entryType in entryTypes %}
                    {% set showEntryType = (((not showSection or not widget.entryType) and loop.first) or widget.entryType == entryType.id or entryTypes|length == 1) %}
                    <div id=\"section{{ section.id }}-type{{ entryType.id }}\"{% if not showEntryType %} class=\"hidden\"{% endif %}>
                        {% for field in entryType.getFieldLayout().getFields() %}
                            <div>
                                {{ forms.checkbox({
                                    label: field.name|e~(field.required ? ' <span class=\"required\"></span>' : ''),
                                    name: 'sections['~section.id~'][fields][]',
                                    value: field.id,
                                    checked: (field.required or field.id in widget.fields),
                                    disabled: field.required
                                }) }}
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
            {% endset %}

            {{ forms.field({
                label: \"Fields\"|t('app'),
                instructions: \"Which fields should be visible in the widget?\"|t('app')
            }, fieldsInput) }}
        </div>
    {% endfor %}

{% else %}

    <p>{{ \"No sections are available.\"|t('app') }}</p>

{% endif %}
", "_components/widgets/QuickPost/settings", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/widgets/QuickPost/settings.html");
    }
}
