<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_64619f57c540794445ef527525db1917e56b3f7f991573de14dba53315ad6c72 extends Twig_Template
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
        $__internal_b8563e6f31c5ee551c1bad1c40d7271164861c1f5b2a1dcdd3878b61e7328277 = $this->env->getExtension("native_profiler");
        $__internal_b8563e6f31c5ee551c1bad1c40d7271164861c1f5b2a1dcdd3878b61e7328277->enter($__internal_b8563e6f31c5ee551c1bad1c40d7271164861c1f5b2a1dcdd3878b61e7328277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b8563e6f31c5ee551c1bad1c40d7271164861c1f5b2a1dcdd3878b61e7328277->leave($__internal_b8563e6f31c5ee551c1bad1c40d7271164861c1f5b2a1dcdd3878b61e7328277_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
