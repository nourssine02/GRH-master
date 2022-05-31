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

/* fiche_paie/new.html.twig */
class __TwigTemplate_36256f43bb61937044029868f62fcf4ad141abbc3058e9c4aed366090b7e0c6a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche_paie/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fiche_paie/new.html.twig", 1);
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
    <h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
        Ajouter Fiche de Paie
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

        .tab-content-scroll > p {
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

        #cadre1 {
            height: 500px;
            width: 300px;
            float: left;
        }

        #cadre2 {
            height: 500px;
            width: 300px;
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
        <form action=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_paie_new");
        echo "\" method=\"post\">

            ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 153, $this->source); })()), 'form_start');
        echo "
            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 154, $this->source); })()), "dateJour", [], "any", false, false, false, 154), 'row');
        echo "
            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 155, $this->source); })()), "datePaiement", [], "any", false, false, false, 155), 'row');
        echo "
            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 156, $this->source); })()), "employe", [], "any", false, false, false, 156), 'row');
        echo "

            <br>
            <button type=\"menu\" class=\"btn btn-danger\" style=\"margin-bottom: 20px;\" name=\"search\">Search</button>

            <br>
            ";
        // line 162
        if ((0 === twig_compare((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 162, $this->source); })()), true))) {
            // line 163
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 164
                echo "
                    <div class=\"tab-content\">

                        <div id=\"tab1\" class=\"tab active\">
                            <div class=\"wrapper\">


                                <div class=\"box1\">
                                    <span>Nom</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 175), "html", null, true);
                echo "


                                    </div>

                                </div>

                                <div class=\"box2\">
                                    <span>Prenom</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 186), "html", null, true);
                echo "


                                    </div>

                                </div>

                                <div class=\"box3\">
                                    <span>Adresse</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adresse", [], "any", false, false, false, 197), "html", null, true);
                echo "


                                    </div>

                                </div>
                                <div class=\"box4\">
                                    <span>Echelon</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "echelon", [], "any", false, false, false, 207), "html", null, true);
                echo "


                                    </div>

                                </div>
                                <div class=\"box5\">
                                    <span>Categorie</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 217
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 217), "html", null, true);
                echo "


                                    </div>

                                </div>
                                <div class=\"box6\">
                                    <span>Departement</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "departement", [], "any", false, false, false, 227), "html", null, true);
                echo "


                                    </div>

                                </div>
                                <div class=\"box7\">
                                    <span>Service</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 237
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "service", [], "any", false, false, false, 237), "html", null, true);
                echo "


                                    </div>

                                </div>


                                <div class=\"box8\">
                                    <span>CIN</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 249
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cin", [], "any", false, false, false, 249), "html", null, true);
                echo "


                                    </div>

                                </div>

                                <div class=\"box9\">
                                    <span>Salaire de Base</span>

                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "salaireBase", [], "any", false, false, false, 261), "html", null, true);
                echo "


                                    </div>

                                </div>


                                <div class=\"box10\">
                                    <span>Nb jours Absences</span>

                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                        ";
                // line 275
                echo twig_escape_filter($this->env, (isset($context["nbjAbs"]) || array_key_exists("nbjAbs", $context) ? $context["nbjAbs"] : (function () { throw new RuntimeError('Variable "nbjAbs" does not exist.', 275, $this->source); })()), "html", null, true);
                echo "
                                    </div>

                                </div>
                                <div class=\"box11\">
                                    <span>Nb jours Congés</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                        ";
                // line 284
                echo twig_escape_filter($this->env, (isset($context["nbjCong"]) || array_key_exists("nbjCong", $context) ? $context["nbjCong"] : (function () { throw new RuntimeError('Variable "nbjCong" does not exist.', 284, $this->source); })()), "html", null, true);
                echo "
                                    </div>
                                </div>

                                <div class=\"box12\">
                                    <span>Nb jours travaillés</span>

                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        ";
                // line 293
                echo twig_escape_filter($this->env, (isset($context["nbjTrav"]) || array_key_exists("nbjTrav", $context) ? $context["nbjTrav"] : (function () { throw new RuntimeError('Variable "nbjTrav" does not exist.', 293, $this->source); })()), "html", null, true);
                echo "

                                    </div>
                                </div>


                            </div>

                            <ul class=\"tab-links\">
                                <li>
                                    <a href=\"";
                // line 303
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_paie");
                echo "\" type=\"submit\">Cancel</a>

                                    <a href=\"#next_tab2\" class=\"nextButton\">Next</a>
                                </li>
                            </ul>
                        </div>


                        <div id=\"tab2\" class=\"tab\">
                            <div class=\"wrapper\" style=\"padding-bottom : 100px;\">

                                <div id=\"cadre1\">


                                    <div class=\"box1\">


                                        <span>Primes</span>
                                        ";
                // line 321
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "prime", [], "any", false, false, false, 321), null))) {
                    // line 322
                    echo "

                                            ";
                    // line 324
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "prime", [], "any", false, false, false, 324));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 325
                        echo "

                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                                    ";
                        // line 330
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 330), "html", null, true);
                        echo "-
                                                    ";
                        // line 331
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "montant", [], "any", false, false, false, 331), "html", null, true);
                        echo "DT


                                                </div>
                                            ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 336
                        echo "                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                                    0,000
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 341
                    echo "                                        ";
                }
                // line 342
                echo "

                                    </div>
                                </div>


                                <div class=\"box2\">
                                    <label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Heure Supplementaire
\t\t\t\t\t\t\t</span>


                                        ";
                // line 354
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "HeurSupp", [], "any", false, false, false, 354), null))) {
                    // line 355
                    echo "
                                            ";
                    // line 356
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "HeurSupp", [], "any", false, false, false, 356));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["supp"]) {
                        // line 357
                        echo "                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


                                                    ";
                        // line 361
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supp"], "nbreHeurSupp", [], "any", false, false, false, 361), "H:i"), "html", null, true);
                        echo "H-
                                                    ";
                        // line 362
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supp"], "montant", [], "any", false, false, false, 362), "html", null, true);
                        echo "DT
                                                </div>


                                            ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 367
                        echo "                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                                    0,000
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supp'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 372
                    echo "

                                        ";
                }
                // line 375
                echo "

                                    </label>

                                </div>

                                <div id=\"cadre2\">

                                    <div class=\"box2\">
                                        <span>Taux d'absences</span>

                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 388
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["calculAbs"]) || array_key_exists("calculAbs", $context) ? $context["calculAbs"] : (function () { throw new RuntimeError('Variable "calculAbs" does not exist.', 388, $this->source); })()), 3), "html", null, true);
                echo "

                                        </div>
                                    </div>

                                    <div class=\"box3\">
                                        <span>Total Brut
                                        </span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 398
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalBrut"]) || array_key_exists("totalBrut", $context) ? $context["totalBrut"] : (function () { throw new RuntimeError('Variable "totalBrut" does not exist.', 398, $this->source); })()), 3), "html", null, true);
                echo "
                                            DT

                                        </div>

                                    </div>


                                    <div class=\"box4\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tN° CNSS

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 413
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cnss", [], "any", false, false, false, 413), "html", null, true);
                echo "

                                        </div>

                                    </div>
                                    <div class=\"box5\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tRetenue CNSS
\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                            ";
                // line 425
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cnss"]) || array_key_exists("cnss", $context) ? $context["cnss"] : (function () { throw new RuntimeError('Variable "cnss" does not exist.', 425, $this->source); })()), 3), "html", null, true);
                echo "
                                        </div>

                                    </div>
                                    <div class=\"box6\">
\t\t\t\t\t\t\t<span style=\"color : red; font-weight: bold;\">

\t\t\t\t\t\t\t\tSalaire imposable
\t\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                            ";
                // line 437
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["imposable"]) || array_key_exists("imposable", $context) ? $context["imposable"] : (function () { throw new RuntimeError('Variable "imposable" does not exist.', 437, $this->source); })()), 3), "html", null, true);
                echo "


                                        </div>

                                    </div>
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
                                        <span class=\"text-gray-700 dark:text-gray-400\">Situation Familial</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


                                            ";
                // line 465
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "situationFamilial", [], "any", false, false, false, 465), "html", null, true);
                echo "
                                        </div>
                                    </label>

                                </div>


                                <div class=\"box2\">
                                    <span>Enfants à charge</span>
                                    ";
                // line 474
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "nbreEnfants", [], "any", false, false, false, 474), null))) {
                    // line 475
                    echo "                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                    // line 477
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nbreEnfants", [], "any", false, false, false, 477), "html", null, true);
                    echo "


                                        </div>

                                    ";
                } else {
                    // line 483
                    echo "                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            0

                                        </div>

                                    ";
                }
                // line 490
                echo "                                </div>


                                <div class=\"box3\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Familiale

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 502
                echo twig_escape_filter($this->env, (isset($context["DFamiliale"]) || array_key_exists("DFamiliale", $context) ? $context["DFamiliale"] : (function () { throw new RuntimeError('Variable "DFamiliale" does not exist.', 502, $this->source); })()), "html", null, true);
                echo "

                                        </div>
                                    </div>

                                </div>
                                <div class=\"box4\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Frais Professionnels

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 517
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["DFraisProf"]) || array_key_exists("DFraisProf", $context) ? $context["DFraisProf"] : (function () { throw new RuntimeError('Variable "DFraisProf" does not exist.', 517, $this->source); })()), 3), "html", null, true);
                echo "


                                        </div>
                                    </div>

                                </div>


                                <div class=\"box5\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tContribution Sociale Solidaire


\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 536
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["contribSocialSolid"]) || array_key_exists("contribSocialSolid", $context) ? $context["contribSocialSolid"] : (function () { throw new RuntimeError('Variable "contribSocialSolid" does not exist.', 536, $this->source); })()), 3), "html", null, true);
                echo "


                                        </div>
                                    </div>

                                </div>
                                <div class=\"box6\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tIRPP


\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 553
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["IRPP"]) || array_key_exists("IRPP", $context) ? $context["IRPP"] : (function () { throw new RuntimeError('Variable "IRPP" does not exist.', 553, $this->source); })()), 3), "html", null, true);
                echo "

                                        </div>
                                    </div>

                                </div>

                                <div class=\"box7\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tSalaire Net

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 569
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["salaireNet"]) || array_key_exists("salaireNet", $context) ? $context["salaireNet"] : (function () { throw new RuntimeError('Variable "salaireNet" does not exist.', 569, $this->source); })()), 3), "html", null, true);
                echo "
                                        </div>
                                    </div>

                                </div>
                                <div class=\"box8\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tAvance

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 583
                echo twig_escape_filter($this->env, (isset($context["sommeAv"]) || array_key_exists("sommeAv", $context) ? $context["sommeAv"] : (function () { throw new RuntimeError('Variable "sommeAv" does not exist.', 583, $this->source); })()), "html", null, true);
                echo "
                                        </div>
                                    </div>

                                </div>

                                <div class=\"box9\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\tNet A Payer

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            ";
                // line 598
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["NetApayer"]) || array_key_exists("NetApayer", $context) ? $context["NetApayer"] : (function () { throw new RuntimeError('Variable "NetApayer" does not exist.', 598, $this->source); })()), 3), "html", null, true);
                echo "
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <ul class=\"tab-links\">
                                <li>
                                    <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                                    ";
                // line 611
                echo "                                    <br>
                                    <div style=\"margin-left: 50px; margin-top: -35px;\">
                                        ";
                // line 613
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 613, $this->source); })()), "submit", [], "any", false, false, false, 613), 'row', ["label" => "Submit"]);
                echo "

                                    </div>


                                </li>
                            </ul>
                            <br>


                        </div>

                    </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 628
            echo "
            ";
        } else {
            // line 630
            echo "                <h1>Mois de Paiement n'existe pas</h1>
            ";
        }
        // line 632
        echo "

            ";
        // line 634
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formF"]) || array_key_exists("formF", $context) ? $context["formF"] : (function () { throw new RuntimeError('Variable "formF" does not exist.', 634, $this->source); })()), 'form_end');
        echo "

        </form>

    </div>


    <script>


        jQuery(document).ready(function () {
            jQuery('.tabs .tab-links a').on('click', function (e) {
                var currentAttrValue = jQuery(this).attr('href');

                // Show/Hide Tabs
                jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                // Change/remove current tab to active
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                e.preventDefault();
            });


            jQuery('.nextButton').on('click', function () {

                var \$activeTab = \$('.tab-links li.active');

                var \$wrapper = jQuery(this).closest('.tabs');
                var indexActive = \$wrapper.find('li.active').index();
                \$wrapper.find('li').eq(indexActive + 1).find('a').click();
            });

            jQuery('.prevButton').on('click', function () {

                var \$activeTab = \$('.tab-links li.active');

                var \$wrapper = jQuery(this).closest('.tabs');
                var indexActive = \$wrapper.find('li.active').index();
                \$wrapper.find('li').eq(indexActive - 1).find('a').click();
            });

        });


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fiche_paie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  876 => 634,  872 => 632,  868 => 630,  864 => 628,  843 => 613,  839 => 611,  824 => 598,  806 => 583,  789 => 569,  770 => 553,  750 => 536,  728 => 517,  710 => 502,  696 => 490,  687 => 483,  678 => 477,  674 => 475,  672 => 474,  660 => 465,  629 => 437,  614 => 425,  599 => 413,  581 => 398,  568 => 388,  553 => 375,  548 => 372,  538 => 367,  528 => 362,  524 => 361,  518 => 357,  513 => 356,  510 => 355,  508 => 354,  494 => 342,  491 => 341,  481 => 336,  471 => 331,  467 => 330,  460 => 325,  455 => 324,  451 => 322,  449 => 321,  428 => 303,  415 => 293,  403 => 284,  391 => 275,  374 => 261,  359 => 249,  344 => 237,  331 => 227,  318 => 217,  305 => 207,  292 => 197,  278 => 186,  264 => 175,  251 => 164,  246 => 163,  244 => 162,  235 => 156,  231 => 155,  227 => 154,  223 => 153,  218 => 151,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
        Ajouter Fiche de Paie
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

        .tab-content-scroll > p {
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

        #cadre1 {
            height: 500px;
            width: 300px;
            float: left;
        }

        #cadre2 {
            height: 500px;
            width: 300px;
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
        <form action=\"{{ path('fiche_paie_new') }}\" method=\"post\">

            {{ form_start(formF) }}
            {{ form_row(formF.dateJour ) }}
            {{ form_row(formF.datePaiement ) }}
            {{ form_row(formF.employe) }}

            <br>
            <button type=\"menu\" class=\"btn btn-danger\" style=\"margin-bottom: 20px;\" name=\"search\">Search</button>

            <br>
            {% if check == true %}
                {% for item in info %}

                    <div class=\"tab-content\">

                        <div id=\"tab1\" class=\"tab active\">
                            <div class=\"wrapper\">


                                <div class=\"box1\">
                                    <span>Nom</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.nom }}


                                    </div>

                                </div>

                                <div class=\"box2\">
                                    <span>Prenom</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.prenom }}


                                    </div>

                                </div>

                                <div class=\"box3\">
                                    <span>Adresse</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.adresse }}


                                    </div>

                                </div>
                                <div class=\"box4\">
                                    <span>Echelon</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.echelon }}


                                    </div>

                                </div>
                                <div class=\"box5\">
                                    <span>Categorie</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.categorie }}


                                    </div>

                                </div>
                                <div class=\"box6\">
                                    <span>Departement</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.departement }}


                                    </div>

                                </div>
                                <div class=\"box7\">
                                    <span>Service</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.service }}


                                    </div>

                                </div>


                                <div class=\"box8\">
                                    <span>CIN</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.cin }}


                                    </div>

                                </div>

                                <div class=\"box9\">
                                    <span>Salaire de Base</span>

                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ item.salaireBase }}


                                    </div>

                                </div>


                                <div class=\"box10\">
                                    <span>Nb jours Absences</span>

                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                        {{ nbjAbs }}
                                    </div>

                                </div>
                                <div class=\"box11\">
                                    <span>Nb jours Congés</span>
                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                        {{ nbjCong }}
                                    </div>
                                </div>

                                <div class=\"box12\">
                                    <span>Nb jours travaillés</span>

                                    <div
                                            class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                        {{ nbjTrav }}

                                    </div>
                                </div>


                            </div>

                            <ul class=\"tab-links\">
                                <li>
                                    <a href=\"{{ path('fiche_paie') }}\" type=\"submit\">Cancel</a>

                                    <a href=\"#next_tab2\" class=\"nextButton\">Next</a>
                                </li>
                            </ul>
                        </div>


                        <div id=\"tab2\" class=\"tab\">
                            <div class=\"wrapper\" style=\"padding-bottom : 100px;\">

                                <div id=\"cadre1\">


                                    <div class=\"box1\">


                                        <span>Primes</span>
                                        {% if item.prime != null %}


                                            {% for p in item.prime %}


                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                                    {{ p.nom }}-
                                                    {{ p.montant }}DT


                                                </div>
                                            {% else %}
                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                                    0,000
                                                </div>
                                            {% endfor %}
                                        {% endif %}


                                    </div>
                                </div>


                                <div class=\"box2\">
                                    <label class=\"block text-sm\">
\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">Heure Supplementaire
\t\t\t\t\t\t\t</span>


                                        {% if item.HeurSupp != null %}

                                            {% for supp in item.HeurSupp %}
                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


                                                    {{ supp.nbreHeurSupp|date('H:i') }}H-
                                                    {{ supp.montant }}DT
                                                </div>


                                            {% else %}
                                                <div
                                                        class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                                    0,000
                                                </div>
                                            {% endfor %}


                                        {% endif %}


                                    </label>

                                </div>

                                <div id=\"cadre2\">

                                    <div class=\"box2\">
                                        <span>Taux d'absences</span>

                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ calculAbs|number_format(3) }}

                                        </div>
                                    </div>

                                    <div class=\"box3\">
                                        <span>Total Brut
                                        </span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ totalBrut|number_format(3) }}
                                            DT

                                        </div>

                                    </div>


                                    <div class=\"box4\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tN° CNSS

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ item.cnss }}

                                        </div>

                                    </div>
                                    <div class=\"box5\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tRetenue CNSS
\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                            {{ cnss|number_format(3) }}
                                        </div>

                                    </div>
                                    <div class=\"box6\">
\t\t\t\t\t\t\t<span style=\"color : red; font-weight: bold;\">

\t\t\t\t\t\t\t\tSalaire imposable
\t\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">

                                            {{ imposable|number_format(3) }}


                                        </div>

                                    </div>
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
                                        <span class=\"text-gray-700 dark:text-gray-400\">Situation Familial</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">


                                            {{ item.situationFamilial }}
                                        </div>
                                    </label>

                                </div>


                                <div class=\"box2\">
                                    <span>Enfants à charge</span>
                                    {% if item.nbreEnfants != null %}
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ item.nbreEnfants }}


                                        </div>

                                    {% else %}
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            0

                                        </div>

                                    {% endif %}
                                </div>


                                <div class=\"box3\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Familiale

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ DFamiliale }}

                                        </div>
                                    </div>

                                </div>
                                <div class=\"box4\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tDéduction Frais Professionnels

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ DFraisProf|number_format(3) }}


                                        </div>
                                    </div>

                                </div>


                                <div class=\"box5\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tContribution Sociale Solidaire


\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ contribSocialSolid|number_format(3) }}


                                        </div>
                                    </div>

                                </div>
                                <div class=\"box6\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tIRPP


\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ IRPP|number_format(3) }}

                                        </div>
                                    </div>

                                </div>

                                <div class=\"box7\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tSalaire Net

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ salaireNet|number_format(3) }}
                                        </div>
                                    </div>

                                </div>
                                <div class=\"box8\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\">
\t\t\t\t\t\t\t\tAvance

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ sommeAv }}
                                        </div>
                                    </div>

                                </div>

                                <div class=\"box9\">
                                    <div class=\"block text-sm\">

\t\t\t\t\t\t\t<span class=\"text-gray-700 dark:text-gray-400\" style=\"color: red; font-weight: bold;\">
\t\t\t\t\t\t\t\tNet A Payer

\t\t\t\t\t\t\t</span>
                                        <div
                                                class=\"block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input\">
                                            {{ NetApayer|number_format(3) }}
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <ul class=\"tab-links\">
                                <li>
                                    <a href=\"#back_tab1\" class=\"prevButton\">Prev</a>
                                    {# <a href=\"{{ path('fiche_paie') }}\">Submit</a> #}
                                    <br>
                                    <div style=\"margin-left: 50px; margin-top: -35px;\">
                                        {{ form_row(formF.submit , { 'label' : 'Submit'}) }}

                                    </div>


                                </li>
                            </ul>
                            <br>


                        </div>

                    </div>

                {% endfor %}

            {% else %}
                <h1>Mois de Paiement n'existe pas</h1>
            {% endif %}


            {{ form_end(formF) }}

        </form>

    </div>


    <script>


        jQuery(document).ready(function () {
            jQuery('.tabs .tab-links a').on('click', function (e) {
                var currentAttrValue = jQuery(this).attr('href');

                // Show/Hide Tabs
                jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                // Change/remove current tab to active
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                e.preventDefault();
            });


            jQuery('.nextButton').on('click', function () {

                var \$activeTab = \$('.tab-links li.active');

                var \$wrapper = jQuery(this).closest('.tabs');
                var indexActive = \$wrapper.find('li.active').index();
                \$wrapper.find('li').eq(indexActive + 1).find('a').click();
            });

            jQuery('.prevButton').on('click', function () {

                var \$activeTab = \$('.tab-links li.active');

                var \$wrapper = jQuery(this).closest('.tabs');
                var indexActive = \$wrapper.find('li.active').index();
                \$wrapper.find('li').eq(indexActive - 1).find('a').click();
            });

        });


    </script>
{% endblock %}", "fiche_paie/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/fiche_paie/new.html.twig");
    }
}
