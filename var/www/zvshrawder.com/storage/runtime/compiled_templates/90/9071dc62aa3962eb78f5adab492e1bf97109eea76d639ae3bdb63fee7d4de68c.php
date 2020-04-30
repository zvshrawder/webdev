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

/* _layouts/components/global-sidebar */
class __TwigTemplate_96744808ba7109a119a7fc0817885b1819b03b041fd1f04360c627f3122cc18e extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_layouts/components/global-sidebar");
        // line 1
        echo "<header id=\"global-sidebar\" class=\"sidebar\">
    <a id=\"system-info\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new RuntimeError('Variable "siteUrl" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" rel=\"noopener\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("View site", "app"), "html", null, true);
        echo "\">
        <div id=\"site-icon\">
            ";
        // line 4
        if ((isset($context["hasSystemIcon"]) || array_key_exists("hasSystemIcon", $context) ? $context["hasSystemIcon"] : (function () { throw new RuntimeError('Variable "hasSystemIcon" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "rebrand", []), "icon", []), "url", []), "html", null, true);
            echo "\" alt=\"\">
            ";
        } else {
            // line 7
            echo "                ";
            echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/c-outline.svg", null, true);
            echo "
            ";
        }
        // line 9
        echo "        </div>
        <div id=\"system-name\">
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h2>
        </div>
    </a>

    <nav id=\"nav\">
        <ul>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 17, $this->source); })()), "cp", []), "nav", [], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                ";
            $context["hasSubnav"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", [], "any", true, true) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", []));
            // line 19
            echo "                <li id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "id", []), "html", null, true);
            echo "\" ";
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", []) && (isset($context["hasSubnav"]) || array_key_exists("hasSubnav", $context) ? $context["hasSubnav"] : (function () { throw new RuntimeError('Variable "hasSubnav" does not exist.', 19, $this->source); })()))) {
                echo " class=\"has-subnav\"";
            }
            echo ">
                    <a";
            // line 20
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", [])) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "url", []), "html", null, true);
            echo "\">
                        <span class=\"icon icon-mask\">";
            // line 22
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true)) {
                // line 23
                echo $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "icon", []), true, true);
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 24
$context["item"], "fontIcon", [], "any", true, true)) {
                // line 25
                echo "<span data-icon=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "fontIcon", []), "html", null, true);
                echo "\"></span>";
            } else {
                // line 27
                $this->loadTemplate("_includes/defaulticon.svg", "_layouts/components/global-sidebar", 27)->display(twig_array_merge($context, ["label" => craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", [])]));
            }
            // line 29
            echo "</span>

                        <span class=\"label\">";
            // line 31
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
            echo "</span>";
            // line 33
            if (( !craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", []) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []))) {
                // line 34
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []), 0]), "html", null, true);
                echo "</span>";
            }
            // line 36
            echo "</a>
                    ";
            // line 37
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", []) && (isset($context["hasSubnav"]) || array_key_exists("hasSubnav", $context) ? $context["hasSubnav"] : (function () { throw new RuntimeError('Variable "hasSubnav" does not exist.', 37, $this->source); })()))) {
                // line 38
                echo "                        <ul class=\"subnav\">
                            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", []));
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
                foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
                    // line 40
                    echo "                                ";
                    $context["itemIsSelected"] = ((                    // line 41
(isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context)) && ((isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context) ? $context["selectedSubnavItem"] : (function () { throw new RuntimeError('Variable "selectedSubnavItem" does not exist.', 41, $this->source); })()) == $context["itemId"])) || ( !                    // line 42
(isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context)) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])));
                    // line 45
                    echo "<li>
                                    <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "url", [])), "html", null, true);
                    echo "\"";
                    if ((isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 46, $this->source); })())) {
                        echo " class=\"sel\"";
                    }
                    echo ">
                                        ";
                    // line 47
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                    // line 49
                    if (( !(isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 49, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", [], "any", true, true))) {
                        // line 50
                        echo "<span class=\"badge\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []), 0]), "html", null, true);
                        echo "</span>";
                    }
                    // line 52
                    echo "</a>
                                </li>
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
                unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                        </ul>
                    ";
            }
            // line 57
            echo "                </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </ul>
    </nav>

    <div id=\"app-info\">
        <div id=\"edition\" ";
        // line 63
        if ((isset($context["canUpgradeEdition"]) || array_key_exists("canUpgradeEdition", $context) ? $context["canUpgradeEdition"] : (function () { throw new RuntimeError('Variable "canUpgradeEdition" does not exist.', 63, $this->source); })())) {
            echo "class=\"hot\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Manage your Craft CMS edition", "app"), "html", null, true);
            echo "\"";
        } else {
            echo "class=\"edition\"";
        }
        echo ">
            <div id=\"edition-logo\">
                <div class=\"edition-name\">";
        // line 65
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 65, $this->source); })()), "app", []), "getEditionName", [], "method"), "html", null, true);
        echo "</div>
                ";
        // line 66
        if ((isset($context["isTrial"]) || array_key_exists("isTrial", $context) ? $context["isTrial"] : (function () { throw new RuntimeError('Variable "isTrial" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "                    <div class=\"edition-trial\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Trial", "app"), "html", null, true);
            echo "</div>
                ";
        }
        // line 69
        echo "            </div>
        </div>
        <div id=\"version\">Craft CMS ";
        // line 71
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 71, $this->source); })()), "app", []), "version", []), "html", null, true);
        echo "</div>
    </div>

    ";
        // line 74
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 74, $this->source); })()), "admin", []) && (isset($context["devMode"]) || array_key_exists("devMode", $context) ? $context["devMode"] : (function () { throw new RuntimeError('Variable "devMode" does not exist.', 74, $this->source); })()))) {
            // line 75
            echo "        <div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Craft CMS is running in Dev Mode.", "app"), "html", null, true);
            echo "\"></div>
    ";
        }
        // line 77
        echo "</header>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/components/global-sidebar");
    }

    public function getTemplateName()
    {
        return "_layouts/components/global-sidebar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 0,  272 => 77,  266 => 75,  264 => 74,  258 => 71,  254 => 69,  248 => 67,  246 => 66,  242 => 65,  231 => 63,  225 => 59,  210 => 57,  206 => 55,  190 => 52,  185 => 50,  183 => 49,  181 => 47,  173 => 46,  170 => 45,  168 => 42,  167 => 41,  165 => 40,  148 => 39,  145 => 38,  143 => 37,  140 => 36,  135 => 34,  133 => 33,  130 => 31,  126 => 29,  123 => 27,  118 => 25,  116 => 24,  114 => 23,  112 => 22,  104 => 20,  95 => 19,  92 => 18,  75 => 17,  66 => 11,  62 => 9,  56 => 7,  50 => 5,  48 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"global-sidebar\" class=\"sidebar\">
    <a id=\"system-info\" href=\"{{ siteUrl }}\" rel=\"noopener\" target=\"_blank\" title=\"{{ 'View site'|t('app') }}\">
        <div id=\"site-icon\">
            {% if hasSystemIcon %}
                <img src=\"{{ craft.rebrand.icon.url }}\" alt=\"\">
            {% else %}
                {{ svg('@app/icons/c-outline.svg', namespace=true) }}
            {% endif %}
        </div>
        <div id=\"system-name\">
            <h2>{{ systemName }}</h2>
        </div>
    </a>

    <nav id=\"nav\">
        <ul>
            {% for item in craft.cp.nav() %}
                {% set hasSubnav = (item.subnav is defined and item.subnav) %}
                <li id=\"{{ item.id }}\" {% if item.sel and hasSubnav %} class=\"has-subnav\"{% endif %}>
                    <a{% if item.sel %} class=\"sel\"{% endif %} href=\"{{ item.url }}\">
                        <span class=\"icon icon-mask\">
                            {%- if item.icon is defined -%}
                                {{ svg(item.icon, sanitize=true, namespace=true) }}
                            {%- elseif item.fontIcon is defined -%}
                                <span data-icon=\"{{ item.fontIcon }}\"></span>
                            {%- else -%}
                                {% include \"_includes/defaulticon.svg\" with { label: item.label } %}
                            {%- endif -%}
                        </span>

                        <span class=\"label\">{{ item.label }}</span>

                        {%- if not item.sel and item.badgeCount -%}
                            <span class=\"badge\">{{ item.badgeCount|number(decimals=0) }}</span>
                        {%- endif -%}
                    </a>
                    {% if item.sel and hasSubnav %}
                        <ul class=\"subnav\">
                            {% for itemId, item in item.subnav %}
                                {% set itemIsSelected = (
                                    (selectedSubnavItem is defined and selectedSubnavItem == itemId) or
                                    (selectedSubnavItem is not defined and loop.first)
                                    ) -%}

                                <li>
                                    <a href=\"{{ url(item.url) }}\"{% if itemIsSelected %} class=\"sel\"{% endif %}>
                                        {{ item.label }}

                                        {%- if not itemIsSelected and item.badgeCount is defined -%}
                                            <span class=\"badge\">{{ item.badgeCount|number(decimals=0) }}</span>
                                        {%- endif -%}
                                    </a>
                                </li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
    </nav>

    <div id=\"app-info\">
        <div id=\"edition\" {% if canUpgradeEdition %}class=\"hot\" title=\"{{ 'Manage your Craft CMS edition'|t('app') }}\"{% else %}class=\"edition\"{% endif %}>
            <div id=\"edition-logo\">
                <div class=\"edition-name\">{{ craft.app.getEditionName() }}</div>
                {% if isTrial %}
                    <div class=\"edition-trial\">{{ \"Trial\"|t('app') }}</div>
                {% endif %}
            </div>
        </div>
        <div id=\"version\">Craft CMS {{ craft.app.version }}</div>
    </div>

    {% if currentUser.admin and devMode %}
        <div id=\"devmode\" title=\"{{ 'Craft CMS is running in Dev Mode.'|t('app') }}\"></div>
    {% endif %}
</header>
", "_layouts/components/global-sidebar", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_layouts/components/global-sidebar.twig");
    }
}
