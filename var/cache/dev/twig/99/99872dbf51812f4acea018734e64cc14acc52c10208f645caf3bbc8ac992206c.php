<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_36a332d5515176bc38d66a29e3dce989c0af21c91a25636924fa2ceebc90192a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_702cad80c0d79dffd15c0c85cfa6954f0ca346a2e03347dcb1de72c26b8f5edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702cad80c0d79dffd15c0c85cfa6954f0ca346a2e03347dcb1de72c26b8f5edb->enter($__internal_702cad80c0d79dffd15c0c85cfa6954f0ca346a2e03347dcb1de72c26b8f5edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_19d4dd64326925538523f931a790e2d918dd650bd00e00438f89b5bf8832406d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d4dd64326925538523f931a790e2d918dd650bd00e00438f89b5bf8832406d->enter($__internal_19d4dd64326925538523f931a790e2d918dd650bd00e00438f89b5bf8832406d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_702cad80c0d79dffd15c0c85cfa6954f0ca346a2e03347dcb1de72c26b8f5edb->leave($__internal_702cad80c0d79dffd15c0c85cfa6954f0ca346a2e03347dcb1de72c26b8f5edb_prof);

        
        $__internal_19d4dd64326925538523f931a790e2d918dd650bd00e00438f89b5bf8832406d->leave($__internal_19d4dd64326925538523f931a790e2d918dd650bd00e00438f89b5bf8832406d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_697725eaaf14815e1ea808713efd8862f8cf5dc6a48a85522237ae84dc5447e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697725eaaf14815e1ea808713efd8862f8cf5dc6a48a85522237ae84dc5447e6->enter($__internal_697725eaaf14815e1ea808713efd8862f8cf5dc6a48a85522237ae84dc5447e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bd1800b81db3dddc728f65e151389075ac3d28c9e7b0687be686f67d8b19399a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1800b81db3dddc728f65e151389075ac3d28c9e7b0687be686f67d8b19399a->enter($__internal_bd1800b81db3dddc728f65e151389075ac3d28c9e7b0687be686f67d8b19399a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bd1800b81db3dddc728f65e151389075ac3d28c9e7b0687be686f67d8b19399a->leave($__internal_bd1800b81db3dddc728f65e151389075ac3d28c9e7b0687be686f67d8b19399a_prof);

        
        $__internal_697725eaaf14815e1ea808713efd8862f8cf5dc6a48a85522237ae84dc5447e6->leave($__internal_697725eaaf14815e1ea808713efd8862f8cf5dc6a48a85522237ae84dc5447e6_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fc8dc602f202401f79e91ef0aa6e20ba87176a3b16262992895e99c3ce360905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8dc602f202401f79e91ef0aa6e20ba87176a3b16262992895e99c3ce360905->enter($__internal_fc8dc602f202401f79e91ef0aa6e20ba87176a3b16262992895e99c3ce360905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8701d6f993f364218fdf75c3e559dfd997ae1217c64c40644c4510c3706770ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8701d6f993f364218fdf75c3e559dfd997ae1217c64c40644c4510c3706770ba->enter($__internal_8701d6f993f364218fdf75c3e559dfd997ae1217c64c40644c4510c3706770ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8701d6f993f364218fdf75c3e559dfd997ae1217c64c40644c4510c3706770ba->leave($__internal_8701d6f993f364218fdf75c3e559dfd997ae1217c64c40644c4510c3706770ba_prof);

        
        $__internal_fc8dc602f202401f79e91ef0aa6e20ba87176a3b16262992895e99c3ce360905->leave($__internal_fc8dc602f202401f79e91ef0aa6e20ba87176a3b16262992895e99c3ce360905_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_94057fb2fec6c43b81f3828e82cb8a645464e8e4556bb1bee2f40ded0de76a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94057fb2fec6c43b81f3828e82cb8a645464e8e4556bb1bee2f40ded0de76a14->enter($__internal_94057fb2fec6c43b81f3828e82cb8a645464e8e4556bb1bee2f40ded0de76a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d66201a3779bfa6a24a279133d7ace65acf7801c01ed16c275bf66990811a51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66201a3779bfa6a24a279133d7ace65acf7801c01ed16c275bf66990811a51d->enter($__internal_d66201a3779bfa6a24a279133d7ace65acf7801c01ed16c275bf66990811a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_d66201a3779bfa6a24a279133d7ace65acf7801c01ed16c275bf66990811a51d->leave($__internal_d66201a3779bfa6a24a279133d7ace65acf7801c01ed16c275bf66990811a51d_prof);

        
        $__internal_94057fb2fec6c43b81f3828e82cb8a645464e8e4556bb1bee2f40ded0de76a14->leave($__internal_94057fb2fec6c43b81f3828e82cb8a645464e8e4556bb1bee2f40ded0de76a14_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7c021a45222ec7fa059c8cf20ce61609401d7c1a2f98cb70e6b6d95710a37006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c021a45222ec7fa059c8cf20ce61609401d7c1a2f98cb70e6b6d95710a37006->enter($__internal_7c021a45222ec7fa059c8cf20ce61609401d7c1a2f98cb70e6b6d95710a37006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a9cc9e725ee6526894fd28431a59be0ecaa799312bfd086c539fb2ff4aea0fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cc9e725ee6526894fd28431a59be0ecaa799312bfd086c539fb2ff4aea0fe1->enter($__internal_a9cc9e725ee6526894fd28431a59be0ecaa799312bfd086c539fb2ff4aea0fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_a9cc9e725ee6526894fd28431a59be0ecaa799312bfd086c539fb2ff4aea0fe1->leave($__internal_a9cc9e725ee6526894fd28431a59be0ecaa799312bfd086c539fb2ff4aea0fe1_prof);

        
        $__internal_7c021a45222ec7fa059c8cf20ce61609401d7c1a2f98cb70e6b6d95710a37006->leave($__internal_7c021a45222ec7fa059c8cf20ce61609401d7c1a2f98cb70e6b6d95710a37006_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8e6450a4ba6f82c9fa20ccc53eacce0b765331edfbe86e39a2db62ccf4ed823e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6450a4ba6f82c9fa20ccc53eacce0b765331edfbe86e39a2db62ccf4ed823e->enter($__internal_8e6450a4ba6f82c9fa20ccc53eacce0b765331edfbe86e39a2db62ccf4ed823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_983637efcea5f36ca72c738885905146cbbd1c704aa97739e7f8005a700fabe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983637efcea5f36ca72c738885905146cbbd1c704aa97739e7f8005a700fabe8->enter($__internal_983637efcea5f36ca72c738885905146cbbd1c704aa97739e7f8005a700fabe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_983637efcea5f36ca72c738885905146cbbd1c704aa97739e7f8005a700fabe8->leave($__internal_983637efcea5f36ca72c738885905146cbbd1c704aa97739e7f8005a700fabe8_prof);

        
        $__internal_8e6450a4ba6f82c9fa20ccc53eacce0b765331edfbe86e39a2db62ccf4ed823e->leave($__internal_8e6450a4ba6f82c9fa20ccc53eacce0b765331edfbe86e39a2db62ccf4ed823e_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0a7f97fae30fbfc8c76e3d46ba15a96020ab653c0c86a3f12ebae57a89621749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7f97fae30fbfc8c76e3d46ba15a96020ab653c0c86a3f12ebae57a89621749->enter($__internal_0a7f97fae30fbfc8c76e3d46ba15a96020ab653c0c86a3f12ebae57a89621749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_7c44821f4abc9fc650dd3b52060fcf6a835cdd71f41bd040134077f3cac92045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c44821f4abc9fc650dd3b52060fcf6a835cdd71f41bd040134077f3cac92045->enter($__internal_7c44821f4abc9fc650dd3b52060fcf6a835cdd71f41bd040134077f3cac92045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7c44821f4abc9fc650dd3b52060fcf6a835cdd71f41bd040134077f3cac92045->leave($__internal_7c44821f4abc9fc650dd3b52060fcf6a835cdd71f41bd040134077f3cac92045_prof);

        
        $__internal_0a7f97fae30fbfc8c76e3d46ba15a96020ab653c0c86a3f12ebae57a89621749->leave($__internal_0a7f97fae30fbfc8c76e3d46ba15a96020ab653c0c86a3f12ebae57a89621749_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_01ac478635e8f03739dc8f429a3949b03d063be65ae19aeb802eec48aeb5d899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ac478635e8f03739dc8f429a3949b03d063be65ae19aeb802eec48aeb5d899->enter($__internal_01ac478635e8f03739dc8f429a3949b03d063be65ae19aeb802eec48aeb5d899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_857e4ee05546248ed5e5e8b89d472b811b3d33b4760f9c6ef1c987668175cf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857e4ee05546248ed5e5e8b89d472b811b3d33b4760f9c6ef1c987668175cf4e->enter($__internal_857e4ee05546248ed5e5e8b89d472b811b3d33b4760f9c6ef1c987668175cf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_857e4ee05546248ed5e5e8b89d472b811b3d33b4760f9c6ef1c987668175cf4e->leave($__internal_857e4ee05546248ed5e5e8b89d472b811b3d33b4760f9c6ef1c987668175cf4e_prof);

        
        $__internal_01ac478635e8f03739dc8f429a3949b03d063be65ae19aeb802eec48aeb5d899->leave($__internal_01ac478635e8f03739dc8f429a3949b03d063be65ae19aeb802eec48aeb5d899_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9b16f010b33366fa1ab00c944a11b36fc5d5613effb23b670afd7f9641522260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b16f010b33366fa1ab00c944a11b36fc5d5613effb23b670afd7f9641522260->enter($__internal_9b16f010b33366fa1ab00c944a11b36fc5d5613effb23b670afd7f9641522260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f010fd1cce654848bfb72ff8ba611cf24c142751b19794549ff4d8c8f5ee623e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f010fd1cce654848bfb72ff8ba611cf24c142751b19794549ff4d8c8f5ee623e->enter($__internal_f010fd1cce654848bfb72ff8ba611cf24c142751b19794549ff4d8c8f5ee623e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f010fd1cce654848bfb72ff8ba611cf24c142751b19794549ff4d8c8f5ee623e->leave($__internal_f010fd1cce654848bfb72ff8ba611cf24c142751b19794549ff4d8c8f5ee623e_prof);

        
        $__internal_9b16f010b33366fa1ab00c944a11b36fc5d5613effb23b670afd7f9641522260->leave($__internal_9b16f010b33366fa1ab00c944a11b36fc5d5613effb23b670afd7f9641522260_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6edc1facd1c1b03822bc5c0b22092de0dd4a8119429872edf5bc9675f4f77486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edc1facd1c1b03822bc5c0b22092de0dd4a8119429872edf5bc9675f4f77486->enter($__internal_6edc1facd1c1b03822bc5c0b22092de0dd4a8119429872edf5bc9675f4f77486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0d5f55824344ddf2b538ccfd0bdeb4d7188fee06b045d6d951f88f9d002aaa5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5f55824344ddf2b538ccfd0bdeb4d7188fee06b045d6d951f88f9d002aaa5c->enter($__internal_0d5f55824344ddf2b538ccfd0bdeb4d7188fee06b045d6d951f88f9d002aaa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
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
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_0d5f55824344ddf2b538ccfd0bdeb4d7188fee06b045d6d951f88f9d002aaa5c->leave($__internal_0d5f55824344ddf2b538ccfd0bdeb4d7188fee06b045d6d951f88f9d002aaa5c_prof);

        
        $__internal_6edc1facd1c1b03822bc5c0b22092de0dd4a8119429872edf5bc9675f4f77486->leave($__internal_6edc1facd1c1b03822bc5c0b22092de0dd4a8119429872edf5bc9675f4f77486_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_29e0b28f71da708e2917eb079ed6924c3c7c78c2f66dd4a7e017b768a472d654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e0b28f71da708e2917eb079ed6924c3c7c78c2f66dd4a7e017b768a472d654->enter($__internal_29e0b28f71da708e2917eb079ed6924c3c7c78c2f66dd4a7e017b768a472d654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fa080252cd6a76c2bb5137de0e1355915b97c72b3c3a5cd211d373ba2b53ad6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa080252cd6a76c2bb5137de0e1355915b97c72b3c3a5cd211d373ba2b53ad6a->enter($__internal_fa080252cd6a76c2bb5137de0e1355915b97c72b3c3a5cd211d373ba2b53ad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_fa080252cd6a76c2bb5137de0e1355915b97c72b3c3a5cd211d373ba2b53ad6a->leave($__internal_fa080252cd6a76c2bb5137de0e1355915b97c72b3c3a5cd211d373ba2b53ad6a_prof);

        
        $__internal_29e0b28f71da708e2917eb079ed6924c3c7c78c2f66dd4a7e017b768a472d654->leave($__internal_29e0b28f71da708e2917eb079ed6924c3c7c78c2f66dd4a7e017b768a472d654_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_416ade7f1285ea5ffc0fe0e796fe0c14940a1512a13a2e12e9466635ed69e439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416ade7f1285ea5ffc0fe0e796fe0c14940a1512a13a2e12e9466635ed69e439->enter($__internal_416ade7f1285ea5ffc0fe0e796fe0c14940a1512a13a2e12e9466635ed69e439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_39d2e33ed052c73da92276cc3f720d45d2a595d5dd36c1c89420b0c1d5a0f4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d2e33ed052c73da92276cc3f720d45d2a595d5dd36c1c89420b0c1d5a0f4b7->enter($__internal_39d2e33ed052c73da92276cc3f720d45d2a595d5dd36c1c89420b0c1d5a0f4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_39d2e33ed052c73da92276cc3f720d45d2a595d5dd36c1c89420b0c1d5a0f4b7->leave($__internal_39d2e33ed052c73da92276cc3f720d45d2a595d5dd36c1c89420b0c1d5a0f4b7_prof);

        
        $__internal_416ade7f1285ea5ffc0fe0e796fe0c14940a1512a13a2e12e9466635ed69e439->leave($__internal_416ade7f1285ea5ffc0fe0e796fe0c14940a1512a13a2e12e9466635ed69e439_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_72b81debbbb8c20fbad0e23f93f0b79d531d736d960556efbe1552c91a183c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b81debbbb8c20fbad0e23f93f0b79d531d736d960556efbe1552c91a183c06->enter($__internal_72b81debbbb8c20fbad0e23f93f0b79d531d736d960556efbe1552c91a183c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_fb48a63c11d09b4d957878247ab1b054b0cb5185be0b6e699066efa21031d9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb48a63c11d09b4d957878247ab1b054b0cb5185be0b6e699066efa21031d9da->enter($__internal_fb48a63c11d09b4d957878247ab1b054b0cb5185be0b6e699066efa21031d9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fb48a63c11d09b4d957878247ab1b054b0cb5185be0b6e699066efa21031d9da->leave($__internal_fb48a63c11d09b4d957878247ab1b054b0cb5185be0b6e699066efa21031d9da_prof);

        
        $__internal_72b81debbbb8c20fbad0e23f93f0b79d531d736d960556efbe1552c91a183c06->leave($__internal_72b81debbbb8c20fbad0e23f93f0b79d531d736d960556efbe1552c91a183c06_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_21afc9b9bc2279cb86438fb8a40cb04d0d7301a89beb3351e2901babcfe599e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21afc9b9bc2279cb86438fb8a40cb04d0d7301a89beb3351e2901babcfe599e6->enter($__internal_21afc9b9bc2279cb86438fb8a40cb04d0d7301a89beb3351e2901babcfe599e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_fc410b206af2dd8e16af25ed34d291b384449426248b01b95bdcdf5b2ee850c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc410b206af2dd8e16af25ed34d291b384449426248b01b95bdcdf5b2ee850c2->enter($__internal_fc410b206af2dd8e16af25ed34d291b384449426248b01b95bdcdf5b2ee850c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fc410b206af2dd8e16af25ed34d291b384449426248b01b95bdcdf5b2ee850c2->leave($__internal_fc410b206af2dd8e16af25ed34d291b384449426248b01b95bdcdf5b2ee850c2_prof);

        
        $__internal_21afc9b9bc2279cb86438fb8a40cb04d0d7301a89beb3351e2901babcfe599e6->leave($__internal_21afc9b9bc2279cb86438fb8a40cb04d0d7301a89beb3351e2901babcfe599e6_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8bf7c68995a4995033c2bfc8f84074465de2203cf7aa655e606fcf18f8ebb9a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf7c68995a4995033c2bfc8f84074465de2203cf7aa655e606fcf18f8ebb9a2->enter($__internal_8bf7c68995a4995033c2bfc8f84074465de2203cf7aa655e606fcf18f8ebb9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_cd62165c8b9298c96984703890b00e5390332caa3727842d467fe54c5cac0332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd62165c8b9298c96984703890b00e5390332caa3727842d467fe54c5cac0332->enter($__internal_cd62165c8b9298c96984703890b00e5390332caa3727842d467fe54c5cac0332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cd62165c8b9298c96984703890b00e5390332caa3727842d467fe54c5cac0332->leave($__internal_cd62165c8b9298c96984703890b00e5390332caa3727842d467fe54c5cac0332_prof);

        
        $__internal_8bf7c68995a4995033c2bfc8f84074465de2203cf7aa655e606fcf18f8ebb9a2->leave($__internal_8bf7c68995a4995033c2bfc8f84074465de2203cf7aa655e606fcf18f8ebb9a2_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9659b9e3814d6f24e89775622327892d02ad844a023ca344b8afec8d7ff8b549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9659b9e3814d6f24e89775622327892d02ad844a023ca344b8afec8d7ff8b549->enter($__internal_9659b9e3814d6f24e89775622327892d02ad844a023ca344b8afec8d7ff8b549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_26386c694e5aa1d999f2468f059ee89e98a6044a0918434a6befa86110e13e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26386c694e5aa1d999f2468f059ee89e98a6044a0918434a6befa86110e13e8f->enter($__internal_26386c694e5aa1d999f2468f059ee89e98a6044a0918434a6befa86110e13e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_26386c694e5aa1d999f2468f059ee89e98a6044a0918434a6befa86110e13e8f->leave($__internal_26386c694e5aa1d999f2468f059ee89e98a6044a0918434a6befa86110e13e8f_prof);

        
        $__internal_9659b9e3814d6f24e89775622327892d02ad844a023ca344b8afec8d7ff8b549->leave($__internal_9659b9e3814d6f24e89775622327892d02ad844a023ca344b8afec8d7ff8b549_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_34ba18eed32267e506d15ef94d9f6810520e9b7d9b19677871d65405822b822a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ba18eed32267e506d15ef94d9f6810520e9b7d9b19677871d65405822b822a->enter($__internal_34ba18eed32267e506d15ef94d9f6810520e9b7d9b19677871d65405822b822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b291e713f55c544d24b4b7bfb3f0c6c1b37fa784e3c24c2106d07b515bef325c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b291e713f55c544d24b4b7bfb3f0c6c1b37fa784e3c24c2106d07b515bef325c->enter($__internal_b291e713f55c544d24b4b7bfb3f0c6c1b37fa784e3c24c2106d07b515bef325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_b291e713f55c544d24b4b7bfb3f0c6c1b37fa784e3c24c2106d07b515bef325c->leave($__internal_b291e713f55c544d24b4b7bfb3f0c6c1b37fa784e3c24c2106d07b515bef325c_prof);

        
        $__internal_34ba18eed32267e506d15ef94d9f6810520e9b7d9b19677871d65405822b822a->leave($__internal_34ba18eed32267e506d15ef94d9f6810520e9b7d9b19677871d65405822b822a_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_50b6b3dbb743bbeeeaf18db722adf00b1d6cb8b21c2c6ed2fa7e1bcdcbc8eea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b6b3dbb743bbeeeaf18db722adf00b1d6cb8b21c2c6ed2fa7e1bcdcbc8eea0->enter($__internal_50b6b3dbb743bbeeeaf18db722adf00b1d6cb8b21c2c6ed2fa7e1bcdcbc8eea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5e346c55d3916cdd9e33ce0e18c76715096d7305739752e3c7bcd929ddd96859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e346c55d3916cdd9e33ce0e18c76715096d7305739752e3c7bcd929ddd96859->enter($__internal_5e346c55d3916cdd9e33ce0e18c76715096d7305739752e3c7bcd929ddd96859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_5e346c55d3916cdd9e33ce0e18c76715096d7305739752e3c7bcd929ddd96859->leave($__internal_5e346c55d3916cdd9e33ce0e18c76715096d7305739752e3c7bcd929ddd96859_prof);

        
        $__internal_50b6b3dbb743bbeeeaf18db722adf00b1d6cb8b21c2c6ed2fa7e1bcdcbc8eea0->leave($__internal_50b6b3dbb743bbeeeaf18db722adf00b1d6cb8b21c2c6ed2fa7e1bcdcbc8eea0_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ab66c02835685486f5ba59aef9cfa11a1eca9a526e68ab993b6c004bd2a15c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab66c02835685486f5ba59aef9cfa11a1eca9a526e68ab993b6c004bd2a15c8a->enter($__internal_ab66c02835685486f5ba59aef9cfa11a1eca9a526e68ab993b6c004bd2a15c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0acf40f260b3bbf26dd52dc9c3b08d38993ddaafbab236b900a32df1037a872c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acf40f260b3bbf26dd52dc9c3b08d38993ddaafbab236b900a32df1037a872c->enter($__internal_0acf40f260b3bbf26dd52dc9c3b08d38993ddaafbab236b900a32df1037a872c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_0acf40f260b3bbf26dd52dc9c3b08d38993ddaafbab236b900a32df1037a872c->leave($__internal_0acf40f260b3bbf26dd52dc9c3b08d38993ddaafbab236b900a32df1037a872c_prof);

        
        $__internal_ab66c02835685486f5ba59aef9cfa11a1eca9a526e68ab993b6c004bd2a15c8a->leave($__internal_ab66c02835685486f5ba59aef9cfa11a1eca9a526e68ab993b6c004bd2a15c8a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/proyecto/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
