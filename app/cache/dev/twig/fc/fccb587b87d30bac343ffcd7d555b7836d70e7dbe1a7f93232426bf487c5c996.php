<?php

/* @App/Default/create.html.twig */
class __TwigTemplate_f1769362740fa696e2668043fd0f7f0b8d0732951de928880c9890435fcf9e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Default/create.html.twig", 1);
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
        $__internal_8617a2cc242e8b69f3c02ca906148a3c0f600433883c77e865c3b0ed356368fe = $this->env->getExtension("native_profiler");
        $__internal_8617a2cc242e8b69f3c02ca906148a3c0f600433883c77e865c3b0ed356368fe->enter($__internal_8617a2cc242e8b69f3c02ca906148a3c0f600433883c77e865c3b0ed356368fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8617a2cc242e8b69f3c02ca906148a3c0f600433883c77e865c3b0ed356368fe->leave($__internal_8617a2cc242e8b69f3c02ca906148a3c0f600433883c77e865c3b0ed356368fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75c1080a6cf6b12464d0e397cad59d5bdaaf20af1dcb3d337b3e01d73358e486 = $this->env->getExtension("native_profiler");
        $__internal_75c1080a6cf6b12464d0e397cad59d5bdaaf20af1dcb3d337b3e01d73358e486->enter($__internal_75c1080a6cf6b12464d0e397cad59d5bdaaf20af1dcb3d337b3e01d73358e486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"padding\">
        <div class=\"full col-xs-12\">

            <!-- content -->
            <div class=\"row\">

                <!-- main col left -->
                <div class=\"col-xs-12 col-lg-8\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            ";
        // line 16
        echo "                            <div>
                                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "                                    <div class=\"grid-item\"></div>
                                    <div class=\"grid-item\"></div>
                                    ";
            // line 23
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h1 class=\"lead\">Inscription</h1>
                            ";
        // line 34
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 35
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <div class=\"text-center\">
                                <button class=\"btn btn-success btn-block\" type=\"submit\">Valider</button>
                            </div>
                            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_75c1080a6cf6b12464d0e397cad59d5bdaaf20af1dcb3d337b3e01d73358e486->leave($__internal_75c1080a6cf6b12464d0e397cad59d5bdaaf20af1dcb3d337b3e01d73358e486_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb9e9df2dd1eea00a6d959b7f020d7ab4fac1a8390667a9d0bd89cb335752b97 = $this->env->getExtension("native_profiler");
        $__internal_fb9e9df2dd1eea00a6d959b7f020d7ab4fac1a8390667a9d0bd89cb335752b97->enter($__internal_fb9e9df2dd1eea00a6d959b7f020d7ab4fac1a8390667a9d0bd89cb335752b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    var \$grid = \$('.grid').isotope({
    itemSelector: '.grid-item',
    masonry: {
    columnWidth: 100

    }
    });

    \$grid.on( 'click', '.grid-item', function( event ) {
    \$( event.currentTarget ).toggleClass('is-expanded');
    \$grid.isotope('layout');
    });
    </script>
";
        
        $__internal_fb9e9df2dd1eea00a6d959b7f020d7ab4fac1a8390667a9d0bd89cb335752b97->leave($__internal_fb9e9df2dd1eea00a6d959b7f020d7ab4fac1a8390667a9d0bd89cb335752b97_prof);

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
        return array (  122 => 51,  116 => 50,  101 => 41,  94 => 37,  90 => 36,  85 => 35,  83 => 34,  71 => 24,  65 => 23,  61 => 18,  57 => 17,  54 => 16,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 <div class="col-xs-12 col-lg-8">*/
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body">*/
/*                             {# <img class="img-responsive" src="{{ asset('assets/unnamed.jpg') }}"/> #}*/
/*                             <div>*/
/*                                 {% for i in 1..20 %}*/
/*                                     <div class="grid-item"></div>*/
/*                                     <div class="grid-item"></div>*/
/*                                     {#    {% for j in 1..1 %}*/
/*                                             <div class="grid-item grid-item--2"></div>*/
/*                                         {% endfor %}#}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-lg-4">*/
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body">*/
/*                             <h1 class="lead">Inscription</h1>*/
/*                             {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
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
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
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
/*     </script>*/
/* {% endblock %}*/
