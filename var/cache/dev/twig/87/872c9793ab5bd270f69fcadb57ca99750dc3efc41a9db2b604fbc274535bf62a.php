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

/* dashboard/departement/new.html.twig */
class __TwigTemplate_9357c071b65073a7716585c1db54ecf8a076896aee4b481c9482058d33ee0973 extends Template
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




{#<button type=\"button\" class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"#}
{#    style=\"margin-left: 700px; margin-right: 200px; \"  data-bs-toggle=\"modal\"#}
{#    data-bs-target=\"#exampleModal\" id=\"btn\">#}

{#    Ajouter#}
{#</button>#}

    <button class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
       style=\"margin-left: 700px; margin-right: 200px; \" data-target=\"modal-example\"> Ajouter</button>



{#    <div class=\"modal fade\" id=\"modal-example\" data-ax=\"modal\">#}
{#        <div class=\"modal-dialog\">#}
{#            <div class=\"modal-content\">#}
{#                <div class=\"modal-header\">#}
{#                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un departement </h5>#}

{#                </div>#}
{#                <form action=\"{{ path('departement_new')}}\" method=\"post\">#}

{#                    {{form_start(formD)}}#}
{#                        <div class=\"modal-content\">#}

{#                             <h6 style=\"font-weight: normal;\">{{form_widget(formD)}}</h6>#}
{#                        </div>#}

{#                        <div class=\"modal-footer\">#}
{#                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>#}
{#                            <button type=\"submit\"  class=\"btn btn-success\" >Submit</button>#}
{#                        </div>#}
{#                    {{form_end(formD)}}#}

{#                </form>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}



<!-- Modal -->
    <div class=\"modal fade\" id=\"modal-example\" data-ax=\"modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un departement </h5>
{#                <button type=\"button\" class=\"btn-close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>#}
            </div>
                <form action=\"{{ path('departement_new')}}\" method=\"post\">

                {{form_start(formD)}}

                <div class=\"modal-body\">
                    <h6 style=\"font-weight: normal;\">{{form_widget(formD)}}</h6>

                </div>
                <div class=\"modal-footer\" >
                    <button data-target=\"modal-example\" class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                    <button type=\"submit\"  class=\"btn btn-small success\" >Submit</button>
                </div>
                 {{form_end(formD)}}
            </form>
        </div>
    </div>
</div>


{% endblock %}", "dashboard/departement/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/dashboard/departement/new.html.twig");
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




";
        // line 11
        echo "
";
        // line 14
        echo "
    <button class=\"px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple\"
       style=\"margin-left: 700px; margin-right: 200px; \" data-target=\"modal-example\"> Ajouter</button>



";
        // line 25
        echo "
";
        // line 28
        echo "
";
        // line 31
        echo "
";
        // line 34
        echo "
";
        // line 40
        echo "
";
        // line 45
        echo "


<!-- Modal -->
    <div class=\"modal fade\" id=\"modal-example\" data-ax=\"modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un departement </h5>
";
        // line 55
        echo "            </div>
                <form action=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_new");
        echo "\" method=\"post\">

                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 58, $this->source); })()), 'form_start');
        echo "

                <div class=\"modal-body\">
                    <h6 style=\"font-weight: normal;\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 61, $this->source); })()), 'widget');
        echo "</h6>

                </div>
                <div class=\"modal-footer\" >
                    <button data-target=\"modal-example\" class=\"ml-auto btn shadow-1 rounded-1 btn-small primary\">Close</button>
                    <button type=\"submit\"  class=\"btn btn-small success\" >Submit</button>
                </div>
                 ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 68, $this->source); })()), 'form_end');
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
        return "dashboard/departement/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 68,  122 => 61,  116 => 58,  111 => 56,  108 => 55,  97 => 45,  94 => 40,  91 => 34,  88 => 31,  85 => 28,  82 => 25,  74 => 14,  71 => 11,  63 => 2,  44 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departement/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departement/new.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
