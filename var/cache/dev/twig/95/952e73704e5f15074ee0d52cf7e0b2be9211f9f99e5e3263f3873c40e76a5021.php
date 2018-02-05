<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_35dc27b750554ce979f34e3cb7a0dccf7ce80d3cffbcc151ea962dcfca578b1f extends Twig_Template
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
        $__internal_78cfd7a5483daeb36772fbc4d4d92ab4595ca8b54bc5fa5d7554d4e1c5860534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cfd7a5483daeb36772fbc4d4d92ab4595ca8b54bc5fa5d7554d4e1c5860534->enter($__internal_78cfd7a5483daeb36772fbc4d4d92ab4595ca8b54bc5fa5d7554d4e1c5860534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3a33ec94cd12ca663640ce61c936a6dd1f5280a95c8dbce67a39b2b8ddae8305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a33ec94cd12ca663640ce61c936a6dd1f5280a95c8dbce67a39b2b8ddae8305->enter($__internal_3a33ec94cd12ca663640ce61c936a6dd1f5280a95c8dbce67a39b2b8ddae8305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_78cfd7a5483daeb36772fbc4d4d92ab4595ca8b54bc5fa5d7554d4e1c5860534->leave($__internal_78cfd7a5483daeb36772fbc4d4d92ab4595ca8b54bc5fa5d7554d4e1c5860534_prof);

        
        $__internal_3a33ec94cd12ca663640ce61c936a6dd1f5280a95c8dbce67a39b2b8ddae8305->leave($__internal_3a33ec94cd12ca663640ce61c936a6dd1f5280a95c8dbce67a39b2b8ddae8305_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
