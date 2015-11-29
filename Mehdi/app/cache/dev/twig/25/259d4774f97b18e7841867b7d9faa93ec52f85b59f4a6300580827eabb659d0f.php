<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_37a7de30dea9e75407e1156c709aec66247d6b7a03805047f773f464341c336c extends Twig_Template
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
        $__internal_abf44541b25f4af699c87ebb72fca260899e443c5309f14484295a52dc448310 = $this->env->getExtension("native_profiler");
        $__internal_abf44541b25f4af699c87ebb72fca260899e443c5309f14484295a52dc448310->enter($__internal_abf44541b25f4af699c87ebb72fca260899e443c5309f14484295a52dc448310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_abf44541b25f4af699c87ebb72fca260899e443c5309f14484295a52dc448310->leave($__internal_abf44541b25f4af699c87ebb72fca260899e443c5309f14484295a52dc448310_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
