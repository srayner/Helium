<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ImageController extends AbstractActionController
{
    protected $service;
    
    public function __construct($service)
    {
        $this->service = $service;
    }
    
    public function uploadAction()
    {
        $form = $this->service->getForm();
        return array(
            'form' => $form
        );
    }
}


