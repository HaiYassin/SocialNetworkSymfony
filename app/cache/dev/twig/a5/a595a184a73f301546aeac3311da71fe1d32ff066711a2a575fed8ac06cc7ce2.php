<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_71721fa7629d1c5f19b8326ee1e2ac14bebebc131ed1b548ec335104c3f00a55 extends Twig_Template
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
        $__internal_061fa95d9e6e25c968eacc42bdb009e4605ab852ec3953eb11f8209393673178 = $this->env->getExtension("native_profiler");
        $__internal_061fa95d9e6e25c968eacc42bdb009e4605ab852ec3953eb11f8209393673178->enter($__internal_061fa95d9e6e25c968eacc42bdb009e4605ab852ec3953eb11f8209393673178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_061fa95d9e6e25c968eacc42bdb009e4605ab852ec3953eb11f8209393673178->leave($__internal_061fa95d9e6e25c968eacc42bdb009e4605ab852ec3953eb11f8209393673178_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
