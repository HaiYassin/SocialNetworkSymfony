<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c28b8977574027066c859ac3ac83738ec8da0936e7c80ffdbfb02556e415fd9b extends Twig_Template
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
        $__internal_b664f57dac768d5fb1530e8afa35c1e3e08330f406cd043bf15fc854d233ef8d = $this->env->getExtension("native_profiler");
        $__internal_b664f57dac768d5fb1530e8afa35c1e3e08330f406cd043bf15fc854d233ef8d->enter($__internal_b664f57dac768d5fb1530e8afa35c1e3e08330f406cd043bf15fc854d233ef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b664f57dac768d5fb1530e8afa35c1e3e08330f406cd043bf15fc854d233ef8d->leave($__internal_b664f57dac768d5fb1530e8afa35c1e3e08330f406cd043bf15fc854d233ef8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
