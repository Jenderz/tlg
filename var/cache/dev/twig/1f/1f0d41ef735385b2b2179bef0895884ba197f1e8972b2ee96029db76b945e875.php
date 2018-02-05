<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4097e18b0213a99ab32fe255f7d00e330bb322660985c5fb33c78f2ddab96a46 extends Twig_Template
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
        $__internal_574be721061a614114d6959c600a2f31293f3db1b5660d08f5d6191a240ab702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574be721061a614114d6959c600a2f31293f3db1b5660d08f5d6191a240ab702->enter($__internal_574be721061a614114d6959c600a2f31293f3db1b5660d08f5d6191a240ab702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_602ad841bbe742844ccd9415331071be944eb91dba228d57bb8e34f53c3bd77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602ad841bbe742844ccd9415331071be944eb91dba228d57bb8e34f53c3bd77e->enter($__internal_602ad841bbe742844ccd9415331071be944eb91dba228d57bb8e34f53c3bd77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_574be721061a614114d6959c600a2f31293f3db1b5660d08f5d6191a240ab702->leave($__internal_574be721061a614114d6959c600a2f31293f3db1b5660d08f5d6191a240ab702_prof);

        
        $__internal_602ad841bbe742844ccd9415331071be944eb91dba228d57bb8e34f53c3bd77e->leave($__internal_602ad841bbe742844ccd9415331071be944eb91dba228d57bb8e34f53c3bd77e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
