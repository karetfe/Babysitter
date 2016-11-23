<?php

/* BabySitterBundle::base.html.twig */
class __TwigTemplate_808c9b5bc3d813b5a210b8350b8bff446ba820044cf6373fe7685bca8b8f90e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html>
    <head>
        <style type=\"text/css\"> 
            html,body, #map-canvas { height: 100%; margin: 0; padding: 0;}
        </style>
        <script type=\"text/javascript\"
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ1DKMR844LXnte37eEhr3nD3tfBg6hnY\">
        </script>
        <script type=\"text/javascript\">
           function initialize() {
               var myLatlng = new google.maps.LatLng(36.0819440,9.3747220);
               var mapOptions = {
                   zoom: 8,
                   center: myLatlng
                };
               var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
               //marker 1
               var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title: 'Hello Siliana!'
               });
               
               
               google.maps.event.addListener(map, 'center_changed', function() {
               // 3 seconds after the center of the map has changed, pan back to the marker.
               window.setTimeout(function() {
                   map.panTo(marker.getPosition());
                   }, 3000);
               });
               google.maps.event.addListener(marker, 'click', function() {
                   map.setZoom(8);
                   map.setCenter(marker.getPosition());
               });
               
            marker.setMap(map);
            
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        ";
        // line 44
        $this->displayBlock('container', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
    }

    // line 44
    public function block_container($context, array $blocks = array())
    {
        // line 45
        echo "        ";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 45,  72 => 44,  66 => 46,  64 => 44,  20 => 2,);
    }
}
