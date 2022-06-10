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
\t<!-- With actions -->
\t<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\t\tListe de Pointage
\t</h4>
\t<div>
\t\t<br>
";
        // line 10
        echo "\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_add"));
        echo "

\t\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px;\" >
\t\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t\t<table class=\"w-full\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employe</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Total</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">";
            echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\"></th>

\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pointages"]) || array_key_exists("pointages", $context) ? $context["pointages"] : (function () { throw new RuntimeError('Variable "pointages" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pointage"]) {
            // line 30
            echo "
\t\t\t\t\t\t";
            // line 31
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pointage"], "mois", [], "any", false, false, false, 31), (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 31, $this->source); })())))) {
                // line 32
                echo "
\t\t\t\t\t<form action=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointages_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo " \" method=\"post\">

\t\t\t\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">

\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 41), "prenom", [], "any", false, false, false, 41), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointage"], "total", [], "any", false, false, false, 46), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 52, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"";
                    echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
                    echo "[]\"
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 54
                    if (twig_in_filter($context["jour"], twig_get_attribute($this->env, $this->source, $context["pointage"], "listeJours", [], "any", false, false, false, 54))) {
                        echo " checked ";
                    }
                    // line 55
                    echo "
\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"  class=\"btn btn-small info\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pointage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pointage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 73,  210 => 72,  195 => 59,  186 => 55,  182 => 54,  175 => 53,  171 => 52,  162 => 46,  152 => 41,  141 => 33,  138 => 32,  136 => 31,  133 => 30,  129 => 29,  122 => 24,  113 => 22,  109 => 21,  94 => 10,  85 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} {% block title %}{% endblock %} {% block body %}

\t<!-- With actions -->
\t<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
\t\tListe de Pointage
\t</h4>
\t<div>
\t\t<br>
{#\t\t<a href=\"{{ path('pointage_add') }}\" style=\"margin-right: 890px;\" class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\">Ajouter</a>#}
\t\t{{ render(path('pointage_add')) }}

\t\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px;\" >
\t\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t\t<table class=\"w-full\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employe</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Total</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">{{jour}}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\"></th>

\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t{% for pointage in pointages %}

\t\t\t\t\t\t{% if pointage.mois  == mois %}

\t\t\t\t\t<form action=\"{{path( 'pointages_update' , { 'id' : pointage.employe.id})}} \" method=\"post\">

\t\t\t\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">

\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">{{pointage.employe.nom}} {{pointage.employe.prenom}}</span>
\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t{{pointage.total }}

\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"{{jour}}\" name=\"{{pointage.employe.id}}[]\"
\t\t\t\t\t\t\t\t\t\t\t\t{% if jour in pointage.listeJours %} checked {% endif %}

\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"  class=\"btn btn-small info\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</form>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "pointage/show.html.twig", "/home/hp/Téléchargements/GRH-master/templates/pointage/show.html.twig");
    }
}
