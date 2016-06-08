<?php

/* AppBundle:Default:create.html.twig */
class __TwigTemplate_9b6ac4279a8a55110c8cd942760ecb5141d568b1d725e9b1cfabfda361357b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:create.html.twig", 1);
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
        $__internal_352e733cf5c509cfb5af59a327dbd13b2ac2b3623e0dba2d3edd48d0e4b96c3f = $this->env->getExtension("native_profiler");
        $__internal_352e733cf5c509cfb5af59a327dbd13b2ac2b3623e0dba2d3edd48d0e4b96c3f->enter($__internal_352e733cf5c509cfb5af59a327dbd13b2ac2b3623e0dba2d3edd48d0e4b96c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352e733cf5c509cfb5af59a327dbd13b2ac2b3623e0dba2d3edd48d0e4b96c3f->leave($__internal_352e733cf5c509cfb5af59a327dbd13b2ac2b3623e0dba2d3edd48d0e4b96c3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e787995b606b33d6a3d60f1a899ee3c64cb3ac7344ac35c3b3370108aee75f5 = $this->env->getExtension("native_profiler");
        $__internal_6e787995b606b33d6a3d60f1a899ee3c64cb3ac7344ac35c3b3370108aee75f5->enter($__internal_6e787995b606b33d6a3d60f1a899ee3c64cb3ac7344ac35c3b3370108aee75f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 42
        echo "                            <div class=\"text-center\">
                                <select id=\"subType\" name=\"subType\">
                                    <INPUT type= \"radio\" name=\"user\" value=\"utilisateur\"> User
                                    <INPUT type= \"radio\" name=\"startup\" value=\"startup\"> Startup
                                    <INPUT type= \"radio\" name=\"investisseur\" value=\"investisseur\"> Investisseur
                            </div>
                            ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <div class=\"text-center\">
                                <button class=\"btn btn-success btn-block\" type=\"submit\">Valider</button>
                            </div>
                            ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6e787995b606b33d6a3d60f1a899ee3c64cb3ac7344ac35c3b3370108aee75f5->leave($__internal_6e787995b606b33d6a3d60f1a899ee3c64cb3ac7344ac35c3b3370108aee75f5_prof);

    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8c3f3cb748e97128903bd2cf0b890e2b3461222cbd587e27bde59ab9735be3d4 = $this->env->getExtension("native_profiler");
        $__internal_8c3f3cb748e97128903bd2cf0b890e2b3461222cbd587e27bde59ab9735be3d4->enter($__internal_8c3f3cb748e97128903bd2cf0b890e2b3461222cbd587e27bde59ab9735be3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_8c3f3cb748e97128903bd2cf0b890e2b3461222cbd587e27bde59ab9735be3d4->leave($__internal_8c3f3cb748e97128903bd2cf0b890e2b3461222cbd587e27bde59ab9735be3d4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 64,  121 => 63,  106 => 54,  99 => 50,  95 => 49,  91 => 48,  83 => 42,  81 => 41,  54 => 16,  41 => 4,  35 => 3,  11 => 1,);
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
