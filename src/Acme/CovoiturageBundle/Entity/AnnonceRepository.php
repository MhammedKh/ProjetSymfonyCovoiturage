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
          public function search($villedep, $villedest, $date)
    {  
        $qt = $this->createQueryBuilder('j');
        $qt->select('j')
             
                ->where('j.villeDep=:vd ')
                ->setParameter('vd', $villedep)
               ->andWhere('j.villeArr=:va' )
                ->setParameter('va', $villedest)
                ->andWhere('j.dateDep=:dp')
                ->setParameter('dp', $date);
       
        return $qt->getQuery()->getResult();
    }
    public function showAnnonceuser($id_user) {

        $qt = $this->createQueryBuilder('a');
        $qt->select('a')
                 
                ->where('a.idUtilisateur=:u')
                
                ->setParameter('u',$id_user);
         
        return $qt->getQuery()->getResult();
    }

    

}

?>