<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_035e9efdd28ae5525689e04960a8850fccd3fb3578d2e2a963af4175689b24b2 extends Twig_Template
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
        $__internal_ffd8d7582e01aaa22fdf9cfc07d1326572ef4a13336b81e4af4afb5e294225e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd8d7582e01aaa22fdf9cfc07d1326572ef4a13336b81e4af4afb5e294225e7->enter($__internal_ffd8d7582e01aaa22fdf9cfc07d1326572ef4a13336b81e4af4afb5e294225e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_21b3185ea278b6d70c8e5396b7e7c5c684d9fe92948da1bc0ae4553e81779942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b3185ea278b6d70c8e5396b7e7c5c684d9fe92948da1bc0ae4553e81779942->enter($__internal_21b3185ea278b6d70c8e5396b7e7c5c684d9fe92948da1bc0ae4553e81779942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ffd8d7582e01aaa22fdf9cfc07d1326572ef4a13336b81e4af4afb5e294225e7->leave($__internal_ffd8d7582e01aaa22fdf9cfc07d1326572ef4a13336b81e4af4afb5e294225e7_prof);

        
        $__internal_21b3185ea278b6d70c8e5396b7e7c5c684d9fe92948da1bc0ae4553e81779942->leave($__internal_21b3185ea278b6d70c8e5396b7e7c5c684d9fe92948da1bc0ae4553e81779942_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
