<?php

/* index.html.twig */
class __TwigTemplate_ede112a82b539bf7c9234224c5dcc81ae6f01f7c15f086f364e36dfa9498b09f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2fbbff34b4181b2a17512f65392665eaa80164ba343ad0bbc732e35af720cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2fbbff34b4181b2a17512f65392665eaa80164ba343ad0bbc732e35af720cd8->enter($__internal_c2fbbff34b4181b2a17512f65392665eaa80164ba343ad0bbc732e35af720cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_f97e8dd0f30a456275d3691cf674fa9e19043db93971fb0c8a2690b7e149efeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97e8dd0f30a456275d3691cf674fa9e19043db93971fb0c8a2690b7e149efeb->enter($__internal_f97e8dd0f30a456275d3691cf674fa9e19043db93971fb0c8a2690b7e149efeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2fbbff34b4181b2a17512f65392665eaa80164ba343ad0bbc732e35af720cd8->leave($__internal_c2fbbff34b4181b2a17512f65392665eaa80164ba343ad0bbc732e35af720cd8_prof);

        
        $__internal_f97e8dd0f30a456275d3691cf674fa9e19043db93971fb0c8a2690b7e149efeb->leave($__internal_f97e8dd0f30a456275d3691cf674fa9e19043db93971fb0c8a2690b7e149efeb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e492ae4e0e3b471962e5451f2f495aefda62b3689b7dfa58911a0f42ee51deff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e492ae4e0e3b471962e5451f2f495aefda62b3689b7dfa58911a0f42ee51deff->enter($__internal_e492ae4e0e3b471962e5451f2f495aefda62b3689b7dfa58911a0f42ee51deff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_830482508345432fd2b76249130a3ba15d8ddaf47d561cdebaba3153b1461569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830482508345432fd2b76249130a3ba15d8ddaf47d561cdebaba3153b1461569->enter($__internal_830482508345432fd2b76249130a3ba15d8ddaf47d561cdebaba3153b1461569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_830482508345432fd2b76249130a3ba15d8ddaf47d561cdebaba3153b1461569->leave($__internal_830482508345432fd2b76249130a3ba15d8ddaf47d561cdebaba3153b1461569_prof);

        
        $__internal_e492ae4e0e3b471962e5451f2f495aefda62b3689b7dfa58911a0f42ee51deff->leave($__internal_e492ae4e0e3b471962e5451f2f495aefda62b3689b7dfa58911a0f42ee51deff_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
{% endblock %}
", "index.html.twig", "/var/www/proyecto/templates/index.html.twig");
    }
}
