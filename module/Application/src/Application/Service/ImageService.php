<?php

namespace Application\Service;

class ImageService
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
    
    public function find($id)
    {
        return $this->entityManager->getRepository('Application\Entity\Photograph')->find($id);
    }
    
    public function persist($data, $galleryId)
    {
        
        foreach($data['image-file'] as $key => $file)
        {
            $gallery = $this->entityManager->getReference('Application\Entity\Gallery', $galleryId);
            $imagesize = getimagesize($file['tmp_name']);
            $exif = exif_read_data($file['tmp_name'], 'EXIF');
            
            $photograph = $this->serviceLocator->get('Photograph');
            $photograph->setFilename($file['tmp_name'])
                       ->setOriginalFilename($file['name'])
                       ->setType($file['type'])
                       ->setSize($file['size'])
                       ->setWidth($imagesize[0])
                       ->setHeight($imagesize[1]);
            if (array_key_exists('Make', $exif)) {
                $photograph->setMake($exif['Make']);
            }
            if (array_key_exists('Model', $exif)) {
                $photograph->setModel($exif['Model']);
            }
            
            $gallery->addPhotograph($photograph);
            $this->entityManager->persist($photograph);
        }
        $this->entityManager->flush();
    }
}