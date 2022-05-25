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

/* dashboard/service/new.html.twig */
class __TwigTemplate_a6c48bf04f81ce87acc28394b2b0f982ff1528a28c96cb20f54b75c5501788d2 extends Template
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


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>

    <button class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
            style=\"margin-left: 700px; margin-right: 200px; \" data-target=\"modal-example\"> Ajouter</button>


<!-- Modal -->

    <div class=\"modal fade\" id=\"modal-example\" data-ax=\"modal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un Service </h5>
                </div>
                <form action=\"{{ path('service_new')}}\" method=\"post\">

                    {{form_start(formS)}}

                    <div class=\"modal-body\">
                        <h6 style=\"font-weight: normal;\">{{form_widget(formS)}}</h6>
                    </div>
                    <div class=\"modal-footer\" >
                        <button data-target=\"modal-example\" class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                        <button type=\"submit\"  class=\"btn btn-small success\" >Submit</button>
                    </div>
                    {{form_end(formS)}}

                </form>
            </div>
        </div>
    </div>



{% endblock %}", "dashboard/service/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/dashboard/service/new.html.twig");
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

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>

    <button class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
            style=\"margin-left: 700px; margin-right: 200px; \" data-target=\"modal-example\"> Ajouter</button>


<!-- Modal -->

    <div class=\"modal fade\" id=\"modal-example\" data-ax=\"modal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un Service </h5>
                </div>
                <form action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_new");
        echo "\" method=\"post\">

                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formS"]) || array_key_exists("formS", $context) ? $context["formS"] : (function () { throw new RuntimeError('Variable "formS" does not exist.', 20, $this->source); })()), 'form_start');
        echo "

                    <div class=\"modal-body\">
                        <h6 style=\"font-weight: normal;\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formS"]) || array_key_exists("formS", $context) ? $context["formS"] : (function () { throw new RuntimeError('Variable "formS" does not exist.', 23, $this->source); })()), 'widget');
        echo "</h6>
                    </div>
                    <div class=\"modal-footer\" >
                        <button data-target=\"modal-example\" class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                        <button type=\"submit\"  class=\"btn btn-small success\" >Submit</button>
                    </div>
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formS"]) || array_key_exists("formS", $context) ? $context["formS"] : (function () { throw new RuntimeError('Variable "formS" does not exist.', 29, $this->source); })()), 'form_end');
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
        return "dashboard/service/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  92 => 23,  86 => 20,  81 => 18,  63 => 2,  44 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/service/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/service/new.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
