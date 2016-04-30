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
 * @Route("/index")
 */
class IndexController extends Controller
{

    /**
     * Lists all Annonce entities.
     *
     * @Route("/", name="index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeCovoiturageBundle:Annonce')->findAll();

        return array(
            'entities' => $entities,
        );
    }
}
    
