<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c945d7e74169108e5fbb850e2406ad8f72e802bad9e686347c48354a5fb066d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bea1dacbd67526c2ea8b10b1f50a08accb395c8c4ffc3d9ccc7de7763c9404a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea1dacbd67526c2ea8b10b1f50a08accb395c8c4ffc3d9ccc7de7763c9404a5->enter($__internal_bea1dacbd67526c2ea8b10b1f50a08accb395c8c4ffc3d9ccc7de7763c9404a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dd7d53e26f190a387ac7b80052d9a7b942c9ed8a26c0a36be2032c20ca6586ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7d53e26f190a387ac7b80052d9a7b942c9ed8a26c0a36be2032c20ca6586ef->enter($__internal_dd7d53e26f190a387ac7b80052d9a7b942c9ed8a26c0a36be2032c20ca6586ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea1dacbd67526c2ea8b10b1f50a08accb395c8c4ffc3d9ccc7de7763c9404a5->leave($__internal_bea1dacbd67526c2ea8b10b1f50a08accb395c8c4ffc3d9ccc7de7763c9404a5_prof);

        
        $__internal_dd7d53e26f190a387ac7b80052d9a7b942c9ed8a26c0a36be2032c20ca6586ef->leave($__internal_dd7d53e26f190a387ac7b80052d9a7b942c9ed8a26c0a36be2032c20ca6586ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc83ed1708784058855e5e45cec61666883b20043a47a949c89ccf867aedbd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc83ed1708784058855e5e45cec61666883b20043a47a949c89ccf867aedbd63->enter($__internal_dc83ed1708784058855e5e45cec61666883b20043a47a949c89ccf867aedbd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_084186cefc5cb6a3da1155ab8cb0d7f2b82c863c3ccc62052ec99eaf8d293802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084186cefc5cb6a3da1155ab8cb0d7f2b82c863c3ccc62052ec99eaf8d293802->enter($__internal_084186cefc5cb6a3da1155ab8cb0d7f2b82c863c3ccc62052ec99eaf8d293802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_084186cefc5cb6a3da1155ab8cb0d7f2b82c863c3ccc62052ec99eaf8d293802->leave($__internal_084186cefc5cb6a3da1155ab8cb0d7f2b82c863c3ccc62052ec99eaf8d293802_prof);

        
        $__internal_dc83ed1708784058855e5e45cec61666883b20043a47a949c89ccf867aedbd63->leave($__internal_dc83ed1708784058855e5e45cec61666883b20043a47a949c89ccf867aedbd63_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
