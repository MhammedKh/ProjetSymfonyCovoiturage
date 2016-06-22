<?php

namespace Acme\CovoiturageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\CovoiturageBundle\Entity\Avis;
use Acme\CovoiturageBundle\Form\AvisType;

/**
 * Avis controller.
 *
 * @Route("/avis")
 */
class AvisController extends Controller
{

    /**
     * Lists all Avis entities.
     *
     * @Route("/", name="avis")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeCovoiturageBundle:Avis')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Avis entity.
     *
     * @Route("/", name="avis_create")
     * @Method("POST")
     * @Template("AcmeCovoiturageBundle:Avis:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Avis();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('avis_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Avis entity.
     *
     * @param Avis $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Avis $entity)
    {
        $form = $this->createForm(new AvisType(), $entity, array(
            'action' => $this->generateUrl('avis_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Avis entity.
     *
     * @Route("/new", name="avis_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Avis();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Avis entity.
     *
     * @Route("/{id}", name="avis_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Avis')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avis entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Avis entity.
     *
     * @Route("/{id}/edit", name="avis_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Avis')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avis entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Avis entity.
    *
    * @param Avis $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Avis $entity)
    {
        $form = $this->createForm(new AvisType(), $entity, array(
            'action' => $this->generateUrl('avis_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Avis entity.
     *
     * @Route("/{id}", name="avis_update")
     * @Method("PUT")
     * @Template("AcmeCovoiturageBundle:Avis:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeCovoiturageBundle:Avis')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avis entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('avis_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Avis entity.
     *
     * @Route("/{id}", name="avis_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeCovoiturageBundle:Avis')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Avis entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('avis'));
    }

    /**
     * Creates a form to delete a Avis entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('avis_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
     /**
     * new avis user.
     *
     * @Route("/{id_ann}/{note}", name="avis_user")
     * @Method("GET")
     * @Template()
     */
    public function avis_userAction($id_ann,$note)
    {
        $em = $this->getDoctrine()->getManager();

        
        $entity = new Avis();
       $entity->setIdAnnonce($em->getRepository('AcmeCovoiturageBundle:Annonce')->find($id_ann));
       $entity->setIdUtilisateur($this->getUser());
       $entity->setNote($note);

        
            
            $em->persist($entity);
            $em->flush();
            
            $entities = $em->getRepository('AcmeCovoiturageBundle:Reservation')->showReservationUser($this->getUser());
            foreach ($entities as $row)
        {
             $i=0;
             $entitiesAvis = $em->getRepository('AcmeCovoiturageBundle:Avis')->showAvisUserAnnonce($row->getIdAnnonce()->getId(),$this->getUser()->getId());
             foreach ($entitiesAvis as $rowAvis)
             {
                 $i=$i+1;
             }
             $row->note=$i;
        }

            return($this->render("AcmeCovoiturageBundle:Reservation:index.html.twig", array("entities" => $entities)));
    }
    
    
}
