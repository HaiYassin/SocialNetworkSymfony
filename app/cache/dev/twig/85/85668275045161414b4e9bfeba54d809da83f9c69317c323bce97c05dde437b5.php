<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8bb8956787bb491548f0b43276a004ff43fbd76c6aea0c893113973575953d6b extends Twig_Template
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
        $__internal_40a8d7c9129e586b09d02f34bd5143f61ca49ae0345418334e71de011c745120 = $this->env->getExtension("native_profiler");
        $__internal_40a8d7c9129e586b09d02f34bd5143f61ca49ae0345418334e71de011c745120->enter($__internal_40a8d7c9129e586b09d02f34bd5143f61ca49ae0345418334e71de011c745120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_40a8d7c9129e586b09d02f34bd5143f61ca49ae0345418334e71de011c745120->leave($__internal_40a8d7c9129e586b09d02f34bd5143f61ca49ae0345418334e71de011c745120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
