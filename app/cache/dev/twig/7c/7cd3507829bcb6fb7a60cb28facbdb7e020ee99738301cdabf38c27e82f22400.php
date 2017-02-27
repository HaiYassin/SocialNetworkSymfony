<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f9e739d93ff3176a4e085245bcb5c4c893a9f94c25a2b57247b465d369518ee0 extends Twig_Template
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
        $__internal_de11d43c5526a95e275fafe651b350d05eb15a47b9d304416fb1989fdd81f497 = $this->env->getExtension("native_profiler");
        $__internal_de11d43c5526a95e275fafe651b350d05eb15a47b9d304416fb1989fdd81f497->enter($__internal_de11d43c5526a95e275fafe651b350d05eb15a47b9d304416fb1989fdd81f497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_de11d43c5526a95e275fafe651b350d05eb15a47b9d304416fb1989fdd81f497->leave($__internal_de11d43c5526a95e275fafe651b350d05eb15a47b9d304416fb1989fdd81f497_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
