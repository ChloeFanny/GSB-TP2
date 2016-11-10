<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7aaaa2474d71b130afd04a7c615599a9f18c96f4d27a0db4ba4e22ee38dbd4af extends Twig_Template
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
        $__internal_d57347e85c15779d9af57fa948cde7458841af1428da42e78063f39ba0609216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57347e85c15779d9af57fa948cde7458841af1428da42e78063f39ba0609216->enter($__internal_d57347e85c15779d9af57fa948cde7458841af1428da42e78063f39ba0609216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d57347e85c15779d9af57fa948cde7458841af1428da42e78063f39ba0609216->leave($__internal_d57347e85c15779d9af57fa948cde7458841af1428da42e78063f39ba0609216_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bc244355fe277b497fb377f8f0c4ea57b3e37aac7bad9bb14bef418bba3f8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc244355fe277b497fb377f8f0c4ea57b3e37aac7bad9bb14bef418bba3f8fc->enter($__internal_3bc244355fe277b497fb377f8f0c4ea57b3e37aac7bad9bb14bef418bba3f8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3bc244355fe277b497fb377f8f0c4ea57b3e37aac7bad9bb14bef418bba3f8fc->leave($__internal_3bc244355fe277b497fb377f8f0c4ea57b3e37aac7bad9bb14bef418bba3f8fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdf7f3f3da437df7f0ae82f93e02eaa2f87c4626a6933eb8ed05bd7196964769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf7f3f3da437df7f0ae82f93e02eaa2f87c4626a6933eb8ed05bd7196964769->enter($__internal_cdf7f3f3da437df7f0ae82f93e02eaa2f87c4626a6933eb8ed05bd7196964769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cdf7f3f3da437df7f0ae82f93e02eaa2f87c4626a6933eb8ed05bd7196964769->leave($__internal_cdf7f3f3da437df7f0ae82f93e02eaa2f87c4626a6933eb8ed05bd7196964769_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0dc4da1fda2b9959c83174ed036ab8fe8fa28540d43e44420b271fd5fe6afa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc4da1fda2b9959c83174ed036ab8fe8fa28540d43e44420b271fd5fe6afa89->enter($__internal_0dc4da1fda2b9959c83174ed036ab8fe8fa28540d43e44420b271fd5fe6afa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0dc4da1fda2b9959c83174ed036ab8fe8fa28540d43e44420b271fd5fe6afa89->leave($__internal_0dc4da1fda2b9959c83174ed036ab8fe8fa28540d43e44420b271fd5fe6afa89_prof);

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
