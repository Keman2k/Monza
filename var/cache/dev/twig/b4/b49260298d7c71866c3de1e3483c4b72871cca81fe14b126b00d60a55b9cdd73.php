<?php

/* inc/function.inc.php */
class __TwigTemplate_4c1ef2f148a8276dfe3e2d10851d94261d62d054154932c0d2dac24b7e7c5871 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/function.inc.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/function.inc.php"));

        // line 1
        echo "<div class=\"slider\">
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_1.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_2.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_3.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_4.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_5.jpg\"></a></div>
</div>

<?php

// utilisateur est connecté
function userIsConnect() {
\t// si l'indice membre existe dans session alors, l'utilisateur est forcément passé par connexion et donc nous a donné un pseudo et un mdp correct.
\tif(isset(\$_SESSION['membre']))  {
\t\treturn true;
\t}
\treturn false;
}

// utilisateur est connecté et est admin !
function userIsAdmin () {
\tif(userIsConnect() && \$_SESSION['membre']['statut'] == 2) {
\t\treturn true;
\t}
\treturn false;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/function.inc.php";
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
        return new Twig_Source("<div class=\"slider\">
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_1.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_2.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_3.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_4.jpg\"></a></div>
  <div><a href=\"assets/img/voitures opt/Ferrari/F40/F40_5.jpg\"></a></div>
</div>

<?php

// utilisateur est connecté
function userIsConnect() {
\t// si l'indice membre existe dans session alors, l'utilisateur est forcément passé par connexion et donc nous a donné un pseudo et un mdp correct.
\tif(isset(\$_SESSION['membre']))  {
\t\treturn true;
\t}
\treturn false;
}

// utilisateur est connecté et est admin !
function userIsAdmin () {
\tif(userIsConnect() && \$_SESSION['membre']['statut'] == 2) {
\t\treturn true;
\t}
\treturn false;
}", "inc/function.inc.php", "C:\\Monza\\app\\Resources\\views\\inc\\function.inc.php");
    }
}
