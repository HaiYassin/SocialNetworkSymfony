<?php

/* UserBundle:Default:password.html.twig */
class __TwigTemplate_0611ff104bb3a289361bdf11777e4d77c2a712b35b00c1a80cd904b9b119ec6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "UserBundle:Default:password.html.twig", 1);
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
        $__internal_afdf4be54f12752017dfd99a1da52b8ce6484e0ff360f4d7a46190f7c062681b = $this->env->getExtension("native_profiler");
        $__internal_afdf4be54f12752017dfd99a1da52b8ce6484e0ff360f4d7a46190f7c062681b->enter($__internal_afdf4be54f12752017dfd99a1da52b8ce6484e0ff360f4d7a46190f7c062681b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdf4be54f12752017dfd99a1da52b8ce6484e0ff360f4d7a46190f7c062681b->leave($__internal_afdf4be54f12752017dfd99a1da52b8ce6484e0ff360f4d7a46190f7c062681b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_616d1ff597867bc994c6612be3ce4779926591034792c13b34827729f6eeacd5 = $this->env->getExtension("native_profiler");
        $__internal_616d1ff597867bc994c6612be3ce4779926591034792c13b34827729f6eeacd5->enter($__internal_616d1ff597867bc994c6612be3ce4779926591034792c13b34827729f6eeacd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon mot de passe";
        
        $__internal_616d1ff597867bc994c6612be3ce4779926591034792c13b34827729f6eeacd5->leave($__internal_616d1ff597867bc994c6612be3ce4779926591034792c13b34827729f6eeacd5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a701c7d8cc09792c53cad559a81137d34060014693d3fbc887f67fc094afa79 = $this->env->getExtension("native_profiler");
        $__internal_2a701c7d8cc09792c53cad559a81137d34060014693d3fbc887f67fc094afa79->enter($__internal_2a701c7d8cc09792c53cad559a81137d34060014693d3fbc887f67fc094afa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a701c7d8cc09792c53cad559a81137d34060014693d3fbc887f67fc094afa79->leave($__internal_2a701c7d8cc09792c53cad559a81137d34060014693d3fbc887f67fc094afa79_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:password.html.twig";
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
