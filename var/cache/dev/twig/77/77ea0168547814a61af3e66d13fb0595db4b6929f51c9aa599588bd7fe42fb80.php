<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
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
        $__internal_7ee0746a9c221301ef8cbc8340111706b7c0ef25841536301e20409e5b4f2f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee0746a9c221301ef8cbc8340111706b7c0ef25841536301e20409e5b4f2f24->enter($__internal_7ee0746a9c221301ef8cbc8340111706b7c0ef25841536301e20409e5b4f2f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ed33143367eb6c3ffabb48573f0ba1545757d2e3a3bb7ba7ea770bd9b9dee94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed33143367eb6c3ffabb48573f0ba1545757d2e3a3bb7ba7ea770bd9b9dee94c->enter($__internal_ed33143367eb6c3ffabb48573f0ba1545757d2e3a3bb7ba7ea770bd9b9dee94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee0746a9c221301ef8cbc8340111706b7c0ef25841536301e20409e5b4f2f24->leave($__internal_7ee0746a9c221301ef8cbc8340111706b7c0ef25841536301e20409e5b4f2f24_prof);

        
        $__internal_ed33143367eb6c3ffabb48573f0ba1545757d2e3a3bb7ba7ea770bd9b9dee94c->leave($__internal_ed33143367eb6c3ffabb48573f0ba1545757d2e3a3bb7ba7ea770bd9b9dee94c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_855b2b603987ee199bd168915059906d27b336d618cf6a8f2eed0c5c8b7ed84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855b2b603987ee199bd168915059906d27b336d618cf6a8f2eed0c5c8b7ed84d->enter($__internal_855b2b603987ee199bd168915059906d27b336d618cf6a8f2eed0c5c8b7ed84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d0a1c17e1142279a986bf68680150eb9f117c0401c486225d11675e36c0abfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a1c17e1142279a986bf68680150eb9f117c0401c486225d11675e36c0abfaf->enter($__internal_d0a1c17e1142279a986bf68680150eb9f117c0401c486225d11675e36c0abfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0a1c17e1142279a986bf68680150eb9f117c0401c486225d11675e36c0abfaf->leave($__internal_d0a1c17e1142279a986bf68680150eb9f117c0401c486225d11675e36c0abfaf_prof);

        
        $__internal_855b2b603987ee199bd168915059906d27b336d618cf6a8f2eed0c5c8b7ed84d->leave($__internal_855b2b603987ee199bd168915059906d27b336d618cf6a8f2eed0c5c8b7ed84d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7611707945244d7bf15d585636c594419d4a2e224c98b5a1118d6093f7bacdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7611707945244d7bf15d585636c594419d4a2e224c98b5a1118d6093f7bacdd->enter($__internal_b7611707945244d7bf15d585636c594419d4a2e224c98b5a1118d6093f7bacdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d15302974d31c11e0464ac57d2d4c0d46930aec68239d6f16f85422431baa452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15302974d31c11e0464ac57d2d4c0d46930aec68239d6f16f85422431baa452->enter($__internal_d15302974d31c11e0464ac57d2d4c0d46930aec68239d6f16f85422431baa452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d15302974d31c11e0464ac57d2d4c0d46930aec68239d6f16f85422431baa452->leave($__internal_d15302974d31c11e0464ac57d2d4c0d46930aec68239d6f16f85422431baa452_prof);

        
        $__internal_b7611707945244d7bf15d585636c594419d4a2e224c98b5a1118d6093f7bacdd->leave($__internal_b7611707945244d7bf15d585636c594419d4a2e224c98b5a1118d6093f7bacdd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf134ef2dc39d8cb794ee4b2089d40e26263d7c81335dac8ffe3b339f721d2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf134ef2dc39d8cb794ee4b2089d40e26263d7c81335dac8ffe3b339f721d2dc->enter($__internal_bf134ef2dc39d8cb794ee4b2089d40e26263d7c81335dac8ffe3b339f721d2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ffc1a608842abc51df2fc388df9f6db38a6921ce949738bb2e42d9dd0138894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffc1a608842abc51df2fc388df9f6db38a6921ce949738bb2e42d9dd0138894->enter($__internal_6ffc1a608842abc51df2fc388df9f6db38a6921ce949738bb2e42d9dd0138894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ffc1a608842abc51df2fc388df9f6db38a6921ce949738bb2e42d9dd0138894->leave($__internal_6ffc1a608842abc51df2fc388df9f6db38a6921ce949738bb2e42d9dd0138894_prof);

        
        $__internal_bf134ef2dc39d8cb794ee4b2089d40e26263d7c81335dac8ffe3b339f721d2dc->leave($__internal_bf134ef2dc39d8cb794ee4b2089d40e26263d7c81335dac8ffe3b339f721d2dc_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/halldor/web/WikiWikiV2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
