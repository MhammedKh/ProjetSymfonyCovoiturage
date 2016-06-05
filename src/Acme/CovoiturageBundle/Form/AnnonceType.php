<?php

namespace Acme\CovoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marqueVoiture')
            ->add('nombrePlace','choice', array(
            'empty_value' => 'Nombre de place',
            'choices' => array(1 => '1', 2 => '2',3=>'3',4 => '4', 5 => '5',6=>'6'),
            'multiple' => false)
                
)
            ->add('prixPlace','integer',array())
            ->add('dateDep','text')
            ->add('heureDep',  'text')
            ->add('villeDep', 'entity', array( 'empty_value' => 'From','class' => 'AcmeCovoiturageBundle:Ville'))
            ->add('villeArr', 'entity', array( 'empty_value' => 'To','class' => 'AcmeCovoiturageBundle:Ville'))
            ->add('lieuDep')
            ->add('commentaire','textarea')
            //->add('status')
            //->add('dateIns')
            ->add('fumeur','choice', 
                    array('choices' => array('1' => 'Yes', '0' => 'No'),
                    'expanded' => false, 'multiple' => false , 'empty_value' => 'Smoking'  ))

            ->add('musique','choice', 
                    array('choices' => array('1' => 'Yes', '0' => 'No'),
                    'expanded' => false, 'multiple' => false  , 'empty_value' => 'Music' ))
            ->add('discussion','choice', 
                    array('choices' => array('1' => 'Yes', '0' => 'No'),
                    'expanded' => false, 'multiple' => false , 'empty_value' => 'Discussion'  ))
            //->add('idUtilisateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\CovoiturageBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_covoituragebundle_annonce';
    }
}
