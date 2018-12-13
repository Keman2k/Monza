<?php

/* @Monza/Default/inscription.html.twig */
class __TwigTemplate_3e82e0642fd11b00f67b190b45c38df8cc821968f5be98ef5d6305491003d13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Monza/Default/inscription.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <section class=\"section1\">
    <div class=\"container clearfix\">
      <div class=\"content col-lg-12 col-md-12 col-sm-12 clearfix\">
        <div class=\"col-lg-4 col-md-4 col-sm-12\">
          <h4 class=\"title\">
                      <span>Pourquoi s'inscrire ?</span>
                    </h4>
          <p>Pour pouvoir choisir votre voiture ou le circuit sur lequel vous voulez rouler, il faut vous s'inscrire, mais ce n'est pas tout ! En vous inscrivant chez nous, vous pourrez bénéficier de nombreuses réduction sur l'ensemble de nos produits en boutique !</p>
          <p>Alors, qu'attendez-vous ? Ça ne prends que quelques minutes et le tour est joué !</p>
        </div>

        <div class=\"col-lg-4 col-md-4 col-sm-12\">
          <h4 class=\"title\">
                      <span>Avantages</span>
                    </h4>
          <ul class=\"check\">
            <li><a href=\"#\">Choix multiples de voitures</a></li>
            <li><a href=\"#\">Des réductions sur notre boutique</a></li>
            <li><a href=\"#\">Inscription à la Newsletter </a></li>
            <li><a href=\"#\">Soirées privées pour tenter de gagner des prix !</a></li>
          </ul>
        </div>
        <!-- end login -->

        <div class=\"col-lg-4 col-md-4 col-sm-12\">
          <h4 class=\"title\">
                      <span>Je m'enregistre</span>
                    </h4>
          <form id=\"registerform\" method=\"post\" name=\"registerform\" action=\"\">
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\">
            </div>
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Nom\">
            </div>
            <div class=\"form-group\">
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\">
            </div>
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Confirmez votre mot de passe\">
            </div>
            <div class=\"form-group\">
              <input type=\"submit\" class=\"button\" value=\"Je créer mon compte\">
             <a href=\"/connexion\">Vous avez déjà un compte ?</a>
            </div>
          </form>
        </div>
        <!-- end register -->
      </div>
      <!-- end content -->
    </div>
    <!-- end container -->
  </section>
      </div>
    <div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Monza/Default/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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


{% block body %}

  <section class=\"section1\">
    <div class=\"container clearfix\">
      <div class=\"content col-lg-12 col-md-12 col-sm-12 clearfix\">
        <div class=\"col-lg-4 col-md-4 col-sm-12\">
          <h4 class=\"title\">
                      <span>Pourquoi s'inscrire ?</span>
                    </h4>
          <p>Pour pouvoir choisir votre voiture ou le circuit sur lequel vous voulez rouler, il faut vous s'inscrire, mais ce n'est pas tout ! En vous inscrivant chez nous, vous pourrez bénéficier de nombreuses réduction sur l'ensemble de nos produits en boutique !</p>
          <p>Alors, qu'attendez-vous ? Ça ne prends que quelques minutes et le tour est joué !</p>
        </div>

        <div class=\"col-lg-4 col-md-4 col-sm-12\">
          <h4 class=\"title\">
                      <span>Avantages</span>
                    </h4>
          <ul class=\"check\">
            <li><a href=\"#\">Choix multiples de voitures</a></li>
            <li><a href=\"#\">Des réductions sur notre boutique</a></li>
            <li><a href=\"#\">Inscription à la Newsletter </a></li>
            <li><a href=\"#\">Soirées privées pour tenter de gagner des prix !</a></li>
          </ul>
        </div>
        <!-- end login -->

        <div class=\"col-lg-4 col-md-4 col-sm-12\">
          <h4 class=\"title\">
                      <span>Je m'enregistre</span>
                    </h4>
          <form id=\"registerform\" method=\"post\" name=\"registerform\" action=\"\">
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\">
            </div>
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Nom\">
            </div>
            <div class=\"form-group\">
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\">
            </div>
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Confirmez votre mot de passe\">
            </div>
            <div class=\"form-group\">
              <input type=\"submit\" class=\"button\" value=\"Je créer mon compte\">
             <a href=\"/connexion\">Vous avez déjà un compte ?</a>
            </div>
          </form>
        </div>
        <!-- end register -->
      </div>
      <!-- end content -->
    </div>
    <!-- end container -->
  </section>
      </div>
    <div>
{% endblock %}", "@Monza/Default/inscription.html.twig", "C:\\Users\\mbouantoun\\Documents\\Monza\\src\\MonzaBundle\\Resources\\views\\Default\\inscription.html.twig");
    }
}
