<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cb92a326a915f647c95b0f9de27fe616869bcdba230a757cb12e5ada504c9821 extends Twig_Template
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
        $__internal_3a62333fd24df6a8097f1a1ed5d771c55e76cd2f3b46dd4e37e73360c4045faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a62333fd24df6a8097f1a1ed5d771c55e76cd2f3b46dd4e37e73360c4045faf->enter($__internal_3a62333fd24df6a8097f1a1ed5d771c55e76cd2f3b46dd4e37e73360c4045faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dedfdcdd59d5e88176cab0a934cdba52df2fcf7076b9987b106ebf1a651fa5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedfdcdd59d5e88176cab0a934cdba52df2fcf7076b9987b106ebf1a651fa5e5->enter($__internal_dedfdcdd59d5e88176cab0a934cdba52df2fcf7076b9987b106ebf1a651fa5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3a62333fd24df6a8097f1a1ed5d771c55e76cd2f3b46dd4e37e73360c4045faf->leave($__internal_3a62333fd24df6a8097f1a1ed5d771c55e76cd2f3b46dd4e37e73360c4045faf_prof);

        
        $__internal_dedfdcdd59d5e88176cab0a934cdba52df2fcf7076b9987b106ebf1a651fa5e5->leave($__internal_dedfdcdd59d5e88176cab0a934cdba52df2fcf7076b9987b106ebf1a651fa5e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
