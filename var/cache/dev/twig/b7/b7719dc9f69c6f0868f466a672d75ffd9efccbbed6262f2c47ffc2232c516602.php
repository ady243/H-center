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
        // line 11
        echo "        
         <form class=\"row justify-content-lg-end mr-0 row  \">
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
</form>
         
         
          
        </div>
           
           
           
            </div>
            <div class=\"d-flex col p-3\">
            <div class=\"d-flex justify-content-lg-end \">
            <div class=\"row d-flex\">
              ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "   
                    <div class=\"row\">
                            
                     ";
            // line 51
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "status", [], "any", false, false, false, 51), "professionnel"))) {
                // line 52
                echo "                         <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
                echo "\" class=\"btn btn-outline-light p-1 mr-1\">Home</a>
                        <a href=\"";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_desktop_new");
                echo "\" class=\"btn btn-outline-light p-1 mr-1 \">Ajouter</a>      

                    ";
            }
            // line 56
            echo "                     <a class=\"btn btn-danger mr-1\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                ";
        } else {
            // line 58
            echo "                <div class=\"px-4 col mr-4\">
                <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-primary p-1 \">Login</a>
                    <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-danger p-1 \">Sign-up</a></div>
                    
                ";
        }
        // line 63
        echo "                <p class=\"row text-primary px-4 d-blok\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "username", [], "any", false, false, false, 63), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "status", [], "any", false, false, false, 63), "html", null, true);
        echo "</p>
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
        return array (  131 => 63,  125 => 60,  121 => 59,  118 => 58,  112 => 56,  106 => 53,  101 => 52,  99 => 51,  94 => 48,  92 => 47,  54 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"pt-1 bg-warning text-white d-flex\">
    <div class=\"justify-content-lg-end ml-5\">
        <div class=\"d-flex flex-wrap align-items-center col\">

            <div class= \"row mr-4 \">
            
        <div class=\"row justify-content-lg-end mr-0 row \">


        {# L'idée du design pour la partie filter #}
        
         <form class=\"row justify-content-lg-end mr-0 row  \">
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
</form>
         
         
          
        </div>
           
           
           
            </div>
            <div class=\"d-flex col p-3\">
            <div class=\"d-flex justify-content-lg-end \">
            <div class=\"row d-flex\">
              {% if app.user %}
   
                    <div class=\"row\">
                            
                     {% if app.user.status == 'professionnel' %}
                         <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-light p-1 mr-1\">Home</a>
                        <a href=\"{{ path('app_desktop_new') }}\" class=\"btn btn-outline-light p-1 mr-1 \">Ajouter</a>      

                    {% endif %}
                     <a class=\"btn btn-danger mr-1\" href=\"{{ path('app_logout') }}\">Logout</a>
                {% else %}
                <div class=\"px-4 col mr-4\">
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary p-1 \">Login</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-danger p-1 \">Sign-up</a></div>
                    
                {% endif %}
                <p class=\"row text-primary px-4 d-blok\">{{ app.user.username }} : {{ app.user.status }}</p>
                </div>
                   </div>
           
            <div/>
               
            </div>
        </div>
    </div>
</header>", "layouts/header.html.twig", "C:\\Users\\masiv\\hcenter\\h-center-ady\\templates\\layouts\\header.html.twig");
    }
}
