<?php

namespace Application\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ImageControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sl = $serviceLocator->getServiceLocator();
        $service = $sl->get('ImageService');
        $dir = $sl->get('config')['images']['location'];
        $controller = new ImageController($service, $dir);
        return $controller;
    }   
}