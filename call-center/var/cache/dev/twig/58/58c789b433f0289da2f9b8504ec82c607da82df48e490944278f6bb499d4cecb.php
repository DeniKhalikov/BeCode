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

/* ticket/_managerDashboard.html.twig */
class __TwigTemplate_55e6dffd0d5363cb16a19e526ae7aed6006fce6a0465cc66da97d2385c948ce4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/_managerDashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/_managerDashboard.html.twig"));

        // line 1
        echo "<section id=\"dashboard\">

    <h1>DASHBOARD</h1>
    <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">Go to all Agents and Users</a>
    <br>
    <h3>Statistics</h3>
    <ul>
        <li>Open tickets: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 8, $this->source); })()), "getCounterOpen", [], "method", false, false, false, 8), "html", null, true);
        echo "</li>
        <li>Closed tickets: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 9, $this->source); })()), "getCounterClosed", [], "method", false, false, false, 9), "html", null, true);
        echo "</li>
        <li>Re-opened tickets: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 10, $this->source); })()), "getCounterReopened", [], "method", false, false, false, 10), "html", null, true);
        echo "</li>
        <li>% re-opened tickets: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dashboard"]) || array_key_exists("dashboard", $context) ? $context["dashboard"] : (function () { throw new RuntimeError('Variable "dashboard" does not exist.', 11, $this->source); })()), "getPercent", [], "method", false, false, false, 11), "html", null, true);
        echo "</li>
    </ul>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ticket/_managerDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  63 => 10,  59 => 9,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"dashboard\">

    <h1>DASHBOARD</h1>
    <a href=\"{{ path('user_index') }}\">Go to all Agents and Users</a>
    <br>
    <h3>Statistics</h3>
    <ul>
        <li>Open tickets: {{ dashboard.getCounterOpen() }}</li>
        <li>Closed tickets: {{ dashboard.getCounterClosed() }}</li>
        <li>Re-opened tickets: {{ dashboard.getCounterReopened() }}</li>
        <li>% re-opened tickets: {{ dashboard.getPercent() }}</li>
    </ul>
</section>", "ticket/_managerDashboard.html.twig", "/var/www/becode/call-center/templates/ticket/_managerDashboard.html.twig");
    }
}
