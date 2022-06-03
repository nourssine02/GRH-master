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

/* fiche_paie/imprimer.html.twig */
class __TwigTemplate_a3f1e9771af5ba44e380ed8b9bde8bd8e0682162e8adb2e3709f651727ad2d74 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/imprimer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/imprimer.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
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

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        .title{
            margin-left: 250px;
            margin-top: 70px;
            font-family: \"Courier New\", Courier, monospace;
            font-size: 24px;
        }
        .date{
            margin-left: 600px;
            margin-top: -80px;
        }
        #gauche {
            width: 50%;
            float: left;

        }
        #droite {
            width: 50%;
            float: left;

        }
        span{
            font-weight: bold;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<h5>STE BUS SOFTWARE <br>RUE HEDI NUIRA <br>AKOUDA<br>4022</h5>
    <h5 class=\"date\">";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dat_j"]) || array_key_exists("dat_j", $context) ? $context["dat_j"] : (function () { throw new RuntimeError('Variable "dat_j" does not exist.', 33, $this->source); })()), "m-Y"), "html", null, true);
        echo "</h5>

    <h3 class=\"title\">Fiche de Paie</h3>


    <div id=\"gauche\">
        <p><span>Matricule:</span> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 39, $this->source); })()), "employe", [], "any", false, false, false, 39), "matricule", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
        <p><span>Nom & Prénom :</span> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 40, $this->source); })()), "employe", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 40, $this->source); })()), "employe", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
        <p><span>Departement :</span> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 41, $this->source); })()), "employe", [], "any", false, false, false, 41), "departement", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
        <p><span>Service : </span>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 42, $this->source); })()), "employe", [], "any", false, false, false, 42), "service", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
        <p><span>Categorie :</span> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 43, $this->source); })()), "employe", [], "any", false, false, false, 43), "categorie", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
        <p><span>Echelon :</span> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 44, $this->source); })()), "employe", [], "any", false, false, false, 44), "echelon", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>

    </div>
    <div id=\"droite\">

        <p><span>N CNSS : </span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 49, $this->source); })()), "employe", [], "any", false, false, false, 49), "cnss", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
        <p><span>N CIN :</span> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 50, $this->source); })()), "employe", [], "any", false, false, false, 50), "cin", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
        <p><span>Situation Familial :</span> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 51, $this->source); })()), "employe", [], "any", false, false, false, 51), "situationFamilial", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
        <p><span> Enfants à charge:</span> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 52, $this->source); })()), "employe", [], "any", false, false, false, 52), "nbreEnfants", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
    </div>

    <table style=\"width:100%;margin-top: 300px;\">
        <thead>
        <tr>
            <th>Désignation</th>
            <th>Nombre</th>
            <th>Salaire/Primes</th>
            <th>Retenues</th>

        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                <br>
                Nombre de jours de présence<br>
                <br>
                Salaire de base<br>
                <br>
            </td>
            <td>
                <br>
                ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 77, $this->source); })()), "nbjTrav", [], "any", false, false, false, 77), "html", null, true);
        echo "<br>
                <br>
                <br>
                <br>
            </td>
            <td>
                <br>
               <br>
                <br>
               ";
        // line 86
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 86, $this->source); })()), "employe", [], "any", false, false, false, 86), "salaireBase", [], "any", false, false, false, 86), 3), "html", null, true);
        echo " <br>
                <br>
            </td>
            <td></td>

        </tr>
        <tr>
            <td>
                <br>
            Salaire brut<br>
";
        // line 98
        echo "                <br>
            Retenue cnss<br>
                <br>
            Salaire brut imposable<br>
                <br>
            Retenue à la source<br>
                <br>
            Contribution sociale de solidarité<br>
                <br>
                Salaire Net <br>
                <br>
                Avances <br>
                <br>
            </td>
            <td></td>
            <td>
                <br>
                ";
        // line 115
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 115, $this->source); })()), "salaireBrut", [], "any", false, false, false, 115), 3), "html", null, true);
        echo "<br>
";
        // line 118
        echo "                <br>
                 <br>
                <br>
                ";
        // line 121
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 121, $this->source); })()), "salaireImposable", [], "any", false, false, false, 121), 3), "html", null, true);
        echo "<br>
                <br>
                  <br>
                <br>
                <br>
                <br>
                ";
        // line 127
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 127, $this->source); })()), "salaireNet", [], "any", false, false, false, 127), 3), "html", null, true);
        echo "<br>
                <br>
                ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 129, $this->source); })()), "avances", [], "any", false, false, false, 129), "html", null, true);
        echo "<br>
                <br>
            </td>
            <td>
                <br>
               <br>
                <br>
";
        // line 138
        echo "                ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 138, $this->source); })()), "retenueCnss", [], "any", false, false, false, 138), 3), "html", null, true);
        echo "<br>
                <br>
                <br>
                <br>
                ";
        // line 142
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 142, $this->source); })()), "salaireImposable", [], "any", false, false, false, 142), 3), "html", null, true);
        echo "<br>
                <br>
                ";
        // line 144
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 144, $this->source); })()), "contributionSocialeSolidaire", [], "any", false, false, false, 144), 3), "html", null, true);
        echo "<br>
                <br>
                <br>
                <br>
                <br>
                <br>

            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Net à payer</td>
            <td>";
        // line 157
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 157, $this->source); })()), "netAPayer", [], "any", false, false, false, 157), 3), "html", null, true);
        echo "</td>
        </tr>
        </tfoot>
    </table>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_paie/imprimer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  303 => 157,  287 => 144,  282 => 142,  274 => 138,  264 => 129,  259 => 127,  250 => 121,  245 => 118,  241 => 115,  222 => 98,  209 => 86,  197 => 77,  169 => 52,  165 => 51,  161 => 50,  157 => 49,  149 => 44,  145 => 43,  141 => 42,  137 => 41,  131 => 40,  127 => 39,  118 => 33,  86 => 3,  76 => 2,  57 => 1,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %} {% endblock %}
{% block body %}
    <style>
        .title{
            margin-left: 250px;
            margin-top: 70px;
            font-family: \"Courier New\", Courier, monospace;
            font-size: 24px;
        }
        .date{
            margin-left: 600px;
            margin-top: -80px;
        }
        #gauche {
            width: 50%;
            float: left;

        }
        #droite {
            width: 50%;
            float: left;

        }
        span{
            font-weight: bold;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<h5>STE BUS SOFTWARE <br>RUE HEDI NUIRA <br>AKOUDA<br>4022</h5>
    <h5 class=\"date\">{{ dat_j|date(\"m-Y\") }}</h5>

    <h3 class=\"title\">Fiche de Paie</h3>


    <div id=\"gauche\">
        <p><span>Matricule:</span> {{ fiche.employe.matricule }}</p>
        <p><span>Nom & Prénom :</span> {{ fiche.employe.nom }} {{ fiche.employe.prenom }}</p>
        <p><span>Departement :</span> {{ fiche.employe.departement }}</p>
        <p><span>Service : </span>{{ fiche.employe.service }}</p>
        <p><span>Categorie :</span> {{ fiche.employe.categorie }}</p>
        <p><span>Echelon :</span> {{ fiche.employe.echelon }}</p>

    </div>
    <div id=\"droite\">

        <p><span>N CNSS : </span>{{ fiche.employe.cnss }}</p>
        <p><span>N CIN :</span> {{ fiche.employe.cin }}</p>
        <p><span>Situation Familial :</span> {{ fiche.employe.situationFamilial }}</p>
        <p><span> Enfants à charge:</span> {{ fiche.employe.nbreEnfants }}</p>
    </div>

    <table style=\"width:100%;margin-top: 300px;\">
        <thead>
        <tr>
            <th>Désignation</th>
            <th>Nombre</th>
            <th>Salaire/Primes</th>
            <th>Retenues</th>

        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                <br>
                Nombre de jours de présence<br>
                <br>
                Salaire de base<br>
                <br>
            </td>
            <td>
                <br>
                {{ fiche.nbjTrav }}<br>
                <br>
                <br>
                <br>
            </td>
            <td>
                <br>
               <br>
                <br>
               {{ fiche.employe.salaireBase|number_format(3)}} <br>
                <br>
            </td>
            <td></td>

        </tr>
        <tr>
            <td>
                <br>
            Salaire brut<br>
{#                <br>#}
{#            Salaire brut cotisable<br>#}
                <br>
            Retenue cnss<br>
                <br>
            Salaire brut imposable<br>
                <br>
            Retenue à la source<br>
                <br>
            Contribution sociale de solidarité<br>
                <br>
                Salaire Net <br>
                <br>
                Avances <br>
                <br>
            </td>
            <td></td>
            <td>
                <br>
                {{ fiche.salaireBrut|number_format(3) }}<br>
{#                <br>#}
{#                2222  <br>#}
                <br>
                 <br>
                <br>
                {{ fiche.salaireImposable|number_format(3) }}<br>
                <br>
                  <br>
                <br>
                <br>
                <br>
                {{ fiche.salaireNet|number_format(3) }}<br>
                <br>
                {{ fiche.avances }}<br>
                <br>
            </td>
            <td>
                <br>
               <br>
                <br>
{#               <br>#}
{#                <br>#}
                {{ fiche.retenueCnss|number_format(3) }}<br>
                <br>
                <br>
                <br>
                {{ fiche.salaireImposable|number_format(3) }}<br>
                <br>
                {{ fiche.contributionSocialeSolidaire|number_format(3) }}<br>
                <br>
                <br>
                <br>
                <br>
                <br>

            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Net à payer</td>
            <td>{{ fiche.netAPayer|number_format(3) }}</td>
        </tr>
        </tfoot>
    </table>




{% endblock %}", "fiche_paie/imprimer.html.twig", "/home/hp/Téléchargements/GRH-master/templates/fiche_paie/imprimer.html.twig");
    }
}
