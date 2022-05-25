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

/* dashboard/index.html.twig */
class __TwigTemplate_125ab863072dbf297483a328b8bff2bf01adc06ca9f514b5e0d247b3f15d39c5 extends Template
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
{#    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />#}

{#    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>#}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js\" integrity=\"sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Cards -->
<div class=\"grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4\">
    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500\">
            <svg class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path
                    d=\"M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z\">
                </path>
            </svg>
        </div>
        <div>
            <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                Total Employes
            </p>
            <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
                {{nbrEmp}}
            </p>
        </div>
    </div>

    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                style=\"fill: rgb(20, 10, 165);\">
                <path
                    d=\"m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z\">
                </path>
            </svg>
        </div>
        <div>
<a {% if is_granted('ROLE_ADMIN') %} href=\"{{ path('departements_list')}}\" {% endif %}>

                <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                    Departement
                </p>
                <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
                    {{nbrDepart}}
                </p>
            </a>
        </div>
    </div>
    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                style=\"fill: rgba(0, 0, 0, 1);\">
                <path
                    d=\"M17.726 13.02 14 16H9v-1h4.065a.5.5 0 0 0 .416-.777l-.888-1.332A1.995 1.995 0 0 0 10.93 12H3a1 1 0 0 0-1 1v6a2 2 0 0 0 2 2h9.639a3 3 0 0 0 2.258-1.024L22 13l-1.452-.484a2.998 2.998 0 0 0-2.822.504zm1.532-5.63c.451-.465.73-1.108.73-1.818s-.279-1.353-.73-1.818A2.447 2.447 0 0 0 17.494 3S16.25 2.997 15 4.286C13.75 2.997 12.506 3 12.506 3a2.45 2.45 0 0 0-1.764.753c-.451.466-.73 1.108-.73 1.818s.279 1.354.73 1.818L15 12l4.258-4.61z\">
                </path>
            </svg>
        </div>
        <div>
<a {% if is_granted('ROLE_ADMIN') %} href=\"{{ path('services_list')}}\" {% endif %}>

            <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                Service
            </p>
            <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
                5
            </p>
            </a>
        </div>
    </div>
    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                style=\"fill: rgb(12, 149, 23);\">
                <path
                    d=\"m2.394 13.742 4.743 3.62 7.616-8.704-1.506-1.316-6.384 7.296-3.257-2.486zm19.359-5.084-1.506-1.316-6.369 7.279-.753-.602-1.25 1.562 2.247 1.798z\">
                </path>
            </svg>
        </div>
        <div>
            <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                Les Taches à traiter
            </p>
            <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
               {{nbrMi}}
            </p>
        </div>
    </div>
</div>



    <div class=\"container\">
        <h1>Statistiques</h1>
        <br>
        <canvas id=\"myChart\" width=\"400\" height=\"100\"></canvas>

    </div>
    <script>
        let chart = document.getElementById('myChart');

        let graph = new Chart(chart ,{
            type:\"line\",
            data:{
                labels: ['Février' ,'Mars','Avril', 'Mai' ,'Juin' ],
                datasets: [{
                    label: \"tâches effectuées \",
                    data:[ 1,2,3,4,5,6,7,8,9,10],
                    backgroundColor: 'rgb(75, 192, 192)',
                    tension: 0.3,
                    fill : false
                }]

            }
        })


    </script>

{% endblock %}", "dashboard/index.html.twig", "/home/hp/Téléchargements/GRH-master/templates/dashboard/index.html.twig");
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
        return "dashboard/index.html.twig";
    }

    // line 4

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 8
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js\" integrity=\"sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Cards -->
<div class=\"grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4\">
    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500\">
            <svg class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path
                    d=\"M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z\">
                </path>
            </svg>
        </div>
        <div>
            <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                Total Employes
            </p>
            <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
                ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["nbrEmp"]) || array_key_exists("nbrEmp", $context) ? $context["nbrEmp"] : (function () { throw new RuntimeError('Variable "nbrEmp" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "
            </p>
        </div>
    </div>

    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                style=\"fill: rgb(20, 10, 165);\">
                <path
                    d=\"m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z\">
                </path>
            </svg>
        </div>
        <div>
<a ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departements_list");
            echo "\" ";
        }
        echo ">

                <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                    Departement
                </p>
                <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
                    ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["nbrDepart"]) || array_key_exists("nbrDepart", $context) ? $context["nbrDepart"] : (function () { throw new RuntimeError('Variable "nbrDepart" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "
                </p>
            </a>
        </div>
    </div>
    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                style=\"fill: rgba(0, 0, 0, 1);\">
                <path
                    d=\"M17.726 13.02 14 16H9v-1h4.065a.5.5 0 0 0 .416-.777l-.888-1.332A1.995 1.995 0 0 0 10.93 12H3a1 1 0 0 0-1 1v6a2 2 0 0 0 2 2h9.639a3 3 0 0 0 2.258-1.024L22 13l-1.452-.484a2.998 2.998 0 0 0-2.822.504zm1.532-5.63c.451-.465.73-1.108.73-1.818s-.279-1.353-.73-1.818A2.447 2.447 0 0 0 17.494 3S16.25 2.997 15 4.286C13.75 2.997 12.506 3 12.506 3a2.45 2.45 0 0 0-1.764.753c-.451.466-.73 1.108-.73 1.818s.279 1.354.73 1.818L15 12l4.258-4.61z\">
                </path>
            </svg>
        </div>
        <div>
<a ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services_list");
            echo "\" ";
        }
        echo ">

            <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                Service
            </p>
            <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
                5
            </p>
            </a>
        </div>
    </div>
    <!-- Card -->
    <div class=\"flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800\">
        <div class=\"p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                style=\"fill: rgb(12, 149, 23);\">
                <path
                    d=\"m2.394 13.742 4.743 3.62 7.616-8.704-1.506-1.316-6.384 7.296-3.257-2.486zm19.359-5.084-1.506-1.316-6.369 7.279-.753-.602-1.25 1.562 2.247 1.798z\">
                </path>
            </svg>
        </div>
        <div>
            <p class=\"mb-2 text-sm font-medium text-gray-600 dark:text-gray-400\">
                Les Taches à traiter
            </p>
            <p class=\"text-lg font-semibold text-gray-700 dark:text-gray-200\">
               ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["nbrMi"]) || array_key_exists("nbrMi", $context) ? $context["nbrMi"] : (function () { throw new RuntimeError('Variable "nbrMi" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "
            </p>
        </div>
    </div>
</div>



    <div class=\"container\">
        <h1>Statistiques</h1>
        <br>
        <canvas id=\"myChart\" width=\"400\" height=\"100\"></canvas>

    </div>
    <script>
        let chart = document.getElementById('myChart');

        let graph = new Chart(chart ,{
            type:\"line\",
            data:{
                labels: ['Février' ,'Mars','Avril', 'Mai' ,'Juin' ],
                datasets: [{
                    label: \"tâches effectuées \",
                    data:[ 1,2,3,4,5,6,7,8,9,10],
                    backgroundColor: 'rgb(75, 192, 192)',
                    tension: 0.3,
                    fill : false
                }]

            }
        })


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
        return array (  193 => 89,  160 => 63,  141 => 47,  128 => 41,  109 => 25,  90 => 8,  87 => 6,  77 => 4,  59 => 2,  36 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
