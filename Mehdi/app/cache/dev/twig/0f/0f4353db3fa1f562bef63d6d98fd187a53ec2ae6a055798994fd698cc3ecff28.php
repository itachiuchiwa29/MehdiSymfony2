<?php

/* MehdiBundle:Article:micro_geolocalisation.html.twig */
class __TwigTemplate_c2f609f36e919f67bb045af0c9c2a3d9589883ebddba08f422f94057edef0271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:micro_geolocalisation.html.twig", 3);
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
        $__internal_ed4b307e5b1e9df758f59c14013220cf456bda2066211010d8c8d1c46b6cc90e = $this->env->getExtension("native_profiler");
        $__internal_ed4b307e5b1e9df758f59c14013220cf456bda2066211010d8c8d1c46b6cc90e->enter($__internal_ed4b307e5b1e9df758f59c14013220cf456bda2066211010d8c8d1c46b6cc90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:micro_geolocalisation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed4b307e5b1e9df758f59c14013220cf456bda2066211010d8c8d1c46b6cc90e->leave($__internal_ed4b307e5b1e9df758f59c14013220cf456bda2066211010d8c8d1c46b6cc90e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b81d7c8c0483045d770b7d316b3c66c7292f7d1d7bb74c8c4095a61f9e52af40 = $this->env->getExtension("native_profiler");
        $__internal_b81d7c8c0483045d770b7d316b3c66c7292f7d1d7bb74c8c4095a61f9e52af40->enter($__internal_b81d7c8c0483045d770b7d316b3c66c7292f7d1d7bb74c8c4095a61f9e52af40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b81d7c8c0483045d770b7d316b3c66c7292f7d1d7bb74c8c4095a61f9e52af40->leave($__internal_b81d7c8c0483045d770b7d316b3c66c7292f7d1d7bb74c8c4095a61f9e52af40_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_c96c48e1b420dd70850b0c40a17e73c60c04ca4d08f705758b91d4c27eac1341 = $this->env->getExtension("native_profiler");
        $__internal_c96c48e1b420dd70850b0c40a17e73c60c04ca4d08f705758b91d4c27eac1341->enter($__internal_c96c48e1b420dd70850b0c40a17e73c60c04ca4d08f705758b91d4c27eac1341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>A propos de Nous</h2>

  <p>
   
      Information :</br>
      </br>

      Micro-geo

 </p>   

";
        
        $__internal_c96c48e1b420dd70850b0c40a17e73c60c04ca4d08f705758b91d4c27eac1341->leave($__internal_c96c48e1b420dd70850b0c40a17e73c60c04ca4d08f705758b91d4c27eac1341_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:micro_geolocalisation.html.twig";
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
/*       Micro-geo*/
/* */
/*  </p>   */
/* */
/* {% endblock %}*/
