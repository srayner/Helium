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
                $this->service->persist($data, 1);
                return $this->redirect()->toRoute('helium/default', array(
                    'controller' => 'image',
                    'action' => 'upload'
                ));
            }
        } 

        return array(
            'form' => $form
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


