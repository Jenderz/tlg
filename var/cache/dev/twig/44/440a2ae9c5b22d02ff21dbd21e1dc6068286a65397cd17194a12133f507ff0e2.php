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
        $__internal_f810e9d59bc763377067d440d2d17b210100eb318f8f1efc205a3dc6861797f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f810e9d59bc763377067d440d2d17b210100eb318f8f1efc205a3dc6861797f6->enter($__internal_f810e9d59bc763377067d440d2d17b210100eb318f8f1efc205a3dc6861797f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/request-password-reset.html.twig"));

        $__internal_a03e963354d88d8431dcff0bb8b3ad1d415be4d57362fad2bb6e84e735832dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03e963354d88d8431dcff0bb8b3ad1d415be4d57362fad2bb6e84e735832dd3->enter($__internal_a03e963354d88d8431dcff0bb8b3ad1d415be4d57362fad2bb6e84e735832dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/request-password-reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f810e9d59bc763377067d440d2d17b210100eb318f8f1efc205a3dc6861797f6->leave($__internal_f810e9d59bc763377067d440d2d17b210100eb318f8f1efc205a3dc6861797f6_prof);

        
        $__internal_a03e963354d88d8431dcff0bb8b3ad1d415be4d57362fad2bb6e84e735832dd3->leave($__internal_a03e963354d88d8431dcff0bb8b3ad1d415be4d57362fad2bb6e84e735832dd3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4bf1f114e37d7446a514035e30dc9ea7ad649f26a74bf530cc40debc9f84feda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf1f114e37d7446a514035e30dc9ea7ad649f26a74bf530cc40debc9f84feda->enter($__internal_4bf1f114e37d7446a514035e30dc9ea7ad649f26a74bf530cc40debc9f84feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aaad8e271532caff2e0ce24ce6d36d6371ab47a6526bfc2142256e7f98d6fb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaad8e271532caff2e0ce24ce6d36d6371ab47a6526bfc2142256e7f98d6fb28->enter($__internal_aaad8e271532caff2e0ce24ce6d36d6371ab47a6526bfc2142256e7f98d6fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_aaad8e271532caff2e0ce24ce6d36d6371ab47a6526bfc2142256e7f98d6fb28->leave($__internal_aaad8e271532caff2e0ce24ce6d36d6371ab47a6526bfc2142256e7f98d6fb28_prof);

        
        $__internal_4bf1f114e37d7446a514035e30dc9ea7ad649f26a74bf530cc40debc9f84feda->leave($__internal_4bf1f114e37d7446a514035e30dc9ea7ad649f26a74bf530cc40debc9f84feda_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc3b0a13e242e9aac0e505b537e73adb8587092d4a3fe7cc801bd8d19615ae49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3b0a13e242e9aac0e505b537e73adb8587092d4a3fe7cc801bd8d19615ae49->enter($__internal_fc3b0a13e242e9aac0e505b537e73adb8587092d4a3fe7cc801bd8d19615ae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_355ae12bd0cc3397ab497a392307786cd490a66182b17864957ac2b2be3763ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355ae12bd0cc3397ab497a392307786cd490a66182b17864957ac2b2be3763ed->enter($__internal_355ae12bd0cc3397ab497a392307786cd490a66182b17864957ac2b2be3763ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='//www.google.com/recaptcha/api.js?hl=";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "'></script>
";
        
        $__internal_355ae12bd0cc3397ab497a392307786cd490a66182b17864957ac2b2be3763ed->leave($__internal_355ae12bd0cc3397ab497a392307786cd490a66182b17864957ac2b2be3763ed_prof);

        
        $__internal_fc3b0a13e242e9aac0e505b537e73adb8587092d4a3fe7cc801bd8d19615ae49->leave($__internal_fc3b0a13e242e9aac0e505b537e73adb8587092d4a3fe7cc801bd8d19615ae49_prof);

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
