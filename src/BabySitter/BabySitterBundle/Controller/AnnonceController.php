<?php
namespace BabySitter\BabySitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \BabySitter\BabySitterBundle\Entity\Annonce;

use \BabySitter\BabySitterBundle\Form\AjoutAnnonceForm;
use BabySitter\BabySitterBundle\Form\ModifierAnnonceForm;

class AnnonceController extends Controller{
    
    //Affichage Annonce 
    public function afficherAnnonceAction(){
        
        $em=  $this->getDoctrine()->getManager();
        $Annonces=$em->getRepository('BabySitterBundle:Annonce')->findAll();
        return $this->render('BabySitterBundle:Annonce:affichagerAnnonce.html.twig', array('Annonces'=>$Annonces));
 
    }
    
    //Ajout Annonce
    public function ajouterAnnonceAction(){
        $id=9;
        $em = $this->getDoctrine()->getManager();
        $BabySitter = $em->getRepository('BabySitterBundle:Utilisateur')->findOneByIduser($id);
       
        $Annonce = new Annonce();
        $Annonce->setIduser($BabySitter);
        
        $form = $this->createForm(new AjoutAnnonceForm(), $Annonce);
        $request = $this->getRequest();
        
        if ($form->handlerequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();          
            $em->persist($Annonce);            
            $em->flush();
            return $this->redirect($this->generateUrl('affichage_annonce'));
        }
        return $this->render('BabySitterBundle:Annonce:ajouterAnnonce.html.twig', array('form'=> $form->createView()));
    
    }
    
    //Modifier Annonce
    public function modifierAnnonceAction($id){
        
        $em=  $this->getDoctrine()->getManager();
        $annonce=$em->getRepository('BabySitterBundle:Annonce')->find($id);
        $f=new ModifierAnnonceForm();
        $form= $this->createForm($f,$annonce);
        $request=  $this->get('request');
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em->persist($annonce);
                $em->flush();
                     return $this->redirect($this->generateUrl('affichage_annonce'));
            }
        }
        
        return $this->render('BabySitterBundle:Annonce:modifierAnnonce.html.twig',array('form'=>$form->createView(),'annonce'=>$annonce));
    }
    
    //Suppression Annonce
     public function supprimerAnnonceAction($id){
         $em=$this->getDoctrine()->getManager();
         $Annonce=$em->getRepository('BabySitterBundle:Annonce')->findOneByIdAnnonce($id);
         $em->remove($Annonce);
         $em->flush();
         $em1 = $this->getDoctrine()->getManager();
         $Annonces = $em1->getRepository('BabySitterBundle:Annonce')->findAll();
         return $this->render('BabySitterBundle:Annonce:affichagerAnnonce.html.twig', array('Annonces' => $Annonces));
    }
    
    //Recherche Annonce
    public function rechercherAnnonceAction() {
        $req = $this->get('request');
        $titreAnnonce = $req->get('titre_annonce');
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('BabySitterBundle:Annonce')->findByTitreAnnonce($titreAnnonce);
        return $this->render('BabySitterBundle:Annonce:rechercherAnnonce.html.twig',array("Annonce" => $annonce));
    }
    
    
}
