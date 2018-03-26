<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fe36bf70a311fb42338313e133c43360ab5e76835eb0ab3e928be46d671a0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe36bf70a311fb42338313e133c43360ab5e76835eb0ab3e928be46d671a0cb->enter($__internal_3fe36bf70a311fb42338313e133c43360ab5e76835eb0ab3e928be46d671a0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_501feb0d63420fd14d96602b4430a175a01dac3a77928e93b72121e15bf5605d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501feb0d63420fd14d96602b4430a175a01dac3a77928e93b72121e15bf5605d->enter($__internal_501feb0d63420fd14d96602b4430a175a01dac3a77928e93b72121e15bf5605d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe36bf70a311fb42338313e133c43360ab5e76835eb0ab3e928be46d671a0cb->leave($__internal_3fe36bf70a311fb42338313e133c43360ab5e76835eb0ab3e928be46d671a0cb_prof);

        
        $__internal_501feb0d63420fd14d96602b4430a175a01dac3a77928e93b72121e15bf5605d->leave($__internal_501feb0d63420fd14d96602b4430a175a01dac3a77928e93b72121e15bf5605d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a7664f4fae6138561cf0ba19a6a9bea6ae6163cf09daf193333545f7d67ad1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7664f4fae6138561cf0ba19a6a9bea6ae6163cf09daf193333545f7d67ad1b->enter($__internal_1a7664f4fae6138561cf0ba19a6a9bea6ae6163cf09daf193333545f7d67ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3d55d597ca6f16f1cc778876e648f216cfa494d237a349824237833aab3fcc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d55d597ca6f16f1cc778876e648f216cfa494d237a349824237833aab3fcc7->enter($__internal_d3d55d597ca6f16f1cc778876e648f216cfa494d237a349824237833aab3fcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d3d55d597ca6f16f1cc778876e648f216cfa494d237a349824237833aab3fcc7->leave($__internal_d3d55d597ca6f16f1cc778876e648f216cfa494d237a349824237833aab3fcc7_prof);

        
        $__internal_1a7664f4fae6138561cf0ba19a6a9bea6ae6163cf09daf193333545f7d67ad1b->leave($__internal_1a7664f4fae6138561cf0ba19a6a9bea6ae6163cf09daf193333545f7d67ad1b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff58e1e990477241a4d8422b5963254760569a8bf401a907e73d988d6ebffcb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff58e1e990477241a4d8422b5963254760569a8bf401a907e73d988d6ebffcb7->enter($__internal_ff58e1e990477241a4d8422b5963254760569a8bf401a907e73d988d6ebffcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e7dd40baaddf0f80ea7c1e120658fc71e50a526f5349e7998adb0902d5963f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7dd40baaddf0f80ea7c1e120658fc71e50a526f5349e7998adb0902d5963f1->enter($__internal_0e7dd40baaddf0f80ea7c1e120658fc71e50a526f5349e7998adb0902d5963f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0e7dd40baaddf0f80ea7c1e120658fc71e50a526f5349e7998adb0902d5963f1->leave($__internal_0e7dd40baaddf0f80ea7c1e120658fc71e50a526f5349e7998adb0902d5963f1_prof);

        
        $__internal_ff58e1e990477241a4d8422b5963254760569a8bf401a907e73d988d6ebffcb7->leave($__internal_ff58e1e990477241a4d8422b5963254760569a8bf401a907e73d988d6ebffcb7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ed50121dc803c4ca8f3af4c1622c2f49a3ae154f6999cb8321985c3307b8d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed50121dc803c4ca8f3af4c1622c2f49a3ae154f6999cb8321985c3307b8d65->enter($__internal_6ed50121dc803c4ca8f3af4c1622c2f49a3ae154f6999cb8321985c3307b8d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a577c4165329c28ee1d052133dd56dd5f9f0c4e45d7ce8aeda5be49b058022e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a577c4165329c28ee1d052133dd56dd5f9f0c4e45d7ce8aeda5be49b058022e->enter($__internal_0a577c4165329c28ee1d052133dd56dd5f9f0c4e45d7ce8aeda5be49b058022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0a577c4165329c28ee1d052133dd56dd5f9f0c4e45d7ce8aeda5be49b058022e->leave($__internal_0a577c4165329c28ee1d052133dd56dd5f9f0c4e45d7ce8aeda5be49b058022e_prof);

        
        $__internal_6ed50121dc803c4ca8f3af4c1622c2f49a3ae154f6999cb8321985c3307b8d65->leave($__internal_6ed50121dc803c4ca8f3af4c1622c2f49a3ae154f6999cb8321985c3307b8d65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
