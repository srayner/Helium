<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GalleryController extends AbstractActionController
{
    protected $service;
    
    public function __construct($service)
    {
        $this->service = $service;
    }
    
    public function indexAction()
    {
        $galleries = $this->service->findAll();
        return new ViewModel(array(
            'galleries' => $galleries
        ));
    }
    
    public function addAction()
    {
        $form = $this->service->getForm();
        
        // Check if the request is a POST.
        $request = $this->getRequest();
        if ($request->isPost())
        {
            // Check if data is valid.
            $data = (array) $request->getPost();
            $gallery = $this->service->getEntity('Gallery');
            $form->bind($gallery);
            $form->setData($data);
            if ($form->isValid())
            {
          	// Persist gallery.
            	$this->service->persist($gallery);
                
            	// Redirect to list of galleries
		return $this->redirectTo('index');
            }
        } 
        
        // If not a POST request, or invalid data, then just render the form.
        return new ViewModel(array(
            'form'   => $form
        ));
    }
    
    public function editAction()
    {
        
    }
    
    public function deleteAction()
    {
        
    }
    
    private function redirectTo($action)
    {
        return $this->redirect()->toRoute('helium/default', array(
            'controller' => 'Gallery',
            'action' => $action
        ));
    }
}


