<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_362ed796d4bb3e64995b2b094d9d46058fe5e1c42f286faf8f9d5c3bb1eeba8e extends Twig_Template
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle::_nav.html.twig");
        echo "
    ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  128 => 42,  124 => 41,  119 => 40,  116 => 39,  111 => 36,  104 => 22,  101 => 21,  95 => 13,  91 => 12,  86 => 11,  83 => 10,  77 => 8,  71 => 44,  69 => 39,  66 => 37,  64 => 36,  61 => 35,  59 => 34,  57 => 26,  55 => 25,  53 => 24,  50 => 21,  48 => 20,  40 => 15,  37 => 10,  32 => 8,  24 => 1,);
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
