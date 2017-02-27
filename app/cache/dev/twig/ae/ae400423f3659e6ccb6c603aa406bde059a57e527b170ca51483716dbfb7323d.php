<?php

/* @App/base.html.twig */
class __TwigTemplate_8bf159591d06174f45430ab30a6e6ce5dbfb957732e7f78c3787c61cfa7f4d24 extends Twig_Template
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
        $__internal_43960f16c75f7f287ce3e27225ec8822ab3a0006701ec22d77be668818864326 = $this->env->getExtension("native_profiler");
        $__internal_43960f16c75f7f287ce3e27225ec8822ab3a0006701ec22d77be668818864326->enter($__internal_43960f16c75f7f287ce3e27225ec8822ab3a0006701ec22d77be668818864326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

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
        
        $__internal_43960f16c75f7f287ce3e27225ec8822ab3a0006701ec22d77be668818864326->leave($__internal_43960f16c75f7f287ce3e27225ec8822ab3a0006701ec22d77be668818864326_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_53ba801b8970ab770b8ab2848408d5ec26e9b054a082c2eeb7fead2fc695c594 = $this->env->getExtension("native_profiler");
        $__internal_53ba801b8970ab770b8ab2848408d5ec26e9b054a082c2eeb7fead2fc695c594->enter($__internal_53ba801b8970ab770b8ab2848408d5ec26e9b054a082c2eeb7fead2fc695c594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_53ba801b8970ab770b8ab2848408d5ec26e9b054a082c2eeb7fead2fc695c594->leave($__internal_53ba801b8970ab770b8ab2848408d5ec26e9b054a082c2eeb7fead2fc695c594_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86c8903dfa703b0e0c7f2e1d23d3f0bb1e9b8ec8ec86fa09de00f378f0121bab = $this->env->getExtension("native_profiler");
        $__internal_86c8903dfa703b0e0c7f2e1d23d3f0bb1e9b8ec8ec86fa09de00f378f0121bab->enter($__internal_86c8903dfa703b0e0c7f2e1d23d3f0bb1e9b8ec8ec86fa09de00f378f0121bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_86c8903dfa703b0e0c7f2e1d23d3f0bb1e9b8ec8ec86fa09de00f378f0121bab->leave($__internal_86c8903dfa703b0e0c7f2e1d23d3f0bb1e9b8ec8ec86fa09de00f378f0121bab_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_145156b42e64cbed1eab924a0e01c054596296082426a5805f264b0268065c03 = $this->env->getExtension("native_profiler");
        $__internal_145156b42e64cbed1eab924a0e01c054596296082426a5805f264b0268065c03->enter($__internal_145156b42e64cbed1eab924a0e01c054596296082426a5805f264b0268065c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "AppBundle::_nav.html.twig");
        echo "
    ";
        
        $__internal_145156b42e64cbed1eab924a0e01c054596296082426a5805f264b0268065c03->leave($__internal_145156b42e64cbed1eab924a0e01c054596296082426a5805f264b0268065c03_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b91f0f6b8a64762c84764b34470056208b1394b2da24f887185b8a61c2dde89 = $this->env->getExtension("native_profiler");
        $__internal_4b91f0f6b8a64762c84764b34470056208b1394b2da24f887185b8a61c2dde89->enter($__internal_4b91f0f6b8a64762c84764b34470056208b1394b2da24f887185b8a61c2dde89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b91f0f6b8a64762c84764b34470056208b1394b2da24f887185b8a61c2dde89->leave($__internal_4b91f0f6b8a64762c84764b34470056208b1394b2da24f887185b8a61c2dde89_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8215cc07513cd38b8cfc6727fa31921d8bc3e9b904cd1ee07a78285105c799f = $this->env->getExtension("native_profiler");
        $__internal_c8215cc07513cd38b8cfc6727fa31921d8bc3e9b904cd1ee07a78285105c799f->enter($__internal_c8215cc07513cd38b8cfc6727fa31921d8bc3e9b904cd1ee07a78285105c799f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c8215cc07513cd38b8cfc6727fa31921d8bc3e9b904cd1ee07a78285105c799f->leave($__internal_c8215cc07513cd38b8cfc6727fa31921d8bc3e9b904cd1ee07a78285105c799f_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
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
