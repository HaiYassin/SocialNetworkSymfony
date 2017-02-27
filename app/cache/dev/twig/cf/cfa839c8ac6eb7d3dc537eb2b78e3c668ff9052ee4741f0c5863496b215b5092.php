<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a4b37097598095d9f78b73fd4217ca8370a03a56f6aa19ff60fce07470390944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_a07fb05a68c5b7d0762d41b677bc6e3863deda0e7a23dd074265682ffc46dfbc = $this->env->getExtension("native_profiler");
        $__internal_a07fb05a68c5b7d0762d41b677bc6e3863deda0e7a23dd074265682ffc46dfbc->enter($__internal_a07fb05a68c5b7d0762d41b677bc6e3863deda0e7a23dd074265682ffc46dfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07fb05a68c5b7d0762d41b677bc6e3863deda0e7a23dd074265682ffc46dfbc->leave($__internal_a07fb05a68c5b7d0762d41b677bc6e3863deda0e7a23dd074265682ffc46dfbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_168c85562d0c916fccb3725a83d9cbddd3aa1c9402f745b9fc4c41e79322392d = $this->env->getExtension("native_profiler");
        $__internal_168c85562d0c916fccb3725a83d9cbddd3aa1c9402f745b9fc4c41e79322392d->enter($__internal_168c85562d0c916fccb3725a83d9cbddd3aa1c9402f745b9fc4c41e79322392d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_168c85562d0c916fccb3725a83d9cbddd3aa1c9402f745b9fc4c41e79322392d->leave($__internal_168c85562d0c916fccb3725a83d9cbddd3aa1c9402f745b9fc4c41e79322392d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b29071fe48e684a1e884eab985bd8da9b1b8263b1fe574e5e9acec59158e817e = $this->env->getExtension("native_profiler");
        $__internal_b29071fe48e684a1e884eab985bd8da9b1b8263b1fe574e5e9acec59158e817e->enter($__internal_b29071fe48e684a1e884eab985bd8da9b1b8263b1fe574e5e9acec59158e817e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b29071fe48e684a1e884eab985bd8da9b1b8263b1fe574e5e9acec59158e817e->leave($__internal_b29071fe48e684a1e884eab985bd8da9b1b8263b1fe574e5e9acec59158e817e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d8f40e6f3df015a495e7379b87b3ccc74dd4ee23a05ae60d6ca8ddf0acd8fa = $this->env->getExtension("native_profiler");
        $__internal_30d8f40e6f3df015a495e7379b87b3ccc74dd4ee23a05ae60d6ca8ddf0acd8fa->enter($__internal_30d8f40e6f3df015a495e7379b87b3ccc74dd4ee23a05ae60d6ca8ddf0acd8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_30d8f40e6f3df015a495e7379b87b3ccc74dd4ee23a05ae60d6ca8ddf0acd8fa->leave($__internal_30d8f40e6f3df015a495e7379b87b3ccc74dd4ee23a05ae60d6ca8ddf0acd8fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
