<?php

/* base.html.twig */
class __TwigTemplate_56914e9c8187109e87a3c71d3e735da90ef5dbc935ef2e224a083f5628c741e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b50e0034a29fe712d31f4e4df1d933be503c0ae58fa742c9363280fcabdc918d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50e0034a29fe712d31f4e4df1d933be503c0ae58fa742c9363280fcabdc918d->enter($__internal_b50e0034a29fe712d31f4e4df1d933be503c0ae58fa742c9363280fcabdc918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b50e0034a29fe712d31f4e4df1d933be503c0ae58fa742c9363280fcabdc918d->leave($__internal_b50e0034a29fe712d31f4e4df1d933be503c0ae58fa742c9363280fcabdc918d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89892120fe57c73aaa49bb7674aafcbee45ffdbde14f4520ced365972f953cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89892120fe57c73aaa49bb7674aafcbee45ffdbde14f4520ced365972f953cdd->enter($__internal_89892120fe57c73aaa49bb7674aafcbee45ffdbde14f4520ced365972f953cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_89892120fe57c73aaa49bb7674aafcbee45ffdbde14f4520ced365972f953cdd->leave($__internal_89892120fe57c73aaa49bb7674aafcbee45ffdbde14f4520ced365972f953cdd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfc0f9b3700215ba749d1a1f5ebad858dffd2a16aae41063c477be19351197f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc0f9b3700215ba749d1a1f5ebad858dffd2a16aae41063c477be19351197f0->enter($__internal_bfc0f9b3700215ba749d1a1f5ebad858dffd2a16aae41063c477be19351197f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bfc0f9b3700215ba749d1a1f5ebad858dffd2a16aae41063c477be19351197f0->leave($__internal_bfc0f9b3700215ba749d1a1f5ebad858dffd2a16aae41063c477be19351197f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfc21ab7a300968df46f7b2cb9fac988dfbfc1e34b02867a3bcca6835b72b71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc21ab7a300968df46f7b2cb9fac988dfbfc1e34b02867a3bcca6835b72b71b->enter($__internal_dfc21ab7a300968df46f7b2cb9fac988dfbfc1e34b02867a3bcca6835b72b71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dfc21ab7a300968df46f7b2cb9fac988dfbfc1e34b02867a3bcca6835b72b71b->leave($__internal_dfc21ab7a300968df46f7b2cb9fac988dfbfc1e34b02867a3bcca6835b72b71b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06d97cb531b60cd70f9d21a125ee8bbd0bdf0a35ca45249289d09a7d6572b7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d97cb531b60cd70f9d21a125ee8bbd0bdf0a35ca45249289d09a7d6572b7fb->enter($__internal_06d97cb531b60cd70f9d21a125ee8bbd0bdf0a35ca45249289d09a7d6572b7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06d97cb531b60cd70f9d21a125ee8bbd0bdf0a35ca45249289d09a7d6572b7fb->leave($__internal_06d97cb531b60cd70f9d21a125ee8bbd0bdf0a35ca45249289d09a7d6572b7fb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
