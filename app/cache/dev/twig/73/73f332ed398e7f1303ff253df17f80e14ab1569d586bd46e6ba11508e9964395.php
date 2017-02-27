<?php

/* @App/Email/student.txt.twig */
class __TwigTemplate_15187860508ff1972cd711fed23620bc10a540f37d1f7e6d8d964b0c2ea0a5c3 extends Twig_Template
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
        $__internal_6c21974bb3d0f8d3ce567b954c9eb5f18d7f2a261de7aca7e9d014b0aeb3d230 = $this->env->getExtension("native_profiler");
        $__internal_6c21974bb3d0f8d3ce567b954c9eb5f18d7f2a261de7aca7e9d014b0aeb3d230->enter($__internal_6c21974bb3d0f8d3ce567b954c9eb5f18d7f2a261de7aca7e9d014b0aeb3d230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Email/student.txt.twig"));

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
        
        $__internal_6c21974bb3d0f8d3ce567b954c9eb5f18d7f2a261de7aca7e9d014b0aeb3d230->leave($__internal_6c21974bb3d0f8d3ce567b954c9eb5f18d7f2a261de7aca7e9d014b0aeb3d230_prof);

    }

    public function getTemplateName()
    {
        return "@App/Email/student.txt.twig";
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
