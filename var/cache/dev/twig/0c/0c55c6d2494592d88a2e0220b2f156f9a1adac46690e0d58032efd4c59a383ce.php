<?php

/* @Monza/Default/lamborghini.html.twig */
class __TwigTemplate_68e8d8442182ab484d5afb7633b502a87727da1b6ccaf0a611a1289684078d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Monza/Default/lamborghini.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/lamborghini.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/lamborghini.html.twig"));

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
<h3>Les modèles Lamborghini que nous vous proposont : </h3>
\t
\t<ul>
\t\t<li><span><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/-Ag2Xp6F0wU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></li>Lamborghini Huracan GT3<br /></span></li>
\t\t<li>Lamborghini Huracan : la plus puissante des Lamborghini de série.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/eJnWPhSQjPs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Aventador : toujours plus de perfomances et d'éfficacité.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/vEvBbNe3rqU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Gallardo GT3 : un plaisir de conduire et une précision absolue.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/9fhjOBdoVck\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Gallardo : Une voiture de course conçue aussi pour la route.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/u1S3m7b59EQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Murciélago : authentique et extrême.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/-kL3BQIgzbo\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t</ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Monza/Default/lamborghini.html.twig";
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

<h3>Les modèles Lamborghini que nous vous proposont : </h3>
\t
\t<ul>
\t\t<li><span><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/-Ag2Xp6F0wU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></li>Lamborghini Huracan GT3<br /></span></li>
\t\t<li>Lamborghini Huracan : la plus puissante des Lamborghini de série.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/eJnWPhSQjPs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Aventador : toujours plus de perfomances et d'éfficacité.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/vEvBbNe3rqU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Gallardo GT3 : un plaisir de conduire et une précision absolue.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/9fhjOBdoVck\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Gallardo : Une voiture de course conçue aussi pour la route.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/u1S3m7b59EQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t<li>Lamborghini Murciélago : authentique et extrême.</li><iframe width=\"350\" height=\"250\" src=\"https://www.youtube.com/embed/-kL3BQIgzbo\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t</ul>

{% endblock %}", "@Monza/Default/lamborghini.html.twig", "C:\\wamp64\\www\\php\\Monza\\src\\MonzaBundle\\Resources\\views\\Default\\lamborghini.html.twig");
    }
}
