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

/* account/update-password.html.twig */
class __TwigTemplate_cb17a24a1e4320a3e02df8a05eb9493d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/update-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/update-password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/update-password.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<div class=\"container-xl p-5\">
    <div class=\"col-xl-6\">
        <!-- Account update password card-->
        <div class=\"card card-raised mb-5\">
            <div class=\"card-body p-5\">

                <div class=\"card-title mb-4\">Renforcez la sécurité de votre compte</div>

                <form method=\"POST\" action=\"<?= URL ?>account/validationUpdatePassword\"> 
                    <!-- Form Row-->
                    <div class=\"row\">
                        <div class=\"card-subtitle mb-2\">Mot de passe</div> 
                        <div class=\"col-md-12 mb-3\"><input id=\"oldPassword\" class=\"form-control form-control-lg w-100\" type=\"password\" name=\"oldPassword\" label=\"oldPassword\" placeholder=\"Saisissez votre mot de passe actuel\" value=\"\" required></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 mb-3\"><input id=\"newPassword\" class=\"form-control form-control-lg w-100\" type=\"password\" name=\"newPassword\" label=\"newPassword\" placeholder=\"Saisissez votre nouveau mot de passe\" value=\"\" required></div>                  
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 mb-3\"><input id=\"confirmNewPassword\" class=\"form-control form-control-lg w-100\" type=\"password\" name=\"confirmNewPassword\" label=\"confirmPassword\" placeholder=\"Confirmez votre mot de passe\" value=\"\" required></div>                  
                    </div>
                    <div id=\"errorConfirmPassword\" class=\"col-md-12 d-none\">
                        <div class=\"alert alert-danger\" role=\"alert\">Les mots de passe ne correspondent pas.</div>
                    </div>
                    <div class=\"row\">
                        <!-- Save changes button-->
                        <div class=\"text-start\"><button id=\"btnValidation\" type=\"submit\" class=\"btn btn-primary\" value=\"Réinitialiser\" disabled>Réinitialiser</button></div>
                    </div>
                </form>

            </div> <!-- End card-body p-5-->  
        </div> <!-- End card card-raised mb-5-->  
    </div><!-- End col-xl-6-->  

    <div class=\"col-xl-6\">
        <!-- Delete account card-->
        <div class=\"card card-raised mb-5\">
            <div class=\"card-body p-5\">
                <div class=\"card-title mb-4\">Supprimer votre compte</div>
                <div class=\"card-subtitle mb-4\">La suppression de votre compte est une action permanente et irreversible. Cela entrainera la perte de l'ensemble de vos données.<br />
                Si vous êtes sûre de votre choix, cliquez sur le bouton ci-dessous.</div>
                <button id=\"btnDeleteAccount\" class=\"btn btn-text-danger\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je comprends, supprimer mon compte</button>
            </div><!-- End card-body p-5-->  
        </div><!-- End card card-raised mb-5-->  

        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression du compte</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>
                    <div class=\"modal-body\">Etes-vous sure de vouloir supprimer votre compte ?</div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-text-primary me-2\" type=\"button\" data-bs-dismiss=\"modal\">Fermer</button>
                        <a href=\"<?= URL ?>account/deleteAccount\" class=\"btn btn-text-primary\" type=\"button\">Supprimer</a>
                    </div>
                </div><!-- End modal-content-->
            </div><!-- End modal-dialog-->
        </div><!-- End modal fade-->
    </div><!-- End col-xl-6-->  
</div><!-- End container-xl p-5-->    
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
        return "account/update-password.html.twig";
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
        return array (  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container-xl p-5\">
    <div class=\"col-xl-6\">
        <!-- Account update password card-->
        <div class=\"card card-raised mb-5\">
            <div class=\"card-body p-5\">

                <div class=\"card-title mb-4\">Renforcez la sécurité de votre compte</div>

                <form method=\"POST\" action=\"<?= URL ?>account/validationUpdatePassword\"> 
                    <!-- Form Row-->
                    <div class=\"row\">
                        <div class=\"card-subtitle mb-2\">Mot de passe</div> 
                        <div class=\"col-md-12 mb-3\"><input id=\"oldPassword\" class=\"form-control form-control-lg w-100\" type=\"password\" name=\"oldPassword\" label=\"oldPassword\" placeholder=\"Saisissez votre mot de passe actuel\" value=\"\" required></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 mb-3\"><input id=\"newPassword\" class=\"form-control form-control-lg w-100\" type=\"password\" name=\"newPassword\" label=\"newPassword\" placeholder=\"Saisissez votre nouveau mot de passe\" value=\"\" required></div>                  
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 mb-3\"><input id=\"confirmNewPassword\" class=\"form-control form-control-lg w-100\" type=\"password\" name=\"confirmNewPassword\" label=\"confirmPassword\" placeholder=\"Confirmez votre mot de passe\" value=\"\" required></div>                  
                    </div>
                    <div id=\"errorConfirmPassword\" class=\"col-md-12 d-none\">
                        <div class=\"alert alert-danger\" role=\"alert\">Les mots de passe ne correspondent pas.</div>
                    </div>
                    <div class=\"row\">
                        <!-- Save changes button-->
                        <div class=\"text-start\"><button id=\"btnValidation\" type=\"submit\" class=\"btn btn-primary\" value=\"Réinitialiser\" disabled>Réinitialiser</button></div>
                    </div>
                </form>

            </div> <!-- End card-body p-5-->  
        </div> <!-- End card card-raised mb-5-->  
    </div><!-- End col-xl-6-->  

    <div class=\"col-xl-6\">
        <!-- Delete account card-->
        <div class=\"card card-raised mb-5\">
            <div class=\"card-body p-5\">
                <div class=\"card-title mb-4\">Supprimer votre compte</div>
                <div class=\"card-subtitle mb-4\">La suppression de votre compte est une action permanente et irreversible. Cela entrainera la perte de l'ensemble de vos données.<br />
                Si vous êtes sûre de votre choix, cliquez sur le bouton ci-dessous.</div>
                <button id=\"btnDeleteAccount\" class=\"btn btn-text-danger\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Je comprends, supprimer mon compte</button>
            </div><!-- End card-body p-5-->  
        </div><!-- End card card-raised mb-5-->  

        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression du compte</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>
                    <div class=\"modal-body\">Etes-vous sure de vouloir supprimer votre compte ?</div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-text-primary me-2\" type=\"button\" data-bs-dismiss=\"modal\">Fermer</button>
                        <a href=\"<?= URL ?>account/deleteAccount\" class=\"btn btn-text-primary\" type=\"button\">Supprimer</a>
                    </div>
                </div><!-- End modal-content-->
            </div><!-- End modal-dialog-->
        </div><!-- End modal fade-->
    </div><!-- End col-xl-6-->  
</div><!-- End container-xl p-5-->    
{% endblock %}", "account/update-password.html.twig", "C:\\wamp64\\www\\budgex\\templates\\account\\update-password.html.twig");
    }
}
