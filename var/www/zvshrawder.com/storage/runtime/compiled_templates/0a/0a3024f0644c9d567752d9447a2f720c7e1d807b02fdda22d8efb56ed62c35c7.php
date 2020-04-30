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

/* _special/install/account */
class __TwigTemplate_e54c9376c270d808122cd2ee3631ec8c5ed9d9e0f6a00a57f1982daac08b146e extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_special/install/account");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_special/install/account", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["useEmailAsUsername"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 3, $this->source); })()), "app", []), "config", []), "general", []), "useEmailAsUsername", []);
        // line 4
        echo "
<div id=\"account\" class=\"screen hidden\" data-inputs=\"username,email,password\">
    <div class=\"icon\">";
        // line 6
        echo (isset($context["userIcon"]) || array_key_exists("userIcon", $context) ? $context["userIcon"] : (function () { throw new RuntimeError('Variable "userIcon" does not exist.', 6, $this->source); })());
        echo "</div>
    <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Create your account", "app"), "html", null, true);
        echo "</h1>

    <form accept-charset=\"UTF-8\">
        ";
        // line 10
        echo craft\helpers\Html::csrfInput();
        echo "

        ";
        // line 12
        if ( !(isset($context["useEmailAsUsername"]) || array_key_exists("useEmailAsUsername", $context) ? $context["useEmailAsUsername"] : (function () { throw new RuntimeError('Variable "useEmailAsUsername" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "            ";
            echo twig_call_macro($macros["forms"], "macro_textField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Username", "app"), "id" => "account-username", "maxlength" => 255]], 13, $context, $this->getSourceContext());
            // line 18
            echo "
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        echo twig_call_macro($macros["forms"], "macro_textField", [["first" =>         // line 22
(isset($context["useEmailAsUsername"]) || array_key_exists("useEmailAsUsername", $context) ? $context["useEmailAsUsername"] : (function () { throw new RuntimeError('Variable "useEmailAsUsername" does not exist.', 22, $this->source); })()), "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Email", "app"), "id" => "account-email", "maxlength" => 255]], 21, $context, $this->getSourceContext());
        // line 26
        echo "

        ";
        // line 28
        echo twig_call_macro($macros["forms"], "macro_passwordField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Password", "app"), "id" => "account-password"]], 28, $context, $this->getSourceContext());
        // line 31
        echo "

        <div class=\"buttons\">
            <div class=\"btn big submit\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Next", "app"), "html", null, true);
        echo "
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_special/install/account");
    }

    public function getTemplateName()
    {
        return "_special/install/account";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 0,  90 => 34,  85 => 31,  83 => 28,  79 => 26,  77 => 22,  76 => 21,  73 => 20,  69 => 18,  66 => 13,  64 => 12,  59 => 10,  53 => 7,  49 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{% set useEmailAsUsername = craft.app.config.general.useEmailAsUsername %}

<div id=\"account\" class=\"screen hidden\" data-inputs=\"username,email,password\">
    <div class=\"icon\">{{ userIcon|raw }}</div>
    <h1>{{ \"Create your account\"|t('app') }}</h1>

    <form accept-charset=\"UTF-8\">
        {{ csrfInput() }}

        {% if not useEmailAsUsername %}
            {{ forms.textField({
                first: true,
                label: \"Username\"|t('app'),
                id: 'account-username',
                maxlength: 255
            }) }}
        {% endif %}

        {{ forms.textField({
            first: useEmailAsUsername,
            label: \"Email\"|t('app'),
            id: 'account-email',
            maxlength: 255
        }) }}

        {{ forms.passwordField({
            label: \"Password\"|t('app'),
            id: 'account-password'
        }) }}

        <div class=\"buttons\">
            <div class=\"btn big submit\">{{ \"Next\"|t('app') }}
                <input type=\"submit\" tabindex=\"-1\">
            </div>
        </div>
    </form>
</div>
", "_special/install/account", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_special/install/account.html");
    }
}
