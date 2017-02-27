<?php

/* AppBundle:Email:contact.html.twig */
class __TwigTemplate_efe6945326e5f3301f11ada82fbb4ede77148d7661cc9544097cc97a7148b463 extends Twig_Template
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
        $__internal_2b0925a13a482249c5567fe482b55f76b02e2f215f189766bd4db9c26befbd42 = $this->env->getExtension("native_profiler");
        $__internal_2b0925a13a482249c5567fe482b55f76b02e2f215f189766bd4db9c26befbd42->enter($__internal_2b0925a13a482249c5567fe482b55f76b02e2f215f189766bd4db9c26befbd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:contact.html.twig"));

        // line 2
        echo "<p>Bonjour,</p>
<p>Vous venez de recevoir un email de contact.</p>
<dl class=\"dl-horizontal\">
    <dt>Sujet</dt>
    <dd>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "subject", array()), "html", null, true);
        echo "</dd>
    <dt>Nom</dt>
    <dd>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "name", array()), "html", null, true);
        echo "</dd>
    <dt>Email</dt>
    <dd><a href=\"mailto:";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</a></dd>
</dl>
<p>";
        // line 12
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "message", array()), "html", null, true));
        echo "</p>
<p>Cordialement,</p>
<p>Le site WEB</p>
<p>Cet email a été envoyé avec :<br><br><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cid"]) ? $context["cid"] : $this->getContext($context, "cid")), "html", null, true);
        echo "\" alt=\"Symfony\"/></p>
";
        
        $__internal_2b0925a13a482249c5567fe482b55f76b02e2f215f189766bd4db9c26befbd42->leave($__internal_2b0925a13a482249c5567fe482b55f76b02e2f215f189766bd4db9c26befbd42_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Email:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  47 => 12,  38 => 10,  33 => 8,  28 => 6,  22 => 2,);
    }
}
/* {# @var contact \AppBundle\Model\Contact#}*/
/* <p>Bonjour,</p>*/
/* <p>Vous venez de recevoir un email de contact.</p>*/
/* <dl class="dl-horizontal">*/
/*     <dt>Sujet</dt>*/
/*     <dd>{{ contact.subject }}</dd>*/
/*     <dt>Nom</dt>*/
/*     <dd>{{ contact.name }}</dd>*/
/*     <dt>Email</dt>*/
/*     <dd><a href="mailto:{{ contact.email }}" title="{{ contact.email }}">{{ contact.email }}</a></dd>*/
/* </dl>*/
/* <p>{{ contact.message|nl2br }}</p>*/
/* <p>Cordialement,</p>*/
/* <p>Le site WEB</p>*/
/* <p>Cet email a été envoyé avec :<br><br><img src="{{ cid }}" alt="Symfony"/></p>*/
/* */
