<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_b90154f0ca2dbdaaf55df6716cc050a1aed9b075c2b896fdf77a4b374ecc1087 extends Twig_Template
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
        $__internal_84777fa11dffa5b0648fdd832a9a3108bb7cb89c5772df16256fb29746bb18f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84777fa11dffa5b0648fdd832a9a3108bb7cb89c5772df16256fb29746bb18f8->enter($__internal_84777fa11dffa5b0648fdd832a9a3108bb7cb89c5772df16256fb29746bb18f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_9c81acd83a52604f6dfa9e06e6e974c94aa16415e24f59e029b929373967599c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c81acd83a52604f6dfa9e06e6e974c94aa16415e24f59e029b929373967599c->enter($__internal_9c81acd83a52604f6dfa9e06e6e974c94aa16415e24f59e029b929373967599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_84777fa11dffa5b0648fdd832a9a3108bb7cb89c5772df16256fb29746bb18f8->leave($__internal_84777fa11dffa5b0648fdd832a9a3108bb7cb89c5772df16256fb29746bb18f8_prof);

        
        $__internal_9c81acd83a52604f6dfa9e06e6e974c94aa16415e24f59e029b929373967599c->leave($__internal_9c81acd83a52604f6dfa9e06e6e974c94aa16415e24f59e029b929373967599c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
