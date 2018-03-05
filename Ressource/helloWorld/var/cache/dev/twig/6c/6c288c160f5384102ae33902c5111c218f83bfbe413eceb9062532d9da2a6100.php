<?php

/* main/product/all.html.twig */
class __TwigTemplate_efde1311c79360d5e651c6a0b58a9ecb9b8396a4806ac1b81aba5398d615c15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/product/all.html.twig", 1);
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
        $__internal_f2b416297dacf99f416aaa39c70f2f79096af293df5db84226ef883b0692e023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b416297dacf99f416aaa39c70f2f79096af293df5db84226ef883b0692e023->enter($__internal_f2b416297dacf99f416aaa39c70f2f79096af293df5db84226ef883b0692e023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product/all.html.twig"));

        $__internal_aa68406ad8521fd36640bc72639f2b37746377198a0acb7bcc13ec9e00744c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa68406ad8521fd36640bc72639f2b37746377198a0acb7bcc13ec9e00744c71->enter($__internal_aa68406ad8521fd36640bc72639f2b37746377198a0acb7bcc13ec9e00744c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b416297dacf99f416aaa39c70f2f79096af293df5db84226ef883b0692e023->leave($__internal_f2b416297dacf99f416aaa39c70f2f79096af293df5db84226ef883b0692e023_prof);

        
        $__internal_aa68406ad8521fd36640bc72639f2b37746377198a0acb7bcc13ec9e00744c71->leave($__internal_aa68406ad8521fd36640bc72639f2b37746377198a0acb7bcc13ec9e00744c71_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dee50e2bf3227328d331cc89c385cad956c120547b853b33b2575d119b5692c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee50e2bf3227328d331cc89c385cad956c120547b853b33b2575d119b5692c3->enter($__internal_dee50e2bf3227328d331cc89c385cad956c120547b853b33b2575d119b5692c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f65713b12ad2ca2674baa5bb06287d620d0a37ccd140518fad3acdbcdb29a48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65713b12ad2ca2674baa5bb06287d620d0a37ccd140518fad3acdbcdb29a48f->enter($__internal_f65713b12ad2ca2674baa5bb06287d620d0a37ccd140518fad3acdbcdb29a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("product.add");
        echo "\">Add</a>
    <table class=\"table\">
        <tr>
            <th>Name</th>
            <th>Release On</th>
            <th>Action</th>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 10, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "            <tr>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "releaseOn", array())), "html", null, true);
            echo "</td>
                <td>
                    <a onclick=\"return confirm('are you sure?');\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("product.delete", array("product" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("product.update", array("product" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()))), "html", null, true);
            echo "\">update</a>
\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("product.show", array("product" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "            <tr>
                <td colspan=\"3\">No content available</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>
";
        
        $__internal_f65713b12ad2ca2674baa5bb06287d620d0a37ccd140518fad3acdbcdb29a48f->leave($__internal_f65713b12ad2ca2674baa5bb06287d620d0a37ccd140518fad3acdbcdb29a48f_prof);

        
        $__internal_dee50e2bf3227328d331cc89c385cad956c120547b853b33b2575d119b5692c3->leave($__internal_dee50e2bf3227328d331cc89c385cad956c120547b853b33b2575d119b5692c3_prof);

    }

    public function getTemplateName()
    {
        return "main/product/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  94 => 21,  85 => 17,  81 => 16,  77 => 15,  72 => 13,  68 => 12,  65 => 11,  60 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <a href=\"{{ url(\"product.add\") }}\">Add</a>
    <table class=\"table\">
        <tr>
            <th>Name</th>
            <th>Release On</th>
            <th>Action</th>
        </tr>
        {% for product in products %}
            <tr>
                <td>{{ product.name }}</td>
                <td>{{ product.releaseOn|date }}</td>
                <td>
                    <a onclick=\"return confirm('are you sure?');\" href=\"{{ url(\"product.delete\", {\"product\":product.id}) }}\">Delete</a>
\t\t\t\t\t<a href=\"{{ url(\"product.update\", {\"product\":product.id}) }}\">update</a>
\t\t\t\t\t<a href=\"{{ url(\"product.show\", {\"product\":product.id}) }}\">show</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">No content available</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}", "main/product/all.html.twig", "/home/students/student5/helloWorld/templates/main/product/all.html.twig");
    }
}
