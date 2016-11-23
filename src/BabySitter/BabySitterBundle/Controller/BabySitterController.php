<?php

namespace BabySitter\BabySitterBundle\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \BabySitter\BabySitterBundle\Entity\Utilisateur;

use \BabySitter\BabySitterBundle\Form\ModifFormBabySitter;

class BabySitterController extends Controller{
   
    //Affichage BabySitter (DQL)
    public function affichagerBabySitterSitterAction(){
        $em=  $this->getDoctrine()->getManager();
        $BabySitters=$em->getRepository('BabySitterBundle:Utilisateur')->findAll();
 
//        $em = $this->getDoctrine()->getManager();
//        $search ="BabySitter";
//        $query1 = $em->createQuery("SELECT B
//                FROM BabySitterBundle:Utilisateur B
//                WHERE B.type='$search'");
//        $query = $query1->getResult();
        
        return $this->render('BabySitterBundle:BabySitter:affichagerBabySitter.html.twig', array('BabySitters' => $BabySitters));   
    }
    
    //Ajout BabySitter
    public function ajouterBabySitterAction(){
        
        $request=$this->get('request');
       
        $nom=$request->get('nom');
        $prenom=$request->get('prenom');
        $dateNaissance=$request->get('date_de_naissance');
        $email=$request->get('email');
        $adresse=$request->get('adresse');
        $numeroTel=$request->get('numero_tel');
        $codePostal=$request->get('code_postal');
        //$type=$request->get('type');
        $nationalite=$request->get('nationalite');
        $sex=$request->get('sex');
        //$photo=$request->get('photo');
        
        $BabySitter=new Utilisateur();
        
        $BabySitter->setNom($nom);
        $BabySitter->setPrenom($prenom);
        $BabySitter->setDateDeNaissance($dateNaissance);
        $BabySitter->setEmail($email);
        $BabySitter->setAdresse($adresse);
        $BabySitter->setNumeroTel($numeroTel);
        $BabySitter->setCodePostal($codePostal);
        $BabySitter->setNationalite($nationalite);
        $BabySitter->setSex($sex);
        $BabySitter->setType("BabySitter");
        //$BabySitter->setPhoto($photo);
        
        if(($BabySitter->getNom($nom)!="" ) 
          && ($BabySitter->getPrenom($prenom)!="") 
          && ($BabySitter->getDateDeNaissance($dateNaissance)!="")
          && ($BabySitter->getEmail($email)!="") 
          && ($BabySitter->getAdresse($adresse)!="")
          && ($BabySitter->getNumeroTel($numeroTel)!="")
          && ($BabySitter->getCodePostal($codePostal)!="")
          && ($BabySitter->getNationalite($nationalite)!="")
          && ($BabySitter->setSex($sex)!="")
          ) //&& ($BabySitter->setPhoto($photo)!="")
        {
            $em=  $this->getDoctrine()->getManager();
            $em->persist($BabySitter);
            $em->flush();
   
            return $this->redirect($this->generateUrl('affichage_babySitter'));
        }
        return $this->render('BabySitterBundle:Template:InscriptionBabySitter.html.twig');
        //return $this->render('BabySitterBundle:BabySitter:ajoutBabySitter.html.twig');
    }
    
    //Modifier BabySitter
    public function modifierBabySitterAction($id){
        
        $em=  $this->getDoctrine()->getManager();
        $babySitter=$em->getRepository('BabySitterBundle:Utilisateur')->find($id);
        $f=new ModifFormBabySitter();
        $form= $this->createForm($f,$babySitter);
        $request=  $this->get('request');
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em->persist($babySitter);
                $em->flush();
                     return $this->redirect($this->generateUrl('affichage_babySitter'));
            }
        }
        
        return $this->render('BabySitterBundle:BabySitter:modifierBabySitter.html.twig',array('form'=>$form->createView(),'babySitters'=>$babySitter));
    }
    
    //Suppression BabySitter
     public function supprimerBabySitterAction($id){
         $em=$this->getDoctrine()->getManager();
         $BabySitter=$em->getRepository('BabySitterBundle:Utilisateur')->findOneByIduser($id);
         $em->remove($BabySitter);
         $em->flush();
         $em1 = $this->getDoctrine()->getManager();
         $BabySitters = $em1->getRepository('BabySitterBundle:Utilisateur')->findAll();
         return $this->render('BabySitterBundle:BabySitter:affichagerBabySitter.html.twig', array('BabySitters' => $BabySitters));
    }
    
    //Recherche BabySitter
    public function rechercherBabySitterAction() {
        $req = $this->get('request');
        $nationalite = $req->get('nationalite');
        $em = $this->getDoctrine()->getManager();
        $babySitter = $em->getRepository('BabySitterBundle:Utilisateur')->findByNationalite($nationalite);
        return $this->render('BabySitterBundle:BabySitter:rechercheBabySitter.html.twig',array("BabySitter" => $babySitter));
    }
    
    }

    ///////////////////////////AJOUT TWIG
//    <form method="POST">
//    <table>
//        <tr><td> Nom : <input type ="text" name="nom"/> </td> </tr>
//        <tr><td> Prenom : <input type="text" name="prenom" value=""/> </td></tr>
//        <tr>
//            <td> Sexe :  </br>
//             <input type="radio" name="homme" value="homme"/> Homme
//             <input type="radio" name="femme" value="femme"/> Femme
//          </td> 
//        </tr>
//        <tr><td> Date de Naissance : <input type="text" name="date_de_naissance"/></td></tr>
//        <tr><td> Email : <input type="text" name="email"/></td></tr>
//        <tr><td> Adresse : <input type="text" name="adresse"/> </td></tr>
//        <tr><td> Code Postal : <input type="text" name="code_postal"/></td></tr>
//        <tr><td> Numero Telephone : <input type="text" name="numero_tel"/></td></tr>
//        <tr><td> Nationalite : <input type="text" name="nationalite"/></td></tr>
//        <tr><td> Photo : <input type="text" name="photo"/></td></tr>
//        
//        <tr><td> <input type="submit" value="Ajouter" name="ajouter"/></td></tr>
//   </table>
//</form>