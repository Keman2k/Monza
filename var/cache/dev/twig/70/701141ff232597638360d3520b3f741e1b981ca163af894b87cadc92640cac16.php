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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"voitures\">
\t<article>
\t\t<h2>Ferrari</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Ferrari\"><img src=\"/assets/img/logoFerrariOpt.jpg\" alt=\"Ferrari\"></a>
\t\t\t<p>Les Ferrari ont toujours étés superbes.</p>
\t\t\t<a href=\"/Ferrari\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t\t<article>
\t\t<h2>Lamborghini</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Lamborghini\"><img src=\"/assets/img/logoLamborghiniOpt.jpg\" alt=\"Lamborghini\"></a>
\t\t\t<p>Les Lamborghini ont toujours étés superbes.</p>
\t\t\t<a href=\"/Lamborghini\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Pagani</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Pagani\"><img src=\"/assets/img/logoPaganiOpt.jpg\" alt=\"Pagani\"></a>
\t\t\t<p>Les Pagani ont toujours étés superbes.</p>
\t\t\t<a href=\"/Pagani\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Masérati</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Maserati\"><img src=\"/assets/img/logoMaseratiOpt.jpg\" alt=\"Maserati\"></a>
\t\t\t<p>Les Pagani ont toujours étés superbes.</p>
\t\t\t<a href=\"/Masérati\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>
\t
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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<section class=\"voitures\">
\t<article>
\t\t<h2>Ferrari</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Ferrari\"><img src=\"/assets/img/logoFerrariOpt.jpg\" alt=\"Ferrari\"></a>
\t\t\t<p>Les Ferrari ont toujours étés superbes.</p>
\t\t\t<a href=\"/Ferrari\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t\t<article>
\t\t<h2>Lamborghini</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Lamborghini\"><img src=\"/assets/img/logoLamborghiniOpt.jpg\" alt=\"Lamborghini\"></a>
\t\t\t<p>Les Lamborghini ont toujours étés superbes.</p>
\t\t\t<a href=\"/Lamborghini\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Pagani</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Pagani\"><img src=\"/assets/img/logoPaganiOpt.jpg\" alt=\"Pagani\"></a>
\t\t\t<p>Les Pagani ont toujours étés superbes.</p>
\t\t\t<a href=\"/Pagani\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Masérati</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Maserati\"><img src=\"/assets/img/logoMaseratiOpt.jpg\" alt=\"Maserati\"></a>
\t\t\t<p>Les Pagani ont toujours étés superbes.</p>
\t\t\t<a href=\"/Masérati\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>
\t
</section>

{% endblock %}", "@Monza/Default/index.html.twig", "C:\\Monza\\src\\MonzaBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
