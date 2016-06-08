<?php

/* @App/Security/login.html.twig */
class __TwigTemplate_c380957047ad1e8f5971d5a43e6e76058439ff32f2be4ef2a63575b8bc53bad2 extends Twig_Template
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
        // line 1
        echo "<li style=\"margin-top: 8px;\">
    <form class=\"form-inline\" action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">

        <div class=\"form-group\">
            ";
        // line 6
        echo "            ";
        // line 7
        echo "            <label class=\"sr-only\" for=\"username\">Email address</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Email\"/>
        </div>
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"password\">Password</label>
            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\" />
        </div>
        ";
        // line 19
        echo "        <button type=\"submit\" class=\"btn btn-default\">Connexion</button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
    </form>
</li>";
    }

    public function getTemplateName()
    {
        return "@App/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 20,  39 => 19,  30 => 7,  28 => 6,  22 => 2,  19 => 1,);
    }
}
/* <li style="margin-top: 8px;">*/
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
/*     </form>*/
/* </li>*/
