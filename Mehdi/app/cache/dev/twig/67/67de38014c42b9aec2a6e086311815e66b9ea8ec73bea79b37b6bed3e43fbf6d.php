<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7702ed5e7f8b47514f45cd282adc9f29da7b43fcc75ecd3de564fc0d1b5efd9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d6cfe2e911d33cbd437f2663c4d798227b15dc98d743e16ba92d3484d592993e = $this->env->getExtension("native_profiler");
        $__internal_d6cfe2e911d33cbd437f2663c4d798227b15dc98d743e16ba92d3484d592993e->enter($__internal_d6cfe2e911d33cbd437f2663c4d798227b15dc98d743e16ba92d3484d592993e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cfe2e911d33cbd437f2663c4d798227b15dc98d743e16ba92d3484d592993e->leave($__internal_d6cfe2e911d33cbd437f2663c4d798227b15dc98d743e16ba92d3484d592993e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34ce888adbc8a1b62a7fc3ae7005def9f03a0ff7f11d6c055bd9f9baa1acda22 = $this->env->getExtension("native_profiler");
        $__internal_34ce888adbc8a1b62a7fc3ae7005def9f03a0ff7f11d6c055bd9f9baa1acda22->enter($__internal_34ce888adbc8a1b62a7fc3ae7005def9f03a0ff7f11d6c055bd9f9baa1acda22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34ce888adbc8a1b62a7fc3ae7005def9f03a0ff7f11d6c055bd9f9baa1acda22->leave($__internal_34ce888adbc8a1b62a7fc3ae7005def9f03a0ff7f11d6c055bd9f9baa1acda22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2940b8a4e96ce76f0437c877cecc5bc5c5138b3dd59140be9787f0f307de5a11 = $this->env->getExtension("native_profiler");
        $__internal_2940b8a4e96ce76f0437c877cecc5bc5c5138b3dd59140be9787f0f307de5a11->enter($__internal_2940b8a4e96ce76f0437c877cecc5bc5c5138b3dd59140be9787f0f307de5a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2940b8a4e96ce76f0437c877cecc5bc5c5138b3dd59140be9787f0f307de5a11->leave($__internal_2940b8a4e96ce76f0437c877cecc5bc5c5138b3dd59140be9787f0f307de5a11_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e2bb993bc266be6c7c4869123662316e5cec0f4355617675ec70d72fc1d2fa9 = $this->env->getExtension("native_profiler");
        $__internal_4e2bb993bc266be6c7c4869123662316e5cec0f4355617675ec70d72fc1d2fa9->enter($__internal_4e2bb993bc266be6c7c4869123662316e5cec0f4355617675ec70d72fc1d2fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e2bb993bc266be6c7c4869123662316e5cec0f4355617675ec70d72fc1d2fa9->leave($__internal_4e2bb993bc266be6c7c4869123662316e5cec0f4355617675ec70d72fc1d2fa9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
