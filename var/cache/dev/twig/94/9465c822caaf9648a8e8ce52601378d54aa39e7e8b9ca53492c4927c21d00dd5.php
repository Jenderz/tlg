<?php

/* user/register.html.twig */
class __TwigTemplate_688c6ef62154fab200d56300f556e58d23bc72bebae1d40435e4229247131345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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
        $__internal_7070a1c20dbb67b42882877a0ce6445951f802f8042607a74d2fa2531b24ece7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7070a1c20dbb67b42882877a0ce6445951f802f8042607a74d2fa2531b24ece7->enter($__internal_7070a1c20dbb67b42882877a0ce6445951f802f8042607a74d2fa2531b24ece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_627407e8531dc9f2b56e805842131ee867f429a42f5f82eb527c191f6110049d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627407e8531dc9f2b56e805842131ee867f429a42f5f82eb527c191f6110049d->enter($__internal_627407e8531dc9f2b56e805842131ee867f429a42f5f82eb527c191f6110049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7070a1c20dbb67b42882877a0ce6445951f802f8042607a74d2fa2531b24ece7->leave($__internal_7070a1c20dbb67b42882877a0ce6445951f802f8042607a74d2fa2531b24ece7_prof);

        
        $__internal_627407e8531dc9f2b56e805842131ee867f429a42f5f82eb527c191f6110049d->leave($__internal_627407e8531dc9f2b56e805842131ee867f429a42f5f82eb527c191f6110049d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_db2277719f7b7c2ac360572f0fbaf7dca485549a919891f6c2ef60fd3beeb399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2277719f7b7c2ac360572f0fbaf7dca485549a919891f6c2ef60fd3beeb399->enter($__internal_db2277719f7b7c2ac360572f0fbaf7dca485549a919891f6c2ef60fd3beeb399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c04c4c97a26f686c0792ea95143da8f2a4ee537a509ca14ae7e2281314e2f271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04c4c97a26f686c0792ea95143da8f2a4ee537a509ca14ae7e2281314e2f271->enter($__internal_c04c4c97a26f686c0792ea95143da8f2a4ee537a509ca14ae7e2281314e2f271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.sign-up"), "html", null, true);
        echo "</h1>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        echo "

                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "password", array()), 'row');
        echo "

                <br>

                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\" formnovalidate>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.sign-up"), "html", null, true);
        echo "</button>
                <br>
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.yes-account"), "html", null, true);
        echo "</a>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_c04c4c97a26f686c0792ea95143da8f2a4ee537a509ca14ae7e2281314e2f271->leave($__internal_c04c4c97a26f686c0792ea95143da8f2a4ee537a509ca14ae7e2281314e2f271_prof);

        
        $__internal_db2277719f7b7c2ac360572f0fbaf7dca485549a919891f6c2ef60fd3beeb399->leave($__internal_db2277719f7b7c2ac360572f0fbaf7dca485549a919891f6c2ef60fd3beeb399_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be28088d1b55731a414208e96e0a914aa3b702c5d8b34b9fa91f05730746cd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be28088d1b55731a414208e96e0a914aa3b702c5d8b34b9fa91f05730746cd39->enter($__internal_be28088d1b55731a414208e96e0a914aa3b702c5d8b34b9fa91f05730746cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb3a4388fb20a1f1c788c9bd23e421d5924fd23e0cf6eb6ba4f0d2257ed8d59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3a4388fb20a1f1c788c9bd23e421d5924fd23e0cf6eb6ba4f0d2257ed8d59a->enter($__internal_fb3a4388fb20a1f1c788c9bd23e421d5924fd23e0cf6eb6ba4f0d2257ed8d59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='//www.google.com/recaptcha/api.js?hl=";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
        echo "'></script>
";
        
        $__internal_fb3a4388fb20a1f1c788c9bd23e421d5924fd23e0cf6eb6ba4f0d2257ed8d59a->leave($__internal_fb3a4388fb20a1f1c788c9bd23e421d5924fd23e0cf6eb6ba4f0d2257ed8d59a_prof);

        
        $__internal_be28088d1b55731a414208e96e0a914aa3b702c5d8b34b9fa91f05730746cd39->leave($__internal_be28088d1b55731a414208e96e0a914aa3b702c5d8b34b9fa91f05730746cd39_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  114 => 26,  105 => 25,  90 => 19,  84 => 18,  79 => 16,  72 => 12,  68 => 11,  63 => 9,  59 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>{{ 'user.sign-up'|trans }}</h1>
                {{ form_start(form) }}
                {{ form_errors(form) }}

                {{ form_row(form.email) }}
                {{ form_row(form.password) }}

                <br>

                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\" formnovalidate>{{ 'user.sign-up'|trans }}</button>
                <br>
                <a href=\"{{ path('security_login') }}\">{{ 'user.yes-account'|trans }}</a>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src='//www.google.com/recaptcha/api.js?hl={{ locale }}'></script>
{% endblock %}", "user/register.html.twig", "/var/www/proyecto/templates/user/register.html.twig");
    }
}
