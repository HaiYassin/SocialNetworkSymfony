<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b86fa57258b7d18c2732b4d023a9011fe3a288345629c2756169569386615386 extends Twig_Template
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
        $__internal_1b8a15e9ad405dc76b9811dbc482a29cbc813d30753935961c66a81ad05353e7 = $this->env->getExtension("native_profiler");
        $__internal_1b8a15e9ad405dc76b9811dbc482a29cbc813d30753935961c66a81ad05353e7->enter($__internal_1b8a15e9ad405dc76b9811dbc482a29cbc813d30753935961c66a81ad05353e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1b8a15e9ad405dc76b9811dbc482a29cbc813d30753935961c66a81ad05353e7->leave($__internal_1b8a15e9ad405dc76b9811dbc482a29cbc813d30753935961c66a81ad05353e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
