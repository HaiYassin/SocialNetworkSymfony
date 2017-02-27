<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_01d64439f6b59487320565cb0817dd54bd31d741c1ec67b6b1f1b2ce5870a9c1 extends Twig_Template
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
        $__internal_69504a9681492e367b4d774715a7c420f1b925278f893b47b0473000919c8c0a = $this->env->getExtension("native_profiler");
        $__internal_69504a9681492e367b4d774715a7c420f1b925278f893b47b0473000919c8c0a->enter($__internal_69504a9681492e367b4d774715a7c420f1b925278f893b47b0473000919c8c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_69504a9681492e367b4d774715a7c420f1b925278f893b47b0473000919c8c0a->leave($__internal_69504a9681492e367b4d774715a7c420f1b925278f893b47b0473000919c8c0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
