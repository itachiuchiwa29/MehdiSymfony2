<?php

/* MehdiBundle:Article:edit.html.twig */
class __TwigTemplate_dc0dd5f0d6d904b5ae124dc605df4203594b0acbf2720ae898e3b9faa872fa32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:edit.html.twig", 3);
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
        $__internal_fa9c6c461868904d0c70934998c4ea9ae0a563c8ff442bb686bc54ba2870fc36 = $this->env->getExtension("native_profiler");
        $__internal_fa9c6c461868904d0c70934998c4ea9ae0a563c8ff442bb686bc54ba2870fc36->enter($__internal_fa9c6c461868904d0c70934998c4ea9ae0a563c8ff442bb686bc54ba2870fc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9c6c461868904d0c70934998c4ea9ae0a563c8ff442bb686bc54ba2870fc36->leave($__internal_fa9c6c461868904d0c70934998c4ea9ae0a563c8ff442bb686bc54ba2870fc36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebe05c139d580a83f46171087557d74da6f5bd038ccd869f42162f42a2903977 = $this->env->getExtension("native_profiler");
        $__internal_ebe05c139d580a83f46171087557d74da6f5bd038ccd869f42162f42a2903977->enter($__internal_ebe05c139d580a83f46171087557d74da6f5bd038ccd869f42162f42a2903977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ebe05c139d580a83f46171087557d74da6f5bd038ccd869f42162f42a2903977->leave($__internal_ebe05c139d580a83f46171087557d74da6f5bd038ccd869f42162f42a2903977_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_b38970dd5a44dced6af6402393ab4e3ca6ae2de974838a4b4f4a3769580d7cdb = $this->env->getExtension("native_profiler");
        $__internal_b38970dd5a44dced6af6402393ab4e3ca6ae2de974838a4b4f4a3769580d7cdb->enter($__internal_b38970dd5a44dced6af6402393ab4e3ca6ae2de974838a4b4f4a3769580d7cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "MehdiBundle:Article:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mehdi_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_b38970dd5a44dced6af6402393ab4e3ca6ae2de974838a4b4f4a3769580d7cdb->leave($__internal_b38970dd5a44dced6af6402393ab4e3ca6ae2de974838a4b4f4a3769580d7cdb_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdimBundle/Resources/views/Article/edit.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("MehdiBundle:Article:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('mehdi_view', {'id': article.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
