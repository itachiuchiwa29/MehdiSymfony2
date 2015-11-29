<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c65c88c1afd19bfc5e73833bc650f7d981b3534b3ee6d5c025f729e99406f9c7 extends Twig_Template
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
        $__internal_82e753a2ff093fc8c5d5888fb4141a430103d0db9ce6c741c1e36fa4de8acffe = $this->env->getExtension("native_profiler");
        $__internal_82e753a2ff093fc8c5d5888fb4141a430103d0db9ce6c741c1e36fa4de8acffe->enter($__internal_82e753a2ff093fc8c5d5888fb4141a430103d0db9ce6c741c1e36fa4de8acffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_82e753a2ff093fc8c5d5888fb4141a430103d0db9ce6c741c1e36fa4de8acffe->leave($__internal_82e753a2ff093fc8c5d5888fb4141a430103d0db9ce6c741c1e36fa4de8acffe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
