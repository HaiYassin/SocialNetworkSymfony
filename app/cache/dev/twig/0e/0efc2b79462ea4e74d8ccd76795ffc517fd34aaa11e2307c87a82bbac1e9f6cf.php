<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a7ec21c264572705d819a65bfb3b725ecc7d4f75b1460c62fc8fdb83433d2241 extends Twig_Template
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
        $__internal_3728299cdfa8e98b6590869a17a9b7e8bea73fe307fc5fbcd0ec2547172f6488 = $this->env->getExtension("native_profiler");
        $__internal_3728299cdfa8e98b6590869a17a9b7e8bea73fe307fc5fbcd0ec2547172f6488->enter($__internal_3728299cdfa8e98b6590869a17a9b7e8bea73fe307fc5fbcd0ec2547172f6488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3728299cdfa8e98b6590869a17a9b7e8bea73fe307fc5fbcd0ec2547172f6488->leave($__internal_3728299cdfa8e98b6590869a17a9b7e8bea73fe307fc5fbcd0ec2547172f6488_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
