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

/* employe/new.html.twig */
class __TwigTemplate_6044e3b964ed35d8943704daea8edebf996a15ce7749d7ca27a5b668a7607c21 extends Template
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
        return new Source("{% extends 'base.html.twig' %} {% block title %}{% endblock %} {% block body %}

<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Ajouter Employé
</h4>


<style>
    .tabs {
        width: 100%;
        display: inline-block;
    }
    
    .tabs h4 {
        color: #CB997E;
        margin: 5px 0 15px;
        display: inline-block;
    }
    
    .tab-links:after {
        display: block;
        clear: both;
        content: '';
    }
    
    .tab-links {
        padding: 0;
        margin: 10px 0 0;
        position: relative;
        top: 2px;
    }
    
    .tab-links li {
        margin: 0 5px 0 0;
        float: left;
        padding-top: 2px;
        list-style: none;
    }
    
    .tab-links a {
        padding: 9px 8px 6px;
        display: inline-block;
        background: #CB997E;
        border: 2px solid #CB997E;
        border-bottom: 3px solid #CB997E;
        font-size: 10.5px;
        font-weight: 600;
        color: #fff;
        transition: all linear 0.15s;
    }
    
    .tab-links button {
        padding: 9px 8px 6px;
        display: inline-block;
        background: #CB997E;
        border: 2px solid #CB997E;
        border-bottom: 3px solid #CB997E;
        font-size: 10.5px;
        font-weight: 600;
        color: #fff;
        transition: all linear 0.15s;
    }
    
    .tab-links a:hover {
        background: #CB997E;
        text-decoration: none;
        border: 2px solid #CB997E;
        border-bottom: 3px solid #CB997E;
        color: #fff;
    }
    
    li.active a,
    li.active a:hover {
        background: #CB997E;
        height: 35px;
        border-bottom: none;
        color: #fff;
    }
    
    .tab-content,
    .uploaded-documents-container {
        padding: 15px;
        border-radius: 3px;
        border: 2px solid #CB997E;
        background: #fff;
        font-size: 0.95em;
    }
    
    .tab-content-scroll {
        max-height: 375px;
        min-height: 375px;
        max-width: 1100px;
        min-width: 450px;
        overflow: auto;
        clear: both;
    }
    
    .tab-content-scroll-home {
        min-height: 135px;
    }
    
    .button-bar-scroll {
        min-height: 235px;
    }
    
    .tab-content-scroll>p {
        margin-top: 0;
        padding-right: 12px;
    }
    
    .tab-content a {
        margin-top: 10px;
        color: #fff;
    }
    
    .tab {
        display: none;
    }
    
    .tab.active {
        display: block;
    }
</style>

<div class=\"tabs\">
    <ul class=\"tab-links\" hidden >
        <li class=\"active\">
            <a href=\"#tab1\">Tab #1</a>
        </li>
        <li>
            <a href=\"#tab2\">Tab #2</a>
        </li>
        <li>
            <a href=\"#tab3\">Tab #3</a>
        </li>
        {# <li>
            <a href=\"#tab4\">Tab #4</a>
        </li> #}
    </ul>

    <div class=\"tab-content\">
        <form action=\"{{ path('employe_new')}}\" method=\"post\">

            {{form_start(formE , {'attr': {'novalidate' : 'novalidate'}})}}


            <div id=\"tab1\" class=\"tab active\">
                <div class=\"wrapper\">


                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Matricule</span>
                                {{form_row(formE.matricule , { 'label' : false} )}}
\t\t\t\t\t\t\t</label>
                    </div>

                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nom</span>
\t\t\t\t\t\t\t\t{{form_row(formE.nom , { 'label' : false})}}


\t\t\t\t\t\t\t</label>
                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Prenom</span>
\t\t\t\t\t\t\t\t{{form_row(formE.prenom , { 'label' : false})}}
                    
\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t{{form_row(formE.sexe , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box5\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Adresse</span>
\t\t\t\t\t\t\t\t{{form_row(formE.adresse , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box6\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Telephone</span>
\t\t\t\t\t\t\t\t{{form_row(formE.telephone , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box7\">
                        <label class=\"block text-sm\">

\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date de naissance</span>
\t\t\t\t\t\t\t\t{{form_row(formE.dateNais , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box8\">

                        <label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tSituation Familial
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t{{form_row(formE.situationFamilial, { 'label' : false } )}}


\t\t\t\t\t\t\t</label>

                        <div id=\"ifYes\" style=\"display: none;\">

                            <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nombre d'enfants</span>

\t\t\t\t\t\t\t\t\t{{form_row(formE.nbreEnfants , { 'label' : false} , {'novalidate' : true} )}}

\t\t\t\t\t\t\t\t</label>
                        </div>


                    </div>

                    <div class=\"box9\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Email</span>
\t\t\t\t\t\t\t\t{{form_row(formE.email , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>
              

                </div>

                <ul class=\"tab-links\">
                    <li>
                        <a href=\"{{ path('employe_list')}}\" type=\"submit\">Cancel</a>
                        <a href=\"#next_tab2\" class=\"nextButton\">Next</a>
                    </li>
                </ul>
            </div>

            <div id=\"tab2\" class=\"tab\">
                <div class=\"wrapper\">


                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">N° CIN</span>
\t\t\t\t\t\t\t\t{{form_row(formE.cin , { 'label' : false})}}


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Departement</span>
\t\t\t\t\t\t\t\t{{form_row(formE.departement , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Service</span>
\t\t\t\t\t\t\t\t{{form_row(formE.service , { 'label' : false})}}


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Titre</span>
\t\t\t\t\t\t\t\t{{form_row(formE.titre , { 'label' : false})}}


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box5\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">N° CNSS</span>
\t\t\t\t\t\t\t\t{{form_row(formE.cnss , { 'label' : false})}}

\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box6\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date d'Embauche</span>
\t\t\t\t\t\t\t\t{{form_row(formE.dateEmbauche , { 'label' : false})}}

\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box7\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Echelon</span>

\t\t\t\t\t\t\t\t{{form_row(formE.echelon , { 'label' : false})}}

\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box8\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Categorie</span>
\t\t\t\t\t\t\t\t{{form_row(formE.categorie , { 'label' : false})}}

\t\t\t\t\t\t\t</label>

                    </div>

                    <div class=\"box9\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tType de Contrat
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t{{form_row(formE.typeContrat , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>

                </div>

                <ul class=\"tab-links\">
                    <li>
                        <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                        <a href=\"#next_tab2\" class=\"nextButton\">Next</a>
                    </li>
                </ul>
            </div>

            <div id=\"tab3\" class=\"tab\">
                <div class=\"wrapper\">

                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Salaire de Base</span>

\t\t\t\t\t\t\t\t{{form_row(formE.salaireBase , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Primes</span>

\t\t\t\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\" id=\"exp_list\" data-prototype=\"{{ form_row(formE.prime.vars.prototype)|e('html_attr') }}\">

\t\t\t\t\t\t\t\t\t{% for row in formE.prime %}
\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-warning\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{ row.vars.value.nom }}</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ row.vars.value.montant }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(row) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</label>

                    </div>

                    <div class=\"box3\">
                        <div class=\"block text-sm\">

                            <span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tType de Paie
\t\t\t\t\t\t\t\t</span> {{form_row(formE.typePaie , { 'label' : false})}}

                        </div>

                    </div>

                    <div class=\"box4\">
                        <label class=\"block mt-4 text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tMoyen de Paiement
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t{{form_row(formE.moyenPaiement , { 'label' : false})}}


\t\t\t\t\t\t\t</label>

                        <br>

                        <div id=\"ifOk\" style=\"display: none;\">

                            <div class=\"box5\">

                                <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nom du Banque
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{{form_row(formE.nomBanque , { 'label' : false} ,{'novalidate' : true})}}


\t\t\t\t\t\t\t\t\t</label>

                                <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Numero Compte
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{{form_row(formE.numCompteBanc , { 'label' : false} , {'novalidate' : true})}}


\t\t\t\t\t\t\t\t\t</label>

                            </div>

                        </div>

                    </div>

                </div>
        
                    <br><br> <br> <br> <br> <br>
                <ul class=\"tab-links\">
                    <li>
                        <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                        <button href=\"{{ path('employe_list') }}\" type=\"submit\">Submit</button>


                    </li>
                </ul>
                <br>

            </div>
            {{form_end(formE)}}
        </form>
    </div>


</div>


<script>


    jQuery(document).ready(function() {
        jQuery('.tabs .tab-links a').on('click', function(e) {
            var currentAttrValue = jQuery(this).attr('href');

            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

            e.preventDefault();
        });


        jQuery('.nextButton').on('click', function() {

            var \$activeTab = \$('.tab-links li.active');

            var \$wrapper = jQuery(this).closest('.tabs');
            var indexActive = \$wrapper.find('li.active').index();
            \$wrapper.find('li').eq(indexActive + 1).find('a').click();
        });

        jQuery('.prevButton').on('click', function() {

            var \$activeTab = \$('.tab-links li.active');

            var \$wrapper = jQuery(this).closest('.tabs');
            var indexActive = \$wrapper.find('li.active').index();
            \$wrapper.find('li').eq(indexActive - 1).find('a').click();
        });

    });


    /****  show and hide block *****/

    function yesnoCheck(that) {
        if (that.value == \"Marié\" || that.value == \"Divorcé\" || that.value == \"Veuf\") { // alert(\"check\");
            document.getElementById(\"ifYes\").style.display = \"block\";
        } else {
            document.getElementById(\"ifYes\").style.display = \"none\";
        }
    }

    function chooseOne(that) {
        if (that.value == \"Virement\") { // alert(\"check\");
            document.getElementById(\"ifOk\").style.display = \"block\";
            document.getElementById(\"ifOk\").style.marginTop = \"2px\";


        } else {
            document.getElementById(\"ifOk\").style.display = \"none\";
        }
    }


    /****************************************/


    // this variable is the list in the dom, it's initiliazed when the document is ready
    var \$collectionHolder;
    // the link which we click on to add new items
    var \$addNewItem = \$('<a href=\"#\" style=\"color: #633615\" >Add new item</a>');
    // when the page is loaded and ready
    \$(document).ready(function() { // get the collectionHolder, initilize the var by getting the list;
        \$collectionHolder = \$('#exp_list');
        // append the add new item link to the collectionHolder
        \$collectionHolder.append(\$addNewItem);
        // add an index property to the collectionHolder which helps track the count of forms we have in the list
        \$collectionHolder.data('index', \$collectionHolder.find('.panel').length)
            // finds all the panels in the list and foreach one of them we add a remove button to it
            // add remove button to existing items
        \$collectionHolder.find('.panel').each(function() {
            // \$(this) means the current panel that we are at
            // which means we pass the panel to the addRemoveButton function
            // inside the function we create a footer and remove link and append them to the panel
            // more informations in the function inside
            addRemoveButton(\$(this));
        });
        // handle the click event for addNewItem
        \$addNewItem.click(function(e) {
            // preventDefault() is your  homework if you don't know what it is
            // also look up preventPropagation both are usefull
            e.preventDefault();
            // create a new form and append it to the collectionHolder
            // and by form we mean a new panel which contains the form
            addNewForm();
        })
    });
    /*
     * creates a new form and appends it to the collectionHolder
     */
    function addNewForm() {
        // getting the prototype
        // the prototype is the form itself, plain html
        var prototype = \$collectionHolder.data('prototype');
        // get the index
        // this is the index we set when the document was ready, look above for more info
        var index = \$collectionHolder.data('index');
        // create the form
        var newForm = prototype;
        // replace the __name__ string in the html using a regular expression with the index value
        newForm = newForm.replace(/__name__/g, index);
        // incrementing the index data and setting it again to the collectionHolder
        \$collectionHolder.data('index', index + 1);
        // create the panel
        // this is the panel that will be appending to the collectionHolder
        var \$panel = \$('<div class=\"panel panel-warning\"><div class=\"panel-heading\"></div></div>');
        // create the panel-body and append the form to it
        var \$panelBody = \$('<div class=\"panel-body\"></div>').append(newForm);
        // append the body to the panel
        \$panel.append(\$panelBody);
        // append the removebutton to the new panel
        addRemoveButton(\$panel);
        // append the panel to the addNewItem
        // we are doing it this way to that the link is always at the bottom of the collectionHolder
        \$addNewItem.before(\$panel);
    }

    /**
     * adds a remove button to the panel that is passed in the parameter
     * @param \$panel
     */
    function addRemoveButton(\$panel) { // create remove button
        var \$removeButton = \$('<a href=\"#\"  style=\"color: #633615\">Remove</a>');
        // appending the removebutton to the panel footer
        var \$panelFooter = \$('<div class=\"panel-footer\"></div>').append(\$removeButton);
        // handle the click event of the remove button
        \$removeButton.click(function(e) {
            e.preventDefault();
            // gets the parent of the button that we clicked on \"the panel\" and animates it
            // after the animation is done the element (the panel) is removed from the html
            \$(e.target).parents('.panel').slideUp(1000, function() {
                \$(this).remove();
            })
        });
        // append the footer to the panel
        \$panel.append(\$panelFooter);
    }
</script>
{% endblock %}", "employe/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/employe/new.html.twig");
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
        return "employe/new.html.twig";
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
<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Ajouter Employé
</h4>


<style>
    .tabs {
        width: 100%;
        display: inline-block;
    }
    
    .tabs h4 {
        color: #CB997E;
        margin: 5px 0 15px;
        display: inline-block;
    }
    
    .tab-links:after {
        display: block;
        clear: both;
        content: '';
    }
    
    .tab-links {
        padding: 0;
        margin: 10px 0 0;
        position: relative;
        top: 2px;
    }
    
    .tab-links li {
        margin: 0 5px 0 0;
        float: left;
        padding-top: 2px;
        list-style: none;
    }
    
    .tab-links a {
        padding: 9px 8px 6px;
        display: inline-block;
        background: #CB997E;
        border: 2px solid #CB997E;
        border-bottom: 3px solid #CB997E;
        font-size: 10.5px;
        font-weight: 600;
        color: #fff;
        transition: all linear 0.15s;
    }
    
    .tab-links button {
        padding: 9px 8px 6px;
        display: inline-block;
        background: #CB997E;
        border: 2px solid #CB997E;
        border-bottom: 3px solid #CB997E;
        font-size: 10.5px;
        font-weight: 600;
        color: #fff;
        transition: all linear 0.15s;
    }
    
    .tab-links a:hover {
        background: #CB997E;
        text-decoration: none;
        border: 2px solid #CB997E;
        border-bottom: 3px solid #CB997E;
        color: #fff;
    }
    
    li.active a,
    li.active a:hover {
        background: #CB997E;
        height: 35px;
        border-bottom: none;
        color: #fff;
    }
    
    .tab-content,
    .uploaded-documents-container {
        padding: 15px;
        border-radius: 3px;
        border: 2px solid #CB997E;
        background: #fff;
        font-size: 0.95em;
    }
    
    .tab-content-scroll {
        max-height: 375px;
        min-height: 375px;
        max-width: 1100px;
        min-width: 450px;
        overflow: auto;
        clear: both;
    }
    
    .tab-content-scroll-home {
        min-height: 135px;
    }
    
    .button-bar-scroll {
        min-height: 235px;
    }
    
    .tab-content-scroll>p {
        margin-top: 0;
        padding-right: 12px;
    }
    
    .tab-content a {
        margin-top: 10px;
        color: #fff;
    }
    
    .tab {
        display: none;
    }
    
    .tab.active {
        display: block;
    }
</style>

<div class=\"tabs\">
    <ul class=\"tab-links\" hidden >
        <li class=\"active\">
            <a href=\"#tab1\">Tab #1</a>
        </li>
        <li>
            <a href=\"#tab2\">Tab #2</a>
        </li>
        <li>
            <a href=\"#tab3\">Tab #3</a>
        </li>
        ";
        // line 139
        echo "    </ul>

    <div class=\"tab-content\">
        <form action=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_new");
        echo "\" method=\"post\">

            ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 144, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


            <div id=\"tab1\" class=\"tab active\">
                <div class=\"wrapper\">


                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Matricule</span>
                                ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 154, $this->source); })()), "matricule", [], "any", false, false, false, 154), 'row', ["label" => false]);
        echo "
\t\t\t\t\t\t\t</label>
                    </div>

                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nom</span>
\t\t\t\t\t\t\t\t";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 161, $this->source); })()), "nom", [], "any", false, false, false, 161), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>
                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Prenom</span>
\t\t\t\t\t\t\t\t";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 170, $this->source); })()), "prenom", [], "any", false, false, false, 170), 'row', ["label" => false]);
        echo "
                    
\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 183, $this->source); })()), "sexe", [], "any", false, false, false, 183), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box5\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Adresse</span>
\t\t\t\t\t\t\t\t";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 192, $this->source); })()), "adresse", [], "any", false, false, false, 192), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box6\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Telephone</span>
\t\t\t\t\t\t\t\t";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 201, $this->source); })()), "telephone", [], "any", false, false, false, 201), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box7\">
                        <label class=\"block text-sm\">

\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date de naissance</span>
\t\t\t\t\t\t\t\t";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 211, $this->source); })()), "dateNais", [], "any", false, false, false, 211), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box8\">

                        <label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tSituation Familial
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 226, $this->source); })()), "situationFamilial", [], "any", false, false, false, 226), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                        <div id=\"ifYes\" style=\"display: none;\">

                            <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nombre d'enfants</span>

\t\t\t\t\t\t\t\t\t";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 236, $this->source); })()), "nbreEnfants", [], "any", false, false, false, 236), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t\t</label>
                        </div>


                    </div>

                    <div class=\"box9\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Email</span>
\t\t\t\t\t\t\t\t";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 247, $this->source); })()), "email", [], "any", false, false, false, 247), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
              

                </div>

                <ul class=\"tab-links\">
                    <li>
                        <a href=\"";
        // line 259
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_list");
        echo "\" type=\"submit\">Cancel</a>
                        <a href=\"#next_tab2\" class=\"nextButton\">Next</a>
                    </li>
                </ul>
            </div>

            <div id=\"tab2\" class=\"tab\">
                <div class=\"wrapper\">


                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">N° CIN</span>
\t\t\t\t\t\t\t\t";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 272, $this->source); })()), "cin", [], "any", false, false, false, 272), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Departement</span>
\t\t\t\t\t\t\t\t";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 282, $this->source); })()), "departement", [], "any", false, false, false, 282), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Service</span>
\t\t\t\t\t\t\t\t";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 292, $this->source); })()), "service", [], "any", false, false, false, 292), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Titre</span>
\t\t\t\t\t\t\t\t";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 302, $this->source); })()), "titre", [], "any", false, false, false, 302), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box5\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">N° CNSS</span>
\t\t\t\t\t\t\t\t";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 312, $this->source); })()), "cnss", [], "any", false, false, false, 312), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box6\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date d'Embauche</span>
\t\t\t\t\t\t\t\t";
        // line 320
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 320, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 320), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box7\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Echelon</span>

\t\t\t\t\t\t\t\t";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 329, $this->source); })()), "echelon", [], "any", false, false, false, 329), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box8\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Categorie</span>
\t\t\t\t\t\t\t\t";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 337, $this->source); })()), "categorie", [], "any", false, false, false, 337), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>

                    </div>

                    <div class=\"box9\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tType de Contrat
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 349, $this->source); })()), "typeContrat", [], "any", false, false, false, 349), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>

                </div>

                <ul class=\"tab-links\">
                    <li>
                        <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                        <a href=\"#next_tab2\" class=\"nextButton\">Next</a>
                    </li>
                </ul>
            </div>

            <div id=\"tab3\" class=\"tab\">
                <div class=\"wrapper\">

                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Salaire de Base</span>

\t\t\t\t\t\t\t\t";
        // line 373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 373, $this->source); })()), "salaireBase", [], "any", false, false, false, 373), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Primes</span>

\t\t\t\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\" id=\"exp_list\" data-prototype=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 383, $this->source); })()), "prime", [], "any", false, false, false, 383), "vars", [], "any", false, false, false, 383), "prototype", [], "any", false, false, false, 383), 'row'), "html_attr");
        echo "\">

\t\t\t\t\t\t\t\t\t";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 385, $this->source); })()), "prime", [], "any", false, false, false, 385));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 386
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-warning\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "vars", [], "any", false, false, false, 388), "value", [], "any", false, false, false, 388), "nom", [], "any", false, false, false, 388), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 389
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "vars", [], "any", false, false, false, 389), "value", [], "any", false, false, false, 389), "montant", [], "any", false, false, false, 389), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 392
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["row"], 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</label>

                    </div>

                    <div class=\"box3\">
                        <div class=\"block text-sm\">

                            <span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tType de Paie
\t\t\t\t\t\t\t\t</span> ";
        // line 407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 407, $this->source); })()), "typePaie", [], "any", false, false, false, 407), 'row', ["label" => false]);
        echo "

                        </div>

                    </div>

                    <div class=\"box4\">
                        <label class=\"block mt-4 text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tMoyen de Paiement
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 419, $this->source); })()), "moyenPaiement", [], "any", false, false, false, 419), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                        <br>

                        <div id=\"ifOk\" style=\"display: none;\">

                            <div class=\"box5\">

                                <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nom du Banque
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 433
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 433, $this->source); })()), "nomBanque", [], "any", false, false, false, 433), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t\t\t</label>

                                <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Numero Compte
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 441
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 441, $this->source); })()), "numCompteBanc", [], "any", false, false, false, 441), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t\t\t</label>

                            </div>

                        </div>

                    </div>

                </div>
        
                    <br><br> <br> <br> <br> <br>
                <ul class=\"tab-links\">
                    <li>
                        <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                        <button href=\"";
        // line 458
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_list");
        echo "\" type=\"submit\">Submit</button>


                    </li>
                </ul>
                <br>

            </div>
            ";
        // line 466
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 466, $this->source); })()), 'form_end');
        echo "
        </form>
    </div>


</div>


<script>


    jQuery(document).ready(function() {
        jQuery('.tabs .tab-links a').on('click', function(e) {
            var currentAttrValue = jQuery(this).attr('href');

            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

            e.preventDefault();
        });


        jQuery('.nextButton').on('click', function() {

            var \$activeTab = \$('.tab-links li.active');

            var \$wrapper = jQuery(this).closest('.tabs');
            var indexActive = \$wrapper.find('li.active').index();
            \$wrapper.find('li').eq(indexActive + 1).find('a').click();
        });

        jQuery('.prevButton').on('click', function() {

            var \$activeTab = \$('.tab-links li.active');

            var \$wrapper = jQuery(this).closest('.tabs');
            var indexActive = \$wrapper.find('li.active').index();
            \$wrapper.find('li').eq(indexActive - 1).find('a').click();
        });

    });


    /****  show and hide block *****/

    function yesnoCheck(that) {
        if (that.value == \"Marié\" || that.value == \"Divorcé\" || that.value == \"Veuf\") { // alert(\"check\");
            document.getElementById(\"ifYes\").style.display = \"block\";
        } else {
            document.getElementById(\"ifYes\").style.display = \"none\";
        }
    }

    function chooseOne(that) {
        if (that.value == \"Virement\") { // alert(\"check\");
            document.getElementById(\"ifOk\").style.display = \"block\";
            document.getElementById(\"ifOk\").style.marginTop = \"2px\";


        } else {
            document.getElementById(\"ifOk\").style.display = \"none\";
        }
    }


    /****************************************/


    // this variable is the list in the dom, it's initiliazed when the document is ready
    var \$collectionHolder;
    // the link which we click on to add new items
    var \$addNewItem = \$('<a href=\"#\" style=\"color: #633615\" >Add new item</a>');
    // when the page is loaded and ready
    \$(document).ready(function() { // get the collectionHolder, initilize the var by getting the list;
        \$collectionHolder = \$('#exp_list');
        // append the add new item link to the collectionHolder
        \$collectionHolder.append(\$addNewItem);
        // add an index property to the collectionHolder which helps track the count of forms we have in the list
        \$collectionHolder.data('index', \$collectionHolder.find('.panel').length)
            // finds all the panels in the list and foreach one of them we add a remove button to it
            // add remove button to existing items
        \$collectionHolder.find('.panel').each(function() {
            // \$(this) means the current panel that we are at
            // which means we pass the panel to the addRemoveButton function
            // inside the function we create a footer and remove link and append them to the panel
            // more informations in the function inside
            addRemoveButton(\$(this));
        });
        // handle the click event for addNewItem
        \$addNewItem.click(function(e) {
            // preventDefault() is your  homework if you don't know what it is
            // also look up preventPropagation both are usefull
            e.preventDefault();
            // create a new form and append it to the collectionHolder
            // and by form we mean a new panel which contains the form
            addNewForm();
        })
    });
    /*
     * creates a new form and appends it to the collectionHolder
     */
    function addNewForm() {
        // getting the prototype
        // the prototype is the form itself, plain html
        var prototype = \$collectionHolder.data('prototype');
        // get the index
        // this is the index we set when the document was ready, look above for more info
        var index = \$collectionHolder.data('index');
        // create the form
        var newForm = prototype;
        // replace the __name__ string in the html using a regular expression with the index value
        newForm = newForm.replace(/__name__/g, index);
        // incrementing the index data and setting it again to the collectionHolder
        \$collectionHolder.data('index', index + 1);
        // create the panel
        // this is the panel that will be appending to the collectionHolder
        var \$panel = \$('<div class=\"panel panel-warning\"><div class=\"panel-heading\"></div></div>');
        // create the panel-body and append the form to it
        var \$panelBody = \$('<div class=\"panel-body\"></div>').append(newForm);
        // append the body to the panel
        \$panel.append(\$panelBody);
        // append the removebutton to the new panel
        addRemoveButton(\$panel);
        // append the panel to the addNewItem
        // we are doing it this way to that the link is always at the bottom of the collectionHolder
        \$addNewItem.before(\$panel);
    }

    /**
     * adds a remove button to the panel that is passed in the parameter
     * @param \$panel
     */
    function addRemoveButton(\$panel) { // create remove button
        var \$removeButton = \$('<a href=\"#\"  style=\"color: #633615\">Remove</a>');
        // appending the removebutton to the panel footer
        var \$panelFooter = \$('<div class=\"panel-footer\"></div>').append(\$removeButton);
        // handle the click event of the remove button
        \$removeButton.click(function(e) {
            e.preventDefault();
            // gets the parent of the button that we clicked on \"the panel\" and animates it
            // after the animation is done the element (the panel) is removed from the html
            \$(e.target).parents('.panel').slideUp(1000, function() {
                \$(this).remove();
            })
        });
        // append the footer to the panel
        \$panel.append(\$panelFooter);
    }
</script>
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
        return array (  656 => 466,  645 => 458,  625 => 441,  614 => 433,  597 => 419,  582 => 407,  569 => 396,  559 => 392,  553 => 389,  549 => 388,  545 => 386,  541 => 385,  536 => 383,  523 => 373,  496 => 349,  481 => 337,  470 => 329,  458 => 320,  447 => 312,  434 => 302,  421 => 292,  408 => 282,  395 => 272,  379 => 259,  364 => 247,  350 => 236,  337 => 226,  319 => 211,  306 => 201,  294 => 192,  282 => 183,  266 => 170,  254 => 161,  244 => 154,  231 => 144,  226 => 142,  221 => 139,  85 => 2,  36 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
