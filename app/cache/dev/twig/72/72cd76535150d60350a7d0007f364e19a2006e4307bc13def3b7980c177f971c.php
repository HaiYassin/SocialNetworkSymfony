<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f97d2966fcf77b4690391a4ef33371b75e43a9344decab7a064169cf8a4a091d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_578f0c29b6e0796c599cc6015ec69329c406911ffca6e78f8d8bcc32d3863721 = $this->env->getExtension("native_profiler");
        $__internal_578f0c29b6e0796c599cc6015ec69329c406911ffca6e78f8d8bcc32d3863721->enter($__internal_578f0c29b6e0796c599cc6015ec69329c406911ffca6e78f8d8bcc32d3863721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578f0c29b6e0796c599cc6015ec69329c406911ffca6e78f8d8bcc32d3863721->leave($__internal_578f0c29b6e0796c599cc6015ec69329c406911ffca6e78f8d8bcc32d3863721_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8b375f357a153566e7f2953e939dc1ecdf6c3de27cc98950c4ffe5ec5458dff = $this->env->getExtension("native_profiler");
        $__internal_a8b375f357a153566e7f2953e939dc1ecdf6c3de27cc98950c4ffe5ec5458dff->enter($__internal_a8b375f357a153566e7f2953e939dc1ecdf6c3de27cc98950c4ffe5ec5458dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8b375f357a153566e7f2953e939dc1ecdf6c3de27cc98950c4ffe5ec5458dff->leave($__internal_a8b375f357a153566e7f2953e939dc1ecdf6c3de27cc98950c4ffe5ec5458dff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd5b313ab3dc4922e59f6bf8c1c6e2d5b1e7005383b08061336a7bdd0fa4139f = $this->env->getExtension("native_profiler");
        $__internal_bd5b313ab3dc4922e59f6bf8c1c6e2d5b1e7005383b08061336a7bdd0fa4139f->enter($__internal_bd5b313ab3dc4922e59f6bf8c1c6e2d5b1e7005383b08061336a7bdd0fa4139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd5b313ab3dc4922e59f6bf8c1c6e2d5b1e7005383b08061336a7bdd0fa4139f->leave($__internal_bd5b313ab3dc4922e59f6bf8c1c6e2d5b1e7005383b08061336a7bdd0fa4139f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_669f6613e340b2c09b71f02ba780227fffc72bebf8bc08abede788383dd10dca = $this->env->getExtension("native_profiler");
        $__internal_669f6613e340b2c09b71f02ba780227fffc72bebf8bc08abede788383dd10dca->enter($__internal_669f6613e340b2c09b71f02ba780227fffc72bebf8bc08abede788383dd10dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_669f6613e340b2c09b71f02ba780227fffc72bebf8bc08abede788383dd10dca->leave($__internal_669f6613e340b2c09b71f02ba780227fffc72bebf8bc08abede788383dd10dca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
