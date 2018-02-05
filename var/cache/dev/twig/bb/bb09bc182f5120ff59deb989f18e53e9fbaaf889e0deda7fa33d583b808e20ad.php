<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4f15fb557d142b96170c1b44aa0ff44785e92b4e739e65d8257d2246b3c478d7 extends Twig_Template
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
        $__internal_8bea6cf979c6b7b2bdf325cb5705bce38a547028aa93065e39958f45d81e89b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bea6cf979c6b7b2bdf325cb5705bce38a547028aa93065e39958f45d81e89b2->enter($__internal_8bea6cf979c6b7b2bdf325cb5705bce38a547028aa93065e39958f45d81e89b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0c0a7e5d4e286269370b8eec7625f3d96329fcd7d74cdb16aa35a48f3f7d96b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0a7e5d4e286269370b8eec7625f3d96329fcd7d74cdb16aa35a48f3f7d96b1->enter($__internal_0c0a7e5d4e286269370b8eec7625f3d96329fcd7d74cdb16aa35a48f3f7d96b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8bea6cf979c6b7b2bdf325cb5705bce38a547028aa93065e39958f45d81e89b2->leave($__internal_8bea6cf979c6b7b2bdf325cb5705bce38a547028aa93065e39958f45d81e89b2_prof);

        
        $__internal_0c0a7e5d4e286269370b8eec7625f3d96329fcd7d74cdb16aa35a48f3f7d96b1->leave($__internal_0c0a7e5d4e286269370b8eec7625f3d96329fcd7d74cdb16aa35a48f3f7d96b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
