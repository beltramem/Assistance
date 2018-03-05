<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_58408d8c62f29702db14c3b85affbfa8cc15f74acf45f49fff32cc25cc0edaad extends Twig_Template
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
        $__internal_879518784fc80f461cfed998a9d0a62281ce5d6c53cc34ddeab688c76740f6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879518784fc80f461cfed998a9d0a62281ce5d6c53cc34ddeab688c76740f6d5->enter($__internal_879518784fc80f461cfed998a9d0a62281ce5d6c53cc34ddeab688c76740f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3fa2f49769a10038e1abd8d0fe0ae4deac11e323372960d93fb2342ac2c32de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fa2f49769a10038e1abd8d0fe0ae4deac11e323372960d93fb2342ac2c32de->enter($__internal_d3fa2f49769a10038e1abd8d0fe0ae4deac11e323372960d93fb2342ac2c32de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879518784fc80f461cfed998a9d0a62281ce5d6c53cc34ddeab688c76740f6d5->leave($__internal_879518784fc80f461cfed998a9d0a62281ce5d6c53cc34ddeab688c76740f6d5_prof);

        
        $__internal_d3fa2f49769a10038e1abd8d0fe0ae4deac11e323372960d93fb2342ac2c32de->leave($__internal_d3fa2f49769a10038e1abd8d0fe0ae4deac11e323372960d93fb2342ac2c32de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9c965ec547c915fa7ca875898358abcdbe8981819bc52a7a0d6dcd2a447a203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c965ec547c915fa7ca875898358abcdbe8981819bc52a7a0d6dcd2a447a203->enter($__internal_b9c965ec547c915fa7ca875898358abcdbe8981819bc52a7a0d6dcd2a447a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0327bab3dfb39db4c8ebcabb7b13d07fef8d72f00db8d7865a2e5181bf443ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0327bab3dfb39db4c8ebcabb7b13d07fef8d72f00db8d7865a2e5181bf443ca3->enter($__internal_0327bab3dfb39db4c8ebcabb7b13d07fef8d72f00db8d7865a2e5181bf443ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0327bab3dfb39db4c8ebcabb7b13d07fef8d72f00db8d7865a2e5181bf443ca3->leave($__internal_0327bab3dfb39db4c8ebcabb7b13d07fef8d72f00db8d7865a2e5181bf443ca3_prof);

        
        $__internal_b9c965ec547c915fa7ca875898358abcdbe8981819bc52a7a0d6dcd2a447a203->leave($__internal_b9c965ec547c915fa7ca875898358abcdbe8981819bc52a7a0d6dcd2a447a203_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49ccf51380fcfcff73e668cb32adbcc00208295748d760a802d65a8de37b9eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ccf51380fcfcff73e668cb32adbcc00208295748d760a802d65a8de37b9eb9->enter($__internal_49ccf51380fcfcff73e668cb32adbcc00208295748d760a802d65a8de37b9eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34037d59f22d9f109dd00c32f59d372084d576d0e940cfb8a876493529116021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34037d59f22d9f109dd00c32f59d372084d576d0e940cfb8a876493529116021->enter($__internal_34037d59f22d9f109dd00c32f59d372084d576d0e940cfb8a876493529116021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34037d59f22d9f109dd00c32f59d372084d576d0e940cfb8a876493529116021->leave($__internal_34037d59f22d9f109dd00c32f59d372084d576d0e940cfb8a876493529116021_prof);

        
        $__internal_49ccf51380fcfcff73e668cb32adbcc00208295748d760a802d65a8de37b9eb9->leave($__internal_49ccf51380fcfcff73e668cb32adbcc00208295748d760a802d65a8de37b9eb9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94dfb58ab1d50b117d1f5b1aec080a38ae4c59d78e17d8d511fc3a636a58874b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dfb58ab1d50b117d1f5b1aec080a38ae4c59d78e17d8d511fc3a636a58874b->enter($__internal_94dfb58ab1d50b117d1f5b1aec080a38ae4c59d78e17d8d511fc3a636a58874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3292d91e20dfc43739bb0cbb936b1ffa88d68a9fe6055441cfd76cdc11504cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3292d91e20dfc43739bb0cbb936b1ffa88d68a9fe6055441cfd76cdc11504cf4->enter($__internal_3292d91e20dfc43739bb0cbb936b1ffa88d68a9fe6055441cfd76cdc11504cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3292d91e20dfc43739bb0cbb936b1ffa88d68a9fe6055441cfd76cdc11504cf4->leave($__internal_3292d91e20dfc43739bb0cbb936b1ffa88d68a9fe6055441cfd76cdc11504cf4_prof);

        
        $__internal_94dfb58ab1d50b117d1f5b1aec080a38ae4c59d78e17d8d511fc3a636a58874b->leave($__internal_94dfb58ab1d50b117d1f5b1aec080a38ae4c59d78e17d8d511fc3a636a58874b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/students/student5/helloWorld/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
