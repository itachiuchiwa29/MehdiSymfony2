<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_55c0007ba71799118064dab6f22fcaeb57c6ed447e42635f6a1adc90f3c9454c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1dd1e4d6881892f41b350bd0657650939562c1ad4787d4f753be4d25adcdd25 = $this->env->getExtension("native_profiler");
        $__internal_e1dd1e4d6881892f41b350bd0657650939562c1ad4787d4f753be4d25adcdd25->enter($__internal_e1dd1e4d6881892f41b350bd0657650939562c1ad4787d4f753be4d25adcdd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1dd1e4d6881892f41b350bd0657650939562c1ad4787d4f753be4d25adcdd25->leave($__internal_e1dd1e4d6881892f41b350bd0657650939562c1ad4787d4f753be4d25adcdd25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c35d88c674e395d3ca868f9ebe59a6e493ee32a16df9db20f0f9b8d352080cd = $this->env->getExtension("native_profiler");
        $__internal_4c35d88c674e395d3ca868f9ebe59a6e493ee32a16df9db20f0f9b8d352080cd->enter($__internal_4c35d88c674e395d3ca868f9ebe59a6e493ee32a16df9db20f0f9b8d352080cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 5)->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_4c35d88c674e395d3ca868f9ebe59a6e493ee32a16df9db20f0f9b8d352080cd->leave($__internal_4c35d88c674e395d3ca868f9ebe59a6e493ee32a16df9db20f0f9b8d352080cd_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0c203a426e50347a46f1b47523e2051dab8bf69d55642080db9979f319dfad6 = $this->env->getExtension("native_profiler");
        $__internal_b0c203a426e50347a46f1b47523e2051dab8bf69d55642080db9979f319dfad6->enter($__internal_b0c203a426e50347a46f1b47523e2051dab8bf69d55642080db9979f319dfad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_b0c203a426e50347a46f1b47523e2051dab8bf69d55642080db9979f319dfad6->leave($__internal_b0c203a426e50347a46f1b47523e2051dab8bf69d55642080db9979f319dfad6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="content">*/
/*         {% include '@WebProfiler/Profiler/header.html.twig' only %}*/
/* */
/*         <div id="main">*/
/*             <div class="clear-fix">*/
/*                 <div id="collector-wrapper">*/
/*                     <div id="collector-content">*/
/*                         {% block panel %}*/
/*                             {% if about == 'purge' %}*/
/*                                 <h2>The profiler database was purged successfully</h2>*/
/*                                 <p>*/
/*                                     <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'upload_error' %}*/
/*                                 <h2>A problem occurred when uploading the data</h2>*/
/*                                 <p>*/
/*                                     <em>No file given or the file was not uploaded successfully.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'already_exists' %}*/
/*                                 <h2>A problem occurred when uploading the data</h2>*/
/*                                 <p>*/
/*                                     <em>The token already exists in the database.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'no_token' %}*/
/*                                 <h2>Token not found</h2>*/
/*                                 <p>*/
/*                                     <em>Token "{{ token }}" was not found in the database.</em>*/
/*                                 </p>*/
/*                             {% endif %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="navigation">*/
/*                     {{ render(path('_profiler_search_bar')) }}*/
/*                     {% include '@WebProfiler/Profiler/admin.html.twig' with { 'token': '' } only %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
