<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ff4df98dfd11b80ea35cc219b308b134f171a3bee11dc898a0aaaf0e263ec30c extends Twig_Template
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
        $__internal_2abd194fed3534b91d075493895b2d09ffdf1b7f0655b1961c891e0aa39b29f2 = $this->env->getExtension("native_profiler");
        $__internal_2abd194fed3534b91d075493895b2d09ffdf1b7f0655b1961c891e0aa39b29f2->enter($__internal_2abd194fed3534b91d075493895b2d09ffdf1b7f0655b1961c891e0aa39b29f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2abd194fed3534b91d075493895b2d09ffdf1b7f0655b1961c891e0aa39b29f2->leave($__internal_2abd194fed3534b91d075493895b2d09ffdf1b7f0655b1961c891e0aa39b29f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
