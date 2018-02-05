<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_6dff5298a8336ecff97fe24c935c702ac9336dea38d103fa51c18782b99d8505 extends Twig_Template
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
        $__internal_4eaec3b751b43261f84a2002fb84c185454fd97d1609e5f47699a2ee898724e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaec3b751b43261f84a2002fb84c185454fd97d1609e5f47699a2ee898724e5->enter($__internal_4eaec3b751b43261f84a2002fb84c185454fd97d1609e5f47699a2ee898724e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_88c93cd50408bd99d45296c1b8ab8b91892a86809d19ccecde150e4b0eddf7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c93cd50408bd99d45296c1b8ab8b91892a86809d19ccecde150e4b0eddf7a7->enter($__internal_88c93cd50408bd99d45296c1b8ab8b91892a86809d19ccecde150e4b0eddf7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_4eaec3b751b43261f84a2002fb84c185454fd97d1609e5f47699a2ee898724e5->leave($__internal_4eaec3b751b43261f84a2002fb84c185454fd97d1609e5f47699a2ee898724e5_prof);

        
        $__internal_88c93cd50408bd99d45296c1b8ab8b91892a86809d19ccecde150e4b0eddf7a7->leave($__internal_88c93cd50408bd99d45296c1b8ab8b91892a86809d19ccecde150e4b0eddf7a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/proyecto/vendor/symfony/framework-bundle/Resources/views/Form/range_widget.html.php");
    }
}
