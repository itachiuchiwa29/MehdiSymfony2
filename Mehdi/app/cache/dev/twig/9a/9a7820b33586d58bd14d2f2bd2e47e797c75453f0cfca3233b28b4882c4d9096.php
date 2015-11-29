<?php

/* MehdiBundle:Article:add.html.twig */
class __TwigTemplate_50be1e752d76c86ed7f5c42236f061a56833a09d3222c20328627d345b9a9e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:add.html.twig", 3);
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
        $__internal_b5623f93577651ec5e6e782d0c09931491809c8976b46b50958eab3557af6eea = $this->env->getExtension("native_profiler");
        $__internal_b5623f93577651ec5e6e782d0c09931491809c8976b46b50958eab3557af6eea->enter($__internal_b5623f93577651ec5e6e782d0c09931491809c8976b46b50958eab3557af6eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5623f93577651ec5e6e782d0c09931491809c8976b46b50958eab3557af6eea->leave($__internal_b5623f93577651ec5e6e782d0c09931491809c8976b46b50958eab3557af6eea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d3042e844c7c5e2b7b9c01163633d12f7f4041cd1742f9ce94f78a49710e4a6 = $this->env->getExtension("native_profiler");
        $__internal_1d3042e844c7c5e2b7b9c01163633d12f7f4041cd1742f9ce94f78a49710e4a6->enter($__internal_1d3042e844c7c5e2b7b9c01163633d12f7f4041cd1742f9ce94f78a49710e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1d3042e844c7c5e2b7b9c01163633d12f7f4041cd1742f9ce94f78a49710e4a6->leave($__internal_1d3042e844c7c5e2b7b9c01163633d12f7f4041cd1742f9ce94f78a49710e4a6_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_34060a8090ad3ebf99c659ac886e25daf41ef230997dec930c9949b6125cd69b = $this->env->getExtension("native_profiler");
        $__internal_34060a8090ad3ebf99c659ac886e25daf41ef230997dec930c9949b6125cd69b->enter($__internal_34060a8090ad3ebf99c659ac886e25daf41ef230997dec930c9949b6125cd69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>Ajouter une annonce</h2>
  ";
        // line 13
        echo "  ";
        echo twig_include($this->env, $context, "MehdiBundle:Article:form.html.twig");
        echo "

  <p>
    Lors de l'ajout d'un article, veuiller respecter les règles du site 
  </p>

  <p>
    ";
        // line 24
        echo "  </p>

";
        
        $__internal_34060a8090ad3ebf99c659ac886e25daf41ef230997dec930c9949b6125cd69b->leave($__internal_34060a8090ad3ebf99c659ac886e25daf41ef230997dec930c9949b6125cd69b_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  61 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdiBundle/Resources/views/Article/add.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/*   {#Ajout du formulaire#}*/
/*   {{ include("MehdiBundle:Article:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Lors de l'ajout d'un article, veuiller respecter les règles du site */
/*   </p>*/
/* */
/*   <p>*/
/*     {#<a href="{{ path('mehdi_view', {'id': article.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>#}*/
/*   </p>*/
/* */
/* {% endblock %}*/
