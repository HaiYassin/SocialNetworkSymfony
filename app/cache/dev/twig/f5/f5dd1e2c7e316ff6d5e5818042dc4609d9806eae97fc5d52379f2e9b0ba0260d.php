<?php

/* UserBundle:Default:modifpp.html.twig */
class __TwigTemplate_b07c5a1ef4bec696bac6affe4f79944c1fa35efb502446c9b6682584f9e9e4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "UserBundle:Default:modifpp.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8526f615bb3d8f3138963209e1af35825eb1968c14528a0f258058e04567ddd5 = $this->env->getExtension("native_profiler");
        $__internal_8526f615bb3d8f3138963209e1af35825eb1968c14528a0f258058e04567ddd5->enter($__internal_8526f615bb3d8f3138963209e1af35825eb1968c14528a0f258058e04567ddd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:modifpp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8526f615bb3d8f3138963209e1af35825eb1968c14528a0f258058e04567ddd5->leave($__internal_8526f615bb3d8f3138963209e1af35825eb1968c14528a0f258058e04567ddd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_605de34ed39f51650ac0acfeec74b63ed19306ed10a6575c634b21f8f164c355 = $this->env->getExtension("native_profiler");
        $__internal_605de34ed39f51650ac0acfeec74b63ed19306ed10a6575c634b21f8f164c355->enter($__internal_605de34ed39f51650ac0acfeec74b63ed19306ed10a6575c634b21f8f164c355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon image de profil";
        
        $__internal_605de34ed39f51650ac0acfeec74b63ed19306ed10a6575c634b21f8f164c355->leave($__internal_605de34ed39f51650ac0acfeec74b63ed19306ed10a6575c634b21f8f164c355_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a79c60b1f7b280e9cad3b14f397b617b4fdb58d31a142a072321b9d9159fa2a = $this->env->getExtension("native_profiler");
        $__internal_8a79c60b1f7b280e9cad3b14f397b617b4fdb58d31a142a072321b9d9159fa2a->enter($__internal_8a79c60b1f7b280e9cad3b14f397b617b4fdb58d31a142a072321b9d9159fa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"padding\">
        <div class=\"full col-xs-12\">

            <!-- content -->
            <div class=\"row\">

                <!-- main col left -->
                <div class=\"col-xs-8 col-lg-8\">

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            ";
        // line 18
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this, 1 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 19
        echo "                            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br>
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <a class=\"btn btn-default btn-block\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_default_index");
        echo "\">Annuler</a>
                                </div>
                                <div class=\"col-xs-6\">
                                    <button class=\"btn btn-warning btn-block\">Modifier</button>
                                </div>
                            </div>
                            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8a79c60b1f7b280e9cad3b14f397b617b4fdb58d31a142a072321b9d9159fa2a->leave($__internal_8a79c60b1f7b280e9cad3b14f397b617b4fdb58d31a142a072321b9d9159fa2a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:modifpp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  85 => 25,  78 => 21,  74 => 20,  69 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}Mon image de profil{% endblock %}*/
/* */
/* {% block body %}*/
/* */
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
/*                         <div class="panel-heading">*/
/*                             {% form_theme form _self 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*                             {{ form_start(form) }}*/
/*                             {{ form_errors(form) }}*/
/*                             {{ form_widget(form) }}*/
/*                             <br>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6">*/
/*                                     <a class="btn btn-default btn-block" href="{{ path('user_default_index') }}">Annuler</a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6">*/
/*                                     <button class="btn btn-warning btn-block">Modifier</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {{ form_end(form) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
