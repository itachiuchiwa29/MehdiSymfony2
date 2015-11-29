<?php

/* MehdiBundle:Article:delete.html.twig */
class __TwigTemplate_6affb346bb1082f33288a8a7f7e6da26ff91ca30308f3f60d2ae6dfc2844b1c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:delete.html.twig", 3);
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
        $__internal_69abc16d5374bd01963d2686aa458a17ffc524a6eb7d2d49764600c827a7a6d5 = $this->env->getExtension("native_profiler");
        $__internal_69abc16d5374bd01963d2686aa458a17ffc524a6eb7d2d49764600c827a7a6d5->enter($__internal_69abc16d5374bd01963d2686aa458a17ffc524a6eb7d2d49764600c827a7a6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69abc16d5374bd01963d2686aa458a17ffc524a6eb7d2d49764600c827a7a6d5->leave($__internal_69abc16d5374bd01963d2686aa458a17ffc524a6eb7d2d49764600c827a7a6d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e53739c6ce82c75139e79155410e44cb9a4f0bcee8ad60610c15a65de7a85ee = $this->env->getExtension("native_profiler");
        $__internal_6e53739c6ce82c75139e79155410e44cb9a4f0bcee8ad60610c15a65de7a85ee->enter($__internal_6e53739c6ce82c75139e79155410e44cb9a4f0bcee8ad60610c15a65de7a85ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Suprimer un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6e53739c6ce82c75139e79155410e44cb9a4f0bcee8ad60610c15a65de7a85ee->leave($__internal_6e53739c6ce82c75139e79155410e44cb9a4f0bcee8ad60610c15a65de7a85ee_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_1fda97b5c7b0ce0d5fcff3f4dd041e13002a9509b0859cebc3f30665fae65a91 = $this->env->getExtension("native_profiler");
        $__internal_1fda97b5c7b0ce0d5fcff3f4dd041e13002a9509b0859cebc3f30665fae65a91->enter($__internal_1fda97b5c7b0ce0d5fcff3f4dd041e13002a9509b0859cebc3f30665fae65a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>Supression réussie</h2>

    <p>Vous avez supprimer l'article  ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " </p>

";
        
        $__internal_1fda97b5c7b0ce0d5fcff3f4dd041e13002a9509b0859cebc3f30665fae65a91->leave($__internal_1fda97b5c7b0ce0d5fcff3f4dd041e13002a9509b0859cebc3f30665fae65a91_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdiBundle/Resources/views/Article/index.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Suprimer un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   <h2>Supression réussie</h2>*/
/* */
/*     <p>Vous avez supprimer l'article  {{id}} </p>*/
/* */
/* {% endblock %}*/
/* */
/* */
