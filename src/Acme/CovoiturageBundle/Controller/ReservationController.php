<?php

namespace Acme\CovoiturageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\CovoiturageBundle\Entity\Reservation;
use Acme\CovoiturageBundle\Form\ReservationType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Reservation controller.
 *
 * @Route("/reservation")
 */
class ReservationController extends Controller {

    public function reservationAnnonceAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeCovoiturageBundle:Reservation')->showReservationAnnonceUser($id);

        return($this->render("AcmeCovoiturageBundle:Reservation:AnnonceReservation.html.twig", array("entities" => $entities)));
    }

    /**
     * Lists all Reservation entities.
     *
     * @Route("/", name="reservation")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeCovoiturageBundle:Reservation')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Reservation entity.
     *
     * @Route("/", name="reservation_create")
     * @Method("POST")
     * @Template("AcmeCovoiturageBundle:Reservation:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Reservation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reservation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Reservation entity.
     *
     * @param Reservation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reservation $entity) {
        $form = $this->createForm(new ReservationType(), $entity, array(
            'action' => $this->generateUrl('reservation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reservation entity.
     *
     * @Route("/new", name="reservation_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Reservation();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Reservation entity.
     *
     * @Route("/annonceAdd", name="reservation_add")
     * @Method("POST")

     */
    public function AddAction() {


        $entity = new Reservation();


        $nbr_p = $this->get('request')->request->get('nbr_p');
        $entity->setNbrPlace($nbr_p);
        $entity->setStatusRes("non confirmer");
        $entity->setCommentaireRes($this->get('request')->request->get('comm_user'));
        $entityAn = $this->showAnnonce($this->get('request')->request->get('id_ann'));
        $entityUser = $this->showUser(1);
        $entity->setIdAnnonce($entityAn);

        /* $session = new Session();

          $session->set('user', $entityUser); */
        $entity->setIdUtilisateur($entityUser);




        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('annonce'));
    }

    public function showAnnonce($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Annonce')->find($id);



        return $entity;
    }

    public function showUser($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:User')->find($id);


        return $entity;
    }

    /**
     * Finds and displays a Reservation entity.
     *
     * @Route("/{id}", name="reservation_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Reservation entity.
     *
     * @Route("/{id}/edit", name="reservation_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    public function acceptReservationAction($id_ann,$id) {


        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $entity->setStatusRes("yes");
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
      
       

            $em->flush();
            
        
          $entitiesRes = $em->getRepository('AcmeCovoiturageBundle:Reservation')->showReservationAnnonceUser($id_ann);

        return($this->render("AcmeCovoiturageBundle:Reservation:AnnonceReservation.html.twig", array("entities" => $entitiesRes)));
    
        
        
    }

    public function refuseReservationAction($id_ann,$id) {
     
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $entity->setStatusRes("no");
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
      
       

            $em->flush();
            
        
          $entitiesRes = $em->getRepository('AcmeCovoiturageBundle:Reservation')->showReservationAnnonceUser($id_ann);

        return($this->render("AcmeCovoiturageBundle:Reservation:AnnonceReservation.html.twig", array("entities" => $entitiesRes)));
    }

    /**
     * Creates a form to edit a Reservation entity.
     *
     * @param Reservation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Reservation $entity) {
        $form = $this->createForm(new ReservationType(), $entity, array(
            'action' => $this->generateUrl('reservation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Reservation entity.
     *
     * @Route("/{id}", name="reservation_update")
     * @Method("PUT")
     * @Template("AcmeCovoiturageBundle:Reservation:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {


        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reservation_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Reservation entity.
     *
     * @Route("/{id}", name="reservation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeCovoiturageBundle:Reservation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reservation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reservation'));
    }

    /**
     * Creates a form to delete a Reservation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('reservation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
