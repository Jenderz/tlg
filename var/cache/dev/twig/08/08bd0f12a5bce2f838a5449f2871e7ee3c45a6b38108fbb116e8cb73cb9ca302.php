<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1ec2ffb958e5e356f431831396b5ddf59267d3bcc4abe714d65cd2a03e5092b1 extends Twig_Template
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
        $__internal_b8b07a266a3b8b03aa3ed06bfa2eed5ce98e6dc213a94b966c188a38241de602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b07a266a3b8b03aa3ed06bfa2eed5ce98e6dc213a94b966c188a38241de602->enter($__internal_b8b07a266a3b8b03aa3ed06bfa2eed5ce98e6dc213a94b966c188a38241de602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9209c9183f7c16006077ddceb0659edf35c49a5b6b5c1b73e94b759fa481fc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9209c9183f7c16006077ddceb0659edf35c49a5b6b5c1b73e94b759fa481fc23->enter($__internal_9209c9183f7c16006077ddceb0659edf35c49a5b6b5c1b73e94b759fa481fc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b8b07a266a3b8b03aa3ed06bfa2eed5ce98e6dc213a94b966c188a38241de602->leave($__internal_b8b07a266a3b8b03aa3ed06bfa2eed5ce98e6dc213a94b966c188a38241de602_prof);

        
        $__internal_9209c9183f7c16006077ddceb0659edf35c49a5b6b5c1b73e94b759fa481fc23->leave($__internal_9209c9183f7c16006077ddceb0659edf35c49a5b6b5c1b73e94b759fa481fc23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
