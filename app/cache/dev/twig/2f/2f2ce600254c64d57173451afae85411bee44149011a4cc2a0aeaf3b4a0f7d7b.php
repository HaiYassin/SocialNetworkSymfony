<?php

/* AppBundle:Email:student.html.twig */
class __TwigTemplate_2d04eebc281df53cf90761c0ed16e584174fe0b7bd0a68b4a90e10ef5a225a5d extends Twig_Template
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
        $__internal_37425df74e43a38568bdd717f92495022329110040de058418188725edcc6fa9 = $this->env->getExtension("native_profiler");
        $__internal_37425df74e43a38568bdd717f92495022329110040de058418188725edcc6fa9->enter($__internal_37425df74e43a38568bdd717f92495022329110040de058418188725edcc6fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:student.html.twig"));

        // line 1
        echo "<p>Bonjour,</p>
<p>Un compte vient de vous être créé.</p>
<dl class=\"dl-horizontal\">
    <dt>Email</dt>
    <dd>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "username", array()), "html", null, true);
        echo "</dd>
    <dt>Mot de passe (temporaire)</dt>
    <dd>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "rawPassword", array()), "html", null, true);
        echo "</dd>
</dl>
<p>Cordialement,</p>
<p>Le site WEB</p>
";
        
        $__internal_37425df74e43a38568bdd717f92495022329110040de058418188725edcc6fa9->leave($__internal_37425df74e43a38568bdd717f92495022329110040de058418188725edcc6fa9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Email:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* <p>Bonjour,</p>*/
/* <p>Un compte vient de vous être créé.</p>*/
/* <dl class="dl-horizontal">*/
/*     <dt>Email</dt>*/
/*     <dd>{{ student.username }}</dd>*/
/*     <dt>Mot de passe (temporaire)</dt>*/
/*     <dd>{{ student.rawPassword }}</dd>*/
/* </dl>*/
/* <p>Cordialement,</p>*/
/* <p>Le site WEB</p>*/
/* */
