<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_dd12be9d7b9e066179e3f65ed381374e6023aee06b7bf64ab07e08860e9cab79 extends Twig_Template
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
        $__internal_7a85fd99be49846066295bc6c8c71bd1ce107eb092b6487db03ed2c648365a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a85fd99be49846066295bc6c8c71bd1ce107eb092b6487db03ed2c648365a95->enter($__internal_7a85fd99be49846066295bc6c8c71bd1ce107eb092b6487db03ed2c648365a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a4f208da27e4ff64dc7c755fc06365bccb54dcaf8feb50029c391d3906c2b456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f208da27e4ff64dc7c755fc06365bccb54dcaf8feb50029c391d3906c2b456->enter($__internal_a4f208da27e4ff64dc7c755fc06365bccb54dcaf8feb50029c391d3906c2b456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7a85fd99be49846066295bc6c8c71bd1ce107eb092b6487db03ed2c648365a95->leave($__internal_7a85fd99be49846066295bc6c8c71bd1ce107eb092b6487db03ed2c648365a95_prof);

        
        $__internal_a4f208da27e4ff64dc7c755fc06365bccb54dcaf8feb50029c391d3906c2b456->leave($__internal_a4f208da27e4ff64dc7c755fc06365bccb54dcaf8feb50029c391d3906c2b456_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
