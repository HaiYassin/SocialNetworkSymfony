<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e51274e02b34fd10c709f46993719091cf8589c4368145b7439101ca414b7f8a extends Twig_Template
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
        $__internal_e8209b1a2c72ef422ba401e2bb871fd107500c0e853f0fb0d3395ec3f28e69ea = $this->env->getExtension("native_profiler");
        $__internal_e8209b1a2c72ef422ba401e2bb871fd107500c0e853f0fb0d3395ec3f28e69ea->enter($__internal_e8209b1a2c72ef422ba401e2bb871fd107500c0e853f0fb0d3395ec3f28e69ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e8209b1a2c72ef422ba401e2bb871fd107500c0e853f0fb0d3395ec3f28e69ea->leave($__internal_e8209b1a2c72ef422ba401e2bb871fd107500c0e853f0fb0d3395ec3f28e69ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
