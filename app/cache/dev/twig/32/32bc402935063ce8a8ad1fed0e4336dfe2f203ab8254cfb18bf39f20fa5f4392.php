<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_de74605ede57f1c4dcbc3b9ddd73917131d55125ecd5c5f9e5937cf1ebf4ab2e extends Twig_Template
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
        $__internal_5f67420c41cbf185e2c5e86c35a049f3c3a70f2ac29145f1db16bbc6d17117a6 = $this->env->getExtension("native_profiler");
        $__internal_5f67420c41cbf185e2c5e86c35a049f3c3a70f2ac29145f1db16bbc6d17117a6->enter($__internal_5f67420c41cbf185e2c5e86c35a049f3c3a70f2ac29145f1db16bbc6d17117a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5f67420c41cbf185e2c5e86c35a049f3c3a70f2ac29145f1db16bbc6d17117a6->leave($__internal_5f67420c41cbf185e2c5e86c35a049f3c3a70f2ac29145f1db16bbc6d17117a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
