<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_640b7666edd53b63d9b997e3cc9691e58cf73073d76a184c6757f84e5b8ce24c extends Twig_Template
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
        $__internal_e287bc025f2ab46f092c230b25d60995ca7fea56dd0eb68d035a501d031848db = $this->env->getExtension("native_profiler");
        $__internal_e287bc025f2ab46f092c230b25d60995ca7fea56dd0eb68d035a501d031848db->enter($__internal_e287bc025f2ab46f092c230b25d60995ca7fea56dd0eb68d035a501d031848db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e287bc025f2ab46f092c230b25d60995ca7fea56dd0eb68d035a501d031848db->leave($__internal_e287bc025f2ab46f092c230b25d60995ca7fea56dd0eb68d035a501d031848db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
