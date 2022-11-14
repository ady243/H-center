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
            'stylsheets' => [$this, 'block_stylsheets'],
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
        $this->displayBlock('stylsheets', $context, $blocks);
        // line 11
        echo "


<header class=\"pt-1 bg-warning text-white d-flex\">
    <div class=\"justify-content-lg-end ml-5\">
        <div class=\"d-flex flex-wrap align-items-center col\">

            <div class= \"row mr-4 \">
            
        <div class=\"row justify-content-lg-end mr-0 row \">
        <form>
        
        
          <form class=\"row justify-content-lg-end mr-0 row  \">
                <input type=\"text\" class=\"form-control \"  placeholder=\"Type de bureau\" aria-label=\"text\">
            </form>
          <form class=\" justify-content-lg-end \">
                <input type=\"filter\" class=\"form-control \"  placeholder=\"surface / m²\" aria-label=\"filter\">
            </form>
            <form class=\" justify-content-lg-end  \">
                <input type=\"date\" class=\"form-control \"  placeholder=\"Du\" aria-label=\"filter\"> 
            </form>
            <p class=\"text-dark\">au</p>
             <form class=\" justify-content-lg-end  \">
                <input type=\"date\" class=\"form-control \"  placeholder=\"Du\" aria-label=\"filter\"> 
            </form>
            <form class=\" justify-content-lg-end  \">
                <input type=\"filter\" class=\"form-control \"  placeholder=\"nombre de personnes\" aria-label=\"filter\"> 
            </form>
        <form/>
         
          
        </div>
           
           
           
            </div>
            <div class=\"d-flex col p-3\">
            <div class=\"d-flex justify-content-lg-end \">
            <div class=\"row d-flex\">
              ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
            // line 52
            echo "
                    <p class=\"col\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "username", [], "any", false, false, false, 53), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "status", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                   
                    <div class=\"row\">
                     ";
            // line 56
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "status", [], "any", false, false, false, 56), "professionnel"))) {
                // line 57
                echo "                         <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
                echo "\" class=\"btn btn-outline-light \">Home</a>
                        <a href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_desktop_new");
                echo "\" class=\"btn btn-outline-light \">Ajouter</a>
                    

                    ";
            }
            // line 62
            echo "                     <a class=\"btn btn-danger mr-5\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                ";
        } else {
            // line 64
            echo "                <div class=\"px-10 col mr-4\">
                <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-danger p-1 \">Login</a>
                    <a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-danger p-1 \">Sign-up</a></div>
                    
                ";
        }
        // line 69
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

    // line 1
    public function block_stylsheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylsheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylsheets"));

        // line 2
        echo "<style>

.nom{
    backgound-color: red;
}

</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  163 => 2,  153 => 1,  134 => 69,  128 => 66,  124 => 65,  121 => 64,  115 => 62,  108 => 58,  103 => 57,  101 => 56,  93 => 53,  90 => 52,  88 => 51,  46 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylsheets %}
<style>

.nom{
    backgound-color: red;
}

</style>

{% endblock %}



<header class=\"pt-1 bg-warning text-white d-flex\">
    <div class=\"justify-content-lg-end ml-5\">
        <div class=\"d-flex flex-wrap align-items-center col\">

            <div class= \"row mr-4 \">
            
        <div class=\"row justify-content-lg-end mr-0 row \">
        <form>
        
        
          <form class=\"row justify-content-lg-end mr-0 row  \">
                <input type=\"text\" class=\"form-control \"  placeholder=\"Type de bureau\" aria-label=\"text\">
            </form>
          <form class=\" justify-content-lg-end \">
                <input type=\"filter\" class=\"form-control \"  placeholder=\"surface / m²\" aria-label=\"filter\">
            </form>
            <form class=\" justify-content-lg-end  \">
                <input type=\"date\" class=\"form-control \"  placeholder=\"Du\" aria-label=\"filter\"> 
            </form>
            <p class=\"text-dark\">au</p>
             <form class=\" justify-content-lg-end  \">
                <input type=\"date\" class=\"form-control \"  placeholder=\"Du\" aria-label=\"filter\"> 
            </form>
            <form class=\" justify-content-lg-end  \">
                <input type=\"filter\" class=\"form-control \"  placeholder=\"nombre de personnes\" aria-label=\"filter\"> 
            </form>
        <form/>
         
          
        </div>
           
           
           
            </div>
            <div class=\"d-flex col p-3\">
            <div class=\"d-flex justify-content-lg-end \">
            <div class=\"row d-flex\">
              {% if app.user %}

                    <p class=\"col\">{{ app.user.username }} : {{ app.user.status }}</p>
                   
                    <div class=\"row\">
                     {% if app.user.status == 'professionnel' %}
                         <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-light \">Home</a>
                        <a href=\"{{ path('app_desktop_new') }}\" class=\"btn btn-outline-light \">Ajouter</a>
                    

                    {% endif %}
                     <a class=\"btn btn-danger mr-5\" href=\"{{ path('app_logout') }}\">Logout</a>
                {% else %}
                <div class=\"px-10 col mr-4\">
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-danger p-1 \">Login</a>
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
