<?php

namespace BabySitter\BabySitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Longitudes='142';
        $Latitudes='-42';
        return $this->render('BabySitterBundle:Map:map.html.twig', array('Longitudes' => $Longitudes , 'Latitudes' => $Latitudes));
    }
    
    public function homeAction()
    {
        return $this->render('BabySitterBundle:Template:home.html.twig');
    }
    public function mp3Action()
    {
        return $this->render('BabySitterBundle:MP3:mp3.html.twig');
    }
    
    public function InscriptionBabySitterAction()
    {
        return $this->render('BabySitterBundle:Template:InscriptionBabySitter.html.twig');
    }
    public function profileBabySitterAction()
    {
        return $this->render('BabySitterBundle:Template:ProfileBabySitter.html.twig');
    }   
    
    public function contactBabySitterAction()
    {
        return $this->render('BabySitterBundle:Template:ContactBabySitter.html.twig');
    }
}

//var myLatlng2 = new google.maps.LatLng(10.19556,36.86250);
//               var mapOptions2 = {
//                   zoom: 4,
//                   center: myLatlng2
//                };
//               var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions2);
//
//               var marker2 = new google.maps.Marker({
//                   position: myLatlng2,
//                   map: map,
//                   title: 'Hello Siliana!'
//               });
