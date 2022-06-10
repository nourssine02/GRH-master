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

/* fiche_paie/list.html.twig */
class __TwigTemplate_d6e974a6c96dec623d7e95e1ad8ba226683bfecd2e06e2fb2d92c7edce7f2ff6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_paie/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

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

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<!-- Font Awesome -->
";
        // line 6
        echo "

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
    body {
        background-color: #f9fafb;
        height: 100%;
        width: 100%;
        /* overflow-y: hidden; */
    }

    strong {
        color: #9c6644;
    }

    .modal-lg {
        max-width: 50% !important;
    }
</style>
<!--  affiche alert -->
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 41
            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Fiche de Paie
</h4>
    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "

    <a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
        style=\"margin-left: 901px; \"
         href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_paie_new");
            echo "\" 
         >
        Ajouter
    </a>
";
        }
        // line 61
        echo "
    <br>
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">


                <thead>
                    <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                        <th class=\"px-4 py-3\">Mois de Paiement</th>
                        <th class=\"px-4 py-3\">Matricule</th>
                        <th class=\"px-4 py-3\">Nom Complet</th>
                        <th class=\"px-4 py-3\">Net a payer</th>
                        <th class=\"px-4 py-3\">Mode de Paiement</th>
                        <th class=\"px-4 py-3\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                    <tr class=\"text-gray-700 dark:text-gray-400\">
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 82
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 83
                echo "                    <tr class=\"text-gray-700 dark:text-gray-400\">


                        <td class=\"px-4 py-3 text-sm\">
                            ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "datePaiement", [], "any", false, false, false, 87), "format", [0 => "m-Y"], "method", false, false, false, 87), "html", null, true);
                echo "
                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 91), "matricule", [], "any", false, false, false, 91), "html", null, true);
                echo "
                        </td>


                        <td class=\"px-4 py-3 text-sm\">
                            ";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 96), "nom", [], "any", false, false, false, 96), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 96), "prenom", [], "any", false, false, false, 96), "html", null, true);
                echo "

                        </td>

                        <td class=\"px-4 py-3 text-sm\" style=\"color: brown; font-weight: bold;\">
                            ";
                // line 101
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "netAPayer", [], "any", false, false, false, 101), 3), "html", null, true);
                echo " DT

                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 106), "moyenPaiement", [], "any", false, false, false, 106), "html", null, true);
                echo "
                        </td>


                        <td class=\"px-4 py-3 \">

                            <div class=\"flex items-center space-x-4 text-sm \">

                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                   aria-label=\"Imprimer\" href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imprime", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                echo "\" >

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                        <path d=\"m12 18 4-5h-3V2h-2v11H8z\"></path>
                                        <path
                                                d=\"M19 9h-4v2h4v9H5v-9h4V9H5c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2z\">
                                        </path>
                                    </svg>
                                </a>
                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                   aria-label=\"Delete\"  href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\" onclick=\"return confirm('es-tu sûr ?')\">

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                        <path fill-rule=\"evenodd\"
                                              d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                              clip-rule=\"evenodd\"></path>
                                    </svg>
                                </a>

                            </div>
                        </td>


                    </tr>
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 140
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140)))) {
                    // line 141
                    echo "
                                <tr class=\"text-gray-700 dark:text-gray-400\">


                                    <td class=\"px-4 py-3 text-sm\">
                                        ";
                    // line 146
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "datePaiement", [], "any", false, false, false, 146), "format", [0 => "m-Y"], "method", false, false, false, 146), "html", null, true);
                    echo "
                                    </td>

                                    <td class=\"px-4 py-3 text-sm\">
                                        ";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 150), "matricule", [], "any", false, false, false, 150), "html", null, true);
                    echo "
                                    </td>


                                    <td class=\"px-4 py-3 text-sm\">
                                        ";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 155), "nom", [], "any", false, false, false, 155), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 155), "prenom", [], "any", false, false, false, 155), "html", null, true);
                    echo "

                                    </td>

                                    <td class=\"px-4 py-3 text-sm\" style=\"color: brown; font-weight: bold;\">
                                        ";
                    // line 160
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "netAPayer", [], "any", false, false, false, 160), 3), "html", null, true);
                    echo " DT

                                    </td>

                                    <td class=\"px-4 py-3 text-sm\">
                                        ";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fiche"], "employe", [], "any", false, false, false, 165), "moyenPaiement", [], "any", false, false, false, 165), "html", null, true);
                    echo "
                                    </td>


                                    <td class=\"px-4 py-3 \">

                                        <div class=\"flex items-center space-x-4 text-sm \">

                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Imprimer\" href=\"";
                    // line 174
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imprime", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 174)]), "html", null, true);
                    echo "\" >

                                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                                    <path d=\"m12 18 4-5h-3V2h-2v11H8z\"></path>
                                                    <path
                                                            d=\"M19 9h-4v2h4v9H5v-9h4V9H5c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2z\">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Delete\"  href=\"";
                    // line 184
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                    echo "\" onclick=\"return confirm('es-tu sûr ?')\">

                                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                    <path fill-rule=\"evenodd\"
                                                          d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                                          clip-rule=\"evenodd\"></path>
                                                </svg>
                                            </a>

                                        </div>
                                    </td>


                                </tr>

                            ";
                }
                // line 200
                echo "                        ";
            }
            // line 201
            echo "

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
                    </tr>

                    
                </tbody>
            </table>
        </div>
    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_paie/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 204,  365 => 201,  362 => 200,  343 => 184,  330 => 174,  318 => 165,  310 => 160,  300 => 155,  292 => 150,  285 => 146,  278 => 141,  275 => 140,  257 => 125,  244 => 115,  232 => 106,  224 => 101,  214 => 96,  206 => 91,  199 => 87,  193 => 83,  190 => 82,  186 => 81,  164 => 61,  156 => 56,  150 => 52,  148 => 51,  141 => 46,  129 => 41,  125 => 40,  89 => 6,  85 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} {% block title %}{% endblock %} {% block body %}

<!-- Font Awesome -->
{#
<link href=\"vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"> #}


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
    body {
        background-color: #f9fafb;
        height: 100%;
        width: 100%;
        /* overflow-y: hidden; */
    }

    strong {
        color: #9c6644;
    }

    .modal-lg {
        max-width: 50% !important;
    }
</style>
<!--  affiche alert -->
{% for message in app.flashes('info') %}
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
{% endfor %}

<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Fiche de Paie
</h4>
    {% if is_granted('ROLE_ADMIN') %}


    <a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
        style=\"margin-left: 901px; \"
         href=\"{{ path('fiche_paie_new')}}\" 
         >
        Ajouter
    </a>
{% endif %}

    <br>
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">


                <thead>
                    <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                        <th class=\"px-4 py-3\">Mois de Paiement</th>
                        <th class=\"px-4 py-3\">Matricule</th>
                        <th class=\"px-4 py-3\">Nom Complet</th>
                        <th class=\"px-4 py-3\">Net a payer</th>
                        <th class=\"px-4 py-3\">Mode de Paiement</th>
                        <th class=\"px-4 py-3\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                    <tr class=\"text-gray-700 dark:text-gray-400\">
                    {% for fiche in fiches %}
                        {% if is_granted('ROLE_ADMIN') %}
                    <tr class=\"text-gray-700 dark:text-gray-400\">


                        <td class=\"px-4 py-3 text-sm\">
                            {{fiche.datePaiement.format(\"m-Y\")}}
                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            {{fiche.employe.matricule}}
                        </td>


                        <td class=\"px-4 py-3 text-sm\">
                            {{fiche.employe.nom}} {{fiche.employe.prenom}}

                        </td>

                        <td class=\"px-4 py-3 text-sm\" style=\"color: brown; font-weight: bold;\">
                            {{fiche.netAPayer|number_format(3)}} DT

                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            {{fiche.employe.moyenPaiement}}
                        </td>


                        <td class=\"px-4 py-3 \">

                            <div class=\"flex items-center space-x-4 text-sm \">

                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                   aria-label=\"Imprimer\" href=\"{{ path('imprime',{'id': fiche.id }) }}\" >

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                        <path d=\"m12 18 4-5h-3V2h-2v11H8z\"></path>
                                        <path
                                                d=\"M19 9h-4v2h4v9H5v-9h4V9H5c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2z\">
                                        </path>
                                    </svg>
                                </a>
                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                   aria-label=\"Delete\"  href=\"{{ path('fiche_delete', {'id': fiche.id})}}\" onclick=\"return confirm('es-tu sûr ?')\">

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                        <path fill-rule=\"evenodd\"
                                              d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                              clip-rule=\"evenodd\"></path>
                                    </svg>
                                </a>

                            </div>
                        </td>


                    </tr>
                        {% elseif is_granted('ROLE_USER')  %}
                            {% if app.user.name.id == fiche.employe.id  %}

                                <tr class=\"text-gray-700 dark:text-gray-400\">


                                    <td class=\"px-4 py-3 text-sm\">
                                        {{fiche.datePaiement.format(\"m-Y\")}}
                                    </td>

                                    <td class=\"px-4 py-3 text-sm\">
                                        {{fiche.employe.matricule}}
                                    </td>


                                    <td class=\"px-4 py-3 text-sm\">
                                        {{fiche.employe.nom}} {{fiche.employe.prenom}}

                                    </td>

                                    <td class=\"px-4 py-3 text-sm\" style=\"color: brown; font-weight: bold;\">
                                        {{fiche.netAPayer|number_format(3)}} DT

                                    </td>

                                    <td class=\"px-4 py-3 text-sm\">
                                        {{fiche.employe.moyenPaiement}}
                                    </td>


                                    <td class=\"px-4 py-3 \">

                                        <div class=\"flex items-center space-x-4 text-sm \">

                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Imprimer\" href=\"{{ path('imprime',{'id': fiche.id }) }}\" >

                                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                                    <path d=\"m12 18 4-5h-3V2h-2v11H8z\"></path>
                                                    <path
                                                            d=\"M19 9h-4v2h4v9H5v-9h4V9H5c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2z\">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Delete\"  href=\"{{ path('fiche_delete', {'id': fiche.id})}}\" onclick=\"return confirm('es-tu sûr ?')\">

                                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                    <path fill-rule=\"evenodd\"
                                                          d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                                          clip-rule=\"evenodd\"></path>
                                                </svg>
                                            </a>

                                        </div>
                                    </td>


                                </tr>

                            {% endif %}
                        {% endif %}


                    {% endfor %}

                    </tr>

                    
                </tbody>
            </table>
        </div>
    </div>


    {% endblock %}", "fiche_paie/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/fiche_paie/list.html.twig");
    }
}
