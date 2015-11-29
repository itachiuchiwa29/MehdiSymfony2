<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5bf9eb1a0a4d27eebb4bcfb9d35fb91e639b91b6431b793e5b507cc640a8961a extends Twig_Template
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
        $__internal_49e0dd26cf76a991882af43528c8790342f1df2d812fb7d675113edc8e84af83 = $this->env->getExtension("native_profiler");
        $__internal_49e0dd26cf76a991882af43528c8790342f1df2d812fb7d675113edc8e84af83->enter($__internal_49e0dd26cf76a991882af43528c8790342f1df2d812fb7d675113edc8e84af83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_49e0dd26cf76a991882af43528c8790342f1df2d812fb7d675113edc8e84af83->leave($__internal_49e0dd26cf76a991882af43528c8790342f1df2d812fb7d675113edc8e84af83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
