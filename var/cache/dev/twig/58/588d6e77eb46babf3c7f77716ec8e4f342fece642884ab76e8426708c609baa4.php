<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_51ff4725f4adab0b73fa72d3e33b4996f826826ffce24ffe98aa29519061b85c extends Twig_Template
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
        $__internal_b02eee14dc94631cea8bfc674b06bfd47df8a0b3c4a597af75ab2452236cbbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02eee14dc94631cea8bfc674b06bfd47df8a0b3c4a597af75ab2452236cbbec->enter($__internal_b02eee14dc94631cea8bfc674b06bfd47df8a0b3c4a597af75ab2452236cbbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d2b7a9823116ac6a4d4ff48e1fbf80d88ff8f654b363c3431a4267d04b162143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b7a9823116ac6a4d4ff48e1fbf80d88ff8f654b363c3431a4267d04b162143->enter($__internal_d2b7a9823116ac6a4d4ff48e1fbf80d88ff8f654b363c3431a4267d04b162143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b02eee14dc94631cea8bfc674b06bfd47df8a0b3c4a597af75ab2452236cbbec->leave($__internal_b02eee14dc94631cea8bfc674b06bfd47df8a0b3c4a597af75ab2452236cbbec_prof);

        
        $__internal_d2b7a9823116ac6a4d4ff48e1fbf80d88ff8f654b363c3431a4267d04b162143->leave($__internal_d2b7a9823116ac6a4d4ff48e1fbf80d88ff8f654b363c3431a4267d04b162143_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
