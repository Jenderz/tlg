<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e81278b7c3aaf48e965097a2c5b5a0f6791acb4b5e5191c04659d1c32ac3dd3f extends Twig_Template
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
        $__internal_e0e15d9de1b50853af34e8adf5759bf6ad04e8a19342847106460b0a54acf9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e15d9de1b50853af34e8adf5759bf6ad04e8a19342847106460b0a54acf9c3->enter($__internal_e0e15d9de1b50853af34e8adf5759bf6ad04e8a19342847106460b0a54acf9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_908ec2f30d51454d4c13b9e2528285b6502c916e8176348b18210ddd10d0a98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908ec2f30d51454d4c13b9e2528285b6502c916e8176348b18210ddd10d0a98f->enter($__internal_908ec2f30d51454d4c13b9e2528285b6502c916e8176348b18210ddd10d0a98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e0e15d9de1b50853af34e8adf5759bf6ad04e8a19342847106460b0a54acf9c3->leave($__internal_e0e15d9de1b50853af34e8adf5759bf6ad04e8a19342847106460b0a54acf9c3_prof);

        
        $__internal_908ec2f30d51454d4c13b9e2528285b6502c916e8176348b18210ddd10d0a98f->leave($__internal_908ec2f30d51454d4c13b9e2528285b6502c916e8176348b18210ddd10d0a98f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
