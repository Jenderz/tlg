<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_f489ba8cf109ea0ebc1f8f57304d007d6502bb4e5d9784f2acacb25aa06997be extends Twig_Template
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
        $__internal_7cbb99090b0e0a478a50e628a25bb9f4a84489c53b3358b7bc443961bb88a916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbb99090b0e0a478a50e628a25bb9f4a84489c53b3358b7bc443961bb88a916->enter($__internal_7cbb99090b0e0a478a50e628a25bb9f4a84489c53b3358b7bc443961bb88a916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_9eafef3129ef8633ee0c9da3c2e81b9287a2b339db703c9d924b253753e0594f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eafef3129ef8633ee0c9da3c2e81b9287a2b339db703c9d924b253753e0594f->enter($__internal_9eafef3129ef8633ee0c9da3c2e81b9287a2b339db703c9d924b253753e0594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7cbb99090b0e0a478a50e628a25bb9f4a84489c53b3358b7bc443961bb88a916->leave($__internal_7cbb99090b0e0a478a50e628a25bb9f4a84489c53b3358b7bc443961bb88a916_prof);

        
        $__internal_9eafef3129ef8633ee0c9da3c2e81b9287a2b339db703c9d924b253753e0594f->leave($__internal_9eafef3129ef8633ee0c9da3c2e81b9287a2b339db703c9d924b253753e0594f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/date_widget.html.php");
    }
}