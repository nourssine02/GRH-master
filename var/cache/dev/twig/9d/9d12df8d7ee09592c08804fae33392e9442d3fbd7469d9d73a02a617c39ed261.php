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

/* employe/list.html.twig */
class __TwigTemplate_9a45c5e6b344fee23cf116ff661e682a9652d819b776ad6b04cfb7f7722c7328 extends Template
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

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{% endblock %}
{% block body %}

<!-- Font Awesome -->
{#
<link href=\"vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"> #}


<style>

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
        min-width: 80% !important;
        min-height: 80% !important;
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
    Liste des employés
</h4>
<div>
    <a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
        style=\"margin-left: 800px; \" href=\"{{ path('employe_new')}}\">

        Ajouter
    </a>

    <br>
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">


                <thead>
                    <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                        <th class=\"px-4 py-3\">Matricule</th>
                        <th class=\"px-4 py-3\">Nom Complet</th>
                        <th class=\"px-4 py-3\">Departement</th>
                        <th class=\"px-4 py-3\">Service</th>
                        <th class=\"px-4 py-3\">Titre</th>
                        <th class=\"px-4 py-3\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                    {% for employe in employes %}
                    <tr class=\"text-gray-700 dark:text-gray-400\">
                        <td class=\"px-4 py-3 text-sm\">
                            {{employe.matricule}}
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"flex items-center text-sm\">
                                <!--les Employés-->
                                <div>
                                    <p class=\"font-semibold\">{{employe.nom}}
                                        {{employe.prenom}}
                                    </p>

                                </div>
                            </div>
                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            {{employe.departement}}
                        </td>
                        <td class=\"px-4 py-3 text-sm\">
                            {{employe.service}}
                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            {{employe.titre}}
                        </td>


                        <td class=\"px-4 py-3\">

                            <div class=\"flex items-center space-x-4 text-sm\">
                                <button @click=\"openModal\"
                                    class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                    aria-label=\"Voir Detail\"
                                    data-target=\"exampleModal5{{employe.id}}\">

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                        <path
                                            d=\"M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z\">
                                        </path>
                                        <path d=\"M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z\"></path>
                                    </svg>

                                </button>


                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                    aria-label=\"Edit\" href=\"{{ path('employe_update', {'id': employe.id})}}\">

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                        <path
                                            d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                        </path>
                                    </svg>
                                </a>
                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                    aria-label=\"Delete\" href=\"{{ path('employe_delete', {'id': employe.id})}}\" onclick=\"return confirm('es-tu sûr ?')\">


                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                        <path fill-rule=\"evenodd\"
                                            d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                            clip-rule=\"evenodd\"></path>
                                    </svg>
                                </a>

                            </div>
                        </td>

                        <!-- Modal backdrop. This what you want to place close to the closing body tag -->
                        <div class=\"modal fade --ax-modal-max-height\"  id=\"exampleModal5{{employe.id}}\"  data-ax=\"modal\" style=\"min-height: 850px; zoom: 90%; min-width: 50%; margin-top: -60px; overflow: hidden;\" >
                            <div class=\"modal-dialog\">

                                <div class=\"modal-content\" id='sectionAimprimer'>
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">
                                            Informations d'employé :</h5>
                                    </div>
                                    <div class=\"modal-body\" >
                                        <div class=\"matricule\">
                                            <p>
                                                <strong>Matricule:</strong>


                                                <span>{{employe.matricule}}</span>
                                            </p>

                                        </div>
                                        <div class=\"nom\">
                                            <p>
                                                <strong>Nom Complet:</strong>

                                                <span>{{employe.nom}}
                                                    {{employe.prenom}}</span>

                                            </p>


                                        </div>
                                        <div class=\"adresse\">

                                            <p>
                                                <strong>Adresse:</strong>


                                                <span>{{employe.adresse}}</span>

                                            </p>


                                        </div>
                                        <div class=\"cin\">

                                            <p>
                                                <strong>Cin:</strong>


                                                <span>{{employe.cin}}</span>

                                            </p>

                                        </div>

                                        <div class=\"dateNais\">

                                            <p>
                                                <strong>date de naissance:</strong>
                                                <span>{{employe.dateNais.format('d/m/Y')}}</span>


                                            </p>


                                        </div>
                                        <div class=\"situationFamilial\">

                                            <p>
                                                <strong>Situation Familial:
                                                </strong>
                                                <span>{{employe.situationFamilial}}
                                                </span>
                                                &nbsp;
                                                {% if employe.nbreEnfants != null %}
                                                <strong>Nombre des enfants:
                                                </strong>
                                                <span>{{employe.nbreEnfants}}
                                                </span>
                                                {% endif %}

                                            </p>


                                        </div>
                                        <div class=\"email\">

                                            <p>
                                                <strong>Email:</strong>

                                                <span>{{employe.email}}</span>

                                            </p>


                                        </div>
                                        <div class=\"tel\">

                                            <p>
                                                <strong>Telephone:</strong>

                                                <span>
                                                    {{employe.telephone}}</span>

                                            </p>
                                        </div>
                                        <div class=\"departement\">
                                            <p>
                                                <strong>Departement:</strong>

                                                <span>{{employe.departement}}</span>
                                            </p>
                                        </div>
                                        <div class=\"service\">
                                            <p>
                                                <strong>Service:</strong>

                                                <span>{{employe.service}}</span>
                                            </p>
                                        </div>
                                        <div class=\"titre\">
                                            <p>
                                                <strong>Titre:</strong>

                                                <span>{{employe.titre}}</span>
                                            </p>
                                        </div>

                                        <div class=\"cnss\">

                                            <p>
                                                <strong>Cnss:</strong>


                                                <span>{{employe.cnss}}</span>
                                            </p>

                                        </div>


                                        <div class=\"dateEmb\">

                                            <p>
                                                <strong>date d' embauche:</strong>

                                                <span>
                                                    {{employe.dateEmbauche.format('d/m/Y')}}</span>
                                            </p>
                                        </div>
                                        <div class=\"categorie\">
                                            <p>
                                                <strong>Categorie:</strong>


                                                <span>
                                                    {{employe.categorie}}</span>
                                            </p>
                                        </div>
                                        <div class=\"echelon\">

                                            <p>
                                                <strong>Echelon:</strong>

                                                <span>
                                                    {{employe.echelon}}</span>

                                            </p>

                                        </div>
                                        <div class=\"typeContrat\">

                                            <p>
                                                <strong>Type de Contrat:</strong>

                                                <span>
                                                    {{employe.typeContrat}}</span>


                                            </p>
                                        </div>
                                        <div class=\"salaireBase\">
                                            <p>
                                                <strong>Salaire de Base:</strong>

                                                <span>
                                                    {{employe.salaireBase}}</span>
                                            </p>
                                        </div>
                                        <div class=\"typePaie\">
                                            <p>
                                                <strong>Type de Paie:</strong>

                                                <span>
                                                    {{employe.typePaie}}</span>
                                            </p>

                                        </div>

                                        <div class=\"moyenPaiement\">
                                            <p>
                                                <strong>Moyen de Paiement:</strong>
                                                <span>{{employe.moyenPaiement}}</span>

                                            </p>
                                        </div>
                                        <div class=\"NomEtCompteBancaire\">
                                            <p>
                                                {% if employe.moyenPaiement == 'Virement' %}
                                                <strong>Nom du Banque :</strong>
                                                <span>{{employe.nomBanque}}</span>
                                                &nbsp;
                                                <strong>Numero Compte :</strong>

                                                <span>{{employe.numCompteBanc}}</span>

                                                {% endif %}
                                            </p>
                                        </div>
                                    </div>

                                    <div class=\"modal-footer\" >
                                        <button data-dismiss=\"exampleModal5\"  class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                                        <button type=\"button\" class=\"btn btn-small success\"
                                                onclick=\"imprimer('sectionAimprimer')\">Imprimer</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- End of modal backdrop \t-->
                    </tr>
                    {% endfor %}
                    </tr>
                </tbody>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Showing  Pages -->
    <div
        class=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\">
        <span class=\"flex items-center col-span-3\">Showing 1-10 of 100</span>
        <span class=\"col-span-2\"></span>
        <!-- Pagination -->
        <span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
            <nav aria-label=\"Table navigation\">
                <ul class=\"inline-flex items-center\">
                    <li>
                        <button class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
                            aria-label=\"Previous\">
                            <svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
                                <path
                                    d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
                                    clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button
                            class=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\">1</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">2</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">3</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">4</button>
                    </li>
                    <li>
                        <span class=\"px-3 py-1\">...</span>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">8</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">9</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
                            aria-label=\"Next\">
                            <svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
                                <path
                                    d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
                                    clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </nav>
        </span>
    </div>
    <!--  End Showing  Pages -->
    <script>
        function imprimer(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }


    </script>

    {% endblock %}", "employe/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/employe/list.html.twig");
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

    // line 2

    public function getTemplateName()
    {
        return "employe/list.html.twig";
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
        min-width: 80% !important;
        min-height: 80% !important;
    }
</style>
<!--  affiche alert -->
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
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
        // line 35
        echo "
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Liste des employés
</h4>
<div>
    <a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
        style=\"margin-left: 800px; \" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_new");
        echo "\">

        Ajouter
    </a>

    <br>
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">


                <thead>
                    <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                        <th class=\"px-4 py-3\">Matricule</th>
                        <th class=\"px-4 py-3\">Nom Complet</th>
                        <th class=\"px-4 py-3\">Departement</th>
                        <th class=\"px-4 py-3\">Service</th>
                        <th class=\"px-4 py-3\">Titre</th>
                        <th class=\"px-4 py-3\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 66
            echo "                    <tr class=\"text-gray-700 dark:text-gray-400\">
                        <td class=\"px-4 py-3 text-sm\">
                            ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "matricule", [], "any", false, false, false, 68), "html", null, true);
            echo "
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"flex items-center text-sm\">
                                <!--les Employés-->
                                <div>
                                    <p class=\"font-semibold\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 74), "html", null, true);
            echo "
                                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "prenom", [], "any", false, false, false, 75), "html", null, true);
            echo "
                                    </p>

                                </div>
                            </div>
                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "departement", [], "any", false, false, false, 83), "html", null, true);
            echo "
                        </td>
                        <td class=\"px-4 py-3 text-sm\">
                            ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "service", [], "any", false, false, false, 86), "html", null, true);
            echo "
                        </td>

                        <td class=\"px-4 py-3 text-sm\">
                            ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "titre", [], "any", false, false, false, 90), "html", null, true);
            echo "
                        </td>


                        <td class=\"px-4 py-3\">

                            <div class=\"flex items-center space-x-4 text-sm\">
                                <button @click=\"openModal\"
                                    class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                    aria-label=\"Voir Detail\"
                                    data-target=\"exampleModal5";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "\">

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 22 22\">
                                        <path
                                            d=\"M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z\">
                                        </path>
                                        <path d=\"M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z\"></path>
                                    </svg>

                                </button>


                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                    aria-label=\"Edit\" href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_update", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\">

                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                        <path
                                            d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                        </path>
                                    </svg>
                                </a>
                                <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                    aria-label=\"Delete\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\" onclick=\"return confirm('es-tu sûr ?')\">


                                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                        <path fill-rule=\"evenodd\"
                                            d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                            clip-rule=\"evenodd\"></path>
                                    </svg>
                                </a>

                            </div>
                        </td>

                        <!-- Modal backdrop. This what you want to place close to the closing body tag -->
                        <div class=\"modal fade --ax-modal-max-height\"  id=\"exampleModal5";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 136), "html", null, true);
            echo "\"  data-ax=\"modal\" style=\"min-height: 850px; zoom: 90%; min-width: 50%; margin-top: -60px; overflow: hidden;\" >
                            <div class=\"modal-dialog\">

                                <div class=\"modal-content\" id='sectionAimprimer'>
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">
                                            Informations d'employé :</h5>
                                    </div>
                                    <div class=\"modal-body\" >
                                        <div class=\"matricule\">
                                            <p>
                                                <strong>Matricule:</strong>


                                                <span>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "matricule", [], "any", false, false, false, 150), "html", null, true);
            echo "</span>
                                            </p>

                                        </div>
                                        <div class=\"nom\">
                                            <p>
                                                <strong>Nom Complet:</strong>

                                                <span>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 158), "html", null, true);
            echo "
                                                    ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "prenom", [], "any", false, false, false, 159), "html", null, true);
            echo "</span>

                                            </p>


                                        </div>
                                        <div class=\"adresse\">

                                            <p>
                                                <strong>Adresse:</strong>


                                                <span>";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "adresse", [], "any", false, false, false, 171), "html", null, true);
            echo "</span>

                                            </p>


                                        </div>
                                        <div class=\"cin\">

                                            <p>
                                                <strong>Cin:</strong>


                                                <span>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "cin", [], "any", false, false, false, 183), "html", null, true);
            echo "</span>

                                            </p>

                                        </div>

                                        <div class=\"dateNais\">

                                            <p>
                                                <strong>date de naissance:</strong>
                                                <span>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "dateNais", [], "any", false, false, false, 193), "format", [0 => "d/m/Y"], "method", false, false, false, 193), "html", null, true);
            echo "</span>


                                            </p>


                                        </div>
                                        <div class=\"situationFamilial\">

                                            <p>
                                                <strong>Situation Familial:
                                                </strong>
                                                <span>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "situationFamilial", [], "any", false, false, false, 205), "html", null, true);
            echo "
                                                </span>
                                                &nbsp;
                                                ";
            // line 208
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["employe"], "nbreEnfants", [], "any", false, false, false, 208), null))) {
                // line 209
                echo "                                                <strong>Nombre des enfants:
                                                </strong>
                                                <span>";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nbreEnfants", [], "any", false, false, false, 211), "html", null, true);
                echo "
                                                </span>
                                                ";
            }
            // line 214
            echo "
                                            </p>


                                        </div>
                                        <div class=\"email\">

                                            <p>
                                                <strong>Email:</strong>

                                                <span>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "email", [], "any", false, false, false, 224), "html", null, true);
            echo "</span>

                                            </p>


                                        </div>
                                        <div class=\"tel\">

                                            <p>
                                                <strong>Telephone:</strong>

                                                <span>
                                                    ";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "telephone", [], "any", false, false, false, 236), "html", null, true);
            echo "</span>

                                            </p>
                                        </div>
                                        <div class=\"departement\">
                                            <p>
                                                <strong>Departement:</strong>

                                                <span>";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "departement", [], "any", false, false, false, 244), "html", null, true);
            echo "</span>
                                            </p>
                                        </div>
                                        <div class=\"service\">
                                            <p>
                                                <strong>Service:</strong>

                                                <span>";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "service", [], "any", false, false, false, 251), "html", null, true);
            echo "</span>
                                            </p>
                                        </div>
                                        <div class=\"titre\">
                                            <p>
                                                <strong>Titre:</strong>

                                                <span>";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "titre", [], "any", false, false, false, 258), "html", null, true);
            echo "</span>
                                            </p>
                                        </div>

                                        <div class=\"cnss\">

                                            <p>
                                                <strong>Cnss:</strong>


                                                <span>";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "cnss", [], "any", false, false, false, 268), "html", null, true);
            echo "</span>
                                            </p>

                                        </div>


                                        <div class=\"dateEmb\">

                                            <p>
                                                <strong>date d' embauche:</strong>

                                                <span>
                                                    ";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "dateEmbauche", [], "any", false, false, false, 280), "format", [0 => "d/m/Y"], "method", false, false, false, 280), "html", null, true);
            echo "</span>
                                            </p>
                                        </div>
                                        <div class=\"categorie\">
                                            <p>
                                                <strong>Categorie:</strong>


                                                <span>
                                                    ";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "categorie", [], "any", false, false, false, 289), "html", null, true);
            echo "</span>
                                            </p>
                                        </div>
                                        <div class=\"echelon\">

                                            <p>
                                                <strong>Echelon:</strong>

                                                <span>
                                                    ";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "echelon", [], "any", false, false, false, 298), "html", null, true);
            echo "</span>

                                            </p>

                                        </div>
                                        <div class=\"typeContrat\">

                                            <p>
                                                <strong>Type de Contrat:</strong>

                                                <span>
                                                    ";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "typeContrat", [], "any", false, false, false, 309), "html", null, true);
            echo "</span>


                                            </p>
                                        </div>
                                        <div class=\"salaireBase\">
                                            <p>
                                                <strong>Salaire de Base:</strong>

                                                <span>
                                                    ";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "salaireBase", [], "any", false, false, false, 319), "html", null, true);
            echo "</span>
                                            </p>
                                        </div>
                                        <div class=\"typePaie\">
                                            <p>
                                                <strong>Type de Paie:</strong>

                                                <span>
                                                    ";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "typePaie", [], "any", false, false, false, 327), "html", null, true);
            echo "</span>
                                            </p>

                                        </div>

                                        <div class=\"moyenPaiement\">
                                            <p>
                                                <strong>Moyen de Paiement:</strong>
                                                <span>";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "moyenPaiement", [], "any", false, false, false, 335), "html", null, true);
            echo "</span>

                                            </p>
                                        </div>
                                        <div class=\"NomEtCompteBancaire\">
                                            <p>
                                                ";
            // line 341
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["employe"], "moyenPaiement", [], "any", false, false, false, 341), "Virement"))) {
                // line 342
                echo "                                                <strong>Nom du Banque :</strong>
                                                <span>";
                // line 343
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nomBanque", [], "any", false, false, false, 343), "html", null, true);
                echo "</span>
                                                &nbsp;
                                                <strong>Numero Compte :</strong>

                                                <span>";
                // line 347
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "numCompteBanc", [], "any", false, false, false, 347), "html", null, true);
                echo "</span>

                                                ";
            }
            // line 350
            echo "                                            </p>
                                        </div>
                                    </div>

                                    <div class=\"modal-footer\" >
                                        <button data-dismiss=\"exampleModal5\"  class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                                        <button type=\"button\" class=\"btn btn-small success\"
                                                onclick=\"imprimer('sectionAimprimer')\">Imprimer</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- End of modal backdrop \t-->
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "                    </tr>
                </tbody>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Showing  Pages -->
    <div
        class=\"grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800\">
        <span class=\"flex items-center col-span-3\">Showing 1-10 of 100</span>
        <span class=\"col-span-2\"></span>
        <!-- Pagination -->
        <span class=\"flex col-span-4 mt-2 sm:mt-auto sm:justify-end\">
            <nav aria-label=\"Table navigation\">
                <ul class=\"inline-flex items-center\">
                    <li>
                        <button class=\"px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple\"
                            aria-label=\"Previous\">
                            <svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
                                <path
                                    d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\"
                                    clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button
                            class=\"px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple\">1</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">2</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">3</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">4</button>
                    </li>
                    <li>
                        <span class=\"px-3 py-1\">...</span>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">8</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple\">9</button>
                    </li>
                    <li>
                        <button class=\"px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple\"
                            aria-label=\"Next\">
                            <svg class=\"w-4 h-4 fill-current\" aria-hidden=\"true\" viewbox=\"0 0 20 20\">
                                <path
                                    d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\"
                                    clip-rule=\"evenodd\" fill-rule=\"evenodd\"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </nav>
        </span>
    </div>
    <!--  End Showing  Pages -->
    <script>
        function imprimer(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }


    </script>

    ";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 367,  562 => 350,  556 => 347,  549 => 343,  546 => 342,  544 => 341,  535 => 335,  524 => 327,  513 => 319,  500 => 309,  486 => 298,  474 => 289,  462 => 280,  447 => 268,  434 => 258,  424 => 251,  414 => 244,  403 => 236,  388 => 224,  376 => 214,  370 => 211,  366 => 209,  364 => 208,  358 => 205,  343 => 193,  330 => 183,  315 => 171,  300 => 159,  296 => 158,  285 => 150,  268 => 136,  251 => 122,  239 => 113,  223 => 100,  210 => 90,  203 => 86,  197 => 83,  186 => 75,  182 => 74,  173 => 68,  169 => 66,  165 => 65,  139 => 42,  130 => 35,  118 => 30,  114 => 29,  91 => 8,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
