<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_339f17fdb92bb615ac7df8fd108215259a46a081fe0cfff7e3c4246e1dc5b3a5 extends Twig_Template
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
        $__internal_6c52e3aec275ee1120f0f52588a3df1c46c64eba2854b46a4965ef703d4b7f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c52e3aec275ee1120f0f52588a3df1c46c64eba2854b46a4965ef703d4b7f41->enter($__internal_6c52e3aec275ee1120f0f52588a3df1c46c64eba2854b46a4965ef703d4b7f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1b8d559fdda1c9a810d120b1b1e5723e1f7f39b3f96a5bdd187b98b5f235c900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8d559fdda1c9a810d120b1b1e5723e1f7f39b3f96a5bdd187b98b5f235c900->enter($__internal_1b8d559fdda1c9a810d120b1b1e5723e1f7f39b3f96a5bdd187b98b5f235c900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6c52e3aec275ee1120f0f52588a3df1c46c64eba2854b46a4965ef703d4b7f41->leave($__internal_6c52e3aec275ee1120f0f52588a3df1c46c64eba2854b46a4965ef703d4b7f41_prof);

        
        $__internal_1b8d559fdda1c9a810d120b1b1e5723e1f7f39b3f96a5bdd187b98b5f235c900->leave($__internal_1b8d559fdda1c9a810d120b1b1e5723e1f7f39b3f96a5bdd187b98b5f235c900_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
