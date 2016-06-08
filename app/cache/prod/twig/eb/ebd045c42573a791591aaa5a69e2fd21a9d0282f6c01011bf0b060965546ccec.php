<?php

/* @App/Default/create.html.twig */
class __TwigTemplate_bc8fa3cac31c51e3a58262c07af29323f24203622880769c5d7ad1516b607b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Default/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "    <div class=\"padding\">
        <div class=\"full col-xs-12\">

            <!-- content -->
            <div class=\"row\">

                <!-- main col left -->
                <div class=\"col-xs-8 col-lg-8\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            ";
        // line 16
        echo "                            <div>
                                <div class=\"grid-item grid-item--width2\"></div>
                                <div class=\"grid-item grid-item--height2\"></div>
                                <div class=\"grid-item\"></div>
                                <div class=\"grid-item\"></div>
                                <div class=\"grid-item grid-item--width2 grid-item--height2\"></div>
                                <div class=\"grid-item grid-item--width2\"></div>
                                <div class=\"grid-item grid-item--width2\"></div>
                                <div class=\"grid-item grid-item--height2\"></div>
                                <div class=\"grid-item\"></div>
                                <div class=\"grid-item grid-item--width2\"></div>
                                <div class=\"grid-item grid-item--height2\"></div>
                                <div class=\"grid-item\"></div>
                                <div class=\"grid-item\"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"col-xs-4 col-lg-4\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h1 class=\"lead\">Inscription</h1>
                            ";
        // line 41
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 42
        echo "                            <div class=\"text-center\">
                                <select id=\"subType\" name=\"subType\">
                                    <INPUT type= \"radio\" name=\"user\" value=\"utilisateur\"> User
                                    <INPUT type= \"radio\" name=\"startup\" value=\"startup\"> Startup
                                    <INPUT type= \"radio\" name=\"investisseur\" value=\"investisseur\"> Investisseur
                            </div>
                            ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                            <div class=\"text-center\">
                                <button class=\"btn btn-success btn-block\" type=\"submit\">Valider</button>
                            </div>
                            ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        // line 64
        echo "    var \$grid = \$('.grid').isotope({
    itemSelector: '.grid-item',
    masonry: {
    columnWidth: 100

    }
    });

    \$grid.on( 'click', '.grid-item', function( event ) {
    \$( event.currentTarget ).toggleClass('is-expanded');
    \$grid.isotope('layout');
    });
";
    }

    public function getTemplateName()
    {
        return "@App/Default/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 64,  109 => 63,  97 => 54,  90 => 50,  86 => 49,  82 => 48,  74 => 42,  72 => 41,  45 => 16,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="padding">*/
/*         <div class="full col-xs-12">*/
/* */
/*             <!-- content -->*/
/*             <div class="row">*/
/* */
/*                 <!-- main col left -->*/
/*                 <div class="col-xs-8 col-lg-8">*/
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body">*/
/*                             {# <img class="img-responsive" src="{{ asset('assets/unnamed.jpg') }}"/> #}*/
/*                             <div>*/
/*                                 <div class="grid-item grid-item--width2"></div>*/
/*                                 <div class="grid-item grid-item--height2"></div>*/
/*                                 <div class="grid-item"></div>*/
/*                                 <div class="grid-item"></div>*/
/*                                 <div class="grid-item grid-item--width2 grid-item--height2"></div>*/
/*                                 <div class="grid-item grid-item--width2"></div>*/
/*                                 <div class="grid-item grid-item--width2"></div>*/
/*                                 <div class="grid-item grid-item--height2"></div>*/
/*                                 <div class="grid-item"></div>*/
/*                                 <div class="grid-item grid-item--width2"></div>*/
/*                                 <div class="grid-item grid-item--height2"></div>*/
/*                                 <div class="grid-item"></div>*/
/*                                 <div class="grid-item"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="col-xs-4 col-lg-4">*/
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body">*/
/*                             <h1 class="lead">Inscription</h1>*/
/*                             {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*                             <div class="text-center">*/
/*                                 <select id="subType" name="subType">*/
/*                                     <INPUT type= "radio" name="user" value="utilisateur"> User*/
/*                                     <INPUT type= "radio" name="startup" value="startup"> Startup*/
/*                                     <INPUT type= "radio" name="investisseur" value="investisseur"> Investisseur*/
/*                             </div>*/
/*                             {{ form_start(form) }}*/
/*                             {{ form_errors(form) }}*/
/*                             {{ form_widget(form) }}*/
/*                             <div class="text-center">*/
/*                                 <button class="btn btn-success btn-block" type="submit">Valider</button>*/
/*                             </div>*/
/*                             {{ form_end(form) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     var $grid = $('.grid').isotope({*/
/*     itemSelector: '.grid-item',*/
/*     masonry: {*/
/*     columnWidth: 100*/
/* */
/*     }*/
/*     });*/
/* */
/*     $grid.on( 'click', '.grid-item', function( event ) {*/
/*     $( event.currentTarget ).toggleClass('is-expanded');*/
/*     $grid.isotope('layout');*/
/*     });*/
/* {% endblock %}*/
