<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_81876e226e207b867720ff0eb75a5a65ed8278a53bfbc04773f6774f2e742801 extends Twig_Template
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
        $__internal_db6fefdcc9a79f31af7bd3ba96c8fd0d255a0dee2c5ea859e692930f98a367d5 = $this->env->getExtension("native_profiler");
        $__internal_db6fefdcc9a79f31af7bd3ba96c8fd0d255a0dee2c5ea859e692930f98a367d5->enter($__internal_db6fefdcc9a79f31af7bd3ba96c8fd0d255a0dee2c5ea859e692930f98a367d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_db6fefdcc9a79f31af7bd3ba96c8fd0d255a0dee2c5ea859e692930f98a367d5->leave($__internal_db6fefdcc9a79f31af7bd3ba96c8fd0d255a0dee2c5ea859e692930f98a367d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
