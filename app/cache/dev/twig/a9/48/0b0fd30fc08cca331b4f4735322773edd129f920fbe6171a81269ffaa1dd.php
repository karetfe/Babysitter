<?php

/* BabySitterBundle:Annonce:modifierAnnonce.html.twig */
class __TwigTemplate_a9480b0fd30fc08cca331b4f4735322773edd129f920fbe6171a81269ffaa1dd extends Twig_Template
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
        echo "<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_annonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "idAnnonce", array()))), "html", null, true);
        echo "\">
    <h2>Modifier Annonce </h2>
    <table>
        <tr>
            <td>Nom : </td>
            <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_annonce", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Prenom : </td>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>Date De Naissance : </td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponibilite", array()), 'widget');
        echo " </td>
        </tr>
                
        <tr>
            <td>     <input type=\"submit\" value=\"Modifier\" name=\"modifier\"/> </td>
            <td></td>
        </tr>
    </table>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:Annonce:modifierAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 23,  42 => 15,  35 => 11,  28 => 7,  19 => 2,);
    }
}
