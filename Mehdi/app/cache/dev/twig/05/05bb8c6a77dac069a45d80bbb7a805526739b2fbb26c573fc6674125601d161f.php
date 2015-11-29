<?php

/* MehdiBundle::layout.html.twig */
class __TwigTemplate_887b7a0938cf197e46dc31c2172413485af8e38efba58c5087b1ef3b441407a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "MehdiBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mehdi_body' => array($this, 'block_mehdi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_577defe9d09708872c9a8eca9bbfd9502877adec2bff0ddc3191489fc58029a3 = $this->env->getExtension("native_profiler");
        $__internal_577defe9d09708872c9a8eca9bbfd9502877adec2bff0ddc3191489fc58029a3->enter($__internal_577defe9d09708872c9a8eca9bbfd9502877adec2bff0ddc3191489fc58029a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577defe9d09708872c9a8eca9bbfd9502877adec2bff0ddc3191489fc58029a3->leave($__internal_577defe9d09708872c9a8eca9bbfd9502877adec2bff0ddc3191489fc58029a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcf2a05b2b7555c6db9312b3caf54438b3916147ef92b133c907c868f6594129 = $this->env->getExtension("native_profiler");
        $__internal_bcf2a05b2b7555c6db9312b3caf54438b3916147ef92b133c907c868f6594129->enter($__internal_bcf2a05b2b7555c6db9312b3caf54438b3916147ef92b133c907c868f6594129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bcf2a05b2b7555c6db9312b3caf54438b3916147ef92b133c907c868f6594129->leave($__internal_bcf2a05b2b7555c6db9312b3caf54438b3916147ef92b133c907c868f6594129_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_8a97f7f1ba0fce90de5529b7e287f36984eaff38f6d357108cdbce9ee35cf60a = $this->env->getExtension("native_profiler");
        $__internal_8a97f7f1ba0fce90de5529b7e287f36984eaff38f6d357108cdbce9ee35cf60a->enter($__internal_8a97f7f1ba0fce90de5529b7e287f36984eaff38f6d357108cdbce9ee35cf60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>



";
        
        $__internal_8a97f7f1ba0fce90de5529b7e287f36984eaff38f6d357108cdbce9ee35cf60a->leave($__internal_8a97f7f1ba0fce90de5529b7e287f36984eaff38f6d357108cdbce9ee35cf60a_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdiBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/* */
/* */
/* {% endblock %}*/
