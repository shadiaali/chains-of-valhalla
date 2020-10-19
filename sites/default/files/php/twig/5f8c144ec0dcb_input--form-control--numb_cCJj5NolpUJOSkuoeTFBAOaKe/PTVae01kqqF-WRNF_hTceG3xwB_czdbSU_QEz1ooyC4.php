<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/belgradechild/templates/form/input--form-control--number.html.twig */
class __TwigTemplate_e7c5e7ea47b69b066f2f729d52309b1ea6903ce279e2b6f5e2edeb4f94f8b4c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 23, "set" => 25];
        $filters = ["escape" => 31];
        $functions = ["attach_library" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        ob_start(function () { return ''; });
        // line 25
        $context["classes"] = [0 => "form-control", 1 => "form-number"];
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/belgradechild/templates/form/input--form-control--number.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_input($context, array $blocks = [])
    {
        // line 31
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("belgrade/custom-form-elements"), "html", null, true);
        echo "
      <button class=\"number-btn increment\" type=\"button\">+</button>
      <input";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " />
      <button class=\"number-btn decrement\" type=\"button\">-</button>
  ";
    }

    public function getTemplateName()
    {
        return "themes/belgradechild/templates/form/input--form-control--number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 33,  73 => 31,  70 => 30,  65 => 1,  62 => 25,  60 => 23,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/belgradechild/templates/form/input--form-control--number.html.twig", "/Applications/MAMP/htdocs/chains-of-valhalla/themes/belgradechild/templates/form/input--form-control--number.html.twig");
    }
}
