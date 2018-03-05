<?php

/* base.html.twig */
class __TwigTemplate_ca15743d969e030f9d6b4dd73b85abddcd67a3f83cdd6c39b6256a63885b2188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7ea9d1bec02d0809b62cc25658f49de8d76e0d493ba8ed2d337311a28fbed8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ea9d1bec02d0809b62cc25658f49de8d76e0d493ba8ed2d337311a28fbed8a->enter($__internal_d7ea9d1bec02d0809b62cc25658f49de8d76e0d493ba8ed2d337311a28fbed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d96b83282ba8685814319f818bc3c5d17f29ac180810f1b952574cda4c76161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d96b83282ba8685814319f818bc3c5d17f29ac180810f1b952574cda4c76161->enter($__internal_7d96b83282ba8685814319f818bc3c5d17f29ac180810f1b952574cda4c76161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
\t\t";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "\t\t<footer>
            <hr/>
            &copy; Beltramo
        </footer>
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_d7ea9d1bec02d0809b62cc25658f49de8d76e0d493ba8ed2d337311a28fbed8a->leave($__internal_d7ea9d1bec02d0809b62cc25658f49de8d76e0d493ba8ed2d337311a28fbed8a_prof);

        
        $__internal_7d96b83282ba8685814319f818bc3c5d17f29ac180810f1b952574cda4c76161->leave($__internal_7d96b83282ba8685814319f818bc3c5d17f29ac180810f1b952574cda4c76161_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ccfb8015f805cb1694a64f07e86b2446fca8909357ac2e20bc858b90ef6d036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccfb8015f805cb1694a64f07e86b2446fca8909357ac2e20bc858b90ef6d036->enter($__internal_4ccfb8015f805cb1694a64f07e86b2446fca8909357ac2e20bc858b90ef6d036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_928b6c1e44b2cf88089c6d9740abb39e16bed7ebe22af72bfca6ae42d8cb6b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928b6c1e44b2cf88089c6d9740abb39e16bed7ebe22af72bfca6ae42d8cb6b12->enter($__internal_928b6c1e44b2cf88089c6d9740abb39e16bed7ebe22af72bfca6ae42d8cb6b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_928b6c1e44b2cf88089c6d9740abb39e16bed7ebe22af72bfca6ae42d8cb6b12->leave($__internal_928b6c1e44b2cf88089c6d9740abb39e16bed7ebe22af72bfca6ae42d8cb6b12_prof);

        
        $__internal_4ccfb8015f805cb1694a64f07e86b2446fca8909357ac2e20bc858b90ef6d036->leave($__internal_4ccfb8015f805cb1694a64f07e86b2446fca8909357ac2e20bc858b90ef6d036_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3eb0aa95c7a27b2bb03880991cf2029de56ff2dc625677414ff58228664f21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3eb0aa95c7a27b2bb03880991cf2029de56ff2dc625677414ff58228664f21f->enter($__internal_d3eb0aa95c7a27b2bb03880991cf2029de56ff2dc625677414ff58228664f21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c6807b15aa54b0b5d6f467ed4257358b9533985e1dc9618ffb3f0f80b8f22c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6807b15aa54b0b5d6f467ed4257358b9533985e1dc9618ffb3f0f80b8f22c95->enter($__internal_c6807b15aa54b0b5d6f467ed4257358b9533985e1dc9618ffb3f0f80b8f22c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6807b15aa54b0b5d6f467ed4257358b9533985e1dc9618ffb3f0f80b8f22c95->leave($__internal_c6807b15aa54b0b5d6f467ed4257358b9533985e1dc9618ffb3f0f80b8f22c95_prof);

        
        $__internal_d3eb0aa95c7a27b2bb03880991cf2029de56ff2dc625677414ff58228664f21f->leave($__internal_d3eb0aa95c7a27b2bb03880991cf2029de56ff2dc625677414ff58228664f21f_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_7c163e9b5036d1bb8e796f806752a30bf74729c69e82b075d1d165c6fac5af17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c163e9b5036d1bb8e796f806752a30bf74729c69e82b075d1d165c6fac5af17->enter($__internal_7c163e9b5036d1bb8e796f806752a30bf74729c69e82b075d1d165c6fac5af17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c209fd836e53d32e4649e0c7f744e1cf80f30630f73fcc6042f45410a0a76620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c209fd836e53d32e4649e0c7f744e1cf80f30630f73fcc6042f45410a0a76620->enter($__internal_c209fd836e53d32e4649e0c7f744e1cf80f30630f73fcc6042f45410a0a76620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c209fd836e53d32e4649e0c7f744e1cf80f30630f73fcc6042f45410a0a76620->leave($__internal_c209fd836e53d32e4649e0c7f744e1cf80f30630f73fcc6042f45410a0a76620_prof);

        
        $__internal_7c163e9b5036d1bb8e796f806752a30bf74729c69e82b075d1d165c6fac5af17->leave($__internal_7c163e9b5036d1bb8e796f806752a30bf74729c69e82b075d1d165c6fac5af17_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dab1d5face0f9bfae6d0188b3b6252849f6e664d5b4c91ec93d6351ccb765364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab1d5face0f9bfae6d0188b3b6252849f6e664d5b4c91ec93d6351ccb765364->enter($__internal_dab1d5face0f9bfae6d0188b3b6252849f6e664d5b4c91ec93d6351ccb765364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1128850389854ca6281a332d705e1535cfaa5b9521e2904555d496f48dc5a838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1128850389854ca6281a332d705e1535cfaa5b9521e2904555d496f48dc5a838->enter($__internal_1128850389854ca6281a332d705e1535cfaa5b9521e2904555d496f48dc5a838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1128850389854ca6281a332d705e1535cfaa5b9521e2904555d496f48dc5a838->leave($__internal_1128850389854ca6281a332d705e1535cfaa5b9521e2904555d496f48dc5a838_prof);

        
        $__internal_dab1d5face0f9bfae6d0188b3b6252849f6e664d5b4c91ec93d6351ccb765364->leave($__internal_dab1d5face0f9bfae6d0188b3b6252849f6e664d5b4c91ec93d6351ccb765364_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c3fd5c6faa2f3d3c7494b33c20a499ae6aa0c632c586b6528674c4201456bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3fd5c6faa2f3d3c7494b33c20a499ae6aa0c632c586b6528674c4201456bb0->enter($__internal_7c3fd5c6faa2f3d3c7494b33c20a499ae6aa0c632c586b6528674c4201456bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14da62349fbe6622fbdfd404bf278ca0704da37c9d47d809bc3dc7a10564993b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14da62349fbe6622fbdfd404bf278ca0704da37c9d47d809bc3dc7a10564993b->enter($__internal_14da62349fbe6622fbdfd404bf278ca0704da37c9d47d809bc3dc7a10564993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14da62349fbe6622fbdfd404bf278ca0704da37c9d47d809bc3dc7a10564993b->leave($__internal_14da62349fbe6622fbdfd404bf278ca0704da37c9d47d809bc3dc7a10564993b_prof);

        
        $__internal_7c3fd5c6faa2f3d3c7494b33c20a499ae6aa0c632c586b6528674c4201456bb0->leave($__internal_7c3fd5c6faa2f3d3c7494b33c20a499ae6aa0c632c586b6528674c4201456bb0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 15,  123 => 10,  106 => 9,  89 => 6,  71 => 5,  59 => 16,  57 => 15,  51 => 11,  48 => 10,  46 => 9,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
\t\t{% block header %}{% endblock %}
        {% block body %}{% endblock %}
\t\t<footer>
            <hr/>
            &copy; Beltramo
        </footer>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/students/student5/helloWorld/templates/base.html.twig");
    }
}
