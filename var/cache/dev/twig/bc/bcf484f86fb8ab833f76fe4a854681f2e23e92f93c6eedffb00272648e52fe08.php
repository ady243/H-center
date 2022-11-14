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

/* desktop/show.html.twig */
class __TwigTemplate_af15ee617e6fd99e9becabc53bb996c746c31ace3b8fedb76ba81caf0aeca78f extends Template
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
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "desktop/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "desktop/show.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "desktop/show.html.twig", 1);
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
        echo "    <div class=\"container container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 mt-4\">
                <h1>Desktop</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Surface</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 25, $this->source); })()), "surface", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 29, $this->source); })()), "capacity", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>DateStart</th>
                        <td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 37, $this->source); })()), "dateStart", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 37, $this->source); })()), "dateStart", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>DateEnd</th>
                        <td>";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 41, $this->source); })()), "dateEnd", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 41, $this->source); })()), "dateEnd", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_desktop_index");
        echo "\">back to list</a>

                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_desktop_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["desktop"]) || array_key_exists("desktop", $context) ? $context["desktop"] : (function () { throw new RuntimeError('Variable "desktop" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">edit</a>

                ";
        // line 50
        echo twig_include($this->env, $context, "desktop/_delete_form.html.twig");
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "desktop/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  141 => 48,  136 => 46,  128 => 41,  121 => 37,  114 => 33,  107 => 29,  100 => 25,  93 => 21,  86 => 17,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <div class=\"container container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12 mt-4\">
                <h1>Desktop</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ desktop.id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ desktop.name }}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>{{ desktop.type }}</td>
                    </tr>
                    <tr>
                        <th>Surface</th>
                        <td>{{ desktop.surface }}</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>{{ desktop.capacity }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ desktop.price }}</td>
                    </tr>
                    <tr>
                        <th>DateStart</th>
                        <td>{{ desktop.dateStart ? desktop.dateStart|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>DateEnd</th>
                        <td>{{ desktop.dateEnd ? desktop.dateEnd|date('Y-m-d') : '' }}</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('app_desktop_index') }}\">back to list</a>

                <a href=\"{{ path('app_desktop_edit', {'id': desktop.id}) }}\">edit</a>

                {{ include('desktop/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}
", "desktop/show.html.twig", "C:\\Users\\masiv\\hcenter\\h-center-ady\\templates\\desktop\\show.html.twig");
    }
}
