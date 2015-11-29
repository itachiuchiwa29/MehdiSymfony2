<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3128ad816636049cb5e9404d4795c22ee53cd53c0832a339d948ddb04c3da83f extends Twig_Template
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
        $__internal_92e21df9bae90e9e67b11c8cb6b86fa64dd545f02623a4ac9cee28e8e4eea90b = $this->env->getExtension("native_profiler");
        $__internal_92e21df9bae90e9e67b11c8cb6b86fa64dd545f02623a4ac9cee28e8e4eea90b->enter($__internal_92e21df9bae90e9e67b11c8cb6b86fa64dd545f02623a4ac9cee28e8e4eea90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_92e21df9bae90e9e67b11c8cb6b86fa64dd545f02623a4ac9cee28e8e4eea90b->leave($__internal_92e21df9bae90e9e67b11c8cb6b86fa64dd545f02623a4ac9cee28e8e4eea90b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
