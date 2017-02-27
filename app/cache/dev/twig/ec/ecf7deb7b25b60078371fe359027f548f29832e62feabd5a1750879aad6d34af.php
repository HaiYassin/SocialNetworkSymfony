<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c82de5829d48f25ac5af659d4da20cc1ce1b4b45fe264cca2cbae253a03e2b68 extends Twig_Template
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
        $__internal_1efbaac44d41dfc29ec5759aa71aef17b44ecf514ef112738ad7b8ed0fe1cffb = $this->env->getExtension("native_profiler");
        $__internal_1efbaac44d41dfc29ec5759aa71aef17b44ecf514ef112738ad7b8ed0fe1cffb->enter($__internal_1efbaac44d41dfc29ec5759aa71aef17b44ecf514ef112738ad7b8ed0fe1cffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1efbaac44d41dfc29ec5759aa71aef17b44ecf514ef112738ad7b8ed0fe1cffb->leave($__internal_1efbaac44d41dfc29ec5759aa71aef17b44ecf514ef112738ad7b8ed0fe1cffb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
