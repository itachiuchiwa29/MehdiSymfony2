<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_80cc2be13d80a3109bbf8793b202d74a0a21534f5e3cfb7d687dafaf0c5756c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edae546b13808cf367ba032c4864b97111ce8680acc8fea135c4a9b2447c1fe1 = $this->env->getExtension("native_profiler");
        $__internal_edae546b13808cf367ba032c4864b97111ce8680acc8fea135c4a9b2447c1fe1->enter($__internal_edae546b13808cf367ba032c4864b97111ce8680acc8fea135c4a9b2447c1fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_edae546b13808cf367ba032c4864b97111ce8680acc8fea135c4a9b2447c1fe1->leave($__internal_edae546b13808cf367ba032c4864b97111ce8680acc8fea135c4a9b2447c1fe1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_88b4af2fea913e29aeb3dff4bbdd0289b44e723ad32702b8b1d03ec5991c62b6 = $this->env->getExtension("native_profiler");
        $__internal_88b4af2fea913e29aeb3dff4bbdd0289b44e723ad32702b8b1d03ec5991c62b6->enter($__internal_88b4af2fea913e29aeb3dff4bbdd0289b44e723ad32702b8b1d03ec5991c62b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_88b4af2fea913e29aeb3dff4bbdd0289b44e723ad32702b8b1d03ec5991c62b6->leave($__internal_88b4af2fea913e29aeb3dff4bbdd0289b44e723ad32702b8b1d03ec5991c62b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e659fe2b7fbac1bf723c1937b5f9c364a0b6103949503863a74db45b338da773 = $this->env->getExtension("native_profiler");
        $__internal_e659fe2b7fbac1bf723c1937b5f9c364a0b6103949503863a74db45b338da773->enter($__internal_e659fe2b7fbac1bf723c1937b5f9c364a0b6103949503863a74db45b338da773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_e659fe2b7fbac1bf723c1937b5f9c364a0b6103949503863a74db45b338da773->leave($__internal_e659fe2b7fbac1bf723c1937b5f9c364a0b6103949503863a74db45b338da773_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb5d6d204715494bf553c98ed365c1377d3c6417e943931b6ebb79658af1dcd6 = $this->env->getExtension("native_profiler");
        $__internal_cb5d6d204715494bf553c98ed365c1377d3c6417e943931b6ebb79658af1dcd6->enter($__internal_cb5d6d204715494bf553c98ed365c1377d3c6417e943931b6ebb79658af1dcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_cb5d6d204715494bf553c98ed365c1377d3c6417e943931b6ebb79658af1dcd6->leave($__internal_cb5d6d204715494bf553c98ed365c1377d3c6417e943931b6ebb79658af1dcd6_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8299a362589af247d9a7df1d5ef703f0128109eac340a76a8f12a96a8f2b13ce = $this->env->getExtension("native_profiler");
        $__internal_8299a362589af247d9a7df1d5ef703f0128109eac340a76a8f12a96a8f2b13ce->enter($__internal_8299a362589af247d9a7df1d5ef703f0128109eac340a76a8f12a96a8f2b13ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_8299a362589af247d9a7df1d5ef703f0128109eac340a76a8f12a96a8f2b13ce->leave($__internal_8299a362589af247d9a7df1d5ef703f0128109eac340a76a8f12a96a8f2b13ce_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title 'CoreSphere Console' %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/coresphereconsole/css/base.css') }}" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body '' %}*/
/*         {% block javascripts %}*/
/*             {# Load jQuery from Google CDN with a local fallback when not laded yet #}*/
/*             <script>*/
/*             window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"><\/script>')*/
/*             </script>*/
/*             <script>*/
/*             window.jQuery || document.write("<script src=\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\"><\/script>");*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
