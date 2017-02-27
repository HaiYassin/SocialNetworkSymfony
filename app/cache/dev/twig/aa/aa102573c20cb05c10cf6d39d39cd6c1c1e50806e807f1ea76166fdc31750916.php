<?php

/* AppBundle:Email:contact.txt.twig */
class __TwigTemplate_1b4dd9f180b9d00868748dce18d4755e1ae4552b6c0cc429445ae614313f3613 extends Twig_Template
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
        $__internal_0f448d73de9fe40e72841dc7348b98fae1e2950c509a57b6d60deb175f4d3af5 = $this->env->getExtension("native_profiler");
        $__internal_0f448d73de9fe40e72841dc7348b98fae1e2950c509a57b6d60deb175f4d3af5->enter($__internal_0f448d73de9fe40e72841dc7348b98fae1e2950c509a57b6d60deb175f4d3af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:contact.txt.twig"));

        // line 2
        echo "Bonjour,

Vous venez de recevoir un email de contact.

Sujet : ";
        // line 6
        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "subject", array());
        echo "
Nom   : ";
        // line 7
        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name", array());
        echo "
Email : ";
        // line 8
        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array());
        echo "

";
        // line 10
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message", array()), "html", null, true));
        echo "

Cordialement,

Le site WEB
";
        
        $__internal_0f448d73de9fe40e72841dc7348b98fae1e2950c509a57b6d60deb175f4d3af5->leave($__internal_0f448d73de9fe40e72841dc7348b98fae1e2950c509a57b6d60deb175f4d3af5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Email:contact.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  36 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {# @var contact \AppBundle\Model\Contact#}*/
/* Bonjour,*/
/* */
/* Vous venez de recevoir un email de contact.*/
/* */
/* Sujet : {{ contact.subject }}*/
/* Nom   : {{ contact.name }}*/
/* Email : {{ contact.email }}*/
/* */
/* {{ contact.message|nl2br }}*/
/* */
/* Cordialement,*/
/* */
/* Le site WEB*/
/* */
