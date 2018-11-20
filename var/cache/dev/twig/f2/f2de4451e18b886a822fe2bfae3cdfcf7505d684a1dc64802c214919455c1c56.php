<?php

/* inc/nav.inc.html */
class __TwigTemplate_4095593111ec97fe07da91f8ac028c639b1545d5fe7d864dfbe977123969fe9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.inc.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.inc.html"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar navbar-light\" style=\"background-color: rgb(38, 34, 35)\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\">
  <a class=\"navbar-brand\" id=\"acceuil\" href=\"index.php\"><img src=\"assets/img/logo_nav.jpg\"></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Par marque</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"ferrari.php\">Ferrari</a>
          <a class=\"dropdown-item\" href=\"lamborghini.php\">Lamborghini</a>
          <a class=\"dropdown-item\" href=\"maserati.php\">Masérati</a>
          <a class=\"dropdown-item\" href=\"pagani.php\">Pagani</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Par catégorie</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"formule1.php\">Formule 1</a>
          <a class=\"dropdown-item\" href=\"gt3.php\">GT3</a>
          <a class=\"dropdown-item\" href=\"gt.php\">GT</a>
      </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Par pays</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"allemagne.php\">Allemagne</a>
          <a class=\"dropdown-item\" href=\"angleterre.php\">Angleterre</a>
          <a class=\"dropdown-item\" href=\"france.php\">France</a>
          <a class=\"dropdown-item\" href=\"italie.php\">Italie</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Menu</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"inscription.php\">Inscription</a>
          <a class=\"dropdown-item\" href=\"connexion.php\">Connexion</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"qui_sommes_nous.php\">Nous contacter</a>
        </div>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Je recherche...\" aria-label=\"Search\">
      <button class=\"btn btn-outline-warning my-2 my-sm-2\" id=\"valider\" type=\"submit\">Valider</button>
    </form>
  </div>
</nav>

<!-- <img src=\"assets/img/logo.jpg\" class=\"logoNav\"> logo à intégrer dans la nav -->
<!-- style=\"rgb(247, 234, 68)\"; écriture à mettre dans la nav-->
<!-- style=\"color: rgb(247, 234, 68);\"> -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/nav.inc.html";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar navbar-light\" style=\"background-color: rgb(38, 34, 35)\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\">
  <a class=\"navbar-brand\" id=\"acceuil\" href=\"index.php\"><img src=\"assets/img/logo_nav.jpg\"></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Par marque</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"ferrari.php\">Ferrari</a>
          <a class=\"dropdown-item\" href=\"lamborghini.php\">Lamborghini</a>
          <a class=\"dropdown-item\" href=\"maserati.php\">Masérati</a>
          <a class=\"dropdown-item\" href=\"pagani.php\">Pagani</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Par catégorie</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"formule1.php\">Formule 1</a>
          <a class=\"dropdown-item\" href=\"gt3.php\">GT3</a>
          <a class=\"dropdown-item\" href=\"gt.php\">GT</a>
      </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Par pays</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"allemagne.php\">Allemagne</a>
          <a class=\"dropdown-item\" href=\"angleterre.php\">Angleterre</a>
          <a class=\"dropdown-item\" href=\"france.php\">France</a>
          <a class=\"dropdown-item\" href=\"italie.php\">Italie</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Menu</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"inscription.php\">Inscription</a>
          <a class=\"dropdown-item\" href=\"connexion.php\">Connexion</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"qui_sommes_nous.php\">Nous contacter</a>
        </div>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Je recherche...\" aria-label=\"Search\">
      <button class=\"btn btn-outline-warning my-2 my-sm-2\" id=\"valider\" type=\"submit\">Valider</button>
    </form>
  </div>
</nav>

<!-- <img src=\"assets/img/logo.jpg\" class=\"logoNav\"> logo à intégrer dans la nav -->
<!-- style=\"rgb(247, 234, 68)\"; écriture à mettre dans la nav-->
<!-- style=\"color: rgb(247, 234, 68);\"> -->", "inc/nav.inc.html", "H:\\Java\\workspaces\\monza\\app\\Resources\\views\\inc\\nav.inc.html");
    }
}
