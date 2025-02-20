<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_be0ffc76239628d0a207e95af47b72a7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<!-- Page header-->
<header class=\"masthead bg-dark\">
    <div class=\"container-xl px-5\">
        <div class=\"row justify-content-center gx-5\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"text-center py-10\">
                    <!-- Example brand image (inline SVG image)-->
                    <svg class=\"mb-3\" viewBox=\"0 0 527 527\" style=\"enable-background: new 0 0 527 527; height: 2.5rem; width: 2.5rem\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: none;
                                stroke: currentColor;
                                stroke-width: 15;
                                stroke-miterlimit: 10;
                                enable-background: new;
                            }
                        </style>
                        <rect class=\"st0\" x=\"7.5\" y=\"7.5\" width=\"512\" height=\"512\"></rect>
                        <g>
                            <polygon class=\"st0\" points=\"317.5,207.6 317.5,430.3 428.5,430.3 428.5,96.7\"></polygon>
                            <polygon class=\"st0\" points=\"209.5,207.6 209.5,430.3 98.5,430.3 98.5,96.7\"></polygon>
                        </g>
                    </svg>
                    <!-- Masthead content-->
                    <h1 class=\"masthead-heading mb-3 display-5\">Votre suivi du budget, en toute facilité.</h1>
                    <p>Tous vos tableaux et fichiers réunis en une seule application.</p>
                    <a class=\"btn btn-masthead\" href=\"#scrollTarget\">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class=\"container-xl p-5\">

    <div id=\"scrollTarget\"></div>
    <!-- Dashboard demos-->
    <h2 class=\"display-6 mb-0\">Tableau de bord</h2>
    <p class=\"small text-muted\">Six fonctionnalités de suivi du budget</p>
    <hr class=\"mb-5 mt-0\" />
    <div class=\"row gx-5\">
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-default.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/default.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Connexion de comptes bancaires</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-minimal.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/minimal.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Suivi des dépenses et revenus</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-analytics.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/analytics.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Catégorisation</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-accounting.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/accounting.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Ajout de comptes</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-orders.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/orders.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Informations personnelles</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-projects.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/projects.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Paramètres</div>
        </div>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- Page header-->
<header class=\"masthead bg-dark\">
    <div class=\"container-xl px-5\">
        <div class=\"row justify-content-center gx-5\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"text-center py-10\">
                    <!-- Example brand image (inline SVG image)-->
                    <svg class=\"mb-3\" viewBox=\"0 0 527 527\" style=\"enable-background: new 0 0 527 527; height: 2.5rem; width: 2.5rem\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: none;
                                stroke: currentColor;
                                stroke-width: 15;
                                stroke-miterlimit: 10;
                                enable-background: new;
                            }
                        </style>
                        <rect class=\"st0\" x=\"7.5\" y=\"7.5\" width=\"512\" height=\"512\"></rect>
                        <g>
                            <polygon class=\"st0\" points=\"317.5,207.6 317.5,430.3 428.5,430.3 428.5,96.7\"></polygon>
                            <polygon class=\"st0\" points=\"209.5,207.6 209.5,430.3 98.5,430.3 98.5,96.7\"></polygon>
                        </g>
                    </svg>
                    <!-- Masthead content-->
                    <h1 class=\"masthead-heading mb-3 display-5\">Votre suivi du budget, en toute facilité.</h1>
                    <p>Tous vos tableaux et fichiers réunis en une seule application.</p>
                    <a class=\"btn btn-masthead\" href=\"#scrollTarget\">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class=\"container-xl p-5\">

    <div id=\"scrollTarget\"></div>
    <!-- Dashboard demos-->
    <h2 class=\"display-6 mb-0\">Tableau de bord</h2>
    <p class=\"small text-muted\">Six fonctionnalités de suivi du budget</p>
    <hr class=\"mb-5 mt-0\" />
    <div class=\"row gx-5\">
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-default.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/default.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Connexion de comptes bancaires</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-minimal.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/minimal.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Suivi des dépenses et revenus</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-analytics.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/analytics.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Catégorisation</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-accounting.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/accounting.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Ajout de comptes</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-orders.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/orders.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Informations personnelles</div>
        </div>
        <div class=\"col-sm-6 col-lg-4 mb-5\">
            <a class=\"d-block ripple-gray rounded shadow-3 overflow-hidden mb-2\" href=\"app-dashboard-projects.html\"><img class=\"img-fluid\" src=\"https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/projects.png\" alt=\"...\" /></a>
            <div class=\"small font-monospace text-center\">Paramètres</div>
        </div>
    </div>

</div>
{% endblock %}", "home/index.html.twig", "C:\\wamp\\www\\budgex\\templates\\home\\index.html.twig");
    }
}
