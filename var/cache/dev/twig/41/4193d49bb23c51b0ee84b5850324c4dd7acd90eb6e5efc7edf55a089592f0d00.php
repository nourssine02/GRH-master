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

/* conges/congesCalendar.html.twig */
class __TwigTemplate_0efb9fe96678b66b222d65fc37b662547d87882877111a1970317ee5cba22fed extends Template
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/congesCalendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/congesCalendar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conges/congesCalendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        .fc-license-message{
            visibility: hidden;
        }
        #dateConges {
            width: 90%;
            font-size: 14px;
            height: 70%;
            font-family: monospace;
            margin: auto;
        }
        #modal {
            font-size: medium;
            font-weight: normal;
        }


    </style>
    <div class=\"modal shadow-1 white rounded-3\" id=\"modal\" data-ax=\"modal\" style=\"width: 40%; height: 30%;\">
        <div class=\"modal-header\">
            Header
        </div>
        <div class=\"modal-content\">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Asperiores dolorum eum in totam amet soluta! Id distinctio iusto

        </div>
";
        // line 33
        echo "    </div>
    <br>
    <button style=\"color: #2c3e50;\" data-target=\"modal\">Ajouter </button>

    <br>
    <br>
    <br>
    <div id=\"dateConges\"></div>

    <script>
        window.onload = () => {
            let calendarElt = document.getElementById(\"dateConges\");

            let calendar = new FullCalendar.Calendar(calendarElt, {
                initialView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Africa/Tunis',
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek'
                },
                buttonText: {
                    today: 'Aujourd\\'hui ',
                    month: 'Mois',
                    week: 'Semaine',

                },

                editable: true,
                eventResizableFromStart: true,
                selectable: true,
                selectHelper: true,
                select: function (start , end , allDay){
                    var title = prompt(\"Entrer event :\");

                }
            })


            calendar.render()

        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conges/congesCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <style>
        .fc-license-message{
            visibility: hidden;
        }
        #dateConges {
            width: 90%;
            font-size: 14px;
            height: 70%;
            font-family: monospace;
            margin: auto;
        }
        #modal {
            font-size: medium;
            font-weight: normal;
        }


    </style>
    <div class=\"modal shadow-1 white rounded-3\" id=\"modal\" data-ax=\"modal\" style=\"width: 40%; height: 30%;\">
        <div class=\"modal-header\">
            Header
        </div>
        <div class=\"modal-content\">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Asperiores dolorum eum in totam amet soluta! Id distinctio iusto

        </div>
{#        <div class=\"modal-footer\">#}
{#            Footer#}
{#        </div>#}
    </div>
    <br>
    <button style=\"color: #2c3e50;\" data-target=\"modal\">Ajouter </button>

    <br>
    <br>
    <br>
    <div id=\"dateConges\"></div>

    <script>
        window.onload = () => {
            let calendarElt = document.getElementById(\"dateConges\");

            let calendar = new FullCalendar.Calendar(calendarElt, {
                initialView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Africa/Tunis',
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek'
                },
                buttonText: {
                    today: 'Aujourd\\'hui ',
                    month: 'Mois',
                    week: 'Semaine',

                },

                editable: true,
                eventResizableFromStart: true,
                selectable: true,
                selectHelper: true,
                select: function (start , end , allDay){
                    var title = prompt(\"Entrer event :\");

                }
            })


            calendar.render()

        }
    </script>

{% endblock %}", "conges/congesCalendar.html.twig", "/home/hp/Téléchargements/GRH-master/templates/conges/congesCalendar.html.twig");
    }
}
