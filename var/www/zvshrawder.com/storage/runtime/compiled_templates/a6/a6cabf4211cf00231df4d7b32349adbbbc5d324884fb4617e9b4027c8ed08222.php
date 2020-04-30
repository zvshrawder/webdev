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

/* _components/widgets/Feed/body */
class __TwigTemplate_45852772962b1c7a280eb15f8cffc3d763e7bc02b0eca0329faaf707528120c0 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/Feed/body");
        // line 1
        echo "<table class=\"fullwidth\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 2, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "        <tr>
            <td>&nbsp;</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</table>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/Feed/body");
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 0,  54 => 7,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"fullwidth\">
    {% for i in 1..limit %}
        <tr>
            <td>&nbsp;</td>
        </tr>
    {% endfor %}
</table>
", "_components/widgets/Feed/body", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_components/widgets/Feed/body.html");
    }
}
