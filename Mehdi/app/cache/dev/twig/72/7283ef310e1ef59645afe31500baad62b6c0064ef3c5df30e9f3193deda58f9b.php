<?php

/* MehdiBundle:Article:menu.html.twig */
class __TwigTemplate_c0a2e8c4c270aca66ca63e2d7ed3c4d8b7479024a3f2dab255711cf72d9b101d extends Twig_Template
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
        $__internal_bc5fb900efa8acea82e7ce1c76438496ac6ece06d15c4850dc5869357809e8ad = $this->env->getExtension("native_profiler");
        $__internal_bc5fb900efa8acea82e7ce1c76438496ac6ece06d15c4850dc5869357809e8ad->enter($__internal_bc5fb900efa8acea82e7ce1c76438496ac6ece06d15c4850dc5869357809e8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mehdi_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_bc5fb900efa8acea82e7ce1c76438496ac6ece06d15c4850dc5869357809e8ad->leave($__internal_bc5fb900efa8acea82e7ce1c76438496ac6ece06d15c4850dc5869357809e8ad_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }
}
/* {# src/MehdiBundle/Resources/views/Article/menu.html.twig #}*/
/* */
/* {# Ce template n'hérite de personne,*/
/*    tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for article in listArticles %}*/
/*     <li>*/
/*       <a href="{{ path('mehdi_view', {'id': article.id}) }}">*/
/*         {{ article.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
