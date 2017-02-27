<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_e80d02e2c39da5a681647dcb0db9efe3f592f020cffffdeed65a412119eea180 extends Twig_Template
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
        $__internal_fee0c44fce23cf117a06567cd4936c086caf269d9d36e7d99742bc5e7eaaaa65 = $this->env->getExtension("native_profiler");
        $__internal_fee0c44fce23cf117a06567cd4936c086caf269d9d36e7d99742bc5e7eaaaa65->enter($__internal_fee0c44fce23cf117a06567cd4936c086caf269d9d36e7d99742bc5e7eaaaa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 5
        echo "    <form class=\"form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">

        <div class=\"form-group\">
            ";
        // line 9
        echo "            ";
        // line 10
        echo "            <label class=\"sr-only\" for=\"username\">Email address</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Email\"/>
        </div>
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"password\">Password</label>
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\" />
        </div>
        ";
        // line 22
        echo "        <button type=\"submit\" class=\"btn btn-default\">Connexion</button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
        ";
        // line 30
        echo "    </form>

";
        
        $__internal_fee0c44fce23cf117a06567cd4936c086caf269d9d36e7d99742bc5e7eaaaa65->leave($__internal_fee0c44fce23cf117a06567cd4936c086caf269d9d36e7d99742bc5e7eaaaa65_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 30,  54 => 23,  51 => 22,  42 => 10,  40 => 9,  33 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/*     {%  if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <form class="form-inline" action="{{ path('login') }}" method="post">*/
/* */
/*         <div class="form-group">*/
/*             {#    <label for="username">Username:</label> #}*/
/*             {#    <input type="text" id="username" name="_username" value="{{ last_username }}" /> #}*/
/*             <label class="sr-only" for="username">Email address</label>*/
/*             <input type="text" class="form-control" id="username" name="_username" placeholder="Email"/>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="sr-only" for="password">Password</label>*/
/*             <input class="form-control" type="password" id="password" name="_password" placeholder="Password" />*/
/*         </div>*/
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/*         <button type="submit" class="btn btn-default">Connexion</button>*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"/>*/
/*         {#*/
/*                 <div class="checkbox">*/
/*                     <label>*/
/*                         <input type="checkbox" value="remember-me" required checked>Se souvenir de moi*/
/*                     </label>*/
/*                 </div>#}*/
/*     </form>*/
/* */
/* */
