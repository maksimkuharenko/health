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

/* themes/gavias_edubiz/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_095302ea2cc1c03fc7bd665c6253cdac7d8d2ae75bd7416ed3246c151c7541e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "block" => 17, "if" => 18];
        $filters = ["t" => 19, "escape" => 21, "replace" => 21];
        $functions = ["path" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['t', 'escape', 'replace'],
                ['path']
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
        // line 15
        echo "
";
        // line 16
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method");
        // line 17
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 18
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding-logo\">
      ";
            // line 20
            if (($context["setting_logo"] ?? null)) {
                // line 21
                echo "         <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), [".svg" => ".png"]), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" />
      ";
            } else {
                // line 22
                echo "  
        <img src=\"";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" />
      ";
            }
            // line 24
            echo "  
    </a>
  ";
        }
        // line 27
        echo "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 28
            echo "    <div class=\"site-branding__text\">
      ";
            // line 29
            if (($context["site_name"] ?? null)) {
                // line 30
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 34
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 35
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
      ";
            }
            // line 37
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  126 => 35,  123 => 34,  113 => 31,  110 => 30,  108 => 29,  105 => 28,  102 => 27,  97 => 24,  90 => 23,  87 => 22,  79 => 21,  77 => 20,  70 => 19,  67 => 18,  61 => 17,  59 => 16,  56 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_edubiz/templates/block/block--system-branding-block.html.twig", "/Users/kuharenko/php/healthcare/themes/gavias_edubiz/templates/block/block--system-branding-block.html.twig");
    }
}
