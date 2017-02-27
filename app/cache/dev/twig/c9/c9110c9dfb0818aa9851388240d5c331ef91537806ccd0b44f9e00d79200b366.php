<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_dda3fdbfbbdac8de8a52f2cedc2043ff71f0472e32313fdf561cbca946d3f322 extends Twig_Template
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
        $__internal_ea44dde9162a85f41940c5eee3e2071311518e9b82dd259826b25581b9f713e0 = $this->env->getExtension("native_profiler");
        $__internal_ea44dde9162a85f41940c5eee3e2071311518e9b82dd259826b25581b9f713e0->enter($__internal_ea44dde9162a85f41940c5eee3e2071311518e9b82dd259826b25581b9f713e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_ea44dde9162a85f41940c5eee3e2071311518e9b82dd259826b25581b9f713e0->leave($__internal_ea44dde9162a85f41940c5eee3e2071311518e9b82dd259826b25581b9f713e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
