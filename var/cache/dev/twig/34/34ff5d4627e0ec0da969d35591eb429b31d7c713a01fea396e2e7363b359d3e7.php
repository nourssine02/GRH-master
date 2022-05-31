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

/* conges/enCours.html.twig */
class __TwigTemplate_87a50dc10e062ac4293b207b79d464bfd6c04a09a752d1947272569fc0760885 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/enCours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/enCours.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conges/enCours.html.twig", 1);
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
        echo "    <h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
        Statut des employés qui demandent un congé
    </h4>

    <div class=\"w-full rounded-lg shadow-xs\" style=\"margin-top: 50px\">
    <div class=\"w-full overflow-hidden \">
        <table class=\"w-full \">
            <thead>
            <tr
                    class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                <th class=\"px-3 py-3\">Employé</th>
                <th class=\"px-3 py-3\">Date Depart</th>
                <th class=\"px-3 py-3\">Date Retour</th>
                <th class=\"px-3 py-3\">Statut</th>
            </tr>
            </thead>
            <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
            // line 22
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 22), "acceptée"))) {
                // line 23
                echo "
                <tr class=\"text-gray-700 dark:text-gray-400\">

                    <td class=\"px-3 py-3 text-sm\">
                        ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "employe", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "employe", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true);
                echo "
                    </td>

                    <td class=\"px-3 py-3 text-sm\">
                        ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "start", [], "any", false, false, false, 31), "format", [0 => "d/m/Y"], "method", false, false, false, 31), "html", null, true);
                echo "
                    </td>
                    <td class=\"px-3 py-3 text-sm\">
                        ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "end", [], "any", false, false, false, 34), "format", [0 => "d/m/Y"], "method", false, false, false, 34), "html", null, true);
                echo "
                    </td>
                ";
                // line 36
                if (((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["conge"], "start", [], "any", false, false, false, 36), (isset($context["dateJour"]) || array_key_exists("dateJour", $context) ? $context["dateJour"] : (function () { throw new RuntimeError('Variable "dateJour" does not exist.', 36, $this->source); })()))) && (0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["conge"], "end", [], "any", false, false, false, 36), (isset($context["dateJour"]) || array_key_exists("dateJour", $context) ? $context["dateJour"] : (function () { throw new RuntimeError('Variable "dateJour" does not exist.', 36, $this->source); })()))))) {
                    // line 37
                    echo "                    <td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
                        <h5>En Cours</h5>
                    </td>
                ";
                } elseif ((-1 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 40
$context["conge"], "end", [], "any", false, false, false, 40), (isset($context["dateJour"]) || array_key_exists("dateJour", $context) ? $context["dateJour"] : (function () { throw new RuntimeError('Variable "dateJour" does not exist.', 40, $this->source); })())))) {
                    // line 41
                    echo "                    <td class=\"px-3 py-3 text-sm\"  style=\"color: green; font-weight: bold;\">
                        <h5>Terminée</h5>
                    </td>
                ";
                } else {
                    // line 45
                    echo "                    <td class=\"px-3 py-3 text-sm\" style=\"color: blue; font-weight: bold;\">
                        <h5>Bientôt</h5>
                    </td>
                ";
                }
                // line 49
                echo "
                </tr>
                ";
            }
            // line 52
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>

        </table>
    </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conges/enCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 53,  165 => 52,  160 => 49,  154 => 45,  148 => 41,  146 => 40,  141 => 37,  139 => 36,  134 => 34,  128 => 31,  119 => 27,  113 => 23,  110 => 22,  106 => 21,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{% endblock %}
{% block body %}
    <h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
        Statut des employés qui demandent un congé
    </h4>

    <div class=\"w-full rounded-lg shadow-xs\" style=\"margin-top: 50px\">
    <div class=\"w-full overflow-hidden \">
        <table class=\"w-full \">
            <thead>
            <tr
                    class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                <th class=\"px-3 py-3\">Employé</th>
                <th class=\"px-3 py-3\">Date Depart</th>
                <th class=\"px-3 py-3\">Date Retour</th>
                <th class=\"px-3 py-3\">Statut</th>
            </tr>
            </thead>
            <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
            {% for conge in conges %}
                {% if conge.statut == 'acceptée' %}

                <tr class=\"text-gray-700 dark:text-gray-400\">

                    <td class=\"px-3 py-3 text-sm\">
                        {{conge.employe.nom}} {{conge.employe.prenom}}
                    </td>

                    <td class=\"px-3 py-3 text-sm\">
                        {{conge.start.format('d/m/Y')}}
                    </td>
                    <td class=\"px-3 py-3 text-sm\">
                        {{conge.end.format('d/m/Y')}}
                    </td>
                {% if conge.start <= dateJour and conge.end >= dateJour  %}
                    <td class=\"px-3 py-3 text-sm\" style=\"color: red; font-weight: bold;\">
                        <h5>En Cours</h5>
                    </td>
                {% elseif conge.end < dateJour %}
                    <td class=\"px-3 py-3 text-sm\"  style=\"color: green; font-weight: bold;\">
                        <h5>Terminée</h5>
                    </td>
                {% else %}
                    <td class=\"px-3 py-3 text-sm\" style=\"color: blue; font-weight: bold;\">
                        <h5>Bientôt</h5>
                    </td>
                {% endif %}

                </tr>
                {% endif %}
            {% endfor %}
            </tbody>

        </table>
    </div>
</div>



{% endblock %}", "conges/enCours.html.twig", "/home/hp/Téléchargements/GRH-master/templates/conges/enCours.html.twig");
    }
}
