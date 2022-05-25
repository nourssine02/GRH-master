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

/* dashboard/departement/update.html.twig */
class __TwigTemplate_9bc1587b5886662fa2bda66b167e029d6f95d17522862e1c07e13bfe9ff06634 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}


    <button class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
            aria-label=\"Edit\"
            data-target=\"modal-example3{{departement.id}}\">

        <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
            <path
                    d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
            </path>
        </svg>
    </button>


<!-- Modal -->
<div class=\"modal fade\" id=\"modal-example3{{departement.id}}\" aria-labelledby=\"exampleModalLabel\" data-ax=\"modal\" style=\"margin-left: 350px;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier un departement </h5>
            </div>
                <form action=\"{{ path('departement_update', {'id': departement.id})}}\" method=\"post\">
                
            {{form_start(formD)}}

            <div class=\"modal-body\">
                <h6 style=\"font-weight: normal;\">{{form_widget(formD)}}</h6>

            </div>
            <div class=\"modal-footer\">
                <button data-target=\"modal-example3\" class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                <button type=\"submit\"  class=\"btn btn-small success\" >Submit</button>
            </div>
             {{form_end(formD)}}
</form>
        </div>
    </div>
</div>


{% endblock %}", "dashboard/departement/update.html.twig", "/home/hp/Téléchargements/GRH-master/templates/dashboard/departement/update.html.twig");
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

    <button class=\"flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray\"
            aria-label=\"Edit\"
            data-target=\"modal-example3";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">

        <svg class=\"w-5 h-5\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\">
            <path
                    d=\"M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z\">
            </path>
        </svg>
    </button>


<!-- Modal -->
<div class=\"modal fade\" id=\"modal-example3";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\" aria-labelledby=\"exampleModalLabel\" data-ax=\"modal\" style=\"margin-left: 350px;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier un departement </h5>
            </div>
                <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" method=\"post\">
                
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 25, $this->source); })()), 'form_start');
        echo "

            <div class=\"modal-body\">
                <h6 style=\"font-weight: normal;\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 28, $this->source); })()), 'widget');
        echo "</h6>

            </div>
            <div class=\"modal-footer\">
                <button data-target=\"modal-example3\" class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                <button type=\"submit\"  class=\"btn btn-small success\" >Submit</button>
            </div>
             ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
</form>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/departement/update.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  103 => 28,  97 => 25,  92 => 23,  83 => 17,  69 => 6,  63 => 2,  44 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departement/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departement/update.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
