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
        $__internal_a6e936a2010033218e06acc6b941b2a9b61d096734135339df16f93acd62b07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e936a2010033218e06acc6b941b2a9b61d096734135339df16f93acd62b07e->enter($__internal_a6e936a2010033218e06acc6b941b2a9b61d096734135339df16f93acd62b07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_feea49d6c68dd630522a338cdb44cdb6e823a1947306fd68a476554fc5381fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feea49d6c68dd630522a338cdb44cdb6e823a1947306fd68a476554fc5381fef->enter($__internal_feea49d6c68dd630522a338cdb44cdb6e823a1947306fd68a476554fc5381fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e936a2010033218e06acc6b941b2a9b61d096734135339df16f93acd62b07e->leave($__internal_a6e936a2010033218e06acc6b941b2a9b61d096734135339df16f93acd62b07e_prof);

        
        $__internal_feea49d6c68dd630522a338cdb44cdb6e823a1947306fd68a476554fc5381fef->leave($__internal_feea49d6c68dd630522a338cdb44cdb6e823a1947306fd68a476554fc5381fef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_503e498d6d8dfef26bc9be2a47d5fae2c99d92e8532b07248ec85163f48d5633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503e498d6d8dfef26bc9be2a47d5fae2c99d92e8532b07248ec85163f48d5633->enter($__internal_503e498d6d8dfef26bc9be2a47d5fae2c99d92e8532b07248ec85163f48d5633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_19ac4f07fd7c8aeeec4fa78bdf1511d60431699d73c7a98f11eb41843dfcddcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ac4f07fd7c8aeeec4fa78bdf1511d60431699d73c7a98f11eb41843dfcddcb->enter($__internal_19ac4f07fd7c8aeeec4fa78bdf1511d60431699d73c7a98f11eb41843dfcddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19ac4f07fd7c8aeeec4fa78bdf1511d60431699d73c7a98f11eb41843dfcddcb->leave($__internal_19ac4f07fd7c8aeeec4fa78bdf1511d60431699d73c7a98f11eb41843dfcddcb_prof);

        
        $__internal_503e498d6d8dfef26bc9be2a47d5fae2c99d92e8532b07248ec85163f48d5633->leave($__internal_503e498d6d8dfef26bc9be2a47d5fae2c99d92e8532b07248ec85163f48d5633_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_237868a654f2b7c6e3aa15f17c10bbc2339c708c40c314b7f7cbc2f2be838e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237868a654f2b7c6e3aa15f17c10bbc2339c708c40c314b7f7cbc2f2be838e5b->enter($__internal_237868a654f2b7c6e3aa15f17c10bbc2339c708c40c314b7f7cbc2f2be838e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_167d39bd9c0ab20ad8256df6844ba9db558e4e1b3c52deaffdbfa403f5ef7c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167d39bd9c0ab20ad8256df6844ba9db558e4e1b3c52deaffdbfa403f5ef7c03->enter($__internal_167d39bd9c0ab20ad8256df6844ba9db558e4e1b3c52deaffdbfa403f5ef7c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_167d39bd9c0ab20ad8256df6844ba9db558e4e1b3c52deaffdbfa403f5ef7c03->leave($__internal_167d39bd9c0ab20ad8256df6844ba9db558e4e1b3c52deaffdbfa403f5ef7c03_prof);

        
        $__internal_237868a654f2b7c6e3aa15f17c10bbc2339c708c40c314b7f7cbc2f2be838e5b->leave($__internal_237868a654f2b7c6e3aa15f17c10bbc2339c708c40c314b7f7cbc2f2be838e5b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fd1bf16c3776883828e8e81f4c8679da2a17cf0564f15c410f60c4fe0ee005e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd1bf16c3776883828e8e81f4c8679da2a17cf0564f15c410f60c4fe0ee005e->enter($__internal_2fd1bf16c3776883828e8e81f4c8679da2a17cf0564f15c410f60c4fe0ee005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e7327e06f02d8eff36ea632da1ca040a4619f8241a2f978c6976ba794d0af49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7327e06f02d8eff36ea632da1ca040a4619f8241a2f978c6976ba794d0af49->enter($__internal_3e7327e06f02d8eff36ea632da1ca040a4619f8241a2f978c6976ba794d0af49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3e7327e06f02d8eff36ea632da1ca040a4619f8241a2f978c6976ba794d0af49->leave($__internal_3e7327e06f02d8eff36ea632da1ca040a4619f8241a2f978c6976ba794d0af49_prof);

        
        $__internal_2fd1bf16c3776883828e8e81f4c8679da2a17cf0564f15c410f60c4fe0ee005e->leave($__internal_2fd1bf16c3776883828e8e81f4c8679da2a17cf0564f15c410f60c4fe0ee005e_prof);

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
