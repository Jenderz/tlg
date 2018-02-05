<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_9171de123528cdff34dd3aac00b124c0a05176c07c8dd19c8be47599c0ce5a31 extends Twig_Template
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
        $__internal_47983fbd0ec69e658d967a8358844ea0c1d2976922558b9a81489fcea4a4f013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47983fbd0ec69e658d967a8358844ea0c1d2976922558b9a81489fcea4a4f013->enter($__internal_47983fbd0ec69e658d967a8358844ea0c1d2976922558b9a81489fcea4a4f013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_253c14ecd8ede078c13384e0b3202ee9bdf7d22ed8d7088c059b774a64afcb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253c14ecd8ede078c13384e0b3202ee9bdf7d22ed8d7088c059b774a64afcb20->enter($__internal_253c14ecd8ede078c13384e0b3202ee9bdf7d22ed8d7088c059b774a64afcb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_47983fbd0ec69e658d967a8358844ea0c1d2976922558b9a81489fcea4a4f013->leave($__internal_47983fbd0ec69e658d967a8358844ea0c1d2976922558b9a81489fcea4a4f013_prof);

        
        $__internal_253c14ecd8ede078c13384e0b3202ee9bdf7d22ed8d7088c059b774a64afcb20->leave($__internal_253c14ecd8ede078c13384e0b3202ee9bdf7d22ed8d7088c059b774a64afcb20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
