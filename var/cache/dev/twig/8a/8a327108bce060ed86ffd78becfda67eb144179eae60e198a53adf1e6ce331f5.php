<?php

/* layout/javascripts.html.twig */
class __TwigTemplate_98198925df5e08d59f501de78271d9772f863bc9f072f5e774515ecbcca805b5 extends Twig_Template
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
        $__internal_e12b72c4b6ff670c249217fb90bddca80b34e65ae04e3a5c03c8af0e43d792dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12b72c4b6ff670c249217fb90bddca80b34e65ae04e3a5c03c8af0e43d792dc->enter($__internal_e12b72c4b6ff670c249217fb90bddca80b34e65ae04e3a5c03c8af0e43d792dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/javascripts.html.twig"));

        $__internal_28eca06c84af8db418bb26c28f931c2b576800e8546b735c573a7ec6087bbea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eca06c84af8db418bb26c28f931c2b576800e8546b735c573a7ec6087bbea0->enter($__internal_28eca06c84af8db418bb26c28f931c2b576800e8546b735c573a7ec6087bbea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/javascripts.html.twig"));

        // line 2
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_e12b72c4b6ff670c249217fb90bddca80b34e65ae04e3a5c03c8af0e43d792dc->leave($__internal_e12b72c4b6ff670c249217fb90bddca80b34e65ae04e3a5c03c8af0e43d792dc_prof);

        
        $__internal_28eca06c84af8db418bb26c28f931c2b576800e8546b735c573a7ec6087bbea0->leave($__internal_28eca06c84af8db418bb26c28f931c2b576800e8546b735c573a7ec6087bbea0_prof);

    }

    public function getTemplateName()
    {
        return "layout/javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/tether.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>", "layout/javascripts.html.twig", "/home/halldor/web/WikiWikiV2/app/Resources/views/layout/javascripts.html.twig");
    }
}
