<?php

/* user/password-reset.html.twig */
class __TwigTemplate_9a9c057d74cc795bb464e4e699ea932ecea5b89841d31c5c310ff6b31783d73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/password-reset.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a33a521adb08990003246750ac9b84e5aeb6f06244b1c646326d79e060de6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a33a521adb08990003246750ac9b84e5aeb6f06244b1c646326d79e060de6a6->enter($__internal_6a33a521adb08990003246750ac9b84e5aeb6f06244b1c646326d79e060de6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password-reset.html.twig"));

        $__internal_5c339655a3fdbeccf1aa395e7a652e41d03bff3401c15842d34516782eae8d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c339655a3fdbeccf1aa395e7a652e41d03bff3401c15842d34516782eae8d10->enter($__internal_5c339655a3fdbeccf1aa395e7a652e41d03bff3401c15842d34516782eae8d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/password-reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a33a521adb08990003246750ac9b84e5aeb6f06244b1c646326d79e060de6a6->leave($__internal_6a33a521adb08990003246750ac9b84e5aeb6f06244b1c646326d79e060de6a6_prof);

        
        $__internal_5c339655a3fdbeccf1aa395e7a652e41d03bff3401c15842d34516782eae8d10->leave($__internal_5c339655a3fdbeccf1aa395e7a652e41d03bff3401c15842d34516782eae8d10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53cdcf9ad4bee6cbd9735d92776fd96af8b7cfae3e21c72cc45d33c02bc1f88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cdcf9ad4bee6cbd9735d92776fd96af8b7cfae3e21c72cc45d33c02bc1f88b->enter($__internal_53cdcf9ad4bee6cbd9735d92776fd96af8b7cfae3e21c72cc45d33c02bc1f88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31e76393795ec2e35e30261fccbf412a5b5141f1ac2660da8fdd42fa79424d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e76393795ec2e35e30261fccbf412a5b5141f1ac2660da8fdd42fa79424d59->enter($__internal_31e76393795ec2e35e30261fccbf412a5b5141f1ac2660da8fdd42fa79424d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.reset-password"), "html", null, true);
        echo "</h1>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
                
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "password", array()), "first", array()), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "password", array()), "second", array()), 'row');
        echo "

                <button type=\"submit\" class=\"btn btn-default  btn-primary\" formnovalidate>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.save"), "html", null, true);
        echo "</button>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_31e76393795ec2e35e30261fccbf412a5b5141f1ac2660da8fdd42fa79424d59->leave($__internal_31e76393795ec2e35e30261fccbf412a5b5141f1ac2660da8fdd42fa79424d59_prof);

        
        $__internal_53cdcf9ad4bee6cbd9735d92776fd96af8b7cfae3e21c72cc45d33c02bc1f88b->leave($__internal_53cdcf9ad4bee6cbd9735d92776fd96af8b7cfae3e21c72cc45d33c02bc1f88b_prof);

    }

    public function getTemplateName()
    {
        return "user/password-reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  72 => 13,  67 => 11,  63 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>{{ 'user.reset-password'|trans }}</h1>
                {{ form_start(form) }}
                
                {{ form_row(form.password.first) }}
                {{ form_row(form.password.second) }}

                <button type=\"submit\" class=\"btn btn-default  btn-primary\" formnovalidate>{{ 'button.save'|trans }}</button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "user/password-reset.html.twig", "/var/www/proyecto/templates/user/password-reset.html.twig");
    }
}
