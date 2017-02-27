<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4417b61f1d6bcea73c598649f479787ce7a7f9c5080d618c6a45987abc14b912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d23f7e168f6497f4c7431146873a6e134a1f97397671f21f7c0571ebd742f75 = $this->env->getExtension("native_profiler");
        $__internal_4d23f7e168f6497f4c7431146873a6e134a1f97397671f21f7c0571ebd742f75->enter($__internal_4d23f7e168f6497f4c7431146873a6e134a1f97397671f21f7c0571ebd742f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d23f7e168f6497f4c7431146873a6e134a1f97397671f21f7c0571ebd742f75->leave($__internal_4d23f7e168f6497f4c7431146873a6e134a1f97397671f21f7c0571ebd742f75_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4466b9077f23ac1adf06a4fbfbf5694335373383c66ff8813501a828c1e7c25 = $this->env->getExtension("native_profiler");
        $__internal_b4466b9077f23ac1adf06a4fbfbf5694335373383c66ff8813501a828c1e7c25->enter($__internal_b4466b9077f23ac1adf06a4fbfbf5694335373383c66ff8813501a828c1e7c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b4466b9077f23ac1adf06a4fbfbf5694335373383c66ff8813501a828c1e7c25->leave($__internal_b4466b9077f23ac1adf06a4fbfbf5694335373383c66ff8813501a828c1e7c25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
