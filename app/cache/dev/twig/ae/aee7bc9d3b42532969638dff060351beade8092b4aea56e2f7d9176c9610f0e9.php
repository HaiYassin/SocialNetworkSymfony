<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b1a99293ffb0962c597f77e2c6bc0ab851742b8bf63893172693febf1d05f7c0 extends Twig_Template
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
        $__internal_732930f215c687045cb1687ce6713c3d4a27fadfb6d02dc6c57436f05f652547 = $this->env->getExtension("native_profiler");
        $__internal_732930f215c687045cb1687ce6713c3d4a27fadfb6d02dc6c57436f05f652547->enter($__internal_732930f215c687045cb1687ce6713c3d4a27fadfb6d02dc6c57436f05f652547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_732930f215c687045cb1687ce6713c3d4a27fadfb6d02dc6c57436f05f652547->leave($__internal_732930f215c687045cb1687ce6713c3d4a27fadfb6d02dc6c57436f05f652547_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
