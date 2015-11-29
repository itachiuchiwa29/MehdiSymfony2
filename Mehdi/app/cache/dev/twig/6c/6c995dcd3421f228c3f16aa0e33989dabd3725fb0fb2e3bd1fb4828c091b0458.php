<?php

/* CoreSphereConsoleBundle:Console:htmlTemplates.html.twig */
class __TwigTemplate_1ea2edaa12a0a702fa965fecf717e35c6c1e15b69912e7f4a89e38eb3db97e05 extends Twig_Template
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
        $__internal_f059094a8efae759ddb3f10d81c8e51dfe880e8da8cc82bc85fbd119863e4c79 = $this->env->getExtension("native_profiler");
        $__internal_f059094a8efae759ddb3f10d81c8e51dfe880e8da8cc82bc85fbd119863e4c79->enter($__internal_f059094a8efae759ddb3f10d81c8e51dfe880e8da8cc82bc85fbd119863e4c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template_console_command\">
    <li>
        <div class=\"console_log_input console_%status%\">%command%%environment%</div>
        <div class=\"console_log_output\">%output%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_environment\">
    <span class=\"console_env_info\">%label%: <strong>%environment%</strong></span>
</script>

<script type=\"text/html\" id=\"template_console_error\">
    <li class=\"console_error\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">[%message%] %error%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_loading\">
    <li class=\"console_loading\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">%message%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_suggestion_list\">
    <h2 class=\"console_suggestion_head\">%head%</h2>
    <ul>%suggestions%</ul>
</script>

<script type=\"text/html\" id=\"template_console_highlight\">
    <strong class=\"match\">%word%</strong>
</script>

<script type=\"text/html\" id=\"suggestion_item_active\">
    <li class=\"%state%\">%suggestion%</li>
</script>

<script type=\"text/html\" id=\"suggestion_item\">
    <li>%suggestion%</li>
</script>
";
        
        $__internal_f059094a8efae759ddb3f10d81c8e51dfe880e8da8cc82bc85fbd119863e4c79->leave($__internal_f059094a8efae759ddb3f10d81c8e51dfe880e8da8cc82bc85fbd119863e4c79_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script type="text/html" id="template_console_command">*/
/*     <li>*/
/*         <div class="console_log_input console_%status%">%command%%environment%</div>*/
/*         <div class="console_log_output">%output%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_environment">*/
/*     <span class="console_env_info">%label%: <strong>%environment%</strong></span>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_error">*/
/*     <li class="console_error">*/
/*         <div class="console_log_input">%command%</div>*/
/*         <div class="console_log_output">[%message%] %error%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_loading">*/
/*     <li class="console_loading">*/
/*         <div class="console_log_input">%command%</div>*/
/*         <div class="console_log_output">%message%</div>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_suggestion_list">*/
/*     <h2 class="console_suggestion_head">%head%</h2>*/
/*     <ul>%suggestions%</ul>*/
/* </script>*/
/* */
/* <script type="text/html" id="template_console_highlight">*/
/*     <strong class="match">%word%</strong>*/
/* </script>*/
/* */
/* <script type="text/html" id="suggestion_item_active">*/
/*     <li class="%state%">%suggestion%</li>*/
/* </script>*/
/* */
/* <script type="text/html" id="suggestion_item">*/
/*     <li>%suggestion%</li>*/
/* </script>*/
/* */
