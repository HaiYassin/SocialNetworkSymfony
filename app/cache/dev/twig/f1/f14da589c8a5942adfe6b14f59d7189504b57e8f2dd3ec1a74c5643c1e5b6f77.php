<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6f3ff22f1ed119ba0a34f6a69138641262b6d96428582710d6d705879996ce89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_e02424622a7893513da80a2c17a896d205919ffbc4a11b569a10d69307ca48ba = $this->env->getExtension("native_profiler");
        $__internal_e02424622a7893513da80a2c17a896d205919ffbc4a11b569a10d69307ca48ba->enter($__internal_e02424622a7893513da80a2c17a896d205919ffbc4a11b569a10d69307ca48ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02424622a7893513da80a2c17a896d205919ffbc4a11b569a10d69307ca48ba->leave($__internal_e02424622a7893513da80a2c17a896d205919ffbc4a11b569a10d69307ca48ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_459bfffeb895f55b70557f3c541930a365c03d30085ca1c01a31796ff68590b3 = $this->env->getExtension("native_profiler");
        $__internal_459bfffeb895f55b70557f3c541930a365c03d30085ca1c01a31796ff68590b3->enter($__internal_459bfffeb895f55b70557f3c541930a365c03d30085ca1c01a31796ff68590b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_459bfffeb895f55b70557f3c541930a365c03d30085ca1c01a31796ff68590b3->leave($__internal_459bfffeb895f55b70557f3c541930a365c03d30085ca1c01a31796ff68590b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c25aedde991b8797149fd3d5a8764e24f68bbd8855f06a7e682cebb810a32a = $this->env->getExtension("native_profiler");
        $__internal_67c25aedde991b8797149fd3d5a8764e24f68bbd8855f06a7e682cebb810a32a->enter($__internal_67c25aedde991b8797149fd3d5a8764e24f68bbd8855f06a7e682cebb810a32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67c25aedde991b8797149fd3d5a8764e24f68bbd8855f06a7e682cebb810a32a->leave($__internal_67c25aedde991b8797149fd3d5a8764e24f68bbd8855f06a7e682cebb810a32a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
