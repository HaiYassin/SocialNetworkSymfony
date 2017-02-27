<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aa9b61e1bced1873318d7e663d0838ead78b44365a644592e10033f53931f949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ed4a18e8ac37f48a513e942f57caf918708264c72f32fe91a182ec2307a8dc = $this->env->getExtension("native_profiler");
        $__internal_c0ed4a18e8ac37f48a513e942f57caf918708264c72f32fe91a182ec2307a8dc->enter($__internal_c0ed4a18e8ac37f48a513e942f57caf918708264c72f32fe91a182ec2307a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ed4a18e8ac37f48a513e942f57caf918708264c72f32fe91a182ec2307a8dc->leave($__internal_c0ed4a18e8ac37f48a513e942f57caf918708264c72f32fe91a182ec2307a8dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7e2e20270dba2eca45e995c1118351d1e2ba0af53a6763acd0a11e154f2900d = $this->env->getExtension("native_profiler");
        $__internal_e7e2e20270dba2eca45e995c1118351d1e2ba0af53a6763acd0a11e154f2900d->enter($__internal_e7e2e20270dba2eca45e995c1118351d1e2ba0af53a6763acd0a11e154f2900d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e7e2e20270dba2eca45e995c1118351d1e2ba0af53a6763acd0a11e154f2900d->leave($__internal_e7e2e20270dba2eca45e995c1118351d1e2ba0af53a6763acd0a11e154f2900d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f19d9f5441f5e27f1f8c477b04ab6d8658dbd0da35568e99784b4b08cadd09c = $this->env->getExtension("native_profiler");
        $__internal_8f19d9f5441f5e27f1f8c477b04ab6d8658dbd0da35568e99784b4b08cadd09c->enter($__internal_8f19d9f5441f5e27f1f8c477b04ab6d8658dbd0da35568e99784b4b08cadd09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f19d9f5441f5e27f1f8c477b04ab6d8658dbd0da35568e99784b4b08cadd09c->leave($__internal_8f19d9f5441f5e27f1f8c477b04ab6d8658dbd0da35568e99784b4b08cadd09c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8daa5cae3019007c5fdfd78d91d96b29620edfe9d1013891e05608dc425fb8b = $this->env->getExtension("native_profiler");
        $__internal_a8daa5cae3019007c5fdfd78d91d96b29620edfe9d1013891e05608dc425fb8b->enter($__internal_a8daa5cae3019007c5fdfd78d91d96b29620edfe9d1013891e05608dc425fb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a8daa5cae3019007c5fdfd78d91d96b29620edfe9d1013891e05608dc425fb8b->leave($__internal_a8daa5cae3019007c5fdfd78d91d96b29620edfe9d1013891e05608dc425fb8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
