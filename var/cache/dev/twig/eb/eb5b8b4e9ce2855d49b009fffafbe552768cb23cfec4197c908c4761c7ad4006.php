<?php

/* user/security/login.html.twig */
class __TwigTemplate_b270a68ee49e8f55f63d2e301a85c28e0b2ce51aa3cc28022e92657bcf5f1e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/security/login.html.twig", 1);
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
        $__internal_77be8e19337ad2a39a418c40d4c2dc1787bfff3dde314259e1b253e6f47f7368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77be8e19337ad2a39a418c40d4c2dc1787bfff3dde314259e1b253e6f47f7368->enter($__internal_77be8e19337ad2a39a418c40d4c2dc1787bfff3dde314259e1b253e6f47f7368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/security/login.html.twig"));

        $__internal_f180bba6325e588333999799d82ac890d70636b01928f72acb0f694a79b1beef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f180bba6325e588333999799d82ac890d70636b01928f72acb0f694a79b1beef->enter($__internal_f180bba6325e588333999799d82ac890d70636b01928f72acb0f694a79b1beef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77be8e19337ad2a39a418c40d4c2dc1787bfff3dde314259e1b253e6f47f7368->leave($__internal_77be8e19337ad2a39a418c40d4c2dc1787bfff3dde314259e1b253e6f47f7368_prof);

        
        $__internal_f180bba6325e588333999799d82ac890d70636b01928f72acb0f694a79b1beef->leave($__internal_f180bba6325e588333999799d82ac890d70636b01928f72acb0f694a79b1beef_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_708883a0f90e93efd6f8a1e7944cd3c56460e5ef5c277f6a84ff3b242a8d606b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708883a0f90e93efd6f8a1e7944cd3c56460e5ef5c277f6a84ff3b242a8d606b->enter($__internal_708883a0f90e93efd6f8a1e7944cd3c56460e5ef5c277f6a84ff3b242a8d606b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0c3453cf11665b06b56ed6235425d90bc70cd575201f14ab0bd8c11ea29bf8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3453cf11665b06b56ed6235425d90bc70cd575201f14ab0bd8c11ea29bf8d9->enter($__internal_0c3453cf11665b06b56ed6235425d90bc70cd575201f14ab0bd8c11ea29bf8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login"), "html", null, true);
        echo "</h1>
                ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })())) {
            // line 9
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 13
        echo "
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "_username", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "_password", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "remember_me", array()), 'row');
        echo "
                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login"), "html", null, true);
        echo "
                    <span class=\"fa fa-lock\"></span>
                </button>
                <br>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.no-account"), "html", null, true);
        echo "</a> |
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_request_password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.forgot-password"), "html", null, true);
        echo "</a>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_0c3453cf11665b06b56ed6235425d90bc70cd575201f14ab0bd8c11ea29bf8d9->leave($__internal_0c3453cf11665b06b56ed6235425d90bc70cd575201f14ab0bd8c11ea29bf8d9_prof);

        
        $__internal_708883a0f90e93efd6f8a1e7944cd3c56460e5ef5c277f6a84ff3b242a8d606b->leave($__internal_708883a0f90e93efd6f8a1e7944cd3c56460e5ef5c277f6a84ff3b242a8d606b_prof);

    }

    public function getTemplateName()
    {
        return "user/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  101 => 23,  95 => 22,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  69 => 13,  63 => 10,  60 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1>{{ 'user.login'|trans }}</h1>
                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                {{ form_start(form) }}
                {{ form_row(form._username) }}
                {{ form_row(form._password) }}
                {{ form_row(form.remember_me) }}
                <button type=\"submit\" class=\"btn btn-default btn-primary btn-block\">{{ 'user.login'|trans }}
                    <span class=\"fa fa-lock\"></span>
                </button>
                <br>
                <a href=\"{{ path('user_register') }}\">{{ 'user.no-account'|trans }}</a> |
                <a href=\"{{ path('user_request_password_reset') }}\">{{ 'user.forgot-password'|trans }}</a>
                {{ form_end(form) }}

            </div>
        </div>
    </div>
{% endblock %}", "user/security/login.html.twig", "/var/www/proyecto/templates/user/security/login.html.twig");
    }
}
