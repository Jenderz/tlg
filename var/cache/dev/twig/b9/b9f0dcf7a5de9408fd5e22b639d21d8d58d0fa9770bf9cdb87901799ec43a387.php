<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_65230548f178057ce829a4bc2e9ebcb94c4c4c2861417dc743ae189a1626c097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c99d3e45811d9c4cf38ca059fa0b91a0eb3d648f41a51d9acdbc4d39a5d4138a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99d3e45811d9c4cf38ca059fa0b91a0eb3d648f41a51d9acdbc4d39a5d4138a->enter($__internal_c99d3e45811d9c4cf38ca059fa0b91a0eb3d648f41a51d9acdbc4d39a5d4138a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_c236811415d5f265b7ab0014fccee4e96f562e34ba94ce690615a8f331033137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c236811415d5f265b7ab0014fccee4e96f562e34ba94ce690615a8f331033137->enter($__internal_c236811415d5f265b7ab0014fccee4e96f562e34ba94ce690615a8f331033137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_c99d3e45811d9c4cf38ca059fa0b91a0eb3d648f41a51d9acdbc4d39a5d4138a->leave($__internal_c99d3e45811d9c4cf38ca059fa0b91a0eb3d648f41a51d9acdbc4d39a5d4138a_prof);

        
        $__internal_c236811415d5f265b7ab0014fccee4e96f562e34ba94ce690615a8f331033137->leave($__internal_c236811415d5f265b7ab0014fccee4e96f562e34ba94ce690615a8f331033137_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
