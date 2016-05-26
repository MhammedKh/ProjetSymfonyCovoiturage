<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="FK_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="FK_annonce_2", columns={"ville_dep"}), @ORM\Index(name="FK_annonce_3", columns={"ville_arr"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="marque_voiture", type="string", length=45, nullable=true)
     */
    private $marqueVoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_place", type="integer", nullable=true)
     */
    private $nombrePlace;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_place", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixPlace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dep", type="date", nullable=true)
     */
    private $dateDep;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_dep", type="string", length=45, nullable=true)
     */
    private $heureDep;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_dep", type="string", length=45, nullable=true)
     */
    private $lieuDep;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ins", type="date", nullable=true)
     */
    private $dateIns;

    /**
     * @var integer
     *
     * @ORM\Column(name="fumeur", type="integer", nullable=true)
     */
    private $fumeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="musique", type="integer", nullable=true)
     */
    private $musique;

    /**
     * @var integer
     *
     * @ORM\Column(name="discussion", type="integer", nullable=true)
     */
    private $discussion;

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
     * @var \Acme\CovoiturageBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_arr", referencedColumnName="id")
     * })
     */
    private $villeArr;

    /**
     * @var \Acme\CovoiturageBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_dep", referencedColumnName="id")
     * })
     */
    private $villeDep;


}
