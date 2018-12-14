<?php

/* base.html.twig */
class __TwigTemplate_10afda2b1cdd5a9f65391b6ef3317f2cc9bebd36bb40262c3db2c5639ca05d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('footer', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('javascripts', $context, $blocks);
        // line 223
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue chez Keman Racing !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/logo.png"), "html", null, true);
        echo "\" rel=\"icon\">


  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Ruda:400,900,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/prettyphoto/css/prettyphoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/hover/hoverex-all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jetmenu/jetmenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/owl-carousel/owl-carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/colors/blue.css"), "html", null, true);
        echo "\">

</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "  <div class=\"topbar clearfix\">
    <div class=\"container\">
      <div class=\"col-lg-12 text-right\">
        <div class=\"social_buttons\">
          <a href=\"https://fr-fr.facebook.com/\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
          <a href=\"https://twitter.com/?lang=fr\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
          <a href=\"https://plus.google.com/discover\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
          <a href=\"https://dribbble.com/\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dribbble\"><i class=\"fa fa-dribbble\"></i></a>
          <a href=\"https://fr.wikipedia.org/wiki/RSS\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"RSS\"><i class=\"fa fa-rss\"></i></a>
        </div>
      </div>
    </div>
  </div>

  <header class=\"header\">
    <div class=\"container\">
      <div class=\"site-header clearfix\">
        <div class=\"col-lg-3 col-md-3 col-sm-12 title-area\">
          <div class=\"site-title\" id=\"title\">
            <a href=\"/\" title=\"\">
              <h4>Keman<span>Racing !</span></h4>
            </a>
          </div>
        </div>
        <div class=\"col-lg-9 col-md-12 col-sm-12\">
          <div id=\"nav\" class=\"right\">
            <div class=\"container clearfix\">
              <ul id=\"jetmenu\" class=\"jetmenu blue\">
                <li class=\"active\"><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\">Acceuil</a>
                </li>
                <li><a href=\"/\">Nous connaître</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/qsn"), "html", null, true);
        echo "\">Qui sommes-nous ?</a></li>
                    <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/services"), "html", null, true);
        echo "\">Nos services</a></li>
                    <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/equipe"), "html", null, true);
        echo "\">Notre équipe</a></li>
                    <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/temoignages"), "html", null, true);
        echo "\">Leurs témoignages</a></li>
                    <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/faq"), "html", null, true);
        echo "\">FAQ</a></li>
                    <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/contact"), "html", null, true);
        echo "\">Nous Contacter</a></li>
                  </ul>
                </li>
                <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("#"), "html", null, true);
        echo "\">Nos circuits</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/circuits"), "html", null, true);
        echo "\">Choisir votre circuit</a></li>
                    <li><a href=\"gallery-portfolio.html\">Gallerie</a></li>
                  </ul>
                </li>
                <li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("#"), "html", null, true);
        echo "\">Nos voitures</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/brands"), "html", null, true);
        echo "\">Choisir votre voiture</a></li>
                    <li><a href=\"gallery-portfolio.html\">Gallerie</a></li>
                  </ul>
                <!-- <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">Votre réservation</a> A METTRE UNE FOIS L'USER CONNECTÉ.
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/circuits"), "html", null, true);
        echo "\">Voir nos circuits</a></li>
                    <li><a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/produit seul"), "html", null, true);
        echo "\">Single Product</a></li>
                    <li><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/checkout"), "html", null, true);
        echo "\">Votre panier</a></li>
                    <li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/account"), "html", null, true);
        echo "\">Account Page</a></li>
                    <li><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/support"), "html", null, true);
        echo "\">Support Center</a></li>
                  </ul>
                </li> -->
                </li>
                <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">Votre compte</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/connexion"), "html", null, true);
        echo "\">Connexion</a></li>
                    <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/inscription"), "html", null, true);
        echo "\">Inscription</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 116
        echo "  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">A propos de nous</h4>
        <p>Keman Racing ! est une entreprise fictive dans le but d'un projet noté. Rien de tout ça est vrai !</p>
        <a class=\"button small\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">Lire la suite</a>
      </div>
      <!-- end widget -->
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Dernières nouveautés</h4>
        <ul class=\"recent_posts\">
          <li>
            <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/home1"), "html", null, true);
        echo "\">
            <img src=\"img/recent_post_01.png\" alt=\"\" />Bientôt une nouvelle application mobile !</a>
            <a class=\"readmore\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">En savoir plus</a>
          </li>
          <li>
            <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/home1"), "html", null, true);
        echo "#\">
            <img src=\"img/recent_post_02.png\" alt=\"\" />Bientôt de nouveaux modèles !</a>
            <a class=\"readmore\" href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">En savoir plus</a>
          </li>
        </ul>
        <!-- recent posts -->
      </div>
      <!-- end widget -->
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Restons en contact</h4>
        <ul class=\"contact_details\">
          <li><i class=\"fa fa-envelope-o\"></i>info@kemanracing.com</li>
          <li><i class=\"fa fa-phone-square\"></i>01 12 23 45 56</li>
          <li><i class=\"fa fa-home\"></i> Siège social, 1 Rue Pierre Louis Guyard, 78360 Montesson</li>
          <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> Voir sur Google Maps</a></li>
        </ul>
        <!-- contact_details -->
      </div>
      <!-- end widget -->
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Flickr Stream</h4>
        <ul class=\"flickr\">
          <li><a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_01.jpg\"></a></li>
          <li><a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_02.jpg\"></a></li>
          <li><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_03.jpg\"></a></li>
          <li><a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_04.jpg\"></a></li>
          <li><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_05.jpg\"></a></li>
          <li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_06.jpg\"></a></li>
          <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_07.jpg\"></a></li>
          <li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_08.jpg\"></a></li>
        </ul>
      </div>
      <!-- end widget -->
    </div>
    <!-- end container -->

    <div class=\"copyrights\">
      <div class=\"container\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 columns footer-left\">
          <p>Copyright © 2018 - Tous droits réservés.</p>
          <div class=\"credits\">
            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/maxibiz-bootstrap-business-template/
              Licensing information: https://templatemag.com/license/
            -->
            Crée pour un examen à l'<a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/https://www.ifocop.fr/"), "html", null, true);
        echo "\" target=\"blank\">IFOCOP</a>, PARIS.
          </div>
        </div>
        <!-- end widget -->
        <div class=\"col-lg-6 col-md-6 col-sm-12 columns text-right\">
          <div class=\"footer-menu right\">
            <ul class=\"menu\">
              <li><a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/index"), "html", null, true);
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/about"), "html", null, true);
        echo "\">A propos</a></li>
              <li><a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">Plan du site</a></li>
              <li><a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">CGV</a></li>
              <li><a href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/contact"), "html", null, true);
        echo "\">Contact</a></li>
            </ul>
          </div>
        </div>
        <!-- end large-6 -->
      </div>
      <!-- end container -->
    </div>
    <!-- end copyrights -->
  </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
        echo "  <div class=\"dmtop\">Scroll to Top</div>

  <!-- JavaScript Libraries -->
  <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/php-mail-form/validate.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/prettyphoto/js/prettyphoto.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/isotope/isotope.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/hover/hoverdir.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/hover/hoverex.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/unveil-effects/unveil-effects.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/owl-carousel/owl-carousel.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jetmenu/jetmenu.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/animate-enhanced/animate-enhanced.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jigowatt/jigowatt.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/easypiechart/easypiechart.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  563 => 221,  558 => 219,  554 => 218,  550 => 217,  546 => 216,  542 => 215,  538 => 214,  534 => 213,  530 => 212,  526 => 211,  522 => 210,  518 => 209,  514 => 208,  510 => 207,  505 => 204,  496 => 203,  475 => 191,  471 => 190,  467 => 189,  463 => 188,  459 => 187,  449 => 180,  428 => 162,  424 => 161,  420 => 160,  416 => 159,  412 => 158,  408 => 157,  404 => 156,  400 => 155,  377 => 135,  372 => 133,  366 => 130,  361 => 128,  351 => 121,  344 => 116,  335 => 115,  324 => 112,  315 => 111,  294 => 100,  290 => 99,  285 => 97,  278 => 93,  274 => 92,  270 => 91,  266 => 90,  262 => 89,  257 => 87,  251 => 84,  246 => 82,  239 => 78,  234 => 76,  228 => 73,  224 => 72,  220 => 71,  216 => 70,  212 => 69,  208 => 68,  201 => 64,  171 => 36,  162 => 35,  148 => 30,  144 => 29,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  116 => 19,  106 => 12,  99 => 7,  90 => 6,  72 => 5,  60 => 223,  58 => 203,  55 => 202,  53 => 115,  50 => 114,  48 => 111,  46 => 35,  43 => 34,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
        <title>{% block title %}Bienvenue chez Keman Racing !{% endblock %}</title>
{% block stylesheets %}
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
  <link href=\"{{ asset('/assets/img/logo.png') }}\" rel=\"icon\">


  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Ruda:400,900,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"{{ asset('/assets/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"{{ asset('/assets/lib/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/prettyphoto/css/prettyphoto.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/hover/hoverex-all.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/jetmenu/jetmenu.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/owl-carousel/owl-carousel.css') }}\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"{{ asset('/assets/css/style.css') }}\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/colors/blue.css') }}\">

</head>
{% endblock %}

{% block header %}
  <div class=\"topbar clearfix\">
    <div class=\"container\">
      <div class=\"col-lg-12 text-right\">
        <div class=\"social_buttons\">
          <a href=\"https://fr-fr.facebook.com/\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
          <a href=\"https://twitter.com/?lang=fr\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
          <a href=\"https://plus.google.com/discover\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
          <a href=\"https://dribbble.com/\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dribbble\"><i class=\"fa fa-dribbble\"></i></a>
          <a href=\"https://fr.wikipedia.org/wiki/RSS\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"RSS\"><i class=\"fa fa-rss\"></i></a>
        </div>
      </div>
    </div>
  </div>

  <header class=\"header\">
    <div class=\"container\">
      <div class=\"site-header clearfix\">
        <div class=\"col-lg-3 col-md-3 col-sm-12 title-area\">
          <div class=\"site-title\" id=\"title\">
            <a href=\"/\" title=\"\">
              <h4>Keman<span>Racing !</span></h4>
            </a>
          </div>
        </div>
        <div class=\"col-lg-9 col-md-12 col-sm-12\">
          <div id=\"nav\" class=\"right\">
            <div class=\"container clearfix\">
              <ul id=\"jetmenu\" class=\"jetmenu blue\">
                <li class=\"active\"><a href=\"{{ asset('/') }}\">Acceuil</a>
                </li>
                <li><a href=\"/\">Nous connaître</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('/qsn') }}\">Qui sommes-nous ?</a></li>
                    <li><a href=\"{{ asset('/services') }}\">Nos services</a></li>
                    <li><a href=\"{{ asset('/equipe') }}\">Notre équipe</a></li>
                    <li><a href=\"{{ asset('/temoignages') }}\">Leurs témoignages</a></li>
                    <li><a href=\"{{ asset('/faq') }}\">FAQ</a></li>
                    <li><a href=\"{{ asset('/contact') }}\">Nous Contacter</a></li>
                  </ul>
                </li>
                <li><a href=\"{{ asset('#') }}\">Nos circuits</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('/circuits') }}\">Choisir votre circuit</a></li>
                    <li><a href=\"gallery-portfolio.html\">Gallerie</a></li>
                  </ul>
                </li>
                <li><a href=\"{{ asset('#') }}\">Nos voitures</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('/brands') }}\">Choisir votre voiture</a></li>
                    <li><a href=\"gallery-portfolio.html\">Gallerie</a></li>
                  </ul>
                <!-- <li><a href=\"{{ asset('/#') }}\">Votre réservation</a> A METTRE UNE FOIS L'USER CONNECTÉ.
                  <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('/circuits') }}\">Voir nos circuits</a></li>
                    <li><a href=\"{{ asset('/produit seul') }}\">Single Product</a></li>
                    <li><a href=\"{{ asset('/checkout') }}\">Votre panier</a></li>
                    <li><a href=\"{{ asset('/account') }}\">Account Page</a></li>
                    <li><a href=\"{{ asset('/support') }}\">Support Center</a></li>
                  </ul>
                </li> -->
                </li>
                <li><a href=\"{{ asset('/#') }}\">Votre compte</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('/connexion') }}\">Connexion</a></li>
                    <li><a href=\"{{ asset('/inscription') }}\">Inscription</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
{% endblock %}
{% block body %}

{% endblock %}

{% block footer %}
  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">A propos de nous</h4>
        <p>Keman Racing ! est une entreprise fictive dans le but d'un projet noté. Rien de tout ça est vrai !</p>
        <a class=\"button small\" href=\"{{ asset('/#') }}\">Lire la suite</a>
      </div>
      <!-- end widget -->
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Dernières nouveautés</h4>
        <ul class=\"recent_posts\">
          <li>
            <a href=\"{{ asset('/home1') }}\">
            <img src=\"img/recent_post_01.png\" alt=\"\" />Bientôt une nouvelle application mobile !</a>
            <a class=\"readmore\" href=\"{{ asset('/#') }}\">En savoir plus</a>
          </li>
          <li>
            <a href=\"{{ asset('/home1') }}#\">
            <img src=\"img/recent_post_02.png\" alt=\"\" />Bientôt de nouveaux modèles !</a>
            <a class=\"readmore\" href=\"{{ asset('/#') }}\">En savoir plus</a>
          </li>
        </ul>
        <!-- recent posts -->
      </div>
      <!-- end widget -->
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Restons en contact</h4>
        <ul class=\"contact_details\">
          <li><i class=\"fa fa-envelope-o\"></i>info@kemanracing.com</li>
          <li><i class=\"fa fa-phone-square\"></i>01 12 23 45 56</li>
          <li><i class=\"fa fa-home\"></i> Siège social, 1 Rue Pierre Louis Guyard, 78360 Montesson</li>
          <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> Voir sur Google Maps</a></li>
        </ul>
        <!-- contact_details -->
      </div>
      <!-- end widget -->
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Flickr Stream</h4>
        <ul class=\"flickr\">
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_01.jpg\"></a></li>
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_02.jpg\"></a></li>
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_03.jpg\"></a></li>
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_04.jpg\"></a></li>
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_05.jpg\"></a></li>
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_06.jpg\"></a></li>
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_07.jpg\"></a></li>
          <li><a href=\"{{ asset('/#') }}\"><img alt=\"\" src=\"img/flickr_08.jpg\"></a></li>
        </ul>
      </div>
      <!-- end widget -->
    </div>
    <!-- end container -->

    <div class=\"copyrights\">
      <div class=\"container\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 columns footer-left\">
          <p>Copyright © 2018 - Tous droits réservés.</p>
          <div class=\"credits\">
            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/maxibiz-bootstrap-business-template/
              Licensing information: https://templatemag.com/license/
            -->
            Crée pour un examen à l'<a href=\"{{ asset('/https://www.ifocop.fr/') }}\" target=\"blank\">IFOCOP</a>, PARIS.
          </div>
        </div>
        <!-- end widget -->
        <div class=\"col-lg-6 col-md-6 col-sm-12 columns text-right\">
          <div class=\"footer-menu right\">
            <ul class=\"menu\">
              <li><a href=\"{{ asset('/index') }}\">Home</a></li>
              <li><a href=\"{{ asset('/about') }}\">A propos</a></li>
              <li><a href=\"{{ asset('/#') }}\">Plan du site</a></li>
              <li><a href=\"{{ asset('/#') }}\">CGV</a></li>
              <li><a href=\"{{ asset('/contact') }}\">Contact</a></li>
            </ul>
          </div>
        </div>
        <!-- end large-6 -->
      </div>
      <!-- end container -->
    </div>
    <!-- end copyrights -->
  </footer>
{% endblock %}

{% block javascripts %}
  <div class=\"dmtop\">Scroll to Top</div>

  <!-- JavaScript Libraries -->
  <script src=\"{{ asset('/assets/lib/jquery/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/php-mail-form/validate.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/prettyphoto/js/prettyphoto.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/isotope/isotope.min.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/hover/hoverdir.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/hover/hoverex.min.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/unveil-effects/unveil-effects.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/owl-carousel/owl-carousel.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/jetmenu/jetmenu.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/animate-enhanced/animate-enhanced.min.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/jigowatt/jigowatt.js') }}\"></script>
  <script src=\"{{ asset('/assets/lib/easypiechart/easypiechart.min.js') }}\"></script>

  <script src=\"{{ asset('/assets/js/main.js') }}\"></script>
{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\mbouantoun\\Desktop\\Monza-master\\Monza-master\\app\\Resources\\views\\base.html.twig");
    }
}
