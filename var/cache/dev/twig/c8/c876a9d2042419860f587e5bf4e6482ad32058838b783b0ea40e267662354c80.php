<?php

/* @Monza/Default/circuit.html.twig */
class __TwigTemplate_225aca7721f25d8515f65503ede09d87115efd8a7cf1e8bc3db3e6b6ca55a762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Monza/Default/circuit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/circuit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/circuit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <section class=\"post-wrapper-top\">
    <div class=\"container\">
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
        <ul class=\"breadcrumb\">
          <li><a href=\"/\">Acceuil</a></li>
          <li>Circuit ";
        // line 9
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitName", array(), "method");
        echo "</li>
        </ul>
        <h2>Circuit ";
        // line 11
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitName", array(), "method");
        echo "</h2>
      </div>
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
        <div class=\"search-bar\">
          <form action=\"\" method=\"get\">
            <fieldset>
              <input type=\"image\" src=\"img/pixel.gif\" class=\"searchsubmit\" alt=\"\" />
              <input type=\"text\" class=\"search_text showtextback\" name=\"s\" id=\"s\" value=\"Search...\" />
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class=\"marketplace-top\">
    <div id=\"market-wrapper\">
      <div class=\"item_image\">
         <img data-effect=\"fade\" class=\"aligncenter\" width=\"600\" height=\"400\" src=\"";
        // line 28
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitImage", array());
        echo "\">
      </div>
    </div>
  </section>
  <section class=\"section1\">
    <div class=\"container clearfix\">
      <div class=\"content col-lg-12 col-md-12 col-sm-12 clearfix\">
        <div class=\"general-title text-center\">
          <h3>Circuit ";
        // line 36
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitName", array(), "method");
        echo "</h3>
          <p>";
        // line 37
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitTitre", array());
        echo "</p>
          <hr>
        </div>
        <div class=\"divider\"></div>
        <div class=\"item_details\">
          <div class=\"col-lg-3 col-md-3 col-sm-12\">
            <div class=\"theme_details\">
              <div class=\"details_section\">
                <h3>En détails : </h3>
                <ul>
                  <li class=\"version\">Longueur : <span>";
        // line 47
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitLongueur", array(), "method");
        echo "</span></li>
                  <li class=\"release\">Meilleur temps: <span>";
        // line 48
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitTour", array(), "method");
        echo "</span></li>
                  <li class=\"designer\">Pilote : <span>";
        // line 49
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitPilote", array(), "method");
        echo "</span></li>
                  <li class=\"designer\">Nombre de virages : <span>";
        // line 50
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitVirage", array(), "method");
        echo "</li>
                </ul>
              </div>
            </div>
          </div>
      <div class=\"col-lg-6 col-md-6 col-sm-12\">
        <div class=\"theme_details\">
          <div class=\"item-description\">
            ";
        // line 58
        echo $this->getAttribute(($context["circuit"] ?? $this->getContext($context, "circuit")), "getCircuitDescription", array(), "method");
        echo "
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12\">
        <div class=\"theme_details\">
          <div class=\"item_price\">
            <h3><span>INSERER CALENDRIER</span></h3>
          </div>
              <hr>
              <div class=\"buttons\">
                <a class=\"button btn-block large\" href=\"#\">Voir d'autres photos</a>
                <a class=\"button btn-block large\" href=\"#\"><i class=\"fa fa-download\"></i> Je réserve</a>
              </div>
              <hr>
            </div>
          </div>
        </div>
    <div class=\"clearfix\"></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Monza/Default/circuit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 58,  121 => 50,  117 => 49,  113 => 48,  109 => 47,  96 => 37,  92 => 36,  81 => 28,  61 => 11,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
  <section class=\"post-wrapper-top\">
    <div class=\"container\">
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
        <ul class=\"breadcrumb\">
          <li><a href=\"/\">Acceuil</a></li>
          <li>Circuit {{ circuit.getCircuitName() | raw }}</li>
        </ul>
        <h2>Circuit {{ circuit.getCircuitName() | raw }}</h2>
      </div>
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
        <div class=\"search-bar\">
          <form action=\"\" method=\"get\">
            <fieldset>
              <input type=\"image\" src=\"img/pixel.gif\" class=\"searchsubmit\" alt=\"\" />
              <input type=\"text\" class=\"search_text showtextback\" name=\"s\" id=\"s\" value=\"Search...\" />
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class=\"marketplace-top\">
    <div id=\"market-wrapper\">
      <div class=\"item_image\">
         <img data-effect=\"fade\" class=\"aligncenter\" width=\"600\" height=\"400\" src=\"{{ circuit.getCircuitImage | raw }}\">
      </div>
    </div>
  </section>
  <section class=\"section1\">
    <div class=\"container clearfix\">
      <div class=\"content col-lg-12 col-md-12 col-sm-12 clearfix\">
        <div class=\"general-title text-center\">
          <h3>Circuit {{ circuit.getCircuitName() | raw }}</h3>
          <p>{{ circuit.getCircuitTitre | raw }}</p>
          <hr>
        </div>
        <div class=\"divider\"></div>
        <div class=\"item_details\">
          <div class=\"col-lg-3 col-md-3 col-sm-12\">
            <div class=\"theme_details\">
              <div class=\"details_section\">
                <h3>En détails : </h3>
                <ul>
                  <li class=\"version\">Longueur : <span>{{ circuit.getCircuitLongueur() | raw }}</span></li>
                  <li class=\"release\">Meilleur temps: <span>{{ circuit.getCircuitTour() | raw }}</span></li>
                  <li class=\"designer\">Pilote : <span>{{ circuit.getCircuitPilote() | raw }}</span></li>
                  <li class=\"designer\">Nombre de virages : <span>{{ circuit.getCircuitVirage() | raw }}</li>
                </ul>
              </div>
            </div>
          </div>
      <div class=\"col-lg-6 col-md-6 col-sm-12\">
        <div class=\"theme_details\">
          <div class=\"item-description\">
            {{ circuit.getCircuitDescription() | raw }}
          </div>
        </div>
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-12\">
        <div class=\"theme_details\">
          <div class=\"item_price\">
            <h3><span>INSERER CALENDRIER</span></h3>
          </div>
              <hr>
              <div class=\"buttons\">
                <a class=\"button btn-block large\" href=\"#\">Voir d'autres photos</a>
                <a class=\"button btn-block large\" href=\"#\"><i class=\"fa fa-download\"></i> Je réserve</a>
              </div>
              <hr>
            </div>
          </div>
        </div>
    <div class=\"clearfix\"></div>

{% endblock %}", "@Monza/Default/circuit.html.twig", "C:\\Users\\mbouantoun\\Documents\\Monza\\src\\MonzaBundle\\Resources\\views\\Default\\circuit.html.twig");
    }
}
