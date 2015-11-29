<?php

/* ::layout-back-up.html.twig */
class __TwigTemplate_aa71ed6dd53abe5789ea5671ab1e64cf1312df2b63c4f768de85e290a344a5fa extends Twig_Template
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
        $__internal_d00908202aec459934d16a7e29275abf344656a2ad78a95bf229f47cdeef64ae = $this->env->getExtension("native_profiler");
        $__internal_d00908202aec459934d16a7e29275abf344656a2ad78a95bf229f47cdeef64ae->enter($__internal_d00908202aec459934d16a7e29275abf344656a2ad78a95bf229f47cdeef64ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout-back-up.html.twig"));

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
        // line 19
        echo "  
</head>

<body>
  <div class=\"container\">

    <div class=\"blog-masthead\">
      <div class=\"container\">
        <nav class=\"blog-nav\">
          <a class=\"blog-nav-item \" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("mehdi_home");
        echo "\">Accueil</a>
          <a class=\"blog-nav-item\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("mehdi_About");
        echo "\">A propos de nous</a>
          <a class=\"blog-nav-item \" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("mehdi_ListArticle");
        echo "\">Liste des articles</a>
          ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            echo "  
            <a class=\"blog-nav-item\" href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("mehdi_add");
            echo "\">Ajouter</a>
          ";
        }
        // line 34
        echo "          <a class=\"blog-nav-item\" href=\"";
        echo $this->env->getExtension('routing')->getPath("mehdi_contact");
        echo "\">Contact</a>
          ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  
            <a class=\"blog-nav-item\" href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnecter</a>
          ";
        } else {
            // line 38
            echo "            <a class=\"blog-nav-item\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connecter</a>
          ";
        }
        // line 40
        echo "        </nav>
      </div>
    </div>
    <div id=\"header\" class=\"jumbotron\">
      <h1>Cathy</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h4>Dernières annonces</h4>
        ";
        // line 61
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MehdiBundle:Article:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
          ";
        // line 64
        $this->displayBlock('mehdi_body', $context, $blocks);
        // line 66
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>Mehdi's company ";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " THE NUMBER 10 of course.</p>
    </footer>
  </div>

  ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "
</body>
</html>";
        
        $__internal_d00908202aec459934d16a7e29275abf344656a2ad78a95bf229f47cdeef64ae->leave($__internal_d00908202aec459934d16a7e29275abf344656a2ad78a95bf229f47cdeef64ae_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ac146eb99ffd8e44ba45d68fc5ca420ae5b229b414b4b89d0a68d7912f7882 = $this->env->getExtension("native_profiler");
        $__internal_68ac146eb99ffd8e44ba45d68fc5ca420ae5b229b414b4b89d0a68d7912f7882->enter($__internal_68ac146eb99ffd8e44ba45d68fc5ca420ae5b229b414b4b89d0a68d7912f7882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mehdi ";
        
        $__internal_68ac146eb99ffd8e44ba45d68fc5ca420ae5b229b414b4b89d0a68d7912f7882->leave($__internal_68ac146eb99ffd8e44ba45d68fc5ca420ae5b229b414b4b89d0a68d7912f7882_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbc5e2610e2065d1810a49e949638af5f68371a62ec78f2486c4e1d734c3857b = $this->env->getExtension("native_profiler");
        $__internal_cbc5e2610e2065d1810a49e949638af5f68371a62ec78f2486c4e1d734c3857b->enter($__internal_cbc5e2610e2065d1810a49e949638af5f68371a62ec78f2486c4e1d734c3857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  ";
        
        $__internal_cbc5e2610e2065d1810a49e949638af5f68371a62ec78f2486c4e1d734c3857b->leave($__internal_cbc5e2610e2065d1810a49e949638af5f68371a62ec78f2486c4e1d734c3857b_prof);

    }

    // line 64
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_2706c11dfffff0274f01635c5b7fa3f05f616da01172faf16fb65cbebd8d8ab6 = $this->env->getExtension("native_profiler");
        $__internal_2706c11dfffff0274f01635c5b7fa3f05f616da01172faf16fb65cbebd8d8ab6->enter($__internal_2706c11dfffff0274f01635c5b7fa3f05f616da01172faf16fb65cbebd8d8ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 65
        echo "          ";
        
        $__internal_2706c11dfffff0274f01635c5b7fa3f05f616da01172faf16fb65cbebd8d8ab6->leave($__internal_2706c11dfffff0274f01635c5b7fa3f05f616da01172faf16fb65cbebd8d8ab6_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0ce128f1f09cb17271439c65dd737c3d1f9a1edb8ea1183a3d0e37e6258eb6b = $this->env->getExtension("native_profiler");
        $__internal_a0ce128f1f09cb17271439c65dd737c3d1f9a1edb8ea1183a3d0e37e6258eb6b->enter($__internal_a0ce128f1f09cb17271439c65dd737c3d1f9a1edb8ea1183a3d0e37e6258eb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        // line 78
        echo "     <script src=\"https://code.jquery.com/jquery-1.11.2.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==\" crossorigin=\"anonymous\"></script>
  ";
        
        $__internal_a0ce128f1f09cb17271439c65dd737c3d1f9a1edb8ea1183a3d0e37e6258eb6b->leave($__internal_a0ce128f1f09cb17271439c65dd737c3d1f9a1edb8ea1183a3d0e37e6258eb6b_prof);

    }

    public function getTemplateName()
    {
        return "::layout-back-up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 78,  208 => 77,  202 => 76,  195 => 65,  189 => 64,  180 => 18,  176 => 17,  173 => 16,  167 => 15,  155 => 13,  146 => 84,  144 => 76,  137 => 72,  129 => 66,  127 => 64,  121 => 61,  98 => 40,  92 => 38,  87 => 36,  83 => 35,  78 => 34,  73 => 32,  69 => 31,  65 => 30,  61 => 29,  57 => 28,  46 => 19,  44 => 15,  39 => 13,  26 => 2,);
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
/*     <link href="{{ asset('bootstrap/css/blog.css') }}" rel="stylesheet"/>*/
/*   {% endblock %}  */
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/* */
/*     <div class="blog-masthead">*/
/*       <div class="container">*/
/*         <nav class="blog-nav">*/
/*           <a class="blog-nav-item " href="{{ path('mehdi_home') }}">Accueil</a>*/
/*           <a class="blog-nav-item" href="{{ path('mehdi_About') }}">A propos de nous</a>*/
/*           <a class="blog-nav-item " href="{{ path('mehdi_ListArticle') }}">Liste des articles</a>*/
/*           {% if is_granted('ROLE_AUTEUR') %}  */
/*             <a class="blog-nav-item" href="{{ path('mehdi_add') }}">Ajouter</a>*/
/*           {% endif %}*/
/*           <a class="blog-nav-item" href="{{ path('mehdi_contact') }}">Contact</a>*/
/*           {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}  */
/*             <a class="blog-nav-item" href="{{ path('logout') }}">Déconnecter</a>*/
/*           {% else %}*/
/*             <a class="blog-nav-item" href="{{ path('login') }}">Connecter</a>*/
/*           {% endif %}*/
/*         </nav>*/
/*       </div>*/
/*     </div>*/
/*     <div id="header" class="jumbotron">*/
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
/*     </div>*/
/* */
/*     */
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("MehdiBundle:Article:menu", {'limit': 3})) }}*/
/*       </div>*/
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
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
