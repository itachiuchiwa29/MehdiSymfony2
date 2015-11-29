<?php

/* MehdiBundle:Article:about_us.html.twig */
class __TwigTemplate_d3cc40f018dc426c721f2b7376b136f84ae5f0667dfdf2f291def4fd0afd0547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:about_us.html.twig", 3);
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
        $__internal_0e296760e725ddd31529957e4a3dbdb2e971ce153fc3d3de88881db00068707e = $this->env->getExtension("native_profiler");
        $__internal_0e296760e725ddd31529957e4a3dbdb2e971ce153fc3d3de88881db00068707e->enter($__internal_0e296760e725ddd31529957e4a3dbdb2e971ce153fc3d3de88881db00068707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:about_us.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e296760e725ddd31529957e4a3dbdb2e971ce153fc3d3de88881db00068707e->leave($__internal_0e296760e725ddd31529957e4a3dbdb2e971ce153fc3d3de88881db00068707e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd74b111d7a5f1207641e6fd37a7171dc9f2de08ae1d879740ad250ca8eb938d = $this->env->getExtension("native_profiler");
        $__internal_bd74b111d7a5f1207641e6fd37a7171dc9f2de08ae1d879740ad250ca8eb938d->enter($__internal_bd74b111d7a5f1207641e6fd37a7171dc9f2de08ae1d879740ad250ca8eb938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bd74b111d7a5f1207641e6fd37a7171dc9f2de08ae1d879740ad250ca8eb938d->leave($__internal_bd74b111d7a5f1207641e6fd37a7171dc9f2de08ae1d879740ad250ca8eb938d_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_ca9b5cb6eadde0156ce2c55a19e5e4c634158978d5089901255f7e9c7ef711f8 = $this->env->getExtension("native_profiler");
        $__internal_ca9b5cb6eadde0156ce2c55a19e5e4c634158978d5089901255f7e9c7ef711f8->enter($__internal_ca9b5cb6eadde0156ce2c55a19e5e4c634158978d5089901255f7e9c7ef711f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>A propos de Nous</h2>

  <p>
   
      Information :</br>
      </br>

      Je m'ennuie du coup j'écrit plein de truc !!!

 </p>   

";
        
        $__internal_ca9b5cb6eadde0156ce2c55a19e5e4c634158978d5089901255f7e9c7ef711f8->leave($__internal_ca9b5cb6eadde0156ce2c55a19e5e4c634158978d5089901255f7e9c7ef711f8_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:about_us.html.twig";
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
/* {# src/MehdiBundle/Resources/views/Article/about_us.html.twig #}*/
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
/*       Je m'ennuie du coup j'écrit plein de truc !!!*/
/* */
/*  </p>   */
/* */
/* {% endblock %}*/
