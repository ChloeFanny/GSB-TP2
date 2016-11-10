<?php

/* base.html.twig */
class __TwigTemplate_62ecfed731db4e9e37c8ab9902c1c4a5cf0e54cadcff7037a8573df9038f95ad extends Twig_Template
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
        $__internal_8fb3304baedcfe656210c2d96a2b39bd9472645478080ec3d65c0e3d7d80c15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb3304baedcfe656210c2d96a2b39bd9472645478080ec3d65c0e3d7d80c15b->enter($__internal_8fb3304baedcfe656210c2d96a2b39bd9472645478080ec3d65c0e3d7d80c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8fb3304baedcfe656210c2d96a2b39bd9472645478080ec3d65c0e3d7d80c15b->leave($__internal_8fb3304baedcfe656210c2d96a2b39bd9472645478080ec3d65c0e3d7d80c15b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_efef07f9310e63feec1a7688c9a3553f150446c4a07a66b45bdb60407ce5f04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efef07f9310e63feec1a7688c9a3553f150446c4a07a66b45bdb60407ce5f04d->enter($__internal_efef07f9310e63feec1a7688c9a3553f150446c4a07a66b45bdb60407ce5f04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_efef07f9310e63feec1a7688c9a3553f150446c4a07a66b45bdb60407ce5f04d->leave($__internal_efef07f9310e63feec1a7688c9a3553f150446c4a07a66b45bdb60407ce5f04d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32ba750b4dd8d02213f48b0df28e693ca8f4a4546bb0830f409af34634153681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ba750b4dd8d02213f48b0df28e693ca8f4a4546bb0830f409af34634153681->enter($__internal_32ba750b4dd8d02213f48b0df28e693ca8f4a4546bb0830f409af34634153681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32ba750b4dd8d02213f48b0df28e693ca8f4a4546bb0830f409af34634153681->leave($__internal_32ba750b4dd8d02213f48b0df28e693ca8f4a4546bb0830f409af34634153681_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f01ef7292b49006b6ef7299b140551480517aec23a518df4f1156cbef1a93a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01ef7292b49006b6ef7299b140551480517aec23a518df4f1156cbef1a93a6e->enter($__internal_f01ef7292b49006b6ef7299b140551480517aec23a518df4f1156cbef1a93a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f01ef7292b49006b6ef7299b140551480517aec23a518df4f1156cbef1a93a6e->leave($__internal_f01ef7292b49006b6ef7299b140551480517aec23a518df4f1156cbef1a93a6e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9a68162eb28f5e2917e045d588086f0451f8231eed66b132da3e0b5cf8f7365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a68162eb28f5e2917e045d588086f0451f8231eed66b132da3e0b5cf8f7365->enter($__internal_c9a68162eb28f5e2917e045d588086f0451f8231eed66b132da3e0b5cf8f7365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c9a68162eb28f5e2917e045d588086f0451f8231eed66b132da3e0b5cf8f7365->leave($__internal_c9a68162eb28f5e2917e045d588086f0451f8231eed66b132da3e0b5cf8f7365_prof);

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
