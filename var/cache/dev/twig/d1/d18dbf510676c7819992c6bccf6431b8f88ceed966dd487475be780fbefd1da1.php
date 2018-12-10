<?php

/* @Monza/Default/connection.html.twig */
class __TwigTemplate_50bd574bf62f33293f38371c61a1c11e3f8f7c1721c21e7106a79c391b4bc218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Monza/Default/connection.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/connection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/connection.html.twig"));

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
<main role=\"main\" class=\"container\">

  <div class=\"row\">
    <div class=\"col-sm-6 mx-auto\">
      <form class=\"form-horizontal\">
        <fieldset>
          <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"mail\">Votre mail :</label>  
            <div class=\"col-md-4\">
            <input id=\"mail\" name=\"mail\" type=\"text\" placeholder=\"Mail\" class=\"form-control input-md\" required=\"\">              
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"mdp\">Votre mot de passe :</label>
            <div class=\"col-md-4\">
            <input id=\"mdp\" name=\"mdp\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\" required=\"\">
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"boutton\">Validation :</label>
            <div class=\"col-md-4\">
            <button id=\"boutton\" name=\"boutton\" class=\"btn btn-success\">Valider</button>
            </div>
          </div>
        </fieldset>
      </form>
    <div>
  </div>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Monza/Default/connection.html.twig";
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

<main role=\"main\" class=\"container\">

  <div class=\"row\">
    <div class=\"col-sm-6 mx-auto\">
      <form class=\"form-horizontal\">
        <fieldset>
          <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"mail\">Votre mail :</label>  
            <div class=\"col-md-4\">
            <input id=\"mail\" name=\"mail\" type=\"text\" placeholder=\"Mail\" class=\"form-control input-md\" required=\"\">              
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"mdp\">Votre mot de passe :</label>
            <div class=\"col-md-4\">
            <input id=\"mdp\" name=\"mdp\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\" required=\"\">
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"boutton\">Validation :</label>
            <div class=\"col-md-4\">
            <button id=\"boutton\" name=\"boutton\" class=\"btn btn-success\">Valider</button>
            </div>
          </div>
        </fieldset>
      </form>
    <div>
  </div>
</main>

{% endblock %}", "@Monza/Default/connection.html.twig", "C:\\Users\\mbouantoun\\Desktop\\MonzaSymfony-20181210T081511Z-001\\MonzaSymfony\\src\\MonzaBundle\\Resources\\views\\Default\\connection.html.twig");
    }
}
