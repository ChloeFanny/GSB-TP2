<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_4609c9e1de2cbefb18a90a91c59f2bc5e7d330667f73ac6d6316f1ed0fba26c8 extends Twig_Template
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
        $__internal_bd736028632053e517ab9bd1803a3e6ab93fdffdc842fdc49dac1e5daade4e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd736028632053e517ab9bd1803a3e6ab93fdffdc842fdc49dac1e5daade4e3f->enter($__internal_bd736028632053e517ab9bd1803a3e6ab93fdffdc842fdc49dac1e5daade4e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd736028632053e517ab9bd1803a3e6ab93fdffdc842fdc49dac1e5daade4e3f->leave($__internal_bd736028632053e517ab9bd1803a3e6ab93fdffdc842fdc49dac1e5daade4e3f_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_845e41a2b084f09c760f43d33d1c8804252748ae564676c5dfcc6d2d15b89768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845e41a2b084f09c760f43d33d1c8804252748ae564676c5dfcc6d2d15b89768->enter($__internal_845e41a2b084f09c760f43d33d1c8804252748ae564676c5dfcc6d2d15b89768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
              <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
";
        
        $__internal_845e41a2b084f09c760f43d33d1c8804252748ae564676c5dfcc6d2d15b89768->leave($__internal_845e41a2b084f09c760f43d33d1c8804252748ae564676c5dfcc6d2d15b89768_prof);

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
        return array (  71 => 19,  65 => 16,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_deconnexion')}}\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
{% endblock%}


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
