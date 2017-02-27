<?php

/* @App/User/contact.html.twig */
class __TwigTemplate_e639da8ce237de7309cd7e6a5d30e5a7a6eec2d1b2c552e3cd02e9486921b4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/User/contact.html.twig", 1);
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
        $__internal_1b54dec410a1e7326e230b45dd06b4ef83713b2b2a5de33d78882b702a365c6d = $this->env->getExtension("native_profiler");
        $__internal_1b54dec410a1e7326e230b45dd06b4ef83713b2b2a5de33d78882b702a365c6d->enter($__internal_1b54dec410a1e7326e230b45dd06b4ef83713b2b2a5de33d78882b702a365c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b54dec410a1e7326e230b45dd06b4ef83713b2b2a5de33d78882b702a365c6d->leave($__internal_1b54dec410a1e7326e230b45dd06b4ef83713b2b2a5de33d78882b702a365c6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fa4d5cd2ba2f59f749ca2e0459966de108d0995ca8fb92cd373d384abfd9eec = $this->env->getExtension("native_profiler");
        $__internal_5fa4d5cd2ba2f59f749ca2e0459966de108d0995ca8fb92cd373d384abfd9eec->enter($__internal_5fa4d5cd2ba2f59f749ca2e0459966de108d0995ca8fb92cd373d384abfd9eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_5fa4d5cd2ba2f59f749ca2e0459966de108d0995ca8fb92cd373d384abfd9eec->leave($__internal_5fa4d5cd2ba2f59f749ca2e0459966de108d0995ca8fb92cd373d384abfd9eec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd58a7062f040cc58101868c5476235f9daa8da45a76fcdc9744765f0ad7a3c2 = $this->env->getExtension("native_profiler");
        $__internal_bd58a7062f040cc58101868c5476235f9daa8da45a76fcdc9744765f0ad7a3c2->enter($__internal_bd58a7062f040cc58101868c5476235f9daa8da45a76fcdc9744765f0ad7a3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd58a7062f040cc58101868c5476235f9daa8da45a76fcdc9744765f0ad7a3c2->leave($__internal_bd58a7062f040cc58101868c5476235f9daa8da45a76fcdc9744765f0ad7a3c2_prof);

    }

    public function getTemplateName()
    {
        return "@App/User/contact.html.twig";
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
