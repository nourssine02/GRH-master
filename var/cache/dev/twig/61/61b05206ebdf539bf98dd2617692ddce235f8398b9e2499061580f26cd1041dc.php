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
class __TwigTemplate_3ab5d01fa80893eec8c2bfd5621661fd45d3eaaab4f5404ea6ef5c14e119abbe extends Template
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

    </style>
    <div id=\"dateConges\"></div>

    <script>
        window.onload = () => {
            let calendarElt = document.querySelector(\"#dateConges\");

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
               events: ";
        // line 41
        echo (isset($context["dataConges"]) || array_key_exists("dataConges", $context) ? $context["dataConges"] : (function () { throw new RuntimeError('Variable "dataConges" does not exist.', 41, $this->source); })());
        echo "
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
        return array (  108 => 41,  68 => 3,  58 => 2,  35 => 1,);
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

    </style>
    <div id=\"dateConges\"></div>

    <script>
        window.onload = () => {
            let calendarElt = document.querySelector(\"#dateConges\");

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
               events: {{ dataConges|raw }}
            })


            calendar.render()

        }
    </script>

{% endblock %}", "conges/congesCalendar.html.twig", "/home/hp/Téléchargements/GRH-master/templates/conges/congesCalendar.html.twig");
    }
}
