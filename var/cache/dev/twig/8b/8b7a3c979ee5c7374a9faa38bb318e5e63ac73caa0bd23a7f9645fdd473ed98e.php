<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_d430c28fad012abd49229dda52c458585f28e48d8a992c1d1c893d3fca48f678 extends Twig_Template
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
        $__internal_28362e4df831ed0eb7d59ba8f4df304f0e625991d3db486a2ca8caf6cfe53276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28362e4df831ed0eb7d59ba8f4df304f0e625991d3db486a2ca8caf6cfe53276->enter($__internal_28362e4df831ed0eb7d59ba8f4df304f0e625991d3db486a2ca8caf6cfe53276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_b590c5f9cab3c843058f61c25158b6fb51deba6aa973769c1ff33e8114b3d5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b590c5f9cab3c843058f61c25158b6fb51deba6aa973769c1ff33e8114b3d5e0->enter($__internal_b590c5f9cab3c843058f61c25158b6fb51deba6aa973769c1ff33e8114b3d5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_28362e4df831ed0eb7d59ba8f4df304f0e625991d3db486a2ca8caf6cfe53276->leave($__internal_28362e4df831ed0eb7d59ba8f4df304f0e625991d3db486a2ca8caf6cfe53276_prof);

        
        $__internal_b590c5f9cab3c843058f61c25158b6fb51deba6aa973769c1ff33e8114b3d5e0->leave($__internal_b590c5f9cab3c843058f61c25158b6fb51deba6aa973769c1ff33e8114b3d5e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
