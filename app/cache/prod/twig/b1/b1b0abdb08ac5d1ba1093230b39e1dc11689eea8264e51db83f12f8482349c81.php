<?php

/* @App/_nav.html.twig */
class __TwigTemplate_537640e2152b1c1443722a522a3d8d18da0ee5c2a0704c6ffd0098b521a79c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('nav', $context, $blocks);
    }

    public function block_nav($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"navbar navbar-blue navbar-static-top\" style=\"    box-shadow: 0px 0px 10px #ccc;border-bottom: 5px solid #2a4887;\">
    <div class=\"navbar-header\">
        <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 11
        echo "    </div>
    <nav class=\"collapse navbar-collapse\" role=\"navigation\">

        <div class=\"navbar-form navbar-left\" style=\"width: 14%\">
            <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logo_tiptopstartup.png"), "html", null, true);
        echo "\"/></a>
        </div>

        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "            ";
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 20
                echo "                <form class=\"navbar-form navbar-left\">
                    <div class=\"input-group input-group-sm\" style=\"max-width:360px;\">
                         <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"srch-term\" id=\"srch-term\">
                            <div class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                            </div>
                    </div>
                </form>
            ";
            }
            // line 29
            echo "        ";
        }
        // line 30
        echo "        <ul class=\"nav navbar-nav\">
            <li>
                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("app_default_create");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> Accueil</a>
            </li>
            ";
        // line 37
        echo "
            ";
        // line 41
        echo "        </ul>
        <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 46
                echo "                    <li>
                        <a href=\"";
                // line 47
                echo $this->env->getExtension('routing')->getPath("user_default_index");
                echo "\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Mon Espace</a>
                    </li>
                    ";
                // line 52
                echo "
                ";
            }
            // line 54
            echo "
                    <li>
                        <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> Déconnexion</a>
                    </li>
            ";
        } else {
            // line 59
            echo "                    <li>
                        ";
            // line 60
            echo twig_include($this->env, $context, "AppBundle:Security:login.html.twig");
            echo "
                    </li>
            ";
        }
        // line 63
        echo "            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"\">More</a></li>
                    <li><a href=\"\">More</a></li>
                    <li><a href=\"\">More</a></li>
                    <li><a href=\"\">More</a></li>
                    <li><a href=\"\">More</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- /top nav -->
";
    }

    public function getTemplateName()
    {
        return "@App/_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 63,  114 => 60,  111 => 59,  105 => 56,  101 => 54,  97 => 52,  92 => 47,  89 => 46,  86 => 45,  84 => 44,  79 => 41,  76 => 37,  71 => 32,  67 => 30,  64 => 29,  53 => 20,  50 => 19,  48 => 18,  42 => 15,  36 => 11,  26 => 2,  20 => 1,);
    }
}
/* {% block nav %}*/
/* <div class="navbar navbar-blue navbar-static-top" style="    box-shadow: 0px 0px 10px #ccc;border-bottom: 5px solid #2a4887;">*/
/*     <div class="navbar-header">*/
/*         <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">Toggle</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </button>*/
/*         {#        <a href="/" class="navbar-brand logo">b</a> #}*/
/*     </div>*/
/*     <nav class="collapse navbar-collapse" role="navigation">*/
/* */
/*         <div class="navbar-form navbar-left" style="width: 14%">*/
/*             <a href="#"><img class="img-responsive" src="{{ asset('assets/img/logo_tiptopstartup.png') }}"/></a>*/
/*         </div>*/
/* */
/*         {%  if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             {% if is_granted('ROLE_USER') %}*/
/*                 <form class="navbar-form navbar-left">*/
/*                     <div class="input-group input-group-sm" style="max-width:360px;">*/
/*                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">*/
/*                             <div class="input-group-btn">*/
/*                             <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>*/
/*                             </div>*/
/*                     </div>*/
/*                 </form>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <ul class="nav navbar-nav">*/
/*             <li>*/
/*                 <a href="{{ path('app_default_create')}}"><i class="glyphicon glyphicon-home"></i> Accueil</a>*/
/*             </li>*/
/*             {#<li>*/
/*                 <a href="{{ path('app_user_index') }}"><i class="glyphicon glyphicon-home"></i> Inscription</a>*/
/*             </li>#}*/
/* */
/*             {#      <li>*/
/*                         <a href="#"><span class="badge">badge</span></a>*/
/*                     </li>   #}*/
/*         </ul>*/
/*         <ul class="nav navbar-nav navbar-right">*/
/* */
/*             {%  if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                     <li>*/
/*                         <a href="{{ path('user_default_index') }}"><i class="fa fa-user" aria-hidden="true"></i> Mon Espace</a>*/
/*                     </li>*/
/*                     {#    <li class="text-center">*/
/*                             Bonjour {{ app.user.username }}*/
/*                           </li>#}*/
/* */
/*                 {% endif %}*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a>*/
/*                     </li>*/
/*             {% else %}*/
/*                     <li>*/
/*                         {{ include('AppBundle:Security:login.html.twig') }}*/
/*                     </li>*/
/*             {% endif %}*/
/*             <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="">More</a></li>*/
/*                     <li><a href="">More</a></li>*/
/*                     <li><a href="">More</a></li>*/
/*                     <li><a href="">More</a></li>*/
/*                     <li><a href="">More</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* </div>*/
/* <!-- /top nav -->*/
/* {% endblock %}*/
/* */
