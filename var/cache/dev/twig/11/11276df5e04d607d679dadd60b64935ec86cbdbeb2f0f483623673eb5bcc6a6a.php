<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_77a2c73ed5e2b57ee2cd7a0261e7ef0bb429af7242f78c55b8463bef95aeade6 extends Twig_Template
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
        $__internal_f043ecf0036786a6c3969aeeec9b977d43d7eceff2155fd7653fb700e8ee1d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f043ecf0036786a6c3969aeeec9b977d43d7eceff2155fd7653fb700e8ee1d23->enter($__internal_f043ecf0036786a6c3969aeeec9b977d43d7eceff2155fd7653fb700e8ee1d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ef93f239baadd37647cc709c4619cf2dfa777dea01ffea806905c2b20e558604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef93f239baadd37647cc709c4619cf2dfa777dea01ffea806905c2b20e558604->enter($__internal_ef93f239baadd37647cc709c4619cf2dfa777dea01ffea806905c2b20e558604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f043ecf0036786a6c3969aeeec9b977d43d7eceff2155fd7653fb700e8ee1d23->leave($__internal_f043ecf0036786a6c3969aeeec9b977d43d7eceff2155fd7653fb700e8ee1d23_prof);

        
        $__internal_ef93f239baadd37647cc709c4619cf2dfa777dea01ffea806905c2b20e558604->leave($__internal_ef93f239baadd37647cc709c4619cf2dfa777dea01ffea806905c2b20e558604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
