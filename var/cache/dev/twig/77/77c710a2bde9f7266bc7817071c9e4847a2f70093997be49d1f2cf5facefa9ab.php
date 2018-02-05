<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4377c31aef4749b8aac3a4417121b8e51674ac32a076702e275b637cd058419d extends Twig_Template
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
        $__internal_aa3ea47892f41898abe63a09e2714d07f8042d85ca791bb6d2023109023a8797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3ea47892f41898abe63a09e2714d07f8042d85ca791bb6d2023109023a8797->enter($__internal_aa3ea47892f41898abe63a09e2714d07f8042d85ca791bb6d2023109023a8797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_bc364f99761d0924627336dcc2b0a18511eb181a18171aae4c82e97dc4eb1b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc364f99761d0924627336dcc2b0a18511eb181a18171aae4c82e97dc4eb1b25->enter($__internal_bc364f99761d0924627336dcc2b0a18511eb181a18171aae4c82e97dc4eb1b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aa3ea47892f41898abe63a09e2714d07f8042d85ca791bb6d2023109023a8797->leave($__internal_aa3ea47892f41898abe63a09e2714d07f8042d85ca791bb6d2023109023a8797_prof);

        
        $__internal_bc364f99761d0924627336dcc2b0a18511eb181a18171aae4c82e97dc4eb1b25->leave($__internal_bc364f99761d0924627336dcc2b0a18511eb181a18171aae4c82e97dc4eb1b25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
