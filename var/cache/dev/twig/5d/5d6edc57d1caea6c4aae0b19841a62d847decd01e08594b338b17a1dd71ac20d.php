<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_faa7f8370d7c0c48e48842ad7aac7cfb1d1ad98d1a16c3fc61cd8dbdcca0b2ff extends Twig_Template
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
        $__internal_014c71a920b8b529ecb0e2e61438cf06fe0e77d5e00da7506c4ae64e555e6598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014c71a920b8b529ecb0e2e61438cf06fe0e77d5e00da7506c4ae64e555e6598->enter($__internal_014c71a920b8b529ecb0e2e61438cf06fe0e77d5e00da7506c4ae64e555e6598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_26b73a4b35eb4b3080d5a0f5e69ad2a2d5713bbb81227575206484a832176f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b73a4b35eb4b3080d5a0f5e69ad2a2d5713bbb81227575206484a832176f79->enter($__internal_26b73a4b35eb4b3080d5a0f5e69ad2a2d5713bbb81227575206484a832176f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_014c71a920b8b529ecb0e2e61438cf06fe0e77d5e00da7506c4ae64e555e6598->leave($__internal_014c71a920b8b529ecb0e2e61438cf06fe0e77d5e00da7506c4ae64e555e6598_prof);

        
        $__internal_26b73a4b35eb4b3080d5a0f5e69ad2a2d5713bbb81227575206484a832176f79->leave($__internal_26b73a4b35eb4b3080d5a0f5e69ad2a2d5713bbb81227575206484a832176f79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
