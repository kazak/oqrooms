<?php

/* AkumaBootswatchBundle:Form:fields.html.twig */
class __TwigTemplate_e87cd2c403f4481eebf15f81e5c8805756494bf631891863be849a2707a8398b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "AkumaBootswatchBundle:Form:fields.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'bootstrap_collection_widget' => array($this, 'block_bootstrap_collection_widget'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'choice_widget' => array($this, 'block_choice_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_options' => array($this, 'block_choice_widget_options'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
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
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'bs_static_widget' => array($this, 'block_bs_static_widget'),
                'form_label' => array($this, 'block_form_label'),
                'button_label' => array($this, 'block_button_label'),
                'repeated_row' => array($this, 'block_repeated_row'),
                'form_row' => array($this, 'block_form_row'),
                'form_input_group' => array($this, 'block_form_input_group'),
                'form_help' => array($this, 'block_form_help'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form' => array($this, 'block_form'),
                'form_start' => array($this, 'block_form_start'),
                'form_end' => array($this, 'block_form_end'),
                'form_enctype' => array($this, 'block_form_enctype'),
                'global_form_errors' => array($this, 'block_global_form_errors'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_rest' => array($this, 'block_form_rest'),
                'form_rows' => array($this, 'block_form_rows'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
                'button_attributes' => array($this, 'block_button_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c39035feddece9782dc261fe7db932d79e4cb1192331a33899a7d78f94f431a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c39035feddece9782dc261fe7db932d79e4cb1192331a33899a7d78f94f431a->enter($__internal_0c39035feddece9782dc261fe7db932d79e4cb1192331a33899a7d78f94f431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkumaBootswatchBundle:Form:fields.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('bootstrap_collection_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('file_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('radio_row', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 375
        echo "
";
        // line 376
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 381
        echo "
";
        // line 382
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('date_widget', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('time_widget', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('number_widget', $context, $blocks);
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 445
        echo "
";
        // line 446
        $this->displayBlock('money_widget', $context, $blocks);
        // line 457
        echo "
";
        // line 458
        $this->displayBlock('url_widget', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('search_widget', $context, $blocks);
        // line 471
        echo "
";
        // line 472
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 481
        echo "
";
        // line 482
        $this->displayBlock('password_widget', $context, $blocks);
        // line 488
        echo "
";
        // line 489
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 495
        echo "
";
        // line 496
        $this->displayBlock('email_widget', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('button_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 527
        echo "
";
        // line 528
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('bs_static_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 547
        echo "
";
        // line 548
        $this->displayBlock('form_label', $context, $blocks);
        // line 590
        echo "
";
        // line 591
        $this->displayBlock('button_label', $context, $blocks);
        // line 592
        echo "
";
        // line 594
        echo "
";
        // line 595
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 604
        echo "
";
        // line 605
        $this->displayBlock('form_row', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('form_input_group', $context, $blocks);
        // line 683
        echo "
";
        // line 684
        $this->displayBlock('form_help', $context, $blocks);
        // line 695
        echo "
";
        // line 696
        $this->displayBlock('button_row', $context, $blocks);
        // line 730
        echo "
";
        // line 731
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 734
        echo "
";
        // line 735
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 738
        echo "
";
        // line 740
        echo "
";
        // line 741
        $this->displayBlock('form', $context, $blocks);
        // line 748
        echo "
";
        // line 749
        $this->displayBlock('form_start', $context, $blocks);
        // line 794
        echo "
";
        // line 795
        $this->displayBlock('form_end', $context, $blocks);
        // line 819
        echo "
";
        // line 820
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 825
        echo "
";
        // line 826
        $this->displayBlock('global_form_errors', $context, $blocks);
        // line 832
        echo "
";
        // line 833
        $this->displayBlock('form_errors', $context, $blocks);
        // line 857
        echo "
";
        // line 858
        $this->displayBlock('form_rest', $context, $blocks);
        // line 867
        echo "
";
        // line 869
        echo "
";
        // line 870
        $this->displayBlock('form_rows', $context, $blocks);
        // line 893
        echo "
";
        // line 894
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 900
        echo "
";
        // line 901
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 911
        echo "
";
        // line 912
        $this->displayBlock('button_attributes', $context, $blocks);
        
        $__internal_0c39035feddece9782dc261fe7db932d79e4cb1192331a33899a7d78f94f431a->leave($__internal_0c39035feddece9782dc261fe7db932d79e4cb1192331a33899a7d78f94f431a_prof);

    }

    // line 5
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_698431bf96c581a8f9c77c67a9b65cbb9a6c0c47c67c35c4a4bc41f963ee0c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698431bf96c581a8f9c77c67a9b65cbb9a6c0c47c67c35c4a4bc41f963ee0c8a->enter($__internal_698431bf96c581a8f9c77c67a9b65cbb9a6c0c47c67c35c4a4bc41f963ee0c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 8
            echo "            ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        }
        // line 12
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_698431bf96c581a8f9c77c67a9b65cbb9a6c0c47c67c35c4a4bc41f963ee0c8a->leave($__internal_698431bf96c581a8f9c77c67a9b65cbb9a6c0c47c67c35c4a4bc41f963ee0c8a_prof);

    }

    // line 15
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_66a40d74c5ba6c050e378d516693f3d0479bb7bcba9a350425b71bec5abea5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a40d74c5ba6c050e378d516693f3d0479bb7bcba9a350425b71bec5abea5b5->enter($__internal_66a40d74c5ba6c050e378d516693f3d0479bb7bcba9a350425b71bec5abea5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? $this->getContext($context, "style")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 18
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 19
        echo "
        ";
        // line 20
        if (( !array_key_exists("simple_col", $context) && $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getSimpleCol())) {
            // line 21
            echo "            ";
            $context["simple_col"] = $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getSimpleCol();
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "simple_col", array())))) {
            // line 24
            echo "            ";
            $context["simple_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "simple_col", array());
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 27
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())))) {
            // line 30
            echo "            ";
            $context["style"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array());
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ((array_key_exists("simple_col", $context) && ($context["simple_col"] ?? $this->getContext($context, "simple_col")))) {
            // line 34
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, ($context["col_size"] ?? $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["simple_col"] ?? $this->getContext($context, "simple_col")), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "
        ";
        // line 37
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 38
        echo "
        ";
        // line 39
        if ((((($context["style"] ?? $this->getContext($context, "style")) == "inline") && ( !$this->getAttribute(($context["attr"] ?? null), "placeholder", array(), "any", true, true) || twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "placeholder", array())))) &&  !(($context["label"] ?? $this->getContext($context, "label")) === false))) {
            // line 40
            echo "            ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 41
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")))));
                // line 42
                echo "            ";
            } else {
                // line 43
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("placeholder" => ($context["label"] ?? $this->getContext($context, "label"))));
                // line 44
                echo "            ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ((array_key_exists("static_control", $context) && (($context["static_control"] ?? $this->getContext($context, "static_control")) == true))) {
            // line 48
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control-static"))));
            // line 49
            echo "            <p id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
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
            echo ">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</p>";
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
            // line 52
            echo "            <input type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo ">";
        }
        // line 54
        echo "        ";
        if (array_key_exists("simple_col", $context)) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_66a40d74c5ba6c050e378d516693f3d0479bb7bcba9a350425b71bec5abea5b5->leave($__internal_66a40d74c5ba6c050e378d516693f3d0479bb7bcba9a350425b71bec5abea5b5_prof);

    }

    // line 60
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_3efa7dd299678c7cf2a936f9fe38f04fc1f2e037730f83638fba6932c5787fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efa7dd299678c7cf2a936f9fe38f04fc1f2e037730f83638fba6932c5787fa1->enter($__internal_3efa7dd299678c7cf2a936f9fe38f04fc1f2e037730f83638fba6932c5787fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 63
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 64
            echo "                ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
            ";
        }
        // line 66
        echo "            ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
            ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3efa7dd299678c7cf2a936f9fe38f04fc1f2e037730f83638fba6932c5787fa1->leave($__internal_3efa7dd299678c7cf2a936f9fe38f04fc1f2e037730f83638fba6932c5787fa1_prof);

    }

    // line 72
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_224f8a97396ff1b7b462a2efa3cbb50cdcc4ddda6846f0058abdfc9d1f3b429f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224f8a97396ff1b7b462a2efa3cbb50cdcc4ddda6846f0058abdfc9d1f3b429f->enter($__internal_224f8a97396ff1b7b462a2efa3cbb50cdcc4ddda6846f0058abdfc9d1f3b429f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 73
        echo "    ";
        ob_start();
        // line 74
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 75
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
            // line 76
            echo "        ";
        }
        // line 77
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_224f8a97396ff1b7b462a2efa3cbb50cdcc4ddda6846f0058abdfc9d1f3b429f->leave($__internal_224f8a97396ff1b7b462a2efa3cbb50cdcc4ddda6846f0058abdfc9d1f3b429f_prof);

    }

    // line 81
    public function block_bootstrap_collection_widget($context, array $blocks = array())
    {
        $__internal_ce1295b9b064886aaaad46c9d4753f8dcdac653bd5ed362e820eb0b22bc62507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1295b9b064886aaaad46c9d4753f8dcdac653bd5ed362e820eb0b22bc62507->enter($__internal_ce1295b9b064886aaaad46c9d4753f8dcdac653bd5ed362e820eb0b22bc62507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_collection_widget"));

        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 84
            echo "            ";
            $context["prototype_vars"] = array();
            // line 85
            echo "            ";
            if (array_key_exists("style", $context)) {
                // line 86
                echo "                ";
                $context["prototype_vars"] = twig_array_merge(($context["prototype_vars"] ?? $this->getContext($context, "prototype_vars")), array("style" => ($context["style"] ?? $this->getContext($context, "style"))));
                // line 87
                echo "            ";
            }
            // line 88
            echo "            ";
            $context["prototype_html"] = (((("<div class=\"col-xs-" . $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "sub_widget_col", array())) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'widget', ($context["prototype_vars"] ?? $this->getContext($context, "prototype_vars")))) . "</div>");
            // line 89
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "allow_delete", array())) {
                // line 90
                echo "                ";
                $context["prototype_html"] = (((((($context["prototype_html"] ?? $this->getContext($context, "prototype_html")) . "<div class=\"col-xs-") . $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "button_col", array())) . "\"><a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"__id__\">") . $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "delete_button_text", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true))) . "</a></div>");
                // line 91
                echo "            ";
            }
            // line 92
            echo "            ";
            $context["prototype_html"] = (("<div class=\"row\">" . ($context["prototype_html"] ?? $this->getContext($context, "prototype_html"))) . "</div>");
            // line 93
            echo "
            ";
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => ($context["prototype_html"] ?? $this->getContext($context, "prototype_html"))));
            // line 95
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype-name" => ($context["prototype_name"] ?? $this->getContext($context, "prototype_name"))));
            // line 96
            echo "        ";
        }
        // line 97
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <ul class=\"bc-collection list-unstyled\">
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 100
            echo "                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "sub_widget_col", array()), "html", null, true);
            echo "\">
                                ";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
                                ";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'errors');
            echo "
                            </div>
                            ";
            // line 106
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "allow_delete", array())) {
                // line 107
                echo "                                <div class=\"col-xs-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "button_col", array()), "html", null, true);
                echo "\">
                                    <a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "delete_button_text", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true));
                echo "</a>
                                </div>
                            ";
            }
            // line 111
            echo "                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </ul>
            ";
        // line 115
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "allow_add", array())) {
            // line 116
            echo "                <a href=\"#\" class=\"btn btn-primary btn-sm\" data-addfield=\"collection\" data-collection=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\" data-prototype-name=\"";
            echo twig_escape_filter($this->env, ($context["prototype_name"] ?? $this->getContext($context, "prototype_name")), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapIconExtension')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "add_button_text", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true));
            echo "</a>
            ";
        }
        // line 118
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ce1295b9b064886aaaad46c9d4753f8dcdac653bd5ed362e820eb0b22bc62507->leave($__internal_ce1295b9b064886aaaad46c9d4753f8dcdac653bd5ed362e820eb0b22bc62507_prof);

    }

    // line 122
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c92be68db1ba9f9e9de8d958342a303ba88d9df8c9b009bdaeba209f4771193c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92be68db1ba9f9e9de8d958342a303ba88d9df8c9b009bdaeba209f4771193c->enter($__internal_c92be68db1ba9f9e9de8d958342a303ba88d9df8c9b009bdaeba209f4771193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 123
        echo "    ";
        ob_start();
        // line 124
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 125
        echo "
        ";
        // line 126
        if (($this->getAttribute(($context["attr"] ?? null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "simple_col", array())))) {
            // line 127
            echo "            ";
            $context["simple_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "simple_col", array());
            // line 128
            echo "        ";
        }
        // line 129
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 130
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 131
            echo "        ";
        }
        // line 132
        echo "
        ";
        // line 133
        if (array_key_exists("simple_col", $context)) {
            // line 134
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, ($context["col_size"] ?? $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["simple_col"] ?? $this->getContext($context, "simple_col")), "html", null, true);
            echo "\">
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 138
        echo "
        <textarea ";
        // line 139
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

        ";
        // line 141
        if (array_key_exists("simple_col", $context)) {
            // line 142
            echo "            </div>
        ";
        }
        // line 144
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c92be68db1ba9f9e9de8d958342a303ba88d9df8c9b009bdaeba209f4771193c->leave($__internal_c92be68db1ba9f9e9de8d958342a303ba88d9df8c9b009bdaeba209f4771193c_prof);

    }

    // line 147
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_8a0ca3cc68c8892350ea106bd117386ac7e0f84e14220abaac5afb4e9f7f9a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0ca3cc68c8892350ea106bd117386ac7e0f84e14220abaac5afb4e9f7f9a7a->enter($__internal_8a0ca3cc68c8892350ea106bd117386ac7e0f84e14220abaac5afb4e9f7f9a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 148
        echo "    ";
        ob_start();
        // line 149
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 150
        echo "
        ";
        // line 151
        if (($this->getAttribute(($context["attr"] ?? null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "simple_col", array())))) {
            // line 152
            echo "            ";
            $context["simple_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "simple_col", array());
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 156
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 159
        if (array_key_exists("simple_col", $context)) {
            // line 160
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, ($context["col_size"] ?? $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["simple_col"] ?? $this->getContext($context, "simple_col")), "html", null, true);
            echo "\">
        ";
        }
        // line 162
        echo "
        <input type=\"file\" ";
        // line 163
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">

        ";
        // line 165
        if (array_key_exists("simple_col", $context)) {
            // line 166
            echo "            </div>
        ";
        }
        // line 168
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8a0ca3cc68c8892350ea106bd117386ac7e0f84e14220abaac5afb4e9f7f9a7a->leave($__internal_8a0ca3cc68c8892350ea106bd117386ac7e0f84e14220abaac5afb4e9f7f9a7a_prof);

    }

    // line 171
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_54f473df5becdd93628fe612e33fbeaddc8cdc1b982f3952c2cd720fc92185a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f473df5becdd93628fe612e33fbeaddc8cdc1b982f3952c2cd720fc92185a1->enter($__internal_54f473df5becdd93628fe612e33fbeaddc8cdc1b982f3952c2cd720fc92185a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 172
        echo "    ";
        ob_start();
        // line 173
        echo "        ";
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 174
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 176
            echo "            ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 178
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_54f473df5becdd93628fe612e33fbeaddc8cdc1b982f3952c2cd720fc92185a1->leave($__internal_54f473df5becdd93628fe612e33fbeaddc8cdc1b982f3952c2cd720fc92185a1_prof);

    }

    // line 181
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_20bbe9d8ba21600d2c0f2b8da30a8d059d1678498ad8e6f543beab945ad2c1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bbe9d8ba21600d2c0f2b8da30a8d059d1678498ad8e6f543beab945ad2c1e5->enter($__internal_20bbe9d8ba21600d2c0f2b8da30a8d059d1678498ad8e6f543beab945ad2c1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 182
        echo "    ";
        ob_start();
        // line 183
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo "                ";
            if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
                // line 186
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute(($context["attr"] ?? null), "inline", array(), "any", true, true) && $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "inline", array())), "label_attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr"))));
                echo "
                ";
            } else {
                // line 188
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute(($context["attr"] ?? null), "inline", array(), "any", true, true) && $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "inline", array())), "label_attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr"))));
                echo "
                ";
            }
            // line 190
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_20bbe9d8ba21600d2c0f2b8da30a8d059d1678498ad8e6f543beab945ad2c1e5->leave($__internal_20bbe9d8ba21600d2c0f2b8da30a8d059d1678498ad8e6f543beab945ad2c1e5_prof);

    }

    // line 195
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8cd5bdd656551cb2b4cf43c2ca7bb1c7ae4d4d30fd94bbf9fe9b9cec601a57d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd5bdd656551cb2b4cf43c2ca7bb1c7ae4d4d30fd94bbf9fe9b9cec601a57d7->enter($__internal_8cd5bdd656551cb2b4cf43c2ca7bb1c7ae4d4d30fd94bbf9fe9b9cec601a57d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 196
        echo "    ";
        ob_start();
        // line 197
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 198
        echo "
        <select ";
        // line 199
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 200
        if ( !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value")))) {
            // line 201
            echo "                <option ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
            }
            echo " value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
            ";
        }
        // line 203
        echo "            ";
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 204
            echo "                ";
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 205
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 206
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 207
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                ";
            }
            // line 209
            echo "            ";
        }
        // line 210
        echo "            ";
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 211
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8cd5bdd656551cb2b4cf43c2ca7bb1c7ae4d4d30fd94bbf9fe9b9cec601a57d7->leave($__internal_8cd5bdd656551cb2b4cf43c2ca7bb1c7ae4d4d30fd94bbf9fe9b9cec601a57d7_prof);

    }

    // line 216
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_46381586e60ae582008168e9ac1fc1ae415902528bb1c3bfb209c0fe60aed2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46381586e60ae582008168e9ac1fc1ae415902528bb1c3bfb209c0fe60aed2ba->enter($__internal_46381586e60ae582008168e9ac1fc1ae415902528bb1c3bfb209c0fe60aed2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 217
        echo "    ";
        ob_start();
        // line 218
        echo "        ";
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
            // line 219
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 220
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\">
                    ";
                // line 221
                $context["options"] = $context["choice"];
                // line 222
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 225
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
            ";
            }
            // line 227
            echo "        ";
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
        // line 228
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_46381586e60ae582008168e9ac1fc1ae415902528bb1c3bfb209c0fe60aed2ba->leave($__internal_46381586e60ae582008168e9ac1fc1ae415902528bb1c3bfb209c0fe60aed2ba_prof);

    }

    // line 231
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6d7594b66c6e553b1e517855c716f9d22f9f00a2a1379763ab9f3791d12801f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7594b66c6e553b1e517855c716f9d22f9f00a2a1379763ab9f3791d12801f9->enter($__internal_6d7594b66c6e553b1e517855c716f9d22f9f00a2a1379763ab9f3791d12801f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 232
        echo "    ";
        ob_start();
        // line 233
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? $this->getContext($context, "style")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 234
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 235
        echo "
        ";
        // line 236
        if (($this->getAttribute(($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array())))) {
            // line 237
            echo "            ";
            $context["label_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array());
            // line 238
            echo "        ";
        }
        // line 239
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 240
            echo "            ";
            $context["widget_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array());
            // line 241
            echo "        ";
        }
        // line 242
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 243
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 244
            echo "        ";
        }
        // line 245
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())))) {
            // line 246
            echo "            ";
            $context["style"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array());
            // line 247
            echo "        ";
        }
        // line 248
        echo "
        ";
        // line 249
        $context["class"] = "";
        // line 250
        echo "        ";
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute(($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 251
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter(($context["widget_col"] ?? $this->getContext($context, "widget_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
            // line 252
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter(($context["label_col"] ?? $this->getContext($context, "label_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol()));
            // line 253
            echo "            ";
            $context["class"] = ((((((("col-" . ($context["col_size"] ?? $this->getContext($context, "col_size"))) . "-") . ($context["widget_col"] ?? $this->getContext($context, "widget_col"))) . " col-") . ($context["col_size"] ?? $this->getContext($context, "col_size"))) . "-offset-") . ($context["label_col"] ?? $this->getContext($context, "label_col")));
            // line 254
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 255
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 256
array_key_exists("no_form_group", $context) || (($context["no_form_group"] ?? $this->getContext($context, "no_form_group")) == false))) {
            // line 257
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 259
        echo "
        ";
        // line 260
        ob_start();
        // line 261
        echo "        ";
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 262
            echo "            ";
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 263
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
                // line 264
                echo "            ";
            }
            // line 265
            echo "            ";
            if ((array_key_exists("inline", $context) && ($context["inline"] ?? $this->getContext($context, "inline")))) {
                // line 266
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " checkbox-inline"))));
                // line 267
                echo "            ";
            }
            // line 268
            echo "            ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 269
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 270
                echo "            ";
            }
            // line 271
            echo "            ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 272
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 273
                echo "            ";
            }
            // line 274
            echo "            <label";
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
            echo ">
            ";
            // line 275
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
            ";
            // line 276
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
            // line 277
            echo "</label>
        ";
        } else {
            // line 279
            echo "            ";
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
        ";
        }
        // line 281
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        ";
        $context["checkboxdata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 283
        echo "
        ";
        // line 284
        if ((array_key_exists("inline", $context) && ($context["inline"] ?? $this->getContext($context, "inline")))) {
            // line 285
            echo "            ";
            echo ($context["checkboxdata"] ?? $this->getContext($context, "checkboxdata"));
            echo "
        ";
        } else {
            // line 287
            echo "            <div class=\"checkbox\">";
            echo ($context["checkboxdata"] ?? $this->getContext($context, "checkboxdata"));
            echo "</div>
        ";
        }
        // line 289
        echo "
        ";
        // line 290
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 292
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute(($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 293
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 295
array_key_exists("no_form_group", $context) || (($context["no_form_group"] ?? $this->getContext($context, "no_form_group")) == false))) {
            // line 296
            echo "            </div>
        ";
        }
        // line 298
        echo "
        ";
        // line 299
        if ((($context["style"] ?? $this->getContext($context, "style")) == "inline")) {
            echo "&nbsp;";
        }
        // line 300
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6d7594b66c6e553b1e517855c716f9d22f9f00a2a1379763ab9f3791d12801f9->leave($__internal_6d7594b66c6e553b1e517855c716f9d22f9f00a2a1379763ab9f3791d12801f9_prof);

    }

    // line 303
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_cfa3518ee293c39b70c0f67917104c265bf2cb1ffb40de05cb43592a34511aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa3518ee293c39b70c0f67917104c265bf2cb1ffb40de05cb43592a34511aef->enter($__internal_cfa3518ee293c39b70c0f67917104c265bf2cb1ffb40de05cb43592a34511aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 304
        echo "    ";
        ob_start();
        // line 305
        echo "        ";
        $context["class"] = "";
        // line 306
        echo "
        ";
        // line 307
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 308
        echo "
        ";
        // line 309
        if (($this->getAttribute(($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array())))) {
            // line 310
            echo "            ";
            $context["label_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array());
            // line 311
            echo "        ";
        }
        // line 312
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 313
            echo "            ";
            $context["widget_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array());
            // line 314
            echo "        ";
        }
        // line 315
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 316
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 317
            echo "        ";
        }
        // line 318
        echo "
        ";
        // line 319
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute(($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 320
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter(($context["widget_col"] ?? $this->getContext($context, "widget_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
            // line 321
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter(($context["label_col"] ?? $this->getContext($context, "label_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol()));
            // line 322
            echo "            ";
            $context["class"] = (((((((" col-" . ($context["col_size"] ?? $this->getContext($context, "col_size"))) . "-") . ($context["widget_col"] ?? $this->getContext($context, "widget_col"))) . " col-") . ($context["col_size"] ?? $this->getContext($context, "col_size"))) . "-offset-") . ($context["label_col"] ?? $this->getContext($context, "label_col")));
            // line 323
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 324
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 325
array_key_exists("no_form_group", $context) || (($context["no_form_group"] ?? $this->getContext($context, "no_form_group")) == false))) {
            // line 326
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 328
        echo "
        ";
        // line 329
        ob_start();
        // line 330
        echo "        ";
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 331
            echo "            ";
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 332
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
                // line 333
                echo "            ";
            }
            // line 334
            echo "            ";
            if ((array_key_exists("inline", $context) && ($context["inline"] ?? $this->getContext($context, "inline")))) {
                // line 335
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " radio-inline"))));
                // line 336
                echo "            ";
            }
            // line 337
            echo "            ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 338
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 339
                echo "            ";
            }
            // line 340
            echo "            ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 341
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 342
                echo "            ";
            }
            // line 343
            echo "            <label";
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
            echo ">
            ";
            // line 344
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
            ";
            // line 345
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
            // line 346
            echo "</label>
        ";
        } else {
            // line 348
            echo "            ";
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
        ";
        }
        // line 350
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        ";
        $context["radiodata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 352
        echo "
        ";
        // line 353
        if ((array_key_exists("inline", $context) && ($context["inline"] ?? $this->getContext($context, "inline")))) {
            // line 354
            echo "            ";
            echo ($context["radiodata"] ?? $this->getContext($context, "radiodata"));
            echo "
        ";
        } else {
            // line 356
            echo "            <div class=\"radio\">";
            echo ($context["radiodata"] ?? $this->getContext($context, "radiodata"));
            echo "</div>
        ";
        }
        // line 358
        echo "
        ";
        // line 359
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 361
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute(($context["attr"] ?? null), "align_with_widget", array(), "any", true, true))) {
            // line 362
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 364
array_key_exists("no_form_group", $context) || (($context["no_form_group"] ?? $this->getContext($context, "no_form_group")) == false))) {
            // line 365
            echo "            </div>
        ";
        }
        // line 367
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cfa3518ee293c39b70c0f67917104c265bf2cb1ffb40de05cb43592a34511aef->leave($__internal_cfa3518ee293c39b70c0f67917104c265bf2cb1ffb40de05cb43592a34511aef_prof);

    }

    // line 370
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_46e026b4fa842d2aa20389e36f80dace724af52eb528c24e0b34265dd389f2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e026b4fa842d2aa20389e36f80dace724af52eb528c24e0b34265dd389f2cf->enter($__internal_46e026b4fa842d2aa20389e36f80dace724af52eb528c24e0b34265dd389f2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 371
        echo "    ";
        ob_start();
        // line 372
        echo "        <input type=\"checkbox\" ";
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
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_46e026b4fa842d2aa20389e36f80dace724af52eb528c24e0b34265dd389f2cf->leave($__internal_46e026b4fa842d2aa20389e36f80dace724af52eb528c24e0b34265dd389f2cf_prof);

    }

    // line 376
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1e7a28bb22b889c55a4a587ee2a4c7968b08f0f5db44c288705fad141f8e94f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7a28bb22b889c55a4a587ee2a4c7968b08f0f5db44c288705fad141f8e94f5->enter($__internal_1e7a28bb22b889c55a4a587ee2a4c7968b08f0f5db44c288705fad141f8e94f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 377
        echo "    ";
        ob_start();
        // line 378
        echo "        <input type=\"radio\" ";
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
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1e7a28bb22b889c55a4a587ee2a4c7968b08f0f5db44c288705fad141f8e94f5->leave($__internal_1e7a28bb22b889c55a4a587ee2a4c7968b08f0f5db44c288705fad141f8e94f5_prof);

    }

    // line 382
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_63fa24922730b35400c4ee70164b24b9e2dce0fb2f5d6c2358fce073a432fb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fa24922730b35400c4ee70164b24b9e2dce0fb2f5d6c2358fce073a432fb78->enter($__internal_63fa24922730b35400c4ee70164b24b9e2dce0fb2f5d6c2358fce073a432fb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 383
        echo "    ";
        ob_start();
        // line 384
        echo "        ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 385
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 387
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "bootstrap-datetime"));
            // line 388
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 389
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            echo "
                ";
            // line 390
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            echo "
                ";
            // line 391
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
                ";
            // line 392
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
            </div>
        ";
        }
        // line 395
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_63fa24922730b35400c4ee70164b24b9e2dce0fb2f5d6c2358fce073a432fb78->leave($__internal_63fa24922730b35400c4ee70164b24b9e2dce0fb2f5d6c2358fce073a432fb78_prof);

    }

    // line 398
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6e00ecd927f6fa4a397e9753d3c01443ead4a7440c600ab3ff46c398fc3741c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e00ecd927f6fa4a397e9753d3c01443ead4a7440c600ab3ff46c398fc3741c8->enter($__internal_6e00ecd927f6fa4a397e9753d3c01443ead4a7440c600ab3ff46c398fc3741c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 399
        echo "    ";
        ob_start();
        // line 400
        echo "        ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 401
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 403
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "bootstrap-date"));
            // line 404
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 405
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 406
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 407
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 408
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 409
            echo "
            </div>
        ";
        }
        // line 412
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e00ecd927f6fa4a397e9753d3c01443ead4a7440c600ab3ff46c398fc3741c8->leave($__internal_6e00ecd927f6fa4a397e9753d3c01443ead4a7440c600ab3ff46c398fc3741c8_prof);

    }

    // line 415
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8edc64af1b91cca48c304feb3db2e54a2038cfc6fd6e1910b45e20f14361530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edc64af1b91cca48c304feb3db2e54a2038cfc6fd6e1910b45e20f14361530b->enter($__internal_8edc64af1b91cca48c304feb3db2e54a2038cfc6fd6e1910b45e20f14361530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 416
        echo "    ";
        ob_start();
        // line 417
        echo "        ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 418
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 420
            echo "            ";
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 421
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "bootstrap-time"));
            // line 422
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 423
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            echo "
                ";
            // line 424
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 425
            echo "                ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 426
            echo "            </div>
        ";
        }
        // line 428
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8edc64af1b91cca48c304feb3db2e54a2038cfc6fd6e1910b45e20f14361530b->leave($__internal_8edc64af1b91cca48c304feb3db2e54a2038cfc6fd6e1910b45e20f14361530b_prof);

    }

    // line 431
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_2fda4de38ba54f77e57431c9df779926e5b9fc26abab7352429ef57c759fd8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fda4de38ba54f77e57431c9df779926e5b9fc26abab7352429ef57c759fd8eb->enter($__internal_2fda4de38ba54f77e57431c9df779926e5b9fc26abab7352429ef57c759fd8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 432
        echo "    ";
        ob_start();
        // line 433
        echo "        ";
        // line 434
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 435
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2fda4de38ba54f77e57431c9df779926e5b9fc26abab7352429ef57c759fd8eb->leave($__internal_2fda4de38ba54f77e57431c9df779926e5b9fc26abab7352429ef57c759fd8eb_prof);

    }

    // line 439
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_9107b246c9787732cf61cd0c1fbef6c761636255c1e8418ceaeff4cb79fc2787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9107b246c9787732cf61cd0c1fbef6c761636255c1e8418ceaeff4cb79fc2787->enter($__internal_9107b246c9787732cf61cd0c1fbef6c761636255c1e8418ceaeff4cb79fc2787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 440
        echo "    ";
        ob_start();
        // line 441
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 442
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9107b246c9787732cf61cd0c1fbef6c761636255c1e8418ceaeff4cb79fc2787->leave($__internal_9107b246c9787732cf61cd0c1fbef6c761636255c1e8418ceaeff4cb79fc2787_prof);

    }

    // line 446
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a7da4db5bad828631b97229e8e09a2b208cee05a6adecbfc60f8bb36f61ee108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7da4db5bad828631b97229e8e09a2b208cee05a6adecbfc60f8bb36f61ee108->enter($__internal_a7da4db5bad828631b97229e8e09a2b208cee05a6adecbfc60f8bb36f61ee108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 447
        echo "    ";
        ob_start();
        // line 448
        echo "        <div class=\"input-group\">
            ";
        // line 449
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks), "{{ tag_start }}" => "<span class=\"input-group-addon\">", "{{ tag_end }}" => "</span>"));
        // line 453
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a7da4db5bad828631b97229e8e09a2b208cee05a6adecbfc60f8bb36f61ee108->leave($__internal_a7da4db5bad828631b97229e8e09a2b208cee05a6adecbfc60f8bb36f61ee108_prof);

    }

    // line 458
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_3a2f953a82aa84191f8fae7cd2274e053aad85c0badb0cd7ee82f2786fec7bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2f953a82aa84191f8fae7cd2274e053aad85c0badb0cd7ee82f2786fec7bcf->enter($__internal_3a2f953a82aa84191f8fae7cd2274e053aad85c0badb0cd7ee82f2786fec7bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 459
        echo "    ";
        ob_start();
        // line 460
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 461
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3a2f953a82aa84191f8fae7cd2274e053aad85c0badb0cd7ee82f2786fec7bcf->leave($__internal_3a2f953a82aa84191f8fae7cd2274e053aad85c0badb0cd7ee82f2786fec7bcf_prof);

    }

    // line 465
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_43481f7c1ae88b9b3e92f4c02725382712077830a99e1c62f53e382bf2f67f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43481f7c1ae88b9b3e92f4c02725382712077830a99e1c62f53e382bf2f67f45->enter($__internal_43481f7c1ae88b9b3e92f4c02725382712077830a99e1c62f53e382bf2f67f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 466
        echo "    ";
        ob_start();
        // line 467
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 468
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_43481f7c1ae88b9b3e92f4c02725382712077830a99e1c62f53e382bf2f67f45->leave($__internal_43481f7c1ae88b9b3e92f4c02725382712077830a99e1c62f53e382bf2f67f45_prof);

    }

    // line 472
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4833c5b56a78787219e5f92a0e1e4f79a917bc6603f026fe545eff15de7fbc0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4833c5b56a78787219e5f92a0e1e4f79a917bc6603f026fe545eff15de7fbc0d->enter($__internal_4833c5b56a78787219e5f92a0e1e4f79a917bc6603f026fe545eff15de7fbc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 473
        echo "    ";
        ob_start();
        // line 474
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 475
        echo "        <div class=\"input-group\">
            ";
        // line 476
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4833c5b56a78787219e5f92a0e1e4f79a917bc6603f026fe545eff15de7fbc0d->leave($__internal_4833c5b56a78787219e5f92a0e1e4f79a917bc6603f026fe545eff15de7fbc0d_prof);

    }

    // line 482
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_0034a40d5557261c02408677d4fde429a139f344e6c6e54ff5d687fbac7b8f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0034a40d5557261c02408677d4fde429a139f344e6c6e54ff5d687fbac7b8f31->enter($__internal_0034a40d5557261c02408677d4fde429a139f344e6c6e54ff5d687fbac7b8f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 483
        echo "    ";
        ob_start();
        // line 484
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 485
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0034a40d5557261c02408677d4fde429a139f344e6c6e54ff5d687fbac7b8f31->leave($__internal_0034a40d5557261c02408677d4fde429a139f344e6c6e54ff5d687fbac7b8f31_prof);

    }

    // line 489
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_ce98794e8550267b212788372e478093167d993def720475d31c93707d484c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce98794e8550267b212788372e478093167d993def720475d31c93707d484c89->enter($__internal_ce98794e8550267b212788372e478093167d993def720475d31c93707d484c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 490
        echo "    ";
        ob_start();
        // line 491
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 492
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ce98794e8550267b212788372e478093167d993def720475d31c93707d484c89->leave($__internal_ce98794e8550267b212788372e478093167d993def720475d31c93707d484c89_prof);

    }

    // line 496
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_219b438a88654e6647ae1c8f3713d09b41790269a8c0c1290fe1e8accb5162cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219b438a88654e6647ae1c8f3713d09b41790269a8c0c1290fe1e8accb5162cc->enter($__internal_219b438a88654e6647ae1c8f3713d09b41790269a8c0c1290fe1e8accb5162cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 497
        echo "    ";
        ob_start();
        // line 498
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 499
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_219b438a88654e6647ae1c8f3713d09b41790269a8c0c1290fe1e8accb5162cc->leave($__internal_219b438a88654e6647ae1c8f3713d09b41790269a8c0c1290fe1e8accb5162cc_prof);

    }

    // line 503
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_98166468ae4414e28e2e04e8e952156704311b924fc5f06947a9d3fdffa14da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98166468ae4414e28e2e04e8e952156704311b924fc5f06947a9d3fdffa14da5->enter($__internal_98166468ae4414e28e2e04e8e952156704311b924fc5f06947a9d3fdffa14da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 504
        echo "    ";
        ob_start();
        // line 505
        echo "        ";
        if ((twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))) &&  !(($context["label"] ?? $this->getContext($context, "label")) === false))) {
            // line 506
            echo "            ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 507
            echo "        ";
        }
        // line 508
        echo "        ";
        if ((array_key_exists("type", $context) && (($context["type"] ?? $this->getContext($context, "type")) == "submit"))) {
            // line 509
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter(($context["button_class"] ?? $this->getContext($context, "button_class")), "primary")) : ("primary"))))));
            // line 510
            echo "        ";
        } else {
            // line 511
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter(($context["button_class"] ?? $this->getContext($context, "button_class")), "default")) : ("default"))))));
            // line 512
            echo "        ";
        }
        // line 513
        echo "        ";
        if ((array_key_exists("as_link", $context) && (($context["as_link"] ?? $this->getContext($context, "as_link")) == true))) {
            // line 514
            echo "            <a ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (($this->getAttribute(($context["attr"] ?? null), "icon", array(), "any", true, true) && ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "icon", array()) != ""))) {
                echo $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapIconExtension')->iconFunction($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "icon", array()));
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 516
            echo "            <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (($this->getAttribute(($context["attr"] ?? null), "icon", array(), "any", true, true) && ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "icon", array()) != ""))) {
                echo $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapIconExtension')->iconFunction($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "icon", array()));
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</button>
        ";
        }
        // line 518
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_98166468ae4414e28e2e04e8e952156704311b924fc5f06947a9d3fdffa14da5->leave($__internal_98166468ae4414e28e2e04e8e952156704311b924fc5f06947a9d3fdffa14da5_prof);

    }

    // line 521
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_c0742c167722cc726fff13709e979bf84e48e31c7341a07a0e2947469d9dfc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0742c167722cc726fff13709e979bf84e48e31c7341a07a0e2947469d9dfc77->enter($__internal_c0742c167722cc726fff13709e979bf84e48e31c7341a07a0e2947469d9dfc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 522
        echo "    ";
        ob_start();
        // line 523
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 524
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c0742c167722cc726fff13709e979bf84e48e31c7341a07a0e2947469d9dfc77->leave($__internal_c0742c167722cc726fff13709e979bf84e48e31c7341a07a0e2947469d9dfc77_prof);

    }

    // line 528
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_813cedee94f65db1976285fcd0ad1e400e803c0da276fa91ae8240e6f610f2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813cedee94f65db1976285fcd0ad1e400e803c0da276fa91ae8240e6f610f2b2->enter($__internal_813cedee94f65db1976285fcd0ad1e400e803c0da276fa91ae8240e6f610f2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 529
        echo "    ";
        ob_start();
        // line 530
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 531
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_813cedee94f65db1976285fcd0ad1e400e803c0da276fa91ae8240e6f610f2b2->leave($__internal_813cedee94f65db1976285fcd0ad1e400e803c0da276fa91ae8240e6f610f2b2_prof);

    }

    // line 535
    public function block_form_actions_widget($context, array $blocks = array())
    {
        $__internal_4514291b39f0faa4e02eb7bfef6b08dc72dbc70f89af7c02f5d317490cd4f7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4514291b39f0faa4e02eb7bfef6b08dc72dbc70f89af7c02f5d317490cd4f7ce->enter($__internal_4514291b39f0faa4e02eb7bfef6b08dc72dbc70f89af7c02f5d317490cd4f7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        // line 536
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 537
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 538
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4514291b39f0faa4e02eb7bfef6b08dc72dbc70f89af7c02f5d317490cd4f7ce->leave($__internal_4514291b39f0faa4e02eb7bfef6b08dc72dbc70f89af7c02f5d317490cd4f7ce_prof);

    }

    // line 541
    public function block_bs_static_widget($context, array $blocks = array())
    {
        $__internal_2a0a601fa740f7741c0a78040c2225dd72259b6e24d791015c6303e1d75f3b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0a601fa740f7741c0a78040c2225dd72259b6e24d791015c6303e1d75f3b35->enter($__internal_2a0a601fa740f7741c0a78040c2225dd72259b6e24d791015c6303e1d75f3b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bs_static_widget"));

        // line 542
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control-static"))));
        // line 543
        echo "    <p id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
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
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</p>
";
        
        $__internal_2a0a601fa740f7741c0a78040c2225dd72259b6e24d791015c6303e1d75f3b35->leave($__internal_2a0a601fa740f7741c0a78040c2225dd72259b6e24d791015c6303e1d75f3b35_prof);

    }

    // line 548
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_59903f598b7208c02a89a1ab18995d445099d729c075cef69ff431e4709eab50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59903f598b7208c02a89a1ab18995d445099d729c075cef69ff431e4709eab50->enter($__internal_59903f598b7208c02a89a1ab18995d445099d729c075cef69ff431e4709eab50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 549
        echo "    ";
        ob_start();
        // line 550
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 551
        echo "
        ";
        // line 552
        if (($this->getAttribute(($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array())))) {
            // line 553
            echo "            ";
            $context["label_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array());
            // line 554
            echo "        ";
        }
        // line 555
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 556
            echo "            ";
            $context["widget_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array());
            // line 557
            echo "        ";
        }
        // line 558
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 559
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 560
            echo "        ";
        }
        // line 561
        echo "
        ";
        // line 562
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 563
            echo "            ";
            $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? $this->getContext($context, "style")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle()));
            // line 564
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter(($context["label_col"] ?? $this->getContext($context, "label_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol()));
            // line 565
            echo "
            ";
            // line 566
            if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())))) {
                // line 567
                echo "                ";
                $context["style"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array());
                // line 568
                echo "            ";
            }
            // line 569
            echo "
            ";
            // line 570
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
            // line 571
            echo "            ";
            if ((($context["style"] ?? $this->getContext($context, "style")) == "horizontal")) {
                // line 572
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-") . ($context["col_size"] ?? $this->getContext($context, "col_size"))) . "-") . ($context["label_col"] ?? $this->getContext($context, "label_col"))))));
                // line 573
                echo "            ";
            } elseif ((($context["style"] ?? $this->getContext($context, "style")) == "inline")) {
                // line 574
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " sr-only"))));
                // line 575
                echo "            ";
            }
            // line 576
            echo "
            ";
            // line 577
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 578
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
                // line 579
                echo "            ";
            }
            // line 580
            echo "            ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 581
                echo "                ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 582
                echo "            ";
            }
            // line 583
            echo "            ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 584
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 585
                echo "            ";
            }
            // line 586
            echo "            <label";
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
            echo "</label>
        ";
        }
        // line 588
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_59903f598b7208c02a89a1ab18995d445099d729c075cef69ff431e4709eab50->leave($__internal_59903f598b7208c02a89a1ab18995d445099d729c075cef69ff431e4709eab50_prof);

    }

    // line 591
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_f3999d24d9e771a0e99b40101546bf519088b61ef878eac3c0c69a40976bfbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3999d24d9e771a0e99b40101546bf519088b61ef878eac3c0c69a40976bfbff->enter($__internal_f3999d24d9e771a0e99b40101546bf519088b61ef878eac3c0c69a40976bfbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_f3999d24d9e771a0e99b40101546bf519088b61ef878eac3c0c69a40976bfbff->leave($__internal_f3999d24d9e771a0e99b40101546bf519088b61ef878eac3c0c69a40976bfbff_prof);

    }

    // line 595
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_457760ef98ea5ce7138c50888a1545057ca3789d43982adc974f1e7166307d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457760ef98ea5ce7138c50888a1545057ca3789d43982adc974f1e7166307d5f->enter($__internal_457760ef98ea5ce7138c50888a1545057ca3789d43982adc974f1e7166307d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 596
        echo "    ";
        ob_start();
        // line 597
        echo "        ";
        // line 601
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_457760ef98ea5ce7138c50888a1545057ca3789d43982adc974f1e7166307d5f->leave($__internal_457760ef98ea5ce7138c50888a1545057ca3789d43982adc974f1e7166307d5f_prof);

    }

    // line 605
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_12b5bcb709c440923cab80e10a909369da1d55643463a0d966318e59eeeda8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b5bcb709c440923cab80e10a909369da1d55643463a0d966318e59eeeda8fe->enter($__internal_12b5bcb709c440923cab80e10a909369da1d55643463a0d966318e59eeeda8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 606
        echo "    ";
        ob_start();
        // line 607
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? $this->getContext($context, "style")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 608
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 609
        echo "
        ";
        // line 610
        if (($this->getAttribute(($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array())))) {
            // line 611
            echo "            ";
            $context["label_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array());
            // line 612
            echo "        ";
        }
        // line 613
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 614
            echo "            ";
            $context["widget_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array());
            // line 615
            echo "            ";
            if (((($context["label"] ?? $this->getContext($context, "label")) === false) && array_key_exists("label_col", $context))) {
                // line 616
                echo "                ";
                $context["widget_col"] = (($context["widget_col"] ?? $this->getContext($context, "widget_col")) + ($context["label_col"] ?? $this->getContext($context, "label_col")));
                // line 617
                echo "            ";
            }
            // line 618
            echo "        ";
        }
        // line 619
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 620
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 621
            echo "        ";
        }
        // line 622
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())))) {
            // line 623
            echo "            ";
            $context["style"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array());
            // line 624
            echo "        ";
        }
        // line 625
        echo "
        ";
        // line 626
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter(($context["label_col"] ?? $this->getContext($context, "label_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol()));
        // line 627
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter(($context["widget_col"] ?? $this->getContext($context, "widget_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
        // line 628
        echo "
        <div class=\"form-group";
        // line 629
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 630
        if ((($context["style"] ?? $this->getContext($context, "style")) == "horizontal")) {
            // line 631
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
                <div class=\"col-";
            // line 632
            echo twig_escape_filter($this->env, ($context["col_size"] ?? $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["widget_col"] ?? $this->getContext($context, "widget_col")), "html", null, true);
            echo "\">
                    ";
            // line 633
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                    ";
            // line 634
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                    ";
            // line 635
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        } else {
            // line 638
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
                ";
            // line 639
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                ";
            // line 640
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                ";
            // line 641
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
            ";
        }
        // line 643
        echo "        </div>

        ";
        // line 645
        if ((($context["style"] ?? $this->getContext($context, "style")) == "inline")) {
            echo "&nbsp;";
        }
        // line 646
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_12b5bcb709c440923cab80e10a909369da1d55643463a0d966318e59eeeda8fe->leave($__internal_12b5bcb709c440923cab80e10a909369da1d55643463a0d966318e59eeeda8fe_prof);

    }

    // line 649
    public function block_form_input_group($context, array $blocks = array())
    {
        $__internal_66af03309999bb0c7b24f74cbead33870f7147daec0e0ac7d828dab5c5b8a32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66af03309999bb0c7b24f74cbead33870f7147daec0e0ac7d828dab5c5b8a32d->enter($__internal_66af03309999bb0c7b24f74cbead33870f7147daec0e0ac7d828dab5c5b8a32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_input_group"));

        // line 650
        echo "    ";
        ob_start();
        // line 651
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "input_group", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "input_group", array())))) {
            // line 652
            echo "            ";
            $context["input_group"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "input_group", array());
            // line 653
            echo "        ";
        }
        // line 654
        echo "        ";
        $context["input_group"] = ((array_key_exists("input_group", $context)) ? (_twig_default_filter(($context["input_group"] ?? $this->getContext($context, "input_group")), array())) : (array()));
        // line 655
        echo "        ";
        if ( !twig_test_empty(($context["input_group"] ?? $this->getContext($context, "input_group")))) {
            // line 656
            echo "            ";
            $context["ig_size_class"] = "";
            // line 657
            echo "            ";
            if (($this->getAttribute(($context["input_group"] ?? null), "size", array(), "any", true, true) && ($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "size", array()) == "large"))) {
                // line 658
                echo "                ";
                $context["ig_size_class"] = " input-group-lg";
                // line 659
                echo "            ";
            }
            // line 660
            echo "            ";
            if (($this->getAttribute(($context["input_group"] ?? null), "size", array(), "any", true, true) && ($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "size", array()) == "small"))) {
                // line 661
                echo "                ";
                $context["ig_size_class"] = " input-group-sm";
                // line 662
                echo "            ";
            }
            // line 663
            echo "            <div class=\"input-group";
            echo twig_escape_filter($this->env, ($context["ig_size_class"] ?? $this->getContext($context, "ig_size_class")), "html", null, true);
            echo "\">
                ";
            // line 664
            if (($this->getAttribute(($context["input_group"] ?? null), "prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "prepend", array())))) {
                // line 665
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapIconExtension')->parseIconsFilter($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "prepend", array()));
                echo "</span>
                ";
            }
            // line 667
            echo "                ";
            if (($this->getAttribute(($context["input_group"] ?? null), "button_prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "button_prepend", array())))) {
                // line 668
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["input_group_button_prepend"] ?? $this->getContext($context, "input_group_button_prepend")), 'widget');
                echo "</span>
                ";
            }
            // line 670
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
                ";
            // line 671
            if (($this->getAttribute(($context["input_group"] ?? null), "button_append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "button_append", array())))) {
                // line 672
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["input_group_button_append"] ?? $this->getContext($context, "input_group_button_append")), 'widget');
                echo "</span>
                ";
            }
            // line 674
            echo "                ";
            if (($this->getAttribute(($context["input_group"] ?? null), "append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "append", array())))) {
                // line 675
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapIconExtension')->parseIconsFilter($this->getAttribute(($context["input_group"] ?? $this->getContext($context, "input_group")), "append", array()));
                echo "</span>
                ";
            }
            // line 677
            echo "            </div>
        ";
        } else {
            // line 679
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        ";
        }
        // line 681
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_66af03309999bb0c7b24f74cbead33870f7147daec0e0ac7d828dab5c5b8a32d->leave($__internal_66af03309999bb0c7b24f74cbead33870f7147daec0e0ac7d828dab5c5b8a32d_prof);

    }

    // line 684
    public function block_form_help($context, array $blocks = array())
    {
        $__internal_b057f8cecf8efc7b44d67bcd41d85393aa5d3a745418f4dfbb237daf30de1ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b057f8cecf8efc7b44d67bcd41d85393aa5d3a745418f4dfbb237daf30de1ddc->enter($__internal_b057f8cecf8efc7b44d67bcd41d85393aa5d3a745418f4dfbb237daf30de1ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        // line 685
        echo "    ";
        ob_start();
        // line 686
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "help_text", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "help_text", array())))) {
            // line 687
            echo "            ";
            $context["help_text"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "help_text", array());
            // line 688
            echo "        ";
        }
        // line 689
        echo "        ";
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter(($context["help_text"] ?? $this->getContext($context, "help_text")), "")) : (""));
        // line 690
        echo "        ";
        if ( !twig_test_empty(($context["help_text"] ?? $this->getContext($context, "help_text")))) {
            // line 691
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help_text"] ?? $this->getContext($context, "help_text")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</span>
        ";
        }
        // line 693
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b057f8cecf8efc7b44d67bcd41d85393aa5d3a745418f4dfbb237daf30de1ddc->leave($__internal_b057f8cecf8efc7b44d67bcd41d85393aa5d3a745418f4dfbb237daf30de1ddc_prof);

    }

    // line 696
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1d5c029d14e98fea9bf31afd5918414cdf1f9831c6a503a41cf3396e2733fe1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5c029d14e98fea9bf31afd5918414cdf1f9831c6a503a41cf3396e2733fe1d->enter($__internal_1d5c029d14e98fea9bf31afd5918414cdf1f9831c6a503a41cf3396e2733fe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 697
        echo "    ";
        ob_start();
        // line 698
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? $this->getContext($context, "style")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 699
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter(($context["col_size"] ?? $this->getContext($context, "col_size")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()));
        // line 700
        echo "
        ";
        // line 701
        if (($this->getAttribute(($context["attr"] ?? null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array())))) {
            // line 702
            echo "            ";
            $context["label_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array());
            // line 703
            echo "        ";
        }
        // line 704
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 705
            echo "            ";
            $context["widget_col"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array());
            // line 706
            echo "        ";
        }
        // line 707
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())))) {
            // line 708
            echo "            ";
            $context["col_size"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array());
            // line 709
            echo "        ";
        }
        // line 710
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())))) {
            // line 711
            echo "            ";
            $context["style"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array());
            // line 712
            echo "        ";
        }
        // line 713
        echo "
        ";
        // line 714
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter(($context["label_col"] ?? $this->getContext($context, "label_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol()));
        // line 715
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter(($context["widget_col"] ?? $this->getContext($context, "widget_col")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol()));
        // line 716
        echo "
        <div class=\"form-group\">
            ";
        // line 718
        if ((($context["style"] ?? $this->getContext($context, "style")) == "horizontal")) {
            // line 719
            echo "                <div class=\"col-";
            echo twig_escape_filter($this->env, ($context["col_size"] ?? $this->getContext($context, "col_size")), "html", null, true);
            echo "-offset-";
            echo twig_escape_filter($this->env, ($context["label_col"] ?? $this->getContext($context, "label_col")), "html", null, true);
            echo " col-";
            echo twig_escape_filter($this->env, ($context["col_size"] ?? $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["widget_col"] ?? $this->getContext($context, "widget_col")), "html", null, true);
            echo "\">
            ";
        }
        // line 721
        echo "
            ";
        // line 722
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 724
        if ((($context["style"] ?? $this->getContext($context, "style")) == "horizontal")) {
            // line 725
            echo "                </div>
            ";
        }
        // line 727
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1d5c029d14e98fea9bf31afd5918414cdf1f9831c6a503a41cf3396e2733fe1d->leave($__internal_1d5c029d14e98fea9bf31afd5918414cdf1f9831c6a503a41cf3396e2733fe1d_prof);

    }

    // line 731
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8e0e15e323f4b5be666959cbd480409487b0f19baf02397277ef89b1c241af4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0e15e323f4b5be666959cbd480409487b0f19baf02397277ef89b1c241af4f->enter($__internal_8e0e15e323f4b5be666959cbd480409487b0f19baf02397277ef89b1c241af4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 732
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        
        $__internal_8e0e15e323f4b5be666959cbd480409487b0f19baf02397277ef89b1c241af4f->leave($__internal_8e0e15e323f4b5be666959cbd480409487b0f19baf02397277ef89b1c241af4f_prof);

    }

    // line 735
    public function block_form_actions_row($context, array $blocks = array())
    {
        $__internal_a660ffc1d6c42f776c115c00ffbe295141bb607743f0bdbb44e3bb0ca814fc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a660ffc1d6c42f776c115c00ffbe295141bb607743f0bdbb44e3bb0ca814fc6f->enter($__internal_a660ffc1d6c42f776c115c00ffbe295141bb607743f0bdbb44e3bb0ca814fc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        // line 736
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
        
        $__internal_a660ffc1d6c42f776c115c00ffbe295141bb607743f0bdbb44e3bb0ca814fc6f->leave($__internal_a660ffc1d6c42f776c115c00ffbe295141bb607743f0bdbb44e3bb0ca814fc6f_prof);

    }

    // line 741
    public function block_form($context, array $blocks = array())
    {
        $__internal_831760022e267626bf04dbcc06bb07cb7430063a274a5005814692ff789f80bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831760022e267626bf04dbcc06bb07cb7430063a274a5005814692ff789f80bc->enter($__internal_831760022e267626bf04dbcc06bb07cb7430063a274a5005814692ff789f80bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 742
        echo "    ";
        ob_start();
        // line 743
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 744
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 745
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_831760022e267626bf04dbcc06bb07cb7430063a274a5005814692ff789f80bc->leave($__internal_831760022e267626bf04dbcc06bb07cb7430063a274a5005814692ff789f80bc_prof);

    }

    // line 749
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_12667098fb9a134245ad0be40ea6bd7c3b4d01aecfd93dd7c38d63260d92bf24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12667098fb9a134245ad0be40ea6bd7c3b4d01aecfd93dd7c38d63260d92bf24->enter($__internal_12667098fb9a134245ad0be40ea6bd7c3b4d01aecfd93dd7c38d63260d92bf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 750
        echo "    ";
        ob_start();
        // line 751
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->backupFormSettings(), "html", null, true);
        echo "
        ";
        // line 752
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 753
        echo "        ";
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 754
            echo "            ";
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
            // line 755
            echo "        ";
        } else {
            // line 756
            echo "            ";
            $context["form_method"] = "POST";
            // line 757
            echo "        ";
        }
        // line 758
        echo "
        ";
        // line 759
        if (array_key_exists("style", $context)) {
            // line 760
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-") . ($context["style"] ?? $this->getContext($context, "style"))))));
            // line 761
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setStyle(($context["style"] ?? $this->getContext($context, "style"))), "html", null, true);
            echo "
        ";
        }
        // line 763
        echo "
        ";
        // line 764
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 765
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " has-global-errors"))));
            // line 766
            echo "        ";
        }
        // line 767
        echo "
        ";
        // line 768
        if (array_key_exists("col_size", $context)) {
            // line 769
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setColSize(($context["col_size"] ?? $this->getContext($context, "col_size"))), "html", null, true);
            echo "
        ";
        }
        // line 771
        echo "
        ";
        // line 772
        if (array_key_exists("widget_col", $context)) {
            // line 773
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setWidgetCol(($context["widget_col"] ?? $this->getContext($context, "widget_col"))), "html", null, true);
            echo "
        ";
        }
        // line 775
        echo "
        ";
        // line 776
        if (array_key_exists("label_col", $context)) {
            // line 777
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setLabelCol(($context["label_col"] ?? $this->getContext($context, "label_col"))), "html", null, true);
            echo "
        ";
        }
        // line 779
        echo "
        ";
        // line 780
        if (array_key_exists("simple_col", $context)) {
            // line 781
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setSimpleCol(($context["simple_col"] ?? $this->getContext($context, "simple_col"))), "html", null, true);
            echo "
        ";
        }
        // line 783
        echo "
        ";
        // line 784
        if (( !$this->getAttribute(($context["attr"] ?? null), "role", array(), "any", true, true) || twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "role", array())))) {
            // line 785
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("role" => "form"));
            // line 786
            echo "        ";
        }
        // line 787
        echo "
        <form  name=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
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
        echo ">
        ";
        // line 789
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 790
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />
        ";
        }
        // line 792
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_12667098fb9a134245ad0be40ea6bd7c3b4d01aecfd93dd7c38d63260d92bf24->leave($__internal_12667098fb9a134245ad0be40ea6bd7c3b4d01aecfd93dd7c38d63260d92bf24_prof);

    }

    // line 795
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_9747382c721589bab3d64efe97177ea64cd7021d38c4b0e26ac49a303618b923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9747382c721589bab3d64efe97177ea64cd7021d38c4b0e26ac49a303618b923->enter($__internal_9747382c721589bab3d64efe97177ea64cd7021d38c4b0e26ac49a303618b923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 796
        echo "    ";
        ob_start();
        // line 797
        echo "        ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 798
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "
        ";
        }
        // line 800
        echo "        </form>
        ";
        // line 801
        if ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle()) {
            // line 802
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setStyle(""), "html", null, true);
            echo "
        ";
        }
        // line 804
        echo "        ";
        if ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getColSize()) {
            // line 805
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setColSize("lg"), "html", null, true);
            echo "
        ";
        }
        // line 807
        echo "        ";
        if ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getWidgetCol()) {
            // line 808
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setWidgetCol(10), "html", null, true);
            echo "
        ";
        }
        // line 810
        echo "        ";
        if ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getLabelCol()) {
            // line 811
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setLabelCol(2), "html", null, true);
            echo "
        ";
        }
        // line 813
        echo "        ";
        if ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getSimpleCol()) {
            // line 814
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->setSimpleCol(false), "html", null, true);
            echo "
        ";
        }
        // line 816
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->restoreFormSettings(), "html", null, true);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9747382c721589bab3d64efe97177ea64cd7021d38c4b0e26ac49a303618b923->leave($__internal_9747382c721589bab3d64efe97177ea64cd7021d38c4b0e26ac49a303618b923_prof);

    }

    // line 820
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_7b621c1f2094a6b889beb6b167f6f5603fa94db13b09af12f4a47e7ac4323399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b621c1f2094a6b889beb6b167f6f5603fa94db13b09af12f4a47e7ac4323399->enter($__internal_7b621c1f2094a6b889beb6b167f6f5603fa94db13b09af12f4a47e7ac4323399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 821
        echo "    ";
        ob_start();
        // line 822
        echo "        ";
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 823
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7b621c1f2094a6b889beb6b167f6f5603fa94db13b09af12f4a47e7ac4323399->leave($__internal_7b621c1f2094a6b889beb6b167f6f5603fa94db13b09af12f4a47e7ac4323399_prof);

    }

    // line 826
    public function block_global_form_errors($context, array $blocks = array())
    {
        $__internal_9854d5bdd48f56e099431853641e8eb48fa84ef54899f8d2a4cbbe7390842186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9854d5bdd48f56e099431853641e8eb48fa84ef54899f8d2a4cbbe7390842186->enter($__internal_9854d5bdd48f56e099431853641e8eb48fa84ef54899f8d2a4cbbe7390842186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_form_errors"));

        // line 827
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 828
            echo "        ";
            $context["global_errors"] = true;
            // line 829
            echo "        ";
            $this->displayBlock("form_errors", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_9854d5bdd48f56e099431853641e8eb48fa84ef54899f8d2a4cbbe7390842186->leave($__internal_9854d5bdd48f56e099431853641e8eb48fa84ef54899f8d2a4cbbe7390842186_prof);

    }

    // line 833
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_58e588022e2539fd4dfa8d2fe57a7ea8a9f2db345b1d5de4f794a2a76a80d540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e588022e2539fd4dfa8d2fe57a7ea8a9f2db345b1d5de4f794a2a76a80d540->enter($__internal_58e588022e2539fd4dfa8d2fe57a7ea8a9f2db345b1d5de4f794a2a76a80d540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 834
        echo "    ";
        ob_start();
        // line 835
        echo "        ";
        $context["global_errors"] = ((array_key_exists("global_errors", $context)) ? (_twig_default_filter(($context["global_errors"] ?? $this->getContext($context, "global_errors")), false)) : (false));
        // line 836
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? $this->getContext($context, "style")), $this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle())) : ($this->env->getExtension('Akuma\Bundle\BootswatchBundle\Twig\BootstrapFormExtension')->getStyle()));
        // line 837
        echo "
        ";
        // line 838
        if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())))) {
            // line 839
            echo "            ";
            $context["style"] = $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array());
            // line 840
            echo "        ";
        }
        // line 841
        echo "
        ";
        // line 842
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 843
            echo "            ";
            if (($context["global_errors"] ?? $this->getContext($context, "global_errors"))) {
                // line 844
                echo "                <div class=\"alert alert-danger\">
            ";
            }
            // line 846
            echo "            <ul";
            if ( !($context["global_errors"] ?? $this->getContext($context, "global_errors"))) {
                echo " class=\"help-block\"";
            }
            echo ">
                ";
            // line 847
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 848
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 850
            echo "            </ul>
            ";
            // line 851
            if ((($context["global_errors"] ?? $this->getContext($context, "global_errors")) == true)) {
                // line 852
                echo "                </div>
            ";
            }
            // line 854
            echo "        ";
        }
        // line 855
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_58e588022e2539fd4dfa8d2fe57a7ea8a9f2db345b1d5de4f794a2a76a80d540->leave($__internal_58e588022e2539fd4dfa8d2fe57a7ea8a9f2db345b1d5de4f794a2a76a80d540_prof);

    }

    // line 858
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_0ae82afc7b79c67a13934bfefea038fa7a7c3300acc768fa08cc78eca969bd5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae82afc7b79c67a13934bfefea038fa7a7c3300acc768fa08cc78eca969bd5e->enter($__internal_0ae82afc7b79c67a13934bfefea038fa7a7c3300acc768fa08cc78eca969bd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 859
        echo "    ";
        ob_start();
        // line 860
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 861
            echo "            ";
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 862
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
            ";
            }
            // line 864
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0ae82afc7b79c67a13934bfefea038fa7a7c3300acc768fa08cc78eca969bd5e->leave($__internal_0ae82afc7b79c67a13934bfefea038fa7a7c3300acc768fa08cc78eca969bd5e_prof);

    }

    // line 870
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_7afdfed28e9be4ffdc971f2cecc438d2e6375d8414d75f90d7daff71cae8f941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afdfed28e9be4ffdc971f2cecc438d2e6375d8414d75f90d7daff71cae8f941->enter($__internal_7afdfed28e9be4ffdc971f2cecc438d2e6375d8414d75f90d7daff71cae8f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 871
        echo "    ";
        ob_start();
        // line 872
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 873
            echo "            ";
            $context["childAttr"] = array();
            // line 874
            echo "            ";
            if ($this->getAttribute(($context["attr"] ?? null), "col_size", array(), "any", true, true)) {
                // line 875
                echo "                ";
                $context["childAttr"] = twig_array_merge(($context["childAttr"] ?? $this->getContext($context, "childAttr")), array("col_size" => $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "col_size", array())));
                // line 876
                echo "            ";
            }
            // line 877
            echo "            ";
            if ($this->getAttribute(($context["attr"] ?? null), "widget_col", array(), "any", true, true)) {
                // line 878
                echo "                ";
                $context["childAttr"] = twig_array_merge(($context["childAttr"] ?? $this->getContext($context, "childAttr")), array("widget_col" => $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "widget_col", array())));
                // line 879
                echo "            ";
            }
            // line 880
            echo "            ";
            if ($this->getAttribute(($context["attr"] ?? null), "label_col", array(), "any", true, true)) {
                // line 881
                echo "                ";
                $context["childAttr"] = twig_array_merge(($context["childAttr"] ?? $this->getContext($context, "childAttr")), array("label_col" => $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "label_col", array())));
                // line 882
                echo "            ";
            }
            // line 883
            echo "            ";
            if ($this->getAttribute(($context["attr"] ?? null), "simple_col", array(), "any", true, true)) {
                // line 884
                echo "                ";
                $context["childAttr"] = twig_array_merge(($context["childAttr"] ?? $this->getContext($context, "childAttr")), array("simple_col" => $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "simple_col", array())));
                // line 885
                echo "            ";
            }
            // line 886
            echo "            ";
            if ($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) {
                // line 887
                echo "                ";
                $context["childAttr"] = twig_array_merge(($context["childAttr"] ?? $this->getContext($context, "childAttr")), array("style" => $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())));
                // line 888
                echo "            ";
            }
            // line 889
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', ($context["childAttr"] ?? $this->getContext($context, "childAttr")));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 891
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7afdfed28e9be4ffdc971f2cecc438d2e6375d8414d75f90d7daff71cae8f941->leave($__internal_7afdfed28e9be4ffdc971f2cecc438d2e6375d8414d75f90d7daff71cae8f941_prof);

    }

    // line 894
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_139594bd8141be10e834a8cc8dc2d2310f073d342508b3408f65bc1981a5477e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139594bd8141be10e834a8cc8dc2d2310f073d342508b3408f65bc1981a5477e->enter($__internal_139594bd8141be10e834a8cc8dc2d2310f073d342508b3408f65bc1981a5477e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 895
        echo "    ";
        ob_start();
        // line 896
        echo "        id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["read_only"] ?? $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        if (($context["max_length"] ?? $this->getContext($context, "max_length"))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, ($context["max_length"] ?? $this->getContext($context, "max_length")), "html", null, true);
            echo "\"";
        }
        if (($context["pattern"] ?? $this->getContext($context, "pattern"))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, ($context["pattern"] ?? $this->getContext($context, "pattern")), "html", null, true);
            echo "\"";
        }
        // line 897
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\" ";
            } elseif (twig_in_filter($context["attrname"], array(0 => "input_group"))) {
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_139594bd8141be10e834a8cc8dc2d2310f073d342508b3408f65bc1981a5477e->leave($__internal_139594bd8141be10e834a8cc8dc2d2310f073d342508b3408f65bc1981a5477e_prof);

    }

    // line 901
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_6c2c672915f1ccb80e09c871353e42bd165ee4b4eaa604378fc7f3e2bcd0e809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2c672915f1ccb80e09c871353e42bd165ee4b4eaa604378fc7f3e2bcd0e809->enter($__internal_6c2c672915f1ccb80e09c871353e42bd165ee4b4eaa604378fc7f3e2bcd0e809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 902
        echo "    ";
        ob_start();
        // line 903
        echo "        ";
        if (($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true) && (($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array()) == "inline") || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array()) == "horizontal")))) {
            // line 904
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((("form-" . $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "style", array())) . " ") . (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))))));
            // line 905
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => null));
            // line 906
            echo "        ";
        }
        // line 907
        echo "        ";
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
        }
        // line 908
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (( !(null === $context["attrvalue"]) &&  !twig_test_iterable($context["attrvalue"]))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 909
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6c2c672915f1ccb80e09c871353e42bd165ee4b4eaa604378fc7f3e2bcd0e809->leave($__internal_6c2c672915f1ccb80e09c871353e42bd165ee4b4eaa604378fc7f3e2bcd0e809_prof);

    }

    // line 912
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_830459e0b1d8ec8d371481640fc89eff80f912a33393b37f43d9854841e53c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830459e0b1d8ec8d371481640fc89eff80f912a33393b37f43d9854841e53c43->enter($__internal_830459e0b1d8ec8d371481640fc89eff80f912a33393b37f43d9854841e53c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 913
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 914
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
        
        $__internal_830459e0b1d8ec8d371481640fc89eff80f912a33393b37f43d9854841e53c43->leave($__internal_830459e0b1d8ec8d371481640fc89eff80f912a33393b37f43d9854841e53c43_prof);

    }

    public function getTemplateName()
    {
        return "AkumaBootswatchBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3362 => 914,  3353 => 913,  3347 => 912,  3339 => 909,  3324 => 908,  3317 => 907,  3314 => 906,  3311 => 905,  3308 => 904,  3305 => 903,  3302 => 902,  3296 => 901,  3288 => 898,  3267 => 897,  3242 => 896,  3239 => 895,  3233 => 894,  3225 => 891,  3216 => 889,  3213 => 888,  3210 => 887,  3207 => 886,  3204 => 885,  3201 => 884,  3198 => 883,  3195 => 882,  3192 => 881,  3189 => 880,  3186 => 879,  3183 => 878,  3180 => 877,  3177 => 876,  3174 => 875,  3171 => 874,  3168 => 873,  3163 => 872,  3160 => 871,  3154 => 870,  3146 => 865,  3140 => 864,  3134 => 862,  3131 => 861,  3126 => 860,  3123 => 859,  3117 => 858,  3109 => 855,  3106 => 854,  3102 => 852,  3100 => 851,  3097 => 850,  3088 => 848,  3084 => 847,  3077 => 846,  3073 => 844,  3070 => 843,  3068 => 842,  3065 => 841,  3062 => 840,  3059 => 839,  3057 => 838,  3054 => 837,  3051 => 836,  3048 => 835,  3045 => 834,  3039 => 833,  3028 => 829,  3025 => 828,  3022 => 827,  3016 => 826,  3008 => 823,  3003 => 822,  3000 => 821,  2994 => 820,  2983 => 816,  2977 => 814,  2974 => 813,  2968 => 811,  2965 => 810,  2959 => 808,  2956 => 807,  2950 => 805,  2947 => 804,  2941 => 802,  2939 => 801,  2936 => 800,  2930 => 798,  2927 => 797,  2924 => 796,  2918 => 795,  2910 => 792,  2904 => 790,  2902 => 789,  2878 => 788,  2875 => 787,  2872 => 786,  2869 => 785,  2867 => 784,  2864 => 783,  2858 => 781,  2856 => 780,  2853 => 779,  2847 => 777,  2845 => 776,  2842 => 775,  2836 => 773,  2834 => 772,  2831 => 771,  2825 => 769,  2823 => 768,  2820 => 767,  2817 => 766,  2814 => 765,  2812 => 764,  2809 => 763,  2803 => 761,  2800 => 760,  2798 => 759,  2795 => 758,  2792 => 757,  2789 => 756,  2786 => 755,  2783 => 754,  2780 => 753,  2778 => 752,  2773 => 751,  2770 => 750,  2764 => 749,  2754 => 745,  2750 => 744,  2745 => 743,  2742 => 742,  2736 => 741,  2726 => 736,  2720 => 735,  2710 => 732,  2704 => 731,  2695 => 727,  2691 => 725,  2689 => 724,  2684 => 722,  2681 => 721,  2669 => 719,  2667 => 718,  2663 => 716,  2660 => 715,  2658 => 714,  2655 => 713,  2652 => 712,  2649 => 711,  2646 => 710,  2643 => 709,  2640 => 708,  2637 => 707,  2634 => 706,  2631 => 705,  2628 => 704,  2625 => 703,  2622 => 702,  2620 => 701,  2617 => 700,  2614 => 699,  2611 => 698,  2608 => 697,  2602 => 696,  2594 => 693,  2588 => 691,  2585 => 690,  2582 => 689,  2579 => 688,  2576 => 687,  2573 => 686,  2570 => 685,  2564 => 684,  2556 => 681,  2550 => 679,  2546 => 677,  2540 => 675,  2537 => 674,  2531 => 672,  2529 => 671,  2524 => 670,  2518 => 668,  2515 => 667,  2509 => 665,  2507 => 664,  2502 => 663,  2499 => 662,  2496 => 661,  2493 => 660,  2490 => 659,  2487 => 658,  2484 => 657,  2481 => 656,  2478 => 655,  2475 => 654,  2472 => 653,  2469 => 652,  2466 => 651,  2463 => 650,  2457 => 649,  2449 => 646,  2445 => 645,  2441 => 643,  2436 => 641,  2432 => 640,  2428 => 639,  2423 => 638,  2417 => 635,  2413 => 634,  2409 => 633,  2403 => 632,  2398 => 631,  2396 => 630,  2390 => 629,  2387 => 628,  2384 => 627,  2382 => 626,  2379 => 625,  2376 => 624,  2373 => 623,  2370 => 622,  2367 => 621,  2364 => 620,  2361 => 619,  2358 => 618,  2355 => 617,  2352 => 616,  2349 => 615,  2346 => 614,  2343 => 613,  2340 => 612,  2337 => 611,  2335 => 610,  2332 => 609,  2329 => 608,  2326 => 607,  2323 => 606,  2317 => 605,  2306 => 601,  2304 => 597,  2301 => 596,  2295 => 595,  2284 => 591,  2276 => 588,  2257 => 586,  2254 => 585,  2251 => 584,  2248 => 583,  2245 => 582,  2242 => 581,  2239 => 580,  2236 => 579,  2233 => 578,  2231 => 577,  2228 => 576,  2225 => 575,  2222 => 574,  2219 => 573,  2216 => 572,  2213 => 571,  2211 => 570,  2208 => 569,  2205 => 568,  2202 => 567,  2200 => 566,  2197 => 565,  2194 => 564,  2191 => 563,  2189 => 562,  2186 => 561,  2183 => 560,  2180 => 559,  2177 => 558,  2174 => 557,  2171 => 556,  2168 => 555,  2165 => 554,  2162 => 553,  2160 => 552,  2157 => 551,  2154 => 550,  2151 => 549,  2145 => 548,  2120 => 543,  2117 => 542,  2111 => 541,  2100 => 538,  2096 => 537,  2091 => 536,  2085 => 535,  2074 => 531,  2071 => 530,  2068 => 529,  2062 => 528,  2051 => 524,  2048 => 523,  2045 => 522,  2039 => 521,  2031 => 518,  2018 => 516,  2007 => 514,  2004 => 513,  2001 => 512,  1998 => 511,  1995 => 510,  1992 => 509,  1989 => 508,  1986 => 507,  1983 => 506,  1980 => 505,  1977 => 504,  1971 => 503,  1960 => 499,  1957 => 498,  1954 => 497,  1948 => 496,  1937 => 492,  1934 => 491,  1931 => 490,  1925 => 489,  1914 => 485,  1911 => 484,  1908 => 483,  1902 => 482,  1890 => 476,  1887 => 475,  1884 => 474,  1881 => 473,  1875 => 472,  1864 => 468,  1861 => 467,  1858 => 466,  1852 => 465,  1841 => 461,  1838 => 460,  1835 => 459,  1829 => 458,  1819 => 453,  1817 => 449,  1814 => 448,  1811 => 447,  1805 => 446,  1794 => 442,  1791 => 441,  1788 => 440,  1782 => 439,  1771 => 435,  1768 => 434,  1766 => 433,  1763 => 432,  1757 => 431,  1749 => 428,  1745 => 426,  1739 => 425,  1734 => 424,  1730 => 423,  1725 => 422,  1722 => 421,  1719 => 420,  1713 => 418,  1710 => 417,  1707 => 416,  1701 => 415,  1693 => 412,  1688 => 409,  1686 => 408,  1685 => 407,  1684 => 406,  1683 => 405,  1678 => 404,  1675 => 403,  1669 => 401,  1666 => 400,  1663 => 399,  1657 => 398,  1649 => 395,  1643 => 392,  1639 => 391,  1635 => 390,  1631 => 389,  1626 => 388,  1623 => 387,  1617 => 385,  1614 => 384,  1611 => 383,  1605 => 382,  1586 => 378,  1583 => 377,  1577 => 376,  1558 => 372,  1555 => 371,  1549 => 370,  1541 => 367,  1537 => 365,  1535 => 364,  1531 => 362,  1529 => 361,  1524 => 359,  1521 => 358,  1515 => 356,  1509 => 354,  1507 => 353,  1504 => 352,  1498 => 350,  1492 => 348,  1488 => 346,  1486 => 345,  1482 => 344,  1466 => 343,  1463 => 342,  1460 => 341,  1457 => 340,  1454 => 339,  1451 => 338,  1448 => 337,  1445 => 336,  1442 => 335,  1439 => 334,  1436 => 333,  1433 => 332,  1430 => 331,  1427 => 330,  1425 => 329,  1422 => 328,  1414 => 326,  1412 => 325,  1408 => 324,  1401 => 323,  1398 => 322,  1395 => 321,  1392 => 320,  1390 => 319,  1387 => 318,  1384 => 317,  1381 => 316,  1378 => 315,  1375 => 314,  1372 => 313,  1369 => 312,  1366 => 311,  1363 => 310,  1361 => 309,  1358 => 308,  1356 => 307,  1353 => 306,  1350 => 305,  1347 => 304,  1341 => 303,  1333 => 300,  1329 => 299,  1326 => 298,  1322 => 296,  1320 => 295,  1316 => 293,  1314 => 292,  1309 => 290,  1306 => 289,  1300 => 287,  1294 => 285,  1292 => 284,  1289 => 283,  1283 => 281,  1277 => 279,  1273 => 277,  1271 => 276,  1267 => 275,  1251 => 274,  1248 => 273,  1245 => 272,  1242 => 271,  1239 => 270,  1236 => 269,  1233 => 268,  1230 => 267,  1227 => 266,  1224 => 265,  1221 => 264,  1218 => 263,  1215 => 262,  1212 => 261,  1210 => 260,  1207 => 259,  1199 => 257,  1197 => 256,  1193 => 255,  1186 => 254,  1183 => 253,  1180 => 252,  1177 => 251,  1174 => 250,  1172 => 249,  1169 => 248,  1166 => 247,  1163 => 246,  1160 => 245,  1157 => 244,  1154 => 243,  1151 => 242,  1148 => 241,  1145 => 240,  1142 => 239,  1139 => 238,  1136 => 237,  1134 => 236,  1131 => 235,  1128 => 234,  1125 => 233,  1122 => 232,  1116 => 231,  1108 => 228,  1094 => 227,  1082 => 225,  1075 => 222,  1073 => 221,  1068 => 220,  1065 => 219,  1047 => 218,  1044 => 217,  1038 => 216,  1026 => 211,  1023 => 210,  1020 => 209,  1014 => 207,  1012 => 206,  1007 => 205,  1004 => 204,  1001 => 203,  988 => 201,  986 => 200,  979 => 199,  976 => 198,  973 => 197,  970 => 196,  964 => 195,  955 => 191,  949 => 190,  943 => 188,  937 => 186,  934 => 185,  930 => 184,  925 => 183,  922 => 182,  916 => 181,  908 => 178,  902 => 176,  896 => 174,  893 => 173,  890 => 172,  884 => 171,  876 => 168,  872 => 166,  870 => 165,  865 => 163,  862 => 162,  854 => 160,  852 => 159,  849 => 158,  846 => 157,  843 => 156,  841 => 155,  838 => 154,  835 => 153,  832 => 152,  830 => 151,  827 => 150,  824 => 149,  821 => 148,  815 => 147,  807 => 144,  803 => 142,  801 => 141,  794 => 139,  791 => 138,  789 => 137,  786 => 136,  778 => 134,  776 => 133,  773 => 132,  770 => 131,  767 => 130,  764 => 129,  761 => 128,  758 => 127,  756 => 126,  753 => 125,  750 => 124,  747 => 123,  741 => 122,  732 => 118,  722 => 116,  720 => 115,  717 => 114,  709 => 111,  701 => 108,  696 => 107,  694 => 106,  689 => 104,  685 => 103,  681 => 102,  677 => 100,  673 => 99,  667 => 97,  664 => 96,  661 => 95,  659 => 94,  656 => 93,  653 => 92,  650 => 91,  647 => 90,  644 => 89,  641 => 88,  638 => 87,  635 => 86,  632 => 85,  629 => 84,  626 => 83,  623 => 82,  617 => 81,  606 => 77,  603 => 76,  600 => 75,  597 => 74,  594 => 73,  588 => 72,  577 => 67,  572 => 66,  566 => 64,  564 => 63,  559 => 62,  556 => 61,  550 => 60,  542 => 57,  538 => 55,  535 => 54,  522 => 52,  520 => 51,  500 => 49,  497 => 48,  495 => 47,  492 => 46,  489 => 45,  486 => 44,  483 => 43,  480 => 42,  477 => 41,  474 => 40,  472 => 39,  469 => 38,  467 => 37,  464 => 36,  456 => 34,  454 => 33,  451 => 32,  448 => 31,  445 => 30,  442 => 29,  439 => 28,  436 => 27,  433 => 26,  430 => 25,  427 => 24,  424 => 23,  421 => 22,  418 => 21,  416 => 20,  413 => 19,  410 => 18,  407 => 17,  404 => 16,  398 => 15,  390 => 12,  384 => 10,  378 => 8,  375 => 7,  372 => 6,  366 => 5,  359 => 912,  356 => 911,  354 => 901,  351 => 900,  349 => 894,  346 => 893,  344 => 870,  341 => 869,  338 => 867,  336 => 858,  333 => 857,  331 => 833,  328 => 832,  326 => 826,  323 => 825,  321 => 820,  318 => 819,  316 => 795,  313 => 794,  311 => 749,  308 => 748,  306 => 741,  303 => 740,  300 => 738,  298 => 735,  295 => 734,  293 => 731,  290 => 730,  288 => 696,  285 => 695,  283 => 684,  280 => 683,  278 => 649,  275 => 648,  273 => 605,  270 => 604,  268 => 595,  265 => 594,  262 => 592,  260 => 591,  257 => 590,  255 => 548,  252 => 547,  249 => 545,  247 => 541,  244 => 540,  242 => 535,  239 => 534,  237 => 528,  234 => 527,  232 => 521,  229 => 520,  227 => 503,  224 => 502,  222 => 496,  219 => 495,  217 => 489,  214 => 488,  212 => 482,  209 => 481,  207 => 472,  204 => 471,  202 => 465,  199 => 464,  197 => 458,  194 => 457,  192 => 446,  189 => 445,  187 => 439,  184 => 438,  182 => 431,  179 => 430,  177 => 415,  174 => 414,  172 => 398,  169 => 397,  167 => 382,  164 => 381,  162 => 376,  159 => 375,  157 => 370,  154 => 369,  152 => 303,  149 => 302,  147 => 231,  144 => 230,  142 => 216,  139 => 215,  137 => 195,  134 => 194,  132 => 181,  129 => 180,  127 => 171,  124 => 170,  122 => 147,  119 => 146,  117 => 122,  114 => 121,  112 => 81,  109 => 80,  107 => 72,  104 => 71,  102 => 60,  99 => 59,  97 => 15,  94 => 14,  92 => 5,  89 => 4,  86 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget %}
    {% spaceless %}
        {% if compound %}
            {{ block('form_widget_compound') }}
        {% else %}
            {{ block('form_widget_simple') }}
        {% endif %}
    {% endspaceless %}
{% endblock form_widget %}

{% block form_widget_simple %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if simple_col is not defined and bootstrap_get_simple_col() %}
            {% set simple_col = bootstrap_get_simple_col() %}
        {% endif %}
        {% if attr.simple_col is defined and attr.simple_col is not empty %}
            {% set simple_col = attr.simple_col %}
        {% endif  %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% if simple_col is defined and simple_col %}
            <div class=\"col-{{ col_size }}-{{ simple_col }}\">
        {% endif %}

        {% set type = type|default('text') %}

        {% if style == 'inline' and (attr.placeholder is not defined or attr.placeholder is empty)  and label is not sameas(false) %}
            {% if label is empty %}
                {% set attr = attr|merge({ 'placeholder': name|humanize }) %}
            {% else %}
                {% set attr = attr|merge({ 'placeholder': label}) %}
            {% endif %}
        {% endif %}

        {% if static_control is defined and static_control == true %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control-static')|trim }) %}
            <p id=\"{{ id }}\" {%- for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ value }}</p>
        {%- else -%}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}
            <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}>
        {%- endif %}
        {% if simple_col is defined %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock form_widget_simple %}

{% block form_widget_compound %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {% if form.parent is empty %}
                {{ block('global_form_errors') }}
            {% endif %}
            {{ block('form_rows') }}
            {{ form_rest(form) }}
        </div>
    {% endspaceless %}
{% endblock form_widget_compound %}

{% block collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
            {% set attr = attr|merge({'data-prototype': form_row(prototype) }) %}
        {% endif %}
        {{ block('form_widget') }}
    {% endspaceless %}
{% endblock collection_widget %}

{% block bootstrap_collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
            {% set prototype_vars = {} %}
            {% if style is defined %}
                {% set prototype_vars = prototype_vars|merge({'style': style}) %}
            {% endif %}
            {% set prototype_html = '<div class=\"col-xs-' ~ form.vars.sub_widget_col ~ '\">' ~ form_widget(prototype, prototype_vars) ~ '</div>' %}
            {% if form.vars.allow_delete %}
                {% set prototype_html = prototype_html ~ '<div class=\"col-xs-' ~ form.vars.button_col ~ '\"><a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"__id__\">' ~ form.vars.delete_button_text|trans({}, translation_domain)|parse_icons|raw ~ '</a></div>' %}
            {% endif %}
            {% set prototype_html = '<div class=\"row\">' ~ prototype_html ~ '</div>' %}

            {% set attr = attr|merge({'data-prototype': prototype_html }) %}
            {% set attr = attr|merge({'data-prototype-name': prototype_name }) %}
        {% endif %}
        <div {{ block('widget_container_attributes') }}>
            <ul class=\"bc-collection list-unstyled\">
                {% for field in form %}
                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-{{ form.vars.sub_widget_col }}\">
                                {{ form_widget(field) }}
                                {{ form_errors(field) }}
                            </div>
                            {% if form.vars.allow_delete %}
                                <div class=\"col-xs-{{ form.vars.button_col }}\">
                                    <a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"{{ field.vars.id }}\">{{ form.vars.delete_button_text|trans({}, translation_domain)|parse_icons|raw }}</a>
                                </div>
                            {% endif %}
                        </div>
                    </li>
                {% endfor %}
            </ul>
            {% if form.vars.allow_add %}
                <a href=\"#\" class=\"btn btn-primary btn-sm\" data-addfield=\"collection\" data-collection=\"{{ form.vars.id }}\" data-prototype-name=\"{{ prototype_name }}\">{{ form.vars.add_button_text|trans({}, translation_domain)|parse_icons|raw }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock bootstrap_collection_widget %}

{% block textarea_widget %}
    {% spaceless %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.simple_col is defined and attr.simple_col is not empty %}
            {% set simple_col = attr.simple_col %}
        {% endif  %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if simple_col is defined %}
            <div class=\"col-{{ col_size }}-{{ simple_col }}\">
        {% endif %}

        {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}

        <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

        {% if simple_col is defined %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock textarea_widget %}

{% block file_widget %}
    {% spaceless %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.simple_col is defined and attr.simple_col is not empty %}
            {% set simple_col = attr.simple_col %}
        {% endif  %}

        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if simple_col is defined %}
            <div class=\"col-{{ col_size }}-{{ simple_col }}\">
        {% endif %}

        <input type=\"file\" {{ block('widget_attributes') }}>

        {% if simple_col is defined %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock file_widget %}

{% block choice_widget %}
    {% spaceless %}
        {% if expanded %}
            {{ block('choice_widget_expanded') }}
        {% else %}
            {{ block('choice_widget_collapsed') }}
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget %}

{% block choice_widget_expanded %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {% if multiple %}
                    {{ checkbox_row(child, { 'no_form_group': true, 'inline' : (attr.inline is defined and attr.inline), 'label_attr': label_attr }) }}
                {% else %}
                    {{ radio_row(child, { 'no_form_group': true, 'inline' : (attr.inline is defined and attr.inline), 'label_attr': label_attr  }) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
    {% spaceless %}
        {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}

        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {% if empty_value is not none %}
                <option {% if required %} disabled=\"disabled\"{% if value is empty %} selected=\"selected\"{% endif %}{% endif %} value=\"\">{{ empty_value|trans({}, translation_domain) }}</option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 and separator is not none %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block choice_widget_options %}
    {% spaceless %}
        {% for group_label, choice in options %}
            {% if choice is iterable %}
                <optgroup label=\"{{ group_label|trans({}, translation_domain) }}\">
                    {% set options = choice %}
                    {{ block('choice_widget_options') }}
                </optgroup>
            {% else %}
                <option value=\"{{ choice.value }}\"{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice.label|trans({}, translation_domain) }}</option>
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endblock choice_widget_options %}

{% block checkbox_row %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% set class = '' %}
        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}
            {% set label_col = label_col|default(bootstrap_get_label_col()) %}
            {% set class = 'col-' ~ col_size ~ '-' ~ widget_col ~ ' col-' ~ col_size ~ '-offset-' ~ label_col %}
            <div class=\"form-group {% if form.vars.errors|length > 0 %} has-error{% endif %}\">
            <div class=\"{{ class }}\">
        {% elseif no_form_group is not defined or no_form_group == false %}
            <div class=\"form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}\">
        {% endif %}

        {%set checkboxdata %}
        {% if label is not sameas(false) %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if inline is defined and inline %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' checkbox-inline')|trim}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ block('checkbox_widget') }}
            {{ label|trans({}, translation_domain)|raw -}}
            </label>
        {% else %}
            {{ block('checkbox_widget') }}
        {% endif %}
        {{ form_errors(form) }}
        {% endset %}

        {% if inline is defined and inline %}
            {{ checkboxdata|raw }}
        {% else%}
            <div class=\"checkbox\">{{ checkboxdata|raw }}</div>
        {% endif %}

        {{ block('form_help') }}

        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            </div>
            </div>
        {% elseif no_form_group is not defined or no_form_group == false %}
            </div>
        {% endif %}

        {% if style == 'inline' %}&nbsp;{% endif %}
    {% endspaceless %}
{% endblock checkbox_row %}

{% block radio_row %}
    {% spaceless %}
        {% set class = '' %}

        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}
            {% set label_col = label_col|default(bootstrap_get_label_col()) %}
            {% set class = ' col-'~ col_size ~ '-' ~ widget_col ~ ' col-' ~ col_size ~ '-offset-' ~ label_col %}
            <div class=\"form-group {% if form.vars.errors|length > 0 %} has-error{% endif %}\">
            <div class=\"{{ class }}\">
        {% elseif no_form_group is not defined or no_form_group == false %}
            <div class=\"form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}\">
        {% endif %}

        {%set radiodata %}
        {% if label is not sameas(false) %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if inline is defined and inline %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' radio-inline')|trim}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ block('radio_widget') }}
            {{ label|trans({}, translation_domain)|raw -}}
            </label>
        {% else %}
            {{ block('radio_widget') }}
        {% endif %}
        {{ form_errors(form) }}
        {% endset %}

        {% if inline is defined and inline %}
            {{ radiodata|raw }}
        {% else%}
            <div class=\"radio\">{{ radiodata|raw }}</div>
        {% endif %}

        {{ block('form_help') }}

        {% if align_with_widget is defined or attr.align_with_widget is defined %}
            </div>
            </div>
        {% elseif no_form_group is not defined or no_form_group == false %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock radio_row %}

{% block checkbox_widget %}
    {% spaceless %}
        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block radio_widget %}
    {% spaceless %}
        <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    {% endspaceless %}
{% endblock radio_widget %}

{% block datetime_widget %}
    {% spaceless %}
        {% if widget == 'single_text' %}
            {{ block('form_widget_simple') }}
        {% else %}
            {% set attr = attr|merge({ 'class': 'bootstrap-datetime' }) %}
            <div {{ block('widget_container_attributes') }}>
                {{ form_widget(form.date) }}
                {{ form_widget(form.time) }}
                {{ form_errors(form.date) }}
                {{ form_errors(form.time) }}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock datetime_widget %}

{% block date_widget %}
    {% spaceless %}
        {% if widget == 'single_text' %}
            {{ block('form_widget_simple') }}
        {% else %}
            {% set attr = attr|merge({ 'class': 'bootstrap-date' }) %}
            <div {{ block('widget_container_attributes') }}>
                {{ date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
                })|raw }}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
    {% spaceless %}
        {% if widget == 'single_text' %}
            {{ block('form_widget_simple') }}
        {% else %}
            {% set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} %}
            {% set attr = attr|merge({ 'class': 'bootstrap-time' }) %}
            <div {{ block('widget_container_attributes') }}>
                {{ form_widget(form.hour, vars) }}
                {% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}
                {% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock time_widget %}

{% block number_widget %}
    {% spaceless %}
        {# type=\"number\" doesn't work with floats #}
        {% set type = type|default('text') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock number_widget %}

{% block integer_widget %}
    {% spaceless %}
        {% set type = type|default('number') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock integer_widget %}

{% block money_widget %}
    {% spaceless %}
        <div class=\"input-group\">
            {{ money_pattern|replace({
            '{{ widget }}': block('form_widget_simple'),
            '{{ tag_start }}': '<span class=\"input-group-addon\">',
            '{{ tag_end }}': '</span>'
            })|raw }}
        </div>
    {% endspaceless %}
{% endblock money_widget %}

{% block url_widget %}
    {% spaceless %}
        {% set type = type|default('url') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock url_widget %}

{% block search_widget %}
    {% spaceless %}
        {% set type = type|default('search') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock search_widget %}

{% block percent_widget %}
    {% spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endspaceless %}
{% endblock percent_widget %}

{% block password_widget %}
    {% spaceless %}
        {% set type = type|default('password') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock password_widget %}

{% block hidden_widget %}
    {% spaceless %}
        {% set type = type|default('hidden') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock hidden_widget %}

{% block email_widget %}
    {% spaceless %}
        {% set type = type|default('email') %}
        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock email_widget %}

{% block button_widget %}
    {% spaceless %}
        {% if label is empty and label is not sameas(false) %}
            {% set label = name|humanize %}
        {% endif %}
        {% if type is defined and type == 'submit' %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' btn btn-'~button_class|default('primary'))|trim }) %}
        {% else %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' btn btn-'~button_class|default('default'))|trim }) %}
        {% endif %}
        {% if as_link is defined and as_link == true %}
            <a {{ block('button_attributes') }}>{% if attr.icon is defined and attr.icon != '' %}{{ icon(attr.icon) }}{% endif %}{{ label|trans({}, translation_domain) }}</a>
        {% else %}
            <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{% if attr.icon is defined and attr.icon != '' %}{{ icon(attr.icon) }}{% endif %}{{ label|trans({}, translation_domain) }}</button>
        {% endif %}
    {% endspaceless %}
{% endblock button_widget %}

{% block submit_widget %}
    {% spaceless %}
        {% set type = type|default('submit') %}
        {{ block('button_widget') }}
    {% endspaceless %}
{% endblock submit_widget %}

{% block reset_widget %}
    {% spaceless %}
        {% set type = type|default('reset') %}
        {{ block('button_widget') }}
    {% endspaceless %}
{% endblock reset_widget %}

{% block form_actions_widget %}
    {% for button in form.children %}
        {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}
    {% endfor  %}
{% endblock %}

{% block bs_static_widget %}
    {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control-static')|trim }) %}
    <p id=\"{{ id }}\" {%- for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ value }}</p>
{% endblock %}

{# Labels #}

{% block form_label %}
    {% spaceless %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}

        {% if label is not sameas(false) %}
            {% set style = style|default(bootstrap_get_style()) %}
            {% set label_col = label_col|default(bootstrap_get_label_col()) %}

            {% if attr.style is defined and attr.style is not empty %}
                {% set style = attr.style %}
            {% endif %}

            {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' control-label')|trim }) %}
            {% if style == 'horizontal' %}
                {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' col-' ~ col_size ~ '-' ~ label_col)|trim }) %}
            {% elseif style == 'inline' %}
                {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' sr-only')|trim }) %}
            {% endif %}

            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ label|trans({}, translation_domain)|raw }}</label>
        {% endif %}
    {% endspaceless %}
{% endblock form_label %}

{% block button_label %}{% endblock %}

{# Rows #}

{% block repeated_row %}
    {% spaceless %}
        {#
        No need to render the errors here, as all errors are mapped
        to the first child (see RepeatedTypeValidatorExtension).
        #}
        {{ block('form_rows') }}
    {% endspaceless %}
{% endblock repeated_row %}

{% block form_row %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
            {% if label is sameas(false) and label_col is defined %}
                {% set widget_col = widget_col + label_col %}
            {% endif %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% set label_col = label_col|default(bootstrap_get_label_col()) %}
        {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}

        <div class=\"form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}\">
            {% if style == 'horizontal' %}
                {{ form_label(form) }}
                <div class=\"col-{{ col_size }}-{{ widget_col }}\">
                    {{ block('form_input_group') }}
                    {{ block('form_help') }}
                    {{ form_errors(form) }}
                </div>
            {% else %}
                {{ form_label(form) }}
                {{ block('form_input_group') }}
                {{ block('form_help') }}
                {{ form_errors(form) }}
            {% endif %}
        </div>

        {% if style == 'inline' %}&nbsp;{% endif %}
    {% endspaceless %}
{% endblock form_row %}

{% block form_input_group %}
    {% spaceless %}
        {% if attr.input_group is defined and attr.input_group is not empty %}
            {% set input_group = attr.input_group %}
        {% endif %}
        {% set input_group = input_group|default({}) %}
        {% if input_group is not empty %}
            {% set ig_size_class = '' %}
            {% if input_group.size is defined and input_group.size == 'large' %}
                {% set ig_size_class = ' input-group-lg' %}
            {% endif  %}
            {% if input_group.size is defined and input_group.size == 'small' %}
                {% set ig_size_class = ' input-group-sm' %}
            {% endif  %}
            <div class=\"input-group{{ ig_size_class }}\">
                {% if input_group.prepend is defined and input_group.prepend is not empty %}
                    <span class=\"input-group-addon\">{{ input_group.prepend|raw|parse_icons }}</span>
                {% endif %}
                {% if input_group.button_prepend is defined and input_group.button_prepend is not empty %}
                    <span class=\"input-group-btn\">{{ form_widget(input_group_button_prepend) }}</span>
                {% endif %}
                {{ form_widget(form) }}
                {% if input_group.button_append is defined and input_group.button_append is not empty %}
                    <span class=\"input-group-btn\">{{ form_widget(input_group_button_append) }}</span>
                {% endif %}
                {% if input_group.append is defined and input_group.append is not empty %}
                    <span class=\"input-group-addon\">{{ input_group.append|raw|parse_icons }}</span>
                {% endif %}
            </div>
        {% else %}
            {{ form_widget(form) }}
        {% endif %}
    {% endspaceless %}
{% endblock form_input_group %}

{% block form_help %}
    {% spaceless %}
        {% if attr.help_text is defined and attr.help_text is not empty %}
            {% set help_text = attr.help_text %}
        {% endif %}
        {% set help_text = help_text|default('') %}
        {% if help_text is not empty %}
            <span class=\"help-block\">{{ help_text|trans({}, translation_domain) }}</span>
        {% endif %}
    {% endspaceless %}
{% endblock form_help %}

{% block button_row %}
    {% spaceless %}
        {% set style = style|default(bootstrap_get_style()) %}
        {% set col_size = col_size|default(bootstrap_get_col_size()) %}

        {% if attr.label_col is defined and attr.label_col is not empty %}
            {% set label_col = attr.label_col %}
        {% endif %}
        {% if attr.widget_col is defined and attr.widget_col is not empty %}
            {% set widget_col = attr.widget_col %}
        {% endif %}
        {% if attr.col_size is defined and attr.col_size is not empty %}
            {% set col_size = attr.col_size %}
        {% endif %}
        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% set label_col = label_col|default(bootstrap_get_label_col()) %}
        {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}

        <div class=\"form-group\">
            {% if style == 'horizontal' %}
                <div class=\"col-{{ col_size }}-offset-{{ label_col }} col-{{ col_size }}-{{ widget_col }}\">
            {% endif %}

            {{ form_widget(form) }}

            {% if style == 'horizontal' %}
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock button_row %}

{% block hidden_row %}
    {{ form_widget(form) }}
{% endblock hidden_row %}

{% block form_actions_row %}
    {{ block('button_row')  }}
{% endblock %}

{# Misc #}

{% block form %}
    {% spaceless %}
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    {% endspaceless %}
{% endblock form %}

{% block form_start %}
    {% spaceless %}
        {{ bootstrap_backup_form_settings() }}
        {% set method = method|upper %}
        {% if method in [\"GET\", \"POST\"] %}
            {% set form_method = method %}
        {% else %}
            {% set form_method = \"POST\" %}
        {% endif %}

        {% if style is defined %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-' ~ style)|trim }) %}
            {{ bootstrap_set_style(style) }}
        {% endif %}

        {% if form.vars.errors|length > 0 %}
            {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' has-global-errors')|trim }) %}
        {% endif %}

        {% if col_size is defined %}
            {{ bootstrap_set_col_size(col_size) }}
        {% endif %}

        {% if widget_col is defined %}
            {{ bootstrap_set_widget_col(widget_col) }}
        {% endif %}

        {% if label_col is defined %}
            {{ bootstrap_set_label_col(label_col) }}
        {% endif %}

        {% if simple_col is defined %}
            {{ bootstrap_set_simple_col(simple_col) }}
        {% endif %}

        {% if attr.role is not defined or attr.role is empty %}
            {% set attr = attr|merge({ 'role': 'form' }) %}
        {% endif %}

        <form  name=\"{{ form.vars.name }}\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
        {% if form_method != method %}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {% endif %}
    {% endspaceless %}
{% endblock form_start %}

{% block form_end %}
    {% spaceless %}
        {% if not render_rest is defined or render_rest %}
            {{ form_rest(form) }}
        {% endif %}
        </form>
        {% if bootstrap_get_style() %}
            {{ bootstrap_set_style('') }}
        {% endif %}
        {% if bootstrap_get_col_size() %}
            {{ bootstrap_set_col_size('lg') }}
        {% endif %}
        {% if bootstrap_get_widget_col() %}
            {{ bootstrap_set_widget_col(10) }}
        {% endif %}
        {% if bootstrap_get_label_col() %}
            {{ bootstrap_set_label_col(2) }}
        {% endif %}
        {% if bootstrap_get_simple_col() %}
            {{ bootstrap_set_simple_col(false) }}
        {% endif %}
    {{ bootstrap_restore_form_settings() }}
    {% endspaceless %}
{% endblock form_end %}

{% block form_enctype %}
    {% spaceless %}
        {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
    {% endspaceless %}
{% endblock form_enctype %}

{% block global_form_errors %}
    {% if errors|length > 0 %}
        {% set global_errors = true %}
        {{ block('form_errors') }}
    {% endif %}
{% endblock global_form_errors %}

{% block form_errors %}
    {% spaceless %}
        {% set global_errors = global_errors|default(false) %}
        {% set style = style|default(bootstrap_get_style()) %}

        {% if attr.style is defined and attr.style is not empty %}
            {% set style = attr.style %}
        {% endif %}

        {% if errors|length > 0 %}
            {% if global_errors %}
                <div class=\"alert alert-danger\">
            {% endif %}
            <ul{% if not global_errors %} class=\"help-block\"{% endif %}>
                {% for error in errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
            {% if global_errors == true %}
                </div>
            {% endif %}
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{% block form_rest %}
    {% spaceless %}
        {% for child in form %}
            {% if not child.rendered %}
                {{ form_row(child) }}
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endblock form_rest %}

{# Support #}

{% block form_rows %}
    {% spaceless %}
        {% for child in form %}
            {% set childAttr = {} %}
            {% if attr.col_size is defined %}
                {% set childAttr = childAttr|merge({ 'col_size': attr.col_size }) %}
            {% endif %}
            {% if attr.widget_col is defined %}
                {% set childAttr = childAttr|merge({ 'widget_col': attr.widget_col }) %}
            {% endif %}
            {% if attr.label_col is defined %}
                {% set childAttr = childAttr|merge({ 'label_col': attr.label_col }) %}
            {% endif %}
            {% if attr.simple_col is defined %}
                {% set childAttr = childAttr|merge({ 'simple_col': attr.simple_col }) %}
            {% endif %}
            {% if attr.style is defined %}
                {% set childAttr = childAttr|merge({ 'style': attr.style }) %}
            {% endif %}
            {{ form_row(child, childAttr) }}
        {% endfor %}
    {% endspaceless %}
{% endblock form_rows %}

{% block widget_attributes %}
    {% spaceless %}
        id=\"{{ id }}\" name=\"{{ full_name }}\"{% if read_only %} readonly=\"readonly\"{% endif %}{% if disabled %} disabled=\"disabled\"{% endif %}{% if required %} required=\"required\"{% endif %}{% if max_length %} maxlength=\"{{ max_length }}\"{% endif %}{% if pattern %} pattern=\"{{ pattern }}\"{% endif %}
        {% for attrname, attrvalue in attr %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\" {% elseif attrname in ['input_group'] %}{% else %}{{ attrname }}=\"{{ attrvalue }}\" {% endif %}{% endfor %}
    {% endspaceless %}
{% endblock widget_attributes %}

{% block widget_container_attributes %}
    {% spaceless %}
        {% if attr.style is defined and (attr.style == 'inline' or attr.style == 'horizontal') %}
            {% set attr = attr|merge({ 'class': ('form-'~attr.style~' '~attr.class|default(''))|trim }) %}
            {% set attr = attr|merge({ 'style': null }) %}
        {% endif %}
        {% if id is not empty %}id=\"{{ id }}\" {% endif %}
        {% for attrname, attrvalue in attr %}{% if attrvalue is not null and (attrvalue is not iterable) %}{{ attrname }}=\"{{ attrvalue }}\" {% endif %}{% endfor %}
    {% endspaceless %}
{% endblock widget_container_attributes %}

{% block button_attributes -%}
        id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif %}
        {%- for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}
{% endblock button_attributes %}
", "AkumaBootswatchBundle:Form:fields.html.twig", "/var/www/oqroom/vendor/akuma/bootswatch-bundle/Akuma/Bundle/BootswatchBundle/Resources/views/Form/fields.html.twig");
    }
}
