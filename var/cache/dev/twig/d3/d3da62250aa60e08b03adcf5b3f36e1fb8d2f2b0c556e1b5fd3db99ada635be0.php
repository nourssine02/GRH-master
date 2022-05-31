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

/* mission/list.html.twig */
class __TwigTemplate_47716f4b063ec4bbc5699dbc94e17caefa3b44bcd0821c7a20f70d5f76231c2e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mission/list.html.twig", 1);
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

\t.datefin {
\t\tfont-weight: bold;
\t\tcolor: green;
\t}

\t.motif {
\t\tfont-weight: bold;
\t}

\tfont .modal-lg {
\t\tmax-width: 50% !important;
\t}
</style>
<!--  affiche alert -->
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
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
        // line 57
        echo "
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tListe des missions
</h4>
<div>
\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\tstyle=\"margin-left: 800px; \" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_new");
        echo "\">

\t\tAjouter
\t</a>


\t<br>
\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full whitespace-no-wrap\" id=\"example\">

\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employé</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">motif</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Date debut</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Date fin prevue</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Date fin</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 88
            echo "\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 89
                echo "\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "employe", [], "any", false, false, false, 93), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"motif\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "motif", [], "any", false, false, false, 98), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "dateDebut", [], "any", false, false, false, 101), "format", [0 => "d/m/Y"], "method", false, false, false, 101), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "datefinPrevue", [], "any", false, false, false, 106), "format", [0 => "d/m/Y"], "method", false, false, false, 106), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\" id=\"";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 110), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"datefin\" >";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "dateFin", [], "any", false, false, false, 111), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t";
                // line 115
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 \">

\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm \">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 121), "html", null, true);
                    echo " \" aria-label=\"Valider \"
\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t   href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                    echo " \" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["mission"], "dateFin", [], "any", false, false, false, 123), null))) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: visible;\" ";
                    } else {
                        echo " style=\"visibility: hidden;\" ";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\" w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 22 22 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_update", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 136)]), "html", null, true);
                    echo " \" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 137
$context["mission"], "dateFin", [], "any", false, false, false, 137), null))) {
                        echo " style=\"visibility: visible;\" ";
                    } else {
                        // line 138
                        echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                    }
                    echo ">


\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete \" href=\"";
                    // line 150
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                    echo " \" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 151
$context["mission"], "dateFin", [], "any", false, false, false, 151), null))) {
                        echo " style=\"visibility: visible;\" ";
                    } else {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                    }
                    echo " onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 20 20 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd \" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z
\t\t\t\t\t\t\t\t\t\t\t\t\t                                    \" clip-rule=\"evenodd \"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "


\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 170
                echo "\t\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "employe", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170)))) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "employe", [], "any", false, false, false, 175), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"motif\">";
                    // line 180
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "motif", [], "any", false, false, false, 180), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 183
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "dateDebut", [], "any", false, false, false, 183), "format", [0 => "d/m/Y"], "method", false, false, false, 183), "html", null, true);
                    echo "

\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 188
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "datefinPrevue", [], "any", false, false, false, 188), "format", [0 => "d/m/Y"], "method", false, false, false, 188), "html", null, true);
                    echo "

\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\" id=\"";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 192), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"datefin\" >";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "dateFin", [], "any", false, false, false, 193), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t";
                    // line 197
                    if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197)) {
                        // line 198
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 \">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm \">

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"";
                        // line 203
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 203), "html", null, true);
                        echo " \" aria-label=\"Valider \"
\t\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t\t   href=\"";
                        // line 205
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 205)]), "html", null, true);
                        echo " \" ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["mission"], "dateFin", [], "any", false, false, false, 205), null))) {
                            // line 206
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: visible;\" ";
                        } else {
                            echo " style=\"visibility: hidden;\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\" w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 22 22 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"";
                        // line 218
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_update", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 218)]), "html", null, true);
                        echo " \" ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                         // line 219
$context["mission"], "dateFin", [], "any", false, false, false, 219), null))) {
                            echo " style=\"visibility: visible;\" ";
                        } else {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                        }
                        echo ">


\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete \" href=\"";
                        // line 232
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 232)]), "html", null, true);
                        echo " \" ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                         // line 233
$context["mission"], "dateFin", [], "any", false, false, false, 233), null))) {
                            echo " style=\"visibility: visible;\" ";
                        } else {
                            // line 234
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" ";
                        }
                        echo " onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 20 20 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd \" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z
\t\t\t\t\t\t\t\t\t\t\t\t\t                                    \" clip-rule=\"evenodd \"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 246
                    echo "


\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                // line 251
                echo "\t\t\t\t\t\t";
            }
            // line 252
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>


\t<script>
\t\tfunction myFunction(id) { // alert(id);
\t\t\tvar date = new Date().toLocaleDateString();
\t\t\tdocument.getElementById(id).innerHTML = new Date().toLocaleDateString();
\t\t\t\$.ajax({
\t\t\t\tmethod: \"GET \",
\t\t\t\turl: \"";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission", ["id" => " +
\t\t\t\t\tid + "]);
        // line 268
        echo "\",
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tdate: date
\t\t\t\t},
\t\t\t\tcache: false,
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tconsole.log(data);
\t\t\t\t}


\t\t\t});

\t\t}

\t\tfunction validate(that) {
\t\t\tif (that.value == \"valide \") { // alert(\"check \");
\t\t\t\tdocument.getElementById(\"ifValid \").style.visibility = \"hidden \";

\t\t\t} else {
\t\t\t\tdocument.getElementById(\"ifValid \").style.visibility = \"visible \";
\t\t\t}
\t\t}



\t\t\$(document).ready(function() {
\t\t\t\$('#example').DataTable( {
\t\t\t\tdom: 'Bfrtip',
\t\t\t\tbuttons: [
\t\t\t\t\t'excelHtml5',
\t\t\t\t\t'csvHtml5',
\t\t\t\t\t'pdfHtml5',
\t\t\t\t\t'print'
\t\t\t\t]
\t\t\t} );
\t\t} );
\t</script>


</div>

\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>

\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js\"></script>
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
        return "mission/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 268,  493 => 267,  478 => 254,  471 => 252,  468 => 251,  461 => 246,  445 => 234,  441 => 233,  438 => 232,  422 => 220,  418 => 219,  415 => 218,  397 => 206,  393 => 205,  388 => 203,  381 => 198,  379 => 197,  372 => 193,  368 => 192,  361 => 188,  353 => 183,  347 => 180,  339 => 175,  333 => 171,  330 => 170,  322 => 164,  306 => 152,  302 => 151,  299 => 150,  283 => 138,  279 => 137,  276 => 136,  258 => 124,  254 => 123,  249 => 121,  242 => 116,  240 => 115,  233 => 111,  229 => 110,  222 => 106,  214 => 101,  208 => 98,  200 => 93,  194 => 89,  191 => 88,  187 => 87,  161 => 64,  152 => 57,  140 => 52,  136 => 51,  91 => 8,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
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

\t.datefin {
\t\tfont-weight: bold;
\t\tcolor: green;
\t}

\t.motif {
\t\tfont-weight: bold;
\t}

\tfont .modal-lg {
\t\tmax-width: 50% !important;
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
\tListe des missions
</h4>
<div>
\t<a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
\t\tstyle=\"margin-left: 800px; \" href=\"{{ path('mission_new')}}\">

\t\tAjouter
\t</a>


\t<br>
\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full whitespace-no-wrap\" id=\"example\">

\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employé</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">motif</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Date debut</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Date fin prevue</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Date fin</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t\t{% for mission in missions %}
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{mission.employe}}
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"motif\">{{mission.motif}}</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{mission.dateDebut.format('d/m/Y')}}

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{mission.datefinPrevue.format('d/m/Y')}}

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\" id=\"{{mission.id}}\">
\t\t\t\t\t\t\t\t\t<span class=\"datefin\" >{{mission.dateFin }}</span>
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 \">

\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm \">

\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"{{mission.id}} \" aria-label=\"Valider \"
\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t   href=\"{{path( 'mission' , { 'id' : mission.id})}} \" {% if mission.dateFin==null %}
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: visible;\" {% else %} style=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\" w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 22 22 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"{{ path('mission_update', { 'id': mission.id})}} \" {% if
\t\t\t\t\t\t\t\t\t\t\t\tmission.dateFin==null %} style=\"visibility: visible;\" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>


\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete \" href=\"{{ path( 'mission_delete', { 'id': mission.id})}} \" {% if
\t\t\t\t\t\t\t\t\t\t\t\tmission.dateFin==null %} style=\"visibility: visible;\" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %} onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 20 20 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd \" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z
\t\t\t\t\t\t\t\t\t\t\t\t\t                                    \" clip-rule=\"evenodd \"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% endif %}



\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t{% elseif is_granted('ROLE_USER')  %}
\t\t\t\t\t\t\t{% if app.user.name.id == mission.employe.id  %}
\t\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t{{mission.employe}}
\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"motif\">{{mission.motif}}</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t{{mission.dateDebut.format('d/m/Y')}}

\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t{{mission.datefinPrevue.format('d/m/Y')}}

\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\" id=\"{{mission.id}}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"datefin\" >{{mission.dateFin }}</span>
\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 \">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center space-x-4 text-sm \">

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t\t   value=\"valide \" name=\"{{mission.id}} \" aria-label=\"Valider \"
\t\t\t\t\t\t\t\t\t\t\t\t   onclick=\"myFunction(this.name); \"
\t\t\t\t\t\t\t\t\t\t\t\t   href=\"{{path( 'mission' , { 'id' : mission.id})}} \" {% if mission.dateFin==null %}
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: visible;\" {% else %} style=\"visibility: hidden;\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\" w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 22 22 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
\t\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Edit\" href=\"{{ path('mission_update', { 'id': mission.id})}} \" {% if
\t\t\t\t\t\t\t\t\t\t\t\t\tmission.dateFin==null %} style=\"visibility: visible;\" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %}>


\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray \"
\t\t\t\t\t\t\t\t\t\t\t\t   aria-label=\"Delete \" href=\"{{ path( 'mission_delete', { 'id': mission.id})}} \" {% if
\t\t\t\t\t\t\t\t\t\t\t\t\tmission.dateFin==null %} style=\"visibility: visible;\" {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"visibility: hidden;\" {% endif %} onclick=\"return confirm('es-tu sûr ?')\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5 \" aria-hidden=\"true \" fill=\"#CB997E \" viewbox=\"0 0 20 20 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd \" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z
\t\t\t\t\t\t\t\t\t\t\t\t\t                                    \" clip-rule=\"evenodd \"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t{% endif %}



\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% endfor %}

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>


\t<script>
\t\tfunction myFunction(id) { // alert(id);
\t\t\tvar date = new Date().toLocaleDateString();
\t\t\tdocument.getElementById(id).innerHTML = new Date().toLocaleDateString();
\t\t\t\$.ajax({
\t\t\t\tmethod: \"GET \",
\t\t\t\turl: \"{{ path( 'mission' , { 'id' : \" +
\t\t\t\t\tid + \" }) }}\",
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t\tdate: date
\t\t\t\t},
\t\t\t\tcache: false,
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tconsole.log(data);
\t\t\t\t}


\t\t\t});

\t\t}

\t\tfunction validate(that) {
\t\t\tif (that.value == \"valide \") { // alert(\"check \");
\t\t\t\tdocument.getElementById(\"ifValid \").style.visibility = \"hidden \";

\t\t\t} else {
\t\t\t\tdocument.getElementById(\"ifValid \").style.visibility = \"visible \";
\t\t\t}
\t\t}



\t\t\$(document).ready(function() {
\t\t\t\$('#example').DataTable( {
\t\t\t\tdom: 'Bfrtip',
\t\t\t\tbuttons: [
\t\t\t\t\t'excelHtml5',
\t\t\t\t\t'csvHtml5',
\t\t\t\t\t'pdfHtml5',
\t\t\t\t\t'print'
\t\t\t\t]
\t\t\t} );
\t\t} );
\t</script>


</div>

\t<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>

\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js\"></script>
{% endblock %}", "mission/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/mission/list.html.twig");
    }
}
