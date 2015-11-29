<?php

/* MehdiBundle:Article:form.html.twig */
class __TwigTemplate_1f59462ad35275f7e68474cc27ce1d5e572277867eb0c6d29163c4e474639c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24004f08c7033f4c4710617dfb5c9bf006a5a104cead8b3f194a362078b9a54e = $this->env->getExtension("native_profiler");
        $__internal_24004f08c7033f4c4710617dfb5c9bf006a5a104cead8b3f194a362078b9a54e->enter($__internal_24004f08c7033f4c4710617dfb5c9bf006a5a104cead8b3f194a362078b9a54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 12
        echo "    <div class=\"form-group\">
      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
        echo "

      ";
        // line 17
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 21
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

      </div>
    </div>

    ";
        // line 27
        echo "    <div class=\"form-group\">
      ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 36
        echo "    <div class=\"form-group\">
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur"));
        echo "
      ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

   

  ";
        // line 47
        echo "  ";
        // line 48
        echo "  <div class=\"form-group\">
 
      ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
       ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo " ";
        // line 53
        echo "      </div>
    </div>

    ";
        // line 57
        echo "    ";
        // line 65
        echo "
  

  ";
        // line 69
        echo "  </br>

  ";
        // line 72
        echo "    <div class=\"form-group\">
 
      ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
       ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo " ";
        // line 77
        echo "      </div>
    </div>


  

  ";
        // line 86
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 89
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_24004f08c7033f4c4710617dfb5c9bf006a5a104cead8b3f194a362078b9a54e->leave($__internal_24004f08c7033f4c4710617dfb5c9bf006a5a104cead8b3f194a362078b9a54e_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 89,  155 => 86,  147 => 77,  144 => 76,  139 => 74,  135 => 72,  131 => 69,  126 => 65,  124 => 57,  119 => 53,  116 => 52,  111 => 50,  107 => 48,  105 => 47,  96 => 40,  91 => 38,  87 => 37,  84 => 36,  77 => 31,  72 => 29,  68 => 28,  65 => 27,  56 => 21,  49 => 17,  43 => 14,  40 => 12,  34 => 9,  32 => 8,  28 => 6,  22 => 2,);
    }
}
/* {# src/MehdiBundle/Resources/views/Article/form.html.twig #}*/
/* */
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*   {#<form method="post" {{ form_enctype(form) }}>#}*/
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*     {#Titre#}*/
/*     <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.title, "Titre de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.title) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*     {# Contenu de l'article. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.content, "Contenu de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {# Auteur. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.author, "Auteur", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.author) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*    */
/* */
/*   {# Génération du label + error + widget pour un champ #}*/
/*   {# date #}*/
/*   <div class="form-group">*/
/*  */
/*       {{ form_errors(form.date) }}*/
/*       <div class="col-sm-4">*/
/*        {{ form_row(form.date,{'label_attr': {'class': 'col-sm-3 control-label'}} ) }} {# Affiche la case iamge #}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {# image #}*/
/*     {#<div class="form-group">*/
/*  */
/*       {{ form_errors(form.image) }}*/
/*       <div class="col-sm-4">*/
/*        {{ form_row(form.image) }} */
/*       </div>*/
/*     </div>*/
/*     #}*/
/* */
/*   */
/* */
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   </br>*/
/* */
/*   {# published. #}*/
/*     <div class="form-group">*/
/*  */
/*       {{ form_errors(form.published) }}*/
/*       <div class="col-sm-4">*/
/*        {{ form_row(form.published) }} {# Affiche la case publier #}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*   */
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*   {{ form_rest(form) }}*/
/*   */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
