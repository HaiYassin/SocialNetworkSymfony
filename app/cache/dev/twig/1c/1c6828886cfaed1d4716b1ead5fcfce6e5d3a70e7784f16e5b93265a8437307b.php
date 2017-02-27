<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_eb7ecab5780389b670621e13731433c96691ed388384e3ebdbc2aea4530ef496 extends Twig_Template
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
        $__internal_da06144748db04f356b2261e8ca5f0b5391910feb254959fe0d62d78aae6c8bc = $this->env->getExtension("native_profiler");
        $__internal_da06144748db04f356b2261e8ca5f0b5391910feb254959fe0d62d78aae6c8bc->enter($__internal_da06144748db04f356b2261e8ca5f0b5391910feb254959fe0d62d78aae6c8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_da06144748db04f356b2261e8ca5f0b5391910feb254959fe0d62d78aae6c8bc->leave($__internal_da06144748db04f356b2261e8ca5f0b5391910feb254959fe0d62d78aae6c8bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
