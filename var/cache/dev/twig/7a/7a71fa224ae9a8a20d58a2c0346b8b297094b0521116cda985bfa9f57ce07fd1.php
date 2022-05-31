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

/* dates_conges/index.html.twig */
class __TwigTemplate_7b4fb9bd420aa0fa4398f133ec451a472a3c513caad50b2dc2cd36df9b3748fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dates_conges/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dates_conges/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dates_conges/index.html.twig", 1);
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
        echo "<style>
    .dt-button{
        /*background-color: #DDBEA9;*/
        background-color: #e7e7e7;
        color: black;
        border-radius: 50%;
        width: 50px;
    }
    [type=search]{
        width: 200px;
        border-radius: 200px;

        border-color: black;
        border: solid;

    }
</style>

    <h1 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">Congé annuel des employés pour l'année
        ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateJour"]) || array_key_exists("dateJour", $context) ? $context["dateJour"] : (function () { throw new RuntimeError('Variable "dateJour" does not exist.', 23, $this->source); })()), "Y"), "html", null, true);
        echo "</h1>

";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 26
            echo "<span style=\"color: red;\">Vous n'avez droit qu'à 21 jours de congé</span>
";
        }
        // line 28
        echo "
<!--  affiche alert -->
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

<br>
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_new");
        echo "\" style=\"margin-right: 890px;\" class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\">Ajouter</a>
    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_calendrier");
        echo "\" style=\"margin-right: 740px; margin-top: -40px; margin-left: 120px;\" class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\">Calendrier</a>

    &nbsp;

<div class=\"w-full rounded-lg shadow-xs\" style=\"margin-top: 50px\">
    <div class=\"w-full overflow-hidden \">
        <table class=\"w-full \" id=\"example\">
            <thead>
            <tr class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">

                <th class=\"px-4 py-3\">Employé</th>
                <th class=\"px-4 py-3\">Start</th>
                <th class=\"px-4 py-3\">End</th>
                <th class=\"px-4 py-3\">actions</th>
            </tr>
        </thead>
        <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates_conges"]) || array_key_exists("dates_conges", $context) ? $context["dates_conges"] : (function () { throw new RuntimeError('Variable "dates_conges" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dates_conge"]) {
            // line 58
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 59
                echo "            <tr class=\"text-gray-700 dark:text-gray-400\">
                <td class=\"px-4 py-3 text-sm\" >";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "employe", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "employe", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                <td class=\"px-4 py-3 text-sm\" >";
                // line 61
                ((twig_get_attribute($this->env, $this->source, $context["dates_conge"], "start", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "start", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                <td class=\"px-4 py-3 text-sm\" >";
                // line 62
                ((twig_get_attribute($this->env, $this->source, $context["dates_conge"], "end", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "end", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>

                <td class=\"px-4 py-3 \">

                    <div class=\"flex items-center space-x-4 text-sm \">

                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dates_conge"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\">
                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                <path
                                        d=\"M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z\">
                                </path>
                                <path d=\"M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z\"></path>
                            </svg>
                        </a>
                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dates_conge"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\">

                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                <path
                                        d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                </path>
                            </svg>
                        </a>
                        ";
                // line 86
                echo twig_include($this->env, $context, "dates_conges/_delete_form.html.twig");
                echo "

                    </div>
                </td>
            </tr>
            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 92
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "employe", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)))) {
                    // line 93
                    echo "                     <tr class=\"text-gray-700 dark:text-gray-400\">
                <td class=\"px-4 py-3 text-sm\" >";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "employe", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "employe", [], "any", false, false, false, 94), "prenom", [], "any", false, false, false, 94), "html", null, true);
                    echo "</td>
                <td class=\"px-4 py-3 text-sm\" >";
                    // line 95
                    ((twig_get_attribute($this->env, $this->source, $context["dates_conge"], "start", [], "any", false, false, false, 95)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "start", [], "any", false, false, false, 95), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "</td>
                <td class=\"px-4 py-3 text-sm\" >";
                    // line 96
                    ((twig_get_attribute($this->env, $this->source, $context["dates_conge"], "end", [], "any", false, false, false, 96)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dates_conge"], "end", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "</td>

                <td class=\"px-4 py-3 \">

                    <div class=\"flex items-center space-x-4 text-sm \">

                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dates_conge"], "id", [], "any", false, false, false, 103)]), "html", null, true);
                    echo "\">
                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                <path
                                        d=\"M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z\">
                                </path>
                                <path d=\"M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z\"></path>
                            </svg>
                        </a>
                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dates_conge"], "id", [], "any", false, false, false, 112)]), "html", null, true);
                    echo "\">

                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                <path
                                        d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                </path>
                            </svg>
                        </a>
                        ";
                    // line 120
                    echo twig_include($this->env, $context, "dates_conges/_delete_form.html.twig");
                    echo "

                    </div>
                </td>
            </tr>
                ";
                }
                // line 126
                echo "            ";
            }
            // line 127
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 128
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dates_conge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "        </tbody>
    </table>



</div>
</div>
    <script>
        \$(document).ready(function() {
            \$('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                    'print'
                ]
            } );
        } );
    </script>

    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>

    <script src=\"https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dates_conges/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 133,  299 => 128,  286 => 127,  283 => 126,  274 => 120,  263 => 112,  251 => 103,  241 => 96,  237 => 95,  231 => 94,  228 => 93,  225 => 92,  216 => 86,  205 => 78,  193 => 69,  183 => 62,  179 => 61,  173 => 60,  170 => 59,  167 => 58,  149 => 57,  129 => 40,  125 => 39,  120 => 36,  108 => 31,  104 => 30,  100 => 28,  96 => 26,  94 => 25,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .dt-button{
        /*background-color: #DDBEA9;*/
        background-color: #e7e7e7;
        color: black;
        border-radius: 50%;
        width: 50px;
    }
    [type=search]{
        width: 200px;
        border-radius: 200px;

        border-color: black;
        border: solid;

    }
</style>

    <h1 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">Congé annuel des employés pour l'année
        {{ dateJour|date(\"Y\") }}</h1>

{% if is_granted('ROLE_USER')  %}
<span style=\"color: red;\">Vous n'avez droit qu'à 21 jours de congé</span>
{% endif %}

<!--  affiche alert -->
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

    </div>
{% endfor %}


<br>
    <a href=\"{{ path('dates_conges_new') }}\" style=\"margin-right: 890px;\" class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\">Ajouter</a>
    <a href=\"{{ path('dates_conges_calendrier') }}\" style=\"margin-right: 740px; margin-top: -40px; margin-left: 120px;\" class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\">Calendrier</a>

    &nbsp;

<div class=\"w-full rounded-lg shadow-xs\" style=\"margin-top: 50px\">
    <div class=\"w-full overflow-hidden \">
        <table class=\"w-full \" id=\"example\">
            <thead>
            <tr class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">

                <th class=\"px-4 py-3\">Employé</th>
                <th class=\"px-4 py-3\">Start</th>
                <th class=\"px-4 py-3\">End</th>
                <th class=\"px-4 py-3\">actions</th>
            </tr>
        </thead>
        <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
        {% for dates_conge in dates_conges %}
            {% if is_granted('ROLE_ADMIN') %}
            <tr class=\"text-gray-700 dark:text-gray-400\">
                <td class=\"px-4 py-3 text-sm\" >{{ dates_conge.employe.nom }} {{ dates_conge.employe.prenom }}</td>
                <td class=\"px-4 py-3 text-sm\" >{{ dates_conge.start ? dates_conge.start|date('Y-m-d') : '' }}</td>
                <td class=\"px-4 py-3 text-sm\" >{{ dates_conge.end ? dates_conge.end|date('Y-m-d') : '' }}</td>

                <td class=\"px-4 py-3 \">

                    <div class=\"flex items-center space-x-4 text-sm \">

                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"{{ path('dates_conges_show', {'id': dates_conge.id}) }}\">
                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                <path
                                        d=\"M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z\">
                                </path>
                                <path d=\"M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z\"></path>
                            </svg>
                        </a>
                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"{{ path('dates_conges_edit', {'id': dates_conge.id}) }}\">

                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                <path
                                        d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                </path>
                            </svg>
                        </a>
                        {{ include('dates_conges/_delete_form.html.twig') }}

                    </div>
                </td>
            </tr>
            {% elseif is_granted('ROLE_USER')  %}
                {% if app.user.name.id == dates_conge.employe.id %}
                     <tr class=\"text-gray-700 dark:text-gray-400\">
                <td class=\"px-4 py-3 text-sm\" >{{ dates_conge.employe.nom }} {{ dates_conge.employe.prenom }}</td>
                <td class=\"px-4 py-3 text-sm\" >{{ dates_conge.start ? dates_conge.start|date('Y-m-d') : '' }}</td>
                <td class=\"px-4 py-3 text-sm\" >{{ dates_conge.end ? dates_conge.end|date('Y-m-d') : '' }}</td>

                <td class=\"px-4 py-3 \">

                    <div class=\"flex items-center space-x-4 text-sm \">

                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"{{ path('dates_conges_show', {'id': dates_conge.id}) }}\">
                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                <path
                                        d=\"M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z\">
                                </path>
                                <path d=\"M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z\"></path>
                            </svg>
                        </a>
                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                           aria-label=\"Edit\" href=\"{{ path('dates_conges_edit', {'id': dates_conge.id}) }}\">

                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                <path
                                        d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                </path>
                            </svg>
                        </a>
                        {{ include('dates_conges/_delete_form.html.twig') }}

                    </div>
                </td>
            </tr>
                {% endif %}
            {% endif %}
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>

        {% endfor %}
        </tbody>
    </table>



</div>
</div>
    <script>
        \$(document).ready(function() {
            \$('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                    'print'
                ]
            } );
        } );
    </script>

    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>

    <script src=\"https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js\"></script>
{% endblock %}
", "dates_conges/index.html.twig", "/home/hp/Téléchargements/GRH-master/templates/dates_conges/index.html.twig");
    }
}
