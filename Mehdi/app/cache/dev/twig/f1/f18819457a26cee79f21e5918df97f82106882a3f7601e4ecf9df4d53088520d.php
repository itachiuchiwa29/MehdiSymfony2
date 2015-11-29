<?php

/* ::layout.html.twig */
class __TwigTemplate_a57ffd6688b618438b5dbb68ebb278445aba9ce23e68d69e10616a42f05c4ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'mehdi_body' => array($this, 'block_mehdi_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac339b9110ca268b4a213fbbcf99d49fd8399fad8660a3b24bebc864c8faa053 = $this->env->getExtension("native_profiler");
        $__internal_ac339b9110ca268b4a213fbbcf99d49fd8399fad8660a3b24bebc864c8faa053->enter($__internal_ac339b9110ca268b4a213fbbcf99d49fd8399fad8660a3b24bebc864c8faa053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"Ce site nous permettra de regarder et présenter notre projet de 4 année sur la microgéolocalisation\">
    <meta name=\"author\" content=\"Mehdi\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "  
</head>

<body>



  <div class=\"container\">
    <section class=\"row\">
      <div class=\"col-lg-12\"> <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/img/estimote-3.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" > </div>
      </section>
    <div class=\"blog-masthead\">
       <div class=\"container\">
      <nav class=\"blog-nav\">
        <ul class=\"nav navbar-nav\">
          <li>  <a class=\"blog-nav-item \" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("mehdi_home");
        echo "\">Accueil</a> </li>
          <li>  <a class=\"blog-nav-item \" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("mehdi_ListArticle");
        echo "\">Liste des articles</a> </li>
          <li class=\"dropdown\"> 
            <a data-toggle=\"dropdown\" class=\"blog-nav-item \" href=\"#\">A propos de nous<b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"blog-nav-item \" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("mehdi_About");
        echo "\">Résumé</a></li>
              <li class=\"divider\"></li>
              <li><a class=\"blog-nav-item \" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("mehdi_micro_geolocalisation");
        echo "\">Micro-géolocalisation</a></li>
              <li><a class=\"blog-nav-item \" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("mehdi_beacon");
        echo "\">Beacon</a></li>
              <li><a class=\"blog-nav-item \" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("mehdi_bluemix");
        echo "\">BlueMix</a></li>
              <li class=\"divider\"></li>
              <li><a class=\"blog-nav-item \" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("mehdi_equipe");
        echo "\">L'équipe</a></li>
            </ul>
          </li>
          ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            echo " 
            <li> <a class=\"blog-nav-item\" href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("mehdi_add");
            echo "\">Ajouter</a> </li>
          ";
        }
        // line 57
        echo "          <li> <a class=\"blog-nav-item\" href=\"";
        echo $this->env->getExtension('routing')->getPath("mehdi_contact");
        echo "\">Contact</a> </li>
          ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
            <li> <a class=\"blog-nav-item\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnecter</a> </li>
          ";
        } else {
            // line 61
            echo "            <li> <a class=\"blog-nav-item\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connecter</a> </li>
          ";
        }
        // line 63
        echo "          
        </ul>
      </nav>
    </div>
    </div>

  </br>
      
      ";
        // line 85
        echo "    

    

    <div class=\"row\">
      ";
        // line 94
        echo "      <div id=\"content\" class=\"col-md-9\">
          ";
        // line 95
        $this->displayBlock('mehdi_body', $context, $blocks);
        // line 97
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>Mehdi's company ";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " THE NUMBER 10 of course.</p>
    </footer>
  </div>

  ";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "
</body>
</html>";
        
        $__internal_ac339b9110ca268b4a213fbbcf99d49fd8399fad8660a3b24bebc864c8faa053->leave($__internal_ac339b9110ca268b4a213fbbcf99d49fd8399fad8660a3b24bebc864c8faa053_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_722825482b2cb51c9eef4d8bdbd49c92ad901b8c466114830e66cd99201b305f = $this->env->getExtension("native_profiler");
        $__internal_722825482b2cb51c9eef4d8bdbd49c92ad901b8c466114830e66cd99201b305f->enter($__internal_722825482b2cb51c9eef4d8bdbd49c92ad901b8c466114830e66cd99201b305f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mehdi ";
        
        $__internal_722825482b2cb51c9eef4d8bdbd49c92ad901b8c466114830e66cd99201b305f->leave($__internal_722825482b2cb51c9eef4d8bdbd49c92ad901b8c466114830e66cd99201b305f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e031de6d09c805875a5bec62b13ffff159f9dde4b7424baa18217fa04bbb484a = $this->env->getExtension("native_profiler");
        $__internal_e031de6d09c805875a5bec62b13ffff159f9dde4b7424baa18217fa04bbb484a->enter($__internal_e031de6d09c805875a5bec62b13ffff159f9dde4b7424baa18217fa04bbb484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   ";
        // line 20
        echo "    <style type=\"text/css\">
      [class*=\"col\"] 
      img { width: 100%; }
      body { margin-top: 10px; }
    </style>
  ";
        
        $__internal_e031de6d09c805875a5bec62b13ffff159f9dde4b7424baa18217fa04bbb484a->leave($__internal_e031de6d09c805875a5bec62b13ffff159f9dde4b7424baa18217fa04bbb484a_prof);

    }

    // line 95
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_3486e911e574fad3714986215f7a50a061b0802746a033719b09f1d7bb8e5e86 = $this->env->getExtension("native_profiler");
        $__internal_3486e911e574fad3714986215f7a50a061b0802746a033719b09f1d7bb8e5e86->enter($__internal_3486e911e574fad3714986215f7a50a061b0802746a033719b09f1d7bb8e5e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 96
        echo "          ";
        
        $__internal_3486e911e574fad3714986215f7a50a061b0802746a033719b09f1d7bb8e5e86->leave($__internal_3486e911e574fad3714986215f7a50a061b0802746a033719b09f1d7bb8e5e86_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4925540d00b4c49e8afdf4630c1998b70c5251135feb135776aba16fb951ac3 = $this->env->getExtension("native_profiler");
        $__internal_a4925540d00b4c49e8afdf4630c1998b70c5251135feb135776aba16fb951ac3->enter($__internal_a4925540d00b4c49e8afdf4630c1998b70c5251135feb135776aba16fb951ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        // line 109
        echo "     <script src=\"https://code.jquery.com/jquery-1.11.2.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==\" crossorigin=\"anonymous\"></script>
   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
  ";
        
        $__internal_a4925540d00b4c49e8afdf4630c1998b70c5251135feb135776aba16fb951ac3->leave($__internal_a4925540d00b4c49e8afdf4630c1998b70c5251135feb135776aba16fb951ac3_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 109,  238 => 108,  232 => 107,  225 => 96,  219 => 95,  207 => 20,  203 => 18,  199 => 17,  196 => 16,  190 => 15,  178 => 13,  169 => 118,  167 => 107,  160 => 103,  152 => 97,  150 => 95,  147 => 94,  140 => 85,  130 => 63,  124 => 61,  119 => 59,  115 => 58,  110 => 57,  105 => 55,  101 => 54,  95 => 51,  90 => 49,  86 => 48,  82 => 47,  77 => 45,  70 => 41,  66 => 40,  57 => 34,  46 => 25,  44 => 15,  39 => 13,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="Ce site nous permettra de regarder et présenter notre projet de 4 année sur la microgéolocalisation">*/
/*     <meta name="author" content="Mehdi">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <title>{% block title %}Mehdi {% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/* */
/*     <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bootstrap/css/blog.css') }}" rel="stylesheet">*/
/*    {# CSS qui fait que les images s'alignent bien #}*/
/*     <style type="text/css">*/
/*       [class*="col"] */
/*       img { width: 100%; }*/
/*       body { margin-top: 10px; }*/
/*     </style>*/
/*   {% endblock %}  */
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/* */
/*   <div class="container">*/
/*     <section class="row">*/
/*       <div class="col-lg-12"> <img src="{{asset('uploads/img/estimote-3.jpg')}}" alt="Logo" > </div>*/
/*       </section>*/
/*     <div class="blog-masthead">*/
/*        <div class="container">*/
/*       <nav class="blog-nav">*/
/*         <ul class="nav navbar-nav">*/
/*           <li>  <a class="blog-nav-item " href="{{ path('mehdi_home') }}">Accueil</a> </li>*/
/*           <li>  <a class="blog-nav-item " href="{{ path('mehdi_ListArticle') }}">Liste des articles</a> </li>*/
/*           <li class="dropdown"> */
/*             <a data-toggle="dropdown" class="blog-nav-item " href="#">A propos de nous<b class="caret"></b></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a class="blog-nav-item " href="{{ path('mehdi_About') }}">Résumé</a></li>*/
/*               <li class="divider"></li>*/
/*               <li><a class="blog-nav-item " href="{{ path('mehdi_micro_geolocalisation') }}">Micro-géolocalisation</a></li>*/
/*               <li><a class="blog-nav-item " href="{{ path('mehdi_beacon') }}">Beacon</a></li>*/
/*               <li><a class="blog-nav-item " href="{{ path('mehdi_bluemix') }}">BlueMix</a></li>*/
/*               <li class="divider"></li>*/
/*               <li><a class="blog-nav-item " href="{{ path('mehdi_equipe') }}">L'équipe</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           {% if is_granted('ROLE_AUTEUR') %} */
/*             <li> <a class="blog-nav-item" href="{{ path('mehdi_add')}}">Ajouter</a> </li>*/
/*           {% endif %}*/
/*           <li> <a class="blog-nav-item" href="{{ path('mehdi_contact')}}">Contact</a> </li>*/
/*           {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %} */
/*             <li> <a class="blog-nav-item" href="{{ path('logout') }}">Déconnecter</a> </li>*/
/*           {% else %}*/
/*             <li> <a class="blog-nav-item" href="{{ path('login') }}">Connecter</a> </li>*/
/*           {% endif %}*/
/*           */
/*         </ul>*/
/*       </nav>*/
/*     </div>*/
/*     </div>*/
/* */
/*   </br>*/
/*       */
/*       {#*/
/*       <div id="header" class="jumbotron">*/
/*       <h1>Cathy</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony2,*/
/*         et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*       </div>*/
/*       #}*/
/*     */
/* */
/*     */
/* */
/*     <div class="row">*/
/*       {#<div id="menu" class="col-md-3">*/
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("MehdiBundle:Article:menu", {'limit': 3})) }}*/
/*       </div>#}*/
/*       <div id="content" class="col-md-9">*/
/*           {% block mehdi_body %}*/
/*           {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>Mehdi's company {{ 'now'|date('Y') }} THE NUMBER 10 of course.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*      <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>*/
/*      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">*/
/* */
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>*/
/*    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/* <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>*/
/* <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
