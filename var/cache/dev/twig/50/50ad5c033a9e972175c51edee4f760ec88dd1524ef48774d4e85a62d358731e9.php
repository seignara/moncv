<?php

/* @ApiPlatform/SwaggerUi/index.html.twig */
class __TwigTemplate_f1d4465d3d6185f3714dc0640cab2444641057778d21381487716f95fad8edd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e9890bdbe87f5b7e16776f7c35f84ee74451f4d5f0559b106dd7011b169b81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9890bdbe87f5b7e16776f7c35f84ee74451f4d5f0559b106dd7011b169b81d->enter($__internal_6e9890bdbe87f5b7e16776f7c35f84ee74451f4d5f0559b106dd7011b169b81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ApiPlatform/SwaggerUi/index.html.twig"));

        $__internal_2d6bc47f6b7c1c37cbffd28fc715a81593ef96827b3aa2fbf8f12a6866d01d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6bc47f6b7c1c37cbffd28fc715a81593ef96827b3aa2fbf8f12a6866d01d91->enter($__internal_2d6bc47f6b7c1c37cbffd28fc715a81593ef96827b3aa2fbf8f12a6866d01d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ApiPlatform/SwaggerUi/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        if (($context["title"] ?? $this->getContext($context, "title"))) {
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo " - ";
        }
        echo "API Platform</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/style.css"), "html", null, true);
        echo "\">

    ";
        // line 12
        echo "    <script id=\"swagger-data\" type=\"application/json\">";
        echo twig_jsonencode_filter(($context["swagger_data"] ?? $this->getContext($context, "swagger_data")), 65);
        echo "</script>
</head>

<body>
  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"position:absolute;width:0;height:0\">
  <defs>
    <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
          <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"locked\">
      <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"/>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"close\">
      <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"/>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
      <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"/>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
      <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"/>
    </symbol>


    <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
      <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"/>
    </symbol>

    <symbol viewBox=\"0 0 24 24\" id=\"expand\">
      <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"/>
    </symbol>

  </defs>
</svg>
<header>
  <a id = \"logo\" href=\"https://api-platform.com\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/logo-header.svg"), "html", null, true);
        echo "\" alt=\"API Platform\"></a>
</header>

  <div class=\"web\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/web.png"), "html", null, true);
        echo "\"></div>
  <div class=\"spider\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/spider.png"), "html", null, true);
        echo "\"></div>

<div id=\"swagger-ui\" class=\"api-platform\"></div>

<div class=\"swagger-ui\" id=\"formats\">
    <div class=\"information-container wrapper\">
        <div class=\"info\">
            Available formats:
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["formats"] ?? $this->getContext($context, "formats"))));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 63
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_format" => $context["format"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["format"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
    </div>
</div>

<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-standalone-preset.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/apiplatform/init-swagger-ui.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_6e9890bdbe87f5b7e16776f7c35f84ee74451f4d5f0559b106dd7011b169b81d->leave($__internal_6e9890bdbe87f5b7e16776f7c35f84ee74451f4d5f0559b106dd7011b169b81d_prof);

        
        $__internal_2d6bc47f6b7c1c37cbffd28fc715a81593ef96827b3aa2fbf8f12a6866d01d91->leave($__internal_2d6bc47f6b7c1c37cbffd28fc715a81593ef96827b3aa2fbf8f12a6866d01d91_prof);

    }

    public function getTemplateName()
    {
        return "@ApiPlatform/SwaggerUi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 71,  137 => 70,  133 => 69,  127 => 65,  116 => 63,  112 => 62,  101 => 54,  97 => 53,  91 => 50,  49 => 12,  44 => 9,  40 => 8,  31 => 5,  25 => 1,);
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
    <meta charset=\"UTF-8\">
    <title>{% if title %}{{ title }} - {% endif %}API Platform</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/apiplatform/swagger-ui/swagger-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/apiplatform/style.css') }}\">

    {# json_encode(65) is for JSON_UNESCAPED_SLASHES|JSON_HEX_TAG to avoid JS XSS #}
    <script id=\"swagger-data\" type=\"application/json\">{{ swagger_data|json_encode(65)|raw }}</script>
</head>

<body>
  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"position:absolute;width:0;height:0\">
  <defs>
    <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
          <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"locked\">
      <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"/>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"close\">
      <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"/>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
      <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"/>
    </symbol>

    <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
      <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"/>
    </symbol>


    <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
      <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"/>
    </symbol>

    <symbol viewBox=\"0 0 24 24\" id=\"expand\">
      <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"/>
    </symbol>

  </defs>
</svg>
<header>
  <a id = \"logo\" href=\"https://api-platform.com\"><img src=\"{{ asset('bundles/apiplatform/logo-header.svg') }}\" alt=\"API Platform\"></a>
</header>

  <div class=\"web\"><img src=\"{{ asset('bundles/apiplatform/web.png') }}\"></div>
  <div class=\"spider\"><img src=\"{{ asset('bundles/apiplatform/spider.png') }}\"></div>

<div id=\"swagger-ui\" class=\"api-platform\"></div>

<div class=\"swagger-ui\" id=\"formats\">
    <div class=\"information-container wrapper\">
        <div class=\"info\">
            Available formats:
            {% for format in formats|keys %}
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge({'_format': format})) }}\">{{ format }}</a>
            {% endfor %}
        </div>
    </div>
</div>

<script src=\"{{ asset('bundles/apiplatform/swagger-ui/swagger-ui-bundle.js') }}\"></script>
<script src=\"{{ asset('bundles/apiplatform/swagger-ui/swagger-ui-standalone-preset.js') }}\"></script>
<script src=\"{{ asset('bundles/apiplatform/init-swagger-ui.js') }}\"></script>

</body>
</html>
", "@ApiPlatform/SwaggerUi/index.html.twig", "/home/ubuntu/workspace/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views/SwaggerUi/index.html.twig");
    }
}