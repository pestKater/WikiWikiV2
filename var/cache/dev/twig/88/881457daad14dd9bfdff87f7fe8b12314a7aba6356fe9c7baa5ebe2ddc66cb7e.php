<?php

/* base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f551315d5a83658e3b7e78337b0b197a7998ee73face38259702e52ed9354e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f551315d5a83658e3b7e78337b0b197a7998ee73face38259702e52ed9354e6->enter($__internal_8f551315d5a83658e3b7e78337b0b197a7998ee73face38259702e52ed9354e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_62186c2340dae8653acf977344d20c4e0544c84431317196ed24239f6366b8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62186c2340dae8653acf977344d20c4e0544c84431317196ed24239f6366b8c5->enter($__internal_62186c2340dae8653acf977344d20c4e0544c84431317196ed24239f6366b8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->loadTemplate("layout/stylesheets.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->loadTemplate("layout/javascripts.html.twig", "base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_8f551315d5a83658e3b7e78337b0b197a7998ee73face38259702e52ed9354e6->leave($__internal_8f551315d5a83658e3b7e78337b0b197a7998ee73face38259702e52ed9354e6_prof);

        
        $__internal_62186c2340dae8653acf977344d20c4e0544c84431317196ed24239f6366b8c5->leave($__internal_62186c2340dae8653acf977344d20c4e0544c84431317196ed24239f6366b8c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b33a77eb5513c793c3a6dd7ae7ca9b4f401e976b694bde8e512c156879bedbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33a77eb5513c793c3a6dd7ae7ca9b4f401e976b694bde8e512c156879bedbf1->enter($__internal_b33a77eb5513c793c3a6dd7ae7ca9b4f401e976b694bde8e512c156879bedbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25f0028317d6cebc9f96441b1d5d2797ffbc309c1dc425eaba5b95f57ee9aea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f0028317d6cebc9f96441b1d5d2797ffbc309c1dc425eaba5b95f57ee9aea1->enter($__internal_25f0028317d6cebc9f96441b1d5d2797ffbc309c1dc425eaba5b95f57ee9aea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_25f0028317d6cebc9f96441b1d5d2797ffbc309c1dc425eaba5b95f57ee9aea1->leave($__internal_25f0028317d6cebc9f96441b1d5d2797ffbc309c1dc425eaba5b95f57ee9aea1_prof);

        
        $__internal_b33a77eb5513c793c3a6dd7ae7ca9b4f401e976b694bde8e512c156879bedbf1->leave($__internal_b33a77eb5513c793c3a6dd7ae7ca9b4f401e976b694bde8e512c156879bedbf1_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2091561ac06f48277bc7109f8686e301e98b7ecbfd800edeaec59cf6cf226192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2091561ac06f48277bc7109f8686e301e98b7ecbfd800edeaec59cf6cf226192->enter($__internal_2091561ac06f48277bc7109f8686e301e98b7ecbfd800edeaec59cf6cf226192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c1031e2ac4982c995976decf4f95f1f006db282ed6c1f1ed17285d4eda964f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1031e2ac4982c995976decf4f95f1f006db282ed6c1f1ed17285d4eda964f24->enter($__internal_c1031e2ac4982c995976decf4f95f1f006db282ed6c1f1ed17285d4eda964f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c1031e2ac4982c995976decf4f95f1f006db282ed6c1f1ed17285d4eda964f24->leave($__internal_c1031e2ac4982c995976decf4f95f1f006db282ed6c1f1ed17285d4eda964f24_prof);

        
        $__internal_2091561ac06f48277bc7109f8686e301e98b7ecbfd800edeaec59cf6cf226192->leave($__internal_2091561ac06f48277bc7109f8686e301e98b7ecbfd800edeaec59cf6cf226192_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42afb4188213f5f9bf66e147e1ee1cf007fa0b9cd46cf3f416a9c319ce8b1de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42afb4188213f5f9bf66e147e1ee1cf007fa0b9cd46cf3f416a9c319ce8b1de9->enter($__internal_42afb4188213f5f9bf66e147e1ee1cf007fa0b9cd46cf3f416a9c319ce8b1de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_72543900d2dfd038ad5e86719d164828f1d269ffabd6f8e5daa47e1209ac0157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72543900d2dfd038ad5e86719d164828f1d269ffabd6f8e5daa47e1209ac0157->enter($__internal_72543900d2dfd038ad5e86719d164828f1d269ffabd6f8e5daa47e1209ac0157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72543900d2dfd038ad5e86719d164828f1d269ffabd6f8e5daa47e1209ac0157->leave($__internal_72543900d2dfd038ad5e86719d164828f1d269ffabd6f8e5daa47e1209ac0157_prof);

        
        $__internal_42afb4188213f5f9bf66e147e1ee1cf007fa0b9cd46cf3f416a9c319ce8b1de9->leave($__internal_42afb4188213f5f9bf66e147e1ee1cf007fa0b9cd46cf3f416a9c319ce8b1de9_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3931812aaee45104ec023f157301086a35119af0c4f890e3d724f0bf5788e54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3931812aaee45104ec023f157301086a35119af0c4f890e3d724f0bf5788e54a->enter($__internal_3931812aaee45104ec023f157301086a35119af0c4f890e3d724f0bf5788e54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99f6aec1fbf32b9049665c33b09e5669f625dbc7d5bc44c77a7fd51a13a7829e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f6aec1fbf32b9049665c33b09e5669f625dbc7d5bc44c77a7fd51a13a7829e->enter($__internal_99f6aec1fbf32b9049665c33b09e5669f625dbc7d5bc44c77a7fd51a13a7829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99f6aec1fbf32b9049665c33b09e5669f625dbc7d5bc44c77a7fd51a13a7829e->leave($__internal_99f6aec1fbf32b9049665c33b09e5669f625dbc7d5bc44c77a7fd51a13a7829e_prof);

        
        $__internal_3931812aaee45104ec023f157301086a35119af0c4f890e3d724f0bf5788e54a->leave($__internal_3931812aaee45104ec023f157301086a35119af0c4f890e3d724f0bf5788e54a_prof);

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
        return array (  123 => 13,  106 => 9,  89 => 7,  71 => 5,  59 => 14,  57 => 13,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% include 'layout/stylesheets.html.twig' %}
        {% block stylesheets %}{% endblock %}
        {% include 'layout/javascripts.html.twig' %}
        {% block javascripts %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/halldor/web/WikiWikiV2/app/Resources/views/base.html.twig");
    }
}
