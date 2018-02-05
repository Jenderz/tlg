<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_eebfeae7436574597b67944870869bf06db1de44740c4935f196ab60087c8c01 extends Twig_Template
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
        $__internal_a9bf57055a28613f670e1763434b05790b344fdee6b848f1f1f70a0b3ff5e347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bf57055a28613f670e1763434b05790b344fdee6b848f1f1f70a0b3ff5e347->enter($__internal_a9bf57055a28613f670e1763434b05790b344fdee6b848f1f1f70a0b3ff5e347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a476ad8ba71252ce21e0850c61e07fcb698ae0fa526beec9726aa48fca462fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a476ad8ba71252ce21e0850c61e07fcb698ae0fa526beec9726aa48fca462fa4->enter($__internal_a476ad8ba71252ce21e0850c61e07fcb698ae0fa526beec9726aa48fca462fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a9bf57055a28613f670e1763434b05790b344fdee6b848f1f1f70a0b3ff5e347->leave($__internal_a9bf57055a28613f670e1763434b05790b344fdee6b848f1f1f70a0b3ff5e347_prof);

        
        $__internal_a476ad8ba71252ce21e0850c61e07fcb698ae0fa526beec9726aa48fca462fa4->leave($__internal_a476ad8ba71252ce21e0850c61e07fcb698ae0fa526beec9726aa48fca462fa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
