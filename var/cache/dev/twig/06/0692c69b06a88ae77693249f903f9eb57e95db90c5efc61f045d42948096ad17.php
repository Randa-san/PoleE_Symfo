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

/* home/show.html.twig */
class __TwigTemplate_64fb9ab883258636908c490e4b3ec8d14bdeefa2eb72e41938c22a28877b46ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 1);
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

        echo "Liste de Jobs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<header>
    <nav>
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline-danger\">Deconnexion</a>
    </nav>
</header>
<div class=\"container\">
    <div style=\"text-align:center\">
    <h1>Manpower</h1>
    <h2>Liste des offres</h2>
    ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_add");
            echo "\" class=\"btn btn-outline-primary\">Ajouter une offre</a>
        <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\" class=\"btn btn-outline-primary\">Liste Users</a>
        <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\" class=\"btn btn-outline-primary\">Ajouter Admin</a>
    ";
        }
        // line 21
        echo "    <br><br>
    </div>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 24
            echo "        <div class=\"card\">
            <div class=\"card-header\">
              Category:  ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "category", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo " 
              <br>
              Tag :  ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "tag", [], "any", false, false, false, 28), "degree", [], "any", false, false, false, 28), "html", null, true);
            echo "
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "  </h5>
                <h5 class=\"card-title\"> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 32), "html", null, true);
            echo "  </h5>
                <p class=\"card-text\"> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo " </p>
                ";
            // line 34
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 35
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_modify", ["ref" => twig_get_attribute($this->env, $this->source, $context["job"], "ref", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Update</a>
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_delete", ["ref" => twig_get_attribute($this->env, $this->source, $context["job"], "ref", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a>
                ";
            }
            // line 38
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 46
        echo "\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
\t<script type=\"text/javascript\">
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 46,  185 => 45,  174 => 41,  166 => 38,  161 => 36,  156 => 35,  154 => 34,  150 => 33,  146 => 32,  142 => 31,  136 => 28,  131 => 26,  127 => 24,  123 => 23,  119 => 21,  114 => 19,  110 => 18,  105 => 17,  103 => 16,  93 => 9,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste de Jobs{% endblock %}


{% block body %}
<header>
    <nav>
        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger\">Deconnexion</a>
    </nav>
</header>
<div class=\"container\">
    <div style=\"text-align:center\">
    <h1>Manpower</h1>
    <h2>Liste des offres</h2>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('home_add') }}\" class=\"btn btn-outline-primary\">Ajouter une offre</a>
        <a href=\"{{ path('user_index') }}\" class=\"btn btn-outline-primary\">Liste Users</a>
        <a href=\"{{ path('user_new') }}\" class=\"btn btn-outline-primary\">Ajouter Admin</a>
    {% endif %}
    <br><br>
    </div>
    {% for job in jobs %}
        <div class=\"card\">
            <div class=\"card-header\">
              Category:  {{ job.category.name}} 
              <br>
              Tag :  {{ job.tag.degree}}
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> {{ job.title }}  </h5>
                <h5 class=\"card-title\"> {{ job.salary }}  </h5>
                <p class=\"card-text\"> {{ job.description }} </p>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('home_modify', {ref: job.ref})}}\" class=\"btn btn-primary\">Update</a>
                    <a href=\"{{ path('home_delete', {ref: job.ref}) }}\" class=\"btn btn-danger\">Delete</a>
                {% endif %}
            </div>
        </div>
    {% endfor %}
</div>
{% endblock %}


{% block scripts %}
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
\t<script type=\"text/javascript\">
\t</script>
{% endblock %}", "home/show.html.twig", "/var/www/html/Symfo5_Pole_Emploi/templates/home/show.html.twig");
    }
}
