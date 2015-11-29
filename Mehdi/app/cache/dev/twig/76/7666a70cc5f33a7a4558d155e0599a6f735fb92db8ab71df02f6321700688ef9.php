<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c52affd68eada366055156b8502be5651a8517e0356d0dcf978f5c6263fb6c3e extends Twig_Template
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
        $__internal_b234fb5f6069232121d03ee03d3c69cf72b2eb1c74839099d4700db11a572967 = $this->env->getExtension("native_profiler");
        $__internal_b234fb5f6069232121d03ee03d3c69cf72b2eb1c74839099d4700db11a572967->enter($__internal_b234fb5f6069232121d03ee03d3c69cf72b2eb1c74839099d4700db11a572967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b234fb5f6069232121d03ee03d3c69cf72b2eb1c74839099d4700db11a572967->leave($__internal_b234fb5f6069232121d03ee03d3c69cf72b2eb1c74839099d4700db11a572967_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
