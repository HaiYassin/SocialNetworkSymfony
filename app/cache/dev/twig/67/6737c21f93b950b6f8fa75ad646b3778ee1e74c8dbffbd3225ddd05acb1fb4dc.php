<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0a839bc440dd7a03bc959ba34e9053054986329c3200e96adb0903aa525dc8a4 extends Twig_Template
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
        $__internal_0168f4e8c99ebef463c3d616d8290fa41a12a550d1357fbef3bad65baf1949d9 = $this->env->getExtension("native_profiler");
        $__internal_0168f4e8c99ebef463c3d616d8290fa41a12a550d1357fbef3bad65baf1949d9->enter($__internal_0168f4e8c99ebef463c3d616d8290fa41a12a550d1357fbef3bad65baf1949d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0168f4e8c99ebef463c3d616d8290fa41a12a550d1357fbef3bad65baf1949d9->leave($__internal_0168f4e8c99ebef463c3d616d8290fa41a12a550d1357fbef3bad65baf1949d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
