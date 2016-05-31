<?php

namespace Acme\CovoiturageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\CovoiturageBundle\Entity\Annonce;
use Acme\CovoiturageBundle\Form\AnnonceType;

/**
 * Annonce controller.
 *
 * @Route("/map")
 */
class MapController extends Controller
{

    /**
     * Lists all Annonce entities.
     *
     * @Route("/{from}/{to}", name="map")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($from,$to)
    {
         $em = $this->getDoctrine()->getManager();

        $villdep = $em->getRepository('AcmeCovoiturageBundle:Ville')->find($from);
        $villarr = $em->getRepository('AcmeCovoiturageBundle:Ville')->find($to);
       
         return($this->render("AcmeCovoiturageBundle:map:Map.html.twig",array(
            'villdep' => $villdep,'villarr'=>$villarr)));
    }
    
  
}
    
