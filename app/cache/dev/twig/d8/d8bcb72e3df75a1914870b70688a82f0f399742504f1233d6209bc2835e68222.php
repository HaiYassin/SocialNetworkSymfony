<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a138ec762ef1da1d1c679e720822973146387caf56bf79ebb2ad6c917b59ccac extends Twig_Template
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
        $__internal_74e0ad2f25b6215dd202b74b357eaf35819a287fed89cca3926f7eaf6d42214c = $this->env->getExtension("native_profiler");
        $__internal_74e0ad2f25b6215dd202b74b357eaf35819a287fed89cca3926f7eaf6d42214c->enter($__internal_74e0ad2f25b6215dd202b74b357eaf35819a287fed89cca3926f7eaf6d42214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_74e0ad2f25b6215dd202b74b357eaf35819a287fed89cca3926f7eaf6d42214c->leave($__internal_74e0ad2f25b6215dd202b74b357eaf35819a287fed89cca3926f7eaf6d42214c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
