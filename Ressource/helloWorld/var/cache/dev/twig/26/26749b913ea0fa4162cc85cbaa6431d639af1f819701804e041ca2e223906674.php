<?php

/* main/home.html.twig */
class __TwigTemplate_e47327079b9ae69b12710c18a149a0519086bd7e3d810ecfb35f06bc32a172e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ad0ee763585f624f902dbc629a2ed4115ddcb8136558b45a023cb57c1837d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad0ee763585f624f902dbc629a2ed4115ddcb8136558b45a023cb57c1837d8b->enter($__internal_6ad0ee763585f624f902dbc629a2ed4115ddcb8136558b45a023cb57c1837d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $__internal_38a7d4a854b54f49d03ee158b433e2cd34858224409f2b727a37568f47920e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a7d4a854b54f49d03ee158b433e2cd34858224409f2b727a37568f47920e4f->enter($__internal_38a7d4a854b54f49d03ee158b433e2cd34858224409f2b727a37568f47920e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad0ee763585f624f902dbc629a2ed4115ddcb8136558b45a023cb57c1837d8b->leave($__internal_6ad0ee763585f624f902dbc629a2ed4115ddcb8136558b45a023cb57c1837d8b_prof);

        
        $__internal_38a7d4a854b54f49d03ee158b433e2cd34858224409f2b727a37568f47920e4f->leave($__internal_38a7d4a854b54f49d03ee158b433e2cd34858224409f2b727a37568f47920e4f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_365f8f6260b321f3522df492dd4b8ad2737a8c8a0563466a5bc3aed07c59a81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365f8f6260b321f3522df492dd4b8ad2737a8c8a0563466a5bc3aed07c59a81f->enter($__internal_365f8f6260b321f3522df492dd4b8ad2737a8c8a0563466a5bc3aed07c59a81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a10c542a3f62e522c3aadff21721f0ad4667ac8946e2dec42ed765824255aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a10c542a3f62e522c3aadff21721f0ad4667ac8946e2dec42ed765824255aa7->enter($__internal_2a10c542a3f62e522c3aadff21721f0ad4667ac8946e2dec42ed765824255aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Welcome to ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["project_name"]) || array_key_exists("project_name", $context) ? $context["project_name"] : (function () { throw new Twig_Error_Runtime('Variable "project_name" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo ".</h1>
";
        
        $__internal_2a10c542a3f62e522c3aadff21721f0ad4667ac8946e2dec42ed765824255aa7->leave($__internal_2a10c542a3f62e522c3aadff21721f0ad4667ac8946e2dec42ed765824255aa7_prof);

        
        $__internal_365f8f6260b321f3522df492dd4b8ad2737a8c8a0563466a5bc3aed07c59a81f->leave($__internal_365f8f6260b321f3522df492dd4b8ad2737a8c8a0563466a5bc3aed07c59a81f_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_8aebf3fffd444b20c692db656ce0aa436e307eabde3afd595b9e3b0d0bccdd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aebf3fffd444b20c692db656ce0aa436e307eabde3afd595b9e3b0d0bccdd5b->enter($__internal_8aebf3fffd444b20c692db656ce0aa436e307eabde3afd595b9e3b0d0bccdd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c7e6f2078d191192e0b0d221ed08eb462e638d976a7d734be3ae768d7ff97129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e6f2078d191192e0b0d221ed08eb462e638d976a7d734be3ae768d7ff97129->enter($__internal_c7e6f2078d191192e0b0d221ed08eb462e638d976a7d734be3ae768d7ff97129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "\t<ul>
\t\t<a href=\"/\"><li>Acceuil</li></a>
\t\t<a href=\"/hello\"><li>hello</li></a>
\t\t<a href=\"/product\"><li>product</li></a>
\t\t
\t</ul>
";
        
        $__internal_c7e6f2078d191192e0b0d221ed08eb462e638d976a7d734be3ae768d7ff97129->leave($__internal_c7e6f2078d191192e0b0d221ed08eb462e638d976a7d734be3ae768d7ff97129_prof);

        
        $__internal_8aebf3fffd444b20c692db656ce0aa436e307eabde3afd595b9e3b0d0bccdd5b->leave($__internal_8aebf3fffd444b20c692db656ce0aa436e307eabde3afd595b9e3b0d0bccdd5b_prof);

    }

    public function getTemplateName()
    {
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <h1>Welcome to {{ project_name|upper }}.</h1>
{% endblock %}
{% block header %}
\t<ul>
\t\t<a href=\"/\"><li>Acceuil</li></a>
\t\t<a href=\"/hello\"><li>hello</li></a>
\t\t<a href=\"/product\"><li>product</li></a>
\t\t
\t</ul>
{% endblock %}", "main/home.html.twig", "/home/students/student5/helloWorld/templates/main/home.html.twig");
    }
}
