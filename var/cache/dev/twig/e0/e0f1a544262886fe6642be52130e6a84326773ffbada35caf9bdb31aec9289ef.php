<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_1817d8f74dcb157529baa65e0b2736da6adfeb042a1a55e0007f82bf6d4cd487 extends Twig_Template
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
        $__internal_55222dd9c43ee4ccdc2d3b643b63e9ff7c5a9d0cdb5c694ac984629ca9460852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55222dd9c43ee4ccdc2d3b643b63e9ff7c5a9d0cdb5c694ac984629ca9460852->enter($__internal_55222dd9c43ee4ccdc2d3b643b63e9ff7c5a9d0cdb5c694ac984629ca9460852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_1129e2f6c8b7751eacab0d90840c773cd750d8ae6b0b2ffb6c40e5a54a036b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1129e2f6c8b7751eacab0d90840c773cd750d8ae6b0b2ffb6c40e5a54a036b2b->enter($__internal_1129e2f6c8b7751eacab0d90840c773cd750d8ae6b0b2ffb6c40e5a54a036b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_55222dd9c43ee4ccdc2d3b643b63e9ff7c5a9d0cdb5c694ac984629ca9460852->leave($__internal_55222dd9c43ee4ccdc2d3b643b63e9ff7c5a9d0cdb5c694ac984629ca9460852_prof);

        
        $__internal_1129e2f6c8b7751eacab0d90840c773cd750d8ae6b0b2ffb6c40e5a54a036b2b->leave($__internal_1129e2f6c8b7751eacab0d90840c773cd750d8ae6b0b2ffb6c40e5a54a036b2b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
