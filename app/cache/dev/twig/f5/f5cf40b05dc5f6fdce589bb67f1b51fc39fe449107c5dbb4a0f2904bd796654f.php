<?php

/* AcmeCovoiturageBundle:map:Map.html.twig */
class __TwigTemplate_e1c7036321768015e70c25343b69b0a71adf9300f20b63deff72c1a874ecb8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:map:Map.html.twig", 1);
        $this->blocks = array(
            'styleMap' => array($this, 'block_styleMap'),
            'body' => array($this, 'block_body'),
            'javascriptsMap' => array($this, 'block_javascriptsMap'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_styleMap($context, array $blocks = array())
    {
        // line 3
        echo "   <style>
html,
body,
#map-canvas {
  height: 100%;
  width: 100%;
  margin: 0px;
  padding: 0px
}
</style>";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<!--<input type=\"button\" id=\"routebtn\" value=\"route\"  />-->
<div id=\"map-canvas\"></div>
";
    }

    // line 18
    public function block_javascriptsMap($context, array $blocks = array())
    {
        echo " 
    <script  src=\"https://maps.googleapis.com/maps/api/js\"></script>
<script>function mapLocation() {
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var chicago = new google.maps.LatLng(";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["villdep"]) ? $context["villdep"] : $this->getContext($context, "villdep")), "altitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["villdep"]) ? $context["villdep"] : $this->getContext($context, "villdep")), "longitude", array()), "html", null, true);
        echo ");
        var mapOptions = {
            zoom: 7,
            center: chicago
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        directionsDisplay.setMap(map);
        calcRoute();
       // google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
    }

    function calcRoute() {
        var start = new google.maps.LatLng(";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["villdep"]) ? $context["villdep"] : $this->getContext($context, "villdep")), "altitude", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["villdep"]) ? $context["villdep"] : $this->getContext($context, "villdep")), "longitude", array()), "html", null, true);
        echo ");
        
        var end = new google.maps.LatLng(";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["villarr"]) ? $context["villarr"] : $this->getContext($context, "villarr")), "altitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["villarr"]) ? $context["villarr"] : $this->getContext($context, "villarr")), "longitude", array()), "html", null, true);
        echo ");
        var bounds = new google.maps.LatLngBounds();
        bounds.extend(start);
        bounds.extend(end);
        map.fitBounds(bounds);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                directionsDisplay.setMap(map);
            } else {
                alert(\"Directions Request from \" + start.toUrlValue(6) + \" to \" + end.toUrlValue(6) + \" failed: \" + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}
mapLocation();</script>
";
    }

    public function getTemplateName()
    {
        return "AcmeCovoiturageBundle:map:Map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 41,  85 => 39,  68 => 27,  55 => 18,  49 => 15,  46 => 13,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block styleMap %}*/
/*    <style>*/
/* html,*/
/* body,*/
/* #map-canvas {*/
/*   height: 100%;*/
/*   width: 100%;*/
/*   margin: 0px;*/
/*   padding: 0px*/
/* }*/
/* </style>{% endblock %}*/
/* {% block body -%}*/
/* */
/* <!--<input type="button" id="routebtn" value="route"  />-->*/
/* <div id="map-canvas"></div>*/
/* {% endblock %}*/
/* {% block javascriptsMap %} */
/*     <script  src="https://maps.googleapis.com/maps/api/js"></script>*/
/* <script>function mapLocation() {*/
/*     var directionsDisplay;*/
/*     var directionsService = new google.maps.DirectionsService();*/
/*     var map;*/
/* */
/*     function initialize() {*/
/*         directionsDisplay = new google.maps.DirectionsRenderer();*/
/*         var chicago = new google.maps.LatLng({{ villdep.altitude }}, {{ villdep.longitude }});*/
/*         var mapOptions = {*/
/*             zoom: 7,*/
/*             center: chicago*/
/*         };*/
/*         map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);*/
/*         directionsDisplay.setMap(map);*/
/*         calcRoute();*/
/*        // google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);*/
/*     }*/
/* */
/*     function calcRoute() {*/
/*         var start = new google.maps.LatLng({{ villdep.altitude }},{{ villdep.longitude }});*/
/*         */
/*         var end = new google.maps.LatLng({{ villarr.altitude }}, {{ villarr.longitude }});*/
/*         var bounds = new google.maps.LatLngBounds();*/
/*         bounds.extend(start);*/
/*         bounds.extend(end);*/
/*         map.fitBounds(bounds);*/
/*         var request = {*/
/*             origin: start,*/
/*             destination: end,*/
/*             travelMode: google.maps.TravelMode.DRIVING*/
/*         };*/
/*         directionsService.route(request, function (response, status) {*/
/*             if (status == google.maps.DirectionsStatus.OK) {*/
/*                 directionsDisplay.setDirections(response);*/
/*                 directionsDisplay.setMap(map);*/
/*             } else {*/
/*                 alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     google.maps.event.addDomListener(window, 'load', initialize);*/
/* }*/
/* mapLocation();</script>*/
/* {% endblock %}*/
