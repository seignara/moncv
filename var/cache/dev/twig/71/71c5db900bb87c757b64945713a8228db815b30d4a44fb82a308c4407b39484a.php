<?php

/* @App/loisir/edit.html.twig */
class __TwigTemplate_e2e13ca812cb58d90761b5afb70bfcf6e3de657ea8c7d4472e2343caec66773d extends Twig_Template
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
        $__internal_c7247ae5c85205e145598f50b37da40ce038cfbb5d58fcb6270bf49a0faeab27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7247ae5c85205e145598f50b37da40ce038cfbb5d58fcb6270bf49a0faeab27->enter($__internal_c7247ae5c85205e145598f50b37da40ce038cfbb5d58fcb6270bf49a0faeab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisir/edit.html.twig"));

        $__internal_bddd9d7181eefc23f752a31d29e6cabc80b4e07b5017ad68ac721dba362205eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddd9d7181eefc23f752a31d29e6cabc80b4e07b5017ad68ac721dba362205eb->enter($__internal_bddd9d7181eefc23f752a31d29e6cabc80b4e07b5017ad68ac721dba362205eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/loisir/edit.html.twig"));

        // line 1
        echo "<html>
    <body>
        <h3>Edition d'un loisir</h3>
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_edit_loisir", array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "getId", array(), "method")))));
        echo "
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>";
        
        $__internal_c7247ae5c85205e145598f50b37da40ce038cfbb5d58fcb6270bf49a0faeab27->leave($__internal_c7247ae5c85205e145598f50b37da40ce038cfbb5d58fcb6270bf49a0faeab27_prof);

        
        $__internal_bddd9d7181eefc23f752a31d29e6cabc80b4e07b5017ad68ac721dba362205eb->leave($__internal_bddd9d7181eefc23f752a31d29e6cabc80b4e07b5017ad68ac721dba362205eb_prof);

    }

    public function getTemplateName()
    {
        return "@App/loisir/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        <h3>Edition d'un loisir</h3>
        {{ form_start(form, {'action': path('validate_edit_loisir', {'id': entity.getId()}) }) }}
        {{ form(form) }}
    </body>
</html>", "@App/loisir/edit.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/loisir/edit.html.twig");
    }
}
