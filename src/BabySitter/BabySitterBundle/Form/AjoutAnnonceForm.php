<?php

namespace BabySitter\BabySitterBundle\Form;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;

class AjoutAnnonceForm extends AbstractType{
    
     public function getName() {
        return "ajoutAnnonce";
    }

     public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add("titre_annonce")
        ->add("description")
        ->add("disponibilite");
        //->add('iduser', 'entity', array('class' => 'BabySitterBundle:Utilisateur', 'property' => 'nom'));    
        }
    
}
