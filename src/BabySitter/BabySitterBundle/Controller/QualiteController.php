<?php
namespace BabySitter\BabySitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BabySitter\BabySitterBundle\Entity\Qualite;
use \BabySitter\BabySitterBundle\Form\AjouterQualiteForm;
use BabySitter\BabySitterBundle\Form\ModifierQualiteForm;
class QualiteController extends Controller {
    //Affichage Qualite 
    public function afficherQualiteAction(){
        
        $em=  $this->getDoctrine()->getManager();
        $Qualites=$em->getRepository('BabySitterBundle:Qualite')->findAll();
        return $this->render('BabySitterBundle:Qualite:AfficherQualite.html.twig', array('Qualites'=>$Qualites));
 
    }
    //Ajout Qualite
  public function ajouterQualiteAction() {
        
        $Qualite = new Qualite();
        $form = $this->createForm(new AjouterQualiteForm(),$Qualite);          
        $request = $this->getRequest();
        
        if($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($Qualite);
            $em->flush();
            return $this->redirect($this->generateUrl('affichage_qualite'));
        }
        return $this->render('BabySitterBundle:Qualite:AjouterQualite.html.twig', array('form' => $form->createView()));
    }
    //Modifier Qualite
    public function modifierQualiteAction($id){
        
        $em=  $this->getDoctrine()->getManager();
        $qualite=$em->getRepository('BabySitterBundle:Qualite')->find($id);
        $f=new ModifierQualiteForm();
        $form= $this->createForm($f,$qualite);
        $request=  $this->get('request');
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em->persist($qualite);
                $em->flush();
                     return $this->redirect($this->generateUrl('affichage_qualite'));
            }
        }
        
        return $this->render('BabySitterBundle:Qualite:ModifierQualite.html.twig',array('form'=>$form->createView(),'qualite'=>$qualite));
    }
 //Suppression Qualite  
public function SupprimerQualiteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Qualite=$em->getRepository('BabySitterBundle:Qualite')->findOneByIdQualite($id);
        $em->remove($Qualite);
        $em->flush();
        $em1 = $this->getDoctrine()->getManager();
        $Qualites = $em1->getRepository('BabySitterBundle:Qualite')->findAll();
        return $this->render('BabySitterBundle:Qualite:AfficherQualite.html.twig', array('Qualites' => $Qualites));
}
}
