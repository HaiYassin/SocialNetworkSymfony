<?php

/* AppBundle:User:index.html.twig */
class __TwigTemplate_b6053827b8a1459947201285a50ede6bf71fb6bd14b76708fa63ba26b75e3947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0a9e2e379071947e3e6f3ad077af1d1dbcd859dc384c07d334b1c4f405a2c3f = $this->env->getExtension("native_profiler");
        $__internal_d0a9e2e379071947e3e6f3ad077af1d1dbcd859dc384c07d334b1c4f405a2c3f->enter($__internal_d0a9e2e379071947e3e6f3ad077af1d1dbcd859dc384c07d334b1c4f405a2c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a9e2e379071947e3e6f3ad077af1d1dbcd859dc384c07d334b1c4f405a2c3f->leave($__internal_d0a9e2e379071947e3e6f3ad077af1d1dbcd859dc384c07d334b1c4f405a2c3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd99e57f6dab3b0c716a64a9e0627d843cbe9754174a1fe3237f19738781451d = $this->env->getExtension("native_profiler");
        $__internal_bd99e57f6dab3b0c716a64a9e0627d843cbe9754174a1fe3237f19738781451d->enter($__internal_bd99e57f6dab3b0c716a64a9e0627d843cbe9754174a1fe3237f19738781451d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"padding\">
    <div class=\"full col-xs-12\">

        <!-- content -->
        <div class=\"row\">

            <!-- main col left -->
            <div class=\"col-xs-12 col-lg-8\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                ";
        // line 15
        echo "                                <div>
                                     ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                                     <div class=\"grid-item\">
                                         <a href=\" ";
            // line 18
            echo $this->env->getExtension('routing')->getPath("user_default_index");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo50x50", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo50x50", array()), "img/VADOR.jpg")) : ("img/VADOR.jpg"))), "html", null, true);
            echo "\" width=\"50\" height=\"50\"/></a>
                                     </div>
                                     <div class=\"grid-item\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo50x50", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logo50x50", array()), "img/VADOR.jpg")) : ("img/VADOR.jpg"))), "html", null, true);
            echo "\" width=\"50\" height=\"50\"/></div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                                    ";
        // line 23
        echo "
                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 25
            echo "                                        <div class=\"grid-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute($context["utilisateur"], "logo50x50", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["utilisateur"], "logo50x50", array()), "img/VADOR.jpg")) : ("img/VADOR.jpg"))), "html", null, true);
            echo "\" width=\"50\" height=\"50\"/></div>
                                        <div class=\"grid-item\"></div>
                                        ";
            // line 30
            echo "                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "                                        <div class=\"grid-item\"></div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <p>Module 1</p>
                                </div>
                                <div class=\"panel-heading\">
                                    <p>Module 2</p>
                                </div>
                                <div class=\"panel-heading\">
                                    <p>Module 3</p>
                                </div>
                                <div class=\"panel-heading\">
                                    <p>Module 4</p>
                                </div>
                                <div class=\"panel-heading\">
                                    <p>Module 5</p>
                                </div>
                                <div class=\"panel-heading\">
                                    <p>Module 6</p>
                                </div>
                            </div>
                                ";
        // line 89
        echo "                        </div>
        </div>


    </div>
</div>
";
        
        $__internal_bd99e57f6dab3b0c716a64a9e0627d843cbe9754174a1fe3237f19738781451d->leave($__internal_bd99e57f6dab3b0c716a64a9e0627d843cbe9754174a1fe3237f19738781451d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 89,  105 => 33,  98 => 31,  93 => 30,  87 => 25,  82 => 24,  79 => 23,  77 => 22,  69 => 20,  62 => 18,  59 => 17,  55 => 16,  52 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="padding">*/
/*     <div class="full col-xs-12">*/
/* */
/*         <!-- content -->*/
/*         <div class="row">*/
/* */
/*             <!-- main col left -->*/
/*             <div class="col-xs-12 col-lg-8">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-body">*/
/*                                 {# <img class="img-responsive" src="{{ asset('assets/unnamed.jpg') }}"/> #}*/
/*                                 <div>*/
/*                                      {% for i in 1..20 %}*/
/*                                      <div class="grid-item">*/
/*                                          <a href=" {{ path('user_default_index') }}"><img src="{{ asset(user.logo50x50|default('img/VADOR.jpg')) }}" width="50" height="50"/></a>*/
/*                                      </div>*/
/*                                      <div class="grid-item"><img src="{{ asset(user.logo50x50|default('img/VADOR.jpg')) }}" width="50" height="50"/></div>*/
/*                                     {% endfor %}*/
/*                                     {# dump(logos) #}*/
/* */
/*                                     {% for utilisateur in utilisateurs %}*/
/*                                         <div class="grid-item"><img src="{{ asset(utilisateur.logo50x50|default('img/VADOR.jpg')) }}" width="50" height="50"/></div>*/
/*                                         <div class="grid-item"></div>*/
/*                                         {#    {% for j in 1..1 %}*/
/*                                                 <div class="grid-item grid-item--2"></div>*/
/*                                             {% endfor %}#}*/
/*                                     {% else %}*/
/*                                         <div class="grid-item"></div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-lg-4">*/
/*                             <div class="panel panel-default">*/
/*                                 <div class="panel-heading">*/
/*                                     <p>Module 1</p>*/
/*                                 </div>*/
/*                                 <div class="panel-heading">*/
/*                                     <p>Module 2</p>*/
/*                                 </div>*/
/*                                 <div class="panel-heading">*/
/*                                     <p>Module 3</p>*/
/*                                 </div>*/
/*                                 <div class="panel-heading">*/
/*                                     <p>Module 4</p>*/
/*                                 </div>*/
/*                                 <div class="panel-heading">*/
/*                                     <p>Module 5</p>*/
/*                                 </div>*/
/*                                 <div class="panel-heading">*/
/*                                     <p>Module 6</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                                 {#*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-reflow table-responsive">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th style="max-width: 200px;">TipTopGrille</th>*/
/*                                     <th></th>*/
/*                                     <th></th>*/
/*                                     <th></th>*/
/*                                     <th></th>*/
/*                                     <th></th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for i in 1..3 %}*/
/*                                 <tr>*/
/*                                     <th scope="row">{{ i }}</th>*/
/*                                     <td style="text-align: right; width: 90px;"><img src="{{ asset(projet.path|default('img/logo/50x50/576a64aecf231.jpg')) }}"width="90" height="50"/></td>*/
/*                                     <td style="width: 50px;"><img src="{{ asset(projet.path|default('img/logo/50x50/576a64aecf231.jpg')) }}"width="50" height="50"/></td>*/
/*                                     <td style="width: 90px;"><img src="{{ asset(projet.path|default('img/logo/50x50/576a64aecf231.jpg')) }}"width="90" height="50"/></td>*/
/*                                     <td style="width: 50px;"><img src="{{ asset(projet.path|default('img/logo/50x50/576a64aecf231.jpg')) }}"width="50" height="50"/></td>*/
/*                                     <td style="width: 90px;"><img src="{{ asset(projet.path|default('img/logo/50x50/576a64aecf231.jpg')) }}"width="90" height="50"/></td>*/
/*                                     <td style=""><img src="{{ asset(projet.path|default('img/logo/50x50/576a64aecf231.jpg')) }}"width="50" height="50"/></td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table> #}*/
/*                         </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
