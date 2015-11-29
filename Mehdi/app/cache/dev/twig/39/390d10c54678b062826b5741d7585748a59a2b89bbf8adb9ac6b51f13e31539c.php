<?php

/* MehdiBundle:Article:contact.html.twig */
class __TwigTemplate_8677f7b950476bdb3a6aa989d1254577926d45df3c627fdad3a8da00bfaee155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:contact.html.twig", 3);
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
        $__internal_541b4f8116459e2673430ed0696b95b62cfa395cfed28ee5f4b4e3375928f3f8 = $this->env->getExtension("native_profiler");
        $__internal_541b4f8116459e2673430ed0696b95b62cfa395cfed28ee5f4b4e3375928f3f8->enter($__internal_541b4f8116459e2673430ed0696b95b62cfa395cfed28ee5f4b4e3375928f3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541b4f8116459e2673430ed0696b95b62cfa395cfed28ee5f4b4e3375928f3f8->leave($__internal_541b4f8116459e2673430ed0696b95b62cfa395cfed28ee5f4b4e3375928f3f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7428f04781422eec87eb51cf603b6f02e113a9a981685cc1ef4e2da3694ada54 = $this->env->getExtension("native_profiler");
        $__internal_7428f04781422eec87eb51cf603b6f02e113a9a981685cc1ef4e2da3694ada54->enter($__internal_7428f04781422eec87eb51cf603b6f02e113a9a981685cc1ef4e2da3694ada54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Contact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7428f04781422eec87eb51cf603b6f02e113a9a981685cc1ef4e2da3694ada54->leave($__internal_7428f04781422eec87eb51cf603b6f02e113a9a981685cc1ef4e2da3694ada54_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_b172c75ccf05f5673440cd23a208451bc8e5d767c725fcc9504e94e79a33ded2 = $this->env->getExtension("native_profiler");
        $__internal_b172c75ccf05f5673440cd23a208451bc8e5d767c725fcc9504e94e79a33ded2->enter($__internal_b172c75ccf05f5673440cd23a208451bc8e5d767c725fcc9504e94e79a33ded2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>Contactez nous:</h2>

  <ul>
   <p>
      N'hésitez pas à prendre contact si vous avez des questions ou pour avoir de plus ample information sur un sujet.</br></br>
      <h4>Mehdi Ghanemi</h4>
      Responsable communication </br>
      Email: ghanemi@et.esiea.fr </br>
      Tél: 07.82.92.18.33 </br>
      Addresse: 72 avenue Maurice Thorez </br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;94200 Ivry-Sur-Seine</br>
      
      
      
      ";
        // line 26
        echo "   </p>
  </ul>

";
        
        $__internal_b172c75ccf05f5673440cd23a208451bc8e5d767c725fcc9504e94e79a33ded2->leave($__internal_b172c75ccf05f5673440cd23a208451bc8e5d767c725fcc9504e94e79a33ded2_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdiBundle/Resources/views/Article/contact.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Contact - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   <h2>Contactez nous:</h2>*/
/* */
/*   <ul>*/
/*    <p>*/
/*       N'hésitez pas à prendre contact si vous avez des questions ou pour avoir de plus ample information sur un sujet.</br></br>*/
/*       <h4>Mehdi Ghanemi</h4>*/
/*       Responsable communication </br>*/
/*       Email: ghanemi@et.esiea.fr </br>*/
/*       Tél: 07.82.92.18.33 </br>*/
/*       Addresse: 72 avenue Maurice Thorez </br>*/
/*       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;94200 Ivry-Sur-Seine</br>*/
/*       */
/*       */
/*       */
/*       {#&nbsp; signifie espace #}*/
/*    </p>*/
/*   </ul>*/
/* */
/* {% endblock %}*/
