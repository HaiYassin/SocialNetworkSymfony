<?php

/* AppBundle:User:index.html.twig */
class __TwigTemplate_f6f522590e1bd17c1683a47aa2594f6059a79235c8b115113f571a26f083d56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_481d5bc857457ecbbe427a9494e5619444e209df1fd1e20a161a4f9513b66bd9 = $this->env->getExtension("native_profiler");
        $__internal_481d5bc857457ecbbe427a9494e5619444e209df1fd1e20a161a4f9513b66bd9->enter($__internal_481d5bc857457ecbbe427a9494e5619444e209df1fd1e20a161a4f9513b66bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_481d5bc857457ecbbe427a9494e5619444e209df1fd1e20a161a4f9513b66bd9->leave($__internal_481d5bc857457ecbbe427a9494e5619444e209df1fd1e20a161a4f9513b66bd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5818f18a8234f8bb972adcd40acd7041b28ae86e1cf6c65c40088e8ac7a6422 = $this->env->getExtension("native_profiler");
        $__internal_b5818f18a8234f8bb972adcd40acd7041b28ae86e1cf6c65c40088e8ac7a6422->enter($__internal_b5818f18a8234f8bb972adcd40acd7041b28ae86e1cf6c65c40088e8ac7a6422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5818f18a8234f8bb972adcd40acd7041b28ae86e1cf6c65c40088e8ac7a6422->leave($__internal_b5818f18a8234f8bb972adcd40acd7041b28ae86e1cf6c65c40088e8ac7a6422_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block body %}{% endblock %}*/
/* */
