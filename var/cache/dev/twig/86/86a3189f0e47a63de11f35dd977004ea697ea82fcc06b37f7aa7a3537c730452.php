<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_df8ab8244ea1c7e2da88160008f0331737289b4e23d18b3a55e596845d8e5d52 extends Twig_Template
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
        $__internal_d43e6b20395782bd2b37f661783d258e4ea715581e6b48eb30b897e8f66c0c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43e6b20395782bd2b37f661783d258e4ea715581e6b48eb30b897e8f66c0c7a->enter($__internal_d43e6b20395782bd2b37f661783d258e4ea715581e6b48eb30b897e8f66c0c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6d46c51ef78aea8a75230b4def7a3222b478af898d742f2c1ce44498767d31b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d46c51ef78aea8a75230b4def7a3222b478af898d742f2c1ce44498767d31b7->enter($__internal_6d46c51ef78aea8a75230b4def7a3222b478af898d742f2c1ce44498767d31b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d43e6b20395782bd2b37f661783d258e4ea715581e6b48eb30b897e8f66c0c7a->leave($__internal_d43e6b20395782bd2b37f661783d258e4ea715581e6b48eb30b897e8f66c0c7a_prof);

        
        $__internal_6d46c51ef78aea8a75230b4def7a3222b478af898d742f2c1ce44498767d31b7->leave($__internal_6d46c51ef78aea8a75230b4def7a3222b478af898d742f2c1ce44498767d31b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
