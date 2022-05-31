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

/* base.html.twig */
class __TwigTemplate_b53c5d31449a1619c42addbd4ebea509e2b6658dd77c8f689e42cca94597dd1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 5
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js\" integrity=\"sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

";
        // line 8
        echo "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
";
        // line 10
        echo "<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
\tintegrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<!-- Script -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\"
\tintegrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\"
\tcrossorigin=\"anonymous\"></script>

<script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js\" defer></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.0/main.min.js\"
\tintegrity=\"sha256-HuS+Ih2AbnzvJFM3f/FXIIYKqUWLSUeQ0JWoTWtV5vc=\" crossorigin=\"anonymous\"></script>

<!-- Axentix JS minified version -->
<script src=\"https://cdn.jsdelivr.net/npm/axentix@2.0.1/dist/axentix.min.js\"></script>
<!-- Axentix CSS minified version -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.0.1/dist/axentix.min.css\">
<!--                                                                                             -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.0/main.min.css\"
\tintegrity=\"sha256-RoGeDStTbXClGRj4hllIdGBYrCgEmO7H8SmutsYdDLU=\" crossorigin=\"anonymous\">
<!DOCTYPE html>

<html :class=\"{ 'theme-dark': dark }\" x-data=\"data()\" lang=\"en\" >

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t<title>
\t\tBus Software</title>

\t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tailwind.output.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cssFile.css"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/init-alpine.js"), "html", null, true);
        echo "\"></script>


</head>

<body >

\t<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen}\" style=\"overflow-x:hidden; \" >
\t\t<!-- Desktop sidebar -->
\t\t<aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
\t\t\t<div class=\"py-2 text-gray-500 dark:text-gray-400\">
\t\t\t\t<a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_page");
        echo "\">
\t\t\t\t\tBus Software

\t\t\t\t</a>
\t\t\t\t<ul class=\"mt-6\">
\t\t\t\t\t<li class=\"relative px-6 py-3\">

\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_page");
        echo "\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
\t\t\t\t\t\t\t\theight=\"24\" viewbox=\"0 0 24 24\" style=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 \"
\t\t\t\t\t\t\thref=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_list");
            echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275; \">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Employés</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t style=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M19 4h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm.002 16H5V8h14l.002 12z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path d=\"m11 17.414 5.707-5.707-1.414-1.414L11 14.586l-2.293-2.293-1.414 1.414z\"></path>
\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Congés</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t  d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_list");
        echo "\">Liste des Congés </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 125
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 126
            echo "
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employes_conges");
            echo "\">Employé en Congé</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 132
        echo "\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dates_conges_index");
        echo "\">Congé annuel</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 141
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 142
            echo "\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
            // line 144
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointages_list");
            echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M20.29 8.29 16 12.58l-1.3-1.29-1.41 1.42 2.7 2.7 5.72-5.7zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion de Pointage</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_list");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M4 7h11v2H4zm0 4h11v2H4zm0 4h7v2H4zm15.299-2.708-4.3 4.291-1.292-1.291-1.414 1.415 2.706 2.704 5.712-5.703z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Missions</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_paie");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M21 4H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 11a3 3 0 0 0-3 3H7a3 3 0 0 0-3-3V9a3 3 0 0 0 3-3h10a3 3 0 0 0 3 3v6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 8c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Fiche de Paie</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t\t<path d=\"M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z\"></path>

\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t<span class=\"ml-4\">Options</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\td=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_list");
        echo "\">Avances</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionSupp_list");
        echo "\">Gestion supplémentaire</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_list");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<circle cx=\"9.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<circle cx=\"14.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 5.589 2 10c0 2.908 1.897 5.515 5 6.934V22l5.34-4.004C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.671 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Annonces</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t   href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documents");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t style=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path d=\"M19 7h-1V2H6v5H5c-1.654 0-3 1.346-3 3v7c0 1.103.897 2 2 2h2v3h12v-3h2c1.103 0 2-.897 2-2v-7c0-1.654-1.346-3-3-3zM8 4h8v3H8V4zm8 16H8v-4h8v4zm4-3h-2v-3H6v3H4v-7c0-.551.449-1 1-1h14c.552 0 1 .449 1 1v7z\"></path>
\t\t\t\t\t\t\t\t<path d=\"M14 10h4v2h-4z\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Attestation du Travail</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t</aside>
\t\t<!-- Mobile sidebar -->
\t\t<!-- Backdrop -->
\t\t<div x-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
\t\t\tx-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\"
\t\t\tx-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
\t\t\tx-transition:leave-end=\"opacity-0\"
\t\t\tclass=\"fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center\"></div>
\t\t<aside class=\"fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden\"
\t\t\tx-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
\t\t\tx-transition:enter-start=\"opacity-0 transform -translate-x-20\" x-transition:enter-end=\"opacity-100\"
\t\t\tx-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
\t\t\tx-transition:leave-end=\"opacity-0 transform -translate-x-20\" @click.away=\"closeSideMenu\"
\t\t\t@keydown.escape=\"closeSideMenu\">
\t\t\t<div class=\"py-4 text-gray-500 dark:text-gray-400\">
\t\t\t\t<a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
\t\t\t\t\tBus Software
\t\t\t\t</a>
\t\t\t\t<ul class=\"mt-6\">
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<!-- Active items have the snippet below -->
\t\t\t\t\t\t<span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\"
\t\t\t\t\t\t\taria-hidden=\"true\"></span>

\t\t\t\t\t\t<!-- Add this classes to an active anchor (a tag) -->
\t\t\t\t\t\t<!-- text-gray-800 dark:text-gray-100 -->
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_page");
        echo "\">
\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
\t\t\t\t\t\t\t\tstroke-linejoin=\"round\" stroke-width=\"2\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">

\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 291
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 292
            echo "\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 \"
\t\t\t\t\t\t\thref=\"";
            // line 294
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_list");
            echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275; \">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Employés</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 305
        echo "
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t\t style=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M19 4h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm.002 16H5V8h14l.002 12z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path d=\"m11 17.414 5.707-5.707-1.414-1.414L11 14.586l-2.293-2.293-1.414 1.414z\"></path>
\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Congés</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t  d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conges_list");
        echo "\">Liste des Congés </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 343
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employes_conges");
        echo "\">Employé en Congé</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>


\t\t\t\t\t";
        // line 350
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 351
            echo "\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
            // line 353
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointages_list");
            echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M20.29 8.29 16 12.58l-1.3-1.29-1.41 1.42 2.7 2.7 5.72-5.7zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion de Pointage</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 364
        echo "\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
        // line 366
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_paie");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M21 4H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 11a3 3 0 0 0-3 3H7a3 3 0 0 0-3-3V9a3 3 0 0 0 3-3h10a3 3 0 0 0 3 3v6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 8c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Fiche de Paie</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t\t<path d=\"M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z\"></path>

\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span class=\"ml-4\">Options</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\td=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 409
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_list");
        echo "\">Avances</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"";
        // line 413
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionSupp_list");
        echo "\">Gestion supplémentaire</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"";
        // line 421
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_list");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M4 7h11v2H4zm0 4h11v2H4zm0 4h7v2H4zm15.299-2.708-4.3 4.291-1.292-1.291-1.414 1.415 2.706 2.704 5.712-5.703z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Missions</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<circle cx=\"9.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<circle cx=\"14.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 5.589 2 10c0 2.908 1.897 5.515 5 6.934V22l5.34-4.004C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.671 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Annonces</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>


\t\t\t\t</ul>
\t\t\t</div>
\t\t</aside>
\t\t<div class=\"flex flex-col flex-1\">
\t\t\t<header class=\"z-10 py-4 bg-white shadow-md dark:bg-gray-800\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300\">
\t\t\t\t\t<!-- Mobile hamburger -->
\t\t\t\t\t<button class=\"p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\t@click=\"toggleSideMenu\" aria-label=\"Menu\">
\t\t\t\t\t\t<svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\td=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\"
\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Search input -->
\t\t\t\t\t<div class=\"flex justify-center flex-1 lg:mr-32\">
\t\t\t\t\t\t<div class=\"relative w-full max-w-xl mr-6 focus-within:text-purple-500\">
\t\t\t\t\t\t\t<div class=\"absolute inset-y-0 flex items-center pl-2\">
\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\td=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\"
\t\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\tclass=\"w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input\"
\t\t\t\t\t\t\t\ttype=\"text\" placeholder=\"Search...\" aria-label=\"Search\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"flex items-center flex-shrink-0 space-x-6\">

\t\t\t\t\t\t<!-- Notifications menu -->
\t\t\t\t\t\t<li class=\"relative\">
\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\tclass=\"relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\t\t\t@click=\"toggleNotificationsMenu\" @keydown.escape=\"closeNotificationsMenu\"
\t\t\t\t\t\t\t\taria-label=\"Notifications\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<!-- Notification badge -->
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\"
\t\t\t\t\t\t\t\t\tclass=\"absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<template x-if=\"isNotificationsMenuOpen\">
\t\t\t\t\t\t\t\t<ul x-transition:leave=\"transition ease-in duration-150\"
\t\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\"
\t\t\t\t\t\t\t\t\t@click.away=\"closeNotificationsMenu\" @keydown.escape=\"closeNotificationsMenu\"
\t\t\t\t\t\t\t\t\tclass=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700\"
\t\t\t\t\t\t\t\t\taria-label=\"submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span>Messages</span>
\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600\">
\t\t\t\t\t\t\t\t\t\t\t\t13
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span>Alerts</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</template>

\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Profile menu -->
\t\t\t\t\t\t<li class=\"relative\">
\t\t\t\t\t\t\t<button class=\"align-middle rounded-full focus:shadow-outline-purple focus:outline-none\"
\t\t\t\t\t\t\t\t@click=\"toggleProfileMenu\" @keydown.escape=\"closeProfileMenu\" aria-label=\"Account\"
\t\t\t\t\t\t\t\taria-haspopup=\"true\">
\t\t\t\t\t\t\t\t<img class=\"object-cover w-8 h-8 rounded-full\" src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\talt=\"\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
        // line 530
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 531
            echo "\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 531, $this->source); })()), "user", [], "any", false, false, false, 531), "name", [], "any", false, false, false, 531), "nom", [], "any", false, false, false, 531), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t";
        } else {
            // line 533
            echo "\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">admin</span>

\t\t\t\t\t\t\t\t";
        }
        // line 536
        echo "
\t\t\t\t\t\t\t<template x-if=\"isProfileMenuOpen\">
\t\t\t\t\t\t\t\t<ul x-transition:leave=\"transition ease-in duration-150\"
\t\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\"
\t\t\t\t\t\t\t\t\t@click.away=\"closeProfileMenu\" @keydown.escape=\"closeProfileMenu\"
\t\t\t\t\t\t\t\t\tclass=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700\"
\t\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t\t";
        // line 544
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 545
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
            // line 548
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\"
\t\t\t\t\t\t\t\t\t\t\t\tstroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
\t\t\t\t\t\t\t\t\t\t\t\tviewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 560
        echo "\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\"
\t\t\t\t\t\t\t\t\t\t\t\tstroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
\t\t\t\t\t\t\t\t\t\t\t\tviewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
        // line 576
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\"
\t\t\t\t\t\t\t\t\t\t\t\tstroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
\t\t\t\t\t\t\t\t\t\t\t\tviewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>Log out</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<main class=\"h-full pb-16 \">
\t\t\t\t<!-- Remove everything INSIDE this div to a really blank page -->
\t\t\t\t<div class=\"container px-6 mx-auto grid\">
\t\t\t\t\t<h2 class=\"my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200\"> ";
        // line 596
        $this->displayBlock('body', $context, $blocks);
        // line 598
        echo "\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</main>

\t\t</div>
\t</div>
</body>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
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

    // line 596
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 596,  792 => 1,  773 => 598,  771 => 596,  748 => 576,  730 => 560,  715 => 548,  710 => 545,  708 => 544,  698 => 536,  693 => 533,  687 => 531,  685 => 530,  679 => 527,  570 => 421,  559 => 413,  552 => 409,  506 => 366,  502 => 364,  488 => 353,  484 => 351,  482 => 350,  472 => 343,  465 => 339,  429 => 305,  415 => 294,  411 => 292,  409 => 291,  393 => 278,  351 => 239,  334 => 225,  324 => 218,  317 => 214,  269 => 169,  254 => 157,  250 => 155,  236 => 144,  232 => 142,  230 => 141,  220 => 134,  216 => 132,  210 => 129,  205 => 126,  203 => 125,  198 => 123,  163 => 90,  149 => 79,  145 => 77,  143 => 76,  129 => 65,  118 => 57,  104 => 46,  99 => 44,  95 => 43,  91 => 42,  57 => 10,  54 => 8,  50 => 5,  47 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}{% endblock %}
{# *************************************************** #}

{# *************************************************** #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js\" integrity=\"sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

{# ************************************** #}
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
{# ********************************* #}
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
\tintegrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<!-- Script -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\"
\tintegrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\"
\tcrossorigin=\"anonymous\"></script>

<script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js\" defer></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.0/main.min.js\"
\tintegrity=\"sha256-HuS+Ih2AbnzvJFM3f/FXIIYKqUWLSUeQ0JWoTWtV5vc=\" crossorigin=\"anonymous\"></script>

<!-- Axentix JS minified version -->
<script src=\"https://cdn.jsdelivr.net/npm/axentix@2.0.1/dist/axentix.min.js\"></script>
<!-- Axentix CSS minified version -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.0.1/dist/axentix.min.css\">
<!--                                                                                             -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.0/main.min.css\"
\tintegrity=\"sha256-RoGeDStTbXClGRj4hllIdGBYrCgEmO7H8SmutsYdDLU=\" crossorigin=\"anonymous\">
<!DOCTYPE html>

<html :class=\"{ 'theme-dark': dark }\" x-data=\"data()\" lang=\"en\" >

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t<title>
\t\tBus Software</title>

\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/tailwind.output.css')}}\" />
\t<link rel=\"stylesheet\" href=\"{{ asset('css/cssFile.css')}}\" />
\t<script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>

\t<script src=\"{{ asset('assets/js/init-alpine.js')}}\"></script>


</head>

<body >

\t<div class=\"flex h-screen bg-gray-50 dark:bg-gray-900\" :class=\"{ 'overflow-hidden': isSideMenuOpen}\" style=\"overflow-x:hidden; \" >
\t\t<!-- Desktop sidebar -->
\t\t<aside class=\"z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0\">
\t\t\t<div class=\"py-2 text-gray-500 dark:text-gray-400\">
\t\t\t\t<a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"{{ path('dashboard_page')}}\">
\t\t\t\t\tBus Software

\t\t\t\t</a>
\t\t\t\t<ul class=\"mt-6\">
\t\t\t\t\t<li class=\"relative px-6 py-3\">

\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{ path('dashboard_page')}}\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\"
\t\t\t\t\t\t\t\theight=\"24\" viewbox=\"0 0 24 24\" style=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 \"
\t\t\t\t\t\t\thref=\"{{ path('employe_list')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275; \">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Employés</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t style=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M19 4h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm.002 16H5V8h14l.002 12z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path d=\"m11 17.414 5.707-5.707-1.414-1.414L11 14.586l-2.293-2.293-1.414 1.414z\"></path>
\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Congés</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t  d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('conges_list')}}\">Liste des Congés </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('employes_conges') }}\">Employé en Congé</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('dates_conges_index') }}\">Congé annuel</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>

\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{ path('pointages_list' )}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M20.29 8.29 16 12.58l-1.3-1.29-1.41 1.42 2.7 2.7 5.72-5.7zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion de Pointage</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{ path('mission_list')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M4 7h11v2H4zm0 4h11v2H4zm0 4h7v2H4zm15.299-2.708-4.3 4.291-1.292-1.291-1.414 1.415 2.706 2.704 5.712-5.703z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Missions</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{path('fiche_paie')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M21 4H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 11a3 3 0 0 0-3 3H7a3 3 0 0 0-3-3V9a3 3 0 0 0 3-3h10a3 3 0 0 0 3 3v6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 8c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Fiche de Paie</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t\t<path d=\"M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z\"></path>

\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t<span class=\"ml-4\">Options</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\td=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('avance_list')}}\">Avances</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('gestionSupp_list')}}\">Gestion supplémentaire</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{ path('annonces_list')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<circle cx=\"9.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<circle cx=\"14.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 5.589 2 10c0 2.908 1.897 5.515 5 6.934V22l5.34-4.004C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.671 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Annonces</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t   href=\"{{ path('documents') }}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t style=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path d=\"M19 7h-1V2H6v5H5c-1.654 0-3 1.346-3 3v7c0 1.103.897 2 2 2h2v3h12v-3h2c1.103 0 2-.897 2-2v-7c0-1.654-1.346-3-3-3zM8 4h8v3H8V4zm8 16H8v-4h8v4zm4-3h-2v-3H6v3H4v-7c0-.551.449-1 1-1h14c.552 0 1 .449 1 1v7z\"></path>
\t\t\t\t\t\t\t\t<path d=\"M14 10h4v2h-4z\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Attestation du Travail</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t</aside>
\t\t<!-- Mobile sidebar -->
\t\t<!-- Backdrop -->
\t\t<div x-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
\t\t\tx-transition:enter-start=\"opacity-0\" x-transition:enter-end=\"opacity-100\"
\t\t\tx-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
\t\t\tx-transition:leave-end=\"opacity-0\"
\t\t\tclass=\"fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center\"></div>
\t\t<aside class=\"fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden\"
\t\t\tx-show=\"isSideMenuOpen\" x-transition:enter=\"transition ease-in-out duration-150\"
\t\t\tx-transition:enter-start=\"opacity-0 transform -translate-x-20\" x-transition:enter-end=\"opacity-100\"
\t\t\tx-transition:leave=\"transition ease-in-out duration-150\" x-transition:leave-start=\"opacity-100\"
\t\t\tx-transition:leave-end=\"opacity-0 transform -translate-x-20\" @click.away=\"closeSideMenu\"
\t\t\t@keydown.escape=\"closeSideMenu\">
\t\t\t<div class=\"py-4 text-gray-500 dark:text-gray-400\">
\t\t\t\t<a class=\"ml-6 text-lg font-bold text-gray-800 dark:text-gray-200\" href=\"#\">
\t\t\t\t\tBus Software
\t\t\t\t</a>
\t\t\t\t<ul class=\"mt-6\">
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<!-- Active items have the snippet below -->
\t\t\t\t\t\t<span class=\"absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg\"
\t\t\t\t\t\t\taria-hidden=\"true\"></span>

\t\t\t\t\t\t<!-- Add this classes to an active anchor (a tag) -->
\t\t\t\t\t\t<!-- text-gray-800 dark:text-gray-100 -->
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{ path('dashboard_page')}}\">
\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"none\" stroke-linecap=\"round\"
\t\t\t\t\t\t\t\tstroke-linejoin=\"round\" stroke-width=\"2\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">

\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 \"
\t\t\t\t\t\t\thref=\"{{ path('employe_list')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275; \">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Employés</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t\t style=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M19 4h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm.002 16H5V8h14l.002 12z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path d=\"m11 17.414 5.707-5.707-1.414-1.414L11 14.586l-2.293-2.293-1.414 1.414z\"></path>
\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Congés</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t  d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\t  clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('conges_list')}}\">Liste des Congés </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('employes_conges') }}\">Employé en Congé</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>


\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{ path('pointages_list')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" width=\"24\" height=\"24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M20.29 8.29 16 12.58l-1.3-1.29-1.41 1.42 2.7 2.7 5.72-5.7zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion de Pointage</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{path('fiche_paie')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M21 4H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-1 11a3 3 0 0 0-3 3H7a3 3 0 0 0-3-3V9a3 3 0 0 0 3-3h10a3 3 0 0 0 3 3v6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 8c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Fiche de Paie</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t@click=\"togglePagesMenu\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<span class=\"inline-flex items-center\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t\t<path d=\"M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z\"></path>

\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span class=\"ml-4\">Options</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\td=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\"
\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<template x-if=\"isPagesMenuOpen\">
\t\t\t\t\t\t\t<ul x-transition:enter=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:enter-start=\"opacity-25 max-h-0\"
\t\t\t\t\t\t\t\tx-transition:enter-end=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave=\"transition-all ease-in-out duration-300\"
\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100 max-h-xl\"
\t\t\t\t\t\t\t\tx-transition:leave-end=\"opacity-0 max-h-0\"
\t\t\t\t\t\t\t\tclass=\"p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900\"
\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('avance_list')}}\">Avances</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\tclass=\"px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\">
\t\t\t\t\t\t\t\t\t<a class=\"w-full\" href=\"{{ path('gestionSupp_list')}}\">Gestion supplémentaire</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</template>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"{{ path('mission_list')}}\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275;\">
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M4 7h11v2H4zm0 4h11v2H4zm0 4h7v2H4zm15.299-2.708-4.3 4.291-1.292-1.291-1.414 1.415 2.706 2.704 5.712-5.703z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Gestion des Missions</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"relative px-6 py-3\">
\t\t\t\t\t\t<a class=\"inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\"
\t\t\t\t\t\t\t\tstyle=\"fill: #707275 ;\">
\t\t\t\t\t\t\t\t<circle cx=\"9.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<circle cx=\"14.5\" cy=\"9.5\" r=\"1.5\"></circle>
\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\td=\"M12 2C6.486 2 2 5.589 2 10c0 2.908 1.897 5.515 5 6.934V22l5.34-4.004C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.671 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z\">
\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<span class=\"ml-4\">Annonces</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>


\t\t\t\t</ul>
\t\t\t</div>
\t\t</aside>
\t\t<div class=\"flex flex-col flex-1\">
\t\t\t<header class=\"z-10 py-4 bg-white shadow-md dark:bg-gray-800\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300\">
\t\t\t\t\t<!-- Mobile hamburger -->
\t\t\t\t\t<button class=\"p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\t@click=\"toggleSideMenu\" aria-label=\"Menu\">
\t\t\t\t\t\t<svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\td=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\"
\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Search input -->
\t\t\t\t\t<div class=\"flex justify-center flex-1 lg:mr-32\">
\t\t\t\t\t\t<div class=\"relative w-full max-w-xl mr-6 focus-within:text-purple-500\">
\t\t\t\t\t\t\t<div class=\"absolute inset-y-0 flex items-center pl-2\">
\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"
\t\t\t\t\t\t\t\t\t\td=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\"
\t\t\t\t\t\t\t\t\t\tclip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\tclass=\"w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input\"
\t\t\t\t\t\t\t\ttype=\"text\" placeholder=\"Search...\" aria-label=\"Search\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"flex items-center flex-shrink-0 space-x-6\">

\t\t\t\t\t\t<!-- Notifications menu -->
\t\t\t\t\t\t<li class=\"relative\">
\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\tclass=\"relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple\"
\t\t\t\t\t\t\t\t@click=\"toggleNotificationsMenu\" @keydown.escape=\"closeNotificationsMenu\"
\t\t\t\t\t\t\t\taria-label=\"Notifications\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t\t<svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\td=\"M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z\">
\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<!-- Notification badge -->
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\"
\t\t\t\t\t\t\t\t\tclass=\"absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<template x-if=\"isNotificationsMenuOpen\">
\t\t\t\t\t\t\t\t<ul x-transition:leave=\"transition ease-in duration-150\"
\t\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\"
\t\t\t\t\t\t\t\t\t@click.away=\"closeNotificationsMenu\" @keydown.escape=\"closeNotificationsMenu\"
\t\t\t\t\t\t\t\t\tclass=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700\"
\t\t\t\t\t\t\t\t\taria-label=\"submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span>Messages</span>
\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600\">
\t\t\t\t\t\t\t\t\t\t\t\t13
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span>Alerts</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</template>

\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- Profile menu -->
\t\t\t\t\t\t<li class=\"relative\">
\t\t\t\t\t\t\t<button class=\"align-middle rounded-full focus:shadow-outline-purple focus:outline-none\"
\t\t\t\t\t\t\t\t@click=\"toggleProfileMenu\" @keydown.escape=\"closeProfileMenu\" aria-label=\"Account\"
\t\t\t\t\t\t\t\taria-haspopup=\"true\">
\t\t\t\t\t\t\t\t<img class=\"object-cover w-8 h-8 rounded-full\" src=\"{{ asset('images/user.png')}}\"
\t\t\t\t\t\t\t\t\talt=\"\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t{% if not is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">{{app.user.name.nom}}</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">admin</span>

\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<template x-if=\"isProfileMenuOpen\">
\t\t\t\t\t\t\t\t<ul x-transition:leave=\"transition ease-in duration-150\"
\t\t\t\t\t\t\t\t\tx-transition:leave-start=\"opacity-100\" x-transition:leave-end=\"opacity-0\"
\t\t\t\t\t\t\t\t\t@click.away=\"closeProfileMenu\" @keydown.escape=\"closeProfileMenu\"
\t\t\t\t\t\t\t\t\tclass=\"absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700\"
\t\t\t\t\t\t\t\t\taria-label=\"submenu\">

\t\t\t\t\t\t\t\t\t{% if not is_granted('ROLE_ADMIN') %}

\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"{{ path('profil')}}\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\"
\t\t\t\t\t\t\t\t\t\t\t\tstroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
\t\t\t\t\t\t\t\t\t\t\t\tviewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\"
\t\t\t\t\t\t\t\t\t\t\t\tstroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
\t\t\t\t\t\t\t\t\t\t\t\tviewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200\"
\t\t\t\t\t\t\t\t\t\t\thref=\"{{ path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 mr-3\" aria-hidden=\"true\" fill=\"none\"
\t\t\t\t\t\t\t\t\t\t\t\tstroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
\t\t\t\t\t\t\t\t\t\t\t\tviewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\t\t\td=\"M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1\">
\t\t\t\t\t\t\t\t\t\t\t\t</path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<span>Log out</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<main class=\"h-full pb-16 \">
\t\t\t\t<!-- Remove everything INSIDE this div to a really blank page -->
\t\t\t\t<div class=\"container px-6 mx-auto grid\">
\t\t\t\t\t<h2 class=\"my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200\"> {% block body %}{%
\t\t\t\t\t\tendblock body %}
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</main>

\t\t</div>
\t</div>
</body>


</html>", "base.html.twig", "/home/hp/Téléchargements/GRH-master/templates/base.html.twig");
    }
}
