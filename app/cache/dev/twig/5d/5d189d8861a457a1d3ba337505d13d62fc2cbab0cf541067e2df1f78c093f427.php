<?php

/* @User/Default/index.html.twig */
class __TwigTemplate_190d1c9855321cbcd1a33f3344a7280344fc09365216b29dac59bebf6adbdd60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@User/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b006560afea797c10aefa8bc29d3b220ee8e593129cead0142aee6ee0c4c394 = $this->env->getExtension("native_profiler");
        $__internal_2b006560afea797c10aefa8bc29d3b220ee8e593129cead0142aee6ee0c4c394->enter($__internal_2b006560afea797c10aefa8bc29d3b220ee8e593129cead0142aee6ee0c4c394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b006560afea797c10aefa8bc29d3b220ee8e593129cead0142aee6ee0c4c394->leave($__internal_2b006560afea797c10aefa8bc29d3b220ee8e593129cead0142aee6ee0c4c394_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e29ec6b045eb02cdd0721262a6a1f9d29de9e9eb2fea62561a48dddae4818e4 = $this->env->getExtension("native_profiler");
        $__internal_1e29ec6b045eb02cdd0721262a6a1f9d29de9e9eb2fea62561a48dddae4818e4->enter($__internal_1e29ec6b045eb02cdd0721262a6a1f9d29de9e9eb2fea62561a48dddae4818e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"padding\">
    <div class=\"full col-xs-12\">

        <!-- content -->
        <div class=\"row\">

            <!-- main col left -->
            <div class=\"col-xs-12 col-lg-8\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\" style='background-image: url(\"../../../web/assets/unnamed.jpg\");
                                                      background-repeat: no-repeat;
                                                      background-size: cover;
                                                      height: 30vh;
                                                      background-color: #9898ae;'>
                        <div class=\"pull-right\">
                            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("app_default_create");
        echo "\" class=\"pull-right\">
                                <i class=\"fa fa-pencil-square fa-2x\" style=\"margin-bottom: 2px\" aria-hidden=\"true\"></i>
                            </a>
                        </div>

                        <h1 style=\"text-shadow: 1px 1px 2px black;
                                   font-size: 2.9vh;
                                   background-color: white;
                                   line-height: inherit;
                                   margin-top: 6vh;
                                   color: #3b5999;\">Mon TipTopEspace</h1>
                            <div class=\"pull-left\">
                                <div id=\"picture-profil\" class=\"panel\" style=\"padding: 2px;width: 100%;margin-top: 10%;\">
                                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "path", array()), "img/VADOR.jpg")) : ("img/VADOR.jpg"))), "html", null, true);
        echo "\" class=\"img-responsive\" width=\"100\" height=\"100px\"/>
                                </div>
                            </div>
                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-default\"style=\"width: 100%;\">TipTopContact <i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i></button>
                                <br>
                                <button type=\"submit\" class=\"btn btn-warning\" style=\"margin-top: 2px;width: 100%;\">TipTopLike <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i></button>
                            </div>

                                ";
        // line 45
        echo "                    </div>
                    <div class=\"panel-body\">
                        <p class=\"text-center\">Bonjour ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo ",</p>
                        <div class=\"clearfix\"></div>
                            <div class=\"datauser\">
                                <p>Mail: <span id=\"test0\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span></p>
                                <hr>
                                <p>Nom: <span id=\"test1\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</span></p>
                                <hr>
                                <p>Prenom: <span id=\"test2\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</span></p>
                                <hr>
                                <p>Numéro de Tél: <span id=\"test3\"></span></p>
                                <hr>
                                <p>Job: <span id=\"test4\"></span></p>
                                <hr>
                                ";
        // line 60
        if ($this->env->getExtension('security')->isGranted("ROLE_STARTUP")) {
            // line 61
            echo "                                <p>Nom de la Société : <span id=\"test5\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "compagny", array()), "html", null, true);
            echo "</span></p>
                                <hr>
                                <p>Logo de la Société : <span id=\"test6\"><img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo50x50", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo50x50", array()), "img/VADOR.jpg")) : ("img/VADOR.jpg"))), "html", null, true);
            echo "\" width=\"50px\" height=\"50px\"/></p></span>
                                <hr>
                                ";
        }
        // line 66
        echo "                                <p>Adresse: <span id=\"test7\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adress", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "zipCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</span></p>
                                <hr>
                                <p>Pays: <span id=\"test8\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country", array()), "html", null, true);
        echo "</span></p>
                                <hr>
                                <p>Twitter:<span id=\"test9\"><a href=\"https://twitter.com/";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lientwitter", array()), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lientwitter", array()), "html", null, true);
        echo " <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></span></p>
                                <hr>
                                <p>Profil: <span id=\"test10\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()), "html", null, true);
        echo "</span></p>
                                <hr>
                            </div>
                        <ul class=\"list-unstyled\">
                            <li>Dashboard</li>
                            <li>Darkside</li>
                            <li>Greenfield</li>
                            ";
        // line 79
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "

                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 40%\"></div>
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\"></div>
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 40%\"></div>
                            </div>
                            <br/>
                            <hr>
                            <p>Profil compléter à : </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-success\" id=\"bartest\"></div>
                            </div>
                            <progress id=\"MaBarreProgression\" value=\"0\" max=\"100\"></progress>
                            <br>
                            <span class=\"progress-value\">Téléchargement 0%</span>

                        </ul>
                    </div>
                </div>


            </div>

                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                                <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("user_default_password");
        echo "\" class=\"text-center text-warning\">
                                    <i class=\"fa fa-cog fa-1x\" aria-hidden=\"true\"> Modifier votre mot de passe</i>
                                </a>
                        </div>
                        <div class=\"panel-heading\">
                            <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("user_default_modifpp");
        echo "\" class=\"text-center text-warning\">
                                <i class=\"fa fa-cog fa-1x\" aria-hidden=\"true\"> Modifier mon image de profil</i>
                            </a>
                        </div>
                        <div class=\"panel-heading\">
                            ";
        // line 121
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_STARTUP")) {
            // line 122
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_default_updatestartup");
            echo "\" class=\"text-center text-warning\">
                                <i class=\"fa fa-pencil-square fa-1x\" aria-hidden=\"true\"> Renseigner votre profil</i>
                            </a>
                        ";
        }
        // line 126
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_INVESTISSEUR")) {
            // line 127
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_default_updateinvestisseur");
            echo "\" class=\"text-center text-warning\">
                                <i class=\"fa fa-pencil-square fa-1x\" aria-hidden=\"true\"> Modifier mon profil</i>
                            </a>
                        ";
        }
        // line 131
        echo "                        </div>
                        ";
        // line 132
        if ($this->env->getExtension('security')->isGranted("ROLE_STARTUP")) {
            // line 133
            echo "                            <div class=\"panel-heading\">

                                ";
            // line 135
            $this->env->getExtension('form')->renderer->setTheme((isset($context["Postform"]) ? $context["Postform"] : $this->getContext($context, "Postform")), array(0 => "bootstrap_3_layout.html.twig"));
            // line 136
            echo "                                ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["Postform"]) ? $context["Postform"] : $this->getContext($context, "Postform")), 'form_start');
            echo "
                                ";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Postform"]) ? $context["Postform"] : $this->getContext($context, "Postform")), 'errors');
            echo "
                                ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Postform"]) ? $context["Postform"] : $this->getContext($context, "Postform")), 'widget');
            echo "
                                <div class=\"text-center\">
                                    <button class=\"btn btn-primart btn-block\" type=\"submit\">Poster</button>
                                </div>
                                ";
            // line 142
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["Postform"]) ? $context["Postform"] : $this->getContext($context, "Postform")), 'form_end');
            echo "
                             </div>

                            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($context["user"], "posts", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 146
                echo "                                <div class=\"panel-heading\">
                                    ";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "message", array()), "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "
                                ";
            // line 154
            echo "
                        ";
        }
        // line 156
        echo "                    </div>
                </div>
            </div>


    </div>
</div>
";
        
        $__internal_1e29ec6b045eb02cdd0721262a6a1f9d29de9e9eb2fea62561a48dddae4818e4->leave($__internal_1e29ec6b045eb02cdd0721262a6a1f9d29de9e9eb2fea62561a48dddae4818e4_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b4de2064ca3b88c5a94dcafd511e3d97173fcd45174dcb719d77de8bb6c1bb8 = $this->env->getExtension("native_profiler");
        $__internal_3b4de2064ca3b88c5a94dcafd511e3d97173fcd45174dcb719d77de8bb6c1bb8->enter($__internal_3b4de2064ca3b88c5a94dcafd511e3d97173fcd45174dcb719d77de8bb6c1bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">


        for (var num = 0; num < 11; num++) {

            if(\$('#test'+num+'').html() == \"\"){
                alert('numero de : #test'+num+' est vide');
            } else {
                alert('numero de : #test'+num+' est pas vide');
                \$('#bartest').css(\"width\", \"20%\");
            }
        }

        \$(document).ready(function() {
            var MaBarreProgression = \$('#MaBarreProgression'),
                    max = MaBarreProgression.attr('max'),
                    time = 100,
                    value = MaBarreProgression.val();

            var Telechargement = function() {
                value += 1;
                addValue = MaBarreProgression.val(value);

                \$('.progress-value').html('Téléchargement '+ value + '%');

                if (value == max) {
                    clearInterval(animation);
                    \$('.progress-value').html('Téléchargement Terminé !');
                }
            };

            var animation = setInterval(function() {
                Telechargement();
            }, time);

        });
    </script>

";
        
        $__internal_3b4de2064ca3b88c5a94dcafd511e3d97173fcd45174dcb719d77de8bb6c1bb8->leave($__internal_3b4de2064ca3b88c5a94dcafd511e3d97173fcd45174dcb719d77de8bb6c1bb8_prof);

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
        return array (  306 => 166,  300 => 165,  286 => 156,  282 => 154,  279 => 150,  270 => 147,  267 => 146,  263 => 145,  257 => 142,  250 => 138,  246 => 137,  241 => 136,  239 => 135,  235 => 133,  233 => 132,  230 => 131,  222 => 127,  219 => 126,  211 => 122,  208 => 121,  200 => 111,  192 => 106,  162 => 79,  152 => 72,  145 => 70,  140 => 68,  130 => 66,  124 => 63,  118 => 61,  116 => 60,  107 => 54,  102 => 52,  97 => 50,  91 => 47,  87 => 45,  75 => 33,  59 => 20,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <div class="col-xs-12 col-lg-8">*/
/* */
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading" style='background-image: url("../../../web/assets/unnamed.jpg");*/
/*                                                       background-repeat: no-repeat;*/
/*                                                       background-size: cover;*/
/*                                                       height: 30vh;*/
/*                                                       background-color: #9898ae;'>*/
/*                         <div class="pull-right">*/
/*                             <a href="{{ path('app_default_create') }}" class="pull-right">*/
/*                                 <i class="fa fa-pencil-square fa-2x" style="margin-bottom: 2px" aria-hidden="true"></i>*/
/*                             </a>*/
/*                         </div>*/
/* */
/*                         <h1 style="text-shadow: 1px 1px 2px black;*/
/*                                    font-size: 2.9vh;*/
/*                                    background-color: white;*/
/*                                    line-height: inherit;*/
/*                                    margin-top: 6vh;*/
/*                                    color: #3b5999;">Mon TipTopEspace</h1>*/
/*                             <div class="pull-left">*/
/*                                 <div id="picture-profil" class="panel" style="padding: 2px;width: 100%;margin-top: 10%;">*/
/*                                     <img src="{{ asset(user.path|default('img/VADOR.jpg')) }}" class="img-responsive" width="100" height="100px"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="pull-right">*/
/*                                 <button type="submit" class="btn btn-default"style="width: 100%;">TipTopContact <i class="fa fa-comment-o" aria-hidden="true"></i></button>*/
/*                                 <br>*/
/*                                 <button type="submit" class="btn btn-warning" style="margin-top: 2px;width: 100%;">TipTopLike <i class="fa fa-star-o" aria-hidden="true"></i></button>*/
/*                             </div>*/
/* */
/*                                 {#<a href="#" class="pull-right">*/
/*                                 <i class="fa fa-picture-o text-info" aria-hidden="true"> Changer son image de profil</i>*/
/*                             </a>#}*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p class="text-center">Bonjour {{ user.lastname }},</p>*/
/*                         <div class="clearfix"></div>*/
/*                             <div class="datauser">*/
/*                                 <p>Mail: <span id="test0">{{ user.username }}</span></p>*/
/*                                 <hr>*/
/*                                 <p>Nom: <span id="test1">{{ user.lastname }}</span></p>*/
/*                                 <hr>*/
/*                                 <p>Prenom: <span id="test2">{{ user.firstname }}</span></p>*/
/*                                 <hr>*/
/*                                 <p>Numéro de Tél: <span id="test3"></span></p>*/
/*                                 <hr>*/
/*                                 <p>Job: <span id="test4"></span></p>*/
/*                                 <hr>*/
/*                                 {% if is_granted('ROLE_STARTUP') %}*/
/*                                 <p>Nom de la Société : <span id="test5">{{ user.compagny }}</span></p>*/
/*                                 <hr>*/
/*                                 <p>Logo de la Société : <span id="test6"><img src="{{ asset(user.logo50x50|default('img/VADOR.jpg')) }}" width="50px" height="50px"/></p></span>*/
/*                                 <hr>*/
/*                                 {% endif %}*/
/*                                 <p>Adresse: <span id="test7">{{ user.adress }} {{ user.zipCode }} {{  user.city }}</span></p>*/
/*                                 <hr>*/
/*                                 <p>Pays: <span id="test8">{{ user.country }}</span></p>*/
/*                                 <hr>*/
/*                                 <p>Twitter:<span id="test9"><a href="https://twitter.com/{{ user.lientwitter}}"> {{ user.lientwitter }} <i class="fa fa-twitter" aria-hidden="true"></i></a></span></p>*/
/*                                 <hr>*/
/*                                 <p>Profil: <span id="test10">{{ user.role }}</span></p>*/
/*                                 <hr>*/
/*                             </div>*/
/*                         <ul class="list-unstyled">*/
/*                             <li>Dashboard</li>*/
/*                             <li>Darkside</li>*/
/*                             <li>Greenfield</li>*/
/*                             {{ dump(user) }}*/
/* */
/*                             <div class="progress progress-striped active">*/
/*                                 <div class="progress-bar progress-bar-success" style="width: 40%"></div>*/
/*                                 <div class="progress-bar progress-bar-warning" style="width: 20%"></div>*/
/*                                 <div class="progress-bar progress-bar-danger" style="width: 40%"></div>*/
/*                             </div>*/
/*                             <br/>*/
/*                             <hr>*/
/*                             <p>Profil compléter à : </p>*/
/*                             <div class="progress progress-striped active">*/
/*                                 <div class="progress-bar progress-bar-success" id="bartest"></div>*/
/*                             </div>*/
/*                             <progress id="MaBarreProgression" value="0" max="100"></progress>*/
/*                             <br>*/
/*                             <span class="progress-value">Téléchargement 0%</span>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/*                 <div class="col-lg-4">*/
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
/*                         <div class="panel-heading">*/
/*                             {#{% if is_granted('ROLE_USER') %}*/
/*                             <a href="{{ path('user_default_update') }}" class="text-center text-warning">*/
/*                                 <i class="fa fa-pencil-square fa-1x" aria-hidden="true"> Modifier mon profil</i>*/
/*                             </a>*/
/*                         {% endif %}#}*/
/*                         {% if is_granted('ROLE_STARTUP') %}*/
/*                             <a href="{{ path('user_default_updatestartup') }}" class="text-center text-warning">*/
/*                                 <i class="fa fa-pencil-square fa-1x" aria-hidden="true"> Renseigner votre profil</i>*/
/*                             </a>*/
/*                         {% endif %}*/
/*                         {% if is_granted('ROLE_INVESTISSEUR') %}*/
/*                             <a href="{{ path('user_default_updateinvestisseur') }}" class="text-center text-warning">*/
/*                                 <i class="fa fa-pencil-square fa-1x" aria-hidden="true"> Modifier mon profil</i>*/
/*                             </a>*/
/*                         {% endif %}*/
/*                         </div>*/
/*                         {% if is_granted('ROLE_STARTUP') %}*/
/*                             <div class="panel-heading">*/
/* */
/*                                 {% form_theme Postform 'bootstrap_3_layout.html.twig' %}*/
/*                                 {{ form_start(Postform) }}*/
/*                                 {{ form_errors(Postform) }}*/
/*                                 {{ form_widget(Postform) }}*/
/*                                 <div class="text-center">*/
/*                                     <button class="btn btn-primart btn-block" type="submit">Poster</button>*/
/*                                 </div>*/
/*                                 {{ form_end(Postform) }}*/
/*                              </div>*/
/* */
/*                             {% for user in  user.posts|reverse %}*/
/*                                 <div class="panel-heading">*/
/*                                     {{ user.message }}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/*                                 {#{% for  %}*/
/*                                 <td>{{  }}</td>*/
/*                                 { endfor %}#}*/
/* */
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/* */
/* */
/*         for (var num = 0; num < 11; num++) {*/
/* */
/*             if($('#test'+num+'').html() == ""){*/
/*                 alert('numero de : #test'+num+' est vide');*/
/*             } else {*/
/*                 alert('numero de : #test'+num+' est pas vide');*/
/*                 $('#bartest').css("width", "20%");*/
/*             }*/
/*         }*/
/* */
/*         $(document).ready(function() {*/
/*             var MaBarreProgression = $('#MaBarreProgression'),*/
/*                     max = MaBarreProgression.attr('max'),*/
/*                     time = 100,*/
/*                     value = MaBarreProgression.val();*/
/* */
/*             var Telechargement = function() {*/
/*                 value += 1;*/
/*                 addValue = MaBarreProgression.val(value);*/
/* */
/*                 $('.progress-value').html('Téléchargement '+ value + '%');*/
/* */
/*                 if (value == max) {*/
/*                     clearInterval(animation);*/
/*                     $('.progress-value').html('Téléchargement Terminé !');*/
/*                 }*/
/*             };*/
/* */
/*             var animation = setInterval(function() {*/
/*                 Telechargement();*/
/*             }, time);*/
/* */
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
