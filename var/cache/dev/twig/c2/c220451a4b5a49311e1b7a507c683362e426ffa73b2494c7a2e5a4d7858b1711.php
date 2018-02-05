<?php

/* user/email/register-done.html.twig */
class __TwigTemplate_0efd12c1936384f2fa9602fdc156c1b27822feb6dc44a95d6014cdefc8534fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user/email/email-layout.html.twig", "user/email/register-done.html.twig", 1);
        $this->blocks = array(
            'body_text' => array($this, 'block_body_text'),
            'body_html_content' => array($this, 'block_body_html_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user/email/email-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8166d1893dc230edf7ce5f1f8d7abfcbec0fe49152459d870d34e65c215b35a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8166d1893dc230edf7ce5f1f8d7abfcbec0fe49152459d870d34e65c215b35a9->enter($__internal_8166d1893dc230edf7ce5f1f8d7abfcbec0fe49152459d870d34e65c215b35a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/email/register-done.html.twig"));

        $__internal_4eea25f4f47b3821676cac063ce756e5b624206c6bde049c77d3711eb08e52ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eea25f4f47b3821676cac063ce756e5b624206c6bde049c77d3711eb08e52ca->enter($__internal_4eea25f4f47b3821676cac063ce756e5b624206c6bde049c77d3711eb08e52ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/email/register-done.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8166d1893dc230edf7ce5f1f8d7abfcbec0fe49152459d870d34e65c215b35a9->leave($__internal_8166d1893dc230edf7ce5f1f8d7abfcbec0fe49152459d870d34e65c215b35a9_prof);

        
        $__internal_4eea25f4f47b3821676cac063ce756e5b624206c6bde049c77d3711eb08e52ca->leave($__internal_4eea25f4f47b3821676cac063ce756e5b624206c6bde049c77d3711eb08e52ca_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aec96562d4c039c1e65d6e88af99f27826f2acc285a3395c2dc90f248926c899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec96562d4c039c1e65d6e88af99f27826f2acc285a3395c2dc90f248926c899->enter($__internal_aec96562d4c039c1e65d6e88af99f27826f2acc285a3395c2dc90f248926c899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b63a3a45d72c3ff543f4c2bd893ef9e6e0334cf74ac59f0ec7464e1695115a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63a3a45d72c3ff543f4c2bd893ef9e6e0334cf74ac59f0ec7464e1695115a5e->enter($__internal_b63a3a45d72c3ff543f4c2bd893ef9e6e0334cf74ac59f0ec7464e1695115a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.mailer.activation.txt", array("%activationUrl%" => (isset($context["activationUrl"]) || array_key_exists("activationUrl", $context) ? $context["activationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "activationUrl" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        
        $__internal_b63a3a45d72c3ff543f4c2bd893ef9e6e0334cf74ac59f0ec7464e1695115a5e->leave($__internal_b63a3a45d72c3ff543f4c2bd893ef9e6e0334cf74ac59f0ec7464e1695115a5e_prof);

        
        $__internal_aec96562d4c039c1e65d6e88af99f27826f2acc285a3395c2dc90f248926c899->leave($__internal_aec96562d4c039c1e65d6e88af99f27826f2acc285a3395c2dc90f248926c899_prof);

    }

    // line 7
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_21648ae207bcb74de1bdfbe7a6166edb6e4d70398bcc552a12e26b8e468b1570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21648ae207bcb74de1bdfbe7a6166edb6e4d70398bcc552a12e26b8e468b1570->enter($__internal_21648ae207bcb74de1bdfbe7a6166edb6e4d70398bcc552a12e26b8e468b1570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_1ad0ae1011fbf4fc43fe85b33ee7f9fa60aa010a58752fe029fe8406b8f305ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad0ae1011fbf4fc43fe85b33ee7f9fa60aa010a58752fe029fe8406b8f305ff->enter($__internal_1ad0ae1011fbf4fc43fe85b33ee7f9fa60aa010a58752fe029fe8406b8f305ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        // line 8
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.mailer.activation.html", array("%activationUrl%" => (isset($context["activationUrl"]) || array_key_exists("activationUrl", $context) ? $context["activationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "activationUrl" does not exist.', 8, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_1ad0ae1011fbf4fc43fe85b33ee7f9fa60aa010a58752fe029fe8406b8f305ff->leave($__internal_1ad0ae1011fbf4fc43fe85b33ee7f9fa60aa010a58752fe029fe8406b8f305ff_prof);

        
        $__internal_21648ae207bcb74de1bdfbe7a6166edb6e4d70398bcc552a12e26b8e468b1570->leave($__internal_21648ae207bcb74de1bdfbe7a6166edb6e4d70398bcc552a12e26b8e468b1570_prof);

    }

    public function getTemplateName()
    {
        return "user/email/register-done.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  62 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'user/email/email-layout.html.twig' %}

{% block body_text %}
{{ 'user.mailer.activation.txt'|trans({'%activationUrl%' : activationUrl}) }}
{% endblock %}

{% block body_html_content %}
    {{ 'user.mailer.activation.html'|trans({'%activationUrl%' : activationUrl})|raw }}
{% endblock %}", "user/email/register-done.html.twig", "/var/www/proyecto/templates/user/email/register-done.html.twig");
    }
}
