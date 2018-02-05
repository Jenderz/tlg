<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f325fe53e85e9c6d0b275e76829ca93612da6486dc9248fda8a1797b79496f5c extends Twig_Template
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
        $__internal_8f14b7132fe033d24d3ec1ba431cb428b3626d0127b2624ce5bccf1f43d023a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f14b7132fe033d24d3ec1ba431cb428b3626d0127b2624ce5bccf1f43d023a2->enter($__internal_8f14b7132fe033d24d3ec1ba431cb428b3626d0127b2624ce5bccf1f43d023a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6939a24a6d7cc5b6b959ba306183bb870399cc0eb84f95a86d833ac1bb4fec8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6939a24a6d7cc5b6b959ba306183bb870399cc0eb84f95a86d833ac1bb4fec8d->enter($__internal_6939a24a6d7cc5b6b959ba306183bb870399cc0eb84f95a86d833ac1bb4fec8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8f14b7132fe033d24d3ec1ba431cb428b3626d0127b2624ce5bccf1f43d023a2->leave($__internal_8f14b7132fe033d24d3ec1ba431cb428b3626d0127b2624ce5bccf1f43d023a2_prof);

        
        $__internal_6939a24a6d7cc5b6b959ba306183bb870399cc0eb84f95a86d833ac1bb4fec8d->leave($__internal_6939a24a6d7cc5b6b959ba306183bb870399cc0eb84f95a86d833ac1bb4fec8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
