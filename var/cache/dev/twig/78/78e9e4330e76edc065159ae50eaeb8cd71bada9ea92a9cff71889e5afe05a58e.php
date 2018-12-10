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
  <h3>CRÉATION DU COMPTE</h3>
    <div class=\"row\">
      <div class=\"col-sm-6 mx-auto\">
        <form class=\"form-horizontal\">
          <fieldset>
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"nom\">Votre nom :</label>  
              <div class=\"col-md-10\">
              <input id=\"nom\" name=\"nom\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>
                
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"Votre prénom\">Votre prénom :</label>  
              <div class=\"col-md-10\">
              <input id=\"Votre prénom\" name=\"Votre prénom\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mail\">Votre mail :</label>  
              <div class=\"col-md-10\">
              <input id=\"mail\" name=\"mail\" type=\"text\" placeholder=\"Mail\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mail2\">Veuillez confirmer votre mail :</label>  
              <div class=\"col-md-10\">
              <input id=\"mail2\" name=\"mail2\" type=\"text\" placeholder=\"Mail\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>
                  
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mdp\">Votre mot de passe :</label>
              <div class=\"col-md-10\">
              <input id=\"mdp\" name=\"mdp\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>
                  
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mdp2\">Veuillez confirmer votre mot de passe :</label>
              <div class=\"col-md-10\">
              <input id=\"mdp2\" name=\"mdp2\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"boutton\">Enregistrement :</label>
              <div class=\"col-md-10\">
              <button id=\"boutton\" name=\"boutton\" class=\"btn btn-success\">Inscription</button>
              </div>
            </div>
          </fieldset>
        </form>
        <a href=\"/connection\">Vous avez déjà un compte ?</a>
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

  <h3>CRÉATION DU COMPTE</h3>
    <div class=\"row\">
      <div class=\"col-sm-6 mx-auto\">
        <form class=\"form-horizontal\">
          <fieldset>
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"nom\">Votre nom :</label>  
              <div class=\"col-md-10\">
              <input id=\"nom\" name=\"nom\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>
                
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"Votre prénom\">Votre prénom :</label>  
              <div class=\"col-md-10\">
              <input id=\"Votre prénom\" name=\"Votre prénom\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mail\">Votre mail :</label>  
              <div class=\"col-md-10\">
              <input id=\"mail\" name=\"mail\" type=\"text\" placeholder=\"Mail\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mail2\">Veuillez confirmer votre mail :</label>  
              <div class=\"col-md-10\">
              <input id=\"mail2\" name=\"mail2\" type=\"text\" placeholder=\"Mail\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>
                  
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mdp\">Votre mot de passe :</label>
              <div class=\"col-md-10\">
              <input id=\"mdp\" name=\"mdp\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>
                  
            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"mdp2\">Veuillez confirmer votre mot de passe :</label>
              <div class=\"col-md-10\">
              <input id=\"mdp2\" name=\"mdp2\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\" required=\"\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-md-10 control-label\" for=\"boutton\">Enregistrement :</label>
              <div class=\"col-md-10\">
              <button id=\"boutton\" name=\"boutton\" class=\"btn btn-success\">Inscription</button>
              </div>
            </div>
          </fieldset>
        </form>
        <a href=\"/connection\">Vous avez déjà un compte ?</a>
      </div>
    <div>
{% endblock %}", "@Monza/Default/inscription.html.twig", "C:\\Monza\\src\\MonzaBundle\\Resources\\views\\Default\\inscription.html.twig");
    }
}
