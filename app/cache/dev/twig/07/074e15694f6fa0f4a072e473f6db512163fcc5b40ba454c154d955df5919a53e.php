<?php

/* UserBundle:Default:updateinvestisseur.html.twig */
class __TwigTemplate_ae1c62bed168aeea66e837a9387918a65a9cfdb6b03db8198da682b0fd6ff3fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "UserBundle:Default:updateinvestisseur.html.twig", 1);
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
        $__internal_fab6b8f4e8ed2b0530d7ac69653255d4754e6db99574bc885623b10a324b9406 = $this->env->getExtension("native_profiler");
        $__internal_fab6b8f4e8ed2b0530d7ac69653255d4754e6db99574bc885623b10a324b9406->enter($__internal_fab6b8f4e8ed2b0530d7ac69653255d4754e6db99574bc885623b10a324b9406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:updateinvestisseur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab6b8f4e8ed2b0530d7ac69653255d4754e6db99574bc885623b10a324b9406->leave($__internal_fab6b8f4e8ed2b0530d7ac69653255d4754e6db99574bc885623b10a324b9406_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dccc75b04fc58113ab6ee55ae8cc2b9e89a3aefd376d79567fd2c364b3368b3 = $this->env->getExtension("native_profiler");
        $__internal_0dccc75b04fc58113ab6ee55ae8cc2b9e89a3aefd376d79567fd2c364b3368b3->enter($__internal_0dccc75b04fc58113ab6ee55ae8cc2b9e89a3aefd376d79567fd2c364b3368b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dccc75b04fc58113ab6ee55ae8cc2b9e89a3aefd376d79567fd2c364b3368b3->leave($__internal_0dccc75b04fc58113ab6ee55ae8cc2b9e89a3aefd376d79567fd2c364b3368b3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:updateinvestisseur.html.twig";
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
