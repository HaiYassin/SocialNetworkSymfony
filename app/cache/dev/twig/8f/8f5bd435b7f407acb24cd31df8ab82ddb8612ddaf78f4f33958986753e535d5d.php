<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a3c05ed65d1c9ec2fd3508ac94bfa196fa398af2cb65c89d5e43ad6e9977f26d extends Twig_Template
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
        $__internal_505f7593b257e24dc06bf15f739eaef660e7bb703ffabea156343ab56bf4baef = $this->env->getExtension("native_profiler");
        $__internal_505f7593b257e24dc06bf15f739eaef660e7bb703ffabea156343ab56bf4baef->enter($__internal_505f7593b257e24dc06bf15f739eaef660e7bb703ffabea156343ab56bf4baef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_505f7593b257e24dc06bf15f739eaef660e7bb703ffabea156343ab56bf4baef->leave($__internal_505f7593b257e24dc06bf15f739eaef660e7bb703ffabea156343ab56bf4baef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
