<?php

/* @User/Default/modifpp.html.twig */
class __TwigTemplate_df2f56fecbee27c936a076d275908a29d13c3a5a274e2ac704cbf05af582c3c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@User/Default/modifpp.html.twig", 1);
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
        $__internal_25549b6a1129c98ba7bab149f1c6c264e6e9037c424da0fccf00cbef5d5b1787 = $this->env->getExtension("native_profiler");
        $__internal_25549b6a1129c98ba7bab149f1c6c264e6e9037c424da0fccf00cbef5d5b1787->enter($__internal_25549b6a1129c98ba7bab149f1c6c264e6e9037c424da0fccf00cbef5d5b1787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/modifpp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25549b6a1129c98ba7bab149f1c6c264e6e9037c424da0fccf00cbef5d5b1787->leave($__internal_25549b6a1129c98ba7bab149f1c6c264e6e9037c424da0fccf00cbef5d5b1787_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e257d4db353b5e21b1d4d978be76363fa970ca9a150094a2b4301e0782a7c0b2 = $this->env->getExtension("native_profiler");
        $__internal_e257d4db353b5e21b1d4d978be76363fa970ca9a150094a2b4301e0782a7c0b2->enter($__internal_e257d4db353b5e21b1d4d978be76363fa970ca9a150094a2b4301e0782a7c0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon image de profil";
        
        $__internal_e257d4db353b5e21b1d4d978be76363fa970ca9a150094a2b4301e0782a7c0b2->leave($__internal_e257d4db353b5e21b1d4d978be76363fa970ca9a150094a2b4301e0782a7c0b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc4c2a66c368f9dd7f7ac78d7e7187c8f2c9e094a04ee701aa3a366cbe60861b = $this->env->getExtension("native_profiler");
        $__internal_cc4c2a66c368f9dd7f7ac78d7e7187c8f2c9e094a04ee701aa3a366cbe60861b->enter($__internal_cc4c2a66c368f9dd7f7ac78d7e7187c8f2c9e094a04ee701aa3a366cbe60861b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc4c2a66c368f9dd7f7ac78d7e7187c8f2c9e094a04ee701aa3a366cbe60861b->leave($__internal_cc4c2a66c368f9dd7f7ac78d7e7187c8f2c9e094a04ee701aa3a366cbe60861b_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/modifpp.html.twig";
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
