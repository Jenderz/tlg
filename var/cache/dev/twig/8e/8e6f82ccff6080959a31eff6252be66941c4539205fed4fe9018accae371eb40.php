<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_863b38d80f66c5e61c5a988d6bbba618ce01bec49dd101f6effb4983ee5192e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2a03d6d72c6dd002c65f1d3093fe6d3c42d7a0df019db45e891952ab28724f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a03d6d72c6dd002c65f1d3093fe6d3c42d7a0df019db45e891952ab28724f06->enter($__internal_2a03d6d72c6dd002c65f1d3093fe6d3c42d7a0df019db45e891952ab28724f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a516e22254ba8de0515c44a939e1d2e64a41c4a17fc6f1b758a6cf607f5b90f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a516e22254ba8de0515c44a939e1d2e64a41c4a17fc6f1b758a6cf607f5b90f6->enter($__internal_a516e22254ba8de0515c44a939e1d2e64a41c4a17fc6f1b758a6cf607f5b90f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a03d6d72c6dd002c65f1d3093fe6d3c42d7a0df019db45e891952ab28724f06->leave($__internal_2a03d6d72c6dd002c65f1d3093fe6d3c42d7a0df019db45e891952ab28724f06_prof);

        
        $__internal_a516e22254ba8de0515c44a939e1d2e64a41c4a17fc6f1b758a6cf607f5b90f6->leave($__internal_a516e22254ba8de0515c44a939e1d2e64a41c4a17fc6f1b758a6cf607f5b90f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb19c34443c179d0abbc8a2c8d346fa95cc0393287165b83404c66c92da51de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb19c34443c179d0abbc8a2c8d346fa95cc0393287165b83404c66c92da51de->enter($__internal_2cb19c34443c179d0abbc8a2c8d346fa95cc0393287165b83404c66c92da51de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0351b84d2a5e99898e9cef0fd73da37ecc3a287917189afc8ef0aff10eaa4d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0351b84d2a5e99898e9cef0fd73da37ecc3a287917189afc8ef0aff10eaa4d48->enter($__internal_0351b84d2a5e99898e9cef0fd73da37ecc3a287917189afc8ef0aff10eaa4d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0351b84d2a5e99898e9cef0fd73da37ecc3a287917189afc8ef0aff10eaa4d48->leave($__internal_0351b84d2a5e99898e9cef0fd73da37ecc3a287917189afc8ef0aff10eaa4d48_prof);

        
        $__internal_2cb19c34443c179d0abbc8a2c8d346fa95cc0393287165b83404c66c92da51de->leave($__internal_2cb19c34443c179d0abbc8a2c8d346fa95cc0393287165b83404c66c92da51de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24a631a6589545092a976a85fe8dbc25d7b7c77c68873239376398defd674cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a631a6589545092a976a85fe8dbc25d7b7c77c68873239376398defd674cf8->enter($__internal_24a631a6589545092a976a85fe8dbc25d7b7c77c68873239376398defd674cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_363b89a99f60ab047563977e64b34e64cbaaabab58d1d29f7748579e0f52bebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363b89a99f60ab047563977e64b34e64cbaaabab58d1d29f7748579e0f52bebd->enter($__internal_363b89a99f60ab047563977e64b34e64cbaaabab58d1d29f7748579e0f52bebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_363b89a99f60ab047563977e64b34e64cbaaabab58d1d29f7748579e0f52bebd->leave($__internal_363b89a99f60ab047563977e64b34e64cbaaabab58d1d29f7748579e0f52bebd_prof);

        
        $__internal_24a631a6589545092a976a85fe8dbc25d7b7c77c68873239376398defd674cf8->leave($__internal_24a631a6589545092a976a85fe8dbc25d7b7c77c68873239376398defd674cf8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
