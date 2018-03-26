<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c9f694a2a1b7295edb1746e231c48fc2d7282de6fb4c8683297e1bc031084dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9f694a2a1b7295edb1746e231c48fc2d7282de6fb4c8683297e1bc031084dd->enter($__internal_4c9f694a2a1b7295edb1746e231c48fc2d7282de6fb4c8683297e1bc031084dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7fe6b689c2db6755973ebf4ed8852902a8648a9e30b161dad7f209c584e28c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe6b689c2db6755973ebf4ed8852902a8648a9e30b161dad7f209c584e28c4f->enter($__internal_7fe6b689c2db6755973ebf4ed8852902a8648a9e30b161dad7f209c584e28c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    <!-- favicon -->
    <link href=\"favicon.png\" rel=icon>

    <!-- web-fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700\" rel=\"stylesheet\">
    
    <!-- font-awesome -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- owl carousal -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Style CSS -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
    
</html>
";
        
        $__internal_4c9f694a2a1b7295edb1746e231c48fc2d7282de6fb4c8683297e1bc031084dd->leave($__internal_4c9f694a2a1b7295edb1746e231c48fc2d7282de6fb4c8683297e1bc031084dd_prof);

        
        $__internal_7fe6b689c2db6755973ebf4ed8852902a8648a9e30b161dad7f209c584e28c4f->leave($__internal_7fe6b689c2db6755973ebf4ed8852902a8648a9e30b161dad7f209c584e28c4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7761a9124e7baec18db6c91cec8888263e51cf607ac8dcd496a269b496c04ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7761a9124e7baec18db6c91cec8888263e51cf607ac8dcd496a269b496c04ca->enter($__internal_a7761a9124e7baec18db6c91cec8888263e51cf607ac8dcd496a269b496c04ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_715e30c57e398e522d0da16afff2e83a5238c28f23b26f0fe0820f4feb8d7c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715e30c57e398e522d0da16afff2e83a5238c28f23b26f0fe0820f4feb8d7c65->enter($__internal_715e30c57e398e522d0da16afff2e83a5238c28f23b26f0fe0820f4feb8d7c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_715e30c57e398e522d0da16afff2e83a5238c28f23b26f0fe0820f4feb8d7c65->leave($__internal_715e30c57e398e522d0da16afff2e83a5238c28f23b26f0fe0820f4feb8d7c65_prof);

        
        $__internal_a7761a9124e7baec18db6c91cec8888263e51cf607ac8dcd496a269b496c04ca->leave($__internal_a7761a9124e7baec18db6c91cec8888263e51cf607ac8dcd496a269b496c04ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1eee84912455bdebe73e49664cc6d18cdf2ca7d530b6f0fd92e5fb17994ab330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eee84912455bdebe73e49664cc6d18cdf2ca7d530b6f0fd92e5fb17994ab330->enter($__internal_1eee84912455bdebe73e49664cc6d18cdf2ca7d530b6f0fd92e5fb17994ab330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8debb63101cc8c3d60693437eb6ed76d051acaa3c7c07abb27ed8f24c8a4e54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8debb63101cc8c3d60693437eb6ed76d051acaa3c7c07abb27ed8f24c8a4e54b->enter($__internal_8debb63101cc8c3d60693437eb6ed76d051acaa3c7c07abb27ed8f24c8a4e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8debb63101cc8c3d60693437eb6ed76d051acaa3c7c07abb27ed8f24c8a4e54b->leave($__internal_8debb63101cc8c3d60693437eb6ed76d051acaa3c7c07abb27ed8f24c8a4e54b_prof);

        
        $__internal_1eee84912455bdebe73e49664cc6d18cdf2ca7d530b6f0fd92e5fb17994ab330->leave($__internal_1eee84912455bdebe73e49664cc6d18cdf2ca7d530b6f0fd92e5fb17994ab330_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_421f0075007b485f4b48b7725286a233fcfc194f157694b550f183943d0135cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421f0075007b485f4b48b7725286a233fcfc194f157694b550f183943d0135cf->enter($__internal_421f0075007b485f4b48b7725286a233fcfc194f157694b550f183943d0135cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12e482adf255fd6d218ef4bb93461f6f381589c6887a7a8c8bea9a7fde0dadaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e482adf255fd6d218ef4bb93461f6f381589c6887a7a8c8bea9a7fde0dadaf->enter($__internal_12e482adf255fd6d218ef4bb93461f6f381589c6887a7a8c8bea9a7fde0dadaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12e482adf255fd6d218ef4bb93461f6f381589c6887a7a8c8bea9a7fde0dadaf->leave($__internal_12e482adf255fd6d218ef4bb93461f6f381589c6887a7a8c8bea9a7fde0dadaf_prof);

        
        $__internal_421f0075007b485f4b48b7725286a233fcfc194f157694b550f183943d0135cf->leave($__internal_421f0075007b485f4b48b7725286a233fcfc194f157694b550f183943d0135cf_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c515668f6443d0223a3d257255b84b61100f7f6d65c2e852d3ea50d428f5a5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c515668f6443d0223a3d257255b84b61100f7f6d65c2e852d3ea50d428f5a5be->enter($__internal_c515668f6443d0223a3d257255b84b61100f7f6d65c2e852d3ea50d428f5a5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_93df39481afd9291e5e11d8d8475ec588d9a368e72dba71e7a93e89c7dd49da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93df39481afd9291e5e11d8d8475ec588d9a368e72dba71e7a93e89c7dd49da9->enter($__internal_93df39481afd9291e5e11d8d8475ec588d9a368e72dba71e7a93e89c7dd49da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<!-- jquery -->
<!-- jquery -->
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap -->
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!--owl carousal-->
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <!--theme script-->
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/scripts.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_93df39481afd9291e5e11d8d8475ec588d9a368e72dba71e7a93e89c7dd49da9->leave($__internal_93df39481afd9291e5e11d8d8475ec588d9a368e72dba71e7a93e89c7dd49da9_prof);

        
        $__internal_c515668f6443d0223a3d257255b84b61100f7f6d65c2e852d3ea50d428f5a5be->leave($__internal_c515668f6443d0223a3d257255b84b61100f7f6d65c2e852d3ea50d428f5a5be_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 38,  171 => 36,  166 => 34,  161 => 32,  149 => 30,  132 => 29,  115 => 6,  97 => 5,  84 => 39,  81 => 30,  79 => 29,  72 => 25,  66 => 22,  60 => 19,  54 => 16,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        
    <!-- favicon -->
    <link href=\"favicon.png\" rel=icon>

    <!-- web-fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700\" rel=\"stylesheet\">
    
    <!-- font-awesome -->
    <link href=\"{{ asset('template/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link href=\"{{ asset('template/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- owl carousal -->
    <link href=\"{{ asset('template/css/owl.carousel.css') }}\" rel=\"stylesheet\">

    <!-- Style CSS -->
    <link href=\"{{ asset('template/css/style.css') }}\" rel=\"stylesheet\">
    
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}<!-- jquery -->
<!-- jquery -->
            <script src=\"{{ asset('template/js/jquery-2.1.4.min.js') }}\"></script>
            <!-- Bootstrap -->
            <script src=\"{{ asset('template/js/bootstrap.min.js') }}\"></script>
            <!--owl carousal-->
            <script src=\"{{ asset('template/js/owl.carousel.min.js') }}\"></script>
            <!--theme script-->
            <script src=\"{{ asset('template/js/scripts.js') }}\"></script>{% endblock %}
    </body>
    
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
