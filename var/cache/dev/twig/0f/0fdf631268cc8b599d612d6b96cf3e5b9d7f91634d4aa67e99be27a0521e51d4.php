<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_553e1d77f239552a60a17359a9ee564afb841ad5c69f0a79c27ef8481ce9655d extends Twig_Template
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
        $__internal_6cc433268ef23d98aeb2b0ed992fb697645de37ab127cf4fc1ebcb27840f1a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc433268ef23d98aeb2b0ed992fb697645de37ab127cf4fc1ebcb27840f1a86->enter($__internal_6cc433268ef23d98aeb2b0ed992fb697645de37ab127cf4fc1ebcb27840f1a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1fda654ba4fbc9ba1a15b4a6f8bccd475a08d202d8547361e5554881e7c8d200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fda654ba4fbc9ba1a15b4a6f8bccd475a08d202d8547361e5554881e7c8d200->enter($__internal_1fda654ba4fbc9ba1a15b4a6f8bccd475a08d202d8547361e5554881e7c8d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6cc433268ef23d98aeb2b0ed992fb697645de37ab127cf4fc1ebcb27840f1a86->leave($__internal_6cc433268ef23d98aeb2b0ed992fb697645de37ab127cf4fc1ebcb27840f1a86_prof);

        
        $__internal_1fda654ba4fbc9ba1a15b4a6f8bccd475a08d202d8547361e5554881e7c8d200->leave($__internal_1fda654ba4fbc9ba1a15b4a6f8bccd475a08d202d8547361e5554881e7c8d200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
