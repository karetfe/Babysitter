<?php

/* BabySitterBundle:Annonce:affichagerAnnonce.html.twig */
class __TwigTemplate_2b294d8035f56def759b2f7e7ba4729ebcbdcd62956f1a16911c2863a7781e14 extends Twig_Template
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
        echo "<h1></h1>
<Table border=\"1\">
    <tr> <td>Titre</td> <td>Description</td> <td>Disponibilite</td> <td>Date</td><td>Modification</td><td>Suppression</td></tr>

    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annonces"]) ? $context["Annonces"] : $this->getContext($context, "Annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 7
            echo "        <tr>
            <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "titreAnnonce", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "description", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "disponibilite", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "annonceDate", array()), "html", null, true);
            echo "</td>
                        
            <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_annonce", array("id" => $this->getAttribute($context["a"], "idAnnonce", array()))), "html", null, true);
            echo "\" target=\"_blank\">modifier</a></td>
            <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_annonce", array("id" => $this->getAttribute($context["a"], "idAnnonce", array()))), "html", null, true);
            echo "\" target=\"_blank\">supprimer</a></td>

        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <strong> La liste des Annonces est vide </strong>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:Annonce:affichagerAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  63 => 18,  54 => 14,  50 => 13,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  30 => 7,  25 => 6,  19 => 2,);
    }
}
