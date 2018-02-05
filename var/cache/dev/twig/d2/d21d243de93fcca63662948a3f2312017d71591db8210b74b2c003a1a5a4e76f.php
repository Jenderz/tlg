<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2d894fa9331ca987e01d41fdacae1d565a5c467491dc77e633652f11c606d0cb extends Twig_Template
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
        $__internal_795a19ad27d21bb248da5f419dc8360e1cdf887a4bece60afd28e5ffec30e7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795a19ad27d21bb248da5f419dc8360e1cdf887a4bece60afd28e5ffec30e7b9->enter($__internal_795a19ad27d21bb248da5f419dc8360e1cdf887a4bece60afd28e5ffec30e7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1e8d5fdbc4e438fba1a861ffb6a4ed3f6af79f1b4cfec14deec1edc389fb6523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8d5fdbc4e438fba1a861ffb6a4ed3f6af79f1b4cfec14deec1edc389fb6523->enter($__internal_1e8d5fdbc4e438fba1a861ffb6a4ed3f6af79f1b4cfec14deec1edc389fb6523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_795a19ad27d21bb248da5f419dc8360e1cdf887a4bece60afd28e5ffec30e7b9->leave($__internal_795a19ad27d21bb248da5f419dc8360e1cdf887a4bece60afd28e5ffec30e7b9_prof);

        
        $__internal_1e8d5fdbc4e438fba1a861ffb6a4ed3f6af79f1b4cfec14deec1edc389fb6523->leave($__internal_1e8d5fdbc4e438fba1a861ffb6a4ed3f6af79f1b4cfec14deec1edc389fb6523_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
