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

/* modules/hero_block/templates/block--content-hero-block.html.twig */
class __TwigTemplate_01cb2f8eeaef97554246ed074ef57204677272e3aa4b8ff305aa6bd014fbc40c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "<div class=\"heroblock banner\">
    <div class=\"image\">
        ";
        // line 4
        if (($context["img"] ?? null)) {
            // line 5
            echo "            <img class=\"d-lg-none mobile-image\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null)), "html", null, true);
            echo "\" ";
            if (($context["title"] ?? null)) {
                echo " alt=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\" ";
            }
            echo "> <!-- OPTION: Background-image -->
        ";
        }
        // line 7
        echo "        <div class=\"caption\">
            <div class=\"caption-cont\">
                ";
        // line 9
        if (($context["title"] ?? null)) {
            // line 10
            echo "                    <h1 class=\"title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1> <!-- OPTION: Caption title -->
                ";
        }
        // line 12
        echo "                <!-- CONDITIONAL: If Caption subtitle != null -->
                ";
        // line 13
        if (($context["sub_title"] ?? null)) {
            // line 14
            echo "                    <h2 class=\"subtitle\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_title"] ?? null)), "html", null, true);
            echo "</h2> <!-- OPTION: Caption subtitle -->
                ";
        }
        // line 16
        echo "                <!-- CONDITIONAL: If Caption subtitle != null -->
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/hero_block/templates/block--content-hero-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 16,  90 => 14,  88 => 13,  85 => 12,  79 => 10,  77 => 9,  73 => 7,  61 => 5,  59 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/hero_block/templates/block--content-hero-block.html.twig", "/Applications/MAMP/htdocs/chains-of-valhalla/modules/hero_block/templates/block--content-hero-block.html.twig");
    }
}
