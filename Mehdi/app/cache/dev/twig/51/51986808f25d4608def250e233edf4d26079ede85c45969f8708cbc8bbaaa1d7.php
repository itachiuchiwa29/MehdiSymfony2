<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5f06873e82904c0f0fca9a9fec1f322c276e8b08332581bb412ab49b3a51c78b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d788fe6a188d6cdd584cc49f795ed29b3fd7043342f7e32f41eedbb05704dc32 = $this->env->getExtension("native_profiler");
        $__internal_d788fe6a188d6cdd584cc49f795ed29b3fd7043342f7e32f41eedbb05704dc32->enter($__internal_d788fe6a188d6cdd584cc49f795ed29b3fd7043342f7e32f41eedbb05704dc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d788fe6a188d6cdd584cc49f795ed29b3fd7043342f7e32f41eedbb05704dc32->leave($__internal_d788fe6a188d6cdd584cc49f795ed29b3fd7043342f7e32f41eedbb05704dc32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9517f2bcdf168d74bdf7d7818e95939d67cd48ad90445e89ec319e06912132c7 = $this->env->getExtension("native_profiler");
        $__internal_9517f2bcdf168d74bdf7d7818e95939d67cd48ad90445e89ec319e06912132c7->enter($__internal_9517f2bcdf168d74bdf7d7818e95939d67cd48ad90445e89ec319e06912132c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9517f2bcdf168d74bdf7d7818e95939d67cd48ad90445e89ec319e06912132c7->leave($__internal_9517f2bcdf168d74bdf7d7818e95939d67cd48ad90445e89ec319e06912132c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6673e572c4bdaa440a3ecf2d259eee87940c4e87aa8638839597e8174db49c0 = $this->env->getExtension("native_profiler");
        $__internal_a6673e572c4bdaa440a3ecf2d259eee87940c4e87aa8638839597e8174db49c0->enter($__internal_a6673e572c4bdaa440a3ecf2d259eee87940c4e87aa8638839597e8174db49c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a6673e572c4bdaa440a3ecf2d259eee87940c4e87aa8638839597e8174db49c0->leave($__internal_a6673e572c4bdaa440a3ecf2d259eee87940c4e87aa8638839597e8174db49c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
