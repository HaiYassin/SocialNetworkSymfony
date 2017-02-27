<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ff8164d43788cd278fe899cdf2afb22b820417f74c42402dfc43ff7d7fa320a5 extends Twig_Template
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
        $__internal_0689fb6c18d2a66f171c2c0992babf7be8b252df46507755ea4a3ce60fb8fd5f = $this->env->getExtension("native_profiler");
        $__internal_0689fb6c18d2a66f171c2c0992babf7be8b252df46507755ea4a3ce60fb8fd5f->enter($__internal_0689fb6c18d2a66f171c2c0992babf7be8b252df46507755ea4a3ce60fb8fd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0689fb6c18d2a66f171c2c0992babf7be8b252df46507755ea4a3ce60fb8fd5f->leave($__internal_0689fb6c18d2a66f171c2c0992babf7be8b252df46507755ea4a3ce60fb8fd5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
