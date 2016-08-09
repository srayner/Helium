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
        $galleryId = (int)$this->params()->fromRoute('id');
        
        $form = $this->service->getForm();
        
        $request = $this->getRequest();
        if ($request->isPost()) { 
            $post = array_merge_recursive(
                    $request->getPost()->toArray(),
                    $request->getFiles()->toArray()
            );
            $form->setData($post);
            if ($form->isValid()) {
                $data = $form->getData();
                //echo '<pre>';
                //print_r($data);
                //echo '</pre>';
                //die;
                $this->service->persist($data, $galleryId);
                return $this->redirect()->toRoute('helium/default', array(
                    'controller' => 'image',
                    'action' => 'upload'
                ));
            }
        } 

        return array(
            'form' => $form,
            'galleryId' => $galleryId
        );
    }
    
    public function serveAction()
    {
        $id = (int)$this->params()->fromRoute('id');
        $photo = $this->service->find($id);
        header("Content-type: image/jpeg");
        include_once($photo->getFilename());
    }
}


