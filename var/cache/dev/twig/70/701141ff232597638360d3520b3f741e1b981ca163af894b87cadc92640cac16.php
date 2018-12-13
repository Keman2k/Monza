<?php

/* @Monza/Default/index.html.twig */
class __TwigTemplate_0ec93b71cb3217c7d7fa8499301d84ac455d11429afa65e643b821c172857312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Monza/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Keman Racing";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <section id=\"intro\">
    <div class=\"container\">
      <div class=\"ror\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h1>Bienvenue sur Keman Racing !</h1>
          <p>Vous avez toujours rêvé de conduire les plus belles voitures sur les plus beaux circuits ? Vous êtes au bon endroit !</p>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section1\">
    <div class=\"container\">
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <div class=\"servicebox text-center\">
          <div class=\"service-icon\">
            <div class=\"dm-icon-effect-1\" data-effect=\"slide-left\">
              <a href=\"/circuits\" class=\"\"> <img src=\"https://img.icons8.com/ios/100/000000/new-zealand-south-island.png\"> </a>
            </div>
            <div class=\"servicetitle\">
              <h4>Les plus beaux circuits !</h4>
              <hr>
            </div>
            <p>Vous aurez la chance de rouler sur les plus beaux tracés ! Que ce soit Monza, Imola, Brands Hatch, Spa Francorchamps, Donington, Fiorano, Nordschleife, Paul Ricard, et bien d'autres !</p>
          </div>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <div class=\"servicebox text-center\">
          <div class=\"service-icon\">
            <div class=\"dm-icon-effect-1\" data-effect=\"slide-bottom\">
              <a href=\"/brands\" class=\"\"> <img src=\"https://img.icons8.com/color/100/000000/f1-race-car-side-view.png\"> </a>
            </div>
            <div class=\"servicetitle\">
              <h4>Les plus belles voitures !</h4>
              <hr>
            </div>
            <p>Prenez place au bord d'une monoplace Ferrari, d'une GT3 Lamborghini de rêve et des plus puissantes véhicules comme la Koenigsegg one:1 ! </p>
          </div>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <div class=\"servicebox text-center\">
          <div class=\"service-icon\">
            <div class=\"dm-icon-effect-1\" data-effect=\"slide-right\">
              <a href=\"/tuteurs\" class=\"\"> <img src=\"https://img.icons8.com/ios/100/000000/headset-filled.png\"> </a>
            </div>
            <div class=\"servicetitle\">
              <h4>Des tuteurs professionnels !</h4>
              <hr>
            </div>
            <p>Notre équipe composée de professionnels passionés seront là pour vous aider lors des briefings à mieux dompter ces machines impressionnantes ! Ils connaissent leurs tracés sur le bouts des doigts ! </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section5\">
    <div class=\"container\">
      <div class=\"col-lg-6 col-md-6 col-sm-12 columns\">
        <div class=\"widget\" data-effect=\"slide-left\">
          <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/casque.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
      </div>
      <div class=\"col-lg-6 col-md-6 col-sm-12 columns\">
        <div class=\"widget clearfix\">
          <div class=\"services_lists\">

            <div class=\"services_lists_boxes clearfix\">
              <div class=\"col-lg-3 col-md-3 col-sm-12\">
                <div class=\"services_lists_boxes_icon\" data-effect=\"slide-bottom\">
                  <a href=\"/users\" class=\"\"> <i class=\"active dm-icon-medium fa fa-key fa-2x\"></i> </a>
                </div>
              </div>
              <div class=\"col-lg-9 col-md-9 col-sm-9\">
                <div class=\"servicetitle\">
                  <h4>Créer votre compte</h4>
                  <hr>
                </div>
                <p>Commencez par vous inscrire, remplissez le formulaire, validez le lien que vous recevrez par mail </p>
              </div>
            </div>

            <div class=\"services_lists_boxes clearfix\">
              <div class=\"col-lg-3 col-md-3 col-sm-12\">
                <div class=\"services_lists_boxes_icon\" data-effect=\"slide-bottom\">
                  <a href=\"#\" class=\"\"> <i class=\"active dm-icon-medium fa fa-car fa-2x\"></i> </a>
                </div>
              </div>
              <div class=\"col-lg-9 col-md-9 col-sm-9\">
                <div class=\"servicetitle\">
                  <h4>Choisissez votre tracé et votre véhicule</h4>
                  <hr>
                </div>
                <p>Vous trouverez votre choix parmi notre large gamme de circuits a travers l'Europe (principalement Italie, Angleterre, France et Allemagne). Nous vous proposons également une grande gamme de marques (Ferrari, Mercedes-Benz, Porsche, Lamborghini, Pagani, etc...)</p>
              </div>
            </div>


            <div class=\"services_lists_boxes clearfix\">
              <div class=\"col-lg-3 col-md-3 col-sm-12\">
                <div class=\"services_lists_boxes_icon_none\" data-effect=\"slide-bottom\">
                  <a href=\"#\" class=\"\"> <i class=\"active dm-icon-medium fa fa-dollar fa-2x\"></i> </a>
                </div>
              </div>
              <div class=\"col-lg-9 col-md-9 col-sm-9\">
                <div class=\"servicetitle\">
                  <h4>Confirmation de la date et de la réservation</h4>
                  <hr>
                </div>
                <p>Une fois la date choisie et la réservation confirmée, vous n'aurez plus qu'à vous rendre sur la piste !</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section4 text-center\">
    <div class=\"general-title\">
      <h3>Nos plus beaux modèles !</h3>
      <hr>
    </div>
    <div class=\"portfolio-wrapper\">
      <div id=\"owl-demo\" class=\"owl-carousel\">

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Ferrari/F40/5.jpg"), "html", null, true);
        echo "\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Ferrari/F40/5.jpg') }}\" data-src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Ferrari/F40/5.jpg"), "html", null, true);
        echo "\" alt=\"F40\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Ferrari/F430/2.jpg"), "html", null, true);
        echo "\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Ferrari/F430/2.jpg') }}\" data-src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Ferrari/F430/2.jpg"), "html", null, true);
        echo "\" alt=\"F430\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Ferrari/LaFerrari/1.jpg"), "html", null, true);
        echo "\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Ferrari/LaFerrari/1.jpg') }}\" data-src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Ferrari/LaFerrari/1.jpg"), "html", null, true);
        echo "\" alt=\"LaFerrari\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/AlfaRomeo/1.jpg"), "html", null, true);
        echo "\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/AlfaRomeo/1.jpg') }}\" data-src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/AlfaRomeo/1.jpg"), "html", null, true);
        echo "\" alt=\"Alfa Roméo\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Koenigsegg/AgeraRS/2.jpg"), "html", null, true);
        echo "\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Koenigsegg/AgeraRS/2.jpg') }}\" data-src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Koenigsegg/AgeraRS/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Pagani/Zonda Revolucion/6.jpg"), "html", null, true);
        echo "\">Pagani Zonda Revolucion<img class=\"lazyOwl\" src=\"assets/img/voitures/Pagani/Zonda Revolucion/6.jpg') }}\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Pagani/Zonda Revolucion/6.jpg"), "html", null, true);
        echo "\" alt=\"Pagani Zonda Revolucion\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Maserati/MC12/1.jpg"), "html", null, true);
        echo "\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Maserati/MC12/1.jpg') }}\" data-src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voitures/Maserati/MC12/1.jpg"), "html", null, true);
        echo "\" alt=\"Maserati MC 12\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

      </div>
    </div>
    <a class=\"button large\" href=\"home3.html#\">Voir toutes les marques</a>
  </section>

  <section class=\"section2\">
    <div class=\"container\">
      <div class=\"message text-center\">
        <h2 class=\"big-title\">Donnez <span> votre </span> avis !</h2>
        <p class=\"small-title\">Dites nous tout !</p>
        <a class=\"button large\" href=\"#\">A propos des formateurs</a> <a class=\" dmbutton large\" href=\"#\">A propos de votre expérience</a>
      </div>
    </div>
  </section>

  <section class=\"section1 text-center\">
    <div class=\"container\">
      <div class=\"general-title\">
        <h3>Nos forfaits</h3>
        <hr>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-effect=\"slide-bottom\">
          <div class=\"custom-box\">
            <div class=\"servicetitle\">
              <h4>Novice</h4>
              <hr>
            </div>
            <div class=\"icn-main-container\">
              <span class=\"icn-container\">30 €</span>
            </div>
            <p>Pour ceux qui ont envie d'apprendre à conduire sur circuit à un tarif abordable</p>
            <ul class=\"pricing\">
              <li>1 heure de briefing</li>
              <li>1 tour vidéo du circuit</li>
              <li>2 tours de chauffe avec tuteur</li>
              <li>5 tours seuls ou 7 minutes</li>
              <li>Montage vidéo (caméra embarquée) payant</li>
              <li>Combinaison, casque et gants fournis</li>
              <li>Délivrance d'un certificat de réussite niveau Novice</li>
            </ul>
            <a class=\"btn btn-primary\" href=\"#\">Je valide</a>
          </div>
        </div>

        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-effect=\"slide-bottom\">
          <div class=\"custom-box\">
            <div class=\"servicetitle\">
              <h4>Amateur</h4>
              <hr>
            </div>
            <div class=\"icn-main-container\">
              <span class=\"icn-container\">60 €</span>
            </div>
            <p>Pour ceux qui ont déjà roulé sur circuit et qui veulent repousser leurs limites</p>
            <ul class=\"pricing\">
              <li>1 heure de briefing</li>
              <li>1 tour vidéo du circuit</li>
              <li>1 tour de chauffe avec tuteur</li>
              <li>10 tours seuls ou 15 minutes</li>
              <li>Montage vidéo (caméra embarquée) offert.</li>
              <li>Combinaison, casque et gants fournis</li>
              <li>Délivrance d'un certificat de réussite niveau Amateur</li>
            </ul>
            <a class=\"btn btn-primary\" href=\"#\">Je valide</a>
          </div>
        </div>

        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-effect=\"slide-bottom\">
          <div class=\"custom-box\">
            <div class=\"servicetitle\">
              <h4>Expert</h4>
              <hr>
            </div>
            <div class=\"icn-main-container\">
              <span class=\"icn-container\">100 €</span>
            </div>
            <p>Pour ceux qui ont l'habitude de rouler sur circuit et ceux qui se veulent se mesurer aux meilleurs</p>
            <ul class=\"pricing\">
              <li>1 heure de briefing</li>
              <li>1 tour vidéo du circuit</li>
              <li>1 tour de chauffe avec tuteur</li>
              <li>20 tours seuls ou 30 minutes</li>
              <li>Montage vidéo (caméra embarquée) offert.</li>
              <li>Combinaison, casque et gants fournis</li>
              <li>Délivrance d'un certificat de réussite niveau Expert</li>
            </ul>
            <a class=\"btn btn-primary\" href=\"#\">Je valide</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class=\"section3\">
    <div class=\"container withpadding\">
      <div class=\"message\">
        <div class=\"col-lg-9 col-md-9 col-sm-9\">
          <h3>Grab the attention of your customers!</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s..</p>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-12\">
          <a class=\"dmbutton button large pull-right\" href=\"#\"><i class=\"fa fa-download\"></i> GET A QUOTE</a>
        </div>
      </div>
    </div>
  </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Monza/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 203,  305 => 202,  290 => 192,  277 => 182,  273 => 181,  260 => 171,  256 => 170,  243 => 160,  239 => 159,  226 => 149,  222 => 148,  209 => 138,  205 => 137,  134 => 69,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Keman Racing{% endblock %}
{% block body %}
  <section id=\"intro\">
    <div class=\"container\">
      <div class=\"ror\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h1>Bienvenue sur Keman Racing !</h1>
          <p>Vous avez toujours rêvé de conduire les plus belles voitures sur les plus beaux circuits ? Vous êtes au bon endroit !</p>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section1\">
    <div class=\"container\">
      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <div class=\"servicebox text-center\">
          <div class=\"service-icon\">
            <div class=\"dm-icon-effect-1\" data-effect=\"slide-left\">
              <a href=\"/circuits\" class=\"\"> <img src=\"https://img.icons8.com/ios/100/000000/new-zealand-south-island.png\"> </a>
            </div>
            <div class=\"servicetitle\">
              <h4>Les plus beaux circuits !</h4>
              <hr>
            </div>
            <p>Vous aurez la chance de rouler sur les plus beaux tracés ! Que ce soit Monza, Imola, Brands Hatch, Spa Francorchamps, Donington, Fiorano, Nordschleife, Paul Ricard, et bien d'autres !</p>
          </div>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <div class=\"servicebox text-center\">
          <div class=\"service-icon\">
            <div class=\"dm-icon-effect-1\" data-effect=\"slide-bottom\">
              <a href=\"/brands\" class=\"\"> <img src=\"https://img.icons8.com/color/100/000000/f1-race-car-side-view.png\"> </a>
            </div>
            <div class=\"servicetitle\">
              <h4>Les plus belles voitures !</h4>
              <hr>
            </div>
            <p>Prenez place au bord d'une monoplace Ferrari, d'une GT3 Lamborghini de rêve et des plus puissantes véhicules comme la Koenigsegg one:1 ! </p>
          </div>
        </div>
      </div>

      <div class=\"col-lg-4 col-md-4 col-sm-4\">
        <div class=\"servicebox text-center\">
          <div class=\"service-icon\">
            <div class=\"dm-icon-effect-1\" data-effect=\"slide-right\">
              <a href=\"/tuteurs\" class=\"\"> <img src=\"https://img.icons8.com/ios/100/000000/headset-filled.png\"> </a>
            </div>
            <div class=\"servicetitle\">
              <h4>Des tuteurs professionnels !</h4>
              <hr>
            </div>
            <p>Notre équipe composée de professionnels passionés seront là pour vous aider lors des briefings à mieux dompter ces machines impressionnantes ! Ils connaissent leurs tracés sur le bouts des doigts ! </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section5\">
    <div class=\"container\">
      <div class=\"col-lg-6 col-md-6 col-sm-12 columns\">
        <div class=\"widget\" data-effect=\"slide-left\">
          <img src=\"{{ asset('assets/img/casque.jpg') }}\" alt=\"\">
        </div>
      </div>
      <div class=\"col-lg-6 col-md-6 col-sm-12 columns\">
        <div class=\"widget clearfix\">
          <div class=\"services_lists\">

            <div class=\"services_lists_boxes clearfix\">
              <div class=\"col-lg-3 col-md-3 col-sm-12\">
                <div class=\"services_lists_boxes_icon\" data-effect=\"slide-bottom\">
                  <a href=\"/users\" class=\"\"> <i class=\"active dm-icon-medium fa fa-key fa-2x\"></i> </a>
                </div>
              </div>
              <div class=\"col-lg-9 col-md-9 col-sm-9\">
                <div class=\"servicetitle\">
                  <h4>Créer votre compte</h4>
                  <hr>
                </div>
                <p>Commencez par vous inscrire, remplissez le formulaire, validez le lien que vous recevrez par mail </p>
              </div>
            </div>

            <div class=\"services_lists_boxes clearfix\">
              <div class=\"col-lg-3 col-md-3 col-sm-12\">
                <div class=\"services_lists_boxes_icon\" data-effect=\"slide-bottom\">
                  <a href=\"#\" class=\"\"> <i class=\"active dm-icon-medium fa fa-car fa-2x\"></i> </a>
                </div>
              </div>
              <div class=\"col-lg-9 col-md-9 col-sm-9\">
                <div class=\"servicetitle\">
                  <h4>Choisissez votre tracé et votre véhicule</h4>
                  <hr>
                </div>
                <p>Vous trouverez votre choix parmi notre large gamme de circuits a travers l'Europe (principalement Italie, Angleterre, France et Allemagne). Nous vous proposons également une grande gamme de marques (Ferrari, Mercedes-Benz, Porsche, Lamborghini, Pagani, etc...)</p>
              </div>
            </div>


            <div class=\"services_lists_boxes clearfix\">
              <div class=\"col-lg-3 col-md-3 col-sm-12\">
                <div class=\"services_lists_boxes_icon_none\" data-effect=\"slide-bottom\">
                  <a href=\"#\" class=\"\"> <i class=\"active dm-icon-medium fa fa-dollar fa-2x\"></i> </a>
                </div>
              </div>
              <div class=\"col-lg-9 col-md-9 col-sm-9\">
                <div class=\"servicetitle\">
                  <h4>Confirmation de la date et de la réservation</h4>
                  <hr>
                </div>
                <p>Une fois la date choisie et la réservation confirmée, vous n'aurez plus qu'à vous rendre sur la piste !</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section4 text-center\">
    <div class=\"general-title\">
      <h3>Nos plus beaux modèles !</h3>
      <hr>
    </div>
    <div class=\"portfolio-wrapper\">
      <div id=\"owl-demo\" class=\"owl-carousel\">

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"{{ asset('assets/img/voitures/Ferrari/F40/5.jpg') }}\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Ferrari/F40/5.jpg') }}\" data-src=\"{{ asset('assets/img/voitures/Ferrari/F40/5.jpg') }}\" alt=\"F40\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"{{ asset('assets/img/voitures/Ferrari/F430/2.jpg') }}\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Ferrari/F430/2.jpg') }}\" data-src=\"{{ asset('assets/img/voitures/Ferrari/F430/2.jpg') }}\" alt=\"F430\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"{{ asset('assets/img/voitures/Ferrari/LaFerrari/1.jpg') }}\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Ferrari/LaFerrari/1.jpg') }}\" data-src=\"{{ asset('assets/img/voitures/Ferrari/LaFerrari/1.jpg') }}\" alt=\"LaFerrari\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a href=\"{{ asset('assets/img/voitures/AlfaRomeo/1.jpg') }}\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/AlfaRomeo/1.jpg') }}\" data-src=\"{{ asset('assets/img/voitures/AlfaRomeo/1.jpg') }}\" alt=\"Alfa Roméo\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"{{ asset('assets/img/voitures/Koenigsegg/AgeraRS/2.jpg') }}\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Koenigsegg/AgeraRS/2.jpg') }}\" data-src=\"{{ asset('assets/img/voitures/Koenigsegg/AgeraRS/2.jpg') }}\" alt=\"\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"{{ asset('assets/img/voitures/Pagani/Zonda Revolucion/6.jpg') }}\">Pagani Zonda Revolucion<img class=\"lazyOwl\" src=\"assets/img/voitures/Pagani/Zonda Revolucion/6.jpg') }}\" data-src=\"{{ asset('assets/img/voitures/Pagani/Zonda Revolucion/6.jpg') }}\" alt=\"Pagani Zonda Revolucion\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

        <div class=\"item\">
          <a data-rel=\"prettyPhoto\" href=\"{{ asset('assets/img/voitures/Maserati/MC12/1.jpg') }}\">
            <img class=\"lazyOwl\" src=\"assets/img/voitures/Maserati/MC12/1.jpg') }}\" data-src=\"{{ asset('assets/img/voitures/Maserati/MC12/1.jpg') }}\" alt=\"Maserati MC 12\">
            <div>
                  <small>lien cliquable vers la fiche produit.</small>
                  <span>Nom de la voiture ou du tracé</span>
                  <i class=\"fa fa-search\"></i>
              </div>
          </a>
        </div>

      </div>
    </div>
    <a class=\"button large\" href=\"home3.html#\">Voir toutes les marques</a>
  </section>

  <section class=\"section2\">
    <div class=\"container\">
      <div class=\"message text-center\">
        <h2 class=\"big-title\">Donnez <span> votre </span> avis !</h2>
        <p class=\"small-title\">Dites nous tout !</p>
        <a class=\"button large\" href=\"#\">A propos des formateurs</a> <a class=\" dmbutton large\" href=\"#\">A propos de votre expérience</a>
      </div>
    </div>
  </section>

  <section class=\"section1 text-center\">
    <div class=\"container\">
      <div class=\"general-title\">
        <h3>Nos forfaits</h3>
        <hr>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-effect=\"slide-bottom\">
          <div class=\"custom-box\">
            <div class=\"servicetitle\">
              <h4>Novice</h4>
              <hr>
            </div>
            <div class=\"icn-main-container\">
              <span class=\"icn-container\">30 €</span>
            </div>
            <p>Pour ceux qui ont envie d'apprendre à conduire sur circuit à un tarif abordable</p>
            <ul class=\"pricing\">
              <li>1 heure de briefing</li>
              <li>1 tour vidéo du circuit</li>
              <li>2 tours de chauffe avec tuteur</li>
              <li>5 tours seuls ou 7 minutes</li>
              <li>Montage vidéo (caméra embarquée) payant</li>
              <li>Combinaison, casque et gants fournis</li>
              <li>Délivrance d'un certificat de réussite niveau Novice</li>
            </ul>
            <a class=\"btn btn-primary\" href=\"#\">Je valide</a>
          </div>
        </div>

        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-effect=\"slide-bottom\">
          <div class=\"custom-box\">
            <div class=\"servicetitle\">
              <h4>Amateur</h4>
              <hr>
            </div>
            <div class=\"icn-main-container\">
              <span class=\"icn-container\">60 €</span>
            </div>
            <p>Pour ceux qui ont déjà roulé sur circuit et qui veulent repousser leurs limites</p>
            <ul class=\"pricing\">
              <li>1 heure de briefing</li>
              <li>1 tour vidéo du circuit</li>
              <li>1 tour de chauffe avec tuteur</li>
              <li>10 tours seuls ou 15 minutes</li>
              <li>Montage vidéo (caméra embarquée) offert.</li>
              <li>Combinaison, casque et gants fournis</li>
              <li>Délivrance d'un certificat de réussite niveau Amateur</li>
            </ul>
            <a class=\"btn btn-primary\" href=\"#\">Je valide</a>
          </div>
        </div>

        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\" data-effect=\"slide-bottom\">
          <div class=\"custom-box\">
            <div class=\"servicetitle\">
              <h4>Expert</h4>
              <hr>
            </div>
            <div class=\"icn-main-container\">
              <span class=\"icn-container\">100 €</span>
            </div>
            <p>Pour ceux qui ont l'habitude de rouler sur circuit et ceux qui se veulent se mesurer aux meilleurs</p>
            <ul class=\"pricing\">
              <li>1 heure de briefing</li>
              <li>1 tour vidéo du circuit</li>
              <li>1 tour de chauffe avec tuteur</li>
              <li>20 tours seuls ou 30 minutes</li>
              <li>Montage vidéo (caméra embarquée) offert.</li>
              <li>Combinaison, casque et gants fournis</li>
              <li>Délivrance d'un certificat de réussite niveau Expert</li>
            </ul>
            <a class=\"btn btn-primary\" href=\"#\">Je valide</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class=\"section3\">
    <div class=\"container withpadding\">
      <div class=\"message\">
        <div class=\"col-lg-9 col-md-9 col-sm-9\">
          <h3>Grab the attention of your customers!</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s..</p>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-12\">
          <a class=\"dmbutton button large pull-right\" href=\"#\"><i class=\"fa fa-download\"></i> GET A QUOTE</a>
        </div>
      </div>
    </div>
  </section>

{% endblock %}", "@Monza/Default/index.html.twig", "C:\\Users\\mbouantoun\\Documents\\Monza\\src\\MonzaBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
