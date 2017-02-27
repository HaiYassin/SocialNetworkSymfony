<?php

/* UserBundle:Default:updatestartup.html.twig */
class __TwigTemplate_3db91586030f34177f1643bf2dd9a194d02658bbf166d2a0b274e447974c132d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "UserBundle:Default:updatestartup.html.twig", 1);
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
        $__internal_8465c4532df8a3669597ae8ec1494e940c0cf7d69f2f08174b39676358f8ae82 = $this->env->getExtension("native_profiler");
        $__internal_8465c4532df8a3669597ae8ec1494e940c0cf7d69f2f08174b39676358f8ae82->enter($__internal_8465c4532df8a3669597ae8ec1494e940c0cf7d69f2f08174b39676358f8ae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:updatestartup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8465c4532df8a3669597ae8ec1494e940c0cf7d69f2f08174b39676358f8ae82->leave($__internal_8465c4532df8a3669597ae8ec1494e940c0cf7d69f2f08174b39676358f8ae82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3560a2c3347e1d012572bef6c7317dcde0ea54a8ceb79c6403f8b66f7248c4c2 = $this->env->getExtension("native_profiler");
        $__internal_3560a2c3347e1d012572bef6c7317dcde0ea54a8ceb79c6403f8b66f7248c4c2->enter($__internal_3560a2c3347e1d012572bef6c7317dcde0ea54a8ceb79c6403f8b66f7248c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"padding\">
    <div class=\"full col-xs-12\">

        <!-- content -->
        <div class=\"row\">

            <!-- main col left -->
            <div class=\"col-xs-8 col-lg-8\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        ";
        // line 15
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this, 1 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 16
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    ";
        // line 29
        echo "                        <br>
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <a class=\"btn btn-default btn-block\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("user_default_index");
        echo "\">Annuler</a>
                            </div>
                            <div class=\"col-xs-6\">
                                <button class=\"btn btn-warning btn-block\">Modifier</button>
                            </div>
                        </div>
                        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_3560a2c3347e1d012572bef6c7317dcde0ea54a8ceb79c6403f8b66f7248c4c2->leave($__internal_3560a2c3347e1d012572bef6c7317dcde0ea54a8ceb79c6403f8b66f7248c4c2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:updatestartup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  73 => 32,  68 => 29,  64 => 18,  60 => 17,  55 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                         {% form_theme form _self 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*                         {{ form_start(form) }}*/
/*                         {{ form_errors(form) }}*/
/*                         {{ form_widget(form) }}*/
/*                     {#  {{  form_row(form.username) }}*/
/*                         {{ form_row(form.lastname) }}*/
/*                         {{ form_row(form.firstname) }}*/
/*                         {{ form_row(form.adress) }}*/
/*                         {{ form_row(form.zipCode) }}*/
/*                         {{ form_row(form.city) }}*/
/*                         {{ form_row(form.country) }}*/
/*                         {% if is_granted('ROLE_STARTUP') %}*/
/*                         {{ form_row(form.compagny) }}*/
/*                         {% endif %}  #}*/
/*                         <br>*/
/*                         <div class="row">*/
/*                             <div class="col-xs-6">*/
/*                                 <a class="btn btn-default btn-block" href="{{ path('user_default_index') }}">Annuler</a>*/
/*                             </div>*/
/*                             <div class="col-xs-6">*/
/*                                 <button class="btn btn-warning btn-block">Modifier</button>*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
