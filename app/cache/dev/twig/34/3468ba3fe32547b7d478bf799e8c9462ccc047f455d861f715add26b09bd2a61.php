<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3eb3c50bb168817b20ba02f4fb2f9e685e3fa275e099ff3726d3f38da721268f extends Twig_Template
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
        $__internal_4c48266db018224a79c0a2695f00799f0389d8da6b85d097a236994c09de200f = $this->env->getExtension("native_profiler");
        $__internal_4c48266db018224a79c0a2695f00799f0389d8da6b85d097a236994c09de200f->enter($__internal_4c48266db018224a79c0a2695f00799f0389d8da6b85d097a236994c09de200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4c48266db018224a79c0a2695f00799f0389d8da6b85d097a236994c09de200f->leave($__internal_4c48266db018224a79c0a2695f00799f0389d8da6b85d097a236994c09de200f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
