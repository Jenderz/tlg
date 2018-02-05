<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7157e6050c1bf18c8aec42597ff9317f3490cec1290279466131d531dabba6d9 extends Twig_Template
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
        $__internal_73f38deee960af8097940184764cf24304ca7cbc9c4f94e9badb862e46099925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f38deee960af8097940184764cf24304ca7cbc9c4f94e9badb862e46099925->enter($__internal_73f38deee960af8097940184764cf24304ca7cbc9c4f94e9badb862e46099925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5cc4cf5475cc357eaff93fe5eb0eebaeaff3135a954b048a1a50c8528e36e774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc4cf5475cc357eaff93fe5eb0eebaeaff3135a954b048a1a50c8528e36e774->enter($__internal_5cc4cf5475cc357eaff93fe5eb0eebaeaff3135a954b048a1a50c8528e36e774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_73f38deee960af8097940184764cf24304ca7cbc9c4f94e9badb862e46099925->leave($__internal_73f38deee960af8097940184764cf24304ca7cbc9c4f94e9badb862e46099925_prof);

        
        $__internal_5cc4cf5475cc357eaff93fe5eb0eebaeaff3135a954b048a1a50c8528e36e774->leave($__internal_5cc4cf5475cc357eaff93fe5eb0eebaeaff3135a954b048a1a50c8528e36e774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
