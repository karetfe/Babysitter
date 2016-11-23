<?php
namespace BabySitter\BabySitterBundle\Form;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;

class ModifierEvaluationForm extends AbstractType{
public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder
         ->add("iduser","entity",array("class"=> "BabySitterBundle:Utilisateur","property"=>"nom"))
        //->add("idUser","choice")         
        ->add("note")
        ->add("date","date")
        ->add("description");     
    }
    public function getName() { 
        return 'modifierEvaluation';
    }
}
