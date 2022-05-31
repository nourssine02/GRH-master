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

/* profil/index.html.twig */
class __TwigTemplate_1e1a17f53183b3af50653c87a299ee4c76cd4abc08d1e932425b741f2317e197 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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
";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
<div class=\"container mt-1\">
    <div class=\"card p-3 text-center\">
        <div class=\"d-flex flex-row justify-content-center mb-3\">
            <div class=\"image\">
                <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" class=\"rounded-circle\">
                <span>
                    <input type=\"file\" name=\"avatar\" id=\"avatar\" style=\"opacity: 0; height: 1px; display: none;\">
                    <a href=\"javascript:void(0)\" id=\"change_avatar\"> <i class='bx bxs-camera-plus'></i></a>
                
                </span>
            </div>
            <div class=\"d-flex flex-column ms-3 user-details\">
                <h4 class=\"mb-0\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "nom", [], "any", false, false, false, 111), "html", null, true);
        echo "</h4>
                <span>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "service", [], "any", false, false, false, 112), "html", null, true);
        echo "</span>
            </div>
        </div>


        <h4 style=\"margin-left: -130px; margin: top 20px;\"> Profile</h4>
        <br>
        <div class=\"row\">

            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Nom</label>
                    ";
        // line 125
        echo "                    <label class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "name", [], "any", false, false, false, 125), "nom", [], "any", false, false, false, 125), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Prénom</label>
                    ";
        // line 132
        echo "                    <label class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "name", [], "any", false, false, false, 132), "prenom", [], "any", false, false, false, 132), "html", null, true);
        echo "</label>

                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Email</label>
                    <label class=\"form-control\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "email", [], "any", false, false, false, 140), "html", null, true);
        echo "</label>
                    
                    ";
        // line 143
        echo "                </div>
            </div>


            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Telephone</label>
                    <label class=\"form-control\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "name", [], "any", false, false, false, 150), "telephone", [], "any", false, false, false, 150), "html", null, true);
        echo "</label>
                    
                    ";
        // line 153
        echo "                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Adresse</label>
                    <label class=\"form-control\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "name", [], "any", false, false, false, 159), "adresse", [], "any", false, false, false, 159), "html", null, true);
        echo "</label>
                    
                    ";
        // line 162
        echo "                </div>
            </div>


        </div>

        <div class=\"mt-3 gap-2 d-flex justify-content-end\">
            
            <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_page");
        echo "\"
                class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Cancel</span></a>

            <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "name", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174)]), "html", null, true);
        echo "\"
                class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Modifier Profil</span></a>


        </div>

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

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 174,  275 => 170,  265 => 162,  260 => 159,  252 => 153,  247 => 150,  238 => 143,  233 => 140,  221 => 132,  211 => 125,  196 => 112,  192 => 111,  181 => 103,  174 => 98,  162 => 93,  158 => 92,  68 => 4,  58 => 3,  35 => 1,);
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
{% for message in app.flashes('info') %}
<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>

</div>
{% endfor %}

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


        <h4 style=\"margin-left: -130px; margin: top 20px;\"> Profile</h4>
        <br>
        <div class=\"row\">

            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Nom</label>
                    {# <input class=\"form-control\" type=\"text\" value=\"{{app.user.name.nom}}\"> #}
                    <label class=\"form-control\">{{app.user.name.nom}}</label>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Prénom</label>
                    {# <input class=\"form-control\" type=\"text\" value=\"{{app.user.name.prenom}}\"> #}
                    <label class=\"form-control\">{{app.user.name.prenom}}</label>

                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Email</label>
                    <label class=\"form-control\">{{app.user.name.email}}</label>
                    
                    {# <input class=\"form-control\" type=\"text\" value=\"{{app.user.name.email}}\"> #}
                </div>
            </div>


            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Telephone</label>
                    <label class=\"form-control\">{{app.user.name.telephone}}</label>
                    
                    {# <input class=\"form-control\" type=\"text\" value=\"{{app.user.name.telephone}}\"> #}
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"inputs\">
                    <label>Adresse</label>
                    <label class=\"form-control\">{{app.user.name.adresse}}</label>
                    
                    {# <input class=\"form-control\" type=\"text\" value=\"{{app.user.name.adresse}}\"> #}
                </div>
            </div>


        </div>

        <div class=\"mt-3 gap-2 d-flex justify-content-end\">
            
            <a href=\"{{ path('dashboard_page')}}\"
                class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Cancel</span></a>

            <a href=\"{{path('profil_update' , {'id' : app.user.name.id })}}\"
                class=\"btn shadow-1 rounded-1 btn-outline btn-opening text-airforce text-light-2\"><span
                    class=\"btn-outline-text btn-outline-invert\">Modifier Profil</span></a>


        </div>

    </div>

</div>


<script>
        \$(document).on('click', '#change_avatar', function () {
        \$('#avatar').click();
    });
</script>
{% endblock %}", "profil/index.html.twig", "/home/hp/Téléchargements/GRH-master/templates/profil/index.html.twig");
    }
}
