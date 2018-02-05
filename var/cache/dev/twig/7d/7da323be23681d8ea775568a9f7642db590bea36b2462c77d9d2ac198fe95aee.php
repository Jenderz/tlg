<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_61d845249eaf96cbfebc0935cf7c49ab82d3478a2194143f9c59115c6277045c extends Twig_Template
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
        $__internal_d6ee5e370ed5c44355b3ffca0054f8590d0d9827ca9de8abfee5a028f7b48a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ee5e370ed5c44355b3ffca0054f8590d0d9827ca9de8abfee5a028f7b48a35->enter($__internal_d6ee5e370ed5c44355b3ffca0054f8590d0d9827ca9de8abfee5a028f7b48a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_078e5a43a511d201e10a5515808002b407d86760c11033a7330b2daf92173745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078e5a43a511d201e10a5515808002b407d86760c11033a7330b2daf92173745->enter($__internal_078e5a43a511d201e10a5515808002b407d86760c11033a7330b2daf92173745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_d6ee5e370ed5c44355b3ffca0054f8590d0d9827ca9de8abfee5a028f7b48a35->leave($__internal_d6ee5e370ed5c44355b3ffca0054f8590d0d9827ca9de8abfee5a028f7b48a35_prof);

        
        $__internal_078e5a43a511d201e10a5515808002b407d86760c11033a7330b2daf92173745->leave($__internal_078e5a43a511d201e10a5515808002b407d86760c11033a7330b2daf92173745_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
