<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0355c9f1ac01bb8796ae2d33eab1cc224cff323e20178382f519267bb7a20e31 extends Twig_Template
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
        $__internal_88ca93566abbc9e245856aafd206c5d2ecd456bcf52fe31d55a3f3e7a1fedf82 = $this->env->getExtension("native_profiler");
        $__internal_88ca93566abbc9e245856aafd206c5d2ecd456bcf52fe31d55a3f3e7a1fedf82->enter($__internal_88ca93566abbc9e245856aafd206c5d2ecd456bcf52fe31d55a3f3e7a1fedf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_88ca93566abbc9e245856aafd206c5d2ecd456bcf52fe31d55a3f3e7a1fedf82->leave($__internal_88ca93566abbc9e245856aafd206c5d2ecd456bcf52fe31d55a3f3e7a1fedf82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
