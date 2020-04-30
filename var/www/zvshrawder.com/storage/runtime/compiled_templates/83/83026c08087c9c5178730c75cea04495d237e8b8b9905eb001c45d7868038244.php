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

/* _layouts/cp */
class __TwigTemplate_2e34cdb10d0e5e23436e47d93ea8a8cc14d91bfc049c436b0e5064e8018b863d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'mainFormAttributes' => [$this, 'block_mainFormAttributes'],
            'header' => [$this, 'block_header'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'contextMenu' => [$this, 'block_contextMenu'],
            'main' => [$this, 'block_main'],
            'tabs' => [$this, 'block_tabs'],
            'content' => [$this, 'block_content'],
            'actionButton' => [$this, 'block_actionButton'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 40
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "_layouts/cp");
        // line 43
        $context["queue"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 43, $this->source); })()), "app", []), "queue", []);
        // line 44
        ob_start();
        // line 45
        echo "    ";
        if (call_user_func_array($this->env->getTest('instance of')->getCallable(), [(isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 45, $this->source); })()), "craft\\queue\\QueueInterface"])) {
            // line 46
            echo "        Craft.cp.setJobInfo(";
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 46, $this->source); })()), "getJobInfo", [0 => 100], "method"));
            echo ", false);
        ";
            // line 47
            if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 47, $this->source); })()), "getHasReservedJobs", [], "method")) {
                // line 48
                echo "            Craft.cp.trackJobProgress(true);
        ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 49
(isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 49, $this->source); })()), "getHasWaitingJobs", [], "method")) {
                // line 50
                echo "            Craft.cp.runQueue();
        ";
            }
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "        Craft.cp.enableQueue = false;
    ";
        }
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 57
        $context["hasSystemIcon"] = (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 57, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 57, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 57, $this->source); })()), "rebrand", []), "isIconUploaded", []));
        // line 58
        $context["fullPageForm"] = ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context)) && (isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 58, $this->source); })()));
        // line 60
        $context["canUpgradeEdition"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 60, $this->source); })()), "app", []), "getCanUpgradeEdition", [], "method");
        // line 61
        $context["licensedEdition"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 61, $this->source); })()), "app", []), "getLicensedEdition", [], "method");
        // line 62
        $context["isTrial"] = ( !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new RuntimeError('Variable "licensedEdition" does not exist.', 62, $this->source); })()) === null) &&  !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new RuntimeError('Variable "licensedEdition" does not exist.', 62, $this->source); })()) === (isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 62, $this->source); })())));
        // line 64
        $context["sidebar"] = twig_trim_filter((($context["sidebar"]) ?? (((        $this->hasBlock("sidebar", $context, $blocks)) ? (        $this->renderBlock("sidebar", $context, $blocks)) : ("")))));
        // line 65
        $context["toolbar"] = twig_trim_filter((($context["toolbar"]) ?? (((        $this->hasBlock("toolbar", $context, $blocks)) ? (        $this->renderBlock("toolbar", $context, $blocks)) : ("")))));
        // line 66
        $context["actionButton"] = twig_trim_filter(((        $this->hasBlock("actionButton", $context, $blocks)) ? (        $this->renderBlock("actionButton", $context, $blocks)) : ("")));
        // line 67
        $context["details"] = twig_trim_filter((($context["details"]) ?? (((        $this->hasBlock("details", $context, $blocks)) ? (        $this->renderBlock("details", $context, $blocks)) : ("")))));
        // line 68
        $context["footer"] = twig_trim_filter((($context["footer"]) ?? (((        $this->hasBlock("footer", $context, $blocks)) ? (        $this->renderBlock("footer", $context, $blocks)) : ("")))));
        // line 69
        $context["crumbs"] = (($context["crumbs"]) ?? (null));
        // line 70
        $context["tabs"] = ((((isset($context["tabs"]) || array_key_exists("tabs", $context)) && (twig_length_filter($this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 70, $this->source); })())) != 1))) ? ((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 70, $this->source); })())) : (null));
        // line 72
        $context["mainContentClasses"] = $this->extensions['craft\web\twig\Extension']->filterFilter([0 => ((        // line 73
(isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 73, $this->source); })())) ? ("has-sidebar") : ("")), 1 => ((        // line 74
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 74, $this->source); })())) ? ("has-details") : ("")), 2 => ((        // line 75
(isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 75, $this->source); })())) ? ("has-tabs") : (""))]);
        // line 78
        $context["showHeader"] = (($context["showHeader"]) ?? (true));
        // line 79
        if ( !(isset($context["showHeader"]) || array_key_exists("showHeader", $context) ? $context["showHeader"] : (function () { throw new RuntimeError('Variable "showHeader" does not exist.', 79, $this->source); })())) {
            // line 80
            $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 80, $this->source); })()) . " ")) : ("")) . "no-header");
        }
        // line 83
        $context["mainAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["id" => "main", "role" => "main"], ((        // line 86
$context["mainAttributes"]) ?? ([])));
        // line 88
        $context["mainFormAttributes"] = $this->extensions['craft\web\twig\Extension']->mergeFilter(["id" => "main-form", "method" => "post", "accept-charset" => "UTF-8", "novalidate" => true, "data" => ["saveshortcut" => ((        // line 94
$context["saveShortcut"]) ?? (true)), "saveshortcut-redirect" => ((        // line 95
(isset($context["saveShortcutRedirect"]) || array_key_exists("saveShortcutRedirect", $context))) ? (call_user_func_array($this->env->getFilter('hash')->getCallable(), [(isset($context["saveShortcutRedirect"]) || array_key_exists("saveShortcutRedirect", $context) ? $context["saveShortcutRedirect"] : (function () { throw new RuntimeError('Variable "saveShortcutRedirect" does not exist.', 95, $this->source); })())])) : (false)), "confirm-unload" => true, "delta" => craft\helpers\Template::attribute($this->env, $this->source,         // line 97
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 97, $this->source); })()), "getIsDeltaRegistrationActive", [], "method")]], ((        // line 99
$context["mainFormAttributes"]) ?? ([])), true);
        // line 232
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 232, $this->source); })()), "can", [0 => "performUpdates"], "method") &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 232, $this->source); })()), "app", []), "updates", []), "getIsUpdateInfoCached", [], "method"))) {
            // line 233
            ob_start();
            // line 234
            echo "        Craft.cp.checkForUpdates();
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 40
        $this->parent = $this->loadTemplate("_layouts/basecp", "_layouts/cp", 40);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/cp");
    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        // line 102
        echo "    <div id=\"global-container\">
        ";
        // line 103
        $this->loadTemplate("_layouts/components/global-sidebar", "_layouts/cp", 103)->display($context);
        // line 104
        echo "
        <div id=\"page-container\">
            ";
        // line 106
        $this->loadTemplate("_layouts/components/alerts", "_layouts/cp", 106)->display($context);
        // line 107
        echo "            ";
        $this->loadTemplate("_layouts/components/notifications", "_layouts/cp", 107)->display($context);
        // line 108
        echo "
            <div id=\"global-header\">
                <div class=\"flex\">
                    ";
        // line 111
        $this->loadTemplate("_layouts/components/crumbs", "_layouts/cp", 111)->display($context);
        // line 112
        echo "                    <div class=\"flex-grow\"></div>
                    <div id=\"user-info\" class=\"btn menubtn\" data-menu-anchor=\"#user-photo\" role=\"button\">
                        <div id=\"user-photo\">
                            ";
        // line 115
        echo $this->extensions['craft\web\twig\Extension']->tagFunction("img", ["width" => 30, "height" => 30, "sizes" => "30px", "srcset" => (((craft\helpers\Template::attribute($this->env, $this->source,         // line 119
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 119, $this->source); })()), "getThumbUrl", [0 => 30], "method") . " 30w, ") . craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 119, $this->source); })()), "getThumbUrl", [0 => 60], "method")) . " 60w"), "alt" => craft\helpers\Template::attribute($this->env, $this->source,         // line 120
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 120, $this->source); })()), "getName", [], "method"), "title" => craft\helpers\Template::attribute($this->env, $this->source,         // line 121
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 121, $this->source); })()), "getName", [], "method")]);
        // line 122
        echo "
                        </div>
                    </div>
                    <div class=\"menu\" data-align=\"right\">
                        <ul>
                            <li><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Account", "app"), "html", null, true);
        echo "</a></li>
                            <li><a href=\"";
        // line 128
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("logout"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign out", "app"), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id=\"main-container\">
                <main ";
        // line 135
        echo craft\helpers\Html::renderTagAttributes((isset($context["mainAttributes"]) || array_key_exists("mainAttributes", $context) ? $context["mainAttributes"] : (function () { throw new RuntimeError('Variable "mainAttributes" does not exist.', 135, $this->source); })()));
        echo ">

                    ";
        // line 137
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 137, $this->source); })())) {
            // line 138
            echo "<form ";
            $this->displayBlock('mainFormAttributes', $context, $blocks);
            echo ">";
            // line 139
            echo craft\helpers\Html::csrfInput();
        }
        // line 141
        echo "
                    ";
        // line 142
        if ((isset($context["showHeader"]) || array_key_exists("showHeader", $context) ? $context["showHeader"] : (function () { throw new RuntimeError('Variable "showHeader" does not exist.', 142, $this->source); })())) {
            // line 143
            echo "                        <div id=\"header-container\">
                            <header id=\"header\">
                                ";
            // line 145
            $this->displayBlock('header', $context, $blocks);
            // line 165
            echo "                            </header><!-- #header -->
                        </div>
                    ";
        }
        // line 168
        echo "
                    <div id=\"main-content\" class=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["mainContentClasses"]) || array_key_exists("mainContentClasses", $context) ? $context["mainContentClasses"] : (function () { throw new RuntimeError('Variable "mainContentClasses" does not exist.', 169, $this->source); })()), " "), "html", null, true);
        echo "\">
                        ";
        // line 171
        echo "                        ";
        if ((isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 171, $this->source); })())) {
            // line 172
            echo "                            <div id=\"sidebar-toggle-container\">
                                <a id=\"sidebar-toggle\" class=\"btn\"><span id=\"selected-sidebar-item-label\"></span></a>
                            </div>
                            <div id=\"sidebar-container\">
                                <div id=\"sidebar\" class=\"sidebar\">
                                    ";
            // line 177
            echo (isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 177, $this->source); })());
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 181
        echo "
                        ";
        // line 183
        echo "                        <div id=\"content-container\">
                            ";
        // line 184
        $this->displayBlock('main', $context, $blocks);
        // line 204
        echo "                        </div><!-- #content-container -->

                        ";
        // line 206
        if ( !twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 206, $this->source); })()))) {
            // line 207
            echo "                            <div id=\"details-container\">
                                <div id=\"details\">
                                    ";
            // line 209
            echo (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 209, $this->source); })());
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 213
        echo "                    </div><!-- #main-content -->

                    ";
        // line 215
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 215, $this->source); })())) {
            // line 216
            echo "</form><!-- #main-form -->";
        }
        // line 218
        echo "                </main><!-- #main -->
            </div><!-- #main-container -->
        </div><!-- #page-container -->
    </div><!-- #global-container -->
";
        // line 0
        craft\helpers\Template::endProfile("block", "body");
    }

    // line 138
    public function block_mainFormAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "mainFormAttributes");
        // line 138
        echo craft\helpers\Html::renderTagAttributes((isset($context["mainFormAttributes"]) || array_key_exists("mainFormAttributes", $context) ? $context["mainFormAttributes"] : (function () { throw new RuntimeError('Variable "mainFormAttributes" does not exist.', 138, $this->source); })()));
        // line 0
        craft\helpers\Template::endProfile("block", "mainFormAttributes");
    }

    // line 145
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "header");
        // line 146
        echo "                                    <div id=\"page-title\" class=\"flex flex-nowrap";
        if ((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 146, $this->source); })())) {
            echo " has-toolbar";
        }
        echo "\">
                                        ";
        // line 147
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 152
        echo "                                        ";
        $this->displayBlock('contextMenu', $context, $blocks);
        // line 153
        echo "                                    </div>
                                    ";
        // line 154
        if ((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 154, $this->source); })())) {
            // line 155
            echo "                                        <div id=\"toolbar\" class=\"flex flex-nowrap\">
                                            ";
            // line 156
            echo (isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 156, $this->source); })());
            echo "
                                        </div>
                                    ";
        }
        // line 159
        echo "                                    ";
        if ((isset($context["actionButton"]) || array_key_exists("actionButton", $context) ? $context["actionButton"] : (function () { throw new RuntimeError('Variable "actionButton" does not exist.', 159, $this->source); })())) {
            // line 160
            echo "                                        <div id=\"action-button\" class=\"flex\">
                                            ";
            // line 161
            echo (isset($context["actionButton"]) || array_key_exists("actionButton", $context) ? $context["actionButton"] : (function () { throw new RuntimeError('Variable "actionButton" does not exist.', 161, $this->source); })());
            echo "
                                        </div>
                                    ";
        }
        // line 164
        echo "                                ";
        // line 0
        craft\helpers\Template::endProfile("block", "header");
    }

    // line 147
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "pageTitle");
        // line 148
        echo "                                            ";
        if (((isset($context["title"]) || array_key_exists("title", $context)) && twig_length_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 148, $this->source); })())))) {
            // line 149
            echo "                                                <h1 title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 149, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 149, $this->source); })()), "html", null, true);
            echo "</h1>
                                            ";
        }
        // line 151
        echo "                                        ";
        // line 0
        craft\helpers\Template::endProfile("block", "pageTitle");
    }

    // line 152
    public function block_contextMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "contextMenu");
        craft\helpers\Template::endProfile("block", "contextMenu");
    }

    // line 184
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "main");
        // line 185
        echo "                                ";
        $this->displayBlock('tabs', $context, $blocks);
        // line 190
        echo "
                                <div id=\"content\" class=\"content-pane\">
                                    ";
        // line 192
        $this->displayBlock('content', $context, $blocks);
        // line 195
        echo "
                                    ";
        // line 197
        echo "                                    ";
        if ((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 197, $this->source); })())) {
            // line 198
            echo "                                        <div id=\"footer\" class=\"flex\">
                                            ";
            // line 199
            echo (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 199, $this->source); })());
            echo "
                                        </div>
                                    ";
        }
        // line 202
        echo "                                </div>
                            ";
        // line 0
        craft\helpers\Template::endProfile("block", "main");
    }

    // line 185
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "tabs");
        // line 186
        echo "                                    ";
        if ((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 186, $this->source); })())) {
            // line 187
            echo "                                        ";
            $this->loadTemplate("_includes/tabs", "_layouts/cp", 187)->display($context);
            // line 188
            echo "                                    ";
        }
        // line 189
        echo "                                ";
        // line 0
        craft\helpers\Template::endProfile("block", "tabs");
    }

    // line 192
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "content");
        // line 193
        echo "                                        ";
        (((isset($context["content"]) || array_key_exists("content", $context))) ? (print (twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 193, $this->source); })()), "html", null, true))) : (print ("")));
        echo "
                                    ";
        // line 0
        craft\helpers\Template::endProfile("block", "content");
    }

    // line 225
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 226
        echo "    ";
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 226, $this->source); })())) {
            // line 227
            echo "        <input type=\"submit\" class=\"btn submit\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "\">
    ";
        }
        // line 0
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 0,  480 => 227,  477 => 226,  475 => 0,  471 => 225,  467 => 0,  462 => 193,  460 => 0,  456 => 192,  452 => 0,  450 => 189,  447 => 188,  444 => 187,  441 => 186,  439 => 0,  435 => 185,  431 => 0,  428 => 202,  422 => 199,  419 => 198,  416 => 197,  413 => 195,  411 => 192,  407 => 190,  404 => 185,  402 => 0,  398 => 184,  393 => 0,  389 => 152,  385 => 0,  383 => 151,  375 => 149,  372 => 148,  370 => 0,  366 => 147,  362 => 0,  360 => 164,  354 => 161,  351 => 160,  348 => 159,  342 => 156,  339 => 155,  337 => 154,  334 => 153,  331 => 152,  329 => 147,  322 => 146,  320 => 0,  316 => 145,  312 => 0,  310 => 138,  308 => 0,  304 => 138,  300 => 0,  294 => 218,  291 => 216,  289 => 215,  285 => 213,  278 => 209,  274 => 207,  272 => 206,  268 => 204,  266 => 184,  263 => 183,  260 => 181,  253 => 177,  246 => 172,  243 => 171,  239 => 169,  236 => 168,  231 => 165,  229 => 145,  225 => 143,  223 => 142,  220 => 141,  217 => 139,  213 => 138,  211 => 137,  206 => 135,  194 => 128,  188 => 127,  181 => 122,  179 => 121,  178 => 120,  177 => 119,  176 => 115,  171 => 112,  169 => 111,  164 => 108,  161 => 107,  159 => 106,  155 => 104,  153 => 103,  150 => 102,  148 => 0,  144 => 101,  140 => 0,  137 => 40,  132 => 234,  130 => 233,  128 => 232,  126 => 99,  125 => 97,  124 => 95,  123 => 94,  122 => 88,  120 => 86,  119 => 83,  116 => 80,  114 => 79,  112 => 78,  110 => 75,  109 => 74,  108 => 73,  107 => 72,  105 => 70,  103 => 69,  101 => 68,  99 => 67,  97 => 66,  95 => 65,  93 => 64,  91 => 62,  89 => 61,  87 => 60,  85 => 58,  83 => 57,  78 => 53,  75 => 52,  71 => 50,  69 => 49,  66 => 48,  64 => 47,  59 => 46,  56 => 45,  54 => 44,  52 => 43,  50 => 0,  43 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("{#
┌────────────────────────────────────────────────────────────────────────────────────┐
│                                 #global-container                                  │
│   ┌─────┐   ┌──────────────────────────────────────────────────────────────────┐   │
│   │     │   │                         #page-container                          │   │
│   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
│   │     │   │   │                      #global-header                      │   │   │
│   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
│   │     │   │                                                                  │   │
│   │     │   │   ┌──────────────────────────────────────────────────────────┐   │   │
│   │     │   │   │                          #main                           │   │   │
│   │  #  │   │   │   ┌──────────────────────────────────────────────────┐   │   │   │
│   │  g  │   │   │   │                #header-container                 │   │   │   │
│   │  l  │   │   │   └──────────────────────────────────────────────────┘   │   │   │
│   │  o  │   │   │                                                          │   │   │
│   │  b  │   │   │   ┌──────────────────────────────────────────────────┐   │   │   │
│   │  a  │   │   │   │                  #main-content                   │   │   │   │
│   │  l  │   │   │   │   ┌─────┐   ┌──────────────────────┐   ┌─────┐   │   │   │   │
│   │  -  │   │   │   │   │     │   │                      │   │     │   │   │   │   │
│   │  s  │   │   │   │   │  #  │   │                      │   │  #  │   │   │   │   │
│   │  i  │   │   │   │   │  s  │   │                      │   │  d  │   │   │   │   │
│   │  d  │   │   │   │   │  i  │   │                      │   │  e  │   │   │   │   │
│   │  e  │   │   │   │   │  d  │   │       #content       │   │  t  │   │   │   │   │
│   │  b  │   │   │   │   │  e  │   │                      │   │  a  │   │   │   │   │
│   │  a  │   │   │   │   │  b  │   │                      │   │  i  │   │   │   │   │
│   │  r  │   │   │   │   │  a  │   │                      │   │  l  │   │   │   │   │
│   │     │   │   │   │   │  r  │   │                      │   │  s  │   │   │   │   │
│   │     │   │   │   │   │     │   │                      │   │     │   │   │   │   │
│   │     │   │   │   │   └─────┘   └──────────────────────┘   └─────┘   │   │   │   │
│   │     │   │   │   │                                                  │   │   │   │
│   │     │   │   │   └──────────────────────────────────────────────────┘   │   │   │
│   │     │   │   │                                                          │   │   │
│   │     │   │   └──────────────────────────────────────────────────────────┘   │   │
│   │     │   │                                                                  │   │
│   └─────┘   └──────────────────────────────────────────────────────────────────┘   │
│                                                                                    │
└────────────────────────────────────────────────────────────────────────────────────┘
#}

{% extends \"_layouts/basecp\" %}

{# The CP only supports queue components that implement QueueInterface #}
{% set queue = craft.app.queue %}
{% js %}
    {% if queue is instance of(\"craft\\\\queue\\\\QueueInterface\") %}
        Craft.cp.setJobInfo({{ queue.getJobInfo(100)|json_encode|raw }}, false);
        {% if queue.getHasReservedJobs() %}
            Craft.cp.trackJobProgress(true);
        {% elseif queue.getHasWaitingJobs() %}
            Craft.cp.runQueue();
        {% endif %}
    {% else %}
        Craft.cp.enableQueue = false;
    {% endif %}
{% endjs %}

{% set hasSystemIcon = CraftEdition == CraftPro and craft.rebrand.isIconUploaded %}
{% set fullPageForm = (fullPageForm is defined and fullPageForm) %}

{% set canUpgradeEdition = craft.app.getCanUpgradeEdition() %}
{% set licensedEdition = craft.app.getLicensedEdition() %}
{% set isTrial = licensedEdition is not same as(null) and licensedEdition is not same as(CraftEdition) %}

{% set sidebar = (sidebar ?? block('sidebar') ?? '')|trim %}
{% set toolbar = (toolbar ?? block('toolbar') ?? '')|trim %}
{% set actionButton = (block('actionButton') ?? '')|trim %}
{% set details = (details ?? block('details') ?? '')|trim %}
{% set footer = (footer ?? block('footer') ?? '')|trim %}
{% set crumbs = crumbs ?? null %}
{% set tabs = tabs is defined and tabs|length != 1 ? tabs : null %}

{% set mainContentClasses = [
    sidebar ? 'has-sidebar',
    details ? 'has-details',
    tabs ? 'has-tabs',
]|filter %}

{% set showHeader = showHeader ?? true %}
{% if not showHeader %}
    {% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ 'no-header' -%}
{% endif %}

{% set mainAttributes = {
    id: 'main',
    role: 'main',
}|merge(mainAttributes ?? []) %}

{% set mainFormAttributes = {
    'id': 'main-form',
    'method': 'post',
    'accept-charset': 'UTF-8',
    'novalidate': true,
    'data': {
        'saveshortcut': saveShortcut ?? true,
        'saveshortcut-redirect': saveShortcutRedirect is defined ? saveShortcutRedirect|hash : false,
        'confirm-unload': true,
        'delta': view.getIsDeltaRegistrationActive(),
    },
}|merge(mainFormAttributes ?? [], recursive=true) %}

{% block body %}
    <div id=\"global-container\">
        {% include '_layouts/components/global-sidebar' %}

        <div id=\"page-container\">
            {% include '_layouts/components/alerts' %}
            {% include '_layouts/components/notifications' %}

            <div id=\"global-header\">
                <div class=\"flex\">
                    {% include '_layouts/components/crumbs' %}
                    <div class=\"flex-grow\"></div>
                    <div id=\"user-info\" class=\"btn menubtn\" data-menu-anchor=\"#user-photo\" role=\"button\">
                        <div id=\"user-photo\">
                            {{ tag('img', {
                                width: 30,
                                height: 30,
                                sizes: '30px',
                                srcset: \"#{currentUser.getThumbUrl(30)} 30w, #{currentUser.getThumbUrl(60)} 60w\",
                                alt: currentUser.getName(),
                                title: currentUser.getName(),
                            }) }}
                        </div>
                    </div>
                    <div class=\"menu\" data-align=\"right\">
                        <ul>
                            <li><a href=\"{{ url('myaccount') }}\">{{ 'My Account'|t('app') }}</a></li>
                            <li><a href=\"{{ url('logout') }}\">{{ \"Sign out\"|t('app') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id=\"main-container\">
                <main {{ attr(mainAttributes) }}>

                    {% if fullPageForm -%}
                        <form {% block mainFormAttributes %}{{ attr(mainFormAttributes) }}{% endblock %}>
                            {{- csrfInput() }}
                    {%- endif %}

                    {% if showHeader %}
                        <div id=\"header-container\">
                            <header id=\"header\">
                                {% block header %}
                                    <div id=\"page-title\" class=\"flex flex-nowrap{% if toolbar %} has-toolbar{% endif %}\">
                                        {% block pageTitle %}
                                            {% if title is defined and title|length %}
                                                <h1 title=\"{{ title }}\">{{ title }}</h1>
                                            {% endif %}
                                        {% endblock %}
                                        {% block contextMenu %}{% endblock %}
                                    </div>
                                    {% if toolbar %}
                                        <div id=\"toolbar\" class=\"flex flex-nowrap\">
                                            {{ toolbar|raw }}
                                        </div>
                                    {% endif %}
                                    {% if actionButton %}
                                        <div id=\"action-button\" class=\"flex\">
                                            {{ actionButton|raw }}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            </header><!-- #header -->
                        </div>
                    {% endif %}

                    <div id=\"main-content\" class=\"{{ mainContentClasses|join(' ') }}\">
                        {# sidebar #}
                        {% if sidebar %}
                            <div id=\"sidebar-toggle-container\">
                                <a id=\"sidebar-toggle\" class=\"btn\"><span id=\"selected-sidebar-item-label\"></span></a>
                            </div>
                            <div id=\"sidebar-container\">
                                <div id=\"sidebar\" class=\"sidebar\">
                                    {{ sidebar|raw }}
                                </div>
                            </div>
                        {% endif %}

                        {# content-container #}
                        <div id=\"content-container\">
                            {% block main %}
                                {% block tabs %}
                                    {% if tabs %}
                                        {% include \"_includes/tabs\" %}
                                    {% endif %}
                                {% endblock %}

                                <div id=\"content\" class=\"content-pane\">
                                    {% block content %}
                                        {{ content is defined ? content }}
                                    {% endblock %}

                                    {# footer #}
                                    {% if footer %}
                                        <div id=\"footer\" class=\"flex\">
                                            {{ footer|raw }}
                                        </div>
                                    {% endif %}
                                </div>
                            {% endblock %}
                        </div><!-- #content-container -->

                        {% if details is not empty %}
                            <div id=\"details-container\">
                                <div id=\"details\">
                                    {{ details|raw }}
                                </div>
                            </div>
                        {% endif %}
                    </div><!-- #main-content -->

                    {% if fullPageForm -%}
                        </form><!-- #main-form -->
                    {%- endif %}
                </main><!-- #main -->
            </div><!-- #main-container -->
        </div><!-- #page-container -->
    </div><!-- #global-container -->
{% endblock %}


{% block actionButton %}
    {% if fullPageForm %}
        <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t('app') }}\">
    {% endif %}
{% endblock %}


{% if currentUser.can('performUpdates') and not craft.app.updates.getIsUpdateInfoCached() %}
    {% js %}
        Craft.cp.checkForUpdates();
    {% endjs %}
{% endif %}
", "_layouts/cp", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_layouts/cp.html");
    }
}
