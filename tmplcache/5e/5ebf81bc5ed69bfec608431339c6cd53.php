<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* selectvehicle.html.twig */
class __TwigTemplate_fc57fd53e51f5ef2a34a0e7edb78f0f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "selectvehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Available Vehicles</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th>Availability</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableVehicles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "make", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "year", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "color", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "availability", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>
                        <form method=\"post\" action=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath("booking", ["vehicle_id" => twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"pickup_date\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["pickupDateTime"] ?? null), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"return_date\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["returnDateTime"] ?? null), "html", null, true);
            echo "\">
                            <button type=\"submit\">Select</button>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "selectvehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  106 => 29,  102 => 28,  98 => 27,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  70 => 19,  66 => 18,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
    <h1>Available Vehicles</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th>Availability</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for vehicle in availableVehicles %}
                <tr>
                    <td>{{ vehicle.id }}</td>
                    <td>{{ vehicle.make }}</td>
                    <td>{{ vehicle.model }}</td>
                    <td>{{ vehicle.year }}</td>
                    <td>{{ vehicle.color }}</td>
                    <td>{{ vehicle.availability }}</td>
                    <td>
                        <form method=\"post\" action=\"{{ base_path('booking', {'vehicle_id': vehicle.id}) }}\">
                            <input type=\"hidden\" name=\"pickup_date\" value=\"{{ pickupDateTime }}\">
                            <input type=\"hidden\" name=\"return_date\" value=\"{{ returnDateTime }}\">
                            <button type=\"submit\">Select</button>
                        </form>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "selectvehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\selectvehicle.html.twig");
    }
}
