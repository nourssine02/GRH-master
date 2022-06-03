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

/* avance/update.html.twig */
class __TwigTemplate_48180b26e7ab75ac43b2d9cf74b438857cffd5af95cb123338dc1fe5b969bb95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avance/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avance/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avance/update.html.twig", 1);
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
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tModifier une Avance
</h4>


<style>
\t.tabs {
\t\twidth: 100%;
\t\tdisplay: inline-block;
\t}

\t.tabs h4 {
\t\tcolor: #CB997E;
\t\tmargin: 5px 0 15px;
\t\tdisplay: inline-block;
\t}

\t.tab-links:after {
\t\tdisplay: block;
\t\tclear: both;
\t\tcontent: '';
\t}

\t.tab-links {
\t\tpadding: 0;
\t\tmargin: 10px 0 0;
\t\tposition: relative;
\t\ttop: 2px;
\t}

\t.tab-links li {
\t\tmargin: 0 5px 0 0;
\t\tfloat: left;
\t\tpadding-top: 2px;
\t\tlist-style: none;
\t}

\t.tab-links a {
\t\tpadding: 9px 8px 6px;
\t\tdisplay: inline-block;
\t\tbackground: #CB997E;
\t\tborder: 2px solid #CB997E;
\t\tborder-bottom: 3px solid #CB997E;
\t\tfont-size: 10.5px;
\t\tfont-weight: 600;
\t\tcolor: #fff;
\t\ttransition: all linear 0.15s;
\t}

\t.tab-links button {
\t\tpadding: 9px 8px 6px;
\t\tdisplay: inline-block;
\t\tbackground: #CB997E;
\t\tborder: 2px solid #CB997E;
\t\tborder-bottom: 3px solid #CB997E;
\t\tfont-size: 10.5px;
\t\tfont-weight: 600;
\t\tcolor: #fff;
\t\ttransition: all linear 0.15s;
\t}

\t.tab-links a:hover {
\t\tbackground: #CB997E;
\t\ttext-decoration: none;
\t\tborder: 2px solid #CB997E;
\t\tborder-bottom: 3px solid #CB997E;
\t\tcolor: #fff;
\t}

\tli.active a,
\tli.active a:hover {
\t\tbackground: #CB997E;
\t\theight: 35px;
\t\tborder-bottom: none;
\t\tcolor: #fff;
\t}

\t.tab-content,
\t.uploaded-documents-container {
\t\tpadding: 15px;
\t\tborder-radius: 3px;
\t\tborder: 2px solid #CB997E;
\t\tbackground: #fff;
\t\tfont-size: 0.95em;
\t}

\t.tab-content-scroll {
\t\tmax-height: 375px;
\t\tmin-height: 375px;
\t\tmax-width: 1100px;
\t\tmin-width: 450px;
\t\toverflow: auto;
\t\tclear: both;
\t}

\t.tab-content-scroll-home {
\t\tmin-height: 135px;
\t}

\t.button-bar-scroll {
\t\tmin-height: 235px;
\t}

\t.tab-content-scroll>p {
\t\tmargin-top: 0;
\t\tpadding-right: 12px;
\t}

\t.tab-content a {
\t\tmargin-top: 10px;
\t\tcolor: #fff;
\t}

\t.tab {
\t\tdisplay: none;
\t}

\t.tab.active {
\t\tdisplay: block;
\t}
</style>

<div class=\"tabs\">
\t<ul class=\"tab-links\" hidden>
\t\t<li class=\"active\">
\t\t\t<a href=\"#tab1\">Tab #1</a>
\t\t</li>

\t</ul>

\t<div class=\"tab-content\">
\t\t<form action=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["avance"]) || array_key_exists("avance", $context) ? $context["avance"] : (function () { throw new RuntimeError('Variable "avance" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
        echo "\" method=\"POST\">

\t\t\t";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 138, $this->source); })()), 'form_start');
        echo "


\t\t\t<div id=\"tab1\" class=\"tab active\">
\t\t\t\t<div class=\"wrapper\">


\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Employé</span>
\t\t\t\t\t\t\t";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 148, $this->source); })()), "employe", [], "any", false, false, false, 148), 'row', ["label" => false]);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Montant</span>
\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 155, $this->source); })()), "montant", [], "any", false, false, false, 155), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date d'avance</span>

\t\t\t\t\t\t\t";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 165, $this->source); })()), "dateAvance", [], "any", false, false, false, 165), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t</label>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_list");
        echo "\" type=\"submit\">Cancel</a>
\t\t\t\t\t\t<button href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_list");
        echo "\" type=\"submit\">Submit</button>

\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t";
        // line 184
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 184, $this->source); })()), 'form_end');
        echo "
\t\t</form>
\t</div>


</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avance/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 184,  280 => 177,  276 => 176,  262 => 165,  249 => 155,  239 => 148,  226 => 138,  221 => 136,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{% endblock %}
{% block body %}

<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tModifier une Avance
</h4>


<style>
\t.tabs {
\t\twidth: 100%;
\t\tdisplay: inline-block;
\t}

\t.tabs h4 {
\t\tcolor: #CB997E;
\t\tmargin: 5px 0 15px;
\t\tdisplay: inline-block;
\t}

\t.tab-links:after {
\t\tdisplay: block;
\t\tclear: both;
\t\tcontent: '';
\t}

\t.tab-links {
\t\tpadding: 0;
\t\tmargin: 10px 0 0;
\t\tposition: relative;
\t\ttop: 2px;
\t}

\t.tab-links li {
\t\tmargin: 0 5px 0 0;
\t\tfloat: left;
\t\tpadding-top: 2px;
\t\tlist-style: none;
\t}

\t.tab-links a {
\t\tpadding: 9px 8px 6px;
\t\tdisplay: inline-block;
\t\tbackground: #CB997E;
\t\tborder: 2px solid #CB997E;
\t\tborder-bottom: 3px solid #CB997E;
\t\tfont-size: 10.5px;
\t\tfont-weight: 600;
\t\tcolor: #fff;
\t\ttransition: all linear 0.15s;
\t}

\t.tab-links button {
\t\tpadding: 9px 8px 6px;
\t\tdisplay: inline-block;
\t\tbackground: #CB997E;
\t\tborder: 2px solid #CB997E;
\t\tborder-bottom: 3px solid #CB997E;
\t\tfont-size: 10.5px;
\t\tfont-weight: 600;
\t\tcolor: #fff;
\t\ttransition: all linear 0.15s;
\t}

\t.tab-links a:hover {
\t\tbackground: #CB997E;
\t\ttext-decoration: none;
\t\tborder: 2px solid #CB997E;
\t\tborder-bottom: 3px solid #CB997E;
\t\tcolor: #fff;
\t}

\tli.active a,
\tli.active a:hover {
\t\tbackground: #CB997E;
\t\theight: 35px;
\t\tborder-bottom: none;
\t\tcolor: #fff;
\t}

\t.tab-content,
\t.uploaded-documents-container {
\t\tpadding: 15px;
\t\tborder-radius: 3px;
\t\tborder: 2px solid #CB997E;
\t\tbackground: #fff;
\t\tfont-size: 0.95em;
\t}

\t.tab-content-scroll {
\t\tmax-height: 375px;
\t\tmin-height: 375px;
\t\tmax-width: 1100px;
\t\tmin-width: 450px;
\t\toverflow: auto;
\t\tclear: both;
\t}

\t.tab-content-scroll-home {
\t\tmin-height: 135px;
\t}

\t.button-bar-scroll {
\t\tmin-height: 235px;
\t}

\t.tab-content-scroll>p {
\t\tmargin-top: 0;
\t\tpadding-right: 12px;
\t}

\t.tab-content a {
\t\tmargin-top: 10px;
\t\tcolor: #fff;
\t}

\t.tab {
\t\tdisplay: none;
\t}

\t.tab.active {
\t\tdisplay: block;
\t}
</style>

<div class=\"tabs\">
\t<ul class=\"tab-links\" hidden>
\t\t<li class=\"active\">
\t\t\t<a href=\"#tab1\">Tab #1</a>
\t\t</li>

\t</ul>

\t<div class=\"tab-content\">
\t\t<form action=\"{{ path('avance_update', {'id': avance.id})}}\" method=\"POST\">

\t\t\t{{form_start(formA)}}


\t\t\t<div id=\"tab1\" class=\"tab active\">
\t\t\t\t<div class=\"wrapper\">


\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Employé</span>
\t\t\t\t\t\t\t{{form_row(formA.employe , { 'label' : false})}}
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Montant</span>
\t\t\t\t\t\t\t{{form_row(formA.montant , { 'label' : false})}}


\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date d'avance</span>

\t\t\t\t\t\t\t{{form_row(formA.dateAvance , { 'label' : false})}}


\t\t\t\t\t\t</label>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('avance_list')}}\" type=\"submit\">Cancel</a>
\t\t\t\t\t\t<button href=\"{{ path('avance_list') }}\" type=\"submit\">Submit</button>

\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t{{form_end(formA)}}
\t\t</form>
\t</div>


</div>


{% endblock %}", "avance/update.html.twig", "/home/hp/Téléchargements/GRH-master/templates/avance/update.html.twig");
    }
}
