<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5c094fac6b08d3fefd856e30e6ec03c9d3d13a9f540ce2473fd82d51b440d626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c096c8de9c4c429cec36bb39130a58795d64897e69059ad23705971c3b23cd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c096c8de9c4c429cec36bb39130a58795d64897e69059ad23705971c3b23cd0a->enter($__internal_c096c8de9c4c429cec36bb39130a58795d64897e69059ad23705971c3b23cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_531dff43ea0b8364a91c10b67ac0cbd74cb7b9c541f9f0333c8d9d85b8704d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531dff43ea0b8364a91c10b67ac0cbd74cb7b9c541f9f0333c8d9d85b8704d2a->enter($__internal_531dff43ea0b8364a91c10b67ac0cbd74cb7b9c541f9f0333c8d9d85b8704d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c096c8de9c4c429cec36bb39130a58795d64897e69059ad23705971c3b23cd0a->leave($__internal_c096c8de9c4c429cec36bb39130a58795d64897e69059ad23705971c3b23cd0a_prof);

        
        $__internal_531dff43ea0b8364a91c10b67ac0cbd74cb7b9c541f9f0333c8d9d85b8704d2a->leave($__internal_531dff43ea0b8364a91c10b67ac0cbd74cb7b9c541f9f0333c8d9d85b8704d2a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b736b03958716768315ecd4aabf6f54f376670f441398d9fa387db2f2193cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b736b03958716768315ecd4aabf6f54f376670f441398d9fa387db2f2193cd3->enter($__internal_8b736b03958716768315ecd4aabf6f54f376670f441398d9fa387db2f2193cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01ac354ff6b6ada41a2d6f72ff47a537a1aec34b94a07cb8fe1be11352e69770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ac354ff6b6ada41a2d6f72ff47a537a1aec34b94a07cb8fe1be11352e69770->enter($__internal_01ac354ff6b6ada41a2d6f72ff47a537a1aec34b94a07cb8fe1be11352e69770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_01ac354ff6b6ada41a2d6f72ff47a537a1aec34b94a07cb8fe1be11352e69770->leave($__internal_01ac354ff6b6ada41a2d6f72ff47a537a1aec34b94a07cb8fe1be11352e69770_prof);

        
        $__internal_8b736b03958716768315ecd4aabf6f54f376670f441398d9fa387db2f2193cd3->leave($__internal_8b736b03958716768315ecd4aabf6f54f376670f441398d9fa387db2f2193cd3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
