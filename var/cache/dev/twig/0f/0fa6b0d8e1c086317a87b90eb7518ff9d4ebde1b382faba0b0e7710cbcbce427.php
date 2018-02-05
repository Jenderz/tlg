<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e234ca20d5035206d23ec560cc24f88df317778acaed3844fac07225ae2d7e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6364eea8065af761fe02299ada6b2882e89a45263e2d6963f7401480b2ac619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6364eea8065af761fe02299ada6b2882e89a45263e2d6963f7401480b2ac619->enter($__internal_f6364eea8065af761fe02299ada6b2882e89a45263e2d6963f7401480b2ac619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_32831c22441d09983a7f8b2c90c5225534469d887f3b92b705951d4dc0fe1d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32831c22441d09983a7f8b2c90c5225534469d887f3b92b705951d4dc0fe1d4e->enter($__internal_32831c22441d09983a7f8b2c90c5225534469d887f3b92b705951d4dc0fe1d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f6364eea8065af761fe02299ada6b2882e89a45263e2d6963f7401480b2ac619->leave($__internal_f6364eea8065af761fe02299ada6b2882e89a45263e2d6963f7401480b2ac619_prof);

        
        $__internal_32831c22441d09983a7f8b2c90c5225534469d887f3b92b705951d4dc0fe1d4e->leave($__internal_32831c22441d09983a7f8b2c90c5225534469d887f3b92b705951d4dc0fe1d4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20a9f0e60a145936ce1c1f13e0c06bf71e8da386517c9a587cbde8ac830c9303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a9f0e60a145936ce1c1f13e0c06bf71e8da386517c9a587cbde8ac830c9303->enter($__internal_20a9f0e60a145936ce1c1f13e0c06bf71e8da386517c9a587cbde8ac830c9303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0018b65120ae84da1cbd42e557f10bfcd71f10ea6e7bade13f6dabb66f08f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0018b65120ae84da1cbd42e557f10bfcd71f10ea6e7bade13f6dabb66f08f1f->enter($__internal_b0018b65120ae84da1cbd42e557f10bfcd71f10ea6e7bade13f6dabb66f08f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b0018b65120ae84da1cbd42e557f10bfcd71f10ea6e7bade13f6dabb66f08f1f->leave($__internal_b0018b65120ae84da1cbd42e557f10bfcd71f10ea6e7bade13f6dabb66f08f1f_prof);

        
        $__internal_20a9f0e60a145936ce1c1f13e0c06bf71e8da386517c9a587cbde8ac830c9303->leave($__internal_20a9f0e60a145936ce1c1f13e0c06bf71e8da386517c9a587cbde8ac830c9303_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_35d9e4cf277ea07790c45e76d5fb52c7cce50b19b998a1244acbdd8818f90ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d9e4cf277ea07790c45e76d5fb52c7cce50b19b998a1244acbdd8818f90ad0->enter($__internal_35d9e4cf277ea07790c45e76d5fb52c7cce50b19b998a1244acbdd8818f90ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b01e3a3a142d571c9468a6ce1b1d42b6d0e12bea91fcf5d73df683877e46deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b01e3a3a142d571c9468a6ce1b1d42b6d0e12bea91fcf5d73df683877e46deb->enter($__internal_7b01e3a3a142d571c9468a6ce1b1d42b6d0e12bea91fcf5d73df683877e46deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7b01e3a3a142d571c9468a6ce1b1d42b6d0e12bea91fcf5d73df683877e46deb->leave($__internal_7b01e3a3a142d571c9468a6ce1b1d42b6d0e12bea91fcf5d73df683877e46deb_prof);

        
        $__internal_35d9e4cf277ea07790c45e76d5fb52c7cce50b19b998a1244acbdd8818f90ad0->leave($__internal_35d9e4cf277ea07790c45e76d5fb52c7cce50b19b998a1244acbdd8818f90ad0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_801b29f95d2ffb53ac45ea1d47700414b539b50116957226baa33d80b51d2546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801b29f95d2ffb53ac45ea1d47700414b539b50116957226baa33d80b51d2546->enter($__internal_801b29f95d2ffb53ac45ea1d47700414b539b50116957226baa33d80b51d2546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b683b8b90da9546586e7ce8d661fd5d70ca7be25f722a8c624ee08dac1efd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b683b8b90da9546586e7ce8d661fd5d70ca7be25f722a8c624ee08dac1efd0d->enter($__internal_9b683b8b90da9546586e7ce8d661fd5d70ca7be25f722a8c624ee08dac1efd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b683b8b90da9546586e7ce8d661fd5d70ca7be25f722a8c624ee08dac1efd0d->leave($__internal_9b683b8b90da9546586e7ce8d661fd5d70ca7be25f722a8c624ee08dac1efd0d_prof);

        
        $__internal_801b29f95d2ffb53ac45ea1d47700414b539b50116957226baa33d80b51d2546->leave($__internal_801b29f95d2ffb53ac45ea1d47700414b539b50116957226baa33d80b51d2546_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/proyecto/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
