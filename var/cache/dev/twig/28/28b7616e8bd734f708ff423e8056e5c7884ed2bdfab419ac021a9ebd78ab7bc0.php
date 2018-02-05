<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c949e8568cb6d1e88b2baf590532807d95d0e47bfc612e74e72234939d62dc5e extends Twig_Template
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
        $__internal_b4555a2949142f4fa0f9adb568a570035212c14ef85608c2c4899dbd920b7db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4555a2949142f4fa0f9adb568a570035212c14ef85608c2c4899dbd920b7db8->enter($__internal_b4555a2949142f4fa0f9adb568a570035212c14ef85608c2c4899dbd920b7db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_dd69a1439a7a08b162253a2ffbd4de35caae681aaf6d31c51821dafec48010de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd69a1439a7a08b162253a2ffbd4de35caae681aaf6d31c51821dafec48010de->enter($__internal_dd69a1439a7a08b162253a2ffbd4de35caae681aaf6d31c51821dafec48010de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b4555a2949142f4fa0f9adb568a570035212c14ef85608c2c4899dbd920b7db8->leave($__internal_b4555a2949142f4fa0f9adb568a570035212c14ef85608c2c4899dbd920b7db8_prof);

        
        $__internal_dd69a1439a7a08b162253a2ffbd4de35caae681aaf6d31c51821dafec48010de->leave($__internal_dd69a1439a7a08b162253a2ffbd4de35caae681aaf6d31c51821dafec48010de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
