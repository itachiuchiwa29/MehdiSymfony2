<?php

/* MehdiBundle:Article:beacon.html.twig */
class __TwigTemplate_80ab3b96511fb8257b8da68510c3ba5645cfeaae05a156356491dee068edb0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:beacon.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mehdi_body' => array($this, 'block_mehdi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MehdiBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b08c03e50b1d5b69d5a1dd969d2f4ea7808a63cdf3aa5ec99ce39721f265d2d5 = $this->env->getExtension("native_profiler");
        $__internal_b08c03e50b1d5b69d5a1dd969d2f4ea7808a63cdf3aa5ec99ce39721f265d2d5->enter($__internal_b08c03e50b1d5b69d5a1dd969d2f4ea7808a63cdf3aa5ec99ce39721f265d2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:beacon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b08c03e50b1d5b69d5a1dd969d2f4ea7808a63cdf3aa5ec99ce39721f265d2d5->leave($__internal_b08c03e50b1d5b69d5a1dd969d2f4ea7808a63cdf3aa5ec99ce39721f265d2d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eb802c8be21e7d724bad8a4c9d87b6dcd90334026c9d37bd5eb2f21a51f4946 = $this->env->getExtension("native_profiler");
        $__internal_1eb802c8be21e7d724bad8a4c9d87b6dcd90334026c9d37bd5eb2f21a51f4946->enter($__internal_1eb802c8be21e7d724bad8a4c9d87b6dcd90334026c9d37bd5eb2f21a51f4946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1eb802c8be21e7d724bad8a4c9d87b6dcd90334026c9d37bd5eb2f21a51f4946->leave($__internal_1eb802c8be21e7d724bad8a4c9d87b6dcd90334026c9d37bd5eb2f21a51f4946_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_1e4718ed94c23363e8fc7cccf5067b1f4d3703f05db75d45c22a71d121e85989 = $this->env->getExtension("native_profiler");
        $__internal_1e4718ed94c23363e8fc7cccf5067b1f4d3703f05db75d45c22a71d121e85989->enter($__internal_1e4718ed94c23363e8fc7cccf5067b1f4d3703f05db75d45c22a71d121e85989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>A propos de Nous</h2>

  <p>
   
      Information :</br>
      </br>

      Beacon

 </p>   

";
        
        $__internal_1e4718ed94c23363e8fc7cccf5067b1f4d3703f05db75d45c22a71d121e85989->leave($__internal_1e4718ed94c23363e8fc7cccf5067b1f4d3703f05db75d45c22a71d121e85989_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:beacon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdiBundle/Resources/views/Article/beacon.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   <h2>A propos de Nous</h2>*/
/* */
/*   <p>*/
/*    */
/*       Information :</br>*/
/*       </br>*/
/* */
/*       Beacon*/
/* */
/*  </p>   */
/* */
/* {% endblock %}*/
