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

/* security/updatePass.html.twig */
class __TwigTemplate_271427a0962006ca8a919aa54ff03e2ec54fae03e115039c1a47b5f120d7ddc5 extends Template
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

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<style>
    body {
        background-color: #CB997E
    }

    .card {
        border: none
    }

    .image {
        position: relative
    }

    .image span {
        background-color: #CB997E;
        color: #fff;
        padding: 6px;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        font-size: 12px;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: -0px;
        right: 0px
    }

    .user-details h4 {
        color: #CB997E
    }


    .user-details span {
        text-align: left
    }

    .inputs label {
        display: flex;
        margin-left: 3px;
        font-weight: 400;
        font-size: 13px;
        margin-bottom: 4px
    }

    .inputs input {
        font-size: 14px;
        height: 40px;
        border: 2px solid #ced4da
    }

    .inputs input:focus {
        box-shadow: none;
        border: 2px solid #CB997E
    }

    .about-inputs label {
        display: flex;
        margin-left: 3px;
        font-weight: 400;
        font-size: 13px;
        margin-bottom: 4px
    }

    .about-inputs textarea {
        font-size: 14px;
        height: 100px;
        border: 2px solid #ced4da;
        resize: none
    }

    .about-inputs textarea:focus {
        box-shadow: none
    }

    .btn {
        font-weight: 400
    }

    .btn:focus {
        box-shadow: none
    }

    .rounded-circle {
        width: 150px;
    }
</style>
<div class=\"container mt-1\">
    <div class=\"card p-3 text-center\">
        <div class=\"d-flex flex-row justify-content-center mb-3\">
            <div class=\"image\">
                <img src=\"{{ asset('images/user.png')}}\" class=\"rounded-circle\">
                <span>
                    <input type=\"file\" name=\"avatar\" id=\"avatar\" style=\"opacity: 0; height: 1px; display: none;\">
                    <a href=\"javascript:void(0)\" id=\"change_avatar\"> <i class='bx bxs-camera-plus'></i></a>

                </span>
            </div>
            <div class=\"d-flex flex-column ms-3 user-details\">
                <h4 class=\"mb-0\">{{app.user.name.nom}}</h4>
                <span>{{app.user.name.service}}</span>
            </div>
        </div>
{% for message in app.flashes('warning') %}
<div class=\"alert alert-warning mt-4\">
    {{ message }}
</div>
{% endfor %}

        <h4 style=\"margin-left: -130px; margin: top 20px;\"> Modifier  mot de passse </h4>
        <br>
        <div class=\"row\">

            {# <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Nom</label>
                    <input class=\"form-control\" type=\"text\" value=\"{{app.user.name.nom}}\">
                </div>
            </div>
       #}



{{ form(form) }}
        </div>

        <div class=\"mt-3 gap-2 d-flex justify-content-end\">


            <a href=\"#\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Modifier Mot de passe</span></a>

            <a href=\"{{ path('dashboard_page')}}\"
                class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Cancel</span></a>

            <a href=\"#\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Save</span></a>


        </div>

    </div>

</div>


{% endblock %}", "security/updatePass.html.twig", "/home/hp/Symfony/GRH/templates/security/updatePass.html.twig");
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    body {
        background-color: #CB997E
    }

    .card {
        border: none
    }

    .image {
        position: relative
    }

    .image span {
        background-color: #CB997E;
        color: #fff;
        padding: 6px;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        font-size: 12px;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: -0px;
        right: 0px
    }

    .user-details h4 {
        color: #CB997E
    }


    .user-details span {
        text-align: left
    }

    .inputs label {
        display: flex;
        margin-left: 3px;
        font-weight: 400;
        font-size: 13px;
        margin-bottom: 4px
    }

    .inputs input {
        font-size: 14px;
        height: 40px;
        border: 2px solid #ced4da
    }

    .inputs input:focus {
        box-shadow: none;
        border: 2px solid #CB997E
    }

    .about-inputs label {
        display: flex;
        margin-left: 3px;
        font-weight: 400;
        font-size: 13px;
        margin-bottom: 4px
    }

    .about-inputs textarea {
        font-size: 14px;
        height: 100px;
        border: 2px solid #ced4da;
        resize: none
    }

    .about-inputs textarea:focus {
        box-shadow: none
    }

    .btn {
        font-weight: 400
    }

    .btn:focus {
        box-shadow: none
    }

    .rounded-circle {
        width: 150px;
    }
</style>
<div class=\"container mt-1\">
    <div class=\"card p-3 text-center\">
        <div class=\"d-flex flex-row justify-content-center mb-3\">
            <div class=\"image\">
                <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" class=\"rounded-circle\">
                <span>
                    <input type=\"file\" name=\"avatar\" id=\"avatar\" style=\"opacity: 0; height: 1px; display: none;\">
                    <a href=\"javascript:void(0)\" id=\"change_avatar\"> <i class='bx bxs-camera-plus'></i></a>

                </span>
            </div>
            <div class=\"d-flex flex-column ms-3 user-details\">
                <h4 class=\"mb-0\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104), "html", null, true);
        echo "</h4>
                <span>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "service", [], "any", false, false, false, 105), "html", null, true);
        echo "</span>
            </div>
        </div>
";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 109
            echo "<div class=\"alert alert-warning mt-4\">
    ";
            // line 110
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
        <h4 style=\"margin-left: -130px; margin: top 20px;\"> Modifier  mot de passse </h4>
        <br>
        <div class=\"row\">

            ";
        // line 125
        echo "


";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form');
        echo "
        </div>

        <div class=\"mt-3 gap-2 d-flex justify-content-end\">


            <a href=\"#\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Modifier Mot de passe</span></a>

            <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_page");
        echo "\"
                class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Cancel</span></a>

            <a href=\"#\" class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Save</span></a>


        </div>

    </div>

</div>


";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3

    public function getTemplateName()
    {
        return "security/updatePass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 137,  211 => 128,  206 => 125,  199 => 113,  190 => 110,  187 => 109,  183 => 108,  177 => 105,  173 => 104,  162 => 96,  68 => 4,  58 => 3,  35 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/updatePass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/updatePass.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/updatePass.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
