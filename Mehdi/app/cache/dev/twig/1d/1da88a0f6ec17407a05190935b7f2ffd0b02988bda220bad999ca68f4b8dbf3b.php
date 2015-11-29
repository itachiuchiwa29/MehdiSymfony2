<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_9c7a89916b0ed0a7c4b7c5312ef4fb558f08119d4ded37f5580f682b5c8a4e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'mehdi_body' => array($this, 'block_mehdi_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MehdiBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b345c863799e94c868b7371736f1272622b194da55dd7c8e859f42b6054fcffd = $this->env->getExtension("native_profiler");
        $__internal_b345c863799e94c868b7371736f1272622b194da55dd7c8e859f42b6054fcffd->enter($__internal_b345c863799e94c868b7371736f1272622b194da55dd7c8e859f42b6054fcffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b345c863799e94c868b7371736f1272622b194da55dd7c8e859f42b6054fcffd->leave($__internal_b345c863799e94c868b7371736f1272622b194da55dd7c8e859f42b6054fcffd_prof);

    }

    // line 5
    public function block_mehdi_body($context, array $blocks = array())
    {
        $__internal_0206b82c925d63088ad2917faf3e0b286f35f4b6991be68707ea6f555a21dbd4 = $this->env->getExtension("native_profiler");
        $__internal_0206b82c925d63088ad2917faf3e0b286f35f4b6991be68707ea6f555a21dbd4->enter($__internal_0206b82c925d63088ad2917faf3e0b286f35f4b6991be68707ea6f555a21dbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mehdi_body"));

        // line 6
        echo "

</div>
  ";
        // line 10
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 13
        echo "
  ";
        // line 15
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>



</div>

";
        
        $__internal_0206b82c925d63088ad2917faf3e0b286f35f4b6991be68707ea6f555a21dbd4->leave($__internal_0206b82c925d63088ad2917faf3e0b286f35f4b6991be68707ea6f555a21dbd4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  57 => 15,  54 => 13,  48 => 11,  45 => 10,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/UserBundle/Resources/views/Security/login.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block mehdi_body %}*/
/* */
/* */
/* </div>*/
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/* */
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}*/
