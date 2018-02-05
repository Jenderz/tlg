<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_df4d91d9062b51efe6249f2818e7f3bdc0e872133e9f023f078f140fcc67d830 extends Twig_Template
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
        $__internal_637cf42914f93125f1c1b532026d67d278103ce3a21a80ce6a75ade2b577da68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637cf42914f93125f1c1b532026d67d278103ce3a21a80ce6a75ade2b577da68->enter($__internal_637cf42914f93125f1c1b532026d67d278103ce3a21a80ce6a75ade2b577da68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0efd662909d0f10d73d86592bff711dc62683efdfd6d9f0f71039273e6c3bd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efd662909d0f10d73d86592bff711dc62683efdfd6d9f0f71039273e6c3bd71->enter($__internal_0efd662909d0f10d73d86592bff711dc62683efdfd6d9f0f71039273e6c3bd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_637cf42914f93125f1c1b532026d67d278103ce3a21a80ce6a75ade2b577da68->leave($__internal_637cf42914f93125f1c1b532026d67d278103ce3a21a80ce6a75ade2b577da68_prof);

        
        $__internal_0efd662909d0f10d73d86592bff711dc62683efdfd6d9f0f71039273e6c3bd71->leave($__internal_0efd662909d0f10d73d86592bff711dc62683efdfd6d9f0f71039273e6c3bd71_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
