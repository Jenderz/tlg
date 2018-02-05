<?php

/* user/request-password-reset.html.twig */
class __TwigTemplate_54e86feae7f932e05d4cba0f215916cd6c04166f7924a27871047df9577ce367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/request-password-reset.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17388cb1af5af99b5f3a3b979e70451e5e93ac463f7758a0030b30aca8fe894a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17388cb1af5af99b5f3a3b979e70451e5e93ac463f7758a0030b30aca8fe894a->enter($__internal_17388cb1af5af99b5f3a3b979e70451e5e93ac463f7758a0030b30aca8fe894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/request-password-reset.html.twig"));

        $__internal_d6a3371ff5449c59d0d7d0a31457367292b4e567165008fe11e97a9dad35d019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a3371ff5449c59d0d7d0a31457367292b4e567165008fe11e97a9dad35d019->enter($__internal_d6a3371ff5449c59d0d7d0a31457367292b4e567165008fe11e97a9dad35d019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/request-password-reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17388cb1af5af99b5f3a3b979e70451e5e93ac463f7758a0030b30aca8fe894a->leave($__internal_17388cb1af5af99b5f3a3b979e70451e5e93ac463f7758a0030b30aca8fe894a_prof);

        
        $__internal_d6a3371ff5449c59d0d7d0a31457367292b4e567165008fe11e97a9dad35d019->leave($__internal_d6a3371ff5449c59d0d7d0a31457367292b4e567165008fe11e97a9dad35d019_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_89e92671162afb0f7ce9e8d89325e374c325e44221702af6fd599ea70be62886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e92671162afb0f7ce9e8d89325e374c325e44221702af6fd599ea70be62886->enter($__internal_89e92671162afb0f7ce9e8d89325e374c325e44221702af6fd599ea70be62886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0203565d1a5939a0907d48f9152e74a59fb7916db4732f5f8d2081ec78138d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0203565d1a5939a0907d48f9152e74a59fb7916db4732f5f8d2081ec78138d8f->enter($__internal_0203565d1a5939a0907d48f9152e74a59fb7916db4732f5f8d2081ec78138d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.reset-password"), "html", null, true);
        echo "</h1>

                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "_username", array()), 'row');
        echo "

                <br>

                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\" formnovalidate>Reset password</button>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_0203565d1a5939a0907d48f9152e74a59fb7916db4732f5f8d2081ec78138d8f->leave($__internal_0203565d1a5939a0907d48f9152e74a59fb7916db4732f5f8d2081ec78138d8f_prof);

        
        $__internal_89e92671162afb0f7ce9e8d89325e374c325e44221702af6fd599ea70be62886->leave($__internal_89e92671162afb0f7ce9e8d89325e374c325e44221702af6fd599ea70be62886_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_609172ee4f01b074256008c87f47acc65ddc2626bbd021d11c2cdc1d2d7fa58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609172ee4f01b074256008c87f47acc65ddc2626bbd021d11c2cdc1d2d7fa58e->enter($__internal_609172ee4f01b074256008c87f47acc65ddc2626bbd021d11c2cdc1d2d7fa58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c9bb80e27b3303c78774404056030c2d9f6aea69baf37ce90c1e03705aaad338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bb80e27b3303c78774404056030c2d9f6aea69baf37ce90c1e03705aaad338->enter($__internal_c9bb80e27b3303c78774404056030c2d9f6aea69baf37ce90c1e03705aaad338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='//www.google.com/recaptcha/api.js?hl=";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "'></script>
";
        
        $__internal_c9bb80e27b3303c78774404056030c2d9f6aea69baf37ce90c1e03705aaad338->leave($__internal_c9bb80e27b3303c78774404056030c2d9f6aea69baf37ce90c1e03705aaad338_prof);

        
        $__internal_609172ee4f01b074256008c87f47acc65ddc2626bbd021d11c2cdc1d2d7fa58e->leave($__internal_609172ee4f01b074256008c87f47acc65ddc2626bbd021d11c2cdc1d2d7fa58e_prof);

    }

    public function getTemplateName()
    {
        return "user/request-password-reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  101 => 24,  92 => 23,  76 => 16,  68 => 11,  64 => 10,  60 => 9,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>{{ 'user.reset-password'|trans }}</h1>

                {{ form_start(form) }}
                {{ form_errors(form) }}
                {{ form_row(form._username) }}

                <br>

                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\" formnovalidate>Reset password</button>
                {{ form_end(form) }}

            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src='//www.google.com/recaptcha/api.js?hl={{ locale }}'></script>
{% endblock %}", "user/request-password-reset.html.twig", "/var/www/proyecto/templates/user/request-password-reset.html.twig");
    }
}
