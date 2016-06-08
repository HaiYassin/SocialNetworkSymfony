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
        $__internal_70390bd9e653d4510c4105113dbcd135fe802964bd5d1aca361fa36db24d331a = $this->env->getExtension("native_profiler");
        $__internal_70390bd9e653d4510c4105113dbcd135fe802964bd5d1aca361fa36db24d331a->enter($__internal_70390bd9e653d4510c4105113dbcd135fe802964bd5d1aca361fa36db24d331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::_nav.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_70390bd9e653d4510c4105113dbcd135fe802964bd5d1aca361fa36db24d331a->leave($__internal_70390bd9e653d4510c4105113dbcd135fe802964bd5d1aca361fa36db24d331a_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_d7ae257a547fc892090889a1c4593fda944d0fe4ce53c2ca12b256fb076acf69 = $this->env->getExtension("native_profiler");
        $__internal_d7ae257a547fc892090889a1c4593fda944d0fe4ce53c2ca12b256fb076acf69->enter($__internal_d7ae257a547fc892090889a1c4593fda944d0fe4ce53c2ca12b256fb076acf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_d7ae257a547fc892090889a1c4593fda944d0fe4ce53c2ca12b256fb076acf69->leave($__internal_d7ae257a547fc892090889a1c4593fda944d0fe4ce53c2ca12b256fb076acf69_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 63,  123 => 60,  120 => 59,  114 => 56,  110 => 54,  106 => 52,  101 => 47,  98 => 46,  95 => 45,  93 => 44,  88 => 41,  85 => 37,  80 => 32,  76 => 30,  73 => 29,  62 => 20,  59 => 19,  57 => 18,  51 => 15,  45 => 11,  35 => 2,  23 => 1,);
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
