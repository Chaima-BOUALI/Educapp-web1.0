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

/* base-front.html.twig */
class __TwigTemplate_9df104623d55fcef600b611daa83552821068d30c9fdcf8c4212d2a14d55f7af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title >";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/favicon-16x16.png"), "html", null, true);
        echo "\">
    <!-- mobile specific metas
 ================================================== -->
    <meta name=\"viewport\" content=\"width=device-width,margin=20px, initial-scale=1\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "</head>
<body id=\"top\" marginwidth= \"20px\"

>

<div >
    <!-- header
       ================================================== -->
    <header class=\"s-header\">

        <div class=\"row s-header__content\">

            <div class=\"s-header__logo\">
                <a class=\"logo\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/index.html"), "html", null, true);
        echo "\">
                    <img src= \"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/logo.png"), "html", null, true);
        echo "\"  width=\"1280px\" height=\"720px\" alt=\"Homepage\">
                </a>
            </div>

            <nav class=\"s-header__nav-wrap\">

                <h2 class=\"s-header__nav-heading h6\">Site Navigation</h2>

                <ul class=\"s-header__nav\">
                    <li class=\"current\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/index.html"), "html", null, true);
        echo "\" title=\"\">Home</a></li>
                    <li class=\"has-children\">
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/#0"), "html", null, true);
        echo "\" title=\"\">Voir plus</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Candidat</a></li>
                            <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Formatteur</a></li>
                            <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Administrateur</a></li>
                            <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Publicity</a></li>
                            <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Promotion</a></li>
                            <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Session</a></li>
                            <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Seance</a></li>
                            <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Abonnement</a></li>
                            <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Category</a></li>
                            <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Ressource</a></li>
                            <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">DemandeEnseignement</a></li>
                            <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">CompteRendu</a></li>
                            <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Reclamation</a></li>
                            <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/category.html"), "html", null, true);
        echo "\">Decision</a></li>
                        </ul>
                    </li>
                    <li class=\"has-children\">
                        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/#0"), "html", null, true);
        echo "\" title=\"\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/single-video.html"), "html", null, true);
        echo "\">Video Post</a></li>
                            <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/single-audio.html"), "html", null, true);
        echo "\">Audio Post</a></li>
                            <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/single-gallery.html"), "html", null, true);
        echo "\">Gallery Post</a></li>
                            <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/single-standard.html"), "html", null, true);
        echo "\">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/styles.html"), "html", null, true);
        echo "\" title=\"\">Styles</a></li>
                    <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/about.html"), "html", null, true);
        echo "\" title=\"\">Qui sommes nous? </a></li>
                    <li><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/contact.html"), "html", null, true);
        echo "\" title=\"\">Nos Contacts</a></li>
                </ul> <!-- end header__nav -->

                <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/#0"), "html", null, true);
        echo "\" title=\"Close Menu\" class=\"s-header__overlay-close close-mobile-menu\">Close</a>

            </nav> <!-- end header__nav-wrap -->

            <a class=\"s-header__toggle-menu\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/#0"), "html", null, true);
        echo "\" title=\"Menu\"><span>Menu</span></a>

            <div class=\"s-header__search\">

                <form role=\"search\" method=\"get\" class=\"s-header__search-form\" action=\"#\">
                    <label>
                        <span class=\"hide-content\">Search for:</span>
                        <input type=\"search\" class=\"s-header__search-field\" placeholder=\"Type Your Keywords\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"off\">
                    </label>
                    <input type=\"submit\" class=\"s-header__search-submit\" value=\"Search\">
                </form>

                <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/#0"), "html", null, true);
        echo "\" title=\"Close Search\" class=\"s-header__overlay-close\">Close</a>

            </div> <!-- end search wrap -->

            <a class=\"s-header__search-trigger\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/#"), "html", null, true);
        echo "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M10 18a7.952 7.952 0 004.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0018 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z\"></path></svg>
            </a>

        </div> <!-- end s-header__content -->

    </header> <!-- end header -->



    ";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "
    <!-- footer
        ================================================== -->
    <footer class=\"s-footer\">

        <div class=\"s-footer__main\">

            <div class=\"row\">

                <div class=\"column large-4 medium-6 tab-12 s-footer__info\">

                    <h5>Par rapport à nous</h5>

                    <p>
                        EDUC-APP est une application pratique destinée au centres de formations qui veulent digitaliser et numériser leurs méthodes de travails.
                    </p>

                </div> <!-- end s-footer__info -->

                <div class=\"column large-2 medium-3 tab-6 s-footer__site-links\">

                    <h5>Nos Links</h5>

                    <ul>
                        <li><a href=\"#0\">Qui Sommes nous?</a></li>
                        <li><a href=\"#0\">Notre Blogue</a></li>
                        <li><a href=\"#0\">FAQ</a></li>
                        <li><a href=\"#0\">Termes</a></li>
                        <li><a href=\"#0\">Tous droits de reproduction reservés</a></li>
                    </ul>

                </div> <!-- end s-footer__site-links -->

                <div class=\"column large-2 medium-3 tab-6 s-footer__social-links\">

                    <h5>Social</h5>

                    <ul>
                        <li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("www.Twitter.com"), "html", null, true);
        echo "\">Twitter</a></li>
                        <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("www.Facebook.com"), "html", null, true);
        echo "\">Facebook</a></li>
                        <li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("www.TikTok.com"), "html", null, true);
        echo "\">TikTok</a></li>
                        <li><a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("www.Pinterest.com"), "html", null, true);
        echo "\">Pinterest</a></li>
                        <li><a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("www.Instagram.com"), "html", null, true);
        echo "\">Instagram</a></li>
                    </ul>

                </div> <!-- end s-footer__social links -->

                <div class=\"column large-4 medium-12 s-footer__subscribe\">

                    <h5>Subscribe</h5>

                    <p>Keep yourself updated. Subscribe to our newsletter.</p>

                    <div class=\"subscribe-form\">

                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">

                            <input type=\"email\" value=\"\" name=\"dEmail\" class=\"email\" id=\"mc-email\" placeholder=\"Type &amp; press enter\" required=\"\">

                            <input type=\"submit\" name=\"subscribe\" >

                            <label for=\"mc-email\" class=\"subscribe-message\"></label>

                        </form>

                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div> <!-- end row -->

        </div> <!-- end s-footer__main -->

        <div class=\"s-footer__bottom\">
            <div class=\"row\">
                <div class=\"column\">
                    <div class=\"ss-copyright\">
                        <span>Tout droit de reproduction reservé </span>
                        <span>Design by <a href=\"#\">F-Society</a></span>
                    </div> <!-- end ss-copyright -->
                </div>
            </div>

            <div class=\"ss-go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z\"/></svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " BienVenue à EducApp ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <!-- CSS
            ================================================== -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/vendor.css"), "html", null, true);
        echo "\">

        <!-- script
        ================================================== -->
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/modernizr.js"), "html", null, true);
        echo "\"></script>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <!-- Java Script
       ================================================== -->
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 120
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 120,  473 => 119,  461 => 30,  457 => 29,  453 => 28,  449 => 26,  439 => 25,  425 => 20,  418 => 16,  414 => 15,  410 => 13,  400 => 12,  381 => 5,  316 => 164,  312 => 163,  308 => 162,  304 => 161,  300 => 160,  260 => 122,  258 => 119,  245 => 109,  238 => 105,  223 => 93,  216 => 89,  210 => 86,  206 => 85,  202 => 84,  196 => 81,  192 => 80,  188 => 79,  184 => 78,  179 => 76,  172 => 72,  168 => 71,  164 => 70,  160 => 69,  156 => 68,  152 => 67,  148 => 66,  144 => 65,  140 => 64,  136 => 63,  132 => 62,  128 => 61,  124 => 60,  120 => 59,  115 => 57,  110 => 55,  98 => 46,  94 => 45,  79 => 32,  77 => 25,  74 => 24,  72 => 12,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title >{% block title %} BienVenue à EducApp {% endblock %}</title>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('front-office/apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('front-office/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('front-office/favicon-16x16.png') }}\">
    <!-- mobile specific metas
 ================================================== -->
    <meta name=\"viewport\" content=\"width=device-width,margin=20px, initial-scale=1\">
    {% block stylesheets %}
        <!-- CSS
            ================================================== -->
        <link rel=\"stylesheet\" href=\"{{ asset ('front-office/css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('front-office/css/vendor.css') }}\">

        <!-- script
        ================================================== -->
        <script src=\"{{ asset('front-office/js/modernizr.js') }}\"></script>


    {% endblock %}

    {% block javascripts %}
        <!-- Java Script
       ================================================== -->
        <script src=\"{{ asset('front-office/js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('front-office/js/plugins.js') }}\"></script>
        <script src=\"{{ asset('front-office/js/main.js') }}\"></script>
    {% endblock %}
</head>
<body id=\"top\" marginwidth= \"20px\"

>

<div >
    <!-- header
       ================================================== -->
    <header class=\"s-header\">

        <div class=\"row s-header__content\">

            <div class=\"s-header__logo\">
                <a class=\"logo\" href=\"{{ asset('front-office/index.html') }}\">
                    <img src= \"{{ asset ('front-office/images/logo.png') }}\"  width=\"1280px\" height=\"720px\" alt=\"Homepage\">
                </a>
            </div>

            <nav class=\"s-header__nav-wrap\">

                <h2 class=\"s-header__nav-heading h6\">Site Navigation</h2>

                <ul class=\"s-header__nav\">
                    <li class=\"current\"><a href=\"{{ asset ('front-office/index.html') }}\" title=\"\">Home</a></li>
                    <li class=\"has-children\">
                        <a href=\"{{ asset('front-office/#0') }}\" title=\"\">Voir plus</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Candidat</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Formatteur</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Administrateur</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Publicity</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Promotion</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Session</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Seance</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Abonnement</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Category</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Ressource</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">DemandeEnseignement</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">CompteRendu</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Reclamation</a></li>
                            <li><a href=\"{{ asset ('front-office/category.html') }}\">Decision</a></li>
                        </ul>
                    </li>
                    <li class=\"has-children\">
                        <a href=\"{{ asset('front-office/#0') }}\" title=\"\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ asset ('front-office/single-video.html') }}\">Video Post</a></li>
                            <li><a href=\"{{ asset ('front-office/single-audio.html') }}\">Audio Post</a></li>
                            <li><a href=\"{{ asset ('front-office/single-gallery.html') }}\">Gallery Post</a></li>
                            <li><a href=\"{{ asset ('front-office/single-standard.html') }}\">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{ asset ('front-office/styles.html') }}\" title=\"\">Styles</a></li>
                    <li><a href=\"{{ asset ('front-office/about.html') }}\" title=\"\">Qui sommes nous? </a></li>
                    <li><a href=\"{{ asset ('front-office/contact.html') }}\" title=\"\">Nos Contacts</a></li>
                </ul> <!-- end header__nav -->

                <a href=\"{{ asset('front-office/#0') }}\" title=\"Close Menu\" class=\"s-header__overlay-close close-mobile-menu\">Close</a>

            </nav> <!-- end header__nav-wrap -->

            <a class=\"s-header__toggle-menu\" href=\"{{ asset('front-office/#0') }}\" title=\"Menu\"><span>Menu</span></a>

            <div class=\"s-header__search\">

                <form role=\"search\" method=\"get\" class=\"s-header__search-form\" action=\"#\">
                    <label>
                        <span class=\"hide-content\">Search for:</span>
                        <input type=\"search\" class=\"s-header__search-field\" placeholder=\"Type Your Keywords\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"off\">
                    </label>
                    <input type=\"submit\" class=\"s-header__search-submit\" value=\"Search\">
                </form>

                <a href=\"{{ asset('front-office/#0') }}\" title=\"Close Search\" class=\"s-header__overlay-close\">Close</a>

            </div> <!-- end search wrap -->

            <a class=\"s-header__search-trigger\" href=\"{{ asset('front-office/#') }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M10 18a7.952 7.952 0 004.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0018 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z\"></path></svg>
            </a>

        </div> <!-- end s-header__content -->

    </header> <!-- end header -->



    {% block body %}

    {% endblock %}

    <!-- footer
        ================================================== -->
    <footer class=\"s-footer\">

        <div class=\"s-footer__main\">

            <div class=\"row\">

                <div class=\"column large-4 medium-6 tab-12 s-footer__info\">

                    <h5>Par rapport à nous</h5>

                    <p>
                        EDUC-APP est une application pratique destinée au centres de formations qui veulent digitaliser et numériser leurs méthodes de travails.
                    </p>

                </div> <!-- end s-footer__info -->

                <div class=\"column large-2 medium-3 tab-6 s-footer__site-links\">

                    <h5>Nos Links</h5>

                    <ul>
                        <li><a href=\"#0\">Qui Sommes nous?</a></li>
                        <li><a href=\"#0\">Notre Blogue</a></li>
                        <li><a href=\"#0\">FAQ</a></li>
                        <li><a href=\"#0\">Termes</a></li>
                        <li><a href=\"#0\">Tous droits de reproduction reservés</a></li>
                    </ul>

                </div> <!-- end s-footer__site-links -->

                <div class=\"column large-2 medium-3 tab-6 s-footer__social-links\">

                    <h5>Social</h5>

                    <ul>
                        <li><a href=\"{{ asset('www.Twitter.com') }}\">Twitter</a></li>
                        <li><a href=\"{{ asset('www.Facebook.com') }}\">Facebook</a></li>
                        <li><a href=\"{{ asset('www.TikTok.com') }}\">TikTok</a></li>
                        <li><a href=\"{{ asset('www.Pinterest.com') }}\">Pinterest</a></li>
                        <li><a href=\"{{ asset('www.Instagram.com') }}\">Instagram</a></li>
                    </ul>

                </div> <!-- end s-footer__social links -->

                <div class=\"column large-4 medium-12 s-footer__subscribe\">

                    <h5>Subscribe</h5>

                    <p>Keep yourself updated. Subscribe to our newsletter.</p>

                    <div class=\"subscribe-form\">

                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">

                            <input type=\"email\" value=\"\" name=\"dEmail\" class=\"email\" id=\"mc-email\" placeholder=\"Type &amp; press enter\" required=\"\">

                            <input type=\"submit\" name=\"subscribe\" >

                            <label for=\"mc-email\" class=\"subscribe-message\"></label>

                        </form>

                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div> <!-- end row -->

        </div> <!-- end s-footer__main -->

        <div class=\"s-footer__bottom\">
            <div class=\"row\">
                <div class=\"column\">
                    <div class=\"ss-copyright\">
                        <span>Tout droit de reproduction reservé </span>
                        <span>Design by <a href=\"#\">F-Society</a></span>
                    </div> <!-- end ss-copyright -->
                </div>
            </div>

            <div class=\"ss-go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z\"/></svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


</div>
</body>
</html>
", "base-front.html.twig", "C:\\wamp64\\www\\Educapp1.0\\templates\\base-front.html.twig");
    }
}
