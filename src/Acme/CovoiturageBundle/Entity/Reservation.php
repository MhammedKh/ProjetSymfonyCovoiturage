<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="FK_reservation_1", columns={"id_annonce"}), @ORM\Index(name="FK_reservation_2", columns={"id_utilisateur"})})
 * @ORM\Entity(repositoryClass="Acme\CovoiturageBundle\Entity\ReservationRepository")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_place", type="integer", nullable=true)
     */
    private $nbrPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_res", type="string", length=45, nullable=true)
     */
    private $commentaireRes;

    /**
     * @var string
     *
     * @ORM\Column(name="status_res", type="string", length=45, nullable=true)
     */
    private $statusRes;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\CovoiturageBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Acme\CovoiturageBundle\Entity\Annonce
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_annonce", referencedColumnName="id")
     * })
     */
    private $idAnnonce;



    /**
     * Set nbrPlace
     *
     * @param integer $nbrPlace
     * @return Reservation
     */
    public function setNbrPlace($nbrPlace)
    {
        $this->nbrPlace = $nbrPlace;

        return $this;
    }

    /**
     * Get nbrPlace
     *
     * @return integer 
     */
    public function getNbrPlace()
    {
        return $this->nbrPlace;
    }

    /**
     * Set commentaireRes
     *
     * @param string $commentaireRes
     * @return Reservation
     */
    public function setCommentaireRes($commentaireRes)
    {
        $this->commentaireRes = $commentaireRes;

        return $this;
    }

    /**
     * Get commentaireRes
     *
     * @return string 
     */
    public function getCommentaireRes()
    {
        return $this->commentaireRes;
    }

    /**
     * Set statusRes
     *
     * @param string $statusRes
     * @return Reservation
     */
    public function setStatusRes($statusRes)
    {
        $this->statusRes = $statusRes;

        return $this;
    }

    /**
     * Get statusRes
     *
     * @return string 
     */
    public function getStatusRes()
    {
        return $this->statusRes;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUtilisateur
     *
     * @param \Acme\CovoiturageBundle\Entity\Utilisateur $idUtilisateur
     * @return Reservation
     */
    public function setIdUtilisateur(\Acme\CovoiturageBundle\Entity\Utilisateur $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \Acme\CovoiturageBundle\Entity\Utilisateur 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idAnnonce
     *
     * @param \Acme\CovoiturageBundle\Entity\Annonce $idAnnonce
     * @return Reservation
     */
    public function setIdAnnonce(\Acme\CovoiturageBundle\Entity\Annonce $idAnnonce = null)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return \Acme\CovoiturageBundle\Entity\Annonce 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }
}
