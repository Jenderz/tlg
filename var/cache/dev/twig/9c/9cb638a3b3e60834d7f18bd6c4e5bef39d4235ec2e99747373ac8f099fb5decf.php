<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_30b0a05a9fba26acd52d5918d32ca5ac666634cebf143b7e25de015a0fa31f94 extends Twig_Template
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
        $__internal_21d975220dd5ee9f6c6e4d4cd19be0aa8800674ebae8ede0f9dd2d9432ccf7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d975220dd5ee9f6c6e4d4cd19be0aa8800674ebae8ede0f9dd2d9432ccf7a9->enter($__internal_21d975220dd5ee9f6c6e4d4cd19be0aa8800674ebae8ede0f9dd2d9432ccf7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_32abfeaf7dc3b364d7d5709c2e1def4dc9654ac73a6732c9d2c7591b5906336b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32abfeaf7dc3b364d7d5709c2e1def4dc9654ac73a6732c9d2c7591b5906336b->enter($__internal_32abfeaf7dc3b364d7d5709c2e1def4dc9654ac73a6732c9d2c7591b5906336b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_21d975220dd5ee9f6c6e4d4cd19be0aa8800674ebae8ede0f9dd2d9432ccf7a9->leave($__internal_21d975220dd5ee9f6c6e4d4cd19be0aa8800674ebae8ede0f9dd2d9432ccf7a9_prof);

        
        $__internal_32abfeaf7dc3b364d7d5709c2e1def4dc9654ac73a6732c9d2c7591b5906336b->leave($__internal_32abfeaf7dc3b364d7d5709c2e1def4dc9654ac73a6732c9d2c7591b5906336b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
