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

/* registration/register.html.twig */
class __TwigTemplate_98f9e7757d266c44b7dcca9d0ee668f11281ceb21b96bb2bec4622d61512a978 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("./template.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container\">
        <div class=\"row my-4\">
            <div class=\"col-md-8 mx-auto\">
                <div class=\"card shadow shadow-lg mb-5\">
                    <div class=\"card-header\">
                        <h1 class=\"text-center\">Inscription</h1>
                    </div>
                    <div class=\"card-body px-5 py-4\">

                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 21
            echo "                            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
                        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'form_start');
        echo "

                        <div class=\"form-row mb-2\">
                            <div class=\"col form-group\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "lastName", [], "any", false, false, false, 28), 'label');
        echo "
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"text-danger\">
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "lastName", [], "any", false, false, false, 31), 'errors');
        echo "
                                    </span>
                            </div>

                            <div class=\"col form-group\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "firstName", [], "any", false, false, false, 36), 'label');
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "firstName", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"text-danger\">
                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), 'errors');
        echo "
                                    </span>
                            </div>
                        </div>

                        <div class=\"form-row mb-2\">
                            <div class=\"form-group col\">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "birthDate", [], "any", false, false, false, 46), 'label');
        echo "
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "birthDate", [], "any", false, false, false, 47), 'widget');
        echo "
                                <span class=\"text-danger\">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "birthDate", [], "any", false, false, false, 49), 'errors');
        echo "
                                </span>
                            </div>

                            <div class=\"form-group col\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "phoneNumber", [], "any", false, false, false, 54), 'label');
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "phoneNumber", [], "any", false, false, false, 55), 'widget');
        echo "
                                <span class=\"text-danger\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "phoneNumber", [], "any", false, false, false, 57), 'errors');
        echo "
                                </span>
                            </div>
                        </div>

                        <div class=\"form-group mb-2\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63), 'label');
        echo "
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "status", [], "any", false, false, false, 64), 'widget');
        echo "
                            <span class=\"text-danger\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66), 'errors');
        echo "
                            </span>
                        </div>

                        <div id=\"professionnel\">
                            <div class=\"form-group mb-2\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "siret", [], "any", false, false, false, 72), 'label');
        echo "
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "siret", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"text-danger\">
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "siret", [], "any", false, false, false, 75), 'errors');
        echo "
                                </span>
                            </div>

                            <div class=\"form-group mb-2\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "companyName", [], "any", false, false, false, 80), 'label');
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "companyName", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"text-danger\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "companyName", [], "any", false, false, false, 83), 'errors');
        echo "
                                </span>
                            </div>

                            <div class=\"form-group mb-2\">
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "legalStatus", [], "any", false, false, false, 88), 'label');
        echo "
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "legalStatus", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"text-danger\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "legalStatus", [], "any", false, false, false, 91), 'errors');
        echo "
                                </span>
                            </div>
                        </div>

                        <div class=\"form-group mb-2\">
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "address", [], "any", false, false, false, 97), 'label');
        echo "
                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "address", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"text-danger\">
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "address", [], "any", false, false, false, 100), 'errors');
        echo "
                            </span>
                        </div>

                        <div class=\"form-group mb-3\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "email", [], "any", false, false, false, 105), 'label');
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "email", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"text-danger\">
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108), 'errors');
        echo "
                            </span>
                        </div>


                        <div class=\"form-group mb-2\">
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 114, $this->source); })()), "plainPassword", [], "any", false, false, false, 114), 'label');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "plainPassword", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"text-danger\">
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "plainPassword", [], "any", false, false, false, 117), 'errors');
        echo "
                            </span>
                        </div>

                        <div class=\"form-check mb-3\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "agreeTerms", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                            <label class=\"form-check-label\" for=\"defaultCheck1\">
                                Accepter les conditions d'utilisation
                            </label>
                        </div>


                        <div class=\"form-group mb-2 d-none\">
                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 130, $this->source); })()), "legalStatus", [], "any", false, false, false, 130), 'label');
        echo "
                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "legalStatus", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"text-danger\">
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 133, $this->source); })()), "legalStatus", [], "any", false, false, false, 133), 'errors');
        echo "
                            </span>
                        </div>

                        <button type=\"submit\" class=\"btn btn-warning btn-block\">S'inscrire</button>


                        ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 140, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "    <script>

        function handleRequiredFields(value){
            \$('#registration_form_siret').attr('required', value);
            \$('#registration_form_companyName').attr('required', value);
            \$('#registration_form_legalStatus').attr('required', value);
        }

        \$(document).ready(function () {
            let status = \$('#registration_form_status').val();

            if ( status === 'professionnel') {
                \$('#professionnel').show();
                handleRequiredFields(true);
            } else {
                handleRequiredFields(false);
                \$('#professionnel').hide();
            }

            \$('#registration_form_status').change(function () {
                if (\$(this).val() === 'professionnel') {
                    \$('#professionnel').show();
                    handleRequiredFields(true);
                } else {
                    handleRequiredFields(false);
                    \$('#professionnel').hide();
                }
            });
        });
    </script>
    ";
        // line 183
        echo "    ";
        // line 184
        echo "    ";
        // line 185
        echo "    ";
        // line 186
        echo "    ";
        // line 187
        echo "    ";
        // line 188
        echo "    ";
        // line 189
        echo "    ";
        // line 190
        echo "    ";
        // line 191
        echo "    ";
        // line 192
        echo "    ";
        // line 193
        echo "    ";
        // line 194
        echo "    ";
        // line 195
        echo "    ";
        // line 196
        echo "    ";
        // line 197
        echo "    ";
        // line 198
        echo "    ";
        // line 199
        echo "    ";
        // line 200
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 200,  461 => 199,  459 => 198,  457 => 197,  455 => 196,  453 => 195,  451 => 194,  449 => 193,  447 => 192,  445 => 191,  443 => 190,  441 => 189,  439 => 188,  437 => 187,  435 => 186,  433 => 185,  431 => 184,  429 => 183,  397 => 152,  387 => 151,  368 => 140,  358 => 133,  353 => 131,  349 => 130,  338 => 122,  330 => 117,  325 => 115,  321 => 114,  312 => 108,  307 => 106,  303 => 105,  295 => 100,  290 => 98,  286 => 97,  277 => 91,  272 => 89,  268 => 88,  260 => 83,  255 => 81,  251 => 80,  243 => 75,  238 => 73,  234 => 72,  225 => 66,  220 => 64,  216 => 63,  207 => 57,  202 => 55,  198 => 54,  190 => 49,  185 => 47,  181 => 46,  171 => 39,  166 => 37,  162 => 36,  154 => 31,  149 => 29,  145 => 28,  138 => 24,  135 => 23,  126 => 21,  122 => 20,  110 => 10,  100 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './template.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
    {#    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\"> #}
{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"row my-4\">
            <div class=\"col-md-8 mx-auto\">
                <div class=\"card shadow shadow-lg mb-5\">
                    <div class=\"card-header\">
                        <h1 class=\"text-center\">Inscription</h1>
                    </div>
                    <div class=\"card-body px-5 py-4\">

                        {% for flash_error in app.flashes('verify_email_error') %}
                            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                        {% endfor %}

                        {{ form_start(registrationForm) }}

                        <div class=\"form-row mb-2\">
                            <div class=\"col form-group\">
                                {{ form_label(registrationForm.lastName) }}
                                {{ form_widget(registrationForm.lastName, {'attr': {'class': 'form-control'}}) }}
                                <span class=\"text-danger\">
                                        {{ form_errors(registrationForm.lastName) }}
                                    </span>
                            </div>

                            <div class=\"col form-group\">
                                {{ form_label(registrationForm.firstName) }}
                                {{ form_widget(registrationForm.firstName, {'attr': {'class': 'form-control'}}) }}
                                <span class=\"text-danger\">
                                        {{ form_errors(registrationForm.firstName) }}
                                    </span>
                            </div>
                        </div>

                        <div class=\"form-row mb-2\">
                            <div class=\"form-group col\">
                                {{ form_label(registrationForm.birthDate) }}
                                {{ form_widget(registrationForm.birthDate) }}
                                <span class=\"text-danger\">
                                    {{ form_errors(registrationForm.birthDate) }}
                                </span>
                            </div>

                            <div class=\"form-group col\">
                                {{ form_label(registrationForm.phoneNumber) }}
                                {{ form_widget(registrationForm.phoneNumber) }}
                                <span class=\"text-danger\">
                                    {{ form_errors(registrationForm.phoneNumber) }}
                                </span>
                            </div>
                        </div>

                        <div class=\"form-group mb-2\">
                            {{ form_label(registrationForm.status) }}
                            {{ form_widget(registrationForm.status) }}
                            <span class=\"text-danger\">
                                {{ form_errors(registrationForm.status) }}
                            </span>
                        </div>

                        <div id=\"professionnel\">
                            <div class=\"form-group mb-2\">
                                {{ form_label(registrationForm.siret) }}
                                {{ form_widget(registrationForm.siret, {'attr': {'class': 'form-control'}}) }}
                                <span class=\"text-danger\">
                                    {{ form_errors(registrationForm.siret) }}
                                </span>
                            </div>

                            <div class=\"form-group mb-2\">
                                {{ form_label(registrationForm.companyName) }}
                                {{ form_widget(registrationForm.companyName, {'attr': {'class': 'form-control'}}) }}
                                <span class=\"text-danger\">
                                    {{ form_errors(registrationForm.companyName) }}
                                </span>
                            </div>

                            <div class=\"form-group mb-2\">
                                {{ form_label(registrationForm.legalStatus) }}
                                {{ form_widget(registrationForm.legalStatus, {'attr': {'class': 'form-control'}}) }}
                                <span class=\"text-danger\">
                                    {{ form_errors(registrationForm.legalStatus) }}
                                </span>
                            </div>
                        </div>

                        <div class=\"form-group mb-2\">
                            {{ form_label(registrationForm.address) }}
                            {{ form_widget(registrationForm.address, {'attr': {'class': 'form-control'}}) }}
                            <span class=\"text-danger\">
                                {{ form_errors(registrationForm.address) }}
                            </span>
                        </div>

                        <div class=\"form-group mb-3\">
                            {{ form_label(registrationForm.email) }}
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
                            <span class=\"text-danger\">
                                {{ form_errors(registrationForm.email) }}
                            </span>
                        </div>


                        <div class=\"form-group mb-2\">
                            {{ form_label(registrationForm.plainPassword) }}
                            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
                            <span class=\"text-danger\">
                                {{ form_errors(registrationForm.plainPassword) }}
                            </span>
                        </div>

                        <div class=\"form-check mb-3\">
                            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                            <label class=\"form-check-label\" for=\"defaultCheck1\">
                                Accepter les conditions d'utilisation
                            </label>
                        </div>


                        <div class=\"form-group mb-2 d-none\">
                            {{ form_label(registrationForm.legalStatus) }}
                            {{ form_widget(registrationForm.legalStatus, {'attr': {'class': 'form-control'}}) }}
                            <span class=\"text-danger\">
                                {{ form_errors(registrationForm.legalStatus) }}
                            </span>
                        </div>

                        <button type=\"submit\" class=\"btn btn-warning btn-block\">S'inscrire</button>


                        {{ form_end(registrationForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}


{% block javascripts %}
    <script>

        function handleRequiredFields(value){
            \$('#registration_form_siret').attr('required', value);
            \$('#registration_form_companyName').attr('required', value);
            \$('#registration_form_legalStatus').attr('required', value);
        }

        \$(document).ready(function () {
            let status = \$('#registration_form_status').val();

            if ( status === 'professionnel') {
                \$('#professionnel').show();
                handleRequiredFields(true);
            } else {
                handleRequiredFields(false);
                \$('#professionnel').hide();
            }

            \$('#registration_form_status').change(function () {
                if (\$(this).val() === 'professionnel') {
                    \$('#professionnel').show();
                    handleRequiredFields(true);
                } else {
                    handleRequiredFields(false);
                    \$('#professionnel').hide();
                }
            });
        });
    </script>
    {#    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script> #}
    {#    <script> #}
    {#        jQuery(document).ready(function() { #}
    {#            \$('.js-datepicker').datepicker(); #}
    {#        }); #}
    {#    </script> #}
    {#    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.js\"></script> #}
    {#    <script> #}
    {#        \$(document).ready(function() { #}
    {#            \$('#registration_form_birthDate').datepicker({ #}
    {#                format: 'dd/mm/yyyy', #}
    {#                language: 'fr', #}
    {#                autoclose: true, #}
    {#                todayHighlight: true, #}
    {#                startDate: '-100y', #}
    {#                endDate: '-18y' #}
    {#            }); #}
    {#        }); #}
    {#    </script> #}
{% endblock %}", "registration/register.html.twig", "C:\\Users\\masiv\\hcenter\\h-center-ady\\templates\\registration\\register.html.twig");
    }
}
