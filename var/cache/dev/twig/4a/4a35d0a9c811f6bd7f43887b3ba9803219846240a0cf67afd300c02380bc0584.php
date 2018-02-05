<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e6eea0540025286d4d9bd26281dfffad140c44c8fc7eaa527e2f176846b9ae41 extends Twig_Template
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
        $__internal_400723e4037e9be00702e03ef653fcb711c3b63153e5b66c9b5349ead6d82eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400723e4037e9be00702e03ef653fcb711c3b63153e5b66c9b5349ead6d82eda->enter($__internal_400723e4037e9be00702e03ef653fcb711c3b63153e5b66c9b5349ead6d82eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_27ea8009b8ad082887cba570869e6ca7039180daff967108c2aa6ea5707903dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ea8009b8ad082887cba570869e6ca7039180daff967108c2aa6ea5707903dd->enter($__internal_27ea8009b8ad082887cba570869e6ca7039180daff967108c2aa6ea5707903dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_400723e4037e9be00702e03ef653fcb711c3b63153e5b66c9b5349ead6d82eda->leave($__internal_400723e4037e9be00702e03ef653fcb711c3b63153e5b66c9b5349ead6d82eda_prof);

        
        $__internal_27ea8009b8ad082887cba570869e6ca7039180daff967108c2aa6ea5707903dd->leave($__internal_27ea8009b8ad082887cba570869e6ca7039180daff967108c2aa6ea5707903dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
