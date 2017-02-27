<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9029120f3bdb041844683c08df2e8640dd32a57e30c600d1627c5e28c780b51f extends Twig_Template
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
        $__internal_ca21ce0ab845e2a864c48bc9a0f732d89c0c8b67f32d292d3d46c36d9aac0992 = $this->env->getExtension("native_profiler");
        $__internal_ca21ce0ab845e2a864c48bc9a0f732d89c0c8b67f32d292d3d46c36d9aac0992->enter($__internal_ca21ce0ab845e2a864c48bc9a0f732d89c0c8b67f32d292d3d46c36d9aac0992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ca21ce0ab845e2a864c48bc9a0f732d89c0c8b67f32d292d3d46c36d9aac0992->leave($__internal_ca21ce0ab845e2a864c48bc9a0f732d89c0c8b67f32d292d3d46c36d9aac0992_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
