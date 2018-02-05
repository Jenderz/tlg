<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3a8c3b8753d7c655a385a9222bb097ac0ac12bf78b80e2e501b8da8d26898154 extends Twig_Template
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
        $__internal_868951f0dbf85f30e937955d60573e570427da1003fa45729d728bb3091395a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868951f0dbf85f30e937955d60573e570427da1003fa45729d728bb3091395a0->enter($__internal_868951f0dbf85f30e937955d60573e570427da1003fa45729d728bb3091395a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ae83662dbe37d2cf87612ebc9f89835e8c3ce8003466f0edbf4efcf9e5074979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae83662dbe37d2cf87612ebc9f89835e8c3ce8003466f0edbf4efcf9e5074979->enter($__internal_ae83662dbe37d2cf87612ebc9f89835e8c3ce8003466f0edbf4efcf9e5074979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_868951f0dbf85f30e937955d60573e570427da1003fa45729d728bb3091395a0->leave($__internal_868951f0dbf85f30e937955d60573e570427da1003fa45729d728bb3091395a0_prof);

        
        $__internal_ae83662dbe37d2cf87612ebc9f89835e8c3ce8003466f0edbf4efcf9e5074979->leave($__internal_ae83662dbe37d2cf87612ebc9f89835e8c3ce8003466f0edbf4efcf9e5074979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
