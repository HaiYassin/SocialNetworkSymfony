<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f637b4d5fa0dd9a90450ad083710bb64c459fc0b143f32641d6a302660849008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_560464958157aa65d9b135bb7590c85b07f22e88ce73c97de6fa40faa2a8490f = $this->env->getExtension("native_profiler");
        $__internal_560464958157aa65d9b135bb7590c85b07f22e88ce73c97de6fa40faa2a8490f->enter($__internal_560464958157aa65d9b135bb7590c85b07f22e88ce73c97de6fa40faa2a8490f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_560464958157aa65d9b135bb7590c85b07f22e88ce73c97de6fa40faa2a8490f->leave($__internal_560464958157aa65d9b135bb7590c85b07f22e88ce73c97de6fa40faa2a8490f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f840c9139312c699c35dea4790a3ed924d8a010525b4d8411c12d9abac6c141 = $this->env->getExtension("native_profiler");
        $__internal_3f840c9139312c699c35dea4790a3ed924d8a010525b4d8411c12d9abac6c141->enter($__internal_3f840c9139312c699c35dea4790a3ed924d8a010525b4d8411c12d9abac6c141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3f840c9139312c699c35dea4790a3ed924d8a010525b4d8411c12d9abac6c141->leave($__internal_3f840c9139312c699c35dea4790a3ed924d8a010525b4d8411c12d9abac6c141_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f38c15c63d7cf754dfa57e00555134dc5d387785135065380ea7333560d34ff4 = $this->env->getExtension("native_profiler");
        $__internal_f38c15c63d7cf754dfa57e00555134dc5d387785135065380ea7333560d34ff4->enter($__internal_f38c15c63d7cf754dfa57e00555134dc5d387785135065380ea7333560d34ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f38c15c63d7cf754dfa57e00555134dc5d387785135065380ea7333560d34ff4->leave($__internal_f38c15c63d7cf754dfa57e00555134dc5d387785135065380ea7333560d34ff4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
