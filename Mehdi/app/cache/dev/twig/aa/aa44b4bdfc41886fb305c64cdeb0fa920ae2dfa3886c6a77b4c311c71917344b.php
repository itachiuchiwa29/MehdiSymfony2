<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a024d445c6a0de08eb3a2d076a7d4bc8e8b8d7ca2d2382d21b7586bbef2ec3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_693238c3f339aef14b5c54380efdc298c851e0d9e85d21c36efbb3cb7f04db48 = $this->env->getExtension("native_profiler");
        $__internal_693238c3f339aef14b5c54380efdc298c851e0d9e85d21c36efbb3cb7f04db48->enter($__internal_693238c3f339aef14b5c54380efdc298c851e0d9e85d21c36efbb3cb7f04db48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693238c3f339aef14b5c54380efdc298c851e0d9e85d21c36efbb3cb7f04db48->leave($__internal_693238c3f339aef14b5c54380efdc298c851e0d9e85d21c36efbb3cb7f04db48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7979868ac59ee365603cce6691614ab632853338b1687963aab26a3b8d4e6f5 = $this->env->getExtension("native_profiler");
        $__internal_e7979868ac59ee365603cce6691614ab632853338b1687963aab26a3b8d4e6f5->enter($__internal_e7979868ac59ee365603cce6691614ab632853338b1687963aab26a3b8d4e6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e7979868ac59ee365603cce6691614ab632853338b1687963aab26a3b8d4e6f5->leave($__internal_e7979868ac59ee365603cce6691614ab632853338b1687963aab26a3b8d4e6f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6106f153b391a1413e897698cd6b4a40a8c3a1ace4260351038717730ae86198 = $this->env->getExtension("native_profiler");
        $__internal_6106f153b391a1413e897698cd6b4a40a8c3a1ace4260351038717730ae86198->enter($__internal_6106f153b391a1413e897698cd6b4a40a8c3a1ace4260351038717730ae86198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6106f153b391a1413e897698cd6b4a40a8c3a1ace4260351038717730ae86198->leave($__internal_6106f153b391a1413e897698cd6b4a40a8c3a1ace4260351038717730ae86198_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7de8e78832798f30638225b88bd748dcce281b37371dfde58fd02edf7b86a396 = $this->env->getExtension("native_profiler");
        $__internal_7de8e78832798f30638225b88bd748dcce281b37371dfde58fd02edf7b86a396->enter($__internal_7de8e78832798f30638225b88bd748dcce281b37371dfde58fd02edf7b86a396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_7de8e78832798f30638225b88bd748dcce281b37371dfde58fd02edf7b86a396->leave($__internal_7de8e78832798f30638225b88bd748dcce281b37371dfde58fd02edf7b86a396_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1ff4287c7d47dd399e445816dc17a65491a952257c26f895aaf7a0f6444daab5 = $this->env->getExtension("native_profiler");
        $__internal_1ff4287c7d47dd399e445816dc17a65491a952257c26f895aaf7a0f6444daab5->enter($__internal_1ff4287c7d47dd399e445816dc17a65491a952257c26f895aaf7a0f6444daab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1ff4287c7d47dd399e445816dc17a65491a952257c26f895aaf7a0f6444daab5->leave($__internal_1ff4287c7d47dd399e445816dc17a65491a952257c26f895aaf7a0f6444daab5_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
