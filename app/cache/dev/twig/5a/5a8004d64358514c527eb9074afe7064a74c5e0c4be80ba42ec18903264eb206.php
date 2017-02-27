<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_2948e074ca904ec14b63e54b8bcffaf02a8866e234513f7057e62ba3176f1ace extends Twig_Template
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
        $__internal_8c36881b85d3f1f842e8f03140e4f511b54af2767a7c96440e30f2808cafa21a = $this->env->getExtension("native_profiler");
        $__internal_8c36881b85d3f1f842e8f03140e4f511b54af2767a7c96440e30f2808cafa21a->enter($__internal_8c36881b85d3f1f842e8f03140e4f511b54af2767a7c96440e30f2808cafa21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8c36881b85d3f1f842e8f03140e4f511b54af2767a7c96440e30f2808cafa21a->leave($__internal_8c36881b85d3f1f842e8f03140e4f511b54af2767a7c96440e30f2808cafa21a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
