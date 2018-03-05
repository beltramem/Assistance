<?php

/* main/product/show.html.twig */
class __TwigTemplate_3ffcc955c42683f3383e23672df9fab52a4337b6af0acd43d00c314fc08d7126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/product/show.html.twig", 1);
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
        $__internal_e3bbd702b60bc2f9473e9f3ab4cf00ece6f61d2532fb998e14e75fd5cd0584e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bbd702b60bc2f9473e9f3ab4cf00ece6f61d2532fb998e14e75fd5cd0584e0->enter($__internal_e3bbd702b60bc2f9473e9f3ab4cf00ece6f61d2532fb998e14e75fd5cd0584e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product/show.html.twig"));

        $__internal_3586d257756c89018a32e5032ab1c44a94244c7cc769daf8c18a8c5a040a460d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3586d257756c89018a32e5032ab1c44a94244c7cc769daf8c18a8c5a040a460d->enter($__internal_3586d257756c89018a32e5032ab1c44a94244c7cc769daf8c18a8c5a040a460d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3bbd702b60bc2f9473e9f3ab4cf00ece6f61d2532fb998e14e75fd5cd0584e0->leave($__internal_e3bbd702b60bc2f9473e9f3ab4cf00ece6f61d2532fb998e14e75fd5cd0584e0_prof);

        
        $__internal_3586d257756c89018a32e5032ab1c44a94244c7cc769daf8c18a8c5a040a460d->leave($__internal_3586d257756c89018a32e5032ab1c44a94244c7cc769daf8c18a8c5a040a460d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_007466e3c967652f98b6603a12c4c2e24d97dac1681f07408fc30594522a33bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007466e3c967652f98b6603a12c4c2e24d97dac1681f07408fc30594522a33bc->enter($__internal_007466e3c967652f98b6603a12c4c2e24d97dac1681f07408fc30594522a33bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6005e7f3396d2efdad8f276a498bda52d7c87cc43b6fa1bd92f8e0d7eaec7a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6005e7f3396d2efdad8f276a498bda52d7c87cc43b6fa1bd92f8e0d7eaec7a5f->enter($__internal_6005e7f3396d2efdad8f276a498bda52d7c87cc43b6fa1bd92f8e0d7eaec7a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("product.all");
        echo "\">Retour</a>
\t<table class=\"table\">
        <tr>
            <th>Name</th>
            <th>Release On</th>
        </tr>
\t\t<tr>
\t\t\t<td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->getSourceContext()); })()), "releaseOn", array())), "html", null, true);
        echo "</td>
\t\t</tr>
\t</table>
";
        
        $__internal_6005e7f3396d2efdad8f276a498bda52d7c87cc43b6fa1bd92f8e0d7eaec7a5f->leave($__internal_6005e7f3396d2efdad8f276a498bda52d7c87cc43b6fa1bd92f8e0d7eaec7a5f_prof);

        
        $__internal_007466e3c967652f98b6603a12c4c2e24d97dac1681f07408fc30594522a33bc->leave($__internal_007466e3c967652f98b6603a12c4c2e24d97dac1681f07408fc30594522a33bc_prof);

    }

    public function getTemplateName()
    {
        return "main/product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
\t<a href=\"{{ url(\"product.all\") }}\">Retour</a>
\t<table class=\"table\">
        <tr>
            <th>Name</th>
            <th>Release On</th>
        </tr>
\t\t<tr>
\t\t\t<td>{{ product.name }}</td>
\t\t\t<td>{{ product.releaseOn|date }}</td>
\t\t</tr>
\t</table>
{% endblock %}", "main/product/show.html.twig", "/home/students/student5/helloWorld/templates/main/product/show.html.twig");
    }
}
