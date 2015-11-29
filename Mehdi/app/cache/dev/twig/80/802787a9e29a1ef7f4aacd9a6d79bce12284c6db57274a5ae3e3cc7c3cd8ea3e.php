<?php

/* MehdiBundle:Article:equipe.html.twig */
class __TwigTemplate_7908ae0062051cfb6a568388c5db6903e45157b5a0f7ad19b4a54a9cae504a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:equipe.html.twig", 3);
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
        $__internal_dc84d02e429b1b5bd4092370988e319c6046cb88b679511cb615f2c562e0fd31 = $this->env->getExtension("native_profiler");
        $__internal_dc84d02e429b1b5bd4092370988e319c6046cb88b679511cb615f2c562e0fd31->enter($__internal_dc84d02e429b1b5bd4092370988e319c6046cb88b679511cb615f2c562e0fd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:equipe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc84d02e429b1b5bd4092370988e319c6046cb88b679511cb615f2c562e0fd31->leave($__internal_dc84d02e429b1b5bd4092370988e319c6046cb88b679511cb615f2c562e0fd31_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a199849912e91493f0a79a659038adfdd205bf92ca43c2b0d294bab25772e0b9 = $this->env->getExtension("native_profiler");
        $__internal_a199849912e91493f0a79a659038adfdd205bf92ca43c2b0d294bab25772e0b9->enter($__internal_a199849912e91493f0a79a659038adfdd205bf92ca43c2b0d294bab25772e0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a199849912e91493f0a79a659038adfdd205bf92ca43c2b0d294bab25772e0b9->leave($__internal_a199849912e91493f0a79a659038adfdd205bf92ca43c2b0d294bab25772e0b9_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_1ae572a51c3b2c816e67b5bafef1d7aef1a26ed86fcb029febf6e18acb63628c = $this->env->getExtension("native_profiler");
        $__internal_1ae572a51c3b2c816e67b5bafef1d7aef1a26ed86fcb029febf6e18acb63628c->enter($__internal_1ae572a51c3b2c816e67b5bafef1d7aef1a26ed86fcb029febf6e18acb63628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>A propos de Nous</h2>

  <p>
   
      Information :</br>
      </br>

      Equipe

 </p>   

";
        
        $__internal_1ae572a51c3b2c816e67b5bafef1d7aef1a26ed86fcb029febf6e18acb63628c->leave($__internal_1ae572a51c3b2c816e67b5bafef1d7aef1a26ed86fcb029febf6e18acb63628c_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:equipe.html.twig";
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
/*       Equipe*/
/* */
/*  </p>   */
/* */
/* {% endblock %}*/
