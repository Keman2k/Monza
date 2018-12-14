<?php

/* @Monza/Default/circuits.html.twig */
class __TwigTemplate_e4dd6974470263a95b7f3d805ef8ec40b5c981700eb192190072d203cc789f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Monza/Default/circuits.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/circuits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/circuits.html.twig"));

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
<h2>Nos circuits !</h2>

<section class=\"Cicruits\">
\t<article>
\t\t<h2>Brands Hatch</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Brands\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Brands_Hatch.png"), "html", null, true);
        echo "\" alt=\"Hatch\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Brands\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t\t<article>
\t\t<h2>Cicuit Bugatti</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Bugatti\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Bugatti.png"), "html", null, true);
        echo "\" alt=\"Bugatti\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Bugatti\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Charrade</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Charrade\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Charrade.png"), "html", null, true);
        echo "\" alt=\"Charrade\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Charrade\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Dijon Prenois</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Dijon\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Dijon-Prenois_Circuit.png"), "html", null, true);
        echo "\" alt=\"Dijon Prenois\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Dijon\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Donington</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Donington\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Donington.png"), "html", null, true);
        echo "\" alt=\"Donington\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Donington\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Fiorano</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Fiorano\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Fiorano.jpg"), "html", null, true);
        echo "\" alt=\"Fiorano\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Fiorano\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Hokenheimring</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Hokenheimring\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Hokenheimring.png"), "html", null, true);
        echo "\" alt=\"Hokenheimring\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Hokenheimring\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Imola</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Imola\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Imola.jpg"), "html", null, true);
        echo "\" alt=\"Imola\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Imola\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Magny Cours</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Magny\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Magny_Cours.png"), "html", null, true);
        echo "\" alt=\"Magny Cours\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Magny\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Misano</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Misano\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Misano.jpg"), "html", null, true);
        echo "\" alt=\"Misano\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Misano\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Monza</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Monza\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Monza.png"), "html", null, true);
        echo "\" alt=\"Monza\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Monza\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Nordschleife</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Nordschleife\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Nordschleife.png"), "html", null, true);
        echo "\" alt=\"Nordschleife\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Nordschleife\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Nürburgring</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Nürburgring\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Nürburgring.png"), "html", null, true);
        echo "\" alt=\"Nürburgring\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Nürburgring\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Paul Ricard</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Paul\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Paul_Ricard.png"), "html", null, true);
        echo "\" alt=\"Paul Ricard\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Paul\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Pescara</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Pescara\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Pescara.jpg"), "html", null, true);
        echo "\" alt=\"Pescara\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Pescara\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Rouen Les Essarts</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Rouen\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Rouen_Les_Essarts.png"), "html", null, true);
        echo "\" alt=\"Rouen Les Essarts\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Rouen\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Vallelunga.jpg</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Vallelunga\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/img/circuits/Vallelunga.jpg"), "html", null, true);
        echo "\" alt=\"Vallelunga\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Vallelunga\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Monza/Default/circuits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 174,  273 => 164,  260 => 154,  247 => 144,  234 => 134,  221 => 124,  208 => 114,  195 => 104,  182 => 94,  169 => 84,  156 => 74,  143 => 64,  130 => 54,  117 => 44,  104 => 34,  91 => 24,  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<h2>Nos circuits !</h2>

<section class=\"Cicruits\">
\t<article>
\t\t<h2>Brands Hatch</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Brands\"><img src=\"{{ asset('/assets/img/circuits/Brands_Hatch.png') }}\" alt=\"Hatch\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Brands\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t\t<article>
\t\t<h2>Cicuit Bugatti</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Bugatti\"><img src=\"{{ asset('/assets/img/circuits/Bugatti.png') }}\" alt=\"Bugatti\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Bugatti\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Charrade</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Charrade\"><img src=\"{{ asset('/assets/img/circuits/Charrade.png') }}\" alt=\"Charrade\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Charrade\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Dijon Prenois</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Dijon\"><img src=\"{{ asset('/assets/img/circuits/Dijon-Prenois_Circuit.png') }}\" alt=\"Dijon Prenois\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Dijon\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Donington</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Donington\"><img src=\"{{ asset('/assets/img/circuits/Donington.png') }}\" alt=\"Donington\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Donington\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Fiorano</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Fiorano\"><img src=\"{{ asset('/assets/img/circuits/Fiorano.jpg') }}\" alt=\"Fiorano\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Fiorano\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Hokenheimring</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Hokenheimring\"><img src=\"{{ asset('/assets/img/circuits/Hokenheimring.png') }}\" alt=\"Hokenheimring\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Hokenheimring\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Imola</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Imola\"><img src=\"{{ asset('/assets/img/circuits/Imola.jpg') }}\" alt=\"Imola\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Imola\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Magny Cours</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Magny\"><img src=\"{{ asset('/assets/img/circuits/Magny_Cours.png') }}\" alt=\"Magny Cours\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Magny\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Misano</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Misano\"><img src=\"{{ asset('/assets/img/circuits/Misano.jpg') }}\" alt=\"Misano\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Misano\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Monza</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Monza\"><img src=\"{{ asset('/assets/img/circuits/Monza.png') }}\" alt=\"Monza\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Monza\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Nordschleife</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Nordschleife\"><img src=\"{{ asset('/assets/img/circuits/Nordschleife.png') }}\" alt=\"Nordschleife\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Nordschleife\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Nürburgring</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Nürburgring\"><img src=\"{{ asset('/assets/img/circuits/Nürburgring.png') }}\" alt=\"Nürburgring\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Nürburgring\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Paul Ricard</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Paul\"><img src=\"{{ asset('/assets/img/circuits/Paul_Ricard.png') }}\" alt=\"Paul Ricard\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Paul\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Pescara</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Pescara\"><img src=\"{{ asset('/assets/img/circuits/Pescara.jpg') }}\" alt=\"Pescara\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Pescara\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Rouen Les Essarts</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Rouen\"><img src=\"{{ asset('/assets/img/circuits/Rouen_Les_Essarts.png') }}\" alt=\"Rouen Les Essarts\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Rouen\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

\t<article>
\t\t<h2>Circuit Vallelunga.jpg</h2>
\t\t<div class=\"metadata\">Quelque chose que je pourrais mettre ici</div>
\t\t<div class=\"content\">
\t\t\t<a href=\"/Vallelunga\"><img src=\"{{ asset('/assets/img/circuits/Vallelunga.jpg') }}\" alt=\"Vallelunga\"></a>
\t\t\t<p>Description du circuit</p>
\t\t\t<a href=\"/Vallelunga\" class=\"btn btn-primary\">Lire la suite</a>
\t\t</div>
\t</article>

{% endblock %}", "@Monza/Default/circuits.html.twig", "C:\\Users\\mbouantoun\\Documents\\Monza\\src\\MonzaBundle\\Resources\\views\\Default\\circuits.html.twig");
    }
}
