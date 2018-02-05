<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a51ed64f9724a8949735de94f1210661f265ebc30e7555a3a2b03395aa03cc6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9da24aa3de21a3d619d60dad7fb86f4570f182b35a4100a734258f04128fa552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da24aa3de21a3d619d60dad7fb86f4570f182b35a4100a734258f04128fa552->enter($__internal_9da24aa3de21a3d619d60dad7fb86f4570f182b35a4100a734258f04128fa552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_72a7faa83db1c369957aed69dbcc0ce66b7ffbed6fec636d6b999e004a4bd7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a7faa83db1c369957aed69dbcc0ce66b7ffbed6fec636d6b999e004a4bd7c5->enter($__internal_72a7faa83db1c369957aed69dbcc0ce66b7ffbed6fec636d6b999e004a4bd7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da24aa3de21a3d619d60dad7fb86f4570f182b35a4100a734258f04128fa552->leave($__internal_9da24aa3de21a3d619d60dad7fb86f4570f182b35a4100a734258f04128fa552_prof);

        
        $__internal_72a7faa83db1c369957aed69dbcc0ce66b7ffbed6fec636d6b999e004a4bd7c5->leave($__internal_72a7faa83db1c369957aed69dbcc0ce66b7ffbed6fec636d6b999e004a4bd7c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d48055a901bfd599022604dbc4c074500ef91aa2d402ec6782d01eb1af63467c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48055a901bfd599022604dbc4c074500ef91aa2d402ec6782d01eb1af63467c->enter($__internal_d48055a901bfd599022604dbc4c074500ef91aa2d402ec6782d01eb1af63467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_152e965e237c9965b694f11d278e555ce8630fe8a3f942472d80ba134b781d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152e965e237c9965b694f11d278e555ce8630fe8a3f942472d80ba134b781d94->enter($__internal_152e965e237c9965b694f11d278e555ce8630fe8a3f942472d80ba134b781d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_152e965e237c9965b694f11d278e555ce8630fe8a3f942472d80ba134b781d94->leave($__internal_152e965e237c9965b694f11d278e555ce8630fe8a3f942472d80ba134b781d94_prof);

        
        $__internal_d48055a901bfd599022604dbc4c074500ef91aa2d402ec6782d01eb1af63467c->leave($__internal_d48055a901bfd599022604dbc4c074500ef91aa2d402ec6782d01eb1af63467c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_404022bf7832bd946d608b36a32b4a610b00edc1a31f4027400e7447ef49557c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404022bf7832bd946d608b36a32b4a610b00edc1a31f4027400e7447ef49557c->enter($__internal_404022bf7832bd946d608b36a32b4a610b00edc1a31f4027400e7447ef49557c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a297ff16114e128c4a61d43f2821b0b99787e3c86689d2d6f51c0ee1171198b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a297ff16114e128c4a61d43f2821b0b99787e3c86689d2d6f51c0ee1171198b->enter($__internal_9a297ff16114e128c4a61d43f2821b0b99787e3c86689d2d6f51c0ee1171198b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_9a297ff16114e128c4a61d43f2821b0b99787e3c86689d2d6f51c0ee1171198b->leave($__internal_9a297ff16114e128c4a61d43f2821b0b99787e3c86689d2d6f51c0ee1171198b_prof);

        
        $__internal_404022bf7832bd946d608b36a32b4a610b00edc1a31f4027400e7447ef49557c->leave($__internal_404022bf7832bd946d608b36a32b4a610b00edc1a31f4027400e7447ef49557c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
