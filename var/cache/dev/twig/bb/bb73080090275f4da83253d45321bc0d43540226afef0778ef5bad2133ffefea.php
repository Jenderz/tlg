<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_015ca9ba120b788a4cb2f2b8faf305de3d64f8273d1aa3e0007bbeb0b561a373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7478e49896e07c9efd8e1d1927a5dad3443ebb5ca8968b13021d2566e99e0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7478e49896e07c9efd8e1d1927a5dad3443ebb5ca8968b13021d2566e99e0c9->enter($__internal_d7478e49896e07c9efd8e1d1927a5dad3443ebb5ca8968b13021d2566e99e0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1eb930f07d35edc89948220a9457db6eafe5f6e844328c451b6341a71d8dad2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb930f07d35edc89948220a9457db6eafe5f6e844328c451b6341a71d8dad2c->enter($__internal_1eb930f07d35edc89948220a9457db6eafe5f6e844328c451b6341a71d8dad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7478e49896e07c9efd8e1d1927a5dad3443ebb5ca8968b13021d2566e99e0c9->leave($__internal_d7478e49896e07c9efd8e1d1927a5dad3443ebb5ca8968b13021d2566e99e0c9_prof);

        
        $__internal_1eb930f07d35edc89948220a9457db6eafe5f6e844328c451b6341a71d8dad2c->leave($__internal_1eb930f07d35edc89948220a9457db6eafe5f6e844328c451b6341a71d8dad2c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e86d1cf38541c6c3c2be624e14d946d5978a8699d433167ef22004dd69c6c99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86d1cf38541c6c3c2be624e14d946d5978a8699d433167ef22004dd69c6c99e->enter($__internal_e86d1cf38541c6c3c2be624e14d946d5978a8699d433167ef22004dd69c6c99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d09c0b9d4236c6555edb8fc2778a21c17674d8716fb6da5b26a04ba73952e0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09c0b9d4236c6555edb8fc2778a21c17674d8716fb6da5b26a04ba73952e0d3->enter($__internal_d09c0b9d4236c6555edb8fc2778a21c17674d8716fb6da5b26a04ba73952e0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d09c0b9d4236c6555edb8fc2778a21c17674d8716fb6da5b26a04ba73952e0d3->leave($__internal_d09c0b9d4236c6555edb8fc2778a21c17674d8716fb6da5b26a04ba73952e0d3_prof);

        
        $__internal_e86d1cf38541c6c3c2be624e14d946d5978a8699d433167ef22004dd69c6c99e->leave($__internal_e86d1cf38541c6c3c2be624e14d946d5978a8699d433167ef22004dd69c6c99e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f4aa259c0cd9fa546a86cead5db6f52776492a4b7123ab4535a21474a56ec62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4aa259c0cd9fa546a86cead5db6f52776492a4b7123ab4535a21474a56ec62->enter($__internal_8f4aa259c0cd9fa546a86cead5db6f52776492a4b7123ab4535a21474a56ec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_710e807f694f374151352558c4f41e1563a7b8403fcce4abc04faea977788232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710e807f694f374151352558c4f41e1563a7b8403fcce4abc04faea977788232->enter($__internal_710e807f694f374151352558c4f41e1563a7b8403fcce4abc04faea977788232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_710e807f694f374151352558c4f41e1563a7b8403fcce4abc04faea977788232->leave($__internal_710e807f694f374151352558c4f41e1563a7b8403fcce4abc04faea977788232_prof);

        
        $__internal_8f4aa259c0cd9fa546a86cead5db6f52776492a4b7123ab4535a21474a56ec62->leave($__internal_8f4aa259c0cd9fa546a86cead5db6f52776492a4b7123ab4535a21474a56ec62_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/proyecto/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
