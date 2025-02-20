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

/* register/index.html.twig */
class __TwigTemplate_7a4c428811e900d9faa4cc47acb1dc5a extends Template
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
        return "logs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $this->parent = $this->loadTemplate("logs.html.twig", "register/index.html.twig", 1);
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
        yield "    <!-- Main content container-->
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xxl-7 col-xl-10\">
                <div class=\"card card-raised shadow-10 mt-5 mt-xl-10 mb-5\">
                    <div class=\"card-body p-5\">

                        <!-- Register header with logo image -->
                        <div class=\"text-center\">
                            <img class=\"mb-3\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/background.svg"), "html", null, true);
        yield "\" alt=\"...\" style=\"height: 48px\" />
                            <h1 class=\"display-5 mb-0\">Créez un compte</h1>
                            <div class=\"subheading-1 mb-5\">afin de continuer sur Adminex</div>
                        </div>           
                        <!-- Formulaire d'inscription nouvel utilisateur-->
                        ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerForm"]) || array_key_exists("registerForm", $context) ? $context["registerForm"] : (function () { throw new RuntimeError('Variable "registerForm" does not exist.', 18, $this->source); })()), 'form');
        yield "                        
                        <!-- <form method=\"POST\" action=\"validation_register_user\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"text\" name=\"firstname\" label=\"Prénom\" placeholder=\"Prénom\" required>
                                </div>
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"text\" name=\"lastname\" label=\"Nom\" placeholder=\"Nom\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"email\" name=\"email\" label=\"Email\" placeholder=\"Email\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"password\" name=\"password\" label=\"Mot de passe\" placeholder=\"Entrez un mot de passe\" required>
                                </div>
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"password\" name=\"confirm_password\" label=\"Mot de passe\" placeholder=\"Confirmez votre mot de passe\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"terms\" id=\"flexCheckDefault\">
                                        <label class=\"form-check-label\" for=\"flexCheckDefault\">J'accepte les<a class=\"small fw-500 text-decoration-none\" target=\"_blank\" href=\"terms-conditions.php\"> termes & conditions générales</a></label>                                                    
                                    </div>
                                </div>                            
                            </div>
                            <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                <a class=\"small fw-500 text-decoration-none\" href=\"<?= URL ?>login\">Déjà enregistré ? Connectez-vous !</a>
                                <button type=\"submit\" class=\"btn btn-primary\" value=\"Inscription\">Inscription</button>
                            </div>
                        </form> -->
                    </div>
                </div>
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
        return "register/index.html.twig";
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
        return array (  95 => 18,  87 => 13,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'logs.html.twig' %}

{% block body %}
    <!-- Main content container-->
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xxl-7 col-xl-10\">
                <div class=\"card card-raised shadow-10 mt-5 mt-xl-10 mb-5\">
                    <div class=\"card-body p-5\">

                        <!-- Register header with logo image -->
                        <div class=\"text-center\">
                            <img class=\"mb-3\" src=\"{{ asset('assets/images/icons/background.svg') }}\" alt=\"...\" style=\"height: 48px\" />
                            <h1 class=\"display-5 mb-0\">Créez un compte</h1>
                            <div class=\"subheading-1 mb-5\">afin de continuer sur Adminex</div>
                        </div>           
                        <!-- Formulaire d'inscription nouvel utilisateur-->
                        {{ form(registerForm) }}                        
                        <!-- <form method=\"POST\" action=\"validation_register_user\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"text\" name=\"firstname\" label=\"Prénom\" placeholder=\"Prénom\" required>
                                </div>
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"text\" name=\"lastname\" label=\"Nom\" placeholder=\"Nom\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"email\" name=\"email\" label=\"Email\" placeholder=\"Email\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"password\" name=\"password\" label=\"Mot de passe\" placeholder=\"Entrez un mot de passe\" required>
                                </div>
                                <div class=\"col-sm-6 mb-4\">
                                    <input class=\"form-control form-control-lg w-100\" type=\"password\" name=\"confirm_password\" label=\"Mot de passe\" placeholder=\"Confirmez votre mot de passe\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"terms\" id=\"flexCheckDefault\">
                                        <label class=\"form-check-label\" for=\"flexCheckDefault\">J'accepte les<a class=\"small fw-500 text-decoration-none\" target=\"_blank\" href=\"terms-conditions.php\"> termes & conditions générales</a></label>                                                    
                                    </div>
                                </div>                            
                            </div>
                            <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                <a class=\"small fw-500 text-decoration-none\" href=\"<?= URL ?>login\">Déjà enregistré ? Connectez-vous !</a>
                                <button type=\"submit\" class=\"btn btn-primary\" value=\"Inscription\">Inscription</button>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "register/index.html.twig", "C:\\wamp64\\www\\budgex\\templates\\register\\index.html.twig");
    }
}
