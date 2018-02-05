<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4fa79b0f3a050fb1b405ac5f65188829b9ef4b580a263dacf2074a6c9745f42b extends Twig_Template
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
        $__internal_6605c18d7d88c05b5ea438baac4c9e98eedab8a9f4c72933875c2df8d8b2c3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6605c18d7d88c05b5ea438baac4c9e98eedab8a9f4c72933875c2df8d8b2c3b3->enter($__internal_6605c18d7d88c05b5ea438baac4c9e98eedab8a9f4c72933875c2df8d8b2c3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9a5e32121414cd422e3ab106618bc280c5ff5e4e1e9cea566abf2113593e07a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5e32121414cd422e3ab106618bc280c5ff5e4e1e9cea566abf2113593e07a5->enter($__internal_9a5e32121414cd422e3ab106618bc280c5ff5e4e1e9cea566abf2113593e07a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6605c18d7d88c05b5ea438baac4c9e98eedab8a9f4c72933875c2df8d8b2c3b3->leave($__internal_6605c18d7d88c05b5ea438baac4c9e98eedab8a9f4c72933875c2df8d8b2c3b3_prof);

        
        $__internal_9a5e32121414cd422e3ab106618bc280c5ff5e4e1e9cea566abf2113593e07a5->leave($__internal_9a5e32121414cd422e3ab106618bc280c5ff5e4e1e9cea566abf2113593e07a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
