<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0525197a6997c9a78edde0a90befcbc122d435afffaa02a49cebbaf01644862d extends Twig_Template
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
        $__internal_18a64126ed3a231364eca0deb0aa998663dfebb48e48d82990aa5406898478df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a64126ed3a231364eca0deb0aa998663dfebb48e48d82990aa5406898478df->enter($__internal_18a64126ed3a231364eca0deb0aa998663dfebb48e48d82990aa5406898478df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3760fcc473ebe8710f865cf42690cb44a3e75c9040ef873e5d23d167da1a654d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3760fcc473ebe8710f865cf42690cb44a3e75c9040ef873e5d23d167da1a654d->enter($__internal_3760fcc473ebe8710f865cf42690cb44a3e75c9040ef873e5d23d167da1a654d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_18a64126ed3a231364eca0deb0aa998663dfebb48e48d82990aa5406898478df->leave($__internal_18a64126ed3a231364eca0deb0aa998663dfebb48e48d82990aa5406898478df_prof);

        
        $__internal_3760fcc473ebe8710f865cf42690cb44a3e75c9040ef873e5d23d167da1a654d->leave($__internal_3760fcc473ebe8710f865cf42690cb44a3e75c9040ef873e5d23d167da1a654d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
