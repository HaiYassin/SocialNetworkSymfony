<?php

/* @User/Default/updatestartup.html.twig */
class __TwigTemplate_7a2ecdb4218bd828abd6bf9bd1e0415129dcbe2d922f07f921666b2b71cd1acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@User/Default/updatestartup.html.twig", 1);
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
        $__internal_d49ad4fd438a2ad8b3182d5bd7d4b2325bb924807a35e844f80806f60adc2ec2 = $this->env->getExtension("native_profiler");
        $__internal_d49ad4fd438a2ad8b3182d5bd7d4b2325bb924807a35e844f80806f60adc2ec2->enter($__internal_d49ad4fd438a2ad8b3182d5bd7d4b2325bb924807a35e844f80806f60adc2ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/updatestartup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49ad4fd438a2ad8b3182d5bd7d4b2325bb924807a35e844f80806f60adc2ec2->leave($__internal_d49ad4fd438a2ad8b3182d5bd7d4b2325bb924807a35e844f80806f60adc2ec2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22352c7609e0f3e5a9e612bf2a617c61145b41eb64aaf542a87cd0b780447e39 = $this->env->getExtension("native_profiler");
        $__internal_22352c7609e0f3e5a9e612bf2a617c61145b41eb64aaf542a87cd0b780447e39->enter($__internal_22352c7609e0f3e5a9e612bf2a617c61145b41eb64aaf542a87cd0b780447e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_22352c7609e0f3e5a9e612bf2a617c61145b41eb64aaf542a87cd0b780447e39->leave($__internal_22352c7609e0f3e5a9e612bf2a617c61145b41eb64aaf542a87cd0b780447e39_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/updatestartup.html.twig";
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
