<?php

namespace Application\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class GalleryFormFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        $form = new GalleryForm();
        $form->setInputFilter(new GalleryFilter());
        $form->setHydrator(new DoctrineHydrator($entityManager));
        return $form;
    }   
}