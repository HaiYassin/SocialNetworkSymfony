<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5cbaad299b4b7aec819842797ee188ab49665ef04c9850bf16847704631f25c5 extends Twig_Template
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
        $__internal_e5bab66ec19324ec6c7451b9cd8da15d8b0838c2cc4182d1ec4d2cb766cf18cb = $this->env->getExtension("native_profiler");
        $__internal_e5bab66ec19324ec6c7451b9cd8da15d8b0838c2cc4182d1ec4d2cb766cf18cb->enter($__internal_e5bab66ec19324ec6c7451b9cd8da15d8b0838c2cc4182d1ec4d2cb766cf18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e5bab66ec19324ec6c7451b9cd8da15d8b0838c2cc4182d1ec4d2cb766cf18cb->leave($__internal_e5bab66ec19324ec6c7451b9cd8da15d8b0838c2cc4182d1ec4d2cb766cf18cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
