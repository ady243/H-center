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
        echo "<header class=\"pt-1 bg-warning text-white d-flex\">
    <div class=\"container \">
        <div class=\"d-flex flex-wrap align-items-center col\">
       
       
            <form class=\"col-24 col-lg-auto mb-5 mb-lg-1 me-lg-5 justify-content-lg-end d-flex \">
                <input type=\"search\" class=\"form-control form-control-dark\" placeholder=\"Search... ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\" aria-label=\"Search\">
            </form>

            <div class=\"\">
            <div class=\"d-flex  pt-10 p-2 justify-content-lg-end\">
             ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "
                    <p class=\"text-success\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "status", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                    ";
            // line 15
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "status", [], "any", false, false, false, 15), "professionnel"))) {
                // line 16
                echo "                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_desktop_new");
                echo "\" class=\"btn btn-outline-light justify-content-lg-end\">Ajouter</a>
                    ";
            }
            // line 18
            echo "                    <a class=\"btn btn-danger -m-5\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                ";
        } else {
            // line 20
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-light p-1  justify-content-lg-end\">Login</a>
                    <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-danger p-1 justify-content-lg-end\">Sign-up</a>
                ";
        }
        // line 23
        echo "            <div/>
               
            </div>
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
        return array (  94 => 23,  89 => 21,  84 => 20,  78 => 18,  72 => 16,  70 => 15,  64 => 14,  61 => 13,  59 => 12,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"pt-1 bg-warning text-white d-flex\">
    <div class=\"container \">
        <div class=\"d-flex flex-wrap align-items-center col\">
       
       
            <form class=\"col-24 col-lg-auto mb-5 mb-lg-1 me-lg-5 justify-content-lg-end d-flex \">
                <input type=\"search\" class=\"form-control form-control-dark\" placeholder=\"Search... {{desktop.name}}\" aria-label=\"Search\">
            </form>

            <div class=\"\">
            <div class=\"d-flex  pt-10 p-2 justify-content-lg-end\">
             {% if app.user %}

                    <p class=\"text-success\">{{ app.user.username }} : {{ app.user.status }}</p>
                    {% if app.user.status == 'professionnel' %}
                        <a href=\"{{ path('app_desktop_new') }}\" class=\"btn btn-outline-light justify-content-lg-end\">Ajouter</a>
                    {% endif %}
                    <a class=\"btn btn-danger -m-5\" href=\"{{ path('app_logout') }}\">Logout</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-light p-1  justify-content-lg-end\">Login</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-danger p-1 justify-content-lg-end\">Sign-up</a>
                {% endif %}
            <div/>
               
            </div>
        </div>
    </div>
</header>", "layouts/header.html.twig", "C:\\Users\\masiv\\hcenter\\h-center-ady\\templates\\layouts\\header.html.twig");
    }
}
