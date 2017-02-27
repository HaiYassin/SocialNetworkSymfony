<?php

/* @App/User/login.html.twig */
class __TwigTemplate_002fd97da0449e3ae9acbd80a67e37eaeed9b783c7b4e798db20744a5ada7ef6 extends Twig_Template
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
        $__internal_896e3ab2bd763a716f320ba1ae7b560369bfc8d2436450caf1ff91bf1c525d03 = $this->env->getExtension("native_profiler");
        $__internal_896e3ab2bd763a716f320ba1ae7b560369bfc8d2436450caf1ff91bf1c525d03->enter($__internal_896e3ab2bd763a716f320ba1ae7b560369bfc8d2436450caf1ff91bf1c525d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/login.html.twig"));

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
        
        $__internal_896e3ab2bd763a716f320ba1ae7b560369bfc8d2436450caf1ff91bf1c525d03->leave($__internal_896e3ab2bd763a716f320ba1ae7b560369bfc8d2436450caf1ff91bf1c525d03_prof);

    }

    public function getTemplateName()
    {
        return "@App/User/login.html.twig";
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
