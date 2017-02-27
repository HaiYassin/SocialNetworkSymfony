<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_12e36b2035909e5486fa5170d69a01cfef1e07c451ccba62c16481a5676ee383 extends Twig_Template
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
        $__internal_c6eee160231f2886dbb52d5f8d4bc5dcc725ba7da0d2f83baffb1902177bd24d = $this->env->getExtension("native_profiler");
        $__internal_c6eee160231f2886dbb52d5f8d4bc5dcc725ba7da0d2f83baffb1902177bd24d->enter($__internal_c6eee160231f2886dbb52d5f8d4bc5dcc725ba7da0d2f83baffb1902177bd24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c6eee160231f2886dbb52d5f8d4bc5dcc725ba7da0d2f83baffb1902177bd24d->leave($__internal_c6eee160231f2886dbb52d5f8d4bc5dcc725ba7da0d2f83baffb1902177bd24d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
