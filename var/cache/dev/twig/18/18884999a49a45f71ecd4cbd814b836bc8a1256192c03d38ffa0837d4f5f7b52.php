<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d5a780029bf214da246cdaee4dd458963dec1aff23caeb4dc1efb3163164afa9 extends Twig_Template
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
        $__internal_9a8dc9a1e8b4d45c7d02fc4aa82022d8ddcfc250c69a8b3f9e04ecbb8d07d343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8dc9a1e8b4d45c7d02fc4aa82022d8ddcfc250c69a8b3f9e04ecbb8d07d343->enter($__internal_9a8dc9a1e8b4d45c7d02fc4aa82022d8ddcfc250c69a8b3f9e04ecbb8d07d343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_26bea935629a3955c3f8cddba03bcdafa1f6bff94935b06b6a5804fbdf6920e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bea935629a3955c3f8cddba03bcdafa1f6bff94935b06b6a5804fbdf6920e3->enter($__internal_26bea935629a3955c3f8cddba03bcdafa1f6bff94935b06b6a5804fbdf6920e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9a8dc9a1e8b4d45c7d02fc4aa82022d8ddcfc250c69a8b3f9e04ecbb8d07d343->leave($__internal_9a8dc9a1e8b4d45c7d02fc4aa82022d8ddcfc250c69a8b3f9e04ecbb8d07d343_prof);

        
        $__internal_26bea935629a3955c3f8cddba03bcdafa1f6bff94935b06b6a5804fbdf6920e3->leave($__internal_26bea935629a3955c3f8cddba03bcdafa1f6bff94935b06b6a5804fbdf6920e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
