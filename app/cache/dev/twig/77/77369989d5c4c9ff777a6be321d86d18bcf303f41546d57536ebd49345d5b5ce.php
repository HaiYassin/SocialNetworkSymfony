<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8a968f9696d180a5e081a317abc2e48f020d3096c5edb2d46ab23eb6cbcb8cbc extends Twig_Template
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
        $__internal_4fb850b2d9622d81eeb9a310c092bf06c6e7895ad1b20a44657cc0b9a66362b7 = $this->env->getExtension("native_profiler");
        $__internal_4fb850b2d9622d81eeb9a310c092bf06c6e7895ad1b20a44657cc0b9a66362b7->enter($__internal_4fb850b2d9622d81eeb9a310c092bf06c6e7895ad1b20a44657cc0b9a66362b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4fb850b2d9622d81eeb9a310c092bf06c6e7895ad1b20a44657cc0b9a66362b7->leave($__internal_4fb850b2d9622d81eeb9a310c092bf06c6e7895ad1b20a44657cc0b9a66362b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
