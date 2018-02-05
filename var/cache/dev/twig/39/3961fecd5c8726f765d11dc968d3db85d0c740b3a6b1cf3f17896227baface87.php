<?php

/* user/edit.html.twig */
class __TwigTemplate_936a16af0b1697f2e86cdab9704b5a3bcf7bea28fabbcc48d97f0d0d6f5a950a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8818b061e905404f8bef664c4537af1a98f5aaf4e5b056c0ec677b5b8ccd01f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8818b061e905404f8bef664c4537af1a98f5aaf4e5b056c0ec677b5b8ccd01f1->enter($__internal_8818b061e905404f8bef664c4537af1a98f5aaf4e5b056c0ec677b5b8ccd01f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_51449196902c473c711ebb0ea825e001890476cca72caf6877c40782fcb1ff79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51449196902c473c711ebb0ea825e001890476cca72caf6877c40782fcb1ff79->enter($__internal_51449196902c473c711ebb0ea825e001890476cca72caf6877c40782fcb1ff79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8818b061e905404f8bef664c4537af1a98f5aaf4e5b056c0ec677b5b8ccd01f1->leave($__internal_8818b061e905404f8bef664c4537af1a98f5aaf4e5b056c0ec677b5b8ccd01f1_prof);

        
        $__internal_51449196902c473c711ebb0ea825e001890476cca72caf6877c40782fcb1ff79->leave($__internal_51449196902c473c711ebb0ea825e001890476cca72caf6877c40782fcb1ff79_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a566da79b9af5cb500c8bfcbb9f243e4904bb1685e9dddadc3c7fe417a0c6210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a566da79b9af5cb500c8bfcbb9f243e4904bb1685e9dddadc3c7fe417a0c6210->enter($__internal_a566da79b9af5cb500c8bfcbb9f243e4904bb1685e9dddadc3c7fe417a0c6210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_78d867d85e94ed7489ac06ee52760d8effe5f2146b650d0342c568b449b96d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d867d85e94ed7489ac06ee52760d8effe5f2146b650d0342c568b449b96d4b->enter($__internal_78d867d85e94ed7489ac06ee52760d8effe5f2146b650d0342c568b449b96d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.edit"), "html", null, true);
        echo "</h1>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "

                <div class=\"form-group\">
                    <label class=\"control-label\">E-mail</label>
                    <p class=\"form-control-static\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                </div>

                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "password", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "

                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\" formnovalidate>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button.save"), "html", null, true);
        echo "</button>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_78d867d85e94ed7489ac06ee52760d8effe5f2146b650d0342c568b449b96d4b->leave($__internal_78d867d85e94ed7489ac06ee52760d8effe5f2146b650d0342c568b449b96d4b_prof);

        
        $__internal_a566da79b9af5cb500c8bfcbb9f243e4904bb1685e9dddadc3c7fe417a0c6210->leave($__internal_a566da79b9af5cb500c8bfcbb9f243e4904bb1685e9dddadc3c7fe417a0c6210_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  80 => 18,  75 => 16,  71 => 15,  65 => 12,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>{{ 'user.edit'|trans }}</h1>
                {{ form_start(form) }}

                <div class=\"form-group\">
                    <label class=\"control-label\">E-mail</label>
                    <p class=\"form-control-static\">{{ app.user.email }}</p>
                </div>

                {{ form_row(form.password) }}
                {{ form_row(form.name) }}

                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\" formnovalidate>{{ 'button.save'|trans }}</button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "user/edit.html.twig", "/var/www/proyecto/templates/user/edit.html.twig");
    }
}
