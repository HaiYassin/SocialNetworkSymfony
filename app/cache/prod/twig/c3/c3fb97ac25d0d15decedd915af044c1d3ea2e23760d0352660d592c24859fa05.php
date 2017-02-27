<?php

/* AppBundle::_nav.html.twig */
class __TwigTemplate_8f7bde42b23b480fa3c525394beed1f75494079266d7524fcda61bff25efd3f0 extends Twig_Template
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
        $__internal_959c3044780f09da74a2f6bc634c78645a73b5d5b4d7f5a1fb41f0079998a13d = $this->env->getExtension("native_profiler");
        $__internal_959c3044780f09da74a2f6bc634c78645a73b5d5b4d7f5a1fb41f0079998a13d->enter($__internal_959c3044780f09da74a2f6bc634c78645a73b5d5b4d7f5a1fb41f0079998a13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::_nav.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_959c3044780f09da74a2f6bc634c78645a73b5d5b4d7f5a1fb41f0079998a13d->leave($__internal_959c3044780f09da74a2f6bc634c78645a73b5d5b4d7f5a1fb41f0079998a13d_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_0b413d5d4f5e71b140676890b63b8b9a2f7c4cc9cbb59e5ce26a0e42076b7bd5 = $this->env->getExtension("native_profiler");
        $__internal_0b413d5d4f5e71b140676890b63b8b9a2f7c4cc9cbb59e5ce26a0e42076b7bd5->enter($__internal_0b413d5d4f5e71b140676890b63b8b9a2f7c4cc9cbb59e5ce26a0e42076b7bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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

        <div class=\"navbar-form navbar-left\" >
            <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logo_tiptopstartup.png"), "html", null, true);
        echo "\" width=\"200px\"/></a>
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
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> Inscription</a>
            </li>
            ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 36
                echo "            <li>
                <a href=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("app_user_index");
                echo "\"><i class=\"glyphicon glyphicon-home\"></i> Accueil</a>
            </li>
                ";
            }
            // line 40
            echo "            ";
        }
        // line 41
        echo "
            ";
        // line 45
        echo "        </ul>
        <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 49
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 50
                echo "                    <li>
                        <a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("user_default_index");
                echo "\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Mon Espace</a>
                    </li>

                ";
            }
            // line 55
            echo "
                    <li>
                        <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> Déconnexion</a>
                    </li>
            ";
        } else {
            // line 60
            echo "                    <li style=\"margin-top: 8px;\">
                        ";
            // line 61
            echo twig_include($this->env, $context, "AppBundle:User:login.html.twig");
            echo "
                    </li>
            ";
        }
        // line 64
        echo "            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"\">Qui Sommes-Nous <i class=\"fa fa-question\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"\">Contact <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"\">Newsletter <i class=\"fa fa-bell\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"\">Signaler <i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i></a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- /top nav -->
";
        
        $__internal_0b413d5d4f5e71b140676890b63b8b9a2f7c4cc9cbb59e5ce26a0e42076b7bd5->leave($__internal_0b413d5d4f5e71b140676890b63b8b9a2f7c4cc9cbb59e5ce26a0e42076b7bd5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 64,  138 => 61,  135 => 60,  129 => 57,  125 => 55,  118 => 51,  115 => 50,  112 => 49,  110 => 48,  105 => 45,  102 => 41,  99 => 40,  93 => 37,  90 => 36,  87 => 35,  85 => 34,  80 => 32,  76 => 30,  73 => 29,  62 => 20,  59 => 19,  57 => 18,  51 => 15,  45 => 11,  35 => 2,  23 => 1,);
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
/*         <div class="navbar-form navbar-left" >*/
/*             <a href="#"><img class="img-responsive" src="{{ asset('assets/img/logo_tiptopstartup.png') }}" width="200px"/></a>*/
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
/*                 <a href="{{ path('app_default_create')}}"><i class="glyphicon glyphicon-home"></i> Inscription</a>*/
/*             </li>*/
/*             {%  if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*             <li>*/
/*                 <a href="{{ path('app_user_index') }}"><i class="glyphicon glyphicon-home"></i> Accueil</a>*/
/*             </li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
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
/* */
/*                 {% endif %}*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a>*/
/*                     </li>*/
/*             {% else %}*/
/*                     <li style="margin-top: 8px;">*/
/*                         {{ include('AppBundle:User:login.html.twig') }}*/
/*                     </li>*/
/*             {% endif %}*/
/*             <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="">Qui Sommes-Nous <i class="fa fa-question" aria-hidden="true"></i></a></li>*/
/*                     <li><a href="">Contact <i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>*/
/*                     <li><a href="">Newsletter <i class="fa fa-bell" aria-hidden="true"></i></a></li>*/
/*                     <li><a href="">Signaler <i class="fa fa-bullhorn" aria-hidden="true"></i></a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* </div>*/
/* <!-- /top nav -->*/
/* {% endblock %}*/
/* */
