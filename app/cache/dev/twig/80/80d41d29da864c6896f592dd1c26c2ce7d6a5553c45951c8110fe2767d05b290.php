<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d4feb971f36edae93087ff870820f0a672bd0bd63c23e2e1339bc2c0f969977f extends Twig_Template
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
        $__internal_9ad97c1ce22487bc14c3515305c1f8e64772290eb4d16b9e2a8491653f1ebf6c = $this->env->getExtension("native_profiler");
        $__internal_9ad97c1ce22487bc14c3515305c1f8e64772290eb4d16b9e2a8491653f1ebf6c->enter($__internal_9ad97c1ce22487bc14c3515305c1f8e64772290eb4d16b9e2a8491653f1ebf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9ad97c1ce22487bc14c3515305c1f8e64772290eb4d16b9e2a8491653f1ebf6c->leave($__internal_9ad97c1ce22487bc14c3515305c1f8e64772290eb4d16b9e2a8491653f1ebf6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
