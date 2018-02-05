<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_edd038d07ffb2d8f2cb1db1d43d4c43a5329d198d0fdb64a7473ded31a7b55ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_24fc6952f57bb18db20739f347dd5f42fee4c6730c5d9daf400829b066df9042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fc6952f57bb18db20739f347dd5f42fee4c6730c5d9daf400829b066df9042->enter($__internal_24fc6952f57bb18db20739f347dd5f42fee4c6730c5d9daf400829b066df9042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2726a434012d81447c48af1dd4a47d6986790ef2bb29de652f7184c76fd22a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2726a434012d81447c48af1dd4a47d6986790ef2bb29de652f7184c76fd22a0c->enter($__internal_2726a434012d81447c48af1dd4a47d6986790ef2bb29de652f7184c76fd22a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fc6952f57bb18db20739f347dd5f42fee4c6730c5d9daf400829b066df9042->leave($__internal_24fc6952f57bb18db20739f347dd5f42fee4c6730c5d9daf400829b066df9042_prof);

        
        $__internal_2726a434012d81447c48af1dd4a47d6986790ef2bb29de652f7184c76fd22a0c->leave($__internal_2726a434012d81447c48af1dd4a47d6986790ef2bb29de652f7184c76fd22a0c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dcb94adc2a32d310673557d9723809d48d11ac9e58df864d89ccdca72491c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcb94adc2a32d310673557d9723809d48d11ac9e58df864d89ccdca72491c52->enter($__internal_7dcb94adc2a32d310673557d9723809d48d11ac9e58df864d89ccdca72491c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_58f36fccbe23b720554742cf4ead4380d07fffcb0ac5dc592babd4e0dca78f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f36fccbe23b720554742cf4ead4380d07fffcb0ac5dc592babd4e0dca78f65->enter($__internal_58f36fccbe23b720554742cf4ead4380d07fffcb0ac5dc592babd4e0dca78f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_58f36fccbe23b720554742cf4ead4380d07fffcb0ac5dc592babd4e0dca78f65->leave($__internal_58f36fccbe23b720554742cf4ead4380d07fffcb0ac5dc592babd4e0dca78f65_prof);

        
        $__internal_7dcb94adc2a32d310673557d9723809d48d11ac9e58df864d89ccdca72491c52->leave($__internal_7dcb94adc2a32d310673557d9723809d48d11ac9e58df864d89ccdca72491c52_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56462104844a238f050e9ab012d4c1b7ae0752d37412d009a6238af58dbccd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56462104844a238f050e9ab012d4c1b7ae0752d37412d009a6238af58dbccd8d->enter($__internal_56462104844a238f050e9ab012d4c1b7ae0752d37412d009a6238af58dbccd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51b74ff74b0cf07a8d85c9b443736ee60d05e0440cd0cc814cc59f30261ed00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b74ff74b0cf07a8d85c9b443736ee60d05e0440cd0cc814cc59f30261ed00d->enter($__internal_51b74ff74b0cf07a8d85c9b443736ee60d05e0440cd0cc814cc59f30261ed00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_51b74ff74b0cf07a8d85c9b443736ee60d05e0440cd0cc814cc59f30261ed00d->leave($__internal_51b74ff74b0cf07a8d85c9b443736ee60d05e0440cd0cc814cc59f30261ed00d_prof);

        
        $__internal_56462104844a238f050e9ab012d4c1b7ae0752d37412d009a6238af58dbccd8d->leave($__internal_56462104844a238f050e9ab012d4c1b7ae0752d37412d009a6238af58dbccd8d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d70e6680239c02c3994d6b62d6b199bb32a556dbf6739c2e9bd5e8cf792fc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d70e6680239c02c3994d6b62d6b199bb32a556dbf6739c2e9bd5e8cf792fc94->enter($__internal_8d70e6680239c02c3994d6b62d6b199bb32a556dbf6739c2e9bd5e8cf792fc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60db94abf2fa834516b1d52a052e7f93f7c406b93ec2ca5e8daf3b2a71076580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60db94abf2fa834516b1d52a052e7f93f7c406b93ec2ca5e8daf3b2a71076580->enter($__internal_60db94abf2fa834516b1d52a052e7f93f7c406b93ec2ca5e8daf3b2a71076580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_60db94abf2fa834516b1d52a052e7f93f7c406b93ec2ca5e8daf3b2a71076580->leave($__internal_60db94abf2fa834516b1d52a052e7f93f7c406b93ec2ca5e8daf3b2a71076580_prof);

        
        $__internal_8d70e6680239c02c3994d6b62d6b199bb32a556dbf6739c2e9bd5e8cf792fc94->leave($__internal_8d70e6680239c02c3994d6b62d6b199bb32a556dbf6739c2e9bd5e8cf792fc94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
