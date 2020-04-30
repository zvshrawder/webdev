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

/* _components/utilities/SystemReport */
class __TwigTemplate_00cb37250b57b94ce1030821811e8d81c6bfad9a63c50c64068cad0464884cf0 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/utilities/SystemReport");
        // line 1
        echo "<div class=\"readable\">
    <h2>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Application Info", "app"), "html", null, true);
        echo "</h2>

    <table class=\"data fullwidth fixed-layout\" dir=\"ltr\">
        <tbody>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appInfo"]) || array_key_exists("appInfo", $context) ? $context["appInfo"] : (function () { throw new RuntimeError('Variable "appInfo" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 7
            echo "                <tr>
                    <th class=\"light\">";
            // line 8
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</th>
                    <td>";
            // line 9
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </tbody>
    </table>

    <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Plugins", "app"), "html", null, true);
        echo "</h2>

    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "        <table class=\"data fullwidth fixed-layout\" dir=\"ltr\">
            <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 21
                echo "                    <tr>
                        <th class=\"light\">";
                // line 22
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["plugin"], "name", []), "html", null, true);
                echo "</th>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["plugin"], "version", []), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 29
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No plugins are enabled.", "app"), "html", null, true);
            echo "</p>
    ";
        }
        // line 31
        echo "
    <h2>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Modules", "app"), "html", null, true);
        echo "</h2>

    ";
        // line 34
        if (twig_length_filter($this->env, (isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 34, $this->source); })()))) {
            // line 35
            echo "        <table class=\"data fullwidth fixed-layout\" dir=\"ltr\">
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["class"]) {
                // line 38
                echo "                    <tr>
                        <th class=\"light\">";
                // line 39
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</th>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 46
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No modules are installed.", "app"), "html", null, true);
            echo "</p>
    ";
        }
        // line 48
        echo "
    <h2>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Requirements", "app"), "html", null, true);
        echo "</h2>

    <table class=\"data fullwidth\" dir=\"ltr\">
        <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 54
            echo "            <tr>
                <td class=\"thin centeralign\">
                    ";
            // line 56
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["requirement"], "error", [])) {
                // line 57
                echo "                        <span class=\"error\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Failed", "app"), "html", null, true);
                echo "\" data-icon=\"error\"></span>
                    ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 58
$context["requirement"], "warning", [])) {
                // line 59
                echo "                        <span class=\"warning\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Passed with warning", "app"), "html", null, true);
                echo "\" data-icon=\"alert\"></span>
                    ";
            } else {
                // line 61
                echo "                        <span class=\"success\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Passed", "app"), "html", null, true);
                echo "\" data-icon=\"check\"></span>
                    ";
            }
            // line 63
            echo "                </td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["requirement"], "name", []), "html", null, true);
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["requirement"], "memo", [])) {
                echo " <span class=\"info\">";
                echo craft\helpers\Template::attribute($this->env, $this->source, $context["requirement"], "memo", []);
                echo "</span>";
            }
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>
</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_components/utilities/SystemReport");
    }

    public function getTemplateName()
    {
        return "_components/utilities/SystemReport";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 0,  216 => 67,  202 => 64,  199 => 63,  193 => 61,  187 => 59,  185 => 58,  180 => 57,  178 => 56,  174 => 54,  170 => 53,  163 => 49,  160 => 48,  154 => 46,  149 => 43,  140 => 40,  136 => 39,  133 => 38,  129 => 37,  125 => 35,  123 => 34,  118 => 32,  115 => 31,  109 => 29,  104 => 26,  95 => 23,  91 => 22,  88 => 21,  84 => 20,  80 => 18,  78 => 17,  73 => 15,  68 => 12,  59 => 9,  55 => 8,  52 => 7,  48 => 6,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"readable\">
    <h2>{{ \"Application Info\"|t('app') }}</h2>

    <table class=\"data fullwidth fixed-layout\" dir=\"ltr\">
        <tbody>
            {% for label, value in appInfo %}
                <tr>
                    <th class=\"light\">{{ label }}</th>
                    <td>{{ value }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <h2>{{ \"Plugins\"|t('app') }}</h2>

    {% if plugins|length %}
        <table class=\"data fullwidth fixed-layout\" dir=\"ltr\">
            <tbody>
                {% for plugin in plugins %}
                    <tr>
                        <th class=\"light\">{{ plugin.name }}</th>
                        <td>{{ plugin.version }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>{{ 'No plugins are enabled.'|t('app') }}</p>
    {% endif %}

    <h2>{{ 'Modules'|t('app') }}</h2>

    {% if modules|length %}
        <table class=\"data fullwidth fixed-layout\" dir=\"ltr\">
            <tbody>
                {% for id, class in modules %}
                    <tr>
                        <th class=\"light\">{{ id }}</th>
                        <td>{{ class }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>{{ 'No modules are installed.'|t('app') }}</p>
    {% endif %}

    <h2>{{ \"Requirements\"|t('app') }}</h2>

    <table class=\"data fullwidth\" dir=\"ltr\">
        <tbody>
        {% for requirement in requirements %}
            <tr>
                <td class=\"thin centeralign\">
                    {% if requirement.error %}
                        <span class=\"error\" title=\"{{ 'Failed'|t('app') }}\" data-icon=\"error\"></span>
                    {% elseif requirement.warning %}
                        <span class=\"warning\" title=\"{{ 'Passed with warning'|t('app') }}\" data-icon=\"alert\"></span>
                    {% else %}
                        <span class=\"success\" title=\"{{ 'Passed'|t('app') }}\" data-icon=\"check\"></span>
                    {% endif %}
                </td>
                <td>{{ requirement.name }}{% if requirement.memo %} <span class=\"info\">{{ requirement.memo|raw }}</span>{% endif %}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "_components/utilities/SystemReport", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/utilities/SystemReport.html");
    }
}
