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

/* mission/new.html.twig */
class __TwigTemplate_17a5d5ce1e4f878cf025cc1cd48578655d349606198ac1f9ccc535d1049a0206 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mission/new.html.twig", 1);
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
    Ajouter une Mission
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

    </ul>

    <div class=\"tab-content\">
        <form action=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_new");
        echo "\" method=\"post\">

            ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formM"]) || array_key_exists("formM", $context) ? $context["formM"] : (function () { throw new RuntimeError('Variable "formM" does not exist.', 136, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            <div id=\"tab1\" class=\"tab active\">
                <div class=\"wrapper\">

                    <div class=\"box1\">
                        <label class=\"block text-sm\">
                            <span class=\"text-gray-700 dark:text-gray-400\">Employé</span>
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formM"]) || array_key_exists("formM", $context) ? $context["formM"] : (function () { throw new RuntimeError('Variable "formM" does not exist.', 144, $this->source); })()), "employe", [], "any", false, false, false, 144), 'row', ["label" => false]);
        echo "
                        </label>
                    </div>

                    <div class=\"box2\">
                        <label class=\"block text-sm\">
                            <span class=\"text-gray-700 dark:text-gray-400\">Motif</span>
                            ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formM"]) || array_key_exists("formM", $context) ? $context["formM"] : (function () { throw new RuntimeError('Variable "formM" does not exist.', 151, $this->source); })()), "motif", [], "any", false, false, false, 151), 'row', ["label" => false]);
        echo "

                        </label>
                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
                            <span class=\"text-gray-700 dark:text-gray-400\">Date Debut</span>

                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formM"]) || array_key_exists("formM", $context) ? $context["formM"] : (function () { throw new RuntimeError('Variable "formM" does not exist.', 160, $this->source); })()), "dateDebut", [], "any", false, false, false, 160), 'row', ["label" => false]);
        echo "


                        </label>

                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">


                            <span class=\"text-gray-700 dark:text-gray-400\">
                                Date Fin Prevue

                            </span>

                            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formM"]) || array_key_exists("formM", $context) ? $context["formM"] : (function () { throw new RuntimeError('Variable "formM" does not exist.', 175, $this->source); })()), "datefinPrevue", [], "any", false, false, false, 175), 'row', ["label" => false]);
        echo "


                        </label>

                    </div>



                </div>

                <ul class=\"tab-links\">
                    <li>
                        <a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_list");
        echo "\" type=\"submit\">Cancel</a>
                        <button href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission_list");
        echo "\" type=\"submit\">Submit</button>

                    </li>
                </ul>
            </div>
  
            ";
        // line 195
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formM"]) || array_key_exists("formM", $context) ? $context["formM"] : (function () { throw new RuntimeError('Variable "formM" does not exist.', 195, $this->source); })()), 'form_end');
        echo "
        </form>
    </div>


</div>

<script>
    const form = document.querySelector('form');
        const isFormValid = Axentix.Forms.validate(form);
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mission/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 195,  295 => 189,  291 => 188,  275 => 175,  257 => 160,  245 => 151,  235 => 144,  224 => 136,  219 => 134,  85 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}{% endblock %} {% block body %}

<h4 class=\"mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300\">
    Ajouter une Mission
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

    </ul>

    <div class=\"tab-content\">
        <form action=\"{{ path('mission_new')}}\" method=\"post\">

            {{form_start(formM, {'attr': {'novalidate' : 'novalidate'}})}}

            <div id=\"tab1\" class=\"tab active\">
                <div class=\"wrapper\">

                    <div class=\"box1\">
                        <label class=\"block text-sm\">
                            <span class=\"text-gray-700 dark:text-gray-400\">Employé</span>
                            {{form_row(formM.employe , { 'label' : false})}}
                        </label>
                    </div>

                    <div class=\"box2\">
                        <label class=\"block text-sm\">
                            <span class=\"text-gray-700 dark:text-gray-400\">Motif</span>
                            {{form_row(formM.motif , { 'label' : false})}}

                        </label>
                    </div>

                    <div class=\"box3\">
                        <label class=\"block text-sm\">
                            <span class=\"text-gray-700 dark:text-gray-400\">Date Debut</span>

                            {{form_row(formM.dateDebut , { 'label' : false})}}


                        </label>

                    </div>
                    <div class=\"box4\">
                        <label class=\"block text-sm\">


                            <span class=\"text-gray-700 dark:text-gray-400\">
                                Date Fin Prevue

                            </span>

                            {{form_row(formM.datefinPrevue , { 'label' : false})}}


                        </label>

                    </div>



                </div>

                <ul class=\"tab-links\">
                    <li>
                        <a href=\"{{ path('mission_list')}}\" type=\"submit\">Cancel</a>
                        <button href=\"{{ path('mission_list') }}\" type=\"submit\">Submit</button>

                    </li>
                </ul>
            </div>
  
            {{form_end(formM)}}
        </form>
    </div>


</div>

<script>
    const form = document.querySelector('form');
        const isFormValid = Axentix.Forms.validate(form);
</script>
{% endblock %}", "mission/new.html.twig", "/home/hp/Téléchargements/GRH-master/templates/mission/new.html.twig");
    }
}
