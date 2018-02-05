<?php

/* form_div_layout.html.twig */
class __TwigTemplate_1553a296b112528b13e372cfcdbc4dfea97349a54c0e15782c771a315c8ecba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3148651b6681c694f4c2f40b744880b582f54be131d2eba6eecfe8de22d00a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3148651b6681c694f4c2f40b744880b582f54be131d2eba6eecfe8de22d00a87->enter($__internal_3148651b6681c694f4c2f40b744880b582f54be131d2eba6eecfe8de22d00a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_c9934b56a5cd752b6f7161382f1ce0b556853f89fb1314421c9a7d68e67e75a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9934b56a5cd752b6f7161382f1ce0b556853f89fb1314421c9a7d68e67e75a8->enter($__internal_c9934b56a5cd752b6f7161382f1ce0b556853f89fb1314421c9a7d68e67e75a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_3148651b6681c694f4c2f40b744880b582f54be131d2eba6eecfe8de22d00a87->leave($__internal_3148651b6681c694f4c2f40b744880b582f54be131d2eba6eecfe8de22d00a87_prof);

        
        $__internal_c9934b56a5cd752b6f7161382f1ce0b556853f89fb1314421c9a7d68e67e75a8->leave($__internal_c9934b56a5cd752b6f7161382f1ce0b556853f89fb1314421c9a7d68e67e75a8_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_18b540918583c2ced01791c3ecf2c213d12d01d2e63b2a8d859da385a0338ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b540918583c2ced01791c3ecf2c213d12d01d2e63b2a8d859da385a0338ff2->enter($__internal_18b540918583c2ced01791c3ecf2c213d12d01d2e63b2a8d859da385a0338ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_57b3d0b274e17495636a0fb3093d27de9a697c10d1a11d80d592f8f7a71435a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b3d0b274e17495636a0fb3093d27de9a697c10d1a11d80d592f8f7a71435a9->enter($__internal_57b3d0b274e17495636a0fb3093d27de9a697c10d1a11d80d592f8f7a71435a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_57b3d0b274e17495636a0fb3093d27de9a697c10d1a11d80d592f8f7a71435a9->leave($__internal_57b3d0b274e17495636a0fb3093d27de9a697c10d1a11d80d592f8f7a71435a9_prof);

        
        $__internal_18b540918583c2ced01791c3ecf2c213d12d01d2e63b2a8d859da385a0338ff2->leave($__internal_18b540918583c2ced01791c3ecf2c213d12d01d2e63b2a8d859da385a0338ff2_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0b825a4650c077e1af36bd17578c7783ce47f3dd259fd1e2359605a854e06767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b825a4650c077e1af36bd17578c7783ce47f3dd259fd1e2359605a854e06767->enter($__internal_0b825a4650c077e1af36bd17578c7783ce47f3dd259fd1e2359605a854e06767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d5981ac5b559e12d961f4bc85b8382d09e3be0a6d1abba46e02cd67fe952b7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5981ac5b559e12d961f4bc85b8382d09e3be0a6d1abba46e02cd67fe952b7f5->enter($__internal_d5981ac5b559e12d961f4bc85b8382d09e3be0a6d1abba46e02cd67fe952b7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_d5981ac5b559e12d961f4bc85b8382d09e3be0a6d1abba46e02cd67fe952b7f5->leave($__internal_d5981ac5b559e12d961f4bc85b8382d09e3be0a6d1abba46e02cd67fe952b7f5_prof);

        
        $__internal_0b825a4650c077e1af36bd17578c7783ce47f3dd259fd1e2359605a854e06767->leave($__internal_0b825a4650c077e1af36bd17578c7783ce47f3dd259fd1e2359605a854e06767_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6e9f65e2befcf4eab6c2573139e05c8dffb9f7d45a79dec30554641487ace389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9f65e2befcf4eab6c2573139e05c8dffb9f7d45a79dec30554641487ace389->enter($__internal_6e9f65e2befcf4eab6c2573139e05c8dffb9f7d45a79dec30554641487ace389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c3c2746949278766ae2ba0e635d66e6d2b092a49720757e7999b874932ee931e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c2746949278766ae2ba0e635d66e6d2b092a49720757e7999b874932ee931e->enter($__internal_c3c2746949278766ae2ba0e635d66e6d2b092a49720757e7999b874932ee931e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_c3c2746949278766ae2ba0e635d66e6d2b092a49720757e7999b874932ee931e->leave($__internal_c3c2746949278766ae2ba0e635d66e6d2b092a49720757e7999b874932ee931e_prof);

        
        $__internal_6e9f65e2befcf4eab6c2573139e05c8dffb9f7d45a79dec30554641487ace389->leave($__internal_6e9f65e2befcf4eab6c2573139e05c8dffb9f7d45a79dec30554641487ace389_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_33118749c6a69e8440f36241c4cf76dc091ecad2b9e075a7cd48715a09091e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33118749c6a69e8440f36241c4cf76dc091ecad2b9e075a7cd48715a09091e3a->enter($__internal_33118749c6a69e8440f36241c4cf76dc091ecad2b9e075a7cd48715a09091e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_aab8579927f509b485e1e8e8ce0bb1dd70e6b58627f730f673f6110679c8a77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab8579927f509b485e1e8e8ce0bb1dd70e6b58627f730f673f6110679c8a77f->enter($__internal_aab8579927f509b485e1e8e8ce0bb1dd70e6b58627f730f673f6110679c8a77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_aab8579927f509b485e1e8e8ce0bb1dd70e6b58627f730f673f6110679c8a77f->leave($__internal_aab8579927f509b485e1e8e8ce0bb1dd70e6b58627f730f673f6110679c8a77f_prof);

        
        $__internal_33118749c6a69e8440f36241c4cf76dc091ecad2b9e075a7cd48715a09091e3a->leave($__internal_33118749c6a69e8440f36241c4cf76dc091ecad2b9e075a7cd48715a09091e3a_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c7ef894d3511642af725438d29685391f319892f81b1a62025aac1cdedcad152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ef894d3511642af725438d29685391f319892f81b1a62025aac1cdedcad152->enter($__internal_c7ef894d3511642af725438d29685391f319892f81b1a62025aac1cdedcad152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_62d56922277817671d3eb7872eb7c1e70f50ddebbbb3e5014c483462a56cf8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d56922277817671d3eb7872eb7c1e70f50ddebbbb3e5014c483462a56cf8f3->enter($__internal_62d56922277817671d3eb7872eb7c1e70f50ddebbbb3e5014c483462a56cf8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_62d56922277817671d3eb7872eb7c1e70f50ddebbbb3e5014c483462a56cf8f3->leave($__internal_62d56922277817671d3eb7872eb7c1e70f50ddebbbb3e5014c483462a56cf8f3_prof);

        
        $__internal_c7ef894d3511642af725438d29685391f319892f81b1a62025aac1cdedcad152->leave($__internal_c7ef894d3511642af725438d29685391f319892f81b1a62025aac1cdedcad152_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_b2956c9c790fff955e832255cb509840b16fb0aa814681fb673a92444c972a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2956c9c790fff955e832255cb509840b16fb0aa814681fb673a92444c972a5a->enter($__internal_b2956c9c790fff955e832255cb509840b16fb0aa814681fb673a92444c972a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_8aa96300cc394f71741749354e230db8529f5d62c6b6c2607b71e1db208d182c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa96300cc394f71741749354e230db8529f5d62c6b6c2607b71e1db208d182c->enter($__internal_8aa96300cc394f71741749354e230db8529f5d62c6b6c2607b71e1db208d182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_8aa96300cc394f71741749354e230db8529f5d62c6b6c2607b71e1db208d182c->leave($__internal_8aa96300cc394f71741749354e230db8529f5d62c6b6c2607b71e1db208d182c_prof);

        
        $__internal_b2956c9c790fff955e832255cb509840b16fb0aa814681fb673a92444c972a5a->leave($__internal_b2956c9c790fff955e832255cb509840b16fb0aa814681fb673a92444c972a5a_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e7761f9c6fb5f0ba06ead866fbbb0f2dbe6edbe6cb75e89e35ddf0ec6c305477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7761f9c6fb5f0ba06ead866fbbb0f2dbe6edbe6cb75e89e35ddf0ec6c305477->enter($__internal_e7761f9c6fb5f0ba06ead866fbbb0f2dbe6edbe6cb75e89e35ddf0ec6c305477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6367472a8e7c3bebcb691f23e942a318dc4dc5dc9a17f4a8f6f6da0fc33f155b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6367472a8e7c3bebcb691f23e942a318dc4dc5dc9a17f4a8f6f6da0fc33f155b->enter($__internal_6367472a8e7c3bebcb691f23e942a318dc4dc5dc9a17f4a8f6f6da0fc33f155b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_6367472a8e7c3bebcb691f23e942a318dc4dc5dc9a17f4a8f6f6da0fc33f155b->leave($__internal_6367472a8e7c3bebcb691f23e942a318dc4dc5dc9a17f4a8f6f6da0fc33f155b_prof);

        
        $__internal_e7761f9c6fb5f0ba06ead866fbbb0f2dbe6edbe6cb75e89e35ddf0ec6c305477->leave($__internal_e7761f9c6fb5f0ba06ead866fbbb0f2dbe6edbe6cb75e89e35ddf0ec6c305477_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3c4273a114f7dc1d697e7f2a2231d26c9b0a64de6fdfdad05ebfb7539c05be13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4273a114f7dc1d697e7f2a2231d26c9b0a64de6fdfdad05ebfb7539c05be13->enter($__internal_3c4273a114f7dc1d697e7f2a2231d26c9b0a64de6fdfdad05ebfb7539c05be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_54bd5f70856ab6b7feea5af24c463fefbd5baabf847006205b6f208bb6eb114a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bd5f70856ab6b7feea5af24c463fefbd5baabf847006205b6f208bb6eb114a->enter($__internal_54bd5f70856ab6b7feea5af24c463fefbd5baabf847006205b6f208bb6eb114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_54bd5f70856ab6b7feea5af24c463fefbd5baabf847006205b6f208bb6eb114a->leave($__internal_54bd5f70856ab6b7feea5af24c463fefbd5baabf847006205b6f208bb6eb114a_prof);

        
        $__internal_3c4273a114f7dc1d697e7f2a2231d26c9b0a64de6fdfdad05ebfb7539c05be13->leave($__internal_3c4273a114f7dc1d697e7f2a2231d26c9b0a64de6fdfdad05ebfb7539c05be13_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_2c8ba8e6d621b536db21f2274c6af54a4eb501f0e6b5bb15375f05e0eb1a60d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8ba8e6d621b536db21f2274c6af54a4eb501f0e6b5bb15375f05e0eb1a60d0->enter($__internal_2c8ba8e6d621b536db21f2274c6af54a4eb501f0e6b5bb15375f05e0eb1a60d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_567682644a2927a38cec4d94e778451bba9b0144c072393b1cc3c6a5f5c8101e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567682644a2927a38cec4d94e778451bba9b0144c072393b1cc3c6a5f5c8101e->enter($__internal_567682644a2927a38cec4d94e778451bba9b0144c072393b1cc3c6a5f5c8101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_2b8946d945299a4a9e647584cc435ec9ff14e7f5d3924594f421fcdb8e4f61d7 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_2b8946d945299a4a9e647584cc435ec9ff14e7f5d3924594f421fcdb8e4f61d7)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_2b8946d945299a4a9e647584cc435ec9ff14e7f5d3924594f421fcdb8e4f61d7);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_567682644a2927a38cec4d94e778451bba9b0144c072393b1cc3c6a5f5c8101e->leave($__internal_567682644a2927a38cec4d94e778451bba9b0144c072393b1cc3c6a5f5c8101e_prof);

        
        $__internal_2c8ba8e6d621b536db21f2274c6af54a4eb501f0e6b5bb15375f05e0eb1a60d0->leave($__internal_2c8ba8e6d621b536db21f2274c6af54a4eb501f0e6b5bb15375f05e0eb1a60d0_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8be580e36ad8230af2f4b199dd95df33c465990d91db41a44430307e6cee81f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be580e36ad8230af2f4b199dd95df33c465990d91db41a44430307e6cee81f0->enter($__internal_8be580e36ad8230af2f4b199dd95df33c465990d91db41a44430307e6cee81f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b657f311b708adf15cf20003edee02cd0c886cb3046a22715b08abe164633de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b657f311b708adf15cf20003edee02cd0c886cb3046a22715b08abe164633de2->enter($__internal_b657f311b708adf15cf20003edee02cd0c886cb3046a22715b08abe164633de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_b657f311b708adf15cf20003edee02cd0c886cb3046a22715b08abe164633de2->leave($__internal_b657f311b708adf15cf20003edee02cd0c886cb3046a22715b08abe164633de2_prof);

        
        $__internal_8be580e36ad8230af2f4b199dd95df33c465990d91db41a44430307e6cee81f0->leave($__internal_8be580e36ad8230af2f4b199dd95df33c465990d91db41a44430307e6cee81f0_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bd57ea3bfe492ab15a4a2fd4b837dce0fc13f55972e5024d7b5f6bccde3ef3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd57ea3bfe492ab15a4a2fd4b837dce0fc13f55972e5024d7b5f6bccde3ef3dd->enter($__internal_bd57ea3bfe492ab15a4a2fd4b837dce0fc13f55972e5024d7b5f6bccde3ef3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_89c7339824925dec8a8a6a49a6e0e3b395613bf728d0b090349710911ec9ecd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c7339824925dec8a8a6a49a6e0e3b395613bf728d0b090349710911ec9ecd7->enter($__internal_89c7339824925dec8a8a6a49a6e0e3b395613bf728d0b090349710911ec9ecd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_89c7339824925dec8a8a6a49a6e0e3b395613bf728d0b090349710911ec9ecd7->leave($__internal_89c7339824925dec8a8a6a49a6e0e3b395613bf728d0b090349710911ec9ecd7_prof);

        
        $__internal_bd57ea3bfe492ab15a4a2fd4b837dce0fc13f55972e5024d7b5f6bccde3ef3dd->leave($__internal_bd57ea3bfe492ab15a4a2fd4b837dce0fc13f55972e5024d7b5f6bccde3ef3dd_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_608db6bd3fa91c6a7fd77870f20bf2b2684239c173cfe14d6b78491942c4776c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608db6bd3fa91c6a7fd77870f20bf2b2684239c173cfe14d6b78491942c4776c->enter($__internal_608db6bd3fa91c6a7fd77870f20bf2b2684239c173cfe14d6b78491942c4776c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_68cc8d0b89d761a4fe8dd63fb4db8eaf27bac914e827d64f650871f0f5fc441f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cc8d0b89d761a4fe8dd63fb4db8eaf27bac914e827d64f650871f0f5fc441f->enter($__internal_68cc8d0b89d761a4fe8dd63fb4db8eaf27bac914e827d64f650871f0f5fc441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_68cc8d0b89d761a4fe8dd63fb4db8eaf27bac914e827d64f650871f0f5fc441f->leave($__internal_68cc8d0b89d761a4fe8dd63fb4db8eaf27bac914e827d64f650871f0f5fc441f_prof);

        
        $__internal_608db6bd3fa91c6a7fd77870f20bf2b2684239c173cfe14d6b78491942c4776c->leave($__internal_608db6bd3fa91c6a7fd77870f20bf2b2684239c173cfe14d6b78491942c4776c_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_65fd659da44830fa3a6fc272cdadf112a7e5fe2888710859feb7bfd9bfd73c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fd659da44830fa3a6fc272cdadf112a7e5fe2888710859feb7bfd9bfd73c26->enter($__internal_65fd659da44830fa3a6fc272cdadf112a7e5fe2888710859feb7bfd9bfd73c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_bee7373c92a9e3627610042cf50df506070da1bba152841962e7a5ab2bc24884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee7373c92a9e3627610042cf50df506070da1bba152841962e7a5ab2bc24884->enter($__internal_bee7373c92a9e3627610042cf50df506070da1bba152841962e7a5ab2bc24884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_bee7373c92a9e3627610042cf50df506070da1bba152841962e7a5ab2bc24884->leave($__internal_bee7373c92a9e3627610042cf50df506070da1bba152841962e7a5ab2bc24884_prof);

        
        $__internal_65fd659da44830fa3a6fc272cdadf112a7e5fe2888710859feb7bfd9bfd73c26->leave($__internal_65fd659da44830fa3a6fc272cdadf112a7e5fe2888710859feb7bfd9bfd73c26_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9edc841be5ae043fdb2587ae17318f83eae18af50fa8f31df16d4ba457ebbb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edc841be5ae043fdb2587ae17318f83eae18af50fa8f31df16d4ba457ebbb44->enter($__internal_9edc841be5ae043fdb2587ae17318f83eae18af50fa8f31df16d4ba457ebbb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f349c89b3f91728626507e5a2ef9881af16749d4627865d6f58bb19136f7cab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f349c89b3f91728626507e5a2ef9881af16749d4627865d6f58bb19136f7cab3->enter($__internal_f349c89b3f91728626507e5a2ef9881af16749d4627865d6f58bb19136f7cab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_f349c89b3f91728626507e5a2ef9881af16749d4627865d6f58bb19136f7cab3->leave($__internal_f349c89b3f91728626507e5a2ef9881af16749d4627865d6f58bb19136f7cab3_prof);

        
        $__internal_9edc841be5ae043fdb2587ae17318f83eae18af50fa8f31df16d4ba457ebbb44->leave($__internal_9edc841be5ae043fdb2587ae17318f83eae18af50fa8f31df16d4ba457ebbb44_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5d98943532ca918eec826f236cfd8a07bd9ebaedfd5645de42b2c67b04d01ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d98943532ca918eec826f236cfd8a07bd9ebaedfd5645de42b2c67b04d01ef1->enter($__internal_5d98943532ca918eec826f236cfd8a07bd9ebaedfd5645de42b2c67b04d01ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b6c6afa28bc475031cc651ef525babb42264a5e5c0cdcf218037a747aebba4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c6afa28bc475031cc651ef525babb42264a5e5c0cdcf218037a747aebba4d8->enter($__internal_b6c6afa28bc475031cc651ef525babb42264a5e5c0cdcf218037a747aebba4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_b6c6afa28bc475031cc651ef525babb42264a5e5c0cdcf218037a747aebba4d8->leave($__internal_b6c6afa28bc475031cc651ef525babb42264a5e5c0cdcf218037a747aebba4d8_prof);

        
        $__internal_5d98943532ca918eec826f236cfd8a07bd9ebaedfd5645de42b2c67b04d01ef1->leave($__internal_5d98943532ca918eec826f236cfd8a07bd9ebaedfd5645de42b2c67b04d01ef1_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_e9615475f99b36658d267b01be52619b2991a645763ad2fb795a66502228bbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9615475f99b36658d267b01be52619b2991a645763ad2fb795a66502228bbdf->enter($__internal_e9615475f99b36658d267b01be52619b2991a645763ad2fb795a66502228bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_38e39e2a02192415c983ab57a01255bc12d43a1d9d025ba95ab597a4a3b42693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e39e2a02192415c983ab57a01255bc12d43a1d9d025ba95ab597a4a3b42693->enter($__internal_38e39e2a02192415c983ab57a01255bc12d43a1d9d025ba95ab597a4a3b42693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_38e39e2a02192415c983ab57a01255bc12d43a1d9d025ba95ab597a4a3b42693->leave($__internal_38e39e2a02192415c983ab57a01255bc12d43a1d9d025ba95ab597a4a3b42693_prof);

        
        $__internal_e9615475f99b36658d267b01be52619b2991a645763ad2fb795a66502228bbdf->leave($__internal_e9615475f99b36658d267b01be52619b2991a645763ad2fb795a66502228bbdf_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_503a7ba8b51d788e0c000c2ad4145570d5c3040bbb60806c4c85aa1732a85462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503a7ba8b51d788e0c000c2ad4145570d5c3040bbb60806c4c85aa1732a85462->enter($__internal_503a7ba8b51d788e0c000c2ad4145570d5c3040bbb60806c4c85aa1732a85462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_88c2ccb12c87d39c43f4ee8883648be8b251f584b9b111918483e81e83d312e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c2ccb12c87d39c43f4ee8883648be8b251f584b9b111918483e81e83d312e6->enter($__internal_88c2ccb12c87d39c43f4ee8883648be8b251f584b9b111918483e81e83d312e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_88c2ccb12c87d39c43f4ee8883648be8b251f584b9b111918483e81e83d312e6->leave($__internal_88c2ccb12c87d39c43f4ee8883648be8b251f584b9b111918483e81e83d312e6_prof);

        
        $__internal_503a7ba8b51d788e0c000c2ad4145570d5c3040bbb60806c4c85aa1732a85462->leave($__internal_503a7ba8b51d788e0c000c2ad4145570d5c3040bbb60806c4c85aa1732a85462_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8c326100d62cbdcdc77f468553bb30d823be3263f739fed6b59b6667cede7f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c326100d62cbdcdc77f468553bb30d823be3263f739fed6b59b6667cede7f7b->enter($__internal_8c326100d62cbdcdc77f468553bb30d823be3263f739fed6b59b6667cede7f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_73b9f150c59813b69f8f643a529e5f47b8bef91d8c23c4287c7cbe84df5354ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b9f150c59813b69f8f643a529e5f47b8bef91d8c23c4287c7cbe84df5354ae->enter($__internal_73b9f150c59813b69f8f643a529e5f47b8bef91d8c23c4287c7cbe84df5354ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_73b9f150c59813b69f8f643a529e5f47b8bef91d8c23c4287c7cbe84df5354ae->leave($__internal_73b9f150c59813b69f8f643a529e5f47b8bef91d8c23c4287c7cbe84df5354ae_prof);

        
        $__internal_8c326100d62cbdcdc77f468553bb30d823be3263f739fed6b59b6667cede7f7b->leave($__internal_8c326100d62cbdcdc77f468553bb30d823be3263f739fed6b59b6667cede7f7b_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_e601d970ff5632b7995e62a306b5d7675d5f120c683611b5b0fc5b21dfe4c66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e601d970ff5632b7995e62a306b5d7675d5f120c683611b5b0fc5b21dfe4c66a->enter($__internal_e601d970ff5632b7995e62a306b5d7675d5f120c683611b5b0fc5b21dfe4c66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_46df864fe418e3d78db90077f6d9ae9b041e20d5af9df7f91a23390470ee9526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46df864fe418e3d78db90077f6d9ae9b041e20d5af9df7f91a23390470ee9526->enter($__internal_46df864fe418e3d78db90077f6d9ae9b041e20d5af9df7f91a23390470ee9526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_46df864fe418e3d78db90077f6d9ae9b041e20d5af9df7f91a23390470ee9526->leave($__internal_46df864fe418e3d78db90077f6d9ae9b041e20d5af9df7f91a23390470ee9526_prof);

        
        $__internal_e601d970ff5632b7995e62a306b5d7675d5f120c683611b5b0fc5b21dfe4c66a->leave($__internal_e601d970ff5632b7995e62a306b5d7675d5f120c683611b5b0fc5b21dfe4c66a_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_45d25a9fdc77bb564ef581a6e3d444d9a4eb9c76d184075b16bc13d73319ec94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d25a9fdc77bb564ef581a6e3d444d9a4eb9c76d184075b16bc13d73319ec94->enter($__internal_45d25a9fdc77bb564ef581a6e3d444d9a4eb9c76d184075b16bc13d73319ec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_1375255b5be0505ddfa88f3d0c7ec2af26fe6b5b4d9943113e20764ea08ff81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1375255b5be0505ddfa88f3d0c7ec2af26fe6b5b4d9943113e20764ea08ff81f->enter($__internal_1375255b5be0505ddfa88f3d0c7ec2af26fe6b5b4d9943113e20764ea08ff81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1375255b5be0505ddfa88f3d0c7ec2af26fe6b5b4d9943113e20764ea08ff81f->leave($__internal_1375255b5be0505ddfa88f3d0c7ec2af26fe6b5b4d9943113e20764ea08ff81f_prof);

        
        $__internal_45d25a9fdc77bb564ef581a6e3d444d9a4eb9c76d184075b16bc13d73319ec94->leave($__internal_45d25a9fdc77bb564ef581a6e3d444d9a4eb9c76d184075b16bc13d73319ec94_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9067c23a9fa889cef02f13dc081a65e16f6e553f49d89006df121b788b7c4012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9067c23a9fa889cef02f13dc081a65e16f6e553f49d89006df121b788b7c4012->enter($__internal_9067c23a9fa889cef02f13dc081a65e16f6e553f49d89006df121b788b7c4012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e331219e6b1e8c03ab75930ba4787ccc7a5d9abdaafae0efed0f20d9757d1d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e331219e6b1e8c03ab75930ba4787ccc7a5d9abdaafae0efed0f20d9757d1d21->enter($__internal_e331219e6b1e8c03ab75930ba4787ccc7a5d9abdaafae0efed0f20d9757d1d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_e331219e6b1e8c03ab75930ba4787ccc7a5d9abdaafae0efed0f20d9757d1d21->leave($__internal_e331219e6b1e8c03ab75930ba4787ccc7a5d9abdaafae0efed0f20d9757d1d21_prof);

        
        $__internal_9067c23a9fa889cef02f13dc081a65e16f6e553f49d89006df121b788b7c4012->leave($__internal_9067c23a9fa889cef02f13dc081a65e16f6e553f49d89006df121b788b7c4012_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_afce8092ce914e8b2f0c1150d6f2aeedeeea11823e65102f7901cf8794e7f48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afce8092ce914e8b2f0c1150d6f2aeedeeea11823e65102f7901cf8794e7f48d->enter($__internal_afce8092ce914e8b2f0c1150d6f2aeedeeea11823e65102f7901cf8794e7f48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_32418aaca0f786b14991cd8b846dbfa7d302d1ebd7b427fc2caf79a8b190a026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32418aaca0f786b14991cd8b846dbfa7d302d1ebd7b427fc2caf79a8b190a026->enter($__internal_32418aaca0f786b14991cd8b846dbfa7d302d1ebd7b427fc2caf79a8b190a026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_32418aaca0f786b14991cd8b846dbfa7d302d1ebd7b427fc2caf79a8b190a026->leave($__internal_32418aaca0f786b14991cd8b846dbfa7d302d1ebd7b427fc2caf79a8b190a026_prof);

        
        $__internal_afce8092ce914e8b2f0c1150d6f2aeedeeea11823e65102f7901cf8794e7f48d->leave($__internal_afce8092ce914e8b2f0c1150d6f2aeedeeea11823e65102f7901cf8794e7f48d_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_350f040d1dfbfd846457a540ca3a94655ecc6889534efde97edb0fefd3a5f93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350f040d1dfbfd846457a540ca3a94655ecc6889534efde97edb0fefd3a5f93a->enter($__internal_350f040d1dfbfd846457a540ca3a94655ecc6889534efde97edb0fefd3a5f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_646b2cc95c0110ec5db721db2209cb529333686b91d038a3a8e263ca641fa67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646b2cc95c0110ec5db721db2209cb529333686b91d038a3a8e263ca641fa67a->enter($__internal_646b2cc95c0110ec5db721db2209cb529333686b91d038a3a8e263ca641fa67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_646b2cc95c0110ec5db721db2209cb529333686b91d038a3a8e263ca641fa67a->leave($__internal_646b2cc95c0110ec5db721db2209cb529333686b91d038a3a8e263ca641fa67a_prof);

        
        $__internal_350f040d1dfbfd846457a540ca3a94655ecc6889534efde97edb0fefd3a5f93a->leave($__internal_350f040d1dfbfd846457a540ca3a94655ecc6889534efde97edb0fefd3a5f93a_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_0f2ee2883bedd2b1b4ed4bbe13ba98bc504eca682a574dd36d35360dd192b7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2ee2883bedd2b1b4ed4bbe13ba98bc504eca682a574dd36d35360dd192b7f5->enter($__internal_0f2ee2883bedd2b1b4ed4bbe13ba98bc504eca682a574dd36d35360dd192b7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_cdf7d40a57e3fd42f360eb62d7bade0b67ad685f0a4fb6269f5baf0617b7a313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf7d40a57e3fd42f360eb62d7bade0b67ad685f0a4fb6269f5baf0617b7a313->enter($__internal_cdf7d40a57e3fd42f360eb62d7bade0b67ad685f0a4fb6269f5baf0617b7a313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cdf7d40a57e3fd42f360eb62d7bade0b67ad685f0a4fb6269f5baf0617b7a313->leave($__internal_cdf7d40a57e3fd42f360eb62d7bade0b67ad685f0a4fb6269f5baf0617b7a313_prof);

        
        $__internal_0f2ee2883bedd2b1b4ed4bbe13ba98bc504eca682a574dd36d35360dd192b7f5->leave($__internal_0f2ee2883bedd2b1b4ed4bbe13ba98bc504eca682a574dd36d35360dd192b7f5_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_b4bab341777f83f8fea740c64df5de76cf3e3451a1dba01188ca8165a07fc400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bab341777f83f8fea740c64df5de76cf3e3451a1dba01188ca8165a07fc400->enter($__internal_b4bab341777f83f8fea740c64df5de76cf3e3451a1dba01188ca8165a07fc400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_8f5927e74a292965aa1c15cad01288f00334c08505f3644f620fbd3b7bd6b01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5927e74a292965aa1c15cad01288f00334c08505f3644f620fbd3b7bd6b01c->enter($__internal_8f5927e74a292965aa1c15cad01288f00334c08505f3644f620fbd3b7bd6b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8f5927e74a292965aa1c15cad01288f00334c08505f3644f620fbd3b7bd6b01c->leave($__internal_8f5927e74a292965aa1c15cad01288f00334c08505f3644f620fbd3b7bd6b01c_prof);

        
        $__internal_b4bab341777f83f8fea740c64df5de76cf3e3451a1dba01188ca8165a07fc400->leave($__internal_b4bab341777f83f8fea740c64df5de76cf3e3451a1dba01188ca8165a07fc400_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_60ebf1bbd58758c1f8de6deb2985f9490f0b8559db0d60e5945613e8a773348b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ebf1bbd58758c1f8de6deb2985f9490f0b8559db0d60e5945613e8a773348b->enter($__internal_60ebf1bbd58758c1f8de6deb2985f9490f0b8559db0d60e5945613e8a773348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8e1efdbf032e9498106eeedc55e8ab4ea059d7f05997ad30ed19d19cc8126103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1efdbf032e9498106eeedc55e8ab4ea059d7f05997ad30ed19d19cc8126103->enter($__internal_8e1efdbf032e9498106eeedc55e8ab4ea059d7f05997ad30ed19d19cc8126103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_8e1efdbf032e9498106eeedc55e8ab4ea059d7f05997ad30ed19d19cc8126103->leave($__internal_8e1efdbf032e9498106eeedc55e8ab4ea059d7f05997ad30ed19d19cc8126103_prof);

        
        $__internal_60ebf1bbd58758c1f8de6deb2985f9490f0b8559db0d60e5945613e8a773348b->leave($__internal_60ebf1bbd58758c1f8de6deb2985f9490f0b8559db0d60e5945613e8a773348b_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_0640f4842e873a272ed35b820372cb666e48761ee2f678250a064ee71ef9b4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0640f4842e873a272ed35b820372cb666e48761ee2f678250a064ee71ef9b4d2->enter($__internal_0640f4842e873a272ed35b820372cb666e48761ee2f678250a064ee71ef9b4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_2900632cf6342f3b36289f52381c18f22e2aa39fc0da3d91a1004c4e6e1c0fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2900632cf6342f3b36289f52381c18f22e2aa39fc0da3d91a1004c4e6e1c0fef->enter($__internal_2900632cf6342f3b36289f52381c18f22e2aa39fc0da3d91a1004c4e6e1c0fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_2900632cf6342f3b36289f52381c18f22e2aa39fc0da3d91a1004c4e6e1c0fef->leave($__internal_2900632cf6342f3b36289f52381c18f22e2aa39fc0da3d91a1004c4e6e1c0fef_prof);

        
        $__internal_0640f4842e873a272ed35b820372cb666e48761ee2f678250a064ee71ef9b4d2->leave($__internal_0640f4842e873a272ed35b820372cb666e48761ee2f678250a064ee71ef9b4d2_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_f34830aa5b609aaef4099377150f2d7b5b7f221d7cbae251b1f2cc75285f277e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34830aa5b609aaef4099377150f2d7b5b7f221d7cbae251b1f2cc75285f277e->enter($__internal_f34830aa5b609aaef4099377150f2d7b5b7f221d7cbae251b1f2cc75285f277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_be9eaf4d9716ea06e95ded540caabb9a63067029913c5214bdf085a3dc82a670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9eaf4d9716ea06e95ded540caabb9a63067029913c5214bdf085a3dc82a670->enter($__internal_be9eaf4d9716ea06e95ded540caabb9a63067029913c5214bdf085a3dc82a670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_be9eaf4d9716ea06e95ded540caabb9a63067029913c5214bdf085a3dc82a670->leave($__internal_be9eaf4d9716ea06e95ded540caabb9a63067029913c5214bdf085a3dc82a670_prof);

        
        $__internal_f34830aa5b609aaef4099377150f2d7b5b7f221d7cbae251b1f2cc75285f277e->leave($__internal_f34830aa5b609aaef4099377150f2d7b5b7f221d7cbae251b1f2cc75285f277e_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_08f448495df0fe980957ecc20106aeaa6c203e601b35ea119af4ab9b385f5650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f448495df0fe980957ecc20106aeaa6c203e601b35ea119af4ab9b385f5650->enter($__internal_08f448495df0fe980957ecc20106aeaa6c203e601b35ea119af4ab9b385f5650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_0cdbbf0a70bbc51489559a19375865d13d81271a544db89db6dfa3f00763a935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdbbf0a70bbc51489559a19375865d13d81271a544db89db6dfa3f00763a935->enter($__internal_0cdbbf0a70bbc51489559a19375865d13d81271a544db89db6dfa3f00763a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0cdbbf0a70bbc51489559a19375865d13d81271a544db89db6dfa3f00763a935->leave($__internal_0cdbbf0a70bbc51489559a19375865d13d81271a544db89db6dfa3f00763a935_prof);

        
        $__internal_08f448495df0fe980957ecc20106aeaa6c203e601b35ea119af4ab9b385f5650->leave($__internal_08f448495df0fe980957ecc20106aeaa6c203e601b35ea119af4ab9b385f5650_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_ac891f5ce957092a0ebab13588fe71cdbd0de1fe55891dfcf08753209ad732bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac891f5ce957092a0ebab13588fe71cdbd0de1fe55891dfcf08753209ad732bc->enter($__internal_ac891f5ce957092a0ebab13588fe71cdbd0de1fe55891dfcf08753209ad732bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_c21b719f50cbdb632fd83e6f6261009de7fbb62d25e80933bb0effa06949964b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21b719f50cbdb632fd83e6f6261009de7fbb62d25e80933bb0effa06949964b->enter($__internal_c21b719f50cbdb632fd83e6f6261009de7fbb62d25e80933bb0effa06949964b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c21b719f50cbdb632fd83e6f6261009de7fbb62d25e80933bb0effa06949964b->leave($__internal_c21b719f50cbdb632fd83e6f6261009de7fbb62d25e80933bb0effa06949964b_prof);

        
        $__internal_ac891f5ce957092a0ebab13588fe71cdbd0de1fe55891dfcf08753209ad732bc->leave($__internal_ac891f5ce957092a0ebab13588fe71cdbd0de1fe55891dfcf08753209ad732bc_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2dd466eddb50a1ec89f0ac4b06c272c7ff5e2b19c28c6cd8c89852cf58abeee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd466eddb50a1ec89f0ac4b06c272c7ff5e2b19c28c6cd8c89852cf58abeee3->enter($__internal_2dd466eddb50a1ec89f0ac4b06c272c7ff5e2b19c28c6cd8c89852cf58abeee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c201a222a8495d960ab3cb8f74e8ad4efd8bc78865a852b146623c4d1b7e2976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c201a222a8495d960ab3cb8f74e8ad4efd8bc78865a852b146623c4d1b7e2976->enter($__internal_c201a222a8495d960ab3cb8f74e8ad4efd8bc78865a852b146623c4d1b7e2976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_334d645f63b6de96a5648e59ffb9f73899fbd2e06a7424a598138e25f34c0f0c = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_334d645f63b6de96a5648e59ffb9f73899fbd2e06a7424a598138e25f34c0f0c)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_334d645f63b6de96a5648e59ffb9f73899fbd2e06a7424a598138e25f34c0f0c);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_c201a222a8495d960ab3cb8f74e8ad4efd8bc78865a852b146623c4d1b7e2976->leave($__internal_c201a222a8495d960ab3cb8f74e8ad4efd8bc78865a852b146623c4d1b7e2976_prof);

        
        $__internal_2dd466eddb50a1ec89f0ac4b06c272c7ff5e2b19c28c6cd8c89852cf58abeee3->leave($__internal_2dd466eddb50a1ec89f0ac4b06c272c7ff5e2b19c28c6cd8c89852cf58abeee3_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_eea92fd39cd6e0051cf0451847ab6f994f3ae1e2c830a0a9589dac86d8f5ff32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea92fd39cd6e0051cf0451847ab6f994f3ae1e2c830a0a9589dac86d8f5ff32->enter($__internal_eea92fd39cd6e0051cf0451847ab6f994f3ae1e2c830a0a9589dac86d8f5ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_a43da0f401dbd75e7a77e09747b8f5799ddf14ed6ebb6989d5a4d3646e5edc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43da0f401dbd75e7a77e09747b8f5799ddf14ed6ebb6989d5a4d3646e5edc47->enter($__internal_a43da0f401dbd75e7a77e09747b8f5799ddf14ed6ebb6989d5a4d3646e5edc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_a43da0f401dbd75e7a77e09747b8f5799ddf14ed6ebb6989d5a4d3646e5edc47->leave($__internal_a43da0f401dbd75e7a77e09747b8f5799ddf14ed6ebb6989d5a4d3646e5edc47_prof);

        
        $__internal_eea92fd39cd6e0051cf0451847ab6f994f3ae1e2c830a0a9589dac86d8f5ff32->leave($__internal_eea92fd39cd6e0051cf0451847ab6f994f3ae1e2c830a0a9589dac86d8f5ff32_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_c616135556e7234a181be62807ebd618712d2129a6f700658f6616924c1e3db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c616135556e7234a181be62807ebd618712d2129a6f700658f6616924c1e3db3->enter($__internal_c616135556e7234a181be62807ebd618712d2129a6f700658f6616924c1e3db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_7f0b0397735e473722bf109eb90c52b2c9208cdf5b0fbf5494b1910d6a713de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0b0397735e473722bf109eb90c52b2c9208cdf5b0fbf5494b1910d6a713de5->enter($__internal_7f0b0397735e473722bf109eb90c52b2c9208cdf5b0fbf5494b1910d6a713de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_7f0b0397735e473722bf109eb90c52b2c9208cdf5b0fbf5494b1910d6a713de5->leave($__internal_7f0b0397735e473722bf109eb90c52b2c9208cdf5b0fbf5494b1910d6a713de5_prof);

        
        $__internal_c616135556e7234a181be62807ebd618712d2129a6f700658f6616924c1e3db3->leave($__internal_c616135556e7234a181be62807ebd618712d2129a6f700658f6616924c1e3db3_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_47e33d5e80075c7f1d503b7b95d7375f3f7415c7528345e4abeb5915a2e5206a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e33d5e80075c7f1d503b7b95d7375f3f7415c7528345e4abeb5915a2e5206a->enter($__internal_47e33d5e80075c7f1d503b7b95d7375f3f7415c7528345e4abeb5915a2e5206a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8ad00956e46cc7ae25cc15517667cb786e7cc43bf2bbaca4ebc5b7d472636a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad00956e46cc7ae25cc15517667cb786e7cc43bf2bbaca4ebc5b7d472636a35->enter($__internal_8ad00956e46cc7ae25cc15517667cb786e7cc43bf2bbaca4ebc5b7d472636a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_8ad00956e46cc7ae25cc15517667cb786e7cc43bf2bbaca4ebc5b7d472636a35->leave($__internal_8ad00956e46cc7ae25cc15517667cb786e7cc43bf2bbaca4ebc5b7d472636a35_prof);

        
        $__internal_47e33d5e80075c7f1d503b7b95d7375f3f7415c7528345e4abeb5915a2e5206a->leave($__internal_47e33d5e80075c7f1d503b7b95d7375f3f7415c7528345e4abeb5915a2e5206a_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_caf9aadc8dc627cd2c564820c104674f40542759e927f55e5d1f838abc4ae7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf9aadc8dc627cd2c564820c104674f40542759e927f55e5d1f838abc4ae7a6->enter($__internal_caf9aadc8dc627cd2c564820c104674f40542759e927f55e5d1f838abc4ae7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_48eff1897a718527ad7a6ba9ed7db612bd3d2946cbdfb61243245bdbc5dc92e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48eff1897a718527ad7a6ba9ed7db612bd3d2946cbdfb61243245bdbc5dc92e7->enter($__internal_48eff1897a718527ad7a6ba9ed7db612bd3d2946cbdfb61243245bdbc5dc92e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_48eff1897a718527ad7a6ba9ed7db612bd3d2946cbdfb61243245bdbc5dc92e7->leave($__internal_48eff1897a718527ad7a6ba9ed7db612bd3d2946cbdfb61243245bdbc5dc92e7_prof);

        
        $__internal_caf9aadc8dc627cd2c564820c104674f40542759e927f55e5d1f838abc4ae7a6->leave($__internal_caf9aadc8dc627cd2c564820c104674f40542759e927f55e5d1f838abc4ae7a6_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_453e2d42333371de12616146c0f5243daf9f12360ea51856f055112277dde16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453e2d42333371de12616146c0f5243daf9f12360ea51856f055112277dde16f->enter($__internal_453e2d42333371de12616146c0f5243daf9f12360ea51856f055112277dde16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_330f00658591140e9346cf2cf7768d010f3bf8f536395afbe4ae8d8be1890e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330f00658591140e9346cf2cf7768d010f3bf8f536395afbe4ae8d8be1890e7f->enter($__internal_330f00658591140e9346cf2cf7768d010f3bf8f536395afbe4ae8d8be1890e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_330f00658591140e9346cf2cf7768d010f3bf8f536395afbe4ae8d8be1890e7f->leave($__internal_330f00658591140e9346cf2cf7768d010f3bf8f536395afbe4ae8d8be1890e7f_prof);

        
        $__internal_453e2d42333371de12616146c0f5243daf9f12360ea51856f055112277dde16f->leave($__internal_453e2d42333371de12616146c0f5243daf9f12360ea51856f055112277dde16f_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_c99838cade197df7c3c12f2ed15b2c43a6cfa7340cd08570aa3895c70da5a212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99838cade197df7c3c12f2ed15b2c43a6cfa7340cd08570aa3895c70da5a212->enter($__internal_c99838cade197df7c3c12f2ed15b2c43a6cfa7340cd08570aa3895c70da5a212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_8ce8128f4db232da1617f8020edb6f2542f479f651899492bdfe4fb224a3b29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce8128f4db232da1617f8020edb6f2542f479f651899492bdfe4fb224a3b29e->enter($__internal_8ce8128f4db232da1617f8020edb6f2542f479f651899492bdfe4fb224a3b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_8ce8128f4db232da1617f8020edb6f2542f479f651899492bdfe4fb224a3b29e->leave($__internal_8ce8128f4db232da1617f8020edb6f2542f479f651899492bdfe4fb224a3b29e_prof);

        
        $__internal_c99838cade197df7c3c12f2ed15b2c43a6cfa7340cd08570aa3895c70da5a212->leave($__internal_c99838cade197df7c3c12f2ed15b2c43a6cfa7340cd08570aa3895c70da5a212_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f0eb851e5d1cae1cc0cfb94b9ade6320b9edc3a1160d4f25a2112a9025f9258c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0eb851e5d1cae1cc0cfb94b9ade6320b9edc3a1160d4f25a2112a9025f9258c->enter($__internal_f0eb851e5d1cae1cc0cfb94b9ade6320b9edc3a1160d4f25a2112a9025f9258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_931e5066be3de4b0917bdb76cfa3dd97be75c1dc28f9dfea6a22ca80b5e76ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931e5066be3de4b0917bdb76cfa3dd97be75c1dc28f9dfea6a22ca80b5e76ca1->enter($__internal_931e5066be3de4b0917bdb76cfa3dd97be75c1dc28f9dfea6a22ca80b5e76ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_931e5066be3de4b0917bdb76cfa3dd97be75c1dc28f9dfea6a22ca80b5e76ca1->leave($__internal_931e5066be3de4b0917bdb76cfa3dd97be75c1dc28f9dfea6a22ca80b5e76ca1_prof);

        
        $__internal_f0eb851e5d1cae1cc0cfb94b9ade6320b9edc3a1160d4f25a2112a9025f9258c->leave($__internal_f0eb851e5d1cae1cc0cfb94b9ade6320b9edc3a1160d4f25a2112a9025f9258c_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_49943819f9a5d7460127e597ebeb1ef0458adbf7d71ab512b498a1fcedfe3106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49943819f9a5d7460127e597ebeb1ef0458adbf7d71ab512b498a1fcedfe3106->enter($__internal_49943819f9a5d7460127e597ebeb1ef0458adbf7d71ab512b498a1fcedfe3106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_4a175f6cd1009de5caa658865b9b558da376d0569f9713e4019029929b3528d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a175f6cd1009de5caa658865b9b558da376d0569f9713e4019029929b3528d8->enter($__internal_4a175f6cd1009de5caa658865b9b558da376d0569f9713e4019029929b3528d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_4a175f6cd1009de5caa658865b9b558da376d0569f9713e4019029929b3528d8->leave($__internal_4a175f6cd1009de5caa658865b9b558da376d0569f9713e4019029929b3528d8_prof);

        
        $__internal_49943819f9a5d7460127e597ebeb1ef0458adbf7d71ab512b498a1fcedfe3106->leave($__internal_49943819f9a5d7460127e597ebeb1ef0458adbf7d71ab512b498a1fcedfe3106_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9c255dd682750d74d0c1bf6dda0121bf6b703af63b31770096c27823b82a9b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c255dd682750d74d0c1bf6dda0121bf6b703af63b31770096c27823b82a9b11->enter($__internal_9c255dd682750d74d0c1bf6dda0121bf6b703af63b31770096c27823b82a9b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8b67c38b8d90f8471dff1633e362fcf16a55d28b9245c83fe5dbec876184b79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b67c38b8d90f8471dff1633e362fcf16a55d28b9245c83fe5dbec876184b79b->enter($__internal_8b67c38b8d90f8471dff1633e362fcf16a55d28b9245c83fe5dbec876184b79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_8b67c38b8d90f8471dff1633e362fcf16a55d28b9245c83fe5dbec876184b79b->leave($__internal_8b67c38b8d90f8471dff1633e362fcf16a55d28b9245c83fe5dbec876184b79b_prof);

        
        $__internal_9c255dd682750d74d0c1bf6dda0121bf6b703af63b31770096c27823b82a9b11->leave($__internal_9c255dd682750d74d0c1bf6dda0121bf6b703af63b31770096c27823b82a9b11_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_fa0b984257328cb762fbe0ee420814605b32947b72945269b9b62619c580aeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0b984257328cb762fbe0ee420814605b32947b72945269b9b62619c580aeec->enter($__internal_fa0b984257328cb762fbe0ee420814605b32947b72945269b9b62619c580aeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_b6aa18052196f459158d4768b8ac2342541e17b3ce22adeef150d8065f86f732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6aa18052196f459158d4768b8ac2342541e17b3ce22adeef150d8065f86f732->enter($__internal_b6aa18052196f459158d4768b8ac2342541e17b3ce22adeef150d8065f86f732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_b6aa18052196f459158d4768b8ac2342541e17b3ce22adeef150d8065f86f732->leave($__internal_b6aa18052196f459158d4768b8ac2342541e17b3ce22adeef150d8065f86f732_prof);

        
        $__internal_fa0b984257328cb762fbe0ee420814605b32947b72945269b9b62619c580aeec->leave($__internal_fa0b984257328cb762fbe0ee420814605b32947b72945269b9b62619c580aeec_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_f86df114300b92e9ace835b12694592c200505616898f3f43a5ec465bf1ba223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86df114300b92e9ace835b12694592c200505616898f3f43a5ec465bf1ba223->enter($__internal_f86df114300b92e9ace835b12694592c200505616898f3f43a5ec465bf1ba223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_f44b3bf23bf504f5bc3d81922f6ded15a3e32cbabcb69a63a871707027b06884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44b3bf23bf504f5bc3d81922f6ded15a3e32cbabcb69a63a871707027b06884->enter($__internal_f44b3bf23bf504f5bc3d81922f6ded15a3e32cbabcb69a63a871707027b06884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f44b3bf23bf504f5bc3d81922f6ded15a3e32cbabcb69a63a871707027b06884->leave($__internal_f44b3bf23bf504f5bc3d81922f6ded15a3e32cbabcb69a63a871707027b06884_prof);

        
        $__internal_f86df114300b92e9ace835b12694592c200505616898f3f43a5ec465bf1ba223->leave($__internal_f86df114300b92e9ace835b12694592c200505616898f3f43a5ec465bf1ba223_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_02780ea7090543599eb87d3c85983ebde1de3a8a8178d74bada300a3c1b416ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02780ea7090543599eb87d3c85983ebde1de3a8a8178d74bada300a3c1b416ae->enter($__internal_02780ea7090543599eb87d3c85983ebde1de3a8a8178d74bada300a3c1b416ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_d89c2bfd8ad6d9fa1163f30f1e7ecf6d21e217b2d46671d7b5919cdfc9adaaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89c2bfd8ad6d9fa1163f30f1e7ecf6d21e217b2d46671d7b5919cdfc9adaaaf->enter($__internal_d89c2bfd8ad6d9fa1163f30f1e7ecf6d21e217b2d46671d7b5919cdfc9adaaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_d89c2bfd8ad6d9fa1163f30f1e7ecf6d21e217b2d46671d7b5919cdfc9adaaaf->leave($__internal_d89c2bfd8ad6d9fa1163f30f1e7ecf6d21e217b2d46671d7b5919cdfc9adaaaf_prof);

        
        $__internal_02780ea7090543599eb87d3c85983ebde1de3a8a8178d74bada300a3c1b416ae->leave($__internal_02780ea7090543599eb87d3c85983ebde1de3a8a8178d74bada300a3c1b416ae_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_dd8ab6e472890df1374bff64ae44ca63015d5add8740c750ef28689f6bc44ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8ab6e472890df1374bff64ae44ca63015d5add8740c750ef28689f6bc44ef0->enter($__internal_dd8ab6e472890df1374bff64ae44ca63015d5add8740c750ef28689f6bc44ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_972510381c0ad30079088be7afdcaa2f833e336d461b4c1ed51db3c8faad7cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972510381c0ad30079088be7afdcaa2f833e336d461b4c1ed51db3c8faad7cfe->enter($__internal_972510381c0ad30079088be7afdcaa2f833e336d461b4c1ed51db3c8faad7cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_972510381c0ad30079088be7afdcaa2f833e336d461b4c1ed51db3c8faad7cfe->leave($__internal_972510381c0ad30079088be7afdcaa2f833e336d461b4c1ed51db3c8faad7cfe_prof);

        
        $__internal_dd8ab6e472890df1374bff64ae44ca63015d5add8740c750ef28689f6bc44ef0->leave($__internal_dd8ab6e472890df1374bff64ae44ca63015d5add8740c750ef28689f6bc44ef0_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_030ad09bb904e4a911e79b672ef0b7f3046d5434652ec8d2e2427ccfb1901b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030ad09bb904e4a911e79b672ef0b7f3046d5434652ec8d2e2427ccfb1901b67->enter($__internal_030ad09bb904e4a911e79b672ef0b7f3046d5434652ec8d2e2427ccfb1901b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_712e7df5a95b259798edba2158b4ff9f61fdb5e5816a7c120fcbee396720d7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712e7df5a95b259798edba2158b4ff9f61fdb5e5816a7c120fcbee396720d7ff->enter($__internal_712e7df5a95b259798edba2158b4ff9f61fdb5e5816a7c120fcbee396720d7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_712e7df5a95b259798edba2158b4ff9f61fdb5e5816a7c120fcbee396720d7ff->leave($__internal_712e7df5a95b259798edba2158b4ff9f61fdb5e5816a7c120fcbee396720d7ff_prof);

        
        $__internal_030ad09bb904e4a911e79b672ef0b7f3046d5434652ec8d2e2427ccfb1901b67->leave($__internal_030ad09bb904e4a911e79b672ef0b7f3046d5434652ec8d2e2427ccfb1901b67_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_b7f1a418340dae963daeaae600533279ae8f33d78af86378f1e562f7d10683a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f1a418340dae963daeaae600533279ae8f33d78af86378f1e562f7d10683a0->enter($__internal_b7f1a418340dae963daeaae600533279ae8f33d78af86378f1e562f7d10683a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_1a11cca921aa73b8035162ef8353f045a85ebbd43b565846472a9fc4632055bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a11cca921aa73b8035162ef8353f045a85ebbd43b565846472a9fc4632055bd->enter($__internal_1a11cca921aa73b8035162ef8353f045a85ebbd43b565846472a9fc4632055bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1a11cca921aa73b8035162ef8353f045a85ebbd43b565846472a9fc4632055bd->leave($__internal_1a11cca921aa73b8035162ef8353f045a85ebbd43b565846472a9fc4632055bd_prof);

        
        $__internal_b7f1a418340dae963daeaae600533279ae8f33d78af86378f1e562f7d10683a0->leave($__internal_b7f1a418340dae963daeaae600533279ae8f33d78af86378f1e562f7d10683a0_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/var/www/proyecto/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
