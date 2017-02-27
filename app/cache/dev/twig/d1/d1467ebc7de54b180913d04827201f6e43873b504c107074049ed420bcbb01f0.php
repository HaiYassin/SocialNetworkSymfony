<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fba2ac66a5beab3a3ee5a4e001b28289ecbc2f60811dcbc50264e4d63f1c5ac0 extends Twig_Template
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
        $__internal_ca4268c6b4800322e36d2e3cc474698f9c2d1a8b222c753baa79189f73bbebf4 = $this->env->getExtension("native_profiler");
        $__internal_ca4268c6b4800322e36d2e3cc474698f9c2d1a8b222c753baa79189f73bbebf4->enter($__internal_ca4268c6b4800322e36d2e3cc474698f9c2d1a8b222c753baa79189f73bbebf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ca4268c6b4800322e36d2e3cc474698f9c2d1a8b222c753baa79189f73bbebf4->leave($__internal_ca4268c6b4800322e36d2e3cc474698f9c2d1a8b222c753baa79189f73bbebf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
