<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ImageController extends AbstractActionController
{
    protected $service;
    protected $dir;
    
    public function __construct($service, $dir)
    {
        $this->service = $service;
        $this->dir = $dir;
    }
    
    public function uploadAction()
    {
        $form = $this->service->getForm();
        
        $request = $this->getRequest();
        if($request->isPost()) { 
            $files =  $request->getFiles()->toArray();
          //  die(var_dump($files));
            $httpadapter = new \Zend\File\Transfer\Adapter\Http(); 
            $filesize  = new \Zend\Validator\File\Size(array('min' => 1000 )); //1KB  
            $extension = new \Zend\Validator\File\Extension(array('extension' => array('jpg')));
            $httpadapter->setValidators(array($extension, $filesize), $files['file']['name']);
            if($httpadapter->isValid()) {
                
                $httpadapter->setDestination('data/private/');
                if($httpadapter->receive($files['file']['name'])) {
                    die('ok');
                    $newfile = $httpadapter->getFileName(); 
                    die(var_dump($newfile));
                }
                die(var_dump($httpadapter->getMessages()));
            }
        } 

        return array(
            'form' => $form
        );
    }
}


