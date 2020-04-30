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

/* _components/widgets/CraftSupport/body */
class __TwigTemplate_55debabc4528c648ab6962f71973240dd069791c86be7bf785edf6f41dec6717 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/CraftSupport/body");
        // line 105
        echo "
";
        // line 106
        $macros["__internal_ff504bfbc5a95a6f8044803efd6453c7122ea407ac8a41d71158a90a259f2bff"] = $this->macros["__internal_ff504bfbc5a95a6f8044803efd6453c7122ea407ac8a41d71158a90a259f2bff"] = $this;
        // line 107
        echo "

<div class=\"cs-screen cs-screen-home\">
    <div class=\"cs-opt\" data-screen=\"help\">
        <div class=\"cs-opt-icon\">";
        // line 111
        echo (isset($context["buoeyIcon"]) || array_key_exists("buoeyIcon", $context) ? $context["buoeyIcon"] : (function () { throw new RuntimeError('Variable "buoeyIcon" does not exist.', 111, $this->source); })());
        echo "</div>
        <h2>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Get help", "app"), "html", null, true);
        echo "</h2>
        <p>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("How-to’s and other questions", "app"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"cs-opt\" data-screen=\"feedback\">
        <div class=\"cs-opt-icon\">";
        // line 116
        echo (isset($context["bullhornIcon"]) || array_key_exists("bullhornIcon", $context) ? $context["bullhornIcon"] : (function () { throw new RuntimeError('Variable "bullhornIcon" does not exist.', 116, $this->source); })());
        echo "</div>
        <h2>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Give feedback", "app"), "html", null, true);
        echo "</h2>
        <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Bug reports and feature requests", "app"), "html", null, true);
        echo "</p>
    </div>
</div>

";
        // line 122
        echo twig_call_macro($macros["__internal_ff504bfbc5a95a6f8044803efd6453c7122ea407ac8a41d71158a90a259f2bff"], "macro_screen", [(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 122, $this->source); })()), (isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new RuntimeError('Variable "showBackupOption" does not exist.', 122, $this->source); })()), (isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 122, $this->source); })()), "help", $this->extensions['craft\web\twig\Extension']->translateFilter("Briefly describe your question.", "app"), (isset($context["seIcon"]) || array_key_exists("seIcon", $context) ? $context["seIcon"] : (function () { throw new RuntimeError('Variable "seIcon" does not exist.', 122, $this->source); })()), $this->extensions['craft\web\twig\Extension']->translateFilter("Similar questions on Stack Exchange", "app"), "https://craftcms.stackexchange.com/questions/ask", $this->extensions['craft\web\twig\Extension']->translateFilter("Ask on Stack Exchange", "app")], 122, $context, $this->getSourceContext());
        echo "

";
        // line 124
        echo twig_call_macro($macros["__internal_ff504bfbc5a95a6f8044803efd6453c7122ea407ac8a41d71158a90a259f2bff"], "macro_screen", [(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 124, $this->source); })()), (isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new RuntimeError('Variable "showBackupOption" does not exist.', 124, $this->source); })()), (isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 124, $this->source); })()), "feedback", $this->extensions['craft\web\twig\Extension']->translateFilter("Briefly describe your issue or idea.", "app"), (isset($context["ghIcon"]) || array_key_exists("ghIcon", $context) ? $context["ghIcon"] : (function () { throw new RuntimeError('Variable "ghIcon" does not exist.', 124, $this->source); })()), $this->extensions['craft\web\twig\Extension']->translateFilter("Similar issues on GitHub", "app"), "https://github.com/craftcms/cms/issues/new", $this->extensions['craft\web\twig\Extension']->translateFilter("Post on GitHub", "app")], 124, $context, $this->getSourceContext());
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/CraftSupport/body");
    }

    // line 1
    public function macro_screen($__widget__ = null, $__showBackupOption__ = null, $__bundleUrl__ = null, $__screen__ = null, $__placeholder__ = null, $__resultsIcon__ = null, $__resultsHeading__ = null, $__formAction__ = null, $__submitText__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "showBackupOption" => $__showBackupOption__,
            "bundleUrl" => $__bundleUrl__,
            "screen" => $__screen__,
            "placeholder" => $__placeholder__,
            "resultsIcon" => $__resultsIcon__,
            "resultsHeading" => $__resultsHeading__,
            "formAction" => $__formAction__,
            "submitText" => $__submitText__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "screen");
            // line 2
            echo "    ";
            $macros["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/CraftSupport/body", 2)->unwrap();
            // line 3
            echo "    ";
            $context["idPrefix"] = (("cs-" . (isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new RuntimeError('Variable "screen" does not exist.', 3, $this->source); })())) . twig_random($this->env));
            // line 4
            echo "
    <div class=\"cs-screen cs-screen-2 cs-screen-";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["screen"]) || array_key_exists("screen", $context) ? $context["screen"] : (function () { throw new RuntimeError('Variable "screen" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\">
        ";
            // line 6
            echo twig_call_macro($macros["forms"], "macro_textareaField", [["first" => true, "class" => "cs-body-text", "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter(            // line 9
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 9, $this->source); })()), "app"), "rows" => 5]], 6, $context, $this->getSourceContext());
            // line 11
            echo "
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">";
            // line 13
            echo (isset($context["resultsIcon"]) || array_key_exists("resultsIcon", $context) ? $context["resultsIcon"] : (function () { throw new RuntimeError('Variable "resultsIcon" does not exist.', 13, $this->source); })());
            echo "</div>
            <h2>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["resultsHeading"]) || array_key_exists("resultsHeading", $context) ? $context["resultsHeading"] : (function () { throw new RuntimeError('Variable "resultsHeading" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\">
                <div class=\"cs-search-params\"></div>
                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["submitText"]) || array_key_exists("submitText", $context) ? $context["submitText"] : (function () { throw new RuntimeError('Variable "submitText" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 21
            if (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 21, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 21, $this->source); })()))) {
                // line 22
                echo "                    <p>";
                echo $this->extensions['craft\web\twig\Extension']->translateFilter("or <a>send to Developer Support</a>", "app");
                echo "</p>
                ";
            }
            // line 24
            echo "                <hr>
                <h2>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("More Resources", "app"), "html", null, true);
            echo "</h2>
                <div class=\"cs-logo-resources\">
                    <a href=\"https://craftcms.com/partners\" target=\"_blank\">
                        <h3><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "/logos/craft-partners.svg\" alt=\"Craft Support\"></h3>
                        <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Find an official Craft Partner", "app"), "html", null, true);
            echo "</p>
                    </a>
                    <a href=\"https://craftcms.com/discord\" target=\"_blank\">
                        <h3><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "/logos/discord.svg\" alt=\"Discord\"></h3>
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Meet the Craft community", "app"), "html", null, true);
            echo "</p>
                    </a>
                    <a href=\"https://craftquest.io\" target=\"_blank\">
                        <h3><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["bundleUrl"]) || array_key_exists("bundleUrl", $context) ? $context["bundleUrl"] : (function () { throw new RuntimeError('Variable "bundleUrl" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "/logos/craftquest.svg\" alt=\"CraftQuest\"></h3>
                        <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Unlimited video training", "app"), "html", null, true);
            echo "</p>
                    </a>
                </div>
                <div class=\"cs-icon-resources\">
                    <a href=\"https://docs.craftcms.com/v3/\" target=\"_blank\">
                        ";
            // line 42
            echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/book.svg");
            echo "
                        <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Documentation", "app"), "html", null, true);
            echo "</span>
                    </a>
                    <a href=\"https://craftcms.com/guides\" target=\"_blank\">
                        ";
            // line 46
            echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/magnifying-glass.svg");
            echo "
                        <span>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Guides", "app"), "html", null, true);
            echo "</span>
                    </a>
                </div>
            </form>
            <form class=\"cs-support-form hidden\" action=\"";
            // line 51
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::actionUrl("dashboard/send-support-request"), "html", null, true);
            echo "\" method=\"post\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                ";
            // line 52
            echo craft\helpers\Html::csrfInput();
            echo "
                ";
            // line 53
            echo craft\helpers\Html::hiddenInput("widgetId", craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 53, $this->source); })()), "id", []));
            echo "
                ";
            // line 54
            echo craft\helpers\Html::hiddenInput("message", "", ["class" => "cs-support-message"]);
            echo "

                ";
            // line 56
            $context["email"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 56, $this->source); })()), "email", []);
            // line 57
            echo "                ";
            if (twig_in_filter((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), [0 => "support@pixelandtonic.com", 1 => "support@craftcms.com"])) {
                // line 58
                echo "                    ";
                $context["email"] = "";
                // line 59
                echo "                ";
            }
            // line 60
            echo "
                ";
            // line 61
            echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Your Email", "app"), "name" => "fromEmail", "value" =>             // line 65
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 65, $this->source); })())]], 61, $context, $this->getSourceContext());
            // line 66
            echo "

                <a class=\"fieldtoggle\" data-target=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "-support-more\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("More", "app"), "html", null, true);
            echo "</a>

                <div id=\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "-support-more\" class=\"cs-support-more hidden\">
                    ";
            // line 71
            echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach error logs?", "app"), "name" => "attachLogs", "checked" => true]], 71, $context, $this->getSourceContext());
            // line 75
            echo "

                    ";
            // line 77
            if ((isset($context["showBackupOption"]) || array_key_exists("showBackupOption", $context) ? $context["showBackupOption"] : (function () { throw new RuntimeError('Variable "showBackupOption" does not exist.', 77, $this->source); })())) {
                // line 78
                echo "                        ";
                echo twig_call_macro($macros["forms"], "macro_checkboxField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach a database backup?", "app"), "name" => "attachDbBackup", "checked" => true]], 78, $context, $this->getSourceContext());
                // line 82
                echo "
                    ";
            }
            // line 84
            echo "
                    ";
            // line 85
            echo twig_call_macro($macros["forms"], "macro_checkboxField", [["name" => "attachTemplates", "checked" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Include your template files?", "app")]], 85, $context, $this->getSourceContext());
            // line 89
            echo "

                    ";
            // line 91
            echo twig_call_macro($macros["forms"], "macro_fileField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Attach an additional file?", "app"), "class" => "cs-support-attachment", "name" => "attachAdditionalFile"]], 91, $context, $this->getSourceContext());
            // line 95
            echo "
                </div>

                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Send", "app"), "html", null, true);
            echo "\">
                <div class=\"spinner hidden\"></div>
            </form>
        </div>
        <iframe id=\"";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "-iframe\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "-iframe\" class=\"hidden\"></iframe>
    </div>
";
            // line 0
            craft\helpers\Template::endProfile("macro", "screen");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/CraftSupport/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 0,  315 => 102,  308 => 98,  303 => 95,  301 => 91,  297 => 89,  295 => 85,  292 => 84,  288 => 82,  285 => 78,  283 => 77,  279 => 75,  277 => 71,  273 => 70,  266 => 68,  262 => 66,  260 => 65,  259 => 61,  256 => 60,  253 => 59,  250 => 58,  247 => 57,  245 => 56,  240 => 54,  236 => 53,  232 => 52,  226 => 51,  219 => 47,  215 => 46,  209 => 43,  205 => 42,  197 => 37,  193 => 36,  187 => 33,  183 => 32,  177 => 29,  173 => 28,  167 => 25,  164 => 24,  158 => 22,  156 => 21,  152 => 20,  147 => 18,  140 => 14,  136 => 13,  132 => 11,  130 => 9,  129 => 6,  123 => 5,  120 => 4,  117 => 3,  114 => 2,  112 => 0,  91 => 1,  87 => 0,  83 => 124,  78 => 122,  71 => 118,  67 => 117,  63 => 116,  57 => 113,  53 => 112,  49 => 111,  43 => 107,  41 => 106,  38 => 105,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro screen(widget, showBackupOption, bundleUrl, screen, placeholder, resultsIcon, resultsHeading, formAction, submitText) %}
    {% import \"_includes/forms\" as forms %}
    {% set idPrefix = 'cs-'~screen~random() %}

    <div class=\"cs-screen cs-screen-2 cs-screen-{{ screen }}\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\">
        {{ forms.textareaField({
            first: true,
            class: 'cs-body-text',
            placeholder: placeholder|t('app'),
            rows: 5
        }) }}
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">{{ resultsIcon|raw }}</div>
            <h2>{{ resultsHeading }}</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\">
                <div class=\"cs-search-params\"></div>
                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"{{ submitText }}\">
                {% if CraftEdition == CraftPro %}
                    <p>{{ \"or <a>send to Developer Support</a>\"|t('app')|raw }}</p>
                {% endif %}
                <hr>
                <h2>{{ 'More Resources'|t('app') }}</h2>
                <div class=\"cs-logo-resources\">
                    <a href=\"https://craftcms.com/partners\" target=\"_blank\">
                        <h3><img src=\"{{ bundleUrl }}/logos/craft-partners.svg\" alt=\"Craft Support\"></h3>
                        <p>{{ 'Find an official Craft Partner'|t('app') }}</p>
                    </a>
                    <a href=\"https://craftcms.com/discord\" target=\"_blank\">
                        <h3><img src=\"{{ bundleUrl }}/logos/discord.svg\" alt=\"Discord\"></h3>
                        <p>{{ 'Meet the Craft community'|t('app') }}</p>
                    </a>
                    <a href=\"https://craftquest.io\" target=\"_blank\">
                        <h3><img src=\"{{ bundleUrl }}/logos/craftquest.svg\" alt=\"CraftQuest\"></h3>
                        <p>{{ 'Unlimited video training'|t('app') }}</p>
                    </a>
                </div>
                <div class=\"cs-icon-resources\">
                    <a href=\"https://docs.craftcms.com/v3/\" target=\"_blank\">
                        {{ svg('@app/icons/book.svg') }}
                        <span>{{ 'Documentation'|t('app') }}</span>
                    </a>
                    <a href=\"https://craftcms.com/guides\" target=\"_blank\">
                        {{ svg('@app/icons/magnifying-glass.svg') }}
                        <span>{{ 'Guides'|t('app') }}</span>
                    </a>
                </div>
            </form>
            <form class=\"cs-support-form hidden\" action=\"{{ actionUrl('dashboard/send-support-request') }}\" method=\"post\" target=\"{{ idPrefix }}-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                {{ csrfInput() }}
                {{ hiddenInput('widgetId', widget.id) }}
                {{ hiddenInput('message', '', {class: 'cs-support-message'}) }}

                {% set email = currentUser.email %}
                {% if email in ['support@pixelandtonic.com', 'support@craftcms.com'] %}
                    {% set email = '' %}
                {% endif %}

                {{ forms.textField({
                    first: true,
                    label: \"Your Email\"|t('app'),
                    name: 'fromEmail',
                    value: email
                }) }}

                <a class=\"fieldtoggle\" data-target=\"{{ idPrefix }}-support-more\">{{ \"More\"|t('app') }}</a>

                <div id=\"{{ idPrefix }}-support-more\" class=\"cs-support-more hidden\">
                    {{ forms.checkboxField({
                        label: \"Attach error logs?\"|t('app'),
                        name: 'attachLogs',
                        checked: true
                    }) }}

                    {% if showBackupOption %}
                        {{ forms.checkboxField({
                            label: \"Attach a database backup?\"|t('app'),
                            name: 'attachDbBackup',
                            checked: true
                        }) }}
                    {% endif %}

                    {{ forms.checkboxField({
                        name: 'attachTemplates',
                        checked: true,
                        label: \"Include your template files?\"|t('app'),
                    }) }}

                    {{ forms.fileField({
                        label: \"Attach an additional file?\"|t('app'),
                        class: 'cs-support-attachment',
                        name: 'attachAdditionalFile',
                    }) }}
                </div>

                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"{{ 'Send'|t('app') }}\">
                <div class=\"spinner hidden\"></div>
            </form>
        </div>
        <iframe id=\"{{ idPrefix }}-iframe\" name=\"{{ idPrefix }}-iframe\" class=\"hidden\"></iframe>
    </div>
{% endmacro %}

{% from _self import screen %}


<div class=\"cs-screen cs-screen-home\">
    <div class=\"cs-opt\" data-screen=\"help\">
        <div class=\"cs-opt-icon\">{{ buoeyIcon|raw }}</div>
        <h2>{{ \"Get help\"|t('app') }}</h2>
        <p>{{ \"How-to’s and other questions\"|t('app') }}</p>
    </div>
    <div class=\"cs-opt\" data-screen=\"feedback\">
        <div class=\"cs-opt-icon\">{{ bullhornIcon|raw }}</div>
        <h2>{{ \"Give feedback\"|t('app') }}</h2>
        <p>{{ \"Bug reports and feature requests\"|t('app') }}</p>
    </div>
</div>

{{ screen(widget, showBackupOption, bundleUrl, 'help', \"Briefly describe your question.\"|t('app'), seIcon, \"Similar questions on Stack Exchange\"|t('app'), 'https://craftcms.stackexchange.com/questions/ask', \"Ask on Stack Exchange\"|t('app')) }}

{{ screen(widget, showBackupOption, bundleUrl, 'feedback', \"Briefly describe your issue or idea.\"|t('app'), ghIcon, \"Similar issues on GitHub\"|t('app'), 'https://github.com/craftcms/cms/issues/new', \"Post on GitHub\"|t('app')) }}
", "_components/widgets/CraftSupport/body", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/widgets/CraftSupport/body.html");
    }
}
