<?php

/* @App/Email/contact.txt.twig */
class __TwigTemplate_2a6ca98f23755f17870e3c78162a2f930a76b56ac227058746d3a3ecd2fa7a9f extends Twig_Template
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
        $__internal_089fc3a4fd26b3cba45de2549090f7f985cefa58865a65a12862e8ce21ce5b04 = $this->env->getExtension("native_profiler");
        $__internal_089fc3a4fd26b3cba45de2549090f7f985cefa58865a65a12862e8ce21ce5b04->enter($__internal_089fc3a4fd26b3cba45de2549090f7f985cefa58865a65a12862e8ce21ce5b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Email/contact.txt.twig"));

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
        
        $__internal_089fc3a4fd26b3cba45de2549090f7f985cefa58865a65a12862e8ce21ce5b04->leave($__internal_089fc3a4fd26b3cba45de2549090f7f985cefa58865a65a12862e8ce21ce5b04_prof);

    }

    public function getTemplateName()
    {
        return "@App/Email/contact.txt.twig";
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
