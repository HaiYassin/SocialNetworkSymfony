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
        $__internal_ba77b04a31e0065e01330795358c75dd5371f5261b3162fbdcb553ea72f5b119 = $this->env->getExtension("native_profiler");
        $__internal_ba77b04a31e0065e01330795358c75dd5371f5261b3162fbdcb553ea72f5b119->enter($__internal_ba77b04a31e0065e01330795358c75dd5371f5261b3162fbdcb553ea72f5b119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

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
        
        $__internal_ba77b04a31e0065e01330795358c75dd5371f5261b3162fbdcb553ea72f5b119->leave($__internal_ba77b04a31e0065e01330795358c75dd5371f5261b3162fbdcb553ea72f5b119_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_641d9eb6e3b00bf3ec4e00fb37288663dca73ef7508d8ebb4590c2561f42b218 = $this->env->getExtension("native_profiler");
        $__internal_641d9eb6e3b00bf3ec4e00fb37288663dca73ef7508d8ebb4590c2561f42b218->enter($__internal_641d9eb6e3b00bf3ec4e00fb37288663dca73ef7508d8ebb4590c2561f42b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_641d9eb6e3b00bf3ec4e00fb37288663dca73ef7508d8ebb4590c2561f42b218->leave($__internal_641d9eb6e3b00bf3ec4e00fb37288663dca73ef7508d8ebb4590c2561f42b218_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f749937cfe5eb8e8abf6d271d6c38ac666035d396e141d4b30164ffdf31a964c = $this->env->getExtension("native_profiler");
        $__internal_f749937cfe5eb8e8abf6d271d6c38ac666035d396e141d4b30164ffdf31a964c->enter($__internal_f749937cfe5eb8e8abf6d271d6c38ac666035d396e141d4b30164ffdf31a964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f749937cfe5eb8e8abf6d271d6c38ac666035d396e141d4b30164ffdf31a964c->leave($__internal_f749937cfe5eb8e8abf6d271d6c38ac666035d396e141d4b30164ffdf31a964c_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0dd5906167df05c454122832321b23e7524d9d7fe0a5332733b592082c224dda = $this->env->getExtension("native_profiler");
        $__internal_0dd5906167df05c454122832321b23e7524d9d7fe0a5332733b592082c224dda->enter($__internal_0dd5906167df05c454122832321b23e7524d9d7fe0a5332733b592082c224dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle::_nav.html.twig");
        echo "
    ";
        
        $__internal_0dd5906167df05c454122832321b23e7524d9d7fe0a5332733b592082c224dda->leave($__internal_0dd5906167df05c454122832321b23e7524d9d7fe0a5332733b592082c224dda_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddb8ee08dcd82020672bb2cd9cd6ca28a53750c913aec4303d879be950d41cb0 = $this->env->getExtension("native_profiler");
        $__internal_ddb8ee08dcd82020672bb2cd9cd6ca28a53750c913aec4303d879be950d41cb0->enter($__internal_ddb8ee08dcd82020672bb2cd9cd6ca28a53750c913aec4303d879be950d41cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddb8ee08dcd82020672bb2cd9cd6ca28a53750c913aec4303d879be950d41cb0->leave($__internal_ddb8ee08dcd82020672bb2cd9cd6ca28a53750c913aec4303d879be950d41cb0_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c147f73914f99a55dcaa2cedf6065cf1e73cd35a40d853bc611b3c91635ae48a = $this->env->getExtension("native_profiler");
        $__internal_c147f73914f99a55dcaa2cedf6065cf1e73cd35a40d853bc611b3c91635ae48a->enter($__internal_c147f73914f99a55dcaa2cedf6065cf1e73cd35a40d853bc611b3c91635ae48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c147f73914f99a55dcaa2cedf6065cf1e73cd35a40d853bc611b3c91635ae48a->leave($__internal_c147f73914f99a55dcaa2cedf6065cf1e73cd35a40d853bc611b3c91635ae48a_prof);

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
