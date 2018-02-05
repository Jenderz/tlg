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
        $__internal_7db13fc9fc10fd28b0c867510de137a858bcfb718b79bffe4ce7a759b3fe62fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db13fc9fc10fd28b0c867510de137a858bcfb718b79bffe4ce7a759b3fe62fb->enter($__internal_7db13fc9fc10fd28b0c867510de137a858bcfb718b79bffe4ce7a759b3fe62fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b4c94a92c43ce3b26a4119db3282986e657e323458ec44a3960c66a621f04601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c94a92c43ce3b26a4119db3282986e657e323458ec44a3960c66a621f04601->enter($__internal_b4c94a92c43ce3b26a4119db3282986e657e323458ec44a3960c66a621f04601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db13fc9fc10fd28b0c867510de137a858bcfb718b79bffe4ce7a759b3fe62fb->leave($__internal_7db13fc9fc10fd28b0c867510de137a858bcfb718b79bffe4ce7a759b3fe62fb_prof);

        
        $__internal_b4c94a92c43ce3b26a4119db3282986e657e323458ec44a3960c66a621f04601->leave($__internal_b4c94a92c43ce3b26a4119db3282986e657e323458ec44a3960c66a621f04601_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d82ee642205894b697f432b155364b2d76e76fff723aa98ea8969bf73399a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d82ee642205894b697f432b155364b2d76e76fff723aa98ea8969bf73399a2f->enter($__internal_4d82ee642205894b697f432b155364b2d76e76fff723aa98ea8969bf73399a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5e1fafbd53d328dc05354f9fef6365b5d5609f112a1c243fe23b5bb0c797342b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1fafbd53d328dc05354f9fef6365b5d5609f112a1c243fe23b5bb0c797342b->enter($__internal_5e1fafbd53d328dc05354f9fef6365b5d5609f112a1c243fe23b5bb0c797342b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5e1fafbd53d328dc05354f9fef6365b5d5609f112a1c243fe23b5bb0c797342b->leave($__internal_5e1fafbd53d328dc05354f9fef6365b5d5609f112a1c243fe23b5bb0c797342b_prof);

        
        $__internal_4d82ee642205894b697f432b155364b2d76e76fff723aa98ea8969bf73399a2f->leave($__internal_4d82ee642205894b697f432b155364b2d76e76fff723aa98ea8969bf73399a2f_prof);

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
