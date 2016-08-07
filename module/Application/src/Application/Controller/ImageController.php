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
}


