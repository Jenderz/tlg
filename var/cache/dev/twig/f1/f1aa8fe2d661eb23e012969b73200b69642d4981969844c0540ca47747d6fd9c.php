<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_464520dd431c87cdb62f33302eef5d1c9d5b9b3874f0337ca9366d6e12f8c7da extends Twig_Template
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
        $__internal_9abf84069cf6a7a831b6e85202e986592f2f7a9ca3c20cc3fc820806c7465585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abf84069cf6a7a831b6e85202e986592f2f7a9ca3c20cc3fc820806c7465585->enter($__internal_9abf84069cf6a7a831b6e85202e986592f2f7a9ca3c20cc3fc820806c7465585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7bcd91f65df051f825c81267dd297c58664a80be5c9a9722501ff8fdceb04e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcd91f65df051f825c81267dd297c58664a80be5c9a9722501ff8fdceb04e24->enter($__internal_7bcd91f65df051f825c81267dd297c58664a80be5c9a9722501ff8fdceb04e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9abf84069cf6a7a831b6e85202e986592f2f7a9ca3c20cc3fc820806c7465585->leave($__internal_9abf84069cf6a7a831b6e85202e986592f2f7a9ca3c20cc3fc820806c7465585_prof);

        
        $__internal_7bcd91f65df051f825c81267dd297c58664a80be5c9a9722501ff8fdceb04e24->leave($__internal_7bcd91f65df051f825c81267dd297c58664a80be5c9a9722501ff8fdceb04e24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
