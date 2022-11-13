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

/* layouts/header.html.twig */
class __TwigTemplate_11d656dee678bb14145af73e6f3267b1ef9ccdc32793720e5aab9c2443ef11e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

        // line 1
        echo "<header class=\"p-3 bg-dark text-white\">
    <div class=\"container\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
            <a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
                <svg class=\"bi me-2\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\"><use xlink:href=\"#bootstrap\"/></svg>
            </a>

            <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
                <li><a href=\"#\" class=\"nav-link px-2 text-secondary\">Home</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">Features</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">Pricing</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">FAQs</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">About</a></li>
            </ul>

            <form class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\">
                <input type=\"search\" class=\"form-control form-control-dark\" placeholder=\"Search...\" aria-label=\"Search\">
            </form>

            <div class=\"text-end\">
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 30
            echo "                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "status", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                    ";
            // line 31
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "status", [], "any", false, false, false, 31), "professionnel"))) {
                // line 32
                echo "                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_desktop_new");
                echo "\" class=\"btn btn-outline-light me-2\">Ajouter</a>
                    ";
            }
            // line 34
            echo "                    <a class=\"btn btn-danger\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                ";
        } else {
            // line 36
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-light me-2\">Login</a>
                    <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-warning\">Sign-up</a>
                ";
        }
        // line 39
        echo "            </div>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  93 => 37,  88 => 36,  82 => 34,  76 => 32,  74 => 31,  67 => 30,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"p-3 bg-dark text-white\">
    <div class=\"container\">
        <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
            <a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
                <svg class=\"bi me-2\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\"><use xlink:href=\"#bootstrap\"/></svg>
            </a>

            <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
                <li><a href=\"#\" class=\"nav-link px-2 text-secondary\">Home</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">Features</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">Pricing</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">FAQs</a></li>
                <li><a href=\"#\" class=\"nav-link px-2 text-white\">About</a></li>
            </ul>

            <form class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3\">
                <input type=\"search\" class=\"form-control form-control-dark\" placeholder=\"Search...\" aria-label=\"Search\">
            </form>

            <div class=\"text-end\">
                {% if app.user %}
{#                    <div class=\"dropdown\">#}
{#                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">#}
{#                            {{ app.user.username }}#}
{#                        </button>#}
{#                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">#}
{#                            <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>#}
{#                        </ul>#}
{#                    </div>#}
                    <p>{{ app.user.username }} - {{ app.user.status }}</p>
                    {% if app.user.status == 'professionnel' %}
                        <a href=\"{{ path('app_desktop_new') }}\" class=\"btn btn-outline-light me-2\">Ajouter</a>
                    {% endif %}
                    <a class=\"btn btn-danger\" href=\"{{ path('app_logout') }}\">Logout</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-light me-2\">Login</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-warning\">Sign-up</a>
                {% endif %}
            </div>
        </div>
    </div>
</header>", "layouts/header.html.twig", "C:\\Users\\masiv\\hcenter\\h-center-ady\\templates\\layouts\\header.html.twig");
    }
}
