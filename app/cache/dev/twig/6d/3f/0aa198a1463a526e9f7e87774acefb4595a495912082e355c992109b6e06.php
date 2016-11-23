<?php

/* BabySitterBundle:BabySitter:ajoutBabySitter.html.twig */
class __TwigTemplate_6d3f0aa198a1463a526e9f7e87774acefb4595a495912082e355c992109b6e06 extends Twig_Template
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
    <table>
        <tr><td> Nom : <input type =\"text\" name=\"nom\"/> </td> </tr>
        <tr><td> Prenom : <input type=\"text\" name=\"prenom\" value=\"\"/> </td></tr>
        <tr>
            <td> Sexe :  </br>
             <input type=\"radio\" name=\"homme\" value=\"homme\"/> Homme
             <input type=\"radio\" name=\"femme\" value=\"femme\"/> Femme
          </td> 
        </tr>
        <tr><td> Date de Naissance : <input type=\"text\" name=\"date_de_naissance\"/></td></tr>
        <tr><td> Email : <input type=\"text\" name=\"email\"/></td></tr>
        <tr><td> Adresse : <input type=\"text\" name=\"adresse\"/> </td></tr>
        <tr><td> Code Postal : <input type=\"text\" name=\"code_postal\"/></td></tr>
        <tr><td> Numero Telephone : <input type=\"text\" name=\"numero_tel\"/></td></tr>
        <tr><td> Nationalite : <input type=\"text\" name=\"nationalite\"/></td></tr>
        <tr><td> Photo : <input type=\"text\" name=\"photo\"/></td></tr>
        
        <tr><td> <input type=\"submit\" value=\"Ajouter\" name=\"ajouter\"/></td></tr>
   </table>
</form>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:BabySitter:ajoutBabySitter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
