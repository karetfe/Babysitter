<?php

/* BabySitterBundle:Annonce:ajouterAnnonce.html.twig */
class __TwigTemplate_9f1d9e4a5803617c7eecd20d12369691e07923782ff9cd2d5a07f075ad020ce1 extends Twig_Template
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
        echo "<form method=\"POST\">
<h2>Ajout Annonce </h2>
    <table>
        <tr>
            <td>Titre : </td>
            <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_annonce", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Description : </td>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Disponibilite : </td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilite", array()), 'widget');
        echo "</td>
        </tr>
       <tr>
            <td>    <input type=\"submit\" name=\"submit\" value=\"Ajouter\"/> </td>
            <td></td>
        </tr>
    </table>
       ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "  
</form> ";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:Annonce:ajouterAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  40 => 15,  33 => 11,  26 => 7,  19 => 2,);
    }
}
