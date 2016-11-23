<?php
namespace BabySitter\BabySitterBundle\Form;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;

class AjouterEvaluationForm extends AbstractType{
   public function getName() {
        return "ajoutEvaluation";
    }
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
  
        ->add("iduser","entity",array("class"=> "BabySitterBundle:Utilisateur","property"=>"nom"))
        //->add("iduser","choice") 
        ->add("note","number")
        ->add("date","date")
        ->add("description","textarea");
        }
}
