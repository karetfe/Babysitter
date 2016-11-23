<?php

namespace BabySitter\BabySitterBundle\Form;
use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;

class ModifierAnnonceForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {

         $builder
        ->add("titre_annonce")
        ->add("description")
        ->add("disponibilite");
        
    }

    public function getName() { 
        return 'modifierAnnonce';
    }
}
