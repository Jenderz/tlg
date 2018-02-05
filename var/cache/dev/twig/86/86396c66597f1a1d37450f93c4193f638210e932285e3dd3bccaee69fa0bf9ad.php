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
        $__internal_7c3bdc77a07435c838e2d34b1efa0d6a7fda0861abb5aba71bcd9d26778d898d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3bdc77a07435c838e2d34b1efa0d6a7fda0861abb5aba71bcd9d26778d898d->enter($__internal_7c3bdc77a07435c838e2d34b1efa0d6a7fda0861abb5aba71bcd9d26778d898d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a1d601e1a14188a3e77184411a5a37318c03a9f18fc53ee7522b6952c127fe9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d601e1a14188a3e77184411a5a37318c03a9f18fc53ee7522b6952c127fe9d->enter($__internal_a1d601e1a14188a3e77184411a5a37318c03a9f18fc53ee7522b6952c127fe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c3bdc77a07435c838e2d34b1efa0d6a7fda0861abb5aba71bcd9d26778d898d->leave($__internal_7c3bdc77a07435c838e2d34b1efa0d6a7fda0861abb5aba71bcd9d26778d898d_prof);

        
        $__internal_a1d601e1a14188a3e77184411a5a37318c03a9f18fc53ee7522b6952c127fe9d->leave($__internal_a1d601e1a14188a3e77184411a5a37318c03a9f18fc53ee7522b6952c127fe9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a77d18a5149890f038974f28ba1a1e4b5c8615ff8716186285e4cc448939f26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77d18a5149890f038974f28ba1a1e4b5c8615ff8716186285e4cc448939f26c->enter($__internal_a77d18a5149890f038974f28ba1a1e4b5c8615ff8716186285e4cc448939f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a64170e90b83d44d1b229854474f4ddd43e3be9f5e074bd087e4991c4d010c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a64170e90b83d44d1b229854474f4ddd43e3be9f5e074bd087e4991c4d010c1->enter($__internal_3a64170e90b83d44d1b229854474f4ddd43e3be9f5e074bd087e4991c4d010c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3a64170e90b83d44d1b229854474f4ddd43e3be9f5e074bd087e4991c4d010c1->leave($__internal_3a64170e90b83d44d1b229854474f4ddd43e3be9f5e074bd087e4991c4d010c1_prof);

        
        $__internal_a77d18a5149890f038974f28ba1a1e4b5c8615ff8716186285e4cc448939f26c->leave($__internal_a77d18a5149890f038974f28ba1a1e4b5c8615ff8716186285e4cc448939f26c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_628f63eedf94516f4db61e299d0c9933697e92e1a2ec3ae0b3acf9bebe955c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628f63eedf94516f4db61e299d0c9933697e92e1a2ec3ae0b3acf9bebe955c40->enter($__internal_628f63eedf94516f4db61e299d0c9933697e92e1a2ec3ae0b3acf9bebe955c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3b67d92b3f9b4992e6b546eaf5c0a0550c298a60d48f984cb1af899feaf6646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b67d92b3f9b4992e6b546eaf5c0a0550c298a60d48f984cb1af899feaf6646->enter($__internal_d3b67d92b3f9b4992e6b546eaf5c0a0550c298a60d48f984cb1af899feaf6646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d3b67d92b3f9b4992e6b546eaf5c0a0550c298a60d48f984cb1af899feaf6646->leave($__internal_d3b67d92b3f9b4992e6b546eaf5c0a0550c298a60d48f984cb1af899feaf6646_prof);

        
        $__internal_628f63eedf94516f4db61e299d0c9933697e92e1a2ec3ae0b3acf9bebe955c40->leave($__internal_628f63eedf94516f4db61e299d0c9933697e92e1a2ec3ae0b3acf9bebe955c40_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3979c27e8cb77b41d523352575e5646935ebbcac2a997fa014a172eeb9a4e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3979c27e8cb77b41d523352575e5646935ebbcac2a997fa014a172eeb9a4e76->enter($__internal_b3979c27e8cb77b41d523352575e5646935ebbcac2a997fa014a172eeb9a4e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3135f5d9e97d17423b62762ab0f870f9b9ade15eee2278df0c65f761ed588e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3135f5d9e97d17423b62762ab0f870f9b9ade15eee2278df0c65f761ed588e00->enter($__internal_3135f5d9e97d17423b62762ab0f870f9b9ade15eee2278df0c65f761ed588e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3135f5d9e97d17423b62762ab0f870f9b9ade15eee2278df0c65f761ed588e00->leave($__internal_3135f5d9e97d17423b62762ab0f870f9b9ade15eee2278df0c65f761ed588e00_prof);

        
        $__internal_b3979c27e8cb77b41d523352575e5646935ebbcac2a997fa014a172eeb9a4e76->leave($__internal_b3979c27e8cb77b41d523352575e5646935ebbcac2a997fa014a172eeb9a4e76_prof);

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
