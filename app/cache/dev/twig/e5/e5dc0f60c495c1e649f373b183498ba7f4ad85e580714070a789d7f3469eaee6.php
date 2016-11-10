<?php

/* PgGsbFraisBundle:Home:affectertablettes.html.twig */
class __TwigTemplate_854ce448ff988ffe551cb93bc777987497e627d0d0ab64ad1f6b7ef8632ce272 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:Home:affectertablettes.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc51605d0100e3ba178e49568e7675756be190603da455500b958f02ffca4f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc51605d0100e3ba178e49568e7675756be190603da455500b958f02ffca4f34->enter($__internal_dc51605d0100e3ba178e49568e7675756be190603da455500b958f02ffca4f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:affectertablettes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc51605d0100e3ba178e49568e7675756be190603da455500b958f02ffca4f34->leave($__internal_dc51605d0100e3ba178e49568e7675756be190603da455500b958f02ffca4f34_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e4b5274323995d43936d2be0ec639d2c48a4235c138eb93b58f600194cdba9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4b5274323995d43936d2be0ec639d2c48a4235c138eb93b58f600194cdba9e->enter($__internal_6e4b5274323995d43936d2be0ec639d2c48a4235c138eb93b58f600194cdba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "<div id=\"contenu\">
";
        // line 5
        $this->displayParentBlock("menu", $context, $blocks);
        echo "

";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "daf"), "method") == true)) {
            // line 8
            echo "
<h2 style=\"text-align: center;\"> 


<table style=\"border-collapse: collapse;\">

<tr style=\"{border: 1px solid black;}\">

<th style=\"border: 1px solid black;\" >Numéro Tablette </th>

<th style=\"border: 1px solid black;\">Type de Tablette </th>

<th style=\"border: 1px solid black;\"> Mémoire Interne</th>

<th style=\"border: 1px solid black;\"> Mémoire Externe</th>

</tr>



";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tablette"]) ? $context["tablette"] : $this->getContext($context, "tablette")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                echo " 

<tr style=\"border: 1px solid black;\">

<td style=\"border: 1px solid black;\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
                echo "</td>

<td style=\"border: 1px solid black;\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "typeTablette", array()), "html", null, true);
                echo "</td>

<td style=\"border: 1px solid black;\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "memoireInt", array()), "html", null, true);
                echo " </td>

<td style=\"border: 1px solid black;\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "memoireExt", array()), "html", null, true);
                echo "</td>

</br>

</tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
</table>

</h2>

";
        }
        // line 51
        echo "</div> 
";
        
        $__internal_6e4b5274323995d43936d2be0ec639d2c48a4235c138eb93b58f600194cdba9e->leave($__internal_6e4b5274323995d43936d2be0ec639d2c48a4235c138eb93b58f600194cdba9e_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:affectertablettes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  109 => 45,  96 => 38,  91 => 36,  86 => 34,  81 => 32,  72 => 28,  50 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::accueil.html.twig\" %}

{% block menu %}
<div id=\"contenu\">
{{parent()}}

{% if app.session.get('daf') == true %}

<h2 style=\"text-align: center;\"> 


<table style=\"border-collapse: collapse;\">

<tr style=\"{border: 1px solid black;}\">

<th style=\"border: 1px solid black;\" >Numéro Tablette </th>

<th style=\"border: 1px solid black;\">Type de Tablette </th>

<th style=\"border: 1px solid black;\"> Mémoire Interne</th>

<th style=\"border: 1px solid black;\"> Mémoire Externe</th>

</tr>



{%for t in tablette%} 

<tr style=\"border: 1px solid black;\">

<td style=\"border: 1px solid black;\">{{t.id}}</td>

<td style=\"border: 1px solid black;\">{{t.typeTablette}}</td>

<td style=\"border: 1px solid black;\">{{t.memoireInt}} </td>

<td style=\"border: 1px solid black;\">{{t.memoireExt}}</td>

</br>

</tr>

{% endfor %}

</table>

</h2>

{%endif%}
</div> 
{% endblock %}
";
    }
}
