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

/* home/job_form.html.twig */
class __TwigTemplate_bf957ce17109333a0a938d6396f1857ce736eef9c79bf7984e703dc897a881fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/job_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/job_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
<div class=\"container\">
    <div class=\"form-group\">
        Reference
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "ref", [], "any", false, false, false, 5), 'widget', ["attr" => ["placeholder" => "Ref", "class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form-group\">
        Titre
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), 'widget', ["attr" => ["placeholder" => "Titre du job", "class" => "form-control"]]);
        echo "       
    </div>
    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'widget', ["attr" => ["placeholder" => "Le contenu de l'article", "class" => "form-control", "rows" => "3"]]);
        echo "
    </div>
    <div class=\"form-group\">
        Salaire
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "salary", [], "any", false, false, false, 17), 'widget', ["attr" => ["placeholder" => "Salaire", "class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form-group\">
        Catégories
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "category", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "       
    </div>
    <div class=\"form-group\">
        Niveau d'étude
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "tag", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "   
    </div>
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-primary\">
        <input type=\"reset\" value=\"Effacer\" id=\"reset\" name=\"reset\" class=\"btn btn-secondary\">
    </div>
</div>
";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/job_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  88 => 25,  81 => 21,  74 => 17,  67 => 13,  63 => 12,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'row'}}) }}
<div class=\"container\">
    <div class=\"form-group\">
        Reference
        {{ form_widget(form.ref, {'attr': {'placeholder': 'Ref', 'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
        Titre
        {{ form_widget(form.title, {'attr': {'placeholder': 'Titre du job', 'class': 'form-control'}}) }}       
    </div>
    <div class=\"form-group\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description, {'attr': {'placeholder': 'Le contenu de l\\'article', 'class': 'form-control', 'rows': '3'}}) }}
    </div>
    <div class=\"form-group\">
        Salaire
        {{ form_widget(form.salary, {'attr': {'placeholder': 'Salaire', 'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
        Catégories
        {{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}       
    </div>
    <div class=\"form-group\">
        Niveau d'étude
        {{ form_widget(form.tag, {'attr': {'class': 'form-control'}}) }}   
    </div>
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-primary\">
        <input type=\"reset\" value=\"Effacer\" id=\"reset\" name=\"reset\" class=\"btn btn-secondary\">
    </div>
</div>
{{ form_end(form) }}", "home/job_form.html.twig", "/var/www/html/Symfo5_Pole_Emploi/templates/home/job_form.html.twig");
    }
}
