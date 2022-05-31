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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/list.html.twig", 1);
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

\t\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px;\" >
\t\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t\t<table class=\"w-full\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
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
            echo "\t\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">";
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
\t\t\t\t\t</thead>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 29
            echo "
\t\t\t\t\t\t<form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointages_update", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo " \" method=\"post\">
\t\t\t\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">

\t\t\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"";
                echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "[]\"
";
                // line 51
                echo "
";
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"   class=\"btn btn-small info\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return "pointage/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 67,  183 => 56,  175 => 53,  172 => 51,  165 => 49,  161 => 48,  152 => 42,  142 => 37,  132 => 30,  129 => 29,  125 => 28,  118 => 23,  109 => 21,  105 => 20,  85 => 2,  36 => 1,);
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

\t\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px;\" >
\t\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t\t<table class=\"w-full\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employe</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Total</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">{{jour}}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\"></th>

\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t{% for employe in employes %}

\t\t\t\t\t\t<form action=\"{{path( 'pointages_update' , { 'id' : employe.id})}} \" method=\"post\">
\t\t\t\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">

\t\t\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">{{employe.nom}} {{employe.prenom}}</span>

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{total }}

\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"{{jour}}\" name=\"{{employe.id}}[]\"
{#\t\t\t\t\t\t\t\t\t\t\t\t{% if jour in liste %} checked {% endif %}#}

{#\t\t\t\t\t\t\t\t\t\t\t\t{% if aujourdhui==jour %} checked {% endif %}#}
\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Valide\"   class=\"btn btn-small info\" style=\"margin-bottom: 15px;\">
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</form>
\t\t\t\t\t{% endfor %}

\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t</div>




{% endblock %}
", "pointage/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/pointage/list.html.twig");
    }
}
