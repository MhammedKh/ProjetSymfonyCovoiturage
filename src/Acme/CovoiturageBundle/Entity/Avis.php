<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="FK_avis_1", columns={"id_annonce"}), @ORM\Index(name="FK_avis_2", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\CovoiturageBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\Utilisateur")
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
     * Set note
     *
     * @param integer $note
     * @return Avis
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
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
     * @return Avis
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
     * @return Avis
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
