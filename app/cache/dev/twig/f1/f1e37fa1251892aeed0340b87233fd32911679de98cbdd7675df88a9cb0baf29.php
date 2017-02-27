<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2eb20e6fbad4b97e0ac5972225c9e6ef30d742e3556d20fa778652c31df5b309 extends Twig_Template
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
        $__internal_d1ca8af90b05f52b32beb04ae4b3ac66f0667d6fbf54c198d20ae1906dd7caaf = $this->env->getExtension("native_profiler");
        $__internal_d1ca8af90b05f52b32beb04ae4b3ac66f0667d6fbf54c198d20ae1906dd7caaf->enter($__internal_d1ca8af90b05f52b32beb04ae4b3ac66f0667d6fbf54c198d20ae1906dd7caaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d1ca8af90b05f52b32beb04ae4b3ac66f0667d6fbf54c198d20ae1906dd7caaf->leave($__internal_d1ca8af90b05f52b32beb04ae4b3ac66f0667d6fbf54c198d20ae1906dd7caaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
