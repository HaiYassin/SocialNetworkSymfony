<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_630ace3f95f7648dd3f52214d3040822b08ea8e06f75874114f096c9c9861b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ccbf9c1ccce57fdaa8de5bbec104c5891cea598f1cff20ebb367567ed5bf8dee = $this->env->getExtension("native_profiler");
        $__internal_ccbf9c1ccce57fdaa8de5bbec104c5891cea598f1cff20ebb367567ed5bf8dee->enter($__internal_ccbf9c1ccce57fdaa8de5bbec104c5891cea598f1cff20ebb367567ed5bf8dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccbf9c1ccce57fdaa8de5bbec104c5891cea598f1cff20ebb367567ed5bf8dee->leave($__internal_ccbf9c1ccce57fdaa8de5bbec104c5891cea598f1cff20ebb367567ed5bf8dee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8aacff2b300d5edc23c2d14b632be5efb904429433a6abc642396f0c87f3dc7 = $this->env->getExtension("native_profiler");
        $__internal_c8aacff2b300d5edc23c2d14b632be5efb904429433a6abc642396f0c87f3dc7->enter($__internal_c8aacff2b300d5edc23c2d14b632be5efb904429433a6abc642396f0c87f3dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c8aacff2b300d5edc23c2d14b632be5efb904429433a6abc642396f0c87f3dc7->leave($__internal_c8aacff2b300d5edc23c2d14b632be5efb904429433a6abc642396f0c87f3dc7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c4b7be87b7c6cb44b877006d1a89dc8394c03d45c982a7620931972c6838e7a = $this->env->getExtension("native_profiler");
        $__internal_4c4b7be87b7c6cb44b877006d1a89dc8394c03d45c982a7620931972c6838e7a->enter($__internal_4c4b7be87b7c6cb44b877006d1a89dc8394c03d45c982a7620931972c6838e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4c4b7be87b7c6cb44b877006d1a89dc8394c03d45c982a7620931972c6838e7a->leave($__internal_4c4b7be87b7c6cb44b877006d1a89dc8394c03d45c982a7620931972c6838e7a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9cdba96f8ec3882d4137fd523a3de53abe8ab4075c0bb86451e2f08ffce52c4 = $this->env->getExtension("native_profiler");
        $__internal_d9cdba96f8ec3882d4137fd523a3de53abe8ab4075c0bb86451e2f08ffce52c4->enter($__internal_d9cdba96f8ec3882d4137fd523a3de53abe8ab4075c0bb86451e2f08ffce52c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d9cdba96f8ec3882d4137fd523a3de53abe8ab4075c0bb86451e2f08ffce52c4->leave($__internal_d9cdba96f8ec3882d4137fd523a3de53abe8ab4075c0bb86451e2f08ffce52c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
