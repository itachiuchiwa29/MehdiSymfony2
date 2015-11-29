<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_605f283d2bc24ab09507d5c9e9e970c37a5acce459bca391d0f0ec19347709aa extends Twig_Template
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
        $__internal_60177ad11d4a2c8c94f7c999f9fe934e28beed69d7f04f6e3f713bcc9acaa7fb = $this->env->getExtension("native_profiler");
        $__internal_60177ad11d4a2c8c94f7c999f9fe934e28beed69d7f04f6e3f713bcc9acaa7fb->enter($__internal_60177ad11d4a2c8c94f7c999f9fe934e28beed69d7f04f6e3f713bcc9acaa7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_60177ad11d4a2c8c94f7c999f9fe934e28beed69d7f04f6e3f713bcc9acaa7fb->leave($__internal_60177ad11d4a2c8c94f7c999f9fe934e28beed69d7f04f6e3f713bcc9acaa7fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
