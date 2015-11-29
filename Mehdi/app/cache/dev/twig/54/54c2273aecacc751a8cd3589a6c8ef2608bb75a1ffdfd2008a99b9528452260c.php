<?php

/* MehdiBundle:Article:view.html.twig */
class __TwigTemplate_385d36d858d7f47af46530998cd0496b3df788d57b229bec2379191d2a78d839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:view.html.twig", 3);
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
        $__internal_9e2cd6d96a01139200e2a575652c15ac55baab2af0915e63fbb87d588c20ec84 = $this->env->getExtension("native_profiler");
        $__internal_9e2cd6d96a01139200e2a575652c15ac55baab2af0915e63fbb87d588c20ec84->enter($__internal_9e2cd6d96a01139200e2a575652c15ac55baab2af0915e63fbb87d588c20ec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e2cd6d96a01139200e2a575652c15ac55baab2af0915e63fbb87d588c20ec84->leave($__internal_9e2cd6d96a01139200e2a575652c15ac55baab2af0915e63fbb87d588c20ec84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c62fda9068e9d108a477d030698a6de1173e00b77f22eed4876e385bea42111 = $this->env->getExtension("native_profiler");
        $__internal_4c62fda9068e9d108a477d030698a6de1173e00b77f22eed4876e385bea42111->enter($__internal_4c62fda9068e9d108a477d030698a6de1173e00b77f22eed4876e385bea42111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c62fda9068e9d108a477d030698a6de1173e00b77f22eed4876e385bea42111->leave($__internal_4c62fda9068e9d108a477d030698a6de1173e00b77f22eed4876e385bea42111_prof);

    }

    // line 9
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_4df30dc248e41ae195bdf3c3e56ac63833ee6e143599e8e020a91cb9dfbb28ef = $this->env->getExtension("native_profiler");
        $__internal_4df30dc248e41ae195bdf3c3e56ac63833ee6e143599e8e020a91cb9dfbb28ef->enter($__internal_4df30dc248e41ae195bdf3c3e56ac63833ee6e143599e8e020a91cb9dfbb28ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        // line 12
        echo "  
  <div>
    ";
        // line 14
        if ( !(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()))) {
            // line 15
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    
    
    ";
        }
        // line 19
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  </div>
  
  <div class=\"well\">

    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "

  </div>
    <div >

   <ul>
 
    ";
        // line 33
        if ( !$this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()), "empty", array())) {
            // line 34
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 38
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
    </p>
    ";
        }
        // line 42
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["listArticleSkills"]) ? $context["listArticleSkills"] : $this->getContext($context, "listArticleSkills"))) > 0)) {
            // line 43
            echo "  
  </ul>
  </div>
    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listArticleSkills"]) ? $context["listArticleSkills"] : $this->getContext($context, "listArticleSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["ArticleSkill"]) {
                // line 50
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleSkill"]) ? $context["articleSkill"] : $this->getContext($context, "articleSkill")), "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleSkill"]) ? $context["articleSkill"] : $this->getContext($context, "articleSkill")), "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ArticleSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </ul>
    </div>
  ";
        }
        // line 55
        echo "  <p>
    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("mehdi_ListArticle");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    ";
        // line 60
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            echo "  
      <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mehdi_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        Modifier l'annonce
      </a>
    ";
        }
        // line 66
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            echo "  
      <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mehdi_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
       <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
     </a>
    ";
        }
        // line 72
        echo "    
  </p>

";
        
        $__internal_4df30dc248e41ae195bdf3c3e56ac63833ee6e143599e8e020a91cb9dfbb28ef->leave($__internal_4df30dc248e41ae195bdf3c3e56ac63833ee6e143599e8e020a91cb9dfbb28ef_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 72,  209 => 67,  204 => 66,  196 => 61,  192 => 60,  185 => 56,  182 => 55,  177 => 52,  166 => 50,  162 => 49,  154 => 43,  151 => 42,  146 => 39,  132 => 38,  126 => 37,  109 => 36,  105 => 34,  103 => 33,  93 => 26,  82 => 20,  77 => 19,  67 => 15,  65 => 14,  61 => 12,  59 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/MehdiBundle/Resources/view/Article/view.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mehdi_body %}*/
/*   {# On vérifie qu'une image soit bien associée à l'annonce #}*/
/*   {#Je sais pas pour quoi image n'est null mais ça marche pas#}*/
/*   */
/*   <div>*/
/*     {% if article.image is not null %}*/
/*       <img src="{{ article.image.url }}" alt="{{ article.image.alt }}">*/
/*     */
/*     */
/*     {% endif %}*/
/*     <h2>{{ article.title }}</h2>*/
/*     <i>Par {{ article.author }}, le {{ article.date|date('d/m/Y') }}</i>*/
/* */
/*   </div>*/
/*   */
/*   <div class="well">*/
/* */
/*     {{ article.content }}*/
/* */
/*   </div>*/
/*     <div >*/
/* */
/*    <ul>*/
/*  */
/*     {% if not article.categories.empty %}*/
/*     <p>*/
/*       Cette annonce est parue dans les catégories suivantes :*/
/*       {% for category in article.categories %}*/
/*         {{ category.name }}{% if not loop.last %}, {% endif %}*/
/*       {% endfor %}*/
/* */
/*     </p>*/
/*     {% endif %}*/
/*     {% if listArticleSkills|length > 0 %}*/
/*   */
/*   </ul>*/
/*   </div>*/
/*     <div>*/
/*       Cette annonce requiert les compétences suivantes :*/
/*       <ul>*/
/*         {% for ArticleSkill in listArticleSkills %}*/
/*           <li>{{ articleSkill.skill.name }} : niveau {{ articleSkill.level }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/*   <p>*/
/*     <a href="{{ path('mehdi_ListArticle') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     {% if is_granted('ROLE_AUTEUR') %}  */
/*       <a href="{{ path('mehdi_edit', {'id': article.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-edit"></i>*/
/*         Modifier l'annonce*/
/*       </a>*/
/*     {% endif %}*/
/*     {% if is_granted('ROLE_AUTEUR') %}  */
/*       <a href="{{ path('mehdi_delete', {'id': article.id}) }}" class="btn btn-danger">*/
/*        <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*      </a>*/
/*     {% endif %}*/
/*     */
/*   </p>*/
/* */
/* {% endblock %}*/
