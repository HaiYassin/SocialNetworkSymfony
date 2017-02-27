<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_06fa30f665a0d64dbc6d0b8e93b8738f07864374197026ee790ade507b20b445 extends Twig_Template
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
        $__internal_d77071f1f0b36782207676743268e3dd2f7ba2fe9569b543a2ebf4989d88d377 = $this->env->getExtension("native_profiler");
        $__internal_d77071f1f0b36782207676743268e3dd2f7ba2fe9569b543a2ebf4989d88d377->enter($__internal_d77071f1f0b36782207676743268e3dd2f7ba2fe9569b543a2ebf4989d88d377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d77071f1f0b36782207676743268e3dd2f7ba2fe9569b543a2ebf4989d88d377->leave($__internal_d77071f1f0b36782207676743268e3dd2f7ba2fe9569b543a2ebf4989d88d377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
