<?php

/* MehdiBundle:Article:ListArticle.html.twig */
class __TwigTemplate_e06b12a113446f3f31872c031b4b529c38b090a6ecc5df6185be46cb4bb0356f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:ListArticle.html.twig", 3);
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
        $__internal_b3d50d05730c92ff5ba3890910a47819a54bd16d2202caecf8b3434fd1e15b4b = $this->env->getExtension("native_profiler");
        $__internal_b3d50d05730c92ff5ba3890910a47819a54bd16d2202caecf8b3434fd1e15b4b->enter($__internal_b3d50d05730c92ff5ba3890910a47819a54bd16d2202caecf8b3434fd1e15b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:ListArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d50d05730c92ff5ba3890910a47819a54bd16d2202caecf8b3434fd1e15b4b->leave($__internal_b3d50d05730c92ff5ba3890910a47819a54bd16d2202caecf8b3434fd1e15b4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e31af913c9bd87c73bedb0030c9422974ac4cdfe2c3665e01eddaed7e2feb711 = $this->env->getExtension("native_profiler");
        $__internal_e31af913c9bd87c73bedb0030c9422974ac4cdfe2c3665e01eddaed7e2feb711->enter($__internal_e31af913c9bd87c73bedb0030c9422974ac4cdfe2c3665e01eddaed7e2feb711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e31af913c9bd87c73bedb0030c9422974ac4cdfe2c3665e01eddaed7e2feb711->leave($__internal_e31af913c9bd87c73bedb0030c9422974ac4cdfe2c3665e01eddaed7e2feb711_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_8e06bee76555d12c515167c49736f0a15e38735422a2bd57579c0b2949fdf7ea = $this->env->getExtension("native_profiler");
        $__internal_8e06bee76555d12c515167c49736f0a15e38735422a2bd57579c0b2949fdf7ea->enter($__internal_8e06bee76555d12c515167c49736f0a15e38735422a2bd57579c0b2949fdf7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "
  <h2>Liste des annonces:</h2>

  <p>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mehdi_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-Y"), "html", null, true);
            echo "  par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "   

 </p>   

";
        
        $__internal_8e06bee76555d12c515167c49736f0a15e38735422a2bd57579c0b2949fdf7ea->leave($__internal_8e06bee76555d12c515167c49736f0a15e38735422a2bd57579c0b2949fdf7ea_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:ListArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  74 => 17,  70 => 16,  67 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdiBundle/Resources/views/Article/ListeArticles.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/*   <h2>Liste des annonces:</h2>*/
/* */
/*   <p>*/
/*     {% for article in listArticles %}*/
/*       <li>*/
/*         <a href="{{ path('mehdi_view', {'id': article.id}) }}">*/
/*           {{ article.title }}, le {{ article.date|date('d-m-Y') }}  par {{article.author}}*/
/*         </a>*/
/*       </li>*/
/*     {% endfor %}   */
/* */
/*  </p>   */
/* */
/* {% endblock %}*/
/* */
