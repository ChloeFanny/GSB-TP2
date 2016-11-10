<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5ec434b1f6fbbf0d1d64a89968f09ea9a0701bd0dbeff6882c6148ced27ca758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1d888af64fe0ff1e4595c9f15ae1b3501c3e8aa1cd75dd05d84af6395594414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d888af64fe0ff1e4595c9f15ae1b3501c3e8aa1cd75dd05d84af6395594414->enter($__internal_f1d888af64fe0ff1e4595c9f15ae1b3501c3e8aa1cd75dd05d84af6395594414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1d888af64fe0ff1e4595c9f15ae1b3501c3e8aa1cd75dd05d84af6395594414->leave($__internal_f1d888af64fe0ff1e4595c9f15ae1b3501c3e8aa1cd75dd05d84af6395594414_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_048c70db4750944faa620a99ca0798acf0d5e973ca80a252cf39d4d6f54f17a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048c70db4750944faa620a99ca0798acf0d5e973ca80a252cf39d4d6f54f17a7->enter($__internal_048c70db4750944faa620a99ca0798acf0d5e973ca80a252cf39d4d6f54f17a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_048c70db4750944faa620a99ca0798acf0d5e973ca80a252cf39d4d6f54f17a7->leave($__internal_048c70db4750944faa620a99ca0798acf0d5e973ca80a252cf39d4d6f54f17a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e993fac05bf7f2bc19f054f0b86df00a97eb9f04d141d6150e10595b3c259c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e993fac05bf7f2bc19f054f0b86df00a97eb9f04d141d6150e10595b3c259c5->enter($__internal_2e993fac05bf7f2bc19f054f0b86df00a97eb9f04d141d6150e10595b3c259c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e993fac05bf7f2bc19f054f0b86df00a97eb9f04d141d6150e10595b3c259c5->leave($__internal_2e993fac05bf7f2bc19f054f0b86df00a97eb9f04d141d6150e10595b3c259c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b4f15c47dbe380c8f3a8983772784430710feb53354b09c78c304258a19cc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4f15c47dbe380c8f3a8983772784430710feb53354b09c78c304258a19cc21->enter($__internal_4b4f15c47dbe380c8f3a8983772784430710feb53354b09c78c304258a19cc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b4f15c47dbe380c8f3a8983772784430710feb53354b09c78c304258a19cc21->leave($__internal_4b4f15c47dbe380c8f3a8983772784430710feb53354b09c78c304258a19cc21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
