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

/* profil/update.html.twig */
class __TwigTemplate_4f0997796d0940f2670f64f0ab927b536552701f73218599e89693faed767da2 extends Template
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
    li {
        font-weight: lighter;
        font-size: 14px;

    }

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
        font-weight: 200;
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


        <h4 style=\"margin-left: -130px; margin: top 20px;\">Modifier Profile</h4>
        <br>
        <form action=\"{{ path('profil_update', {'id': app.user.name.id})}}\" method=\"POST\">


            {{form_start(form)}}

            <div class=\"row  \">
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        {{form_row(form.nom)}}

                    </div>
                </div>
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        {{form_row(form.prenom)}}

                    </div>
                </div>
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        {{form_row(form.email)}}

                    </div>
                </div>

                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        {{form_row(form.telephone)}}

                    </div>
                </div>
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        {{form_row(form.adresse)}}

                    </div>
                </div>


            </div>
       <br>
            <button href=\"{{ path('profil') }}\" type=\"submit\"   class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\"> Submit</span></button>




            {{form_end(form)}}
        </form>
    </div>

</div>

<script>
    \$(document).on('click', '#change_avatar', function () {
        \$('#avatar').click();
    });
</script>
{% endblock %}", "profil/update.html.twig", "/home/hp/Téléchargements/GRH-master/templates/profil/update.html.twig");
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
    li {
        font-weight: lighter;
        font-size: 14px;

    }

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
        font-weight: 200;
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
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" class=\"rounded-circle\">
                <span>
                    <input type=\"file\" name=\"avatar\" id=\"avatar\" style=\"opacity: 0; height: 1px; display: none;\">
                    <a href=\"javascript:void(0)\" id=\"change_avatar\"> <i class='bx bxs-camera-plus'></i></a>

                </span>
            </div>
            <div class=\"d-flex flex-column ms-3 user-details\">
                <h4 class=\"mb-0\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110), "nom", [], "any", false, false, false, 110), "html", null, true);
        echo "</h4>
                <span>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "service", [], "any", false, false, false, 111), "html", null, true);
        echo "</span>
            </div>
        </div>


        <h4 style=\"margin-left: -130px; margin: top 20px;\">Modifier Profile</h4>
        <br>
        <form action=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118)]), "html", null, true);
        echo "\" method=\"POST\">


            ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_start');
        echo "

            <div class=\"row  \">
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "nom", [], "any", false, false, false, 126), 'row');
        echo "

                    </div>
                </div>
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "prenom", [], "any", false, false, false, 132), 'row');
        echo "

                    </div>
                </div>
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "email", [], "any", false, false, false, 138), 'row');
        echo "

                    </div>
                </div>

                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "telephone", [], "any", false, false, false, 145), 'row');
        echo "

                    </div>
                </div>
                <div class=\"col-md-6 \">
                    <div class=\"inputs\">
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "adresse", [], "any", false, false, false, 151), 'row');
        echo "

                    </div>
                </div>


            </div>
       <br>
            <button href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\" type=\"submit\"   class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\"> Submit</span></button>




            ";
        // line 165
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'form_end');
        echo "
        </form>
    </div>

</div>

<script>
    \$(document).on('click', '#change_avatar', function () {
        \$('#avatar').click();
    });
</script>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3

    public function getTemplateName()
    {
        return "profil/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 165,  255 => 159,  244 => 151,  235 => 145,  225 => 138,  216 => 132,  207 => 126,  199 => 121,  193 => 118,  183 => 111,  179 => 110,  168 => 102,  68 => 4,  58 => 3,  35 => 1,);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }
}
