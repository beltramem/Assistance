<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_03f75148dd520f51ff955eb917dd50358e62d3805beb2ab04621c3d9028f253f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_976ff4b71478d889f53c28a5dca0e33791cc1324570f2e31709e768e4ec491d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976ff4b71478d889f53c28a5dca0e33791cc1324570f2e31709e768e4ec491d1->enter($__internal_976ff4b71478d889f53c28a5dca0e33791cc1324570f2e31709e768e4ec491d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_db10f34c21cf1aa46c0d3e99aca53ffcc0d5c23c4e7ed0e5a83dd047afac39a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db10f34c21cf1aa46c0d3e99aca53ffcc0d5c23c4e7ed0e5a83dd047afac39a1->enter($__internal_db10f34c21cf1aa46c0d3e99aca53ffcc0d5c23c4e7ed0e5a83dd047afac39a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_976ff4b71478d889f53c28a5dca0e33791cc1324570f2e31709e768e4ec491d1->leave($__internal_976ff4b71478d889f53c28a5dca0e33791cc1324570f2e31709e768e4ec491d1_prof);

        
        $__internal_db10f34c21cf1aa46c0d3e99aca53ffcc0d5c23c4e7ed0e5a83dd047afac39a1->leave($__internal_db10f34c21cf1aa46c0d3e99aca53ffcc0d5c23c4e7ed0e5a83dd047afac39a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07d6ee5f799abb94885b25dd1bcb6687c899100f6fcbe838d38a81f809e5bf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d6ee5f799abb94885b25dd1bcb6687c899100f6fcbe838d38a81f809e5bf92->enter($__internal_07d6ee5f799abb94885b25dd1bcb6687c899100f6fcbe838d38a81f809e5bf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a0e3f0a68fa97b538b35ff0d6ebfa240e5eddb6d98a0d34589b491ad46382f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0e3f0a68fa97b538b35ff0d6ebfa240e5eddb6d98a0d34589b491ad46382f5->enter($__internal_8a0e3f0a68fa97b538b35ff0d6ebfa240e5eddb6d98a0d34589b491ad46382f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8a0e3f0a68fa97b538b35ff0d6ebfa240e5eddb6d98a0d34589b491ad46382f5->leave($__internal_8a0e3f0a68fa97b538b35ff0d6ebfa240e5eddb6d98a0d34589b491ad46382f5_prof);

        
        $__internal_07d6ee5f799abb94885b25dd1bcb6687c899100f6fcbe838d38a81f809e5bf92->leave($__internal_07d6ee5f799abb94885b25dd1bcb6687c899100f6fcbe838d38a81f809e5bf92_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cefec3e51d6f5c0bc563187cfde30715c53137eebd9acc9855881e8eba7155c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefec3e51d6f5c0bc563187cfde30715c53137eebd9acc9855881e8eba7155c2->enter($__internal_cefec3e51d6f5c0bc563187cfde30715c53137eebd9acc9855881e8eba7155c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7bc0fb29eb7724b6e7c975a97c456b1b2968381eab597202e0156d812d9d07f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc0fb29eb7724b6e7c975a97c456b1b2968381eab597202e0156d812d9d07f3->enter($__internal_7bc0fb29eb7724b6e7c975a97c456b1b2968381eab597202e0156d812d9d07f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7bc0fb29eb7724b6e7c975a97c456b1b2968381eab597202e0156d812d9d07f3->leave($__internal_7bc0fb29eb7724b6e7c975a97c456b1b2968381eab597202e0156d812d9d07f3_prof);

        
        $__internal_cefec3e51d6f5c0bc563187cfde30715c53137eebd9acc9855881e8eba7155c2->leave($__internal_cefec3e51d6f5c0bc563187cfde30715c53137eebd9acc9855881e8eba7155c2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fa0b9dd63c9dbc8e0d6e6398e25a900c596e466399699eebd48c72ac628b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fa0b9dd63c9dbc8e0d6e6398e25a900c596e466399699eebd48c72ac628b8c->enter($__internal_84fa0b9dd63c9dbc8e0d6e6398e25a900c596e466399699eebd48c72ac628b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_428db808ee5c6fddc72948e89f5729c86349a8b79af93fc90b2dafd2dbaa1ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428db808ee5c6fddc72948e89f5729c86349a8b79af93fc90b2dafd2dbaa1ea1->enter($__internal_428db808ee5c6fddc72948e89f5729c86349a8b79af93fc90b2dafd2dbaa1ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_428db808ee5c6fddc72948e89f5729c86349a8b79af93fc90b2dafd2dbaa1ea1->leave($__internal_428db808ee5c6fddc72948e89f5729c86349a8b79af93fc90b2dafd2dbaa1ea1_prof);

        
        $__internal_84fa0b9dd63c9dbc8e0d6e6398e25a900c596e466399699eebd48c72ac628b8c->leave($__internal_84fa0b9dd63c9dbc8e0d6e6398e25a900c596e466399699eebd48c72ac628b8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/students/student5/helloWorld/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
