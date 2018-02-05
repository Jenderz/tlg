<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c96c6196791ad6f92ed26a1d944572bdbf53b5d241ab410536616abe594cc3d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60131040efe1723c670c197a9551a4f9d296df06610bed361afac844d7ec4edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60131040efe1723c670c197a9551a4f9d296df06610bed361afac844d7ec4edb->enter($__internal_60131040efe1723c670c197a9551a4f9d296df06610bed361afac844d7ec4edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_82c38169176c907e2fdff01ec57a9993979549f5336629fadb9db9b11cbd05c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c38169176c907e2fdff01ec57a9993979549f5336629fadb9db9b11cbd05c0->enter($__internal_82c38169176c907e2fdff01ec57a9993979549f5336629fadb9db9b11cbd05c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60131040efe1723c670c197a9551a4f9d296df06610bed361afac844d7ec4edb->leave($__internal_60131040efe1723c670c197a9551a4f9d296df06610bed361afac844d7ec4edb_prof);

        
        $__internal_82c38169176c907e2fdff01ec57a9993979549f5336629fadb9db9b11cbd05c0->leave($__internal_82c38169176c907e2fdff01ec57a9993979549f5336629fadb9db9b11cbd05c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a3e5a1d01e0bc6807e2cc99e6e4e06fb39fa6e526da3fb290506e28a2c450c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3e5a1d01e0bc6807e2cc99e6e4e06fb39fa6e526da3fb290506e28a2c450c7->enter($__internal_3a3e5a1d01e0bc6807e2cc99e6e4e06fb39fa6e526da3fb290506e28a2c450c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4dceefa4298a2d20d6a6099dad323250187c7e0819f07ce1f50bea1b75032f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dceefa4298a2d20d6a6099dad323250187c7e0819f07ce1f50bea1b75032f0b->enter($__internal_4dceefa4298a2d20d6a6099dad323250187c7e0819f07ce1f50bea1b75032f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4dceefa4298a2d20d6a6099dad323250187c7e0819f07ce1f50bea1b75032f0b->leave($__internal_4dceefa4298a2d20d6a6099dad323250187c7e0819f07ce1f50bea1b75032f0b_prof);

        
        $__internal_3a3e5a1d01e0bc6807e2cc99e6e4e06fb39fa6e526da3fb290506e28a2c450c7->leave($__internal_3a3e5a1d01e0bc6807e2cc99e6e4e06fb39fa6e526da3fb290506e28a2c450c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e52571c0778f7f0dc02fe741ca1b4ed82a31336d2c2f253c59df4d8c6316f100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52571c0778f7f0dc02fe741ca1b4ed82a31336d2c2f253c59df4d8c6316f100->enter($__internal_e52571c0778f7f0dc02fe741ca1b4ed82a31336d2c2f253c59df4d8c6316f100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_816053506ae390987dbea77250c79864d0a2142495e198e0d84b7762f221703a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816053506ae390987dbea77250c79864d0a2142495e198e0d84b7762f221703a->enter($__internal_816053506ae390987dbea77250c79864d0a2142495e198e0d84b7762f221703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_816053506ae390987dbea77250c79864d0a2142495e198e0d84b7762f221703a->leave($__internal_816053506ae390987dbea77250c79864d0a2142495e198e0d84b7762f221703a_prof);

        
        $__internal_e52571c0778f7f0dc02fe741ca1b4ed82a31336d2c2f253c59df4d8c6316f100->leave($__internal_e52571c0778f7f0dc02fe741ca1b4ed82a31336d2c2f253c59df4d8c6316f100_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fabecfba09d7a66b614013e22f6899014e50eacd3190e947bef911a79bd421af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabecfba09d7a66b614013e22f6899014e50eacd3190e947bef911a79bd421af->enter($__internal_fabecfba09d7a66b614013e22f6899014e50eacd3190e947bef911a79bd421af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53ff1735282f953179f1a358c0fbb9841bd80b0e53a7d50df89f932ef6243e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ff1735282f953179f1a358c0fbb9841bd80b0e53a7d50df89f932ef6243e35->enter($__internal_53ff1735282f953179f1a358c0fbb9841bd80b0e53a7d50df89f932ef6243e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_53ff1735282f953179f1a358c0fbb9841bd80b0e53a7d50df89f932ef6243e35->leave($__internal_53ff1735282f953179f1a358c0fbb9841bd80b0e53a7d50df89f932ef6243e35_prof);

        
        $__internal_fabecfba09d7a66b614013e22f6899014e50eacd3190e947bef911a79bd421af->leave($__internal_fabecfba09d7a66b614013e22f6899014e50eacd3190e947bef911a79bd421af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
