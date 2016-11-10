<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_15815c2b229a700da5d9a24013f611588c391db92f70a81f94bc3c637adb95f7 extends Twig_Template
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
        $__internal_d2b277ff478d48e38f70fb0ef0298d7d09990cbb7df247ec2283585c8e806bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b277ff478d48e38f70fb0ef0298d7d09990cbb7df247ec2283585c8e806bf3->enter($__internal_d2b277ff478d48e38f70fb0ef0298d7d09990cbb7df247ec2283585c8e806bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b277ff478d48e38f70fb0ef0298d7d09990cbb7df247ec2283585c8e806bf3->leave($__internal_d2b277ff478d48e38f70fb0ef0298d7d09990cbb7df247ec2283585c8e806bf3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00a8f39c4618939725d37d9d510e03a7a1ad68cee99013dea0651bf4033cb16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a8f39c4618939725d37d9d510e03a7a1ad68cee99013dea0651bf4033cb16c->enter($__internal_00a8f39c4618939725d37d9d510e03a7a1ad68cee99013dea0651bf4033cb16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_00a8f39c4618939725d37d9d510e03a7a1ad68cee99013dea0651bf4033cb16c->leave($__internal_00a8f39c4618939725d37d9d510e03a7a1ad68cee99013dea0651bf4033cb16c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e8a5e8b9e56f7990a7f5a65d1050b71932a37893b2ace4bb6e8f9d508073093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8a5e8b9e56f7990a7f5a65d1050b71932a37893b2ace4bb6e8f9d508073093->enter($__internal_6e8a5e8b9e56f7990a7f5a65d1050b71932a37893b2ace4bb6e8f9d508073093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6e8a5e8b9e56f7990a7f5a65d1050b71932a37893b2ace4bb6e8f9d508073093->leave($__internal_6e8a5e8b9e56f7990a7f5a65d1050b71932a37893b2ace4bb6e8f9d508073093_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8621a4e93d10e5708480af1c68947b9134913123311ebc2bdcc2c330c65d788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8621a4e93d10e5708480af1c68947b9134913123311ebc2bdcc2c330c65d788->enter($__internal_e8621a4e93d10e5708480af1c68947b9134913123311ebc2bdcc2c330c65d788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e8621a4e93d10e5708480af1c68947b9134913123311ebc2bdcc2c330c65d788->leave($__internal_e8621a4e93d10e5708480af1c68947b9134913123311ebc2bdcc2c330c65d788_prof);

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
