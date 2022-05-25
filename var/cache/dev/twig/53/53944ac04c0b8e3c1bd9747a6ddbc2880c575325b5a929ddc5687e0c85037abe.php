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

/* pointage/show.html.twig */
class __TwigTemplate_3d93db5bfe1aa457ba9db1c2faddee5841fef4be6e9e414d3d54e3464f4da5b0 extends Template
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
        return new Source("{% extends \"base.html.twig\" %} {% block title %}{% endblock %} {% block body %}

<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tListe de Pointage
</h4>
<div>
\t<br>

\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px;\" >
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full\">
\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employe</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Total</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">{{jour}}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\"></th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t{% for pointage in pointages %}

\t\t\t\t<form action=\"{{path( 'pointages_update' , { 'id' : pointage.employe.id})}} \" method=\"post\">

\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">{{pointage.employe.nom}} {{pointage.employe.nom}}</span>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t{{pointage.total }}
\t\t\t\t\t\t</td>


\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"{{jour}}\" name=\"{{pointage.employe.id}}[]\" {% if jour in
\t\t\t\t\t\t\t\tpointage.listeJours %} checked {% endif %}
{#\t\t\t\t\t\t\t\t\t{% if aujourdhui==jour %} checked {% endif %}#}
\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"  class=\"btn btn-small info\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t\t</td>

\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t</form>
\t\t\t\t{% endfor %}

\t\t\t</table>
\t\t</div>
\t</div>

</div>

{% endblock %}
", "pointage/show.html.twig", "/home/hp/Téléchargements/GRH-master/templates/pointage/show.html.twig");
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

    public function getTemplateName()
    {
        return "pointage/show.html.twig";
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
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\tListe de Pointage
</h4>
<div>
\t<br>

\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px;\" >
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full\">
\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employe</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Total</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 21
            echo "\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">";
            echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\"></th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pointages"]) || array_key_exists("pointages", $context) ? $context["pointages"] : (function () { throw new RuntimeError('Variable "pointages" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pointage"]) {
            // line 29
            echo "
\t\t\t\t<form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointages_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo " \" method=\"post\">

\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointage"], "total", [], "any", false, false, false, 42), "html", null, true);
            echo "
\t\t\t\t\t\t</td>


\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 48
                echo "\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"";
                echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
                echo "[]\" ";
                if (twig_in_filter($context["jour"], twig_get_attribute($this->env, $this->source,                 // line 49
$context["pointage"], "listeJours", [], "any", false, false, false, 49))) {
                    echo " checked ";
                }
                // line 51
                echo "\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"  class=\"btn btn-small info\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t\t</td>

\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t</form>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pointage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
\t\t\t</table>
\t\t</div>
\t</div>

</div>

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
        return array (  197 => 64,  182 => 54,  174 => 51,  170 => 49,  164 => 48,  160 => 47,  152 => 42,  143 => 38,  132 => 30,  129 => 29,  125 => 28,  118 => 23,  109 => 21,  105 => 20,  85 => 2,  36 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
