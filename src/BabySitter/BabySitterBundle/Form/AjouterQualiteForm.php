<?php
namespace BabySitter\BabySitterBundle\Form;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;

class AjouterQualiteForm extends AbstractType{
     public function getName() {
        return "ajoutQualite";
    }

     public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add("nom_qualite")
        ->add("descriptionQ");
    
        }
    
}
