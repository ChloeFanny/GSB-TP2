<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_335c1a775e17cb695cbbd441c932c1454ca9cf0f78e9fb1927ce0298842a9b28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92d7235ad04bf0f34194f9e0cea327bb1e3f91af7637b70366eec0655b301f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d7235ad04bf0f34194f9e0cea327bb1e3f91af7637b70366eec0655b301f55->enter($__internal_92d7235ad04bf0f34194f9e0cea327bb1e3f91af7637b70366eec0655b301f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_92d7235ad04bf0f34194f9e0cea327bb1e3f91af7637b70366eec0655b301f55->leave($__internal_92d7235ad04bf0f34194f9e0cea327bb1e3f91af7637b70366eec0655b301f55_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cb2d1115853b4fc8466c08e9ce53b5f1f713f78fd127513fc43cf83914607b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb2d1115853b4fc8466c08e9ce53b5f1f713f78fd127513fc43cf83914607b0->enter($__internal_6cb2d1115853b4fc8466c08e9ce53b5f1f713f78fd127513fc43cf83914607b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_6cb2d1115853b4fc8466c08e9ce53b5f1f713f78fd127513fc43cf83914607b0->leave($__internal_6cb2d1115853b4fc8466c08e9ce53b5f1f713f78fd127513fc43cf83914607b0_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e76eff0fd18d260509af701bf804b8b38e2be70546e68065a65bba91a952f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e76eff0fd18d260509af701bf804b8b38e2be70546e68065a65bba91a952f95->enter($__internal_3e76eff0fd18d260509af701bf804b8b38e2be70546e68065a65bba91a952f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_3e76eff0fd18d260509af701bf804b8b38e2be70546e68065a65bba91a952f95->leave($__internal_3e76eff0fd18d260509af701bf804b8b38e2be70546e68065a65bba91a952f95_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_0ecd5e2f8e62541087525d256fb8c9d6b758c7bd4340d3e20013962f7de3ed2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecd5e2f8e62541087525d256fb8c9d6b758c7bd4340d3e20013962f7de3ed2f->enter($__internal_0ecd5e2f8e62541087525d256fb8c9d6b758c7bd4340d3e20013962f7de3ed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_0ecd5e2f8e62541087525d256fb8c9d6b758c7bd4340d3e20013962f7de3ed2f->leave($__internal_0ecd5e2f8e62541087525d256fb8c9d6b758c7bd4340d3e20013962f7de3ed2f_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"{{ asset('bundles/gsbfrais/styles/styles.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"{{ asset('bundles/gsbfrais/images/logo.jpg')}}\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          {% block menu %}
          {% endblock %}
          {% block body %} 
                 {% block bloc1 %}
                 {% endblock %}
          {% endblock %}
    </body>
  </html>

          
          
";
    }
}
