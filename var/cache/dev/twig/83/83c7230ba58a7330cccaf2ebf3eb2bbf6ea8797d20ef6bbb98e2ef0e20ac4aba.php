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

/* conges/new.html.twig */
class __TwigTemplate_46fdccdeecd64cda529ab9203e0152c17f8265bbb31b537ea7597e9f0315aba3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conges/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
\t<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\t\tDemande un Congé
\t</h4>


\t<style>
\t\t.tabs {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.tabs h4 {
\t\t\tcolor: #CB997E;
\t\t\tmargin: 5px 0 15px;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.tab-links:after {
\t\t\tdisplay: block;
\t\t\tclear: both;
\t\t\tcontent: '';
\t\t}

\t\t.tab-links {
\t\t\tpadding: 0;
\t\t\tmargin: 10px 0 0;
\t\t\tposition: relative;
\t\t\ttop: 2px;
\t\t}

\t\t.tab-links li {
\t\t\tmargin: 0 5px 0 0;
\t\t\tfloat: left;
\t\t\tpadding-top: 2px;
\t\t\tlist-style: none;
\t\t}

\t\t.tab-links a {
\t\t\tpadding: 9px 8px 6px;
\t\t\tdisplay: inline-block;
\t\t\tbackground: #CB997E;
\t\t\tborder: 2px solid #CB997E;
\t\t\tborder-bottom: 3px solid #CB997E;
\t\t\tfont-size: 10.5px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\ttransition: all linear 0.15s;
\t\t}

\t\t.tab-links button {
\t\t\tpadding: 9px 8px 6px;
\t\t\tdisplay: inline-block;
\t\t\tbackground: #CB997E;
\t\t\tborder: 2px solid #CB997E;
\t\t\tborder-bottom: 3px solid #CB997E;
\t\t\tfont-size: 10.5px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\ttransition: all linear 0.15s;
\t\t}

\t\t.tab-links a:hover {
\t\t\tbackground: #CB997E;
\t\t\ttext-decoration: none;
\t\t\tborder: 2px solid #CB997E;
\t\t\tborder-bottom: 3px solid #CB997E;
\t\t\tcolor: #fff;
\t\t}

\t\tli.active a,
\t\tli.active a:hover {
\t\t\tbackground: #CB997E;
\t\t\theight: 35px;
\t\t\tborder-bottom: none;
\t\t\tcolor: #fff;
\t\t}

\t\t.tab-content,
\t\t.uploaded-documents-container {
\t\t\tpadding: 15px;
\t\t\tborder-radius: 3px;
\t\t\tborder: 2px solid #CB997E;
\t\t\tbackground: #fff;
\t\t\tfont-size: 0.95em;
\t\t}

\t\t.tab-content-scroll {
\t\t\tmax-height: 375px;
\t\t\tmin-height: 375px;
\t\t\tmax-width: 1100px;
\t\t\tmin-width: 450px;
\t\t\toverflow: auto;
\t\t\tclear: both;
\t\t}

\t\t.tab-content-scroll-home {
\t\t\tmin-height: 135px;
\t\t}

\t\t.button-bar-scroll {
\t\t\tmin-height: 235px;
\t\t}

\t\t.tab-content-scroll > p {
\t\t\tmargin-top: 0;
\t\t\tpadding-right: 12px;
\t\t}

\t\t.tab-content a {
\t\t\tmargin-top: 10px;
\t\t\tcolor: #fff;
\t\t}

\t\t.tab {
\t\t\tdisplay: none;
\t\t}

\t\t.tab.active {
\t\t\tdisplay: block;
\t\t}
\t</style>

\t<div class=\"tabs\">
\t\t<ul class=\"tab-links\" hidden>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"#tab1\">Tab #1</a>
\t\t\t</li>

\t\t</ul>

\t\t<div class=\"tab-content\">
\t\t\t<form action=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_new");
        echo "\" method=\"post\">

\t\t\t\t";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 138, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


\t\t\t\t<div id=\"tab1\" class=\"tab active\">
\t\t\t\t\t<div class=\"wrapper\">

\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Employé</span>
\t\t\t\t\t\t\t\t";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 147, $this->source); })()), "employe", [], "any", false, false, false, 147), 'row', ["label" => false]);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Raison</span>
\t\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 155, $this->source); })()), "title", [], "any", false, false, false, 155), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date Demande</span>

\t\t\t\t\t\t\t\t";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 165, $this->source); })()), "dateDemande", [], "any", false, false, false, 165), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tDate Depart

\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 180, $this->source); })()), "start", [], "any", false, false, false, 180), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tDate Retour
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 193, $this->source); })()), "end", [], "any", false, false, false, 193), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tToutes La journée
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 205, $this->source); })()), "allDay", [], "any", false, false, false, 205), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box7\" hidden>
\t\t\t\t\t\t\t<label class=\"block text-sm\">

\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tNombre de Jours
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 216, $this->source); })()), "nbreJours", [], "any", false, false, false, 216), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box8\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tbackground Color

\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 227, $this->source); })()), "backgroundColor", [], "any", false, false, false, 227), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box9\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\ttext Color


\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 240, $this->source); })()), "textColor", [], "any", false, false, false, 240), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_list");
        echo "\" type=\"submit\">Cancel</a>
\t\t\t\t\t\t\t<button href=\"";
        // line 253
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_list");
        echo "\" type=\"submit\">Submit</button>

\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>


\t\t\t\t";
        // line 260
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 260, $this->source); })()), 'form_end');
        echo "
\t\t\t</form>
\t\t</div>


\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conges/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 260,  374 => 253,  370 => 252,  355 => 240,  339 => 227,  325 => 216,  311 => 205,  296 => 193,  280 => 180,  262 => 165,  249 => 155,  238 => 147,  226 => 138,  221 => 136,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{% endblock %}
{% block body %}

\t<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\t\tDemande un Congé
\t</h4>


\t<style>
\t\t.tabs {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.tabs h4 {
\t\t\tcolor: #CB997E;
\t\t\tmargin: 5px 0 15px;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.tab-links:after {
\t\t\tdisplay: block;
\t\t\tclear: both;
\t\t\tcontent: '';
\t\t}

\t\t.tab-links {
\t\t\tpadding: 0;
\t\t\tmargin: 10px 0 0;
\t\t\tposition: relative;
\t\t\ttop: 2px;
\t\t}

\t\t.tab-links li {
\t\t\tmargin: 0 5px 0 0;
\t\t\tfloat: left;
\t\t\tpadding-top: 2px;
\t\t\tlist-style: none;
\t\t}

\t\t.tab-links a {
\t\t\tpadding: 9px 8px 6px;
\t\t\tdisplay: inline-block;
\t\t\tbackground: #CB997E;
\t\t\tborder: 2px solid #CB997E;
\t\t\tborder-bottom: 3px solid #CB997E;
\t\t\tfont-size: 10.5px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\ttransition: all linear 0.15s;
\t\t}

\t\t.tab-links button {
\t\t\tpadding: 9px 8px 6px;
\t\t\tdisplay: inline-block;
\t\t\tbackground: #CB997E;
\t\t\tborder: 2px solid #CB997E;
\t\t\tborder-bottom: 3px solid #CB997E;
\t\t\tfont-size: 10.5px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\ttransition: all linear 0.15s;
\t\t}

\t\t.tab-links a:hover {
\t\t\tbackground: #CB997E;
\t\t\ttext-decoration: none;
\t\t\tborder: 2px solid #CB997E;
\t\t\tborder-bottom: 3px solid #CB997E;
\t\t\tcolor: #fff;
\t\t}

\t\tli.active a,
\t\tli.active a:hover {
\t\t\tbackground: #CB997E;
\t\t\theight: 35px;
\t\t\tborder-bottom: none;
\t\t\tcolor: #fff;
\t\t}

\t\t.tab-content,
\t\t.uploaded-documents-container {
\t\t\tpadding: 15px;
\t\t\tborder-radius: 3px;
\t\t\tborder: 2px solid #CB997E;
\t\t\tbackground: #fff;
\t\t\tfont-size: 0.95em;
\t\t}

\t\t.tab-content-scroll {
\t\t\tmax-height: 375px;
\t\t\tmin-height: 375px;
\t\t\tmax-width: 1100px;
\t\t\tmin-width: 450px;
\t\t\toverflow: auto;
\t\t\tclear: both;
\t\t}

\t\t.tab-content-scroll-home {
\t\t\tmin-height: 135px;
\t\t}

\t\t.button-bar-scroll {
\t\t\tmin-height: 235px;
\t\t}

\t\t.tab-content-scroll > p {
\t\t\tmargin-top: 0;
\t\t\tpadding-right: 12px;
\t\t}

\t\t.tab-content a {
\t\t\tmargin-top: 10px;
\t\t\tcolor: #fff;
\t\t}

\t\t.tab {
\t\t\tdisplay: none;
\t\t}

\t\t.tab.active {
\t\t\tdisplay: block;
\t\t}
\t</style>

\t<div class=\"tabs\">
\t\t<ul class=\"tab-links\" hidden>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"#tab1\">Tab #1</a>
\t\t\t</li>

\t\t</ul>

\t\t<div class=\"tab-content\">
\t\t\t<form action=\"{{ path('conges_new')}}\" method=\"post\">

\t\t\t\t{{form_start(formC  , {'attr': {'novalidate' : 'novalidate'}})}}


\t\t\t\t<div id=\"tab1\" class=\"tab active\">
\t\t\t\t\t<div class=\"wrapper\">

\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Employé</span>
\t\t\t\t\t\t\t\t{{form_row(formC.employe , { 'label' : false})}}
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Raison</span>
\t\t\t\t\t\t\t\t{{form_row(formC.title , { 'label' : false})}}


\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date Demande</span>

\t\t\t\t\t\t\t\t{{form_row(formC.dateDemande , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tDate Depart

\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t{{form_row(formC.start , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tDate Retour
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{form_row(formC.end , { 'label' : false})}}

\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tToutes La journée
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{form_row(formC.allDay , { 'label' : false})}}

\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box7\" hidden>
\t\t\t\t\t\t\t<label class=\"block text-sm\">

\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tNombre de Jours
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{form_row(formC.nbreJours , { 'label' : false})}}

\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box8\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tbackground Color

\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{form_row(formC.backgroundColor , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box9\">
\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\ttext Color


\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{{form_row(formC.textColor , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('conges_list')}}\" type=\"submit\">Cancel</a>
\t\t\t\t\t\t\t<button href=\"{{ path('conges_list') }}\" type=\"submit\">Submit</button>

\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>


\t\t\t\t{{form_end(formC)}}
\t\t\t</form>
\t\t</div>


\t</div>


{% endblock %}
", "conges/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/conges/new.html.twig");
    }
}
