<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_8f5002ca4072c9491e061d8f455fafd2aba5be3cac86b72f728d71162415e6ec extends Twig_Template
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
        $__internal_732bc52f0a45fcf60223a33c0adf80f0a79835a5ad48f45bcd5415d5a7a59e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732bc52f0a45fcf60223a33c0adf80f0a79835a5ad48f45bcd5415d5a7a59e1c->enter($__internal_732bc52f0a45fcf60223a33c0adf80f0a79835a5ad48f45bcd5415d5a7a59e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_732bc52f0a45fcf60223a33c0adf80f0a79835a5ad48f45bcd5415d5a7a59e1c->leave($__internal_732bc52f0a45fcf60223a33c0adf80f0a79835a5ad48f45bcd5415d5a7a59e1c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d60b26b7d19c204412cd699135940f97ed332608a160ea22f3f3c24177b82b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60b26b7d19c204412cd699135940f97ed332608a160ea22f3f3c24177b82b74->enter($__internal_d60b26b7d19c204412cd699135940f97ed332608a160ea22f3f3c24177b82b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_d60b26b7d19c204412cd699135940f97ed332608a160ea22f3f3c24177b82b74->leave($__internal_d60b26b7d19c204412cd699135940f97ed332608a160ea22f3f3c24177b82b74_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_3bfb77b45b51e685aec7a888ab639cc6cc1f110e4877ba9b77c17d7c38653138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfb77b45b51e685aec7a888ab639cc6cc1f110e4877ba9b77c17d7c38653138->enter($__internal_3bfb77b45b51e685aec7a888ab639cc6cc1f110e4877ba9b77c17d7c38653138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_3bfb77b45b51e685aec7a888ab639cc6cc1f110e4877ba9b77c17d7c38653138->leave($__internal_3bfb77b45b51e685aec7a888ab639cc6cc1f110e4877ba9b77c17d7c38653138_prof);

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
