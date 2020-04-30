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

/* _includes/forms/autosuggest */
class __TwigTemplate_50740b99d230a153ff713f59c4eb2cf2c244362c1dca9ab5e2c76c8424e014a3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'data' => [$this, 'block_data'],
            'methods' => [$this, 'block_methods'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms/autosuggest");
        // line 1
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 1, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\vue\\VueAsset"], "method");
        // line 2
        echo "
";
        // line 3
        if (((($context["suggestEnvVars"]) ?? (false)) &&  !(isset($context["suggestions"]) || array_key_exists("suggestions", $context)))) {
            // line 4
            echo "    ";
            $context["suggestions"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 4, $this->source); })()), "cp", []), "getEnvSuggestions", [0 => (($context["suggestAliases"]) ?? (false))], "method");
        }
        // line 7
        $context["id"] = ((((isset($context["id"]) || array_key_exists("id", $context)) && (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()))) ? ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })())) : (("autosuggest" . twig_random($this->env))));
        // line 8
        $context["containerId"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 8, $this->source); })()) . "-container");
        // line 10
        $context["class"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter([0 => "text", 1 => (((        // line 12
(isset($context["class"]) || array_key_exists("class", $context)) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 12, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 12, $this->source); })())) : (null)), 2 => (((        // line 13
(isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 13, $this->source); })()))) ? ("disabled") : (null)), 3 => (((        // line 14
(isset($context["size"]) || array_key_exists("size", $context)) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 14, $this->source); })()))) ? (null) : ("fullwidth"))]), " ");
        // line 16
        echo "
<div id=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"autosuggest-container\">
    ";
        // line 30
        echo "
    <vue-autosuggest
            :suggestions=\"filteredOptions\"
            :get-suggestion-value=\"getSuggestionValue\"
            :input-props=\"inputProps\"
            :limit=\"limit\"
            @selected=\"onSelected\">
        <template slot-scope=\"{suggestion}\">
            {{suggestion.item.name || suggestion.item}}
            <span v-if=\"suggestion.item.hint\" class=\"light\">– {{suggestion.item.hint}}</span>
        </template>
    </vue-autosuggest>
    ";
        echo "
</div>

";
        // line 33
        ob_start();
        // line 34
        echo "new Vue({
    el: \"#";
        // line 35
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), [(isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 35, $this->source); })())]), "js"), "html", null, true);
        echo "\",

    data() {
        ";
        // line 38
        $this->displayBlock('data', $context, $blocks);
        // line 60
        echo "        return data;
    },

    methods: {
        ";
        // line 64
        $this->displayBlock('methods', $context, $blocks);
        // line 130
        echo "    }
})
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/autosuggest");
    }

    // line 38
    public function block_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "data");
        // line 39
        echo "        var data = ";
        echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(["selected" => "", "filteredOptions" => [], "suggestions" => ((        // line 42
$context["suggestions"]) ?? ([])), "inputProps" => ["class" =>         // line 44
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 44, $this->source); })()), "initialValue" => ((        // line 45
$context["value"]) ?? ("")), "style" => ((        // line 46
$context["style"]) ?? ("")), "id" => call_user_func_array($this->env->getFilter('namespaceInputId')->getCallable(), [        // line 47
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 47, $this->source); })())]), "name" => call_user_func_array($this->env->getFilter('namespaceInputName')->getCallable(), [((        // line 48
$context["name"]) ?? (""))]), "size" => ((        // line 49
$context["size"]) ?? ("")), "maxlength" => ((        // line 50
$context["maxlength"]) ?? ("")), "autofocus" => ((        // line 51
$context["autofocus"]) ?? (false)), "disabled" => ((        // line 52
$context["disabled"]) ?? (false)), "title" => ((        // line 53
$context["title"]) ?? ("")), "placeholder" => ((        // line 54
$context["placeholder"]) ?? (""))], "limit" => ((        // line 56
$context["limit"]) ?? (5))]);
        // line 57
        echo ";
        data.inputProps.onInputChange = this.onInputChange;
        ";
        // line 0
        craft\helpers\Template::endProfile("block", "data");
    }

    // line 64
    public function block_methods($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "methods");
        // line 65
        echo "        onInputChange(text) {
            if (text === '' || text === undefined) {
                this.filteredOptions = this.suggestions;
                return;
            }

            text = text.toLowerCase();

            var filtered = [];
            var i, j, sectionFilter, item, name;
            var that = this;

            for (i = 0; i < this.suggestions.length; i++) {
                sectionFilter = [];
                for (j = 0; j < this.suggestions[i].data.length; j++) {
                    item = this.suggestions[i].data[j];
                    if (
                        (item.name || item).toLowerCase().indexOf(text) !== -1 ||
                        (item.hint && item.hint.toLowerCase().indexOf(text) !== -1)
                    ) {
                        sectionFilter.push(item.name ? item : {name: item});
                    }
                }
                if (sectionFilter.length) {
                    sectionFilter.sort(function(a, b) {
                        var scoreA = that.scoreItem(a, text);
                        var scoreB = that.scoreItem(b, text);
                        if (scoreA === scoreB) {
                            return 0;
                        }
                        return scoreA < scoreB ? 1 : -1;
                    });
                    filtered.push({
                        label: this.suggestions[i].label || null,
                        data: sectionFilter.slice(0, this.limit)
                    });
                }
            }

            this.filteredOptions = filtered;
        },
        scoreItem(item, text) {
            var score = 0;
            if (item.name.toLowerCase().indexOf(text) !== -1) {
                score += 100 + text.length / item.name.length;
            }
            if (item.hint && item.hint.toLowerCase().indexOf(text) !== -1) {
                score += text.length / item.hint.length;
            }
            return score;
        },
        onSelected(option) {
            this.selected = option.item;

            // Bring focus back to the input if they selected an alias
            if (option.item.name[0] == '@') {
                var input = this.\$el.querySelector('input');
                input.focus();
                input.selectionStart = input.selectionEnd = input.value.length;
            }
        },
        getSuggestionValue(suggestion) {
            return suggestion.item.name || suggestion.item;
        },
        ";
        // line 0
        craft\helpers\Template::endProfile("block", "methods");
    }

    public function getTemplateName()
    {
        return "_includes/forms/autosuggest";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 0,  151 => 65,  149 => 0,  145 => 64,  141 => 0,  137 => 57,  135 => 56,  134 => 54,  133 => 53,  132 => 52,  131 => 51,  130 => 50,  129 => 49,  128 => 48,  127 => 47,  126 => 46,  125 => 45,  124 => 44,  123 => 42,  121 => 39,  119 => 0,  115 => 38,  111 => 0,  106 => 130,  104 => 64,  98 => 60,  96 => 38,  90 => 35,  87 => 34,  85 => 33,  67 => 30,  63 => 17,  60 => 16,  58 => 14,  57 => 13,  56 => 12,  55 => 10,  53 => 8,  51 => 7,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\vue\\\\VueAsset\") %}

{% if (suggestEnvVars ?? false) and suggestions is not defined %}
    {% set suggestions = craft.cp.getEnvSuggestions(suggestAliases ?? false) %}
{% endif %}

{%- set id = (id is defined and id ? id : 'autosuggest'~random()) %}
{%- set containerId = id ~ '-container' %}

{%- set class = [
    'text',
    (class is defined and class ? class : null),
    (disabled is defined and disabled ? 'disabled' : null),
    (size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

<div id=\"{{ containerId }}\" class=\"autosuggest-container\">
    {% verbatim %}
    <vue-autosuggest
            :suggestions=\"filteredOptions\"
            :get-suggestion-value=\"getSuggestionValue\"
            :input-props=\"inputProps\"
            :limit=\"limit\"
            @selected=\"onSelected\">
        <template slot-scope=\"{suggestion}\">
            {{suggestion.item.name || suggestion.item}}
            <span v-if=\"suggestion.item.hint\" class=\"light\">– {{suggestion.item.hint}}</span>
        </template>
    </vue-autosuggest>
    {% endverbatim %}
</div>

{% js %}
new Vue({
    el: \"#{{ containerId|namespaceInputId|e('js') }}\",

    data() {
        {% block data %}
        var data = {{ {
            selected: '',
            filteredOptions: [],
            suggestions: suggestions ?? [],
            inputProps: {
                class: class,
                initialValue: value ?? '',
                style: style ?? '',
                id: id|namespaceInputId,
                name: (name ?? '')|namespaceInputName,
                size: size ?? '',
                maxlength: maxlength ?? '',
                autofocus: autofocus ?? false,
                disabled: disabled ?? false,
                title: title ?? '',
                placeholder: placeholder ?? '',
            },
            limit: limit ?? 5
        }|json_encode|raw }};
        data.inputProps.onInputChange = this.onInputChange;
        {% endblock %}
        return data;
    },

    methods: {
        {% block methods %}
        onInputChange(text) {
            if (text === '' || text === undefined) {
                this.filteredOptions = this.suggestions;
                return;
            }

            text = text.toLowerCase();

            var filtered = [];
            var i, j, sectionFilter, item, name;
            var that = this;

            for (i = 0; i < this.suggestions.length; i++) {
                sectionFilter = [];
                for (j = 0; j < this.suggestions[i].data.length; j++) {
                    item = this.suggestions[i].data[j];
                    if (
                        (item.name || item).toLowerCase().indexOf(text) !== -1 ||
                        (item.hint && item.hint.toLowerCase().indexOf(text) !== -1)
                    ) {
                        sectionFilter.push(item.name ? item : {name: item});
                    }
                }
                if (sectionFilter.length) {
                    sectionFilter.sort(function(a, b) {
                        var scoreA = that.scoreItem(a, text);
                        var scoreB = that.scoreItem(b, text);
                        if (scoreA === scoreB) {
                            return 0;
                        }
                        return scoreA < scoreB ? 1 : -1;
                    });
                    filtered.push({
                        label: this.suggestions[i].label || null,
                        data: sectionFilter.slice(0, this.limit)
                    });
                }
            }

            this.filteredOptions = filtered;
        },
        scoreItem(item, text) {
            var score = 0;
            if (item.name.toLowerCase().indexOf(text) !== -1) {
                score += 100 + text.length / item.name.length;
            }
            if (item.hint && item.hint.toLowerCase().indexOf(text) !== -1) {
                score += text.length / item.hint.length;
            }
            return score;
        },
        onSelected(option) {
            this.selected = option.item;

            // Bring focus back to the input if they selected an alias
            if (option.item.name[0] == '@') {
                var input = this.\$el.querySelector('input');
                input.focus();
                input.selectionStart = input.selectionEnd = input.value.length;
            }
        },
        getSuggestionValue(suggestion) {
            return suggestion.item.name || suggestion.item;
        },
        {% endblock %}
    }
})
{% endjs %}
", "_includes/forms/autosuggest", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms/autosuggest.html");
    }
}
