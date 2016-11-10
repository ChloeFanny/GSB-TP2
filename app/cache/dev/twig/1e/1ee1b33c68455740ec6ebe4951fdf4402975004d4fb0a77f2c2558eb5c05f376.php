<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_6c25679f1c15ba6fffde705eae6b994634664f274dcf60305eef4f1d259a3642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e70f739ef6567b85dafaf18f0cdd1138288e28878c3681761760536d8cad9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e70f739ef6567b85dafaf18f0cdd1138288e28878c3681761760536d8cad9f2->enter($__internal_8e70f739ef6567b85dafaf18f0cdd1138288e28878c3681761760536d8cad9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e70f739ef6567b85dafaf18f0cdd1138288e28878c3681761760536d8cad9f2->leave($__internal_8e70f739ef6567b85dafaf18f0cdd1138288e28878c3681761760536d8cad9f2_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9acf4a7b56715a602e80a6c6c851fd49a67764a9291c28a304da68894acca3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acf4a7b56715a602e80a6c6c851fd49a67764a9291c28a304da68894acca3fb->enter($__internal_9acf4a7b56715a602e80a6c6c851fd49a67764a9291c28a304da68894acca3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 9
        echo "        </h3>

     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
            ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "daf"), "method") == true)) {
            // line 15
            echo "              <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_affectertablettes");
            echo "\" title=\"Affecter tablettes \">Affecter tablettes</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerfrais");
            echo "\" title=\"Valider frais\">Valider frais</a>
           </li>  
           <li class=\"smenu\">
              <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_deconnexion");
            echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "daf"), "method") == false)) {
            // line 26
            echo "              <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_saisirfrais");
            echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_listefrais");
            echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_deconnexion");
            echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
           ";
        }
        // line 35
        echo "         </ul>
";
        
        $__internal_9acf4a7b56715a602e80a6c6c851fd49a67764a9291c28a304da68894acca3fb->leave($__internal_9acf4a7b56715a602e80a6c6c851fd49a67764a9291c28a304da68894acca3fb_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  99 => 32,  93 => 29,  86 => 26,  84 => 25,  81 => 24,  75 => 21,  69 => 18,  62 => 15,  60 => 14,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block menu %}
<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            {%if(app.session.get('nom') is defined )%}
                           Visiteur: bonjour {{app.session.get('nom')}}<br>   
            {%endif%}
        </h3>

     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
            {%if app.session.get('daf') == true %}
              <a href=\"{{path('pg_gsb_frais_affectertablettes')}}\" title=\"Affecter tablettes \">Affecter tablettes</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_validerfrais')}}\" title=\"Valider frais\">Valider frais</a>
           </li>  
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_deconnexion')}}\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
            {%endif%}

            {%if app.session.get('daf') == false %}
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_deconnexion')}}\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
           {%endif%}
         </ul>
{%endblock%}


{#
 <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
#}";
    }
}
