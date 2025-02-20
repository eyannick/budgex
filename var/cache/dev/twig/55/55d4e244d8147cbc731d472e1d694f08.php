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

/* login/index.html.twig */
class __TwigTemplate_a5895639d7212e4a6158ecd2c2dced28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("logs.html.twig", "login/index.html.twig", 1);
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
            <div class=\"col-xxl-4 col-xl-5 col-lg-6 col-md-8\">
                <div class=\"card card-raised shadow-10 mt-5 mt-xl-10 mb-4\">
                    <div class=\"card-body p-5\">
                        <!-- Authentification header with logo image-->
                        <div class=\"text-center\">
                            <img class=\"mb-3\" src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/background.svg"), "html", null, true);
        yield "\" alt=\"...\" style=\"height: 48px\" />
                            <h1 class=\"display-5 mb-0\">Connectez-vous</h1>
                            <div class=\"subheading-1 mb-5\">pour continuer sur l'application</div>
                        </div>
                        ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            yield "                            <div class=\"alert\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            yield "</div>
                        ";
        }
        // line 19
        yield "                        <!-- Login submission form-->
                        <form method=\"POST\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                            <div class=\"mb-4\">
                                <input class=\"form-control form-control-lg w-100\" type=\"email\" id=\"email\" name=\"_username\" label=\"email\" placeholder=\"E-mail\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_email"]) || array_key_exists("last_email", $context) ? $context["last_email"] : (function () { throw new RuntimeError('Variable "last_email" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\" required>
                            </div>
                            <div class=\"mb-4\">
                                <input class=\"form-control form-control-lg w-100\" type=\"password\" id=\"password\" name=\"_password\" label=\"Mot de passe\" placeholder=\"Mot de passe\" required>
                            </div>
                            <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">   
                                <a class=\"small fw-500 text-decoration-none\" href=\"#\">Mot de passe oublé ?</a>
                                <button type=\"submit\" class=\"btn btn-primary\" value=\"Se connecter\">Se connecter</button>
                            </div>                     
                        </form>
                    </div> <!-- End card-body p-5 -->  
                </div> <!-- End card card-raised shadow-10 mt-5 mt-xl-10 mb-4 -->  
                <!-- Auth card message-->
                <div class=\"text-center mb-5\"><a class=\"small fw-500 text-decoration-none link-white\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Besoin d'un compte ? Enregistre-vous !</a></div>
            </div> <!-- End col-xxl-4 col-xl-5 col-lg-6 col-md-8 -->
        </div> <!-- End row justify-content-center --> 
    </div> <!-- End container --> 
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
        return "login/index.html.twig";
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
        return array (  129 => 36,  118 => 28,  109 => 22,  104 => 20,  101 => 19,  95 => 17,  93 => 16,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'logs.html.twig' %}

{% block body %}
    <!-- Main content container-->
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xxl-4 col-xl-5 col-lg-6 col-md-8\">
                <div class=\"card card-raised shadow-10 mt-5 mt-xl-10 mb-4\">
                    <div class=\"card-body p-5\">
                        <!-- Authentification header with logo image-->
                        <div class=\"text-center\">
                            <img class=\"mb-3\" src=\"{{ asset('assets/images/icons/background.svg') }}\" alt=\"...\" style=\"height: 48px\" />
                            <h1 class=\"display-5 mb-0\">Connectez-vous</h1>
                            <div class=\"subheading-1 mb-5\">pour continuer sur l'application</div>
                        </div>
                        {% if error %}
                            <div class=\"alert\"> {{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}
                        <!-- Login submission form-->
                        <form method=\"POST\" action=\"{{ path('app_login') }}\">
                            <div class=\"mb-4\">
                                <input class=\"form-control form-control-lg w-100\" type=\"email\" id=\"email\" name=\"_username\" label=\"email\" placeholder=\"E-mail\" value=\"{{ last_email }}\" required>
                            </div>
                            <div class=\"mb-4\">
                                <input class=\"form-control form-control-lg w-100\" type=\"password\" id=\"password\" name=\"_password\" label=\"Mot de passe\" placeholder=\"Mot de passe\" required>
                            </div>
                            <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('app_dashboard') }}\">   
                                <a class=\"small fw-500 text-decoration-none\" href=\"#\">Mot de passe oublé ?</a>
                                <button type=\"submit\" class=\"btn btn-primary\" value=\"Se connecter\">Se connecter</button>
                            </div>                     
                        </form>
                    </div> <!-- End card-body p-5 -->  
                </div> <!-- End card card-raised shadow-10 mt-5 mt-xl-10 mb-4 -->  
                <!-- Auth card message-->
                <div class=\"text-center mb-5\"><a class=\"small fw-500 text-decoration-none link-white\" href=\"{{ path('app_register') }}\">Besoin d'un compte ? Enregistre-vous !</a></div>
            </div> <!-- End col-xxl-4 col-xl-5 col-lg-6 col-md-8 -->
        </div> <!-- End row justify-content-center --> 
    </div> <!-- End container --> 
{% endblock %}", "login/index.html.twig", "C:\\wamp64\\www\\budgex\\templates\\login\\index.html.twig");
    }
}
