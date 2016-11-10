<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52cee3c60b72a0379b6871bac4c132ddb52c307e22406fdb74ccd2eec0d3d87c extends Twig_Template
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
        $__internal_5da2474fe99a0562fc90d667ddb5800694d461fb25bbac36714fc505dffbf52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da2474fe99a0562fc90d667ddb5800694d461fb25bbac36714fc505dffbf52b->enter($__internal_5da2474fe99a0562fc90d667ddb5800694d461fb25bbac36714fc505dffbf52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da2474fe99a0562fc90d667ddb5800694d461fb25bbac36714fc505dffbf52b->leave($__internal_5da2474fe99a0562fc90d667ddb5800694d461fb25bbac36714fc505dffbf52b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aae279ab2d6e79840f7772d2fd8759c0c67da77b99d4a933388b1d66b864588f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae279ab2d6e79840f7772d2fd8759c0c67da77b99d4a933388b1d66b864588f->enter($__internal_aae279ab2d6e79840f7772d2fd8759c0c67da77b99d4a933388b1d66b864588f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aae279ab2d6e79840f7772d2fd8759c0c67da77b99d4a933388b1d66b864588f->leave($__internal_aae279ab2d6e79840f7772d2fd8759c0c67da77b99d4a933388b1d66b864588f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03849c5146b4e0cf4c7930c4044dd81beca53720d54ecc7861d19a900e1f4d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03849c5146b4e0cf4c7930c4044dd81beca53720d54ecc7861d19a900e1f4d7e->enter($__internal_03849c5146b4e0cf4c7930c4044dd81beca53720d54ecc7861d19a900e1f4d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03849c5146b4e0cf4c7930c4044dd81beca53720d54ecc7861d19a900e1f4d7e->leave($__internal_03849c5146b4e0cf4c7930c4044dd81beca53720d54ecc7861d19a900e1f4d7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e6f145e5c3e0bba4329f08c2cf3be68e51bd877fa532b2f78e28e70ae43f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e6f145e5c3e0bba4329f08c2cf3be68e51bd877fa532b2f78e28e70ae43f23->enter($__internal_36e6f145e5c3e0bba4329f08c2cf3be68e51bd877fa532b2f78e28e70ae43f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_36e6f145e5c3e0bba4329f08c2cf3be68e51bd877fa532b2f78e28e70ae43f23->leave($__internal_36e6f145e5c3e0bba4329f08c2cf3be68e51bd877fa532b2f78e28e70ae43f23_prof);

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
