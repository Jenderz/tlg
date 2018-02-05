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
        $__internal_6acbd64b5a84cbd009fe5355cec450e7871ce1f20cb81e868467b9231c65e15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acbd64b5a84cbd009fe5355cec450e7871ce1f20cb81e868467b9231c65e15b->enter($__internal_6acbd64b5a84cbd009fe5355cec450e7871ce1f20cb81e868467b9231c65e15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_39fcae7afa22abf64c4fc567ba50dc0e7df0d7d0aa3522ddef3a55cfb9e2402b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fcae7afa22abf64c4fc567ba50dc0e7df0d7d0aa3522ddef3a55cfb9e2402b->enter($__internal_39fcae7afa22abf64c4fc567ba50dc0e7df0d7d0aa3522ddef3a55cfb9e2402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6acbd64b5a84cbd009fe5355cec450e7871ce1f20cb81e868467b9231c65e15b->leave($__internal_6acbd64b5a84cbd009fe5355cec450e7871ce1f20cb81e868467b9231c65e15b_prof);

        
        $__internal_39fcae7afa22abf64c4fc567ba50dc0e7df0d7d0aa3522ddef3a55cfb9e2402b->leave($__internal_39fcae7afa22abf64c4fc567ba50dc0e7df0d7d0aa3522ddef3a55cfb9e2402b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d87255b692df8443e9fa77b6c0740adc576ad530ff0b37c95aec3b5e003c977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d87255b692df8443e9fa77b6c0740adc576ad530ff0b37c95aec3b5e003c977->enter($__internal_2d87255b692df8443e9fa77b6c0740adc576ad530ff0b37c95aec3b5e003c977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b468a393e07c980748d84294da5b473dc5ae8be1c7b8b77329635b1a90bbccdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b468a393e07c980748d84294da5b473dc5ae8be1c7b8b77329635b1a90bbccdc->enter($__internal_b468a393e07c980748d84294da5b473dc5ae8be1c7b8b77329635b1a90bbccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.name"), "html", null, true);
        
        $__internal_b468a393e07c980748d84294da5b473dc5ae8be1c7b8b77329635b1a90bbccdc->leave($__internal_b468a393e07c980748d84294da5b473dc5ae8be1c7b8b77329635b1a90bbccdc_prof);

        
        $__internal_2d87255b692df8443e9fa77b6c0740adc576ad530ff0b37c95aec3b5e003c977->leave($__internal_2d87255b692df8443e9fa77b6c0740adc576ad530ff0b37c95aec3b5e003c977_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_137367752dfb1a210b8c3b0dbc1f9f8499b4be38ecce8aa4afbda24d7eda920e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137367752dfb1a210b8c3b0dbc1f9f8499b4be38ecce8aa4afbda24d7eda920e->enter($__internal_137367752dfb1a210b8c3b0dbc1f9f8499b4be38ecce8aa4afbda24d7eda920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f1bafc3ff5dd9cdc3ffbd8843bcec343dc798de9690b7b6291e8f773723c00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1bafc3ff5dd9cdc3ffbd8843bcec343dc798de9690b7b6291e8f773723c00b->enter($__internal_0f1bafc3ff5dd9cdc3ffbd8843bcec343dc798de9690b7b6291e8f773723c00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"/build/app.css\">
    ";
        
        $__internal_0f1bafc3ff5dd9cdc3ffbd8843bcec343dc798de9690b7b6291e8f773723c00b->leave($__internal_0f1bafc3ff5dd9cdc3ffbd8843bcec343dc798de9690b7b6291e8f773723c00b_prof);

        
        $__internal_137367752dfb1a210b8c3b0dbc1f9f8499b4be38ecce8aa4afbda24d7eda920e->leave($__internal_137367752dfb1a210b8c3b0dbc1f9f8499b4be38ecce8aa4afbda24d7eda920e_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e1ff73e8972d37b9ea572b3614e2673e39d756bf1d2f97b814becfe56b28d1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ff73e8972d37b9ea572b3614e2673e39d756bf1d2f97b814becfe56b28d1be->enter($__internal_e1ff73e8972d37b9ea572b3614e2673e39d756bf1d2f97b814becfe56b28d1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_13271bd23c192881c8b21cf2aea5308d2d3c900b511682103e39a57790f308ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13271bd23c192881c8b21cf2aea5308d2d3c900b511682103e39a57790f308ac->enter($__internal_13271bd23c192881c8b21cf2aea5308d2d3c900b511682103e39a57790f308ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_13271bd23c192881c8b21cf2aea5308d2d3c900b511682103e39a57790f308ac->leave($__internal_13271bd23c192881c8b21cf2aea5308d2d3c900b511682103e39a57790f308ac_prof);

        
        $__internal_e1ff73e8972d37b9ea572b3614e2673e39d756bf1d2f97b814becfe56b28d1be->leave($__internal_e1ff73e8972d37b9ea572b3614e2673e39d756bf1d2f97b814becfe56b28d1be_prof);

    }

    // line 42
    public function block_flashmessages($context, array $blocks = array())
    {
        $__internal_91ad1328cd5161eaa3e5b8b2ada1f24f866ab21212a49b6c0ac423afbe48dabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ad1328cd5161eaa3e5b8b2ada1f24f866ab21212a49b6c0ac423afbe48dabd->enter($__internal_91ad1328cd5161eaa3e5b8b2ada1f24f866ab21212a49b6c0ac423afbe48dabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashmessages"));

        $__internal_f4d2a8e635e665360e83d6bb52cfe06cff2bf217aab49704efcb5b36339e9f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d2a8e635e665360e83d6bb52cfe06cff2bf217aab49704efcb5b36339e9f48->enter($__internal_f4d2a8e635e665360e83d6bb52cfe06cff2bf217aab49704efcb5b36339e9f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashmessages"));

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
        
        $__internal_f4d2a8e635e665360e83d6bb52cfe06cff2bf217aab49704efcb5b36339e9f48->leave($__internal_f4d2a8e635e665360e83d6bb52cfe06cff2bf217aab49704efcb5b36339e9f48_prof);

        
        $__internal_91ad1328cd5161eaa3e5b8b2ada1f24f866ab21212a49b6c0ac423afbe48dabd->leave($__internal_91ad1328cd5161eaa3e5b8b2ada1f24f866ab21212a49b6c0ac423afbe48dabd_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_f950ec11723cc8b2091ca2296b4ed433e3bc22eb7f1c92d13f017a44d42c6c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f950ec11723cc8b2091ca2296b4ed433e3bc22eb7f1c92d13f017a44d42c6c8c->enter($__internal_f950ec11723cc8b2091ca2296b4ed433e3bc22eb7f1c92d13f017a44d42c6c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be6cc4ad1a0cfea0ca5059022e8055f97fae7daa98f37396b6984b48be713950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6cc4ad1a0cfea0ca5059022e8055f97fae7daa98f37396b6984b48be713950->enter($__internal_be6cc4ad1a0cfea0ca5059022e8055f97fae7daa98f37396b6984b48be713950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_be6cc4ad1a0cfea0ca5059022e8055f97fae7daa98f37396b6984b48be713950->leave($__internal_be6cc4ad1a0cfea0ca5059022e8055f97fae7daa98f37396b6984b48be713950_prof);

        
        $__internal_f950ec11723cc8b2091ca2296b4ed433e3bc22eb7f1c92d13f017a44d42c6c8c->leave($__internal_f950ec11723cc8b2091ca2296b4ed433e3bc22eb7f1c92d13f017a44d42c6c8c_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7de560762a06e528beb8a7e39271292926cbb1fecebde057cf9db8a53d481b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de560762a06e528beb8a7e39271292926cbb1fecebde057cf9db8a53d481b42->enter($__internal_7de560762a06e528beb8a7e39271292926cbb1fecebde057cf9db8a53d481b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_62cd2078d24433460ccd491b0d7df4c5c68928bd7704bb962c97bae792a0407f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cd2078d24433460ccd491b0d7df4c5c68928bd7704bb962c97bae792a0407f->enter($__internal_62cd2078d24433460ccd491b0d7df4c5c68928bd7704bb962c97bae792a0407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    <script src=\"/build/app.js\"></script>
";
        
        $__internal_62cd2078d24433460ccd491b0d7df4c5c68928bd7704bb962c97bae792a0407f->leave($__internal_62cd2078d24433460ccd491b0d7df4c5c68928bd7704bb962c97bae792a0407f_prof);

        
        $__internal_7de560762a06e528beb8a7e39271292926cbb1fecebde057cf9db8a53d481b42->leave($__internal_7de560762a06e528beb8a7e39271292926cbb1fecebde057cf9db8a53d481b42_prof);

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
