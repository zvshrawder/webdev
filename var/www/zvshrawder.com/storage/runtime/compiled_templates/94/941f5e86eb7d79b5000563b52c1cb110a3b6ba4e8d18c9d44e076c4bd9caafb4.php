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

/* settings/plugins */
class __TwigTemplate_e06d43d5542660d40fc15aec86468b534206707f2ec2c31ab987a8198cac8a34 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "settings/plugins");
        // line 1
        Craft::$app->controller->requireAdmin();
        // line 4
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Plugins", "app");
        // line 5
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\plugins\\PluginsAsset"], "method");
        // line 7
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")]];
        // line 12
        $context["info"] = $this->extensions['craft\web\twig\Extension']->multisortFilter(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 12, $this->source); })()), "app", []), "plugins", []), "getAllPluginInfo", [], "method"), [0 => "isEnabled", 1 => "isInstalled", 2 => "name"], [0 =>         // line 14
(isset($context["SORT_DESC"]) || array_key_exists("SORT_DESC", $context) ? $context["SORT_DESC"] : (function () { throw new RuntimeError('Variable "SORT_DESC" does not exist.', 14, $this->source); })()), 1 => (isset($context["SORT_DESC"]) || array_key_exists("SORT_DESC", $context) ? $context["SORT_DESC"] : (function () { throw new RuntimeError('Variable "SORT_DESC" does not exist.', 14, $this->source); })()), 2 => (isset($context["SORT_ASC"]) || array_key_exists("SORT_ASC", $context) ? $context["SORT_ASC"] : (function () { throw new RuntimeError('Variable "SORT_ASC" does not exist.', 14, $this->source); })())], [0 =>         // line 15
(isset($context["SORT_NUMERIC"]) || array_key_exists("SORT_NUMERIC", $context) ? $context["SORT_NUMERIC"] : (function () { throw new RuntimeError('Variable "SORT_NUMERIC" does not exist.', 15, $this->source); })()), 1 => (isset($context["SORT_NUMERIC"]) || array_key_exists("SORT_NUMERIC", $context) ? $context["SORT_NUMERIC"] : (function () { throw new RuntimeError('Variable "SORT_NUMERIC" does not exist.', 15, $this->source); })()), 2 => (isset($context["SORT_NATURAL"]) || array_key_exists("SORT_NATURAL", $context) ? $context["SORT_NATURAL"] : (function () { throw new RuntimeError('Variable "SORT_NATURAL" does not exist.', 15, $this->source); })())]);
        // line 18
        $context["disabledPlugins"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 18, $this->source); })()), "app", []), "config", []), "general", []), "disabledPlugins", []);
        // line 141
        ob_start();
        // line 142
        echo "new Craft.PluginManager();
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/plugins", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "settings/plugins");
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "content");
        // line 22
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "        <div class=\"tablepane\">
            <table id=\"plugins\" class=\"data fullwidth\">
                <tbody>
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["handle"] => $context["config"]) {
                // line 27
                echo "                        ";
                $context["pluginStoreUrl"] = craft\helpers\UrlHelper::url(("plugin-store/" . $context["handle"]));
                // line 28
                echo "                        <tr id=\"plugin-";
                echo twig_escape_filter($this->env, $context["handle"], "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "name", []), "html", null, true);
                echo "\" data-handle=\"";
                echo twig_escape_filter($this->env, $context["handle"], "html", null, true);
                echo "\">
                            <th>
                                <div class=\"plugin-infos\">
                                    <a class=\"icon\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["pluginStoreUrl"]) || array_key_exists("pluginStoreUrl", $context) ? $context["pluginStoreUrl"] : (function () { throw new RuntimeError('Variable "pluginStoreUrl" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("View {plugin} in the Plugin Store", "app", ["plugin" => craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "name", [])]), "html", null, true);
                echo "\">
                                        ";
                // line 32
                echo $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 32, $this->source); })()), "app", []), "plugins", []), "getPluginIconSvg", [0 => $context["handle"]], "method"), true, true);
                echo "
                                        ";
                // line 33
                if (((craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseKeyStatus", []) == "valid") ||  !twig_test_empty(craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseIssues", [])))) {
                    // line 34
                    echo "                                            <span class=\"license-key-status ";
                    echo ((twig_test_empty(craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseIssues", []))) ? ("valid") : (""));
                    echo "\"></span>
                                        ";
                }
                // line 36
                echo "                                    </a>
                                    <div class=\"details\">
                                        <div class=\"plugin-id\">
                                            <h2>";
                // line 39
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "name", []), "html", null, true);
                echo "</h2>
                                            ";
                // line 40
                if ((craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "hasMultipleEditions", []) || craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "isTrial", []))) {
                    // line 41
                    echo "                                                ";
                    echo ((craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "upgradeAvailable", [])) ? ((("<a href=\"" . (isset($context["pluginStoreUrl"]) || array_key_exists("pluginStoreUrl", $context) ? $context["pluginStoreUrl"] : (function () { throw new RuntimeError('Variable "pluginStoreUrl" does not exist.', 41, $this->source); })())) . "\"")) : ("<div"));
                    echo " class=\"edition\">
                                                    ";
                    // line 42
                    if (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "hasMultipleEditions", [])) {
                        echo "<div class=\"edition-name\">";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "edition", []), "html", null, true);
                        echo "</div>";
                    }
                    // line 43
                    echo "                                                    ";
                    if (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "isTrial", [])) {
                        echo "<div class=\"edition-trial\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Trial", "app"), "html", null, true);
                        echo "</div>";
                    }
                    // line 44
                    echo "                                                ";
                    echo ((craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "upgradeAvailable", [])) ? ("</a>") : ("</div>"));
                    echo "
                                            ";
                }
                // line 46
                echo "                                            <span class=\"version\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "version", []), "html", null, true);
                echo "</span>
                                        </div>
                                        ";
                // line 48
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "description", [])) {
                    // line 49
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "description", []), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 51
                echo "                                        ";
                if ((((craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "developerUrl", []) || craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "developer", [])) || craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "hasCpSettings", [])) || craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "documentationUrl", []))) {
                    // line 52
                    echo "                                            <p class=\"links\">";
                    // line 53
                    ob_start();
                    // line 54
                    echo "                                                ";
                    if (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "documentationUrl", [])) {
                        // line 55
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "documentationUrl", []), "html", null, true);
                        echo "\" rel=\"noopener\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Documentation", "app"), "html", null, true);
                        echo "</a>
                                                ";
                    }
                    // line 57
                    echo "                                                ";
                    if (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "hasCpSettings", [])) {
                        // line 58
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(("settings/plugins/" . craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "moduleId", []))), "html", null, true);
                        echo "\"><span data-icon=\"settings\"></span>";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
                        echo "</a>
                                                ";
                    }
                    // line 60
                    echo "                                                ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 61
                    echo "</p>
                                        ";
                }
                // line 63
                echo "                                        ";
                $context["showLicenseKey"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseKey", []) || (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseKeyStatus", []) != "unknown"));
                // line 64
                echo "                                        <div class=\"flex license-key";
                if ( !(isset($context["showLicenseKey"]) || array_key_exists("showLicenseKey", $context) ? $context["showLicenseKey"] : (function () { throw new RuntimeError('Variable "showLicenseKey" does not exist.', 64, $this->source); })())) {
                    echo " hidden";
                }
                echo "\">
                                            <div class=\"pane\">
                                                <input class=\"text code";
                // line 66
                if ( !twig_test_empty(craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseIssues", []))) {
                    echo " error";
                }
                echo "\" size=\"29\" value=\"";
                echo twig_escape_filter($this->env, (((twig_slice($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseKey", []), 0, 1) == "\$")) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseKey", [])) : (twig_trim_filter($this->extensions['craft\web\twig\Extension']->replaceFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseKey", []), "/.{4}/", "\$0-"), "-"))), "html", null, true);
                echo "\" placeholder=\"XXXX-XXXX-XXXX-XXXX-XXXX-XXXX\" readonly>
                                            </div>
                                            <a class=\"btn";
                // line 68
                if ( !twig_test_empty(craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseIssues", []))) {
                    echo " submit";
                }
                if ( !((isset($context["showLicenseKey"]) || array_key_exists("showLicenseKey", $context) ? $context["showLicenseKey"] : (function () { throw new RuntimeError('Variable "showLicenseKey" does not exist.', 68, $this->source); })()) &&  !craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseKey", []))) {
                    echo " hidden";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(((("plugin-store/buy/" . $context["handle"]) . "/") . craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "edition", []))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Buy now", "app"), "html", null, true);
                echo "</a>
                                            <div class=\"spinner hidden\"></div>
                                        </div>
                                        ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "licenseIssues", []));
                foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
                    // line 72
                    echo "                                            <p class=\"error\">
                                                ";
                    // line 73
                    switch ($context["issue"]) {
                        case "wrong_edition":
                        {
                            // line 75
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("This license is for the {name} edition.", "app", ["name" => $this->extensions['craft\web\twig\Extension']->ucfirstFilter(craft\helpers\Template::attribute($this->env, $this->source,                             // line 76
$context["config"], "licensedEdition", []))]), "html", null, true);
                            // line 77
                            echo "
                                                    ";
                            break;
                        }
                        case "mismatched":
                        {
                            // line 79
                            echo "                                                        ";
                            echo $this->extensions['craft\web\twig\Extension']->translateFilter("This license is tied to another Craft install. Visit {url} to resolve.", "app", ["url" => "<a href=\"https://id.craftcms.com\" rel=\"noopener\" target=\"_blank\">id.craftcms.com</a>"]);
                            // line 81
                            echo "
                                                    ";
                            break;
                        }
                        case "astray":
                        {
                            // line 83
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("This license isn’t allowed to run version {version}.", "app", ["version" => craft\helpers\Template::attribute($this->env, $this->source,                             // line 84
$context["config"], "version", [])]), "html", null, true);
                            // line 85
                            echo "
                                                    ";
                            break;
                        }
                        case "required":
                        {
                            // line 87
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("A license key is required.", "app"), "html", null, true);
                            echo "
                                                    ";
                            break;
                        }
                        default:
                        {
                            // line 89
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Your license key is invalid.", "app"), "html", null, true);
                            echo "
                                                ";
                        }
                    }
                    // line 91
                    echo "                                            </p>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                                    </div>
                                </div>
                            </th>
                            <td class=\"nowrap\" data-title=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Status", "app"), "html", null, true);
                echo "\">
                                ";
                // line 97
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "isEnabled", [])) {
                    // line 98
                    echo "                                    <span class=\"status on\"></span>";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Installed", "app"), "html", null, true);
                    echo "
                                ";
                } elseif (craft\helpers\Template::attribute($this->env, $this->source,                 // line 99
$context["config"], "isInstalled", [])) {
                    // line 100
                    echo "                                    <span class=\"status off\"></span>";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disabled", "app"), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 102
                    echo "                                    <span class=\"status\"></span><span class=\"light\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Not installed", "app"), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 104
                echo "                            </td>
                            <td class=\"nowrap thin\" data-title=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Action", "app"), "html", null, true);
                echo "\">
                                <form method=\"post\" accept-charset=\"UTF-8\">
                                    ";
                // line 107
                echo craft\helpers\Html::hiddenInput("pluginHandle", $context["handle"]);
                echo "
                                    ";
                // line 108
                echo craft\helpers\Html::csrfInput();
                echo "
                                    <div class=\"btngroup\">
                                        <div class=\"btn menubtn\" data-icon=\"settings\"></div>
                                        <div class=\"menu\" data-align=\"right\">
                                            <ul>
                                                ";
                // line 113
                if ( !craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "isInstalled", [])) {
                    // line 114
                    echo "                                                    <li><a class=\"formsubmit\" data-action=\"plugins/install-plugin\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Install", "app"), "html", null, true);
                    echo "</a></li>
                                                    <li><a class=\"formsubmit error\" data-action=\"pluginstore/remove\" data-param=\"packageName\" data-value=\"";
                    // line 115
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "packageName", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Remove", "app"), "html", null, true);
                    echo "</a></li>
                                                ";
                } else {
                    // line 117
                    echo "                                                    ";
                    if (craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "isEnabled", [])) {
                        // line 118
                        echo "                                                        <li><a class=\"formsubmit\" data-action=\"plugins/disable-plugin\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Disable", "app"), "html", null, true);
                        echo "</a></li>
                                                        <li><a class=\"formsubmit error\" data-action=\"plugins/uninstall-plugin\" data-confirm=\"";
                        // line 119
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Are you sure you want to uninstall {plugin}? You will lose all of its associated data.", "app", ["plugin" => craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "name", [])]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Uninstall", "app"), "html", null, true);
                        echo "</a></li>
                                                    ";
                    } elseif (twig_in_filter(                    // line 120
$context["handle"], (isset($context["disabledPlugins"]) || array_key_exists("disabledPlugins", $context) ? $context["disabledPlugins"] : (function () { throw new RuntimeError('Variable "disabledPlugins" does not exist.', 120, $this->source); })()))) {
                        // line 121
                        echo "                                                        <li><a class=\"disabled\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("{plugin} is disabled by the {setting} config setting.", ["plugin" => craft\helpers\Template::attribute($this->env, $this->source, $context["config"], "name", []), "setting" => "disabledPlugins"]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Enable", "app"), "html", null, true);
                        echo "</a></li>
                                                    ";
                    } else {
                        // line 123
                        echo "                                                        <li><a class=\"formsubmit\" data-action=\"plugins/enable-plugin\">";
                        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Enable", "app"), "html", null, true);
                        echo "</a></li>
                                                    ";
                    }
                    // line 125
                    echo "                                                ";
                }
                // line 126
                echo "                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['handle'], $context['config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 137
            echo "        <p id=\"no-plugins\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("There are no available plugins.", "app"), "html", null, true);
            echo "
    ";
        }
        // line 0
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "settings/plugins";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 0,  422 => 137,  416 => 133,  404 => 126,  401 => 125,  395 => 123,  387 => 121,  385 => 120,  379 => 119,  374 => 118,  371 => 117,  364 => 115,  359 => 114,  357 => 113,  349 => 108,  345 => 107,  340 => 105,  337 => 104,  331 => 102,  325 => 100,  323 => 99,  318 => 98,  316 => 97,  312 => 96,  307 => 93,  300 => 91,  293 => 89,  284 => 87,  277 => 85,  275 => 84,  273 => 83,  266 => 81,  263 => 79,  256 => 77,  254 => 76,  252 => 75,  248 => 73,  245 => 72,  241 => 71,  226 => 68,  217 => 66,  209 => 64,  206 => 63,  202 => 61,  199 => 60,  191 => 58,  188 => 57,  180 => 55,  177 => 54,  175 => 53,  173 => 52,  170 => 51,  164 => 49,  162 => 48,  156 => 46,  150 => 44,  143 => 43,  137 => 42,  132 => 41,  130 => 40,  126 => 39,  121 => 36,  115 => 34,  113 => 33,  109 => 32,  103 => 31,  92 => 28,  89 => 27,  85 => 26,  80 => 23,  77 => 22,  75 => 0,  71 => 21,  67 => 0,  64 => 3,  60 => 142,  58 => 141,  56 => 18,  54 => 15,  53 => 14,  52 => 12,  50 => 7,  48 => 5,  46 => 4,  44 => 1,  42 => 0,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Plugins\"|t('app') %}
{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\plugins\\\\PluginsAsset\") %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}


{% set info = craft.app.plugins.getAllPluginInfo()|multisort(
    ['isEnabled', 'isInstalled', 'name'],
    [SORT_DESC, SORT_DESC, SORT_ASC],
    [SORT_NUMERIC, SORT_NUMERIC, SORT_NATURAL]
) %}

{% set disabledPlugins = craft.app.config.general.disabledPlugins %}


{% block content %}
    {% if info|length %}
        <div class=\"tablepane\">
            <table id=\"plugins\" class=\"data fullwidth\">
                <tbody>
                    {% for handle, config in info %}
                        {% set pluginStoreUrl = url('plugin-store/' ~ handle) %}
                        <tr id=\"plugin-{{ handle }}\" data-name=\"{{ config.name }}\" data-handle=\"{{ handle }}\">
                            <th>
                                <div class=\"plugin-infos\">
                                    <a class=\"icon\" href=\"{{ pluginStoreUrl }}\" title=\"{{ 'View {plugin} in the Plugin Store'|t('app', {plugin: config.name}) }}\">
                                        {{ svg(craft.app.plugins.getPluginIconSvg(handle), sanitize=true, namespace=true) }}
                                        {% if config.licenseKeyStatus == 'valid' or config.licenseIssues is not empty %}
                                            <span class=\"license-key-status {{ config.licenseIssues is empty ? 'valid' }}\"></span>
                                        {% endif %}
                                    </a>
                                    <div class=\"details\">
                                        <div class=\"plugin-id\">
                                            <h2>{{ config.name }}</h2>
                                            {% if config.hasMultipleEditions or config.isTrial %}
                                                {{ (config.upgradeAvailable ? '<a href=\"' ~ pluginStoreUrl ~ '\"' : '<div')|raw }} class=\"edition\">
                                                    {% if config.hasMultipleEditions %}<div class=\"edition-name\">{{ config.edition }}</div>{% endif %}
                                                    {% if config.isTrial %}<div class=\"edition-trial\">{{ 'Trial'|t('app') }}</div>{% endif %}
                                                {{ (config.upgradeAvailable ? '</a>' : '</div>')|raw }}
                                            {% endif %}
                                            <span class=\"version\">{{ config.version }}</span>
                                        </div>
                                        {% if config.description %}
                                            <p>{{ config.description }}</p>
                                        {% endif %}
                                        {% if config.developerUrl or config.developer or config.hasCpSettings or config.documentationUrl %}
                                            <p class=\"links\">
                                                {%- spaceless %}
                                                {% if config.documentationUrl %}
                                                    <a href=\"{{ config.documentationUrl }}\" rel=\"noopener\" target=\"_blank\">{{ \"Documentation\"|t('app') }}</a>
                                                {% endif %}
                                                {% if config.hasCpSettings %}
                                                    <a href=\"{{ url('settings/plugins/'~config.moduleId) }}\"><span data-icon=\"settings\"></span>{{ \"Settings\"|t('app') }}</a>
                                                {% endif %}
                                                {% endspaceless -%}
                                            </p>
                                        {% endif %}
                                        {% set showLicenseKey = config.licenseKey or config.licenseKeyStatus != 'unknown' %}
                                        <div class=\"flex license-key{% if not showLicenseKey %} hidden{% endif %}\">
                                            <div class=\"pane\">
                                                <input class=\"text code{% if config.licenseIssues is not empty %} error{% endif %}\" size=\"29\" value=\"{{ config.licenseKey[0:1] == '\$' ? config.licenseKey : (config.licenseKey|replace('/.{4}/', '\$0-')|trim('-')) }}\" placeholder=\"XXXX-XXXX-XXXX-XXXX-XXXX-XXXX\" readonly>
                                            </div>
                                            <a class=\"btn{% if config.licenseIssues is not empty %} submit{% endif %}{% if not (showLicenseKey and not config.licenseKey) %} hidden{% endif %}\" href=\"{{ url('plugin-store/buy/'~handle~'/'~config.edition)}}\">{{ \"Buy now\"|t('app') }}</a>
                                            <div class=\"spinner hidden\"></div>
                                        </div>
                                        {% for issue in config.licenseIssues %}
                                            <p class=\"error\">
                                                {% switch issue %}
                                                    {% case 'wrong_edition' %}
                                                        {{ 'This license is for the {name} edition.'|t('app', {
                                                            name: config.licensedEdition|ucfirst
                                                        }) }}
                                                    {% case 'mismatched' %}
                                                        {{ 'This license is tied to another Craft install. Visit {url} to resolve.'|t('app', {
                                                            url: '<a href=\"https://id.craftcms.com\" rel=\"noopener\" target=\"_blank\">id.craftcms.com</a>'
                                                        })|raw }}
                                                    {% case 'astray' %}
                                                        {{ 'This license isn’t allowed to run version {version}.'|t('app', {
                                                            version: config.version
                                                        }) }}
                                                    {% case 'required' %}
                                                        {{ 'A license key is required.'|t('app') }}
                                                    {% default %}
                                                        {{ 'Your license key is invalid.'|t('app') }}
                                                {% endswitch %}
                                            </p>
                                        {% endfor %}
                                    </div>
                                </div>
                            </th>
                            <td class=\"nowrap\" data-title=\"{{ 'Status'|t('app') }}\">
                                {% if config.isEnabled %}
                                    <span class=\"status on\"></span>{{ \"Installed\"|t('app') }}
                                {% elseif config.isInstalled %}
                                    <span class=\"status off\"></span>{{ \"Disabled\"|t('app') }}
                                {% else %}
                                    <span class=\"status\"></span><span class=\"light\">{{ \"Not installed\"|t('app') }}</span>
                                {% endif %}
                            </td>
                            <td class=\"nowrap thin\" data-title=\"{{ 'Action'|t('app') }}\">
                                <form method=\"post\" accept-charset=\"UTF-8\">
                                    {{ hiddenInput('pluginHandle', handle) }}
                                    {{ csrfInput() }}
                                    <div class=\"btngroup\">
                                        <div class=\"btn menubtn\" data-icon=\"settings\"></div>
                                        <div class=\"menu\" data-align=\"right\">
                                            <ul>
                                                {% if not config.isInstalled %}
                                                    <li><a class=\"formsubmit\" data-action=\"plugins/install-plugin\">{{ 'Install'|t('app') }}</a></li>
                                                    <li><a class=\"formsubmit error\" data-action=\"pluginstore/remove\" data-param=\"packageName\" data-value=\"{{ config.packageName }}\">{{ 'Remove'|t('app') }}</a></li>
                                                {% else %}
                                                    {% if config.isEnabled %}
                                                        <li><a class=\"formsubmit\" data-action=\"plugins/disable-plugin\">{{ 'Disable'|t('app') }}</a></li>
                                                        <li><a class=\"formsubmit error\" data-action=\"plugins/uninstall-plugin\" data-confirm=\"{{ 'Are you sure you want to uninstall {plugin}? You will lose all of its associated data.'|t('app', { plugin: config.name }) }}\">{{ 'Uninstall'|t('app') }}</a></li>
                                                    {% elseif handle in disabledPlugins %}
                                                        <li><a class=\"disabled\" title=\"{{ '{plugin} is disabled by the {setting} config setting.'|t({plugin: config.name, setting: 'disabledPlugins'}) }}\">{{ 'Enable'|t('app') }}</a></li>
                                                    {% else %}
                                                        <li><a class=\"formsubmit\" data-action=\"plugins/enable-plugin\">{{ 'Enable'|t('app') }}</a></li>
                                                    {% endif %}
                                                {% endif %}
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        <p id=\"no-plugins\">{{ \"There are no available plugins.\"|t('app') }}
    {% endif %}
{% endblock %}

{% js %}
new Craft.PluginManager();
{% endjs %}
", "settings/plugins", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/settings/plugins/index.html");
    }
}
