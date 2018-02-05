<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_55cfd4a943bb27fca9726ef13a5ae967e8a3f097f9f793a7b482493b31aed596 extends Twig_Template
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
        $__internal_e4865160c4c8ce8b8e4f3034c51552c09fafe95694a7037b5aeb2c860a98405b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4865160c4c8ce8b8e4f3034c51552c09fafe95694a7037b5aeb2c860a98405b->enter($__internal_e4865160c4c8ce8b8e4f3034c51552c09fafe95694a7037b5aeb2c860a98405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_df6d95491bc0aa11f62b21b3b1ddda244df3168b792476332f886d3a42b1fd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6d95491bc0aa11f62b21b3b1ddda244df3168b792476332f886d3a42b1fd85->enter($__internal_df6d95491bc0aa11f62b21b3b1ddda244df3168b792476332f886d3a42b1fd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e4865160c4c8ce8b8e4f3034c51552c09fafe95694a7037b5aeb2c860a98405b->leave($__internal_e4865160c4c8ce8b8e4f3034c51552c09fafe95694a7037b5aeb2c860a98405b_prof);

        
        $__internal_df6d95491bc0aa11f62b21b3b1ddda244df3168b792476332f886d3a42b1fd85->leave($__internal_df6d95491bc0aa11f62b21b3b1ddda244df3168b792476332f886d3a42b1fd85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
