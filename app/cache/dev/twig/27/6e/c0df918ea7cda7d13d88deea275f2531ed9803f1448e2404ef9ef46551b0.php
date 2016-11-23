<?php

/* BabySitterBundle:BabySitter:rechercheBabySitter.html.twig */
class __TwigTemplate_276ec0df918ea7cda7d13d88deea275f2531ed9803f1448e2404ef9ef46551b0 extends Twig_Template
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
        // line 2
        echo "<h1>Recherche BabySitter </h1>
<form action=\"\" method=\"POST\">
    Recherche par nationnalite :  <input type=\"text\" name=\"nationalite\"/>
    <input type=\"submit\" value=\"Recherche\">
</form>
   <table border=\"2\">
    <tr> <td>Nom</td> <td>Prenom</td> <td>Sex</td> <td>Date Naissance</td> <td>Email</td> <td>Adresse</td> <td>Numero Telephone</td> <td>Code Postal</td><td>Nationnalite</td></tr>
    
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["BabySitter"]) ? $context["BabySitter"] : $this->getContext($context, "BabySitter")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 11
            echo "        <tr>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "prenom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "dateDeNaissance", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "sex", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "adresse", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "numeroTel", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "codePostal", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nationalite", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:BabySitter:rechercheBabySitter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  40 => 13,  36 => 12,  33 => 11,  29 => 10,  19 => 2,);
    }
}
