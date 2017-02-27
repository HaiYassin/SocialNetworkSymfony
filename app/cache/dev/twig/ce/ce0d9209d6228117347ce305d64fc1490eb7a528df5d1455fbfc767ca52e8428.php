<?php

/* @User/Default/password.html.twig */
class __TwigTemplate_bd8fcc25ea68f099bf896334b9b5979fb54c693ba9c9f78f602bbdc24551ec3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@User/Default/password.html.twig", 1);
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
        $__internal_4296ab0b30be5aa217d8ed04328204ff063146cee4ab50f4a2098461c5cd4355 = $this->env->getExtension("native_profiler");
        $__internal_4296ab0b30be5aa217d8ed04328204ff063146cee4ab50f4a2098461c5cd4355->enter($__internal_4296ab0b30be5aa217d8ed04328204ff063146cee4ab50f4a2098461c5cd4355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4296ab0b30be5aa217d8ed04328204ff063146cee4ab50f4a2098461c5cd4355->leave($__internal_4296ab0b30be5aa217d8ed04328204ff063146cee4ab50f4a2098461c5cd4355_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95e7c436d0d16b4b36143324413d6f471b8f627e2a4d15cba037fc5732dbabe3 = $this->env->getExtension("native_profiler");
        $__internal_95e7c436d0d16b4b36143324413d6f471b8f627e2a4d15cba037fc5732dbabe3->enter($__internal_95e7c436d0d16b4b36143324413d6f471b8f627e2a4d15cba037fc5732dbabe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon mot de passe";
        
        $__internal_95e7c436d0d16b4b36143324413d6f471b8f627e2a4d15cba037fc5732dbabe3->leave($__internal_95e7c436d0d16b4b36143324413d6f471b8f627e2a4d15cba037fc5732dbabe3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c2f3ca690d69c76c714051fd137963637a7ec5b7132bd36d56d3fbceff23b63 = $this->env->getExtension("native_profiler");
        $__internal_6c2f3ca690d69c76c714051fd137963637a7ec5b7132bd36d56d3fbceff23b63->enter($__internal_6c2f3ca690d69c76c714051fd137963637a7ec5b7132bd36d56d3fbceff23b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "        ";
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
        
        $__internal_6c2f3ca690d69c76c714051fd137963637a7ec5b7132bd36d56d3fbceff23b63->leave($__internal_6c2f3ca690d69c76c714051fd137963637a7ec5b7132bd36d56d3fbceff23b63_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/password.html.twig";
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
/* {% block title %}Mon mot de passe{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="padding">*/
/*     <div class="full col-xs-12">*/
/* */
/*     <!-- content -->*/
/*     <div class="row">*/
/* */
/*     <!-- main col left -->*/
/*     <div class="col-xs-8 col-lg-8">*/
/* */
/*     <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         {% form_theme form _self 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*         {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br>*/
/*         <div class="row">*/
/*             <div class="col-xs-6">*/
/*                 <a class="btn btn-default btn-block" href="{{ path('user_default_index') }}">Annuler</a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <button class="btn btn-warning btn-block">Modifier</button>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
