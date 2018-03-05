<?php

/* main/product/add.html.twig */
class __TwigTemplate_24e96530221c0847d9a6607f28ba10c5ff67e93e058f6a8f38269b15b153e228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/product/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95977b1f5c71c812efd9a29927122cff72b1a51f301ee013ddbf840e3d5d15df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95977b1f5c71c812efd9a29927122cff72b1a51f301ee013ddbf840e3d5d15df->enter($__internal_95977b1f5c71c812efd9a29927122cff72b1a51f301ee013ddbf840e3d5d15df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product/add.html.twig"));

        $__internal_ce495feda4f3235892232625cf7d6c77873928ee38209b9ef746f80f6967266f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce495feda4f3235892232625cf7d6c77873928ee38209b9ef746f80f6967266f->enter($__internal_ce495feda4f3235892232625cf7d6c77873928ee38209b9ef746f80f6967266f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95977b1f5c71c812efd9a29927122cff72b1a51f301ee013ddbf840e3d5d15df->leave($__internal_95977b1f5c71c812efd9a29927122cff72b1a51f301ee013ddbf840e3d5d15df_prof);

        
        $__internal_ce495feda4f3235892232625cf7d6c77873928ee38209b9ef746f80f6967266f->leave($__internal_ce495feda4f3235892232625cf7d6c77873928ee38209b9ef746f80f6967266f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7707195b9f34fc27f0c512d23b97ecc19c9d5194ab5d430eb1c356dc6917695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7707195b9f34fc27f0c512d23b97ecc19c9d5194ab5d430eb1c356dc6917695->enter($__internal_f7707195b9f34fc27f0c512d23b97ecc19c9d5194ab5d430eb1c356dc6917695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e78283212ef52f9e72249981e0b7744741350b2d230dcf3fa86363c6339c856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e78283212ef52f9e72249981e0b7744741350b2d230dcf3fa86363c6339c856->enter($__internal_6e78283212ef52f9e72249981e0b7744741350b2d230dcf3fa86363c6339c856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("product.all");
        echo "\">Retour</a>
\t";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form');
        echo "
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "releaseOn", array()), 'row');
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
\t";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 9, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_6e78283212ef52f9e72249981e0b7744741350b2d230dcf3fa86363c6339c856->leave($__internal_6e78283212ef52f9e72249981e0b7744741350b2d230dcf3fa86363c6339c856_prof);

        
        $__internal_f7707195b9f34fc27f0c512d23b97ecc19c9d5194ab5d430eb1c356dc6917695->leave($__internal_f7707195b9f34fc27f0c512d23b97ecc19c9d5194ab5d430eb1c356dc6917695_prof);

    }

    public function getTemplateName()
    {
        return "main/product/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
\t<a href=\"{{ url(\"product.all\") }}\">Retour</a>
\t{{ form(form) }}
\t{{ form_start(form) }}
    {{ form_row(form.name) }}
    {{ form_row(form.releaseOn) }}
    {{ form_end(form) }}
\t{{ dump(result) }}
{% endblock %}
", "main/product/add.html.twig", "/home/students/student5/helloWorld/templates/main/product/add.html.twig");
    }
}
