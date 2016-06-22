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
 * @Route("/annonce")
 */
class AnnonceController extends Controller {

    public function annonceUserAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeCovoiturageBundle:Annonce')->showAnnonceuser($this->getUser());

        foreach ($entities as $row) {
            $row->sumReserv = $this->sommeReservationAnnonce($row->id);
            $row->nbrPlacedesp = $row->nombrePlace - $this->sommeReservationAnnonce($row->id);
        }

        return($this->render("AcmeCovoiturageBundle:Annonce:userAnnonce.html.twig", array("entities" => $entities)));
    }

    public function searchAnnonceAction() {


        $villedep = $this->get('request')->request->get('from');
        $villedest = $this->get('request')->request->get('to');
        $date = $this->get('request')->request->get('date');


        $day = substr($date, 3, 2);
        $month = substr($date, 0, 2);
        $year = substr($date, 6, 4);
        $date = $year . '-' . $month . '-' . $day;

        $em = $this->getDoctrine()->getManager();

        $annoncelist = $em->getRepository("AcmeCovoiturageBundle:Annonce")
                ->search($villedep, $villedest, $date);
        foreach ($annoncelist as $row) {

            $sumAvis = 0;
            $i = 0;
            $row->nbrPlacedesp = $row->nombrePlace - $this->sommeReservationAnnonce($row->id);
            $entitieAvis = $em->getRepository('AcmeCovoiturageBundle:Avis')->showAvisAnnonce($row->id);
            foreach ($entitieAvis as $rowAvis) {
                $sumAvis+=$rowAvis->getNote();
                $i++;
            }
            if ($i != 0) {
                $row->idUtilisateur->note+=round(($sumAvis / $i));
            }
        }


        return $this->render('AcmeCovoiturageBundle:Annonce:index.html.twig', array(
                    'entities' => $annoncelist
        ));
    }

    /**
     * Lists all Annonce entities.
     *
     * @Route("/", name="annonce")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeCovoiturageBundle:Annonce')->findAll();

        foreach ($entities as $row) {
            $row->nbrPlacedesp = $row->nombrePlace - $this->sommeReservationAnnonce($row->id);
        }

        return array(
            'entities' => $entities,
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

    /**
     * Creates a new Annonce entity.
     *
     * @Route("/", name="annonce_create")
     * @Method("POST")
     * @Template("AcmeCovoiturageBundle:Annonce:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Annonce();
        $entity->status = "En cour";
        $entity->dateIns = date("Y-m-d");
        //TODO
        $entity->idUtilisateur = $this->showUser($this->getUser());
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $datedepString = $entity->dateDep;
        $day = substr($datedepString, 3, 2);
        $month = substr($datedepString, 0, 2);
        $year = substr($datedepString, 6, 4);
        $entity->dateDep = $year . '-' . $month . '-' . $day;

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('annonce'));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    public function showUser($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:User')->find($id);


        return $entity;
    }

    /**
     * Creates a form to create a Annonce entity.
     *
     * @param Annonce $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Annonce $entity) {
        $form = $this->createForm(new AnnonceType(), $entity, array(
            'action' => $this->generateUrl('annonce_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Annonce entity.
     *
     * @Route("/new", name="annonce_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Annonce();

        $form = $this->createCreateForm($entity);


        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Annonce entity.
     *
     * @Route("/{id}", name="annonce_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Annonce')->find($id);

        $entity->nbrPlacedesp = $entity->nombrePlace - $this->sommeReservationAnnonce($id);

         $sumAvis = 0;
            $i = 0;
            
            $entitieAvis = $em->getRepository('AcmeCovoiturageBundle:Avis')->showAvisAnnonce($entity->id);
            foreach ($entitieAvis as $rowAvis) {
                $sumAvis+=$rowAvis->getNote();
                $i++;
            }
            if ($i != 0) {
                $entity->idUtilisateur->note+=round(($sumAvis / $i));
            }
        
        
        
        

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Annonce entity.
     *
     * @Route("/{id}/edit", name="annonce_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Annonce entity.
     *
     * @param Annonce $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Annonce $entity) {
        $form = $this->createForm(new AnnonceType(), $entity, array(
            'action' => $this->generateUrl('annonce_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Annonce entity.
     *
     * @Route("/{id}", name="annonce_update")
     * @Method("PUT")
     * @Template("AcmeCovoiturageBundle:Annonce:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('annonce_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Annonce entity.
     *
     * @Route("/{id}", name="annonce_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeCovoiturageBundle:Annonce')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Annonce entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('annonce'));
    }

    /**
     * Creates a form to delete a Annonce entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('annonce_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
