<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ac9ef85b69c6382341e1f4c9a494793283c8c82076b39f06cefe7ea39de8962f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e433954d30a287e8cfd79915728b57c5be0cc2fefe697ee0b829703742e7938b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e433954d30a287e8cfd79915728b57c5be0cc2fefe697ee0b829703742e7938b->enter($__internal_e433954d30a287e8cfd79915728b57c5be0cc2fefe697ee0b829703742e7938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e433954d30a287e8cfd79915728b57c5be0cc2fefe697ee0b829703742e7938b->leave($__internal_e433954d30a287e8cfd79915728b57c5be0cc2fefe697ee0b829703742e7938b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78be3113acc481391d87fd1ef7dc6eed1e102e78f2499799a11b21ebb7d14106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78be3113acc481391d87fd1ef7dc6eed1e102e78f2499799a11b21ebb7d14106->enter($__internal_78be3113acc481391d87fd1ef7dc6eed1e102e78f2499799a11b21ebb7d14106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_78be3113acc481391d87fd1ef7dc6eed1e102e78f2499799a11b21ebb7d14106->leave($__internal_78be3113acc481391d87fd1ef7dc6eed1e102e78f2499799a11b21ebb7d14106_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dffd3b3c77bd948f99e589073f18824c61c1babb31a40fa6ff14e0e83142c030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffd3b3c77bd948f99e589073f18824c61c1babb31a40fa6ff14e0e83142c030->enter($__internal_dffd3b3c77bd948f99e589073f18824c61c1babb31a40fa6ff14e0e83142c030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dffd3b3c77bd948f99e589073f18824c61c1babb31a40fa6ff14e0e83142c030->leave($__internal_dffd3b3c77bd948f99e589073f18824c61c1babb31a40fa6ff14e0e83142c030_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a491543cd0d9ecf0fe400cc1bd799a2ff97e9d60fa2ac7db6a49426a1656408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a491543cd0d9ecf0fe400cc1bd799a2ff97e9d60fa2ac7db6a49426a1656408->enter($__internal_3a491543cd0d9ecf0fe400cc1bd799a2ff97e9d60fa2ac7db6a49426a1656408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3a491543cd0d9ecf0fe400cc1bd799a2ff97e9d60fa2ac7db6a49426a1656408->leave($__internal_3a491543cd0d9ecf0fe400cc1bd799a2ff97e9d60fa2ac7db6a49426a1656408_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
