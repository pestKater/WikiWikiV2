<?php

/* layout/stylesheets.html.twig */
class __TwigTemplate_7273127399bb09014e442bdf811f280fe3095a8e3833726c18aab6c37a0eef70 extends Twig_Template
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
        $__internal_f15e103d7b117de42abe0ac6922ba89ea60afe27075502f4db1d97e17d1a6d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15e103d7b117de42abe0ac6922ba89ea60afe27075502f4db1d97e17d1a6d45->enter($__internal_f15e103d7b117de42abe0ac6922ba89ea60afe27075502f4db1d97e17d1a6d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/stylesheets.html.twig"));

        $__internal_e4b18046c951b69dcc268704cc196371b9f27c35ad70daf03c4304cf821b07b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b18046c951b69dcc268704cc196371b9f27c35ad70daf03c4304cf821b07b1->enter($__internal_e4b18046c951b69dcc268704cc196371b9f27c35ad70daf03c4304cf821b07b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/stylesheets.html.twig"));

        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tether.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">";
        
        $__internal_f15e103d7b117de42abe0ac6922ba89ea60afe27075502f4db1d97e17d1a6d45->leave($__internal_f15e103d7b117de42abe0ac6922ba89ea60afe27075502f4db1d97e17d1a6d45_prof);

        
        $__internal_e4b18046c951b69dcc268704cc196371b9f27c35ad70daf03c4304cf821b07b1->leave($__internal_e4b18046c951b69dcc268704cc196371b9f27c35ad70daf03c4304cf821b07b1_prof);

    }

    public function getTemplateName()
    {
        return "layout/stylesheets.html.twig";
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
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/tether.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">", "layout/stylesheets.html.twig", "/home/halldor/web/WikiWikiV2/app/Resources/views/layout/stylesheets.html.twig");
    }
}
