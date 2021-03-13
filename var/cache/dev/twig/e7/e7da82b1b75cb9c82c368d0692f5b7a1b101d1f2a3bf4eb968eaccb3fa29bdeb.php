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

/* user/_form.html.twig */
class __TwigTemplate_2320949c1d6a6b47df0509ccdbefdc923c4843b50c3105d6aab6670bbed285c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"form-group\">
    <label for=\"inputEmail\">Email</label>
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
</div>
";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "<div class=\"form-group\">
    <label for=\"inputRoles\">Roles</label>
    ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "roles", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
</div>
";
        }
        // line 12
        echo "<div class=\"form-group\">
    <label for=\"inputPassword\">Mot de passe</label>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        echo "
    
</div>
<div class=\"form-group\">
    <button class=\"btn btn-primary\">";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 18, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
</div>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  77 => 18,  70 => 14,  66 => 12,  60 => 9,  56 => 7,  54 => 6,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"form-group\">
    <label for=\"inputEmail\">Email</label>
    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
</div>
{% if is_granted('ROLE_ADMIN') %}
<div class=\"form-group\">
    <label for=\"inputRoles\">Roles</label>
    {{ form_widget(form.roles, {'attr': {'class': 'form-control'}}) }}
</div>
{% endif %}
<div class=\"form-group\">
    <label for=\"inputPassword\">Mot de passe</label>
    {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}}) }}
    
</div>
<div class=\"form-group\">
    <button class=\"btn btn-primary\">{{ button_label|default('Valider') }}</button>
</div>
{{ form_end(form) }}
", "user/_form.html.twig", "/var/www/html/Symfo5_Pole_Emploi/templates/user/_form.html.twig");
    }
}
