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
    <div class=\"justify-content-lg-end ml-5\">
        <div class=\"d-flex flex-wrap align-items-center col\">

            <div class= \"row mr-4 \">
            
        <div class=\"row justify-content-lg-end mr-0 row \">
        ";
        // line 34
        echo "         
          
        </div>
           
           
           
            </div>
            <div class=\"d-flex col p-3\">
            <div class=\"d-flex justify-content-lg-end \">
            <div class=\"row d-flex\">
              ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "
                    <p class=\"col text-primary\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "status", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                   
                    <div class=\"row\">
                     ";
            // line 49
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "status", [], "any", false, false, false, 49), "professionnel"))) {
                // line 50
                echo "                         <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
                echo "\" class=\"btn btn-outline-light \">Home</a>
                        <a href=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_desktop_new");
                echo "\" class=\"btn btn-outline-light \">Ajouter</a>
                    

                    ";
            }
            // line 55
            echo "                     <a class=\"btn btn-danger mr-5\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                ";
        } else {
            // line 57
            echo "                <div class=\"px-10 col mr-4\">
                <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-primary p-1 \">Login</a>
                    <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-danger p-1 \">Sign-up</a></div>
                    
                ";
        }
        // line 62
        echo "                
                </div>
                   </div>
           
            <div/>
               
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
        return array (  110 => 62,  104 => 59,  100 => 58,  97 => 57,  91 => 55,  84 => 51,  79 => 50,  77 => 49,  69 => 46,  66 => 45,  64 => 44,  52 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"pt-1 bg-warning text-white d-flex\">
    <div class=\"justify-content-lg-end ml-5\">
        <div class=\"d-flex flex-wrap align-items-center col\">

            <div class= \"row mr-4 \">
            
        <div class=\"row justify-content-lg-end mr-0 row \">
        {# <form>
        
        
          <form class=\"row justify-content-lg-end mr-0 row  \">
                <input type=\"text\" class=\"form-control \"  placeholder=\"Type de bureau\" aria-label=\"text\">
            </form>
          <form class=\" justify-content-lg-end mr-0 \">
                <input type=\"filter\" class=\"form-control \"  placeholder=\"surface / m²\" aria-label=\"filter\">
            </form>
            <form class=\" justify-content-lg-end mr-0 \">
                <input type=\"date\" class=\"form-control \"  aria-label=\"filter\"> 
            </form>
            <p class=\"text-dark\">au</p>
             <form class=\" justify-content-lg-end mr-0 \">
                <input type=\"date\" class=\"form-control \"  aria-label=\"filter\"> 
            </form>
            <form class=\" justify-content-lg-end mr-0 \">
                <input type=\"filter\" class=\"form-control \"  placeholder=\"nombre de personnes\" aria-label=\"filter\"> 
            </form>
            <form class=\" justify-content-lg-end  \">
                <input type=\"number\" class=\"form-control \"  placeholder=\"Budget €\" aria-label=\"filter\"> 
            </form>
             <button class=\"justify-content-lg-end ml-3 bg-white btn-outline-light text-dark \" type=\"submit\">
           Chercher
            </button>
        <form/> #}
         
          
        </div>
           
           
           
            </div>
            <div class=\"d-flex col p-3\">
            <div class=\"d-flex justify-content-lg-end \">
            <div class=\"row d-flex\">
              {% if app.user %}

                    <p class=\"col text-primary\">{{ app.user.username }} : {{ app.user.status }}</p>
                   
                    <div class=\"row\">
                     {% if app.user.status == 'professionnel' %}
                         <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-light \">Home</a>
                        <a href=\"{{ path('app_desktop_new') }}\" class=\"btn btn-outline-light \">Ajouter</a>
                    

                    {% endif %}
                     <a class=\"btn btn-danger mr-5\" href=\"{{ path('app_logout') }}\">Logout</a>
                {% else %}
                <div class=\"px-10 col mr-4\">
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary p-1 \">Login</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-danger p-1 \">Sign-up</a></div>
                    
                {% endif %}
                
                </div>
                   </div>
           
            <div/>
               
            </div>
        </div>
    </div>
</header>", "layouts/header.html.twig", "C:\\Users\\masiv\\hcenter\\h-center-ady\\templates\\layouts\\header.html.twig");
    }
}
