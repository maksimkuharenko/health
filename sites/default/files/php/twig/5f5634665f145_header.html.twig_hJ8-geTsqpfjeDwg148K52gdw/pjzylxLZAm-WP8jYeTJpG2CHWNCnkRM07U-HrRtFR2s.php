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

/* themes/gavias_edubiz/templates/page/header.html.twig */
class __TwigTemplate_563172cebf3bfcc14ed6cbaa8c008b738246a92738b2f8462db2f3c6ec844938 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "set" => 17];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
        // line 1
        echo "<header id=\"header\" class=\"header-v1\">
  
  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "topbar", [])) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12\">
              <div class=\"topbar-content\">";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbar", [])), "html", null, true);
            echo "</div> 
            </div>
          </div>   
        </div>
      </div>
    </div>
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        $context["class_sticky"] = "";
        // line 18
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 19
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 20
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6 col-xs-8 branding\">
                ";
        // line 27
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 28
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
                ";
        }
        // line 30
        echo "              </div>

              <div class=\"col-md-9 col-sm-6 col-xs-4 p-static\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            ";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 40
            echo "                              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                            
                            ";
        }
        // line 42
        echo "  
                            ";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 44
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                              </div>
                           ";
        }
        // line 48
        echo "                           
                          </div>
                          
                          <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>
                        
                        ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 58
            echo "                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">  
                              ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                            </div>  
                          </div>
                        ";
        }
        // line 65
        echo "                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edubiz/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  163 => 61,  158 => 58,  156 => 57,  145 => 48,  139 => 45,  136 => 44,  134 => 43,  131 => 42,  124 => 40,  122 => 39,  111 => 30,  105 => 28,  103 => 27,  95 => 22,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  68 => 9,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_edubiz/templates/page/header.html.twig", "/Users/kuharenko/php/healthcare/themes/gavias_edubiz/templates/page/header.html.twig");
    }
}
