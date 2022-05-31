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

/* dates_conges/new.html.twig */
class __TwigTemplate_247b2b15ff3f169b13a2af0fcd82c0afe1c217f50aead19e1e6cd088828b39f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dates_conges/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dates_conges/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dates_conges/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
        Ajouter un congé annuel
    </h4>


    <style>
        .tabs {
            width: 100%;
            display: inline-block;
        }

        .tabs h4 {
            color: #CB997E;
            margin: 5px 0 15px;
            display: inline-block;
        }

        .tab-links:after {
            display: block;
            clear: both;
            content: '';
        }

        .tab-links {
            padding: 0;
            margin: 10px 0 0;
            position: relative;
            top: 2px;
        }

        .tab-links li {
            margin: 0 5px 0 0;
            float: left;
            padding-top: 2px;
            list-style: none;
        }

        .tab-links a {
            padding: 9px 8px 6px;
            display: inline-block;
            background: #CB997E;
            border: 2px solid #CB997E;
            border-bottom: 3px solid #CB997E;
            font-size: 10.5px;
            font-weight: 600;
            color: #fff;
            transition: all linear 0.15s;
        }

        .tab-links button {
            padding: 9px 8px 6px;
            display: inline-block;
            background: #CB997E;
            border: 2px solid #CB997E;
            border-bottom: 3px solid #CB997E;
            font-size: 10.5px;
            font-weight: 600;
            color: #fff;
            transition: all linear 0.15s;
        }

        .tab-links a:hover {
            background: #CB997E;
            text-decoration: none;
            border: 2px solid #CB997E;
            border-bottom: 3px solid #CB997E;
            color: #fff;
        }

        li.active a,
        li.active a:hover {
            background: #CB997E;
            height: 35px;
            border-bottom: none;
            color: #fff;
        }

        .tab-content,
        .uploaded-documents-container {
            padding: 15px;
            border-radius: 3px;
            border: 2px solid #CB997E;
            background: #fff;
            font-size: 0.95em;
        }

        .tab-content-scroll {
            max-height: 375px;
            min-height: 375px;
            max-width: 1100px;
            min-width: 450px;
            overflow: auto;
            clear: both;
        }

        .tab-content-scroll-home {
            min-height: 135px;
        }

        .button-bar-scroll {
            min-height: 235px;
        }

        .tab-content-scroll>p {
            margin-top: 0;
            padding-right: 12px;
        }

        .tab-content a {
            margin-top: 10px;
            color: #fff;
        }

        .tab {
            display: none;
        }

        .tab.active {
            display: block;
        }
    </style>
    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 127
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "
<div class=\"tabs\">
    <ul class=\"tab-links\" hidden>
        <li class=\"active\">
            <a href=\"#tab1\">Tab #1</a>
        </li>

    </ul>

    <div class=\"tab-content\">
    ";
        // line 142
        echo twig_include($this->env, $context, "dates_conges/_form.html.twig");
        echo "
        <ul class=\"tab-links\">

        <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_index");
        echo "\">Cancel</a>
        </ul>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dates_conges/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 145,  220 => 142,  208 => 132,  196 => 127,  192 => 126,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
        Ajouter un congé annuel
    </h4>


    <style>
        .tabs {
            width: 100%;
            display: inline-block;
        }

        .tabs h4 {
            color: #CB997E;
            margin: 5px 0 15px;
            display: inline-block;
        }

        .tab-links:after {
            display: block;
            clear: both;
            content: '';
        }

        .tab-links {
            padding: 0;
            margin: 10px 0 0;
            position: relative;
            top: 2px;
        }

        .tab-links li {
            margin: 0 5px 0 0;
            float: left;
            padding-top: 2px;
            list-style: none;
        }

        .tab-links a {
            padding: 9px 8px 6px;
            display: inline-block;
            background: #CB997E;
            border: 2px solid #CB997E;
            border-bottom: 3px solid #CB997E;
            font-size: 10.5px;
            font-weight: 600;
            color: #fff;
            transition: all linear 0.15s;
        }

        .tab-links button {
            padding: 9px 8px 6px;
            display: inline-block;
            background: #CB997E;
            border: 2px solid #CB997E;
            border-bottom: 3px solid #CB997E;
            font-size: 10.5px;
            font-weight: 600;
            color: #fff;
            transition: all linear 0.15s;
        }

        .tab-links a:hover {
            background: #CB997E;
            text-decoration: none;
            border: 2px solid #CB997E;
            border-bottom: 3px solid #CB997E;
            color: #fff;
        }

        li.active a,
        li.active a:hover {
            background: #CB997E;
            height: 35px;
            border-bottom: none;
            color: #fff;
        }

        .tab-content,
        .uploaded-documents-container {
            padding: 15px;
            border-radius: 3px;
            border: 2px solid #CB997E;
            background: #fff;
            font-size: 0.95em;
        }

        .tab-content-scroll {
            max-height: 375px;
            min-height: 375px;
            max-width: 1100px;
            min-width: 450px;
            overflow: auto;
            clear: both;
        }

        .tab-content-scroll-home {
            min-height: 135px;
        }

        .button-bar-scroll {
            min-height: 235px;
        }

        .tab-content-scroll>p {
            margin-top: 0;
            padding-right: 12px;
        }

        .tab-content a {
            margin-top: 10px;
            color: #fff;
        }

        .tab {
            display: none;
        }

        .tab.active {
            display: block;
        }
    </style>
    {% for message in app.flashes('info') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

        </div>
    {% endfor %}

<div class=\"tabs\">
    <ul class=\"tab-links\" hidden>
        <li class=\"active\">
            <a href=\"#tab1\">Tab #1</a>
        </li>

    </ul>

    <div class=\"tab-content\">
    {{ include('dates_conges/_form.html.twig') }}
        <ul class=\"tab-links\">

        <a href=\"{{ path('dates_conges_index') }}\">Cancel</a>
        </ul>
    </div>
</div>
{% endblock %}
", "dates_conges/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/dates_conges/new.html.twig");
    }
}
