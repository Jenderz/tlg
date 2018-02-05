<?php

/* user/email/request-password.html.twig */
class __TwigTemplate_c7549b948e5c1ffb2a32c6b359cf7d67ccb0f87182e1fa09a260b8295061cb5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user/email/email-layout.html.twig", "user/email/request-password.html.twig", 1);
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
        $__internal_ea7295cfa189b6093bbcb8a7fee5050009dbdccaef2597d5c36fd30f7ba22a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7295cfa189b6093bbcb8a7fee5050009dbdccaef2597d5c36fd30f7ba22a7e->enter($__internal_ea7295cfa189b6093bbcb8a7fee5050009dbdccaef2597d5c36fd30f7ba22a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/email/request-password.html.twig"));

        $__internal_509e251b050405e5b981254d038c2d04ea9aaca665250114c8f361e41a23745f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509e251b050405e5b981254d038c2d04ea9aaca665250114c8f361e41a23745f->enter($__internal_509e251b050405e5b981254d038c2d04ea9aaca665250114c8f361e41a23745f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/email/request-password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea7295cfa189b6093bbcb8a7fee5050009dbdccaef2597d5c36fd30f7ba22a7e->leave($__internal_ea7295cfa189b6093bbcb8a7fee5050009dbdccaef2597d5c36fd30f7ba22a7e_prof);

        
        $__internal_509e251b050405e5b981254d038c2d04ea9aaca665250114c8f361e41a23745f->leave($__internal_509e251b050405e5b981254d038c2d04ea9aaca665250114c8f361e41a23745f_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4a47e7bebe107d8604bbf90dd22f46936fc44d58e194a9089c3ce689d7cbf0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a47e7bebe107d8604bbf90dd22f46936fc44d58e194a9089c3ce689d7cbf0d7->enter($__internal_4a47e7bebe107d8604bbf90dd22f46936fc44d58e194a9089c3ce689d7cbf0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f89c669f1ecbb973330243864fc4395ebc9190cb9b57e006f39b07541f27f348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89c669f1ecbb973330243864fc4395ebc9190cb9b57e006f39b07541f27f348->enter($__internal_f89c669f1ecbb973330243864fc4395ebc9190cb9b57e006f39b07541f27f348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.mailer.reset-password.txt", array("%resetPasswordUrl%" => (isset($context["resetPasswordUrl"]) || array_key_exists("resetPasswordUrl", $context) ? $context["resetPasswordUrl"] : (function () { throw new Twig_Error_Runtime('Variable "resetPasswordUrl" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        
        $__internal_f89c669f1ecbb973330243864fc4395ebc9190cb9b57e006f39b07541f27f348->leave($__internal_f89c669f1ecbb973330243864fc4395ebc9190cb9b57e006f39b07541f27f348_prof);

        
        $__internal_4a47e7bebe107d8604bbf90dd22f46936fc44d58e194a9089c3ce689d7cbf0d7->leave($__internal_4a47e7bebe107d8604bbf90dd22f46936fc44d58e194a9089c3ce689d7cbf0d7_prof);

    }

    // line 7
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_d2cbcb9e512284d6c62d82477741b746ac06031cc003283c9729c9c96491b4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cbcb9e512284d6c62d82477741b746ac06031cc003283c9729c9c96491b4f7->enter($__internal_d2cbcb9e512284d6c62d82477741b746ac06031cc003283c9729c9c96491b4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_bce89ad47dcce1b4502d7fd6f734bcdb6d343b43d64921b91dcb32f269b565c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce89ad47dcce1b4502d7fd6f734bcdb6d343b43d64921b91dcb32f269b565c6->enter($__internal_bce89ad47dcce1b4502d7fd6f734bcdb6d343b43d64921b91dcb32f269b565c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        // line 8
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.mailer.reset-password.html", array("%resetPasswordUrl%" => (isset($context["resetPasswordUrl"]) || array_key_exists("resetPasswordUrl", $context) ? $context["resetPasswordUrl"] : (function () { throw new Twig_Error_Runtime('Variable "resetPasswordUrl" does not exist.', 8, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_bce89ad47dcce1b4502d7fd6f734bcdb6d343b43d64921b91dcb32f269b565c6->leave($__internal_bce89ad47dcce1b4502d7fd6f734bcdb6d343b43d64921b91dcb32f269b565c6_prof);

        
        $__internal_d2cbcb9e512284d6c62d82477741b746ac06031cc003283c9729c9c96491b4f7->leave($__internal_d2cbcb9e512284d6c62d82477741b746ac06031cc003283c9729c9c96491b4f7_prof);

    }

    public function getTemplateName()
    {
        return "user/email/request-password.html.twig";
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
{{ 'user.mailer.reset-password.txt'|trans({'%resetPasswordUrl%' : resetPasswordUrl}) }}
{% endblock %}

{% block body_html_content %}
    {{ 'user.mailer.reset-password.html'|trans({'%resetPasswordUrl%' : resetPasswordUrl})|raw }}
{% endblock %}", "user/email/request-password.html.twig", "/var/www/proyecto/templates/user/email/request-password.html.twig");
    }
}
