<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f665e8bbb9627ab0f0539ac8bcbbadd161eb9b038cb764a890db4cac2dac5e2d extends Twig_Template
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
        $__internal_681a388c5d9efa3b93e1e252d089cec84787312ba30e55999afae8e74f6193a1 = $this->env->getExtension("native_profiler");
        $__internal_681a388c5d9efa3b93e1e252d089cec84787312ba30e55999afae8e74f6193a1->enter($__internal_681a388c5d9efa3b93e1e252d089cec84787312ba30e55999afae8e74f6193a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_681a388c5d9efa3b93e1e252d089cec84787312ba30e55999afae8e74f6193a1->leave($__internal_681a388c5d9efa3b93e1e252d089cec84787312ba30e55999afae8e74f6193a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
