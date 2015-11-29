<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b28965fb20979762ed86a686d4bb389bf3050ae5d55fade2e481849f27ec926b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29345c5001fb5bac3e6270292d8959e09d8b04088a4ca7f7b4cd85b390a272c2 = $this->env->getExtension("native_profiler");
        $__internal_29345c5001fb5bac3e6270292d8959e09d8b04088a4ca7f7b4cd85b390a272c2->enter($__internal_29345c5001fb5bac3e6270292d8959e09d8b04088a4ca7f7b4cd85b390a272c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_29345c5001fb5bac3e6270292d8959e09d8b04088a4ca7f7b4cd85b390a272c2->leave($__internal_29345c5001fb5bac3e6270292d8959e09d8b04088a4ca7f7b4cd85b390a272c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ece59d072a8b6f575ba4c72d1e430c0afa6f81ff3710b1b04dbc022196e9c512 = $this->env->getExtension("native_profiler");
        $__internal_ece59d072a8b6f575ba4c72d1e430c0afa6f81ff3710b1b04dbc022196e9c512->enter($__internal_ece59d072a8b6f575ba4c72d1e430c0afa6f81ff3710b1b04dbc022196e9c512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ece59d072a8b6f575ba4c72d1e430c0afa6f81ff3710b1b04dbc022196e9c512->leave($__internal_ece59d072a8b6f575ba4c72d1e430c0afa6f81ff3710b1b04dbc022196e9c512_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
