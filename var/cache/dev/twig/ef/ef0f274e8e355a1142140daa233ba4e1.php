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

/* logs.html.twig */
class __TwigTemplate_6deb1a11d49297a5ba200870c83c20a8 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logs.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"Votre application de suivi et de gestion du budget.\" />
        <meta name=\"author\" content=\"Yannick ERDMANN\" />
        <title>Budgex - Accueil</title>
        
        <!-- Load Favicon -->
        <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\" rel=\"shortcut icon\" type=\"image/x-icon\" />
       
       <!-- Load Material Icons from Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp\" rel=\"stylesheet\" />
        
        <!-- Roboto and Roboto Mono fonts from Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Mono:400,500\" rel=\"stylesheet\" />

        <!-- Load Font Awesome bundle -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\" integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <!-- Load Simple-database CDN from jsdelivr -->
        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" />    
        <!-- Load main stylesheet -->
        <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    
    </head>

    <body class=\"bg-primary\">
        <!-- Layout wrapper-->
        <div id=\"layoutAuthentication\">

            <!-- Layout content-->
            <div id=\"layoutAuthentication_content\">
                <!-- Main page content-->
                <main>
                    ";
        // line 38
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 39
        yield "                </main>
            </div><!-- End layoutAuthentication_content-->

            <!-- Layout footer-->
            <div id=\"layoutAuthentication_footer\">
                <!-- Auth footer-->
                <footer class=\"p-4\">
                    <div class=\"d-flex flex-column flex-sm-row align-items-center justify-content-between small\">
                        <div class=\"me-sm-3 mb-2 mb-sm-0\"><div class=\"fw-500 text-white\">Copyright &copy; Yannick ERDMANN</div></div>
                        <div class=\"ms-sm-3\">
                            <a class=\"fw-500 text-decoration-none link-white\" href=\"privacy\">Vie pirvée</a>
                            <a class=\"fw-500 text-decoration-none link-white mx-4\" href=\"terms-conditions\">Termes & conditions</a>
                            <a class=\"fw-500 text-decoration-none link-white\" href=\"help\">Aide</a>
                        </div>
                    </div>
                </footer><!-- End footer-->
            </div><!-- End layoutAuthentication_footer-->   
        </div><!-- End layoutAuthentication-->

        <!-- Load Bootstrap JS bundle -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js\"></script>

    </body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 38
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "logs.html.twig";
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
        return array (  132 => 38,  96 => 39,  94 => 38,  79 => 26,  62 => 12,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"Votre application de suivi et de gestion du budget.\" />
        <meta name=\"author\" content=\"Yannick ERDMANN\" />
        <title>Budgex - Accueil</title>
        
        <!-- Load Favicon -->
        <link href=\"{{ asset('assets/images/favicon.ico') }}\" rel=\"shortcut icon\" type=\"image/x-icon\" />
       
       <!-- Load Material Icons from Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp\" rel=\"stylesheet\" />
        
        <!-- Roboto and Roboto Mono fonts from Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Mono:400,500\" rel=\"stylesheet\" />

        <!-- Load Font Awesome bundle -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\" integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <!-- Load Simple-database CDN from jsdelivr -->
        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" />    
        <!-- Load main stylesheet -->
        <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\" />
    
    </head>

    <body class=\"bg-primary\">
        <!-- Layout wrapper-->
        <div id=\"layoutAuthentication\">

            <!-- Layout content-->
            <div id=\"layoutAuthentication_content\">
                <!-- Main page content-->
                <main>
                    {% block body %}{% endblock %}
                </main>
            </div><!-- End layoutAuthentication_content-->

            <!-- Layout footer-->
            <div id=\"layoutAuthentication_footer\">
                <!-- Auth footer-->
                <footer class=\"p-4\">
                    <div class=\"d-flex flex-column flex-sm-row align-items-center justify-content-between small\">
                        <div class=\"me-sm-3 mb-2 mb-sm-0\"><div class=\"fw-500 text-white\">Copyright &copy; Yannick ERDMANN</div></div>
                        <div class=\"ms-sm-3\">
                            <a class=\"fw-500 text-decoration-none link-white\" href=\"privacy\">Vie pirvée</a>
                            <a class=\"fw-500 text-decoration-none link-white mx-4\" href=\"terms-conditions\">Termes & conditions</a>
                            <a class=\"fw-500 text-decoration-none link-white\" href=\"help\">Aide</a>
                        </div>
                    </div>
                </footer><!-- End footer-->
            </div><!-- End layoutAuthentication_footer-->   
        </div><!-- End layoutAuthentication-->

        <!-- Load Bootstrap JS bundle -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js\"></script>

    </body>

</html>
", "logs.html.twig", "C:\\wamp64\\www\\budgex\\templates\\logs.html.twig");
    }
}
