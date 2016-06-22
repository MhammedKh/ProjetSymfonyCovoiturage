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
class IndexController extends Controller {

    /**
     * Lists all Annonce entities.
     *
     * @Route("/", name="index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AcmeCovoiturageBundle:Annonce')->showIndexAnnonce();

        foreach ($entities as $row) {
            $sumAvis = 0;
            $i=0;
            $row->nbrPlacedesp = $row->nombrePlace - $this->sommeReservationAnnonce($row->id);
            $entitieAvis = $em->getRepository('AcmeCovoiturageBundle:Avis')->showAvisAnnonce($row->id);
            foreach ($entitieAvis as $rowAvis) {
                $sumAvis+=$rowAvis->getNote();
                $i++;
            }
            if($i!=0)
            {
                $row->idUtilisateur->note+=round(($sumAvis/$i));
            }
            
        }

        $entitiesV = $em->getRepository('AcmeCovoiturageBundle:Ville')->findAll();



        return array(
            'entities' => $entities, 'entitiesVille' => $entitiesV
        );
    }

    public function sommeReservationAnnonce($id_ann) {
        $em = $this->getDoctrine()->getManager();
        $sum = 0;
        $entities = $em->getRepository('AcmeCovoiturageBundle:Reservation')->showReservationAnnonce($id_ann);
        foreach ($entities as $row) {
            $sum+=$row->getNbrPlace();
        }
        return $sum;
    }

}
