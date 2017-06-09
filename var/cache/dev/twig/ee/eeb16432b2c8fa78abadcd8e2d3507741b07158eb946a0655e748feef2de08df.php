<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b47fe2c892026d47628c0b02ffcfb5295d5601f5ca7303c90906caacf263f3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42dd6587dd73e323f55f285bab7752cb9fb704d89cc6351bdee7863befdcf848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dd6587dd73e323f55f285bab7752cb9fb704d89cc6351bdee7863befdcf848->enter($__internal_42dd6587dd73e323f55f285bab7752cb9fb704d89cc6351bdee7863befdcf848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c7fa2e31b5e2d99befc9e4087d7fa6754bccc00d9e81312a0c654f602fda7326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fa2e31b5e2d99befc9e4087d7fa6754bccc00d9e81312a0c654f602fda7326->enter($__internal_c7fa2e31b5e2d99befc9e4087d7fa6754bccc00d9e81312a0c654f602fda7326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42dd6587dd73e323f55f285bab7752cb9fb704d89cc6351bdee7863befdcf848->leave($__internal_42dd6587dd73e323f55f285bab7752cb9fb704d89cc6351bdee7863befdcf848_prof);

        
        $__internal_c7fa2e31b5e2d99befc9e4087d7fa6754bccc00d9e81312a0c654f602fda7326->leave($__internal_c7fa2e31b5e2d99befc9e4087d7fa6754bccc00d9e81312a0c654f602fda7326_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48df1daa242dd4d872fd10d7fe2fb4f2559614816b4741d282ddb9a3b256ca26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48df1daa242dd4d872fd10d7fe2fb4f2559614816b4741d282ddb9a3b256ca26->enter($__internal_48df1daa242dd4d872fd10d7fe2fb4f2559614816b4741d282ddb9a3b256ca26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_af7504de83a2ce3f43b60d2fea0408ab3ec781a9a4e38b9e7c1059e3e9bf20c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7504de83a2ce3f43b60d2fea0408ab3ec781a9a4e38b9e7c1059e3e9bf20c5->enter($__internal_af7504de83a2ce3f43b60d2fea0408ab3ec781a9a4e38b9e7c1059e3e9bf20c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_af7504de83a2ce3f43b60d2fea0408ab3ec781a9a4e38b9e7c1059e3e9bf20c5->leave($__internal_af7504de83a2ce3f43b60d2fea0408ab3ec781a9a4e38b9e7c1059e3e9bf20c5_prof);

        
        $__internal_48df1daa242dd4d872fd10d7fe2fb4f2559614816b4741d282ddb9a3b256ca26->leave($__internal_48df1daa242dd4d872fd10d7fe2fb4f2559614816b4741d282ddb9a3b256ca26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/halldor/web/WikiWikiV2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
