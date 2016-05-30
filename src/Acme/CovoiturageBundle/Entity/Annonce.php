<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="FK_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="FK_annonce_2", columns={"ville_dep"}), @ORM\Index(name="FK_annonce_3", columns={"ville_arr"})})
 * @ORM\Entity(repositoryClass="Acme\CovoiturageBundle\Entity\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="marque_voiture", type="string", length=45, nullable=true)
     */
    public $marqueVoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_place", type="integer", nullable=true)
     */
    public $nombrePlace;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_place", type="float", precision=10, scale=0, nullable=true)
     */
    public $prixPlace;
    public $sumReserv;
    /**
     * @var \string
     *
     * @ORM\Column(name="date_dep", type="string", nullable=true)
     */
    public $dateDep;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_dep", type="string", length=45, nullable=true)
     */
    public $heureDep;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_dep", type="string", length=45, nullable=true)
     */
    public $lieuDep;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=true)
     */
    public $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    public $status;

    /**
     * @var string
     *
     * @ORM\Column(name="date_ins", type="string", nullable=true)
     */
    public $dateIns;

    /**
     * @var integer
     *
     * @ORM\Column(name="fumeur", type="integer", nullable=true)
     */
    public $fumeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="musique", type="integer", nullable=true)
     */
    public $musique;

    /**
     * @var integer
     *
     * @ORM\Column(name="discussion", type="integer", nullable=true)
     */
    public $discussion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var \Acme\CovoiturageBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    public $idUtilisateur;

    /**
     * @var \Acme\CovoiturageBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_arr", referencedColumnName="id")
     * })
     */
    public $villeArr;

    /**
     * @var \Acme\CovoiturageBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_dep", referencedColumnName="id")
     * })
     */
    public $villeDep;
    
    public $nbrPlacedesp ;
    
    
     /**
     * Get villeDep
     *
     * @return \Acme\CovoiturageBundle\Entity\Ville 
     */
    public function getVilleDep()
    {
        return $this->villeDep;
    }
    
    
     /**
     * Get villeDepString
     *
     * @return string
     */
    public function getVilleDepString()
    {
        return $this->villeDep->nomV;
    }
    
    
    
    
         /**
     * Get villeArr
     *
     * @return \Acme\CovoiturageBundle\Entity\Ville
     */
    public function getVilleArr()
    {
        return $this->villeArr;
    }
    
    /**
       * Get villeArrString
     *
     * @return string
     */
    public function getVilleArrString()
    {
        return $this->villeArr->nomV;
    }
    
    
    
        /**
     * Get heurDep
     *
     * @return string 
     */
    public function getHeurDep()
    {
        return $this->heureDep;
    }
    
    
       /**
     * Get getId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
     /**
     * Get NameUser
     *
     * @return \Acme\CovoiturageBundle\Entity\User 
     */
    public function getNameUser()
    {
        return $this->idUtilisateur->getUsername();
    }
    
    
      /**
     * Get TelUser
     *
     * @return \Acme\CovoiturageBundle\Entity\User 
     */
    public function getTelUser()
    {
        return $this->idUtilisateur->getTel();
    }
    
    
    
      /**
     * Get DateDep
     *
     * @return Date
     */
    public function getDateDep()
    {
        return $this->dateDep;
    }
    
     /**
     * Get Nbrplace
     *
     * @return integer
     */
    public function getNbrPlace()
    {
        return $this->nombrePlace;
    }
    
     /**
     * Get prixPlace
     *
     * @return float
     */
    public function getPrixPlace()
    {
        return $this->prixPlace;
    }
    
    /**
     * Get prixPlace
     *
     * @return string
     */
    public function __toString() {
        
        return $this->id." ";
    }

    
    
 



}
