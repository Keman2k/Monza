<?php

/* @Monza/Default/test.html.twig */
class __TwigTemplate_fbbdeeff4311a46daa23cabca3c4fc0b403d06dc97529a195dd9bb3c0aded194 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Monza/Default/test.html.twig"));

        // line 1
        echo "<body>
\t
";
        // line 3
        $this->loadTemplate("inc/header.html", "@Monza/Default/test.html.twig", 3)->display($context);
        // line 4
        $this->loadTemplate("inc/nav.inc.html", "@Monza/Default/test.html.twig", 4)->display($context);
        // line 5
        echo "
Hello Dany lol ";
        // line 6
        echo twig_escape_filter($this->env, ($context["number1"] ?? $this->getContext($context, "number1")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["number2"] ?? $this->getContext($context, "number2")), "html", null, true);
        echo "  !

";
        // line 8
        $this->loadTemplate("inc/footer.inc.html", "@Monza/Default/test.html.twig", 8)->display($context);
        // line 9
        echo "
</body>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Monza/Default/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  43 => 8,  36 => 6,  33 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
\t
{% include 'inc/header.html' %}
{% include 'inc/nav.inc.html' %}

Hello Dany lol {{ number1 }} {{ number2 }}  !

{% include 'inc/footer.inc.html' %}

</body>
", "@Monza/Default/test.html.twig", "H:\\Java\\workspaces\\monza\\src\\MonzaBundle\\Resources\\views\\Default\\test.html.twig");
    }
}
