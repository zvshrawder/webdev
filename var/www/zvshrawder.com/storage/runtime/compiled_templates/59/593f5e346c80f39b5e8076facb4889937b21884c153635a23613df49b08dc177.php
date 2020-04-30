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

/* _includes/forms */
class __TwigTemplate_d9f380169aefb12747ca1759fc961aadf5b55089f0505f4b8b1fda8fcd10f385 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms");
        // line 4
        echo "

";
        // line 7
        echo "

";
        // line 12
        echo "

";
        // line 17
        echo "

";
        // line 22
        echo "

";
        // line 27
        echo "

";
        // line 32
        echo "

";
        // line 37
        echo "

";
        // line 42
        echo "

";
        // line 47
        echo "

";
        // line 52
        echo "

";
        // line 57
        echo "

";
        // line 62
        echo "

";
        // line 67
        echo "

";
        // line 72
        echo "

";
        // line 77
        echo "

";
        // line 82
        echo "

";
        // line 87
        echo "

";
        // line 92
        echo "

";
        // line 97
        echo "

";
        // line 102
        echo "

";
        // line 105
        echo "

";
        // line 110
        echo "

";
        // line 126
        echo "

";
        // line 132
        echo "

";
        // line 138
        echo "

";
        // line 144
        echo "

";
        // line 150
        echo "

";
        // line 162
        echo "

";
        // line 168
        echo "

";
        // line 174
        echo "

";
        // line 180
        echo "

";
        // line 200
        echo "

";
        // line 206
        echo "

";
        // line 212
        echo "

";
        // line 218
        echo "

";
        // line 224
        echo "

";
        // line 234
        echo "

";
        // line 241
        echo "

";
        // line 247
        echo "

";
        // line 271
        echo "

";
        // line 274
        echo "

";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms");
    }

    // line 1
    public function macro_errorList($__errors__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "errorList");
            // line 2
            echo "    ";
            $this->loadTemplate("_includes/forms/errorList", "_includes/forms", 2)->display($context);
            // line 0
            craft\helpers\Template::endProfile("macro", "errorList");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_hidden($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "hidden");
            // line 10
            $this->loadTemplate("_includes/forms/hidden", "_includes/forms", 10)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "hidden");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 14
    public function macro_text($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "text");
            // line 15
            echo "    ";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 15)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "text");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_password($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "password");
            // line 20
            echo "    ";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 20)->display(twig_to_array($this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), ["type" => "password"])));
            // line 0
            craft\helpers\Template::endProfile("macro", "password");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_date($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "date");
            // line 25
            echo "    ";
            $this->loadTemplate("_includes/forms/date", "_includes/forms", 25)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "date");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_time($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "time");
            // line 30
            echo "    ";
            $this->loadTemplate("_includes/forms/time", "_includes/forms", 30)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "time");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 34
    public function macro_color($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "color");
            // line 35
            echo "    ";
            $this->loadTemplate("_includes/forms/color", "_includes/forms", 35)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "color");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_textarea($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "textarea");
            // line 40
            echo "    ";
            $this->loadTemplate("_includes/forms/textarea", "_includes/forms", 40)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "textarea");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_select($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "select");
            // line 45
            echo "    ";
            $this->loadTemplate("_includes/forms/select", "_includes/forms", 45)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "select");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 49
    public function macro_multiselect($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "multiselect");
            // line 50
            echo "    ";
            $this->loadTemplate("_includes/forms/multiselect", "_includes/forms", 50)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "multiselect");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_checkbox($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "checkbox");
            // line 55
            echo "    ";
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms", 55)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 55, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "checkbox");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 59
    public function macro_checkboxGroup($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "checkboxGroup");
            // line 60
            echo "    ";
            $this->loadTemplate("_includes/forms/checkboxGroup", "_includes/forms", 60)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "checkboxGroup");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_checkboxSelect($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "checkboxSelect");
            // line 65
            echo "    ";
            $this->loadTemplate("_includes/forms/checkboxSelect", "_includes/forms", 65)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "checkboxSelect");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 69
    public function macro_radio($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "radio");
            // line 70
            echo "    ";
            $this->loadTemplate("_includes/forms/radio", "_includes/forms", 70)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "radio");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 74
    public function macro_radioGroup($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "radioGroup");
            // line 75
            echo "    ";
            $this->loadTemplate("_includes/forms/radioGroup", "_includes/forms", 75)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "radioGroup");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 79
    public function macro_file($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "file");
            // line 80
            echo "    ";
            $this->loadTemplate("_includes/forms/file", "_includes/forms", 80)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 80, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "file");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 84
    public function macro_lightswitch($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "lightswitch");
            // line 85
            echo "    ";
            $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms", 85)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "lightswitch");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 89
    public function macro_editableTable($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "editableTable");
            // line 90
            echo "    ";
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 90)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 90, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "editableTable");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 94
    public function macro_elementSelect($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "elementSelect");
            // line 95
            echo "    ";
            $this->loadTemplate("_includes/forms/elementSelect", "_includes/forms", 95)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 95, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "elementSelect");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 99
    public function macro_autosuggest($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "autosuggest");
            // line 100
            echo "    ";
            $this->loadTemplate("_includes/forms/autosuggest", "_includes/forms", 100)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 100, $this->source); })())));
            // line 0
            craft\helpers\Template::endProfile("macro", "autosuggest");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 107
    public function macro_field($__config__ = null, $__input__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "input" => $__input__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "field");
            // line 108
            echo "    ";
            $this->loadTemplate("_includes/forms/field", "_includes/forms", 108)->display(twig_to_array($this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), ["input" => (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 108, $this->source); })())])));
            // line 0
            craft\helpers\Template::endProfile("macro", "field");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 112
    public function macro_textField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "textField");
            // line 113
            echo "    ";
            $macros["forms"] = $this;
            // line 114
            echo "    ";
            if (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "unit", [], "any", true, true)) {
                // line 115
                echo "        ";
                ob_start();
                // line 116
                echo "            <div class=\"flex\">
                <div class=\"textwrapper\">";
                // line 117
                echo twig_call_macro($macros["forms"], "macro_text", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })())], 117, $context, $this->getSourceContext());
                echo "</div>
                <div class=\"label light\">";
                // line 118
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 118, $this->source); })()), "unit", []), "html", null, true);
                echo "</div>
            </div>
        ";
                $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 121
                echo "    ";
            } else {
                // line 122
                echo "        ";
                $context["input"] = twig_call_macro($macros["forms"], "macro_text", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 122, $this->source); })())], 122, $context, $this->getSourceContext());
                // line 123
                echo "    ";
            }
            // line 124
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 124, $this->source); })()), (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 124, $this->source); })())], 124, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "textField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 128
    public function macro_passwordField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "passwordField");
            // line 129
            echo "    ";
            $macros["forms"] = $this;
            // line 130
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 130, $this->source); })()), twig_call_macro($macros["forms"], "macro_password", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 130, $this->source); })())], 130, $context, $this->getSourceContext())], 130, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "passwordField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 134
    public function macro_dateField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "dateField");
            // line 135
            echo "    ";
            $macros["forms"] = $this;
            // line 136
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 136, $this->source); })()), twig_call_macro($macros["forms"], "macro_date", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 136, $this->source); })())], 136, $context, $this->getSourceContext())], 136, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "dateField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 140
    public function macro_timeField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "timeField");
            // line 141
            echo "    ";
            $macros["forms"] = $this;
            // line 142
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 142, $this->source); })()), twig_call_macro($macros["forms"], "macro_time", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 142, $this->source); })())], 142, $context, $this->getSourceContext())], 142, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "timeField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 146
    public function macro_colorField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "colorField");
            // line 147
            echo "    ";
            $macros["forms"] = $this;
            // line 148
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 148, $this->source); })()), twig_call_macro($macros["forms"], "macro_color", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 148, $this->source); })())], 148, $context, $this->getSourceContext())], 148, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "colorField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 152
    public function macro_dateTimeField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "dateTimeField");
            // line 153
            echo "    ";
            $macros["forms"] = $this;
            // line 154
            echo "    ";
            ob_start();
            // line 155
            echo "        <div class=\"datetimewrapper\">
            ";
            // line 156
            echo twig_call_macro($macros["forms"], "macro_date", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 156, $this->source); })())], 156, $context, $this->getSourceContext());
            echo "
            ";
            // line 157
            echo twig_call_macro($macros["forms"], "macro_time", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })())], 157, $context, $this->getSourceContext());
            echo "
        </div>
    ";
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 160
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 160, $this->source); })()), (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 160, $this->source); })())], 160, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "dateTimeField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 164
    public function macro_textareaField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "textareaField");
            // line 165
            echo "    ";
            $macros["forms"] = $this;
            // line 166
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 166, $this->source); })()), twig_call_macro($macros["forms"], "macro_textarea", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 166, $this->source); })())], 166, $context, $this->getSourceContext())], 166, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "textareaField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 170
    public function macro_selectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "selectField");
            // line 171
            echo "    ";
            $macros["forms"] = $this;
            // line 172
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 172, $this->source); })()), twig_call_macro($macros["forms"], "macro_select", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 172, $this->source); })())], 172, $context, $this->getSourceContext())], 172, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "selectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
    public function macro_multiselectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "multiselectField");
            // line 177
            echo "    ";
            $macros["forms"] = $this;
            // line 178
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 178, $this->source); })()), twig_call_macro($macros["forms"], "macro_multiselect", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 178, $this->source); })())], 178, $context, $this->getSourceContext())], 178, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "multiselectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 182
    public function macro_checkboxField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "checkboxField");
            // line 183
            echo "    ";
            $macros["forms"] = $this;
            // line 184
            echo "    ";
            if (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldLabel", [], "any", true, true)) {
                // line 185
                echo "        ";
                echo twig_call_macro($macros["forms"], "macro_field", [$this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 185, $this->source); })()), ["label" => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 185, $this->source); })()), "fieldLabel", [])]), twig_call_macro($macros["forms"], "macro_checkbox", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 185, $this->source); })())], 185, $context, $this->getSourceContext())], 185, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 187
                echo "        ";
                $context["instructions"] = (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "instructions", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "instructions", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "instructions", [])) : (null));
                // line 188
                $context["warning"] = (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "warning", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "warning", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "warning", [])) : (null));
                // line 189
                echo "<div class=\"field checkboxfield";
                if ((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "first", [], "any", true, true) && craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 189, $this->source); })()), "first", []))) {
                    echo " first";
                }
                if ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 189, $this->source); })())) {
                    echo " has-instructions";
                }
                echo "\"";
                if ((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "id", [], "any", true, true) && craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 189, $this->source); })()), "id", []))) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 189, $this->source); })()), "id", []), "html", null, true);
                    echo "-field\"";
                }
                echo ">
            ";
                // line 190
                echo twig_call_macro($macros["forms"], "macro_checkbox", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 190, $this->source); })())], 190, $context, $this->getSourceContext());
                echo "
            ";
                // line 191
                if ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 191, $this->source); })())) {
                    // line 192
                    echo "                <div class=\"instructions\">";
                    echo $this->extensions['craft\web\twig\Extension']->markdownFilter((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 192, $this->source); })()));
                    echo "</div>
            ";
                }
                // line 194
                echo "            ";
                if ((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 194, $this->source); })())) {
                    // line 195
                    echo "                <p class=\"warning with-icon\">";
                    echo twig_escape_filter($this->env, (isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 195, $this->source); })()), "html", null, true);
                    echo "</p>
            ";
                }
                // line 197
                echo "        </div>
    ";
            }
            // line 0
            craft\helpers\Template::endProfile("macro", "checkboxField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 202
    public function macro_checkboxGroupField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "checkboxGroupField");
            // line 203
            echo "    ";
            $macros["forms"] = $this;
            // line 204
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 204, $this->source); })()), twig_call_macro($macros["forms"], "macro_checkboxGroup", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 204, $this->source); })())], 204, $context, $this->getSourceContext())], 204, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "checkboxGroupField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 208
    public function macro_checkboxSelectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "checkboxSelectField");
            // line 209
            echo "    ";
            $macros["forms"] = $this;
            // line 210
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 210, $this->source); })()), twig_call_macro($macros["forms"], "macro_checkboxSelect", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 210, $this->source); })())], 210, $context, $this->getSourceContext())], 210, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "checkboxSelectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 214
    public function macro_radioGroupField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "radioGroupField");
            // line 215
            echo "    ";
            $macros["forms"] = $this;
            // line 216
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 216, $this->source); })()), twig_call_macro($macros["forms"], "macro_radioGroup", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 216, $this->source); })())], 216, $context, $this->getSourceContext())], 216, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "radioGroupField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 220
    public function macro_fileField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "fileField");
            // line 221
            echo "    ";
            $macros["forms"] = $this;
            // line 222
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 222, $this->source); })()), twig_call_macro($macros["forms"], "macro_file", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 222, $this->source); })())], 222, $context, $this->getSourceContext())], 222, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "fileField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 226
    public function macro_lightswitchField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "lightswitchField");
            // line 227
            echo "    ";
            $macros["forms"] = $this;
            // line 228
            echo "    ";
            if (( !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "labelId", [], "any", true, true) ||  !craft\helpers\Template::attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 228, $this->source); })()), "labelId", []))) {
                // line 229
                echo "        ";
                $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 229, $this->source); })()), ["labelId" => ("label" . twig_random($this->env))]);
                // line 230
                echo "    ";
            }
            // line 231
            echo "    ";
            $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 231, $this->source); })()), ["fieldClass" => ("lightswitch-field " . (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldClass", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldClass", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "fieldClass", [])) : ("")))]);
            // line 232
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 232, $this->source); })()), twig_call_macro($macros["forms"], "macro_lightswitch", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 232, $this->source); })())], 232, $context, $this->getSourceContext())], 232, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "lightswitchField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 236
    public function macro_editableTableField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "editableTableField");
            // line 237
            echo "    ";
            $macros["forms"] = $this;
            // line 238
            echo "    ";
            ob_start();
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 238)->display(twig_to_array((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 238, $this->source); })())));
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 239
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 239, $this->source); })()), (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 239, $this->source); })())], 239, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "editableTableField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 243
    public function macro_elementSelectField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "elementSelectField");
            // line 244
            echo "    ";
            $macros["forms"] = $this;
            // line 245
            echo "    ";
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 245, $this->source); })()), twig_call_macro($macros["forms"], "macro_elementSelect", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 245, $this->source); })())], 245, $context, $this->getSourceContext())], 245, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "elementSelectField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 249
    public function macro_autosuggestField($__config__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "autosuggestField");
            // line 250
            echo "    ";
            $macros["forms"] = $this;
            // line 251
            echo "
    ";
            // line 253
            echo "    ";
            if ((((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestEnvVars", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestEnvVars", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestEnvVars", [])) : (false))) {
                // line 254
                echo "        ";
                $context["value"] = (((craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "value", [])) : (""));
                // line 255
                echo "        ";
                if (( !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "tip", [], "any", true, true) && !twig_in_filter(twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 255, $this->source); })()), 0, 1), [0 => "\$", 1 => "@"]))) {
                    // line 256
                    echo "            ";
                    $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 256, $this->source); })()), ["tip" => ((((((((craft\helpers\Template::attribute($this->env, $this->source,                     // line 257
($context["config"] ?? null), "suggestAliases", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestAliases", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "suggestAliases", [])) : (false))) ? ($this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable, or begin with an alias.", "app")) : ($this->extensions['craft\web\twig\Extension']->translateFilter("This can be set to an environment variable.", "app"))) . " <a href=\"https://docs.craftcms.com/v3/config/environments.html\" class=\"go\">") . $this->extensions['craft\web\twig\Extension']->translateFilter("Learn more", "app")) . "</a>")]);
                    // line 262
                    echo "        ";
                } elseif ((( !craft\helpers\Template::attribute($this->env, $this->source, ($context["config"] ?? null), "warning", [], "any", true, true) && (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 262, $this->source); })()) == "@web") || (twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 262, $this->source); })()), 0, 5) == "@web/"))) && craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 262, $this->source); })()), "app", []), "request", []), "isWebAliasSetDynamically", []))) {
                    // line 263
                    echo "            ";
                    $context["config"] = $this->extensions['craft\web\twig\Extension']->mergeFilter((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 263, $this->source); })()), ["warning" => $this->extensions['craft\web\twig\Extension']->translateFilter("The `@web` alias is not recommended if it is determined automatically.", "app")]);
                    // line 266
                    echo "        ";
                }
                // line 267
                echo "    ";
            }
            // line 268
            echo "
    ";
            // line 269
            echo twig_call_macro($macros["forms"], "macro_field", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 269, $this->source); })()), twig_call_macro($macros["forms"], "macro_autosuggest", [(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 269, $this->source); })())], 269, $context, $this->getSourceContext())], 269, $context, $this->getSourceContext());
            echo "
";
            // line 0
            craft\helpers\Template::endProfile("macro", "autosuggestField");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 276
    public function macro_optionShortcutLabel($__key__ = null, $__shift__ = null, $__alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "shift" => $__shift__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "optionShortcutLabel");
            // line 277
            ob_start();
            // line 278
            echo "        ";
            switch (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 278, $this->source); })()), "app", []), "request", []), "getClientOs", [], "method")) {
                case "Mac":
                {
                    // line 280
                    echo "                <span class=\"shortcut\">";
                    echo twig_escape_filter($this->env, ((((((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 280, $this->source); })())) ? ("⌥") : ("")) . (((isset($context["shift"]) || array_key_exists("shift", $context) ? $context["shift"] : (function () { throw new RuntimeError('Variable "shift" does not exist.', 280, $this->source); })())) ? ("⇧") : (""))) . "⌘") . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 280, $this->source); })())), "html", null, true);
                    echo "</span>
            ";
                    break;
                }
                default:
                {
                    // line 282
                    echo "                <span class=\"shortcut\">";
                    echo twig_escape_filter($this->env, ((("Ctrl+" . (((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 282, $this->source); })())) ? ("Alt+") : (""))) . (((isset($context["shift"]) || array_key_exists("shift", $context) ? $context["shift"] : (function () { throw new RuntimeError('Variable "shift" does not exist.', 282, $this->source); })())) ? ("Shift+") : (""))) . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 282, $this->source); })())), "html", null, true);
                    echo "</span>
        ";
                }
            }
            // line 284
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 0
            craft\helpers\Template::endProfile("macro", "optionShortcutLabel");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1537 => 0,  1534 => 284,  1527 => 282,  1518 => 280,  1513 => 278,  1511 => 277,  1509 => 0,  1494 => 276,  1485 => 0,  1481 => 269,  1478 => 268,  1475 => 267,  1472 => 266,  1469 => 263,  1466 => 262,  1464 => 257,  1462 => 256,  1459 => 255,  1456 => 254,  1453 => 253,  1450 => 251,  1447 => 250,  1445 => 0,  1432 => 249,  1423 => 0,  1418 => 245,  1415 => 244,  1413 => 0,  1400 => 243,  1391 => 0,  1386 => 239,  1381 => 238,  1378 => 237,  1376 => 0,  1363 => 236,  1354 => 0,  1349 => 232,  1346 => 231,  1343 => 230,  1340 => 229,  1337 => 228,  1334 => 227,  1332 => 0,  1319 => 226,  1310 => 0,  1305 => 222,  1302 => 221,  1300 => 0,  1287 => 220,  1278 => 0,  1273 => 216,  1270 => 215,  1268 => 0,  1255 => 214,  1246 => 0,  1241 => 210,  1238 => 209,  1236 => 0,  1223 => 208,  1214 => 0,  1209 => 204,  1206 => 203,  1204 => 0,  1191 => 202,  1182 => 0,  1178 => 197,  1172 => 195,  1169 => 194,  1163 => 192,  1161 => 191,  1157 => 190,  1141 => 189,  1139 => 188,  1136 => 187,  1130 => 185,  1127 => 184,  1124 => 183,  1122 => 0,  1109 => 182,  1100 => 0,  1095 => 178,  1092 => 177,  1090 => 0,  1077 => 176,  1068 => 0,  1063 => 172,  1060 => 171,  1058 => 0,  1045 => 170,  1036 => 0,  1031 => 166,  1028 => 165,  1026 => 0,  1013 => 164,  1004 => 0,  999 => 160,  993 => 157,  989 => 156,  986 => 155,  983 => 154,  980 => 153,  978 => 0,  965 => 152,  956 => 0,  951 => 148,  948 => 147,  946 => 0,  933 => 146,  924 => 0,  919 => 142,  916 => 141,  914 => 0,  901 => 140,  892 => 0,  887 => 136,  884 => 135,  882 => 0,  869 => 134,  860 => 0,  855 => 130,  852 => 129,  850 => 0,  837 => 128,  828 => 0,  823 => 124,  820 => 123,  817 => 122,  814 => 121,  808 => 118,  804 => 117,  801 => 116,  798 => 115,  795 => 114,  792 => 113,  790 => 0,  777 => 112,  768 => 0,  765 => 108,  763 => 0,  749 => 107,  740 => 0,  737 => 100,  735 => 0,  722 => 99,  713 => 0,  710 => 95,  708 => 0,  695 => 94,  686 => 0,  683 => 90,  681 => 0,  668 => 89,  659 => 0,  656 => 85,  654 => 0,  641 => 84,  632 => 0,  629 => 80,  627 => 0,  614 => 79,  605 => 0,  602 => 75,  600 => 0,  587 => 74,  578 => 0,  575 => 70,  573 => 0,  560 => 69,  551 => 0,  548 => 65,  546 => 0,  533 => 64,  524 => 0,  521 => 60,  519 => 0,  506 => 59,  497 => 0,  494 => 55,  492 => 0,  479 => 54,  470 => 0,  467 => 50,  465 => 0,  452 => 49,  443 => 0,  440 => 45,  438 => 0,  425 => 44,  416 => 0,  413 => 40,  411 => 0,  398 => 39,  389 => 0,  386 => 35,  384 => 0,  371 => 34,  362 => 0,  359 => 30,  357 => 0,  344 => 29,  335 => 0,  332 => 25,  330 => 0,  317 => 24,  308 => 0,  305 => 20,  303 => 0,  290 => 19,  281 => 0,  278 => 15,  276 => 0,  263 => 14,  254 => 0,  252 => 10,  250 => 0,  237 => 9,  228 => 0,  225 => 2,  223 => 0,  210 => 1,  206 => 0,  202 => 274,  198 => 271,  194 => 247,  190 => 241,  186 => 234,  182 => 224,  178 => 218,  174 => 212,  170 => 206,  166 => 200,  162 => 180,  158 => 174,  154 => 168,  150 => 162,  146 => 150,  142 => 144,  138 => 138,  134 => 132,  130 => 126,  126 => 110,  122 => 105,  118 => 102,  114 => 97,  110 => 92,  106 => 87,  102 => 82,  98 => 77,  94 => 72,  90 => 67,  86 => 62,  82 => 57,  78 => 52,  74 => 47,  70 => 42,  66 => 37,  62 => 32,  58 => 27,  54 => 22,  50 => 17,  46 => 12,  42 => 7,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro errorList(errors) %}
    {% include \"_includes/forms/errorList\" %}
{% endmacro %}


{# Inputs #}


{% macro hidden(config) -%}
    {% include \"_includes/forms/hidden\" with config only %}
{%- endmacro %}


{% macro text(config) %}
    {% include \"_includes/forms/text\" with config only %}
{% endmacro %}


{% macro password(config) %}
    {% include \"_includes/forms/text\" with config|merge({ type: 'password' }) only %}
{% endmacro %}


{% macro date(config) %}
    {% include \"_includes/forms/date\" with config only %}
{% endmacro %}


{% macro time(config) %}
    {% include \"_includes/forms/time\" with config only %}
{% endmacro %}


{% macro color(config) %}
    {% include \"_includes/forms/color\" with config only %}
{% endmacro %}


{% macro textarea(config) %}
    {% include \"_includes/forms/textarea\" with config only %}
{% endmacro %}


{% macro select(config) %}
    {% include \"_includes/forms/select\" with config only %}
{% endmacro %}


{% macro multiselect(config) %}
    {% include \"_includes/forms/multiselect\" with config only %}
{% endmacro %}


{% macro checkbox(config) %}
    {% include \"_includes/forms/checkbox\" with config only %}
{% endmacro %}


{% macro checkboxGroup(config) %}
    {% include \"_includes/forms/checkboxGroup\" with config only %}
{% endmacro %}


{% macro checkboxSelect(config) %}
    {% include \"_includes/forms/checkboxSelect\" with config only %}
{% endmacro %}


{% macro radio(config) %}
    {% include \"_includes/forms/radio\" with config only %}
{% endmacro %}


{% macro radioGroup(config) %}
    {% include \"_includes/forms/radioGroup\" with config only %}
{% endmacro %}


{% macro file(config) %}
    {% include \"_includes/forms/file\" with config only %}
{% endmacro %}


{% macro lightswitch(config) %}
    {% include \"_includes/forms/lightswitch\" with config only %}
{% endmacro %}


{% macro editableTable(config) %}
    {% include \"_includes/forms/editableTable\" with config only %}
{% endmacro %}


{% macro elementSelect(config) %}
    {% include \"_includes/forms/elementSelect\" with config only %}
{% endmacro %}


{% macro autosuggest(config) %}
    {% include \"_includes/forms/autosuggest\" with config only %}
{% endmacro %}


{# Fields #}


{% macro field(config, input) %}
    {% include \"_includes/forms/field\" with config|merge({ input: input }) only %}
{% endmacro %}


{% macro textField(config) %}
    {% import _self as forms %}
    {% if config.unit is defined %}
        {% set input %}
            <div class=\"flex\">
                <div class=\"textwrapper\">{{ forms.text(config) }}</div>
                <div class=\"label light\">{{ config.unit }}</div>
            </div>
        {% endset %}
    {% else %}
        {% set input = forms.text(config) %}
    {% endif %}
    {{ forms.field(config, input) }}
{% endmacro %}


{% macro passwordField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.password(config)) }}
{% endmacro %}


{% macro dateField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.date(config)) }}
{% endmacro %}


{% macro timeField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.time(config)) }}
{% endmacro %}


{% macro colorField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.color(config)) }}
{% endmacro %}


{% macro dateTimeField(config) %}
    {% import _self as forms %}
    {% set input %}
        <div class=\"datetimewrapper\">
            {{ forms.date(config) }}
            {{ forms.time(config) }}
        </div>
    {% endset %}
    {{ forms.field(config, input) }}
{% endmacro %}


{% macro textareaField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.textarea(config)) }}
{% endmacro %}


{% macro selectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.select(config)) }}
{% endmacro %}


{% macro multiselectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.multiselect(config)) }}
{% endmacro %}


{% macro checkboxField(config) %}
    {% import _self as forms %}
    {% if config.fieldLabel is defined %}
        {{ forms.field(config|merge({label: config.fieldLabel}), forms.checkbox(config)) }}
    {% else %}
        {% set instructions = config.instructions ?? null -%}
        {% set warning = config.warning ?? null -%}
        <div class=\"field checkboxfield{% if config.first is defined and config.first %} first{% endif %}{% if instructions %} has-instructions{% endif %}\"{% if config.id is defined and config.id %} id=\"{{ config.id }}-field\"{% endif %}>
            {{ forms.checkbox(config) }}
            {% if instructions %}
                <div class=\"instructions\">{{ instructions|md }}</div>
            {% endif %}
            {% if warning %}
                <p class=\"warning with-icon\">{{ warning }}</p>
            {% endif %}
        </div>
    {% endif %}
{% endmacro %}


{% macro checkboxGroupField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.checkboxGroup(config)) }}
{% endmacro %}


{% macro checkboxSelectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.checkboxSelect(config)) }}
{% endmacro %}


{% macro radioGroupField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.radioGroup(config)) }}
{% endmacro %}


{% macro fileField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.file(config)) }}
{% endmacro %}


{% macro lightswitchField(config) %}
    {% import _self as forms %}
    {% if config.labelId is not defined or not config.labelId %}
        {% set config = config|merge({ labelId: 'label'~random() }) %}
    {% endif %}
    {% set config = config|merge({ fieldClass: 'lightswitch-field ' ~ (config.fieldClass ?? '') }) %}
    {{ forms.field(config, forms.lightswitch(config)) }}
{% endmacro %}


{% macro editableTableField(config) %}
    {% import _self as forms %}
    {% set input %}{% include \"_includes/forms/editableTable\" with config only %}{% endset %}
    {{ forms.field(config, input) }}
{% endmacro %}


{% macro elementSelectField(config) %}
    {% import _self as forms %}
    {{ forms.field(config, forms.elementSelect(config)) }}
{% endmacro %}


{% macro autosuggestField(config) %}
    {% import _self as forms %}

    {# Suggest an environment variable / alias? #}
    {% if (config.suggestEnvVars ?? false) %}
        {% set value = config.value ?? '' %}
        {% if config.tip is not defined and value[0:1] not in ['\$', '@'] %}
            {% set config = config|merge({
                tip: ((config.suggestAliases ?? false)
                    ? 'This can be set to an environment variable, or begin with an alias.'|t('app')
                    : 'This can be set to an environment variable.'|t('app'))
                    ~ ' <a href=\"https://docs.craftcms.com/v3/config/environments.html\" class=\"go\">' ~ 'Learn more'|t('app') ~ '</a>'
            }) %}
        {% elseif config.warning is not defined and (value == '@web' or value[0:5] == '@web/') and craft.app.request.isWebAliasSetDynamically %}
            {% set config = config|merge({
                warning: 'The `@web` alias is not recommended if it is determined automatically.'|t('app')
            }) %}
        {% endif %}
    {% endif %}

    {{ forms.field(config, forms.autosuggest(config)) }}
{% endmacro %}


{# Other #}


{% macro optionShortcutLabel(key, shift, alt) %}
    {%- spaceless %}
        {% switch craft.app.request.getClientOs() %}
            {% case 'Mac' %}
                <span class=\"shortcut\">{{ (alt ? '⌥') ~ (shift ? '⇧') ~ '⌘' ~ key }}</span>
            {% default %}
                <span class=\"shortcut\">{{ 'Ctrl+' ~ (alt ? 'Alt+') ~ (shift ? 'Shift+') ~ key }}</span>
        {% endswitch %}
    {% endspaceless -%}
{% endmacro %}
", "_includes/forms", "/var/www/zvshrawder.com/vendor/craftcms/cms/src/templates/_includes/forms.html");
    }
}
