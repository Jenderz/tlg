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
        $__internal_d487aeeb032f4bb799b5e4e0f321807d00c40e7c99b2c78d0e9f314f4cffedbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d487aeeb032f4bb799b5e4e0f321807d00c40e7c99b2c78d0e9f314f4cffedbf->enter($__internal_d487aeeb032f4bb799b5e4e0f321807d00c40e7c99b2c78d0e9f314f4cffedbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_a79dae38a655b1a4c412380aaec25c967486d212f6dcee166fc9d5aa2b64689d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79dae38a655b1a4c412380aaec25c967486d212f6dcee166fc9d5aa2b64689d->enter($__internal_a79dae38a655b1a4c412380aaec25c967486d212f6dcee166fc9d5aa2b64689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d487aeeb032f4bb799b5e4e0f321807d00c40e7c99b2c78d0e9f314f4cffedbf->leave($__internal_d487aeeb032f4bb799b5e4e0f321807d00c40e7c99b2c78d0e9f314f4cffedbf_prof);

        
        $__internal_a79dae38a655b1a4c412380aaec25c967486d212f6dcee166fc9d5aa2b64689d->leave($__internal_a79dae38a655b1a4c412380aaec25c967486d212f6dcee166fc9d5aa2b64689d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ab8fdff2a2687951a371e379915aedeecaf1fbe4a23004e200d937555347f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab8fdff2a2687951a371e379915aedeecaf1fbe4a23004e200d937555347f44->enter($__internal_3ab8fdff2a2687951a371e379915aedeecaf1fbe4a23004e200d937555347f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7f2ff949c628fe130002b7fe7fa079072724d1d5462255340cb42f224b229a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2ff949c628fe130002b7fe7fa079072724d1d5462255340cb42f224b229a22->enter($__internal_7f2ff949c628fe130002b7fe7fa079072724d1d5462255340cb42f224b229a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7f2ff949c628fe130002b7fe7fa079072724d1d5462255340cb42f224b229a22->leave($__internal_7f2ff949c628fe130002b7fe7fa079072724d1d5462255340cb42f224b229a22_prof);

        
        $__internal_3ab8fdff2a2687951a371e379915aedeecaf1fbe4a23004e200d937555347f44->leave($__internal_3ab8fdff2a2687951a371e379915aedeecaf1fbe4a23004e200d937555347f44_prof);

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
