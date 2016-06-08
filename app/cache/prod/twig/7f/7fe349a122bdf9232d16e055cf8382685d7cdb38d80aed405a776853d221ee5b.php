<?php

/* @User/Default/index.html.twig */
class __TwigTemplate_9460ba92af19c8950f7a32d454064be8024217f631cdea353f0e0ad0ed97f6fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@User/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"padding\">
    <div class=\"full col-xs-12\">

        <!-- content -->
        <div class=\"row\">

            <!-- main col left -->
            <div class=\"col-xs-8 col-lg-8\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <div class=\"pull-right\">
                            <a href=\"#\" class=\"pull-right\">
                                <i class=\"fa fa-pencil-square fa-2x\" aria-hidden=\"true\"></i>
                            </a>
                        </div>

                        <h1>Mon Espace</h1>
                        <div id=\"picture-profil\" class=\"thumbnail\">
                            <a href=\"#\" class=\"pull-right\">
                                <i class=\"fa fa-picture-o text-info\"\" aria-hidden=\"true\"> Changer son image de profil</i>
                            </a>
                            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "path", array()), "img/apple-touch-icon.png")) : ("img/apple-touch-icon.png"))), "html", null, true);
        echo "\" class=\"img-responsive\" width=\"200\"/>
                        </div>


                    </div>
                    <div class=\"panel-body\">
                        <p class=\"text-center\">Bonjour ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname", array()), "html", null, true);
        echo ",</p>
                        <div class=\"clearfix\"></div>
                        <p>Mail: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <p>Nom: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <p>Prenom: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <p>Numéro de Tél: </p>
                        <hr>
                        <p>Job: </p>
                        <hr>
                        <p>Adresse: </p>
                        <hr>
                        <p>Pays: </p>
                        <hr>
                        <p>Profil: </p>
                        <hr>
                        <ul class=\"list-unstyled\">
                            <li>Dashboard</li>
                            <li>Darkside</li>
                            <li>Greenfield</li>
                        </ul>
                    </div>
                </div>


            </div>

                <div class=\"col-xs-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                                <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("user_default_password");
        echo "\" class=\"text-center text-warning\">
                                    <i class=\"fa fa-cog fa-1x\" aria-hidden=\"true\"> Modifier votre mot de passe</i>
                                </a>
                        </div>
                        <div class=\"panel-heading\">
                            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("user_default_modifpp");
        echo "\" class=\"text-center text-warning\">
                                <i class=\"fa fa-cog fa-1x\" aria-hidden=\"true\"> Modifier mon image de profil</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@User/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 69,  108 => 64,  79 => 38,  74 => 36,  69 => 34,  64 => 32,  55 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="padding">*/
/*     <div class="full col-xs-12">*/
/* */
/*         <!-- content -->*/
/*         <div class="row">*/
/* */
/*             <!-- main col left -->*/
/*             <div class="col-xs-8 col-lg-8">*/
/* */
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <div class="pull-right">*/
/*                             <a href="#" class="pull-right">*/
/*                                 <i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i>*/
/*                             </a>*/
/*                         </div>*/
/* */
/*                         <h1>Mon Espace</h1>*/
/*                         <div id="picture-profil" class="thumbnail">*/
/*                             <a href="#" class="pull-right">*/
/*                                 <i class="fa fa-picture-o text-info"" aria-hidden="true"> Changer son image de profil</i>*/
/*                             </a>*/
/*                             <img src="{{ asset(user.path|default('img/apple-touch-icon.png')) }}" class="img-responsive" width="200"/>*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p class="text-center">Bonjour {{ user.lastname }},</p>*/
/*                         <div class="clearfix"></div>*/
/*                         <p>Mail: {{ user.username }}</p>*/
/*                         <hr>*/
/*                         <p>Nom: {{ user.lastname }}</p>*/
/*                         <hr>*/
/*                         <p>Prenom: {{ user.firstname }}</p>*/
/*                         <hr>*/
/*                         <p>Numéro de Tél: </p>*/
/*                         <hr>*/
/*                         <p>Job: </p>*/
/*                         <hr>*/
/*                         <p>Adresse: </p>*/
/*                         <hr>*/
/*                         <p>Pays: </p>*/
/*                         <hr>*/
/*                         <p>Profil: </p>*/
/*                         <hr>*/
/*                         <ul class="list-unstyled">*/
/*                             <li>Dashboard</li>*/
/*                             <li>Darkside</li>*/
/*                             <li>Greenfield</li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/*                 <div class="col-xs-3">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                                 <a href="{{ path('user_default_password') }}" class="text-center text-warning">*/
/*                                     <i class="fa fa-cog fa-1x" aria-hidden="true"> Modifier votre mot de passe</i>*/
/*                                 </a>*/
/*                         </div>*/
/*                         <div class="panel-heading">*/
/*                             <a href="{{ path('user_default_modifpp') }}" class="text-center text-warning">*/
/*                                 <i class="fa fa-cog fa-1x" aria-hidden="true"> Modifier mon image de profil</i>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
