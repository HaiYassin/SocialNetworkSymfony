<?php

/* @App/Email/student.html.twig */
class __TwigTemplate_018c993240d1bc344f258499cf249b1fc9a15b7d00be9aefa754b42a98ebaade extends Twig_Template
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
        $__internal_61b09f787c4a0c96452d729df8df9d7675ee836360a31bec0e1c159c0d467a3c = $this->env->getExtension("native_profiler");
        $__internal_61b09f787c4a0c96452d729df8df9d7675ee836360a31bec0e1c159c0d467a3c->enter($__internal_61b09f787c4a0c96452d729df8df9d7675ee836360a31bec0e1c159c0d467a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Email/student.html.twig"));

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
        
        $__internal_61b09f787c4a0c96452d729df8df9d7675ee836360a31bec0e1c159c0d467a3c->leave($__internal_61b09f787c4a0c96452d729df8df9d7675ee836360a31bec0e1c159c0d467a3c_prof);

    }

    public function getTemplateName()
    {
        return "@App/Email/student.html.twig";
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
