<?php

/* MehdiBundle:Article:bonus.html.twig */
class __TwigTemplate_9ce20227be37dd2aeb00b7826b2e8c20cc2e4a59a3ae49382009e7dc974ec4d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MehdiBundle::layout.html.twig", "MehdiBundle:Article:bonus.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MehdiBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36db130e03dc0115363f56c88d440268d2c9b02f3e6fb0fb1dcbadcd595b106a = $this->env->getExtension("native_profiler");
        $__internal_36db130e03dc0115363f56c88d440268d2c9b02f3e6fb0fb1dcbadcd595b106a->enter($__internal_36db130e03dc0115363f56c88d440268d2c9b02f3e6fb0fb1dcbadcd595b106a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MehdiBundle:Article:bonus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36db130e03dc0115363f56c88d440268d2c9b02f3e6fb0fb1dcbadcd595b106a->leave($__internal_36db130e03dc0115363f56c88d440268d2c9b02f3e6fb0fb1dcbadcd595b106a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d09d67e11632b6a292fcd522fff024cf84af3b00d2bdb27f4d51d35e46c98c76 = $this->env->getExtension("native_profiler");
        $__internal_d09d67e11632b6a292fcd522fff024cf84af3b00d2bdb27f4d51d35e46c98c76->enter($__internal_d09d67e11632b6a292fcd522fff024cf84af3b00d2bdb27f4d51d35e46c98c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_d09d67e11632b6a292fcd522fff024cf84af3b00d2bdb27f4d51d35e46c98c76->leave($__internal_d09d67e11632b6a292fcd522fff024cf84af3b00d2bdb27f4d51d35e46c98c76_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4ca87c0f8ba17ce614b32fbd8622d1c4d73d4365ad1414ae58c1f2035299bda = $this->env->getExtension("native_profiler");
        $__internal_e4ca87c0f8ba17ce614b32fbd8622d1c4d73d4365ad1414ae58c1f2035299bda->enter($__internal_e4ca87c0f8ba17ce614b32fbd8622d1c4d73d4365ad1414ae58c1f2035299bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  Notre plateforme est un peu vide pour le moment, mais cela viendra !
";
        
        $__internal_e4ca87c0f8ba17ce614b32fbd8622d1c4d73d4365ad1414ae58c1f2035299bda->leave($__internal_e4ca87c0f8ba17ce614b32fbd8622d1c4d73d4365ad1414ae58c1f2035299bda_prof);

    }

    public function getTemplateName()
    {
        return "MehdiBundle:Article:bonus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  48 => 7,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "MehdiBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/*   Notre plateforme est un peu vide pour le moment, mais cela viendra !*/
/* {% endblock %}*/
