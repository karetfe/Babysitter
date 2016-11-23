<?php

namespace BabySitter\BabySitterBundle\Form;
use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
class ModifierQualiteForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder
        ->add("nom_qualite")
        ->add("descriptionQ");     
    }

    public function getName() { 
        return 'modifierQualite';
    }
}
