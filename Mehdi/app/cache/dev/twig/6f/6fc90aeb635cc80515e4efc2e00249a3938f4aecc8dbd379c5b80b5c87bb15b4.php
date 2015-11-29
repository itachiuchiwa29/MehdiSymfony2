<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_14455a165371c0551ea46d19684055d08d6bd743c4311625e176419acd0e6516 extends Twig_Template
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
        $__internal_195a85da6653b0e5eaba9358b2367e9d7a96b665ffc85d5e00d5829ede3fd284 = $this->env->getExtension("native_profiler");
        $__internal_195a85da6653b0e5eaba9358b2367e9d7a96b665ffc85d5e00d5829ede3fd284->enter($__internal_195a85da6653b0e5eaba9358b2367e9d7a96b665ffc85d5e00d5829ede3fd284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_195a85da6653b0e5eaba9358b2367e9d7a96b665ffc85d5e00d5829ede3fd284->leave($__internal_195a85da6653b0e5eaba9358b2367e9d7a96b665ffc85d5e00d5829ede3fd284_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
