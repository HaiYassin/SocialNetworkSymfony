<?php

/* UserBundle:Default:modifpp.html.twig */
class __TwigTemplate_981888bf208fbb5a7b052e41b4ceb15fe817f9059495d867cb43197660ffa30f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Mon image de profil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                            <br>
                            <button type=\"submit\" class=\"btn btn-warning\">
                                Changer ma photo de profil
                                <span class=\"fa fa-pencil fa-fw\"></span>
                            </button>
                            ";
        // line 26
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
        return array (  69 => 26,  60 => 20,  56 => 19,  52 => 18,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
/*                             {{ form_start(form) }}*/
/*                             {{ form_errors(form) }}*/
/*                             {{ form_widget(form) }}*/
/*                             <br>*/
/*                             <button type="submit" class="btn btn-warning">*/
/*                                 Changer ma photo de profil*/
/*                                 <span class="fa fa-pencil fa-fw"></span>*/
/*                             </button>*/
/*                             {{ form_end(form) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
