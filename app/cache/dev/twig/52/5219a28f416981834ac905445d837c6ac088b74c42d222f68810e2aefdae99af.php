<?php

/* ::base.html.twig */
class __TwigTemplate_f998a778355f46b86ccf6d63ba33fc7aa22a57660bdf6a33c5d37fc7e43a265e extends Twig_Template
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
        $__internal_e2e6fc53fd2d67d9f200430ddc95ddb264dd5dcbaf50de4a6d7512a14075a6f3 = $this->env->getExtension("native_profiler");
        $__internal_e2e6fc53fd2d67d9f200430ddc95ddb264dd5dcbaf50de4a6d7512a14075a6f3->enter($__internal_e2e6fc53fd2d67d9f200430ddc95ddb264dd5dcbaf50de4a6d7512a14075a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e2e6fc53fd2d67d9f200430ddc95ddb264dd5dcbaf50de4a6d7512a14075a6f3->leave($__internal_e2e6fc53fd2d67d9f200430ddc95ddb264dd5dcbaf50de4a6d7512a14075a6f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_536075b5c2269e06a4f89328525368ee7747fe4fa9c921da95da6913c8b7579b = $this->env->getExtension("native_profiler");
        $__internal_536075b5c2269e06a4f89328525368ee7747fe4fa9c921da95da6913c8b7579b->enter($__internal_536075b5c2269e06a4f89328525368ee7747fe4fa9c921da95da6913c8b7579b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_536075b5c2269e06a4f89328525368ee7747fe4fa9c921da95da6913c8b7579b->leave($__internal_536075b5c2269e06a4f89328525368ee7747fe4fa9c921da95da6913c8b7579b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0378bc472ef1bf23894953552d40d1248a5013525983601c34348e0ca02e96f8 = $this->env->getExtension("native_profiler");
        $__internal_0378bc472ef1bf23894953552d40d1248a5013525983601c34348e0ca02e96f8->enter($__internal_0378bc472ef1bf23894953552d40d1248a5013525983601c34348e0ca02e96f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0378bc472ef1bf23894953552d40d1248a5013525983601c34348e0ca02e96f8->leave($__internal_0378bc472ef1bf23894953552d40d1248a5013525983601c34348e0ca02e96f8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5dacbd3e0c60f3a5bd29eb2e3c027db7d964309ac2b9bc9b508631a9060f01 = $this->env->getExtension("native_profiler");
        $__internal_5d5dacbd3e0c60f3a5bd29eb2e3c027db7d964309ac2b9bc9b508631a9060f01->enter($__internal_5d5dacbd3e0c60f3a5bd29eb2e3c027db7d964309ac2b9bc9b508631a9060f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d5dacbd3e0c60f3a5bd29eb2e3c027db7d964309ac2b9bc9b508631a9060f01->leave($__internal_5d5dacbd3e0c60f3a5bd29eb2e3c027db7d964309ac2b9bc9b508631a9060f01_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_593ceaecac29e2e0fd21bc27e054d299469e637ddfbec245ee6dc75bba324a29 = $this->env->getExtension("native_profiler");
        $__internal_593ceaecac29e2e0fd21bc27e054d299469e637ddfbec245ee6dc75bba324a29->enter($__internal_593ceaecac29e2e0fd21bc27e054d299469e637ddfbec245ee6dc75bba324a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_593ceaecac29e2e0fd21bc27e054d299469e637ddfbec245ee6dc75bba324a29->leave($__internal_593ceaecac29e2e0fd21bc27e054d299469e637ddfbec245ee6dc75bba324a29_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
