<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_8bd1219cc7d8b6ac50db7288520c3b736b14733493d4010c36bc25a10237700f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4611b60e479b415810a1d70c3f7e947f043f4676fd1138aa94dc9199a074d76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4611b60e479b415810a1d70c3f7e947f043f4676fd1138aa94dc9199a074d76b->enter($__internal_4611b60e479b415810a1d70c3f7e947f043f4676fd1138aa94dc9199a074d76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4611b60e479b415810a1d70c3f7e947f043f4676fd1138aa94dc9199a074d76b->leave($__internal_4611b60e479b415810a1d70c3f7e947f043f4676fd1138aa94dc9199a074d76b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac95fd2fb5d0d5f9a2507f9e0ed08d20bde73949226968aa500d721f2b2e773a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac95fd2fb5d0d5f9a2507f9e0ed08d20bde73949226968aa500d721f2b2e773a->enter($__internal_ac95fd2fb5d0d5f9a2507f9e0ed08d20bde73949226968aa500d721f2b2e773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_ac95fd2fb5d0d5f9a2507f9e0ed08d20bde73949226968aa500d721f2b2e773a->leave($__internal_ac95fd2fb5d0d5f9a2507f9e0ed08d20bde73949226968aa500d721f2b2e773a_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_2254f62700b7503aa09e54f41e0ac44e5d9db2621e3b4746455daa740722fdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2254f62700b7503aa09e54f41e0ac44e5d9db2621e3b4746455daa740722fdda->enter($__internal_2254f62700b7503aa09e54f41e0ac44e5d9db2621e3b4746455daa740722fdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo " ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) ? $context["leserreursforfait"] : $this->getContext($context, "leserreursforfait")))));
        // line 5
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "nummois" =>         // line 6
(isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")))));
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) ? $context["leserreurshorsforfait"] : $this->getContext($context, "leserreurshorsforfait")))));
        // line 9
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 9)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")))));
        
        $__internal_2254f62700b7503aa09e54f41e0ac44e5d9db2621e3b4746455daa740722fdda->leave($__internal_2254f62700b7503aa09e54f41e0ac44e5d9db2621e3b4746455daa740722fdda_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  62 => 8,  59 => 7,  57 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::accueil.html.twig\" %}
{% block body %}
{% block bloc1 %}
 {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreursforfait} %}
{% include 'PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,
'nummois':nummois,'numannee':numannee} %}

{% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreurshorsforfait} %}
{% include 'PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}
{% endblock %}
{% endblock %}

";
    }
}
