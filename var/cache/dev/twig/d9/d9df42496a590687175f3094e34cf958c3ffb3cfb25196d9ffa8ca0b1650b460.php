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
        $__internal_d1fc0c2af3c9f6d5c3ef9a958725f442a4f2475958e00b957633a408f448d09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fc0c2af3c9f6d5c3ef9a958725f442a4f2475958e00b957633a408f448d09b->enter($__internal_d1fc0c2af3c9f6d5c3ef9a958725f442a4f2475958e00b957633a408f448d09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_42cc24e43461721d9864aece04d77292964c37ae7e985d4dea441521a0755424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cc24e43461721d9864aece04d77292964c37ae7e985d4dea441521a0755424->enter($__internal_42cc24e43461721d9864aece04d77292964c37ae7e985d4dea441521a0755424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1fc0c2af3c9f6d5c3ef9a958725f442a4f2475958e00b957633a408f448d09b->leave($__internal_d1fc0c2af3c9f6d5c3ef9a958725f442a4f2475958e00b957633a408f448d09b_prof);

        
        $__internal_42cc24e43461721d9864aece04d77292964c37ae7e985d4dea441521a0755424->leave($__internal_42cc24e43461721d9864aece04d77292964c37ae7e985d4dea441521a0755424_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a48f155e9d9cafc8443274ca11e3a7c8f64ecd81f879b4c50ae993d3c8f1cb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48f155e9d9cafc8443274ca11e3a7c8f64ecd81f879b4c50ae993d3c8f1cb25->enter($__internal_a48f155e9d9cafc8443274ca11e3a7c8f64ecd81f879b4c50ae993d3c8f1cb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb6cf7eb712baf5ef739db6a0dedced4df7c9e442f80dc40b008449900d3d9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6cf7eb712baf5ef739db6a0dedced4df7c9e442f80dc40b008449900d3d9ce->enter($__internal_eb6cf7eb712baf5ef739db6a0dedced4df7c9e442f80dc40b008449900d3d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eb6cf7eb712baf5ef739db6a0dedced4df7c9e442f80dc40b008449900d3d9ce->leave($__internal_eb6cf7eb712baf5ef739db6a0dedced4df7c9e442f80dc40b008449900d3d9ce_prof);

        
        $__internal_a48f155e9d9cafc8443274ca11e3a7c8f64ecd81f879b4c50ae993d3c8f1cb25->leave($__internal_a48f155e9d9cafc8443274ca11e3a7c8f64ecd81f879b4c50ae993d3c8f1cb25_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_97f1dc0f75862bbd2500bdd27e587bf2cbde197b99280ba7d0ad18d2b63138d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f1dc0f75862bbd2500bdd27e587bf2cbde197b99280ba7d0ad18d2b63138d9->enter($__internal_97f1dc0f75862bbd2500bdd27e587bf2cbde197b99280ba7d0ad18d2b63138d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f306fa08102ea6de5f4c96bf6da67bc750d740ddf9e4228501abd8060ff5cbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f306fa08102ea6de5f4c96bf6da67bc750d740ddf9e4228501abd8060ff5cbd0->enter($__internal_f306fa08102ea6de5f4c96bf6da67bc750d740ddf9e4228501abd8060ff5cbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f306fa08102ea6de5f4c96bf6da67bc750d740ddf9e4228501abd8060ff5cbd0->leave($__internal_f306fa08102ea6de5f4c96bf6da67bc750d740ddf9e4228501abd8060ff5cbd0_prof);

        
        $__internal_97f1dc0f75862bbd2500bdd27e587bf2cbde197b99280ba7d0ad18d2b63138d9->leave($__internal_97f1dc0f75862bbd2500bdd27e587bf2cbde197b99280ba7d0ad18d2b63138d9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a9bb0e7d1cbebfcff9f5122a604daa870d3d5d582a5819028c44912c2b1816f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9bb0e7d1cbebfcff9f5122a604daa870d3d5d582a5819028c44912c2b1816f->enter($__internal_7a9bb0e7d1cbebfcff9f5122a604daa870d3d5d582a5819028c44912c2b1816f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cd042a8402a5d49e5f80532adb0e7803995ac1eea2e6252573dcf23cd811e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd042a8402a5d49e5f80532adb0e7803995ac1eea2e6252573dcf23cd811e21->enter($__internal_8cd042a8402a5d49e5f80532adb0e7803995ac1eea2e6252573dcf23cd811e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8cd042a8402a5d49e5f80532adb0e7803995ac1eea2e6252573dcf23cd811e21->leave($__internal_8cd042a8402a5d49e5f80532adb0e7803995ac1eea2e6252573dcf23cd811e21_prof);

        
        $__internal_7a9bb0e7d1cbebfcff9f5122a604daa870d3d5d582a5819028c44912c2b1816f->leave($__internal_7a9bb0e7d1cbebfcff9f5122a604daa870d3d5d582a5819028c44912c2b1816f_prof);

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
