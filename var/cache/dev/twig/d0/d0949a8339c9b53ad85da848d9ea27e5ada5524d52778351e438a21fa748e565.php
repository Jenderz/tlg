<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d996d8da883f6531fbc835a84a614a06e5f535b36806a4287e7351afb8328f40 extends Twig_Template
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
        $__internal_bdaf57a6c6e311d6efa30e8cff79d0cca966f93d97d2b76642c50e70b45e8c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdaf57a6c6e311d6efa30e8cff79d0cca966f93d97d2b76642c50e70b45e8c21->enter($__internal_bdaf57a6c6e311d6efa30e8cff79d0cca966f93d97d2b76642c50e70b45e8c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_04cf6af0fc495b7f2c978d4d86ac9351ec6294114fa38f364993609aa46bd304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cf6af0fc495b7f2c978d4d86ac9351ec6294114fa38f364993609aa46bd304->enter($__internal_04cf6af0fc495b7f2c978d4d86ac9351ec6294114fa38f364993609aa46bd304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bdaf57a6c6e311d6efa30e8cff79d0cca966f93d97d2b76642c50e70b45e8c21->leave($__internal_bdaf57a6c6e311d6efa30e8cff79d0cca966f93d97d2b76642c50e70b45e8c21_prof);

        
        $__internal_04cf6af0fc495b7f2c978d4d86ac9351ec6294114fa38f364993609aa46bd304->leave($__internal_04cf6af0fc495b7f2c978d4d86ac9351ec6294114fa38f364993609aa46bd304_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
