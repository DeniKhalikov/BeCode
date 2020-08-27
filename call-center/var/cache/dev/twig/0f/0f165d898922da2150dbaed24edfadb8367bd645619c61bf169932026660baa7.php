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

/* ticket/index.html.twig */
class __TwigTemplate_a8a811a10ba1294b6d5cf2c165d690fe518caffa38a683ed81ebb393acfa43e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ticket/index.html.twig", 1);
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

        echo "Ticket index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Overview Tickets</h1>
    ";
        // line 7
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 7, $this->source); })()), "MANAGER", [], "array", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "roles", [], "any", false, false, false, 7))) {
            // line 8
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_deAssign");
            echo "\">De-assign all tickets</a>
    ";
        }
        // line 10
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Message</th>
                <th>Status</th>
                ";
        // line 17
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 17, $this->source); })()), "FLA", [], "array", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "roles", [], "any", false, false, false, 17))) {
            // line 18
            echo "                <th>Priority</th>
                ";
        }
        // line 20
        echo "                <th>Posted</th>
                <th>Agent</th>
                <th>actions</th>
                ";
        // line 23
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 23, $this->source); })()), "FLA", [], "array", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "roles", [], "any", false, false, false, 23))) {
            // line 24
            echo "                <th>Agent actions</th>
                ";
        }
        // line 26
        echo "                ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 26, $this->source); })()), "MANAGER", [], "array", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "roles", [], "any", false, false, false, 26))) {
            // line 27
            echo "                <th>Manager actions</th>
                ";
        }
        // line 29
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "message", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                ";
            // line 38
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 38, $this->source); })()), "FLA", [], "array", false, false, false, 38), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "roles", [], "any", false, false, false, 38))) {
                // line 39
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                ";
            }
            // line 41
            echo "                <td>";
            ((twig_get_attribute($this->env, $this->source, $context["ticket"], "posted", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "posted", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "agentId", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">show</a>
                    ";
            // line 45
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 45, $this->source); })()), "FLA", [], "array", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "roles", [], "any", false, false, false, 45))) {
                // line 46
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">edit</a>
                    ";
            }
            // line 48
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["ticket"], "canComment", [0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })())], "method", false, false, false, 48)) {
                // line 49
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">add comment</a>
                    ";
            }
            // line 51
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 51) === twig_get_attribute($this->env, $this->source, (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 51, $this->source); })()), "Waiting for customer feedback", [], "array", false, false, false, 51)) && !twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 51, $this->source); })()), "FLA", [], "array", false, false, false, 51), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "roles", [], "any", false, false, false, 51)))) {
                // line 52
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_respond", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">mail agent</a>
                    ";
            }
            // line 54
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, $context["ticket"], "canReopen", [], "method", false, false, false, 54) && (twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 54) === twig_get_attribute($this->env, $this->source, (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 54, $this->source); })()), "closed", [], "array", false, false, false, 54))) && (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "roles", [], "any", false, false, false, 54)), 1)))) {
                // line 55
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_reopen", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">Reopen</a>
                    ";
            }
            // line 57
            echo "                </td>

                ";
            // line 59
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 59, $this->source); })()), "FLA", [], "array", false, false, false, 59), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "roles", [], "any", false, false, false, 59))) {
                // line 60
                echo "                    <td>
                        ";
                // line 61
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ticket"], "agentId", [], "any", false, false, false, 61), null))) {
                    // line 62
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_assign", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 62), "user_id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
                    echo "\">Assign myself</a>
                        ";
                }
                // line 64
                echo "                        ";
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 64, $this->source); })()), "closed", [], "array", false, false, false, 64))) && twig_get_attribute($this->env, $this->source, $context["ticket"], "canClose", [], "method", false, false, false, 64))) {
                    // line 65
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_close", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                    echo "\">Close ticket</a>
                        ";
                }
                // line 67
                echo "                        ";
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["ticket"], "agentId", [], "any", false, false, false, 67), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 67, $this->source); })()), "closed", [], "array", false, false, false, 67))))) {
                    // line 68
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_escalate", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\">Escalate</a>
                        ";
                }
                // line 70
                echo "
                    </td>
                ";
            }
            // line 73
            echo "                ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 73, $this->source); })()), "MANAGER", [], "array", false, false, false, 73), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "roles", [], "any", false, false, false, 73))) {
                // line 74
                echo "                    <td>
                    <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_priority", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\">Adjust priority</a>
                    ";
                // line 76
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["ticket"], "agentId", [], "any", false, false, false, 76))) {
                    // line 77
                    echo "
                        <a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_reassign", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                    echo "\">Re-assign</a>
                        ";
                    // line 79
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["ticket"], "wontfix", [], "any", false, false, false, 79))) {
                        // line 80
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_wontfix", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                        echo "\">Mark as \"Won't fix\"</a>
                        ";
                    }
                    // line 82
                    echo "                    </td>
                ";
                }
                // line 84
                echo "                ";
            }
            // line 85
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </tbody>
    </table>
    ";
        // line 93
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 93, $this->source); })()), "FLA", [], "array", false, false, false, 93), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "roles", [], "any", false, false, false, 93))) {
            // line 94
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket_new");
            echo "\">Create new</a>
    ";
        }
        // line 96
        echo "    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 96, $this->source); })()), "MANAGER", [], "array", false, false, false, 96), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "roles", [], "any", false, false, false, 96))) {
            // line 97
            echo "    ";
            echo twig_include($this->env, $context, "ticket/_managerDashboard.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ticket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 97,  319 => 96,  313 => 94,  311 => 93,  307 => 91,  298 => 87,  292 => 85,  289 => 84,  285 => 82,  279 => 80,  277 => 79,  273 => 78,  270 => 77,  268 => 76,  264 => 75,  261 => 74,  258 => 73,  253 => 70,  247 => 68,  244 => 67,  238 => 65,  235 => 64,  229 => 62,  227 => 61,  224 => 60,  222 => 59,  218 => 57,  212 => 55,  209 => 54,  203 => 52,  200 => 51,  194 => 49,  191 => 48,  185 => 46,  183 => 45,  179 => 44,  174 => 42,  169 => 41,  163 => 39,  161 => 38,  157 => 37,  153 => 36,  149 => 35,  145 => 34,  142 => 33,  137 => 32,  132 => 29,  128 => 27,  125 => 26,  121 => 24,  119 => 23,  114 => 20,  110 => 18,  108 => 17,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ticket index{% endblock %}

{% block body %}
    <h1>Overview Tickets</h1>
    {% if roles['MANAGER'] in user.roles %}
        <a href=\"{{ path('ticket_deAssign')}}\">De-assign all tickets</a>
    {% endif %}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Message</th>
                <th>Status</th>
                {% if roles['FLA'] in user.roles %}
                <th>Priority</th>
                {% endif %}
                <th>Posted</th>
                <th>Agent</th>
                <th>actions</th>
                {% if roles['FLA'] in user.roles %}
                <th>Agent actions</th>
                {% endif %}
                {% if roles['MANAGER'] in user.roles %}
                <th>Manager actions</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
        {% for ticket in tickets %}
            <tr>
                <td>{{ ticket.id }}</td>
                <td>{{ ticket.title }}</td>
                <td>{{ ticket.message }}</td>
                <td>{{ ticket.status }}</td>
                {% if roles['FLA'] in user.roles %}
                <td>{{ ticket.priority }}</td>
                {% endif %}
                <td>{{ ticket.posted ? ticket.posted|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ ticket.agentId }}</td>
                <td>
                    <a href=\"{{ path('ticket_show', {'id': ticket.id}) }}\">show</a>
                    {% if roles['FLA'] not in user.roles %}
                    <a href=\"{{ path('ticket_edit', {'id': ticket.id}) }}\">edit</a>
                    {% endif %}
                    {% if ticket.canComment(user) %}
                        <a href=\"{{ path('ticket_comment', {'id': ticket.id}) }}\">add comment</a>
                    {% endif %}
                    {% if (ticket.status is same as(statuses[\"Waiting for customer feedback\"])) and (roles['FLA'] not in user.roles) %}
                    <a href=\"{{ path('ticket_respond', {'id': ticket.id}) }}\">mail agent</a>
                    {% endif %}
                    {% if ticket.canReopen() and ticket.status is same as (statuses[\"closed\"]) and user.roles|length==1  %}
                        <a href=\"{{ path('ticket_reopen', {'id': ticket.id}) }}\">Reopen</a>
                    {% endif %}
                </td>

                {% if roles['FLA'] in user.roles %}
                    <td>
                        {% if ticket.agentId == NULL %}
                        <a href=\"{{  path('ticket_assign', {'id': ticket.id,'user_id': user.id}) }}\">Assign myself</a>
                        {% endif %}
                        {% if ticket.status != statuses[\"closed\"] and ticket.canClose() %}
                            <a href=\"{{  path('ticket_close', {'id': ticket.id}) }}\">Close ticket</a>
                        {% endif %}
                        {% if ticket.agentId != NULL and  ticket.status != statuses[\"closed\"]  %}
                            <a href=\"{{ path('ticket_escalate', {'id': ticket.id}) }}\">Escalate</a>
                        {% endif %}

                    </td>
                {% endif %}
                {% if roles['MANAGER'] in user.roles%}
                    <td>
                    <a href=\"{{ path('ticket_priority', {'id': ticket.id}) }}\">Adjust priority</a>
                    {% if ticket.agentId is not empty  %}

                        <a href=\"{{ path('ticket_reassign', {'id': ticket.id}) }}\">Re-assign</a>
                        {% if ticket.wontfix is empty %}
                            <a href=\"{{ path('ticket_wontfix', {'id': ticket.id}) }}\">Mark as \"Won't fix\"</a>
                        {% endif %}
                    </td>
                {% endif %}
                {% endif %}
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% if roles['FLA'] not in user.roles %}
    <a href=\"{{ path('ticket_new') }}\">Create new</a>
    {% endif %}
    {% if roles['MANAGER'] in user.roles %}
    {{ include('ticket/_managerDashboard.html.twig') }}
    {% endif %}
{% endblock %}
", "ticket/index.html.twig", "/var/www/becode/call-center/templates/ticket/index.html.twig");
    }
}
