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

/* pointage/ajax.html.twig */
class __TwigTemplate_c4ed9c70a9b5fce5f3cc5a36fe7532c632fef14e16ac7bba8237ca3e98a727c5 extends Template
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
{#\t<a  href=\"{{ path('pointages_listUpdate') }}\" type=\"submit\" value=\"Update\" style=\"margin-left: 700px; margin-bottom: -30px;\" class=\"btn btn-outline-dark\"#}
{#\t>Update</a>#}

\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full whitespace-no-wrap\">


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

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t{% for pointage in pointages %}

\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">{{pointage.employe.nom}} {{pointage.employe.nom}}</span>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t{{pointage.total}}
\t\t\t\t\t\t</td>


\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% for jour in sommeJour %}
\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"{{jour}}\" {% if jour in
\t\t\t\t\t\t\t\tpointage.listeJours %} checked {% endif %} onclick=\"myFunction(this.value);\">

\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t{% endfor %}

\t\t\t</table>
\t\t</div>
\t</div>

</div>

\t<script>
\t\tfunction myFunction(id) {
\t\t\t//alert(id);
\t\t\t\$.ajax({
\t\t\t\tmethod: \"GET \",
\t\t\t\turl: \"{{ path( 'pointages_update' , { 'id' : \" +
\t\t\t\t\tid + \" }) }}\",
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t},
\t\t\t\tcache: false,
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tconsole.log(data);
\t\t\t\t}


\t\t\t});

\t\t}
\t</script>
{% endblock %}
", "pointage/ajax.html.twig", "/home/hp/Téléchargements/GRH-master/templates/pointage/ajax.html.twig");
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
        return "pointage/ajax.html.twig";
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
";
        // line 13
        echo "
\t<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
\t\t<div class=\"w-full overflow-x-auto\">
\t\t\t<table class=\"w-full whitespace-no-wrap\">


\t\t\t\t<thead>
\t\t\t\t\t<tr
\t\t\t\t\t\tclass=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
\t\t\t\t\t\t<th class=\"px-4 py-3\">Employe</th>
\t\t\t\t\t\t<th class=\"px-4 py-3\">Total</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 27
            echo "\t\t\t\t\t\t\t<span style=\"margin-left: 6px;\">";
            echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t\t\t</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pointages"]) || array_key_exists("pointages", $context) ? $context["pointages"] : (function () { throw new RuntimeError('Variable "pointages" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pointage"]) {
            // line 34
            echo "
\t\t\t\t<tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">

\t\t\t\t\t<tr class=\"text-gray-700 dark:text-gray-400\">


\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t<span style=\"font-weight: bold;\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pointage"], "employe", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"px-4 py-3 text-sm\">
\t\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointage"], "total", [], "any", false, false, false, 45), "html", null, true);
            echo "
\t\t\t\t\t\t</td>


\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sommeJour"]) || array_key_exists("sommeJour", $context) ? $context["sommeJour"] : (function () { throw new RuntimeError('Variable "sommeJour" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 51
                echo "\t\t\t\t\t\t\t<input style=\"margin-left: 6px;\" type=\"checkbox\" class=\"jour\" value=\"";
                echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["jour"], twig_get_attribute($this->env, $this->source,                 // line 52
$context["pointage"], "listeJours", [], "any", false, false, false, 52))) {
                    echo " checked ";
                }
                echo " onclick=\"myFunction(this.value);\">

\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pointage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
\t\t\t</table>
\t\t</div>
\t</div>

</div>

\t<script>
\t\tfunction myFunction(id) {
\t\t\t//alert(id);
\t\t\t\$.ajax({
\t\t\t\tmethod: \"GET \",
\t\t\t\turl: \"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointages_update", ["id" => " +
\t\t\t\t\tid + "]);
        // line 72
        echo "\",
\t\t\t\tdata: {
\t\t\t\t\tid: id,
\t\t\t\t},
\t\t\t\tcache: false,
\t\t\t\tsuccess: function (data) {
\t\t\t\t\tconsole.log(data);
\t\t\t\t}


\t\t\t});

\t\t}
\t</script>
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
        return array (  205 => 72,  202 => 71,  188 => 59,  179 => 55,  168 => 52,  164 => 51,  160 => 50,  152 => 45,  143 => 41,  134 => 34,  130 => 33,  124 => 29,  115 => 27,  111 => 26,  96 => 13,  85 => 2,  36 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/ajax.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/ajax.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
