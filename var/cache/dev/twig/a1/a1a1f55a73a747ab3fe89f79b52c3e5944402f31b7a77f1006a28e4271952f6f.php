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

/* avance/list.html.twig */
class __TwigTemplate_463743230d22aa51ab320d9e5dde9d1bb96ab6a92ef519fab1f0adb676157920 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avance/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avance/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avance/list.html.twig", 1);
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
</style>
<!--  affiche alert -->
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
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
        // line 27
        echo "
<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Liste des Avances
</h4>
<div>
    <a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
        style=\"margin-left: 800px; \" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_new");
        echo "\">

        Ajouter
    </a>


    <br>
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">


                <thead>
                    <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                        <th class=\"px-4 py-3\">Employé</th>
                        <th class=\"px-4 py-3\">Montant</th>
                        <th class=\"px-4 py-3\">Date d'avance</th>
                        <th class=\"px-4 py-3\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avances"]) || array_key_exists("avances", $context) ? $context["avances"] : (function () { throw new RuntimeError('Variable "avances" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
            // line 57
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                            <tr class=\"text-gray-700 dark:text-gray-400\">


                                <td class=\"px-4 py-3 text-sm\">
                                    ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avance"], "employe", [], "any", false, false, false, 62), "html", null, true);
                echo "
                                </td>

                                <td class=\"px-4 py-3 text-sm\">
                                    ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avance"], "montant", [], "any", false, false, false, 66), "html", null, true);
                echo "DT
                                </td>


                                <td class=\"px-4 py-3 text-sm\">
                                    ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avance"], "dateAvance", [], "any", false, false, false, 71), "format", [0 => "d/m/Y"], "method", false, false, false, 71), "html", null, true);
                echo "

                                </td>


                                <td class=\"px-4 py-3 \">

                                    <div class=\"flex items-center space-x-4 text-sm \">

                                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                           aria-label=\"Edit\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_update", ["id" => twig_get_attribute($this->env, $this->source, $context["avance"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\">

                                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                <path
                                                        d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                           aria-label=\"Delete\" href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["avance"], "id", [], "any", false, false, false, 90)]), "html", null, true);
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
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 106
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avance"], "employe", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106)))) {
                    // line 107
                    echo "
                                <tr class=\"text-gray-700 dark:text-gray-400\">


                                    <td class=\"px-4 py-3 text-sm\">
                                        ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avance"], "employe", [], "any", false, false, false, 112), "html", null, true);
                    echo "
                                    </td>

                                    <td class=\"px-4 py-3 text-sm\">
                                        ";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avance"], "montant", [], "any", false, false, false, 116), "html", null, true);
                    echo "DT
                                    </td>


                                    <td class=\"px-4 py-3 text-sm\">
                                        ";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avance"], "dateAvance", [], "any", false, false, false, 121), "format", [0 => "d/m/Y"], "method", false, false, false, 121), "html", null, true);
                    echo "

                                    </td>


                                    <td class=\"px-4 py-3 \">

                                        <div class=\"flex items-center space-x-4 text-sm \">

                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Edit\" href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_update", ["id" => twig_get_attribute($this->env, $this->source, $context["avance"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "\">

                                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                    <path
                                                            d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Delete\" href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avance_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["avance"], "id", [], "any", false, false, false, 140)]), "html", null, true);
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
                // line 155
                echo "                        ";
            }
            // line 156
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "
                </tbody>
            </table>
        </div>
    </div>


</div> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avance/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 158,  299 => 156,  296 => 155,  278 => 140,  266 => 131,  253 => 121,  245 => 116,  238 => 112,  231 => 107,  228 => 106,  209 => 90,  197 => 81,  184 => 71,  176 => 66,  169 => 62,  163 => 58,  160 => 57,  156 => 56,  131 => 34,  122 => 27,  110 => 22,  106 => 21,  89 => 6,  85 => 2,  36 => 1,);
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
</style>
<!--  affiche alert -->
{% for message in app.flashes('info') %}
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
{% endfor %}

<!-- With actions -->
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Liste des Avances
</h4>
<div>
    <a class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
        style=\"margin-left: 800px; \" href=\"{{ path('avance_new')}}\">

        Ajouter
    </a>


    <br>
    <div class=\"w-full overflow-hidden rounded-lg shadow-xs\" style=\"margin-top: 50px\">
        <div class=\"w-full overflow-x-auto\">
            <table class=\"w-full whitespace-no-wrap\">


                <thead>
                    <tr
                        class=\"text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800\">
                        <th class=\"px-4 py-3\">Employé</th>
                        <th class=\"px-4 py-3\">Montant</th>
                        <th class=\"px-4 py-3\">Date d'avance</th>
                        <th class=\"px-4 py-3\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"bg-white divide-y dark:divide-gray-700 dark:bg-gray-800\">
                    {% for avance in avances %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <tr class=\"text-gray-700 dark:text-gray-400\">


                                <td class=\"px-4 py-3 text-sm\">
                                    {{avance.employe}}
                                </td>

                                <td class=\"px-4 py-3 text-sm\">
                                    {{avance.montant}}DT
                                </td>


                                <td class=\"px-4 py-3 text-sm\">
                                    {{avance.dateAvance.format('d/m/Y')}}

                                </td>


                                <td class=\"px-4 py-3 \">

                                    <div class=\"flex items-center space-x-4 text-sm \">

                                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                           aria-label=\"Edit\" href=\"{{ path('avance_update', {'id': avance.id})}}\">

                                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                <path
                                                        d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                           aria-label=\"Delete\" href=\"{{ path('avance_delete', {'id': avance.id})}}\" onclick=\"return confirm('es-tu sûr ?')\">

                                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                <path fill-rule=\"evenodd\"
                                                      d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                                      clip-rule=\"evenodd\"></path>
                                            </svg>
                                        </a>

                                    </div>
                                </td>


                            </tr>

                        {% elseif is_granted('ROLE_USER')  %}
                            {% if app.user.name.id == avance.employe.id  %}

                                <tr class=\"text-gray-700 dark:text-gray-400\">


                                    <td class=\"px-4 py-3 text-sm\">
                                        {{avance.employe}}
                                    </td>

                                    <td class=\"px-4 py-3 text-sm\">
                                        {{avance.montant}}DT
                                    </td>


                                    <td class=\"px-4 py-3 text-sm\">
                                        {{avance.dateAvance.format('d/m/Y')}}

                                    </td>


                                    <td class=\"px-4 py-3 \">

                                        <div class=\"flex items-center space-x-4 text-sm \">

                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Edit\" href=\"{{ path('avance_update', {'id': avance.id})}}\">

                                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                    <path
                                                            d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
                                               aria-label=\"Delete\" href=\"{{ path('avance_delete', {'id': avance.id})}}\" onclick=\"return confirm('es-tu sûr ?')\">

                                                <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
                                                    <path fill-rule=\"evenodd\"
                                                          d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\"
                                                          clip-rule=\"evenodd\"></path>
                                                </svg>
                                            </a>

                                        </div>
                                    </td>


                                </tr>
                            {% endif %}
                        {% endif %}

                    {% endfor %}

                </tbody>
            </table>
        </div>
    </div>


</div> {% endblock %}", "avance/list.html.twig", "/home/hp/Téléchargements/GRH-master/templates/avance/list.html.twig");
    }
}
