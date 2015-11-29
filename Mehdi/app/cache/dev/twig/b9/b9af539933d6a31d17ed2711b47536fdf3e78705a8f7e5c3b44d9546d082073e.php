<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cc880f2f05561741965d61322bae8489d655391e170c384c0476c65883aafaac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1316f3b72b29ec6026a8842135f3a774f7be7751d1833f9d15deb867d7297181 = $this->env->getExtension("native_profiler");
        $__internal_1316f3b72b29ec6026a8842135f3a774f7be7751d1833f9d15deb867d7297181->enter($__internal_1316f3b72b29ec6026a8842135f3a774f7be7751d1833f9d15deb867d7297181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1316f3b72b29ec6026a8842135f3a774f7be7751d1833f9d15deb867d7297181->leave($__internal_1316f3b72b29ec6026a8842135f3a774f7be7751d1833f9d15deb867d7297181_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
