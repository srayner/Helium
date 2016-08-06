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
        if ($request->isPost()) { 
            $post = array_merge_recursive(
                    $request->getPost()->toArray(),
                    $request->getFiles()->toArray()
            );
            $form->setData($post);
            if ($form->isValid()) {
                $data = $form->getData();
                $this->setFileNames($data);
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
    
    private function setFileNames($data)
    {
        unset($data['submit']);
        foreach($data['image-file'] as $key => $file)
        {
            rename($file['tmp_name'], $this->dir . DIRECTORY_SEPARATOR . $file['name']);
        }
    }
}


