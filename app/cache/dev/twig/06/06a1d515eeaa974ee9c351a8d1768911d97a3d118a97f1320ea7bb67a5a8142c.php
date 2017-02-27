<?php

/* AppBundle:Email:student.txt.twig */
class __TwigTemplate_008cd4e809557cd9cf18b49c4d84415f8a055fa61ab830872ce8d760a1f392dd extends Twig_Template
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
        $__internal_1485bc6a25fd4ae3561b20d26d8d34cbf6777439c61418576a0ec437adb858e2 = $this->env->getExtension("native_profiler");
        $__internal_1485bc6a25fd4ae3561b20d26d8d34cbf6777439c61418576a0ec437adb858e2->enter($__internal_1485bc6a25fd4ae3561b20d26d8d34cbf6777439c61418576a0ec437adb858e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:student.txt.twig"));

        // line 2
        echo "Bonjour,

Un compte vient de vous être créé.

Email : ";
        // line 6
        echo $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "username", array());
        echo "
Mot de passe (temporaire) : ";
        // line 7
        echo $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "rawPassword", array());
        echo "

Cordialement,

Le site WEB
";
        
        $__internal_1485bc6a25fd4ae3561b20d26d8d34cbf6777439c61418576a0ec437adb858e2->leave($__internal_1485bc6a25fd4ae3561b20d26d8d34cbf6777439c61418576a0ec437adb858e2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Email:student.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {# @var student \AppBundle\Entity\Student #}*/
/* Bonjour,*/
/* */
/* Un compte vient de vous être créé.*/
/* */
/* Email : {{ student.username }}*/
/* Mot de passe (temporaire) : {{ student.rawPassword }}*/
/* */
/* Cordialement,*/
/* */
/* Le site WEB*/
/* */
