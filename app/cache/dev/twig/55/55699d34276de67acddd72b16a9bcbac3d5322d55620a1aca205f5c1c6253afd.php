<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_9a7e670e78850ce43f963035d747ec80a6840d97435f4a4ed82e78170fde2f09 extends Twig_Template
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
        $__internal_ad0127cc0603ac302834874be5ff5acd5f24a11082af03e4ac37f0131c23b0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0127cc0603ac302834874be5ff5acd5f24a11082af03e4ac37f0131c23b0c9->enter($__internal_ad0127cc0603ac302834874be5ff5acd5f24a11082af03e4ac37f0131c23b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

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
        
        $__internal_ad0127cc0603ac302834874be5ff5acd5f24a11082af03e4ac37f0131c23b0c9->leave($__internal_ad0127cc0603ac302834874be5ff5acd5f24a11082af03e4ac37f0131c23b0c9_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b4db3381183ca84de25f5b084460a106ecbd37685a43f16b3c76bdb3fea4cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4db3381183ca84de25f5b084460a106ecbd37685a43f16b3c76bdb3fea4cad->enter($__internal_5b4db3381183ca84de25f5b084460a106ecbd37685a43f16b3c76bdb3fea4cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_5b4db3381183ca84de25f5b084460a106ecbd37685a43f16b3c76bdb3fea4cad->leave($__internal_5b4db3381183ca84de25f5b084460a106ecbd37685a43f16b3c76bdb3fea4cad_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca34c0723f7cdf6a79a20ace2ce219d9636ce479107418216db936f164106e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca34c0723f7cdf6a79a20ace2ce219d9636ce479107418216db936f164106e09->enter($__internal_ca34c0723f7cdf6a79a20ace2ce219d9636ce479107418216db936f164106e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_ca34c0723f7cdf6a79a20ace2ce219d9636ce479107418216db936f164106e09->leave($__internal_ca34c0723f7cdf6a79a20ace2ce219d9636ce479107418216db936f164106e09_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_01ed8decbb483cad55f6f53bde175944cfa4b276d1e991ec624781d4a1dc7381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ed8decbb483cad55f6f53bde175944cfa4b276d1e991ec624781d4a1dc7381->enter($__internal_01ed8decbb483cad55f6f53bde175944cfa4b276d1e991ec624781d4a1dc7381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_01ed8decbb483cad55f6f53bde175944cfa4b276d1e991ec624781d4a1dc7381->leave($__internal_01ed8decbb483cad55f6f53bde175944cfa4b276d1e991ec624781d4a1dc7381_prof);

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
