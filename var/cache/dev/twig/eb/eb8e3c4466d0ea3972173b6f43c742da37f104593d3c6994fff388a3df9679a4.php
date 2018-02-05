<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_73426245307019a6a6097764afd7ecc4a8626e8bdfa39beef4f63134d645f385 extends Twig_Template
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
        $__internal_5859819e745bbecf689f18e24d9a95d3b2f3b394414f3ef789d047e617ac8eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5859819e745bbecf689f18e24d9a95d3b2f3b394414f3ef789d047e617ac8eb6->enter($__internal_5859819e745bbecf689f18e24d9a95d3b2f3b394414f3ef789d047e617ac8eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_61cfecefc8529541c712086a2c60112f262e02c13272cbb5f18af758d8e13074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cfecefc8529541c712086a2c60112f262e02c13272cbb5f18af758d8e13074->enter($__internal_61cfecefc8529541c712086a2c60112f262e02c13272cbb5f18af758d8e13074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5859819e745bbecf689f18e24d9a95d3b2f3b394414f3ef789d047e617ac8eb6->leave($__internal_5859819e745bbecf689f18e24d9a95d3b2f3b394414f3ef789d047e617ac8eb6_prof);

        
        $__internal_61cfecefc8529541c712086a2c60112f262e02c13272cbb5f18af758d8e13074->leave($__internal_61cfecefc8529541c712086a2c60112f262e02c13272cbb5f18af758d8e13074_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
