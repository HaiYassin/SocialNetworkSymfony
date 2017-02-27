<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_da73c636cc79427c24f9dcaf9a98cb74ba17e7d5e37f30813b9e175508d70b8d extends Twig_Template
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
        $__internal_67153b597e4384e344e928f1565f0bcfc359a8dcc8445a8a3487b79a02f3bc05 = $this->env->getExtension("native_profiler");
        $__internal_67153b597e4384e344e928f1565f0bcfc359a8dcc8445a8a3487b79a02f3bc05->enter($__internal_67153b597e4384e344e928f1565f0bcfc359a8dcc8445a8a3487b79a02f3bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_67153b597e4384e344e928f1565f0bcfc359a8dcc8445a8a3487b79a02f3bc05->leave($__internal_67153b597e4384e344e928f1565f0bcfc359a8dcc8445a8a3487b79a02f3bc05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
