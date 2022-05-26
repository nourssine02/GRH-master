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

/* conges/calendrier.html.twig */
class __TwigTemplate_e050dfa65a81ff0845fc5559e77fddb2a259090ef8de70022de44724b480105e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/calendrier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conges/calendrier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conges/calendrier.html.twig", 1);
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
        echo "
\t<style>
.fc-license-message{
\tvisibility: hidden;
}
\t\t#calendrier {
\t\t\twidth: 90%;
\t\t\tfont-size: 14px;
\t\t\theight: 70%;
\t\t\tfont-family: monospace;
\t\t\tmargin: auto;
\t\t}
\t\t#calendarModal {
\t\t\tfont-size: medium;
\t\t\tfont-weight: normal;
\t\t}
\t\t#exampleModalLabel {
\t\t\tcolor: brown;
\t\t\tfont-weight: bold;
\t\t}
\t\th1{
\t\t\tfont-size: medium;
    \t\tfont-weight: normal;\t
\t\t}
\t</style>

\t<div id=\"calendrier\"></div>
<!--Modal -->

\t<div  class=\"modal shadow-1 white rounded-3\" id=\"calendarModal\" style=\"width: 40%; height: 35%;\">
\t\t<div class=\"modal-header\" style=\"color: brown;\">
\t\t\tcongés Details
\t\t</div>

\t\t<div class=\"modal-content\">

\t\t\t<h1 id=\"employe\"></h1>
\t\t\t<h1 id=\"dateD\"></h1>
\t\t\t<h1 id=\"raison\"></h1>
\t\t\t<h1 id=\"dateS\"></h1>
\t\t\t<h1 id=\"dateE\"></h1>
\t\t\t<h1 id=\"nbreJours\"></h1>

\t\t</div>

\t</div>


\t<script>
\t\twindow.onload = () => {
let calendarElt = document.getElementById(\"calendrier\");

let calendar = new FullCalendar.Calendar(calendarElt, {
initialView: 'dayGridMonth',
locale: 'fr',
timeZone: 'Africa/Tunis',
headerToolbar: {
start: 'prev,next today',
center: 'title',
end: 'dayGridMonth,timeGridWeek,timeGridDay'
},
buttonText: {
today: 'Aujourd\\'hui ',
month: 'Mois',
week: 'Semaine',
day: 'Jour'
},
events: ";
        // line 70
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 70, $this->source); })());
        echo ",
editable: true,
eventResizableFromStart: true,

eventClick: function (e) {
var eventObj = e.event;
let dateStart = eventObj.start;
let start = new Date(dateStart).toISOString().slice(0, 10);

let dateEnd = eventObj.end;
let end = new Date(dateEnd).toISOString().slice(0, 10);
\tlet modal = new Axentix.Modal('#calendarModal');
\tmodal.open();

\$('#employe').html('Nom d\\'employe  : ' + eventObj.extendedProps.employe);
\$('#dateD').html('Date de demande : ' + new Date(eventObj.extendedProps.dateDemande).toISOString().slice(0, 10));
\$('#raison').html('Raison :' + eventObj.title);
\$('#dateS').html('Date de depart : ' + start);
\$('#dateE').html('Date de retour : ' + end);
\$('#nbreJours').html('Nombre de jour : ' + eventObj.extendedProps.nbreJours);

\$('#myId').val(eventObj.id);


}


})

calendar.on('eventChange', (e) => {

let url = `/conges/calendar/update/\${
e.event.id
}`
let donnees = {
\"title\": e.event.title,
\"start\": e.event.start,
\"end\": e.event.end,
\"backgroundColor\": e.event.backgroundColor,
\"textColor\": e.event.textColor,
\"allDay\": e.event.allDay

}
console.log(donnees);

let xhr = new XMLHttpRequest;
xhr.open(\"PUT\", url);
xhr.send(JSON.stringify(donnees));
calendar.render()

})
calendar.render()

}
\t</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conges/calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 70,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

\t<style>
.fc-license-message{
\tvisibility: hidden;
}
\t\t#calendrier {
\t\t\twidth: 90%;
\t\t\tfont-size: 14px;
\t\t\theight: 70%;
\t\t\tfont-family: monospace;
\t\t\tmargin: auto;
\t\t}
\t\t#calendarModal {
\t\t\tfont-size: medium;
\t\t\tfont-weight: normal;
\t\t}
\t\t#exampleModalLabel {
\t\t\tcolor: brown;
\t\t\tfont-weight: bold;
\t\t}
\t\th1{
\t\t\tfont-size: medium;
    \t\tfont-weight: normal;\t
\t\t}
\t</style>

\t<div id=\"calendrier\"></div>
<!--Modal -->

\t<div  class=\"modal shadow-1 white rounded-3\" id=\"calendarModal\" style=\"width: 40%; height: 35%;\">
\t\t<div class=\"modal-header\" style=\"color: brown;\">
\t\t\tcongés Details
\t\t</div>

\t\t<div class=\"modal-content\">

\t\t\t<h1 id=\"employe\"></h1>
\t\t\t<h1 id=\"dateD\"></h1>
\t\t\t<h1 id=\"raison\"></h1>
\t\t\t<h1 id=\"dateS\"></h1>
\t\t\t<h1 id=\"dateE\"></h1>
\t\t\t<h1 id=\"nbreJours\"></h1>

\t\t</div>

\t</div>


\t<script>
\t\twindow.onload = () => {
let calendarElt = document.getElementById(\"calendrier\");

let calendar = new FullCalendar.Calendar(calendarElt, {
initialView: 'dayGridMonth',
locale: 'fr',
timeZone: 'Africa/Tunis',
headerToolbar: {
start: 'prev,next today',
center: 'title',
end: 'dayGridMonth,timeGridWeek,timeGridDay'
},
buttonText: {
today: 'Aujourd\\'hui ',
month: 'Mois',
week: 'Semaine',
day: 'Jour'
},
events: {{ data| raw }},
editable: true,
eventResizableFromStart: true,

eventClick: function (e) {
var eventObj = e.event;
let dateStart = eventObj.start;
let start = new Date(dateStart).toISOString().slice(0, 10);

let dateEnd = eventObj.end;
let end = new Date(dateEnd).toISOString().slice(0, 10);
\tlet modal = new Axentix.Modal('#calendarModal');
\tmodal.open();

\$('#employe').html('Nom d\\'employe  : ' + eventObj.extendedProps.employe);
\$('#dateD').html('Date de demande : ' + new Date(eventObj.extendedProps.dateDemande).toISOString().slice(0, 10));
\$('#raison').html('Raison :' + eventObj.title);
\$('#dateS').html('Date de depart : ' + start);
\$('#dateE').html('Date de retour : ' + end);
\$('#nbreJours').html('Nombre de jour : ' + eventObj.extendedProps.nbreJours);

\$('#myId').val(eventObj.id);


}


})

calendar.on('eventChange', (e) => {

let url = `/conges/calendar/update/\${
e.event.id
}`
let donnees = {
\"title\": e.event.title,
\"start\": e.event.start,
\"end\": e.event.end,
\"backgroundColor\": e.event.backgroundColor,
\"textColor\": e.event.textColor,
\"allDay\": e.event.allDay

}
console.log(donnees);

let xhr = new XMLHttpRequest;
xhr.open(\"PUT\", url);
xhr.send(JSON.stringify(donnees));
calendar.render()

})
calendar.render()

}
\t</script>


{% endblock %}
", "conges/calendrier.html.twig", "/home/hp/Téléchargements/GRH-master/templates/conges/calendrier.html.twig");
    }
}
