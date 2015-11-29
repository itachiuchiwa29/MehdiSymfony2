<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_253cc4b04b28bf734da82086fd7b43da47e5da4ad13e345e582f831fcdbe56e4 extends Twig_Template
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
        $__internal_2a21e6ef9fd7df9540ad7f648c1594b6e2d17581a411eb8c15124c3762b7c8ea = $this->env->getExtension("native_profiler");
        $__internal_2a21e6ef9fd7df9540ad7f648c1594b6e2d17581a411eb8c15124c3762b7c8ea->enter($__internal_2a21e6ef9fd7df9540ad7f648c1594b6e2d17581a411eb8c15124c3762b7c8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2a21e6ef9fd7df9540ad7f648c1594b6e2d17581a411eb8c15124c3762b7c8ea->leave($__internal_2a21e6ef9fd7df9540ad7f648c1594b6e2d17581a411eb8c15124c3762b7c8ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
