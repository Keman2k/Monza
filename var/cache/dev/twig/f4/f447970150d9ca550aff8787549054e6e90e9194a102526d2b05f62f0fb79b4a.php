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
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        // line 171
        echo "
";
        // line 172
        $this->displayBlock('javascripts', $context, $blocks);
        // line 190
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
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/logo.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"https://fonts.googleapis.com/css?family=Ruda:400,900,700\" rel=\"stylesheet\">
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/prettyphoto/css/prettyphoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/hover/hoverex-all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jetmenu/jetmenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/owl-carousel/owl-carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/colors/blue.css"), "html", null, true);
        echo "\">
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
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
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\">Acceuil</a>
                </li>
                <li><a href=\"/\">Nous connaître</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/qsn"), "html", null, true);
        echo "\">Qui sommes-nous ?</a></li>
                    <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/services"), "html", null, true);
        echo "\">Nos services</a></li>
                    <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/equipe"), "html", null, true);
        echo "\">Notre équipe</a></li>
                    <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/temoignages"), "html", null, true);
        echo "\">Leurs témoignages</a></li>
                    <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/faq"), "html", null, true);
        echo "\">FAQ</a></li>
                    <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/contact"), "html", null, true);
        echo "\">Nous Contacter</a></li>
                  </ul>
                </li>
                <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/circuits"), "html", null, true);
        echo "\">Nos circuits</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/circuits"), "html", null, true);
        echo "\">Choisir votre circuit</a></li>
                    <li><a href=\"gallery-portfolio.html\">Gallerie</a></li>
                  </ul>
                </li>
                <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/brands"), "html", null, true);
        echo "\">Nos voitures</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/brands"), "html", null, true);
        echo "\">Choisir votre voiture</a></li>
                    <li><a href=\"gallery-portfolio.html\">Gallerie</a></li>
                  </ul>
                <!-- <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">Votre réservation</a> A METTRE UNE FOIS L'USER CONNECTÉ.
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/circuits"), "html", null, true);
        echo "\">Voir nos circuits</a></li>
                    <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/produit seul"), "html", null, true);
        echo "\">Single Product</a></li>
                    <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/checkout"), "html", null, true);
        echo "\">Votre panier</a></li>
                    <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/account"), "html", null, true);
        echo "\">Account Page</a></li>
                    <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/support"), "html", null, true);
        echo "\">Support Center</a></li>
                  </ul>
                </li> -->
                </li>
                <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/inscription"), "html", null, true);
        echo "\">Votre compte</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/connexion"), "html", null, true);
        echo "\">Connexion</a></li>
                    <li><a href=\"";
        // line 88
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

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 104
        echo "  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">A propos de nous</h4>
        <p>Keman Racing ! est une entreprise fictive dans le but d'un projet noté. Rien de tout ça est vrai !</p>
      </div>
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Dernières nouveautés</h4>
        <ul class=\"recent_posts\">
          <li>
            <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/home1"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/recent_post_01.png"), "html", null, true);
        echo "\" alt=\"\" /> Bientôt une nouvelle application mobile !</a>
            <a class=\"readmore\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">En savoir plus</a>
          </li>
          <li>
            <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/home1"), "html", null, true);
        echo "#\">
            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/recent_post_02.png"), "html", null, true);
        echo "\" alt=\"\" /> Bientôt de nouveaux modèles !</a>
            <a class=\"readmore\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">En savoir plus</a>
          </li>
        </ul>
      </div>
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\"> Restons en contact</h4>
        <ul class=\"contact_details\">
          <li><i class=\"fa fa-envelope-o\"></i> info@kemanracing.com</li>
          <li><i class=\"fa fa-phone-square\"></i> 01 12 23 45 56</li>
          <li><i class=\"fa fa-home\"></i> Siège social, 1 Rue Pierre Louis Guyard, 78360 Montesson</li>
          <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> Voir sur Google Maps</a></li>
        </ul>
      </div>
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\"></h4>
        <ul class=\"flickr\">
          <li><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_01.jpg\"></a></li>
          <li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_02.jpg\"></a></li>
          <li><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_03.jpg\"></a></li>
          <li><a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_04.jpg\"></a></li>
          <li><a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_05.jpg\"></a></li>
          <li><a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_06.jpg\"></a></li>
          <li><a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_07.jpg\"></a></li>
          <li><a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\"><img alt=\"\" src=\"img/flickr_08.jpg\"></a></li>
        </ul>
      </div>
    </div>
    <div class=\"copyrights\">
      <div class=\"container\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 columns footer-left\">
          <p>Copyright © 2018 - Tous droits réservés.</p>
          <div class=\"credits\">
            Crée pour un examen à l'<a href=\"https://www.ifocop.fr/\" target=\"blank\">IFOCOP</a>, PARIS.
          </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12 columns text-right\">
          <div class=\"footer-menu right\">
            <ul class=\"menu\">
              <li><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/index"), "html", null, true);
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/about"), "html", null, true);
        echo "\">A propos</a></li>
              <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">Plan du site</a></li>
              <li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/#"), "html", null, true);
        echo "\">CGV</a></li>
              <li><a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/contact"), "html", null, true);
        echo "\">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "  <div class=\"dmtop\">Scroll to Top</div>
  <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/php-mail-form/validate.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/prettyphoto/js/prettyphoto.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/isotope/isotope.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/hover/hoverdir.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/hover/hoverex.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/unveil-effects/unveil-effects.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/owl-carousel/owl-carousel.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jetmenu/jetmenu.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/animate-enhanced/animate-enhanced.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/jigowatt/jigowatt.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/lib/easypiechart/easypiechart.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 188
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
        return array (  530 => 188,  525 => 186,  521 => 185,  517 => 184,  513 => 183,  509 => 182,  505 => 181,  501 => 180,  497 => 179,  493 => 178,  489 => 177,  485 => 176,  481 => 175,  477 => 174,  474 => 173,  465 => 172,  447 => 163,  443 => 162,  439 => 161,  435 => 160,  431 => 159,  413 => 144,  409 => 143,  405 => 142,  401 => 141,  397 => 140,  393 => 139,  389 => 138,  385 => 137,  366 => 121,  362 => 120,  358 => 119,  352 => 116,  348 => 115,  344 => 114,  332 => 104,  323 => 103,  312 => 100,  303 => 99,  282 => 88,  278 => 87,  273 => 85,  266 => 81,  262 => 80,  258 => 79,  254 => 78,  250 => 77,  245 => 75,  239 => 72,  234 => 70,  227 => 66,  222 => 64,  216 => 61,  212 => 60,  208 => 59,  204 => 58,  200 => 57,  196 => 56,  189 => 52,  159 => 24,  150 => 23,  137 => 19,  133 => 18,  129 => 17,  125 => 16,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  104 => 10,  99 => 7,  90 => 6,  72 => 5,  60 => 190,  58 => 172,  55 => 171,  53 => 103,  50 => 102,  48 => 99,  46 => 23,  43 => 22,  41 => 6,  37 => 5,  31 => 1,);
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
  <link href=\"{{ asset('/assets/img/logo.png') }}\" rel=\"icon\">
  <link href=\"https://fonts.googleapis.com/css?family=Ruda:400,900,700\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/prettyphoto/css/prettyphoto.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/hover/hoverex-all.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/jetmenu/jetmenu.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('/assets/lib/owl-carousel/owl-carousel.css') }}\" rel=\"stylesheet\">
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
                <li><a href=\"{{ asset('/circuits') }}\">Nos circuits</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('/circuits') }}\">Choisir votre circuit</a></li>
                    <li><a href=\"gallery-portfolio.html\">Gallerie</a></li>
                  </ul>
                </li>
                <li><a href=\"{{ asset('/brands') }}\">Nos voitures</a>
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
                <li><a href=\"{{ asset('/inscription') }}\">Votre compte</a>
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
      </div>
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\">Dernières nouveautés</h4>
        <ul class=\"recent_posts\">
          <li>
            <a href=\"{{ asset('/home1') }}\">
            <img src=\"{{ asset('assets/img/recent_post_01.png') }}\" alt=\"\" /> Bientôt une nouvelle application mobile !</a>
            <a class=\"readmore\" href=\"{{ asset('/#') }}\">En savoir plus</a>
          </li>
          <li>
            <a href=\"{{ asset('/home1') }}#\">
            <img src=\"{{ asset('assets/img/recent_post_02.png') }}\" alt=\"\" /> Bientôt de nouveaux modèles !</a>
            <a class=\"readmore\" href=\"{{ asset('/#') }}\">En savoir plus</a>
          </li>
        </ul>
      </div>
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\"> Restons en contact</h4>
        <ul class=\"contact_details\">
          <li><i class=\"fa fa-envelope-o\"></i> info@kemanracing.com</li>
          <li><i class=\"fa fa-phone-square\"></i> 01 12 23 45 56</li>
          <li><i class=\"fa fa-home\"></i> Siège social, 1 Rue Pierre Louis Guyard, 78360 Montesson</li>
          <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> Voir sur Google Maps</a></li>
        </ul>
      </div>
      <div class=\"widget col-lg-3 col-md-3 col-sm-12\">
        <h4 class=\"title\"></h4>
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
    </div>
    <div class=\"copyrights\">
      <div class=\"container\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 columns footer-left\">
          <p>Copyright © 2018 - Tous droits réservés.</p>
          <div class=\"credits\">
            Crée pour un examen à l'<a href=\"https://www.ifocop.fr/\" target=\"blank\">IFOCOP</a>, PARIS.
          </div>
        </div>
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
      </div>
    </div>
  </footer>
{% endblock %}

{% block javascripts %}
  <div class=\"dmtop\">Scroll to Top</div>
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
", "base.html.twig", "C:\\Users\\mbouantoun\\Documents\\Monza\\app\\Resources\\views\\base.html.twig");
    }
}
