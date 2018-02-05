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
        $__internal_6a08b046027db91b052baca82ca0a15fb2c6868d24c8bccd69ca2f7d3fc87978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a08b046027db91b052baca82ca0a15fb2c6868d24c8bccd69ca2f7d3fc87978->enter($__internal_6a08b046027db91b052baca82ca0a15fb2c6868d24c8bccd69ca2f7d3fc87978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/security/login.html.twig"));

        $__internal_674590de54bf97841f66ca79e133bc9a7ea4d3e70948f44e81fbb4bd9b0345cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674590de54bf97841f66ca79e133bc9a7ea4d3e70948f44e81fbb4bd9b0345cf->enter($__internal_674590de54bf97841f66ca79e133bc9a7ea4d3e70948f44e81fbb4bd9b0345cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a08b046027db91b052baca82ca0a15fb2c6868d24c8bccd69ca2f7d3fc87978->leave($__internal_6a08b046027db91b052baca82ca0a15fb2c6868d24c8bccd69ca2f7d3fc87978_prof);

        
        $__internal_674590de54bf97841f66ca79e133bc9a7ea4d3e70948f44e81fbb4bd9b0345cf->leave($__internal_674590de54bf97841f66ca79e133bc9a7ea4d3e70948f44e81fbb4bd9b0345cf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfef11b2b230eef4bdfe91d2aaa843644c5cbde359bdd71f1846e375b65399f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfef11b2b230eef4bdfe91d2aaa843644c5cbde359bdd71f1846e375b65399f8->enter($__internal_dfef11b2b230eef4bdfe91d2aaa843644c5cbde359bdd71f1846e375b65399f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_132da643bbaeb54b6dc28c3b68e486584ba828dbe91d56a2ba16bc999b7f1562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132da643bbaeb54b6dc28c3b68e486584ba828dbe91d56a2ba16bc999b7f1562->enter($__internal_132da643bbaeb54b6dc28c3b68e486584ba828dbe91d56a2ba16bc999b7f1562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_132da643bbaeb54b6dc28c3b68e486584ba828dbe91d56a2ba16bc999b7f1562->leave($__internal_132da643bbaeb54b6dc28c3b68e486584ba828dbe91d56a2ba16bc999b7f1562_prof);

        
        $__internal_dfef11b2b230eef4bdfe91d2aaa843644c5cbde359bdd71f1846e375b65399f8->leave($__internal_dfef11b2b230eef4bdfe91d2aaa843644c5cbde359bdd71f1846e375b65399f8_prof);

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
