<?php

/* user/email/email-layout.html.twig */
class __TwigTemplate_02772db766eb10eda98664d95aa4fbf322a7f6ddb9e1c71add9254bedf480948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
            'body_html_content' => array($this, 'block_body_html_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4db251562376141ccd1cd762266d0bfaac60aec22965395c39b5f58f40d8bf97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db251562376141ccd1cd762266d0bfaac60aec22965395c39b5f58f40d8bf97->enter($__internal_4db251562376141ccd1cd762266d0bfaac60aec22965395c39b5f58f40d8bf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/email/email-layout.html.twig"));

        $__internal_fd458845eaaccb2b8c735cb808fea4f7ef2d95034ca3e5f922d7282e8cf92c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd458845eaaccb2b8c735cb808fea4f7ef2d95034ca3e5f922d7282e8cf92c24->enter($__internal_fd458845eaaccb2b8c735cb808fea4f7ef2d95034ca3e5f922d7282e8cf92c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/email/email-layout.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        $this->displayBlock('body_text', $context, $blocks);
        // line 3
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4db251562376141ccd1cd762266d0bfaac60aec22965395c39b5f58f40d8bf97->leave($__internal_4db251562376141ccd1cd762266d0bfaac60aec22965395c39b5f58f40d8bf97_prof);

        
        $__internal_fd458845eaaccb2b8c735cb808fea4f7ef2d95034ca3e5f922d7282e8cf92c24->leave($__internal_fd458845eaaccb2b8c735cb808fea4f7ef2d95034ca3e5f922d7282e8cf92c24_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a469e9b3d08e2a3a8a23bf7379d5a97c8ed24e5233e3ad6c3cec78b129e2fe11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a469e9b3d08e2a3a8a23bf7379d5a97c8ed24e5233e3ad6c3cec78b129e2fe11->enter($__internal_a469e9b3d08e2a3a8a23bf7379d5a97c8ed24e5233e3ad6c3cec78b129e2fe11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3c2c990cc8aa7d02ea2c1177b0938647ec7ed801b222bc4465d395e013c38405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2c990cc8aa7d02ea2c1177b0938647ec7ed801b222bc4465d395e013c38405->enter($__internal_3c2c990cc8aa7d02ea2c1177b0938647ec7ed801b222bc4465d395e013c38405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.name"), "html", null, true);
        
        $__internal_3c2c990cc8aa7d02ea2c1177b0938647ec7ed801b222bc4465d395e013c38405->leave($__internal_3c2c990cc8aa7d02ea2c1177b0938647ec7ed801b222bc4465d395e013c38405_prof);

        
        $__internal_a469e9b3d08e2a3a8a23bf7379d5a97c8ed24e5233e3ad6c3cec78b129e2fe11->leave($__internal_a469e9b3d08e2a3a8a23bf7379d5a97c8ed24e5233e3ad6c3cec78b129e2fe11_prof);

    }

    // line 2
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c254c08504221d4d7fa50fb6a5b22358e53082df1ff469de24e5447a4523e233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c254c08504221d4d7fa50fb6a5b22358e53082df1ff469de24e5447a4523e233->enter($__internal_c254c08504221d4d7fa50fb6a5b22358e53082df1ff469de24e5447a4523e233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2fbcfe8ad029b4ce0f61b68c8a0336d204f24e017146351a99ace872c90ce267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbcfe8ad029b4ce0f61b68c8a0336d204f24e017146351a99ace872c90ce267->enter($__internal_2fbcfe8ad029b4ce0f61b68c8a0336d204f24e017146351a99ace872c90ce267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        
        $__internal_2fbcfe8ad029b4ce0f61b68c8a0336d204f24e017146351a99ace872c90ce267->leave($__internal_2fbcfe8ad029b4ce0f61b68c8a0336d204f24e017146351a99ace872c90ce267_prof);

        
        $__internal_c254c08504221d4d7fa50fb6a5b22358e53082df1ff469de24e5447a4523e233->leave($__internal_c254c08504221d4d7fa50fb6a5b22358e53082df1ff469de24e5447a4523e233_prof);

    }

    // line 3
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bfa7dbf5f0425a3af7f2801e7323c2cc5ba9648d1918e9b57109a3f871abd97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa7dbf5f0425a3af7f2801e7323c2cc5ba9648d1918e9b57109a3f871abd97a->enter($__internal_bfa7dbf5f0425a3af7f2801e7323c2cc5ba9648d1918e9b57109a3f871abd97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0d74d69ee6797d94117a091841fc400320921535b268bd73bc3a4365ae39d64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d74d69ee6797d94117a091841fc400320921535b268bd73bc3a4365ae39d64e->enter($__internal_0d74d69ee6797d94117a091841fc400320921535b268bd73bc3a4365ae39d64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 4
        echo "    <html>
    <body style=\"background-color: #ffffff;color: black;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 13px;\">
    ";
        // line 6
        $this->displayBlock('body_html_content', $context, $blocks);
        // line 7
        echo "    </body>
    </html>
";
        
        $__internal_0d74d69ee6797d94117a091841fc400320921535b268bd73bc3a4365ae39d64e->leave($__internal_0d74d69ee6797d94117a091841fc400320921535b268bd73bc3a4365ae39d64e_prof);

        
        $__internal_bfa7dbf5f0425a3af7f2801e7323c2cc5ba9648d1918e9b57109a3f871abd97a->leave($__internal_bfa7dbf5f0425a3af7f2801e7323c2cc5ba9648d1918e9b57109a3f871abd97a_prof);

    }

    // line 6
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_d25be7b3652e253f4855766be03c7d36e3e7e3ae92694c4ae29aab00594e3e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25be7b3652e253f4855766be03c7d36e3e7e3ae92694c4ae29aab00594e3e7b->enter($__internal_d25be7b3652e253f4855766be03c7d36e3e7e3ae92694c4ae29aab00594e3e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_261c52f494aeb5a982c538e3ac8cb77663f4f59023592a9b7914af4ec238d10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261c52f494aeb5a982c538e3ac8cb77663f4f59023592a9b7914af4ec238d10b->enter($__internal_261c52f494aeb5a982c538e3ac8cb77663f4f59023592a9b7914af4ec238d10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        
        $__internal_261c52f494aeb5a982c538e3ac8cb77663f4f59023592a9b7914af4ec238d10b->leave($__internal_261c52f494aeb5a982c538e3ac8cb77663f4f59023592a9b7914af4ec238d10b_prof);

        
        $__internal_d25be7b3652e253f4855766be03c7d36e3e7e3ae92694c4ae29aab00594e3e7b->leave($__internal_d25be7b3652e253f4855766be03c7d36e3e7e3ae92694c4ae29aab00594e3e7b_prof);

    }

    public function getTemplateName()
    {
        return "user/email/email-layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 6,  93 => 7,  91 => 6,  87 => 4,  78 => 3,  61 => 2,  43 => 1,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{{ 'site.name'|trans }}{% endblock %}
{% block body_text %}{% endblock %}
{% block body_html %}
    <html>
    <body style=\"background-color: #ffffff;color: black;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: 13px;\">
    {% block body_html_content %}{% endblock %}
    </body>
    </html>
{% endblock %}", "user/email/email-layout.html.twig", "/var/www/proyecto/templates/user/email/email-layout.html.twig");
    }
}
