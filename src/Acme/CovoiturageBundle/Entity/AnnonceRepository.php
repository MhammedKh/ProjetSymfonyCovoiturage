<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AnnonceRepository extends EntityRepository {

    public function showIndexAnnonce() {

        $qt = $this->createQueryBuilder('a');
        $qt->select('a')
                 
                ->where('a.dateDep=:d')
                
                ->setParameter('d',date("Y-m-d"));
         
        return $qt->getQuery()->getResult();
    }

}

?>