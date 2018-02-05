<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_43bdc0c4e5c07ddcc0f512569e98687527491815413e7dd3dfeba91a97ca0d2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cc65a29513fdceb7e69bfca5be45c710f8f12f78691b2196c40143342b6fc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc65a29513fdceb7e69bfca5be45c710f8f12f78691b2196c40143342b6fc66->enter($__internal_9cc65a29513fdceb7e69bfca5be45c710f8f12f78691b2196c40143342b6fc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_f5422d07c1959332284f305ce07e7c643ae7f0ec1eeddbea0cd03002d1ff880c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5422d07c1959332284f305ce07e7c643ae7f0ec1eeddbea0cd03002d1ff880c->enter($__internal_f5422d07c1959332284f305ce07e7c643ae7f0ec1eeddbea0cd03002d1ff880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_9cc65a29513fdceb7e69bfca5be45c710f8f12f78691b2196c40143342b6fc66->leave($__internal_9cc65a29513fdceb7e69bfca5be45c710f8f12f78691b2196c40143342b6fc66_prof);

        
        $__internal_f5422d07c1959332284f305ce07e7c643ae7f0ec1eeddbea0cd03002d1ff880c->leave($__internal_f5422d07c1959332284f305ce07e7c643ae7f0ec1eeddbea0cd03002d1ff880c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d6d827a45d9ad1bd1750cd161a5b8a6d08c13d3460670b6417edc15145fca803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d827a45d9ad1bd1750cd161a5b8a6d08c13d3460670b6417edc15145fca803->enter($__internal_d6d827a45d9ad1bd1750cd161a5b8a6d08c13d3460670b6417edc15145fca803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b7dff56a0e8410e349b9f464a1f3bf15edc49a272114a69266e9c7ec334442f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dff56a0e8410e349b9f464a1f3bf15edc49a272114a69266e9c7ec334442f1->enter($__internal_b7dff56a0e8410e349b9f464a1f3bf15edc49a272114a69266e9c7ec334442f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_b7dff56a0e8410e349b9f464a1f3bf15edc49a272114a69266e9c7ec334442f1->leave($__internal_b7dff56a0e8410e349b9f464a1f3bf15edc49a272114a69266e9c7ec334442f1_prof);

        
        $__internal_d6d827a45d9ad1bd1750cd161a5b8a6d08c13d3460670b6417edc15145fca803->leave($__internal_d6d827a45d9ad1bd1750cd161a5b8a6d08c13d3460670b6417edc15145fca803_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8802a52ee85bec9a809f5bc911d97d07b172f1dd083b194a684549983fe58ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8802a52ee85bec9a809f5bc911d97d07b172f1dd083b194a684549983fe58ee0->enter($__internal_8802a52ee85bec9a809f5bc911d97d07b172f1dd083b194a684549983fe58ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ea3f60d8ccb96ada7f9cb948237bc185223a4073a3a1f0d7ae405e4ba8bca048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3f60d8ccb96ada7f9cb948237bc185223a4073a3a1f0d7ae405e4ba8bca048->enter($__internal_ea3f60d8ccb96ada7f9cb948237bc185223a4073a3a1f0d7ae405e4ba8bca048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_ea3f60d8ccb96ada7f9cb948237bc185223a4073a3a1f0d7ae405e4ba8bca048->leave($__internal_ea3f60d8ccb96ada7f9cb948237bc185223a4073a3a1f0d7ae405e4ba8bca048_prof);

        
        $__internal_8802a52ee85bec9a809f5bc911d97d07b172f1dd083b194a684549983fe58ee0->leave($__internal_8802a52ee85bec9a809f5bc911d97d07b172f1dd083b194a684549983fe58ee0_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_67b13330d647f6363f35e4ea717d28ef505ec89aff9127ba6446dd3319d4e596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b13330d647f6363f35e4ea717d28ef505ec89aff9127ba6446dd3319d4e596->enter($__internal_67b13330d647f6363f35e4ea717d28ef505ec89aff9127ba6446dd3319d4e596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4505e9c6d0307840233a989d50c15c7a4acae90ff9e5ef1871a4502e58ff108b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4505e9c6d0307840233a989d50c15c7a4acae90ff9e5ef1871a4502e58ff108b->enter($__internal_4505e9c6d0307840233a989d50c15c7a4acae90ff9e5ef1871a4502e58ff108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_4505e9c6d0307840233a989d50c15c7a4acae90ff9e5ef1871a4502e58ff108b->leave($__internal_4505e9c6d0307840233a989d50c15c7a4acae90ff9e5ef1871a4502e58ff108b_prof);

        
        $__internal_67b13330d647f6363f35e4ea717d28ef505ec89aff9127ba6446dd3319d4e596->leave($__internal_67b13330d647f6363f35e4ea717d28ef505ec89aff9127ba6446dd3319d4e596_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d1611c4371ab7f121ac24142cec88e46aed96c016c8819cec00abfd6a83ae1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1611c4371ab7f121ac24142cec88e46aed96c016c8819cec00abfd6a83ae1e4->enter($__internal_d1611c4371ab7f121ac24142cec88e46aed96c016c8819cec00abfd6a83ae1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fc61c3dcc5fa21896ddef089df055dc0f5f91e20b7f717905fcddf6ad40cc27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc61c3dcc5fa21896ddef089df055dc0f5f91e20b7f717905fcddf6ad40cc27d->enter($__internal_fc61c3dcc5fa21896ddef089df055dc0f5f91e20b7f717905fcddf6ad40cc27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_fc61c3dcc5fa21896ddef089df055dc0f5f91e20b7f717905fcddf6ad40cc27d->leave($__internal_fc61c3dcc5fa21896ddef089df055dc0f5f91e20b7f717905fcddf6ad40cc27d_prof);

        
        $__internal_d1611c4371ab7f121ac24142cec88e46aed96c016c8819cec00abfd6a83ae1e4->leave($__internal_d1611c4371ab7f121ac24142cec88e46aed96c016c8819cec00abfd6a83ae1e4_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4176f28a04d31e8185fd1735620d6846b5fe7d299fcf8d537e8c2ac9294d9b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4176f28a04d31e8185fd1735620d6846b5fe7d299fcf8d537e8c2ac9294d9b53->enter($__internal_4176f28a04d31e8185fd1735620d6846b5fe7d299fcf8d537e8c2ac9294d9b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_80bb5c7683c238e29003f9897c2c8258df6f3cec1297ebd3c4f92341caaddf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80bb5c7683c238e29003f9897c2c8258df6f3cec1297ebd3c4f92341caaddf7b->enter($__internal_80bb5c7683c238e29003f9897c2c8258df6f3cec1297ebd3c4f92341caaddf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_80bb5c7683c238e29003f9897c2c8258df6f3cec1297ebd3c4f92341caaddf7b->leave($__internal_80bb5c7683c238e29003f9897c2c8258df6f3cec1297ebd3c4f92341caaddf7b_prof);

        
        $__internal_4176f28a04d31e8185fd1735620d6846b5fe7d299fcf8d537e8c2ac9294d9b53->leave($__internal_4176f28a04d31e8185fd1735620d6846b5fe7d299fcf8d537e8c2ac9294d9b53_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_80ea9a13d2b5838ab4ac218172a92d7fd02f5946f4c4bb3f7aeb7a6f8943721d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ea9a13d2b5838ab4ac218172a92d7fd02f5946f4c4bb3f7aeb7a6f8943721d->enter($__internal_80ea9a13d2b5838ab4ac218172a92d7fd02f5946f4c4bb3f7aeb7a6f8943721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_223d8097821c9cbc8f9f848aeb3404c7c2c9a1e68ccb2cb9deffe4110d2545bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223d8097821c9cbc8f9f848aeb3404c7c2c9a1e68ccb2cb9deffe4110d2545bd->enter($__internal_223d8097821c9cbc8f9f848aeb3404c7c2c9a1e68ccb2cb9deffe4110d2545bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_223d8097821c9cbc8f9f848aeb3404c7c2c9a1e68ccb2cb9deffe4110d2545bd->leave($__internal_223d8097821c9cbc8f9f848aeb3404c7c2c9a1e68ccb2cb9deffe4110d2545bd_prof);

        
        $__internal_80ea9a13d2b5838ab4ac218172a92d7fd02f5946f4c4bb3f7aeb7a6f8943721d->leave($__internal_80ea9a13d2b5838ab4ac218172a92d7fd02f5946f4c4bb3f7aeb7a6f8943721d_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_26304416e9d36a9358192e255ade3d9b46a97e2f4b9306a79a85481622589392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26304416e9d36a9358192e255ade3d9b46a97e2f4b9306a79a85481622589392->enter($__internal_26304416e9d36a9358192e255ade3d9b46a97e2f4b9306a79a85481622589392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_05d6f5fe0a7768175f881ca18866a4c9c76addde5c7f4c79b1ed1d41e5264226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d6f5fe0a7768175f881ca18866a4c9c76addde5c7f4c79b1ed1d41e5264226->enter($__internal_05d6f5fe0a7768175f881ca18866a4c9c76addde5c7f4c79b1ed1d41e5264226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_05d6f5fe0a7768175f881ca18866a4c9c76addde5c7f4c79b1ed1d41e5264226->leave($__internal_05d6f5fe0a7768175f881ca18866a4c9c76addde5c7f4c79b1ed1d41e5264226_prof);

        
        $__internal_26304416e9d36a9358192e255ade3d9b46a97e2f4b9306a79a85481622589392->leave($__internal_26304416e9d36a9358192e255ade3d9b46a97e2f4b9306a79a85481622589392_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a3a9aec562795189c8e22210fd466741d94785f797b02373934731032d565b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a9aec562795189c8e22210fd466741d94785f797b02373934731032d565b63->enter($__internal_a3a9aec562795189c8e22210fd466741d94785f797b02373934731032d565b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7235017fcfb07d07b0bcb704c91bb59334ebf84dc27827a268bf058ed7ab3e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7235017fcfb07d07b0bcb704c91bb59334ebf84dc27827a268bf058ed7ab3e4b->enter($__internal_7235017fcfb07d07b0bcb704c91bb59334ebf84dc27827a268bf058ed7ab3e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_7235017fcfb07d07b0bcb704c91bb59334ebf84dc27827a268bf058ed7ab3e4b->leave($__internal_7235017fcfb07d07b0bcb704c91bb59334ebf84dc27827a268bf058ed7ab3e4b_prof);

        
        $__internal_a3a9aec562795189c8e22210fd466741d94785f797b02373934731032d565b63->leave($__internal_a3a9aec562795189c8e22210fd466741d94785f797b02373934731032d565b63_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/proyecto/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
