<?php

/* form_table_layout.html.twig */
class __TwigTemplate_7eb0f0dbaa677d0a22b390fdd8ca6e977aed00cba8ac1aec398ca3f1f1ba2cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_602d8765d540a3d8ab963ba0e8fe3d93cbc7afa7b21247cf6cc5dbbb802cb780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602d8765d540a3d8ab963ba0e8fe3d93cbc7afa7b21247cf6cc5dbbb802cb780->enter($__internal_602d8765d540a3d8ab963ba0e8fe3d93cbc7afa7b21247cf6cc5dbbb802cb780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a4af1711416907f8e596a512f6b629a27c66a0559eb4eb07d3fa9b795b3e3375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4af1711416907f8e596a512f6b629a27c66a0559eb4eb07d3fa9b795b3e3375->enter($__internal_a4af1711416907f8e596a512f6b629a27c66a0559eb4eb07d3fa9b795b3e3375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_602d8765d540a3d8ab963ba0e8fe3d93cbc7afa7b21247cf6cc5dbbb802cb780->leave($__internal_602d8765d540a3d8ab963ba0e8fe3d93cbc7afa7b21247cf6cc5dbbb802cb780_prof);

        
        $__internal_a4af1711416907f8e596a512f6b629a27c66a0559eb4eb07d3fa9b795b3e3375->leave($__internal_a4af1711416907f8e596a512f6b629a27c66a0559eb4eb07d3fa9b795b3e3375_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_24d0a259deb6debb7e6701689230c858f54586ac5393836a17ffae941f564c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d0a259deb6debb7e6701689230c858f54586ac5393836a17ffae941f564c50->enter($__internal_24d0a259deb6debb7e6701689230c858f54586ac5393836a17ffae941f564c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1449a29f8bd6898e5d6b706d04f89d448c35a85a398e69d38ae08e43df6fa08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1449a29f8bd6898e5d6b706d04f89d448c35a85a398e69d38ae08e43df6fa08a->enter($__internal_1449a29f8bd6898e5d6b706d04f89d448c35a85a398e69d38ae08e43df6fa08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_1449a29f8bd6898e5d6b706d04f89d448c35a85a398e69d38ae08e43df6fa08a->leave($__internal_1449a29f8bd6898e5d6b706d04f89d448c35a85a398e69d38ae08e43df6fa08a_prof);

        
        $__internal_24d0a259deb6debb7e6701689230c858f54586ac5393836a17ffae941f564c50->leave($__internal_24d0a259deb6debb7e6701689230c858f54586ac5393836a17ffae941f564c50_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9e841fdc9a80dc9b00417de22525d4ec4dd65f059ffd1fcfb4ff4cccd24e1ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e841fdc9a80dc9b00417de22525d4ec4dd65f059ffd1fcfb4ff4cccd24e1ba7->enter($__internal_9e841fdc9a80dc9b00417de22525d4ec4dd65f059ffd1fcfb4ff4cccd24e1ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_077b2d5281ae764b0f65a713127f52e292a5ff520de2e2f14f907db093d53e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077b2d5281ae764b0f65a713127f52e292a5ff520de2e2f14f907db093d53e80->enter($__internal_077b2d5281ae764b0f65a713127f52e292a5ff520de2e2f14f907db093d53e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_077b2d5281ae764b0f65a713127f52e292a5ff520de2e2f14f907db093d53e80->leave($__internal_077b2d5281ae764b0f65a713127f52e292a5ff520de2e2f14f907db093d53e80_prof);

        
        $__internal_9e841fdc9a80dc9b00417de22525d4ec4dd65f059ffd1fcfb4ff4cccd24e1ba7->leave($__internal_9e841fdc9a80dc9b00417de22525d4ec4dd65f059ffd1fcfb4ff4cccd24e1ba7_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_720c49f7f3b266ec8cc56e869ec13c486e8cd8d8dcec9f38c129f5f57b9ff69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720c49f7f3b266ec8cc56e869ec13c486e8cd8d8dcec9f38c129f5f57b9ff69e->enter($__internal_720c49f7f3b266ec8cc56e869ec13c486e8cd8d8dcec9f38c129f5f57b9ff69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_9d0785c273b93df9c88f3f8ed2f1b63b9ea4c900a54fb97a431189294c51c22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0785c273b93df9c88f3f8ed2f1b63b9ea4c900a54fb97a431189294c51c22c->enter($__internal_9d0785c273b93df9c88f3f8ed2f1b63b9ea4c900a54fb97a431189294c51c22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_9d0785c273b93df9c88f3f8ed2f1b63b9ea4c900a54fb97a431189294c51c22c->leave($__internal_9d0785c273b93df9c88f3f8ed2f1b63b9ea4c900a54fb97a431189294c51c22c_prof);

        
        $__internal_720c49f7f3b266ec8cc56e869ec13c486e8cd8d8dcec9f38c129f5f57b9ff69e->leave($__internal_720c49f7f3b266ec8cc56e869ec13c486e8cd8d8dcec9f38c129f5f57b9ff69e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1db13d3c0ae0a17957e0d7e7a54f8df6d284b45f16aba09ec83496bb28470744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db13d3c0ae0a17957e0d7e7a54f8df6d284b45f16aba09ec83496bb28470744->enter($__internal_1db13d3c0ae0a17957e0d7e7a54f8df6d284b45f16aba09ec83496bb28470744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_08427663c5a44293c7b90f1bcea46a921b8fa255b0002f0ba718fde66482da80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08427663c5a44293c7b90f1bcea46a921b8fa255b0002f0ba718fde66482da80->enter($__internal_08427663c5a44293c7b90f1bcea46a921b8fa255b0002f0ba718fde66482da80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_08427663c5a44293c7b90f1bcea46a921b8fa255b0002f0ba718fde66482da80->leave($__internal_08427663c5a44293c7b90f1bcea46a921b8fa255b0002f0ba718fde66482da80_prof);

        
        $__internal_1db13d3c0ae0a17957e0d7e7a54f8df6d284b45f16aba09ec83496bb28470744->leave($__internal_1db13d3c0ae0a17957e0d7e7a54f8df6d284b45f16aba09ec83496bb28470744_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/proyecto/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
