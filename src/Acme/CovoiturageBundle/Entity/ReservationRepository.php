<?php

namespace Acme\CovoiturageBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ReservationRepository extends EntityRepository {

    public function showReservationAnnonce($id) {

        $qt = $this->createQueryBuilder('r');
        $qt->select('r')
                 
                ->where('r.idAnnonce=:d')
                ->andWhere('r.statusRes!=:e')
                ->setParameter('d',$id)
               ->setParameter('e', "no");
         
        return $qt->getQuery()->getResult();
    }
    
      public function showReservationAnnonceUser($id) {

        $qt = $this->createQueryBuilder('r');
        $qt->select('r')
                 
                ->where('r.idAnnonce=:d')
               
                ->setParameter('d',$id);
               
         
        return $qt->getQuery()->getResult();
    }
    
    
       public function showReservationUser($id) {

        $qt = $this->createQueryBuilder('r');
        $qt->select('r')
                 
                ->where('r.idUtilisateur=:u')
               
                ->setParameter('u',$id);
               
         
        return $qt->getQuery()->getResult();
    }

}




?>