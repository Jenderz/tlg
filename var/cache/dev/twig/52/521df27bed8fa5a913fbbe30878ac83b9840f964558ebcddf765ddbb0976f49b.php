<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d8fba15759a0c6206f6d6799a07053d414ce85a8854047ad567838daebedc6e3 extends Twig_Template
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
        $__internal_8cecceb1b079dec5de878325648d27df0dfcf8146416936d63bc931609ec1751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cecceb1b079dec5de878325648d27df0dfcf8146416936d63bc931609ec1751->enter($__internal_8cecceb1b079dec5de878325648d27df0dfcf8146416936d63bc931609ec1751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_12ffccb3941c2c595d4de0e6e49228b65d309b9d7da2cfbfbfde32d35c146e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ffccb3941c2c595d4de0e6e49228b65d309b9d7da2cfbfbfde32d35c146e41->enter($__internal_12ffccb3941c2c595d4de0e6e49228b65d309b9d7da2cfbfbfde32d35c146e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8cecceb1b079dec5de878325648d27df0dfcf8146416936d63bc931609ec1751->leave($__internal_8cecceb1b079dec5de878325648d27df0dfcf8146416936d63bc931609ec1751_prof);

        
        $__internal_12ffccb3941c2c595d4de0e6e49228b65d309b9d7da2cfbfbfde32d35c146e41->leave($__internal_12ffccb3941c2c595d4de0e6e49228b65d309b9d7da2cfbfbfde32d35c146e41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
