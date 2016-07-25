<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GalleryController extends AbstractActionController
{
    protected $em;
    protected $form;
    
    public function __construct($em, $form)
    {
        $this->em = $em;
        $this->form=$form;
    }
    
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function addAction()
    {

    }
    
    public function editAction()
    {
        
    }
    
    public function deleteAction()
    {
        
    }
}


