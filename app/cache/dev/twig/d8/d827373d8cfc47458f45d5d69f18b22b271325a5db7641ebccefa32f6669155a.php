<?php

/* base.html.twig */
class __TwigTemplate_e2146d756b215d779f1461ded7b824f1103c6d768bcb08d4a95725d7cf5e7d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f6d0837fe5a44ebdddfce03c0bad71d6e8a4c1aa61a413ed16fb9ce9fb82256 = $this->env->getExtension("native_profiler");
        $__internal_6f6d0837fe5a44ebdddfce03c0bad71d6e8a4c1aa61a413ed16fb9ce9fb82256->enter($__internal_6f6d0837fe5a44ebdddfce03c0bad71d6e8a4c1aa61a413ed16fb9ce9fb82256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6f6d0837fe5a44ebdddfce03c0bad71d6e8a4c1aa61a413ed16fb9ce9fb82256->leave($__internal_6f6d0837fe5a44ebdddfce03c0bad71d6e8a4c1aa61a413ed16fb9ce9fb82256_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5075d1870c20771d21094e71c38894e8c0e64dcc675724d4d245047a994f3e5a = $this->env->getExtension("native_profiler");
        $__internal_5075d1870c20771d21094e71c38894e8c0e64dcc675724d4d245047a994f3e5a->enter($__internal_5075d1870c20771d21094e71c38894e8c0e64dcc675724d4d245047a994f3e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5075d1870c20771d21094e71c38894e8c0e64dcc675724d4d245047a994f3e5a->leave($__internal_5075d1870c20771d21094e71c38894e8c0e64dcc675724d4d245047a994f3e5a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0e0b13c4a1693408ff38271f0f56919a889ebc1068e07f9c32c930d2772b2bc = $this->env->getExtension("native_profiler");
        $__internal_d0e0b13c4a1693408ff38271f0f56919a889ebc1068e07f9c32c930d2772b2bc->enter($__internal_d0e0b13c4a1693408ff38271f0f56919a889ebc1068e07f9c32c930d2772b2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0e0b13c4a1693408ff38271f0f56919a889ebc1068e07f9c32c930d2772b2bc->leave($__internal_d0e0b13c4a1693408ff38271f0f56919a889ebc1068e07f9c32c930d2772b2bc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_40ffd753f90876975472ec268c56b6d3b8a68b61be28967c252c43c5c17795e7 = $this->env->getExtension("native_profiler");
        $__internal_40ffd753f90876975472ec268c56b6d3b8a68b61be28967c252c43c5c17795e7->enter($__internal_40ffd753f90876975472ec268c56b6d3b8a68b61be28967c252c43c5c17795e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40ffd753f90876975472ec268c56b6d3b8a68b61be28967c252c43c5c17795e7->leave($__internal_40ffd753f90876975472ec268c56b6d3b8a68b61be28967c252c43c5c17795e7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3825f6ecc74fc844f9bb141749c029cbf033434b45cc8a594677678a6ad538f4 = $this->env->getExtension("native_profiler");
        $__internal_3825f6ecc74fc844f9bb141749c029cbf033434b45cc8a594677678a6ad538f4->enter($__internal_3825f6ecc74fc844f9bb141749c029cbf033434b45cc8a594677678a6ad538f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3825f6ecc74fc844f9bb141749c029cbf033434b45cc8a594677678a6ad538f4->leave($__internal_3825f6ecc74fc844f9bb141749c029cbf033434b45cc8a594677678a6ad538f4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
