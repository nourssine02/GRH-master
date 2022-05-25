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

/* fiche_paie/new.html.twig */
class __TwigTemplate_36256f43bb61937044029868f62fcf4ad141abbc3058e9c4aed366090b7e0c6a extends Template
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

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tAjouter Fiche de Paie
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

\t#cadre1 {
\t\theight: 500px;
\t\twidth: 300px;
\t\tfloat: left;
\t}

\t#cadre2 {
\t\theight: 500px;
\t\twidth: 300px;
\t}
</style>

<div class=\"tabs\">
\t<ul class=\"tab-links\" hidden>
\t\t<li class=\"active\">
\t\t\t<a href=\"#tab1\">Tab #1</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#tab2\">Tab #2</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#tab3\">Tab #3</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#tab4\">Tab #4</a>
\t\t</li>
\t</ul>
\t\t<form action=\"{{ path('fiche_paie_new')}}\" method=\"post\">

\t\t{{form_start(formF)}}
\t\t{{form_row(formF.dateJour )}}
\t\t{{form_row(formF.datePaiement ) }}
\t\t{{form_row(formF.employe)}}

\t\t<br>
\t\t<button type=\"menu\" class=\"btn btn-danger\" style=\"margin-bottom: 20px;\" name=\"search\">Search</button>

\t\t<br>
\t\t\t{% if check == true %}
\t\t\t\t{% for item in info %}

\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t<div id=\"tab1\" class=\"tab active\">
\t\t\t\t\t\t\t<div class=\"wrapper\">


\t\t\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t\t\t<span>Nom</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.nom}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t\t\t<span>Prenom</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.prenom}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t\t\t<span>Adresse</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.adresse}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t\t\t<span>Echelon</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.echelon}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t\t\t<span>Categorie</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.categorie}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t\t\t<span>Departement</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.departement}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box7\">
\t\t\t\t\t\t\t\t\t<span>Service</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.service}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box8\">
\t\t\t\t\t\t\t\t\t<span>CIN</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.cin}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box9\">
\t\t\t\t\t\t\t\t\t<span>Salaire de Base</span>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{item.salaireBase}}


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box10\">
\t\t\t\t\t\t\t\t\t<span>Nb jours Absences</span>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t{{nbjAbs}}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box11\">
\t\t\t\t\t\t\t\t\t<span>Nb jours Congés</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t{{nbjCong}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box12\">
\t\t\t\t\t\t\t\t\t<span>Nb jours travaillés</span>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t{{nbjTrav}}

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('fiche_paie')}}\" type=\"submit\">Cancel</a>

\t\t\t\t\t\t\t\t\t<a href=\"#next_tab2\" class=\"nextButton\">Next</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div id=\"tab2\" class=\"tab\">
\t\t\t\t\t\t\t<div class=\"wrapper\" style=\"padding-bottom : 100px;\">

\t\t\t\t\t\t\t\t<div id=\"cadre1\">


\t\t\t\t\t\t\t\t\t<div class=\"box1\">


\t\t\t\t\t\t\t\t\t\t<span>Primes</span>
\t\t\t\t\t\t\t\t\t\t{% if item.prime != null %}


\t\t\t\t\t\t\t\t\t\t\t{% for p in item.prime %}


\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t\t\t\t{{p.nom}}-
\t\t\t\t\t\t\t\t\t\t\t\t\t{{p.montant}}DT


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t0,000
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Heure Supplementaire
\t\t\t\t\t\t\t</span>


\t\t\t\t\t\t\t\t\t\t{% if item.HeurSupp != null %}

\t\t\t\t\t\t\t\t\t\t\t{% for supp in item.HeurSupp %}
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


\t\t\t\t\t\t\t\t\t\t\t\t\t{{supp.nbreHeurSupp|date('H:i')}}H-
\t\t\t\t\t\t\t\t\t\t\t\t\t{{supp.montant}}DT
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t0,000
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"cadre2\">

\t\t\t\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t<span>Total Brut
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{totalBrut}}
\t\t\t\t\t\t\t\t\t\t\tDT

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tN° CNSS

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{item.cnss}}

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tRetenue CNSS
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t\t{{cnss}}
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t<span style=\"color : red; font-weight: bold;\">

\t\t\t\t\t\t\t\tSalaire imposable
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t\t{{ imposable }}


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
\t\t\t\t\t\t\t\t\t<a href=\"#next_tab2\" class=\"nextButton\">Next</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"tab3\" class=\"tab\">
\t\t\t\t\t\t\t<div class=\"wrapper\">

\t\t\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Situation Familial</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


\t\t\t\t\t\t\t\t\t\t\t{{item.situationFamilial}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t\t\t<span>Enfants à charge</span>
\t\t\t\t\t\t\t\t\t{% if item.nbreEnfants != null %}
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{item.nbreEnfants}}


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t0

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Familiale

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{DFamiliale}}

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Frais Professionnels

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{ DFraisProf }}


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tContribution Sociale Solidaire


\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{contribSocialSolid|number_format(3)}}


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tIRPP


\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{IRPP|number_format(3)}}

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box7\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tSalaire Net

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{salaireNet|number_format(3)}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box8\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tAvance

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{sommeAv}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box9\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\tNet A Payer

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t{{NetApayer|number_format(3)}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('fiche_paie') }}\">Submit</a> #}
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 50px; margin-top: -35px;\">
\t\t\t\t\t\t\t\t\t\t{{form_row(formF.submit , { 'label' : 'Submit'})}}

\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<br>


\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t{% endfor %}

\t\t\t{% else %}
\t\t\t\t\t<h1>Mois de Paiement n'existe pas</h1
\t\t\t{% endif %}


\t\t{{form_end(formF)}}

\t\t</form>

</div>


<script>


\t\tjQuery(document).ready(function () {
\t\t\tjQuery('.tabs .tab-links a').on('click', function (e) {
\t\t\t\tvar currentAttrValue = jQuery(this).attr('href');

\t\t\t\t// Show/Hide Tabs
\t\t\t\tjQuery('.tabs ' + currentAttrValue).show().siblings().hide();

\t\t\t\t// Change/remove current tab to active
\t\t\t\tjQuery(this).parent('li').addClass('active').siblings().removeClass('active');

\t\t\t\te.preventDefault();
\t\t\t});


\t\t\tjQuery('.nextButton').on('click', function () {

\t\t\tvar \$activeTab = \$('.tab-links li.active');

\t\t\tvar \$wrapper = jQuery(this).closest('.tabs');
\t\t\tvar indexActive = \$wrapper.find('li.active').index();
\t\t\t\$wrapper.find('li').eq(indexActive + 1).find('a').click();
\t\t});

\t\t\tjQuery('.prevButton').on('click', function () {

\t\t\tvar \$activeTab = \$('.tab-links li.active');

\t\t\tvar \$wrapper = jQuery(this).closest('.tabs');
\t\t\tvar indexActive = \$wrapper.find('li.active').index();
\t\t\t\$wrapper.find('li').eq(indexActive - 1).find('a').click();
\t\t});

\t\t});



</script>
{% endblock %}", "fiche_paie/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/fiche_paie/new.html.twig");
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tAjouter Fiche de Paie
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

\t#cadre1 {
\t\theight: 500px;
\t\twidth: 300px;
\t\tfloat: left;
\t}

\t#cadre2 {
\t\theight: 500px;
\t\twidth: 300px;
\t}
</style>

<div class=\"tabs\">
\t<ul class=\"tab-links\" hidden>
\t\t<li class=\"active\">
\t\t\t<a href=\"#tab1\">Tab #1</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#tab2\">Tab #2</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#tab3\">Tab #3</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#tab4\">Tab #4</a>
\t\t</li>
\t</ul>
\t\t<form action=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_paie_new");
        echo "\" method=\"post\">

\t\t";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 153, $this->source); })()), 'form_start');
        echo "
\t\t";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 154, $this->source); })()), "dateJour", [], "any", false, false, false, 154), 'row');
        echo "
\t\t";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 155, $this->source); })()), "datePaiement", [], "any", false, false, false, 155), 'row');
        echo "
\t\t";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 156, $this->source); })()), "employe", [], "any", false, false, false, 156), 'row');
        echo "

\t\t<br>
\t\t<button type=\"menu\" class=\"btn btn-danger\" style=\"margin-bottom: 20px;\" name=\"search\">Search</button>

\t\t<br>
\t\t\t";
        // line 162
        if ((0 === twig_compare((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 162, $this->source); })()), true))) {
            // line 163
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 164
                echo "
\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t<div id=\"tab1\" class=\"tab active\">
\t\t\t\t\t\t\t<div class=\"wrapper\">


\t\t\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t\t\t<span>Nom</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 175), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t\t\t<span>Prenom</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 186), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t\t\t<span>Adresse</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adresse", [], "any", false, false, false, 197), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t\t\t<span>Echelon</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "echelon", [], "any", false, false, false, 207), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t\t\t<span>Categorie</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 217
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 217), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t\t\t<span>Departement</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "departement", [], "any", false, false, false, 227), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box7\">
\t\t\t\t\t\t\t\t\t<span>Service</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 237
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "service", [], "any", false, false, false, 237), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box8\">
\t\t\t\t\t\t\t\t\t<span>CIN</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 249
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cin", [], "any", false, false, false, 249), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box9\">
\t\t\t\t\t\t\t\t\t<span>Salaire de Base</span>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "salaireBase", [], "any", false, false, false, 261), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box10\">
\t\t\t\t\t\t\t\t\t<span>Nb jours Absences</span>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t";
                // line 275
                echo twig_escape_filter($this->env, (isset($context["nbjAbs"]) || array_key_exists("nbjAbs", $context) ? $context["nbjAbs"] : (function () { throw new RuntimeError('Variable "nbjAbs" does not exist.', 275, $this->source); })()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box11\">
\t\t\t\t\t\t\t\t\t<span>Nb jours Congés</span>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t";
                // line 284
                echo twig_escape_filter($this->env, (isset($context["nbjCong"]) || array_key_exists("nbjCong", $context) ? $context["nbjCong"] : (function () { throw new RuntimeError('Variable "nbjCong" does not exist.', 284, $this->source); })()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box12\">
\t\t\t\t\t\t\t\t\t<span>Nb jours travaillés</span>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t";
                // line 293
                echo twig_escape_filter($this->env, (isset($context["nbjTrav"]) || array_key_exists("nbjTrav", $context) ? $context["nbjTrav"] : (function () { throw new RuntimeError('Variable "nbjTrav" does not exist.', 293, $this->source); })()), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 302
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_paie");
                echo "\" type=\"submit\">Cancel</a>

\t\t\t\t\t\t\t\t\t<a href=\"#next_tab2\" class=\"nextButton\">Next</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div id=\"tab2\" class=\"tab\">
\t\t\t\t\t\t\t<div class=\"wrapper\" style=\"padding-bottom : 100px;\">

\t\t\t\t\t\t\t\t<div id=\"cadre1\">


\t\t\t\t\t\t\t\t\t<div class=\"box1\">


\t\t\t\t\t\t\t\t\t\t<span>Primes</span>
\t\t\t\t\t\t\t\t\t\t";
                // line 320
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "prime", [], "any", false, false, false, 320), null))) {
                    // line 321
                    echo "

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 323
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "prime", [], "any", false, false, false, 323));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 324
                        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 329
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 329), "html", null, true);
                        echo "-
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 330
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "montant", [], "any", false, false, false, 330), "html", null, true);
                        echo "DT


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 335
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t0,000
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 340
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 341
                echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Heure Supplementaire
\t\t\t\t\t\t\t</span>


\t\t\t\t\t\t\t\t\t\t";
                // line 353
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "HeurSupp", [], "any", false, false, false, 353), null))) {
                    // line 354
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 355
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "HeurSupp", [], "any", false, false, false, 355));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["supp"]) {
                        // line 356
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 360
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supp"], "nbreHeurSupp", [], "any", false, false, false, 360), "H:i"), "html", null, true);
                        echo "H-
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 361
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supp"], "montant", [], "any", false, false, false, 361), "html", null, true);
                        echo "DT
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 366
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t0,000
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supp'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 371
                    echo "

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 374
                echo "

\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"cadre2\">

\t\t\t\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t<span>Total Brut
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 387
                echo twig_escape_filter($this->env, (isset($context["totalBrut"]) || array_key_exists("totalBrut", $context) ? $context["totalBrut"] : (function () { throw new RuntimeError('Variable "totalBrut" does not exist.', 387, $this->source); })()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\tDT

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tN° CNSS

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 402
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cnss", [], "any", false, false, false, 402), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tRetenue CNSS
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t\t";
                // line 414
                echo twig_escape_filter($this->env, (isset($context["cnss"]) || array_key_exists("cnss", $context) ? $context["cnss"] : (function () { throw new RuntimeError('Variable "cnss" does not exist.', 414, $this->source); })()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t<span style=\"color : red; font-weight: bold;\">

\t\t\t\t\t\t\t\tSalaire imposable
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

\t\t\t\t\t\t\t\t\t\t\t";
                // line 426
                echo twig_escape_filter($this->env, (isset($context["imposable"]) || array_key_exists("imposable", $context) ? $context["imposable"] : (function () { throw new RuntimeError('Variable "imposable" does not exist.', 426, $this->source); })()), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
\t\t\t\t\t\t\t\t\t<a href=\"#next_tab2\" class=\"nextButton\">Next</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"tab3\" class=\"tab\">
\t\t\t\t\t\t\t<div class=\"wrapper\">

\t\t\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t\t\t<label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Situation Familial</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


\t\t\t\t\t\t\t\t\t\t\t";
                // line 454
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "situationFamilial", [], "any", false, false, false, 454), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box2\">
\t\t\t\t\t\t\t\t\t<span>Enfants à charge</span>
\t\t\t\t\t\t\t\t\t";
                // line 463
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "nbreEnfants", [], "any", false, false, false, 463), null))) {
                    // line 464
                    echo "\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 466
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nbreEnfants", [], "any", false, false, false, 466), "html", null, true);
                    echo "


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 472
                    echo "\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t0

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
                }
                // line 479
                echo "\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box3\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Familiale

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 491
                echo twig_escape_filter($this->env, (isset($context["DFamiliale"]) || array_key_exists("DFamiliale", $context) ? $context["DFamiliale"] : (function () { throw new RuntimeError('Variable "DFamiliale" does not exist.', 491, $this->source); })()), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box4\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Frais Professionnels

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 506
                echo twig_escape_filter($this->env, (isset($context["DFraisProf"]) || array_key_exists("DFraisProf", $context) ? $context["DFraisProf"] : (function () { throw new RuntimeError('Variable "DFraisProf" does not exist.', 506, $this->source); })()), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"box5\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tContribution Sociale Solidaire


\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 525
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["contribSocialSolid"]) || array_key_exists("contribSocialSolid", $context) ? $context["contribSocialSolid"] : (function () { throw new RuntimeError('Variable "contribSocialSolid" does not exist.', 525, $this->source); })()), 3), "html", null, true);
                echo "


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box6\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tIRPP


\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 542
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["IRPP"]) || array_key_exists("IRPP", $context) ? $context["IRPP"] : (function () { throw new RuntimeError('Variable "IRPP" does not exist.', 542, $this->source); })()), 3), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box7\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tSalaire Net

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 558
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["salaireNet"]) || array_key_exists("salaireNet", $context) ? $context["salaireNet"] : (function () { throw new RuntimeError('Variable "salaireNet" does not exist.', 558, $this->source); })()), 3), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box8\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tAvance

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 572
                echo twig_escape_filter($this->env, (isset($context["sommeAv"]) || array_key_exists("sommeAv", $context) ? $context["sommeAv"] : (function () { throw new RuntimeError('Variable "sommeAv" does not exist.', 572, $this->source); })()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"box9\">
\t\t\t\t\t\t\t\t\t<div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\tNet A Payer

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 587
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["NetApayer"]) || array_key_exists("NetApayer", $context) ? $context["NetApayer"] : (function () { throw new RuntimeError('Variable "NetApayer" does not exist.', 587, $this->source); })()), 3), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<ul class=\"tab-links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
\t\t\t\t\t\t\t\t\t";
                // line 600
                echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 50px; margin-top: -35px;\">
\t\t\t\t\t\t\t\t\t\t";
                // line 602
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 602, $this->source); })()), "submit", [], "any", false, false, false, 602), 'row', ["label" => "Submit"]);
                echo "

\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<br>


\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 618
            echo "
\t\t\t";
        } else {
            // line 620
            echo "\t\t\t\t\t<h1>Mois de Paiement n'existe pas</h1
\t\t\t";
        }
        // line 622
        echo "

\t\t";
        // line 624
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 624, $this->source); })()), 'form_end');
        echo "

\t\t</form>

</div>


<script>


\t\tjQuery(document).ready(function () {
\t\t\tjQuery('.tabs .tab-links a').on('click', function (e) {
\t\t\t\tvar currentAttrValue = jQuery(this).attr('href');

\t\t\t\t// Show/Hide Tabs
\t\t\t\tjQuery('.tabs ' + currentAttrValue).show().siblings().hide();

\t\t\t\t// Change/remove current tab to active
\t\t\t\tjQuery(this).parent('li').addClass('active').siblings().removeClass('active');

\t\t\t\te.preventDefault();
\t\t\t});


\t\t\tjQuery('.nextButton').on('click', function () {

\t\t\tvar \$activeTab = \$('.tab-links li.active');

\t\t\tvar \$wrapper = jQuery(this).closest('.tabs');
\t\t\tvar indexActive = \$wrapper.find('li.active').index();
\t\t\t\$wrapper.find('li').eq(indexActive + 1).find('a').click();
\t\t});

\t\t\tjQuery('.prevButton').on('click', function () {

\t\t\tvar \$activeTab = \$('.tab-links li.active');

\t\t\tvar \$wrapper = jQuery(this).closest('.tabs');
\t\t\tvar indexActive = \$wrapper.find('li.active').index();
\t\t\t\$wrapper.find('li').eq(indexActive - 1).find('a').click();
\t\t});

\t\t});



</script>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2

    public function getTemplateName()
    {
        return "fiche_paie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  863 => 624,  859 => 622,  855 => 620,  851 => 618,  829 => 602,  825 => 600,  810 => 587,  792 => 572,  775 => 558,  756 => 542,  736 => 525,  714 => 506,  696 => 491,  682 => 479,  673 => 472,  664 => 466,  660 => 464,  658 => 463,  646 => 454,  615 => 426,  600 => 414,  585 => 402,  567 => 387,  552 => 374,  547 => 371,  537 => 366,  527 => 361,  523 => 360,  517 => 356,  512 => 355,  509 => 354,  507 => 353,  493 => 341,  490 => 340,  480 => 335,  470 => 330,  466 => 329,  459 => 324,  454 => 323,  450 => 321,  448 => 320,  427 => 302,  415 => 293,  403 => 284,  391 => 275,  374 => 261,  359 => 249,  344 => 237,  331 => 227,  318 => 217,  305 => 207,  292 => 197,  278 => 186,  264 => 175,  251 => 164,  246 => 163,  244 => 162,  235 => 156,  231 => 155,  227 => 154,  223 => 153,  218 => 151,  68 => 3,  58 => 2,  35 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_paie/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
