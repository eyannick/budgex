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

/* base.html.twig */
class __TwigTemplate_b606ae3d0038c7d3553c82a457420d6a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        <!-- Load main stylesheet -->
        <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    
    </head>

    <body class=\"nav-fixed bg-light\">
        
        <!-- Top app bar navigation menu-->
        <nav class=\"top-app-bar navbar navbar-expand navbar-dark bg-dark\">
            <div class=\"container-fluid px-4\">
                <!-- Drawer toggle button-->
                <button class=\"btn btn-lg btn-icon order-1 order-lg-0\" id=\"drawerToggle\" href=\"javascript:void(0);\"><i class=\"fas fa-bars\"></i></button>
                <!-- Navbar brand-->
                <a class=\"navbar-brand me-auto\" href=\"<?= URL; ?>accueil\"><div class=\"text-uppercase font-monospace\">Budgex</div></a>
                <!-- Navbar items-->
                <div class=\"d-flex align-items-center mx-3 me-lg-0\">
                    <!-- Navbar-->
                    <ul class=\"navbar-nav d-none d-lg-flex\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"<?= URL; ?>accueil\">Accueil</a></li> 
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"<?= URL; ?>account/dashboard\">Tableau de bord</a></li>
                    </ul>
                    <!-- Navbar buttons-->
                    <div class=\"d-flex\">
                        <!-- User profile dropdown-->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-lg btn-icon dropdown-toggle\" id=\"dropdownMenuProfile\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user\"></i></button>
                            <ul class=\"dropdown-menu dropdown-menu-end mt-3\" aria-labelledby=\"dropdownMenuProfile\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>login\">
                                        <i class=\"fas fa-sign-out-alt leading-icon\"></i>
                                        <div class=\"me-3\">Se connecter</div>
                                    </a>
                                </li>                            
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/profil\">
                                        <i class=\"fas fa-address-card leading-icon\"></i>
                                        <div class=\"me-3\">Profil</div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/update-password\">
                                        <i class=\"fas fa-solid fa-key leading-icon\"></i>
                                        <div class=\"me-3\">Modifier mot de passe</div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/parameters\">
                                        <i class=\"fas fa-cog leading-icon\"></i>
                                        <div class=\"me-3\">Paramètres</div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>help\">
                                        <i class=\"fas fa-question-circle leading-icon\"></i>
                                        <div class=\"me-3\">Aide</div>
                                    </a>
                                </li>
                                <li><hr class=\"dropdown-divider\" /></li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/logout\">
                                        <i class=\"fas fa-sign-out-alt leading-icon\"></i>
                                        <div class=\"me-3\">Se déconnecter</div>
                                    </a>                            
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Layout wrapper-->
        <div id=\"layoutDrawer\">
            <!-- Layout navigation-->
            <div id=\"layoutDrawer_nav\">
                <!-- Drawer navigation-->
                <nav class=\"drawer accordion drawer-light bg-white\" id=\"drawerAccordion\">
                    <div class=\"drawer-menu\">
                        <div class=\"nav\">
                            <!-- Drawer section heading (Account)-->
                            <div class=\"drawer-menu-heading d-sm-none\">Account</div>
                            <!-- Drawer link (Notifications)-->
                            <a class=\"nav-link d-sm-none\" href=\"#!\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">notifications</i></div>
                                Notifications
                            </a>
                            <!-- Drawer link (Messages)-->
                            <a class=\"nav-link d-sm-none\" href=\"#!\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">mail</i></div>
                                Messages
                            </a>
                            <!-- Divider-->
                            <div class=\"drawer-menu-divider d-sm-none\"></div>
                            <!-- Drawer section heading (Interface)-->
                            <div class=\"drawer-menu-heading\">Interface</div>
                            <!-- Drawer link (Overview)-->
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">language</i></div>
                                Overview
                            </a>
                            <!-- Drawer link (Dashboards)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseDashboards\" aria-expanded=\"false\" aria-controls=\"collapseDashboards\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">dashboard</i></div>
                                Dashboards
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Dashboards)-->
                            <div class=\"collapse\" id=\"collapseDashboards\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"app-dashboard-default.html\">Default</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-minimal.html\">Minimal</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-analytics.html\">Analytics</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-accounting.html\">Accounting</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-orders.html\">Orders</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-projects.html\">Projects</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Layouts)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">view_compact</i></div>
                                Layouts
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Layouts)-->
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-dark.html\">Dark Theme</a>
                                    <a class=\"nav-link\" href=\"layout-light.html\">Light Theme</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Pages)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">layers</i></div>
                                Pages
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Pages)-->
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav accordion\" id=\"drawerAccordionPages\">
                                    <!-- Drawer link (Pages -> Account)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAccount\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAccount\">
                                        Account
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Account)-->
                                    <div class=\"collapse\" id=\"pagesCollapseAccount\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-account-billing.html\">Billing</a>
                                            <a class=\"nav-link\" href=\"app-account-notifications.html\">Notifications</a>
                                            <a class=\"nav-link\" href=\"app-account-profile.html\">Profile</a>
                                            <a class=\"nav-link\" href=\"app-account-security.html\">Security</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Authentication)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Authentication)-->
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-auth-login-basic.html\">Login 1</a>
                                            <a class=\"nav-link\" href=\"app-auth-login-styled-1.html\">Login 2</a>
                                            <a class=\"nav-link\" href=\"app-auth-login-styled-2.html\">Login 3</a>
                                            <a class=\"nav-link\" href=\"app-auth-register-basic.html\">Register</a>
                                            <a class=\"nav-link\" href=\"app-auth-password-basic.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Blank Pages)-->
                                    <a class=\"nav-link\" href=\"app-blank-page.html\">Blank Page</a>
                                    <!-- Drawer link (Pages -> Error)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Error)-->
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-error-400.html\">400 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-401.html\">401 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-403.html\">403 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-404.html\">404 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-429.html\">429 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-500.html\">500 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-503.html\">503 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-504.html\">504 Error Page</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Pricing)-->
                                    <a class=\"nav-link\" href=\"app-invoice.html\">Invoice</a>
                                    <!-- Drawer link (Pages -> Knowledgebase)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseKnowledgebase\" aria-expanded=\"false\" aria-controls=\"pagesCollapseKnowledgebase\">
                                        Knowledgebase
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Knowledgebase)-->
                                    <div class=\"collapse\" id=\"pagesCollapseKnowledgebase\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-knowledgebase-home.html\">Home</a>
                                            <a class=\"nav-link\" href=\"app-knowledgebase-categories.html\">Categories</a>
                                            <a class=\"nav-link\" href=\"app-knowledgebase-article.html\">Article</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Pricing)-->
                                    <a class=\"nav-link\" href=\"app-pricing.html\">Pricing</a>
                                </nav>
                            </div>
                            <!-- Divider-->
                            <div class=\"drawer-menu-divider\"></div>
                            <!-- Drawer section heading (UI Toolkit)-->
                            <div class=\"drawer-menu-heading\">UI Toolkit</div>
                            <!-- Drawer link (Components)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseComponents\" aria-expanded=\"false\" aria-controls=\"collapseComponents\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">widgets</i></div>
                                Components
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Components)-->
                            <div class=\"collapse\" id=\"collapseComponents\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"components-alerts.html\">Alerts</a>
                                    <a class=\"nav-link\" href=\"components-badges.html\">Badges</a>
                                    <a class=\"nav-link\" href=\"components-buttons.html\">Buttons</a>
                                    <a class=\"nav-link\" href=\"components-cards.html\">Cards</a>
                                    <a class=\"nav-link\" href=\"components-chips.html\">Chips</a>
                                    <a class=\"nav-link\" href=\"components-dropdowns.html\">Dropdowns</a>
                                    <a class=\"nav-link\" href=\"components-icon-buttons.html\">Icon Buttons</a>
                                    <a class=\"nav-link\" href=\"components-modals.html\">Modals</a>
                                    <a class=\"nav-link\" href=\"components-navigation.html\">Navigation</a>
                                    <a class=\"nav-link\" href=\"components-progress.html\">Progress</a>
                                    <a class=\"nav-link\" href=\"components-spinners.html\">Spinners</a>
                                    <a class=\"nav-link\" href=\"components-tooltips.html\">Tooltips</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Content)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseContent\" aria-expanded=\"false\" aria-controls=\"collapseContent\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">amp_stories</i></div>
                                Content
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Content)-->
                            <div class=\"collapse\" id=\"collapseContent\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"content-icons.html\">Icons</a>
                                    <a class=\"nav-link\" href=\"content-tables.html\">Tables</a>
                                    <a class=\"nav-link\" href=\"content-typography.html\">Typography</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Forms)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseForms\" aria-expanded=\"false\" aria-controls=\"collapseForms\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">description</i></div>
                                Forms
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Forms)-->
                            <div class=\"collapse\" id=\"collapseForms\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"forms-inputs.html\">Inputs</a>
                                    <a class=\"nav-link\" href=\"forms-checks-and-radios.html\">Checks &amp; Radio</a>
                                    <a class=\"nav-link\" href=\"forms-input-groups.html\">Input Groups</a>
                                    <a class=\"nav-link\" href=\"forms-range.html\">Range</a>
                                    <a class=\"nav-link\" href=\"forms-select.html\">Select</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Utilities)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseUtilities\" aria-expanded=\"false\" aria-controls=\"collapseUtilities\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">build</i></div>
                                Utilities
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Utilities)-->
                            <div class=\"collapse\" id=\"collapseUtilities\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"utilities-background.html\">Background</a>
                                    <a class=\"nav-link\" href=\"utilities-borders.html\">Borders</a>
                                    <a class=\"nav-link\" href=\"utilities-ripples.html\">Ripples</a>
                                    <a class=\"nav-link\" href=\"utilities-shadows.html\">Shadows</a>
                                    <a class=\"nav-link\" href=\"utilities-text.html\">Text</a>
                                    <a class=\"nav-link\" href=\"utilities-transforms.html\">Transforms</a>
                                </nav>
                            </div>
                            <!-- Divider-->
                            <div class=\"drawer-menu-divider\"></div>
                            <!-- Drawer section heading (Plugins)-->
                            <div class=\"drawer-menu-heading\">Plugins</div>
                            <!-- Drawer link (Charts)-->
                            <a class=\"nav-link\" href=\"plugins-charts.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">bar_chart</i></div>
                                Charts
                            </a>
                            <!-- Drawer link (Code Blocks)-->
                            <a class=\"nav-link\" href=\"plugins-code-blocks.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">code</i></div>
                                Code Blocks
                            </a>
                            <!-- Drawer link (Data Tables)-->
                            <a class=\"nav-link\" href=\"plugins-data-tables.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">filter_alt</i></div>
                                Data Tables
                            </a>
                            <!-- Drawer link (Date Picker)-->
                            <a class=\"nav-link\" href=\"plugins-date-picker.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">date_range</i></div>
                                Date Picker
                            </a>
                        </div>
                    </div>
                    <!-- Drawer footer        -->
                    <div class=\"drawer-footer border-top\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"material-icons text-muted\">account_circle</i>
                            <div class=\"ms-3\">
                                <div class=\"caption\">Utilisateur :</div>
                                <div class=\"small fw-500\">Utilisateur</div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Layout content-->
            <div id=\"layoutDrawer_content\">
                <!-- Main page content-->
                <main>
                    
                    ";
        // line 349
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 350
        yield "
                </main>
                <!-- Footer-->
                <!-- Min-height is set inline to match the height of the drawer footer-->
                <footer class=\"py-4 mt-auto border-top\" style=\"min-height: 74px\">
                    <div class=\"container-xl px-5\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-center justify-content-sm-between small\">
                            <div class=\"me-sm-2\">Copyright &copy; Budgex 2024</div>
                            <div class=\"d-flex ms-sm-2\">
                                <a class=\"text-decoration-none\" href=\"#!\">Vie privée</a>
                                <div class=\"mx-1\">&middot;</div>
                                <a class=\"text-decoration-none\" href=\"#!\">Termes &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>.
        <!-- Load Jquery JS bundle -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
       
        <!-- Load Bootstrap JS bundle -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js\"></script>
        
        <!-- Load global scripts -->
        <script src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        yield "\"></script>
    
    </body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 349
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
        return "base.html.twig";
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
        return array (  451 => 349,  434 => 375,  407 => 350,  405 => 349,  78 => 25,  62 => 12,  49 => 1,);
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
        
        <!-- Load main stylesheet -->
        <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\" />
    
    </head>

    <body class=\"nav-fixed bg-light\">
        
        <!-- Top app bar navigation menu-->
        <nav class=\"top-app-bar navbar navbar-expand navbar-dark bg-dark\">
            <div class=\"container-fluid px-4\">
                <!-- Drawer toggle button-->
                <button class=\"btn btn-lg btn-icon order-1 order-lg-0\" id=\"drawerToggle\" href=\"javascript:void(0);\"><i class=\"fas fa-bars\"></i></button>
                <!-- Navbar brand-->
                <a class=\"navbar-brand me-auto\" href=\"<?= URL; ?>accueil\"><div class=\"text-uppercase font-monospace\">Budgex</div></a>
                <!-- Navbar items-->
                <div class=\"d-flex align-items-center mx-3 me-lg-0\">
                    <!-- Navbar-->
                    <ul class=\"navbar-nav d-none d-lg-flex\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"<?= URL; ?>accueil\">Accueil</a></li> 
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"<?= URL; ?>account/dashboard\">Tableau de bord</a></li>
                    </ul>
                    <!-- Navbar buttons-->
                    <div class=\"d-flex\">
                        <!-- User profile dropdown-->
                        <div class=\"dropdown\">
                            <button class=\"btn btn-lg btn-icon dropdown-toggle\" id=\"dropdownMenuProfile\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user\"></i></button>
                            <ul class=\"dropdown-menu dropdown-menu-end mt-3\" aria-labelledby=\"dropdownMenuProfile\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>login\">
                                        <i class=\"fas fa-sign-out-alt leading-icon\"></i>
                                        <div class=\"me-3\">Se connecter</div>
                                    </a>
                                </li>                            
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/profil\">
                                        <i class=\"fas fa-address-card leading-icon\"></i>
                                        <div class=\"me-3\">Profil</div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/update-password\">
                                        <i class=\"fas fa-solid fa-key leading-icon\"></i>
                                        <div class=\"me-3\">Modifier mot de passe</div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/parameters\">
                                        <i class=\"fas fa-cog leading-icon\"></i>
                                        <div class=\"me-3\">Paramètres</div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>help\">
                                        <i class=\"fas fa-question-circle leading-icon\"></i>
                                        <div class=\"me-3\">Aide</div>
                                    </a>
                                </li>
                                <li><hr class=\"dropdown-divider\" /></li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"<?= URL; ?>account/logout\">
                                        <i class=\"fas fa-sign-out-alt leading-icon\"></i>
                                        <div class=\"me-3\">Se déconnecter</div>
                                    </a>                            
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Layout wrapper-->
        <div id=\"layoutDrawer\">
            <!-- Layout navigation-->
            <div id=\"layoutDrawer_nav\">
                <!-- Drawer navigation-->
                <nav class=\"drawer accordion drawer-light bg-white\" id=\"drawerAccordion\">
                    <div class=\"drawer-menu\">
                        <div class=\"nav\">
                            <!-- Drawer section heading (Account)-->
                            <div class=\"drawer-menu-heading d-sm-none\">Account</div>
                            <!-- Drawer link (Notifications)-->
                            <a class=\"nav-link d-sm-none\" href=\"#!\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">notifications</i></div>
                                Notifications
                            </a>
                            <!-- Drawer link (Messages)-->
                            <a class=\"nav-link d-sm-none\" href=\"#!\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">mail</i></div>
                                Messages
                            </a>
                            <!-- Divider-->
                            <div class=\"drawer-menu-divider d-sm-none\"></div>
                            <!-- Drawer section heading (Interface)-->
                            <div class=\"drawer-menu-heading\">Interface</div>
                            <!-- Drawer link (Overview)-->
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">language</i></div>
                                Overview
                            </a>
                            <!-- Drawer link (Dashboards)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseDashboards\" aria-expanded=\"false\" aria-controls=\"collapseDashboards\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">dashboard</i></div>
                                Dashboards
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Dashboards)-->
                            <div class=\"collapse\" id=\"collapseDashboards\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"app-dashboard-default.html\">Default</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-minimal.html\">Minimal</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-analytics.html\">Analytics</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-accounting.html\">Accounting</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-orders.html\">Orders</a>
                                    <a class=\"nav-link\" href=\"app-dashboard-projects.html\">Projects</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Layouts)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">view_compact</i></div>
                                Layouts
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Layouts)-->
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-dark.html\">Dark Theme</a>
                                    <a class=\"nav-link\" href=\"layout-light.html\">Light Theme</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Pages)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">layers</i></div>
                                Pages
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Pages)-->
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav accordion\" id=\"drawerAccordionPages\">
                                    <!-- Drawer link (Pages -> Account)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAccount\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAccount\">
                                        Account
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Account)-->
                                    <div class=\"collapse\" id=\"pagesCollapseAccount\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-account-billing.html\">Billing</a>
                                            <a class=\"nav-link\" href=\"app-account-notifications.html\">Notifications</a>
                                            <a class=\"nav-link\" href=\"app-account-profile.html\">Profile</a>
                                            <a class=\"nav-link\" href=\"app-account-security.html\">Security</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Authentication)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Authentication)-->
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-auth-login-basic.html\">Login 1</a>
                                            <a class=\"nav-link\" href=\"app-auth-login-styled-1.html\">Login 2</a>
                                            <a class=\"nav-link\" href=\"app-auth-login-styled-2.html\">Login 3</a>
                                            <a class=\"nav-link\" href=\"app-auth-register-basic.html\">Register</a>
                                            <a class=\"nav-link\" href=\"app-auth-password-basic.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Blank Pages)-->
                                    <a class=\"nav-link\" href=\"app-blank-page.html\">Blank Page</a>
                                    <!-- Drawer link (Pages -> Error)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Error)-->
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-error-400.html\">400 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-401.html\">401 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-403.html\">403 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-404.html\">404 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-429.html\">429 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-500.html\">500 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-503.html\">503 Error Page</a>
                                            <a class=\"nav-link\" href=\"app-error-504.html\">504 Error Page</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Pricing)-->
                                    <a class=\"nav-link\" href=\"app-invoice.html\">Invoice</a>
                                    <!-- Drawer link (Pages -> Knowledgebase)-->
                                    <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseKnowledgebase\" aria-expanded=\"false\" aria-controls=\"pagesCollapseKnowledgebase\">
                                        Knowledgebase
                                        <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Knowledgebase)-->
                                    <div class=\"collapse\" id=\"pagesCollapseKnowledgebase\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordionPages\">
                                        <nav class=\"drawer-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"app-knowledgebase-home.html\">Home</a>
                                            <a class=\"nav-link\" href=\"app-knowledgebase-categories.html\">Categories</a>
                                            <a class=\"nav-link\" href=\"app-knowledgebase-article.html\">Article</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Pricing)-->
                                    <a class=\"nav-link\" href=\"app-pricing.html\">Pricing</a>
                                </nav>
                            </div>
                            <!-- Divider-->
                            <div class=\"drawer-menu-divider\"></div>
                            <!-- Drawer section heading (UI Toolkit)-->
                            <div class=\"drawer-menu-heading\">UI Toolkit</div>
                            <!-- Drawer link (Components)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseComponents\" aria-expanded=\"false\" aria-controls=\"collapseComponents\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">widgets</i></div>
                                Components
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Components)-->
                            <div class=\"collapse\" id=\"collapseComponents\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"components-alerts.html\">Alerts</a>
                                    <a class=\"nav-link\" href=\"components-badges.html\">Badges</a>
                                    <a class=\"nav-link\" href=\"components-buttons.html\">Buttons</a>
                                    <a class=\"nav-link\" href=\"components-cards.html\">Cards</a>
                                    <a class=\"nav-link\" href=\"components-chips.html\">Chips</a>
                                    <a class=\"nav-link\" href=\"components-dropdowns.html\">Dropdowns</a>
                                    <a class=\"nav-link\" href=\"components-icon-buttons.html\">Icon Buttons</a>
                                    <a class=\"nav-link\" href=\"components-modals.html\">Modals</a>
                                    <a class=\"nav-link\" href=\"components-navigation.html\">Navigation</a>
                                    <a class=\"nav-link\" href=\"components-progress.html\">Progress</a>
                                    <a class=\"nav-link\" href=\"components-spinners.html\">Spinners</a>
                                    <a class=\"nav-link\" href=\"components-tooltips.html\">Tooltips</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Content)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseContent\" aria-expanded=\"false\" aria-controls=\"collapseContent\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">amp_stories</i></div>
                                Content
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Content)-->
                            <div class=\"collapse\" id=\"collapseContent\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"content-icons.html\">Icons</a>
                                    <a class=\"nav-link\" href=\"content-tables.html\">Tables</a>
                                    <a class=\"nav-link\" href=\"content-typography.html\">Typography</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Forms)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseForms\" aria-expanded=\"false\" aria-controls=\"collapseForms\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">description</i></div>
                                Forms
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Forms)-->
                            <div class=\"collapse\" id=\"collapseForms\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"forms-inputs.html\">Inputs</a>
                                    <a class=\"nav-link\" href=\"forms-checks-and-radios.html\">Checks &amp; Radio</a>
                                    <a class=\"nav-link\" href=\"forms-input-groups.html\">Input Groups</a>
                                    <a class=\"nav-link\" href=\"forms-range.html\">Range</a>
                                    <a class=\"nav-link\" href=\"forms-select.html\">Select</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Utilities)-->
                            <a class=\"nav-link collapsed\" href=\"javascript:void(0);\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseUtilities\" aria-expanded=\"false\" aria-controls=\"collapseUtilities\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">build</i></div>
                                Utilities
                                <div class=\"drawer-collapse-arrow\"><i class=\"material-icons\">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Utilities)-->
                            <div class=\"collapse\" id=\"collapseUtilities\" aria-labelledby=\"headingOne\" data-bs-parent=\"#drawerAccordion\">
                                <nav class=\"drawer-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"utilities-background.html\">Background</a>
                                    <a class=\"nav-link\" href=\"utilities-borders.html\">Borders</a>
                                    <a class=\"nav-link\" href=\"utilities-ripples.html\">Ripples</a>
                                    <a class=\"nav-link\" href=\"utilities-shadows.html\">Shadows</a>
                                    <a class=\"nav-link\" href=\"utilities-text.html\">Text</a>
                                    <a class=\"nav-link\" href=\"utilities-transforms.html\">Transforms</a>
                                </nav>
                            </div>
                            <!-- Divider-->
                            <div class=\"drawer-menu-divider\"></div>
                            <!-- Drawer section heading (Plugins)-->
                            <div class=\"drawer-menu-heading\">Plugins</div>
                            <!-- Drawer link (Charts)-->
                            <a class=\"nav-link\" href=\"plugins-charts.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">bar_chart</i></div>
                                Charts
                            </a>
                            <!-- Drawer link (Code Blocks)-->
                            <a class=\"nav-link\" href=\"plugins-code-blocks.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">code</i></div>
                                Code Blocks
                            </a>
                            <!-- Drawer link (Data Tables)-->
                            <a class=\"nav-link\" href=\"plugins-data-tables.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">filter_alt</i></div>
                                Data Tables
                            </a>
                            <!-- Drawer link (Date Picker)-->
                            <a class=\"nav-link\" href=\"plugins-date-picker.html\">
                                <div class=\"nav-link-icon\"><i class=\"material-icons\">date_range</i></div>
                                Date Picker
                            </a>
                        </div>
                    </div>
                    <!-- Drawer footer        -->
                    <div class=\"drawer-footer border-top\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"material-icons text-muted\">account_circle</i>
                            <div class=\"ms-3\">
                                <div class=\"caption\">Utilisateur :</div>
                                <div class=\"small fw-500\">Utilisateur</div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Layout content-->
            <div id=\"layoutDrawer_content\">
                <!-- Main page content-->
                <main>
                    
                    {% block body %}{% endblock %}

                </main>
                <!-- Footer-->
                <!-- Min-height is set inline to match the height of the drawer footer-->
                <footer class=\"py-4 mt-auto border-top\" style=\"min-height: 74px\">
                    <div class=\"container-xl px-5\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-center justify-content-sm-between small\">
                            <div class=\"me-sm-2\">Copyright &copy; Budgex 2024</div>
                            <div class=\"d-flex ms-sm-2\">
                                <a class=\"text-decoration-none\" href=\"#!\">Vie privée</a>
                                <div class=\"mx-1\">&middot;</div>
                                <a class=\"text-decoration-none\" href=\"#!\">Termes &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>.
        <!-- Load Jquery JS bundle -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
       
        <!-- Load Bootstrap JS bundle -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js\"></script>
        
        <!-- Load global scripts -->
        <script src=\"{{ asset('js/scripts.js') }}\"></script>
    
    </body>

</html>
", "base.html.twig", "C:\\wamp\\www\\budgex\\templates\\base.html.twig");
    }
}
