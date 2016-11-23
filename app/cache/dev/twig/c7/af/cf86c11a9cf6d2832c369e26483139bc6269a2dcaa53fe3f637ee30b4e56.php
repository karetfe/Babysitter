<?php

/* BabySitterBundle:BabySitter:modifierBabySitter.html.twig */
class __TwigTemplate_c7afcf86c11a9cf6d2832c369e26483139bc6269a2dcaa53fe3f637ee30b4e56 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_babySitter", array("id" => $this->getAttribute((isset($context["babySitters"]) ? $context["babySitters"] : $this->getContext($context, "babySitters")), "iduser", array()))), "html", null, true);
        echo "\">
    <h2>Modifier BabySitter </h2>
    <table>
        <tr>
            <td>Nom : </td>
            <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Prenom : </td>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>Date De Naissance : </td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeNaissance", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>Sex : </td>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sex", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>Email : </td>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>Adresse : </td>
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>Numero Telephone : </td>
            <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroTel", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>code Postal : </td>
            <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>Nationalite : </td>
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationalite", array()), 'widget');
        echo " </td>
        </tr>
        <tr>
            <td>     <input type=\"submit\" value=\"Modifier\" name=\"modifier\"/> </td>
            <td></td>
        </tr>
    </table>
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:BabySitter:modifierBabySitter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 46,  84 => 39,  77 => 35,  70 => 31,  63 => 27,  56 => 23,  49 => 19,  42 => 15,  35 => 11,  28 => 7,  19 => 2,);
    }
}
