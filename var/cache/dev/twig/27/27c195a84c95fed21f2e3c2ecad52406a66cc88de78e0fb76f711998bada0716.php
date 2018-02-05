<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6de1eab9973be38e1e3ca25d8781ff3dc1e5b692c83b61cdab7d00eba7d6a9d1 extends Twig_Template
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
        $__internal_a6585d484a5a275cbd782e4cbee3e989499df8c5518f377d04b6d61410046f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6585d484a5a275cbd782e4cbee3e989499df8c5518f377d04b6d61410046f1a->enter($__internal_a6585d484a5a275cbd782e4cbee3e989499df8c5518f377d04b6d61410046f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d7e2229b713790cfecca1394c536f479b191de19531e002a66fd4f9198d850f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e2229b713790cfecca1394c536f479b191de19531e002a66fd4f9198d850f5->enter($__internal_d7e2229b713790cfecca1394c536f479b191de19531e002a66fd4f9198d850f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_a6585d484a5a275cbd782e4cbee3e989499df8c5518f377d04b6d61410046f1a->leave($__internal_a6585d484a5a275cbd782e4cbee3e989499df8c5518f377d04b6d61410046f1a_prof);

        
        $__internal_d7e2229b713790cfecca1394c536f479b191de19531e002a66fd4f9198d850f5->leave($__internal_d7e2229b713790cfecca1394c536f479b191de19531e002a66fd4f9198d850f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
