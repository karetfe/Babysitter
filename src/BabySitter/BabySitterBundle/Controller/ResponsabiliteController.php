<?php
namespace BabySitter\BabySitterBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BabySitter\BabySitterBundle\Entity\Responsabilite;
use \Symfony\Component\HttpFoundation\Response;
use \BabySitter\BabySitterBundle\Form\AjouterResponsabiliteForm;
use BabySitter\BabySitterBundle\Form\ModifierResponsabiliteForm;

class ResponsabiliteController extends Controller {
     //Affichage Responsabilite 
    public function afficherResponsabiliteAction(){
        $em=  $this->getDoctrine()->getManager();
        $Responsabilites=$em->getRepository('BabySitterBundle:Responsabilite')->findAll();
        return $this->render('BabySitterBundle:Responsabilite:AfficherResponsabilite.html.twig', array('Responsabilites'=>$Responsabilites));
 
    }
    //Ajout Responsabilite
  public function ajouterResponsabiliteAction() {
        $Responsabilite = new Responsabilite();
        $form = $this->createForm(new AjouterResponsabiliteForm(),$Responsabilite);          
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($Responsabilite);
            $em->flush();
            return new Response("Ajout avec succée");
        }
        return $this->render('BabySitterBundle:Responsabilite:AjouterResponsabilite.html.twig', array('form' => $form->createView()));
    }
    
    //Modifier Responsabilite
    public function modifierResponsabiliteAction($id){
        
        $em=  $this->getDoctrine()->getManager();
        $responsabilite=$em->getRepository('BabySitterBundle:Responsabilite')->find($id);
        $f=new ModifierResponsabiliteForm();
        $form= $this->createForm($f,$responsabilite);
        $request=  $this->get('request');
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em->persist($responsabilite);
                $em->flush();
                     return $this->redirect($this->generateUrl('affichage_responsabilite'));
            }
        }  
        return $this->render('BabySitterBundle:Responsabilite:ModifierResponsabilite.html.twig',array('form'=>$form->createView(),'responsabilite'=>$responsabilite));
    }
    //Suppression Responsabilite
    public function supprimerResponsabiliteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Responsabilite=$em->getRepository('BabySitterBundle:Responsabilite')->findOneByIdResponsabbilite($id);
        $em->remove($Responsabilite);
        $em->flush();
        $em1 = $this->getDoctrine()->getManager();
        $Responsabilites = $em1->getRepository('BabySitterBundle:Responsabilite')->findAll();
        return $this->render('BabySitterBundle:Responsabilite:AfficherResponsabilite.html.twig', array('Responsabilites' => $Responsabilites));
           
    }
}
