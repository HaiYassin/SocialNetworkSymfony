<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b53a05940eb5e68b892d88d258223d66be5921603d6f6c70f811b04c9e8caf80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16ad3f2c39d9ad6b16b56b68df8e5a3afa11fb7f9327e5d27c84c0de6c8601d3 = $this->env->getExtension("native_profiler");
        $__internal_16ad3f2c39d9ad6b16b56b68df8e5a3afa11fb7f9327e5d27c84c0de6c8601d3->enter($__internal_16ad3f2c39d9ad6b16b56b68df8e5a3afa11fb7f9327e5d27c84c0de6c8601d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_16ad3f2c39d9ad6b16b56b68df8e5a3afa11fb7f9327e5d27c84c0de6c8601d3->leave($__internal_16ad3f2c39d9ad6b16b56b68df8e5a3afa11fb7f9327e5d27c84c0de6c8601d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
