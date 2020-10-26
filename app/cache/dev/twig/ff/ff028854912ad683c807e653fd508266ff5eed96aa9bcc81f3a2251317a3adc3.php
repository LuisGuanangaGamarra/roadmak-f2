<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig */
class __TwigTemplate_46db45095a3c995efdf45c8f4a6dfae2482d99d52b3abebe2018e33ff05c7c5e extends Twig_Template
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
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
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
        $__internal_8f4cb919070885856fac9adae3a9afa4a79ffebe4b31e0fbac0fd2a056739fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4cb919070885856fac9adae3a9afa4a79ffebe4b31e0fbac0fd2a056739fe9->enter($__internal_8f4cb919070885856fac9adae3a9afa4a79ffebe4b31e0fbac0fd2a056739fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig"));

        // line 27
        $this->displayBlock('form_widget', $context, $blocks);
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 51
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 58
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 71
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 116
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 122
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 127
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 140
        $this->displayBlock('date_widget', $context, $blocks);
        // line 154
        $this->displayBlock('time_widget', $context, $blocks);
        // line 165
        $this->displayBlock('number_widget', $context, $blocks);
        // line 171
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 176
        $this->displayBlock('money_widget', $context, $blocks);
        // line 180
        $this->displayBlock('url_widget', $context, $blocks);
        // line 185
        $this->displayBlock('search_widget', $context, $blocks);
        // line 190
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 195
        $this->displayBlock('password_widget', $context, $blocks);
        // line 200
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 205
        $this->displayBlock('email_widget', $context, $blocks);
        // line 210
        $this->displayBlock('button_widget', $context, $blocks);
        // line 224
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 229
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 236
        $this->displayBlock('form_label', $context, $blocks);
        // line 271
        $this->displayBlock('button_label', $context, $blocks);
        // line 275
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 283
        $this->displayBlock('form_row', $context, $blocks);
        // line 291
        $this->displayBlock('button_row', $context, $blocks);
        // line 297
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 303
        $this->displayBlock('form', $context, $blocks);
        // line 309
        $this->displayBlock('form_start', $context, $blocks);
        // line 323
        $this->displayBlock('form_end', $context, $blocks);
        // line 330
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 334
        $this->displayBlock('form_errors', $context, $blocks);
        // line 344
        $this->displayBlock('form_rest', $context, $blocks);
        // line 351
        echo "
";
        // line 354
        $this->displayBlock('form_rows', $context, $blocks);
        // line 360
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 391
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 405
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_8f4cb919070885856fac9adae3a9afa4a79ffebe4b31e0fbac0fd2a056739fe9->leave($__internal_8f4cb919070885856fac9adae3a9afa4a79ffebe4b31e0fbac0fd2a056739fe9_prof);

    }

    // line 27
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_af47ea2ef7b19373a56a0888ef7d5c913dd135f29106256a5d844d2e7f7c99a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af47ea2ef7b19373a56a0888ef7d5c913dd135f29106256a5d844d2e7f7c99a4->enter($__internal_af47ea2ef7b19373a56a0888ef7d5c913dd135f29106256a5d844d2e7f7c99a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 28
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 29
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_af47ea2ef7b19373a56a0888ef7d5c913dd135f29106256a5d844d2e7f7c99a4->leave($__internal_af47ea2ef7b19373a56a0888ef7d5c913dd135f29106256a5d844d2e7f7c99a4_prof);

    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4319b33b54a83b9d91d6b6acf5502d26dfa21769c6049cebddaff80a5f678320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4319b33b54a83b9d91d6b6acf5502d26dfa21769c6049cebddaff80a5f678320->enter($__internal_4319b33b54a83b9d91d6b6acf5502d26dfa21769c6049cebddaff80a5f678320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 37
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
  ";
        // line 38
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 38)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_4319b33b54a83b9d91d6b6acf5502d26dfa21769c6049cebddaff80a5f678320->leave($__internal_4319b33b54a83b9d91d6b6acf5502d26dfa21769c6049cebddaff80a5f678320_prof);

    }

    // line 41
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1b79ef7cab4d00d69a93d7565322da20fab2e08addef416425655d2a005c379d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b79ef7cab4d00d69a93d7565322da20fab2e08addef416425655d2a005c379d->enter($__internal_1b79ef7cab4d00d69a93d7565322da20fab2e08addef416425655d2a005c379d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 42
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 46
        $this->displayBlock("form_rows", $context, $blocks);
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 48
        echo "</div>";
        
        $__internal_1b79ef7cab4d00d69a93d7565322da20fab2e08addef416425655d2a005c379d->leave($__internal_1b79ef7cab4d00d69a93d7565322da20fab2e08addef416425655d2a005c379d_prof);

    }

    // line 51
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_8660a2590836e88bce2b48e86bcd91ab68056d7bb3993e82b26916618953ea49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8660a2590836e88bce2b48e86bcd91ab68056d7bb3993e82b26916618953ea49->enter($__internal_8660a2590836e88bce2b48e86bcd91ab68056d7bb3993e82b26916618953ea49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 52
        if (array_key_exists("prototype", $context)) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 55
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_8660a2590836e88bce2b48e86bcd91ab68056d7bb3993e82b26916618953ea49->leave($__internal_8660a2590836e88bce2b48e86bcd91ab68056d7bb3993e82b26916618953ea49_prof);

    }

    // line 58
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e33e3e01e9c2cbfd2fa82ff07290a0e24b7af150cbe6f09ff5732da0a7934a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33e3e01e9c2cbfd2fa82ff07290a0e24b7af150cbe6f09ff5732da0a7934a36->enter($__internal_e33e3e01e9c2cbfd2fa82ff07290a0e24b7af150cbe6f09ff5732da0a7934a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 59
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
  ";
        // line 60
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 60)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_e33e3e01e9c2cbfd2fa82ff07290a0e24b7af150cbe6f09ff5732da0a7934a36->leave($__internal_e33e3e01e9c2cbfd2fa82ff07290a0e24b7af150cbe6f09ff5732da0a7934a36_prof);

    }

    // line 63
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_5cd233c04ed18bae73b864500a7bbec60efd91bd6b961f5a1e99006fe9c0e81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd233c04ed18bae73b864500a7bbec60efd91bd6b961f5a1e99006fe9c0e81f->enter($__internal_5cd233c04ed18bae73b864500a7bbec60efd91bd6b961f5a1e99006fe9c0e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 64
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 65
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 67
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_5cd233c04ed18bae73b864500a7bbec60efd91bd6b961f5a1e99006fe9c0e81f->leave($__internal_5cd233c04ed18bae73b864500a7bbec60efd91bd6b961f5a1e99006fe9c0e81f_prof);

    }

    // line 71
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_be2de0b0c7a9cfbdbf13dcf17d68a6d2bd19546f09116c65120febaf180e6a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2de0b0c7a9cfbdbf13dcf17d68a6d2bd19546f09116c65120febaf180e6a2c->enter($__internal_be2de0b0c7a9cfbdbf13dcf17d68a6d2bd19546f09116c65120febaf180e6a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 72
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</div>";
        
        $__internal_be2de0b0c7a9cfbdbf13dcf17d68a6d2bd19546f09116c65120febaf180e6a2c->leave($__internal_be2de0b0c7a9cfbdbf13dcf17d68a6d2bd19546f09116c65120febaf180e6a2c_prof);

    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_50799707e5e879b7164f81adecbd83ff1850c5ad329946931955942ae28a9e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50799707e5e879b7164f81adecbd83ff1850c5ad329946931955942ae28a9e2c->enter($__internal_50799707e5e879b7164f81adecbd83ff1850c5ad329946931955942ae28a9e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 81
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 82
            $context["required"] = false;
        }
        // line 84
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " data-toggle=\"select2\">";
        // line 85
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 86
            echo "<option
        value=\"\"";
            // line 87
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 89
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 91
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 93
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 96
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 97
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 98
        echo "</select>";
        
        $__internal_50799707e5e879b7164f81adecbd83ff1850c5ad329946931955942ae28a9e2c->leave($__internal_50799707e5e879b7164f81adecbd83ff1850c5ad329946931955942ae28a9e2c_prof);

    }

    // line 101
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_b2560c57020c3fa0d89a48f1381b1efc02937234986030210a16f73f8428a966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2560c57020c3fa0d89a48f1381b1efc02937234986030210a16f73f8428a966->enter($__internal_b2560c57020c3fa0d89a48f1381b1efc02937234986030210a16f73f8428a966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
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
            // line 103
            if (twig_test_iterable($context["choice"])) {
                // line 104
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($context["group_label"])), "html", null, true);
                echo "\">
        ";
                // line 105
                $context["options"] = $context["choice"];
                // line 106
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 107
                echo "</optgroup>";
            } else {
                // line 109
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 110
                echo "      <option
        value=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->getAttribute($context["choice"], "label", array()))), "html", null, true);
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
        
        $__internal_b2560c57020c3fa0d89a48f1381b1efc02937234986030210a16f73f8428a966->leave($__internal_b2560c57020c3fa0d89a48f1381b1efc02937234986030210a16f73f8428a966_prof);

    }

    // line 116
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d358765c0d18bb226dcc59472e844487ecef52cba96144de2a6bea4e9f13f159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d358765c0d18bb226dcc59472e844487ecef52cba96144de2a6bea4e9f13f159->enter($__internal_d358765c0d18bb226dcc59472e844487ecef52cba96144de2a6bea4e9f13f159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 117
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter(($context["switch"] ?? $this->getContext($context, "switch")), "")) : (""));
        // line 118
        echo "<input type=\"checkbox\"
         ";
        // line 119
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? $this->getContext($context, "switch")), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_d358765c0d18bb226dcc59472e844487ecef52cba96144de2a6bea4e9f13f159->leave($__internal_d358765c0d18bb226dcc59472e844487ecef52cba96144de2a6bea4e9f13f159_prof);

    }

    // line 122
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e5b7d7c2527992a6b4abd404111d2ded115365a0deb470cf60e3576b20a4cb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b7d7c2527992a6b4abd404111d2ded115365a0deb470cf60e3576b20a4cb77->enter($__internal_e5b7d7c2527992a6b4abd404111d2ded115365a0deb470cf60e3576b20a4cb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 123
        echo "<input
    type=\"radio\" ";
        // line 124
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_e5b7d7c2527992a6b4abd404111d2ded115365a0deb470cf60e3576b20a4cb77->leave($__internal_e5b7d7c2527992a6b4abd404111d2ded115365a0deb470cf60e3576b20a4cb77_prof);

    }

    // line 127
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_47f14f7fd125e1d3ea6b6523784efc7980d6c23fd13ee3ebdf04872060e16cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f14f7fd125e1d3ea6b6523784efc7980d6c23fd13ee3ebdf04872060e16cfa->enter($__internal_47f14f7fd125e1d3ea6b6523784efc7980d6c23fd13ee3ebdf04872060e16cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 128
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 129
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 136
            echo "</div>";
        }
        
        $__internal_47f14f7fd125e1d3ea6b6523784efc7980d6c23fd13ee3ebdf04872060e16cfa->leave($__internal_47f14f7fd125e1d3ea6b6523784efc7980d6c23fd13ee3ebdf04872060e16cfa_prof);

    }

    // line 140
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2d27676060a05bb63fa1e01130517b234995703b78f935641129969a2f379b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d27676060a05bb63fa1e01130517b234995703b78f935641129969a2f379b00->enter($__internal_2d27676060a05bb63fa1e01130517b234995703b78f935641129969a2f379b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 141
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 142
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 144
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 145
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 146
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 147
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 148
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 150
            echo "</div>";
        }
        
        $__internal_2d27676060a05bb63fa1e01130517b234995703b78f935641129969a2f379b00->leave($__internal_2d27676060a05bb63fa1e01130517b234995703b78f935641129969a2f379b00_prof);

    }

    // line 154
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ecfde356f4cbc985f1d53fb440c7ae1e88c7bf0f8e6918f25fda278ce83a8d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfde356f4cbc985f1d53fb440c7ae1e88c7bf0f8e6918f25fda278ce83a8d2e->enter($__internal_ecfde356f4cbc985f1d53fb440c7ae1e88c7bf0f8e6918f25fda278ce83a8d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 155
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 156
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 158
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 159
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
      ";
            // line 160
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 161
            echo "    </div>";
        }
        
        $__internal_ecfde356f4cbc985f1d53fb440c7ae1e88c7bf0f8e6918f25fda278ce83a8d2e->leave($__internal_ecfde356f4cbc985f1d53fb440c7ae1e88c7bf0f8e6918f25fda278ce83a8d2e_prof);

    }

    // line 165
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_f84496beab72761b48caf5a9db010bf39b39f6a8a808cf1ea02287e507d265d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84496beab72761b48caf5a9db010bf39b39f6a8a808cf1ea02287e507d265d9->enter($__internal_f84496beab72761b48caf5a9db010bf39b39f6a8a808cf1ea02287e507d265d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 167
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f84496beab72761b48caf5a9db010bf39b39f6a8a808cf1ea02287e507d265d9->leave($__internal_f84496beab72761b48caf5a9db010bf39b39f6a8a808cf1ea02287e507d265d9_prof);

    }

    // line 171
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_12f394ad7f523d965a73ba610a701063217f0697535eda2145dad95e84f4ee00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f394ad7f523d965a73ba610a701063217f0697535eda2145dad95e84f4ee00->enter($__internal_12f394ad7f523d965a73ba610a701063217f0697535eda2145dad95e84f4ee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 172
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_12f394ad7f523d965a73ba610a701063217f0697535eda2145dad95e84f4ee00->leave($__internal_12f394ad7f523d965a73ba610a701063217f0697535eda2145dad95e84f4ee00_prof);

    }

    // line 176
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7e249c0187b023b4721d5530c88dc3b41546346e07f5decb24cc614268fda106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e249c0187b023b4721d5530c88dc3b41546346e07f5decb24cc614268fda106->enter($__internal_7e249c0187b023b4721d5530c88dc3b41546346e07f5decb24cc614268fda106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 177
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_7e249c0187b023b4721d5530c88dc3b41546346e07f5decb24cc614268fda106->leave($__internal_7e249c0187b023b4721d5530c88dc3b41546346e07f5decb24cc614268fda106_prof);

    }

    // line 180
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_8602db84efc0d057fa0dcbf3878eaac41987881eea5c3b979975f9d76d66c445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8602db84efc0d057fa0dcbf3878eaac41987881eea5c3b979975f9d76d66c445->enter($__internal_8602db84efc0d057fa0dcbf3878eaac41987881eea5c3b979975f9d76d66c445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 182
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8602db84efc0d057fa0dcbf3878eaac41987881eea5c3b979975f9d76d66c445->leave($__internal_8602db84efc0d057fa0dcbf3878eaac41987881eea5c3b979975f9d76d66c445_prof);

    }

    // line 185
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_0a562817fe475c2f1c574955e14f28505c90f19695fe9a8c6bf321ba73d3dd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a562817fe475c2f1c574955e14f28505c90f19695fe9a8c6bf321ba73d3dd8a->enter($__internal_0a562817fe475c2f1c574955e14f28505c90f19695fe9a8c6bf321ba73d3dd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 186
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 187
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0a562817fe475c2f1c574955e14f28505c90f19695fe9a8c6bf321ba73d3dd8a->leave($__internal_0a562817fe475c2f1c574955e14f28505c90f19695fe9a8c6bf321ba73d3dd8a_prof);

    }

    // line 190
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5cd514cd9550be92e574e02c640c9f553ae64b095a72e7d01f605e8f26e30aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd514cd9550be92e574e02c640c9f553ae64b095a72e7d01f605e8f26e30aa6->enter($__internal_5cd514cd9550be92e574e02c640c9f553ae64b095a72e7d01f605e8f26e30aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 191
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 192
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_5cd514cd9550be92e574e02c640c9f553ae64b095a72e7d01f605e8f26e30aa6->leave($__internal_5cd514cd9550be92e574e02c640c9f553ae64b095a72e7d01f605e8f26e30aa6_prof);

    }

    // line 195
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_b77454c30c0101c44cbb19a9b00854fc3f155cffa10a214939afe73d575f11f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77454c30c0101c44cbb19a9b00854fc3f155cffa10a214939afe73d575f11f3->enter($__internal_b77454c30c0101c44cbb19a9b00854fc3f155cffa10a214939afe73d575f11f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 196
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 197
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b77454c30c0101c44cbb19a9b00854fc3f155cffa10a214939afe73d575f11f3->leave($__internal_b77454c30c0101c44cbb19a9b00854fc3f155cffa10a214939afe73d575f11f3_prof);

    }

    // line 200
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_60bc0fb168ffd6e5016cc784b06bd10c66c868a2efa9706ffaa631d531d68c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bc0fb168ffd6e5016cc784b06bd10c66c868a2efa9706ffaa631d531d68c65->enter($__internal_60bc0fb168ffd6e5016cc784b06bd10c66c868a2efa9706ffaa631d531d68c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 201
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 202
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_60bc0fb168ffd6e5016cc784b06bd10c66c868a2efa9706ffaa631d531d68c65->leave($__internal_60bc0fb168ffd6e5016cc784b06bd10c66c868a2efa9706ffaa631d531d68c65_prof);

    }

    // line 205
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_b699ecc67c5bb0ff09e3f2d26eb8b9207a9334777fa219da252ace6fc657a492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b699ecc67c5bb0ff09e3f2d26eb8b9207a9334777fa219da252ace6fc657a492->enter($__internal_b699ecc67c5bb0ff09e3f2d26eb8b9207a9334777fa219da252ace6fc657a492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 206
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 207
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b699ecc67c5bb0ff09e3f2d26eb8b9207a9334777fa219da252ace6fc657a492->leave($__internal_b699ecc67c5bb0ff09e3f2d26eb8b9207a9334777fa219da252ace6fc657a492_prof);

    }

    // line 210
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_74d37d3c1b15829fcbacef3c1a3a96c1494391b866451fdbafd5e6b367e01003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d37d3c1b15829fcbacef3c1a3a96c1494391b866451fdbafd5e6b367e01003->enter($__internal_74d37d3c1b15829fcbacef3c1a3a96c1494391b866451fdbafd5e6b367e01003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 211
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 212
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 213
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 214
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 215
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 218
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 221
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "</button>";
        
        $__internal_74d37d3c1b15829fcbacef3c1a3a96c1494391b866451fdbafd5e6b367e01003->leave($__internal_74d37d3c1b15829fcbacef3c1a3a96c1494391b866451fdbafd5e6b367e01003_prof);

    }

    // line 224
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_66ba569d7ed17f7342580d58498a6522fb4c7e600d4a3ddd95dba6b1ef27e130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ba569d7ed17f7342580d58498a6522fb4c7e600d4a3ddd95dba6b1ef27e130->enter($__internal_66ba569d7ed17f7342580d58498a6522fb4c7e600d4a3ddd95dba6b1ef27e130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 225
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 226
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_66ba569d7ed17f7342580d58498a6522fb4c7e600d4a3ddd95dba6b1ef27e130->leave($__internal_66ba569d7ed17f7342580d58498a6522fb4c7e600d4a3ddd95dba6b1ef27e130_prof);

    }

    // line 229
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_c71cc4f09a3c286a40e6b0ffd3c0fd2c5816c3b6fde3f3a3b9e3ca6f14853611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71cc4f09a3c286a40e6b0ffd3c0fd2c5816c3b6fde3f3a3b9e3ca6f14853611->enter($__internal_c71cc4f09a3c286a40e6b0ffd3c0fd2c5816c3b6fde3f3a3b9e3ca6f14853611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 230
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 231
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_c71cc4f09a3c286a40e6b0ffd3c0fd2c5816c3b6fde3f3a3b9e3ca6f14853611->leave($__internal_c71cc4f09a3c286a40e6b0ffd3c0fd2c5816c3b6fde3f3a3b9e3ca6f14853611_prof);

    }

    // line 236
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f3161ecfb761c0d057c1be14259d9c2ca766ace5ac30929666f86d54e0b0a33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3161ecfb761c0d057c1be14259d9c2ca766ace5ac30929666f86d54e0b0a33d->enter($__internal_f3161ecfb761c0d057c1be14259d9c2ca766ace5ac30929666f86d54e0b0a33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 237
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 238
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 239
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 241
            echo "    ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 242
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 244
            echo "    ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 245
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 246
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 247
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 248
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 251
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 254
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))));
            echo "
      ";
            // line 255
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", array(), "array", true, true)) {
                // line 256
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip_placement", array(), "array")) : ("top"));
                // line 257
                echo "        <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           title=\"";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip", array(), "array"), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 260
            echo "
      ";
            // line 261
            if ($this->getAttribute(($context["label_attr"] ?? null), "popover", array(), "array", true, true)) {
                // line 262
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover_placement", array(), "array")) : ("top"));
                // line 263
                echo "        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           data-content=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover", array(), "array"), "html", null, true);
                echo "\"></span>
      ";
            }
            // line 266
            echo "    </label>";
        }
        
        $__internal_f3161ecfb761c0d057c1be14259d9c2ca766ace5ac30929666f86d54e0b0a33d->leave($__internal_f3161ecfb761c0d057c1be14259d9c2ca766ace5ac30929666f86d54e0b0a33d_prof);

    }

    // line 271
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_fc28112b88631163d33e85f2abb553e483975302d5f5efe84855a6a1555de7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc28112b88631163d33e85f2abb553e483975302d5f5efe84855a6a1555de7d1->enter($__internal_fc28112b88631163d33e85f2abb553e483975302d5f5efe84855a6a1555de7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_fc28112b88631163d33e85f2abb553e483975302d5f5efe84855a6a1555de7d1->leave($__internal_fc28112b88631163d33e85f2abb553e483975302d5f5efe84855a6a1555de7d1_prof);

    }

    // line 275
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_da273524d8b8bd7720a49547c62ebd2d7a5a62de83a5d5169e8e9b74401d63ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da273524d8b8bd7720a49547c62ebd2d7a5a62de83a5d5169e8e9b74401d63ad->enter($__internal_da273524d8b8bd7720a49547c62ebd2d7a5a62de83a5d5169e8e9b74401d63ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 280
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_da273524d8b8bd7720a49547c62ebd2d7a5a62de83a5d5169e8e9b74401d63ad->leave($__internal_da273524d8b8bd7720a49547c62ebd2d7a5a62de83a5d5169e8e9b74401d63ad_prof);

    }

    // line 283
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ca115a0a602b2ab8f6e04dfdcf49204ed3dd25209391b06c3f46ff13ecb3d7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca115a0a602b2ab8f6e04dfdcf49204ed3dd25209391b06c3f46ff13ecb3d7ee->enter($__internal_ca115a0a602b2ab8f6e04dfdcf49204ed3dd25209391b06c3f46ff13ecb3d7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 284
        echo "<div>";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 288
        echo "</div>";
        
        $__internal_ca115a0a602b2ab8f6e04dfdcf49204ed3dd25209391b06c3f46ff13ecb3d7ee->leave($__internal_ca115a0a602b2ab8f6e04dfdcf49204ed3dd25209391b06c3f46ff13ecb3d7ee_prof);

    }

    // line 291
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_dd2f5ed9beb1f871f9cd255640be4330ccf7ba2bbd4f8170750c2b976205a96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2f5ed9beb1f871f9cd255640be4330ccf7ba2bbd4f8170750c2b976205a96b->enter($__internal_dd2f5ed9beb1f871f9cd255640be4330ccf7ba2bbd4f8170750c2b976205a96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 292
        echo "<div>";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 294
        echo "</div>";
        
        $__internal_dd2f5ed9beb1f871f9cd255640be4330ccf7ba2bbd4f8170750c2b976205a96b->leave($__internal_dd2f5ed9beb1f871f9cd255640be4330ccf7ba2bbd4f8170750c2b976205a96b_prof);

    }

    // line 297
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9141b7c42b3a208d22256bbcbdbd0fe4a3c558c77a0638c15f2b54f2740329d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9141b7c42b3a208d22256bbcbdbd0fe4a3c558c77a0638c15f2b54f2740329d0->enter($__internal_9141b7c42b3a208d22256bbcbdbd0fe4a3c558c77a0638c15f2b54f2740329d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_9141b7c42b3a208d22256bbcbdbd0fe4a3c558c77a0638c15f2b54f2740329d0->leave($__internal_9141b7c42b3a208d22256bbcbdbd0fe4a3c558c77a0638c15f2b54f2740329d0_prof);

    }

    // line 303
    public function block_form($context, array $blocks = array())
    {
        $__internal_b99d3bb2c976243b55a8d879a6a1e3abc42fbb7416caaabb894f8a00dd6eb547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99d3bb2c976243b55a8d879a6a1e3abc42fbb7416caaabb894f8a00dd6eb547->enter($__internal_b99d3bb2c976243b55a8d879a6a1e3abc42fbb7416caaabb894f8a00dd6eb547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 304
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 306
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_b99d3bb2c976243b55a8d879a6a1e3abc42fbb7416caaabb894f8a00dd6eb547->leave($__internal_b99d3bb2c976243b55a8d879a6a1e3abc42fbb7416caaabb894f8a00dd6eb547_prof);

    }

    // line 309
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f7309f519ee61131763079fe4eae37f6bfc5443633a28494126a47081049ad65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7309f519ee61131763079fe4eae37f6bfc5443633a28494126a47081049ad65->enter($__internal_f7309f519ee61131763079fe4eae37f6bfc5443633a28494126a47081049ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 310
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 311
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 312
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 314
            $context["form_method"] = "POST";
        }
        // line 316
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\"
        method=\"";
        // line 317
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 318
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 319
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_f7309f519ee61131763079fe4eae37f6bfc5443633a28494126a47081049ad65->leave($__internal_f7309f519ee61131763079fe4eae37f6bfc5443633a28494126a47081049ad65_prof);

    }

    // line 323
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_23ca7df621a1433dab4ec5ceb23f3f5ca2434c1197ea5a6bf70c27ec31873c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ca7df621a1433dab4ec5ceb23f3f5ca2434c1197ea5a6bf70c27ec31873c77->enter($__internal_23ca7df621a1433dab4ec5ceb23f3f5ca2434c1197ea5a6bf70c27ec31873c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 324
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 325
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 327
        echo "</form>";
        
        $__internal_23ca7df621a1433dab4ec5ceb23f3f5ca2434c1197ea5a6bf70c27ec31873c77->leave($__internal_23ca7df621a1433dab4ec5ceb23f3f5ca2434c1197ea5a6bf70c27ec31873c77_prof);

    }

    // line 330
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_3a1484d737cac14654d27fe88658464e3431a4425c07047b1b9e985b2fd2dfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1484d737cac14654d27fe88658464e3431a4425c07047b1b9e985b2fd2dfe3->enter($__internal_3a1484d737cac14654d27fe88658464e3431a4425c07047b1b9e985b2fd2dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 331
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_3a1484d737cac14654d27fe88658464e3431a4425c07047b1b9e985b2fd2dfe3->leave($__internal_3a1484d737cac14654d27fe88658464e3431a4425c07047b1b9e985b2fd2dfe3_prof);

    }

    // line 334
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9b5f7130ddbe2a2cc77e561bb6751f191e0cb6edacf27dbb4cd6b870ab5bc401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5f7130ddbe2a2cc77e561bb6751f191e0cb6edacf27dbb4cd6b870ab5bc401->enter($__internal_9b5f7130ddbe2a2cc77e561bb6751f191e0cb6edacf27dbb4cd6b870ab5bc401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 335
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 336
            echo "<ul>";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 338
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "</ul>";
        }
        
        $__internal_9b5f7130ddbe2a2cc77e561bb6751f191e0cb6edacf27dbb4cd6b870ab5bc401->leave($__internal_9b5f7130ddbe2a2cc77e561bb6751f191e0cb6edacf27dbb4cd6b870ab5bc401_prof);

    }

    // line 344
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_a96ebe5cb93c94fe67f5eebcf0cb2916c52225edbc97ca41fbb8cc7ed2730eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96ebe5cb93c94fe67f5eebcf0cb2916c52225edbc97ca41fbb8cc7ed2730eca->enter($__internal_a96ebe5cb93c94fe67f5eebcf0cb2916c52225edbc97ca41fbb8cc7ed2730eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 346
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 347
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a96ebe5cb93c94fe67f5eebcf0cb2916c52225edbc97ca41fbb8cc7ed2730eca->leave($__internal_a96ebe5cb93c94fe67f5eebcf0cb2916c52225edbc97ca41fbb8cc7ed2730eca_prof);

    }

    // line 354
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_2e3b9eb95ea6574600dce0dc5375f52388105fc957eb5949992f36779c68117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3b9eb95ea6574600dce0dc5375f52388105fc957eb5949992f36779c68117d->enter($__internal_2e3b9eb95ea6574600dce0dc5375f52388105fc957eb5949992f36779c68117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 355
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 356
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2e3b9eb95ea6574600dce0dc5375f52388105fc957eb5949992f36779c68117d->leave($__internal_2e3b9eb95ea6574600dce0dc5375f52388105fc957eb5949992f36779c68117d_prof);

    }

    // line 360
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_4538eff7271c1ece4eddada9df826d930432dfc6b90e1c6eb2fa56ecadf90471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4538eff7271c1ece4eddada9df826d930432dfc6b90e1c6eb2fa56ecadf90471->enter($__internal_4538eff7271c1ece4eddada9df826d930432dfc6b90e1c6eb2fa56ecadf90471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 361
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 362
        if ((($context["read_only"] ?? $this->getContext($context, "read_only")) &&  !$this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 363
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 364
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4538eff7271c1ece4eddada9df826d930432dfc6b90e1c6eb2fa56ecadf90471->leave($__internal_4538eff7271c1ece4eddada9df826d930432dfc6b90e1c6eb2fa56ecadf90471_prof);

    }

    // line 377
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_60689a5401eb960b0e03e31e09059f944a89419ef7f164734d4458f40f5d7156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60689a5401eb960b0e03e31e09059f944a89419ef7f164734d4458f40f5d7156->enter($__internal_60689a5401eb960b0e03e31e09059f944a89419ef7f164734d4458f40f5d7156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 378
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 380
            echo " ";
            // line 381
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 382
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 383
$context["attrvalue"] === true)) {
                // line 384
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 385
$context["attrvalue"] === false)) {
                // line 386
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_60689a5401eb960b0e03e31e09059f944a89419ef7f164734d4458f40f5d7156->leave($__internal_60689a5401eb960b0e03e31e09059f944a89419ef7f164734d4458f40f5d7156_prof);

    }

    // line 391
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_a7c8928ed493a26f1d7318fc9244152641f609dcf8596a8cb78dec24a6d4b3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c8928ed493a26f1d7318fc9244152641f609dcf8596a8cb78dec24a6d4b3c0->enter($__internal_a7c8928ed493a26f1d7318fc9244152641f609dcf8596a8cb78dec24a6d4b3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 392
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
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
        
        $__internal_a7c8928ed493a26f1d7318fc9244152641f609dcf8596a8cb78dec24a6d4b3c0->leave($__internal_a7c8928ed493a26f1d7318fc9244152641f609dcf8596a8cb78dec24a6d4b3c0_prof);

    }

    // line 405
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_b97956dee3ef854bfd0e20088a5e8806f2867c07e962358f18936711bb9b4e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97956dee3ef854bfd0e20088a5e8806f2867c07e962358f18936711bb9b4e64->enter($__internal_b97956dee3ef854bfd0e20088a5e8806f2867c07e962358f18936711bb9b4e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 407
            echo " ";
            // line 408
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 409
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 410
$context["attrvalue"] === true)) {
                // line 411
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 412
$context["attrvalue"] === false)) {
                // line 413
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b97956dee3ef854bfd0e20088a5e8806f2867c07e962358f18936711bb9b4e64->leave($__internal_b97956dee3ef854bfd0e20088a5e8806f2867c07e962358f18936711bb9b4e64_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1335 => 413,  1333 => 412,  1328 => 411,  1326 => 410,  1321 => 409,  1319 => 408,  1317 => 407,  1313 => 406,  1307 => 405,  1292 => 400,  1290 => 399,  1285 => 398,  1283 => 397,  1278 => 396,  1276 => 395,  1274 => 394,  1270 => 393,  1261 => 392,  1255 => 391,  1240 => 386,  1238 => 385,  1233 => 384,  1231 => 383,  1226 => 382,  1224 => 381,  1222 => 380,  1218 => 379,  1212 => 378,  1206 => 377,  1191 => 372,  1189 => 371,  1184 => 370,  1182 => 369,  1177 => 368,  1175 => 367,  1173 => 366,  1169 => 365,  1165 => 364,  1161 => 363,  1157 => 362,  1151 => 361,  1145 => 360,  1134 => 356,  1130 => 355,  1124 => 354,  1112 => 347,  1110 => 346,  1106 => 345,  1100 => 344,  1092 => 340,  1084 => 338,  1080 => 337,  1078 => 336,  1076 => 335,  1070 => 334,  1061 => 331,  1055 => 330,  1048 => 327,  1045 => 325,  1043 => 324,  1037 => 323,  1027 => 319,  1025 => 318,  1004 => 317,  999 => 316,  996 => 314,  993 => 312,  991 => 311,  989 => 310,  983 => 309,  976 => 306,  974 => 305,  972 => 304,  966 => 303,  959 => 298,  953 => 297,  946 => 294,  944 => 293,  942 => 292,  936 => 291,  929 => 288,  927 => 287,  925 => 286,  923 => 285,  921 => 284,  915 => 283,  908 => 280,  902 => 275,  891 => 271,  883 => 266,  878 => 264,  873 => 263,  870 => 262,  868 => 261,  865 => 260,  860 => 258,  855 => 257,  852 => 256,  850 => 255,  832 => 254,  828 => 251,  825 => 248,  824 => 247,  823 => 246,  821 => 245,  818 => 244,  815 => 242,  812 => 241,  809 => 239,  807 => 238,  805 => 237,  799 => 236,  792 => 231,  790 => 230,  784 => 229,  777 => 226,  775 => 225,  769 => 224,  756 => 221,  752 => 218,  749 => 215,  748 => 214,  747 => 213,  745 => 212,  743 => 211,  737 => 210,  730 => 207,  728 => 206,  722 => 205,  715 => 202,  713 => 201,  707 => 200,  700 => 197,  698 => 196,  692 => 195,  684 => 192,  682 => 191,  676 => 190,  669 => 187,  667 => 186,  661 => 185,  654 => 182,  652 => 181,  646 => 180,  639 => 177,  633 => 176,  626 => 173,  624 => 172,  618 => 171,  611 => 168,  609 => 167,  603 => 165,  595 => 161,  585 => 160,  580 => 159,  578 => 158,  575 => 156,  573 => 155,  567 => 154,  559 => 150,  557 => 148,  556 => 147,  555 => 146,  554 => 145,  550 => 144,  547 => 142,  545 => 141,  539 => 140,  531 => 136,  529 => 135,  527 => 134,  525 => 133,  523 => 132,  519 => 131,  516 => 129,  514 => 128,  508 => 127,  491 => 124,  488 => 123,  482 => 122,  455 => 119,  452 => 118,  450 => 117,  444 => 116,  416 => 111,  413 => 110,  411 => 109,  408 => 107,  406 => 106,  404 => 105,  399 => 104,  397 => 103,  380 => 102,  374 => 101,  367 => 98,  365 => 97,  363 => 96,  357 => 93,  355 => 92,  353 => 91,  351 => 90,  349 => 89,  341 => 87,  338 => 86,  336 => 85,  329 => 84,  326 => 82,  324 => 81,  318 => 80,  311 => 77,  305 => 75,  303 => 74,  299 => 73,  295 => 72,  289 => 71,  281 => 67,  278 => 65,  276 => 64,  270 => 63,  263 => 60,  256 => 59,  250 => 58,  243 => 55,  240 => 53,  238 => 52,  232 => 51,  225 => 48,  223 => 47,  221 => 46,  218 => 44,  216 => 43,  212 => 42,  206 => 41,  199 => 38,  186 => 37,  184 => 36,  178 => 35,  170 => 31,  167 => 29,  165 => 28,  159 => 27,  152 => 405,  150 => 391,  148 => 377,  146 => 360,  144 => 354,  141 => 351,  139 => 344,  137 => 334,  135 => 330,  133 => 323,  131 => 309,  129 => 303,  127 => 297,  125 => 291,  123 => 283,  121 => 275,  119 => 271,  117 => 236,  115 => 229,  113 => 224,  111 => 210,  109 => 205,  107 => 200,  105 => 195,  103 => 190,  101 => 185,  99 => 180,  97 => 176,  95 => 171,  93 => 165,  91 => 154,  89 => 140,  87 => 127,  85 => 122,  83 => 116,  81 => 101,  79 => 80,  77 => 71,  75 => 63,  73 => 58,  71 => 51,  69 => 41,  67 => 35,  65 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{# Widgets #}

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
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
  <div {{ block('widget_container_attributes') }}>
    {%- if form.parent is empty -%}
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
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
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
  {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
    {% set required = false %}
  {%- endif -%}
  <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} data-toggle=\"select2\">
    {%- if placeholder is not none -%}
      <option
        value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder }}</option>
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
      <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label }}\">
        {% set options = choice %}
        {{- block('choice_widget_options') -}}
      </optgroup>
    {%- else -%}
      {% set attr = choice.attr %}
      <option
        value=\"{{ choice.value }}\" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label }}</option>
    {%- endif -%}
  {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
  {% set switch = switch|default('') -%}
  <input type=\"checkbox\"
         {% if switch %}data-toggle=\"switch\"{% endif %} {% if switch %}class=\"{{ switch }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock checkbox_widget -%}

{%- block radio_widget -%}
  <input
    type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock radio_widget -%}

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

{%- block button_widget -%}
  {%- if label is empty -%}
    {%- if label_format is not empty -%}
      {% set label = label_format|replace({
      '%name%': name,
      '%id%': id,
      }) %}
    {%- else -%}
      {% set label = name|humanize %}
    {%- endif -%}
  {%- endif -%}
  <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
  {%- set type = type|default('submit') -%}
  {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
  {%- set type = type|default('reset') -%}
  {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
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
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label|raw : label|raw }}
      {% if label_attr['tooltip'] is defined %}
        {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
        <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"{{ placement }}\"
           title=\"{{ label_attr['tooltip'] }}\"></i>
      {% endif %}

      {% if label_attr['popover'] is defined %}
        {% set placement = label_attr['popover_placement'] is defined ? label_attr['popover_placement'] : 'top' %}
        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"{{ placement }}\"
           data-content=\"{{ label_attr['popover'] }}\"></span>
      {% endif %}
    </label>

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
  {% set method = method|upper %}
  {%- if method in [\"GET\", \"POST\"] -%}
    {% set form_method = method %}
  {%- else -%}
    {% set form_method = \"POST\" %}
  {%- endif -%}
  <form name=\"{{ name }}\"
        method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
  {%- if form_method != method -%}
    <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\"/>
  {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
  {%- if not render_rest is defined or render_rest -%}
    {{ form_rest(form) }}
  {%- endif -%}
  </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
  {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

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
  {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
  {% for child in form %}
    {{- form_row(child) -}}
  {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"
  {%- if read_only and attr.readonly is not defined %} readonly=\"readonly\"{% endif -%}
  {%- if disabled %} disabled=\"disabled\"{% endif -%}
  {%- if required %} required=\"required\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
  {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock attributes -%}
", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_div_layout.html.twig");
    }
}
