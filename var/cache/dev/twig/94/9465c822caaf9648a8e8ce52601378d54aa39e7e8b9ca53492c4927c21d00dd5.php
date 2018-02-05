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
        $__internal_717af0d250b16b6aff7ad3ae6334e0dcb0282149ac7e95eb4fa37513e3bdee8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717af0d250b16b6aff7ad3ae6334e0dcb0282149ac7e95eb4fa37513e3bdee8c->enter($__internal_717af0d250b16b6aff7ad3ae6334e0dcb0282149ac7e95eb4fa37513e3bdee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_e7754521c870cbad66f245fe0efde6006e4c308b1aa61282695477a1ae0361a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7754521c870cbad66f245fe0efde6006e4c308b1aa61282695477a1ae0361a3->enter($__internal_e7754521c870cbad66f245fe0efde6006e4c308b1aa61282695477a1ae0361a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_717af0d250b16b6aff7ad3ae6334e0dcb0282149ac7e95eb4fa37513e3bdee8c->leave($__internal_717af0d250b16b6aff7ad3ae6334e0dcb0282149ac7e95eb4fa37513e3bdee8c_prof);

        
        $__internal_e7754521c870cbad66f245fe0efde6006e4c308b1aa61282695477a1ae0361a3->leave($__internal_e7754521c870cbad66f245fe0efde6006e4c308b1aa61282695477a1ae0361a3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2d254bc7d084b6f653f3dd72f9c1a6f214d2bd0204f9d5028aeb7ff03ae118d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d254bc7d084b6f653f3dd72f9c1a6f214d2bd0204f9d5028aeb7ff03ae118d->enter($__internal_b2d254bc7d084b6f653f3dd72f9c1a6f214d2bd0204f9d5028aeb7ff03ae118d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e5008abccda01b1a2dd75fd56d9ea711c3ea3edac37913bbe571beeab9066236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5008abccda01b1a2dd75fd56d9ea711c3ea3edac37913bbe571beeab9066236->enter($__internal_e5008abccda01b1a2dd75fd56d9ea711c3ea3edac37913bbe571beeab9066236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e5008abccda01b1a2dd75fd56d9ea711c3ea3edac37913bbe571beeab9066236->leave($__internal_e5008abccda01b1a2dd75fd56d9ea711c3ea3edac37913bbe571beeab9066236_prof);

        
        $__internal_b2d254bc7d084b6f653f3dd72f9c1a6f214d2bd0204f9d5028aeb7ff03ae118d->leave($__internal_b2d254bc7d084b6f653f3dd72f9c1a6f214d2bd0204f9d5028aeb7ff03ae118d_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00e4736e00ec5d712ef3922d4f1e03c749da1918d283e667ede3cbe13ef09b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e4736e00ec5d712ef3922d4f1e03c749da1918d283e667ede3cbe13ef09b14->enter($__internal_00e4736e00ec5d712ef3922d4f1e03c749da1918d283e667ede3cbe13ef09b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0021815f69285e30b841fdc6e8425df447abd3714baf7a13e8d5d8870d956fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0021815f69285e30b841fdc6e8425df447abd3714baf7a13e8d5d8870d956fb7->enter($__internal_0021815f69285e30b841fdc6e8425df447abd3714baf7a13e8d5d8870d956fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='//www.google.com/recaptcha/api.js?hl=";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
        echo "'></script>
";
        
        $__internal_0021815f69285e30b841fdc6e8425df447abd3714baf7a13e8d5d8870d956fb7->leave($__internal_0021815f69285e30b841fdc6e8425df447abd3714baf7a13e8d5d8870d956fb7_prof);

        
        $__internal_00e4736e00ec5d712ef3922d4f1e03c749da1918d283e667ede3cbe13ef09b14->leave($__internal_00e4736e00ec5d712ef3922d4f1e03c749da1918d283e667ede3cbe13ef09b14_prof);

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
