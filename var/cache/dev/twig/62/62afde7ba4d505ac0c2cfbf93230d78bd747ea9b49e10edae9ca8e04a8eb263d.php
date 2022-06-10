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

/* employe/update.html.twig */
class __TwigTemplate_ad18bbda64e49b9fca5d3aa3d8e57ede810906e6bf4a2af7898fa8ffb1d6296a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/update.html.twig", 1);
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

<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Modifier Employé
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
    <ul class=\"tab-links\" hidden>
        <li class=\"active\">
            <a href=\"#tab1\">Tab #1</a>
        </li>
        <li>
            <a href=\"#tab2\">Tab #2</a>
        </li>
        <li>
            <a href=\"#tab3\">Tab #3</a>
        </li>
        <li>
            <a href=\"#tab4\">Tab #4</a>
        </li>
    </ul>

    <div class=\"tab-content\">
        <form action=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144)]), "html", null, true);
        echo "\" method=\"POST\">


            ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 147, $this->source); })()), 'form_start');
        echo "


            <div id=\"tab1\" class=\"tab active\">
                <div class=\"wrapper\">


                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Matricule</span>
\t\t\t\t\t\t\t\t";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 157, $this->source); })()), "matricule", [], "any", false, false, false, 157), 'row', ["label" => false]);
        echo "
\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nom</span>
\t\t\t\t\t\t\t\t";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 164, $this->source); })()), "nom", [], "any", false, false, false, 164), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>
                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Prenom</span>
\t\t\t\t\t\t\t\t";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 173, $this->source); })()), "prenom", [], "any", false, false, false, 173), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 187, $this->source); })()), "sexe", [], "any", false, false, false, 187), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box5\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Adresse</span>
\t\t\t\t\t\t\t\t";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 196, $this->source); })()), "adresse", [], "any", false, false, false, 196), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>
                    </div>
                    <div class=\"box6\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Telephone</span>
\t\t\t\t\t\t\t\t";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 204, $this->source); })()), "telephone", [], "any", false, false, false, 204), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box7\">
                        <label class=\"block text-sm\">

\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date de naissance</span>
\t\t\t\t\t\t\t\t";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 214, $this->source); })()), "dateNais", [], "any", false, false, false, 214), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box8\">

                        <label class=\"block text-sm\">


\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tSituation Familial
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 229, $this->source); })()), "situationFamilial", [], "any", false, false, false, 229), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                            ";
        // line 234
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 234, $this->source); })()), "nbreEnfants", [], "any", false, false, false, 234), 0))) {
            // line 235
            echo "                            
                            
                            <div id=\"ifYes\" style=\"display: block;\">

                            <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nombre d'enfants</span>

\t\t\t\t\t\t\t\t\t";
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 242, $this->source); })()), "nbreEnfants", [], "any", false, false, false, 242), 'row', ["label" => false]);
            echo "

\t\t\t\t\t\t\t\t</label>
                        </div>

                        ";
        } else {
            // line 248
            echo "                        <div id=\"ifYes\" style=\"display: none;\">
                        
                            <label class=\"block text-sm\">
                                <span class=\"text-gray-700 dark:text-gray-400\">Nombre d'enfants</span>
                            
                                ";
            // line 253
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 253, $this->source); })()), "nbreEnfants", [], "any", false, false, false, 253), 'row', ["label" => false]);
            echo "
                            
                            </label>
                            </div>
                            ";
        }
        // line 258
        echo "                    </div>

                    <div class=\"box9\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Email</span>
\t\t\t\t\t\t\t\t";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 263, $this->source); })()), "email", [], "any", false, false, false, 263), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>

               

                </div>

                <ul class=\"tab-links\">
                    <li>
                        <a href=\"";
        // line 276
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
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 289, $this->source); })()), "cin", [], "any", false, false, false, 289), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Departement</span>
\t\t\t\t\t\t\t\t";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 299, $this->source); })()), "departement", [], "any", false, false, false, 299), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Service</span>
\t\t\t\t\t\t\t\t";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 309, $this->source); })()), "service", [], "any", false, false, false, 309), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Titre</span>
\t\t\t\t\t\t\t\t";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 319, $this->source); })()), "titre", [], "any", false, false, false, 319), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box5\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">N° CNSS</span>
\t\t\t\t\t\t\t\t";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 329, $this->source); })()), "cnss", [], "any", false, false, false, 329), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                    </div>
                    <div class=\"box6\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Date d'Embauche</span>
\t\t\t\t\t\t\t\t";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 338, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 338), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box7\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Echelon</span>

\t\t\t\t\t\t\t\t";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 349, $this->source); })()), "echelon", [], "any", false, false, false, 349), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box8\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Categorie</span>
\t\t\t\t\t\t\t\t";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 359, $this->source); })()), "categorie", [], "any", false, false, false, 359), 'row', ["label" => false]);
        echo "

\t\t\t\t\t\t\t</label>


                    </div>

                    <div class=\"box9\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tType de Contrat
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 372, $this->source); })()), "typeContrat", [], "any", false, false, false, 372), 'row', ["label" => false]);
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
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 398, $this->source); })()), "salaireBase", [], "any", false, false, false, 398), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>


                    </div>
                    <div class=\"box2\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Primes</span>

\t\t\t\t\t\t\t\t<div class=\"col-sm-8 col-sm-offset-2\" id=\"exp_list\" data-prototype=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 409, $this->source); })()), "prime", [], "any", false, false, false, 409), "vars", [], "any", false, false, false, 409), "prototype", [], "any", false, false, false, 409), 'row'), "html_attr");
        echo "\">

\t\t\t\t\t\t\t\t\t";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 411, $this->source); })()), "prime", [], "any", false, false, false, 411));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 412
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-warning\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 416
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 417
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["row"], 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</label>


                    </div>

                    <div class=\"box3\">
                        <div class=\"block text-sm\">

                            <span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tType de Paie
\t\t\t\t\t\t\t\t</span> ";
        // line 433
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 433, $this->source); })()), "typePaie", [], "any", false, false, false, 433), 'row', ["label" => false]);
        echo "


                        </div>


                    </div>
                    <div class=\"box4\">
                        <label class=\"block mt-4 text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\t\tMoyen de Paiement
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
        // line 446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 446, $this->source); })()), "moyenPaiement", [], "any", false, false, false, 446), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t</label>

                        <br>

                        <div id=\"ifOk\" style=\"display: none;\">

                            <div class=\"box5\">

                                <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nom du Banque
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 460
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 460, $this->source); })()), "nomBanque", [], "any", false, false, false, 460), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t\t\t</label>


                                <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Numero Compte
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 469, $this->source); })()), "numCompteBanc", [], "any", false, false, false, 469), 'row', ["label" => false]);
        echo "


\t\t\t\t\t\t\t\t\t</label>

                            </div>
                        </div>


                    </div>


                </div>
              
                <br><br> <br>  <br>  <br>     <br>
           


                <ul class=\"tab-links\">
                    <li>
                        <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                        <button href=\"";
        // line 490
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_list");
        echo "\" type=\"submit\">Update</button>

                    </li>
                </ul>


                <br>


            </div>


            ";
        // line 502
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 502, $this->source); })()), 'form_end');
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
        var \$removeButton = \$('<a href=\"#\" style=\"color: #633615\" >Remove</a>');
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

    public function getTemplateName()
    {
        return "employe/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  696 => 502,  681 => 490,  657 => 469,  645 => 460,  628 => 446,  612 => 433,  598 => 421,  588 => 417,  585 => 416,  582 => 412,  578 => 411,  573 => 409,  559 => 398,  530 => 372,  514 => 359,  501 => 349,  487 => 338,  475 => 329,  462 => 319,  449 => 309,  436 => 299,  423 => 289,  407 => 276,  391 => 263,  384 => 258,  376 => 253,  369 => 248,  360 => 242,  351 => 235,  349 => 234,  341 => 229,  323 => 214,  310 => 204,  299 => 196,  287 => 187,  270 => 173,  258 => 164,  248 => 157,  235 => 147,  229 => 144,  85 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}{% endblock %} {% block body %}


<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Modifier Employé
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
    <ul class=\"tab-links\" hidden>
        <li class=\"active\">
            <a href=\"#tab1\">Tab #1</a>
        </li>
        <li>
            <a href=\"#tab2\">Tab #2</a>
        </li>
        <li>
            <a href=\"#tab3\">Tab #3</a>
        </li>
        <li>
            <a href=\"#tab4\">Tab #4</a>
        </li>
    </ul>

    <div class=\"tab-content\">
        <form action=\"{{ path('employe_update', {'id': employe.id})}}\" method=\"POST\">


            {{form_start(formE)}}


            <div id=\"tab1\" class=\"tab active\">
                <div class=\"wrapper\">


                    <div class=\"box1\">
                        <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Matricule</span>
\t\t\t\t\t\t\t\t{{form_row(formE.matricule , { 'label' : false})}}
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

                            {% if employe.nbreEnfants > 0 %}
                            
                            
                            <div id=\"ifYes\" style=\"display: block;\">

                            <label class=\"block text-sm\">
\t\t\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Nombre d'enfants</span>

\t\t\t\t\t\t\t\t\t{{form_row(formE.nbreEnfants , { 'label' : false} , {'novalidate' : true} )}}

\t\t\t\t\t\t\t\t</label>
                        </div>

                        {% else %}
                        <div id=\"ifYes\" style=\"display: none;\">
                        
                            <label class=\"block text-sm\">
                                <span class=\"text-gray-700 dark:text-gray-400\">Nombre d'enfants</span>
                            
                                {{form_row(formE.nbreEnfants , { 'label' : false} , {'novalidate' : true} )}}
                            
                            </label>
                            </div>
                            {% endif %}
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
\t\t\t\t\t\t\t\t\t\t\t{# <div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{ row.vars.value.nom }}</strong>
\t\t\t\t\t\t\t\t\t\t\t</div> #}
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
\t\t\t\t\t\t\t\t\t\t{{ form_row(formE.numCompteBanc , { 'label' : false} , {'novalidate' : true})}}


\t\t\t\t\t\t\t\t\t</label>

                            </div>
                        </div>


                    </div>


                </div>
              
                <br><br> <br>  <br>  <br>     <br>
           


                <ul class=\"tab-links\">
                    <li>
                        <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                        <button href=\"{{ path('employe_list')}}\" type=\"submit\">Update</button>

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
        var \$removeButton = \$('<a href=\"#\" style=\"color: #633615\" >Remove</a>');
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
{% endblock %}", "employe/update.html.twig", "/home/hp/Téléchargements/GRH-master/templates/employe/update.html.twig");
    }
}
