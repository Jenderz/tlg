<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_bb82b06539ad5c1a7258dd31c05350ae901648d741f00aaebe28caaa40c73919 extends Twig_Template
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
        $__internal_04dfe6b2ef0fc653c83f1da34d4e3024574987aa4495696bed687178de507b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04dfe6b2ef0fc653c83f1da34d4e3024574987aa4495696bed687178de507b42->enter($__internal_04dfe6b2ef0fc653c83f1da34d4e3024574987aa4495696bed687178de507b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_5c4d66d12071e99aa531faf5c07ac1a4503de3b8ec432c8ab574ee17d5b85783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4d66d12071e99aa531faf5c07ac1a4503de3b8ec432c8ab574ee17d5b85783->enter($__internal_5c4d66d12071e99aa531faf5c07ac1a4503de3b8ec432c8ab574ee17d5b85783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_04dfe6b2ef0fc653c83f1da34d4e3024574987aa4495696bed687178de507b42->leave($__internal_04dfe6b2ef0fc653c83f1da34d4e3024574987aa4495696bed687178de507b42_prof);

        
        $__internal_5c4d66d12071e99aa531faf5c07ac1a4503de3b8ec432c8ab574ee17d5b85783->leave($__internal_5c4d66d12071e99aa531faf5c07ac1a4503de3b8ec432c8ab574ee17d5b85783_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
