<?php

/* MehdiBundle:Article:index.html.twig */
class __TwigTemplate_121fe33c763edef9ea5ee4c97b7b97d072ae075f1a04f73559a831898368e60e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:index.html.twig", 3);
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
        $__internal_0921e9e3acf05bcceea54e7535b532c5ca74b3891dbf5d794e27e9a9fb8d2317 = $this->env->getExtension("native_profiler");
        $__internal_0921e9e3acf05bcceea54e7535b532c5ca74b3891dbf5d794e27e9a9fb8d2317->enter($__internal_0921e9e3acf05bcceea54e7535b532c5ca74b3891dbf5d794e27e9a9fb8d2317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0921e9e3acf05bcceea54e7535b532c5ca74b3891dbf5d794e27e9a9fb8d2317->leave($__internal_0921e9e3acf05bcceea54e7535b532c5ca74b3891dbf5d794e27e9a9fb8d2317_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_885f9f34b0938b830dd6517fd6dc888c9128c4d05ae207a04cba0f0dfeaf53d6 = $this->env->getExtension("native_profiler");
        $__internal_885f9f34b0938b830dd6517fd6dc888c9128c4d05ae207a04cba0f0dfeaf53d6->enter($__internal_885f9f34b0938b830dd6517fd6dc888c9128c4d05ae207a04cba0f0dfeaf53d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_885f9f34b0938b830dd6517fd6dc888c9128c4d05ae207a04cba0f0dfeaf53d6->leave($__internal_885f9f34b0938b830dd6517fd6dc888c9128c4d05ae207a04cba0f0dfeaf53d6_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_0dcdf7f35f161f07a905fbef92aeef09fe5a8b720c38a3aa4a5ad4c29035ba96 = $this->env->getExtension("native_profiler");
        $__internal_0dcdf7f35f161f07a905fbef92aeef09fe5a8b720c38a3aa4a5ad4c29035ba96->enter($__internal_0dcdf7f35f161f07a905fbef92aeef09fe5a8b720c38a3aa4a5ad4c29035ba96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>PST4</h2>

  <p>
   
      Bonjour à tous,</br>
      </br>

      Ce site à pour but de présenter les résultats de notre PST4 : Microgéolocalisation avec des beacons. </br>
      Nous allons microgéolocaliser les gens c'est à dire calculer la position des gens sur site de manière précise à un instant t, étudier ses positions du moment où il est rentré jusqu'à son départ et ainsi reconstituer son trajet. L'ensemble des parcours des gens nous permettra de connaitre les habitudes des gens. Pour un centre commercial, ce sytème prmettra de connaitre les habitudes des gens et surtout leurs proposer des produits selon ce qu'ils aiment.

 </p>   

";
        
        $__internal_0dcdf7f35f161f07a905fbef92aeef09fe5a8b720c38a3aa4a5ad4c29035ba96->leave($__internal_0dcdf7f35f161f07a905fbef92aeef09fe5a8b720c38a3aa4a5ad4c29035ba96_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:index.html.twig";
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
/* {# src/MehdiBundle/Resources/views/Article/index.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   <h2>PST4</h2>*/
/* */
/*   <p>*/
/*    */
/*       Bonjour à tous,</br>*/
/*       </br>*/
/* */
/*       Ce site à pour but de présenter les résultats de notre PST4 : Microgéolocalisation avec des beacons. </br>*/
/*       Nous allons microgéolocaliser les gens c'est à dire calculer la position des gens sur site de manière précise à un instant t, étudier ses positions du moment où il est rentré jusqu'à son départ et ainsi reconstituer son trajet. L'ensemble des parcours des gens nous permettra de connaitre les habitudes des gens. Pour un centre commercial, ce sytème prmettra de connaitre les habitudes des gens et surtout leurs proposer des produits selon ce qu'ils aiment.*/
/* */
/*  </p>   */
/* */
/* {% endblock %}*/
