<?php

namespace BabySitter\BabySitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BabySitter\BabySitterBundle\Entity\Evaluation;
use \BabySitter\BabySitterBundle\Form\ModifierEvaluationForm;
class EvaluationController extends Controller {
    //Affichage Evaluation 
    public function afficherEvaluationAction(){
        
        $em=  $this->getDoctrine()->getManager();
        $Evaluations=$em->getRepository('BabySitterBundle:Evaluation')->findAll();
        return $this->render('BabySitterBundle:Evaluation:AfficherEvaluation.html.twig', array('Evaluations'=>$Evaluations));
 
    }
    //Ajout Evaluation
    public function ajouterEvaluationAction(){
        //pour trouver babyitter à evaluer en cliquant sur le bouton
        $id=9;
        $em= $this->getDoctrine()->getManager();
        $BabySitter=$em->getRepository('BabySitterBundle:Utilisateur')->findOneByIduser($id);
        
        $Evaluation=new Evaluation();
        $Evaluation->setIduser($BabySitter);

        $form = $this->createForm(new \BabySitter\BabySitterBundle\Form\AjouterEvaluationForm(),$Evaluation);          
        $request = $this->getRequest();
        
        if($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($Evaluation);
            $em->flush();
            return $this->redirect($this->generateUrl('affichage_evaluation'));
        }        
        return $this->render('BabySitterBundle:Evaluation:AjouterEvaluation.html.twig',array('form'=>$form->createView()));
    }
    //Modifier Evaluation
    public function modifierEvaluationAction($id){
        
        $em=  $this->getDoctrine()->getManager();
        $evaluation=$em->getRepository('BabySitterBundle:Evaluation')->find($id);
        $f=new ModifierEvaluationForm();
        $form= $this->createForm($f,$evaluation);
        $request=  $this->get('request');
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em->persist($evaluation);
                $em->flush();
                     return $this->redirect($this->generateUrl('affichage_evaluation'));
            }
        }
        
        return $this->render('BabySitterBundle:Evaluation:ModifierEvaluation.html.twig',array('form'=>$form->createView(),'evaluations'=>$evaluation));
    }
  //Suppression Evaluation
     public function supprimerEvaluationAction($id){
         $em=$this->getDoctrine()->getManager();
         $Evaluation=$em->getRepository('BabySitterBundle:Evaluation')->findOneByIdEvaluation($id);
         $em->remove($Evaluation);
         $em->flush();
         $em1 = $this->getDoctrine()->getManager();
         $Evaluations = $em1->getRepository('BabySitterBundle:Evaluation')->findAll();
         return $this->render('BabySitterBundle:Evaluation:AfficherEvaluation.html.twig', array('Evaluations' => $Evaluations));
    }
    public function listEvaluationAction(){
        $id=3;
        $em=  $this->getDoctrine()->getManager();
        $Evaluations=$em->getRepository('BabySitterBundle:Evaluation')->findByIduser($id);
        return $this->render('BabySitterBundle:Template:ProfileEvaluation.html.twig', array('Evaluations'=>$Evaluations));
 
    }  
}

