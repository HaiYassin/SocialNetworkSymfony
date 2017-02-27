<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_38360381a4db78f74f1ec7c9a2c7ebef6c1907b5d39a0c4e6214ae7596e3503e extends Twig_Template
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
        $__internal_9ecbb6058ec73cfa332e5bf53a4fca00450faeab272a7d969f5fb8e0ad2896de = $this->env->getExtension("native_profiler");
        $__internal_9ecbb6058ec73cfa332e5bf53a4fca00450faeab272a7d969f5fb8e0ad2896de->enter($__internal_9ecbb6058ec73cfa332e5bf53a4fca00450faeab272a7d969f5fb8e0ad2896de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9ecbb6058ec73cfa332e5bf53a4fca00450faeab272a7d969f5fb8e0ad2896de->leave($__internal_9ecbb6058ec73cfa332e5bf53a4fca00450faeab272a7d969f5fb8e0ad2896de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
