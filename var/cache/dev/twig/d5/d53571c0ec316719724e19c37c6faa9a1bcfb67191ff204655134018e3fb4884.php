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

/* conges/list.html.twig */
class __TwigTemplate_28201013e7a52a540d3701003be37ef359bf0dca618eb302aac46a40ae71c6fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conges/list.html.twig", 1);
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
<!-- Font Awesome -->
";
        // line 8
        echo "

<style>
\t.dt-button{
\t\t/*background-color: #DDBEA9;*/
\t\tbackground-color: #e7e7e7;
\t\tcolor: black;
\t\tborder-radius: 50%;
\t\twidth: 50px;
\t}
\t[type=search]{
\t\twidth: 200px;
\t\tborder-radius: 200px;

\t\tborder-color: black;
\t\tborder: solid;

\t}
\tbody {
\t\tbackground-color: #f9fafb;
\t\theight: 100%;
\t\twidth: 100%;
\t\t/* overflow-y: hidden; */
\t}

\tstrong {
\t\tcolor: #9c6644;
\t}

\t.modal-lg {
\t\tmax-width: 50% !important;
\t}

\t#voirC {
\t\tmargin-top: 800px;
\t}

\t.statut {
\t\tcolor: #F2D722;


\t}
</style>
<!--  affiche alert -->
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tListe des congés
</h4>
<div>
\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\tstyle=\"margin-left: 600px; \" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_new");
        echo "\">

\t\tDemande un congé
\t\t</a>
\t\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\t\tid=\"voir\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_calendrier");
        echo "\">

\t\tVoir Calendrier
\t\t</a>
\t\t</div>

<div class=\"w-full rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t<div class=\"w-full overflow-hidden \">
\t\t<table class=\"w-full \" id=\"example\">
\t\t\t<thead>
\t\t\t\t<tr
\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t<th class=\"px-3 py-3\">Employé</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Date Demande</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Date Depart</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Date Retour</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Raison</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Nombre de jours</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Statut</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Actions</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
            // line 94
            echo "\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 95
                echo "\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "employe", [], "any", false, false, false, 98), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "dateDemande", [], "any", false, false, false, 101), "format", [0 => "d/m/Y"], "method", false, false, false, 101), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "start", [], "any", false, false, false, 105), "format", [0 => "d/m/Y"], "method", false, false, false, 105), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "end", [], "any", false, false, false, 108), "format", [0 => "d/m/Y"], "method", false, false, false, 108), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "title", [], "any", false, false, false, 112), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-5 py-3 text-sm\">
\t\t\t\t\t\t\t\t";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "nbreJours", [], "any", false, false, false, 115), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                // line 117
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 117), "sans décision"))) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: #e7c800; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 119), "html", null, true);
                    echo "

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 122
$context["conge"], "statut", [], "any", false, false, false, 122), "acceptée"))) {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: green; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 124), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                } else {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 128), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                // line 131
                echo "
\t\t\t\t\t\t\t<td class=\"px-3 py-3\">

\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm\">

\t\t\t\t\t\t\t\t\t";
                // line 136
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"";
                    // line 138
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 138), "html", null, true);
                    echo "\" aria-label=\"Accepter \"
\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction1(this.name); \"
\t\t\t\t\t\t\t\t\t\t   href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_accepter", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 140)]), "html", null, true);
                    echo "\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 141
$context["conge"], "statut", [], "any", false, false, false, 141), "sans décision"))) {
                        echo " style=\"visibility: visible; \" ";
                    } else {
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   value=\"refuse \" name=\"";
                    // line 152
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 152), "html", null, true);
                    echo "\" aria-label=\"Refuser \"
\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction2(this.name); \"
\t\t\t\t\t\t\t\t\t\t   href=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_refuser", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 154)]), "html", null, true);
                    echo "\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 155
$context["conge"], "statut", [], "any", false, false, false, 155), "sans décision"))) {
                        echo " style=\"visibility: visible; \" ";
                    } else {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>

\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_updateList", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                echo "\" ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 173
$context["conge"], "statut", [], "any", false, false, false, 173), "sans décision"))) {
                    echo " style=\"visibility: visible; \" ";
                } else {
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                }
                echo ">

\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete\" href=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                echo "\" ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 185
$context["conge"], "statut", [], "any", false, false, false, 185), "sans décision"))) {
                    echo " style=\"visibility: visible; \" ";
                } else {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                }
                echo " onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\t\t\t  d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 201
                echo "\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "name", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "employe", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201)))) {
                    // line 202
                    echo "
\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "employe", [], "any", false, false, false, 206), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                    // line 209
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "dateDemande", [], "any", false, false, false, 209), "format", [0 => "d/m/Y"], "method", false, false, false, 209), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                    // line 213
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "start", [], "any", false, false, false, 213), "format", [0 => "d/m/Y"], "method", false, false, false, 213), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                    // line 216
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "end", [], "any", false, false, false, 216), "format", [0 => "d/m/Y"], "method", false, false, false, 216), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                    // line 220
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "title", [], "any", false, false, false, 220), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-5 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                    // line 223
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "nbreJours", [], "any", false, false, false, 223), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                    // line 225
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 225), "sans décision"))) {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: #e7c800; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 227
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 227), "html", null, true);
                        echo "

\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 230
$context["conge"], "statut", [], "any", false, false, false, 230), "acceptée"))) {
                        // line 231
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: green; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 232
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 232), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 235
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 236
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 236), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                    }
                    // line 239
                    echo "
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3\">

\t\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm\">

\t\t\t\t\t\t\t\t\t\t";
                    // line 244
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 245
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"";
                        // line 246
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 246), "html", null, true);
                        echo "\" aria-label=\"Accepter \"
\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction1(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t   href=\"";
                        // line 248
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_accepter", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 248)]), "html", null, true);
                        echo "\" ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                         // line 249
$context["conge"], "statut", [], "any", false, false, false, 249), "sans décision"))) {
                            echo " style=\"visibility: visible; \" ";
                        } else {
                            // line 250
                            echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   value=\"refuse \" name=\"";
                        // line 260
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 260), "html", null, true);
                        echo "\" aria-label=\"Refuser \"
\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction2(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t   href=\"";
                        // line 262
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_refuser", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 262)]), "html", null, true);
                        echo "\" ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                         // line 263
$context["conge"], "statut", [], "any", false, false, false, 263), "sans décision"))) {
                            echo " style=\"visibility: visible; \" ";
                        } else {
                            // line 264
                            echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>

\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"";
                    // line 280
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_updateList", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 280)]), "html", null, true);
                    echo "\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 281
$context["conge"], "statut", [], "any", false, false, false, 281), "sans décision"))) {
                        echo " style=\"visibility: visible; \" ";
                    } else {
                        // line 282
                        echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                    }
                    echo ">

\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete\" href=\"";
                    // line 292
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 292)]), "html", null, true);
                    echo "\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 293
$context["conge"], "statut", [], "any", false, false, false, 293), "sans décision"))) {
                        echo " style=\"visibility: visible; \" ";
                    } else {
                        // line 294
                        echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                    }
                    echo " onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                }
                // line 309
                echo "\t\t\t\t\t";
            }
            // line 310
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "\t\t\t\t</tbody>

\t\t</table>
\t\t</div>
\t\t</div>

<script>
\tfunction myFunction1(id) {
\t\tdocument.getElementById(id).innerHTML = 'acceptée';

\t\t\$.ajax({
\t\t\tmethod: \"GET \",
\t\t\turl: \"";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_accepter", ["id" => " +
\t\t\t\tid + "]);
        // line 325
        echo " \",
\t\t\tdata: {
\t\t\t\tid: id,
\t\t\t},
\t\t\tcache: false,
\t\t\tsuccess: function (data) {
\t\t\t\tconsole.log(data);
\t\t\t}


\t\t});

\t}
\tfunction myFunction2(id) {
\t\tdocument.getElementById(id).innerHTML = 'refusée';

\t\t\$.ajax({
\t\t\tmethod: \"GET \",
\t\t\turl: \"";
        // line 343
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_refuser", ["id" => " +
\t\t\t\tid + "]);
        // line 344
        echo " \",
\t\t\tdata: {
\t\t\t\tid: id,
\t\t\t},
\t\t\tcache: false,
\t\t\tsuccess: function (data) {
\t\t\t\tconsole.log(data);
\t\t\t}


\t\t});

\t}


\t\$(document).ready(function() {
\t\t\$('#example').DataTable( {
\t\t\tdom: 'Bfrtip',
\t\t\tbuttons: [
\t\t\t\t'excelHtml5',
\t\t\t\t'csvHtml5',
\t\t\t\t'pdfHtml5',
\t\t\t\t'print'
\t\t\t]
\t\t} );
\t} );

</script>
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>

\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conges/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 344,  638 => 343,  618 => 325,  615 => 324,  601 => 312,  594 => 310,  591 => 309,  572 => 294,  568 => 293,  565 => 292,  551 => 282,  547 => 281,  544 => 280,  539 => 277,  522 => 264,  518 => 263,  515 => 262,  510 => 260,  496 => 250,  492 => 249,  489 => 248,  484 => 246,  481 => 245,  479 => 244,  472 => 239,  466 => 236,  463 => 235,  457 => 232,  454 => 231,  452 => 230,  446 => 227,  443 => 226,  441 => 225,  436 => 223,  430 => 220,  423 => 216,  417 => 213,  410 => 209,  404 => 206,  398 => 202,  395 => 201,  376 => 186,  372 => 185,  369 => 184,  355 => 174,  351 => 173,  348 => 172,  343 => 169,  326 => 156,  322 => 155,  319 => 154,  314 => 152,  300 => 142,  296 => 141,  293 => 140,  288 => 138,  285 => 137,  283 => 136,  276 => 131,  270 => 128,  267 => 127,  261 => 124,  258 => 123,  256 => 122,  250 => 119,  247 => 118,  245 => 117,  240 => 115,  234 => 112,  227 => 108,  221 => 105,  214 => 101,  208 => 98,  203 => 95,  200 => 94,  196 => 93,  170 => 70,  162 => 65,  153 => 58,  141 => 53,  137 => 52,  91 => 8,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{% endblock %}
{% block body %}

<!-- Font Awesome -->
{#
<link href=\"vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"> #}


<style>
\t.dt-button{
\t\t/*background-color: #DDBEA9;*/
\t\tbackground-color: #e7e7e7;
\t\tcolor: black;
\t\tborder-radius: 50%;
\t\twidth: 50px;
\t}
\t[type=search]{
\t\twidth: 200px;
\t\tborder-radius: 200px;

\t\tborder-color: black;
\t\tborder: solid;

\t}
\tbody {
\t\tbackground-color: #f9fafb;
\t\theight: 100%;
\t\twidth: 100%;
\t\t/* overflow-y: hidden; */
\t}

\tstrong {
\t\tcolor: #9c6644;
\t}

\t.modal-lg {
\t\tmax-width: 50% !important;
\t}

\t#voirC {
\t\tmargin-top: 800px;
\t}

\t.statut {
\t\tcolor: #F2D722;


\t}
</style>
<!--  affiche alert -->
{% for message in app.flashes('info') %}
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
{% endfor %}

<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tListe des congés
</h4>
<div>
\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\tstyle=\"margin-left: 600px; \" href=\"{{ path('conges_new')}}\">

\t\tDemande un congé
\t\t</a>
\t\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\t\tid=\"voir\" href=\"{{ path('conges_calendrier') }}\">

\t\tVoir Calendrier
\t\t</a>
\t\t</div>

<div class=\"w-full rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t<div class=\"w-full overflow-hidden \">
\t\t<table class=\"w-full \" id=\"example\">
\t\t\t<thead>
\t\t\t\t<tr
\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t<th class=\"px-3 py-3\">Employé</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Date Demande</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Date Depart</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Date Retour</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Raison</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Nombre de jours</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Statut</th>
\t\t\t\t\t<th class=\"px-3 py-3\">Actions</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t{% for conge in conges %}
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t{{conge.employe}}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t{{conge.dateDemande.format('d/m/Y')}}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t{{conge.start.format('d/m/Y')}}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t{{conge.end.format('d/m/Y')}}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t{{conge.title}}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-5 py-3 text-sm\">
\t\t\t\t\t\t\t\t{{conge.nbreJours}}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% if conge.statut == 'sans décision' %}
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: #e7c800; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t{{conge.statut}}

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% elseif conge.statut == 'acceptée' %}
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: green; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t{{conge.statut}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t{{conge.statut}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<td class=\"px-3 py-3\">

\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm\">

\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"{{conge.id}}\" aria-label=\"Accepter \"
\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction1(this.name); \"
\t\t\t\t\t\t\t\t\t\t   href=\"{{ path('conges_accepter' , {'id' : conge.id})}}\" {% if
\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   value=\"refuse \" name=\"{{conge.id}}\" aria-label=\"Refuser \"
\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction2(this.name); \"
\t\t\t\t\t\t\t\t\t\t   href=\"{{ path('conges_refuser' , {'id' : conge.id})}}\" {% if
\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>

\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"{{ path('conges_updateList', {'id': conge.id} ) }}\" {% if
\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>

\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete\" href=\"{{ path('conges_delete', {'id': conge.id})}}\" {% if
\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %} onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\t\t\t  d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t</tr>
\t\t\t\t\t{% elseif is_granted('ROLE_USER')  %}
\t\t\t\t\t\t{% if app.user.name.id == conge.employe.id  %}

\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{conge.employe}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{conge.dateDemande.format('d/m/Y')}}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{conge.start.format('d/m/Y')}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{conge.end.format('d/m/Y')}}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{conge.title}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-5 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{conge.nbreJours}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% if conge.statut == 'sans décision' %}
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: #e7c800; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t{{conge.statut}}

\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% elseif conge.statut == 'acceptée' %}
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: green; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t{{conge.statut}}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t{{conge.statut}}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t<td class=\"px-3 py-3\">

\t\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm\">

\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"{{conge.id}}\" aria-label=\"Accepter \"
\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction1(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t   href=\"{{ path('conges_accepter' , {'id' : conge.id})}}\" {% if
\t\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   value=\"refuse \" name=\"{{conge.id}}\" aria-label=\"Refuser \"
\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction2(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t   href=\"{{ path('conges_refuser' , {'id' : conge.id})}}\" {% if
\t\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>

\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"{{ path('conges_updateList', {'id': conge.id} ) }}\" {% if
\t\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>

\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete\" href=\"{{ path('conges_delete', {'id': conge.id})}}\" {% if
\t\t\t\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %} onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}

\t\t\t\t{% endfor %}
\t\t\t\t</tbody>

\t\t</table>
\t\t</div>
\t\t</div>

<script>
\tfunction myFunction1(id) {
\t\tdocument.getElementById(id).innerHTML = 'acceptée';

\t\t\$.ajax({
\t\t\tmethod: \"GET \",
\t\t\turl: \"{{ path( 'conges_accepter' , { 'id' : \" +
\t\t\t\tid + \" })}} \",
\t\t\tdata: {
\t\t\t\tid: id,
\t\t\t},
\t\t\tcache: false,
\t\t\tsuccess: function (data) {
\t\t\t\tconsole.log(data);
\t\t\t}


\t\t});

\t}
\tfunction myFunction2(id) {
\t\tdocument.getElementById(id).innerHTML = 'refusée';

\t\t\$.ajax({
\t\t\tmethod: \"GET \",
\t\t\turl: \"{{ path( 'conges_refuser' , { 'id' : \" +
\t\t\t\tid + \" })}} \",
\t\t\tdata: {
\t\t\t\tid: id,
\t\t\t},
\t\t\tcache: false,
\t\t\tsuccess: function (data) {
\t\t\t\tconsole.log(data);
\t\t\t}


\t\t});

\t}


\t\$(document).ready(function() {
\t\t\$('#example').DataTable( {
\t\t\tdom: 'Bfrtip',
\t\t\tbuttons: [
\t\t\t\t'excelHtml5',
\t\t\t\t'csvHtml5',
\t\t\t\t'pdfHtml5',
\t\t\t\t'print'
\t\t\t]
\t\t} );
\t} );

</script>
\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>

\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js\"></script>
{% endblock %}", "conges/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/conges/list.html.twig");
    }
}
