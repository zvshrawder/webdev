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

/* plugin-store/_index */
class __TwigTemplate_72c332765152125277a906da728198544daa63f9b7accd6d33acae8a0a9b6cc4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionButton' => [$this, 'block_actionButton'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "plugin-store/_index");
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Plugin Store", "app");
        // line 5
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Active installs", 1 => "Active Trials", 2 => "Add all to cart", 3 => "Add to cart", 4 => "Added to cart", 5 => "Address Line 1", 6 => "Address Line 2", 7 => "Already in your cart", 8 => "Ascending", 9 => "Back", 10 => "Billing", 11 => "Business Name", 12 => "Business Tax ID", 13 => "Buy later", 14 => "Buy now for {price}", 15 => "Buy now", 16 => "Card number", 17 => "Cart", 18 => "Categories", 19 => "Changelog", 20 => "Checkout", 21 => "City", 22 => "Cloud Storage Integration", 23 => "Community Support (Slack, Stack Exchange)", 24 => "Compatibility", 25 => "Connect to your Craft ID", 26 => "Contact", 27 => "Content Modeling", 28 => "Continue as guest", 29 => "Continue", 30 => "Copy the package’s name for this plugin.", 31 => "Couldn’t load active trials.", 32 => "Coupon Code", 33 => "CVC", 34 => "Descending", 35 => "Description", 36 => "Developer Support", 37 => "Documentation", 38 => "Features", 39 => "First Name", 40 => "For when you’re building a website for yourself or a friend.", 41 => "For when you’re building something professionally for a client or team.", 42 => "Free", 43 => "Information", 44 => "Install", 45 => "Installed as a trial", 46 => "Installed", 47 => "Item", 48 => "Items in your cart", 49 => "Last Name", 50 => "Last update", 51 => "Last Update", 52 => "Less", 53 => "License", 54 => "Licensed", 55 => "Loading Plugin Store…", 56 => "Manage plugins", 57 => "MM / YY", 58 => "More", 59 => "Multi-site Multi-lingual", 60 => "Name", 61 => "Only up to {version} is compatible with your version of Craft.", 62 => "Package Name", 63 => "Page not found.", 64 => "Pay", 65 => "Payment Method", 66 => "Payment", 67 => "Plugin Name", 68 => "Plugin Store", 69 => "Popularity", 70 => "Price includes 1 year of updates.", 71 => "Pro Rate Discount", 72 => "Reactivate", 73 => "Remove", 74 => "Renewal price", 75 => "Report an issue", 76 => "Save as my new credit card", 77 => "Screenshots", 78 => "Search plugins", 79 => "Security & Bug Fixes", 80 => "See all", 81 => "Showing results for “{searchQuery}”", 82 => "Staff Picks", 83 => "Subtotal", 84 => "Support", 85 => "System Branding", 86 => "Thank You!", 87 => "The Plugin Store is not available, please try again later.", 88 => "This plugin isn’t compatible with your version of Craft.", 89 => "Total Price", 90 => "Total", 91 => "Try for free", 92 => "Try", 93 => "Try", 94 => "Updates until {date} ({sign}{price})", 95 => "Updates until {date}", 96 => "Updates", 97 => "Upgrade Craft CMS", 98 => "Use a new credit card", 99 => "Use card {cardDetails}", 100 => "Use your Craft ID", 101 => "User Accounts", 102 => "Version {version}", 103 => "Version", 104 => "Website", 105 => "Your order has been processed successfully.", 106 => "Zip Code", 107 => "{price} plus {renewalPrice}/year for updates", 108 => "{price}/year", 109 => "{renewalPrice}/year per site for updates after that.", 110 => "Your are currently using the {currentEdition} edition, and your licensed edition is {licensedEdition}.", 111 => "This license is tied to another Craft install. Purchase a license for this install.", 112 => "Your license key is invalid.", 113 => "Critical", 114 => "Couldn’t add all items to the cart.", 115 => "No results."]], "method");
        // line 157
        $context["content"] = ('' === $tmp = "    <div id=\"app\"></div>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "plugin-store/_index", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "plugin-store/_index");
    }

    // line 124
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 125
        echo "    <div id=\"pluginstore-actions-spinner\" class=\"spinner lg hidden\"></div>

    <div id=\"pluginstore-actions\" class=\"hidden\">

        <a id=\"cart-button\" role=\"button\" tabindex=\"0\">";
        // line 129
        echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/shopping-cart.svg", null, true);
        echo " <span class=\"badge\">0</span></a>

        <a id=\"craftid-account\" class=\"menubtn hidden\"><span class=\"photo\">";
        // line 131
        echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/craftid.svg", null, true);
        echo "</span><span class=\"label\">Account</span></a>

        <div class=\"menu\">
            <ul>
                <li><a href=\"";
        // line 135
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 135, $this->source); })()), "cp", []), "craftIdAccountUrl", [], "method"), "html", null, true);
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Manage your Craft ID", "app"), "html", null, true);
        echo "</a></li>
                <li>
                    <form method=\"post\" id=\"disconnect\">
                        ";
        // line 138
        echo craft\helpers\Html::csrfInput();
        echo "
                        ";
        // line 139
        echo craft\helpers\Html::actionInput("plugin-store/disconnect");
        echo "
                        <a onclick=\"document.getElementById('disconnect').submit();\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign out from Craft ID", "app"), "html", null, true);
        echo "</a>
                    </form>
                </li>
            </ul>
        </div>

        <form id=\"craftid-connect-form\" method=\"post\">
            ";
        // line 147
        echo craft\helpers\Html::csrfInput();
        echo "
            ";
        // line 148
        echo craft\helpers\Html::actionInput("plugin-store/connect");
        echo "
            <div class=\"ssl-status light\" title=\"";
        // line 149
        echo twig_escape_filter($this->env, ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 149, $this->source); })()), "app", []), "request", []), "isSecureConnection", [])) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("Your connection is secure", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("Your connection is insecure", "app"))), "html", null, true);
        echo "\">
                <i class=\"";
        // line 150
        echo ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 150, $this->source); })()), "app", []), "request", []), "isSecureConnection", [])) ? ("secure") : ("insecure"));
        echo " icon\"></i>
            </div>
            <a onclick=\"document.getElementById('craftid-connect-form').submit();\">";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign into Craft ID", "app"), "html", null, true);
        echo "</a>
        </form>
    </div>
";
        // line 0
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    public function getTemplateName()
    {
        return "plugin-store/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 0,  125 => 152,  120 => 150,  116 => 149,  112 => 148,  108 => 147,  98 => 140,  94 => 139,  90 => 138,  82 => 135,  75 => 131,  70 => 129,  64 => 125,  62 => 0,  58 => 124,  54 => 0,  51 => 1,  48 => 157,  46 => 5,  44 => 3,  42 => 0,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}

{% set title = 'Plugin Store'|t('app') %}

{% do view.registerTranslations('app', [
    \"Active installs\",
    \"Active Trials\",
    \"Add all to cart\",
    \"Add to cart\",
    \"Added to cart\",
    \"Address Line 1\",
    \"Address Line 2\",
    \"Already in your cart\",
    \"Ascending\",
    \"Back\",
    \"Billing\",
    \"Business Name\",
    \"Business Tax ID\",
    \"Buy later\",
    \"Buy now for {price}\",
    \"Buy now\",
    \"Card number\",
    \"Cart\",
    \"Categories\",
    \"Changelog\",
    \"Checkout\",
    \"City\",
    \"Cloud Storage Integration\",
    \"Community Support (Slack, Stack Exchange)\",
    \"Compatibility\",
    \"Connect to your Craft ID\",
    \"Contact\",
    \"Content Modeling\",
    \"Continue as guest\",
    \"Continue\",
    \"Copy the package’s name for this plugin.\",
    \"Couldn’t load active trials.\",
    \"Coupon Code\",
    \"CVC\",
    \"Descending\",
    \"Description\",
    \"Developer Support\",
    \"Documentation\",
    \"Features\",
    \"First Name\",
    \"For when you’re building a website for yourself or a friend.\",
    \"For when you’re building something professionally for a client or team.\",
    \"Free\",
    \"Information\",
    \"Install\",
    \"Installed as a trial\",
    \"Installed\",
    \"Item\",
    \"Items in your cart\",
    \"Last Name\",
    \"Last update\",
    \"Last Update\",
    \"Less\",
    \"License\",
    \"Licensed\",
    \"Loading Plugin Store…\",
    \"Manage plugins\",
    \"MM / YY\",
    \"More\",
    \"Multi-site Multi-lingual\",
    \"Name\",
    \"Only up to {version} is compatible with your version of Craft.\",
    \"Package Name\",
    \"Page not found.\",
    \"Pay\",
    \"Payment Method\",
    \"Payment\",
    \"Plugin Name\",
    \"Plugin Store\",
    \"Popularity\",
    \"Price includes 1 year of updates.\",
    \"Pro Rate Discount\",
    \"Reactivate\",
    \"Remove\",
    \"Renewal price\",
    \"Report an issue\",
    \"Save as my new credit card\",
    \"Screenshots\",
    \"Search plugins\",
    \"Security & Bug Fixes\",
    \"See all\",
    \"Showing results for “{searchQuery}”\",
    \"Staff Picks\",
    \"Subtotal\",
    \"Support\",
    \"System Branding\",
    \"Thank You!\",
    \"The Plugin Store is not available, please try again later.\",
    \"This plugin isn’t compatible with your version of Craft.\",
    \"Total Price\",
    \"Total\",
    \"Try for free\",
    \"Try\",
    \"Try\",
    \"Updates until {date} ({sign}{price})\",
    \"Updates until {date}\",
    \"Updates\",
    \"Upgrade Craft CMS\",
    \"Use a new credit card\",
    \"Use card {cardDetails}\",
    \"Use your Craft ID\",
    \"User Accounts\",
    \"Version {version}\",
    \"Version\",
    \"Website\",
    \"Your order has been processed successfully.\",
    \"Zip Code\",
    \"{price} plus {renewalPrice}/year for updates\",
    \"{price}/year\",
    \"{renewalPrice}/year per site for updates after that.\",
    \"Your are currently using the {currentEdition} edition, and your licensed edition is {licensedEdition}.\",
    \"This license is tied to another Craft install. Purchase a license for this install.\",
    \"Your license key is invalid.\",
    \"Critical\",
    \"Couldn’t add all items to the cart.\",
    \"No results.\",
]) %}

{% block actionButton %}
    <div id=\"pluginstore-actions-spinner\" class=\"spinner lg hidden\"></div>

    <div id=\"pluginstore-actions\" class=\"hidden\">

        <a id=\"cart-button\" role=\"button\" tabindex=\"0\">{{ svg('@app/icons/shopping-cart.svg', namespace=true) }} <span class=\"badge\">0</span></a>

        <a id=\"craftid-account\" class=\"menubtn hidden\"><span class=\"photo\">{{ svg('@app/icons/craftid.svg', namespace=true) }}</span><span class=\"label\">Account</span></a>

        <div class=\"menu\">
            <ul>
                <li><a href=\"{{ craft.cp.craftIdAccountUrl() }}\" rel=\"noopener\" target=\"_blank\">{{ \"Manage your Craft ID\"|t('app') }}</a></li>
                <li>
                    <form method=\"post\" id=\"disconnect\">
                        {{ csrfInput() }}
                        {{ actionInput('plugin-store/disconnect') }}
                        <a onclick=\"document.getElementById('disconnect').submit();\">{{ \"Sign out from Craft ID\"|t('app') }}</a>
                    </form>
                </li>
            </ul>
        </div>

        <form id=\"craftid-connect-form\" method=\"post\">
            {{ csrfInput() }}
            {{ actionInput('plugin-store/connect') }}
            <div class=\"ssl-status light\" title=\"{{ craft.app.request.isSecureConnection ? \"Your connection is secure\"|t('app') : \"Your connection is insecure\"|t('app') }}\">
                <i class=\"{{ craft.app.request.isSecureConnection ? \"secure\" : \"insecure\" }} icon\"></i>
            </div>
            <a onclick=\"document.getElementById('craftid-connect-form').submit();\">{{ 'Sign into Craft ID'|t('app') }}</a>
        </form>
    </div>
{% endblock %}

{% set content %}
    <div id=\"app\"></div>
{% endset %}
", "plugin-store/_index", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/plugin-store/_index.html");
    }
}
