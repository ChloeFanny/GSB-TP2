<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8003312ee6f8f063771090b393ff96192274213bb2ce91bd9fa499502aadcd1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e76ae7a5c6f0b2bddd9ac9f9563c9174efb88047a3785495046a9bb9e1b64f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76ae7a5c6f0b2bddd9ac9f9563c9174efb88047a3785495046a9bb9e1b64f12->enter($__internal_e76ae7a5c6f0b2bddd9ac9f9563c9174efb88047a3785495046a9bb9e1b64f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76ae7a5c6f0b2bddd9ac9f9563c9174efb88047a3785495046a9bb9e1b64f12->leave($__internal_e76ae7a5c6f0b2bddd9ac9f9563c9174efb88047a3785495046a9bb9e1b64f12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b887e0d5b96620cfdd7f5021adab6427e07fe78079e7f62bea575330d7501ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b887e0d5b96620cfdd7f5021adab6427e07fe78079e7f62bea575330d7501ed->enter($__internal_4b887e0d5b96620cfdd7f5021adab6427e07fe78079e7f62bea575330d7501ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b887e0d5b96620cfdd7f5021adab6427e07fe78079e7f62bea575330d7501ed->leave($__internal_4b887e0d5b96620cfdd7f5021adab6427e07fe78079e7f62bea575330d7501ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_190cc917f4eda065812659f9e2d7a7ed4d3245fbeddf34761179063748f9cfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190cc917f4eda065812659f9e2d7a7ed4d3245fbeddf34761179063748f9cfcc->enter($__internal_190cc917f4eda065812659f9e2d7a7ed4d3245fbeddf34761179063748f9cfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_190cc917f4eda065812659f9e2d7a7ed4d3245fbeddf34761179063748f9cfcc->leave($__internal_190cc917f4eda065812659f9e2d7a7ed4d3245fbeddf34761179063748f9cfcc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9694ffc91b57fb5afb10ff2f9d51f255f7ee5ea9c08f24f74971545e042a2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9694ffc91b57fb5afb10ff2f9d51f255f7ee5ea9c08f24f74971545e042a2a8->enter($__internal_d9694ffc91b57fb5afb10ff2f9d51f255f7ee5ea9c08f24f74971545e042a2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d9694ffc91b57fb5afb10ff2f9d51f255f7ee5ea9c08f24f74971545e042a2a8->leave($__internal_d9694ffc91b57fb5afb10ff2f9d51f255f7ee5ea9c08f24f74971545e042a2a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
