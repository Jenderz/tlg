<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f5b2257ee71f09fde5afc72e82cf5364ccdf4f7920b33d823c73fb5c3cf1a8cb extends Twig_Template
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
        $__internal_8ee99ab56db9d87b5e05084f2111b9d14b4155428b7b1b56b7a00a77794fddb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee99ab56db9d87b5e05084f2111b9d14b4155428b7b1b56b7a00a77794fddb4->enter($__internal_8ee99ab56db9d87b5e05084f2111b9d14b4155428b7b1b56b7a00a77794fddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9f19c754274a8b1e64d6b497d6ebb0df6ba635bead75690902ec167cec7ee665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f19c754274a8b1e64d6b497d6ebb0df6ba635bead75690902ec167cec7ee665->enter($__internal_9f19c754274a8b1e64d6b497d6ebb0df6ba635bead75690902ec167cec7ee665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8ee99ab56db9d87b5e05084f2111b9d14b4155428b7b1b56b7a00a77794fddb4->leave($__internal_8ee99ab56db9d87b5e05084f2111b9d14b4155428b7b1b56b7a00a77794fddb4_prof);

        
        $__internal_9f19c754274a8b1e64d6b497d6ebb0df6ba635bead75690902ec167cec7ee665->leave($__internal_9f19c754274a8b1e64d6b497d6ebb0df6ba635bead75690902ec167cec7ee665_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
