<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_63d4cdd3a72f8bf9aeaf57f3e6b981192901c582367cdf29a7aec1f056b7d929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a7115473f5a775be50c4b4f2ca34890918740605de3bdc94bd5768046b79021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7115473f5a775be50c4b4f2ca34890918740605de3bdc94bd5768046b79021->enter($__internal_2a7115473f5a775be50c4b4f2ca34890918740605de3bdc94bd5768046b79021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_957d12982bad358ad44540e73b972ed6bcd26d0be39dcded8a922a1d917e4d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957d12982bad358ad44540e73b972ed6bcd26d0be39dcded8a922a1d917e4d93->enter($__internal_957d12982bad358ad44540e73b972ed6bcd26d0be39dcded8a922a1d917e4d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7115473f5a775be50c4b4f2ca34890918740605de3bdc94bd5768046b79021->leave($__internal_2a7115473f5a775be50c4b4f2ca34890918740605de3bdc94bd5768046b79021_prof);

        
        $__internal_957d12982bad358ad44540e73b972ed6bcd26d0be39dcded8a922a1d917e4d93->leave($__internal_957d12982bad358ad44540e73b972ed6bcd26d0be39dcded8a922a1d917e4d93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff7f07897f0084d3f7c274335ab18b46c2f40c5e248f81fb829ce774c97f04e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7f07897f0084d3f7c274335ab18b46c2f40c5e248f81fb829ce774c97f04e1->enter($__internal_ff7f07897f0084d3f7c274335ab18b46c2f40c5e248f81fb829ce774c97f04e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29ba728744916c5b2a5018d42f9514cb1ab679e61e843b65e86bfa58864f76af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ba728744916c5b2a5018d42f9514cb1ab679e61e843b65e86bfa58864f76af->enter($__internal_29ba728744916c5b2a5018d42f9514cb1ab679e61e843b65e86bfa58864f76af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_29ba728744916c5b2a5018d42f9514cb1ab679e61e843b65e86bfa58864f76af->leave($__internal_29ba728744916c5b2a5018d42f9514cb1ab679e61e843b65e86bfa58864f76af_prof);

        
        $__internal_ff7f07897f0084d3f7c274335ab18b46c2f40c5e248f81fb829ce774c97f04e1->leave($__internal_ff7f07897f0084d3f7c274335ab18b46c2f40c5e248f81fb829ce774c97f04e1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7507050bf6df51a67a4afe369b84ea124f7d92376d970f1d57646b7ec7c0abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7507050bf6df51a67a4afe369b84ea124f7d92376d970f1d57646b7ec7c0abd->enter($__internal_f7507050bf6df51a67a4afe369b84ea124f7d92376d970f1d57646b7ec7c0abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_533991c2ec44b0d46d15e0e1e38b3e481b03079868d5be911d013b146d17b42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533991c2ec44b0d46d15e0e1e38b3e481b03079868d5be911d013b146d17b42f->enter($__internal_533991c2ec44b0d46d15e0e1e38b3e481b03079868d5be911d013b146d17b42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_533991c2ec44b0d46d15e0e1e38b3e481b03079868d5be911d013b146d17b42f->leave($__internal_533991c2ec44b0d46d15e0e1e38b3e481b03079868d5be911d013b146d17b42f_prof);

        
        $__internal_f7507050bf6df51a67a4afe369b84ea124f7d92376d970f1d57646b7ec7c0abd->leave($__internal_f7507050bf6df51a67a4afe369b84ea124f7d92376d970f1d57646b7ec7c0abd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a65a4e6bf675e0b47216ba70f14c4d3c9dfa79582b195a5ad62bd700a67b0aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65a4e6bf675e0b47216ba70f14c4d3c9dfa79582b195a5ad62bd700a67b0aff->enter($__internal_a65a4e6bf675e0b47216ba70f14c4d3c9dfa79582b195a5ad62bd700a67b0aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfac537a34570baffaff44d6fbabcab51e7e3521035ffdc42601c26aaef920cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfac537a34570baffaff44d6fbabcab51e7e3521035ffdc42601c26aaef920cb->enter($__internal_bfac537a34570baffaff44d6fbabcab51e7e3521035ffdc42601c26aaef920cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bfac537a34570baffaff44d6fbabcab51e7e3521035ffdc42601c26aaef920cb->leave($__internal_bfac537a34570baffaff44d6fbabcab51e7e3521035ffdc42601c26aaef920cb_prof);

        
        $__internal_a65a4e6bf675e0b47216ba70f14c4d3c9dfa79582b195a5ad62bd700a67b0aff->leave($__internal_a65a4e6bf675e0b47216ba70f14c4d3c9dfa79582b195a5ad62bd700a67b0aff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
