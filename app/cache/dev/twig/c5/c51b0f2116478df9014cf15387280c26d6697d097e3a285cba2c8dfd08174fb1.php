<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ce4375cb3457630f5ad758ba70aa7c3b4197e878f119cb7d34c47ea4137bc8a0 extends Twig_Template
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
        $__internal_693a7d57c8a6aeec4c79ccffe408fe434157d3b2d689bfdfda524b09a2121037 = $this->env->getExtension("native_profiler");
        $__internal_693a7d57c8a6aeec4c79ccffe408fe434157d3b2d689bfdfda524b09a2121037->enter($__internal_693a7d57c8a6aeec4c79ccffe408fe434157d3b2d689bfdfda524b09a2121037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_693a7d57c8a6aeec4c79ccffe408fe434157d3b2d689bfdfda524b09a2121037->leave($__internal_693a7d57c8a6aeec4c79ccffe408fe434157d3b2d689bfdfda524b09a2121037_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
