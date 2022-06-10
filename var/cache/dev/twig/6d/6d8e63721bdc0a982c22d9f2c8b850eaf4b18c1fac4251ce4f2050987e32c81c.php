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

/* dashboard/departement/list.html.twig */
class __TwigTemplate_7df3f0f558fd73210ca87cfd8d761e6dda0d4c05123720ad1157d229edaa5bcc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departement/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departement/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/departement/list.html.twig", 1);
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
<!-- Font Awesome -->
";
        // line 6
        echo "
<style>
    body {
        background-color: #f9fafb;
        height: 100%;
        width: 100%;
        /* overflow-y: hidden; */
    }

    strong {
        color: #9c6644;
    }

    .datefin {
        font-weight: bold;
        color: green;
    }

    .motif {
        font-weight: bold;
    }

    font .modal-lg {
        max-width: 50% !important;
    }
</style>
<!--  affiche alert -->
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Liste des Departement
</h4>

";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_new"));
        echo "

<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 20px; width: 50%; margin-left: 150px\">
    <div class=\"w-full overflow-hidden\">
        <table class=\"w-full whitespace-no-wrap\">
            <thead>
                <tr
                    class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                    <th class=\"px-4 py-3\">Nom du Departement</th>

                    <th class=\"px-4 py-3\">Actions</th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departements"]) || array_key_exists("departements", $context) ? $context["departements"] : (function () { throw new RuntimeError('Variable "departements" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 59
            echo "                <tr class=\"text-gray-700 dark:text-gray-400\">

                    <td class=\"px-4 py-3 text-sm\">
                        ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "nom", [], "any", false, false, false, 62), "html", null, true);
            echo "
                    </td>

                    <td class=\"px-4 py-3 \">
                        <div class=\"flex items-center space-x-4 text-sm \">
                            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 67)]));
            echo "
                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                aria-label=\"Delete\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" onclick=\"return confirm('es-tu sûr ?')\">

                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\"
                                        d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                        clip-rule=\"evenodd\"></path>
                                </svg>
                            </a>

                        </div>
                    </td>


                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/departement/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 84,  180 => 69,  175 => 67,  167 => 62,  162 => 59,  158 => 58,  141 => 44,  134 => 39,  122 => 34,  118 => 33,  89 => 6,  85 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} {% block title %}{% endblock %} {% block body %}

<!-- Font Awesome -->
{#
<link href=\"vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"> #}

<style>
    body {
        background-color: #f9fafb;
        height: 100%;
        width: 100%;
        /* overflow-y: hidden; */
    }

    strong {
        color: #9c6644;
    }

    .datefin {
        font-weight: bold;
        color: green;
    }

    .motif {
        font-weight: bold;
    }

    font .modal-lg {
        max-width: 50% !important;
    }
</style>
<!--  affiche alert -->
{% for message in app.flashes('info') %}
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
{% endfor %}
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Liste des Departement
</h4>

{{ render(path('departement_new')) }}

<div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 20px; width: 50%; margin-left: 150px\">
    <div class=\"w-full overflow-hidden\">
        <table class=\"w-full whitespace-no-wrap\">
            <thead>
                <tr
                    class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                    <th class=\"px-4 py-3\">Nom du Departement</th>

                    <th class=\"px-4 py-3\">Actions</th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                {% for departement in departements %}
                <tr class=\"text-gray-700 dark:text-gray-400\">

                    <td class=\"px-4 py-3 text-sm\">
                        {{departement.nom}}
                    </td>

                    <td class=\"px-4 py-3 \">
                        <div class=\"flex items-center space-x-4 text-sm \">
                            {{ render(path('departement_update' ,{'id': departement.id })) }}
                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                aria-label=\"Delete\" href=\"{{ path('departement_delete', {'id': departement.id})}}\" onclick=\"return confirm('es-tu sûr ?')\">

                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\"
                                        d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                        clip-rule=\"evenodd\"></path>
                                </svg>
                            </a>

                        </div>
                    </td>


                </tr>
                {% endfor %}

            </tbody>
        </table>
    </div>
</div>
{% endblock %}

", "dashboard/departement/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/dashboard/departement/list.html.twig");
    }
}
