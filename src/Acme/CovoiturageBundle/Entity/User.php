<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public $note=0;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=45, nullable=true)
     */
    protected $tel;
    
  /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    public $nom;
    
      /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    public $prenom;
    
    public function __construct()
    { 
        parent::__construct();
        // yourownlogic
    }
    
    
     
    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }
    
    /**
     * Set photo
     *
     * @param string $nom
     * @return User
     */
    public function setnom($nom)
    {
        $this->nom= $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getnom()
    {
        return $this->nom;
    }
    
     /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
    
    public function __toString() {
        return $this->username;
    }
    
}
