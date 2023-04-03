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

/* forgotpassword_success.html.twig */
class __TwigTemplate_5d5a967280a0fcddcf3d2f0c9968e648 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("master.html.twig", "forgotpassword_success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Password Reset Email Sent";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
        <div class=\"col-md-8 col-lg-6\">
            ";
        // line 9
        if (($context["message"] ?? null)) {
            // line 10
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 11
        echo " 
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forgotpassword_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Password Reset Email Sent{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
        <div class=\"col-md-8 col-lg-6\">
            {% if message %}
            <div class=\"alert alert-success\">{{ message }}</div>
            {% endif %} 
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "forgotpassword_success.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/forgotpassword_success.html.twig");
    }
}