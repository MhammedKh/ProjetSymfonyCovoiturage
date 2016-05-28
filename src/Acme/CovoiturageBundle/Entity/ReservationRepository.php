<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ReservationRepository extends EntityRepository {

    public function showReservationAnnonce($id) {

        $qt = $this->createQueryBuilder('r');
        $qt->select('r')
                 
                ->where('r.idAnnonce=:d')
                
                ->setParameter('d',$id);
         
        return $qt->getQuery()->getResult();
    }

}

?>