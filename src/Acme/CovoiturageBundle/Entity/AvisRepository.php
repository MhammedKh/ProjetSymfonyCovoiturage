<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\CovoiturageBundle\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * Description of AvisRepository
 *
 * @author SAMSUNG
 */
class AvisRepository extends EntityRepository {

    public function showAvisUserAnnonce($id_ann , $id_user) {

        $qt = $this->createQueryBuilder('a');
        $qt->select('a')
                
                ->where('a.idUtilisateur=:u')
                ->andWhere('a.idAnnonce=:ia') 
                 ->setParameter('ia', $id_ann )
                
                ->setParameter('u', $id_user);
         
        return $qt->getQuery()->getResult();
    }
    
    
    public function showAvisAnnonce($id_ann ) {

        $qt = $this->createQueryBuilder('a');
        $qt->select('a')
                
                ->where('a.idAnnonce=:ia')
                
                 ->setParameter('ia', $id_ann );
                
                
         
        return $qt->getQuery()->getResult();
    }
     
}
