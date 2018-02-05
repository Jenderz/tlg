<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_429c75225e9117e32547fce5d080261428589e96977a4b43ec31457a6174aeae extends Twig_Template
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
        $__internal_a2f91216871fd7acf4f2dbe22040a179282f427d0f1d717755725663f9c2e206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f91216871fd7acf4f2dbe22040a179282f427d0f1d717755725663f9c2e206->enter($__internal_a2f91216871fd7acf4f2dbe22040a179282f427d0f1d717755725663f9c2e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8b423cd27d3c96bf67e720cd63c7656145d1afe653af962be1b5579827df0c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b423cd27d3c96bf67e720cd63c7656145d1afe653af962be1b5579827df0c86->enter($__internal_8b423cd27d3c96bf67e720cd63c7656145d1afe653af962be1b5579827df0c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2f91216871fd7acf4f2dbe22040a179282f427d0f1d717755725663f9c2e206->leave($__internal_a2f91216871fd7acf4f2dbe22040a179282f427d0f1d717755725663f9c2e206_prof);

        
        $__internal_8b423cd27d3c96bf67e720cd63c7656145d1afe653af962be1b5579827df0c86->leave($__internal_8b423cd27d3c96bf67e720cd63c7656145d1afe653af962be1b5579827df0c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
