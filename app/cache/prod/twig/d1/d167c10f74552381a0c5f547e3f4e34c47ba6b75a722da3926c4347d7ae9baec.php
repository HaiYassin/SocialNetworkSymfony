<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_38d50f00da206d7bae4245da63a40d5e656ba867c6b49de035abd54321062569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b8e7565a7b5ecc1a19f32d486dcb9dbde48bb6f79a1a0348afb195f3501cdcb = $this->env->getExtension("native_profiler");
        $__internal_9b8e7565a7b5ecc1a19f32d486dcb9dbde48bb6f79a1a0348afb195f3501cdcb->enter($__internal_9b8e7565a7b5ecc1a19f32d486dcb9dbde48bb6f79a1a0348afb195f3501cdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 8
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " - XMP</title>
    ";
        // line 10
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"column col-sm-12 col-xs-12\" id=\"main\">
    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        $this->displayBlock('nav', $context, $blocks);
        // line 24
        echo "    ";
        // line 25
        echo "        ";
        // line 26
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "</div>
";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "</body>
</html>
";
        
        $__internal_9b8e7565a7b5ecc1a19f32d486dcb9dbde48bb6f79a1a0348afb195f3501cdcb->leave($__internal_9b8e7565a7b5ecc1a19f32d486dcb9dbde48bb6f79a1a0348afb195f3501cdcb_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_04004685bddf580341a25e9da6ebea8c11c4ffe1c2b6c1b4f14006f848d56382 = $this->env->getExtension("native_profiler");
        $__internal_04004685bddf580341a25e9da6ebea8c11c4ffe1c2b6c1b4f14006f848d56382->enter($__internal_04004685bddf580341a25e9da6ebea8c11c4ffe1c2b6c1b4f14006f848d56382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_04004685bddf580341a25e9da6ebea8c11c4ffe1c2b6c1b4f14006f848d56382->leave($__internal_04004685bddf580341a25e9da6ebea8c11c4ffe1c2b6c1b4f14006f848d56382_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1970d53c1ac90435d22e7a63a94e9083100c466b5504fcc23693adc54970639a = $this->env->getExtension("native_profiler");
        $__internal_1970d53c1ac90435d22e7a63a94e9083100c466b5504fcc23693adc54970639a->enter($__internal_1970d53c1ac90435d22e7a63a94e9083100c466b5504fcc23693adc54970639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/font-awesome-4.6.1/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/styles.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_1970d53c1ac90435d22e7a63a94e9083100c466b5504fcc23693adc54970639a->leave($__internal_1970d53c1ac90435d22e7a63a94e9083100c466b5504fcc23693adc54970639a_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9347f962ae9fde98632ffa5428c667e99375fd6bbc85ee06df9217c197e4fd97 = $this->env->getExtension("native_profiler");
        $__internal_9347f962ae9fde98632ffa5428c667e99375fd6bbc85ee06df9217c197e4fd97->enter($__internal_9347f962ae9fde98632ffa5428c667e99375fd6bbc85ee06df9217c197e4fd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle::_nav.html.twig");
        echo "
    ";
        
        $__internal_9347f962ae9fde98632ffa5428c667e99375fd6bbc85ee06df9217c197e4fd97->leave($__internal_9347f962ae9fde98632ffa5428c667e99375fd6bbc85ee06df9217c197e4fd97_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3e96e3ef6f33adbed0b6746dd9f8257b7b7d4dbeaa180a169b26f1836d00643 = $this->env->getExtension("native_profiler");
        $__internal_e3e96e3ef6f33adbed0b6746dd9f8257b7b7d4dbeaa180a169b26f1836d00643->enter($__internal_e3e96e3ef6f33adbed0b6746dd9f8257b7b7d4dbeaa180a169b26f1836d00643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3e96e3ef6f33adbed0b6746dd9f8257b7b7d4dbeaa180a169b26f1836d00643->leave($__internal_e3e96e3ef6f33adbed0b6746dd9f8257b7b7d4dbeaa180a169b26f1836d00643_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61323ac008da0f6174b9a304df73a9c8139bc6040f843eec2db0957adda396f4 = $this->env->getExtension("native_profiler");
        $__internal_61323ac008da0f6174b9a304df73a9c8139bc6040f843eec2db0957adda396f4->enter($__internal_61323ac008da0f6174b9a304df73a9c8139bc6040f843eec2db0957adda396f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/scripts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_61323ac008da0f6174b9a304df73a9c8139bc6040f843eec2db0957adda396f4->leave($__internal_61323ac008da0f6174b9a304df73a9c8139bc6040f843eec2db0957adda396f4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  157 => 41,  152 => 40,  146 => 39,  135 => 36,  125 => 22,  119 => 21,  110 => 13,  106 => 12,  101 => 11,  95 => 10,  83 => 8,  74 => 44,  72 => 39,  69 => 37,  67 => 36,  64 => 35,  62 => 34,  60 => 26,  58 => 25,  56 => 24,  53 => 21,  51 => 20,  43 => 15,  40 => 10,  35 => 8,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {# Block title : titre de la page, avec une valeur par défaut #}*/
/*     <title>{% block title %}Accueil{% endblock %} - XMP</title>*/
/*     {# Block stylesheets : contient les CSS de la page, avec les CSS par défaut déjà renseignés #}*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome-4.6.1/css/font-awesome.min.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/styles.css') }}"/>*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="column col-sm-12 col-xs-12" id="main">*/
/*     {# Block header : contient le header de notre site #}*/
/*     {# Block nav : contient la navigation de notre site #}*/
/*     {% block nav %}*/
/*         {{ include('AppBundle::_nav.html.twig') }}*/
/*     {% endblock %}*/
/*     {#<ul class="breadcrumb">#}*/
/*         {# Block breadcrumb : contient les <li> de notre breadcrumb #}*/
/*     {#    {% block breadcrumb %}*/
/*             <li>*/
/*                 <a href="{{ path('app_default_index') }}">*/
/*                     <span class="fa fa-home"></span>*/
/*                 </a>*/
/*             </li>*/
/*         {% endblock %}*/
/*     </ul> #}*/
/*     {# Block body : contenu de la page #}*/
/* */
/*     {% block body %}{% endblock %}*/
/* </div>*/
/* {# Block javascripts : contient les JS de la page, avec les JS par défaut déjà renseignés #}*/
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('assets/jquery-2.2.3.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/bootstrap/js/scripts.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
