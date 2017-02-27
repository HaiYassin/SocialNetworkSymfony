<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_350cbc6b7d10a364eb19f024c745fffb8b15f43b0dfd9ec49207d5effa376a56 extends Twig_Template
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
        $__internal_bcd59d90d2a9046f143f1b5d91ee4a79583486e09d0e46ef34838412ccbbaa82 = $this->env->getExtension("native_profiler");
        $__internal_bcd59d90d2a9046f143f1b5d91ee4a79583486e09d0e46ef34838412ccbbaa82->enter($__internal_bcd59d90d2a9046f143f1b5d91ee4a79583486e09d0e46ef34838412ccbbaa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bcd59d90d2a9046f143f1b5d91ee4a79583486e09d0e46ef34838412ccbbaa82->leave($__internal_bcd59d90d2a9046f143f1b5d91ee4a79583486e09d0e46ef34838412ccbbaa82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
