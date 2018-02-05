<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_938c8cbc913330f3eaeb4b098e6f7d7987a70b152ecde6b559d05e1effd02f93 extends Twig_Template
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
        $__internal_4f7aa7b32d9b9ae8e564cf862bd7b1da24f3f367f49f31530b7a4871d4ff6c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7aa7b32d9b9ae8e564cf862bd7b1da24f3f367f49f31530b7a4871d4ff6c1c->enter($__internal_4f7aa7b32d9b9ae8e564cf862bd7b1da24f3f367f49f31530b7a4871d4ff6c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2d520ca49773301909eed114fa6489786e6d69b0ea97c2f182206a903a822832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d520ca49773301909eed114fa6489786e6d69b0ea97c2f182206a903a822832->enter($__internal_2d520ca49773301909eed114fa6489786e6d69b0ea97c2f182206a903a822832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4f7aa7b32d9b9ae8e564cf862bd7b1da24f3f367f49f31530b7a4871d4ff6c1c->leave($__internal_4f7aa7b32d9b9ae8e564cf862bd7b1da24f3f367f49f31530b7a4871d4ff6c1c_prof);

        
        $__internal_2d520ca49773301909eed114fa6489786e6d69b0ea97c2f182206a903a822832->leave($__internal_2d520ca49773301909eed114fa6489786e6d69b0ea97c2f182206a903a822832_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
