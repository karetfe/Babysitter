<?php

namespace BabySitter\BabySitterBundle\Form;
use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;

class ModifFormBabySitter extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {

         $builder
        ->add("nom")
        ->add("prenom")
        ->add("dateDeNaissance")
        ->add("email")
        ->add("adresse")
        ->add("prenom")
        ->add("numeroTel")
        ->add("codePostal")
        ->add("nationalite")
        ->add("sex");
    }

    public function getName() { 
        return 'modifierBabySitter';
    }
}
