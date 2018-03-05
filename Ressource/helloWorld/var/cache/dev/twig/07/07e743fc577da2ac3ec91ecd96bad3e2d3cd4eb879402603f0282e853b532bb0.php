<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a3cedc40972f45455c75c59f43d1d3101f0f3418109517c98d9e354ed86b8c06 extends Twig_Template
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
        $__internal_14dcc93dd0b1456fd5b789b6fea6f6eac8ea0d5320f04c1581e8e4c553fa9fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14dcc93dd0b1456fd5b789b6fea6f6eac8ea0d5320f04c1581e8e4c553fa9fe7->enter($__internal_14dcc93dd0b1456fd5b789b6fea6f6eac8ea0d5320f04c1581e8e4c553fa9fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f82570870821a9e3671aba25ac6cb1da03d22c0a96e53c9a3d08991942b32900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82570870821a9e3671aba25ac6cb1da03d22c0a96e53c9a3d08991942b32900->enter($__internal_f82570870821a9e3671aba25ac6cb1da03d22c0a96e53c9a3d08991942b32900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14dcc93dd0b1456fd5b789b6fea6f6eac8ea0d5320f04c1581e8e4c553fa9fe7->leave($__internal_14dcc93dd0b1456fd5b789b6fea6f6eac8ea0d5320f04c1581e8e4c553fa9fe7_prof);

        
        $__internal_f82570870821a9e3671aba25ac6cb1da03d22c0a96e53c9a3d08991942b32900->leave($__internal_f82570870821a9e3671aba25ac6cb1da03d22c0a96e53c9a3d08991942b32900_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fcd55fd46b60a54f65188384ad01a416df2b4cf87ee293df5f9ebf7e533c2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcd55fd46b60a54f65188384ad01a416df2b4cf87ee293df5f9ebf7e533c2be->enter($__internal_7fcd55fd46b60a54f65188384ad01a416df2b4cf87ee293df5f9ebf7e533c2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c470e7d97e9aa7d7e5756cd35438f26000aa62b6a27ce3a000a2c6368e86281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c470e7d97e9aa7d7e5756cd35438f26000aa62b6a27ce3a000a2c6368e86281->enter($__internal_3c470e7d97e9aa7d7e5756cd35438f26000aa62b6a27ce3a000a2c6368e86281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3c470e7d97e9aa7d7e5756cd35438f26000aa62b6a27ce3a000a2c6368e86281->leave($__internal_3c470e7d97e9aa7d7e5756cd35438f26000aa62b6a27ce3a000a2c6368e86281_prof);

        
        $__internal_7fcd55fd46b60a54f65188384ad01a416df2b4cf87ee293df5f9ebf7e533c2be->leave($__internal_7fcd55fd46b60a54f65188384ad01a416df2b4cf87ee293df5f9ebf7e533c2be_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/students/student5/helloWorld/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
