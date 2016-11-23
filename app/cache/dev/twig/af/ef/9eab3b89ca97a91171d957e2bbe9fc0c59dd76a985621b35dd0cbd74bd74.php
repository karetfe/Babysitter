<?php

/* BabySitterBundle:Annonce:rechercherAnnonce.html.twig */
class __TwigTemplate_afef9eab3b89ca97a91171d957e2bbe9fc0c59dd76a985621b35dd0cbd74bd74 extends Twig_Template
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
        echo "<h1>Recherche Annonce </h1>
<form action=\"\" method=\"POST\">
    Recherche par titre :  <input type=\"text\" name=\"titre_annonce\"/>
    <input type=\"submit\" value=\"Recherche\">
</form>
   <table border=\"2\">
    <tr> <td>Titre</td> <td>Description</td> <td>Disponibilite</td> <td>Date</td></tr>
    
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annonce"]) ? $context["Annonce"] : $this->getContext($context, "Annonce")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 11
            echo "        <tr>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "titreAnnonce", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "description", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "disponibilite", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "annonceDate", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:Annonce:rechercherAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  48 => 15,  44 => 14,  40 => 13,  36 => 12,  33 => 11,  29 => 10,  19 => 2,);
    }
}
