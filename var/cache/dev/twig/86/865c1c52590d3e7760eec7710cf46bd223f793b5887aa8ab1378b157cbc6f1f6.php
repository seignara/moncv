<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e683a9a2eadd3224d6e0fe63506fefca77305d1bcf312298b25a9d1a99552a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e683a9a2eadd3224d6e0fe63506fefca77305d1bcf312298b25a9d1a99552a4c->enter($__internal_e683a9a2eadd3224d6e0fe63506fefca77305d1bcf312298b25a9d1a99552a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3939b660662937f0f9223af0418406533f0ab2c3fe3c51f9cfa5145e89bdd722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3939b660662937f0f9223af0418406533f0ab2c3fe3c51f9cfa5145e89bdd722->enter($__internal_3939b660662937f0f9223af0418406533f0ab2c3fe3c51f9cfa5145e89bdd722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e683a9a2eadd3224d6e0fe63506fefca77305d1bcf312298b25a9d1a99552a4c->leave($__internal_e683a9a2eadd3224d6e0fe63506fefca77305d1bcf312298b25a9d1a99552a4c_prof);

        
        $__internal_3939b660662937f0f9223af0418406533f0ab2c3fe3c51f9cfa5145e89bdd722->leave($__internal_3939b660662937f0f9223af0418406533f0ab2c3fe3c51f9cfa5145e89bdd722_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fbef535e4601cd18715ccbf527198c75c1e140049fb79e49bf7ef74fcb3cb081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbef535e4601cd18715ccbf527198c75c1e140049fb79e49bf7ef74fcb3cb081->enter($__internal_fbef535e4601cd18715ccbf527198c75c1e140049fb79e49bf7ef74fcb3cb081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_125f9a959403dfbaadbe97ac6f0f90d02b15ae613e9518ae6b6551e8806fc02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125f9a959403dfbaadbe97ac6f0f90d02b15ae613e9518ae6b6551e8806fc02a->enter($__internal_125f9a959403dfbaadbe97ac6f0f90d02b15ae613e9518ae6b6551e8806fc02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_125f9a959403dfbaadbe97ac6f0f90d02b15ae613e9518ae6b6551e8806fc02a->leave($__internal_125f9a959403dfbaadbe97ac6f0f90d02b15ae613e9518ae6b6551e8806fc02a_prof);

        
        $__internal_fbef535e4601cd18715ccbf527198c75c1e140049fb79e49bf7ef74fcb3cb081->leave($__internal_fbef535e4601cd18715ccbf527198c75c1e140049fb79e49bf7ef74fcb3cb081_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7157011c013349e8280df1c8e4012aacd4634806b08bb7288e806345e114e666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7157011c013349e8280df1c8e4012aacd4634806b08bb7288e806345e114e666->enter($__internal_7157011c013349e8280df1c8e4012aacd4634806b08bb7288e806345e114e666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8e35dc06f3e3be4b29333bc600c20184b6d40514d3d162086675c2394a45af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e35dc06f3e3be4b29333bc600c20184b6d40514d3d162086675c2394a45af1->enter($__internal_f8e35dc06f3e3be4b29333bc600c20184b6d40514d3d162086675c2394a45af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8e35dc06f3e3be4b29333bc600c20184b6d40514d3d162086675c2394a45af1->leave($__internal_f8e35dc06f3e3be4b29333bc600c20184b6d40514d3d162086675c2394a45af1_prof);

        
        $__internal_7157011c013349e8280df1c8e4012aacd4634806b08bb7288e806345e114e666->leave($__internal_7157011c013349e8280df1c8e4012aacd4634806b08bb7288e806345e114e666_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa5af709b40bc59d7340b6f9bc4e5ac439e1a40a39171048746a4be8fdec8de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5af709b40bc59d7340b6f9bc4e5ac439e1a40a39171048746a4be8fdec8de6->enter($__internal_fa5af709b40bc59d7340b6f9bc4e5ac439e1a40a39171048746a4be8fdec8de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad6400f0fced3db2514b8ed9698e346a6d3ac749c92cc13928af3151878ef6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6400f0fced3db2514b8ed9698e346a6d3ac749c92cc13928af3151878ef6ea->enter($__internal_ad6400f0fced3db2514b8ed9698e346a6d3ac749c92cc13928af3151878ef6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad6400f0fced3db2514b8ed9698e346a6d3ac749c92cc13928af3151878ef6ea->leave($__internal_ad6400f0fced3db2514b8ed9698e346a6d3ac749c92cc13928af3151878ef6ea_prof);

        
        $__internal_fa5af709b40bc59d7340b6f9bc4e5ac439e1a40a39171048746a4be8fdec8de6->leave($__internal_fa5af709b40bc59d7340b6f9bc4e5ac439e1a40a39171048746a4be8fdec8de6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
