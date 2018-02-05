<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_5cc82efd42207d4942ceaf9ef69c715ae130e40065b80addb1ab476e55eb9707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf86c189121e0cb5c3898677e2b96c185198c7cc88687322814f6354b3539245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf86c189121e0cb5c3898677e2b96c185198c7cc88687322814f6354b3539245->enter($__internal_cf86c189121e0cb5c3898677e2b96c185198c7cc88687322814f6354b3539245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_e3f612d3d47b470bf01e0d7e71692973c84412919e5bc3937b567b354ab349c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f612d3d47b470bf01e0d7e71692973c84412919e5bc3937b567b354ab349c1->enter($__internal_e3f612d3d47b470bf01e0d7e71692973c84412919e5bc3937b567b354ab349c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_cf86c189121e0cb5c3898677e2b96c185198c7cc88687322814f6354b3539245->leave($__internal_cf86c189121e0cb5c3898677e2b96c185198c7cc88687322814f6354b3539245_prof);

        
        $__internal_e3f612d3d47b470bf01e0d7e71692973c84412919e5bc3937b567b354ab349c1->leave($__internal_e3f612d3d47b470bf01e0d7e71692973c84412919e5bc3937b567b354ab349c1_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_aeac016306e81edb235337626f2528f24d0f314d629813f67197fb33e2a9a518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeac016306e81edb235337626f2528f24d0f314d629813f67197fb33e2a9a518->enter($__internal_aeac016306e81edb235337626f2528f24d0f314d629813f67197fb33e2a9a518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e3c7b05d2114fc8e413bda0b5c38aebd47b80c93a406c9394b667b0a77383441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c7b05d2114fc8e413bda0b5c38aebd47b80c93a406c9394b667b0a77383441->enter($__internal_e3c7b05d2114fc8e413bda0b5c38aebd47b80c93a406c9394b667b0a77383441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_e3c7b05d2114fc8e413bda0b5c38aebd47b80c93a406c9394b667b0a77383441->leave($__internal_e3c7b05d2114fc8e413bda0b5c38aebd47b80c93a406c9394b667b0a77383441_prof);

        
        $__internal_aeac016306e81edb235337626f2528f24d0f314d629813f67197fb33e2a9a518->leave($__internal_aeac016306e81edb235337626f2528f24d0f314d629813f67197fb33e2a9a518_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_67107b5a573a89b5afb9ed9fd19aa296487cede08c097373b881a67c2764c303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67107b5a573a89b5afb9ed9fd19aa296487cede08c097373b881a67c2764c303->enter($__internal_67107b5a573a89b5afb9ed9fd19aa296487cede08c097373b881a67c2764c303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f7e54cabbfa4a87ed163faf86a28d28170eb22b76fd55f7090b9437f786b016f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e54cabbfa4a87ed163faf86a28d28170eb22b76fd55f7090b9437f786b016f->enter($__internal_f7e54cabbfa4a87ed163faf86a28d28170eb22b76fd55f7090b9437f786b016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_f7e54cabbfa4a87ed163faf86a28d28170eb22b76fd55f7090b9437f786b016f->leave($__internal_f7e54cabbfa4a87ed163faf86a28d28170eb22b76fd55f7090b9437f786b016f_prof);

        
        $__internal_67107b5a573a89b5afb9ed9fd19aa296487cede08c097373b881a67c2764c303->leave($__internal_67107b5a573a89b5afb9ed9fd19aa296487cede08c097373b881a67c2764c303_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c3a5e473230a7ed8168ca64ecd2fcf68d4e9101b1526c843a3a944de2c08455b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a5e473230a7ed8168ca64ecd2fcf68d4e9101b1526c843a3a944de2c08455b->enter($__internal_c3a5e473230a7ed8168ca64ecd2fcf68d4e9101b1526c843a3a944de2c08455b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a7bbe4d641a4987af4058460440cffa3189c15cc1910e43c62bfae1f1166cf52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bbe4d641a4987af4058460440cffa3189c15cc1910e43c62bfae1f1166cf52->enter($__internal_a7bbe4d641a4987af4058460440cffa3189c15cc1910e43c62bfae1f1166cf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_a7bbe4d641a4987af4058460440cffa3189c15cc1910e43c62bfae1f1166cf52->leave($__internal_a7bbe4d641a4987af4058460440cffa3189c15cc1910e43c62bfae1f1166cf52_prof);

        
        $__internal_c3a5e473230a7ed8168ca64ecd2fcf68d4e9101b1526c843a3a944de2c08455b->leave($__internal_c3a5e473230a7ed8168ca64ecd2fcf68d4e9101b1526c843a3a944de2c08455b_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_0720a6e845331b220fd964be16be92a8a5c2c6c0c2e1aebded238084126e8368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0720a6e845331b220fd964be16be92a8a5c2c6c0c2e1aebded238084126e8368->enter($__internal_0720a6e845331b220fd964be16be92a8a5c2c6c0c2e1aebded238084126e8368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_b66092ce2373e724d7ec13028c4f435c6d3b9d39185081e7b9df533ba6f79478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66092ce2373e724d7ec13028c4f435c6d3b9d39185081e7b9df533ba6f79478->enter($__internal_b66092ce2373e724d7ec13028c4f435c6d3b9d39185081e7b9df533ba6f79478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_b66092ce2373e724d7ec13028c4f435c6d3b9d39185081e7b9df533ba6f79478->leave($__internal_b66092ce2373e724d7ec13028c4f435c6d3b9d39185081e7b9df533ba6f79478_prof);

        
        $__internal_0720a6e845331b220fd964be16be92a8a5c2c6c0c2e1aebded238084126e8368->leave($__internal_0720a6e845331b220fd964be16be92a8a5c2c6c0c2e1aebded238084126e8368_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e5841d867e655e95044d1ed0c74e7b17899b4bbd035b72c534c682127e4c3500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5841d867e655e95044d1ed0c74e7b17899b4bbd035b72c534c682127e4c3500->enter($__internal_e5841d867e655e95044d1ed0c74e7b17899b4bbd035b72c534c682127e4c3500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_60381ad00ff8191f7a5d81472a9e7caec8b88ae8d79cc438e019d74e2f682378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60381ad00ff8191f7a5d81472a9e7caec8b88ae8d79cc438e019d74e2f682378->enter($__internal_60381ad00ff8191f7a5d81472a9e7caec8b88ae8d79cc438e019d74e2f682378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_60381ad00ff8191f7a5d81472a9e7caec8b88ae8d79cc438e019d74e2f682378->leave($__internal_60381ad00ff8191f7a5d81472a9e7caec8b88ae8d79cc438e019d74e2f682378_prof);

        
        $__internal_e5841d867e655e95044d1ed0c74e7b17899b4bbd035b72c534c682127e4c3500->leave($__internal_e5841d867e655e95044d1ed0c74e7b17899b4bbd035b72c534c682127e4c3500_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_11872ac3ddd78257955f3b3d857e86b4ad587fdb5c01ad6cc33ba95875f8f880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11872ac3ddd78257955f3b3d857e86b4ad587fdb5c01ad6cc33ba95875f8f880->enter($__internal_11872ac3ddd78257955f3b3d857e86b4ad587fdb5c01ad6cc33ba95875f8f880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_5a39c7fd6972c7793776b522c5e56f7a2eba944d6ca3dc50e8a6881496e8a0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a39c7fd6972c7793776b522c5e56f7a2eba944d6ca3dc50e8a6881496e8a0bf->enter($__internal_5a39c7fd6972c7793776b522c5e56f7a2eba944d6ca3dc50e8a6881496e8a0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_5a39c7fd6972c7793776b522c5e56f7a2eba944d6ca3dc50e8a6881496e8a0bf->leave($__internal_5a39c7fd6972c7793776b522c5e56f7a2eba944d6ca3dc50e8a6881496e8a0bf_prof);

        
        $__internal_11872ac3ddd78257955f3b3d857e86b4ad587fdb5c01ad6cc33ba95875f8f880->leave($__internal_11872ac3ddd78257955f3b3d857e86b4ad587fdb5c01ad6cc33ba95875f8f880_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_67019d2799eddd4654245e5ee14c38e56f4d1c4368365150fd4f41ca23518a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67019d2799eddd4654245e5ee14c38e56f4d1c4368365150fd4f41ca23518a2a->enter($__internal_67019d2799eddd4654245e5ee14c38e56f4d1c4368365150fd4f41ca23518a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_efc529d4d86f12cd2fb8a93f4732b87748db2ccd7d105d4a4d1019e6d41d9587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc529d4d86f12cd2fb8a93f4732b87748db2ccd7d105d4a4d1019e6d41d9587->enter($__internal_efc529d4d86f12cd2fb8a93f4732b87748db2ccd7d105d4a4d1019e6d41d9587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_efc529d4d86f12cd2fb8a93f4732b87748db2ccd7d105d4a4d1019e6d41d9587->leave($__internal_efc529d4d86f12cd2fb8a93f4732b87748db2ccd7d105d4a4d1019e6d41d9587_prof);

        
        $__internal_67019d2799eddd4654245e5ee14c38e56f4d1c4368365150fd4f41ca23518a2a->leave($__internal_67019d2799eddd4654245e5ee14c38e56f4d1c4368365150fd4f41ca23518a2a_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b4be535c254b5496fafa1906ee0ff28a78639ef35cb5be9d64f1827f6f56eb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4be535c254b5496fafa1906ee0ff28a78639ef35cb5be9d64f1827f6f56eb8a->enter($__internal_b4be535c254b5496fafa1906ee0ff28a78639ef35cb5be9d64f1827f6f56eb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_93d7a509469de0a95138ce36c17f5a8861fa1e0a7e6e46544f6b6e5c8bd69a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d7a509469de0a95138ce36c17f5a8861fa1e0a7e6e46544f6b6e5c8bd69a6f->enter($__internal_93d7a509469de0a95138ce36c17f5a8861fa1e0a7e6e46544f6b6e5c8bd69a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_93d7a509469de0a95138ce36c17f5a8861fa1e0a7e6e46544f6b6e5c8bd69a6f->leave($__internal_93d7a509469de0a95138ce36c17f5a8861fa1e0a7e6e46544f6b6e5c8bd69a6f_prof);

        
        $__internal_b4be535c254b5496fafa1906ee0ff28a78639ef35cb5be9d64f1827f6f56eb8a->leave($__internal_b4be535c254b5496fafa1906ee0ff28a78639ef35cb5be9d64f1827f6f56eb8a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/proyecto/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
