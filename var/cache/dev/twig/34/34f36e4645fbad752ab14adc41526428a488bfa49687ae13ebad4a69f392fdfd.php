<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_81574cf76c20a0d15dcd2b132acad9c51110d43de6141e969a2d9185a1b5fe76 extends Twig_Template
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
        $__internal_7285d0560c74bed6695767599412ae1ca8d15c2b4f19552cb0cc9db260c4906c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7285d0560c74bed6695767599412ae1ca8d15c2b4f19552cb0cc9db260c4906c->enter($__internal_7285d0560c74bed6695767599412ae1ca8d15c2b4f19552cb0cc9db260c4906c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0b522fb1749aa4654fdcae2bafacf1de134af649fb818c70c0679a98aedb8b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b522fb1749aa4654fdcae2bafacf1de134af649fb818c70c0679a98aedb8b3c->enter($__internal_0b522fb1749aa4654fdcae2bafacf1de134af649fb818c70c0679a98aedb8b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7285d0560c74bed6695767599412ae1ca8d15c2b4f19552cb0cc9db260c4906c->leave($__internal_7285d0560c74bed6695767599412ae1ca8d15c2b4f19552cb0cc9db260c4906c_prof);

        
        $__internal_0b522fb1749aa4654fdcae2bafacf1de134af649fb818c70c0679a98aedb8b3c->leave($__internal_0b522fb1749aa4654fdcae2bafacf1de134af649fb818c70c0679a98aedb8b3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
