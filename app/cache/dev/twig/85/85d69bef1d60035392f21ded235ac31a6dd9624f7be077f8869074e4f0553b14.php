<?php

/* AppBundle:User:contact.html.twig */
class __TwigTemplate_4f394f99547697dad0f035df688048684e7a6584e4dba9bb1aa8801f3fcf3509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:contact.html.twig", 1);
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
        $__internal_f00e86b0f6a66ff3367ecfebafe38813661b5d1c20d2499a8edbe9e378f6b75a = $this->env->getExtension("native_profiler");
        $__internal_f00e86b0f6a66ff3367ecfebafe38813661b5d1c20d2499a8edbe9e378f6b75a->enter($__internal_f00e86b0f6a66ff3367ecfebafe38813661b5d1c20d2499a8edbe9e378f6b75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f00e86b0f6a66ff3367ecfebafe38813661b5d1c20d2499a8edbe9e378f6b75a->leave($__internal_f00e86b0f6a66ff3367ecfebafe38813661b5d1c20d2499a8edbe9e378f6b75a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d329d3661c40d8c61329138d2856bf931f91da7d2df11caf383b3afb0689e89 = $this->env->getExtension("native_profiler");
        $__internal_2d329d3661c40d8c61329138d2856bf931f91da7d2df11caf383b3afb0689e89->enter($__internal_2d329d3661c40d8c61329138d2856bf931f91da7d2df11caf383b3afb0689e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_2d329d3661c40d8c61329138d2856bf931f91da7d2df11caf383b3afb0689e89->leave($__internal_2d329d3661c40d8c61329138d2856bf931f91da7d2df11caf383b3afb0689e89_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4941e4d9ca88d07827b223b998441da3c39219edbf3c4932569ccbf13ca8968b = $this->env->getExtension("native_profiler");
        $__internal_4941e4d9ca88d07827b223b998441da3c39219edbf3c4932569ccbf13ca8968b->enter($__internal_4941e4d9ca88d07827b223b998441da3c39219edbf3c4932569ccbf13ca8968b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"padding\">
    <div class=\"full col-xs-12\">

        <!-- content -->
        <div class=\"row\">

            <!-- main col left -->
            <div class=\"col-xs-12 col-lg-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <h2>Nos coordonnées</h2>
                        <p>
                            Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.
                            Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.
                        </p>
                        <dl class=\"dl-horizontal\">
                            <dt><span class=\"fa fa-phone fa-fw\"></span></dt>
                            <dd>0123456789</dd>
                            <dt><span class=\"fa fa-envelope-o fa-fw\"></span></dt>
                            <dd><a href=\"mailto:contact@hitema.fr\">contact@h.fr</a></dd>
                        </dl>
                        <p>
                            Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.
                            Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.
                            Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.
                        </p>
                    </div>
                </div>
            </div>
        <div class=\"col-xs-12 col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <h2>Envoyez nous un message</h2>
                    ";
        // line 39
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 40
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <button class=\"btn btn-success btn-block\">Envoyer</button>
                    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_4941e4d9ca88d07827b223b998441da3c39219edbf3c4932569ccbf13ca8968b->leave($__internal_4941e4d9ca88d07827b223b998441da3c39219edbf3c4932569ccbf13ca8968b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  99 => 42,  95 => 41,  90 => 40,  88 => 39,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="padding">*/
/*     <div class="full col-xs-12">*/
/* */
/*         <!-- content -->*/
/*         <div class="row">*/
/* */
/*             <!-- main col left -->*/
/*             <div class="col-xs-12 col-lg-8">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         <h2>Nos coordonnées</h2>*/
/*                         <p>*/
/*                             Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.*/
/*                             Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.*/
/*                         </p>*/
/*                         <dl class="dl-horizontal">*/
/*                             <dt><span class="fa fa-phone fa-fw"></span></dt>*/
/*                             <dd>0123456789</dd>*/
/*                             <dt><span class="fa fa-envelope-o fa-fw"></span></dt>*/
/*                             <dd><a href="mailto:contact@hitema.fr">contact@h.fr</a></dd>*/
/*                         </dl>*/
/*                         <p>*/
/*                             Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.*/
/*                             Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.*/
/*                             Illo error provident ducimus reiciendis natus iure placeat. Magnam consequuntur provident optio impedit vel. Et quas quidem accusamus eveniet.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         <div class="col-xs-12 col-lg-4">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <h2>Envoyez nous un message</h2>*/
/*                     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button class="btn btn-success btn-block">Envoyer</button>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
