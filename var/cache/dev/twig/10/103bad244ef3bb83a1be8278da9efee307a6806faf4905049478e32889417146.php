<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ebd9470a2b1570785f7af6ba5a42667bcba1bad7429fcb7aa75b12cd7c23f48d extends Twig_Template
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
        $__internal_a3e4ef2d687b30c7e9436da205bf0dc865f76fa411868c7559bcae0c7bbe191b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e4ef2d687b30c7e9436da205bf0dc865f76fa411868c7559bcae0c7bbe191b->enter($__internal_a3e4ef2d687b30c7e9436da205bf0dc865f76fa411868c7559bcae0c7bbe191b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_49dba1d113d8c130218e3838f1dde65f08e622e768ee49152870582727f13e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49dba1d113d8c130218e3838f1dde65f08e622e768ee49152870582727f13e09->enter($__internal_49dba1d113d8c130218e3838f1dde65f08e622e768ee49152870582727f13e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a3e4ef2d687b30c7e9436da205bf0dc865f76fa411868c7559bcae0c7bbe191b->leave($__internal_a3e4ef2d687b30c7e9436da205bf0dc865f76fa411868c7559bcae0c7bbe191b_prof);

        
        $__internal_49dba1d113d8c130218e3838f1dde65f08e622e768ee49152870582727f13e09->leave($__internal_49dba1d113d8c130218e3838f1dde65f08e622e768ee49152870582727f13e09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
