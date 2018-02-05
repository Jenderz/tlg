<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7097605e3dda0c1c95272ad179027f27b3634eba90218d54f255d221affb468c extends Twig_Template
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
        $__internal_c27737df5a1dc8400a18caf0c7628803be108d185506138b878b251b349cdf5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27737df5a1dc8400a18caf0c7628803be108d185506138b878b251b349cdf5e->enter($__internal_c27737df5a1dc8400a18caf0c7628803be108d185506138b878b251b349cdf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_508722c97318ec86de614b1a84e068eedd25a43f8507338618697ddc4b757195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508722c97318ec86de614b1a84e068eedd25a43f8507338618697ddc4b757195->enter($__internal_508722c97318ec86de614b1a84e068eedd25a43f8507338618697ddc4b757195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c27737df5a1dc8400a18caf0c7628803be108d185506138b878b251b349cdf5e->leave($__internal_c27737df5a1dc8400a18caf0c7628803be108d185506138b878b251b349cdf5e_prof);

        
        $__internal_508722c97318ec86de614b1a84e068eedd25a43f8507338618697ddc4b757195->leave($__internal_508722c97318ec86de614b1a84e068eedd25a43f8507338618697ddc4b757195_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
