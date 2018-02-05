<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_dd090e974b9315eb3bccb3c1ed5254c7ef39588def3ce24987f94c23ac8f44e2 extends Twig_Template
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
        $__internal_7b4345f8cf89eb5b410ff7a1388b25fa8421af33a8a6fba5d9acf4e734192de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4345f8cf89eb5b410ff7a1388b25fa8421af33a8a6fba5d9acf4e734192de4->enter($__internal_7b4345f8cf89eb5b410ff7a1388b25fa8421af33a8a6fba5d9acf4e734192de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1b93730f5cbdd5e8250036934ca63b1502ab945702c941164a1abec09939e571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b93730f5cbdd5e8250036934ca63b1502ab945702c941164a1abec09939e571->enter($__internal_1b93730f5cbdd5e8250036934ca63b1502ab945702c941164a1abec09939e571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7b4345f8cf89eb5b410ff7a1388b25fa8421af33a8a6fba5d9acf4e734192de4->leave($__internal_7b4345f8cf89eb5b410ff7a1388b25fa8421af33a8a6fba5d9acf4e734192de4_prof);

        
        $__internal_1b93730f5cbdd5e8250036934ca63b1502ab945702c941164a1abec09939e571->leave($__internal_1b93730f5cbdd5e8250036934ca63b1502ab945702c941164a1abec09939e571_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
