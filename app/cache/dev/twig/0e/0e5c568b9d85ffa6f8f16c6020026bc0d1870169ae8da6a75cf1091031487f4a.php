<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e72eb3ce87a02b2bf4f8421225f1d0bc8fa3905701f8dabfdfc0f89bcdfd4d44 extends Twig_Template
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
        $__internal_8c959eecd727044c31082ab3b9a167c3fd059e39d4d068f7a7a06aae55f366f8 = $this->env->getExtension("native_profiler");
        $__internal_8c959eecd727044c31082ab3b9a167c3fd059e39d4d068f7a7a06aae55f366f8->enter($__internal_8c959eecd727044c31082ab3b9a167c3fd059e39d4d068f7a7a06aae55f366f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8c959eecd727044c31082ab3b9a167c3fd059e39d4d068f7a7a06aae55f366f8->leave($__internal_8c959eecd727044c31082ab3b9a167c3fd059e39d4d068f7a7a06aae55f366f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
