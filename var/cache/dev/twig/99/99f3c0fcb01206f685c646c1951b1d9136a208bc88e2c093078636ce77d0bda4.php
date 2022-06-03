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

/* conges/ajax.html.twig */
class __TwigTemplate_31dcd457c9d282e8eff8f5ff5ad6784c1a3bfa8d25a3a04b0fd2fd753626fe03 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/ajax.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conges/ajax.html.twig", 1);
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
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
        // line 43
        echo "
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tListe des congés
</h4>
<div>
\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\tstyle=\"margin-left: 600px; \" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_new");
        echo "\">

\t\tDemande un congé
\t</a>
\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\tid=\"voir\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_calendrier");
        echo "\">

\t\tVoir Calendrier
\t</a>
</div>

<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t<div class=\"w-full overflow-hidden \">
\t\t<table class=\"w-full whitespace-no-wrap\">
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
\t\t\t</thead>
\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
            // line 79
            echo "\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "employe", [], "any", false, false, false, 82), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "dateDemande", [], "any", false, false, false, 85), "format", [0 => "d/m/Y"], "method", false, false, false, 85), "html", null, true);
            echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "start", [], "any", false, false, false, 89), "format", [0 => "d/m/Y"], "method", false, false, false, 89), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "end", [], "any", false, false, false, 92), "format", [0 => "d/m/Y"], "method", false, false, false, 92), "html", null, true);
            echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "title", [], "any", false, false, false, 96), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"px-5 py-3 text-sm\">
\t\t\t\t\t\t";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "nbreJours", [], "any", false, false, false, 99), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 101
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 101), "sans décision"))) {
                // line 102
                echo "\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: #e7c800; font-weight: bold;\">
\t\t\t\t\t\t";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 103), "html", null, true);
                echo "

\t\t\t\t\t</td>
\t\t\t\t\t";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 106
$context["conge"], "statut", [], "any", false, false, false, 106), "acceptée"))) {
                // line 107
                echo "\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: green; font-weight: bold;\">
\t\t\t\t\t\t";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 108), "html", null, true);
                echo "
\t\t\t\t\t</td>
\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 112), "html", null, true);
                echo "
\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t\t<td class=\"px-3 py-3\">

\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm\">

\t\t\t\t\t\t\t";
            // line 120
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 121
                echo "\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\tvalue=\"valide \" name=\"";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\" aria-label=\"Accepter \"
\t\t\t\t\t\t\t\tonclick=\"myFunction1(this.name); \"
\t\t\t\t\t\t\t\thref=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_accepter", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 124)]), "html", null, true);
                echo "\" ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 125
$context["conge"], "statut", [], "any", false, false, false, 125), "sans décision"))) {
                    echo " style=\"visibility: visible; \" ";
                } else {
                    // line 126
                    echo "\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\tvalue=\"refuse \" name=\"";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 137), "html", null, true);
                echo "\" aria-label=\"Refuser \"
\t\t\t\t\t\t\t\tonclick=\"myFunction2(this.name); \"
\t\t\t\t\t\t\t\thref=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_refuser", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                echo "\" ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 140
$context["conge"], "statut", [], "any", false, false, false, 140), "sans décision"))) {
                    echo " style=\"visibility: visible; \" ";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z\">
\t\t\t\t\t\t\t\t\t</path>

\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\taria-label=\"Edit\" href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_updateList", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 158
$context["conge"], "statut", [], "any", false, false, false, 158), "sans décision"))) {
                echo " style=\"visibility: visible; \" ";
            } else {
                // line 159
                echo "\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
            }
            echo ">

\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\taria-label=\"Delete\" href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["conge"], "id", [], "any", false, false, false, 169)]), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 170
$context["conge"], "statut", [], "any", false, false, false, 170), "sans décision"))) {
                echo " style=\"visibility: visible; \" ";
            } else {
                // line 171
                echo "\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
            }
            echo ">

\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\td=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
\t\t\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>


\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t\t</tbody>

\t\t</table>
\t</div>
</div>
<!-- Showing  Pages -->
<div
\tclass=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\">
\t<span class=\"flex items-center col-span-3\">Showing 1-10 of 100</span>
\t<span class=\"col-span-2\"></span>
\t<!-- Pagination -->
\t<span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
\t\t<nav aria-label=\"Table navigation\">
\t\t\t<ul class=\"inline-flex items-center\">
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\taria-label=\"Previous\">
\t\t\t\t\t\t<svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\td=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
\t\t\t\t\t\t\t\tclip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\">1</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">2</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">3</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">4</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"px-3 py-1\">...</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">8</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">9</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\taria-label=\"Next\">
\t\t\t\t\t\t<svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\td=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
\t\t\t\t\t\t\t\tclip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</span>
</div>
<!--  End Showing  Pages -->
<script>
\tfunction myFunction1(id) {
\t\tdocument.getElementById(id).innerHTML = 'acceptée';

\t\t\$.ajax({
\t\t\tmethod: \"GET \",
\t\t\turl: \"";
        // line 253
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_accepter", ["id" => " +
\t\t\t\tid + "]);
        // line 254
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
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_refuser", ["id" => " +
\t\t\t\tid + "]);
        // line 273
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


</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conges/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 273,  473 => 272,  453 => 254,  450 => 253,  381 => 186,  359 => 171,  355 => 170,  352 => 169,  338 => 159,  334 => 158,  331 => 157,  326 => 154,  309 => 141,  305 => 140,  302 => 139,  297 => 137,  282 => 126,  278 => 125,  275 => 124,  270 => 122,  267 => 121,  265 => 120,  258 => 115,  252 => 112,  249 => 111,  243 => 108,  240 => 107,  238 => 106,  232 => 103,  229 => 102,  227 => 101,  222 => 99,  216 => 96,  209 => 92,  203 => 89,  196 => 85,  190 => 82,  185 => 79,  181 => 78,  155 => 55,  147 => 50,  138 => 43,  126 => 38,  122 => 37,  91 => 8,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
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
\t</a>
\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\tid=\"voir\" href=\"{{ path('conges_calendrier') }}\">

\t\tVoir Calendrier
\t</a>
</div>

<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t<div class=\"w-full overflow-hidden \">
\t\t<table class=\"w-full whitespace-no-wrap\">
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
\t\t\t</thead>
\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t{% for conge in conges %}
\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t{{conge.employe}}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t{{conge.dateDemande.format('d/m/Y')}}
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t{{conge.start.format('d/m/Y')}}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t{{conge.end.format('d/m/Y')}}
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"px-3 py-3 text-sm\">
\t\t\t\t\t\t{{conge.title}}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"px-5 py-3 text-sm\">
\t\t\t\t\t\t{{conge.nbreJours}}
\t\t\t\t\t</td>
\t\t\t\t\t{% if conge.statut== 'sans décision' %}
\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: #e7c800; font-weight: bold;\">
\t\t\t\t\t\t{{conge.statut}}

\t\t\t\t\t</td>
\t\t\t\t\t{% elseif conge.statut == 'acceptée' %}
\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: green; font-weight: bold;\">
\t\t\t\t\t\t{{conge.statut}}
\t\t\t\t\t</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t<td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t{{conge.statut}}
\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<td class=\"px-3 py-3\">

\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm\">

\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\tvalue=\"valide \" name=\"{{conge.id}}\" aria-label=\"Accepter \"
\t\t\t\t\t\t\t\tonclick=\"myFunction1(this.name); \"
\t\t\t\t\t\t\t\thref=\"{{ path('conges_accepter' , {'id' : conge.id})}}\" {% if
\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\tvalue=\"refuse \" name=\"{{conge.id}}\" aria-label=\"Refuser \"
\t\t\t\t\t\t\t\tonclick=\"myFunction2(this.name); \"
\t\t\t\t\t\t\t\thref=\"{{ path('conges_refuser' , {'id' : conge.id})}}\" {% if
\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z\">
\t\t\t\t\t\t\t\t\t</path>

\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\taria-label=\"Edit\" href=\"{{ path('conges_updateList', {'id': conge.id} ) }}\" {% if
\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>

\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\taria-label=\"Delete\" href=\"{{ path('conges_delete', {'id': conge.id})}}\" {% if
\t\t\t\t\t\t\t\t\tconge.statut=='sans décision' %} style=\"visibility: visible; \" {% else %}
\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>

\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\t\td=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
\t\t\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>


\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>

\t\t</table>
\t</div>
</div>
<!-- Showing  Pages -->
<div
\tclass=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\">
\t<span class=\"flex items-center col-span-3\">Showing 1-10 of 100</span>
\t<span class=\"col-span-2\"></span>
\t<!-- Pagination -->
\t<span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
\t\t<nav aria-label=\"Table navigation\">
\t\t\t<ul class=\"inline-flex items-center\">
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\taria-label=\"Previous\">
\t\t\t\t\t\t<svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\td=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
\t\t\t\t\t\t\t\tclip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button
\t\t\t\t\t\tclass=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\">1</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">2</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">3</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">4</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"px-3 py-1\">...</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">8</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">9</button>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\taria-label=\"Next\">
\t\t\t\t\t\t<svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\td=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
\t\t\t\t\t\t\t\tclip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</span>
</div>
<!--  End Showing  Pages -->
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


</script>
{% endblock %}", "conges/ajax.html.twig", "/home/hp/Téléchargements/GRH-master/templates/conges/ajax.html.twig");
    }
}
