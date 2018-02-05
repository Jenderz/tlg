<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0e5af1621b02c6496eac7acc5ea9f2b72b1333d6761814d674900cf73a6cf729 extends Twig_Template
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
        $__internal_e7d28132be7d0652f7616c8148908af63e3940387bc32638af537d1a48f95497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d28132be7d0652f7616c8148908af63e3940387bc32638af537d1a48f95497->enter($__internal_e7d28132be7d0652f7616c8148908af63e3940387bc32638af537d1a48f95497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a494fac6c0a3dba01686c3d4bfb551d96f059f22c7ac1874a97e3a388943d391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a494fac6c0a3dba01686c3d4bfb551d96f059f22c7ac1874a97e3a388943d391->enter($__internal_a494fac6c0a3dba01686c3d4bfb551d96f059f22c7ac1874a97e3a388943d391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e7d28132be7d0652f7616c8148908af63e3940387bc32638af537d1a48f95497->leave($__internal_e7d28132be7d0652f7616c8148908af63e3940387bc32638af537d1a48f95497_prof);

        
        $__internal_a494fac6c0a3dba01686c3d4bfb551d96f059f22c7ac1874a97e3a388943d391->leave($__internal_a494fac6c0a3dba01686c3d4bfb551d96f059f22c7ac1874a97e3a388943d391_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
