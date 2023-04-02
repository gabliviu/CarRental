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

/* login_success.html.twig */
class __TwigTemplate_d42bed7dc1564ea91c8edb52c721924b extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "login_success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Success Page";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        if (($context["error"] ?? null)) {
            // line 7
            echo "    <div class=\"alert alert-danger\">Invalid email or password</div>
    <a href=\"/login\" class=\"btn btn-primary\">Try Again</a>
  ";
        } else {
            // line 10
            echo "    <h1>Login Success</h1>
    <p>You have successfully logged in. <a href=\"/\">Click to continue</a></p>
  ";
        }
    }

    public function getTemplateName()
    {
        return "login_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Success Page{% endblock %}

{% block content %}
  {% if error %}
    <div class=\"alert alert-danger\">Invalid email or password</div>
    <a href=\"/login\" class=\"btn btn-primary\">Try Again</a>
  {% else %}
    <h1>Login Success</h1>
    <p>You have successfully logged in. <a href=\"/\">Click to continue</a></p>
  {% endif %}
{% endblock %}
", "login_success.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/login_success.html.twig");
    }
}