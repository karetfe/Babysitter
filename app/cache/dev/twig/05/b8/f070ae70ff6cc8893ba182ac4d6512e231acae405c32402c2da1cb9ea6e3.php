<?php

/* BabySitterBundle:BabySitter:affichagerBabySitter.html.twig */
class __TwigTemplate_05b8f070ae70ff6cc8893ba182ac4d6512e231acae405c32402c2da1cb9ea6e3 extends Twig_Template
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
        echo "<Table border=\"1\">
    <tr> <td>Nom</td> <td>Prenom</td> <td>Sex</td> <td>Date Naissance</td> <td>Email</td> <td>Adresse</td> <td>Numero Telephone</td> <td>Code Postal</td><td>Nationnalite</td><td>Modification</td><td>Suppression</td></tr>

    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["BabySitters"]) ? $context["BabySitters"] : $this->getContext($context, "BabySitters")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 6
            echo "        <tr>
            <td> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nom", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "prenom", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "sex", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "dateDeNaissance", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "email", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "adresse", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "numeroTel", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "codePostal", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nationalite", array()), "html", null, true);
            echo "</td>
            
            <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_babySitter", array("id" => $this->getAttribute($context["b"], "iduser", array()))), "html", null, true);
            echo "\" target=\"_blank\">modifier</a></td>
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_babySitter", array("id" => $this->getAttribute($context["b"], "iduser", array()))), "html", null, true);
            echo "\" target=\"_blank\">supprimer</a></td>

        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "    <strong> La liste des BabySitters est vide </strong>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:BabySitter:affichagerBabySitter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  82 => 22,  73 => 18,  69 => 17,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  29 => 6,  24 => 5,  19 => 2,);
    }
}
