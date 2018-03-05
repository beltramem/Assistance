<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e3da66cb1ea7faa95d3ee6ef7f9ddf8caa9243fb555d3e72ee4edc1b05de6a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69d2be53d3de6e5d9cda3f22ae86517a20a2b925f3d16fc1f72fdb83feda6f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d2be53d3de6e5d9cda3f22ae86517a20a2b925f3d16fc1f72fdb83feda6f44->enter($__internal_69d2be53d3de6e5d9cda3f22ae86517a20a2b925f3d16fc1f72fdb83feda6f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_91708bf1bedd6375ecc310fd0882b92ecd1c6a406d28d5f5c62300aa0db1df0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91708bf1bedd6375ecc310fd0882b92ecd1c6a406d28d5f5c62300aa0db1df0c->enter($__internal_91708bf1bedd6375ecc310fd0882b92ecd1c6a406d28d5f5c62300aa0db1df0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d2be53d3de6e5d9cda3f22ae86517a20a2b925f3d16fc1f72fdb83feda6f44->leave($__internal_69d2be53d3de6e5d9cda3f22ae86517a20a2b925f3d16fc1f72fdb83feda6f44_prof);

        
        $__internal_91708bf1bedd6375ecc310fd0882b92ecd1c6a406d28d5f5c62300aa0db1df0c->leave($__internal_91708bf1bedd6375ecc310fd0882b92ecd1c6a406d28d5f5c62300aa0db1df0c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_228aa3c046676b707f595494e0be9a6df8cab8dad42262e9745806e86f47d45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228aa3c046676b707f595494e0be9a6df8cab8dad42262e9745806e86f47d45f->enter($__internal_228aa3c046676b707f595494e0be9a6df8cab8dad42262e9745806e86f47d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0bef4628e1495196903979bd3fc5ab20345b52fa30327fab870805566f6762b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bef4628e1495196903979bd3fc5ab20345b52fa30327fab870805566f6762b->enter($__internal_e0bef4628e1495196903979bd3fc5ab20345b52fa30327fab870805566f6762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e0bef4628e1495196903979bd3fc5ab20345b52fa30327fab870805566f6762b->leave($__internal_e0bef4628e1495196903979bd3fc5ab20345b52fa30327fab870805566f6762b_prof);

        
        $__internal_228aa3c046676b707f595494e0be9a6df8cab8dad42262e9745806e86f47d45f->leave($__internal_228aa3c046676b707f595494e0be9a6df8cab8dad42262e9745806e86f47d45f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3af6e57412cb0d763ba1c0440afeead140133e6b08ea23977062f12ef85c2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3af6e57412cb0d763ba1c0440afeead140133e6b08ea23977062f12ef85c2d2->enter($__internal_b3af6e57412cb0d763ba1c0440afeead140133e6b08ea23977062f12ef85c2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98256b8752b69f47f9bd14bd979447f5b76d20b7a90547348d748853d666b0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98256b8752b69f47f9bd14bd979447f5b76d20b7a90547348d748853d666b0fe->enter($__internal_98256b8752b69f47f9bd14bd979447f5b76d20b7a90547348d748853d666b0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_98256b8752b69f47f9bd14bd979447f5b76d20b7a90547348d748853d666b0fe->leave($__internal_98256b8752b69f47f9bd14bd979447f5b76d20b7a90547348d748853d666b0fe_prof);

        
        $__internal_b3af6e57412cb0d763ba1c0440afeead140133e6b08ea23977062f12ef85c2d2->leave($__internal_b3af6e57412cb0d763ba1c0440afeead140133e6b08ea23977062f12ef85c2d2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_22e5a37cee3815388a2eb0decd0cc37e5f920dda8c97807d0589b263001c74d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e5a37cee3815388a2eb0decd0cc37e5f920dda8c97807d0589b263001c74d1->enter($__internal_22e5a37cee3815388a2eb0decd0cc37e5f920dda8c97807d0589b263001c74d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_893b7ebea9e523846607767b5be0b86d862cbd6fac0a2b192f9c2c056fa55f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893b7ebea9e523846607767b5be0b86d862cbd6fac0a2b192f9c2c056fa55f94->enter($__internal_893b7ebea9e523846607767b5be0b86d862cbd6fac0a2b192f9c2c056fa55f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_893b7ebea9e523846607767b5be0b86d862cbd6fac0a2b192f9c2c056fa55f94->leave($__internal_893b7ebea9e523846607767b5be0b86d862cbd6fac0a2b192f9c2c056fa55f94_prof);

        
        $__internal_22e5a37cee3815388a2eb0decd0cc37e5f920dda8c97807d0589b263001c74d1->leave($__internal_22e5a37cee3815388a2eb0decd0cc37e5f920dda8c97807d0589b263001c74d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/students/student5/helloWorld/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
