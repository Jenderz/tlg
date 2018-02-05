<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cf73b8310e12728915057acf5f4c7e580709c37f34bcd9d11b5e9e937ef1f548 extends Twig_Template
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
        $__internal_c54e47e3fc6a9c315ac08c56763e8d976cf1dbfc6832d8015ff45250067a07c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54e47e3fc6a9c315ac08c56763e8d976cf1dbfc6832d8015ff45250067a07c8->enter($__internal_c54e47e3fc6a9c315ac08c56763e8d976cf1dbfc6832d8015ff45250067a07c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_afd61ec06916cdf991e734a4b761cf50280a4875a80ff7e58616bb4eae4ddc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd61ec06916cdf991e734a4b761cf50280a4875a80ff7e58616bb4eae4ddc3b->enter($__internal_afd61ec06916cdf991e734a4b761cf50280a4875a80ff7e58616bb4eae4ddc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c54e47e3fc6a9c315ac08c56763e8d976cf1dbfc6832d8015ff45250067a07c8->leave($__internal_c54e47e3fc6a9c315ac08c56763e8d976cf1dbfc6832d8015ff45250067a07c8_prof);

        
        $__internal_afd61ec06916cdf991e734a4b761cf50280a4875a80ff7e58616bb4eae4ddc3b->leave($__internal_afd61ec06916cdf991e734a4b761cf50280a4875a80ff7e58616bb4eae4ddc3b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
