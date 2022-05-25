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

/* pointage/list.html.twig */
class __TwigTemplate_19339813f5328f6ed9104b0fc4e3f978ce39a9bd341bb572677607be5eb4ae06 extends Template
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
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<!-- Font Awesome -->
{#
<link href=\"vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"> #}

<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<!-- basic -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<!-- mobile metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
\t<!-- site metas -->
</head>

<style>
\tbody {
\t\tbackground-color: #f9fafb;
\t\theight: 100%;
\t\twidth: 101%;
\t\t/* overflow-y: hidden; */
\t}
</style>



<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\"> Liste des Pointages
</h4>
<div>

\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full whitespace-no-wrap\">

\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employé</th>

\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">{{jour}}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"px-6 px-6\"></th>

\t\t\t\t\t</tr>

\t\t\t\t</thead>

\t\t\t\t{% for employe in employes %}

\t\t\t\t<form action=\"{{path( 'pointages_update' , { 'id' : employe.id})}} \" method=\"post\">
\t\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\" id=\"{{employe.id}}\">
\t\t\t\t\t\t\t\t{{employe.nom}}
\t\t\t\t\t\t\t\t{{employe.prenom}}

\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td id=\"{{employe.id}}\">
\t\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" name=\"{{employe.id}}[]\"
\t\t\t\t\t\t\t\t\tvalue=\"{{jour}}\"
{#\t\t\t\t\t\t\t\t\t\t{% if jour in listeJours %} checked {% endif %}#}
\t\t\t\t\t\t\t\t\t\t{% if aujourdhui==jour %} checked {% endif %}>

\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"  class=\"btn btn-outline-dark\">
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t</tbody>
\t\t\t\t</form>
\t\t\t\t{% endfor %}
\t\t\t</table>
\t\t</div>
\t</div>


</div>


{% endblock %}", "pointage/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/pointage/list.html.twig");
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- Font Awesome -->
";
        // line 6
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<!-- basic -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<!-- mobile metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
\t<!-- site metas -->
</head>

<style>
\tbody {
\t\tbackground-color: #f9fafb;
\t\theight: 100%;
\t\twidth: 101%;
\t\t/* overflow-y: hidden; */
\t}
</style>



<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\"> Liste des Pointages
</h4>
<div>

\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full whitespace-no-wrap\">

\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employé</th>

\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 48
            echo "\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">";
            echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"px-6 px-6\"></th>

\t\t\t\t\t</tr>

\t\t\t\t</thead>

\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 58
            echo "
\t\t\t\t<form action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointages_update", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo " \" method=\"post\">
\t\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\" id=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 64), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "prenom", [], "any", false, false, false, 65), "html", null, true);
            echo "

\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td id=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 71
                echo "\t\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo "[]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 72
                echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                echo "\"
";
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((0 === twig_compare((isset($context["aujourdhui"]) || array_key_exists("aujourdhui", $context) ? $context["aujourdhui"] : (function () { throw new RuntimeError('Variable "aujourdhui" does not exist.', 74, $this->source); })()), $context["jour"]))) {
                    echo " checked ";
                }
                echo ">

\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"  class=\"btn btn-outline-dark\">
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t</tbody>
\t\t\t\t</form>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t</table>
\t\t</div>
\t</div>


</div>


";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2

    public function getTemplateName()
    {
        return "pointage/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 90,  194 => 77,  182 => 74,  178 => 72,  173 => 71,  169 => 70,  165 => 69,  158 => 65,  154 => 64,  150 => 63,  143 => 59,  140 => 58,  136 => 57,  127 => 50,  118 => 48,  114 => 47,  71 => 6,  68 => 3,  58 => 2,  35 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
