<?php

namespace Application\Service;

class GalleryService
{
    protected $entityManager;
    protected $form;
    protected $serviceLocator;

    public function __construct($entityManager, $form, $serviceLocator)
    {
        $this->entityManager = $entityManager;
        $this->form = $form;
        $this->serviceLocator = $serviceLocator;
    }
    
    public function getForm()
    {
        return $this->form;
    }
    
    public function getEntity($entityName)
    {
        return $this->serviceLocator->get($entityName);
    }
    
    public function find($id)
    {
        return $this->entityManager->getRepository('Application\Entity\Gallery')->find($id);
    }
    
    public function findAll()
    {
        return $this->entityManager->getRepository('Application\Entity\Gallery')->findAll();
    }
    
    public function persist($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();  
    }
}

