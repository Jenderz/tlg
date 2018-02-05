<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4d630c7d23daf6cd4f58868748ca7b66dbe76728f464365c1dc39064c7a26223 extends Twig_Template
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
        $__internal_ea82beed02f02985a967f5235fa4dd90e86df467b02a76d2ef97041db2b2aad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea82beed02f02985a967f5235fa4dd90e86df467b02a76d2ef97041db2b2aad0->enter($__internal_ea82beed02f02985a967f5235fa4dd90e86df467b02a76d2ef97041db2b2aad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_db6920b687f54971105c9db98592aa8565deae99896343967d1a8ee3d3bc5699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6920b687f54971105c9db98592aa8565deae99896343967d1a8ee3d3bc5699->enter($__internal_db6920b687f54971105c9db98592aa8565deae99896343967d1a8ee3d3bc5699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ea82beed02f02985a967f5235fa4dd90e86df467b02a76d2ef97041db2b2aad0->leave($__internal_ea82beed02f02985a967f5235fa4dd90e86df467b02a76d2ef97041db2b2aad0_prof);

        
        $__internal_db6920b687f54971105c9db98592aa8565deae99896343967d1a8ee3d3bc5699->leave($__internal_db6920b687f54971105c9db98592aa8565deae99896343967d1a8ee3d3bc5699_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
