<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_044357b4b4e1a0b47cca76af61f25f5784fd90ea0e2943909455cf283d1c627a extends Twig_Template
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
        $__internal_cd00d07a775652451484a84ef0692506b38f550190af873e3177e87ea6260f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd00d07a775652451484a84ef0692506b38f550190af873e3177e87ea6260f28->enter($__internal_cd00d07a775652451484a84ef0692506b38f550190af873e3177e87ea6260f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2654e91208489802a822c57253ba36a629a4fbcc8d784fab16d8af32db660c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2654e91208489802a822c57253ba36a629a4fbcc8d784fab16d8af32db660c19->enter($__internal_2654e91208489802a822c57253ba36a629a4fbcc8d784fab16d8af32db660c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cd00d07a775652451484a84ef0692506b38f550190af873e3177e87ea6260f28->leave($__internal_cd00d07a775652451484a84ef0692506b38f550190af873e3177e87ea6260f28_prof);

        
        $__internal_2654e91208489802a822c57253ba36a629a4fbcc8d784fab16d8af32db660c19->leave($__internal_2654e91208489802a822c57253ba36a629a4fbcc8d784fab16d8af32db660c19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
