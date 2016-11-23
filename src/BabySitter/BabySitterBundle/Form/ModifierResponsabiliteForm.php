<?php

namespace BabySitter\BabySitterBundle\Form;
use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;

class ModifierResponsabiliteForm extends AbstractType {
    public function getName() { 
        return 'modifierResponsabilite';
    }
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder
        ->add("nom_responsabilite")
        ->add("descriptionR");     
    }
    
}
