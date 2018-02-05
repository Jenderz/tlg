<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ac1f94dce311d1de86900c411cfa293d603979ca912ba6b581a11d5378eb505f extends Twig_Template
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
        $__internal_f1f5a1f10880d6647912a8894326d4bee6c11a238524c0cfeec74e5dc0fab2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f5a1f10880d6647912a8894326d4bee6c11a238524c0cfeec74e5dc0fab2da->enter($__internal_f1f5a1f10880d6647912a8894326d4bee6c11a238524c0cfeec74e5dc0fab2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_db96bc9a4c17e9e5b5423999ad236957a90080d04c9fa2b0a033c9afff63688d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db96bc9a4c17e9e5b5423999ad236957a90080d04c9fa2b0a033c9afff63688d->enter($__internal_db96bc9a4c17e9e5b5423999ad236957a90080d04c9fa2b0a033c9afff63688d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f1f5a1f10880d6647912a8894326d4bee6c11a238524c0cfeec74e5dc0fab2da->leave($__internal_f1f5a1f10880d6647912a8894326d4bee6c11a238524c0cfeec74e5dc0fab2da_prof);

        
        $__internal_db96bc9a4c17e9e5b5423999ad236957a90080d04c9fa2b0a033c9afff63688d->leave($__internal_db96bc9a4c17e9e5b5423999ad236957a90080d04c9fa2b0a033c9afff63688d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
