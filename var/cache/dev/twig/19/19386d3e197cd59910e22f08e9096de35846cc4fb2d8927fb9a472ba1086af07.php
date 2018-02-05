<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0909f904017c0b5f985e0965bc1ecf3283a492fad3d85c92690f538a315f8f02 extends Twig_Template
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
        $__internal_d6cb49c610e0390330ced431378163ea6d982f96a74dc7af3b091a30a16d3f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6cb49c610e0390330ced431378163ea6d982f96a74dc7af3b091a30a16d3f90->enter($__internal_d6cb49c610e0390330ced431378163ea6d982f96a74dc7af3b091a30a16d3f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c68a58afe02eceea4f35cfc78c6cf004623346ceef225945fd1997ddd2dd0c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68a58afe02eceea4f35cfc78c6cf004623346ceef225945fd1997ddd2dd0c7e->enter($__internal_c68a58afe02eceea4f35cfc78c6cf004623346ceef225945fd1997ddd2dd0c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d6cb49c610e0390330ced431378163ea6d982f96a74dc7af3b091a30a16d3f90->leave($__internal_d6cb49c610e0390330ced431378163ea6d982f96a74dc7af3b091a30a16d3f90_prof);

        
        $__internal_c68a58afe02eceea4f35cfc78c6cf004623346ceef225945fd1997ddd2dd0c7e->leave($__internal_c68a58afe02eceea4f35cfc78c6cf004623346ceef225945fd1997ddd2dd0c7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
