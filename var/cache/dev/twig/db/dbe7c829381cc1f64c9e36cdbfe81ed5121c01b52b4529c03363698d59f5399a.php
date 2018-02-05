<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ff0ea3c81aca6af7d88d28a8970c78c0bbcf53d8850957feb91d88d4e0c42d2b extends Twig_Template
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
        $__internal_b58aec35379cc1338f03ff054ce3154593438211aeb342a8d41963e0fc372bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58aec35379cc1338f03ff054ce3154593438211aeb342a8d41963e0fc372bc8->enter($__internal_b58aec35379cc1338f03ff054ce3154593438211aeb342a8d41963e0fc372bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c96556c75305d66016c65a48ce9f12f0bcb88f726750791f83175238f7c18230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96556c75305d66016c65a48ce9f12f0bcb88f726750791f83175238f7c18230->enter($__internal_c96556c75305d66016c65a48ce9f12f0bcb88f726750791f83175238f7c18230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b58aec35379cc1338f03ff054ce3154593438211aeb342a8d41963e0fc372bc8->leave($__internal_b58aec35379cc1338f03ff054ce3154593438211aeb342a8d41963e0fc372bc8_prof);

        
        $__internal_c96556c75305d66016c65a48ce9f12f0bcb88f726750791f83175238f7c18230->leave($__internal_c96556c75305d66016c65a48ce9f12f0bcb88f726750791f83175238f7c18230_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
