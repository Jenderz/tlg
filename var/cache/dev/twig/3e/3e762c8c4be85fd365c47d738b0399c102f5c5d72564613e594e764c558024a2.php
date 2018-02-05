<?php

/* base.html.twig */
class __TwigTemplate_201d0297ad773ee70d94c1bfea0a108971881bcccf8521378136e3614be36cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'flashmessages' => array($this, 'block_flashmessages'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2f991e79b86baf150d4912136037d2ed2a30be7e24754253b2a5ccfe190e1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f991e79b86baf150d4912136037d2ed2a30be7e24754253b2a5ccfe190e1f2->enter($__internal_e2f991e79b86baf150d4912136037d2ed2a30be7e24754253b2a5ccfe190e1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_85bf66e591b44ca9d00fee5bb1148f5bfea9695cb16eca3e3f475c332e214937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bf66e591b44ca9d00fee5bb1148f5bfea9695cb16eca3e3f475c332e214937->enter($__internal_85bf66e591b44ca9d00fee5bb1148f5bfea9695cb16eca3e3f475c332e214937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>

<body>
<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.name"), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
            aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        ";
        // line 21
        $this->displayBlock('nav', $context, $blocks);
        // line 38
        echo "    </div>
</nav>

<div class=\"main-content\" style=\"margin-top: 56px;\">
    ";
        // line 42
        $this->displayBlock('flashmessages', $context, $blocks);
        // line 55
        echo "    <div style=\"min-height: 56px\"></div>
    ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "</div>

";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
</body>

</html>
";
        
        $__internal_e2f991e79b86baf150d4912136037d2ed2a30be7e24754253b2a5ccfe190e1f2->leave($__internal_e2f991e79b86baf150d4912136037d2ed2a30be7e24754253b2a5ccfe190e1f2_prof);

        
        $__internal_85bf66e591b44ca9d00fee5bb1148f5bfea9695cb16eca3e3f475c332e214937->leave($__internal_85bf66e591b44ca9d00fee5bb1148f5bfea9695cb16eca3e3f475c332e214937_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1455df7c437df822251bab8397c2ba7973e3aa519bcde1d287c69e9bbca725e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1455df7c437df822251bab8397c2ba7973e3aa519bcde1d287c69e9bbca725e->enter($__internal_b1455df7c437df822251bab8397c2ba7973e3aa519bcde1d287c69e9bbca725e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f622ebd45edb279d18c24da8ef1e5ff745ffb318fd1638892c4756710381a4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f622ebd45edb279d18c24da8ef1e5ff745ffb318fd1638892c4756710381a4f7->enter($__internal_f622ebd45edb279d18c24da8ef1e5ff745ffb318fd1638892c4756710381a4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.name"), "html", null, true);
        
        $__internal_f622ebd45edb279d18c24da8ef1e5ff745ffb318fd1638892c4756710381a4f7->leave($__internal_f622ebd45edb279d18c24da8ef1e5ff745ffb318fd1638892c4756710381a4f7_prof);

        
        $__internal_b1455df7c437df822251bab8397c2ba7973e3aa519bcde1d287c69e9bbca725e->leave($__internal_b1455df7c437df822251bab8397c2ba7973e3aa519bcde1d287c69e9bbca725e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a3f0dbba3620d20453ffa2f15a47408cb8fa3ef48d756d1cb84344597a69bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3f0dbba3620d20453ffa2f15a47408cb8fa3ef48d756d1cb84344597a69bb2->enter($__internal_6a3f0dbba3620d20453ffa2f15a47408cb8fa3ef48d756d1cb84344597a69bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc8eb2df3514e21eb909b83fb10377c2ef174064bd5e70076296a91a3ab9f4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8eb2df3514e21eb909b83fb10377c2ef174064bd5e70076296a91a3ab9f4a8->enter($__internal_cc8eb2df3514e21eb909b83fb10377c2ef174064bd5e70076296a91a3ab9f4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"/build/app.css\">
    ";
        
        $__internal_cc8eb2df3514e21eb909b83fb10377c2ef174064bd5e70076296a91a3ab9f4a8->leave($__internal_cc8eb2df3514e21eb909b83fb10377c2ef174064bd5e70076296a91a3ab9f4a8_prof);

        
        $__internal_6a3f0dbba3620d20453ffa2f15a47408cb8fa3ef48d756d1cb84344597a69bb2->leave($__internal_6a3f0dbba3620d20453ffa2f15a47408cb8fa3ef48d756d1cb84344597a69bb2_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d6320e65444e8253be66db50ef539d75e3dd9340db920ffa508b73fce91e4bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6320e65444e8253be66db50ef539d75e3dd9340db920ffa508b73fce91e4bd5->enter($__internal_d6320e65444e8253be66db50ef539d75e3dd9340db920ffa508b73fce91e4bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_5fdbe720a4e1e055bc8527f12db1b1e0cda6726edc8b032a334ffd1a743c71c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdbe720a4e1e055bc8527f12db1b1e0cda6726edc8b032a334ffd1a743c71c9->enter($__internal_5fdbe720a4e1e055bc8527f12db1b1e0cda6726edc8b032a334ffd1a743c71c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "            <ul class=\"navbar-nav\">

            </ul>
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 27
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "user", array()), "email", array()), "html", null, true);
            echo "</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link\"
                                            href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logout"), "html", null, true);
            echo "</a></li>
                ";
        } else {
            // line 32
            echo "                    ";
            // line 33
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\"
                                            href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 36
        echo "            </ul>
        ";
        
        $__internal_5fdbe720a4e1e055bc8527f12db1b1e0cda6726edc8b032a334ffd1a743c71c9->leave($__internal_5fdbe720a4e1e055bc8527f12db1b1e0cda6726edc8b032a334ffd1a743c71c9_prof);

        
        $__internal_d6320e65444e8253be66db50ef539d75e3dd9340db920ffa508b73fce91e4bd5->leave($__internal_d6320e65444e8253be66db50ef539d75e3dd9340db920ffa508b73fce91e4bd5_prof);

    }

    // line 42
    public function block_flashmessages($context, array $blocks = array())
    {
        $__internal_59a6b8b153d56a4a32c66957e48fd3fecc7f0a642d136f18a5ff96b3cf6531b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a6b8b153d56a4a32c66957e48fd3fecc7f0a642d136f18a5ff96b3cf6531b6->enter($__internal_59a6b8b153d56a4a32c66957e48fd3fecc7f0a642d136f18a5ff96b3cf6531b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashmessages"));

        $__internal_f538639a393a929fd911264235c633a70122c79e6f8e86ea51eca97333623dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f538639a393a929fd911264235c633a70122c79e6f8e86ea51eca97333623dcf->enter($__internal_f538639a393a929fd911264235c633a70122c79e6f8e86ea51eca97333623dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashmessages"));

        // line 43
        echo "        ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 44
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 45
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 46
                    echo "                    <div class=\"alert alert-dismissible alert-";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ($context["type"]) : ("")), "html", null, true);
                    echo "\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 49, $this->getSourceContext()); })()), "messages")) : ("messages"))), "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        // line 54
        echo "    ";
        
        $__internal_f538639a393a929fd911264235c633a70122c79e6f8e86ea51eca97333623dcf->leave($__internal_f538639a393a929fd911264235c633a70122c79e6f8e86ea51eca97333623dcf_prof);

        
        $__internal_59a6b8b153d56a4a32c66957e48fd3fecc7f0a642d136f18a5ff96b3cf6531b6->leave($__internal_59a6b8b153d56a4a32c66957e48fd3fecc7f0a642d136f18a5ff96b3cf6531b6_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a2883ae35b61d21f7622e27b92cde2e4a0409d4ae27e01a6302ee9531c4b2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2883ae35b61d21f7622e27b92cde2e4a0409d4ae27e01a6302ee9531c4b2ec->enter($__internal_5a2883ae35b61d21f7622e27b92cde2e4a0409d4ae27e01a6302ee9531c4b2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c2844fd37fb4d12c566dbb039ee2757b693cb0000e8f144292735ae019f0850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2844fd37fb4d12c566dbb039ee2757b693cb0000e8f144292735ae019f0850->enter($__internal_5c2844fd37fb4d12c566dbb039ee2757b693cb0000e8f144292735ae019f0850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5c2844fd37fb4d12c566dbb039ee2757b693cb0000e8f144292735ae019f0850->leave($__internal_5c2844fd37fb4d12c566dbb039ee2757b693cb0000e8f144292735ae019f0850_prof);

        
        $__internal_5a2883ae35b61d21f7622e27b92cde2e4a0409d4ae27e01a6302ee9531c4b2ec->leave($__internal_5a2883ae35b61d21f7622e27b92cde2e4a0409d4ae27e01a6302ee9531c4b2ec_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb9fba1c8a16b84204232fd8c461dcd2b8f395f4d0c6345464f4bf2bbacb4aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9fba1c8a16b84204232fd8c461dcd2b8f395f4d0c6345464f4bf2bbacb4aa7->enter($__internal_bb9fba1c8a16b84204232fd8c461dcd2b8f395f4d0c6345464f4bf2bbacb4aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_548a242dea71803bd996d48984eb2aa43d362e1881ff3eae1d6ece9b1f2760d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548a242dea71803bd996d48984eb2aa43d362e1881ff3eae1d6ece9b1f2760d7->enter($__internal_548a242dea71803bd996d48984eb2aa43d362e1881ff3eae1d6ece9b1f2760d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    <script src=\"/build/app.js\"></script>
";
        
        $__internal_548a242dea71803bd996d48984eb2aa43d362e1881ff3eae1d6ece9b1f2760d7->leave($__internal_548a242dea71803bd996d48984eb2aa43d362e1881ff3eae1d6ece9b1f2760d7_prof);

        
        $__internal_bb9fba1c8a16b84204232fd8c461dcd2b8f395f4d0c6345464f4bf2bbacb4aa7->leave($__internal_bb9fba1c8a16b84204232fd8c461dcd2b8f395f4d0c6345464f4bf2bbacb4aa7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 60,  265 => 59,  248 => 56,  238 => 54,  235 => 53,  229 => 52,  220 => 49,  213 => 46,  208 => 45,  203 => 44,  200 => 43,  191 => 42,  180 => 36,  173 => 34,  170 => 33,  168 => 32,  161 => 30,  152 => 27,  150 => 26,  144 => 22,  135 => 21,  124 => 8,  115 => 7,  97 => 5,  83 => 62,  81 => 59,  77 => 57,  75 => 56,  72 => 55,  70 => 42,  64 => 38,  62 => 21,  50 => 14,  44 => 10,  42 => 7,  37 => 5,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}{{ 'site.name'|trans }}{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"/build/app.css\">
    {% endblock %}
</head>

<body>
<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">{{ 'site.name'|trans }}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
            aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        {% block nav %}
            <ul class=\"navbar-nav\">

            </ul>
            <ul class=\"navbar-nav ml-auto\">
                {% if is_granted('ROLE_USER') %}
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('user_edit') }}\">{{ app.user.email }}</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link\"
                                            href=\"{{ path('security_logout') }}\">{{ 'user.logout'|trans }}</a></li>
                {% else %}
                    {#<li><a href=\"{{ path('user_register') }}\">{{ 'user.sign-up'|trans }}</a></li>#}
                    <li class=\"nav-item\"><a class=\"nav-link\"
                                            href=\"{{ path('security_login') }}\">{{ 'user.login'|trans }}</a></li>
                {% endif %}
            </ul>
        {% endblock %}
    </div>
</nav>

<div class=\"main-content\" style=\"margin-top: 56px;\">
    {% block flashmessages %}
        {% if app.session.flashbag.peekAll|length > 0 %}
            {% for type, messages in app.session.flashbag.all %}
                {% for message in messages %}
                    <div class=\"alert alert-dismissible alert-{{ type ? type : '' }}\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        {{ message|trans({}, domain|default('messages')) }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
    {% endblock %}
    <div style=\"min-height: 56px\"></div>
    {% block content %}{% endblock %}
</div>

{% block javascripts %}
    <script src=\"/build/app.js\"></script>
{% endblock %}

</body>

</html>
", "base.html.twig", "/var/www/proyecto/templates/base.html.twig");
    }
}
