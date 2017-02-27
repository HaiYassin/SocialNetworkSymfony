<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_325e8c2a1b0c6aa643972d4e7549b472cfd4a058af7ca4095a2fa586d6004242 extends Twig_Template
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
        $__internal_fd6286f5236b3383b178750ff20c8cbe99fc97033f0be22f447b35b12218fd42 = $this->env->getExtension("native_profiler");
        $__internal_fd6286f5236b3383b178750ff20c8cbe99fc97033f0be22f447b35b12218fd42->enter($__internal_fd6286f5236b3383b178750ff20c8cbe99fc97033f0be22f447b35b12218fd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fd6286f5236b3383b178750ff20c8cbe99fc97033f0be22f447b35b12218fd42->leave($__internal_fd6286f5236b3383b178750ff20c8cbe99fc97033f0be22f447b35b12218fd42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
