<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_e23c05d7eb433375b63575fe522efe64e766d981e6b8513b7b40b2fa72b39cfc extends Twig_Template
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
        $__internal_10e6d050ff1289e01162d05719fc961cab771c30e14ed67edacfdcf4783f23d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e6d050ff1289e01162d05719fc961cab771c30e14ed67edacfdcf4783f23d1->enter($__internal_10e6d050ff1289e01162d05719fc961cab771c30e14ed67edacfdcf4783f23d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_1aa40644e007f3c4dd5b06fc1929bc3562f337714736cbf8b6e98acdf5ef6985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa40644e007f3c4dd5b06fc1929bc3562f337714736cbf8b6e98acdf5ef6985->enter($__internal_1aa40644e007f3c4dd5b06fc1929bc3562f337714736cbf8b6e98acdf5ef6985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_10e6d050ff1289e01162d05719fc961cab771c30e14ed67edacfdcf4783f23d1->leave($__internal_10e6d050ff1289e01162d05719fc961cab771c30e14ed67edacfdcf4783f23d1_prof);

        
        $__internal_1aa40644e007f3c4dd5b06fc1929bc3562f337714736cbf8b6e98acdf5ef6985->leave($__internal_1aa40644e007f3c4dd5b06fc1929bc3562f337714736cbf8b6e98acdf5ef6985_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
