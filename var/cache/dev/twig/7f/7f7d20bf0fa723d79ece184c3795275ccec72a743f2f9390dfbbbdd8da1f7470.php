<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
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
        $__internal_bc5e943f5e4f562c470f437ee130b439d0f60d11297b2b8dafa6e25d56b85fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5e943f5e4f562c470f437ee130b439d0f60d11297b2b8dafa6e25d56b85fa7->enter($__internal_bc5e943f5e4f562c470f437ee130b439d0f60d11297b2b8dafa6e25d56b85fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_da4b12336cad3549a30fb679510dcf45a3d9dc783bd97cb5206c37724660b521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4b12336cad3549a30fb679510dcf45a3d9dc783bd97cb5206c37724660b521->enter($__internal_da4b12336cad3549a30fb679510dcf45a3d9dc783bd97cb5206c37724660b521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5e943f5e4f562c470f437ee130b439d0f60d11297b2b8dafa6e25d56b85fa7->leave($__internal_bc5e943f5e4f562c470f437ee130b439d0f60d11297b2b8dafa6e25d56b85fa7_prof);

        
        $__internal_da4b12336cad3549a30fb679510dcf45a3d9dc783bd97cb5206c37724660b521->leave($__internal_da4b12336cad3549a30fb679510dcf45a3d9dc783bd97cb5206c37724660b521_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_845186b04c8422db9238a436c15a4895465973902d966bec39b9b88314412bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845186b04c8422db9238a436c15a4895465973902d966bec39b9b88314412bcc->enter($__internal_845186b04c8422db9238a436c15a4895465973902d966bec39b9b88314412bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_549c588cb3928620d07f25b28342c68787a4de861aa1637f152d010b6f84acac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549c588cb3928620d07f25b28342c68787a4de861aa1637f152d010b6f84acac->enter($__internal_549c588cb3928620d07f25b28342c68787a4de861aa1637f152d010b6f84acac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_549c588cb3928620d07f25b28342c68787a4de861aa1637f152d010b6f84acac->leave($__internal_549c588cb3928620d07f25b28342c68787a4de861aa1637f152d010b6f84acac_prof);

        
        $__internal_845186b04c8422db9238a436c15a4895465973902d966bec39b9b88314412bcc->leave($__internal_845186b04c8422db9238a436c15a4895465973902d966bec39b9b88314412bcc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66eacddc63fbb632aaf4176574793e421c04e42768f2d392b0fa0a8a57129328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66eacddc63fbb632aaf4176574793e421c04e42768f2d392b0fa0a8a57129328->enter($__internal_66eacddc63fbb632aaf4176574793e421c04e42768f2d392b0fa0a8a57129328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1d8cfa6a69503f1925f610f0fd0f090c2ed3bed16efba2d3484713133f78de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d8cfa6a69503f1925f610f0fd0f090c2ed3bed16efba2d3484713133f78de7->enter($__internal_f1d8cfa6a69503f1925f610f0fd0f090c2ed3bed16efba2d3484713133f78de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f1d8cfa6a69503f1925f610f0fd0f090c2ed3bed16efba2d3484713133f78de7->leave($__internal_f1d8cfa6a69503f1925f610f0fd0f090c2ed3bed16efba2d3484713133f78de7_prof);

        
        $__internal_66eacddc63fbb632aaf4176574793e421c04e42768f2d392b0fa0a8a57129328->leave($__internal_66eacddc63fbb632aaf4176574793e421c04e42768f2d392b0fa0a8a57129328_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d4f20b14159bb9bf62d7a60bb274a5f9856c7f0a1410facbe2edb7fafa7a3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4f20b14159bb9bf62d7a60bb274a5f9856c7f0a1410facbe2edb7fafa7a3eb->enter($__internal_5d4f20b14159bb9bf62d7a60bb274a5f9856c7f0a1410facbe2edb7fafa7a3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82fd5d59509edcf2a4dc98f964ef7e3b815b9e5a5cad595d74dd975121d3c8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fd5d59509edcf2a4dc98f964ef7e3b815b9e5a5cad595d74dd975121d3c8aa->enter($__internal_82fd5d59509edcf2a4dc98f964ef7e3b815b9e5a5cad595d74dd975121d3c8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82fd5d59509edcf2a4dc98f964ef7e3b815b9e5a5cad595d74dd975121d3c8aa->leave($__internal_82fd5d59509edcf2a4dc98f964ef7e3b815b9e5a5cad595d74dd975121d3c8aa_prof);

        
        $__internal_5d4f20b14159bb9bf62d7a60bb274a5f9856c7f0a1410facbe2edb7fafa7a3eb->leave($__internal_5d4f20b14159bb9bf62d7a60bb274a5f9856c7f0a1410facbe2edb7fafa7a3eb_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/halldor/web/WikiWikiV2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
