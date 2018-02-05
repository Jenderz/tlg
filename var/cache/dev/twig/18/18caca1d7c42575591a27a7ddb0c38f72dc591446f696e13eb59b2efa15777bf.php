<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b21d57baab036f80510900d6de107ff2544c8f7f3f196d1496850c2d9f57c637 extends Twig_Template
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
        $__internal_8b8455d2faa3e70155d1ec6d056f410ab7062d4dcfd4210f947c6c29a0000b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8455d2faa3e70155d1ec6d056f410ab7062d4dcfd4210f947c6c29a0000b0a->enter($__internal_8b8455d2faa3e70155d1ec6d056f410ab7062d4dcfd4210f947c6c29a0000b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8b0074f57b21e026f5753e3cbde6e52bf986bbc763ce17d221a33d0daaacbf08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0074f57b21e026f5753e3cbde6e52bf986bbc763ce17d221a33d0daaacbf08->enter($__internal_8b0074f57b21e026f5753e3cbde6e52bf986bbc763ce17d221a33d0daaacbf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8b8455d2faa3e70155d1ec6d056f410ab7062d4dcfd4210f947c6c29a0000b0a->leave($__internal_8b8455d2faa3e70155d1ec6d056f410ab7062d4dcfd4210f947c6c29a0000b0a_prof);

        
        $__internal_8b0074f57b21e026f5753e3cbde6e52bf986bbc763ce17d221a33d0daaacbf08->leave($__internal_8b0074f57b21e026f5753e3cbde6e52bf986bbc763ce17d221a33d0daaacbf08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
