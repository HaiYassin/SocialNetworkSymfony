<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_772bcfebdd6acbc391e8fd895029c1a151a37ca1fd6c31a171ad18f34a65949b extends Twig_Template
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
        $__internal_3834c895b5b923ad15bb535a8503c35eabcbea6db871c7ecc48d71cd6145bc0f = $this->env->getExtension("native_profiler");
        $__internal_3834c895b5b923ad15bb535a8503c35eabcbea6db871c7ecc48d71cd6145bc0f->enter($__internal_3834c895b5b923ad15bb535a8503c35eabcbea6db871c7ecc48d71cd6145bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3834c895b5b923ad15bb535a8503c35eabcbea6db871c7ecc48d71cd6145bc0f->leave($__internal_3834c895b5b923ad15bb535a8503c35eabcbea6db871c7ecc48d71cd6145bc0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
