<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7b831615e821f5d649040002b428aa145db27084e56d15ae13863ac1d76f17ea extends Twig_Template
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
        $__internal_d35e94565b112d41318b701a670fab566eaa6a189f4d32efed15917112a6a7bf = $this->env->getExtension("native_profiler");
        $__internal_d35e94565b112d41318b701a670fab566eaa6a189f4d32efed15917112a6a7bf->enter($__internal_d35e94565b112d41318b701a670fab566eaa6a189f4d32efed15917112a6a7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d35e94565b112d41318b701a670fab566eaa6a189f4d32efed15917112a6a7bf->leave($__internal_d35e94565b112d41318b701a670fab566eaa6a189f4d32efed15917112a6a7bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
