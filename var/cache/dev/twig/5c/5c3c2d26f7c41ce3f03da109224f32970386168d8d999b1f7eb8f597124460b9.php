<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_7765273980b8634a1a7f4a668ab659502be2c556e72aa5067e46af2b11a4f7af extends Twig_Template
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
        $__internal_103a212cd74d32c5202421569e369094d88efb148a5af82f0140d9cde3f7403c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103a212cd74d32c5202421569e369094d88efb148a5af82f0140d9cde3f7403c->enter($__internal_103a212cd74d32c5202421569e369094d88efb148a5af82f0140d9cde3f7403c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9d7fba1e38f175f3f87e5e45856721928c24b46f06d8ae46d8d12f80c61be2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7fba1e38f175f3f87e5e45856721928c24b46f06d8ae46d8d12f80c61be2e1->enter($__internal_9d7fba1e38f175f3f87e5e45856721928c24b46f06d8ae46d8d12f80c61be2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_103a212cd74d32c5202421569e369094d88efb148a5af82f0140d9cde3f7403c->leave($__internal_103a212cd74d32c5202421569e369094d88efb148a5af82f0140d9cde3f7403c_prof);

        
        $__internal_9d7fba1e38f175f3f87e5e45856721928c24b46f06d8ae46d8d12f80c61be2e1->leave($__internal_9d7fba1e38f175f3f87e5e45856721928c24b46f06d8ae46d8d12f80c61be2e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
