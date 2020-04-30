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

/* dashboard/_index */
class __TwigTemplate_8172fb843c71766f923686b70e6008b5dce0bb2044ad0af87788d0f6a2ee1412 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionButton' => [$this, 'block_actionButton'],
            'main' => [$this, 'block_main'],
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
        craft\helpers\Template::beginProfile("template", "dashboard/_index");
        // line 2
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Dashboard", "app");
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "dashboard/_index", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "dashboard/_index");
    }

    // line 4
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 5
        echo "    <div class=\"buttons\">
        <div class=\"newwidget btngroup\">
            <div id=\"newwidgetmenubtn\" class=\"btn menubtn add icon\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("New widget", "app"), "html", null, true);
        echo "</div>
            <div class=\"menu newwidgetmenu\">
                <ul>
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgetTypes"]) || array_key_exists("widgetTypes", $context) ? $context["widgetTypes"] : (function () { throw new RuntimeError('Variable "widgetTypes" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["info"]) {
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "selectable", [])) {
                // line 11
                echo "                        <li>
                            <a data-type=\"";
                // line 12
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "name", []), "html", null, true);
                echo "\">
                                <span class=\"icon\">";
                // line 13
                echo craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "iconSvg", []);
                echo "</span>
                                ";
                // line 14
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["info"], "name", []), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </ul>
            </div>
        </div>

        <div id=\"widgetManagerBtn\" class=\"btn settings icon\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "html", null, true);
        echo "\"></div>
    </div>
";
        // line 0
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "main");
        // line 28
        echo "    <div id=\"dashboard-grid\" class=\"grid\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 30
            echo "            <div class=\"item\" data-colspan=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "colspan", []), "html", null, true);
            echo "\">
                <div id=\"widget";
            // line 31
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "id", []), "html", null, true);
            echo "\" class=\"widget ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "type", [])), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "id", []), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "type", []), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "title", []), "html", null, true);
            echo "\">
                    <div class=\"front\">
                        <div class=\"pane\">
                            <div class=\"spinner body-loading\"></div>
                            ";
            // line 35
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "title", []) || craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "subtitle", []))) {
                // line 36
                echo "                                <div class=\"widget-heading\">
                                    ";
                // line 37
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "title", [])) {
                    // line 38
                    echo "                                        <h2>";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "title", []), "html", null, true);
                    echo "</h2>
                                    ";
                }
                // line 40
                echo "                                    ";
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "subtitle", [])) {
                    // line 41
                    echo "                                        <h5>";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "subtitle", []), "html", null, true);
                    echo "</h5>
                                    ";
                }
                // line 43
                echo "                                </div>
                            ";
            }
            // line 45
            echo "                            <div class=\"body\">
                                ";
            // line 46
            echo craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "bodyHtml", []);
            echo "
                            </div>
                            <div class=\"settings icon hidden\"></div>
                        </div>
                    </div>
                    <div class=\"back\">
                        <form class=\"pane\">
                            ";
            // line 53
            echo craft\helpers\Html::hiddenInput("widgetId", craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "id", []));
            echo "
                            <h2>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("{type} Settings", "app", ["type" => craft\helpers\Template::attribute($this->env, $this->source, $context["widget"], "name", [])]), "html", null, true);
            echo "</h2>
                            <div class=\"settings\"></div>
                            <hr>
                            <div class=\"buttons clearafter\">
                                <input type=\"submit\" class=\"btn submit\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "\">
                                <div class=\"btn\" role=\"button\">";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Cancel", "app"), "html", null, true);
            echo "</div>
                                <div class=\"spinner hidden\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
";
        // line 0
        craft\helpers\Template::endProfile("block", "main");
    }

    public function getTemplateName()
    {
        return "dashboard/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 0,  215 => 67,  201 => 59,  197 => 58,  190 => 54,  186 => 53,  176 => 46,  173 => 45,  169 => 43,  163 => 41,  160 => 40,  154 => 38,  152 => 37,  149 => 36,  147 => 35,  132 => 31,  127 => 30,  123 => 29,  120 => 28,  118 => 0,  114 => 27,  110 => 0,  105 => 22,  99 => 18,  88 => 14,  84 => 13,  78 => 12,  75 => 11,  70 => 10,  64 => 7,  60 => 5,  58 => 0,  54 => 4,  50 => 0,  47 => 1,  45 => 2,  43 => 0,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% set title = \"Dashboard\"|t('app') %}

{% block actionButton %}
    <div class=\"buttons\">
        <div class=\"newwidget btngroup\">
            <div id=\"newwidgetmenubtn\" class=\"btn menubtn add icon\">{{ 'New widget'|t('app') }}</div>
            <div class=\"menu newwidgetmenu\">
                <ul>
                    {% for type, info in widgetTypes if info.selectable %}
                        <li>
                            <a data-type=\"{{ type }}\" data-name=\"{{ info.name }}\">
                                <span class=\"icon\">{{ info.iconSvg|raw }}</span>
                                {{ info.name }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        <div id=\"widgetManagerBtn\" class=\"btn settings icon\" title=\"{{ 'Settings'|t('app') }}\"></div>
    </div>
{% endblock %}


{% block main %}
    <div id=\"dashboard-grid\" class=\"grid\">
        {% for widget in widgets %}
            <div class=\"item\" data-colspan=\"{{ widget.colspan }}\">
                <div id=\"widget{{ widget.id }}\" class=\"widget {{ widget.type|lower }}\" data-id=\"{{ widget.id }}\" data-type=\"{{ widget.type }}\" data-title=\"{{ widget.title }}\">
                    <div class=\"front\">
                        <div class=\"pane\">
                            <div class=\"spinner body-loading\"></div>
                            {% if widget.title or widget.subtitle %}
                                <div class=\"widget-heading\">
                                    {% if widget.title %}
                                        <h2>{{ widget.title }}</h2>
                                    {% endif %}
                                    {% if widget.subtitle %}
                                        <h5>{{ widget.subtitle }}</h5>
                                    {% endif %}
                                </div>
                            {% endif %}
                            <div class=\"body\">
                                {{ widget.bodyHtml|raw }}
                            </div>
                            <div class=\"settings icon hidden\"></div>
                        </div>
                    </div>
                    <div class=\"back\">
                        <form class=\"pane\">
                            {{ hiddenInput('widgetId', widget.id) }}
                            <h2>{{ \"{type} Settings\"|t('app', { type: widget.name }) }}</h2>
                            <div class=\"settings\"></div>
                            <hr>
                            <div class=\"buttons clearafter\">
                                <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t('app') }}\">
                                <div class=\"btn\" role=\"button\">{{ 'Cancel'|t('app') }}</div>
                                <div class=\"spinner hidden\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "dashboard/_index", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/dashboard/_index.html");
    }
}
