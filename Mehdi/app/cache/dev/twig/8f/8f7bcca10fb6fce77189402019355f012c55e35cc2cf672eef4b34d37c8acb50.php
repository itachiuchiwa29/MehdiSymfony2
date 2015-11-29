<?php

/* MehdiBundle:Article:bluemix.html.twig */
class __TwigTemplate_86e2c4bf8da00e8fd26bce7d955d6fc4ea77e384f63ea1a69930b2c43b273a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:bluemix.html.twig", 3);
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
        $__internal_63a7c2a56b75b7572debc29d00bb29ac31dbd7d4a36a87f290e9c233485ba921 = $this->env->getExtension("native_profiler");
        $__internal_63a7c2a56b75b7572debc29d00bb29ac31dbd7d4a36a87f290e9c233485ba921->enter($__internal_63a7c2a56b75b7572debc29d00bb29ac31dbd7d4a36a87f290e9c233485ba921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:bluemix.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a7c2a56b75b7572debc29d00bb29ac31dbd7d4a36a87f290e9c233485ba921->leave($__internal_63a7c2a56b75b7572debc29d00bb29ac31dbd7d4a36a87f290e9c233485ba921_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e16f62d65e1f7d14b3a8cf29db90801a90000fde43551db17028c10a91d75f1 = $this->env->getExtension("native_profiler");
        $__internal_7e16f62d65e1f7d14b3a8cf29db90801a90000fde43551db17028c10a91d75f1->enter($__internal_7e16f62d65e1f7d14b3a8cf29db90801a90000fde43551db17028c10a91d75f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e16f62d65e1f7d14b3a8cf29db90801a90000fde43551db17028c10a91d75f1->leave($__internal_7e16f62d65e1f7d14b3a8cf29db90801a90000fde43551db17028c10a91d75f1_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_9002bd0aee9038dac220b74b96331447afda21dc4e2380f097dd30ecb6246efe = $this->env->getExtension("native_profiler");
        $__internal_9002bd0aee9038dac220b74b96331447afda21dc4e2380f097dd30ecb6246efe->enter($__internal_9002bd0aee9038dac220b74b96331447afda21dc4e2380f097dd30ecb6246efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>A propos de Nous</h2>

  <p>
   
      Information :</br>
      </br>

      Bluemix\t\t

 </p>   

";
        
        $__internal_9002bd0aee9038dac220b74b96331447afda21dc4e2380f097dd30ecb6246efe->leave($__internal_9002bd0aee9038dac220b74b96331447afda21dc4e2380f097dd30ecb6246efe_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:bluemix.html.twig";
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
/* {# src/MehdiBundle/Resources/views/Article/micro_geolocalisation.html.twig #}*/
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
/*       Bluemix		*/
/* */
/*  </p>   */
/* */
/* {% endblock %}*/
