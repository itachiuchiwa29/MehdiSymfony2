<?php

/* MehdiBundle:Default:index.html.twig */
class __TwigTemplate_b4bf12413be1258651ed410fdf79dd68937b6bc53e6c5dcf930543e53288886b extends Twig_Template
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
        $__internal_46a90d869a2564f1894f9414785ff459eb3dedcd364403de3380b64f9a19060c = $this->env->getExtension("native_profiler");
        $__internal_46a90d869a2564f1894f9414785ff459eb3dedcd364403de3380b64f9a19060c->enter($__internal_46a90d869a2564f1894f9414785ff459eb3dedcd364403de3380b64f9a19060c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_46a90d869a2564f1894f9414785ff459eb3dedcd364403de3380b64f9a19060c->leave($__internal_46a90d869a2564f1894f9414785ff459eb3dedcd364403de3380b64f9a19060c_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
