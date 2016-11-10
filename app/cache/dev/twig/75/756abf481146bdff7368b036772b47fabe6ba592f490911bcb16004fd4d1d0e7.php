<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_a0c32b846ddb57a7eadfd61f62421511e6936afcc738ac6c94c2daa3b3741ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b891c2d713d02c63a892ec193b9a496d0993ee06fb54db9f15fbfc5ff92d1ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b891c2d713d02c63a892ec193b9a496d0993ee06fb54db9f15fbfc5ff92d1ac1->enter($__internal_b891c2d713d02c63a892ec193b9a496d0993ee06fb54db9f15fbfc5ff92d1ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b891c2d713d02c63a892ec193b9a496d0993ee06fb54db9f15fbfc5ff92d1ac1->leave($__internal_b891c2d713d02c63a892ec193b9a496d0993ee06fb54db9f15fbfc5ff92d1ac1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b2ebec5f53162f90820fb7044c2fcb021347f9592629c94dd9bc3928c4ccb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2ebec5f53162f90820fb7044c2fcb021347f9592629c94dd9bc3928c4ccb65->enter($__internal_7b2ebec5f53162f90820fb7044c2fcb021347f9592629c94dd9bc3928c4ccb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_7b2ebec5f53162f90820fb7044c2fcb021347f9592629c94dd9bc3928c4ccb65->leave($__internal_7b2ebec5f53162f90820fb7044c2fcb021347f9592629c94dd9bc3928c4ccb65_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_760778d1d3c3236fa6b9bba756a93e3cb5159ab7abe5860a548fe236e79a5a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760778d1d3c3236fa6b9bba756a93e3cb5159ab7abe5860a548fe236e79a5a16->enter($__internal_760778d1d3c3236fa6b9bba756a93e3cb5159ab7abe5860a548fe236e79a5a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_760778d1d3c3236fa6b9bba756a93e3cb5159ab7abe5860a548fe236e79a5a16->leave($__internal_760778d1d3c3236fa6b9bba756a93e3cb5159ab7abe5860a548fe236e79a5a16_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block body %}
 {% block bloc1 %} 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      {%if(message is defined )%}
            <div class =\"erreur\">
            <ul>{{message}}</ul></div>
      {%endif%}
<form method=\"POST\" action=\"{{path('pg_gsb_frais_validerconnexion')}}\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    {% endblock %}    
    {% endblock%}
     ";
    }
}
