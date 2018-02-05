<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_48f49ca64d32f66f31cbe1a9ceca752ee81af60cb90923687318f6b11b0b62d1 extends Twig_Template
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
        $__internal_87ce61ca27453eb5cdd6a889244b40ca793dc16a2f57d0892d323beb750740d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ce61ca27453eb5cdd6a889244b40ca793dc16a2f57d0892d323beb750740d1->enter($__internal_87ce61ca27453eb5cdd6a889244b40ca793dc16a2f57d0892d323beb750740d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_82278cc930ef602b141543d65b8df662a9096833ed2f23d8be8399cc3df7bdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82278cc930ef602b141543d65b8df662a9096833ed2f23d8be8399cc3df7bdcf->enter($__internal_82278cc930ef602b141543d65b8df662a9096833ed2f23d8be8399cc3df7bdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_87ce61ca27453eb5cdd6a889244b40ca793dc16a2f57d0892d323beb750740d1->leave($__internal_87ce61ca27453eb5cdd6a889244b40ca793dc16a2f57d0892d323beb750740d1_prof);

        
        $__internal_82278cc930ef602b141543d65b8df662a9096833ed2f23d8be8399cc3df7bdcf->leave($__internal_82278cc930ef602b141543d65b8df662a9096833ed2f23d8be8399cc3df7bdcf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
