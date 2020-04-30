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

/* _special/install/license */
class __TwigTemplate_90fdd4a8ff36487efe64c1cee8b9f84f1e6e9552a222b210d2500ab6510a1461 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_special/install/license");
        // line 1
        echo "<div id=\"license\" class=\"screen hidden\">
    <div class=\"license\">
        ";
        // line 3
        echo $this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["license"]) || array_key_exists("license", $context) ? $context["license"] : (function () { throw new RuntimeError('Variable "license" does not exist.', 3, $this->source); })()));
        echo "
    </div>

    <p class=\"centeralign\">
        <span id=\"accept-license\" class=\"btn submit\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Got it", "app"), "html", null, true);
        echo "</span>
    </p>
</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_special/install/license");
    }

    public function getTemplateName()
    {
        return "_special/install/license";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 0,  49 => 7,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"license\" class=\"screen hidden\">
    <div class=\"license\">
        {{ license|md }}
    </div>

    <p class=\"centeralign\">
        <span id=\"accept-license\" class=\"btn submit\">{{ \"Got it\"|t('app') }}</span>
    </p>
</div>
", "_special/install/license", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_special/install/license.html");
    }
}
