<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c67267dce43f624cf1e3e8edf59ecdd8281393b9c948e0b443d2e6726305823e extends Twig_Template
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
        $__internal_eba5348e199ebfabffb2c0a7d4c3a76fb41f9a4a2097bd3b848e41cc1d0d2d11 = $this->env->getExtension("native_profiler");
        $__internal_eba5348e199ebfabffb2c0a7d4c3a76fb41f9a4a2097bd3b848e41cc1d0d2d11->enter($__internal_eba5348e199ebfabffb2c0a7d4c3a76fb41f9a4a2097bd3b848e41cc1d0d2d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_eba5348e199ebfabffb2c0a7d4c3a76fb41f9a4a2097bd3b848e41cc1d0d2d11->leave($__internal_eba5348e199ebfabffb2c0a7d4c3a76fb41f9a4a2097bd3b848e41cc1d0d2d11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
