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

/* security/login.html.twig */
class __TwigTemplate_cef2add5ae3aab148f02823d1a1592052c2cdb78fc00c9713fbe03ed674b3ae5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>Bus Software</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    <!----===== Boxicons CSS ===== -->
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\" />

</head>

<body>
    <div class=\"container\">
        <div class=\"screen\">
            <div class=\"screen__content\">
                <form class=\"register\" method=\"post\">
                    <div class=\"title\">S'identifier</div>

                    <div class=\"creeCompte\">
                        Vous n'avez pas encore de compte ?
                        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">

\t\t\t\t\t\t\tCréer un compte ici

\t\t\t\t\t\t</a>
                    </div>
                    <img class=\"welcoming\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/welcome.svg"), "html", null, true);
        echo "\" alt=\"welcoming\">

                    <!-- ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
            echo ",
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 37
        echo " -->

                    <div class=\"login__field\">
                        <i class=\"login__icon  fas fa-regular fa-at\" style=\"top: 46px; left: 3px;\"></i>
                        <input type=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" class=\"login__input\" autocomplete=\"email\" >

                    </div>

                    <div class=\"login__field\">
                        <i class=\"login__icon fas fa-lock\" style=\"top: 43px; left: 2px;\"></i>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"login__input\" autocomplete=\"current-password\" placeholder=\"Mot de passe\" >


                    </div>
                    <div class=\"remember\">
                        <input type=\"checkbox\" name=\"rememberCheck\" checked /><label>Remember me</label>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                    <div class=\"login_button\">
                        <button class=\"button login__submit\" type=\"submit\">
\t\t\t\t\t\t\t<span class=\"button__text\">Connexion</span>
\t\t\t\t\t\t</button>


                    </div>

                </form>


            </div>

        </div>
    </div>

</body>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 55,  122 => 41,  116 => 37,  109 => 34,  105 => 32,  103 => 31,  98 => 29,  89 => 23,  71 => 8,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>Bus Software</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/styles.css')}}\">
    <!----===== Boxicons CSS ===== -->
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\" />

</head>

<body>
    <div class=\"container\">
        <div class=\"screen\">
            <div class=\"screen__content\">
                <form class=\"register\" method=\"post\">
                    <div class=\"title\">S'identifier</div>

                    <div class=\"creeCompte\">
                        Vous n'avez pas encore de compte ?
                        <a href=\"{{ path('app_register')}}\">

\t\t\t\t\t\t\tCréer un compte ici

\t\t\t\t\t\t</a>
                    </div>
                    <img class=\"welcoming\" src=\"{{ asset ('images/welcome.svg')}}\" alt=\"welcoming\">

                    <!-- {% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t{{ app.user.username }},
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t{% endif %} -->

                    <div class=\"login__field\">
                        <i class=\"login__icon  fas fa-regular fa-at\" style=\"top: 46px; left: 3px;\"></i>
                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" class=\"login__input\" autocomplete=\"email\" >

                    </div>

                    <div class=\"login__field\">
                        <i class=\"login__icon fas fa-lock\" style=\"top: 43px; left: 2px;\"></i>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"login__input\" autocomplete=\"current-password\" placeholder=\"Mot de passe\" >


                    </div>
                    <div class=\"remember\">
                        <input type=\"checkbox\" name=\"rememberCheck\" checked /><label>Remember me</label>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <div class=\"login_button\">
                        <button class=\"button login__submit\" type=\"submit\">
\t\t\t\t\t\t\t<span class=\"button__text\">Connexion</span>
\t\t\t\t\t\t</button>


                    </div>

                </form>


            </div>

        </div>
    </div>

</body>

</html>

{% endblock %}", "security/login.html.twig", "/home/hp/Téléchargements/GRH-master/templates/security/login.html.twig");
    }
}
