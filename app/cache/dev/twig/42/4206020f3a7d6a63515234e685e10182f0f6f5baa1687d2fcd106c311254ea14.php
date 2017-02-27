<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_a22f6488a4b4c04e1c7f780b7c3dfdb8c323c4a2749b7f390be70f44362e9738 extends Twig_Template
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
        $__internal_38be96ee1be093155f3c7b93c9e460eb5beb0b5761e0edd6ec8886718cd7052f = $this->env->getExtension("native_profiler");
        $__internal_38be96ee1be093155f3c7b93c9e460eb5beb0b5761e0edd6ec8886718cd7052f->enter($__internal_38be96ee1be093155f3c7b93c9e460eb5beb0b5761e0edd6ec8886718cd7052f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

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
        
        $__internal_38be96ee1be093155f3c7b93c9e460eb5beb0b5761e0edd6ec8886718cd7052f->leave($__internal_38be96ee1be093155f3c7b93c9e460eb5beb0b5761e0edd6ec8886718cd7052f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea7cf8ada76258e40d7ae2e65160961cb38cfc0b3ef5fbb67a754636210a98fb = $this->env->getExtension("native_profiler");
        $__internal_ea7cf8ada76258e40d7ae2e65160961cb38cfc0b3ef5fbb67a754636210a98fb->enter($__internal_ea7cf8ada76258e40d7ae2e65160961cb38cfc0b3ef5fbb67a754636210a98fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_ea7cf8ada76258e40d7ae2e65160961cb38cfc0b3ef5fbb67a754636210a98fb->leave($__internal_ea7cf8ada76258e40d7ae2e65160961cb38cfc0b3ef5fbb67a754636210a98fb_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d95e60cb736141959b835189406b9144ad7c81ef3f8516b2afbda099c0e9ef81 = $this->env->getExtension("native_profiler");
        $__internal_d95e60cb736141959b835189406b9144ad7c81ef3f8516b2afbda099c0e9ef81->enter($__internal_d95e60cb736141959b835189406b9144ad7c81ef3f8516b2afbda099c0e9ef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d95e60cb736141959b835189406b9144ad7c81ef3f8516b2afbda099c0e9ef81->leave($__internal_d95e60cb736141959b835189406b9144ad7c81ef3f8516b2afbda099c0e9ef81_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_237fb5bfa2ecef5e794ccf334b927e137259a7a366095e76e7e330da9c2d125c = $this->env->getExtension("native_profiler");
        $__internal_237fb5bfa2ecef5e794ccf334b927e137259a7a366095e76e7e330da9c2d125c->enter($__internal_237fb5bfa2ecef5e794ccf334b927e137259a7a366095e76e7e330da9c2d125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle::_nav.html.twig");
        echo "
    ";
        
        $__internal_237fb5bfa2ecef5e794ccf334b927e137259a7a366095e76e7e330da9c2d125c->leave($__internal_237fb5bfa2ecef5e794ccf334b927e137259a7a366095e76e7e330da9c2d125c_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b9784d1e461dd667b42f85c2007b3f01051a9db9c42be549dc3a6508ae7ba7 = $this->env->getExtension("native_profiler");
        $__internal_67b9784d1e461dd667b42f85c2007b3f01051a9db9c42be549dc3a6508ae7ba7->enter($__internal_67b9784d1e461dd667b42f85c2007b3f01051a9db9c42be549dc3a6508ae7ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67b9784d1e461dd667b42f85c2007b3f01051a9db9c42be549dc3a6508ae7ba7->leave($__internal_67b9784d1e461dd667b42f85c2007b3f01051a9db9c42be549dc3a6508ae7ba7_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70206a0eb10b37b0e7dd766e60a601abbd8801672a6189c268a5b4cd94fbda0f = $this->env->getExtension("native_profiler");
        $__internal_70206a0eb10b37b0e7dd766e60a601abbd8801672a6189c268a5b4cd94fbda0f->enter($__internal_70206a0eb10b37b0e7dd766e60a601abbd8801672a6189c268a5b4cd94fbda0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_70206a0eb10b37b0e7dd766e60a601abbd8801672a6189c268a5b4cd94fbda0f->leave($__internal_70206a0eb10b37b0e7dd766e60a601abbd8801672a6189c268a5b4cd94fbda0f_prof);

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
